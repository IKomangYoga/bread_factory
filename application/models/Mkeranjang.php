<?php

Class Mkeranjang extends CI_Model{
    private $table = 'keranjang';

    function simpankeranjang($data)
    {
        $this->db->insert('keranjang', $data);
    }

    
    public function getKeranjang($id_Pegawai_Outlet){
        $this->db->select("*");
        $this->db->from($this->table);
        $this->db->join('roti','roti.id_roti = keranjang.id_roti');
        $this->db->where('id_Pegawai_Outlet', $id_Pegawai_Outlet);
        $query = $this->db->get();
        $result = $query->result_array();
        
        foreach ($result as &$row) {
            $row['total_harga'] = $row['jumlah'] * $row['harga'];
        }
        
        return $result;
    }
    
    public function updatekeranjang($data) {
        
        $this->db->where('id_keranjang', $data['id_keranjang']);
        $this->db->update('keranjang', $data);
        
    }

    public function hapuskeranjang($id_keranjang)
    {
        $this->db->where('id_keranjang', $id_keranjang);
        $this->db->delete('keranjang');
    }
    

}