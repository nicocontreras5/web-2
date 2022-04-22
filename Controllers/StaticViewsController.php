<?php
require_once "./Views/StaticViews.php";
require_once "./Helpers/Helper.php";
require_once "./Models/CategoriasModel.php";
require_once "./Models/ArticulosModel.php";

class StaticViewsController {

    private $StaticViews;
    private $CategoriasModel;
    private $ArticulosModel;
    private $Helper;

	public function __construct(){
       
        $this->StaticViews = new StaticViews();
        $this->CategoriasModel = new CategoriasModel();
        $this->ArticulosModel = new ArticulosModel();
        $this->Helper = new Helper();
        $this->adm =$this->Helper->checkUser();


    }

    
    public function InicioView(){

        $this->StaticViews->InicioView($this->adm);
    }
    
    public function ContactoView(){
        
        $this->StaticViews->ContactoView($this->adm);
    }

    public function ShowFormUpdate($tipo,$id){

        $this->Helper->checkLoggedIn();
        if ($tipo == "categoria") {
            $elemento = $this->CategoriasModel-> GetCategoria($id);
        }else {
            $elemento = $this->ArticulosModel->GetArticulo($id);
        }
        $Categorias = $this->CategoriasModel->GetCategorias();
        $this->StaticViews->ShowFormUpdate($tipo,$id,$Categorias,$this->adm,$elemento);
    } 
 } 