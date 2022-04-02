<?php
defined('BASEPATH') or exit('No direct script access allowed');

class HomepagePublic extends CI_Controller
{
	protected $tourTable = 'tournament';
	protected $tourId	 = 'tournament_id';

	function __construct()
	{
		parent::__construct();
		$this->load->model('modelApp');
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
		$data['item']  = $this->modelApp->read($this->tourTable);
		$this->load->view('master_public', $data);
	}

	public function show()
	{
		$id   = $this->input->post('id');
		$data = $this->modelApp->getId($this->tourTable, $this->tourId, $id);
		echo json_encode($data);
	}
}
