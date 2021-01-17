<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_rpp extends CI_Model
{
  private $level;
  function __construct(){
    parent::__construct();
    $this->level = $this->session->userdata('level');
  }
  function _post($name , $xss = true){
    return $this->input->post($name , $xss);
  }

  public function getAllDatarpp()
  {
    $this->db->select('*');
    $this->db->from("detail_rpp");
    return $this->db->get()->result();
  }

  public function getRecentDatarpp()
  {
    $this->db->select("*");
    $this->db->from("detail_rpp");
    $this->db->order_by("id_detail", "DESC");
    $this->db->limit(5);
    return $this->db->get()->result();
  }

  public function getCountDatarpp()
  {
    $this->db->select("count(id_detail) as total");
    $this->db->from("detail_rpp");
    $q = $this->db->get()->row();
    return $q->total;
  }

  public function datatableDatarpp()
  {
    $array = array("id_detail","id_kelas", "id_matpel","id_semester","pertemuan","kd","materi","tp1","tp2","tp3","tp4","tp5","bab","halaman");
    $start = $this->_post('start');
    $offset = $this->_post('length');
    if ($start != null && $offset != null) {
      $this->db->limit($offset,$start);
    }

    $search = $this->_post('search');
    if($search['value'] != ''){
      $key = $search['value'];
      $this->db->like('id_kelas', $key);
      $this->db->or_like('id_matpel', $key);
      $this->db->or_like('id_semester', $key);
      $this->db->or_like('pertemuan', $key);
      $this->db->or_like('kd', $key);
      $this->db->or_like('materi', $key);
      $this->db->or_like('bab', $key);
      $this->db->or_like('halaman', $key);
    }

    $order = $this->_post('order');
    $column = isset($order[0]['column'])?$order[0]['column']:-1;
    if($column >= 0 && $column < count($array)){
      $ord = $array[$column];
      $by = $order[0]['dir'];
      $this->db->order_by($ord , $by);
    }

    $this->db->select("det.id_detail as id_detail, kelas.kelas as kelas, matpel.nama_matpel as nama_matpel, semester.semester as semester, det.pertemuan as pertemuan, det.kd as kd, det.materi as materi, det.bab as bab, det.halaman as halaman" ,FALSE);
    $this->db->from("detail_rpp as det");
    $this->db->join('kelas', 'kelas.id = det.id_kelas');
    $this->db->join('matpel', 'matpel.id = det.id_matpel');
    $this->db->join('semester', 'semester.id = det.id_semester');
    $this->db->order_by("det.id_detail", "DESC");
    $sql = $this->db->get();
    $q = $sql->result();
    $this->db->select("FOUND_ROWS() AS total_row");
    $row = $this->db->get()->row();

    $sEcho = $this->_post('draw');
    $getCountAll = $this->getCountDatarpp();
    $output = array(
      "draw" => intval($sEcho),
      "recordsTotal" => $getCountAll,
      "recordsFiltered" => $row->total_row,
      "data" => array()
    );


    foreach ($q as $val) {
      
      $btn = ' <a href="'.site_url('Datarpp/edit/'.$val->id_detail).'" class="btn btn-primary " style="text-align: center; padding:6px 8px 6px 8px;"  data-toggle="tooltip" title="Edit" ><i class="fas fa-edit"></i></i></a>
      <a href="'.site_url('Datarpp/detail/'.$val->id_detail).'" class="btn btn-success " style="text-align: center; padding:6px 8px 6px 8px;"  title="Detail"><i class="fas fa-info-circle"></i></a>
      <a href="'.site_url('Datarpp/hapus/'.$val->id_detail).'" class="btn btn-danger " style="text-align: center; padding:6px 10px 6px 10px;"  title="Delete"><i class="fas fa-trash"></i></a>';

      $output['data'][] = array(
        $btn,
        $val->kelas,
        $val->nama_matpel,
        $val->semester,
        $val->pertemuan,
        $val->kd,
        $val->materi,
        $val->bab,
        $val->halaman
        
      );
    }
    return $output;
  }
}