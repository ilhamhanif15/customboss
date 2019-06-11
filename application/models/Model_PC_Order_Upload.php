<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_PC_Order_Upload extends CI_Model 
{
	private $created_at;
	private $table;

	function __construct()
    {
		parent::__construct();
        $this->created_at = date("Y-m-d H:i:s");
		$this->table = 'PC_Order_Upload';
    }

	public function insert($data)
	{
		$data2 = [
			'created_at'=>$this->created_at
		];
		$data = array_merge($data,$data2);

		if ($this->db->insert($this->table, $data))
		{
			$insert_id = $this->db->insert_id();
		}
		else
		{
			$insert_id = NULL;
		}
		return $insert_id;
	}

	public function get($dataCondition = NULL,$limit = NULL,$offset = NULL,$order_by = 'DESC')
	{
		if($offset != NULL && $limit != NULL){
			$this->db->limit($limit,$offset);
		}
		else if($limit != NULL){
			$this->db->limit($limit);
		}

		if($dataCondition != NULL){
			$this->db->where($dataCondition);
		}
		$this->db->order_by('id', $order_by);
		$res = $this->db->get($this->table);
		return $res;
	}

	public function update($dataCondition,$dataSet)
	{
		$this->db->where($dataCondition);
		if($this->db->update($this->table, $dataSet)){
			return true;
		}else{
			return false;
		}
	}

	public function uploads($file,$fname,$id)
	{
        $this->load->library('upload');

		$path = $file[$fname]['name'];
		$newName = "Order_Desain_".$id.".".pathinfo($path, PATHINFO_EXTENSION);

		$config['upload_path']          = './assetsPC/uploads/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $config['max_size']             = 5120;
        $config['overwrite']			= True;
        $config['encrypt_name']			= True;

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
			
			$dataCond = ['id'=>$id];
			$dataSet = ['file'=>$data['upload_data']['file_name']];
			if(!$this->update($dataCond,$dataSet)){
				return False;
			}

			return $data;
        }
	}
}