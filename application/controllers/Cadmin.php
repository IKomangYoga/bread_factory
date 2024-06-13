<?php
	class Cadmin extends CI_Controller
	{
		public function __construct()
		{
			parent::__construct();
			$this->load->model('mvalidasi');
			$this->mvalidasi->validasi();
		}
		
		function dashboard()
		{
			$this->load->view('halamanadmin');	
		}	
		
		
		function logout()
		{
			$this->session->sess_destroy();
			redirect('','refresh');	
		}
	}
?>