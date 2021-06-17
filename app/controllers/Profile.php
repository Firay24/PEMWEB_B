<?php

class Profile extends Controller{
    public function index()
    {
        $data['judul'] = 'Profile';
        $this->view('templates/header1' , $data);
        $this->view('profile/index');
        $this->view('templates/footer1');
    }
}