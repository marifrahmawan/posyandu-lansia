<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class DiagnosaModel extends CI_Model
{
	public function getAll()
	{
		$query = $this->db->get("data_penyakit");
		return $query->result();
	}

	public function getById($id)
	{
		$query = $this->db->get_where('data_penyakit', ['kode_penyakit' => $id])->row();
		return $query;
	}

	public function save()
	{
		$post = $this->input->post(null, TRUE);

		$params['kode_penyakit'] = uniqid();
		$params['nama_penyakit'] = $post['nama_penyakit'];
		$params['anjuran'] = $post['anjuran'];
		$params['pantangan'] = $post['pantangan'];

		$this->db->insert('data_penyakit', $params);
	}

	public function update()
	{
		$post = $this->input->post(null, TRUE);

		$params['nama_penyakit'] = $post['nama_penyakit'];
		$params['anjuran'] = $post['anjuran'];
		$params['pantangan'] = $post['pantangan'];

		$this->db->update('data_penyakit', $params, array('kode_penyakit' => $post['id']));
	}

	public function delete($id = null)
	{
		return $this->db->delete('data_penyakit', array('kode_penyakit' => $id));
	}
}