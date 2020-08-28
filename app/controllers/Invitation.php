<?php

class Invitation extends Databases
{

    public function index()
    {
        $this->sessionCheck();
        $this->view('welcome/invitation');
    }

    public function sessionCheck()
    {
        if (!isset($_SESSION['auth'])) {
            header('Location: ' . BASEURL . '/auth');
            exit();
        }
    }
}
