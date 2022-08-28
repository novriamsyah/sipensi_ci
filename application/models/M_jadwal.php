<?php if(!defined('BASEPATH')) exit('No direct script acceess allowed');

class M_jadwal extends CI_Model{

	private $table="tb_jadwal";
	private $primary="id";

    function get_all_jadwal() {
		$query = $this->db->get('tb_jadwal');
		return $query->result();
	}

    function get_jadwal()
    {
        $q = $this->db->query("select max(RIGHT(id_jadwal,4)) AS id_max from tb_jadwal");
        $kd = "";

        if($q->num_rows() > 0){
            foreach ($q->result() as $y) {
                $tmp = ((int)$y->id_max)+1;
                $kd = sprintf("%04s", $tmp);
            }
        } else {
            $kd = "0001";
        }

        return 'A' . $kd;
    }

    function simpan_jadwal($data) { 
		$this->db->insert($this->table,$data);
	}

    function getJadwalById($id) {
		$this->db->where('id', $id);
		$query =  $this->db->get('tb_jadwal');
		return $query->row();
	}

	function update_jadwal($id, $data) { 
		$this->db->where('id', $id);
		$this->db->update($this->table,$data);
	}

    function hapus_jadwal($id) { 
		$this->db->where('id', $id);
		$this->db->delete($this->table);
	}
	
}