<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->load->view('acceso/header');
		$this->load->view('acceso/bodylogin');
	}
}
