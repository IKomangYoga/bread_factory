<?php
class Mpesanan extends CI_Model
{

    public function get_keranjang_data($id_Pegawai_Outlet)

    {

        $query = $this->db->select('id_Pegawai_Outlet, id_roti, jumlah')

            ->where('id_Pegawai_Outlet', $id_Pegawai_Outlet)

            ->get('keranjang')

            ->result_array();

        return $query;
    }
    public function get_memesan($id_Pegawai_Outlet)
    {
        $this->db->select("*");
        $this->db->from('memesan');
        $this->db->where('id_Pegawai_Outlet', $id_Pegawai_Outlet);
        $query = $this->db->get();
        return $query->result_array(); 
    }


    public function insert_memesan($data)

    {
        $this->db->insert_batch('memesan', $data);
    }

    public function get_all_orders()
    {
        $this->db->select('memesan.*, pegawai_outlet.Nama_pegawai_outlet');
        $this->db->from('memesan');
        $this->db->join('pegawai_outlet', 'memesan.id_pegawai_outlet = pegawai_outlet.id_Pegawai_Outlet');
        $query = $this->db->get();
        return $query->result();
    }

    public function update_order_status($id_order, $status_pesanan)
    {
        //$this->db->update('memesan');
        $this->db->set('status_pesanan', $status_pesanan);
        $this->db->where('id_memesan', $id_order);
        return $this->db->update('memesan');
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
