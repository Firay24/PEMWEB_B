<?php

class myclass_model extends Controller{
    private $table = '';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAll() {
        $this->db->query("SELECT judulKelas FROM transaksi INNER JOIN kelas ON transaksi.IDKelas=kelas.ID WHERE transaksi.keterangan='Bayar'");
        return $this->db->resultSet();
    }
    
}