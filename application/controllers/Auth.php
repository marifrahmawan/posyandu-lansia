<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller 
{
	public function __construct()

	{
		parent::__construct();
		$this->load->model('UserModel');
	}

	public function index()
	{
		check_already_login();
		$this->load->view('login');
	}

	public function logout(){
		$params = array('id_user', 'username', 'nama', 'level');
		$this->session->unset_userdata($params);

		redirect('auth');
	}

	public function process(){
		$post = $this->input->post(null, TRUE);
		if (isset($post['login'])) {
			$query = $this->UserModel->login($post);
			if ($query->num_rows() > 0) {
				$row = $query->row();
				$params = array(
					'id_user' => $row->id_user,
					'username' => $row->username,
					'nama_user' => $row->nama_user,
					'level' => $row->level
				);
				$this->session->set_userdata($params);
				echo "<script>
						alert('Login Berhasil');
						window.location='".site_url('dashboard')."';
					</script>";
			}
			else {
				echo "<script>
						alert('Login Gagal');
						window.location='".site_url('auth')."';
					</script>";
			}
		}
	}
}
