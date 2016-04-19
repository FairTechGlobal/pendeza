<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sms extends CI_Controller {

	/**
	 * This manages the amount of sms people can send
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}
}
