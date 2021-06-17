<?php

class Transaction extends Controller{
    public function index()
    {
        $data['judul'] = 'Transaction';
        $this->view('templates/header1' , $data);
        $this->view('transaction/index');
        $this->view('templates/footer1');
    }
}