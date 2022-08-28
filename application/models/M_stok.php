<?php if(!defined('BASEPATH')) exit('No direct script acceess allowed');

class M_stok extends CI_Model{

	private $table="tb_stok";
	private $primary="id";

	function get_all_stok() {
		$query = $this->db->get('tb_stok');
		return $query->result();
	}

    function ubahStokDetail($jenis,$data) {
		$this->db->where('jenis_vaksin', $jenis);
		$this->db->update($this->table,$data);
	}

	
}