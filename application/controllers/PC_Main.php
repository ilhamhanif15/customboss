<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PC_Main extends CI_Controller {

	public function index()
	{
		$latest = $this->PC_Stiker->get(NULL,5,NULL);

		$data = [
			'pageContent' => 'home',
			'latestStiker' => $latest->result()
		];
		$this->load->view('printcut/layout/master',$data);
	}

	public function about()
	{
		$data = [
			'pageContent' => 'about',
		];
		$this->load->view('printcut/layout/master',$data);
	}

	public function contact()
	{
		$data = [
			'pageContent' => 'contact',
		];
		$this->load->view('printcut/layout/master',$data);
	}

	public function katalogGrid()
	{
		$listKatalog = $this->PC_Stiker->get();

		$data = [
			'pageContent' => 'katalog-grid',
			'listKatalog' => $listKatalog
		];
		$this->load->view('printcut/layout/master',$data);
	}

	public function katalogSingle($enc_id)
	{
		$idKat = decrypt_url($enc_id);
		$dataCond = ['id' => $idKat];
		$stiker = $this->PC_Stiker->get($dataCond);
		
		if($stiker->num_rows() == 0){
			$stiker = NULL;
		}else{
			$stiker = $stiker->result();
		}

		$data = [
			'pageContent' => 'katalog-single',
			'stiker' => $stiker[0],
		];
		$this->load->view('printcut/layout/master',$data);
	}

	public function order_desain()
	{
		$this->db->trans_begin();
		$listPost = [
			"file",
			"nama",
			"kontak",
			"catatan",
		];

		$dataInsert = [];
		foreach ($listPost as $x) {
			$dataInsert[$x] = $this->input->post($x);
		};

		//Insert to DB
		$insert = $this->PC_OrderUp->insert($dataInsert);
		if ($insert != NULL){
			$id = $insert;
		}else{
			$this->db->trans_rollback();
			return redirect($_SERVER['HTTP_REFERER']) or exit();
		}

		//Upload File
		$dataUpload = $this->PC_OrderUp->uploads($_FILES,'file',$id);
		if($dataUpload == False){
			$this->db->trans_rollback();
			return redirect($_SERVER['HTTP_REFERER']) or exit();
		}

		$this->db->trans_commit();
		$this->session->set_flashdata('success_msg_upload',True);
		return redirect('printcut') or exit();
	}

}