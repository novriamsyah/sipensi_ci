<?php if(!defined('BASEPATH')) exit('No direct script acceess allowed');

class M_mahasiswa extends CI_Model{

	private $table="mhsw";
	private $primary="NIM";

	function viewData_mahasiswa(){
		$query = $this->db->query("select * from mhsw order by ID ASC");
		return $query->result_array();
	}

	function count_mahasiswa(){
		$query = $this->db->query("SELECT NIM FROM mhsw");
		return $query->num_rows();
	}

}