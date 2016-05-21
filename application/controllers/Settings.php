<?php

/**
 * Created by PhpStorm.
 * User: Alexandru
 * Date: 5/21/2016
 * Time: 02:53
 */
class Settings extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Account_model');
		$this->user_id = $this->session->userdata('id');
	}

	public function index(){
		$this->data['view']='settings/settings';
		$this->load->view('account/layout',$this->data);
	}
}