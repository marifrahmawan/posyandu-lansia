<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Diagnosa extends CI_Controller 
{
	public function __construct(){
		parent::__construct();
		check_not_login();
		$this->load->model('DiagnosaModel');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data["data_penyakit"] = $this->DiagnosaModel->getAll();
		$this->load->view('diagnosa/data_diagnosa', $data);
	}

	public function add()
	{
		$this->form_validation->set_rules('nama_penyakit', 'Nama Diagnosa', 'required');

		$this->form_validation->set_message('required', '%s Masih Kosong, silahkan isi terlebih dahulu');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('diagnosa/add');
		}
		else
		{
			$this->DiagnosaModel->save();
			if ($this->db->affected_rows() > 0) {
				$this->session->set_flashdata('success', 'Data Berhasil Ditambah');
				redirect('diagnosa');
			}
		}
	}

	public function detail($id = null)
	{
		$data_penyakit = $this->DiagnosaModel;
		$data['data_penyakit'] = $data_penyakit->getById($id);;

		$this->load->view('diagnosa/detail', $data);
	}

	public function edit($id = null)
	{
		if(!isset($id)) show_404();

		$data_penyakit = $this->DiagnosaModel;
		$data['data_penyakit'] = $data_penyakit->getById($id);;

		$this->form_validation->set_rules('nama_penyakit', 'Nama Diagnosa', 'required');

		$this->form_validation->set_message('required', '%s Masih Kosong, silahkan isi terlebih dahulu');

		if ($this->form_validation->run() == FALSE) {
			if ($data['data_penyakit']) {
				$this->load->view('diagnosa/edit', $data);
			}
			else
			{
				show_404();
			}
		}
		else
		{
			$this->DiagnosaModel->update();
			if ($this->db->affected_rows > 0) {
				$this->session->set_flashdata('success', 'Data Berhasi Diubah');
				redirect('diagnosa');
			}
			else
			{
				$this->session->set_flashdata('success', 'Data Berhasi Diubah');
				redirect('diagnosa');
			}
		}
	}

	public function delete ($id = null)
	{
		if(!isset($id)) show_404();
		if($this->DiagnosaModel->delete($id)){
			$this->session->set_flashdata('success', 'Data Berhasil Dihapus');
			redirect('diagnosa');
		}
	}
}

