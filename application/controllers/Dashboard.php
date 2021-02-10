<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends Core {

	public function index(){
		$level = $this->session->userdata('level');
		if(!$this->isLogin || $level != 1){
			redirect('Auth');
			die();
		}
		$data['title'] = 'Halaman dashboard';
		$this->renderadm('admin/dashboard',$data);
		
	}
}	