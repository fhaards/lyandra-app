<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModelUser extends CI_Model
{
    protected $table = 'users';

    public function __construct()
    {
        $this->load->database();
    }

    // IS SUPER USER
    public function read()
    {
        $this->db->select('*');
        $this->db->from('users');
        $this->db->like('level', 'operator');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function add()
    {
        $name       = $this->input->post('name');
        $gender     = $this->input->post('gender');
        $username   = $this->input->post('username');
        $password   = $this->input->post('password');
        $level      = 'user';
        $passNew    = password_hash($password, PASSWORD_DEFAULT);

        $data = array(
            'name' => $name,
            'username' => $username,
            'password' => $passNew,
            'created_at' => date("Y-m-d h:i:s"),
            'user_status' => '1',
            'level' => $level
        );
        $query = $this->db->insert($this->table, $data);
        $getIdRecents = $this->db->insert_id();
        if ($query) {
            $data2 = array(
                'user_id' => $getIdRecents,
                'gender' => $gender
            );
            $query2 = $this->db->insert('users_account', $data2);
            return $query2;
        } else {
            return false;
        }
    }


    public function getUbah($id)
    {
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('id_user', $id);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function setUbah($id)
    {

        $nmU    = $this->input->post('name');
        $emU    = $this->input->post('username');
        $pwdU   = $this->input->post('password');
        $oldPw  = $this->input->post('oldpassword');

        $this->db->select('password');
        $this->db->from('users');
        $this->db->where('id_user', $id);
        $query = $this->db->get();
        $getPw = $query->row_array()['password'];

        if ($getPw == $pwdU) {
            $newPw = $oldPw;
        } else {
            $newPw = password_hash($pwdU, PASSWORD_DEFAULT);
        }

        $data = array(
            'name' => $nmU,
            'username' => $emU,
            'password' => $newPw
        );

        $this->db->where('id_user', $id);
        $this->db->update('users', $data);
    }

    public function hapus_user($id)
    {
        $this->db->delete('users', array('id_user' => $id));
    }

    // IS OPERATOR

    public function readOp($id)
    {
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('id_user', $id);
        $query = $this->db->get();
        return $query->row_array();
    }

    // OTHER FUNCTION

    function cekLogin($username, $password)
    {
        $userData = $this->db->get_where($this->table, ['username' => $username])->row_array();
        if (is_null($userData)) {
            return false;
        } else {
            return password_verify($password, $userData['password']);
        }
    }

    function getLevelByusername($username)
    {
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('username', $username);
        $query = $this->db->get();
        return $query->row_array()['level'];
    }

    function findBy($fieldName, $value)
    {
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where($fieldName, $value);
        $query = $this->db->get();
        return $query->row_array();
    }
}
