<?php

class Logout extends Controller{
    public function logout()
    {
        unset($_SESSION['username']);
        header("Location: " . BASEURL . "/index");
        exit;
    }
}