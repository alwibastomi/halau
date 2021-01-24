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

	public function index($dat)
	{

	}
	public function download($dat)
	{
		$data['id'] = $dat;
		$data['title'] = 'RPP online';
		$this->renderpage('rpp/index', $data);
	}
	public function rpp()
	{

		// $data['rpp'] = $this->m_rpp->getRpp();
		$this->renderpage('rpp/rpp');
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
			'id_kelas' => $this->input->post('id_kelas'),
			'id_matpel' => $this->input->post('id_matpel'),
			'pertemuan' => $this->input->post('pertemuan'),
			'materi' => $this->input->post('materi'),
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
			$data1 = array(
				'id_tp' => $id_isi,
				'isi_tp' => $isi[$i],
				'jumlah_tp' => count($isi)
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

		$result = $this->m_rpp->cek($id_kelas, $id_matpel, $id_semester);

		echo json_encode($result);
	}
}
