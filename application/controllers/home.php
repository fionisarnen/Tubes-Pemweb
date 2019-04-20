<?php

class Home extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}

	public function index(){
		$data['judul'] = 'jnt';
		$this->load->view('beranda');
	}

	public function delivery(){
		$data['judul'] = 'Delivery Now';
		$this->load->view('delivery');
	} 
}

?>