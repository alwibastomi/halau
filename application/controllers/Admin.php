<?php

class Admin extends Core {

	public function Index(){
		$data['title'] = 'Halaman Admin';
		$this->renderadm('admin/index',$data);
	}
	

}	