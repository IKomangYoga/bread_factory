<?php
class Mpesanan extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    // Fungsi untuk mengambil data keranjang berdasarkan ID Pegawai Outlet
    public function get_keranjang_data($id_Pegawai_Outlet)
    {
        return $this->db->select('id_Pegawai_Outlet, id_roti, jumlah')
                        ->where('id_Pegawai_Outlet', $id_Pegawai_Outlet)
                        ->get('keranjang')
                        ->result_array();
    }

    // Fungsi untuk memasukkan data ke tabel memesan
    public function insert_memesan($data)
    {
        $this->db->insert_batch('memesan', $data);
    }

    // Fungsi untuk mendapatkan pesanan berdasarkan ID
    public function get_order_by_id($id_order)
    {
        return $this->db->select('pesanan.*, pegawai_outlet.Nama_pegawai_outlet')
                        ->from('pesanan')
                        ->join('pegawai_outlet', 'pesanan.id_pegawai_outlet = pegawai_outlet.id_Pegawai_Outlet')
                        ->where('id_order', $id_order)
                        ->get()
                        ->row();
    }

    // Fungsi untuk memasukkan data pembayaran
    public function insert_pembayaran($data)
    {   
        $this->db->insert('mekanisme_pembayaran', $data);  
    }

    // Fungsi untuk mengambil semua pesanan dari tabel 'memesan'
    public function get_all_orders()
    {
    $query = $this->db->get('memesan');
    return $query->result(); // Menggunakan result() untuk mendapatkan objek
    }

    // Fungsi untuk mengambil pesanan berdasarkan ID outlet
    //public function getOrderById($id_outlet)
  //  {
    //    $this->db->where('id_outlet', $id_outlet);
   //     return $this->db->get('memesan')->row_array();
   // }

    // Fungsi untuk memperbarui status pesanan
    public function update_order_status($order_id, $new_status) {
        $this->db->set('status_pesanan', $new_status);
        $this->db->where('id_outlet', $order_id);
        return $this->db->update('memesan');
    }

    // Fungsi untuk menghapus pesanan berdasarkan ID
    public function hapus_pesanan($id) {
        // Pastikan ID adalah angka
        if (is_numeric($id)) {
            // Hapus pesanan dari database
            $this->db->where('id_outlet', $id);
            return $this->db->delete('memesan');
        }
        return false;
    }
}
