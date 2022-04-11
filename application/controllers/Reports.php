<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Reports extends CI_Controller
{
	protected $table  = 'tournament';
	protected $table2 = 'tournament_participant';
	protected $table3 = 'tournament_condition';
	protected $table4 = 'tournament_file';
	protected $tbId   = 'tournament_id';
	protected $tb2Id  = 'participant_id';

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

	public function reportTournamentDetail($id)
	{
		$this->load->library('pdf');
		$getTourName     = $this->db->get_where($this->table, array($this->tbId => $id))->row_array()['tournament_name'];
		$data['title_pdf'] = 'Tournaments Detail <br> ' . $getTourName;
		$data['item']   = $this->modelApp->getId($this->table, $this->tbId, $id);
		$data['item2']  = $this->modelApp->getId($this->table3, $this->tbId, $id);
		$data['item3']  = $this->modelApp->getId($this->table4, $this->tbId, $id);
		$data['participant']  = $this->modelTournament->readParticipant($id);
		$data['checkMaxParticipant']  = $this->modelTournament->checkParticipantAsMax($id);
		$this->pdf->setPaper('A4', 'potrait');
		$this->pdf->setFileName = "report-tournament.pdf";
		$this->pdf->loadView('pages/reports/reports-tournament-detail', $data);
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
