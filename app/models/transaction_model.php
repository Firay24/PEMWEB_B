<?php

class transaction_model extends Controller{
    private $table = 'transaksi';
    private $db;

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

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAll() {
        return $this->class;
    }
    

    
}