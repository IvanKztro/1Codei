<?php

class Home extends CI_Controller
{
	

	function index()
	{
		$this->load->helper('html');
		$datos = array("title" => "Principal", "h2" => "Inicio de sesion", "p" => "hola mundo");
		$this->load->view("home.html",$datos);
	}


}






?>