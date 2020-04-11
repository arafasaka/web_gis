<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Geojson extends CI_Controller {
	function __construct() {
		parent::__construct();
	}

	public function index()
	{
		if($this->input->post('uploadGeojson'))
		{
			$file = $_FILES["file"]['name'];

			$config = array(
			'upload_path' => ".assets/geojson/",
			'allowed_types' => "geojson",
			'overwrite' => TRUE,
			'max_size' => "99999999999",
			'file_name' => $file
			);
			$this->load->library('upload', $config); 
			
			if($this->upload->do_upload('file'))
			{
				$res['msg']="File has been uploaded!";
				$this->load->view('v_bidang', $res);
			}
			else
			{
                
                //$this->load->view('v_bidang');
			}
		}
	}
}