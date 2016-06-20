<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bill extends CI_Controller {

	/**
	 * This controller is like a point of sale. It should be able to record sales
	 * Send sms
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}
}
