<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Estaciones extends CI_Controller {

	public function index()
	{
		$this->load->view('estacion/header');
		//$this->load->view('inicio/sidebar');
		$this->load->view('estacion/bodyinicio');
		$this->load->view('estacion/footer');
	}
}