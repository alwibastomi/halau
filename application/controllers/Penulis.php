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
		if(!$this->isLogin){
			redirect('Login');
			die();
		}
		$data['alert'] = '';
		$data['title'] = 'Penulis';
		$data['allPenulis'] = $this->m_penulis->getAllPenulis();
		$this->renderadm('admin/penulis', $data);
	}

	public function tambah(){
		if(!$this->isLogin){
			redirect('Login');
			die();
		}

		$this->form_validation->set_rules('email', 'password', 'required');
		$this->form_validation->set_rules('password', 'password', 'required');


		if($this->form_validation->run() == false){
			$data['alert'] = '';
		}else{
			$data = array(
				'email' => $this->input->post('email'),
				'nama' => $this->input->post('nama'),
				'password' => md5("akusayangkamu:*".$this->input->post('password')),
				'level' => $this->input->post('level')
			);

			$data1 = array(
				'keterangan' => '<b>'.$this->session->userdata('nama').' </b>Telah Menambah Penulis <b>'.$this->input->post('nama').'</b>',
				'date_time' => date('Y-m-d H:i:s')
			);

			$this->user_model->addData('activity_log', $data1);

			$this->user_model->addData('user', $data);
			$data['alert'] = 'sukses';
		}

		$data['title'] = 'Tambah Data Penulis';
		$this->renderadm('penulis/tambah', $data);
	}

	public function hapus($email){
		if(!$this->isLogin){
			redirect('Login');
			die();
		}
		$ha = $this->user_model->getDataAc('user', $email);
		$he = $ha->nama;

		$data1 = array(
			'keterangan' => '<b>'.$this->session->userdata('nama').' </b>Telah Menghapus Penulis <b>'.$he.'</b>',
			'date_time' => date('Y-m-d H:i:s')
		);

		$this->user_model->addData('activity_log', $data1);

		$this->db->delete("user", array('email' => $email));
		$data['alert'] = 'sukses';
		$this->renderadm('admin/penulis', $data);
	}

	public function penulis_datatable()
	{
		if(!$this->isLogin){
			redirect('Login');
			die();
		}
		$penulis = $this->m_penulis->datatablePenulis();
		echo json_encode($penulis);
		die();
	}
}
