<?php

class Home extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('home_m');
		$this->load->library('form_validation');
	}

	public function index(){
		$data['judul'] = 'jnt';
		$this->load->view('navbar');
		$this->load->view('beranda');
	}

	public function delivery(){
		$data['judul'] = 'Delivery Now';
		$this->load->view('delivery');
	}

	public function tariffcheck(){
		$data['judul'] = 'Tariff Check';
		$this->load->view('navbar');
		$this->load->view('tariffcheck');
	}

	public function beranda(){
		$data['judul'] = 'Beranda';
		$this->load->view('navbar');
		// $this->load->view('footer');
		$this->load->view('beranda');
	}
	public function cektarif(){
		$data['judul'] = 'Tariff Check';
		$this->load->view('navbar');
		$this->load->view('cektarif');
	}

	public function order(){
		$data['Nama_Pengirim'] = $this->home_m->get_namapengirim();
		$data['Nama_Penerima'] = $this->home_m->get_namapenerima();
		$data['Barang'] = $this->home_m->get_barang();
		$data['judul'] = 'Order Success';
		$this->load->view('ordersuccess', $data);
		// var_dump($data['Nama_Pengirim']);
	}

	public function aboutus(){
		$data['judul'] = 'About Us';
		$this->load->view('navbar');
		$this->load->view('contactus');
	}

	public function career(){
		$data['judul'] = 'About Us';
		$this->load->view('navbar');
		$this->load->view('career');
	}
}

?>