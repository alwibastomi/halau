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
		$level = $this->session->userdata('level');
		if(!$this->isLogin || $level != 1){
			redirect('Auth');
			die();
		}
		$data['alert'] = '';
		$data['title'] = 'Artikel';
		$data['allArtikel'] = $this->m_artikel->getAllArtikel();
		$this->renderadm('admin/artikel', $data);
	}

	public function tambah(){
		$level = $this->session->userdata('level');
		if(!$this->isLogin || $level != 1){
			redirect('Auth');
			die();
		}

		$this->form_validation->set_rules('header', 'header', 'required');
		$this->form_validation->set_rules('isi', 'isi', 'required');

		

		$data['edit'] = false;

		if($this->form_validation->run() == false){
			$data['alert'] = '';
		}else{
			$data = array(
				'header' => $this->input->post('header'),
				'isi' => $this->input->post('isi'),
				'pakai' => $this->input->post('pakai')
			);

			$data1 = array(
				'keterangan' => '<b>'.$this->session->userdata('nama').' </b>Telah Menambah Artikel <b>'.$this->input->post('header').'</b>',
				'date_time' => date('Y-m-d H:i:s')
			);

			if ($this->input->post('pakai') == "1") {
				$this->user_model->editya();
			}

			$this->user_model->addData('activity_log', $data1);

			$this->user_model->addData('artikel', $data);
			$data['alert'] = 'sukses';
			$this->session->set_flashdata('pesan','pesan');
		}
		$data['title'] = 'Tambah Artikel';
		$this->renderadm('artikel/tambah',$data);
	}

	public function edit($id){
		if(!$this->isLogin){
			redirect('Auth');
			die();
		}

		$this->form_validation->set_rules('header', 'header', 'required');
		$this->form_validation->set_rules('isi', 'isi', 'required');

		$data['artikel'] = $this->user_model->getData('artikel', $id);
		$data['edit'] = true;

		if($this->form_validation->run() == false){
			$data['alert'] = '';
		}else{
			$id = $this->uri->segment(3);

			$where = array('id' => $id);

			$data = array(
				'header' => $this->input->post('header'),
				'isi' => $this->input->post('isi'),
				'pakai' => $this->input->post('pakai')
			);

			$data1 = array(
				'keterangan' => '<b>'.$this->session->userdata('nama').' </b>Telah Mengubah Artikel pada ID <b>'.$id.'</b>',
				'date_time' => date('Y-m-d H:i:s')
			);

			if ($this->input->post('pakai') == "1") {
				$this->user_model->editya();
			}
			$this->user_model->addData('activity_log', $data1);

			$this->user_model->editData('artikel', $where, $data);
			$data['alert'] = 'sukses_edit';
			$this->session->set_flashdata('edit_pesan','pesan');
		}
		$data['title'] = 'Edit Artikel';
		$this->renderadm('artikel/tambah',$data);
	}

	public function hapus($id){
		$level = $this->session->userdata('level');
		if(!$this->isLogin || $level != 1){
			redirect('Auth');
			die();
		}
		$ha = $this->user_model->getData('artikel', $id);
		$he = $ha->header;

		$data1 = array(
			'keterangan' => '<b>'.$this->session->userdata('nama').' </b>Telah Menghapus Artiker dengan header <b>'.$he.'</b>',
			'date_time' => date('Y-m-d H:i:s')
		);

		$this->user_model->addData('activity_log', $data1);

		$this->db->delete("artikel", array('id' => $id));
		$data['alert'] = 'sukses';
		$this->session->set_flashdata('hapus_pesan','pesan');
		$this->renderadm('admin/artikel', $data);
	}

	public function artikel_datatable()
	{
		$level = $this->session->userdata('level');
		if(!$this->isLogin || $level != 1){
			redirect('Auth');
			die();
		}
		$artikel = $this->m_artikel->datatableArtikel();
		echo json_encode($artikel);
		die();
	}
}
