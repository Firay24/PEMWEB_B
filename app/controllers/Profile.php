<?php

class Profile extends Controller{
    public function index()
    {
        $data['judul'] = 'Profile';
        $data['pelanggan'] = $this->model('Akun_model')->getCredential($_SESSION['username']);
        $this->view('templates/header1' , $data);
        $this->view('profile/index', $data);
        $this->view('templates/footer1');
    }

    public function edit()
    {
        $data['judul'] = 'Edit Profile';
        $data['pelanggan'] = $this->model('Akun_model')->getCredential($_SESSION['username']);
        $this->view('templates/header1' , $data);
        $this->view('profile/edit', $data);
        $this->view('templates/footer1');
    }

    public function ubah()
    {
        if ($this->model('Akun_model')->update($_POST) > 0)
        {
            Flasher::setFlash('Profile', 'berhasil dihapus', 'success');
            header("Location: " . BASEURL . "/Profile/index");
            exit;
        } else{
            Flasher::setFlash('Profile', 'gagal dihapus', 'danger');
            header("Location: " . BASEURL . "/Profile/edit");
            exit;
        }
    }
}