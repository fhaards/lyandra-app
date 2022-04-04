<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Participant extends CI_Controller
{

	protected $table  = 'tournament_participant';
	protected $tbId   = 'participant_id';

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
		$this->crumbs->add('Participant', base_url() . 'participant');
		$data['breadcrumb'] = $this->crumbs->output();

		$data['title'] = APP_NAME;
		$data['item']  = $this->modelApp->read($this->table);
		$data['content'] = 'pages/participant/index';
		$this->load->view('master', $data);
	}

	public function add()
	{
		$insertData  = array(
			'tournament_id'  => $this->input->post('tournament_id'),
			'user_id'  => $this->input->post('user_id'),
			'submit_at' => date("Y-m-d h:i:s"),
			'participant_status' => 0
		);
		$this->modelApp->insert($this->table, $insertData);
		$this->session->set_flashdata('InputMsg', 'Data berhasil ditambahkan');
		redirect('tournament');
	}

	public function show($id)
	{
		$data['title'] = APP_NAME;
		$data['item']  = $this->modelApp->getId($this->table, $this->tbId, $id);
		$data['content'] = 'pages/participant/show';
		$this->load->view('master', $data);
	}

	public function edit($id)
	{
		$this->crumbs->add('Contingent', base_url() . 'participant');
		$this->crumbs->add('Edit', base_url() . 'participant/edit');
		$data['breadcrumb'] = $this->crumbs->output();

		$data['title'] = APP_NAME;
		$data['item']  = $this->modelApp->getId($this->table, $this->tbId, $id);
		$data['content'] = 'pages/participant/edit';
		$this->load->view('master', $data);
	}

	public function update($id)
	{
		$this->form_validation->set_rules('participant_name', 'Company Name', 'required');
		if ($this->form_validation->run() === FALSE) {
			$this->session->set_flashdata('error', 'Error');;
			redirect("participant/edit/$id");
		} else {
			$insertData  = array(
				'participant_name'  => $this->input->post('participant_name'),
				'participant_phone' => $this->input->post('participant_phone'),
				'participant_address' => $this->input->post('participant_address'),
				'participant_status' => $this->input->post('participant_status')
			);
			$this->modelApp->update($this->table, $this->tbId, $id, $insertData);
			$this->session->set_flashdata('successEdit', 'Success');
			redirect("participant");
		}
	}

	public function delete($id)
	{
		$this->modelApp->delete($this->table, $this->tbId, $id);
		$this->session->set_flashdata('successDelete', 'Data tidak berhasil Dihapus');
		redirect('participant');
	}
}
