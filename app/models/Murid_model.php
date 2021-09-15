<?php


class Murid_model {
    // private $mrd = [
    //     [
    //         "nama" => "Muhammad Prasetyo",
    //         "nim" => "03239211",
    //         "email" => "mprasetyo@gmail.com",
    //         "materi" => "Fullstack Developer"
    //     ],
    //     [
    //         "nama" => "Eva Kelvin",
    //         "nim" => "021402452",
    //         "email" => "eva@gmail.com",
    //         "materi" => "Accounting"
    //     ],
    //     [
    //         "nama" => "Putri Safitri",
    //         "nim" => "02144411",
    //         "email" => "putri@gmail.com",
    //         "materi" => "Fullstack Frontend Developer"
    //     ],
    //     [
    //         "nama" => "Angung Firmansyah",
    //         "nim" => "02143453",
    //         "email" => "angung123@gmai.com",
    //         "materi" => "Backend Developer"
    //     ]
    
    // membuat connecsi dengan PDO 
    private $dbh; // database handler
    private $stmt; // statement  query ke database

    public function __construct()
    {
        // data source name 
        $dsn = 'mysql:host=localhost;dbname=phpmvc';

        try {
            $this->dbh = new PDO($dsn, 'root', '');
        } catch(PDOException $e){
            die($e->getMessage());
        }
    }

    public function getAllMurid() 
    {
        // query connect ke db 
        $this->stmt = $this->dbh->prepare('SELECT * FROM murid');
        $this->stmt->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}