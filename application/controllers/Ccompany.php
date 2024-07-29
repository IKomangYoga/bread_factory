<?php
class Ccompany extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('mvalidasicompany');
        $this->load->model('mpesanan');
        $this->mvalidasicompany->validasi();
        $this->load->model('mcompany');
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->library('session'); // Load session library
    }


    public function pesanan_perusahaan()
    {
        $session_data = $this->session->userdata();
        $user_id = isset($session_data['user_id']) ? $session_data['user_id'] : null;
        
        $data['pesanan'] = $this->mpesanan->get_all_orders();
        $data['header'] = $this->load->view('partial/header', '', true);
        $data['navbarcompany'] = $this->load->view('partial-company/navbarcompany', '', true);
        $data['sidebarcompany'] = $this->load->view('partial-company/sidebarcompany', '', true);
        $data['footer'] = $this->load->view('partial/footer', '', true);
        $this->load->view('Perusahaan/pesanan_perusahaan', $data);
    }

    public function editdata() {
        $this->mcompany->simpanperusahaan();
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
            'footer' => $this->load->view('partial/footer', '', true),
            'dataperusahaan' => $this->mcompany->getperusahaan($this->session->userdata('id_Pegawai_Pabrik')),
        ];
        $this->load->view('Perusahaan/dashboard-company', $data);
    }

    

    public function update_status() {
        $id_order = $this->input->post('id_memesan');
        $status_pesanan = $this->input->post('status');

        // Memperbarui status pesanan melalui model Mpesanan
        $this->mpesanan->update_order_status($id_order, $status_pesanan);

        // Redirect ke halaman pesanan_perusahaan setelah pembaruan status
        redirect('Ccompany/pesanan_perusahaan');
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
}
