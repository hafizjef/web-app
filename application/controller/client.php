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

    }

    public function profile(){
        $user = Session::get('user');
        if (Request::get('action') && Request::isGet()){
            switch(Request::get('action')){
                case "success":
                    $alert = Alert::info("Profile successfully updated");
                    break;
            }
            require APP . 'view/_templates/message.php';
            require APP . 'view/clientarea/profile.php';
            require APP . 'view/_templates/footer.php';
            return;
        }
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
                    require APP . 'view/_templates/message.php';
                    require APP . 'view/clientarea/profile.php';
                    require APP . 'view/_templates/footer.php';
                    return;
                }
            } else {
                $alert = Alert::danger("Update error: Password mismatch");
                require APP . 'view/_templates/message.php';
                require APP . 'view/clientarea/profile.php';
                require APP . 'view/_templates/footer.php';
                return;
            }

        }
    }

    public function addOrder(){
        require APP . 'view/clientarea/addorder.php';
        require APP . 'view/_templates/footer.php';
    }

    public function listorder(){

    }
}