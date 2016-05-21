<?php

class Activity extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Activity_model');
        $this->load->model('Uploads_model');
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
        $description = nl2br($this->input->post('description'));
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

    public function ended()
    {
        $this->data['activities'] = $this->Activity_model->getEndedActivities();

        $this->data['view']='activity/list_ended';
        $this->load->view('account/layout',$this->data);

    }

    public function upcoming()
    {
        $this->data['activities'] = $this->Activity_model->getUpcomingActivities();

        $this->data['view']='activity/list_upcoming';
        $this->load->view('account/layout',$this->data);
    }

	public function view($eventId){
		if (!empty($eventId)) {
			$data['event_details'] = $this->Activity_model->getEventDetails($eventId);
			$data['gallery_photos'] = $this->Uploads_model->getPhotosById($eventId);
			$data['view'] = 'activity/event_details';
			$this->load->view('account/layout', $data);
		}
	}

	public function invite_friend($id){
		$this->data['activity'] = current($this->Activity_model->getActivity($id));

		$this->data['activity_owner'] = $this->session->userdata('username');
		$email_address = $this->input->post('friend_email');
		$subject = 'You\'ve been invited to an event';
		$text = $this->load->view('messages/emails/invitation', $this->data, true);
		$this->send_mail($email_address, $subject, $text);

		redirect('activity/view/' . $id);
	}


}