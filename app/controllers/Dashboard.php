<?php

class Dashboard extends Controller{
    public function index()
    {
        $data['judul'] = 'Dashboard';
        $this->view('templates/header1' , $data);
        $this->view('dashboard/index');
        $this->view('templates/footer1');
    }
}