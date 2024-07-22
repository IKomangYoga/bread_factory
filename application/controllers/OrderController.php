<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class OrderController extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('OrderModel');
    }

    public function index() {
        $data['pesanan'] = $this->OrderModel->get_all_orders();
        $this->load->view('Perusahaan/pesanan', $data);
    }

    public function update_status() {
        $id_order = $this->input->post('id_order');
        $status = $this->input->post('status');
        $this->OrderModel->update_status($id_order, $status);
        redirect('OrderController');
    }
}
?>
