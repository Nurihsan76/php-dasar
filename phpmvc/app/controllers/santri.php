<?php

use core\controller;

class santri extends controller
{

    public function index()
    {
        $data['judul'] = 'daftar santri';
        $data['santri'] = $this->model('santri_model')->getallsantri();
        $this->view('templates/header', $data);
        $this->view('santri/index', $data);
        $this->view('templates/footer');
    }


    public function detail($id)
    {
        $data['judul'] = 'detail santri';
        $data['santri'] = $this->model('santri_model')->getsantribyid($id);
        $this->view('templates/header', $data);
        $this->view('santri/detail', $data);
        $this->view('templates/footer');
    }

    public function tambah(){
    if ( $this->model('santri_model')->tambahdatasantri($_POST) > 0) {
        flasher::setflash('berhasi', 'ditambahkan', 'success');
        header ('location: '.BASEURL.'/santri');
        exit;
    }else {
        flasher::setflash('gagal', 'ditambahkan', 'danger');
        header ('location: '.BASEURL.'/santri');
        exit;
 
    }
    }

    public function hapus($id){
        if ( $this->model('santri_model')->hapusdatasantri($id) > 0) {
            flasher::setflash('berhasi', 'dihapus', 'success');
            header ('location: '.BASEURL.'/santri');
            exit;
        }else {
            flasher::setflash('gagal', 'dihapus', 'danger');
            header ('location: '.BASEURL.'/santri');
            exit;
     
        }
        }

    public function getubah(){
    echo json_encode($this->model('santri_model')->getsantribyid($_POST['id']));
    }

    
    public function ubah(){
        if ( $this->model('santri_model')->ubahdatasantri($_POST) > 0) {
            flasher::setflash('berhasi', 'diubah', 'success');
            header ('location: '.BASEURL.'/santri');
            exit;
        }else {
            flasher::setflash('gagal', 'diubah', 'danger');
            header ('location: '.BASEURL.'/santri');
            exit;
     
        }
        }

        public function cari()
        {
            $data['judul'] = 'daftar santri';
            $data['santri'] = $this->model('santri_model')->caridatasantri();
            $this->view('templates/header', $data);
            $this->view('santri/index', $data);
            $this->view('templates/footer');
        }
    
    
}
