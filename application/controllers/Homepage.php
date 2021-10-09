<?php
class homepage extends CI_controller
{
    public function index()
    {
        $data['Judul']= 'Halaman Beranda';
        $this->load->view('templates/header',$data);
        $this->load->view('home/index');
        $this->load->view('templates/footer');
    }
}
?>