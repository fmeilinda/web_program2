<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Homepage extends CI_controller
{

    public function __construct()
    {
        parent ::__construct();
        //codeigniter : Write Less Do More
    }
    public function index()
    {
        $data['Judul']= 'Halaman Beranda';
        $this->load->view('templates/header',$data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('homepage/index');
        $this->load->view('templates/footer');
    }
}
?>