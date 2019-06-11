<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class JW_Main extends CI_Controller {

	public function index()
	{
		$data = [
			'pageContent' => 'home',
		];
		$this->load->view('jasaweb/layout/master',$data);
	}

}