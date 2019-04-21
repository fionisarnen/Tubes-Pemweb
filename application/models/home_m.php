<?php

class Home_m extends CI_Model
{
    public function get_namapengirim(){
        $this->db->select_max('id_pengirim');
        $this->db->select('nama_pengirim');
        $query=$this->db->get('pengirim');
        return $query->row()->nama_pengirim;
    }

    public function get_namapenerima(){
        $this->db->select_max('id_penerima');
        $this->db->select('nama_penerima');
        $query=$this->db->get('penerima');
        return $query->row()->nama_penerima;
    }
    
    public function get_barang(){
        $this->db->select_max('id_barang');
        $this->db->select('jenis_barang, number, berat_barang');
        $query=$this->db->get('barang');
        return $query->result_array();
    }
}

?>