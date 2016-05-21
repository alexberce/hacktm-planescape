<?php

class Invitation extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

    }

    public function add()
    {
        $email = $this->input->post('email');
        $this->form_validation->set_rules('email','Email','required|valid_email');

        if($this->form_validation->run() == true){

            $this->load->library('email');

            $this->email->from('planEscape@example.com', 'Your Name');
            $this->email->to($email);

            $this->email->subject('Plan Escape Invitation');
            $this->email->message('You recived an invitation from'.$this->session->userdata('email'));

            $this->email->send();
        }
        $this->data['view']='invitation/invitation';
        $this->load->view('account/layout',$this->data);
    }
}