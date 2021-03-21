
<?php

class Kode1 extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('phpview');
	}

	public function hello_python()
	{
		$this->load->view('pythonview');
	}

	public function hello_cpp()
	{
		$this->load->view('cppview');
	}

	public function hello_java()
	{
		$this->load->view('javaview');
	}

	public function _remap($var){
		if(isset($var)){
			switch (strtolower($var)) {
				case 'python':
					$this->hello_python();
					break;
				case 'cpp':
					$this->hello_cpp();
					break;
				case 'java':
					$this->hello_java();
					break;
				default:
					$this->index();
					break;
			}
		}else{
			$this->index();
		}
	}
}