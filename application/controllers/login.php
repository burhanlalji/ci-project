<?php

class Login extends MY_Controller {
	public function index()
	{
		$this->load->helper('form');
		$this->load->view('public/admin_login');
	}

	public function admin_login()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('uname','User Name','required|alpha');
		$this->form_validation->set_rules('pass','Password','required');
		$this->form_validation->set_error_delimiters("<p class='text-danger'>","</p>");

		if($this->form_validation->run()){
			$username = $this->input->post('uname');
			$password = $this->input->post('pass');

			$this->load->model('loginmodel');

			if($this->loginmodel->login_valid($username, $password))
			{
				//credentials valid, login user

			}
			else {
				//authentication failed
			}

		}
		else {
			$this->load->view('public/admin_login');
		}

	}
}