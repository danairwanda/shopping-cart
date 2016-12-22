<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_controller {
	public function __construct()
	{
		parent::__construct();

		if ($this->session->userdata('groups') != '1') {
			$this->session->set_flashdata('error','Sorry, you are no logged in!');
			redirect('login');
		}

		//Do your magic here
		$this->load->model('model_product');
	}


	public function index()
	{
		$data['product'] = $this->model_product->all();
		$this->load->view('backend/admin_menu');  	
		$this->load->view('backend/view_all_product', $data);
	}
	
	public function create()
	{
		//form validation sebelum mengeksekusi query insert
		$this->form_validation->set_rules('name', 'Product Name', 'required');
		$this->form_validation->set_rules('description', 'Description', 'required');
		$this->form_validation->set_rules('price', 'Price', 'required|integer');
		$this->form_validation->set_rules('stok', 'Stock', 'required|integer');
		//$this->form_validation->set_rules('userfile', 'Product Image', 'required');

		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('backend/tambah_view_product');
		}
		else
		{
			//load uploading file library
			$config['upload_path'] = './uploads/';
			$config['allowed_types'] = 'jpg|png';
			$config['max_size']	= '100'; //MB
			$config['max_width']  = '1024'; //pixel
			$config['max_height']  = '768'; //pixels

			$this->load->library('upload', $config);
			if ( ! $this->upload->do_upload())
			{
				//file gagal diupload -> kembali ke form tambah
				$this->load->view('backend/tambah_view_product');
			}
			else
			{
				//file berhasil diupload -> lanjutkan ke query insert
				//eksekusi query insert
			$gambar = $this->upload->data();
			$data_product = array(
							'name' 			=> set_value('name'),
							'description' 	=> set_value('description'),
							'price' 		=> set_value('price'),
							'stok' 			=> set_value('stok'),
							'image'			=> $gambar['file_name']
							);
			$this->model_product->create($data_product);
			redirect('admin/product');
		}

		
	}
}
	
	public function update($id)
	{
		$this->form_validation->set_rules('name', 'Product Name', 'required');
		$this->form_validation->set_rules('description', 'Description', 'required');
		$this->form_validation->set_rules('price', 'Price', 'required|integer');
		$this->form_validation->set_rules('stok', 'Stock',  'required|integer');
		//$this->form_validation->set_rules('userfile', 'Product Image',  'required');

		if ($this->form_validation->run() == FALSE)
		{
			$data['product']= $this->model_product->find($id);
			$this->load->view('backend/edit_view_product', $data);
		}
		else
		{
			if ($_FILES['userfile']['name'] != '') {
			//Form submit gambar diisi
			//load uploading file library
			$config['upload_path'] = './uploads/';
			$config['allowed_types'] = 'jpg|png';
			$config['max_size']	= '300'; //MB
			$config['max_width']  = '2000'; //pixel
			$config['max_height']  = '2000'; //pixels

			$this->load->library('upload', $config);
			
			if ( ! $this->upload->do_upload())
			{
				$data['product']= $this->model_product->find($id);
				$this->load->view('backend/edit_view_product', $data);
			}
			else
			{
				$gambar = $this->upload->data();
				$data_product = array(
							'name' 			=> set_value('name'),
							'description' 	=> set_value('description'),
							'price' 		=> set_value('price'),
							'stok' 			=> set_value('stok'),
							'image'			=> $gambar['file_name']
							);
				$this->model_product->update($id, $data_product);
				redirect('admin/product');

				}
			}
			else
			{
				//form submit dengan gambar dikosongkan
				$data_product = array(
							'name' 			=> set_value('name'),
							'description' 	=> set_value('description'),
							'price' 		=> set_value('price'),
							'stok' 			=> set_value('stok')
							);
				$this->model_product->update($id, $data_product);
				redirect('admin/product');

			}
		}
	}

	public function delete($id)
	{ 
		$this->model_product->delete($id); 
		redirect('admin/product');

	}
}

/* End of file product.php */
/* Location: ./application/controllers/admin/product.php */