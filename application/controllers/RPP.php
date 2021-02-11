<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use PhpOffice\PhpWord\PhpWord;
use PhpOffice\PhpWord\Writer\Word2007;

class RPP extends Core {
	private $level;
	function __construct()
	{
		parent::__construct();
		$this->level = $this->session->userdata('level');
	}

	public function index()
	{

	}
	public function download($dat)
	{
		$data['id'] = $dat;
		$data['title'] = 'RPP online';
		$data['nav'] = $this->admin_model->getanu('menu');
		$data['nama'] = $this->input->post('nama');
		$this->renderpage('rpp/index', $data);
	}
	public function Document_read()
	{

		$this->load->helper('download');
		if(!$this->isLogin){
			redirect('Auth');
			die();
		}
		$file = './Template/Excel.xlsx';
		force_download($file, NULL);

	}
	public function rpp()
	{

		$id_detail = $this->uri->segment(3);
		$data['rpp'] = $this->m_rpp->get($id_detail);
		$data['kelas'] = $this->m_rpp->getKrit('kelas', $this->m_rpp->get($id_detail)->id_kelas);
		$data['tp'] = $this->m_rpp->getTp($this->m_rpp->get($id_detail)->id_tp);
		$data['matpel'] = $this->m_rpp->getKrit('matpel', $this->m_rpp->get($id_detail)->id_matpel);
		$data['semester'] = $this->m_rpp->getKrit('semester', $this->m_rpp->get($id_detail)->id_semester);
		$this->load->view('rpp/rpp', $data);
	}
	public function add_rpp()
	{

		if (!empty($this->m_rpp->getCountRpp("detail_rpp"))) {
			$id_isi = $this->m_rpp->getCountRpp("detail_rpp");
			$id_isi = $id_isi + 1;				

		}else {
			$id_isi = 1;	
		}
		

		$data = array(
			'id_kelas' => $this->input->post('kelas'),
			'id_matpel' => $this->input->post('pelajaran'),
			'id_semester' => $this->input->post('semester'),
			'pertemuan' => "Ke-".$this->input->post('pertemuan'),
			'materi' => $this->input->post('materi'),
			'id_tp' => $id_isi,
			'kd' => $this->input->post('kd'),
			'bab' => $this->input->post('bab'),
			'halaman' => $this->input->post('halaman')
		);


		$this->m_rpp->add_rpp('detail_rpp', $data);

		echo json_encode($id_isi);

	}
	public function isi($id)
	{
		$id_isi = $id;				
		$isi    = $_POST["isi"];
		$isi    = json_decode("$isi", true);
		

		for ($i=0; $i < count($isi) ; $i++) { 
			$z = $i + 1;
			$data1 = array(
				'id_tp' => $id_isi,
				'isi_tp' => $isi[$i],
				'jenis' => "TP ".$z
			);
			$this->m_rpp->add_rpp('tp', $data1);
		}
		echo json_encode("yey");
	}
	public function cek()
	{
		$id_kelas = $this->input->post('kelas');
		$id_matpel = $this->input->post('pelajaran');
		$id_semester = $this->input->post('semester');

		

		if (!empty($this->m_rpp->cek($id_kelas, $id_matpel, $id_semester))) {
			$result = $this->m_rpp->cek($id_kelas, $id_matpel, $id_semester);
		}else {
			$result = "kosong";
		}
		echo json_encode($result);
	}
}
