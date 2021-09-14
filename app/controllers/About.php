<?php 

class About {

    public function index($nama = 'Prasetyo', $pekerjaan = 'Programer')
    {
        echo "Hallo, saya adalah $nama saya seorang $pekerjaan";
    }

    public function page()
    {
        echo 'About/page';
    }
}