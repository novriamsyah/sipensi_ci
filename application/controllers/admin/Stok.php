<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Stok extends CI_Controller
{
	function __construct()
	{
		parent::__construct();

		if ($this->session->userdata('status') != "logged") {
			redirect('Login');
		}

		$this->load->model('M_stok');

	}

	public function index()
	{
		$queryAllData = $this->M_stok->get_all_stok();
		$data = array(
			'mainheader'	=> 'template/mainheader',
			'mainpage'		=> 'admin/stok',
			'navbar'		=> 'admin/template/navbar',
			'queryAllData'	=> $queryAllData,
		);
		$this->load->view('index-dashboard', $data);
		// echo "<pre>";
		// print_r($queryAllData[0]->jumlah);
		// echo "</pre>";
	}

	public function ubah_stok()
	{
		
		$data = array(
			'mainheader'	=> 'template/mainheader',
			'mainpage'		=> 'admin/ubah_stok_vaksin',
			'navbar'		=> 'admin/template/navbar',
		);
		$this->load->view('index-dashboard', $data);
	}

	public function simpan_stok()
	{
		$jenis  = $this->input->post('jenis_vaksin');
		
		$dt_stok = array(
			'jumlah' => $this->input->post('jumlah'),
		);

		$queryStokDetail = $this->M_stok->ubahStokDetail($jenis,$dt_stok);

		$this->session->set_flashdata('diubah', 'Data telah berhasil diubah');
		redirect('admin/stok/');
	}
}