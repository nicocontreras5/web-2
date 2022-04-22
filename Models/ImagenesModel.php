<?php

class ImagenesModel{

    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=nfautoparts;charset=utf8', 'root', '');
    }


    public function getImagenesArticulo($id_articulo) {
        $sentencia = $this->db->prepare("SELECT imagen.* FROM imagen WHERE id_articulo=?");
        $sentencia->execute(array($id_articulo));
        return $sentencia->fetchAll(PDO::FETCH_OBJ);
    }

    public function saveImagenes($imagenes,$id_articulo) {
        $sentencia = $this->db->prepare("INSERT INTO imagen(id_articulo,ruta) VALUES(?,?)");
        $rutas= $this->moverImagenes($imagenes);
        foreach ( $rutas  as  $ruta ) {
            $sentencia->execute(array($id_articulo,$ruta));
        }
        
    }

    function DeleteImagen($id_imagen) {
        $sentencia = $this->db->prepare('DELETE FROM imagen WHERE id_imagen = ?');
        $sentencia->execute([$id_imagen]); 
    }

    function DeleteImagenesDeArticulo($id_articulo) {
        $sentencia = $this->db->prepare('DELETE FROM imagen WHERE id_articulo = ?');
        $sentencia->execute([$id_articulo]); 
    }

    public function RutaImagenLocal($id_imagen,$accion=null) {

        if ($accion) {
            $sentencia = $this->db->prepare("SELECT imagen.ruta FROM imagen WHERE id_imagen=?");
            $sentencia->execute(array($id_imagen));
            return $sentencia->fetch(PDO::FETCH_OBJ);
            die();
        }else {
            $sentencia = $this->db->prepare("SELECT imagen.ruta FROM imagen WHERE id_articulo=?");
            $sentencia->execute(array($id_imagen));
            return $sentencia->fetchAll(PDO::FETCH_OBJ);
        }
    }


    public function moverImagenes($imagenes) {
        $rutas  = [];
        $i= -1;
        $imagenes_name = $imagenes['name'];
        $rutas_tmp =$imagenes['tmp_name'];
        foreach ( $rutas_tmp  as  $ruta_tmp ) {
            $i++;
            $destino_final  =  "./imagenes/nuevos/" . uniqid () . "." . strtolower(pathinfo($imagenes_name[$i], PATHINFO_EXTENSION)); 
            move_uploaded_file ( $ruta_tmp , $destino_final );
            $rutas [] = $destino_final;
        }
        return  $rutas ;
    }

}
