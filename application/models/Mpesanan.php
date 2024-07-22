<?php
Class Mpesanan extends CI_Model{

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
    return $query->result_array(); // or result() if you prefer objects
}


    public function insert_memesan($data) 

    {

        $this->db->insert_batch('memesan', $data);

    }

}
?>