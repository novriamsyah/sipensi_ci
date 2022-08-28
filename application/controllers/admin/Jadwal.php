<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jadwal extends CI_Controller
{
	function __construct()
	{
		parent::__construct();

		if ($this->session->userdata('status') != "logged") {
			redirect('Login');
		}

		$this->load->model('M_jadwal');

	}

	public function index()
	{
		$all_jadwal = $this->M_jadwal->get_all_jadwal();
		$data = array(
			'mainheader'	=> 'template/mainheader',
			'mainpage'		=> 'admin/jadwal',
			'navbar'		=> 'admin/template/navbar',
			'all_jadwal'	=> $all_jadwal,
		);
		// echo $this->M_jadwal->get_jadwal();
		$this->load->view('index-dashboard', $data);
	}

	public function tambah_jadwal()
	{
		$jadwal_id = $this->M_jadwal->get_jadwal();
		$data = array(
			'mainheader'	=> 'template/mainheader',
			'mainpage'		=> 'admin/tambah_jadwal',
			'navbar'		=> 'admin/template/navbar',
			'jadwal_id'		=> $jadwal_id,
		);
		$this->load->view('index-dashboard', $data);
	}

	public function simpan_jadwal()
	{
		$dt_jadwal = array(
			'id_jadwal'			=> $this->input->post('id_jadwal'),
			'jam_mulai'			=> $this->input->post('jam_mulai'),
			'jam_tutup'			=> $this->input->post('jam_tutup'),
			'hari'				=> $this->input->post('hari'),
			'jenis_faskes'	=> $this->input->post('jenis_faskes'),
		);

		$this->M_jadwal->simpan_jadwal($dt_jadwal);
		$this->session->set_flashdata('berhasil', 'Data telah berhasil ditambahkan');
		redirect('admin/jadwal/');
	}

	public function edit_jadwal ($id)
	{
		$queryJadwalDetail = $this->M_jadwal->getJadwalById($id);
		$data = array(
			'mainheader'		=> 'template/mainheader',
			'mainpage'			=> 'admin/edit_jadwal',
			'navbar'			=> 'admin/template/navbar',
			'queryJadwalDetail' => $queryJadwalDetail,
		);
		$this->load->view('index-dashboard', $data);	
	}

	public function update_jadwal()
	{
		$id =  $this->input->post('id');
		$dt_jadwal = array(
			'id_jadwal'			=> $this->input->post('id_jadwal'),
			'jam_mulai'			=> $this->input->post('jam_mulai'),
			'jam_tutup'			=> $this->input->post('jam_tutup'),
			'hari'				=> $this->input->post('hari'),
			'jenis_faskes'	=> $this->input->post('jenis_faskes'),
		);

		$this->M_jadwal->update_jadwal($id, $dt_jadwal);
		$this->session->set_flashdata('diubah', 'Data telah berhasil diubah');
		redirect('admin/jadwal/');
	}

	public function hapus_jadwal($id) 
	{
		$this->M_jadwal->hapus_jadwal($id);
		$this->session->set_flashdata('dihapus', 'Data telah berhasil Dihapus');
		redirect('admin/jadwal/');
	}
}