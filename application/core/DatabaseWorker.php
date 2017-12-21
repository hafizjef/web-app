<?php
/**
 * Created by PhpStorm.
 * User: Max
 * Date: 12/18/2017
 * Time: 1:25 AM
 */

class DatabaseWorker
{
    public static function query($sql, $clause = null){

        $database = DatabaseFactory::getFactory()->getConnection();
        $query = $database->prepare($sql);

        if($clause==null){
            $query->execute();
        } else {
            $query->execute($clause);
        }

        return $query->fetch();
    }

    public static function queryAll($sql, $clause = null){

        $database = DatabaseFactory::getFactory()->getConnection();
        $query = $database->prepare($sql);

        if($clause==null){
            $query->execute();
        } else {
            $query->execute($clause);
        }

        return $query->fetchAll();
    }

    public static function mutate($sql, $value){
        $database = DatabaseFactory::getFactory()->getConnection();
        $query = $database->prepare($sql);
        $query->execute($value);
        return $query->rowCount();
    }
}