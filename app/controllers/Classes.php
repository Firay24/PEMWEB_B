<?php

class Classes extends Controller{
    public function index()
    {
        $data['judul'] = 'My Class';
        $data['myclass'] = $this->model('myclass_model')->getAll();
        $this->view('templates/header1' , $data);
        $this->view('classes/index',$data);
        $this->view('templates/footer1');
    }
}