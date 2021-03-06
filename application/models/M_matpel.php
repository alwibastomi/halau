<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_matpel extends CI_Model
{
  private $level;
  function __construct(){
    parent::__construct();
    $this->level = $this->session->userdata('level');
  }
  function _post($name , $xss = true){
    return $this->input->post($name , $xss);
  }

  public function getAllMatpel()
  {
    $this->db->select("*");
    $this->db->from("matpel");
    return $this->db->get()->result();
  }

  public function getRecentMatpel()
  {
    $this->db->select("*");
    $this->db->from("matpel");
    $this->db->order_by("id", "DESC");
    $this->db->limit(5);
    return $this->db->get()->result();
  }

  public function getCountMatpel()
  {
    $this->db->select("count(id) as total");
    $this->db->from("matpel");
    $q = $this->db->get()->row();
    return $q->total;
  }

  public function datatableMatpel()
  {
    $array = array("id","nama_matpel");
    $start = $this->_post('start');
    $offset = $this->_post('length');
    if ($start != null && $offset != null) {
      $this->db->limit($offset,$start);
    }

    $search = $this->_post('search');
    if($search['value'] != ''){
      $key = $search['value'];
      $this->db->like('id', $key);
      $this->db->or_like('nama_matpel', $key);
    }

    $order = $this->_post('order');
    $column = isset($order[0]['column'])?$order[0]['column']:-1;
    if($column >= 0 && $column < count($array)){
      $ord = $array[$column];
      $by = $order[0]['dir'];
      $this->db->order_by($ord , $by);
    }

    $this->db->select("SQL_CALC_FOUND_ROWS *" ,FALSE);
    $this->db->from("matpel");
    $this->db->order_by("id", "DESC");
    $sql = $this->db->get();
    $q = $sql->result();
    $this->db->select("FOUND_ROWS() AS total_row");
    $row = $this->db->get()->row();

    $sEcho = $this->_post('draw');
    $getCountAll = $this->getCountMatpel();
    $output = array(
      "draw" => intval($sEcho),
      "recordsTotal" => $getCountAll,
      "recordsFiltered" => $row->total_row,
      "data" => array()
    );

    foreach ($q as $val) {
      
      $btn = '<a href="'.site_url('Matpel/edit/'.$val->id).'" class="btn btn-primary " style="text-align: center;" data-toggle="tooltip" title="Edit">Edit</i></a><a href="'.site_url('Matpel/hapus/'.$val->id).'" class="btn btn-danger ml-2" style="text-align: center;"  title="Delete">Delete</a>';
      
      
      $output['data'][] = array(

        $val->id,
        $val->nama_matpel,
        $btn
      );
    }
    return $output;
  }

  
}