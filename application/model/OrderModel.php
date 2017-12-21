<?php
/**
 * Created by PhpStorm.
 * User: Max
 * Date: 12/21/2017
 * Time: 10:16 AM
 */

class OrderModel
{
    /**
     * @param $customerId
     * @param $weight
     * @param $totalprice
     * @param $date
     * @param $service
     * @param $items
     * @throws Exception
     */
    public static function addOrder($customerId, $date, $weight, $totalprice, $service, $items){

        $weight = round($weight, 2);
        $totalprice = round($totalprice, 2);

        $sql = "INSERT INTO booking (customerid, date, weight, totalprice, services, items) VALUES 
                (:customerid, :date, :weight, :totalprice, :services, :items)";
        $params = array(
            ':customerid' => $customerId,
            ':date' => $date,
            ':weight' => $weight,
            ':totalprice' => $totalprice,
            ':services' => $service,
            ':items' => $items
        );

        if (DatabaseWorker::mutate($sql, $params) == 0){
            throw new Exception("Database operation error");
        }
    }

    public static function getOrderByUID($customerId){
        $sql = "SELECT * FROM booking WHERE customerid = :customerid AND status = 'N'";
        $params = array(":customerid" => $customerId);

        return DatabaseWorker::queryAll($sql, $params);
    }

    public static function getAllOrders(){
        $sql = "SELECT * FROM booking WHERE status = 'N'";
        return DatabaseWorker::queryAll($sql);
    }

    public static function processOrder($orderId){
        $sql = "UPDATE booking SET status = 'P' WHERE orderid = :id";
        $params = array(':id' => $orderId);

        return DatabaseWorker::mutate($sql, $params);
    }
}