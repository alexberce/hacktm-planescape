<?php

/**
 * Created by PhpStorm.
 * User: Alexandru
 * Date: 5/21/2016
 * Time: 00:06
 */
class Dashboard extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Dashboard_model');
		$this->load->model('Activity_model');
		$this->load->model('Uploads_model');
		$this->user_id = $this->session->userdata('id');
	}

	public function index()
	{

		$this->data['view']='dashboard/dashboard';


		if (!empty($_GET['eventId'])) {
			$this->data['event_details'] = $this->Activity_model->getEventDetails($_GET['eventId']);
			$this->data['gallery_photos'] = $this->Uploads_model->getPhotosById($_GET['eventId']);
			$this->load->view('account/activity/event_details', $this->data);
		} else {

			$this->data['endedEvents'] = $this->Activity_model->getEndedActivities();
			$this->data['upcomingEvents'] = $this->Activity_model->getUpcomingActivities();
			$this->data['openEvents'] = $this->Activity_model->getOpenActivities();

			$this->load->view('account/layout', $this->data);
		}
	}

	public function test_mail(){
		$this->send_mail('alina.berce@gmail.com', 'Test' , 'Testing');
	}
}