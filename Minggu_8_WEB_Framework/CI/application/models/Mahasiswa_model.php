<?php  
class Mahasiswa_model extends CI_Model { 
	public function get_data()
	{ 
		$data_mahasiswa = [ 
		["nama"=>"Rochmatiningsih","prodi"=>"MIF"],    
		["nama"=>"Durotul Fadillah","prodi"=>"TKK"], 
		["nama"=>"Yulinar Agustia","prodi"=>"TIF"]
		]; 
		return $data_mahasiswa; 
		}
	}
?>