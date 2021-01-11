<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model 
{
	//data artikel
	var $table = 'isi_artikel';
	var $column_order = array('id','isi');
	var $order = array('id','isi');
	//data menu
	var $table_menu = 'menu';
	var $column_order_menu = array('id','menu','href');
	var $order_menu = array('id','menu','href');
	//data aktiviti
	var $table_activiti = 'activity_log';
	var $column_order_activiti = array('id','keterangan','date_time');
	var $order_activiti = array('id','keterangan','date_time');

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

	private function _get_data_query_menu(){
		$this->db->from($this->table_menu);
		if(isset($_POST['search']['value'])){
			$this->db->like('menu',$_POST['search']['value']);
			$this->db->like('href',$_POST['search']['value']);
		}
		if(isset($_POST['order'])){
			$this->db->order_by($this->order[$_POST['order']['0']['column']],$_POST['order']['0']['dir']);
		}else{
			$this->db->order_by('id','DESC');
		}
	}

	private function _get_data_query_activiti(){
		$this->db->from($this->table_activiti);
		if(isset($_POST['search']['value'])){
			$this->db->like('keterangan',$_POST['search']['value']);
			$this->db->like('date_time',$_POST['search']['value']);
		}
		if(isset($_POST['order'])){
			$this->db->order_by($this->order[$_POST['order']['0']['column']],$_POST['order']['0']['dir']);
		}else{
			$this->db->order_by('id','DESC');
		}
	}

	public function getDataTableActiviti(){
		$this->_get_data_query_activiti();
		$query = $this->db->get();
		return $query->result();
	}


	public function getDataTable(){
		$this->_get_data_query();
		$query = $this->db->get();
		return $query->result();
	}

	public function getDataTableMenu(){
		$this->_get_data_query_menu();
		$query = $this->db->get();
		return $query->result();
	}

}