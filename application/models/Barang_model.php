<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Barang_model extends CI_Model{

 public function getAllBarang ()
 {
 return$this->db->get('barang')->result_array();
 }

Public function tambahDataBarang(){
    $data = array(
        'id_barang' => $this->input->post('id_barang',true),
        'nama_barang' => $this->input->post('nama_barang',true),
        'harga' => $this->input->post('harga',true),
        'stok' => $this->input->post('stok',true),
    );
    $this->db->insert('barang',$data);
}
}