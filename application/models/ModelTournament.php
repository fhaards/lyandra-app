<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModelTournament extends CI_Model
{
    protected $table            = 'tournament';
    protected $tableParticipant = 'tournament_participant';

    public function __construct()
    {
        $this->load->database();
    }

    function checkParticipant($tourId, $userId)
    {
        $array = array('participant_tournament' => $tourId, 'participant_user' => $userId);
        $check = $this->db->get_where($this->tableParticipant, $array)->row_array();
        if (is_null($check)) {
            return '0';
        } else {
            return '1';
        }
    }

    function checkParticipantStatus($tourId, $userId)
    {
        $array = array('participant_tournament' => $tourId, 'participant_user' => $userId);
        $query = $this->db->get_where($this->tableParticipant, $array);
        $stat  = $query->row_array()['participant_status'];
        return $stat;
    }

    function readParticipant($id)
    {
        $this->db->select('*');
        $this->db->from('tournament_participant');
        $this->db->join('users', 'tournament_participant.participant_user = users.user_id');
        $this->db->where('participant_tournament', $id);
        return $this->db->get()->result_array();
    }
    
    // function read()
    // {
    //     $this->db->order_by('tournament_id', 'ASC');
    //     return $this->db->get($this->table)->result_array();
    // }

    // function findBy($fieldName, $value)
    // {
    //     $this->db->select('*');
    //     $this->db->from($this->table);
    //     $this->db->where($fieldName, $value);
    //     $query = $this->db->get();
    //     return $query->row_array();
    // }

    // function getId($id)
    // {
    //     return $this->db->get_where($this->table, array('tournament_id' => $id))->row();
    // }

    // function insert($insert)
    // {
    //     return $this->db->insert($this->table, $insert);
    // }

    // function update($id)
    // {
    //     $data = array(
    //         'name' => $this->input->post('name'),
    //         'phone' => $this->input->post('phone'),
    //         'email' => $this->input->post('email'),
    //         'address' => $this->input->post('address'),
    //         'vision' => $this->input->post('vision'),
    //         'mission' => $this->input->post('mission')
    //     );

    //     $this->db->where('tournament_id', $id);
    //     return $this->db->update($this->table, $data);
    // }

    // function delete($id)
    // {
    //     $this->db->delete($this->table, array('tournament_id' => $id));
    // }


}
