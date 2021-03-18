<?php

	class Hello extends CI_Contraller {
		public function index(){
		$this -> load -> model("Hello_moddel");
		$model = $this -> Hello_model;
		$a = $model -> txt;
		$data ['text'] = $a;
		$this -> load -> view ('helloview', $data);
	}
	}
?>