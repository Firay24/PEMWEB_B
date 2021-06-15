<?php

class Register extends Controller{
    public function index($nama='Shafa')
    {
        $data['judul'] = 'Register';
        $data['nama'] = $nama;
        $this->view('templates/header', $data);
        $this->view('register/index', $data);
        $this->view('templates/footer');
    }
}