<?php

class UserModel{

    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=nfautoparts;charset=utf8', 'root', '');
    }

	public function getByUserMail($mail) {
        $sentencia = $this->db->prepare('SELECT * FROM usuario WHERE mail = ?');
        $sentencia->execute(array($mail));

        return $sentencia->fetch(PDO::FETCH_OBJ);
    }

    public function RegistrarUser($mail, $password) {
        $sentencia = $this->db->prepare('INSERT INTO usuario(mail, password) VALUES(?,?)');
        $sentencia->execute([$mail, $password]); 
    }

    function DeleteUser($id_usuario) {
        $sentencia = $this->db->prepare('DELETE FROM usuario WHERE id_usuario = ?');
        $sentencia->execute([$id_usuario]); 
    }

    function HacerAdmin($id_usuario) {
        $sentencia = $this->db->prepare('UPDATE usuario SET administrador = 1 WHERE id_usuario = ?');
        $sentencia->execute([$id_usuario]);
    }

    function SacarAdmin($id_usuario) {
        $sentencia = $this->db->prepare('UPDATE usuario SET administrador = 0 WHERE id_usuario = ?');
        $sentencia->execute([$id_usuario]);
    }

    public function getUsers() {
        $sentencia = $this->db->prepare('SELECT * FROM usuario ORDER BY administrador DESC');
        $sentencia->execute();

        return $sentencia->fetchAll(PDO::FETCH_OBJ);
    }
}
