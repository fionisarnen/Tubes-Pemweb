<?php

class Home_m extends CI_Model
{

    private $karir = 'karir';
    public $id;
    
    public function get_namapengirim(){
        $data = $this->db->get('pengirim');
        return $data->result_array();
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

    public function getAllKarir(){
        $data = $this->db->get('karir');
        return $data->result_array();
    }

    public function getKarirById($id){
        $this->db->get_where('karir', ['id' => $id])->row_array();
    }

    public function hapus_data($id)
	{
		//use query builder to delete data based on id 
        $this->db->where('id', $id);
        $this->db->delete('karir');
	}
	
    public function ubahKarir($where,$table){
		return $this->db->get_where($table,$where);
    }	

    public function getOrder(){
        $this->db->select('nama_penerima, nama_pengirim, jenis_barang, berat_barang, number');
        $this->db->from('pengirim');
        $this->db->join('barang', 'barang.id_barang=pengirim.id_barang');
        $this->db->join('penerima', 'penerima.id_barang=barang.id_barang');
        $query = $this->db->get();
        return $query->result();
    }
	
	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}	
}

?>