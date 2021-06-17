<?php

class Landing extends Controller{
    public function index()
    {
        $this->view('templates/header_customer');
        $this->view('landing/index');
        $this->view('templates/footer_customer');
    }
}