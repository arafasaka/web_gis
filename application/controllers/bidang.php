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
        
		$updated_data = array(
			'bidang_kode' => $bidang_kode,
			'bidang_nama' => $bidang_nama,
            'bidang_keterangan' => $bidang_keterangan,
            'bidang_gambar' => $bidang_gambar
			);
		$this->m_data->update_data_bidang($updated_data, $this->input->post('bidang_kode'));
		redirect('index.php/bidang/index');
    }
	
    function print(){
		$this->data['datas']=$this->m_data->showDataBidang();
        $this->load->view('v_print_tabel2',$this->data);
    }
    // function action(){
	// $uploadDir = "/assets/geojson";
	// // Apabila ada file yang di-upload
	// if(is_uploaded_file($_FILES['myfile']['tmp_name'])){
	// 	$uploadFile = $_FILES['myfile'];

	// 	// Extract nama file
	// 	$extractFile = pathinfo($uploadFile['name']);
	// 	$size = $_FILES['myfile']['size']; //untuk mengetahui ukuran file
	// 	$tipe = $_FILES['myfile']['type'];// untuk mengetahui tipe file

	// 	//Dibawah ini adalah untuk mengatur format gambar yang dapat di uplada ke server.
	// 	//Anda bisa tambahakan jika ingin memasukan format yang lain tergantung kebutuhan anda.

	// 	// $exts =array('image/geojson');
	// 	// if(!in_array(($tipe),$exts)){
	// 	// 	echo 'Format file yang di izinkan hanya tidak sesuai';
	// 	// 	exit;
	// 	//}
	// 	// dibawah ini script untuk mengatur ukuran file yang dapat di upload ke server
	// 	if(($size !=0)&&($size>30000)){
	// 		exit('Ukuran gambar terlalu besar?');
	// 	}
	// }

	// $sameName = 0; // Menyimpan banyaknya file dengan nama yang sama dengan file yg diupload
	// $handle = opendir($uploadDir);
	// while(false !== ($file = readdir($handle))){ // Looping isi file pada directory tujuan
	// 	// Apabila ada file dengan awalan yg sama dengan nama file di uplaod
	// 	if(strpos($file,$extractFile['filename']) !== false)
	// 	$sameName++; // Tambah data file yang sama
	// }

	// /* Apabila tidak ada file yang sama ($sameName masih '0') maka nama file pakai 
	// * nama ketika diupload, jika $sameName > 0 maka pakai format "namafile($sameName).ext */
	// $newName = empty($sameName) ? $uploadFile['name'] : $extractFile['filename'].'('.$sameName.').'.$extractFile['extension'];

	// if(move_uploaded_file($uploadFile['tmp_name'],$uploadDir.$newName)){
	// 	echo 'File berhasil diupload dengan nama: '.$newName;
	// }
	// else{
	// 	echo 'File gagal diupload';
	// }
    // }
}	