<?php
    class Cdaftarcompany extends CI_Controller
    {
        public function registercompany()
        {
            $data=[
                'header'=>$this->load->view('partial/header','',true),
                'navbar'=>$this->load->view('partial/navbar','',true),
                'sidebar'=>$this->load->view('partial/sidebar','',true),
                'footer'=>$this->load->view('partial/footer','',true),
            ];
            $this->load->view('pages-registercompany',$data);
        }

        public function logincompany()
	    {
		$data=[
			'header'=>$this->load->view('partial/header','',true),
			'navbar'=>$this->load->view('partial/navbar','',true),
			'sidebar'=>$this->load->view('partial/sidebar','',true),
			'footer'=>$this->load->view('partial/footer','',true),
		];
		$this->load->view('pages-login-company',$data);
	    }

        function simpandaftarcompany()
        {
            $this->load->model('mdaftar');
            $this->mdaftar->simpandaftarcompany();
        }

        function proseslogincompany()
		{
			$this->load->model('mlogincompany');
			$this->mlogincompany->proseslogincompany();
		}

        function logout()
		{
			$this->session->sess_destroy();
			redirect('','refresh');	
		}
    }
?>