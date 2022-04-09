<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Contingent extends CI_Controller
{

	protected $table  = 'contingent';
	protected $tbId   = 'contingent_id';

	function __construct()
	{
		parent::__construct();
		redirectIfNotLogin();
		$this->load->model('modelApp');
		$this->load->model('modelContingent');
		$this->load->helper('form');
		$this->load->helper('date');
		$this->load->helper('array');
		$this->load->library('crumbs');
		$this->load->library('form_validation');
		$this->load->helper('url');
		$this->load->helper('string');
		$this->load->helper('directory');
		$this->load->helper("file");
	}

	public function index()
	{
		$this->crumbs->add('Contingent', base_url() . 'contingent');
		$data['breadcrumb'] = $this->crumbs->output();

		$data['title'] = APP_NAME;
		$data['item']  = $this->modelContingent->read($this->table);
		$data['content'] = 'pages/contingent/index';
		$this->load->view('master', $data);
	}

	public function add()
	{
		$this->crumbs->add('Contingent', base_url() . 'contingent');
		$this->crumbs->add('Add', base_url() . 'contingent/add');
		$data['breadcrumb'] = $this->crumbs->output();

		$data['title'] = APP_NAME;
		$data['item']  = $this->modelApp->read($this->table);
		$data['content'] = 'pages/contingent/add';
		$insertData = [];

		$this->form_validation->set_rules('contingent_name', 'contingent Name', 'required');
		if ($this->form_validation->run() === FALSE) {
			$this->load->view('master', $data);
		} else {
			$contName = $this->input->post('contingent_name');
			$insertData  = array(
				'contingent_name'  => $contName,
				'contingent_phone' => $this->input->post('contingent_phone'),
				'contingent_address' => $this->input->post('contingent_address'),
				'contingent_status' => 1,
				'created_by' => getUserData()['user_id'],
				'contingent_createdat' => date("Y-m-d h:i:s")
			);

			$inActivities = array(
				'activities_user' => getUserData()['user_id'],
				'activities_type' => 'Add',
				'activities_text' => 'New Contingent ' . $contName,
				'activities_date' => date("Y-m-d h:i:s")
			);
			$this->db->insert('activities', $inActivities);
			$this->modelApp->insert($this->table, $insertData);
			$this->session->set_flashdata('InputMsg', 'Data berhasil ditambahkan');
			redirect('contingent');
		}
	}

	public function show($id)
	{
		$data['title'] = APP_NAME;
		$data['item']  = $this->modelApp->getId($this->table, $this->tbId, $id);
		$data['content'] = 'pages/contingent/show';
		$this->load->view('master', $data);
	}

	public function edit($id)
	{
		$this->crumbs->add('Contingent', base_url() . 'contingent');
		$this->crumbs->add('Edit', base_url() . 'contingent/edit');
		$data['breadcrumb'] = $this->crumbs->output();

		$data['title'] = APP_NAME;
		$data['item']  = $this->modelApp->getId($this->table, $this->tbId, $id);
		$data['content'] = 'pages/contingent/edit';
		$this->load->view('master', $data);
	}

	public function update($id)
	{
		$this->form_validation->set_rules('contingent_name', 'Company Name', 'required');
		if ($this->form_validation->run() === FALSE) {
			$this->session->set_flashdata('error', 'Error');;
			redirect("contingent/edit/$id");
		} else {
			$contName = $this->input->post('contingent_name');
			$insertData  = array(
				'contingent_name'  => $contName,
				'contingent_phone' => $this->input->post('contingent_phone'),
				'contingent_address' => $this->input->post('contingent_address'),
				'contingent_status' => $this->input->post('contingent_status')
			);

			$updates = $this->modelApp->update($this->table, $this->tbId, $id, $insertData);
			if ($updates) {
				$inActivities = array(
					'activities_user' => getUserData()['user_id'],
					'activities_type' => 'Update',
					'activities_text' => 'Contingent '. $contName . ' Changed',
					'activities_date' => date("Y-m-d h:i:s")
				);
				$this->db->insert('activities', $inActivities);
				$this->session->set_flashdata('successEdit', 'Success');
				redirect("contingent");
			}
		}
	}

	public function delete($id)
	{
		$this->modelApp->delete($this->table, $this->tbId, $id);
		$this->session->set_flashdata('successDelete', 'Data tidak berhasil Dihapus');
		redirect('contingent');
	}
}
