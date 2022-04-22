<?php
require_once("Router.php");
require_once("./Api/ComentariosApiController.php");

define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');

// recurso solicitado
$resource = $_GET["resource"];

// método utilizado
$method = $_SERVER["REQUEST_METHOD"];

// instancia el router
$router = new Router();

// arma la tabla de ruteo
$router->addRoute("repuestos/:ID/comentarios/promedio", "GET", "ComentariosApiController", "getPromedio");
$router->addRoute("repuestos/:ID/comentarios", "GET", "ComentariosApiController", "getAllComentariosDeArticulo");
$router->addRoute("comentarios", "POST", "ComentariosApiController", "AddComentario");
$router->addRoute("comentarios/:ID", "DELETE", "ComentariosApiController", "DeleteComentario");

// rutea
$router->route($resource, $method);

