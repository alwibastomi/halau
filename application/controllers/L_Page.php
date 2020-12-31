<?php

class L_page extends Core {

	public function index()
	{
		$this->renderpage('landing_page/index');
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