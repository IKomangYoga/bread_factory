<?php
Class Mkeranjang extends CI_Model{

    function simpanpesanan(){
        $this->db->insert('memesan', $data);
    }
}
?>