<?php
require_once("./Models/ComentariosModel.php");
require_once("./Api/ApiController.php");
require_once("./Api/JSONView.php");

class ComentariosApiController extends ApiController{

    public function getAllComentariosDeArticulo($params = []) {
        $id_articulo = $params[':ID'];
        
        if (!empty($_GET['orderBy']) && !empty($_GET['order'])) {
            $orderBy= $_GET['orderBy'];  
            $forma= $_GET['order'];  
            
            $comentarios = $this->model->getComentariosOrdenados($id_articulo,$orderBy,$forma);
        }else{
            $comentarios = $this->model->getAllComentariosDeArticulo($id_articulo);
        }
    
        if ($comentarios) {
            $this->view->response($comentarios, 200);
        }
        else {
            $this->view->response("No hay comentarios", 200);
        }
    }
    
   

    public function getPromedio($params = []) {
        $id_articulo = $params[':ID'];
        $promedio = $this->model->getPromedio($id_articulo);
        if ($promedio) {
            $this->view->response($promedio->promedioPuntaje, 200);
        }
        else {
            $this->view->response("No hay comentarios", 200);
        }
    }

    public function DeleteComentario($params = []) {
        $id_comentario = $params[':ID'];
        $comentario= $this->model->getComentario($id_comentario);
        if ($comentario) {
            $this->model->DeleteComentario($id_comentario);
            $this->view->response("Comentario id=$id_comentario eliminado con éxito", 200);
        }else {
            $this->view->response("Comentario id=$id_comentario not found", 404);
        }
    }

   public function addComentario($params = []) { 
        $comentario = $this->getData();
        $last_id_comentario= $this->model->AddComentario($comentario->id_articulo, $comentario->id_usuario, $comentario->comentario, $comentario->puntaje);
        $comentario_nuevo= $this->model->getComentario($last_id_comentario);

        if ($comentario_nuevo) {
            $this->view->response($comentario_nuevo, 200);

        }else {
            $this->view->response("Error al insertar comentario", 500);
        }
    }
}