<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Main extends CI_Controller {

	private $listActive;

	function __construct()
    {
		parent::__construct();
		$this->listActive = [
			'home' => '',
			'katalog' => '',
			'order' => ''
		];
    }

	public function index()
	{
		//activate class sidebar
		$sa = $this->listActive;
		$sa['home'] = 'active';

		$data = [
			'pageContent' => 'home',
			'sidebar_active' => $sa
		];
		$this->load->view('admin/layout/master',$data);
	}

	public function login()
	{
		$this->load->view('admin/content/login');
	}

	public function katalog_list()
	{
		//activate class sidebar
		$sa = $this->listActive;
		$sa['katalog'] = 'active';

		$listKatalog = $this->PC_Stiker->get();

		$data = [
			'pageContent' => 'katalog_list',
			'listKatalog' => $listKatalog,
			'sidebar_active' => $sa
		];
		$this->load->view('admin/layout/master',$data);
	}

	public function katalog_tambah_view()
	{
		//activate class sidebar
		$sa = $this->listActive;
		$sa['katalog'] = 'active';

		$data = [
			'pageContent' => 'katalog_tambah',
			'sidebar_active' => $sa
		];
		$this->load->view('admin/layout/master',$data);
	}

	//Proses
	public function katalog_tambah()
	{
		$this->db->trans_begin();
		$listInp = [
			"nama",
			"harga",
			"ukuran",
			"jenis",
			"warna",
			"deskripsi",
			"link_os",
		];
		$cek = $this->Additional->cekInputPost($listInp);
		
		/*if (!$cek['status']){
			return redirect($_SERVER['HTTP_REFERER']) or exit();
		};*/

		$dataInsert = [];
		foreach ($listInp as $x) {
			$dataInsert[$x] = $this->input->post($x);
		};
		
		$insert = $this->PC_Stiker->insert($dataInsert);
		if ($insert != NULL){
			$id = $insert;
		}else{
			print_r('expression');
			/*return redirect($_SERVER['HTTP_REFERER']) or exit();*/
		}

		/*-----------------Upload Gambar-----------------*/

		$dataUpload = $this->Additional->uploads($_FILES,'gambar',$id,True);
		if($dataUpload == False){
			$this->db->trans_rollback();
			return redirect($_SERVER['HTTP_REFERER']) or exit();
		}

		$high_name = '';
		for ($i=1; $i <= 3; $i++) {
			$nm = 'highlight_'.$i;
			if( !empty($_FILES[$nm]['name']) ){
				$tempUpload = $this->Additional->uploads($_FILES,$nm,$id,False);
				if($tempUpload == False){
					$this->db->trans_rollback();
					return redirect($_SERVER['HTTP_REFERER']) or exit();
				}
				$high_name .= $tempUpload['upload_data']['file_name'].';';
			}
		}

		$dataCond = ['id'=>$id];
		$dataSet = ['highlight'=>$high_name];
		if(!$this->PC_Stiker->update($dataCond,$dataSet)){
			$this->db->trans_rollback();
			return redirect($_SERVER['HTTP_REFERER']) or exit();
		}

		$this->db->trans_commit();
		return redirect('admin/katalog/list') or exit();

        /*--------------------------------------------*/

	}

	public function order_list()
	{
		//activate class sidebar
		$sa = $this->listActive;
		$sa['order'] = 'active';
		
		$order_list = $this->PC_OrderUp->get();

		$data = [
			'pageContent' => 'order_list',
			'listOrder' => $order_list,
			'sidebar_active' => $sa
		];
		$this->load->view('admin/layout/master',$data);
	}



}