<?php
/**
 * Created by PhpStorm.
 * User: Max
 * Date: 12/18/2017
 * Time: 12:37 AM
 */

class client extends Controller
{
    static $pageTitle = "Client Area";
    public function index(){
        Redirect::to('client/addorder');
    }

    public function profile(){
        $user = Session::get('user');
        if (Request::get('action') && Request::isGet()){
            switch(Request::get('action')){
                case "success":
                    $alert = Alert::info("Profile successfully updated");
                    break;
            }
            require APP . 'view/_templates/userheader.php';
            require APP . 'view/_templates/message.php';
            require APP . 'view/clientarea/profile.php';
            require APP . 'view/_templates/footer.php';
            return;
        }
        require APP . 'view/_templates/userheader.php';
        require APP . 'view/clientarea/profile.php';
    }

    public function updateProfile(){
        $user = Session::get('user');
        if (Request::isPost()){
            $userid = Request::post('userid');
            $name = Request::post('name');
            $email = Request::post('email');
            $phone = Request::post('phone');
            $password = Request::post('password');
            $address = Request::post('address');

            if (password_verify($password, $user->password)){
                try {
                    AuthModel::updateProfile($userid, $name, $email, $phone, $address);
                    Session::refreshUser();
                    Redirect::to('client/profile?action=success');
                } catch (Exception $exception) {
                    $alert = Alert::danger("Update error: " . $exception->getMessage());
                    require APP . 'view/_templates/userheader.php';
                    require APP . 'view/_templates/message.php';
                    require APP . 'view/clientarea/profile.php';
                    require APP . 'view/_templates/footer.php';
                    return;
                }
            } else {
                $alert = Alert::danger("Update error: Password mismatch");
                require APP . 'view/_templates/userheader.php';
                require APP . 'view/_templates/message.php';
                require APP . 'view/clientarea/profile.php';
                require APP . 'view/_templates/footer.php';
                return;
            }

        }
    }

    public function addOrder(){
        $user = Session::get('user');
        if (Request::isPost()){
            $weight = Request::post('weight');
            $date = Request::post('date');
            $services = Request::post('service');
            $items = Request::post('item');
            $total = Request::post('cost');

            if($services == null || $items == null){
                $alert = Alert::danger("Order Error: Please select services & items");
                require APP . 'view/_templates/userheader.php';
                require APP . 'view/_templates/message.php';
                require APP . 'view/clientarea/addorder.php';
                require APP . 'view/_templates/footer.php';
                return;
            }

            // convert array to string
            $services = implode(",", $services);
            $items = implode(",", $items);

            try {
                OrderModel::addOrder($user->userid, $date, $weight, $total, $services, $items);
                $alert = Alert::success("Order successfully added");
                require APP . 'view/_templates/userheader.php';
                require APP . 'view/_templates/message.php';
                require APP . 'view/clientarea/addorder.php';
                require APP . 'view/_templates/footer.php';
                return;
            } catch (Exception $e) {
                $alert = Alert::danger("Order Error: " . $e->getMessage());
                require APP . 'view/_templates/userheader.php';
                require APP . 'view/_templates/message.php';
                require APP . 'view/clientarea/addorder.php';
                require APP . 'view/_templates/footer.php';
                return;
            }
        }
        require APP . 'view/_templates/userheader.php';
        require APP . 'view/clientarea/addorder.php';
        require APP . 'view/_templates/footer.php';
    }

    public function listorder(){
        $user = Session::get('user');
        $orders = OrderModel::getOrderByUID($user->userid);

        require APP . 'view/_templates/userheader.php';
        require APP . 'view/clientarea/vieworders.php';
        require APP . 'view/_templates/footer.php';
    }
}