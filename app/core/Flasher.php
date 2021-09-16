<?php

    // class ini untuk menampilkan popup pada data yang berhasil dijalankan 

class Flasher {
    public static function setFlash($pesan, $aksi, $tipe)
    {
        $_SESSION['flash'] = [
            'pesan' => $pesan,
            'aksi' => $aksi,
            'tipe' => $tipe
        ];
    }


    // untuk menampilkan pesan flash nantinya 
    public static function flash()
    {
        if( isset($_SESSION['flash']) ) {
            echo '  <div class="alert alert-' . $_SESSION['flash']['tipe'] . ' alert-dismissible fade show" role="alert">
                        <strong>' .$_SESSION['flash']['pesan']. '</strong> ' . $_SESSION['flash']['aksi'] . '
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>';

            // untuk menghapus session dan untuk menjalankan sekali setelah dijalankan 
            unset($_SESSION['flash']);
        }
    }
}