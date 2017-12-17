<?php
class Session
{
    public static function init()
    {
        // if no session exist, start the session
        if (session_id() == '') {
            session_start();
        }
    }

    public static function set($key, $value)
    {
        $_SESSION[$key] = $value;
    }

    public static function get($key)
    {
        if (isset($_SESSION[$key])) {
            $value = $_SESSION[$key];
            // filter the value for XSS vulnerabilities
            return Filter::XSSFilter($value);
        }
    }

    public static function add($key, $value)
    {
        $_SESSION[$key][] = $value;
    }

    public static function destroy()
    {
        session_destroy();
    }

    public static function updateSessionId($userId, $sessionId = null)
    {
        $database = DatabaseFactory::getFactory()->getConnection();
        $sql = "UPDATE users SET session_id = :session_id WHERE user_id = :user_id";
        $query = $database->prepare($sql);
        $query->execute(array(':session_id' => $sessionId, ":user_id" => $userId));
    }

    public static function userIsLoggedIn()
    {
        return (self::get('user_logged_in') ? true : false);
    }

    public static function staffIsLoggedIn(){
        return (self::get('staff_logged_in') ? true : false);
    }

    public static function refreshUser(){
        if(isset($_SESSION['user'])){
           $sql = "SELECT * FROM customer WHERE userid = :userid";
           $params = array(':userid' => self::get('user')->userid);

           self::set('user', DatabaseWorker::query($sql, $params));
        }
    }
}