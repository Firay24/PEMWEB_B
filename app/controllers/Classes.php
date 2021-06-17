<?php

class Classes extends Controller{
    public function index()
    {
        $data['judul'] = 'My Class';
        $this->view('templates/header1' , $data);
        $this->view('classes/index');
        $this->view('templates/footer1');
    }
}