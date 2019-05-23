<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PC_Main extends CI_Controller {

	public function index()
	{
		$data = [
			'pageContent' => 'home',
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
		$data = [
			'pageContent' => 'katalog-grid',
		];
		$this->load->view('printcut/layout/master',$data);
	}

	public function katalogSingle()
	{
		$data = [
			'pageContent' => 'katalog-single',
		];
		$this->load->view('printcut/layout/master',$data);
	}

}