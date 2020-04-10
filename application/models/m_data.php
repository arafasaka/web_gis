<?php 

class m_data extends CI_Model{
	// function tampil_data($tabel){
	// 	return $this->db->get($tabel);
	// }

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
//BIDANG

	public function showDataBidang(){
		$query = $this->db->query("select * from bidang");
		return $query->result();
	}
	function hapus_data_bidang($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
	function input_data_bidang($data,$table){
		$this->db->insert($table,$data);
	}
	public function edit_data_bidang($where,$table){		
		return $this->db->get_where($table,$where);
	}
	function detail_data($id = null){
		$query = $this->db->get_where('bidang', array('kode_bidang' => $id))->row();
		return $query;
	}

	//DOKUMENTASI
	public function showDataDokumentasi(){
		$query = $this->db->query("select * from dokumentasi");
		return $query->result();
	}
	function hapus_data_dokumentasi($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
	function input_data_dokumentasi($data,$table){
		$this->db->insert($table,$data);
	}
}