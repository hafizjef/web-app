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
    }
}