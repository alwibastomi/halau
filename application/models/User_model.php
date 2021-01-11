<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model
{
  private $level;
  function __construct(){
    parent::__construct();
    $this->level = $this->session->userdata('level');
  }
  public function _post($name , $xss = true){
    return $this->input->post($name , $xss);
  }
    public function addPenAng()
  {

    $data = array(
      'username' => strtolower($this->input->post('username')),
      'password' => md5("akusayangkamu:*".$this->input->post('password')),
      'nama_lengkap' => $this->input->post('nama_lengkap')
    );
    return $this->db->insert("tb_siswa", $data);
  }
    public function getUsername($db, $where)
  {
    $this->db->select("count(*) as total");
    $this->db->from($db);
    $this->db->where("username", $where);
    $q = $this->db->get()->row();
    return $q->total;
  }
    public function add_surata($table, $data)
  {
    $this->db->insert($table, $data);
  }

  public function set($id)
  {
    $this->db->select("*");
    $this->db->from("tb_siswa");
    $this->db->where("username", $id);
    $query = $this->db->get()->row();
    $data = array(
      'username' => $this->input->post('username'),
      'nama_lengkap' => $this->input->post('nama_lengkap'),
    );
    $this->session->set_userdata($data);
  
  }
  public function doLogin()
  {
    $email = $this->input->post('email');
    $password = $this->input->post('password');

    $this->db->select("*");
    $this->db->from("user");
    $this->db->where("email", $email);
    $query = $this->db->get()->row();
    if($query != null){
      if(md5("Maaf:(".$password) == $query->password){
      // if(md5($password) == $query->password){
        $data = array(
          'isLogin' => true,
          'email' => $query->email,
          'nama' => $query->nama,
          'level' => $level
        );
        $this->session->set_userdata($data);
        return true;
      }else{
        return false;
      }
    }
  }
  function doLogout()
  {
    $this->session->sess_destroy();
    return true;
  }

  public function getUser($iduser)
  {
    $this->db->select("*");
    $this->db->from("tb_siswa");
    $this->db->where("username", $iduser);
    return $this->db->get()->row();
  }

  public function editUser($username)
  {
    if (empty($this->input->post('PASSWORD'))) {
     $data = array(
      'username' => $this->input->post('username'),
      'nama_lengkap' => $this->input->post('nama_lengkap')
    );
   }else {
     $data = array(
      'password' => md5("akusayangkamu:*".$this->input->post('PASSWORD')),
    );
   }
   

   $this->db->where("username", $username);
   return $this->db->update("tb_siswa", $data);
 }
}
