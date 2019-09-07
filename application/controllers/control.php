<?php
	
	defined('BASEPATH') OR exit("Dirección no válidad");

	class Control extends CI_Controller
	{

		public function index ()
		{
			$this->load->view("principal");
		}

	}



?>