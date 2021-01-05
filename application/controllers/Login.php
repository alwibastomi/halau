<?php
  class Login extends Core{

  	public function index($data = array()){
  		$data['title'] = "Login";
  		$this->renderlog('login/login',$data);
  	}
  }