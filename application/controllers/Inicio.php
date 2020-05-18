<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {

	public function index()
	{
		$this->load->view('inicio/header');
		//$this->load->view('inicio/sidebar');
		$this->load->view('inicio/bodyinicio');
		$this->load->view('inicio/footer');
	}
}