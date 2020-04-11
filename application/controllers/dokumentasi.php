<?php 
class dokumentasi extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('m_data');
		$this->load->helper('url');
        $this->load->database();
        }

        public function index(){
            $this->data['datas']=$this->m_data->showDataDokumentasi();
            $this->load->view('v_dokumentasi',$this->data);       
    }
    function tambah(){
		$this->load->view('v_input_dokumentasi');
    }
    function tambah_aksi2(){
		$dokumentasi_id = $this->input->post('dokumentasi_id');
		$bidang_kode = $this->input->post('bidang_kode');
        $dokumentasi = $_FILES['dokumentasi_gambar'];
        if($dokumentasi_gambar=''){}else{
            $config['upload_path'] = './assets/uploads';
            $config['allowed_types'] = 'jpg|png|gif';

            $this->load->library('upload',$config);
            if(!$this->upload->do_upload('dokumentasi_gambar')){
                echo "Upload gagal"; die();   
            }else{
                $dokumentasi_gambar=$this->upload->data('file_name');
            }
        }
        
 
		$data = array(
			'dokumentasi_id' => $dokumentasi_id,
			'bidang_kode' => $bidang_kode,
            'dokumentasi_gambar' => $dokumentasi_gambar
			);
		$this->m_data->input_data_Dokumentasi($data,'dokumentasi');
		redirect('index.php/dokumentasi/index');
	}
    public function hapus($id){
		$where = array('dokumentasi_id' => $id);
		$this->m_data->hapus_data_dokumentasi($where,'dokumentasi');
        redirect('index.php/dokumentasi/index');
    }
    function print(){
		$this->data['datas']=$this->m_data->showDataDokumentasi();
        $this->load->view('v_print_tabel3',$this->data);
    }
    // public function edit($id){
	// 	$where = array('dokumentasi_id' => $id);
	// 	$data['dokumentasi']= $this->m_data->edit_data_dokumentasi($where,'dokumentasi')->result();
	// 	//print_r($id	);
	// 	$this->load->view('v_edit_dokumentasi', $data);
	// }
	// public function update(){
	// 	$id = $this->input->post('dokumentasi_id');
	// 	$bidang_kode = $this->input->post('bidang_kode');
    //     $bidang_dokumentasi = $_FILES['bidang_dokumentasi'];
    //     if($bidang_gambar=''){}else{
    //         $config['upload_path'] = './assets/uploads';
    //         $config['allowed_types'] = 'jpg|png|gif';

    //         $this->load->library('upload',$config);
    //         if(!$this->upload->do_upload('bidang_dokumentasi')){
    //             echo "Upload gagal"; die();   
    //         }else{
    //             $bidang_gambar=$this->upload->data('file_name');
    //         }
    //     }
        
	// 	$updated_data = array(
	// 		'dokumentasi_id' => $dokumentasi_id,
	// 		'bidang_kode' => $bidang_kode,
    //         'bidang_dokumentasi' => $bidang_dokumentasi
	// 		);
	// 	$this->m_data->update_data_dokumentasi($updated_data, $this->input->post('dokumentasi_id'));
	// 	redirect('index.php/dokumentasi/index');
    // }




    // public function edit($id){
	// 	$where = array('bidang_kode' => $id);
	// 	$data['bidang']= $this->m_data->edit_data_bidang($where,'bidang')->result();
	// 	//print_r($id	);
	// 	$this->load->view('v_edit_bidang', $data);
	// }
	// public function update(){
	// 	$id = $this->input->post('bidang_kode');
	// 	$bidang_kode = $this->input->post('bidang_nama');
	// 	$bidang_nama = $this->input->post('bidang_keterangan');
	
	// 	$updated_data = array(
	// 		'bidang_kode' => $id,
	// 		'bidang_nama' => $bangunan_nama,
	// 		'bidang_keterangan' => $bangunan_lat,
	// 		'bidang_gambar' => $bidang_keterangan
	// 	);
	// 	$this->m_data->update_data($updated_data, $this->input->post('bidang_kode'));
	// 	redirect('index.php/bidang/index');
    // }
    // public function detail($id)
    // {
    //     $this->load->model('m_data');
    //     $detail = $this->m_data->detail->detail_data($id);
    //     $data['detail'] = $detail;
    //     $this->load->view('v_edit_bidang', $detail);
    // }
    // function print(){
	// 	$this->data['datas']=$this->m_data->showDataBidang();
    //     $this->load->view('v_print_tabel2',$this->data);
    // }
}	