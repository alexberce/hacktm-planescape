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
        $this->db->select('activity.*,files.path');
        $this->db->from('activity');
        $this->db->join('files','files.id = activity.cover');
        $this->db->where('activity.user_id',$this->user_id);

        $query = $this->db->get();

        return $query->result_array();

    }

    public function getActivity($id)
    {
        $this->db->select('activity.*,questions.*,question_answers.*,files.path');
        $this->db->from('activity');
        $this->db->join('questions','questions.activity_id = activity.id');
        $this->db->join('question_answers','question_answers.id = question_answers.question_id');
        $this->db->join('files','activity.id = files.activity_id');
        $this->db->where('activity.id',$id);

        $query = $this->db->get();

        return $query->result_array();

    }

    public function addActivity($data)
    {
        $this->db->insert('activity',$data);
    }

    public function addQuestion($data)
    {
        $this->db->insert('questions',$data);
    }

    public function addAnswer($data)
    {
        $this->db->insert('question_answer',$data);
    }
}