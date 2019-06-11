<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PC_Main extends CI_Controller {

	public function index()
	{
		$latest = $this->PC_Stiker->get(NULL,5,NULL);

		$data = [
			'pageContent' => 'home',
			'home' => 'active',
			'currentTitle' => 'PrintCut.Co',
			'latestStiker' => $latest->result()
		];
		$this->load->view('printcut/layout/master',$data);
	}

	public function about()
	{
		$data = [
			'pageContent' => 'about',
			'currentTitle' => 'PrintCut.Co - Cara Pemesanan',
			'about' => 'active',
		];
		$this->load->view('printcut/layout/master',$data);
	}

	public function contact()
	{
		$data = [
			'pageContent' => 'contact',
			'currentTitle' => 'PrintCut.Co - Kontak',
			'kontak' => 'active',
		];
		$this->load->view('printcut/layout/master',$data);
	}

	public function katalogGrid()
	{
		$page = $this->input->get('page');
		if($page == NULL || $page <= 0){
			$page = 1;
		}
		$limit = 9;
		$offset = ($page-1)*$limit;
		$listKatalog = $this->PC_Stiker->get(NULL,$limit,$offset);

		$totalRow = $this->PC_Stiker->get();
		$totalRow = $totalRow->num_rows();

		//Make Pagination
		$totalPage = ceil($totalRow/$limit);

		$data = [
			'pageContent' => 'katalog-grid',
			'katalog' => 'active',
			'currentTitle' => 'PrintCut.Co - List Katalog',
			'listKatalog' => $listKatalog,
			'totalRow' => $totalRow,
			'totalPage' => $totalPage,
			'currentPage' => $page
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
			'katalog' => 'active',
			'currentTitle' => 'PrintCut.Co - '.$stiker[0]->nama,
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