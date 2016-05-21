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
        if(!empty($_GET['eventId'])){

            $this->load->view('account/activity/event_details',$this->data);
        }

        $this->data['activities'] = $this->Activity_model->getActivities();
        $this->data['view']='activity/list';
        $this->load->view('account/layout',$this->data);
    }

    public function add()
    {
        $title = $this->input->post('title');
        $description = $this->input->post('description');
        $start_date = $this->input->post('start_date');
        $end_date = $this->input->post('end_date');

        $start_date = str_replace('/', '-', $start_date);
        $start_date = date('Y-m-d',strtotime($start_date));

        $end_date = str_replace('/', '-', $end_date);
        $end_date = date('Y-m-d',strtotime($end_date));

        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('start_date', 'Start Date', 'required');
        $this->form_validation->set_rules('end_date', 'End Date', 'required');

        if ($this->form_validation->run() == true) {
            $this->load->model('Uploads_model');
            $file = $this->Uploads_model->upload_file(true);
            $data = array(
                'title' => $title,
                'description' => $description,
                'user_id' => $this->user_id,
                'cover' => $file,
                'date' => $start_date,
                'end_date' => $end_date
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

    public function question($id)
    {
        $question = $this->input->post('question');

        $this->form_validation->set_rules('question','Question','requiered');

        if($this->form_validation->run() == true){
            $data = array(
                'text' => $question,
                'activity_id' => $id
            );
            $this->Activity_model->addQuestion($data);
        }

        $this->data['view']='activity/add_question';
        $this->load->view('account/layout',$this->data);
    }

    public function answer($questionId)
    {
        $answer = $this->input->post('answer');
        $data = array(
            'question_id' => $questionId,
            'text' => $answer
        );

        $this->Activity_model->addAnswer($data);

        $this->data['view']='activity/add_answer';
        $this->load->view('account/layout',$this->data);

    }


}