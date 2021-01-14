<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_activity extends CI_Model
{
  private $level;
  function __construct(){
    parent::__construct();
    $this->level = $this->session->userdata('level');
  }
  function _post($name , $xss = true){
    return $this->input->post($name , $xss);
  }

  public function getAllActivity()
  {
    $this->db->select("*");
    $this->db->from("activity_log");
    return $this->db->get()->result();
  }

  public function getRecentActivity()
  {
    $this->db->select("*");
    $this->db->from("activity_log");
    $this->db->order_by("id", "DESC");
    $this->db->limit(5);
    return $this->db->get()->result();
  }

  public function getCountActivity()
  {
    $this->db->select("count(id) as total");
    $this->db->from("activity_log");
    $q = $this->db->get()->row();
    return $q->total;
  }

  public function getReset()
  {
    $sql = "ALTER TABLE activity_log AUTO_INCREMENT = 1";
    return $this->db->query($sql);
  }

  public function datatableActivity()
  {
    $array = array("id","keterangan", "date_time");
    $start = $this->_post('start');
    $offset = $this->_post('length');
    if ($start != null && $offset != null) {
      $this->db->limit($offset,$start);
    }

    $search = $this->_post('search');
    if($search['value'] != ''){
      $key = $search['value'];
      $this->db->like('id', $key);
      $this->db->or_like('keterangan', $key);
      $this->db->or_like('date_time', $key);
    }

    $order = $this->_post('order');
    $column = isset($order[0]['column'])?$order[0]['column']:-1;
    if($column >= 0 && $column < count($array)){
      $ord = $array[$column];
      $by = $order[0]['dir'];
      $this->db->order_by($ord , $by);
    }

    $this->db->select("SQL_CALC_FOUND_ROWS *" ,FALSE);
    $this->db->from("activity_log");
    $this->db->order_by("id", "DESC");
    $sql = $this->db->get();
    $q = $sql->result();
    $this->db->select("FOUND_ROWS() AS total_row");
    $row = $this->db->get()->row();

    $sEcho = $this->_post('draw');
    $getCountAll = $this->getCountActivity();
    $output = array(
      "draw" => intval($sEcho),
      "recordsTotal" => $getCountAll,
      "recordsFiltered" => $row->total_row,
      "data" => array()
    );

    foreach ($q as $val) {

      $output['data'][] = array(
        $val->id,
        $val->keterangan,
        $val->date_time
      );
    }
    return $output;
  }

  function Activity_delete($where,$table){

    $this->db->where($where);
    $this->db->delete($table);
  }
}