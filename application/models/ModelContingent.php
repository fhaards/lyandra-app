<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModelContingent extends CI_Model
{

    protected $table2 = 'users';

    public function __construct()
    {
        $this->load->database();
    }

    function read($table1)
    {
        $this->db->select('*');
        $this->db->from($table1);
        $this->db->join('users', 'contingent.created_by = users.user_id');
        return $this->db->get()->result_array();
    }
}
