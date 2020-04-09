<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tabel extends CI_Controller {

public function __construct()
  {
   parent::__construct();
        $this->load->model('m_data');
		$this->load->helper('url');
	}

	public function index()
	{
		$data['data'] = $this->m_data->tampil_data('bangunan')->result();
		$this->load->view('v_tabel',$data);
    }
}