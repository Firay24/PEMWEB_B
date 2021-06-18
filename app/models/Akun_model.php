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
        // $query = "SELECT * FROM pelanggan WHERE username=:username and password=:password";
        // $this->db->query($query);
        // $this->db->bind('username', $username);
        // $this->db->bind('password', $password);
        // $data = $this->db->single();
        // return $data;
    }

    public function addAkun($data)
    {
        $query = "INSERT INTO pelanggan (nama, username, password) VALUES (:nama, :username, :password)";
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('username', $data['username']);
        $this->db->bind('password', $data['password']);
        // return $this->db->single();
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function update($data)
    {
        var_dump($data);
        $query = "UPDATE pelanggan SET nama=:nama, username=:username, password=:password WHERE ID=:ID";
        $this->db->query($query);
        $this->db->bind('ID', $data['ID']);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('username', $data['username']);
        $this->db->bind('password', $data['password']);
        $this->db->execute();
        return $this->db->rowCount();
    }
}