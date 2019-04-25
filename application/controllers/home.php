<?php

class Home extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('home_m');
		$this->load->library('form_validation');
		$this->load->helper('url');
	}

	public function index(){
		$data['judul'] = 'jnt';
		$this->load->view('navbar');
		$this->load->view('beranda');
	}

	public function delivery(){
		$data['judul'] = 'Delivery Now';
		$this->load->view('navbar');
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
		$data['join'] = $this->home_m->getOrder();
		$data['judul'] = 'Order Success';
		$this->load->view('navbar');
		$this->load->view('ordersuccess', $data);
	}

	public function aboutus(){
		$data['judul'] = 'About Us';
		$this->load->view('navbar');
		$this->load->view('contactus');
	}

	public function commitment(){
		$data['judul'] = 'Commitment';
		$this->load->view('navbar');
		$this->load->view('commitment');
	}

	public function career(){
		$data['judul'] = 'About Us';
		$data['karir'] = $this->home_m->getAllKarir();
		$this->load->view('navbar');
		$this->load->view('career', $data);
	}

	public function hapus($id)
	{
		$this->load->model('home_m');
		$this->home_m->hapus_data($id);
		$this->load->view('navbar');
		redirect(site_url('home/career'));
	}

	public function ubah($id){
	  $data['judul'] = 'Career';
	  $where = array('id' => $id);
	  $data['karir'] = $this->home_m->ubahKarir($where,'karir')->result();
	  $this->load->view('navbar');
	  $this->load->view('edit_data',$data);
	}
	
	function update(){
		$this->load->view('navbar');
		$id = $this->input->post('id');
		$position = $this->input->post('position');
		$city = $this->input->post('city');
		$post_date = $this->input->post('post_date');
	 
		$data = array(
			'position' => $position,
			'city' => $city,
			'post_date' => $post_date
		);
	 
		$where = array(
			'id' => $id
		);
	 
		$this->home_m->update_data($where,$data,'karir');
		redirect('home/career');
	}
	
}

?>