<?php if(!defined('BASEPATH')) exit('No direct script acceess allowed');

class M_pendaftaran extends CI_Model{

	private $table="tb_pendaftaran";
	private $primary="id_daftar";

	function get_all_daftar() {
		$query = $this->db->get('tb_pendaftaran');
		return $query->result();
	}

	function simpan_daftar($data) { 
		$this->db->insert($this->table,$data);
	}

	function simpan_pasien($data) { 
		$this->db->insert($this->table,$data);
	}

	function getPasienById($id) {
		$this->db->where('id_daftar', $id);
		$query =  $this->db->get('tb_pendaftaran');
		return $query->row();
	}

	function update_pasien($id, $data) { 
		$this->db->where('id_daftar', $id);
		$this->db->update($this->table,$data);
	}

	function hapus_pasien($id) { 
		$this->db->where('id_daftar', $id);
		$this->db->delete($this->table);
	}
}