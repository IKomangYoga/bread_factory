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

    function pesanan_perusahaan()
    {
        $data = [
            'header' => $this->load->view('partial/header', '', true),
            'navbarcompany' => $this->load->view('partial-company/navbarcompany', '', true),
            'sidebarcompany' => $this->load->view('partial-company/sidebarcompany', '', true),
            'footer' => $this->load->view('partial/footer', '', true),
            'dataperusahaan' => $this->mcompany->getperusahaan($this->session->userdata('Id_Perusahaan')),
        ];
        $this->load->view('Perusahaan/pesanan');
    }
}
