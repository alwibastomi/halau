<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Cell\Coordinate;
use PhpOffice\PhpSpreadsheet\Reader\Csv;
use PhpOffice\PhpSpreadsheet\Reader\Xlsx;

class Datarpp extends Core {
	private $level;
	function __construct()
	{
		parent::__construct();
		$this->level = $this->session->userdata('level');
		$this->load->model('m_rpp');
	}

	public function index()
	{
		if(!$this->isLogin){
			redirect('Auth');
			die();
		}
		$data['alert'] = '';
		$data['title'] = 'Data Rpp';
		$data['allDatarpp'] = $this->m_rpp->getAllDatarpp();
		$this->renderadm('admin/rpp', $data);
	}
	public function tambah(){
		if(!$this->isLogin){
			redirect('Auth');
			die();
		}
		$data['title'] = 'Tambah Rpp';
		$data['kelas'] = $this->admin_model->getAllKelas();
		$data['matpel'] = $this->admin_model->getAllMatpel();
		$data['semester'] = $this->admin_model->getAllSemester();
		$this->renderadm('rpp/tambah',$data);


	}
	public function Upload(){

		$data['title'] = 'Upload Rpp';
		$data['kelas'] = $this->admin_model->getAllKelas();
		$data['matpel'] = $this->admin_model->getAllMatpel();
		$data['semester'] = $this->admin_model->getAllSemester();

		$this->form_validation->set_rules('kelas', 'kelas', 'required');
		$this->form_validation->set_rules('pelajaran', 'pelajaran', 'required');
		$this->form_validation->set_rules('semester', 'semester', 'required');

		if($this->form_validation->run() == false){
			$data['alert'] = '';
		}else{
			$file_mimes = array('application/octet-stream', 'application/vnd.ms-excel', 'application/x-csv', 'text/x-csv', 'text/csv', 'application/csv', 'application/excel', 'application/vnd.msexcel', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
			if(isset($_FILES['berkas_excel']['name']) && in_array($_FILES['berkas_excel']['type'], $file_mimes)) {

				$arr_file = explode('.', $_FILES['berkas_excel']['name']);
				$extension = end($arr_file);

				if('csv' == $extension) {
					$reader = new \PhpOffice\PhpSpreadsheet\Reader\Csv();
				} else {
					$reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
				}

				$spreadsheet = $reader->load($_FILES['berkas_excel']['tmp_name']);

				$sheetData = $spreadsheet->getActiveSheet()->toArray();
				for($i = 1;$i < count($sheetData);$i++)
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
						'pertemuan' => $sheetData[$i]['0'],
						'materi' => $sheetData[$i]['2'],
						'kd' => $sheetData[$i]['1'],
						'id_tp' => $id_isi,
						'bab' => $sheetData[$i]['3'],
						'halaman' => $sheetData[$i]['4']
					);

					$this->m_rpp->add_rpp('detail_rpp', $data);
					$sayang = $spreadsheet->getActiveSheet();
					$sayang = $sayang->getHighestColumn();
					$sayang = \PhpOffice\PhpSpreadsheet\Cell\Coordinate::columnIndexFromString($sayang);

					for ($x=5; $x < $sayang ; $x++) { 
						$z = strval($x);
						if (empty($sheetData[$i][$z])) {
							$yowes = "-";
						}else{
							$yowes = $sheetData[$i][$z];
						}
						$data1 = array(
							'id_tp' => $id_isi,
							'isi_tp' => $yowes,
							'jenis' => $sheetData[0][$z]
						);

						$this->m_rpp->add_rpp('tp', $data1);
					}
				}
				$this->session->set_flashdata('pesan','pesan');
				redirect('Datarpp');
				
			}

			
		}
		$this->renderadm('rpp/Upload',$data);


	}


	public function datarpp_datatable()
	{

		if(!$this->isLogin){
			redirect('Auth');
			die();
		}
		$datarpp = $this->m_rpp->datatableDatarpp();
		echo json_encode($datarpp);
		die();
	}

	public function Hapus(){

		$data['title'] = 'Upload Rpp';
		$data['kelas'] = $this->admin_model->getAllKelas();
		$data['matpel'] = $this->admin_model->getAllMatpel();
		$data['semester'] = $this->admin_model->getAllSemester();

		$this->form_validation->set_rules('kelas', 'kelas', 'required');
		$this->form_validation->set_rules('pelajaran', 'pelajaran', 'required');
		$this->form_validation->set_rules('semester', 'semester', 'required');

		if($this->form_validation->run() == false){
			$data['alert'] = '';
		}else{
			

			$id_kelas = $this->input->post('kelas');
			$id_matpel = $this->input->post('pelajaran');
			$id_semester = $this->input->post('semester');

			
			$this->db->delete('tp', array('id_tp' => $this->m_rpp->get($id_detail)->id_tp));
			$this->db->delete("detail_rpp", array('id_kelas' => $id_kelas, 'id_matpel' => $id_matpel, 'id_semester' => $id_semester));


			$this->session->set_flashdata('hapus_pesan','pesan');
			redirect('Datarpp');

		}

		$this->renderadm('rpp/Hapus',$data);
	}
}	