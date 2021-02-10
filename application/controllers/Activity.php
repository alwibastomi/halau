<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Activity extends Core {
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
		$data['title'] = 'Activiti Log';
		$data['allActivity'] = $this->m_activity->getAllActivity();
		$this->renderadm('admin/activiti', $data);
	}

	public function hapus_log(){
		$level = $this->session->userdata('level');
		if(!$this->isLogin || $level != 1){
			redirect('Auth');
			die();
		}
		$this->db->delete("activity_log", array('id'));
		$this->m_activity->getReset();
		redirect('admin/activiti');
	}

	public function activity_datatable()
	{
		$level = $this->session->userdata('level');
		if(!$this->isLogin || $level != 1){
			redirect('Auth');
			die();
		}
		$activity = $this->m_activity->datatableActivity();
		echo json_encode($activity);
		die();
	}
}