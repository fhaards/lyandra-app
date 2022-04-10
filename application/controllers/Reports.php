<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Reports extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		redirectIfNotLogin();
		$this->load->model('modelApp');
		$this->load->model('modelTournament');
		$this->load->model('modelUser');
		$this->load->helper('form');
		$this->load->helper('date');
		$this->load->helper('array');
		$this->load->library('form_validation');
		$this->load->library('crumbs');
		$this->load->helper('url');
		$this->load->helper('string');
		$this->load->helper('directory');
		$this->load->helper("file");
	}

	public function reportTournament()
	{
		$this->load->library('pdf');
		$data['title_pdf'] = 'Tournaments';
		$data['item']  = $this->modelTournament->readAll();
		$this->pdf->setPaper('A4', 'landscape');
		$this->pdf->setFileName = "report-tournament.pdf";
		$this->pdf->loadView('pages/reports/reports-tournament', $data);
	}

	public function reportContingent()
	{
		$this->load->library('pdf');
		$data['title_pdf'] = 'Contingents';
		$data['item']  = $this->modelApp->read('contingent');
		$this->pdf->setPaper('A4', 'landscape');
		$this->pdf->setFileName = "report-contingent.pdf";
		$this->pdf->loadView('pages/reports/reports-contingent', $data);
	}

	public function reportUser()
	{
		$this->load->library('pdf');
		$data['title_pdf'] = 'User';
        $data['item'] = $this->modelUser->readAccountAll();
		$this->pdf->setPaper('A4', 'landscape');
		$this->pdf->setFileName = "report-user.pdf";
		$this->pdf->loadView('pages/reports/reports-user', $data);
	}


}
