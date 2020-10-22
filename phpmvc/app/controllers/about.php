<?php

use core\controller;

class about extends controller
{
    public function index($nama = 'sanjaya', $pekerjaan = 'programer', $umur = 19)
    {
        $data['nama'] = $nama;
        $data['pekerjaan'] = $pekerjaan;
        $data['umur'] = $umur;
        $data['judul'] = 'about me';

        $this->view('templates/header', $data);
        $this->view('about/index', $data);
        $this->view('templates/footer');
    }
    public function page()
    {
        $data['judul'] = 'my pages';

        $this->view('templates/header', $data);
        $this->view('about/page');
        $this->view('templates/footer');
    }
}
