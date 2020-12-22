<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lansia extends CI_Controller 
{
	public function __construct(){
		parent::__construct();
		check_not_login();
		$this->load->model('LansiaModel');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data["data_lansia"] = $this->LansiaModel->getAll();
		$this->load->view('lansia/data_lansia', $data);
	}

	public function detail($id)
	{
		$lansia = $this->LansiaModel;
		$data['lansia'] = $lansia->getById($id);

		$this->load->view('lansia/detail', $data);
	}

	public function add()
	{
		$this->form_validation->set_rules('nama_lansia', 'Nama', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');
		$this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required');
		$this->form_validation->set_rules('ttl', 'Tanggal Lahir', 'required');

		$this->form_validation->set_message('required', '%s Masih Kosong, silahkan isi terlebih dahulu');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('lansia/add');
		}
		else 
		{
			$this->LansiaModel->save();
			if ($this->db->affected_rows() > 0) {
				$this->session->set_flashdata('success', 'Data Berhasil Ditambahkan');
				redirect('lansia');
			}
		}
	}

	public function edit($id = null)
	{
		if(!isset($id)) redirect('lansia');

		$lansia = $this->LansiaModel;

    // if (!$data['mahasiswa']) show_404();

		$this->form_validation->set_rules('nama_lansia', 'Nama', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');
		$this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required');
		$this->form_validation->set_rules('ttl', 'Tanggal Lahir', 'required');

		$this->form_validation->set_message('required', '%s Masih Kosong, silahkan isi terlebih dahulu');

		if ($this->form_validation->run() == FALSE) {
			$data['data_lansia'] = $lansia->getById($id);
			if ($data['data_lansia']) {
				$this->load->view('lansia/edit', $data);
			}
			else {
				show_404();
			}
		}
		else {
			$this->LansiaModel->update();
			if ($this->db->affected_rows() > 0) {
				$this->session->set_flashdata('success', 'Data Berhasil Diubah');
				redirect('lansia');
			}
			else {
				$this->session->set_flashdata('success', 'Data Berhasil Diubah');
				redirect('lansia');
			}
		}
	}

	public function delete($id = null)
	{
		if(!isset($id)) show_404();
		if($this->LansiaModel->delete($id)){
			$this->session->set_flashdata('success', 'Data Berhasil Dihapus');
			redirect('lansia');
		}
	}
}

