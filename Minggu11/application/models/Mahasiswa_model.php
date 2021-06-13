<?php 
class Mahasiswa_model extends CI_Model {
	public function get_data(){
		$data_mahasiswa = [ 
		["nama"=>"Rochmatiningsih","prodi"=>"MIF"],    
		["nama"=>"Durotul Fadillah","prodi"=>"TKK"], 
		["nama"=>"Yulinar Agustia","prodi"=>"TIF"]
		]; 
		return $data_mahasiswa;
	}

	public function getAll(){
		$this->db->select('*'); //menampilkan seluruh nilai pada kolom DB
		$this->db->from('tm_user'); //memilih tabel pada BD
		$this->db->join('tm_grup','tm_user.grup = tm_grup.id_grup'); //relasi dalam BD
		$query = $this->db->get(); //deklarasi query untuk menampilkan data DB
		return $query; //mengembalikan nilai $query
	}

	// membuat function input_data
	public function input_data($data,$table)
	{
		// menambahkan data sesuai tabel pada BD ($table), variabel ($data) yang berisi array
		$this->db->insert($table,$data);
	}

	function edit_data($where,$table){
		return $this->db->get_where($table,$where);
	}

	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	function login($user,$pass,$table){
		$this->db->select('*');
		$this->db->from('tm_user');
		$this->db->where('username',$user);
		$this->db->where('password',$pass);
		$query = $this->db->get();
		return $query;
	}
}
?>