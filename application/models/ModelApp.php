<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModelApp extends CI_Model
{

    public function __construct()
    {
        $this->load->database();
    }

    function getId($table, $tbId, $id)
    {
        return $this->db->get_where($table, array($tbId => $id))->row();
    }

    function findBy($table, $fieldName, $value)
    {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->where($fieldName, $value);
        $query = $this->db->get();
        return $query->row_array();
    }

    function read($table)
    {
        return $this->db->get($table)->result_array();
    }

    function insert($table, $insertData)
    {
        return $this->db->insert($table,  $insertData);
    }

    function update($table, $tbId, $id, $data)
    {
        $this->db->where($tbId, $id);
        return $this->db->update($table, $data);
    }

    function delete($table, $tbId, $id)
    {
        $this->db->delete($table, array($tbId => $id));
    }
}
