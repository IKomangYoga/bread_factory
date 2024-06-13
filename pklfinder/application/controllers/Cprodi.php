<?php
	class Cprodi extends CI_Controller
	{
		public function __construct()
		{
			parent::__construct();
			$this->load->model('mvalidasi');
			$this->mvalidasi->validasi();
			$this->load->model('mprodi');
		}
		
		function tampil()
		{
			$tampildata['hasil']=$this->mprodi->tampildata();
			$data['konten']=$this->load->view('prodi','',TRUE);
			$data['table']=$this->load->view('prodi_table',$tampildata,TRUE);
			$this->load->view('halamanadmin',$data);
		}
		
		function simpanprodi()
        {
            $this->mprodi->simpanprodi();
        }

		function hapusdata($KodeProdi)
		{
			$this->mprodi->hapusdata($KodeProdi);	
		}
	}
?>