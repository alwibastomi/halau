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
		$templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor('Template/template.docx');

		$nama = $this->input->post('nama');
		$sekolah = $this->input->post('sekolah');
		$tanggal_rpp = $this->input->post('tanggal_rpp');
		$tahun_ajaran = $this->input->post('tahun_ajaran');
		$kelas = $this->input->post('kelas');
		$pelajaran = $this->input->post('pelajaran');
		$semester = $this->input->post('semester');

		// $data_rpp = $this->admin_model->getAllRpp();
		// foreach ($data_rpp as $key) {
		$templateProcessor->setValue('sekolah', $sekolah);

			// $templateProcessor->setValue('matpel', $key->id_matpel);
			// $templateProcessor->setValue('kelas', $key->id_kelas);
			// $templateProcessor->setValue('matpel', $key->id_semester);
		$templateProcessor->setValue('nama', $nama);
			// $templateProcessor->setValue('kd', $key->kd);
			// $templateProcessor->setValue('pertemuan', $key->pertemuan);
			// $templateProcessor->setValue('materi', $key->materi);
		header("Content-Disposition: attachment; filename=Pertemuan_.docx");

		$templateProcessor->saveAs('php://output');
		
		echo json_encode("berhasil");

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

}
