<?php

class L_page extends Core {

	public function index()
	{
		$data['title'] = 'RPP online';
		$data['kelas'] = $this->admin_model->getAllKelas();
		$data['matpel'] = $this->admin_model->getAllMatpel();
		$data['semester'] = $this->admin_model->getAllSemester();
		$this->renderpage('landing_page/index', $data);
	}

	public function Disclaimer()
	{
		$data['title'] = 'Disclaimer';
		
		$this->renderpage('landing_page/disclaimer',$data);
	}

	public function Privacy()
	{
		$data['title'] = 'Privacy';
		$this->renderpage('landing_page/privacy',$data);
	}

	public function About()
	{
		$data['title'] = 'About';
		$this->renderpage('landing_page/about',$data);
	}

	public function Contact()
	{
		$data['title'] = 'Contact';
		$this->renderpage('landing_page/contact',$data);
	}
}