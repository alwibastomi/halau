<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends Core {


 public function index(){
 	
		if(!$this->isLogin){
			redirect('Login');
			die();
		}
		$data['title'] = 'Halaman dashboard';
		$this->renderadm('admin/dashboard',$data);
	
 }
}	