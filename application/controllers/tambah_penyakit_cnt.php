<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class tambah_penyakit_cnt extends CI_Controller {

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
 	redirect('tambah_penyakit_cnt/read','refresh');
 }

 public function read()
 {
 	$data['penyakit'] = $this->clustering->getPenyakit();
 	$this->load->view('tampil_penyakit_view.php', $data);
 }

 public function create()
 {
 	$this->load->view('tambah_penyakit_view.php');
 }
 public function createAction()
 {
 	$nama_penyakit = $this->input->post('penyakit');
 	$data = array(

 		'nama_penyakit' => $nama_penyakit,

 	);
 	$this->clustering->insertPenyakit($data);
 	redirect('tambah_penyakit_cnt/read','refresh');
 }

 public function update($id)
 {
 	$data['penyakit'] = $this->clustering->readPenyakitById($id);
 	$this->load->view('edit_penyakit_view.php', $data);
 }
 public function updateAction($id)
 {
 	$nama_penyakit = $this->input->post('penyakit');
 	$data = array(
 		'id_penyakit' => $id,
 		'nama_penyakit' => $nama_penyakit,

 	);
 	$this->clustering->updatePenyakit($data);
 	redirect('tambah_penyakit_cnt/read','refresh');
 }

 public function delete($id)
 {
 	$this->clustering->deletePenyakit($id);
 	redirect('tambah_penyakit_cnt/read','refresh');
 }

}