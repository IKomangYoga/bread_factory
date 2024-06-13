<?php
	class Cjurusan extends CI_Controller
	{
		public function __construct()
		{
			parent::__construct();
			$this->load->model('mvalidasi');
			$this->mvalidasi->validasi();
			$this->load->model('mjurusan');
		}
		
		function tampil()
		{
			$tampildata['hasil']=$this->mjurusan->tampildata();
			$data['konten']=$this->load->view('jurusan','',TRUE);
			$data['table']=$this->load->view('jurusan_table',$tampildata,TRUE);
			$this->load->view('halamanadmin',$data);
		}
		
		function simpanjurusan()
        {
            $this->mjurusan->simpanjurusan();
        }

		function hapusdata($KodeJurusan)
		{
			$this->mjurusan->hapusdata($KodeJurusan);	
		}
	}
?>