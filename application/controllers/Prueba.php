<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prueba extends CI_Controller {

	public function index()
	{
		//$this->load->view('welcome_message');
		echo "SALIO LA PRUEBA";
	}

	public function dif()
	{
		//$this->load->view('welcome_message');
		echo "SALIO LA PRUEBA de un function diferente";
	}
}
