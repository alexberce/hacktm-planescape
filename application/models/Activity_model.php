<?php

class Activity_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->user_id = $this->session->userdata('id');
    }

    public function getActivities()
    {
        $this->db->select('*');
        $this->db->from('activity');
        $this->db->where('user_id',$this->user_id);

        $query = $this->db->get();

        return $query->results();

    }

    public function addActivity($data)
    {
        $this->db->insert('activity',$data);
    }
}