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
		if(!$this->isLogin){
			redirect('Auth');
			die();
		}
		$data['title'] = 'Menu & Href';
		$data['allMenu'] = $this->m_menu->getAllMenu();
		$this->renderadm('admin/menu', $data);
	}

	public function edit($id){
		if(!$this->isLogin){
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
				'href' => $this->input->post('href')
			);

			$data1 = array(
				'keterangan' => '<b>'.$this->session->userdata('nama').' </b>Telah Mengubah Menu pada ID <b>'.$id.'</b>',
				'date_time' => date('Y-m-d H:i:s')
			);

			$this->user_model->addData('activity_log', $data1);

			$this->user_model->editData('menu', $where, $data);
			$data['alert'] = 'sukses';
		}
		$this->renderadm('menu/edit', $data);
	}

	public function menu_datatable()
	{
		$menu = $this->m_menu->datatableMenu();
		echo json_encode($menu);
		die();
	}
}
