<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laporan extends CI_Controller
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
		$awal = $this->input->get('tgl_dari');
		$sampai = $this->input->get('tgl_sampai');

		if($awal != '' && $sampai != '') {
			$this->db->where('created_at >=', $awal);
			$this->db->where('created_at <=', $sampai);
			$query = $this->db->get('tb_pendaftaran');
			$hasil = $query->result();
		} else {
			$query = $this->db->get('tb_pendaftaran');
			$hasil = $query->result();
		}
	
		$data = array(
			'mainheader'	=> 'template/mainheader',
			'mainpage'		=> 'admin/laporan',
			'navbar'		=> 'admin/template/navbar',
			'hasil' 		=> $hasil,
		);
		$this->load->view('index-dashboard', $data);
	}

	public function export()
	{
		header("Content-type: application/vnd-ms-excel");
    	header("Content-Disposition: attachment; filename=Laporan_Vaksinasi_".date('d-m-Y').".xls");

		$awal = $this->input->get('tgl_dari');
		$sampai = $this->input->get('tgl_sampai');

		if($awal != '' && $sampai != '') {
			$this->db->where('created_at >=', $awal);
			$this->db->where('created_at <=', $sampai);
			$query = $this->db->get('tb_pendaftaran');
			$hasil = $query->result();
		} else {
			$query = $this->db->get('tb_pendaftaran');
			$hasil = $query->result();
		}
	
		$data = array(
			'hasil' 		=> $hasil,
		);
		$this->load->view('admin/export_laporan', $data);
	}
}