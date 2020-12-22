<?php 
/**
 * 
 */
class User extends CI_Controller 
{
	
	public function __construct()
	{
		parent::__construct();
		check_not_login();
		$this->load->model('UserModel');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data["user"] = $this->UserModel->getAll();
		$this->load->view('user/list', $data);
	}

	public function add()
	{
		$this->form_validation->set_rules('nama_user', 'Nama', 'required');
		$this->form_validation->set_rules('username', 'Username', 'required|min_length[5]|is_unique[user.username]');
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[5]');
		$this->form_validation->set_rules('password_conf', 'Konfirmasi Password', 'required|matches[password]');

		$this->form_validation->set_message('required', '%s Masih Kosong, silahkan isi terlebih dahulu');
		$this->form_validation->set_message('matches', '%s yang Anda Masukkan tidak sama');
		$this->form_validation->set_message('min_length', '%s Minimal 5 karakter');
		$this->form_validation->set_message('is_unique', '%s Sudah digunakan');
		
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('user/add');
		}
		else
		{
			$this->UserModel->save();
			if ($this->db->affected_rows() > 0)
			{
				$this->session->set_flashdata('success', 'Data Berhasil Ditambahkan');
				redirect('user');
			}
		}
	}

	public function settings($id = null)
	{
		
		$user = $this->UserModel;
		$data['user'] = $user->getById($id);

		$this->form_validation->set_rules('nama_user', 'Nama User Periksa', 'required');
		$this->form_validation->set_rules('username', 'Username', 'required|min_length[5]');
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[5]');
		$this->form_validation->set_rules('password_conf', 'Konfirmasi Password', 'required|matches[password]');

		$this->form_validation->set_message('required', '%s Masih Kosong, silahkan isi terlebih dahulu');
		$this->form_validation->set_message('matches', '%s yang Anda Masukkan tidak sama');
		$this->form_validation->set_message('min_length', '%s Minimal 5 karakter');

		if ($this->form_validation->run() == FALSE) {
			if($data['user']){
				$this->load->view('user/settings', $data);
			}
			else
			{
				show_404();
			}
		}
		else
		{
			$this->UserModel->update();
			if ($this->db->affected_rows() > 0) 
			{
				$this->session->set_flashdata('success', 'Data Berhasil Diubah');
				redirect('dashboard');
			}
		}	
	}

	public function delete($id = null)
	{
		if(!isset($id)) show_404();
		if($this->UserModel->delete($id)){
			$this->session->set_flashdata('success', 'Data Berhasil Dihapus');
			redirect('user');
		}
	}
}
?>