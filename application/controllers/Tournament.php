<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tournament extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		redirectIfNotLogin();
		$this->load->model('modelTournament');
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
		$data['title'] = APP_NAME;
		$data['item']  = $this->modelTournament->read();
		$data['content'] = 'pages/tournament/index';
		$this->load->view('master', $data);
	}

	public function add()
	{
		$data['title'] = APP_NAME;
		$data['item']  = $this->modelTournament->read();
		$data['content'] = 'pages/tournament/add';
		$insert = [];

		$this->form_validation->set_rules('tournament_name', 'Tournament Name', 'required');
		if ($this->form_validation->run() === FALSE) {
			$this->load->view('master', $data);
		} else {
			$setDate = date('dmYhis');
			$setRand = random_string('alnum', 3);
			$setId   = 'TRN' . $setDate . $setRand;


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


			$insert  = array(
				'tournament_id' => $setId,
				'tournament_name' => $this->input->post('tournament_name'),
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
			$this->modelTournament->insert($insert);
			$this->session->set_flashdata('InputMsg', 'Data berhasil ditambahkan');
			redirect('tournament');
		}
	}

	public function update($id)
	{
		$this->form_validation->set_rules('name', 'Company Name', 'required');
		if ($this->form_validation->run() === FALSE) {
			$this->session->set_flashdata('error', 'Error');;
			redirect('settings/about');
		} else {
			$this->modelTournament->update($id);
			$this->session->set_flashdata('successEdit', 'Success');
			redirect('settings/about');
		}
	}

	public function show($id){
		$data['title'] = APP_NAME;
		$data['item']  = $this->modelTournament->getId($id);
		$data['content'] = 'pages/tournament/show';
		$this->load->view('master', $data);
	}

	public function delete($id)
	{
		$this->modelTournament->delete($id);
		$this->session->set_flashdata('successDelete', 'Data tidak berhasil Dihapus');
		redirect('tournament');
	}
}
