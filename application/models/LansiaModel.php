<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class LansiaModel extends CI_Model
{
	public function getAll()
	{
		$query = $this->db->get("data_lansia");
		return $query->result();
	}

	public function getByid($id)
	{
		$query = $this->db->get_where('data_lansia', ['kode_lansia' => $id])->row();
		return $query;
	}

	public function save()
	{
		$post = $this->input->post(null, TRUE);

		$params['kode_lansia'] = uniqid();
		$params['nama_lansia'] = $post['nama_lansia'];
		$params['alamat'] = $post['alamat'];
		$params['rt'] = $post['rt'];
		$params['jenis_kelamin'] = $post['jenis_kelamin'];
		$params['ttl'] = $post['ttl'];
		$params['umur'] = $post['umur'];
		$params['riwayat_penyakit'] = $post['riwayat_penyakit'];
		$params['jarak'] = $post['jarak'];
		$params['tinggal_bersama'] = $post['tinggal_bersama'];

		$this->db->insert('data_lansia', $params);
	}

	public function update()
	{
		$post = $this->input->post(null, TRUE);

		$params['nama_lansia'] = $post['nama_lansia'];
		$params['alamat'] = $post['alamat'];
		$params['rt'] = $post['rt'];
		$params['jenis_kelamin'] = $post['jenis_kelamin'];
		$params['ttl'] = $post['ttl'];
		$params['umur'] = $post['umur'];
		$params['riwayat_penyakit'] = $post['riwayat_penyakit'];
		$params['jarak'] = $post['jarak'];
		$params['tinggal_bersama'] = $post['tinggal_bersama'];;

		$this->db->update('data_lansia', $params, array('kode_lansia' => $post['id']));
	}

	public function delete($id){
		return $this->db->delete('data_lansia', array('kode_lansia' => $id));
	}
}