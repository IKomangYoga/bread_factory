<?php
class Ccompany extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('mvalidasicompany');
        $this->load->model('mpesanan');
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

    function simpandatastatus()
    {
        $this->load->model('mcompany');
        $this->mcompany->simpandatastatus();
    }

    function dashboard()
    {
        $data = [
            'header' => $this->load->view('partial/header', '', true),
            'navbarcompany' => $this->load->view('partial-company/navbarcompany', '', true),
            'sidebarcompany' => $this->load->view('partial-company/sidebarcompany', '', true),
            'footer' => $this->load->view('partial/footer', '', true),
            'dataperusahaan' => $this->mcompany->getperusahaan($this->session->userdata('id_Pegawai_Pabrik ')),
        ];
        $this->load->view('Perusahaan/dashboard-company', $data);
    }

    public function pesanan_perusahaan()
    {
        // Mengambil data pesanan menggunakan metode get_all_orders dari model
        $data['pesanan'] = $this->mpesanan->get_all_orders();

        // Menggabungkan view partial
        $data['header'] = $this->load->view('partial/header', '', true);
        $data['navbarcompany'] = $this->load->view('partial-company/navbarcompany', '', true);
        $data['sidebarcompany'] = $this->load->view('partial-company/sidebarcompany', '', true);
        $data['footer'] = $this->load->view('partial/footer', '', true);

        // Memuat view dengan data pesanan
        $this->load->view('Perusahaan/pesanan', $data);
    }

    // nanti coba buat update status
    public function update_status()
    {
        $id_order = $this->input->post('id_order');
        $status_pesanan = $this->input->post('status');
        $this->mpesanan->update_order_status($id_order, $status_pesanan);

        // Menggunakan refresh untuk memastikan halaman diperbarui dengan benar
        header("Refresh:0; url=" . base_url('Ccompany/pesanan_perusahaan'));
    }

    function status()
    {

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


    function inbox()
    {
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

    function calonmhs()
    {
        $data = [
            'header' => $this->load->view('partial/header', '', true),
            'navbarcompany' => $this->load->view('partial-company/navbarcompany', '', true),
            'sidebarinbox' => $this->load->view('partial-company/sidebar-inbox', '', true),
            'footer' => $this->load->view('partial/footer', '', true),
        ];
        $this->load->view('Perusahaan/pages-calonpkl', $data);
    }
}
