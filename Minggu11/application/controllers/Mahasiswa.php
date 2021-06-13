<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Mahasiswa extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->model('Mahasiswa_model'); //memuat model "Mahasiswa_model.php"

	}

	// membuat fungsi tambah
	public function tambah(){
		//memuat template pada view dalam folder crud, file tambah_mahasiswa
		$this->template->views('crud/tambah_mahasiswa');
	}

	// membuat fungsi input
	public function input(){
		$username = $this->input->post('username'); //menyimpan data username dari form
		$password = $this->input->post('password'); //menyimpan data password dari form
		$grup = $this->input->post('grup'); //menyimpan data grup dari form

		//deklarasi variabel data dalam bentuk array
		$data = array(
		'username' => $username,
		'password' => $password,
		'grup' => $grup
	);
		//menambahkan data dari variabel $data kedalam tabel tm_user dalam BD
		$this->Mahasiswa_model->input_data($data, 'tm_user');
		//mengalihkan dari halaman form tambah data ke halaman index
		redirect('Mahasiswa/index');
	}

	public function index()
	{
		//deklarasi nilai user yang ada pada model mahasiswa dan menampilkan hasilnya
		$data['user'] = $this->Mahasiswa_model->getAll()->result();
		//memuat template pada view dalam folder crud, file home_mahasiswa.php
		$this->template->views('crud/home_mahasiswa',$data);
	}

	public function edit($id){
		$where = array('id'=>$id);
		$data['user'] = $this->Mahasiswa_model->edit_data($where,'tm_user')->result();
		$this->template->views('crud/edit_mahasiswa',$data);
	}

	public function update(){
		$id = $this->input->post('id');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$grup = $this->input->post('grup');

		$data = array(
			'username' => $username,
			'password' => $password,
			'grup' => $grup
		);
		$where = array (
			'id' => $id
		);
		$this->Mahasiswa_model->update_data($where,$data,'tm_user');
		redirect('Mahasiswa');
	}

	public function hapus($id){
		$where = array('id' => $id);
		$this->Mahasiswa_model->hapus_data($where,'tm_user');
		redirect('Mahasiswa/index'); 
	}

		public function Api(){
		$data = $this->Mahasiswa_model->getAll();
		echo json_encode($data->result_array());
	}

	public function ApiInsert(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$grup = $this->input->post('grup');

		$data = array(
			'username' => $username,
			'password' => $password,
			'grup' => $grup
			);
		$this->Mahasiswa_model->input_data($data,'tm_user');
		echo json_encode($array);
	}

	public function ApiDelete(){
		if ($this->input-post('username')) {
			$where = array('username' => $this->input->post('username'));
			if ($this->Mahasiswa_model->hapus_data($where,'tm_user')) {
				$array = array('success' => true);
			}else {
				$array = array('error' => true);
			}
			echo json_encode($array);
		} 
	}
}
?>