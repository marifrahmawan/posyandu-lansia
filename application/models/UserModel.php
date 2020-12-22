<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class UserModel extends CI_Model
{
	public function getAll()
	{
		$query = $this->db->get("user");
		return $query->result();
	}

	public function login($post){
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('username', $post['username']);
		$this->db->where('password', sha1($post['password']));
		$query = $this->db->get();
		return $query;
	}

	public function getById($id)
	{
		$query = $this->db->get_where('user', ['id_user' => $id])->row();
		return $query;
	}

	public function save()
	{
		$post = $this->input->post(null, TRUE);

		$params['id_user'] = uniqid();
		$params['nama_user'] = $post['nama_user'];
		$params['username'] = $post['username'];
		$params['level'] = $post['level'];
		$params['password'] = sha1($post['password']);

		$this->db->insert('user', $params);
	}

	public function update()
	{
		$post = $this->input->post(null, TRUE);

		$params['id_user'] = $post['id'];
		$params['nama_user'] = $post['nama_user'];
		$params['username'] = $post['username'];
		$params['password'] = sha1($post['password']);

		$this->db->update('user', $params, array('id_user' => $post['id']));
	}

	public function delete($id){
		return $this->db->delete('user', array('id_user' => $id));
	}
}