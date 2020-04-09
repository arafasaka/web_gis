<?php 

class m_data extends CI_Model{
	function tampil_data($tabel){
		return $this->db->get($tabel);
	}

	function input_data($data,$table){
		$this->db->insert($table,$data);
	}

	function showData(){
		$query = $this->db->query("select * from bangunan");
		return $query->result();
	}
	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
	public function edit_data($where,$table){		
		return $this->db->get_where($table,$where);
	}
	public function update_data($where,$data,$table){
		
		// $this->db->where($where); 
		// $this->db->update($table,$data);
	}
}