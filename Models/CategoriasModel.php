<?php

class CategoriasModel{

    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=nfautoparts;charset=utf8', 'root', '');
    }

	public function GetCategorias(){
        $sentencia = $this->db->prepare( "select * from categoria");
        $sentencia->execute();
        $Categorias = $sentencia->fetchAll(PDO::FETCH_OBJ);
        
        return $Categorias;
    }	

    public function GetCategoria($id_categoria){
        $sentencia = $this->db->prepare('SELECT * from categoria WHERE id_categoria = ?');
        $sentencia->execute([$id_categoria]);
        $Categoria = $sentencia->fetch(PDO::FETCH_OBJ);
        return $Categoria;
    }	


    public function SaveCategoria($nombre) {
        $sentencia = $this->db->prepare('INSERT INTO categoria(nombre) VALUES(?)');
        $sentencia->execute([$nombre]); 
    }

    function DeleteCategoria($id_categoria) {
        $sentencia = $this->db->prepare('DELETE FROM categoria WHERE id_categoria = ?');
        $sentencia->execute([$id_categoria]); 
    }

    function UpdateCategoria($nombre,$id_categoria) {
        $sentencia = $this->db->prepare('UPDATE categoria SET nombre = ? WHERE id_categoria= ?');
        $sentencia->execute([$nombre,$id_categoria]);
    }
}
