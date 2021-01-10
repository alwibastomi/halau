<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Core extends CI_Controller {

	protected $isLogin = false;
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url','form');
		$this->load->library(array('form_validation'));
		$this->load->model(array('user_model'));

		$this->isLogin = $this->session->userdata('isLogin');
	}

	public function renderpage($view, $datas = array())
	{

		$data['nama'] = $this->session->userdata('namanama');
		$data['email'] = $this->session->userdata('email');
		$data['level'] = $this->session->userdata('level');
		$this->load->view('template/header');
		$this->load->view($view, $datas);
		$this->load->view('template/footer');
	}
	public function renderlog($view,$data = array()){
		$this->load->view('template/auth_header',$data);
		$this->load->view($view,$data);
		$this->load->view('template/auth_footer');
	}

	public function renderadm($view,$data = array()){
		$this->load->view('templates/header',$data);
		$this->load->view('templates/sidebar');
		$this->load->view('templates/topbar');
		$this->load->view($view,$data);
		$this->load->view('templates/footer');
	}
	
}