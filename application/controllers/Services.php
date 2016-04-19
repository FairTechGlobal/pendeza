<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Services extends CI_Controller {

	/**
	 * In this module, one is able to register and manage their services. The following things should be done as for now;
	 * 		service registration
	 * 		service rate input( if the business is a commission based one)
	 * 		the time taken for that service
	 * 		products used for that service
	 * 		price (can be changed... not fixed)
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}
}
