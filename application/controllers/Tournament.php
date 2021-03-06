<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tournament extends CI_Controller
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

	public function index()
	{
		$this->crumbs->add('Tournament', base_url() . 'tournament');
		$data['breadcrumb'] = $this->crumbs->output();

		$data['title'] = APP_NAME;
		$data['item']  = $this->modelTournament->readAll();
		$data['content'] = 'pages/tournament/index';
		$this->load->view('master', $data);
	}

	public function printCard($id, $userId)
	{
		$this->load->library('pdf');
		$getContingent     = $this->db->get_where('users_account', array('user_id' => $userId))->row_array()['contingent_id'];
		$data['title_pdf'] = 'ID CARD';
		$data['item']      = $this->modelTournament->checkParticipantDetails($id);
		$data['item3']     = $this->modelApp->getId($this->table4, $this->tbId, $id);
		$data['user']      = $this->modelApp->getId('users', 'user_id', $userId);
		$data['userAcc']   = $this->modelApp->getId('users_account', 'user_id', $userId);
		$data['contingent']   = $this->modelApp->getId('contingent', 'contingent_id', $getContingent);
		$this->pdf->setPaper('A4', 'potrait');
		$this->pdf->setFileName = "laporan-petanikode.pdf";
		$this->pdf->loadView('pages/tournament/show-printcard', $data);

		// $html = $this->load->view('pages/tournament/show-printcard', $this->data, true);
		// $this->pdfgenerator->generate($html, $file_pdf, $paper, $orientation);
	}

	public function add()
	{
		$this->crumbs->add('Tournament', base_url() . 'tournament');
		$this->crumbs->add('Add', base_url() . '');
		$data['breadcrumb'] = $this->crumbs->output();

		$data['title'] = APP_NAME;
		$data['item']  = $this->modelApp->read($this->table);
		$data['content'] = 'pages/tournament/add';
		$insertData 	 = [];
		$insertCondition = [];

		$this->form_validation->set_rules('tournament_name', 'Tournament Name', 'required');
		if ($this->form_validation->run() === FALSE) {
			$this->load->view('master', $data);
		} else {
			$setDate = date('dmYhis');
			$setRand = random_string('alnum', 3);
			$setId   = 'TRN' . $setDate . $setRand;
			$tournamentName = $this->input->post('tournament_name');

			$uploadPath = './uploads/tournaments/' . $setId;
			$config = array(
				'upload_path' => $uploadPath,
				'allowed_types' => 'jpg|jpeg|gif|png|webp|pdf',
				'max_size' => '5000',
				'encrypt_name' => true
			);

			$this->load->library('upload', $config);

			if (!is_dir('uploads/tournaments/' . $setId)) {
				mkdir($uploadPath, 0777, true);
			} else {
			}

			if ($this->upload->do_upload("logo")) {
				$productImage1  = array('upload_data' => $this->upload->data());
				$getProductImage1 = $productImage1['upload_data']['file_name'];
			} else {
				$getProductImage1 = $this->input->post('default_img');
			}

			if ($this->upload->do_upload("banner")) {
				$productImage2  = array('upload_data' => $this->upload->data());
				$getProductImage2 = $productImage2['upload_data']['file_name'];
			} else {
				$getProductImage2 = $this->input->post('default_img');
			}

			if ($this->upload->do_upload("rules")) {
				$productImage3  = array('upload_data' => $this->upload->data());
				$getProductImage3 = $productImage3['upload_data']['file_name'];
			} else {
				$getProductImage3 = $this->input->post('default_img');
			}


			$insertData  = array(
				'tournament_id' => $setId,
				'tournament_name' => $tournamentName,
				'type' => $this->input->post('type'),
				'max_participants' => $this->input->post('max_participants'),
				'event_date' => $this->input->post('event_date'),
				'regist_date' => $this->input->post('regist_date'),
				'closed_date' => $this->input->post('closed_date'),
				'created_date' => date("Y-m-d h:i:s"),
				'description' => $this->input->post('description'),
				'venue' => $this->input->post('venue'),
				'venue_map' => $this->input->post('venue_map'),
				'status' =>  '1'
			);

			$insertFile = array(
				'tournament_id' => $setId,
				'logo' => $getProductImage1,
				'banner' => $getProductImage2,
				'rules' => $getProductImage3
			);

			$insertCondition = array(
				'tournament_id' => $setId,
				'min_weight' => $this->input->post('min_weight'),
				'max_weight' => $this->input->post('max_weight')
			);

			$insertTournament = $this->modelApp->insert($this->table, $insertData);
			if ($insertTournament) { //INSERT TO TABLE TOURNAMENT
				$insertConditions = $this->modelApp->insert($this->table3, $insertCondition);
				if ($insertConditions) {
					$insertFiles = $this->modelApp->insert($this->table4, $insertFile);
					if ($insertFiles) {
						$inActivities = array(
							'activities_user' => getUserData()['user_id'],
							'activities_type' => 'Add',
							'activities_text' => 'New Events ' . $tournamentName,
							'activities_date' => date("Y-m-d h:i:s")
						);
						$this->db->insert('activities', $inActivities);
						$this->session->set_flashdata('successInput', 'Data berhasil ditambahkan');
						redirect("tournament/show/$setId");
					} else {
						$this->session->set_flashdata('error', 'Data berhasil ditambahkan');
						redirect("tournament/add");
					}
				}
			}
		}
	}

	public function addParticipant()
	{
		$getUser 	 = $this->input->post('user_id');
		$getTourId   = $this->input->post('tournament_id');
		$insertData  = array(
			'participant_tournament'  => $getTourId,
			'participant_user'  => $getUser,
			'submit_at' => date("Y-m-d h:i:s"),
			'participant_status' => 0
		);
		$inserted = $this->modelApp->insert($this->table2, $insertData);
		if ($inserted) {
			$setTourName =  $this->db->get_where('tournament', array($this->tbId => $getTourId))->row_array()['tournament_name'];
			$inActivities = array(
				'activities_user' => $getUser,
				'activities_type' => 'Register',
				'activities_text' => $setTourName,
				'activities_date' => date("Y-m-d h:i:s")
			);
			$this->db->insert('activities', $inActivities);
			$this->session->set_flashdata('successRegist', 'Data berhasil ditambahkan');
			redirect('tournament');
		}
	}

	public function show($id)
	{
		$this->crumbs->add('Tournament', base_url() . 'tournament');
		$this->crumbs->add('Detail', base_url() . '');
		$data['breadcrumb'] = $this->crumbs->output();

		$data['title']  = APP_NAME;
		$data['item']   = $this->modelApp->getId($this->table, $this->tbId, $id);
		$data['item2']  = $this->modelApp->getId($this->table3, $this->tbId, $id);
		$data['item3']  = $this->modelApp->getId($this->table4, $this->tbId, $id);
		$data['participant']  = $this->modelTournament->readParticipant($id);
		$data['checkMaxParticipant']  = $this->modelTournament->checkParticipantAsMax($id);
		$data['content'] = 'pages/tournament/show';
		$this->load->view('master', $data);
	}

	public function edit($id)
	{
		$this->crumbs->add('Tournament', base_url() . 'tournament');
		$this->crumbs->add('Edit', base_url() . '');
		$data['breadcrumb'] = $this->crumbs->output();

		$data['title'] = APP_NAME;
		$data['item']  = $this->modelApp->getId($this->table, $this->tbId, $id);
		$data['item2']  = $this->modelApp->getId($this->table3, $this->tbId, $id);
		$data['item3']  = $this->modelApp->getId($this->table4, $this->tbId, $id);
		$data['content'] = 'pages/tournament/edit';
		$this->load->view('master', $data);
	}

	public function uploadBracket($id)
	{
		$insertData = [];
		$tourName = $this->input->post('tournament_name');

		$uploadPath = './uploads/tournaments/' . $id;
		$newName = $tourName . "Bracket." . pathinfo($_FILES["bracket"]['name'], PATHINFO_EXTENSION);
		$config = array(
			'upload_path' => $uploadPath,
			'allowed_types' => 'xlsx|xls',
			'max_size' => '5000',
			'file_name' => $newName,
		);
		$this->load->library('upload', $config);

		$bracketFile = $this->input->post('bracket_old');


		if ($this->upload->do_upload("bracket")) {
			unlink($uploadPath . '/' . $bracketFile);
			$upBracketFile  = array('upload_data' => $this->upload->data());
			$setBracketFile = $upBracketFile['upload_data']['file_name'];
		} else {
			$setBracketFile = $bracketFile;
		}

		$insertData = [
			'bracket' => $setBracketFile,
		];


		$updates = $this->modelApp->update($this->table, $this->tbId, $id, $insertData);
		if ($updates) {
			$inActivities = array(
				'activities_user' => getUserData()['user_id'],
				'activities_type' => 'Update',
				'activities_text' => $tourName . ' Bracket',
				'activities_date' => date("Y-m-d h:i:s")
			);
			$this->db->insert('activities', $inActivities);
			$this->session->set_flashdata('successEdit', 'Data berhasil ditambahkan');
			redirect("tournament/show/$id");
		}
	}

	public function updateInfo($id)
	{
		$this->form_validation->set_rules('tournament_name', 'Company Name', 'required');
		if ($this->form_validation->run() === FALSE) {
			$this->session->set_flashdata('error', 'Error');;
			redirect("tournament/edit/$id");
		} else {
			$tourName = $this->input->post('tournament_name');
			$insertData  = array(
				'tournament_name' => $tourName,
				'type' => $this->input->post('type'),
				'max_participants' => $this->input->post('max_participants'),
				'event_date' => $this->input->post('event_date'),
				'regist_date' => $this->input->post('regist_date'),
				'closed_date' => $this->input->post('closed_date'),
				'description' => $this->input->post('description'),
				'venue' => $this->input->post('venue'),
				'venue_map' => $this->input->post('venue_map')
			);

			$updates = $this->modelApp->update($this->table, $this->tbId, $id, $insertData);
			if ($updates) {
				$inActivities = array(
					'activities_user' => getUserData()['user_id'],
					'activities_type' => 'Update',
					'activities_text' => $tourName . ' Information',
					'activities_date' => date("Y-m-d h:i:s")
				);
				$this->db->insert('activities', $inActivities);
				$this->session->set_flashdata('successEdit', 'Success');
				redirect("tournament/edit/$id");
			}
		}
	}

	public function updateCondition($id)
	{
		$this->form_validation->set_rules('min_weight', 'Min Weight', 'required');
		$this->form_validation->set_rules('max_weight', 'Max Weight', 'required');
		if ($this->form_validation->run() === FALSE) {
			$this->session->set_flashdata('error', 'Error');;
			redirect("tournament/edit/$id");
		} else {
			$insertData = array(
				'min_weight' => $this->input->post('min_weight'),
				'max_weight' => $this->input->post('max_weight'),
				'min_age' => $this->input->post('min_age'),
				'max_age' => $this->input->post('max_age')
			);

			$updates = $this->modelApp->update($this->table3, $this->tbId, $id, $insertData);
			if ($updates) {
				$setTourName =  $this->db->get_where('tournament', array($this->tbId => $id))->row_array()['tournament_name'];
				$inActivities = array(
					'activities_user' => getUserData()['user_id'],
					'activities_type' => 'Update',
					'activities_text' => $setTourName . ' Condition',
					'activities_date' => date("Y-m-d h:i:s")
				);
				$this->db->insert('activities', $inActivities);
				$this->session->set_flashdata('successEdit', 'Success');
				redirect("tournament/edit/$id");
			}
		}
	}

	public function updateFile($id)
	{
		$insertData = [];
		$uploadPath = './uploads/tournaments/' . $id;
		$config = array('upload_path' => $uploadPath, 'allowed_types' =>
		'jpg|jpeg|gif|png|webp|pdf', 'max_size' => '5000', 'encrypt_name' => true);
		$this->load->library('upload', $config);

		$imgLogoOld = $this->input->post('logo_old');
		$imgBannerOld = $this->input->post('banner_old');
		$imgRulesOld = $this->input->post('rules_old');
		$tourName = $this->input->post('tournament_name');

		if ($this->upload->do_upload("logo")) {
			unlink($uploadPath . '/' . $imgLogoOld);
			$upImgLogo  = array('upload_data' => $this->upload->data());
			$setImgLogo = $upImgLogo['upload_data']['file_name'];
		} else {
			$setImgLogo = $imgLogoOld;
		}

		if ($this->upload->do_upload("banner")) {
			unlink($uploadPath . '/' . $imgBannerOld);
			$upImgBanner  = array('upload_data' => $this->upload->data());
			$setImgBanner = $upImgBanner['upload_data']['file_name'];
		} else {
			$setImgBanner = $imgBannerOld;
		}

		if ($this->upload->do_upload("rules")) {
			unlink($uploadPath . '/' . $imgRulesOld);
			$upImgRules = array('upload_data' => $this->upload->data());
			$setImgRules = $upImgRules['upload_data']['file_name'];
		} else {
			$setImgRules = $imgRulesOld;
		}

		$insertData = [
			'logo' => $setImgLogo,
			'banner' => $setImgBanner,
			'rules' => $setImgRules
		];

		$updates = $this->modelApp->update($this->table4, $this->tbId, $id, $insertData);
		if ($updates) {
			$inActivities = array(
				'activities_user' => getUserData()['user_id'],
				'activities_type' => 'Update',
				'activities_text' =>  $tourName . ' Image or Rules',
				'activities_date' => date("Y-m-d h:i:s")
			);
			$this->db->insert('activities', $inActivities);
			$this->session->set_flashdata('successEdit', 'Data berhasil ditambahkan');
			redirect("tournament/edit/$id");
		}
	}

	public function updateParticipant($id, $tourid, $status)
	{
		// $tourid = $this->input->get('tournament_id');
		$insertData  = array(
			'participant_status' => $status
		);
		$notifText = "";

		$update = $this->modelApp->update($this->table2, $this->tb2Id, $id, $insertData);
		if ($update) {
			$getToName   = $this->db->get_where('tournament_participant', array($this->tb2Id => $id))->row_array()['participant_user'];
			$getTourName = $this->db->get_where('tournament', array($this->tbId => $tourid))->row_array()['tournament_name'];
			$getLinks    = base_url() . 'tournament/show/' . $tourid;
			if ($status == 1) {
				$notifText = "Approved";
			} else {
				$notifText = "Canceled";
			}

			$insertNotif = array(
				'notif_from' => getUserData()['user_id'],
				'notif_to' => $getToName,
				'notif_title' => 'Registration '. $notifText,
				'notif_msg' => $getTourName,
				'notif_url' => $getLinks,
				'notif_date' => date("Y-m-d h:i:s"),
				'notif_status' => 0
			);
			$this->db->insert('notification', $insertNotif);
			$this->session->set_flashdata('successEdit', 'Success');
			redirect("tournament/show/$tourid");
		} else {
			$this->session->set_flashdata('error', 'Error');;
			redirect("tournament/show/$tourid");
		}
	}

	public function delete($id)
	{
		$retrieveId = $id;
		$path = $this->config->base_url() . 'uploads/tournaments/' . $retrieveId;
		$uploadPath = './uploads/tournaments/' . $retrieveId;
		chmod($uploadPath, 0644);
		if (rmdir($uploadPath)) {
			// $this->modelApp->delete($this->table,  $this->tbId, $retrieveId);
			// $this->modelApp->delete($this->table2, 'participant_tournament', $retrieveId);
			// $this->modelApp->delete($this->table3, $this->tbId, $retrieveId);
			// $this->modelApp->delete($this->table4, $this->tbId, $retrieveId);
			$this->session->set_flashdata('successDelete', 'Data tidak berhasil Dihapus');
			redirect('tournament');
		} else {
			$this->session->set_flashdata('error', 'Data tidak berhasil Dihapus');
			redirect('tournament');
		}
		// if ($deleteFile) {
		// 	$this->modelApp->delete($this->table,  $this->tbId, $retrieveId);
		// 	$this->modelApp->delete($this->table2, 'participant_tournament', $retrieveId);
		// 	$this->modelApp->delete($this->table3, $this->tbId, $retrieveId);
		// 	$this->modelApp->delete($this->table4, $this->tbId, $retrieveId);
		// 	$this->session->set_flashdata('successDelete', 'Data tidak berhasil Dihapus');
		// 	redirect('tournament');
		// } else {
		// 	$this->session->set_flashdata('error', 'Data tidak berhasil Dihapus');
		// 	redirect('tournament');
		// }
	}

	// public function updateBracketMatchRound()
	// {
	// 	$tourid  = $this->input->post('match_tournament_id');
	// 	$getId   = $this->input->post('match_id');
	// 	$mp1     = $this->input->post('match_player_1');
	// 	$mp2     = $this->input->post('match_player_2');
	// 	$result  = array();
	// 	foreach ($getId as $key => $val) {
	// 		$result[$key]  = array(
	// 			'match_id' => $getId[$key],
	// 			'match_player_1' => $mp1[$key],
	// 			'match_player_2' => $mp2[$key],
	// 		);
	// 	}
	// 	$update = $this->db->update_batch($this->table3, $result, 'match_id');
	// 	if ($update) {
	// 		$this->session->set_flashdata('successEdit', 'Success');
	// 		redirect("tournament/show-bracket/$tourid");
	// 	} else {
	// 		$this->session->set_flashdata('error', 'Error');;
	// 		redirect("tournament/show-bracket/$tourid");
	// 	}
	// }

	// public function showBracket($id)
	// {
	// 	$this->crumbs->add('Tournament', base_url() . 'tournament');
	// 	$this->crumbs->add('Bracket', base_url() . '');
	// 	$data['breadcrumb'] = $this->crumbs->output();

	// 	$data['title'] = APP_NAME;
	// 	$data['item']  = $this->modelApp->getId($this->table, $this->tbId, $id);
	// 	$data['approved']  = $this->modelTournament->approvedParticipant($id);
	// 	$data['matchFinal']  = $this->modelTournament->match4Final($this->table3, $id, 'match_name', 'grand_final');
	// 	$data['matchRound']  = $this->modelTournament->match4Round($this->table3, $id, 'match_name', 'match_round_');
	// 	// $data['participant']  = $this->modelTournament->readParticipant($id);
	// 	$data['content'] = 'pages/tournament/show-bracket';
	// 	$this->load->view('master', $data);
	// }
}
