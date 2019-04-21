<?php

class Deliverynow extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('deliverynow_m');
		$this->load->library('form_validation');
	}

	public function index(){
		$data['judul'] = 'jnt';
		$this->load->view('navbar');
        $this->load->view('deliverynow');
	}

	public function delivery(){
		$data['judul'] = 'Delivery Now';
		$this->load->view('delivery');
	} 

	public function kirim(){
		$this->deliverynow_m->insert_barang();
		$this->deliverynow_m->insert_penerima();
		$this->deliverynow_m->insert_pengirim();
		redirect('home/order');
	}
}

?>