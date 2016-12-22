<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->model('model_register');
	}
	public function index()
	{
		$data['member'] = $this->model_register->all();
		$this->load->view('backend/admin_menu');
		$this->load->view('view_register', $data);
		
	}

	public function create()
	{
		//form validation sebelum mengeksekusi query insert
		$this->form_validation->set_rules('nama', 'Nama Lengkap', 'required');
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('groups', 'Groups', 'required');

		if ($this->form_validation->run() == FALSE) 
		{
			$this->load->view('tambah_register');
		}
		else 
		{
			$data_register = array(
							 'nama_lengkap' => set_value('nama'), 
							 'username' => set_value('username'), 
							 'password' => set_value('password'), 
							 'groups' => set_value('groups'), 
							 );
			$this->model_register->create($data_register);
			redirect('admin/register');
		}
	}

	public function update($id)
	{
		//form validation sebelum mengeksekusi query insert
		$this->form_validation->set_rules('nama', 'Nama Lengkap', 'required');
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('groups', 'Groups', 'required|integer');

		if ($this->form_validation->run() == FALSE) 
		{
			$data['register'] = $this->model_register->find($id);
			$this->load->view('edit_register', $data);
		}
		else 
		{
			$data_register = array(
					'nama_lengkap' => set_value('nama'), 
					'username' => set_value('username'), 
					'password' => set_value('password'), 
					'groups' => set_value('groups'), 
				);
			$this->model_register->update($id, $data_register);
			redirect('admin/register');
		}
	}

	public function delete($id)
	{
		$this->model_register->delete($id);
		redirect('admin/register');
	}
}

/* End of file register.php */
/* Location: ./application/controllers/register.php */