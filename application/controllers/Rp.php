<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rp extends CI_Controller {

	/**
	 * This is the controller that is supposed to manage referrals reducing their pay per month depending on the number of people referred 
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}
}
