<?php
class Barang_model extends CI_Model{
 public function getallBarang(){
 return$this->db->get('barang')->result_array();
 }
}