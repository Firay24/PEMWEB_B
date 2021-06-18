<?php

class transaction_model extends Controller{
    private $table = 'transaksi';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAll() {
        $this->db->query('SELECT kelas.ID, Total, Waktu, Keterangan, judulKelas FROM transaksi INNER JOIN kelas ON transaksi.IDKelas=kelas.ID');
        return $this->db->resultSet();
    }

    public function deleteTransaksi($id) {
        $query = "DELETE FROM transaksi WHERE ID = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }
    
}