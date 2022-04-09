<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModelDashboard extends CI_Model
{

    public function __construct()
    {
        $this->load->database();
    }

    function readActivities($iduser)
    {
        $this->db->select('*');
        $this->db->from('activities');
        $this->db->join('users', 'activities.activities_user = users.user_id', 'INNER');
        $this->db->where_not_in('activities.activities_user', $iduser);
        $this->db->order_by('activities_date', 'desc');
        $this->db->limit(5);
        return $this->db->get()->result_array();
    }
}