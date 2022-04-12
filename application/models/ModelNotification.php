<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModelNotification extends CI_Model
{
    protected $table = 'notification';

    public function __construct()
    {
        $this->load->database();
    }

    function read($toUser)
    {
        $this->db->select('*');
        $this->db->from($this->table);
        // $this->db->join('users', 'activities.activities_user = users.user_id', 'INNER');
        $this->db->where_in('notification.notif_to', $toUser);
        $this->db->limit(5);
        return $this->db->get()->result_array();
    }
}
