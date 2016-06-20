<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clients extends CI_Controller {

	/**
	
	 * 		Wait List is part of this controller
	 * 		Client registration
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}
}
