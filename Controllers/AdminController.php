<?php
require_once('./Views/UsuariosView.php');
require_once('./Models/UserModel.php');
require_once('./Helpers/Helper.php');

class AdminController {

    private $view;
    private $model;
    private $Helper;

    public function __construct() {
        $this->view = new UsuariosView();
        $this->model = new UserModel();
        $this->Helper = new Helper();
        $this->adm = $this->Helper->checkUser();
    }

    public function GetUsers() {
        $this->Helper->checkLoggedIn();
        $list_usuarios = $this->model->getUsers();
        $this->view->DisplayUsers($this->adm,$list_usuarios);
       
    }

    public function DeleteUser($id_usuario) {
        $this->Helper->checkLoggedIn();
        $this->model->DeleteUser($id_usuario);
        header('Location: ' . BASE_URL . "usuarios");  
       
    }

    public function HacerAdmin($id_usuario) {
        $this->Helper->checkLoggedIn();
        $this->model->HacerAdmin($id_usuario);
        header('Location: ' . BASE_URL . "usuarios");        
    }

    public function SacarAdmin($id_usuario) {
        $this->Helper->checkLoggedIn();
        $this->model->SacarAdmin($id_usuario);
        header('Location: ' . BASE_URL . "usuarios");        
    }


   
}