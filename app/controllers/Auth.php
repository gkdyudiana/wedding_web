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
            $code = htmlentities(strtoupper($_POST['code']));
            $name = htmlentities($_POST['name']);
            if (preg_match('/[\'^£$%&*()}";:!`@.{#~?><>,|=_+¬-]/', $code)) {
                $_SESSION['flash'] = [
                    'type' => 'error',
                    'message' => 'Invalid Access Code!'
                ];
                header('Location: ' . BASEURL . '/auth');
                exit();
            } else {
                if (preg_match('/[\'^£$%&*()}";:!`@.{#~?><>,|=_+¬-]/', $name)) {
                    $_SESSION['flash'] = [
                        'type' => 'error',
                        'message' => 'Invalid Name!'
                    ];
                    header('Location: ' . BASEURL . '/auth');
                    exit();
                } else {
                    $query = $this->dbh->prepare("SELECT access_code FROM tb_access WHERE access_code = :ac");
                    $query->execute(['ac' => $code]);
                    if ($query->rowCount() > 0) {

                        $query = $this->dbh->prepare("INSERT INTO tb_visitor (name, access_code, date) VALUES(:nm, :ce, :dt)");
                        $query->execute([
                            'nm' => $name,
                            'ce' => $code,
                            'dt' => $this->getDateTime()
                        ]);
                        $_SESSION['auth'] = [
                            'visitor' => $name,
                            'status' => 'true'
                        ];
                        echo '<h2 style="text-align: center; margin-top: 100px;font-family:sans-serif;">
                        Verification Successful!</h2>
                    <p style="text-align: center;margin-top: 10px;font-family: Verdana;">This process is
                        automatic. Your will redirect to wedding page.
                        <br>Please allow up to 5 seconds..</p>';
                        header('refresh:5;url=' . BASEURL . '/invitation');
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
    }

    public function logout()
    {
        session_destroy();
        unset($_SESSION['auth']);
        header('Location: ' . BASEURL . '/auth');
        exit();
    }
}
