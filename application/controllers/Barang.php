<?php
defined('BASEPATH') OR exit('No direct script acces allowed');
class Barang extends CI_Controller{
 public function __construct(){
 parent::__construct ();
 $this->load->model('Barang_model');
 }
 public function index()
 {
 $data['judul']='Halaman Barang';
 $data['barang']=$this->Barang_model->getAllBarang();
 $this->load->view('templates/header',$data);
 $this->load->view('barang/index');
 $this->load->view('templates/footer');
 }
}