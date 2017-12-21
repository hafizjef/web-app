<?php
/**
 * Created by PhpStorm.
 * User: Max
 * Date: 12/18/2017
 * Time: 5:19 AM
 */

class admin extends Controller
{
    static $pageTitle = "Admin";
    public function index(){
        if(Request::isPost()){
            $orderId = Request::post('orderId');

            OrderModel::processOrder($orderId);
            Redirect::admin();
        }
        $orders = OrderModel::getAllOrders();
        require APP . 'view/_templates/staffheader.php';
        require APP . 'view/admin/allorders.php';
    }

    public function manage(){
        if(Request::isPost()){
            $userId = Request::post('userId');

            UserModel::disableUser($userId);
            Redirect::to('admin/manage');
        }
        $customers = UserModel::getAllCustomer();
        require APP . 'view/_templates/staffheader.php';
        require APP . '/view/admin/allcustomers.php';
    }

}