<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends Admin {
	public function __construct()
	{
	 parent::__construct();
	 $this->load->library('form_validation');
	 //$this->load->library('encrypt');
	 $this->load->model("Login_model");
	 
	}

    public function index()
	{

		$this->form_validation->set_rules('username', 'User Name', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
		 
		if ($this->form_validation->run() === FALSE)
		{  
			$this->load->view('admin/login');
		}
		else
		{   
		 $username=$this->input->post('username');
		 $password=$this->input->post('password');
		 
		$check = $this->Login_model->can_login($username,$password);
		echo $check;
		die;
		
		if($check != false){
		$user = array(
		'user_id' => $check->id,
		'email' => $check->email,
		'name' => $check->first_name
		);
		$this->session->set_userdata($user);
		redirect( base_url('dashboard') ); 
}
		}
	}	





}
