<?php
defined('BASEPATH') or exit('No direct script access allowed');

class HomepagePublic extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
		$this->load->helper('date');
		$this->load->helper('array');
		$this->load->library('form_validation');
		$this->load->helper('url');
		$this->load->helper('string');
		$this->load->helper('directory');
		$this->load->helper("file");
	}
	public function index()
	{
		$data['title'] 	 =  APP_NAME;
		$data['content'] = 'public/index';
		$this->load->view('master_public', $data);
	}
}