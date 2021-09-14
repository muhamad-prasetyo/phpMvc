<?php 

class Controller {

    //  view 
    public function view($view, $data = []) 
    {
        // untuk memanggil view pada folder views 
        require_once '../app/views/' . $view . '.php';
    }
}