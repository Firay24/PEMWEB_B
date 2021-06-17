<?php

class Transaction extends Controller{
    public function index()
    {
        $data['judul'] = 'Transaction';
        $data['class'] = $this->model('transaction_model')->getAll();
        $this->view('templates/header1' , $data);
        $this->view('transaction/index', $data);
        $this->view('templates/footer1');
    }
}