<?php
require_once('./Models/UserModel.php');

class Helper {

    private $UserModel;

    public function __construct() {
        if (session_status() != PHP_SESSION_ACTIVE){
            session_start();
        }
        $this->UserModel = new UserModel();

    }

    public function login($user) {
        // INICIO LA SESSION Y LOGUEO AL USUARIO
        $_SESSION['ID_USER'] = $user->id_usuario;
        $_SESSION['USERNAME'] = $user->mail;
        
    }

    public function logout() {

        session_destroy();
    }

    public function checkUser() {

        if (isset($_SESSION['ID_USER'])) {
            $user = $this->UserModel->getByUserMail($_SESSION['USERNAME']);
            return $user;

        }

    }  

    public function checkLoggedIn() {

        $user = $this->UserModel->getByUserMail($_SESSION['USERNAME']);
        if ($user->administrador != 1) {
            header('Location: ' . LOGIN);  
            die();
        }       
    }


}