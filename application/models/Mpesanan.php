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


    public function insert_memesan($data) 

    {

        $this->db->insert_batch('memesan', $data);

    }

}
?>