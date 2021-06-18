<?php

class Kelas_model{
    private $table = 'kelas';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllKelas()
    {
        $this->db->query("SELECT * FROM {$this->table}");
        // $this->db->bind('judulKelas', $data['judulKelas']);
        // $this->db->bind('jenisKelas', $data['jenisKelas']);
        // $this->db->bind('hargaKelas', $data['hargaKelas']);
        // $this->db->bind('image', $data['image']);
        return $this->db->resultSet();
    }
}