<?php
//incluir cotnrollers
require_once "Controllers/RepuestosController.php";
require_once "Controllers/ImagenesController.php";
require_once "Controllers/LoginController.php";
require_once "Controllers/CategoriasController.php";
require_once "Controllers/StaticViewsController.php";
require_once "Controllers/AdminController.php";


$action = $_GET["action"];
define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');

define("LOGIN", BASE_URL . 'login');
define("REPUESTOS_URL", BASE_URL . 'repuestos');

$ImagenesController = new ImagenesController();
$RepuestosController = new RepuestosController();
$CategoriasController = new CategoriasController();
$StaticViewsController = new StaticViewsController();
$LoginController = new LoginController();
$AdminController = new AdminController();
if($action == ''){
    $StaticViewsController->InicioView();
}else{
    if (isset($action)){
        $partesURL = explode("/", $action);
        if($partesURL[0] == "inicio"){
            $StaticViewsController->InicioView();
        }elseif($partesURL[0] == "contacto") {
            $StaticViewsController->ContactoView();
        }elseif($partesURL[0] == "repuestos") {
            $RepuestosController->GetRepuestos();
        }elseif($partesURL[0] == "repuesto") {
            $RepuestosController->GetArticulo($partesURL[1]);
        }elseif($partesURL[0] == "login") {
                $LoginController->showLogin();
        }elseif($partesURL[0] == "verify") {
            $LoginController->verifyUser();
        }elseif($partesURL[0] == "logout") {
            $LoginController->logout();
        }elseif($partesURL[0] == "repuestos-categoria") {
            $RepuestosController->GetArticulos_X_categoria($partesURL[1]);
        }elseif($partesURL[0] == "agregar" && $partesURL[1] == "categoria") {
            $CategoriasController->AgregarCategoria();
        }elseif($partesURL[0] == "editar" && $partesURL[1] == "categoria") {
            $CategoriasController->UpdateCategoria($partesURL[2]);
        }elseif($partesURL[0] == "form-editar") {
            $StaticViewsController->ShowFormUpdate($partesURL[1],$partesURL[2]);
        }elseif($partesURL[0] == "eliminar" && $partesURL[1] == "categoria" ) {
            $CategoriasController->DeleteCategoria($partesURL[2]);
        }elseif($partesURL[0] == "eliminar" && $partesURL[1] == "articulo" ) {
            $RepuestosController->DeleteArticulo($partesURL[2]);
        }elseif($partesURL[0] == "agregar" && $partesURL[1] == "articulo") {
            $RepuestosController->AgregarArticulo();
        }elseif($partesURL[0] == "editar" && $partesURL[1] == "articulo") {
            $RepuestosController->UpdateArticulo($partesURL[2]);
        }elseif($partesURL[0] == "usuarios") {
            $AdminController->GetUsers();
        }elseif($partesURL[0] == "eliminar-usuario") {
            $AdminController->DeleteUser($partesURL[1]);
        }elseif($partesURL[0] == "hacer-admin") {
            $AdminController->HacerAdmin($partesURL[1]);
        }elseif($partesURL[0] == "sacar-admin") {
            $AdminController->SacarAdmin($partesURL[1]);
        }elseif($partesURL[0] == "eliminar-imagen") {
            $ImagenesController->DeleteImagen($partesURL[1],$partesURL[2]);
        }





    }
}

