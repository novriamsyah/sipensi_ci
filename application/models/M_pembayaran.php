<?php if(!defined('BASEPATH')) exit('No direct script acceess allowed');

class M_pembayaran extends CI_Model{

	private $table="pembayaran";
	private $primary="idpembayaran";

	function viewData_pembayaran(){
		$query = $this->db->query("select * from pembayaran order by idpembayaran ASC");
		return $query->result_array();
	}

	function count_pembayaran(){
		$query = $this->db->query("SELECT idpembayaran FROM pembayaran");
		return $query->num_rows();
	}

	function edit_pembayaran($id){
		$query = $this->db->query("select * from pembayaran where idpembayaran='$id'");
    	return $query->result_array();
	}

	function tambah_pembayaran($data){
		$this->db->insert($this->table,$data);
	}

	function update_pembayaran($id,$data){
		$this->db->where($this->primary, $id);
		return $this->db->update($this->table,$data);
	}

	function hapus_pembayaran($id){
		$this->db->where($this->primary,$id);
		return $this->db->delete($this->table);
	}

}