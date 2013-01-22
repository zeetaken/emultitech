<?php
/**
 * mengambil informasi transaksi 
 * dari transaksi hari, bulan sampai per-tahunnya
 * 
 */
class LaporanTransaksi extends CI_Model {
	
	private $dataTrans;
	
	function __construct() {
		
	}
	
	/*
	 * 
	*/
	public function getTransHari()
	{
		
	}
	
	/*
	 * Mengambil informasi transaksi tiap bulan
	 *  value => getTransBln(tgl,bulan,tahun)  
	*/
	public function getTransTgl($tgl,$bln,$thn)
	{
		
	}
	
	/*
	 * Mengambil informasi transaksi tiap bulan
	 *  value => getTransBln(bulan,tahun)  
	*/
	public function getTransBln($bulan,$tahun)
	{
		
	}
	/*
	 * mengambil informasi transaksi pertahun
	 * 
	 * @Value => tahun berapa yang diinginkan 
	*/
	public function getTransThn($tahun)
	{
		
	}
	/*
	 *  Mengambil informasi transaksi di costumer tertentu berdasarkan id costumer
	 */
	public function getTransByCostumer($costumer_id)
	{
		
	}
	
}