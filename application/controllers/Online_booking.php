<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Online_booking extends CI_Controller {

	/**
	 * Relates with services (services needs to be completed for this to work)
	 * Relates with Clients (clients needs to be completed for this to work)
	 * Relates with Registration (registration needs to be completed for this to work)
	 * Relates with Scheduling (scheduling needs to be completed for this to work)
	 * 
	 * this is just for the client so that they can book 
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}
}
