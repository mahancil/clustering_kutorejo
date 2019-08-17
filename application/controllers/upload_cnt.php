<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class upload_cnt extends CI_Controller {

 public function __construct()
 {
  
  parent::__construct();
  $this->load->helper('url', 'form');
  $this->load->library('form_validation');
  $this->load->model('clustering');
  $this->load->library('session');
    
 }

 public function index()
 {
 	$this->load->view('jumlah_penyakit_view.php');
 }

 public function form_data()
 {
 	$data['penyakit'] = $this->clustering->getPenyakit();
 	$data['jumlah_penyakit'] = $this->input->post('jumlahpenyakit');
 	$this->load->view('upload_view.php', $data);
 }

 public function input($jumlah)
 {
		$this->form_validation->set_rules('tahun', 'Tahun', 'trim|required');
		

		if($this->form_validation->run() == false){
			$this->load->view('upload_view.php');
			$this->form_validation->set_message('input', "Check Your Input!");
			return false;
		}else{
			$tahun = $this->input->post('tahun');
			$this->session->set_userdata('tahun', $tahun);
			$fp = fopen($_FILES['userfile']['tmp_name'], 'r') or die("can't open file");
			$count=0;
        	$this->clustering->emptyTable();
        	$param['dataset'] = array();
        	$penyakit = array();
        	$this->session->set_userdata('param', $param['dataset']);
        	if($_FILES['userfile']['type'] == 'text/csv' || $_FILES['userfile']['type'] == 'application/vnd.ms-excel'){
	        while($csv_line = fgetcsv($fp,1024))
	        {
	            $count++;
		            if($count == 1)
		            {
		                continue;
		                
		            }

			// var_dump (fgetcsv($fp,0));
			// die();
	            for($i = 0, $j = count($csv_line); $i < $j; $i++)
	            {
	                $insert_csv = array();
	                
	                $insert_csv['tahun'] = $csv_line[0];
	                $insert_csv['desa'] = $csv_line[1];
	                $insert_csv['jumlah_balita'] = $csv_line[2];
	                $insert_csv['jumlah_kematian'] = $csv_line[3];
	                $insert_csv['jumlah_hidup'] = $csv_line[4];
	                $insert_csv['gizi_buruk'] = $csv_line[5];
	                $insert_csv['gizi_kurang'] = $csv_line[6];
	                for($a = 1; $a <= $jumlah;  $a++)
	                {
		                $insert_csv['penyakit'.$a.''] = $csv_line[$a+6];
		                $penyakit[$a] = $this->input->post('penyakit'.$a.'');

						$this->session->set_userdata('penyakit'.$a.'', $penyakit[$a]);
	                }

	            }
	            // $i++;
	            	$data = array();
	                $data['tahun'] = $insert_csv['tahun'];
	                $data['desa'] = $insert_csv['desa'];
	                $data['jumlah_balita'] = $insert_csv['jumlah_balita'];
	                $data['jumlah_kematian'] = $insert_csv['jumlah_kematian'];
	                $data['jumlah_hidup'] = $insert_csv['jumlah_hidup'];
	                $data['gizi_buruk'] = $insert_csv['gizi_buruk'];
	                $data['gizi_kurang'] = $insert_csv['gizi_kurang'];
	                

	                array_push($param['dataset'] , $insert_csv);
	               
	            	$this->clustering->uploadData($data);
	            
        	}
        	$id = $this->clustering->readId();
        	for($a = 0; $a < count($id);  $a++)
	                {
		                $param['dataset'][$a]['id_dataset'] = $id[$a]->id_dataset;
	                }
	                $param['jumlah_penyakit'] = $jumlah;
        	fclose($fp) or die("can't close file");
        	$this->session->set_userdata('param', $param);
        	// redirect('tampil_cnt','refresh');
        	$this->load->view('tampil_view.php', $param);
        	
		}

		else{
			$this->load->view('warning_view.php');
		}
	}
 }

}