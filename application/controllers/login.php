<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->form_validation->set_rules('username', 'Username', 'required|alpha_numeric');
		$this->form_validation->set_rules('password', 'Password', 'required|alpha_numeric');

		if ($this->form_validation->run() == FALSE) 
		{
			$this->load->view('form_login');
		}
		else 
		{
			$this->load->model('model_users');
			$valid_user = $this->model_users->check_credential();

			if ($valid_user == FALSE) 
			{
				$this->session->set_flashdata('error', 'Wrong Username/Password!');
				redirect('login');
			}
			else
			{
				//if username and password is a match
				$this->session->set_userdata('username', $valid_user->username);
				$this->session->set_userdata('groups', $valid_user->groups);

				switch ($valid_user->groups) {
					case 1 : //admin
						redirect('admin/product');
						break;
					case 2 : //member
						redirect(base_url());
					default:
						# code...
						break;
				}
			}	
		}	
	}

	
	public function logout()
	{
		$this->session->sess_destroy();
		redirect('login');
	}

}
/* End of file login.php */
/* Location: ./application/controllers/login.php */