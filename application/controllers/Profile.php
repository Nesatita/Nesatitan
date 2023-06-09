<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        // Data profil
        $data['nama'] = 'John Doe';
        $data['nim'] = '123456789';
        $data['kelas'] = 'A1';
        $data['alamat'] = 'Jalan Raya No. 123';

        // Load the profile view with data
        $this->load->view('profile', $data);
    }
}
