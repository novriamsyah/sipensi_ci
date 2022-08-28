<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pendaftaran extends CI_Controller
{
	function __construct()
	{
		parent::__construct();

		if ($this->session->userdata('status') != "logged") {
			redirect('Login');
		}

		$this->load->model('M_pendaftaran');

	}

	public function index()
	{
		$data = array(
			'mainheader'	=> 'template/mainheader',
			'mainpage'		=> 'admin/pendaftaran',
			'navbar'		=> 'admin/template/navbar',
		);
		$this->load->view('index-dashboard', $data);
	}

	public function simpan_pendaftaran()
	{
		$this->load->helper('date');
		$nik = $this->input->post('nik');
		$now = date('Y-m-d', now());
		$dt_daftar = array(
			'nama'			=> $this->input->post('nama'),
			'nik'			=> $this->input->post('nik'),
			'tgl_lahir'		=> $this->input->post('tgl_lahir'),
			'jk'			=> $this->input->post('jk'),
			'umur'			=> $this->input->post('umur'),
			'alamat'		=> $this->input->post('alamat'),
			'desa'			=> $this->input->post('desa'),
			'kecamatan'		=> $this->input->post('kecamatan'),
			'jenis_faskes'	=> $this->input->post('jenis_faskes'),
			'nohp'			=> $this->input->post('nohp'),
			'created_at'	=> $now,
		);
		$this->db->select('nik');
		$this->db->from('tb_pendaftaran');
		$this->db->where('nik', $nik);
		$cek = $this->db->get();
		$tb_cek = $cek->num_rows();
		if ($tb_cek == 1) {
			$this->session->set_flashdata('gagal', 'Data gagal ditambahkan');
			redirect('admin/pendaftaran/');
		} else {
			$this->M_pendaftaran->simpan_daftar($dt_daftar);
			$this->session->set_flashdata('berhasil', 'Data telah berhasil ditambahkan');
			redirect('admin/pasien/');
		}


		// echo "<pre>";
		// print_r($now);
		// echo "</pre>";
		
	}

	
}