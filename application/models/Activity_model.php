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

    public function getActivity($id)
    {
        $this->db->select('a.*');
        $this->db->from('activity','a');
        $this->db->join('questions','q','q.activity_id = a.id');
        $this->db->join('question_answers','qa','q.id = qa.question_id');
        $this->db->join('files','f','a.id = f.activity_id');

        $query = $this->db->get();

        return $query->results();

    }

    public function addActivity($data)
    {
        $this->db->insert('activity',$data);
    }
}