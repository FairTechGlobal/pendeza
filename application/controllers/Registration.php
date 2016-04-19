<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registration extends CI_Controller {

	/**
	 * This Model registers salons and spas
	 * They choose their packages here
	 * Branch management happens here
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}
}
