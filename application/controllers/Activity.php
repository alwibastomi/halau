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
		// if(!$this->isLogin){
		// 	redirect('Auth');
		// 	die();
		// }
		$data['title'] = 'Activiti Log';
		$data['allActivity'] = $this->m_activity->getAllActivity();
		$this->renderadm('admin/activiti', $data);
	}

	public function hapus_log(){
		if(!$this->isLogin){
			redirect('Login');
			die();
		}
		$this->db->delete("activity_log", array('id'));
		$this->m_activity->getReset();
		redirect('admin/activiti');
	}

	public function activity_datatable()
	{
		$activity = $this->m_activity->datatableActivity();
		echo json_encode($activity);
		die();
	}
}
