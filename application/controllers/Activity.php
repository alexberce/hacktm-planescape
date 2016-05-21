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
        $this->data['activities'] = $this->Activity_model->getActivities();
        $this->data['view']='activity/list';
        $this->load->view('account/layout',$this->data);
    }

    public function add()
    {

        $title = $this->input->post('title');
        $description = $this->input->post('description');
        $date = $this->input->post('date');

        $date = str_replace('/', '-', $date);
        $date = date('Y-m-d',strtotime($date));

        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('date', 'Date', 'required');

        if ($this->form_validation->run() == true) {
            $this->load->model('Uploads_model');
            $file = $this->Uploads_model->upload_file(true);
            $data = array(
                'title' => $title,
                'description' => $description,
                'user_id' => $this->user_id,
                'cover' => $file,
                'date' => $date
            );

            $this->Activity_model->addActivity($data);
            redirect('dashboard');
        }

        $this->data['view']='activity/add';
        $this->load->view('account/layout',$this->data);


    }

    public function view($id)
    {
        $this->data['activity'] = $this->Activity_model->getActivity($id);

        $this->data['view']='activity/view';
        $this->load->view('account/layout',$this->data);

    }

}