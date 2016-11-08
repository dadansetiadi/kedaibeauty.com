<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

 function __construct()
        {
            parent::__construct();
            $this->load->model('user_model');
        }

    public function hapus($id)
    {
    	
    	$this->user_model->hapus($id);
    	redirect('users/show');
    }

    public function edit($id)
    {
    	$data['op'] = 'edit';
    	$data['sql'] = $this->user_model->edit($id);
    	$this->load->view('insert_user',$data);
    }

    public function simpan()
    {
    	$op = $this->input->post('op');
    	$id = $this->input->post('id');
    	$username = $this->input->post('username');
    	$password = $this->input->post('password');
    	$data = array(
    		'username' => $username,
    		'password' => $password
    		);
    	if ($op=="tambah") {
    		$this->user_model->simpan($data);
    	}
    	else{
    		$this->user_model->update($id,$data);
    	}
    	
    	redirect('users/show');
    }

 	public function add()
    {

		$data['op'] = 'tambah';
    	$this->load->view('insert_user',$data);
    }

    public function show()
    {
    	$data['sql1'] = $this->user_model->get_users();
    	$this->load->view('user_view',$data);
    }

	public function login()
	{

		$this->form_validation->set_rules('username','Username','trim|required|min_length[3]');
		$this->form_validation->set_rules('password','Password','trim|required|min_length[3]');
		$this->form_validation->set_rules('comfirm_password','Comfrim Password','trim|required|min_length[3]|matches[password]');

		if ($this->form_validation->run() == FALSE) {
			$data = array(
				'errors' => validation_errors()

				);
		$this->session->set_flashdata($data);
		redirect('home');

		}else {

			$username = $this->input->post('username');
			$password = $this->input->post('password');

			$user_id = $this->user_model->login_user($username,$password);

			if ($user_id) {
				$user_data = array(
					'user_id' => $user_id,
					'username' => $username,
					'logged_in' => true
					);
				$this->session->set_userdata($user_data);
				$this->session->set_flashdata('login_success','You are now logged in');

				$data['main_view'] = "admin_view";

				$this->load->view('layouts/main',$data);
				//redirect('home/index');
			} else{

				$this->session->set_flashdata('login_failed','Sorry You are not logged in');
				redirect('home/index');
			}
		}
		
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('home/index');

	}

	public function insert()
	{
		$username = "dadan";
		$password = "cungkring25";
		$this->user_model->create_users([
			'username' => $username,
			'password' => $password

			]);
		//redirect('home/index');

	}

	
}
