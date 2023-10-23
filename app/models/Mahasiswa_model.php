<?php

class Mahasiswa_model{
    private $dbh;
    private $stmt;

    public function __construct()
    {
        $dsn = 'mysql:host=localhost;dbname=phpmvc';

        try{
            $this->dbh = new PDO($dsn, 'root', 'root');
        } catch(PDOException $e){
            die($e->getMessage());
        }
    }

    // private $mhs = [
    //     [
    //         "nama" => "Tresna Eka Widiana",
    //         "nrp" => "193040071",
    //         "email" => "193040071@mail.unpas.ac.id",
    //         "jurusan" => "Teknik informatika"
    //     ],
    //     [
    //         "nama" => "Dian Nuryana",
    //         "nrp" => "193040045",
    //         "email" => "193040045@mail.unpas.ac.id",
    //         "jurusan" => "Teknik informatika"
    //     ],
    //     [
    //         "nama" => "Suhendani",
    //         "nrp" => "193040042",
    //         "email" => "193040042@mail.unpas.ac.id",
    //         "jurusan" => "Teknik informatika"
    //     ]
    // ];

    public function getAllMahasiswa()
    {
        $this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa');
        $this->stmt->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}