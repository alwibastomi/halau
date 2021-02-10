<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends Core {
	private $level;
	function __construct()
	{
		parent::__construct();
		$this->level = $this->session->userdata('level');
	}

	public function index()
	{
		$level = $this->session->userdata('level');
		if(!$this->isLogin || $level != 1){
			redirect('Auth');
			die();
		}
		$data['title'] = 'Menu & Href';
		$data['allMenu'] = $this->m_menu->getAllMenu();
		$this->renderadm('admin/menu', $data);
	}
	public function tambah(){
		$level = $this->session->userdata('level');
		if(!$this->isLogin || $level != 1){
			redirect('Auth');
			die();
		}

		$this->form_validation->set_rules('menu', 'Menu', 'required');
		$this->form_validation->set_rules('href', 'Href', 'required');
		if($this->form_validation->run() == false){
			$data['alert'] = '';
		}else{
			$data = array(
				'menu' => $this->input->post('menu'),
				'href' => $this->input->post('href'),
				'header' => $this->input->post('header'),
				'isi' => $this->input->post('isi'),
				'pakai' => $this->input->post('pakai')
			);

			$data1 = array(
				'keterangan' => '<b>'.$this->session->userdata('nama').' </b>Telah Menambah Menu <b>'.$this->input->post('header').'</b>',
				'date_time' => date('Y-m-d H:i:s')
			);

			$this->user_model->addData('activity_log', $data1);

			$this->user_model->addData('menu', $data);
			$data['alert'] = 'sukses';
			$this->session->set_flashdata('pesan','pesan');
		}
		$data['title'] = 'Tambah Menu';
		$this->renderadm('menu/tambah',$data);
	}

	public function edit($id){
		$level = $this->session->userdata('level');
		if(!$this->isLogin || $level != 1){
			redirect('Auth');
			die();
		}

		$this->form_validation->set_rules('menu', 'menu', 'required');
		$this->form_validation->set_rules('href', 'href', 'required');

		$data['menu'] = $this->user_model->getData('menu', $id);
		$data['title'] = 'Menu Edit';

		if($this->form_validation->run() == false){
			$data['alert'] = '';
		}else{
			$id = $this->uri->segment(3);
			$where = array('id' => $id);

			$data = array(
				'menu' => $this->input->post('menu'),
				'href' => $this->input->post('href'),
				'header' => $this->input->post('header'),
				'isi' => $this->input->post('isi'),
				'pakai' => $this->input->post('pakai')
			);

			$data1 = array(
				'keterangan' => '<b>'.$this->session->userdata('nama').' </b>Telah Mengubah Menu pada ID <b>'.$id.'</b>',
				'date_time' => date('Y-m-d H:i:s')
			);

			$this->user_model->addData('activity_log', $data1);

			$this->user_model->editData('menu', $where, $data);
			$data['alert'] = 'sukses';

			$this->session->set_flashdata('edit_pesan','pesan');
		}
		$this->renderadm('menu/edit', $data);
	}

	public function menu_datatable()
	{
		$level = $this->session->userdata('level');
		if(!$this->isLogin || $level != 1){
			redirect('Auth');
			die();
		}
		$menu = $this->m_menu->datatableMenu();
		echo json_encode($menu);
		die();
	}
}
