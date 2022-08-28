<?php if(!defined('BASEPATH')) exit('No direct script acceess allowed');

class M_semester extends CI_Model{

	private $table="semester";
	private $primary="idsemester";

	function viewData_semester(){
		$query = $this->db->query("select * from semester order by idsemester ASC");
		return $query->result_array();
	}

	function count_semester(){
		$query = $this->db->query("SELECT idsemester FROM semester");
		return $query->num_rows();
	}

	function edit_semester($id){
		$query = $this->db->query("select * from semester where idsemester='$id'");
    	return $query->result_array();
	}

	function tambah_semester($data){
		$this->db->insert($this->table,$data);
	}

	function update_semester($id,$data){
		$this->db->where($this->primary, $id);
		return $this->db->update($this->table,$data);
	}

	function hapus_semester($id){
		$this->db->where($this->primary,$id);
		return $this->db->delete($this->table);
	}

}