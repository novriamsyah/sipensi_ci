<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	function __construct(){
		parent::__construct();

		$this->load->model('M_login');
	}

	function index(){
		$this->load->view('login');
	}

	function register(){
		$this->load->view('register');
	}

	function aksi_login(){
		$user = $this->input->post('username');
		$pass = $this->input->post('password');

		$cek = $this->M_login->aksi_login($user,$pass);

		if($cek){
			$data_session = array(
				'user' 		=> $user,
				'id'			=> $cek[0]['username'],
				'pass'		=> $cek[0]['password'],
				'status' 	=> "logged"
				);
			$this->session->set_userdata($data_session);
			redirect("admin/dashboard");


		}else{
			echo "Username dan Password Salah. Silahkan coba kembali.";
		}
	}

	function logout(){
		$this->session->sess_destroy();
		redirect('Login');
	}

}