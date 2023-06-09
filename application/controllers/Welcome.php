<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
    public function index()
    {
        // Data profil
        $data['nama']   = 'Nesa Tita Nurlela';
        $data['nim']    = '3411201048';
        $data['kelas']  = 'DSE-B';
        $data['alamat'] = 'Majalengka';

        // Memuat view profile.php
        $this->load->view('welcome_message',$data);
    }
}
