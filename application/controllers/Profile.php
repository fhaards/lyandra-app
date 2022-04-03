<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends CI_Controller
{

	protected $table        = 'users';
	protected $tableSecond  = 'users_account';
	protected $tbId   		= 'user_id';

	function __construct()
	{
		parent::__construct();
		redirectIfNotLogin();
		$this->load->model('modelApp');
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
		$this->crumbs->add('Profile', base_url() . 'add');
		$data['breadcrumb'] = $this->crumbs->output();

		$id = getUserData()['user_id'];
		$data['title'] = APP_NAME;
		$data['item']  = $this->modelApp->getId($this->tableSecond, $this->tbId,  $id);
		$data['content'] = 'pages/profile/index';
		$this->load->view('master', $data);
	}

	public function add()
	{
		$this->crumbs->add('User', base_url() . 'users');
		$this->crumbs->add('Add', base_url() . '');
		$data['breadcrumb'] = $this->crumbs->output();

		$data['title'] = APP_NAME;
		$data['item']  = $this->modelApp->read($this->table);
		$data['content'] = 'pages/profile/add';
		$insertData = [];

		$this->form_validation->set_rules('users_name', 'User Name', 'required');
		if ($this->form_validation->run() === FALSE) {
			$this->load->view('master', $data);
		} else {
			$setDate = date('dmYhis');
			$setRand = random_string('alnum', 3);
			$setId   = 'TRN' . $setDate . $setRand;


			$uploadPath = './uploads/userss/' . $setId;
			$config = array('upload_path' => $uploadPath, 'allowed_types' =>
			'jpg|jpeg|gif|png|webp|pdf', 'max_size' => '5000', 'encrypt_name' => true);
			$this->load->library('upload', $config);

			if (!is_dir('uploads/userss/' . $setId)) {
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
				'user_id' => $setId,
				'users_name' => $this->input->post('users_name'),
				'max_participants' => $this->input->post('max_participants'),
				'event_date' => $this->input->post('event_date'),
				'regist_date' => $this->input->post('regist_date'),
				'closed_date' => $this->input->post('closed_date'),
				'created_date' => date("Y-m-d h:i:s"),
				'description' => $this->input->post('description'),
				'logo' => $getProductImage1,
				'banner' => $getProductImage2,
				'rules' => $getProductImage3,
				'status' =>  '1'
			);
			$this->modelApp->insert($this->table, $insertData);
			$this->session->set_flashdata('InputMsg', 'Data berhasil ditambahkan');
			redirect('users');
		}
	}

	public function updateFile($id)
	{
		$insertData = [];
		$uploadPath = './uploads/userss/' . $id;
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
		redirect("users/edit/$id");
	}

	public function show($id)
	{
		$this->crumbs->add('User', base_url() . 'users');
		$this->crumbs->add('Detail', base_url() . '');
		$data['breadcrumb'] = $this->crumbs->output();

		$data['title'] = APP_NAME;
		$data['item']  = $this->modelApp->getId($this->table, $this->tbId, $id);
		$data['content'] = 'pages/profile/show';
		$this->load->view('master', $data);
	}

	public function edit($id)
	{
		$this->crumbs->add('User', base_url() . 'users');
		$this->crumbs->add('Edit', base_url() . '');
		$data['breadcrumb'] = $this->crumbs->output();

		$data['title'] = APP_NAME;
		$data['item']  = $this->modelApp->getId($this->table, $this->tbId, $id);
		$data['content'] = 'pages/profile/edit';
		$this->load->view('master', $data);
	}

	public function updateInfo($id)
	{
		$this->form_validation->set_rules('users_name', 'Company Name', 'required');
		if ($this->form_validation->run() === FALSE) {
			$this->session->set_flashdata('error', 'Error');;
			redirect("users/edit/$id");
		} else {
			$insertData  = array(
				'users_name' => $this->input->post('users_name'),
				'max_participants' => $this->input->post('max_participants'),
				'event_date' => $this->input->post('event_date'),
				'regist_date' => $this->input->post('regist_date'),
				'closed_date' => $this->input->post('closed_date'),
				'description' => $this->input->post('description')
			);
			$this->modelApp->update($this->table, $this->tbId, $id, $insertData);
			$this->session->set_flashdata('successEdit', 'Success');
			redirect("users/edit/$id");
		}
	}

	public function delete($id)
	{
		$this->modelApp->delete($this->table, $this->tbId, $id);
		$this->session->set_flashdata('successDelete', 'Data tidak berhasil Dihapus');
		redirect('users');
	}
}
