<?php

class Penulis extends Core{
	public function Index(){
		$data['title'] = 'Halaman penulis';
		$this->renderadm('penulis/index',$data);
	}
}