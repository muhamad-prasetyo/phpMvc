<?php 

class Controller {

    //  view atau untuk mengelola view
    public function view($view, $data = []) 
    {
        // untuk memanggil view pada folder views 
        require_once '../app/views/' . $view . '.php';
    }

    public function model($model) 
    {
        require_once '../app/models/'. $model . '.php';
        return new $model;
    }
}