<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_menu extends CI_Model
{
  private $level;
  function __construct(){
    parent::__construct();
    $this->level = $this->session->userdata('level');
  }
  function _post($name , $xss = true){
    return $this->input->post($name , $xss);
  }

  public function getAllMenu()
  {
    $this->db->select("*");
    $this->db->from("menu");
    return $this->db->get()->result();
  }

  public function getRecentMenu()
  {
    $this->db->select("*");
    $this->db->from("menu");
    $this->db->order_by("id", "DESC");
    $this->db->limit(5);
    return $this->db->get()->result();
  }

  public function getCountMenu()
  {
    $this->db->select("count(id) as total");
    $this->db->from("menu");
    $q = $this->db->get()->row();
    return $q->total;
  }

  public function datatableMenu()
  {
    $array = array("id","menu", "href");
    $start = $this->_post('start');
    $offset = $this->_post('length');
    if ($start != null && $offset != null) {
      $this->db->limit($offset,$start);
    }

    $search = $this->_post('search');
    if($search['value'] != ''){
      $key = $search['value'];
      $this->db->like('id', $key);
      $this->db->or_like('menu', $key);
      $this->db->or_like('href', $key);
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
    $this->db->from("menu");
    $this->db->order_by("id", "DESC");
    $sql = $this->db->get();
    $q = $sql->result();
    $this->db->select("FOUND_ROWS() AS total_row");
    $row = $this->db->get()->row();

    $sEcho = $this->_post('draw');
    $getCountAll = $this->getCountMenu();
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
      $btn = '<a href="'.site_url('Menu/edit/'.$val->id).'" class="btn btn-primary " style="text-align: center;" data-toggle="tooltip" title="Edit">Edit</i></a>';
      $sub = substr($val->isi,3,10);
      
      $output['data'][] = array(

        $val->menu,
        $val->href,
        $val->header,
        $sub,
        $pil,
        $btn
      );
    }
    return $output;
  }

  
}