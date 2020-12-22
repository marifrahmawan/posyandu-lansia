<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class PemeriksaanModel extends CI_Model
{
	public function getAll()
	{
		$query = $this->db->get("data_lansia");
		return $query->result();
	}

	public function getPemeriksaan($id){
		$this->db->select('*');
		$this->db->from('pemeriksaan');
		$this->db->join('data_lansia', 'data_lansia.kode_lansia = pemeriksaan.kode_lansia', 'inner');
		$this->db->where('pemeriksaan.kode_lansia',$id);
		$query = $this->db->get();
		return $query->result();
	}

	public function getDetail($id){
		$this->db->select('*');
		$this->db->from('pemeriksaan');
		$this->db->join('data_lansia', 'data_lansia.kode_lansia = pemeriksaan.kode_lansia', 'left');
		$this->db->join('data_penyakit', 'data_penyakit.nama_penyakit = pemeriksaan.diagnosa', 'left');
		$this->db->where('pemeriksaan.kode_periksa',$id);
		$query = $this->db->get()->row();
		return $query;
			// return $this->db->get_where($this->table, ["kode_lansia" => $id])->row();
	}

	public function getById($id){
		$this->db->select('*');
		$this->db->from('data_lansia');
			// $this->db->join('pemeriksaan', 'data_lansia.kode_lansia = pemeriksaan.kode_lansia', 'inner');
		$this->db->where('kode_lansia',$id);
		$query = $this->db->get()->row();
		return $query;
  		// return $this->db->get_where($this->table, ["kode_lansia" => $id])->row();
	}

	public function save()
	{
		$post = $this->input->post(null, TRUE);

		$params['kode_periksa'] = uniqid();
		$params['kode_lansia'] = $post['kode_lansia'];
		$params['tgl_periksa'] = $post['tgl_periksa'];
		$params['tensi'] = $post['tensi'];
		$params['berat_badan'] = $post['berat_badan'];
		$params['tinggi_badan'] = $post['tinggi_badan'];
		$params['gula_darah'] = $post['gula_darah'];
		$params['kolesterol'] = $post['kolesterol'];
		$params['diagnosa'] = $post['diagnosa'];
		$params['keluhan'] = $post['keluhan'];
		$params['perawatan_tambahan'] = $post['perawatan_tambahan'];

		$this->db->insert('pemeriksaan', $params);
	}

	public function update()
	{
		$post = $this->input->post(null, TRUE);

		$params['kode_periksa'] = $post['id'];
		$params['kode_lansia'] = $post['kode_lansia'];
		$params['tgl_periksa'] = $post['tgl_periksa'];
		$params['tensi'] = $post['tensi'];
		$params['berat_badan'] = $post['berat_badan'];
		$params['tinggi_badan'] = $post['tinggi_badan'];
		$params['gula_darah'] = $post['gula_darah'];
		$params['kolesterol'] = $post['kolesterol'];
		if (empty($post['diagnosa'])) 
		{
			$params['diagnosa'] = $post['old_diagnosa'];
		}
		else
		{
			$params['diagnosa'] = $post['diagnosa'];	
		}

		if (empty($post['perawatan_tambahan'])) 
		{
			$params['perawatan_tambahan'] = $post['old_perawatan_tambahan'];
		}
		else
		{
			$params['perawatan_tambahan'] = $post['perawatan_tambahan'];
		}

		$params['keluhan'] = $post['keluhan'];
		$this->db->update('pemeriksaan', $params, array('kode_periksa' => $post['id']));
	}

	public function delete($id)
	{
		return $this->db->delete('pemeriksaan', array('kode_periksa' => $id));
	}
}