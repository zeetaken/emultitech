<?php
	
	/**
	 *  Modifikasi data order barang dari costumer
	 */
	class OrderBarang extends CI_Model {
		
		function __construct() {
			
		}
		
	/**
	 *  fungsi pelanggan_order => digunakan untuk menyimpan data order dari costumer yang telah terdaftar (pelanggan)
	 *  parameter yang disimpan => 
	 * 			id_barang, 
	 * 			jumlah barang berdasarkan id_barang, 
	 * 			total berat barang, 
	 * 			set status pending, 
	 * 			id_costumer
	 *  lokasi => 
	 */
		function pelanggan_order($data_order){
			
			
		}
	/**
	 *  fungsi guest_order => digunakan untuk menyimpan data order dari costumer yang telah tidak terdaftar
	 *  parameter yang disimpan => 
	 *  ======== BARANG =================
	 * 			id_barang, 
	 * 			jumlah barang berdasarkan id_barang, 
	 * 			total berat barang, 
	 * 			set status pending, 
	 * ========= GUEST ===================
	 * 			id_costumer
	 *  lokasi => 
	 */	
		function guest_order($data_order){
			
			
		}
		
	}
	
?>