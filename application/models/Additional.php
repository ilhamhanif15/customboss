<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Additional extends CI_Model {

	public function cekInputPost($arrCek)
	{
		$status = TRUE;
		$numFalse = NULL;
		$postFalse = NULL;
		for ($i=0; $i < sizeof($arrCek); $i++) { 
			if($this->input->post($arrCek[$i]) == NULL){
				$status = FALSE;
				$numFalse = $i;
				$postFalse = $arrCek[$i];
				$i = sizeof($arrCek);
			}
		}
		$dataReturn = [
			'status' => $status,
			'numFalse' => $numFalse,
			'postFalse' => $postFalse
		];
		return $dataReturn;
	}

	/*------------------------ENCRYPTION FOR SESSION-------------------*/
	public function encryptSess($plaintext,$humanName)
	{
		$cipher = "aes-128-gcm";
		$key = openssl_random_pseudo_bytes(4, $cstrong);
		if (in_array($cipher, openssl_get_cipher_methods()))
		{
		    $ivlen = openssl_cipher_iv_length($cipher);
		    $iv = openssl_random_pseudo_bytes($ivlen);
		    $ciphertext = openssl_encrypt($plaintext, $cipher, $key, $options=0, $iv, $tag);
		    $data = [
		    	$humanName.'_key' => $key,
		    	$humanName.'_iv' => $iv,
		    	$humanName.'_tag' => $tag
		    ];
		    $this->session->set_userdata($data);
		    return $ciphertext;
		}
	}

	public function decryptSess($ciphertext,$humanName)
	{
		$cipher = "aes-128-gcm";
		$key = $this->session->userdata($humanName.'_key');
		$iv = $this->session->userdata($humanName.'_iv');
		$tag = $this->session->userdata($humanName.'_tag');
		$original_plaintext = openssl_decrypt($ciphertext, $cipher, $key, $options=0, $iv, $tag);
		return $original_plaintext;
	}
	/*-----------------------END OF ENCRYPTION-------------------------*/


	/*-------------------------ENCRYPTION FOR DATABASE-----------------------*/
	public function encryptIt($q)
	{
		$method = 'AES-128-ECB';
		$password = 'adEfbon80nZZsfg56';
	    $string = openssl_encrypt($q, $method, $password);
	    /*echo $string.'<br/>';
	    echo base64_encode($string).'<br/>';*/
	    return $string;
	}

	public function decryptIt($q)
	{
	    $method = 'AES-128-ECB';
		$password = 'adEfbon80nZZsfg56';
		$ret = openssl_decrypt($q, $method, $password);
		/*echo $ret.'<br/>';*/
		return $ret;
	}
	/*-------------------------END OF ENCRYPTION-----------------------------*/

	public function uploads($file,$fname,$id,$thumbnail = False)
	{
        $this->load->library('upload');

		$path = $file[$fname]['name'];
		if($thumbnail == True){
			$newName = "Gbr_Stiker_".$id.".".pathinfo($path, PATHINFO_EXTENSION);
		}else{
			$newName = "Gbr_Stiker_".$id."_".$fname.".".pathinfo($path, PATHINFO_EXTENSION);
		}

		$config['upload_path']          = './assetsPC/uploads/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg|pdf';
        $config['max_size']             = 5120;
        $config['file_name']			= $newName;

        $this->upload->initialize($config);

        if ( ! $this->upload->do_upload($fname))
        {
            $error = array('error' => $this->upload->display_errors());
            $this->session->set_flashdata('error_msg','
				<div class="alert alert-danger" role="alert">
				  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
				  <span class="sr-only">Error:</span>
				  Terdapat Kesalahan saat melakukan upload, silahkan ulangi kembali.
				</div>
			');
			return False;
        }
        else
        {
			$data = array('upload_data' => $this->upload->data());
			$this->session->set_flashdata('success_msg','
				<div class="alert alert-success" role="alert">
				  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
				  <span class="sr-only">Success:</span>
				  Berhasil Melakukan Upload
				</div>
			');
			if($thumbnail == True){
				$dataCond = ['id'=>$id];
				$dataSet = ['gambar'=>$newName];
				if(!$this->PC_Stiker->update($dataCond,$dataSet)){
					return False;
				}
			}
			return $data;
        }
	}

}