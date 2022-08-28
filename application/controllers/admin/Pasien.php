<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pasien extends CI_Controller
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
		$queryAllData = $this->M_pendaftaran->get_all_daftar();
		
		$data = array(
			'mainheader'	=> 'template/mainheader',
			'mainpage'		=> 'admin/pasien',
			'navbar'		=> 'admin/template/navbar',
			'queryAllData'	=> $queryAllData
		);

		// echo "<pre>";
		// print_r($queryAllData);
		// echo "</pre>";
		$this->load->view('index-dashboard', $data);
	}

	public function tambah_pasien()
	{
		
		$data = array(
			'mainheader'	=> 'template/mainheader',
			'mainpage'		=> 'admin/tambah_pasien',
			'navbar'		=> 'admin/template/navbar',
		);
		$this->load->view('index-dashboard', $data);
	}

	public function simpan_pasien()
	{
		$this->load->helper('date');
		$now = date('Y-m-d', now());
		$nik = $this->input->post('nik');
		$dt_pasien = array(
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
			$this->session->set_flashdata('fail', 'Data gagal ditambahkan');
			redirect('admin/pasien/tambah_pasien/');
		} else {
			$this->M_pendaftaran->simpan_pasien($dt_pasien);
			$this->session->set_flashdata('berhasil', 'Data telah berhasil ditambahkan');
			redirect('admin/pasien/');
		}
	}

	public function edit_pasien ($id)
	{
		$queryPasienDetail = $this->M_pendaftaran->getPasienById($id);
		$data = array(
			'mainheader'	=> 'template/mainheader',
			'mainpage'		=> 'admin/edit_pasien',
			'navbar'		=> 'admin/template/navbar',
			'queryPasienDetail' => $queryPasienDetail,
		);

		$this->load->view('index-dashboard', $data);
	}

	public function update_pasien()
	{
		$id =  $this->input->post('id_daftar');
		$nik = $this->input->post('nik');
		$dt_pasien = array(
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
		);

		$this->db->select('nik');
		$this->db->from('tb_pendaftaran');
		$this->db->where('nik', $nik);
		$cek = $this->db->get();
		$tb_cek = $cek->num_rows();
		if ($tb_cek > 1) {
			$this->session->set_flashdata('gagal', 'Data gagal diubah');
			redirect($_SERVER['HTTP_REFERER']);
		} else {
			$this->M_pendaftaran->update_pasien($id, $dt_pasien);
			$this->session->set_flashdata('diubah', 'Data telah berhasil diubah');
			redirect('admin/pasien/');
		}
	}

	public function hapus_pasien($id) 
	{
		$this->M_pendaftaran->hapus_pasien($id);
		$this->session->set_flashdata('dihapus', 'Data telah berhasil Dihapus');
		redirect('admin/pasien/');
	}
}