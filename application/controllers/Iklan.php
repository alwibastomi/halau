<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Iklan extends Core {
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
		$data['title'] = 'Iklan';
		$data['allIklan'] = $this->m_iklan->getAllIklan();
		$this->renderadm('admin/iklan', $data);
	}
	public function tambah(){
		if(!$this->isLogin){
			redirect('Auth');
			die();
		}
		$data['title'] = 'Tambah Iklan';
		$this->renderadm('iklan/tambah',$data);

	}

	public function edit($id){
		if(!$this->isLogin){
			redirect('Auth');
			die();
		}

		$this->form_validation->set_rules('script_js', 'Script JS', 'required');
		$this->form_validation->set_rules('place', 'Place', 'required');

		$data['iklan'] = $this->user_model->getData('iklan_js', $id);
		$data['title'] = 'Iklan Edit';

		if($this->form_validation->run() == false){
			$data['alert'] = '';
		}else{
			$id = $this->uri->segment(3);
			$where = array('id' => $id);

			$data = array(
				'script_js' => $this->input->post('script_js'),
				'place' => $this->input->post('place')
			);

			$data1 = array(
				'keterangan' => '<b>'.$this->session->userdata('nama').' </b>Telah Mengubah Iklan pada Id <b>'.$id.'</b>',
				'date_time' => date('Y-m-d H:i:s')
			);

			$this->user_model->addData('activity_log', $data1);

			$this->user_model->editData('iklan_js', $where, $data);
			$data['alert'] = 'sukses';
		}
		$this->renderadm('iklan/edit', $data);
	}

	public function iklan_datatable()
	{
		$iklan = $this->m_iklan->datatableIklan();
		echo json_encode($iklan);
		die();
	}
}
