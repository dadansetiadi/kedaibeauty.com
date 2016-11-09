<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

		function __construct()
        {
            parent::__construct();
            //$this->load->model('user_model');
        }

	public function index()
	{
		//$data['main_view'] = "home_view";

		
		//$this->load->view('backend/header');
		echo "string";
	}
}
