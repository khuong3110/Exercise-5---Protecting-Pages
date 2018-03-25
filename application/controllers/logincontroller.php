<?php

class LoginController extends Controller{

    protected $userObject;
    public $login_success;

    public function do_login(){
        $this->userObject = new User();
        $check = $this->userObject->checkUser($_POST["email"], $_POST["password"]);

        if($check){
            $user = $this->userObject->getUserFromEmail($_POST["email"]);
            $_SESSION["uID"] = $user["uID"];

            if(isset($_SESSION['redirect'])){
                $view = $_SESSION['redirect'];
                unset($_SESSION['redirect']);
                $_SESSION['message'] = "Logged in Successfully!!!";
                header("Location: ". BASE_URL . $view );
            }
            else{
                $_SESSION['message'] = "Logged in Successfully!!!";
                header("Location: ". BASE_URL);
            }
        }
        else{
            $this->set("login_error","Invalid email or password");
        }
    }

    public function logout(){
        unset($_SESSION["uID"]);
        $_SESSION['message'] = "Logged out Successfully!!!";
        session_write_close();
        header("Location: " . BASE_URL);
    }
}
