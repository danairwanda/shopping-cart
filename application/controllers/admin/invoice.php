<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Invoice extends CI_controller {
	public function __construct()
	{
		parent::__construct();

		if ($this->session->userdata('groups') != '1') {
			$this->session->set_flashdata('error','Sorry, you are no logged in!');
			redirect('login');
		}

		//Do your magic here
		$this->load->model('model_orders');
	}


	public function index()
	{
		$data['invoice'] = $this->model_orders->all();
		$this->load->view('backend/admin_menu');
		$this->load->view('backend/view_all_invoice', $data);
	}
	
	public function detail($invoice_id)
	{
		$data['invoice'] = $this->model_orders->get_invoice_by_id($invoice_id);
		$data['orders'] = $this->model_orders->get_orders_by_invoice($invoice_id);
		$this->load->view('backend/admin_menu');
		$this->load->view('backend/view_invoice_detail', $data);
	}
}

/* End of file product.php */
/* Location: ./application/controllers/admin/product.php */