<?php
/**
 * class ini ditujuakan untuk memasukan data registrasi konsumen yang ingin berlangganan
 * 
 * 
 */
class CostumerReg extends CI_Model {
	
	function __construct() {
		
	}
	
	/*
	 * fungsi memasukkan  data costumer
	 * 
	 * kolom tabelnya
	 */
	function insertCostumer($data){
		foreach ($data as $costumer) {
			
		}
	}
	
	
	function updateCostumer($value=array())
	{
		
	}
	
	// mengambil informasi pelanggan simpel 
	
	function getShortID($id){
			
		$data=array();
		
		$this->db->get('');
		
		return $data;
	}
	
	// mengambil data pelanggan penuh
	
	function getDetailID($id){
		
	}
	
}