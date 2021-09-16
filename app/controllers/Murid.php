<?php

class Murid extends Controller{
    public function index()
    {
        $data['judul'] = 'Daftar Murid';
        $data['mrd'] = $this->model('Murid_model')->getAllMurid();
        $this->view('templates/header');
        $this->view('murid/index', $data);
        $this->view('templates/footer');
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail Murid';
        $data['mrd'] = $this->model('Murid_model')->getMuridById($id);
        $this->view('templates/header');
        $this->view('murid/detail', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        if( $this->model('Murid_model')->tambahDataMurid($_POST) > 0 ) {
            
            // set message flashnya 
            Flasher::setFlash('Berhasil', 'ditambahkan', 'success');

            header('Location: ' . BASEURL . '/murid');
            exit;
        } else {
            // jika gagal 
            // set message flashnya 
            Flasher::setFlash('Gagal', 'ditambahkan', 'danger');

            header('Location: ' . BASEURL . '/murid');
            exit;
        }
    }

    public function hapus($id)
    {
        if( $this->model('Murid_model')->hapusDataMurid($id) > 0 ) {
            
            // set message flashnya 
            Flasher::setFlash('Berhasil', 'dihapus', 'success');

            header('Location: ' . BASEURL . '/murid');
            exit;
        } else {
            // jika gagal 
            // set message flashnya 
            Flasher::setFlash('Gagal', 'dihapus', 'danger');

            header('Location: ' . BASEURL . '/murid');
            exit;
        }
    }
}