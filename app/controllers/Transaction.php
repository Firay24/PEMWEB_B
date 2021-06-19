<?php

class Transaction extends Controller{
    public function index()
    {
        $data['judul'] = 'Transaction';
        $data['class'] = $this->model('transaction_model')->getAll();
        $this->view('templates/header1' , $data);
        $this->view('transaction/index', $data);
        $this->view('templates/footer1');
    }

    public function delete($id){
        if( $this->model('transaction_model')->deleteTransaksi($id) > 0){
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . '/transaction');
            exit;
        } else{
            Flasher::setFlash('gagal','dihapus','danger');
            header('Location: ' . BASEURL . '/transaction');
            exit;
        }
    }

    public function pay($id){
        if( $this->model('transaction_model')->updateTransaksi($id) > 0){
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . '/transaction');
            exit;
        } else{
            Flasher::setFlash('gagal','dihapus','danger');
            header('Location: ' . BASEURL . '/transaction');
            exit;
        }
    }
}