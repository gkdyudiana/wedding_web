<?php

class Auth extends Databases
{
    public function sessionCheck()
    {
        if (isset($_SESSION['auth'])) {
            header('Location: ' . BASEURL . '/invitation');
            exit();
        }
    }
    public function index()
    {
        $this->sessionCheck();
        $this->verify();
    }

    public function verify()
    {
        $this->sessionCheck();
        $this->view('auth/verify');
    }

    public function middleware()
    {
        $this->sessionCheck();
        if (isset($_POST['submit'])) {
            $code = htmlentities($_POST['code']);
            $query = $this->dbh->prepare("SELECT access_code FROM tb_access WHERE access_code = :ac");
            $query->execute(['ac' => $code]);
            if ($query->rowCount() > 0) {
                $_SESSION['auth'] = 'true';
                header('Location: ' . BASEURL . '/invitation');
                exit();
            } else {
                $_SESSION['flash'] = [
                    'type' => 'error',
                    'message' => 'Wrong code!'
                ];
                header('Location: ' . BASEURL . '/auth');
                exit();
            }
        }
    }
}
