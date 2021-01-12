<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends Core {
	private $level;
	function __construct()
	{
		parent::__construct();
		$this->level = $this->session->userdata('level');
	}

	public function index()
	{
		// if(!$this->isLogin){
		// 	redirect('Auth');
		// 	die();
		// }
		$data['title'] = 'Menu & Href';
		$data['allMenu'] = $this->m_menu->getAllMenu();
		$this->renderadm('admin/menu', $data);
	}

	public function edit(){
		$data['title'] = 'Menu Edit';
		$this->renderadm('menu/edit',$data);
	}

	public function menu_datatable()
	{
		$menu = $this->m_menu->datatableMenu();
		echo json_encode($menu);
		die();
	}
}
