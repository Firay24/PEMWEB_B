<?php

class Transaction_model{
    private $table = 'transaksi';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    private $class = [
        [
            'kelas' => 'Python',
            'harga' => '2000',
            'waktu' => 'minggu',
            'ket' => 'bayar'
        ],
        [
            'kelas' => 'PHP',
            'harga' => '1000',
            'waktu' => 'minggu',
            'ket' => 'lunas'
        ]
    ];

    public function getAll() {
        return $this->class;
    }
    

    
}