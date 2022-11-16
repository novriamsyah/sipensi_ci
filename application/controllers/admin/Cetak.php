<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cetak extends CI_Controller
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
        $query = $this->db->get('tb_pendaftaran');
        $hasil = $query->result();
		
		$data = array(
			'mainheader'	=> 'template/mainheader',
			'mainpage'		=> 'admin/cetak',
			'navbar'		=> 'admin/template/navbar',
			'queryAllData'	=> $hasil
		);

		// echo "<pre>";
		// print_r($hasil);
		// echo "</pre>";
		$this->load->view('index-dashboard', $data);
	}

	public function pdf_cetak(){
		$query = $this->db->get('tb_pendaftaran');
        $data = $query->result();

		$this->load->library('pdf');
		$this->pdf->setPaper('A4', 'potrait');
		$this->pdf->set_option('isRemoteEnabled', true);
		$this->pdf->filename = "kartu-vaksin.pdf";
		$this->pdf->load_view('admin/pdf_cetak_kartu', $data);
		
		$this->pdf->render();
		
	}
}