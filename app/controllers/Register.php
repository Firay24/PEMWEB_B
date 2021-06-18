<?php

class Register extends Controller{
    public function index()
    {
        $data['judul'] = 'Register';
        $this->view('templates/header', $data);
        $this->view('register/index');
        $this->view('templates/footer');
    }

    public function proses_register()
    {
        if ($_POST['password'] != $_POST['re_pass'])
        {
            Flasher::setFlash('Konfirmasi Password', 'Tidak Sama', 'danger');
            header("location: " . BASEURL . "/Register/index");
            exit;
        }

        if ($this->model('Akun_model')->addAkun($_POST) > 0)
        {
            Flasher::setFlash('Register', 'Berhasil', 'success');
            header("Location: " . BASEURL . "/Login");
            exit;
        }
    }
}