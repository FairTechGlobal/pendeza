<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Salaries extends CI_Controller {

	/**
	 * In this controller the salary history of a person is supposed to be there. Depending on their business model, 
	 * It should be able to calculate salaries, commissions or both and give a figure as the salary. 
	 * 
	 * Government deductions are also managed on this module
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}
}
