<?php

class Login extends Controller
{

    function __construct()
    {
        parent::__construct();
    }
    function getView()
    {
        if (isset($_SESSION['USERSID'])) {
            header("Location: " . constant("URL"));
            exit;
        }

        $this->view->getView('login/index');
    }

    function signin()
    {

        if (isset($_POST['inputUser']) && isset($_POST['inputPassword'])) {

            $user_name = $_POST['inputUser'];
            $user_pwd = $_POST['inputPassword'];

            if ($this->model->signin($user_name, $user_pwd)) {
                header("Location: " . constant("URL"));
                exit;
            } else {
                $this->getView();
                $exceptionHandler = new ExceptionHandler("Error al inicar sesión. usuario y/o contraseña incorrectos");
                $exceptionHandler->getView();
            }
        }
    }

    function signout()
    {

        if (isset($_SESSION['USERSID'])) {
            session_unset();
            session_destroy();
            header("Location: " . constant("URL"));
            exit;
        }
    }
}
