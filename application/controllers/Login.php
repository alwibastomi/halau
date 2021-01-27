<?php
class Login extends Core{

	public function index($data = array()){
		if($this->isLogin){
			redirect('Dashboard');
			die();
		}

		
		$this->form_validation->set_rules('email', 'email', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('userCaptcha', 'Captcha', 'required|callback_check_captcha');
		$userCaptcha = $this->input->post('userCaptcha');
		


		if($this->form_validation->run() == false){
			$data['alert'] = '';
			$data['title'] = "Login";
			$files    =glob('captcha/*.jpg');
			if (!empty($files)) {
				foreach ($files as $file) {
					if (is_file($file))
						unlink($file); 
				}
			}
			$random_number = substr(number_format(time() * rand(),0,'',''),0,6);
		      // setting up captcha config
			$vals = array(
				'word' => $random_number,
				'img_path' => './captcha/',
				'img_url' => base_url().'captcha/',
				'img_width' => 140,
				'img_height' => 32,
				'expiration' => 7200
			);
			$data['captcha'] = create_captcha($vals);
			$this->session->set_userdata('captchaWord',$data['captcha']['word']);
			$this->renderlog('login/login',$data);
		}else{
			
			if($this->user_model->doLogin())
			{
				$data = array(
					'keterangan' => '<b>'.$this->session->userdata('nama').' </b>Telah Login',
					'date_time' => date('Y-m-d H:i:s')
				);
				$this->user_model->addData('activity_log', $data);
				$this->session->set_flashdata('login','login');

				redirect('Dashboard');
        

			}else {

				$data['title'] = "Login";
				$files    =glob('captcha/*.jpg');
				if (!empty($files)) {
					foreach ($files as $file) {
						if (is_file($file))
							unlink($file); 
					}
				}
				$random_number = substr(number_format(time() * rand(),0,'',''),0,6);
		      // setting up captcha config
				$vals = array(
					'word' => $random_number,
					'img_path' => './captcha/',
					'img_url' => base_url().'captcha/',
					'img_width' => 140,
					'img_height' => 32,
					'expiration' => 7200
				);
				$data['captcha'] = create_captcha($vals);
				$this->session->set_userdata('captchaWord',$data['captcha']['word']);
				$this->renderlog('login/login',$data);

			}
		}
	}

	public function check_captcha($str){
		$word = $this->session->userdata('captchaWord');
		if(strcmp(strtoupper($str),strtoupper($word)) == 0){
			return true;
		}
		else{
			$this->form_validation->set_message('check_captcha', 'Please enter correct words!');
			return false;
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