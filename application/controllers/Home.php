<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * This is the landing page. It should have the following;
	 * 		Video illustrations
	 * 		About us
	 * 		Products
	 * 		Packages
	 * 		Offers we are doing to promote the system
	 */
	public function index()
	{
		$this->load->view('home/home');
	}
}
