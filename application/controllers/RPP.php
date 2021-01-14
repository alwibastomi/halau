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

}
