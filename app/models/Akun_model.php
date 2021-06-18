<?php

class Akun_model{
    private $table = 'pelanggan';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getCredential($username)
    {
        $this->db->query("SELECT * FROM {$this->table} WHERE username=:username");
        $this->db->bind('username', $username);
        return $this->db->single();
    }

    public function addAkun($data)
    {
        $query = "INSERT INTO pelanggan (nama, username, password) VALUES ('', :nama, :username, :password)";
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('username', $data['username']);
        $this->db->bind('password', $data['password']);
        return $this->db->single();
    }

    public function update($data)
    {
        $query = "UPDATE pelanggan SET nama = :nama, username= :username, password = :password, WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('name', $data['nama']);
        $this->db->bind('username', $data['username']);
        $this->db->bind('password', $data['password']);
        $this->db->execute();
        return $this->db->rowCount();
    }
}