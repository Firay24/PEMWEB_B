<?php

class transaction_model extends Controller{
    private $table = 'transaksi';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAll() {
        $this->db->query('SELECT transaksi.ID, Total, Waktu, Keterangan, judulKelas FROM transaksi INNER JOIN kelas ON transaksi.IDKelas=kelas.ID');
        return $this->db->resultSet();
    }

    public function deleteTransaksi($ID) {
        $query = "DELETE FROM transaksi WHERE ID = :ID";
        $this->db->query($query);
        $this->db->bind('ID', $ID);

        $this->db->execute();

        return $this->db->rowCount();
    }
    
    public function updateTransaksi($ID) {
        $query = "UPDATE transaksi SET keterangan='Lunas' WHERE ID = :ID";
        $this->db->query($query);
        $this->db->bind('ID', $ID);

        $this->db->execute();

        return $this->db->rowCount();
    }
}