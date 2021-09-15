<?php

class Murid extends Controller{
    public function index()
    {
        $data['judul'] = 'Daftar  Murid';
        $data['mrd'] = $this->model('Murid_model')->getAllMurid();
        $this->view('templates/header');
        $this->view('murid/index', $data);
        $this->view('templates/footer');
    }
}