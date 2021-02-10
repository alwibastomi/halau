<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Matpel extends Core {
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
		$data['title'] = 'Matpel';
		$data['allMatpel'] = $this->m_matpel->getAllMatpel();
		$this->renderadm('admin/matpel', $data);
	}
	public function tambah(){
		$level = $this->session->userdata('level');
		if(!$this->isLogin || $level != 1){
			redirect('Auth');
			die();
		}

		$this->form_validation->set_rules('nama_matpel', 'Nama_matpel', 'required');
		
		if($this->form_validation->run() == false){
			$data['alert'] = '';
		}else{
			$data = array(
				'nama_matpel' => $this->input->post('nama_matpel'),
			);

			$data1 = array(
				'keterangan' => '<b>'.$this->session->userdata('nama').' </b>Telah Menambah Matpel <b>'.$this->input->post('header').'</b>',
				'date_time' => date('Y-m-d H:i:s')
			);

			$this->user_model->addData('activity_log', $data1);

			$this->user_model->addData('matpel', $data);
			$data['alert'] = 'sukses';
			$this->session->set_flashdata('pesan','pesan');
		}
		$data['title'] = 'Tambah Matpel';
		$this->renderadm('matpel/tambah',$data);
		
	}

	public function edit($id){
		$level = $this->session->userdata('level');
		if(!$this->isLogin || $level != 1){
			redirect('Auth');
			die();
		}

		$this->form_validation->set_rules('nama_matpel', 'menu', 'required');
		

		$data['matpel'] = $this->user_model->getData('matpel', $id);
		$data['title'] = 'Matpel Edit';

		if($this->form_validation->run() == false){
			$data['alert'] = '';
		}else{
			$id = $this->uri->segment(3);
			$where = array('id' => $id);

			$data = array(
				'nama_matpel' => $this->input->post('nama_matpel'),
			);

			$data1 = array(
				'keterangan' => '<b>'.$this->session->userdata('nama').' </b>Telah Mengubah Menu pada ID <b>'.$id.'</b>',
				'date_time' => date('Y-m-d H:i:s')
			);

			$this->user_model->addData('activity_log', $data1);

			$this->user_model->editData('matpel', $where, $data);
			$data['alert'] = 'sukses';

			$this->session->set_flashdata('edit_pesan','pesan');
		}
		$this->renderadm('matpel/edit', $data);
	}
	public function hapus($id){
		$level = $this->session->userdata('level');
		if(!$this->isLogin || $level != 1){
			redirect('Auth');
			die();
		}
		$ha = $this->user_model->getData('matpel', $id);
		$he = $ha->nama_matpel;

		$data1 = array(
			'keterangan' => '<b>'.$this->session->userdata('nama').' </b>Telah Menghapus Matpel dengan Nama Matpel <b>'.$he.'</b>',
			'date_time' => date('Y-m-d H:i:s')
		);

		$this->user_model->addData('activity_log', $data1);

		$this->db->delete("matpel", array('id' => $id));
		$data['alert'] = 'sukses';
		$this->session->set_flashdata('hapus_pesan','pesan');
		$this->renderadm('admin/matpel', $data);
	}
	

	public function matpel_datatable()
	{
		$level = $this->session->userdata('level');
		if(!$this->isLogin || $level != 1){
			redirect('Auth');
			die();
		}
		$matpel = $this->m_matpel->datatableMatpel();
		echo json_encode($matpel);
		die();
	}
}
