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
        if (isset($_SESSION["LAST_ACTIVITY"]) && (time() - $_SESSION["LAST_ACTIVITY"] > 1800)) {
            session_destroy();
            session_unset();
        }
        $_SESSION['LAST_ACTIVITY'] = time(); // update last activity time stamp 
    }
}
