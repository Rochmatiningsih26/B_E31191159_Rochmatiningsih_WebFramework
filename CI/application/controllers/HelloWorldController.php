<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HelloWorldController extends CI_Controller {

    public function index()
    {
        $this->load->view('tampilanIndex');
    }

    public function functionBelajar()
    {
        $this->load->view('tampilanFunctionBelajar');
    }
}