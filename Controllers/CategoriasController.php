<?php
require_once "./Models/CategoriasModel.php";
require_once "./Views/StaticViews.php";
require_once "./Helpers/Helper.php";

class CategoriasController {

    private $CategoriasModel;
    private $StaticViews;
    private $Helper;

	public function __construct(){
        
        $this->StaticViews = new StaticViews();
        $this->CategoriasModel = new CategoriasModel();
        $this->Helper = new Helper();
        $this->adm = $this->Helper->checkUser();
        
    }
    
    
    public function UpdateCategoria($id_categoria){
        
        $this->Helper->checkLoggedIn();
        $categoria = $this->CategoriasModel->GetCategoria($id_categoria);
        $nombre= $_POST['nombre'];
        if(!empty($nombre)){
            if($categoria){
                $this->CategoriasModel->UpdateCategoria($nombre,$id_categoria);
                header('Location: ' . REPUESTOS_URL);  
            }else{
                $error= "No se encontro la categoria con id: ". $id_categoria;
                $this->StaticViews->ShowError($error,$this->adm);
            }     
        }else {
            $error= "Campos Incompletos!";
            $this->StaticViews->ShowError($error,$this->adm);
        }
    } 

    public function AgregarCategoria(){

        $this->Helper->checkLoggedIn();
        $nombre= $_POST['nombre'];
        if(!empty($nombre)){
            $this->CategoriasModel->SaveCategoria($nombre);
            header('Location: ' . REPUESTOS_URL);       
        }else {
            $error= "Campos Incompletos!";
            $this->StaticViews->ShowError($error,$this->adm);
        }
    }

    public function DeleteCategoria($id_categoria){

        $this->Helper->checkLoggedIn();
        $this->CategoriasModel->DeleteCategoria($id_categoria); 
        header('Location: ' . REPUESTOS_URL);    
    } 
 } 