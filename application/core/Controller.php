<?php
class Controller
{
    function __construct()
    {
        // Assign title if set
        if (isset(static::$pageTitle)){
            $pageTitle = static::$pageTitle;
        }

        Session::init();
        if (Session::userIsLoggedIn()) {
            require APP . 'view/_templates/userheader.php';
        } elseif (Session::staffIsLoggedIn()) {
            require APP . 'view/_templates/staffheader.php';
        } else {
            require APP . 'view/_templates/header.php';
        }
    }
}