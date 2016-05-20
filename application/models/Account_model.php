<?php

class Account_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function login($username, $password)
    {
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('username',$username);
        $this->db->where('password',$password);
        $this->db->or_where('email',$username);

        $query = $this->db->get();

        return $query->row_array();
    }

    public function getUsers(){
        $this->db->select('*');
        $this->db->from('users');

        $query = $this->db->get();

        return $query->results();
    }

}