<?php


class Murid_model {
    private $table = 'murid';
    private $db;

    public function __construct()
    {   
      $this->db = new Database;
        
    }

    public function getAllMurid() 
    {
        $this->db->query('SELECT * FROM ' . $this->table );
       
        return  $this->db->resultSet();
        
    }

    public function getMuridById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');

        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahDataMurid($data)
    {

        $query = "INSERT INTO murid
                    VALUES
                    ('', :nama, :nim, :email, :materi)";
       
       
       $this->db->query($query);
       $this->db->bind('nama', $data['nama']);
       $this->db->bind('nim', $data['nim']);
       $this->db->bind('email', $data['email']);
       $this->db->bind('materi', $data['materi']);
       
       $this->db->execute();
      
       return $this->db->rowCount();
       
       
    }

    public function hapusDataMurid($id)
    {
        $query = "DELETE FROM murid WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }
}