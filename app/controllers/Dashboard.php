<?php

class Dashboard extends Controller{
    public function index()
    {
        $data['judul'] = 'Dashboard';
        $data['kelas'] = $this->model('Kelas_model')->getAllKelas();
        $this->view('templates/header1' , $data);
        $this->view('dashboard/index', $data);
        $this->view('templates/footer1');
    }
}