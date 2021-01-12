<?php

class Admin extends Core {
	public function __construct(){
		parent::__construct();
		$this->load->model('Admin_model');
	}

	public function dashboard(){
		if(!$this->isLogin){
			redirect('Login');
			die();
		}
		$data['title'] = 'Halaman Admin';
		$this->renderadm('admin/dashboard',$data);
	}

	public function artikel(){		
		if(!$this->isLogin){
			redirect('Login');
			die();
		}
		$data['title'] = 'Artikel';
		
		$this->renderadm('admin/artikel',$data);
	}

	public function penulis(){
		if(!$this->isLogin){
			redirect('Login');
			die();
		}
		$data['title'] = 'Penulis';
		$this->renderadm('admin/penulis',$data);
	}

	public function menu(){
		if(!$this->isLogin){
			redirect('Login');
			die();
		}
		$data['title'] = 'Menu & href';
		$this->renderadm('admin/menu',$data);
	}

	public function activiti(){
		if(!$this->isLogin){
			redirect('Login');
			die();
		}
		$data['title'] = 'Activiti Log';
		$data['allActivity'] = $this->m_activity->getAllActivity();
		$this->renderadm('admin/activiti',$data);
	}

	// public function getDataMenu(){
	// 	$result = $this->Admin_model->getDataTableMenu();
	// 	$data = [];
	// 	$no = $_POST['start'];
	// 	foreach ($result as $r) {
	// 		$row = array();
	// 		$row[] = ++$no;
	// 		$row[] = $r->menu;
	// 		$row[] = $r->href;
	// 		$row[] = '<a class="btn btn-sm btn-primary" href="javascript:void(0)" title="Edit" onclick="edit('."'".$r->id."'".')"><i class="glyphicon glyphicon-pencil"></i> Edit</a>';
	// 		$data[] = $row;

	// 	}
	// 	$output = array(
	// 		"draw" => $_POST['draw'],
	// 		"data" => $data
	// 	);
	// 	$this->output->set_content_type('application/json')->set_output(json_encode($output));
	// }
	
	
	

}	