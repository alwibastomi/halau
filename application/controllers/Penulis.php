<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penulis extends Core {
	private $level;
	function __construct()
	{
		parent::__construct();
		$this->level = $this->session->userdata('level');
	}

	public function index()
	{
		// if(!$this->isLogin){
		// 	redirect('Auth');
		// 	die();
		// }
		$data['title'] = 'Penulis';
		$data['allPenulis'] = $this->m_penulis->getAllPenulis();
		$this->renderadm('admin/penulis', $data);
	}

	public function tambah(){
		$data['title'] = 'Tambah Data Penulis';
		$this->renderadm('penulis/tambah', $data);
	}

	public function penulis_datatable()
	{
		$penulis = $this->m_penulis->datatablePenulis();
		echo json_encode($penulis);
		die();
	}
}
