<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_panel extends CI_Controller {

	function __construct()
        {
            parent::__construct();
            //$this->load->model('user_model');
        }

	public function index()
	{
		$this->load->view('backend/header');
		$this->load->view('backend/menu');
		$this->load->view('backend/body');
		$this->load->view('backend/footer');
		
	}


	
}
