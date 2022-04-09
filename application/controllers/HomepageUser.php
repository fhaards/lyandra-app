<?php
defined('BASEPATH') or exit('No direct script access allowed');

class HomepageUser extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		redirectIfNotLogin();
		$this->load->model('modelTournament');
		$this->load->model('modelDashboard');
		$this->load->helper('form');
		$this->load->helper('date');
		$this->load->helper('array');
		$this->load->library('crumbs');
		$this->load->library('form_validation');
		$this->load->helper('url');
	}
	public function index()
	{
		// $this->crumbs->add('Dashboard', base_url() . 'settings/about');
		$data['breadcrumb'] = $this->crumbs->output();
		$data['item']  = $this->modelTournament->readAllOrderLimit();
		$data['activities']  = $this->modelDashboard->readActivities(getUserData()['user_id']);
		$data['title'] 	 =  APP_NAME;
		$data['content'] = 'dashboard';
		$this->load->view('master', $data);
	}
}
