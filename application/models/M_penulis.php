<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_penulis extends CI_Model
{
	private $level;
	function __construct(){
		parent::__construct();
		$this->level = $this->session->userdata('level');
	}
}