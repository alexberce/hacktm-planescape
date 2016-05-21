<?php

class Gallery extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Activity_model');
    }

    public function index()
    {
        $data['activities'] = $this->Activity_model->getActivities();

        $data['view'] = 'gallery/list_galleries';
        $this->load->view('account/layout', $data);
    }


}