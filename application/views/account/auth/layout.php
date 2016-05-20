<?php
/**
 * Created by PhpStorm.
 * User: Alexandru
 * Date: 5/20/2016
 * Time: 23:44
 */

$this->load->view('auth/header', $data);
$this->load->view('auth/'.$view, $data);
$this->load->view('auth/footer', $data);