<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model 
{
	var $table = 'isi_artikel';
	var $column_order = array('id','isi');
	var $order = array('id','isi');


	private function _get_data_query(){
		$this->db->from($this->table);
		if(isset($_POST['search']['value'])){
			$this->db->like('isi',$_POST['search']['value']);
		}
		if(isset($_POST['order'])){
			$this->db->order_by($this->order[$_POST['order']['0']['column']],$_POST['order']['0']['dir']);
		}else{
			$this->db->order_by('id','DESC');
		}
	}


	public function getDataTable(){
		$this->_get_data_query();
		$query = $this->db->get();
		return $query->result();
	}

}