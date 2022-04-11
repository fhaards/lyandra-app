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

    function readAll()
    {
        $this->db->select('*');
        $this->db->from('tournament');
        $this->db->join('tournament_file', 'tournament.tournament_id = tournament_file.tournament_id','INNER');
        $this->db->join('tournament_condition', 'tournament.tournament_id = tournament_condition.tournament_id','INNER');
        return $this->db->get()->result_array();
    }

    function readAllOrderLimit()
    {
        $this->db->select('*');
        $this->db->from('tournament');
        $this->db->join('tournament_file', 'tournament.tournament_id = tournament_file.tournament_id','INNER');
        $this->db->join('tournament_condition', 'tournament.tournament_id = tournament_condition.tournament_id','INNER');
        $this->db->order_by('created_date', 'desc');
        $this->db->limit(5);
        return $this->db->get()->result_array();
    }

    function readAllById($id)
    {
        $array = array('tournament.tournament_id' => $id);
        $this->db->select('*');
        $this->db->from('tournament');
        $this->db->join('tournament_file', 'tournament.tournament_id = tournament_file.tournament_id','INNER');
        $this->db->join('tournament_condition', 'tournament.tournament_id = tournament_condition.tournament_id','INNER');
        $this->db->where($array);
        return $this->db->get()->row();
    }

    function checkParticipantDetails($id)
    {
        $array = array('tournament.tournament_id' => $id);
        $this->db->select('*');
        $this->db->from('tournament');
        $this->db->join('tournament_file', 'tournament.tournament_id = tournament_file.tournament_id','INNER');
        $this->db->where($array);
        return $this->db->get()->row();
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
        $this->db->select('tournament_participant.*,users.user_id,users.name,users_account.*,contingent.contingent_id,contingent.contingent_name');
        $this->db->from('tournament_participant');
        $this->db->join('users', 'tournament_participant.participant_user = users.user_id','INNER');
        $this->db->join('users_account', 'tournament_participant.participant_user = users_account.user_id','INNER');
        $this->db->join('contingent', 'users_account.contingent_id = contingent.contingent_id','INNER');
        $this->db->where('participant_tournament', $id);
        $this->db->order_by('participant_status', 'desc');
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

    // function match4Final($table, $id, $fieldName, $value)
    // {

    //     $this->db->select('tournament_match.*');
    //     $this->db->select('users.user_id, users.name as usersname1, users2.name as usersname2');
    //     $this->db->from($table);
    //     $this->db->join('users', 'tournament_match.match_player_1 = users.user_id', 'LEFT');
    //     $this->db->join('users as users2', 'tournament_match.match_player_2 = users2.user_id', 'LEFT');
    //     $this->db->where('match_tournament_id', $id);
    //     $this->db->where($fieldName, $value);
    //     return $this->db->get()->result_array();
    // }

    // function match4Round($table, $id, $fieldName, $value)
    // {

    //     $this->db->select('tournament_match.*');
    //     $this->db->select('users.user_id, users.name as usersname1, users2.name as usersname2');
    //     $this->db->from($table);
    //     $this->db->join('users', 'tournament_match.match_player_1 = users.user_id', 'LEFT');
    //     $this->db->join('users as users2', 'tournament_match.match_player_2 = users2.user_id', 'LEFT');
    //     $this->db->where('match_tournament_id', $id);
    //     $this->db->like($fieldName, $value);
    //     return $this->db->get()->result_array();
    // }

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
