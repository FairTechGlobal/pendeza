<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employees extends CI_Controller {

	/**
	 * This controller manages employee registration
	 * 		Update of their details
	 * 		The authority of employees
	 * 		Type of employment (temporal, permanent(meaning have a fixed salary), commission based employee(are paid on commission) 
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}
}
