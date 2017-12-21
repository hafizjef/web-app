<?php
/**
 * Created by PhpStorm.
 * User: Max
 * Date: 12/21/2017
 * Time: 12:16 PM
 */

class UserModel
{
    public static function getAllCustomer(){
        $sql = "SELECT * FROM customer WHERE active = 'Y'";

        return DatabaseWorker::queryAll($sql);
    }

    public static function getUserByID($userID){
        $sql = "SELECT * FROM customer WHERE userid = :userid";
        $params = array(':userid' => $userID);

        return DatabaseWorker::query($sql, $params);
    }

    public static function disableUser($userid){
        $sql = "UPDATE customer SET active = 'N' WHERE userid = :id";
        $params = array(':id' => $userid);

        return DatabaseWorker::mutate($sql, $params);
    }
}