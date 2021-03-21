
<?php

class Kode extends CI_Controller {

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
	public function hello($var)
	{
		if(isset($var)){
			switch (strtolower($var)) {
				case 'php':
					$this->load->view('phpview');
					break;
				case 'python':
					$this->load->view('pythonview');
					break;
				case 'cpp':
					$this->load->view('cppview');
					break;
				case 'java':
					$this->load->view('javaview');
					break;
				default:
					echo "Input Uri Salah..!!!";					
					break;
			}
		}else{
			echo "Input Uri Salah..!!!";
		}
	}
}