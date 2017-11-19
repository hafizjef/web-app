<?php

require_once APP . 'core/redirect.php';

class Auth extends Controller
{
    public function index()
    {
        Redirect::to('auth/login');
    }

    public function login()
    {
        require APP . 'view/_templates/header.php';
        require APP . 'view/auth/login.php';
        require APP . 'view/_templates/footer.php';
    }

    public function signUp()
    {
        require APP . 'view/_templates/header.php';
        require APP . 'view/auth/signup.php';
        require APP . 'view/_templates/footer.php';
    }
}