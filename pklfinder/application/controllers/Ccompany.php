<?php
    class Ccompany extends CI_Controller
    {

        public function __construct()
	    {
			parent::__construct();
			$this->load->model('mvalidasicompany');
			$this->mvalidasicompany->validasi();
            $this->load->model('mcompany');
            $this->load->helper(array('form', 'url'));
	    }

        function editdata()
		{
			$this->mcompany->simpanperusahaan();	
		}

        function simpanfotocompany()
        {
            $this->load->model('mcompany');
            $this->mcompany->simpanfoto();
        }

        function simpandatastatus(){
			$this->load->model('mcompany');
			$this->mcompany->simpandatastatus();
		}

        function dashboard()
        {
            $data=[
                'header'=>$this->load->view('partial/header','',true),
                'navbarcompany'=>$this->load->view('partial-company/navbarcompany','',true),
                'sidebarcompany'=>$this->load->view('partial-company/sidebarcompany','',true),
                'footer'=>$this->load->view('partial/footer','',true),
                'dataperusahaan'=>$this->mcompany->getperusahaan($this->session->userdata('Id_Perusahaan')),
            ];
            $this->load->view('Perusahaan/dashboard-company',$data);
        }

        function status()
		{

			$data=[
				'header'=>$this->load->view('partial/header','',true),
				'navbarcompany'=>$this->load->view('partial-company/navbarcompany','',true),
				'sidebarstatuscompany'=>$this->load->view('partial-company/sidebar-status','',true),
				'footer'=>$this->load->view('partial/footer','',true),
				'dataperusahaan'=>$this->mcompany->getperusahaan($this->session->userdata('Id_Perusahaan')),
					];
			$tampildata['hasil']=$this->mcompany->tampildatastatus();
			$data['table']=$this->load->view('Perusahaan/status_table',$tampildata,TRUE);
			$this->load->view('pages-statuscompany',$data);
		}
        

        function inbox()
        {
            $data=[
                'header'=>$this->load->view('partial/header','',true),
                'navbarcompany'=>$this->load->view('partial-company/navbarcompany','',true),
                'sidebarinbox'=>$this->load->view('partial-company/sidebar-inbox','',true),
                'footer'=>$this->load->view('partial/footer','',true),
            ];
            $tampildata['hasil']=$this->mcompany->tampildata();
			$data['table']=$this->load->view('Perusahaan/inbox-table',$tampildata,TRUE);
            $this->load->view('Perusahaan/inbox-company',$data);
        }

        function calonmhs()
        {
            $data=[
                'header'=>$this->load->view('partial/header','',true),
                'navbarcompany'=>$this->load->view('partial-company/navbarcompany','',true),
                'sidebarinbox'=>$this->load->view('partial-company/sidebar-inbox','',true),
                'footer'=>$this->load->view('partial/footer','',true),
            ];
            $this->load->view('Perusahaan/pages-calonpkl',$data);
        }
    }
?>