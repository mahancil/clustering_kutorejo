<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dashboard_cnt extends CI_Controller {

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
 	$this->load->view('dashboard_view.php');
 } 

}