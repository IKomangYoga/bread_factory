<?php
	class Ctampil extends CI_Controller
	{
		function login()
		{
			$this->load->view('login');	
		}
		
		function daftarmhs()
		{
			$this->load->view('register');	
		}

		function daftarcompany()
		{
			$this->load->view('registerascompany');	
		}

		function proseslogin()
		{
			$this->load->model('mlogin');
			$this->mlogin->proseslogin();
		}	
	}
?>