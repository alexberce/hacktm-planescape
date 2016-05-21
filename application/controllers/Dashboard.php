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
		$data['view'] = 'dashboard/dashboard';
		$data['activities'] = $this->Activity_model->getActivities();
		$this->load->view('account/layout', $data);
	}

	public function test_mail(){
		$this->send_mail('alina.berce@gmail.com', 'Test' , 'Testing');
	}
}