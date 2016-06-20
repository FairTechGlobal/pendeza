<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Performance extends CI_Controller {

	/**
	 * This controller allows the business to compare itself with how the other businesses are doing in the market. o
	 * 			One should be able to see a graph of shared clients
	 * 			New clients 
	 * 			Sales made
	 * 			
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}
}
