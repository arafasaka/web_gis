<?php 
class bidang extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('m_data');
		$this->load->helper('url');
        $this->load->database();
        }

        public function index(){
            $this->data['datas']=$this->m_data->showDataBidang();
            $this->load->view('v_bidang',$this->data);       
    }
    function tambah(){
		$this->load->view('v_input_bidang');
    }
    function tambah_aksi2(){
		$bidang_kode = $this->input->post('bidang_kode');
		$bidang_nama = $this->input->post('bidang_nama');
        $bidang_keterangan = $this->input->post('bidang_keterangan');
        $bidang_gambar = $_FILES['bidang_gambar'];
        if($bidang_gambar=''){}else{
            $config['upload_path'] = './assets/uploads';
            $config['allowed_types'] = 'jpg|png|gif';

            $this->load->library('upload',$config);
            if(!$this->upload->do_upload('bidang_gambar')){
                echo "Upload gagal"; die();   
            }else{
                $bidang_gambar=$this->upload->data('file_name');
            }
        }
        
 
		$data = array(
			'bidang_kode' => $bidang_kode,
			'bidang_nama' => $bidang_nama,
            'bidang_keterangan' => $bidang_keterangan,
            'bidang_gambar' => $bidang_gambar
			);
		$this->m_data->input_data_bidang($data,'bidang');
		redirect('index.php/bidang/index');
	}
    public function hapus($id){
		$where = array('bidang_kode' => $id);
		$this->m_data->hapus_data_bidang($where,'bidang');
        redirect('index.php/bidang/index');
    }

    public function edit($id){
		$where = array('bidang_kode' => $id);
		$data['bidang']= $this->m_data->edit_data_bidang($where,'bidang')->result();
		//print_r($id	);
		$this->load->view('v_edit_bidang', $data);
	}
	public function update(){
		$id = $this->input->post('bidang_kode');
		$bidang_kode = $this->input->post('bidang_nama');
		$bidang_nama = $this->input->post('bidang_keterangan');
	
		$updated_data = array(
			'bidang_kode' => $id,
			'bidang_nama' => $bangunan_nama,
			'bidang_keterangan' => $bangunan_lat,
			'bidang_gambar' => $bidang_keterangan
		);
		$this->m_data->update_data($updated_data, $this->input->post('bidang_kode'));
		redirect('index.php/bidang/index');
    }
    public function detail($id)
    {
        $this->load->model('m_data');
        $detail = $this->m_data->detail->detail_data($id);
        $data['detail'] = $detail;
        $this->load->view('v_edit_bidang', $detail);
    }
    function print(){
		$this->data['datas']=$this->m_data->showDataBidang();
        $this->load->view('v_print_tabel2',$this->data);
    }
}	