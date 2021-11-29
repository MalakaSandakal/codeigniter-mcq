<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('admin_model');
	}

	public function index(){		
		$this->load->library('session');
		//restrict users to go back to login if session has been set
		if($this->session->userdata('user')){
			redirect('dashboard');
		}
		else{
			$this->load->view('admin/login_page');
		}
	}

	public function login(){
		//load session library
		$this->load->library('session');

		$email = $_POST['email'];
		$password = $_POST['password'];

		$data = $this->admin_model->login($email, $password);

		if($data){
			$this->session->set_userdata('user', $data);
			redirect('dashboard');
		}
		else{
			// header('location:'.base_url().$this->index());
			// $this->session->set_flashdata('error','Invalid login. User not found');
		} 
	}

	public function dashboard(){
		//load session library
		$this->load->library('session');

		//restrict users to go to dashboard if not logged in
		if($this->session->userdata('user')){
			$this->load->view('admin/dashboard');
		}
		else{
			redirect('/admin');
		}
		
	}

	public function logout(){
		//load session library
		$this->load->library('session');
		$this->session->unset_userdata('user');
		redirect('/admin');
	}

}
