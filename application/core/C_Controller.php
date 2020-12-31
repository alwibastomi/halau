<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Core extends CI_Controller {

	protected $isLogin = false;
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url','form');
		$this->load->library(array('form_validation'));
		$this->load->model(array(''));

		$this->isLogin = $this->session->userdata('isLogin');
	}

	public function renderpage($view, $datas = array())
	{
		$this->load->view('template/header');
		$this->load->view($view, $datas);
		$this->load->view('template/footer');
	}
}