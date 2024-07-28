<?php
class Mpesanan extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get_keranjang_data($id_Pegawai_Outlet)
    {
        $query = $this->db->select('id_Pegawai_Outlet, id_roti, jumlah')
            ->where('id_Pegawai_Outlet', $id_Pegawai_Outlet)
            ->get('keranjang')
            ->result_array();
        return $query;
    }

    // Metode untuk memperbarui status pesanan
    public function update_order_status($id_order, $status_pesanan)
    {
        $this->db->where('id_memesan', $id_order);
        $this->db->update('memesan', array('status' => $status_pesanan));
    }

    public function get_all_orders()
    {
        $query = $this->db->get('memesan');
        return $query->result();
    }

    public function get_memesan($id_Pegawai_Outlet)
    {
        $this->db->select("*");
        $this->db->from('memesan');
        $this->db->where('id_Pegawai_Outlet', $id_Pegawai_Outlet);
        $query = $this->db->get();
        return $query->result_array(); 
    }

    public function update_status($order_id, $new_status) 
    {
        // Update status di tabel orders
        $this->db->where('id', $order_id);
        $this->db->update('orders', ['order_status' => $new_status]);
        
        // Masukkan perubahan status ke tabel order_history
        $data = [
            'order_id' => $order_id,
            'status' => $new_status,
            'changed_at' => date('Y-m-d H:i:s')
        ];
        $this->db->insert('order_history', $data);
    }

    public function insert_memesan($data)
    {
        $this->db->insert_batch('memesan', $data);
    }

    public function get_order_by_id($id_order)
    {
        $this->db->select('pesanan.*, pegawai_outlet.Nama_pegawai_outlet');
        $this->db->from('pesanan');
        $this->db->join('pegawai_outlet', 'pesanan.id_pegawai_outlet = pegawai_outlet.id_Pegawai_Outlet');
        $this->db->where('id_order', $id_order);
        $query = $this->db->get();
        return $query->row();
    }

    public function insert_pembayaran($data)
    {   
        $this->db->insert('mekanisme_pembayaran', $data);  
    }
}
