<?php
/**
 *
 */
class Multitech extends CI_Controller {

	function index() {
		
		$data = array(		
		'head_data'=>array(
			'merk'=>'Asus N43',
			'deskripsi'=>'Asus N43 didesain khusus untuk pecinta Multimedia'
		),
		'produk_data'=>'produk'
		);
		$this -> load -> view('template', $data);
	}
	
}