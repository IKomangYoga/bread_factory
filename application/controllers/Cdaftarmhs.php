<?php
    class Cdaftarmhs extends CI_Controller
    {
		public function __construct(){
			parent:: __construct();
			$this->load->config('email');
			$this->load->helper(array('form', 'url'));
		}

        public function login()
	    {
		$data=[
			'header'=>$this->load->view('partial/header','',true),
			'navbar'=>$this->load->view('partial/navbar','',true),
			'sidebar'=>$this->load->view('partial/sidebar','',true),
			'footer'=>$this->load->view('partial/footer','',true),
		];
		$this->load->view('pages-login',$data);
	    }

	
	    public function register()
	    {
		$data=[
			'header'=>$this->load->view('partial/header','',true),
			'navbar'=>$this->load->view('partial/navbar','',true),
			'sidebar'=>$this->load->view('partial/sidebar','',true),
			'footer'=>$this->load->view('partial/footer','',true),
		];
		$this->load->view('pages-register',$data);
	    }

        function simpandaftarmhs()
        {
            $this->load->model('mdaftar');
            $this->mdaftar->simpandaftarmhs();
        }

        function prosesloginmhs()
		{
			$this->load->model('Mloginmhs');
			$this->Mloginmhs->prosesloginmhs();
		}

		
        function logout()
		{
			$this->session->sess_destroy();
			redirect('','refresh');	
		}
    }
?>