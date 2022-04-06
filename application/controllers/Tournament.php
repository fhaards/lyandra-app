<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tournament extends CI_Controller
{

	protected $table  = 'tournament';
	protected $table2 = 'tournament_participant';
	protected $table3 = 'tournament_match';
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
		$data['item']  = $this->modelApp->read($this->table);
		$data['content'] = 'pages/tournament/index';
		$this->load->view('master', $data);
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
		$matchRound 	 = [];
		$matchSemiFinals = [];

		$this->form_validation->set_rules('tournament_name', 'Tournament Name', 'required');
		if ($this->form_validation->run() === FALSE) {
			$this->load->view('master', $data);
		} else {
			$setDate = date('dmYhis');
			$setRand = random_string('alnum', 3);
			$setId   = 'TRN' . $setDate . $setRand;

			$maxPlayer     = $this->input->post('max_participants');
			$countRound    = intval($maxPlayer) / 2;
			$forSemiFinals = $countRound / 2;

			$uploadPath = './uploads/tournaments/' . $setId;
			$config = array('upload_path' => $uploadPath, 'allowed_types' =>
			'jpg|jpeg|gif|png|webp|pdf', 'max_size' => '5000', 'encrypt_name' => true);
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
				'tournament_name' => $this->input->post('tournament_name'),
				'max_participants' => $maxPlayer,
				'event_date' => $this->input->post('event_date'),
				'regist_date' => $this->input->post('regist_date'),
				'closed_date' => $this->input->post('closed_date'),
				'created_date' => date("Y-m-d h:i:s"),
				'description' => $this->input->post('description'),
				'venue' => $this->input->post('venue'),
				'venue_map' => $this->input->post('venue_map'),
				'logo' => $getProductImage1,
				'banner' => $getProductImage2,
				'rules' => $getProductImage3,
				'status' =>  '1'
			);
			$insertTournament = $this->modelApp->insert($this->table, $insertData);
			if ($insertTournament) { //INSERT TO TABLE TOURNAMENT

				if ($maxPlayer == 4) {
					for ($i = 1; $i <= $countRound; $i++) {
						$matchRound[$i] = [
							'match_tournament_id' => $setId,
							'match_name' => 'match_round_' . $i
						];
					}
					#FOR TOURNAMENT MATCH
					$insertMatchRound = $this->modelApp->insertBatch($this->table3, $matchRound);
					if ($insertMatchRound) { //INSERT TO TABLE TOURNAMENT MATCH
						$grandFinals = [
							'match_tournament_id' => $setId,
							'match_name' => 'grand_final'
						];
						$insertGrandFinal = $this->modelApp->insert($this->table3, $grandFinals);
						if ($insertGrandFinal) { //INSERT TO TABLE TOURNAMENT MATCH
							$this->session->set_flashdata('successInput', 'Data berhasil ditambahkan');
							redirect("tournament/show/$setId");
						}
					}
				} else {
					for ($i = 1; $i <= $countRound; $i++) {
						$matchRound[$i] = [
							'match_tournament_id' => $setId,
							'match_name' => 'match_round_' . $i
						];
					}
					#FOR TOURNAMENT MATCH
					$insertMatchRound = $this->modelApp->insertBatch($this->table3, $matchRound);
					if ($insertMatchRound) { //INSERT TO TABLE TOURNAMENT MATCH
						for ($x = 1; $x <= $forSemiFinals; $x++) {
							$matchSemiFinals[$x] = [
								'match_tournament_id' => $setId,
								'match_name' => 'semi_final_' . $x
							];
						}
						$insertSemiFinal = $this->modelApp->insertBatch($this->table3, $matchSemiFinals);
						if ($insertSemiFinal) { //INSERT TO TABLE TOURNAMENT MATCH
							$grandFinals = [
								'match_tournament_id' => $setId,
								'match_name' => 'grand_final'
							];
							$insertGrandFinal = $this->modelApp->insert($this->table3, $grandFinals);
							if ($insertGrandFinal) { //INSERT TO TABLE TOURNAMENT MATCH
								$this->session->set_flashdata('successInput', 'Data berhasil ditambahkan');
								redirect("tournament/show/$setId");
							}
						}
					}
				}
			}
		}
	}

	public function addParticipant()
	{
		$insertData  = array(
			'participant_tournament'  => $this->input->post('tournament_id'),
			'participant_user'  => $this->input->post('user_id'),
			'submit_at' => date("Y-m-d h:i:s"),
			'participant_status' => 0
		);
		$this->modelApp->insert($this->table2, $insertData);
		$this->session->set_flashdata('InputMsg', 'Data berhasil ditambahkan');
		redirect('tournament');
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

		$this->modelApp->update($this->table, $this->tbId, $id, $insertData);
		$this->session->set_flashdata('InputMsg', 'Data berhasil ditambahkan');
		redirect("tournament/edit/$id");
	}

	public function show($id)
	{
		$this->crumbs->add('Tournament', base_url() . 'tournament');
		$this->crumbs->add('Detail', base_url() . '');
		$data['breadcrumb'] = $this->crumbs->output();

		$data['title'] = APP_NAME;
		$data['item']  = $this->modelApp->getId($this->table, $this->tbId, $id);
		$data['participant']  = $this->modelTournament->readParticipant($id);
		$data['checkMaxParticipant']  = $this->modelTournament->checkParticipantAsMax($id);
		$data['content'] = 'pages/tournament/show';
		$this->load->view('master', $data);
	}

	public function showBracket($id)
	{
		$this->crumbs->add('Tournament', base_url() . 'tournament');
		$this->crumbs->add('Bracket', base_url() . '');
		$data['breadcrumb'] = $this->crumbs->output();

		$data['title'] = APP_NAME;
		$data['item']  = $this->modelApp->getId($this->table, $this->tbId, $id);
		$data['approved']  = $this->modelTournament->approvedParticipant($id);
		$data['matchFinal']  = $this->modelTournament->match4Final($this->table3, $id, 'match_name', 'grand_final');
		$data['matchRound']  = $this->modelTournament->match4Round($this->table3, $id, 'match_name', 'match_round_');
		// $data['participant']  = $this->modelTournament->readParticipant($id);
		$data['content'] = 'pages/tournament/show-bracket';
		$this->load->view('master', $data);
	}

	public function updateBracketMatchRound()
	{
		$tourid  = $this->input->post('match_tournament_id');
		$getId   = $this->input->post('match_id');
		$mp1     = $this->input->post('match_player_1');
		$mp2     = $this->input->post('match_player_2');

		$result  = array();		
		foreach ($getId as $key => $val) {
			$result[$key]  = array(
				'match_id' => $getId[$key],
				'match_player_1' => $mp1[$key],
				'match_player_2' => $mp2[$key],
			);
		}         

		// var_dump($result);
		// exit;

		$update = $this->db->update_batch($this->table3, $result, 'match_id');
		// $update = $this->modelApp->updateBatch($this->table3, $result, $getId );
		if ($update) {
			$this->session->set_flashdata('successEdit', 'Success');
			redirect("tournament/show-bracket/$tourid");
		} else {
			$this->session->set_flashdata('error', 'Error');;
			redirect("tournament/show-bracket/$tourid");
		}
	}


	public function edit($id)
	{
		$this->crumbs->add('Tournament', base_url() . 'tournament');
		$this->crumbs->add('Edit', base_url() . '');
		$data['breadcrumb'] = $this->crumbs->output();

		$data['title'] = APP_NAME;
		$data['item']  = $this->modelApp->getId($this->table, $this->tbId, $id);
		$data['content'] = 'pages/tournament/edit';
		$this->load->view('master', $data);
	}

	public function updateInfo($id)
	{
		$this->form_validation->set_rules('tournament_name', 'Company Name', 'required');
		if ($this->form_validation->run() === FALSE) {
			$this->session->set_flashdata('error', 'Error');;
			redirect("tournament/edit/$id");
		} else {
			$insertData  = array(
				'tournament_name' => $this->input->post('tournament_name'),
				'max_participants' => $this->input->post('max_participants'),
				'event_date' => $this->input->post('event_date'),
				'regist_date' => $this->input->post('regist_date'),
				'closed_date' => $this->input->post('closed_date'),
				'description' => $this->input->post('description'),
				'venue' => $this->input->post('venue'),
				'venue_map' => $this->input->post('venue_map')
			);
			$this->modelApp->update($this->table, $this->tbId, $id, $insertData);
			$this->session->set_flashdata('successEdit', 'Success');
			redirect("tournament/edit/$id");
		}
	}

	public function updateParticipant($id, $tourid, $status)
	{
		// $tourid = $this->input->get('tournament_id');
		$insertData  = array(
			'participant_status' => $status
		);
		$update = $this->modelApp->update($this->table2, $this->tb2Id, $id, $insertData);
		if ($update) {
			$this->session->set_flashdata('successEdit', 'Success');
			redirect("tournament/show/$tourid");
		} else {
			$this->session->set_flashdata('error', 'Error');;
			redirect("tournament/show/$tourid");
		}
	}

	public function delete($id)
	{
		$this->modelApp->delete($this->table, $this->tbId, $id);
		$this->session->set_flashdata('successDelete', 'Data tidak berhasil Dihapus');
		redirect('tournament');
	}
}
