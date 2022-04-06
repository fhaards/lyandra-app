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

    function checkParticipantAsMax($id)
    {
        $array = array('tournament_id' => $id);
        $query = $this->db->get_where($this->table, $array);
        $maxp  = intval($query->row_array()['max_participants']);

        $array2 = array('participant_tournament' => $id, 'participant_status' => '1');
        $this->db->select('*');
        $this->db->from('tournament_participant');
        $this->db->join('users', 'tournament_participant.participant_user = users.user_id');
        $this->db->where($array2);
        $query = $this->db->get();
        $count = $query->num_rows();

        if ($maxp === $count) {
            return '0';
        } else {
            return '1';
        }
    }

    function readParticipant($id)
    {
        $this->db->select('*');
        $this->db->from('tournament_participant');
        $this->db->join('users', 'tournament_participant.participant_user = users.user_id');
        $this->db->where('participant_tournament', $id);
        return $this->db->get()->result_array();
    }

    function approvedParticipant($id)
    {
        $array = array('participant_tournament' => $id, 'participant_status' => '1');
        $this->db->select('*');
        $this->db->from('tournament_participant');
        $this->db->join('users', 'tournament_participant.participant_user = users.user_id');
        $this->db->where($array);
        return $this->db->get()->result_array();
    }

    function match4Final($table, $id, $fieldName, $value)
    {

        $this->db->select('tournament_match.*');
        $this->db->select('users.user_id, users.name as usersname1, users2.name as usersname2');
        $this->db->from($table);
        $this->db->join('users', 'tournament_match.match_player_1 = users.user_id', 'LEFT');
        $this->db->join('users as users2', 'tournament_match.match_player_2 = users2.user_id', 'LEFT');
        $this->db->where('match_tournament_id', $id);
        $this->db->where($fieldName, $value);
        return $this->db->get()->result_array();
    }

    function match4Round($table, $id, $fieldName, $value)
    {

        $this->db->select('tournament_match.*');
        $this->db->select('users.user_id, users.name as usersname1, users2.name as usersname2');
        $this->db->from($table);
        $this->db->join('users', 'tournament_match.match_player_1 = users.user_id', 'LEFT');
        $this->db->join('users as users2', 'tournament_match.match_player_2 = users2.user_id', 'LEFT');
        $this->db->where('match_tournament_id', $id);
        $this->db->like($fieldName, $value);
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
