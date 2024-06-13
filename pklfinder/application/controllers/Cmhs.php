<?php
    class Cmhs extends CI_Controller
    {
        public function __construct()
		{
			parent::__construct();;
			$this->load->model('mmhs');
			$this->load->model('mcompany');
			$this->load->model('mdaftar');
			$this->load->config('email');
			$this->load->helper(array('form', 'url'));
		}

		function editdata()
		{
			$this->mmhs->simpanmhs();	
		}

		function editpassword()
		{
			$this->mmhs->proseseditpassword();	
		}

		function simpanfotoprofile()
        {
            $this->load->model('mmhs');
            $this->mmhs->simpanfoto();
        }

		function simpandatastatus(){
			$this->load->model('mmhs');
			$this->mmhs->simpandatastatus();
		}

		function hapusfoto()
		{
			$this->load->model('mmhs');
            $this->mmhs->hapusfoto();
		}

        function dashboard()
		{
			$data1=[
				'datamhs'=>$this->mmhs->getmahasiswa($this->session->userdata('id_mhs')),
			];

			$data=[
				'header'=>$this->load->view('partial/header','',true),
				'navbar'=>$this->load->view('partial/navbar',$data1,true),
				'sidebar'=>$this->load->view('partial/sidebar','',true),
				'footer'=>$this->load->view('partial/footer','',true),
				'datamhs'=>$this->mmhs->getmahasiswa($this->session->userdata('id_mhs')),
					];
			$tampildata['hasil']=$this->mmhs->tampildata();
			$data['table']=$this->load->view('Mahasiswa/dashboard_table',$tampildata,TRUE);
			$this->load->view('Mahasiswa/index',$data);
		}

		function status()
		{
			$data1=[
				'datamhs'=>$this->mmhs->getmahasiswa($this->session->userdata('id_mhs')),
			];

			$data=[
				'header'=>$this->load->view('partial/header','',true),
				'navbar'=>$this->load->view('partial/navbar',$data1,true),
				'sidebarstatus'=>$this->load->view('partial/sidebarstatus','',true),
				'footer'=>$this->load->view('partial/footer','',true),
				'datamhs'=>$this->mmhs->getmahasiswa($this->session->userdata('id_mhs')),
					];
			$tampildata['hasil']=$this->mmhs->tampildatastatus();
			$data['table']=$this->load->view('Mahasiswa/status_table',$tampildata,TRUE);
			$this->load->view('pages-status',$data);
		}

		function perusahaan(){
			$data1=[
				'datamhs'=>$this->mmhs->getmahasiswa($this->session->userdata('id_mhs')),

			];

			$data=[
				'header'=>$this->load->view('partial/header','',true),
				'navbar'=>$this->load->view('partial/navbar',$data1,true),
				'sidebar'=>$this->load->view('partial/sidebar','',true),
				'footer'=>$this->load->view('partial/footer','',true),
				'dataperusahaan'=>$this->mmhs->getperusahaan($this->session->userdata('id_mhs')),
					];
			$tampildata['hasil']=$this->mmhs->tampildata();
			$data['table']=$this->load->view('Mahasiswa/company_table',$tampildata,TRUE);
			$this->load->view('Mahasiswa/pages-perusahaan',$data);	
		}

		public function profile()
		{
			$data1=[
				'datamhs'=>$this->mmhs->getmahasiswa($this->session->userdata('id_mhs')),

			];
			$data=[
				'header'=>$this->load->view('partial/header','',true),
				'navbar'=>$this->load->view('partial/navbar',$data1,true),
				'sidebar'=>$this->load->view('partial/sidebar','',true),
				'footer'=>$this->load->view('partial/footer','',true),
				'sidebarprofile'=>$this->load->view('partial/sidebarprofile','',true),
				'datamhs'=>$this->mmhs->getmahasiswa($this->session->userdata('id_mhs')),
			];
			$this->load->view('Mahasiswa/users-profile',$data);
		}
		
		public function history()
		{
			$data1=[
				'datamhs'=>$this->mmhs->getmahasiswa($this->session->userdata('id_mhs')),
			];

			$data=[
			'header'=>$this->load->view('partial/header','',true),
			'navbar'=>$this->load->view('partial/navbar',$data1,true),
			'sidebarhistory'=>$this->load->view('partial/sidebarhistory','',true),
			'footer'=>$this->load->view('partial/footer','',true),
			'datamhs'=>$this->mmhs->getmahasiswa($this->session->userdata('id_mhs')),
			];
			$this->load->view('Mahasiswa/pages-history',$data);
		}

	public function messages()
	{
		$data1=[
			'datamhs'=>$this->mmhs->getmahasiswa($this->session->userdata('id_mhs')),
			
		];
		$data=[
			'header'=>$this->load->view('partial/header','',true),
			'navbar'=>$this->load->view('partial/navbar',$data1,true),
			'sidebarmessages'=>$this->load->view('partial/sidebarmessages','',true),
			'footer'=>$this->load->view('partial/footer','',true),
			'datamhs'=>$this->mmhs->getmahasiswa($this->session->userdata('id_mhs')),
		];
		$this->load->view('Mahasiswa/pages-messages',$data);
	}

	public function cv()
	{
		$data1=[
			'datamhs'=>$this->mmhs->getmahasiswa($this->session->userdata('id_mhs')),
			
		];
		$data=[
			'header'=>$this->load->view('partial/header','',true),
			'navbar'=>$this->load->view('partial/navbar',$data1,true),
			'sidebarcv'=>$this->load->view('partial/sidebarcv','',true),
			'footer'=>$this->load->view('partial/footer','',true),
			'datamhs'=>$this->mmhs->getmahasiswa($this->session->userdata('id_mhs')),
		];
		$this->load->view('Mahasiswa/pages-cv',$data);
	}
	
	public function kirim_cv(){
		$perusahaan = $this->mcompany->getPerusahaan($_GET['id']);
		$email = $perusahaan->Email;
		if ($this->mdaftar->send_mail($email, "Mahasiswa Telah Melamar di Perusahaan Anda", '<a href="'.base_url('assets/foto/').$this->session->userdata('Cv').'">CV Mahasiswa</a>'))
				{
					echo "<script>alert('Email Berhasil Dikirim');</script>";
					redirect('cmhs/perusahaan?id='.$_GET['id'],'refresh');
				}
		else
				{
					echo "<script>alert('Email Gagal Dikirim');</script>";
					redirect('cmhs/perusahaan?id='.$_GET['id'],'refresh');
				}
	
	}
	

        function prosesloginmhs()
		{
			$this->load->model('mloginmhs');
			$this->mloginmhs->prosesloginmhs();
		}
    }
?>