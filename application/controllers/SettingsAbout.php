<?php
defined('BASEPATH') or exit('No direct script access allowed');

class SettingsAbout extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		redirectIfNotLogin();
		$this->load->model('modelAbout');
		$this->load->helper('form');
		$this->load->helper('date');
		$this->load->helper('array');
		$this->load->library('form_validation');
		$this->load->helper('url');
	}
	public function index()
	{
		$data['title'] = APP_NAME;
		$data['item']  = $this->modelAbout->getId();
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
			$this->modelAbout->update($id);
			$this->session->set_flashdata('successEdit', 'Success');
			redirect('settings/about');
		}
	}
}
