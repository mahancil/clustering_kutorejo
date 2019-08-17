<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class tampil_cnt extends CI_Controller {

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
 	$data['dataset']=$this->clustering->readData();
 	$this->load->view('tampil_view.php', $data);
 }

 public function form($id)
 {
 	$data = array('id' => $id);
 	$data['dataset']=$this->clustering->readDataById($id);
 	$this->load->view('tampil_form_view.php', $data);
 }

 public function update($id)
 {
 	$tahun = $this->input->post("tahun");
 	$desa = $this->input->post("desa");
 	$jumlahbalita = $this->input->post("jumlahbalita");
 	$jumlahkematian = $this->input->post("jumlahkematian");
 	$jumlahhidup = $this->input->post("jumlahhidup");
 	$giziburuk = $this->input->post("giziburuk");
 	$gizikurang = $this->input->post("gizikurang");
 	$penyakit1 = $this->input->post("penyakit1");
 	$penyakit2 = $this->input->post("penyakit2");
 	$penyakit3 = $this->input->post("penyakit3");

 	$data = array(

 		'id' => $id,
 		'tahun' => $tahun,
 		'desa' => $desa,
 		'jumlah_balita' => $jumlahbalita,
 		'jumlah_kematian'=> $jumlahkematian,
 		'jumlah_hidup'=> $jumlahhidup,
 		'gizi_buruk' => $giziburuk,
 		'gizi_kurang'=> $gizikurang,
 		'penyakit1'=> $penyakit1,
 		'penyakit2'=> $penyakit2,
 		'penyakit3'=> $penyakit3,

 	);
 	$this->clustering->editData($data);
 	redirect('tampil_cnt','refresh');
 }
 

}