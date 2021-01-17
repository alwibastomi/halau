<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends Core {
	public function index(){
		$data['title'] = 'Profile';
		
		$this->renderadm('admin/profile', $data);
	}
	public function edit($email){
		if(!$this->isLogin){
			redirect('Login');
			die();
		}
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('nama', 'Nama', 'required');

		$data['user'] = $this->user_model->getDataAc('user', $email);

		if($this->form_validation->run() == false){
			$data['alert'] = "";
		}else{
			$email = $this->uri->segment(3);

			$where = array('email' => $email);

			$data = array(
				'email' => $this->input->post('email'),
				'nama' => $this->input->post('nama'),
				'password' => md5("Maaf:(".$this->input->post('password')),
				'level' => $this->input->post('level')
			);

			$data1 = array(
				'keterangan' => '<b>'.$this->session->userdata('nama').' </b>Telah Mengubah Profile Sendiri',
				'date_time' => date('Y-m-d H:i:s')
			);

			$this->user_model->addData('activity_log', $data1);

			$this->user_model->editData('user', $where, $data);
			$this->session->set_userdata($data);
			$data['alert'] = 'sukses';
		}
		$data['title'] = 'Edit Profile';
		$this->renderadm('profile/edit',$data);
	}
}