<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Report extends CI_Controller {

	/**
	 * This controller calculates the 
	 * 		year sales
	 * 		monthly sales	
	 * 		daily sales
	 * 		should give a balance sheets for each month and year (this is related to expences)
	 * 		should also plot graphs.
	 * 		individual employee sales should also be there with graphical representation
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}
}
