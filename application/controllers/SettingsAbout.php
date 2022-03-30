<?php
defined('BASEPATH') or exit('No direct script access allowed');

class SettingsAbout extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		redirectIfNotLogin();
		// $this->load->model('m_produkNa');
		$this->load->helper('form');
		$this->load->helper('date');
		$this->load->helper('array');
		$this->load->library('form_validation');
		$this->load->helper('url');
	}
	public function index()
	{
		$data['title'] 	 =  APP_NAME;
		$data['content'] = 'pages/about/show';
		$this->load->view('master', $data);
	}
}