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
        $nmU      = $this->input->post('name');
        $emU      = $this->input->post('username');
        $pwdU     = $this->input->post('password');
        $levelU = 'operator';
        $pwUb    = password_hash($pwdU, PASSWORD_DEFAULT);

        $data = array(
            'name' => $nmU,
            'username' => $emU,
            'password' => $pwUb,
            'level' => $levelU
        );
        $this->db->insert('users', $data);
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
