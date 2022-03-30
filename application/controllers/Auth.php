<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url_helper');
		$this->load->helper('form');
		$this->load->helper('date');
		$this->load->helper('array');
		$this->load->helper('url');
		$this->load->library('form_validation');
		$this->load->model('modelUser');
	}
	public function index()
	{
		$data['title'] 	 =  APP_NAME;
		$data['content'] = 'auth-login';
		if ($this->session->userdata('status') == "login") {
			redirect(base_url("dashboard"));
		} else {
			$this->form_validation->set_rules('username', 'Username', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');
			if ($this->form_validation->run() === FALSE) {
				$this->load->view('auth', $data);
			} else {
				$username = $this->input->post('username');
				$password = $this->input->post('password');

				$cek = $this->modelUser->cekLogin($username, $password);
				if ($cek) {
					$userData = $this->modelUser->findBy('username', $username);
					$data_session = array('username' => $username, 'status' => "login", 'level' => $userData['level']);
					$this->session->set_userdata($data_session);
					$this->session->set_flashdata('loginMsg', 'Data berhasil ditambahkan');
					redirect(base_url("dashboard"));
				} else {
					$this->session->set_flashdata('errloginMsg', 'Data berhasil ditambahkan');
					redirect(base_url("auth"));
				}
			}
		}
		// $this->load->view('auth');
	}

	public function authProccess()
	{
		$this->load->view('auth');
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('auth');
	}
}
