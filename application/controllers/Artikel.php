<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel extends Core {
	private $level;
	function __construct()
	{
		parent::__construct();
		$this->level = $this->session->userdata('level');
		$this->load->model('m_artikel');
	}

	public function index()
	{
		// if(!$this->isLogin){
		// 	redirect('Auth');
		// 	die();
		// }
		$data['title'] = 'Artikel';
		$data['allArtikel'] = $this->m_artikel->getAllArtikel();
		$this->renderadm('admin/artikel', $data);
	}

	public function tambah(){
		$data['title'] = 'Tambah Data';
		$this->renderadm('artikel/tambah',$data);
	}
	public function edit(){
		$data['title'] = 'Edit';
		$this->renderadm('artikel/edit',$data);
	}

	public function artikel_datatable()
	{
		$artikel = $this->m_artikel->datatableArtikel();
		echo json_encode($artikel);
		die();
	}
}
