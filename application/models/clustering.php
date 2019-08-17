<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class clustering extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}

	public function uploadData($data)
	{

		$this->db->insert('dataset', $data);
        
	}


	public function editData($data)
	{
		$id = $data['id'];
  		unset($data['id']);
		$this->db->where('id_dataset', $id);
  		$this->db->update('dataset' ,$data);
        
	}

	public function emptyTable(){

		$this->db->empty_table('dataset');

	}

	public function getPenyakit(){

		$query=$this->db->get('penyakit');
		return $query->result();

	}
	public function insertPenyakit($data)
	{

		$this->db->insert('penyakit', $data);
        
	}

	public function readPenyakitById($id){
		$this->db->where('id_penyakit', $id);
		$query = $this->db->get('penyakit');
		return $query->result();
	}

	public function updatePenyakit($data)
	{
		$id = $data['id_penyakit'];
  		unset($data['id_penyakit']);
		$this->db->where('id_penyakit', $id);
  		$this->db->update('penyakit' ,$data);
        
	}

	public function readData(){
		$query=$this->db->get('dataset');
		return $query->result();
	}

	public function readId(){
		$query = $this->db->query('SELECT id_dataset FROM dataset');
		return $query->result();
	}
	public function readDataById($id){
		$this->db->where('id_dataset', $id);
		$query = $this->db->get('dataset');
		return $query->result();
	}

	public function deletePenyakit($id){
		$this->db->where('id_penyakit', $id);
		$this->db->delete('penyakit');
	}


}

/* End of file get_resep.php */
/* Location: ./application/models/get_resep.php */