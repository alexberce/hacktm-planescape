<?php

class Activity extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Activity_model');
        $this->user_id = $this->session->userdata('id');
    }

    public function index()
    {
        $this->data = $this->Activity_model->getActivities();

        $this->data['view']='dashboard';
        $this->load->view('activity/layout',$this->data);
    }

    public function add_activity()
    {
        $title = $this->input->post('title');
        $description = $this->input->post('description');

        $this->form_validation->set_rules('title', 'Title', 'required');

        if ($this->form_validation->run() == true) {
            $data = array(
                'title' => $title,
                'description' => $description,
                'user_id' => $this->user_id
            );

            $this->Activity_model->addActivity($data);
        }

        $this->data['view']='add_activity';
        $this->load->view('activity/layout',$this->data);

    }

}