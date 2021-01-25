<?php

class L_page extends Core {

	public function index()
	{
		$data['title'] = 'RPP online';
		$data['nav'] = $this->admin_model->getanu('menu');
		$data['aaaa'] = $this->admin_model->getArtikel();
		$data['kelas'] = $this->admin_model->getAllKelas();
		$data['matpel'] = $this->admin_model->getAllMatpel();
		$data['semester'] = $this->admin_model->getAllSemester();
		$this->renderpage('landing_page/index', $data);
	}

	public function Menu()
	{
		$data['nav'] = $this->admin_model->getanu('menu');
		$tea = $this->uri->segment(3);
		$data['title'] = $tea;
		$data['aaaa'] = $this->user_model->getDataA('menu', $tea);
		$this->renderpage('landing_page/lili',$data);
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