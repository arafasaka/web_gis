<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

public function __construct()
  {
   parent::__construct();
	}

	public function index()
	{
		$this->load->view('v_home');
	}
	public function tabel()
	{
		$this->load->view('v_tabel');
	}
	public function bangunan_json()
	{
		$data=$this->db->get('bangunan')->result();
		echo json_encode($data);
	}
	public function foto($kode=null)
	{
		$data=$this->db->limit(1)->get_where('bidang',array('bidang_kode'=>$kode))->row()->bidang_gambar;
		echo json_encode($data);
	}

	public function detail ($kode=null)
	{
		$data['kode']=$kode;
		$data['bidang']=$this->db->get_where('bidang',array('bidang_kode'=>$kode))->result();
		$data['dok']=$this->db->get_where('dokumentasi', array('bidang_kode'=>$kode))->result();
		$this->load->view('v_detail',$data);
	}
	
}
