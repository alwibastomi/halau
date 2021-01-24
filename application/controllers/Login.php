<?php
class Login extends Core{

	public function index($data = array()){
		if($this->isLogin){
			redirect('Dashboard');
			die();
		}

		
		$this->form_validation->set_rules('email', 'email', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('kode_captcha', 'Kode Captcha', 'required');
		$this->form_validation->set_error_delimiters('<div style="border: 1px solid: #999999; background-color: #ffff99;">', '</div>');
        

		if($this->form_validation->run() == false){
			$data['alert'] = '';
			$data['title'] = "Login";
			$cap = $this->buat_captcha();
	        $data['cap_img'] = $cap['image'];
			$this->renderlog('login/login',$data);
		}else{
			$this->cek_captcha();
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
				$cap = $this->buat_captcha();
	            $data['cap_img'] = $cap['image'];
				$this->renderlog('login/login',$data);
			}
		}
	}
	
 public function buat_captcha(){
        $vals = array(
            'img_path' => 'captcha/',
            'img_url' => base_url().'captcha/',
            'font_path' => FCPATH . 'captcha/font/1.ttf',
            'font_size' => 40,
            'img_width' => '190',
            'img_height' => 30,
           'img_width' => '150',
           'img_height' => 30,
            'expiration' => 7200
        );
        $cap = create_captcha($vals);
        return $cap;
    }
    
    public function cek_captcha(){
    	$cek = $this->input->post('kode_captcha');
        if($cek === $this->session->userdata('kode_captcha')){
            return TRUE;
        }else{
            $this->form_validation->set_message('cek_captcha', '%s yang anda input salah!');
            return FALSE;
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