<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_register extends CI_Model {

	public function all()
	{
		//ambil semua data dari table users
		$hasil = $this->db->get('users');
		if ($hasil->num_rows() > 0) {
			return $hasil->result();
		}
			else
		{
			return array();
		}
	}

	public function find($id)
	{
		//query mencari berdasarkan ID-nya
		$hasil = $this->db->where('id', $id)
					      ->limit(1)
					      ->get('users');
		if ($hasil->num_rows() > 0) {
			return $hasil->row();
		}
		else
		{
			return array();
		}
	}

	public function create($data_register)
	{
		//query insert into database
		$this->db->insert('users', $data_register);
	}

	public function update($id, $data_register)
	{
		//query update from register where id=id
		$this->db->where('id', $id)
				 ->update('users', $data_register);
	}

	public function delete($id)
	{
		//delete berdasarkan id
		$this->db->where('id', $id)
				 ->delete('users');
	}

}

/* End of file model_register.php */
/* Location: ./application/models/model_register.php */