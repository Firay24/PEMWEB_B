<?php

class Login extends Controller{
    public function index()
    {
        $data['judul'] = 'Login';
        $this->view('templates/header' , $data);
        $this->view('login/index');
        $this->view('templates/footer');
    }

    public function login()
    {
        $data = $_POST;
        
        $credential = $this->model('Akun_model')->getCredential($data['username']);
        
        if ($credential['password'] == $data['password'])
        {
            $_SESSION['username'] = $data['username'];
            header("Location: " . BASEURL . "/landing");
            exit;
        } else {
            Flasher::setFlash('Login', 'Gagal', 'danger');
            header("Location: " . BASEURL);
            exit;
        }
    }
}