<?php
/**
 * Created by PhpStorm.
 * User: Alexandru
 * Date: 5/20/2016
 * Time: 23:29
 */
include_once("MY_Controller_Common.php");
class MY_Controller extends MY_Controller_Common {
	//My Controller is used for Backed only
	function __construct(){
		parent::__construct();

		$this->checkIfIsLoggedIn();
	}
}