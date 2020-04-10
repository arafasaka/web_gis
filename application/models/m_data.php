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
	public function update_data($updated_data, $id){
		$this->db->where('bangunan_id', $id); 
		$this->db->update('bangunan', $updated_data);
	}
}