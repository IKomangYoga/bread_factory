<?php
class OrderModel extends CI_Model {
    public function get_all_orders() {
        $this->db->select('pesanan.id_order, pegawai_outlet.Nama_pegawai_outlet as nama_pemesan, outlet.nama_outlet as outlet, pesanan.status_pesanan');
        $this->db->from('pesanan');
        $this->db->join('pegawai_outlet', 'pesanan.id_Pegawai_Outlet = pegawai_outlet.id_Pegawai_Outlet');
        $this->db->join('outlet', 'pesanan.id_outlet = outlet.id_outlet');
        $query = $this->db->get();
        return $query->result();
    }

    public function update_status($id_order, $status) {
        $this->db->where('id_order', $id_order);
        $this->db->update('pesanan', array('status_pesanan' => $status));
    }
}
?>
