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
}