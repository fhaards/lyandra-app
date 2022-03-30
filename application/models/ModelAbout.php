<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModelAbout extends CI_Model
{
    protected $table = 'about';

    public function __construct()
    {
        $this->load->database();
    }
    function read()
    {
        $this->db->order_by('id', 'ASC');
        return $this->db->get($this->table)->result();
    }

    function getId($id = '1')
    {
        return $this->db->get_where('about', array('id' => $id))->row();
    }

    function update($id)
    {
        $data = array(
            'name' => $this->input->post('name'),
            'phone' => $this->input->post('phone'),
            'email' => $this->input->post('email'),
            'address' => $this->input->post('address'),
            'vision' => $this->input->post('vision'),
            'mission' => $this->input->post('mission')
        );

        $this->db->where('id', $id);
        return $this->db->update($this->table, $data);
    }

    function delete($id)
    {
        $this->db->delete('about', array('id' => $id));
    }
}
