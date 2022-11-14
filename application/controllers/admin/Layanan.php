<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Layanan extends CI_Controller
{
	function __construct()
	{
		parent::__construct();

		if ($this->session->userdata('status') != "logged") {
			redirect('Login');
		}

	}

	public function index()
	{
		$data = array(
			'mainheader'	=> 'template/mainheader',
			'mainpage'		=> 'admin/layanan',
			'navbar'		=> 'admin/template/navbar',
		);
		$this->load->view('index-dashboard', $data);
	}
}