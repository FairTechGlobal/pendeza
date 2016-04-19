<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Packages extends CI_Controller {

	/**
	 * This controller manages the packages we give. 
	 * It is more on the Super user side
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}
}
