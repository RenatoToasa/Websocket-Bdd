<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Paquete extends CI_Model{

	function get_info(){

		$info = array(
			'origen'=>0,
			'destino'=>1,
			'mensaje'=>'texto'
			);
		return $info;
	}
	function insertar($array){
		$this->db->insert('datos',$array);

	}

	
}

