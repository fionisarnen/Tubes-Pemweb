<?php

class Deliverynow extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}

	public function index(){
        $data['judul'] = 'jnt';
        $this->load->view('deliverynow');
	}

	public function delivery(){
		$data['judul'] = 'Delivery Now';
		$this->load->view('delivery');
	} 
}

?>