<?php
class Auth extends Controller
{
    public function index()
    {
        Redirect::to('auth/login');
    }

    public function login()
    {
        if (Request::get('action') && Request::isGet()){
            switch(Request::get('action')){
                case "new":
                    $alert = Alert::info("Account successfully registered, please login to continue");
                    break;
                case "reset":
                    $alert = Alert::success("Password reset requested, please check your email");
                    break;
            }

            require APP . 'view/_templates/message.php';
            require APP . 'view/auth/login.php';
            require APP . 'view/_templates/footer.php';
            return;
        }
        if (Session::userIsLoggedIn()){
            Redirect::profile();
        } else {
            if (Request::isPost()){
                $username = Request::post('username');
                $password = Request::post('password');

                try {
                    $user = AuthModel::login($username, $password);
                    Session::set('user', $user);
                    if (Session::staffIsLoggedIn()){
                        Redirect::to('admin');
                    } else {
                        Redirect::to('client/profile');
                    }
                    return;

                } catch (Exception $ex) {
                    $alert = Alert::danger("Authentication problem: " . $ex->getMessage());
                    require APP . 'view/_templates/message.php';
                    require APP . 'view/auth/login.php';
                    require APP . 'view/_templates/footer.php';
                    return;
                }
            } else {
                require APP . 'view/auth/login.php';
                require APP . 'view/_templates/footer.php';
                return;
            }
        }
    }

    public function signUp()
    {
        if (Session::userIsLoggedIn()){
           Redirect::profile();
        } else {
            if (Request::isPost()){
                $username = Request::post('username');
                $name = Request::post('name');
                $email = Request::post('email');
                $phone = Request::post('phone');
                $password = password_hash(Request::post('password'), PASSWORD_DEFAULT);
                $verifyPass = Request::post('verify-password');
                $address = Request::post('address');

                try {
                    AuthModel::register($name, $username, $email, $phone, $password, $address);
                    Redirect::to('auth/login?action=new');
                } catch (Exception $ex){
                    $alert = Alert::danger("Registration error: " . $ex->getMessage());
                    require APP . 'view/_templates/message.php';
                    require APP . 'view/auth/signup.php';
                    require APP . 'view/_templates/footer.php';
                    return;
                }

            }
            require APP . 'view/auth/signup.php';
            require APP . 'view/_templates/footer.php';
            return;
        }
    }

    public function reset(){
        if (Request::isPost()){
            $email = Request::post('email');
            try {
                AuthModel::reset($email);
                Redirect::to('auth/login?action=reset');
            } catch (Exception $exception) {
                $alert = Alert::danger("Request error: " . $exception->getMessage());
                require APP . 'view/_templates/message.php';
                require APP . 'view/auth/forgotpass.php';
                require APP . 'view/_templates/footer.php';
                return;
            }
        }
        require APP . 'view/auth/forgotpass.php';
        require APP . 'view/_templates/footer.php';
        return;
    }

    public function logout(){
        Session::destroy();
        Redirect::home();
    }
}