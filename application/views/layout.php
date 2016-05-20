<?php
$data = array();
$data['PAGE'] = $this->uri->segment(1);

$this->load->view('header', $data);
$this->load->view($view, $data);
$this->load->view('footer', $data);