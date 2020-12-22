<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pemeriksaan extends CI_Controller 
{

	public function __construct()
	{
		parent::__construct();
		check_not_login();
		$this->load->model('PemeriksaanModel');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data["data_lansia"] = $this->PemeriksaanModel->getAll();
		$this->load->view('pemeriksaan/data_pemeriksaan', $data);
	}

	public function list_pemeriksaan($id = null){
		if(!isset($id)) redirect('pemeriksaan');

		$pemeriksaan = $this->PemeriksaanModel;

		$data["pemeriksaan"] = $pemeriksaan->getPemeriksaan($id);
		$this->load->view('pemeriksaan/list_pemeriksaan', $data);
	}

	public function detail($id = null)
	{
		if(!isset($id)) redirect('pemeriksaan');

		$pemeriksaan = $this->PemeriksaanModel;
		$data["pemeriksaan"] = $pemeriksaan->getDetail($id);
		$this->load->view('pemeriksaan/detail', $data);
	}
	public function cetak($id = null)
	{
		if(!isset($id)) redirect('pemeriksaan');

		$pemeriksaan = $this->PemeriksaanModel;
		$data["pemeriksaan"] = $pemeriksaan->getDetail($id);
		$this->load->view('pemeriksaan/cetak', $data);
	}

	public function add($id = null){
		if(!isset($id))redirect('pemeriksaan');

		$pemeriksaan = $this->PemeriksaanModel;
		$data['pemeriksaan'] = $pemeriksaan->getById($id);

		$this->form_validation->set_rules('tgl_periksa', 'Tanggal Periksa', 'required');
		$this->form_validation->set_rules('tensi', 'Tensi Darah', 'required');
		$this->form_validation->set_rules('berat_badan', 'Berat Badan', 'required|numeric');
		$this->form_validation->set_rules('tinggi_badan', 'Tinggi Badan', 'required|numeric');
		$this->form_validation->set_rules('gula_darah', 'Gula Darah', 'required|numeric');
		$this->form_validation->set_rules('kolesterol', 'Kolesterol', 'required|numeric');

		$this->form_validation->set_message('required', '%s Masih Kosong, silahkan isi terlebih dahulu');
		$this->form_validation->set_message('numeric', '%s Hanya Boleh di Isi Angka');

		// $validation->set_rules($pemeriksaan->rules());

		if ($this->form_validation->run() == FALSE) {
			$this->load->view("pemeriksaan/add", $data);
		}
		else 
		{
			$this->PemeriksaanModel->save();
			if ($this->db->affected_rows() > 0) {
				$this->session->set_flashdata('success', 'Data Berhasil Ditambahkan');
				$data2["pemeriksaan"] = $pemeriksaan->getPemeriksaan($id);
				$this->load->view('pemeriksaan/list_pemeriksaan', $data2);
			}
		}
	}

	public function edit($id = null)
	{
		if(!isset($id)) redirect('pemeriksaan');

		$pemeriksaan = $this->PemeriksaanModel;
		$data["pemeriksaan"] = $pemeriksaan->getDetail($id);

		$this->form_validation->set_rules('tgl_periksa', 'Tanggal Periksa', 'required');
		$this->form_validation->set_rules('tensi', 'Tensi Darah', 'required');
		$this->form_validation->set_rules('berat_badan', 'Berat Badan', 'required|numeric');
		$this->form_validation->set_rules('tinggi_badan', 'Tinggi Badan', 'required|numeric');
		$this->form_validation->set_rules('gula_darah', 'Gula Darah', 'required|numeric');
		$this->form_validation->set_rules('kolesterol', 'Kolesterol', 'required|numeric');

		$this->form_validation->set_message('required', '%s Masih Kosong, silahkan isi terlebih dahulu');
		$this->form_validation->set_message('numeric', '%s Hanya Boleh di Isi Angka');

		if ($this->form_validation->run() == FALSE) {
			if ($data["pemeriksaan"]) {
				$this->load->view('pemeriksaan/edit', $data);
			}
			else
			{
				show_404();
			}
		}
		else
		{
			$this->PemeriksaanModel->update();
			if ($this->db->affected_rows() > 0) 
			{
				$this->session->set_flashdata('success', 'Data Berhasil Diubah');
				redirect('pemeriksaan');
			}
			else
			{
				$this->session->set_flashdata('success', 'Data Berhasil Diubah');
				redirect('pemeriksaan');
			}
		}
	}

	public function delete($id = null)
	{
		if(!isset($id)) show_404();
		if($this->PemeriksaanModel->delete($id)){
			$this->session->set_flashdata('success', 'Data Berhasil Dihapus');
			redirect ('pemeriksaan');
		}
	}

}
