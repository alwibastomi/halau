<?php

class L_page extends Core {

	public function index()
	{
		$data['kelas'] = $this->admin_model->getAllKelas();
		$data['matpel'] = $this->admin_model->getAllMatpel();
		$data['semester'] = $this->admin_model->getAllSemester();
		$this->renderpage('landing_page/index', $data);
	}

	public function Disclaimer()
	{
		$this->renderpage('landing_page/disclaimer');
	}

	public function Privacy()
	{
		$this->renderpage('landing_page/privacy');
	}

	public function About()
	{
		$this->renderpage('landing_page/about');
	}

	public function Contact()
	{
		$this->renderpage('landing_page/about');
	}
}