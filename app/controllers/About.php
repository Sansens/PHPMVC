<?php

class About extends Controller
{
    public function index($nama = 'Muhammad Zaitun Rohmat Sanjaya', $pekerjaan = 'Pelajar', $umur = 15)
    {
        $data['nama'] = $nama;
        $data['pekerjaan'] = $pekerjaan;
        $data['umur'] = $umur;
        $data['judul'] = 'About Me';
        $this->view('templates/header', $data);
        $this->view('about/index', $data);
        $this->view('templates/footer');
    }
}