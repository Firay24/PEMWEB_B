<?php

class transaction_model extends Controller{
    private $dbh;
    private $stmt;

    public function __construct()
    {
        $dsn = 'mysql:host=localhost:7882;dbname=academy';

        try {
            $this->dbh = new PDO($dsn, 'root', '');
        }catch(PDOException $e) {
            die($e->getMessage());
        }
    }

    // private $class = [
    //     [
    //         'kelas' => 'Python',
    //         'harga' => '2000',
    //         'waktu' => 'minggu',
    //         'ket' => 'bayar'
    //     ],
    //     [
    //         'kelas' => 'PHP',
    //         'harga' => '1000',
    //         'waktu' => 'minggu',
    //         'ket' => 'lunas'
    //     ]
    // ];

    // public function __construct()
    // {
    //     $this->db = new Database;
    // }

    public function getAll() {
        $this->stmt = $this->dbh->prepare("SELECT * FROM transaksi");
        $this->stmt->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    

    
}