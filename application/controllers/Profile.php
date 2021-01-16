<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends Core {
	public function index(){
		$data['title'] = 'Profile';
		
		$this->renderadm('admin/profile', $data);
	}
	public function edit(){
		$data['title'] = 'Edit Profile';
		$this->renderadm('profile/edit',$data);
	}
}