<?php

class Deliverynow_m extends CI_Model
{
	
	public function insert_pengirim(){
        $nama = $this->input->post('pengirim');
        $phone = $this->input->post('phone');
        $city = $this->input->post('kota');
        $address = $this->input->post('alamat');
        $id_barang = $this->db->select_max('id_barang')->from('barang')->get()->row()->id_barang;
        $data = array(
            'nama_pengirim' => $nama,
            'no_telepon' => $phone,
            'kota' => $city,
            'alamat' => $address,
            'id_barang' => $id_barang
        );
        return $this->db->insert('pengirim', $data);
    }

    public function insert_penerima(){
        $nama = $this->input->post('penerima');
        $phone = $this->input->post('telephone');
        $city = $this->input->post('city');
        $address = $this->input->post('addrs');
        $id_barang = $this->db->select_max('id_barang')->from('barang')->get()->row()->id_barang;
        $data = array(
            'nama_penerima' => $nama,
            'no_telepon' => $phone,
            'kota' => $city,
            'alamat' => $address,
            'id_barang' => $id_barang
        );
        return $this->db->insert('penerima', $data);
    }
    
    public function insert_barang(){
        $nama = $this->input->post('nama_barang');
        $number = $this->input->post('number');
        $weight = $this->input->post('berat');
        $total = $weight * 10000;
        $data = array(
            'jenis_barang' => $nama,
            'berat_barang' => $weight,
            'total_harga' => $total
        );
        return $this->db->insert('barang', $data);
    }    

}

?>