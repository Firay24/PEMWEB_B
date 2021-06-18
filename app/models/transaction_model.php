<?php

class transaction_model extends Controller{
    private $table = 'transaksi';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAll() {
        $this->db->query('SELECT Total, Waktu, Keterangan,judulKelas FROM transaksi INNER JOIN kelas ON transaksi.IDKelas=kelas.ID');
        return $this->db->resultSet();
    }
    
}