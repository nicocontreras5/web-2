<?php

class ArticulosModel{

    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=nfautoparts;charset=utf8', 'root', '');
    }

	public function GetArticulos(){
        $sentencia = $this->db->prepare("SELECT articulo.*, categoria.nombre nombre_categoria, imagen.ruta imagen_ruta FROM articulo JOIN categoria ON articulo.id_categoria = categoria.id_categoria left JOIN imagen on articulo.id_articulo = imagen.id_articulo group by articulo.id_articulo");
        //$sentencia = $this->db->prepare("SELECT articulo.*, categoria.nombre nombre_categoria FROM articulo JOIN categoria ON articulo.id_categoria = categoria.id_categoria");
        $sentencia->execute();
        $Articulos = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $Articulos;
    }	 
    
    public function GetArticulo($id){
        $sentencia = $this->db->prepare("SELECT articulo.*, categoria.nombre as categoria FROM articulo JOIN categoria ON articulo.id_categoria = categoria.id_categoria AND id_articulo=?");
        $sentencia->execute(array($id));
        $Articulo = $sentencia->fetch(PDO::FETCH_OBJ);
        return $Articulo;
    } 

    public function GetArticulos_X_categoria($id){
        $sentencia = $this->db->prepare("SELECT articulo.*, categoria.nombre nombre_categoria, imagen.ruta imagen_ruta FROM articulo JOIN categoria ON articulo.id_categoria = categoria.id_categoria AND articulo.id_categoria = ? left JOIN imagen on articulo.id_articulo = imagen.id_articulo group by articulo.id_articulo");
        $sentencia->execute(array($id));
        $Articulos = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $Articulos;
    }
    
    public function SaveArticulo($id_categoria,$nombre,$precio,$marca,$año,$condicion) {
        $sentencia = $this->db->prepare('INSERT INTO articulo(id_categoria,nombre, precio, marca, anio, condicion) VALUES(?,?,?,?,?,?)');
        $sentencia->execute([$id_categoria,$nombre,$precio,$marca,$año,$condicion]); 
        return $this->db->lastInsertId();
    }

    function DeleteArticulo($id_articulo) {
        $sentencia = $this->db->prepare('DELETE FROM articulo WHERE id_articulo = ?');
        $sentencia->execute([$id_articulo]); 
    }

    function UpdateArticulo($id_categoria,$nombre,$precio,$marca,$anio,$condicion,$id_articulo) {
        $sentencia = $this->db->prepare('UPDATE articulo SET id_categoria= ?, nombre = ?, precio= ?,marca= ?, anio= ?, condicion= ? WHERE id_articulo= ?');
        $sentencia->execute([$id_categoria,$nombre,$precio,$marca,$anio,$condicion,$id_articulo]);
    }
}
