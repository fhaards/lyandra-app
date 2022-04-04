<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

    protected $table        = 'users';
    protected $tableSecond  = 'users_account';
    protected $tbId           = 'user_id';

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
        $this->crumbs->add('User List', base_url() . '');
        $data['breadcrumb'] = $this->crumbs->output();

        $data['title'] = APP_NAME;
        $data['item']  = $this->modelApp->readExcept($this->table, 'level', 'superadmin');
        $data['content'] = 'pages/user/index';
        $this->load->view('master', $data);
    }

    public function update($id)
    {
        $insertData  = array(
            'user_status' => $this->input->get('user_status'),
        );
        $updateAccount = $this->modelApp->update($this->table, $this->tbId, $id, $insertData);
        if ($updateAccount) {
            $this->session->set_flashdata('successEdit', 'Success');
            redirect("user");
        } else {
            $this->session->set_flashdata('error', 'Error');;
            redirect("user");
        }
    }
}
