<?php

class Variabel extends CI_Controller{
	public function index(){
		$data = ['variabelview'=>'Data variabek ke 1', 'variabel2'=>'Data variabel ke 2'];
		$this -> load -> view ('variabelview', $data);
	}
}
?>