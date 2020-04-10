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
	function print(){
		$this->data['datas']=$this->m_data->showData();
		$this->load->view('v_print_tabel1',$this->data);
	}
	/* public function excel(){
		$this->data['datas']=$this->m_data->showData();
		
		require(APPPATH. 'PHPExcel-1.8/Classes/PHPExcel.php');
		require(APPPATH. 'PHPExcel-1.8/Classes/PHPExcel/Writer/Excel2007.php');

		$object = new PHPExcel();
		$object->getProperties()->setCreator("Ara Fasaka");
		$object->getProperties()->setLastModified("Ara Fasaka");
		$object->getProperties()->setTitle("Daftar Bangunan");

		$object->setActiveSheetIndex(0);

		$object->getActiveSheet()->setCellValue('A1','ID');
		$object->getActiveSheet()->setCellValue('B1','NAMA BANGUNA');
		$object->getActiveSheet()->setCellValue('C1','LATITUDE');
		$object->getActiveSheet()->setCellValue('D1','LONGITUDE');

		$baris = 2;
		$no = 1;

		foreach ($data['bangunan'] as $b) {
		$object->getActiveSheet()->setCellValue('A' .$baris, $no++);
		$object->getActiveSheet()->setCellValue('B' .$baris, $b->bangunan_nama);
		$object->getActiveSheet()->setCellValue('C' .$baris, $b->bangunan_lat);
		$object->getActiveSheet()->setCellValue('D' .$baris, $b->bangunan_long);

		$baris++;
		}

		$filename="Data_Bangunan".'xlsx';
		$object->getActiveSheet()->setTitle("Data Bangunan");
		header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
		header('Content-Disposition: attachment;filename="'.$filename. '"');
		header('Cache-Control: max-age=0');

		$writer=PHPExcel_IOFactory::createwriter($object, 'Excel2007');
		$writer->save('php://output');
		exit;


	} */

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