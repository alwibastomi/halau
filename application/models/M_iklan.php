<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_iklan extends CI_Model
{
  private $level;
  function __construct(){
    parent::__construct();
    $this->level = $this->session->userdata('level');
  }
  function _post($name , $xss = true){
    return $this->input->post($name , $xss);
  }

  public function getAllIklan()
  {
    $this->db->select("*");
    $this->db->from("iklan_js");
    return $this->db->get()->result();
  }

  public function getRecentIklan()
  {
    $this->db->select("*");
    $this->db->from("iklan_js");
    $this->db->order_by("id", "DESC");
    $this->db->limit(5);
    return $this->db->get()->result();
  }

  public function getPlace($where)
  {
    $this->db->select("*");
    $this->db->from('iklan_js');
    $this->db->where('place', $where);
    return $this->db->get()->result();
  }

  public function getCountIklan()
  {
    $this->db->select("count(id) as total");
    $this->db->from("iklan_js");
    $q = $this->db->get()->row();
    return $q->total;
  }

  public function datatableIklan()
  {
    $array = array("id","script_js", "place");
    $start = $this->_post('start');
    $offset = $this->_post('length');
    if ($start != null && $offset != null) {
      $this->db->limit($offset,$start);
    }

    $search = $this->_post('search');
    if($search['value'] != ''){
      $key = $search['value'];
      $this->db->like('id', $key);
      $this->db->or_like('script_js', $key);
      $this->db->or_like('place', $key);
      $this->db->or_like('pakai', $key);
    }

    $order = $this->_post('order');
    $column = isset($order[0]['column'])?$order[0]['column']:-1;
    if($column >= 0 && $column < count($array)){
      $ord = $array[$column];
      $by = $order[0]['dir'];
      $this->db->order_by($ord , $by);
    }

    $this->db->select("SQL_CALC_FOUND_ROWS *" ,FALSE);
    $this->db->from("iklan_js");
    $this->db->order_by("id", "DESC");
    $sql = $this->db->get();
    $q = $sql->result();
    $this->db->select("FOUND_ROWS() AS total_row");
    $row = $this->db->get()->row();

    $sEcho = $this->_post('draw');
    $getCountAll = $this->getCountIklan();
    $output = array(
      "draw" => intval($sEcho),
      "recordsTotal" => $getCountAll,
      "recordsFiltered" => $row->total_row,
      "data" => array()
    );

    foreach ($q as $val) {
      if ($val->pakai == 1) {
        $pil = 'Ya';
      }else{
        $pil = 'Tidak';
      }
      $btn = '<a href="'.site_url('Iklan/edit/'.$val->id).'" class="btn btn-primary " style="text-align: center;" data-toggle="tooltip" title="Edit">Edit</i></a>';

      $output['data'][] = array(

        $val->script_js,
        $val->place,
        $pil,
        $btn
      );
    }
    return $output;
  }
 public function datatableIklan1()
  {
    $array = array("id","script_js", "place");
    $start = $this->_post('start');
    $offset = $this->_post('length');
    if ($start != null && $offset != null) {
      $this->db->limit($offset,$start);
    }

    $search = $this->_post('search');
    if($search['value'] != ''){
      $key = $search['value'];
      $this->db->like('id', $key);
      $this->db->or_like('script_js', $key);
      $this->db->or_like('place', $key);
      $this->db->or_like('pakai', $key);
    }

    $order = $this->_post('order');
    $column = isset($order[0]['column'])?$order[0]['column']:-1;
    if($column >= 0 && $column < count($array)){
      $ord = $array[$column];
      $by = $order[0]['dir'];
      $this->db->order_by($ord , $by);
    }

    $this->db->select("SQL_CALC_FOUND_ROWS *" ,FALSE);
    $this->db->from("iklan_js");
    $this->db->order_by("id", "DESC");
    $sql = $this->db->get();
    $q = $sql->result();
    $this->db->select("FOUND_ROWS() AS total_row");
    $row = $this->db->get()->row();

    $sEcho = $this->_post('draw');
    $getCountAll = $this->getCountIklan();
    $output = array(
      "draw" => intval($sEcho),
      "recordsTotal" => $getCountAll,
      "recordsFiltered" => $row->total_row,
      "data" => array()
    );

    foreach ($q as $val) {
      if ($val->pakai == 1) {
        $pil = 'Ya';
      }else{
        $pil = 'Tidak';
      }
      $output['data'][] = array(

        $val->script_js,
        $val->place,
        $pil
      );
    }
    return $output;
  }
  
}