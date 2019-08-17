<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class persentase_cnt extends CI_Controller {

 public function __construct()
 {
  
  parent::__construct();
  $this->load->helper('url', 'form');
  $this->load->library('form_validation');
  $this->load->model('clustering');
  $this->load->library('session');
    
 }

 public function index(){

 }

 public function persentase($jumlah)
 {
 	$dataset = array();
 	$data = array();
  $gizi_buruk = array();
  $gizi_kurang = array();
  $penyakit1 = array();
  $penyakit2 = array();
  $penyakit3 = array();
  $angka_kematian = array();
  $normalisasi = array();
  $data=$this->session->userdata('param');

 	for($i=0;$i<count($data['dataset']);$i++)
	{
	  	 $dataset['data'][$i]['gizi_buruk']=($data['dataset'][$i]['gizi_buruk']/$data['dataset'][$i]['jumlah_balita'])*100;
	  	 $dataset['data'][$i]['gizi_kurang']=($data['dataset'][$i]['gizi_kurang']/$data['dataset'][$i]['jumlah_balita'])*100;
       for($a = 1; $a <= $jumlah;  $a++){
	  	 $dataset['data'][$i]['penyakit'.$a.'']=($data['dataset'][$i]['penyakit'.$a.'']/$data['dataset'][$i]['jumlah_balita'])*100;
        }
	  	 $dataset['data'][$i]['angka_kematian']=($data['dataset'][$i]['jumlah_kematian']/$data['dataset'][$i]['jumlah_balita'])*1000;
	 	
	}
  $dataset['jumlah_penyakit'] = $jumlah;

	$this->load->view('persentase_view.php', $dataset);
 	// var_dump($dataset);
 	// die();
}
public function normalisasi($jumlah)
{
	$dataset = array();
  $gizi_buruk = array();
  $gizi_kurang = array();
  $penyakit = array();
  $angka_kematian = array();
  $normalisasi = array();
  $normalisasi_final = array();
  $data=$this->session->userdata('param');

for($i=0;$i<count($data['dataset']);$i++)
	{
	  	 $dataset[$i]['gizi_buruk']=($data['dataset'][$i]['gizi_buruk']/$data['dataset'][$i]['jumlah_balita'])*100;
	  	 $dataset[$i]['gizi_kurang']=($data['dataset'][$i]['gizi_kurang']/$data['dataset'][$i]['jumlah_balita'])*100;
         for($a = 1; $a <= $jumlah;  $a++){
  	  	 $dataset[$i]['penyakit'.$a.'']=($data['dataset'][$i]['penyakit'.$a.'']/$data['dataset'][$i]['jumlah_balita'])*100;
          }
	  	 $dataset[$i]['angka_kematian']=($data['dataset'][$i]['jumlah_kematian']/$data['dataset'][$i]['jumlah_balita'])*1000;
	 	
	}
  for($a = 0; $a < $jumlah;  $a++){
  for($i=0;$i<count($dataset);$i++)
  {
  	  $gizi_buruk[$i] = $dataset[$i]['gizi_buruk'];
	  $gizi_kurang[$i] = $dataset[$i]['gizi_kurang'];
    
	  $penyakit[$a][$i] = $dataset[$i]['penyakit'.($a+1).''];
    
	  $angka_kematian[$i] = $dataset[$i]['angka_kematian'];
    }
  }

  for($i=0;$i<count($dataset);$i++)
  {
  	 $normalisasi['gizi_buruk'][$i] = ($dataset[$i]['gizi_buruk']-min($gizi_buruk))/(max($gizi_buruk)-min($gizi_buruk));
	   $normalisasi['gizi_kurang'][$i] = ($dataset[$i]['gizi_kurang']-min($gizi_kurang))/(max($gizi_kurang)-min($gizi_kurang));
        for($a = 1; $a <= $jumlah;  $a++){
      	$normalisasi['penyakit'.$a.''][$i] = ($dataset[$i]['penyakit'.$a.'']-min($penyakit[$a-1]))/(max($penyakit[$a-1])-min($penyakit[$a-1]));
        }
	   $normalisasi['angka_kematian'][$i] = ($dataset[$i]['angka_kematian']-min($angka_kematian))/(max($angka_kematian)-min($angka_kematian));
  }
  
  for($i=0;$i<count($dataset);$i++)
  {
   $normalisasi_final['data'][$i]['gizi_buruk'] = $normalisasi['gizi_buruk'][$i];
   $normalisasi_final['data'][$i]['gizi_kurang'] = $normalisasi['gizi_kurang'][$i];
   for($a = 1; $a <= $jumlah;  $a++){
   $normalisasi_final['data'][$i]['penyakit'.$a.''] = $normalisasi['penyakit'.$a.''][$i];
    }
   $normalisasi_final['data'][$i]['angka_kematian'] = $normalisasi['angka_kematian'][$i];
  }
  $normalisasi_final['jumlah_penyakit'] = $jumlah;
  	// var_dump($normalisasi_final);
  	// die();
  	$this->load->view('normalisasi_view.php', $normalisasi_final);
}
}