<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Email extends CI_Controller {

	/**
	 * This manages the amount of emails people can send.
	 * 
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}
}
