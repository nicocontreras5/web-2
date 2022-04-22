<?php

class ComentariosModel{

    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=nfautoparts;charset=utf8', 'root', '');
    }


    public function getAllComentariosDeArticulo($id_articulo) {
        $sentencia = $this->db->prepare("SELECT comentario.*, usuario.mail as usuario FROM comentario JOIN usuario ON comentario.id_usuario = usuario.id_usuario AND id_articulo=?");
        $sentencia->execute(array($id_articulo));

        return $sentencia->fetchAll(PDO::FETCH_OBJ);
    }

    public function getPromedio($id_articulo) {
        $sentencia = $this->db->prepare("SELECT AVG(puntaje) as promedioPuntaje FROM comentario WHERE id_articulo=?");
        $sentencia->execute(array($id_articulo));

        return $sentencia->fetch(PDO::FETCH_OBJ);
    }

    public function getComentariosOrdenados($id_articulo,$orderBy,$forma) {
        
        if ($orderBy == "id_comentario" && $forma == "ASC") {
            $sentencia = $this->db->prepare("SELECT comentario.*, usuario.mail as usuario FROM comentario JOIN usuario ON comentario.id_usuario = usuario.id_usuario AND id_articulo=? ORDER BY id_comentario ASC");
        }elseif ($orderBy == "id_comentario" && $forma == "DESC") {
            $sentencia = $this->db->prepare("SELECT comentario.*, usuario.mail as usuario FROM comentario JOIN usuario ON comentario.id_usuario = usuario.id_usuario AND id_articulo=? ORDER BY id_comentario DESC");
        }elseif ($orderBy == "puntaje" && $forma == "ASC") {
            $sentencia = $this->db->prepare("SELECT comentario.*, usuario.mail as usuario FROM comentario JOIN usuario ON comentario.id_usuario = usuario.id_usuario AND id_articulo=? ORDER BY puntaje ASC");       
        }else {
            $sentencia = $this->db->prepare("SELECT comentario.*, usuario.mail as usuario FROM comentario JOIN usuario ON comentario.id_usuario = usuario.id_usuario AND id_articulo=? ORDER BY puntaje DESC");
        }
        
            $sentencia->execute(array($id_articulo));

        return $sentencia->fetchAll(PDO::FETCH_OBJ);
    }

    public function getComentario($id_comentario) {
        $sentencia = $this->db->prepare("SELECT comentario.* FROM comentario WHERE id_comentario=?");
        $sentencia->execute(array($id_comentario));

        return $sentencia->fetch(PDO::FETCH_OBJ);
    }

    public function DeleteComentario($id_comentario) {
        $sentencia = $this->db->prepare('DELETE FROM comentario WHERE id_comentario = ?');
        $sentencia->execute(array($id_comentario));

        return $sentencia->fetch(PDO::FETCH_OBJ);
    }

    public function AddComentario($id_articulo,$id_usuario,$comentario,$puntaje) {
        $sentencia = $this->db->prepare('INSERT INTO comentario(id_articulo,id_usuario, comentario, puntaje) VALUES(?,?,?,?)');
        $sentencia->execute([$id_articulo,$id_usuario,$comentario,$puntaje]); 
        return $this->db->lastInsertId();
    }


}
