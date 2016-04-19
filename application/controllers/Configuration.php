<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Configuration extends CI_Controller {

	/**	
	 * aka profile setup
	 * This controller allows the management to set up their business, be it logos, business models, rates and anything else that is supposed to be added.
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}
}
