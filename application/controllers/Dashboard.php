<?php

/**
 * Created by PhpStorm.
 * User: Alexandru
 * Date: 5/21/2016
 * Time: 00:06
 */
class Dashboard extends MY_Controller_Common
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Dashboard_model');
	}

	public function index(){
		$data['view'] = 'dashboard/dashboard';
		$this->load->view('account/layout', $data);
	}
}