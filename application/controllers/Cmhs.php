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
				'datamhs'=>$this->mmhs->getmahasiswa($this->session->userdata('id_Pegawai_Outlet ')),
			];

			$data=[
				'header'=>$this->load->view('partial/header','',true),
				'navbar'=>$this->load->view('partial/navbar',$data1,true),
				'sidebar'=>$this->load->view('partial/sidebar','',true),
				'footer'=>$this->load->view('partial/footer','',true),
				'datamhs'=>$this->mmhs->getmahasiswa($this->session->userdata('id_Pegawai_Outlet ')),
					];
			$tampildata['hasil']=$this->mmhs->tampildata();
			$data['table']=$this->load->view('Mahasiswa/dashboard_table',$tampildata,TRUE);
			$this->load->view('Mahasiswa/index',$data);
		}

		function status()
		{
			$data1=[
				'datamhs'=>$this->mmhs->getmahasiswa($this->session->userdata('id_Pegawai_Outlet')),
			];

			$data=[
				'header'=>$this->load->view('partial/header','',true),
				'navbar'=>$this->load->view('partial/navbar',$data1,true),
				'sidebarstatus'=>$this->load->view('partial/sidebarstatus','',true),
				'footer'=>$this->load->view('partial/footer','',true),
				'datamhs'=>$this->mmhs->getmahasiswa($this->session->userdata('id_Pegawai_Outlet')),
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
				'datamhs'=>$this->mmhs->getmahasiswa($this->session->userdata('id_Pegawai_Outlet')),

			];
			$data=[
				'header'=>$this->load->view('partial/header','',true),
				'navbar'=>$this->load->view('partial/navbar',$data1,true),
				'sidebar'=>$this->load->view('partial/sidebar','',true),
				'footer'=>$this->load->view('partial/footer','',true),
				'sidebarprofile'=>$this->load->view('partial/sidebarprofile','',true),
				'datamhs'=>$this->mmhs->getmahasiswa($this->session->userdata('id_Pegawai_Outlet')),
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
		
		// tambah data Keranjang
		public function inputKeranjang(){
			$data = $_POST;
			$this->load->model('Mkeranjang');
			$data['id_Pegawai_Outlet'] = $this->session->userdata('id_Pegawai_Outlet');
			$result = $this->db->get_where('keranjang',['id_Pegawai_Outlet'=>$data['id_Pegawai_Outlet'],'id_roti'=>$data['id_roti']]);
			if($result->num_rows() > 0){
				
				$query=$result->row_array();
				$data['jumlah']=$query['jumlah']+1;
				$data['id_keranjang']=$query['id_keranjang'];
				$this->Mkeranjang->updatekeranjang($data);
			}
			else{
				$this->Mkeranjang->simpankeranjang($data);
			}
			
			redirect('Cmhs/keranjang');
		}
		
		// Tampil Keranjang
		public function keranjang()
		{
			$this->load->model('mkeranjang');
			$data['keranjang'] = $this->mkeranjang->getKeranjang($this->session->userdata('id_Pegawai_Outlet'));
			$this->load->view('mahasiswa/keranjang_belanja', $data);
		}
		// Manggil roti yang ada di model
		public function product()
		{
			$get_products['hasil']=$this->mmhs->get_products();
			$this->load->view('Mahasiswa/product', $get_products);
		}
		
			
		// Pergi ke Halaman Pesanan Outlet
		public function pesanan()
		{
			$this->load->model('Mmhs');
			$id_Pegawai_Outlet = $this->session->userdata('id_Pegawai_Outlet');
			$data['memesan'] = $this->Mmhs->get_pesanan($id_Pegawai_Outlet);
			$this->load->view('Mahasiswa/pesanan', $data);
		}
		public function masuk_checkout()
		{	
			$this->load->model('Mpesanan');
			$data['memesan'] = $this->Mpesanan->get_memesan($this->session->userdata('id_Pegawai_Outlet'));
			$this->load->view('Mahasiswa/checkout', $data);

		}

		public function insertpesanan() {
			$this->load->model('Mpesanan');
			$id_Pegawai_Outlet = $this->session->userdata('id_Pegawai_Outlet');	
		
			$tanggal_pembayaran = date('Y-m-d');
			$tanggal_pesan = date('Y-m-d');
			$id_mekanisme = 2; // replace with actual value
			
		
			$keranjang_data = $this->Mpesanan->get_keranjang_data($id_Pegawai_Outlet);
		
			$data_to_insert = array();
			foreach ($keranjang_data as $row) {
				
				$data_to_insert[] = array(
					'tanggal_pembayaran' => $tanggal_pembayaran,
					'jumlah_pesanan' => $row['jumlah'],
					'tanggal_pesan' => $tanggal_pesan,
					'id_Pegawai_Outlet' => $id_Pegawai_Outlet,
					'id_mekanisme' => $id_mekanisme
				);
			}
		
			$this->Mpesanan->insert_memesan($data_to_insert);
		
			// redirect or display success message
			redirect('Cmhs/masuk_checkout');
		}
		

		public function delete_keranjang($id_keranjang)
		{
			$this->load->model('Mkeranjang');
			$this->Mkeranjang->hapuskeranjang($id_keranjang);
			redirect('Cmhs/keranjang');
		}
		
    }

	?>
