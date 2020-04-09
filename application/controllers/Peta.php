<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Peta extends CI_Controller {

    public function __construct()
      {
       parent::__construct();
       $this->load->library('leaflet');
        }

    public function index()
	{
        $config = array(
            'center'         => '-7.0561467,110.4346696', // Center of the map
            'zoom'           => 15, // Map zoom
            );
        $this->leaflet->initialize($config);
        
        $marker = array(
            'latlng' 		=>'-7.0561467,110.4346696', // Marker Location
            'popupContent' 	=> 'Hi, iam a popup!!', // Popup Content
            );
            $this->leaflet->add_marker($marker);
        
       
        $data['map'] =  $this->leaflet->create_map(); 
		$this->load->view('v_peta',$data);
	}
}