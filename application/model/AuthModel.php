<?php
/**
 * Created by PhpStorm.
 * User: Max
 * Date: 12/17/2017
 * Time: 8:04 PM
 */

class AuthModel
{
    /**
     * @param $username
     * @param $password
     * @return mixed
     * @throws Exception
     */
    public static function login($username, $password){

        $sql = "SELECT * FROM customer WHERE username = :username AND active = 'Y' LIMIT 1";
        $params = array(':username' => $username);

        $user = DatabaseWorker::query($sql, $params);

        if ($user == null) {
            $sql = "SELECT * FROM staff WHERE username = :username LIMIT 1";
            $params = array(':username' => $username);
            $user = DatabaseWorker::query($sql, $params);
            if ($user == null){
                throw new Exception("User did not exist");
            }
            if (password_verify($password, $user->password)) {
                Session::add('staff_logged_in', true);
                return $user;
            } else {
                throw new Exception("Invalid password");
            }
        }

        if (password_verify($password, $user->password)) {
            Session::add('user_logged_in', true);
            return $user;
        } else {
            throw new Exception("Invalid password");
        }
    }

    /**
     * @param $name
     * @param $username
     * @param $email
     * @param $phonenumber
     * @param $password
     * @param $address
     * @throws Exception
     */
    public static function register($name, $username, $email, $phonenumber, $password, $address){
        $token = bin2hex(random_bytes(16));
        $sql = "INSERT INTO customer (name, username, email, phonenumber, password, address, token) VALUES
                (:name, :username, :email, :phonenumber, :password, :address, :token)";

        $params = array(
            ':name' => $name,
            ':username' => $username,
            ':email' => $email,
            ':phonenumber' => $phonenumber,
            ':password' => $password,
            ':address' => $address,
            ':token' => $token
        );

        if (DatabaseWorker::mutate($sql, $params) == 0){
            throw new Exception("Username or Email address have been taken");
        }

    }

    /**
     * @param $name
     * @param $userid
     * @param $email
     * @param $phonenumber
     * @param $address
     * @throws Exception
     */
    public static function updateProfile($userid, $name, $email, $phonenumber, $address){
        $sql = "UPDATE customer SET name = :name, email = :email, phonenumber = :phone, address = :address WHERE userid = :userid";
        $params = array(
            ':name' => $name,
            ':email' => $email,
            ':phone' => $phonenumber,
            ':address' => $address,
            ':userid' => $userid
        );

        if (DatabaseWorker::mutate($sql, $params) == 0){
            throw new Exception("Database transaction failed");
        }
    }

    /**
     * @param $email
     * @throws Exception
     */
    public static function reset($email){
        $token = bin2hex(random_bytes(16));
        $sql = "UPDATE customer SET token = :token WHERE email = :email LIMIT 1";

        $params = array(
          ':token' => $token,
          ':email' => $email
        );

        if (DatabaseWorker::mutate($sql, $params) == 0){
            throw new Exception("Database operation failed");
        }
    }
}