<?php
require_once('./Views/LoginView.php');
require_once('./Models/UserModel.php');
require_once('./Helpers/Helper.php');

class LoginController {

    private $view;
    private $model;
    private $Helper;

    public function __construct() {
        $this->view = new LoginView();
        $this->model = new UserModel();
        $this->Helper = new Helper();
    }

    public function showLogin() {
        $this->view->showLogin();
    }

    public function verifyUser() {
        
        $mail = $_POST['mail'];
        $password = $_POST['password'];
        
        if (isset($_POST["registrar"])){
            $hash = password_hash($password, PASSWORD_DEFAULT);
            $this->model->RegistrarUser($mail,$hash);
        }

        $user = $this->model->getByUserMail($mail);
        // encontró un user con el username que mandó, y tiene la misma contraseña
        if (!empty($user) && password_verify($password, $user->password)) {
            $this->Helper->login($user);
            header('Location: ' . REPUESTOS_URL);
        }else{
            $this->view->showLogin("Login incorrecto");
        }
    
    }


    public function logout() {
        $this->Helper->logout();
        header('Location: ' . LOGIN);
    }
}