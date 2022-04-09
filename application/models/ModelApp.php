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

    function countData($table)
    {
        $this->db->select('*');
        $this->db->from($table);
        $query = $this->db->get();
        return $query->num_rows();
    }

    function read($table)
    {
        return $this->db->get($table)->result_array();
    }

    function readExcept($table, $value, $setValue)
    {
        $names = array($setValue);
        $query = $this->db->where_not_in($value, $setValue);
        return $query->get($table)->result_array();
    }


    function readLimit5($table, $orderValue, $orderType)
    {
        $this->db->order_by($orderValue, $orderType);
        $this->db->limit(5);
        return $this->db->get($table)->result_array();
    }

    function readJoin1($table)
    {
        return $this->db->get($table)->result_array();
    }

    function readJoin2($table1, $table2, $table3)
    {
        $this->db->select('*');
        $this->db->from('table1');
        $this->db->join('table2', 'table1.id = table2.id');
        $this->db->join('table3', 'table1.id = table3.id');
        return $this->db->get()->result_array();
    }

    function insert($table, $insertData)
    {
        return $this->db->insert($table,  $insertData);
    }

    function insertBatch($table, $data)
    {
        return $this->db->insert_batch($table,  $data);
    }

    function update($table, $tbId, $id, $data)
    {
        $this->db->where($tbId, $id);
        return $this->db->update($table, $data);
    }

    function updateBatch($table, $result, $valName)
    {
        return $this->db->update_batch($table, $result, $valName);
    }

    function delete($table, $tbId, $id)
    {
        $this->db->delete($table, array($tbId => $id));
    }
}
