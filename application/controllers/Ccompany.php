<?php
class Ccompany extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mvalidasicompany');
        $this->load->model('mpesanan');
        $this->Mvalidasicompany->validasi();
        $this->load->model('Mcompany');
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->library('session'); // Load session library
        $this->load->model('mpesanan'); // Pastikan model ini sudah ada
        $this->mcompany = $this->load->model('Mcompany'); // Contoh pemuatan model
        $this->mcompany = new mcompany(); // Pastikan baris ini menginisialisasi model dengan benar
    }
    public function profile()
		{
			$data1=[
				'dataperusahaan'=>$this->Mcompany->getperusahaan($this->session->userdata('id_Pegawai_Pabrik')),

			];
			$data=[
				'header'=>$this->load->view('partial/header','',true),
				'navbar'=>$this->load->view('partial/navbar',$data1,true),
				'sidebar'=>$this->load->view('partial/sidebar','',true),
				'footer'=>$this->load->view('partial/footer','',true),
                'sidebarprofile'=>$this->load->view('partial/sidebarprofile','',true),
				'dataperusahaan'=>$this->Mcompany->getperusahaan($this->session->userdata('id_Pegawai_Pabrik')),
			];
			$this->load->view('Perusahaan/users-profile',$data);
		}


    public function pesanan_perusahaan()
    {
        $session_data = $this->session->userdata();
        $user_id = isset($session_data['user_id']) ? $session_data['user_id'] : null;
        
        $data['pesanan'] = $this->mpesanan->get_all_orders();
        $data['header'] = $this->load->view('partial/header', '', true);
        $data['navbarcompany'] = $this->load->view('partial-company/navbarcompany', '', true);
        $data['sidebarcompany'] = $this->load->view('partial-company/sidebarcompany', '', true);
        //$data['footer'] = $this->load->view('partial/footer', '', true);
        $this->load->view('Perusahaan/pesanan_perusahaan', $data);
    }

    public function update_status($order_id, $new_status) {
        // Memulai transaksi
        $this->db->trans_start();
        
        // Update status di tabel orders
        $this->db->where('id', $order_id);
        $this->db->update('orders', ['order_status' => $new_status]);
        
        // Memasukkan perubahan status ke tabel order_history
        $data = [
            'order_id' => $order_id,
            'status' => $new_status,
            'changed_at' => date('Y-m-d H:i:s')
        ];
        $this->db->insert('order_history', $data);
        
        // Menyelesaikan transaksi
        $this->db->trans_complete();
        
        // Mengecek apakah transaksi berhasil
        if ($this->db->trans_status() === FALSE) {
            // Jika gagal, rollback perubahan
            log_message('error', 'Gagal memperbarui status pesanan untuk order_id: ' . $order_id);
            return false;
        } else {
            // Jika berhasil, commit perubahan
            log_message('debug', 'Status pesanan berhasil diperbarui untuk order_id: ' . $order_id);
            return true;
        }
    }
    

    public function update_profile()
    {
            $Nama_pegawai_pabrik = $this->input->post('Nama');
			$Alamat_pegawai_pabrik = $this->input->post('Alamat');
			$jabatan_pegawai_pabrik = $this->input->post('Jabatan');
			$Divisi_pegawai_pabrik = $this->input->post('Divisi');
            $No_hp_pegawai_pabrik = $this->input->post('Telp');
		  
		
			$this->db->where('id_Pegawai_Pabrik', $this->session->userdata('id_Pegawai_Pabrik'));
			$this->db->update('pegawai_pabrik', array(
			  'Nama_pegawai_pabrik' => $Nama_pegawai_pabrik,
			  'Alamat_pegawai_pabrik' => $Alamat_pegawai_pabrik,
			  'jabatan_pegawai_pabrik' => $jabatan_pegawai_pabrik,
			  'Divisi_pegawai_pabrik' => $Divisi_pegawai_pabrik,
              'No_hp_pegawai_pabrik' => $No_hp_pegawai_pabrik
			));
		  
			
			redirect('Ccompany/profile');
    }
    public function editdata() {
        $this->mcompany->simpanperusahaan();
    }

    public function some_method() {
        $this->mcompany->tambah_roti(); // Pastikan $mcompany tidak null sebelum memanggil metode
    }

    public function tambah_roti() {
        $this->form_validation->set_rules('jenis_roti', 'Jenis Roti', 'required');
        $this->form_validation->set_rules('harga', 'Harga', 'required|integer');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('Perusahaan/tambah_produk');
        } else {
            $data = [
                'jenis_roti' => $this->input->post('jenis_roti'),
                'harga' => $this->input->post('harga'),
            ];

            $this->mcompany->tambah_roti($data);
            redirect('Ccompany/dashboard');
        }
    }

    public function simpanfotocompany() {
        $this->mcompany->simpanfoto();
    }

    public function simpandatastatus() {
        $this->mcompany->simpandatastatus();
    }

    public function dashboard() {      
        $data = [
            'header' => $this->load->view('partial/header', '', true),
            'navbarcompany' => $this->load->view('partial-company/navbarcompany', '', true),
            'sidebarcompany' => $this->load->view('partial-company/sidebarcompany', '', true),
            'dataperusahaan' => $this->Mcompany->getperusahaan($this->session->userdata('id_Pegawai_Pabrik')),
        ];
        $this->load->view('Perusahaan/dashboard-company', $data);
    }



    public function status() {
        $data = [
            'header' => $this->load->view('partial/header', '', true),
            'navbarcompany' => $this->load->view('partial-company/navbarcompany', '', true),
            'sidebarstatuscompany' => $this->load->view('partial-company/sidebar-status', '', true),
            'footer' => $this->load->view('partial/footer', '', true),
            'dataperusahaan' => $this->mcompany->getperusahaan($this->session->userdata('id_Pegawai_Pabrik')),
        ];
        $tampildata['hasil'] = $this->mcompany->tampildatastatus();
        $data['table'] = $this->load->view('Perusahaan/status_table', $tampildata, TRUE);
        $this->load->view('pages-statuscompany', $data);
    }

    public function inbox() {
        $data = [
            'header' => $this->load->view('partial/header', '', true),
            'navbarcompany' => $this->load->view('partial-company/navbarcompany', '', true),
            'sidebarinbox' => $this->load->view('partial-company/sidebar-inbox', '', true),
            'footer' => $this->load->view('partial/footer', '', true),
        ];
        $tampildata['hasil'] = $this->mcompany->tampildata();
        $data['table'] = $this->load->view('Perusahaan/inbox-table', $tampildata, TRUE);
        $this->load->view('Perusahaan/inbox-company', $data);
    }

    public function calonmhs() {
        $data = [
            'header' => $this->load->view('partial/header', '', true),
            'navbarcompany' => $this->load->view('partial-company/navbarcompany', '', true),
            'sidebarinbox' => $this->load->view('partial-company/sidebar-inbox', '', true),
            'footer' => $this->load->view('partial/footer', '', true),
        ];
        $this->load->view('Perusahaan/pages-calonpkl', $data);
    }

    // Fungsi untuk menghapus pesanan berdasarkan ID
    public function hapus_pesanan($id = null) {
        log_message('debug', 'ID yang diterima: ' . $id);
        if ($id === null) {
            show_404();
            return;
        }
    
        // Lakukan penghapusan pesanan
        $deleted = $this->mpesanan->hapus_pesanan($id);
    
        if ($deleted) {
            // Set pesan sukses
            $this->session->set_flashdata('success', 'Pesanan berhasil dihapus.');
        } else {
            // Set pesan error
            $this->session->set_flashdata('error', 'Terjadi kesalahan saat menghapus pesanan.');
        }
    
        // Redirect ke halaman perusahaan/pesanan_perusahaan
        redirect('Ccompany/pesanan_perusahaan');
    }
    
    
    
}
