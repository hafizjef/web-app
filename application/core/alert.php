<?php

class Alert
{
    public static function danger($message){
        return array("danger", "Error!", $message);
    }

    public static function warn($message){
        return array("warning", "Warning!", $message);
    }

    public static function info($message){
        return array("info", "Info!", $message);
    }

    public static function success($message){
        return array("success", "Success!", $message);
    }
}