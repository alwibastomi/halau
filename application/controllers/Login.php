<?php
class Login extends Core{

	public function index($data = array()){
		if($this->isLogin){
			redirect('Admin');
			die();
		}

		$this->form_validation->set_rules('email', 'email', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if($this->form_validation->run() == false){
			$data['alert'] = '';
			$data['title'] = "Login";
			$this->renderlog('login/login',$data);
		}else{
			if($this->user_model->doLogin())
			{
				$data = array(
					'keterangan' => '<b>'.$this->session->userdata('nama').' </b>Telah Login',
					'date_time' => date('Y-m-d H:i:s')
				);

				$this->user_model->addData('activity_log', $data);

				redirect('Dashboard');
			}else {
				$data['alert'] = 'gagal';
				$data['title'] = "Login";
				$this->renderlog('login/login',$data);
			}
		}
	}
	public function logout()
	{
		$data = array(
			'keterangan' => '<b>'.$this->session->userdata('nama').' </b>Telah Logout',
			'date_time' => date('Y-m-d H:i:s')
		);

		$this->user_model->addData('activity_log', $data);
		$this->user_model->doLogout();

		redirect('Login');
	}

}