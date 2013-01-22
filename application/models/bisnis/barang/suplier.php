<?php
/**
 * 
 */
class Suplier extends CI_Model {
	
	private $dataSuplier=array();
	
	function __construct() {
		
	}
	
	// tambah informasi suplier
	public function addSuplier($data=array())
	{
		foreach ($data as $suplier) {
			
		}
	}
	
	// update info suplier
		
	public function updateSuplier($value=array())
	{
		
	}
	public function getSuplierInfo($data)
	{
		
	}
	
	public function getSuplierBaseID($id)
	{
		
	}
	
	public function getSuplierBaseName($name)
	{
		$this->db->get('suplier');
	}
}
