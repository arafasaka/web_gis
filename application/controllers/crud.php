<?php 
 
class Crud extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('m_data');
		$this->load->helper('url');
		$this->load->database();
	}	
	function index(){
		$this->data['datas']=$this->m_data->showData();
		$this->load->view('v_tabel',$this->data);
	
		// $data['data'] = $this->m_data->tampil_data('bangunan')->result();
		// $this->load->view('v_tabel',$data);
	}
	function tambah(){
		$this->load->view('v_input');
	}
	function tambah_aksi(){
		$bangunan_nama = $this->input->post('bangunan_nama');
		$bangunan_lat = $this->input->post('bangunan_lat');
		$bangunan_long = $this->input->post('bangunan_long');
 
		$data = array(
			'bangunan_nama' => $bangunan_nama,
			'bangunan_lat' => $bangunan_lat,
			'bangunan_long' => $bangunan_long
			);
		$this->m_data->input_data($data,'bangunan');
		redirect('index.php/home');
	}
	function tambah_aksi2(){
		$bangunan_nama = $this->input->post('bangunan_nama');
		$bangunan_lat = $this->input->post('bangunan_lat');
		$bangunan_long = $this->input->post('bangunan_long');
 
		$data = array(
			'bangunan_nama' => $bangunan_nama,
			'bangunan_lat' => $bangunan_lat,
			'bangunan_long' => $bangunan_long
			);
		$this->m_data->input_data($data,'bangunan');
		redirect('index.php/crud/index');
	}
	function hapus($id){
		$where = array('bangunan_id' => $id);
		$this->m_data->hapus_data($where,'bangunan');
		redirect('index.php/crud/index');
	}
	public function edit($id){
		$where = array('bangunan_id' => $id);
		$data['bangunan']= $this->m_data->edit_data($where,'bangunan')->result();
		//print_r($id	);
		$this->load->view('v_edit', $data);
	}
	public function update(){
		$id = $this->input->post('bangunan_id');
		$bangunan_nama = $this->input->post('bangunan_nama');
		$bangunan_lat = $this->input->post('bangunan_lat');
		$bangunan_long = $this->input->post('bangunan_long');
	
		$updated_data = array(
			'bangunan_id' => $id,
			'bangunan_nama' => $bangunan_nama,
			'bangunan_lat' => $bangunan_lat,
			'bangunan_long' => $bangunan_long
		);
		// $where = array(
		// 	'bangunan_id' => $id
		//);
		$this->m_data->update_data($updated_data, $this->input->post('bangunan_id'));
		redirect('index.php/crud/index');
	}
	// function update(){
	// 	$id = $this->input->post('bangunan_id');
	// 	$bangunan_nama = $this->input->post('bangunan_nama');
	// 	$bangunan_lat = $this->input->post('bangunan_lat');
	// 	$bangunan_long = $this->input->post('bangunan_long');

		
	// 	$data = array(
	// 		'bangunan_nama' => $bangunan_nama,
	// 		'bangunan_lat' => $bangunan_lat,
	// 		'bangunan_long' => $bangunan_long
	// 		);
	// 	$where = array('bangunan_id' => $id);
	// 	$this->m_data->update_data($where,$data,'bangunan');
	// 	redirect('index.php/home');
	// }
}