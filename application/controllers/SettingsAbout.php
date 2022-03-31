<?php
defined('BASEPATH') or exit('No direct script access allowed');

class SettingsAbout extends CI_Controller
{
	protected $table  = 'about';
	protected $tbId   = 'id';
	//FOR ABOUT 
	protected $id  	  = '1';

	function __construct()
	{
		parent::__construct();
		redirectIfNotLogin();
		// $this->load->model('modelAbout');
		$this->load->model('modelApp');
		$this->load->helper('form');
		$this->load->helper('date');
		$this->load->helper('array');
		$this->load->library('form_validation');
		$this->load->helper('url');
	}
	public function index()
	{
		$data['title'] = APP_NAME;
		$data['item']  = $this->modelApp->getId($this->table, $this->tbId, $this->id);
		$data['content'] = 'pages/about/show';
		$this->load->view('master', $data);
	}

	public function update($id)
	{
		$this->form_validation->set_rules('name', 'Company Name', 'required');
		if ($this->form_validation->run() === FALSE) {
			$this->session->set_flashdata('error', 'Error');;
			redirect('settings/about');
		} else {
			$data = array(
				'name' => $this->input->post('name'),
				'phone' => $this->input->post('phone'),
				'email' => $this->input->post('email'),
				'address' => $this->input->post('address'),
				'vision' => $this->input->post('vision'),
				'mission' => $this->input->post('mission')
			);
			$this->modelApp->update($this->table, $this->tbId, $id, $data);
			$this->session->set_flashdata('successEdit', 'Success');
			redirect('settings/about');
		}
	}
}
