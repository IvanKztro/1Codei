<?php


class Login extends CI_Controller{

	function index()
	{
		$this->load->helper('html');
		$this->load->view("login.html");
	}

	function registrar()
	{
		$this->load->view("registro.html");
	}
}


?>