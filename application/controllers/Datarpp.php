<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Datarpp extends Core {
	private $level;
	function __construct()
	{
		parent::__construct();
		$this->level = $this->session->userdata('level');
		$this->load->model('m_rpp');
	}

	public function index()
	{
		if(!$this->isLogin){
			redirect('Auth');
			die();
		}
		$data['alert'] = '';
		$data['title'] = 'Data Rpp';
		$data['allDatarpp'] = $this->m_rpp->getAllDatarpp();
		$this->renderadm('admin/rpp', $data);
	}
	public function tambah(){
		$data['title'] = 'Tambah Rpp';
		$this->renderadm('rpp/tambah',$data);

	}


	public function datarpp_datatable()
	{
		$datarpp = $this->m_rpp->datatableDatarpp();
		echo json_encode($datarpp);
		die();
	}


}	