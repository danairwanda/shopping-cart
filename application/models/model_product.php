<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_product extends CI_Model {

	public function all()
		{
			//query semua record di table product
			$hasil = $this->db->get('product');
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
			//Query mencari berdasarkan ID-nya
			$hasil = $this->db->where('id', $id)
							  ->limit(1)
							  ->get('product');
			if ($hasil->num_rows() > 0) {
				return $hasil->row();
			}
			else
			{
				return array();
			}
		}

		public function create($data_product)
		{
			//Query insert into 
			$this->db->insert('product', $data_product);
		}

		public function update($id, $data_product)
		{
			//Query update from product where id=id
			$this->db->where('id', $id) 
					 ->update('product', $data_product);
		}

		public function delete($id)
		{
			//delete bersadarkan id
			$this->db->where('id', $id)
					 ->delete('product');
		}

}

/* End of file model_product.php */
/* Location: ./application/models/model_product.php */