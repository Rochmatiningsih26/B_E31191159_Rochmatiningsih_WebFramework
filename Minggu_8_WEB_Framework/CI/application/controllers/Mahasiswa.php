<?php 
//defined('BASEPATH') OR exit('No direct script access allowed');  
class Mahasiswa extends CI_Controller {  
	function __construct(){  
	 parent::__construct();   
	 $this->load->model('Mahasiswa_model');  
	 $this->load->model('Prodi_model');  
	 $this->load->model('Angkatan_model');  
	}   

	public function index()
	{   
		$data['Mahasiswa'] = $this->Mahasiswa_model->get_data();     
		$this->load->view('view_mahasiswa',$data); 
		$data['Prodi'] = $this->Prodi_model->get_data();     
		$this->load->view('view_prodi',$data); 
		$data['Angkatan'] = $this->Angkatan_model->get_data();     
		$this->load->view('view_angkatan',$data);  
	}   

	public function profil()
	{   
		echo "ini adalah method profil pada controller Mahasiswa";  
	}  
}