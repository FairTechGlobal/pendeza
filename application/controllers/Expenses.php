<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Expenses extends CI_Controller {

	/**
	 * This controller manages all the money out
	 * 		Be it cheques
	 * 		Things bought
	 * 		Damages fixing
	 * 		Services offered to the business
	 * 		Rent
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}
}
