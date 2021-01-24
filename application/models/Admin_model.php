<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model 
{
	private $level;
	function __construct(){
		parent::__construct();
		$this->level = $this->session->userdata('level');
	}
	function _post($name , $xss = true){
		return $this->input->post($name , $xss);
	}

  public function getArtikel()
  {
    $this->db->select("*");
    $this->db->from("artikel");
    $this->db->where('pakai', '1');
    return $this->db->get()->row();
  }

  public function getanu($table)
  {
    $this->db->select("*");
    $this->db->from($table);
    $this->db->where('pakai', '1');
    return $this->db->get()->result();
  }

  public function getAllKelas()
  {
    $this->db->select("*");
    $this->db->from("kelas");
    return $this->db->get()->result();
  }
  public function getAllMatpel()
  {
    $this->db->select("*");
    $this->db->from("matpel");
    return $this->db->get()->result();
  }
  public function getAllSemester()
  {
    $this->db->select("*");
    $this->db->from("semester");
    return $this->db->get()->result();
  }
  public function getAllRpp()
  {
    $this->db->select("*");
    $this->db->from("detail_rpp");
    // $this->db->where('id_kelas', $kelas);
    // $this->db->where('id_matpel', $pelajaran);
    // $this->db->where('id_semester', $semester);
    return $this->db->get()->result();
  }
}