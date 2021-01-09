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
				redirect('Admin/dashboard');
			}else {
				$data['alert'] = 'gagal';
				$data['title'] = "Login";
				$this->renderlog('login/login',$data);
			}
		}
	}
		public function logout()
	{
		$this->user_model->doLogout();
		redirect('Login');
	}

}