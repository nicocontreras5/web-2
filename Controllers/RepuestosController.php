<?php
require_once "./Models/ArticulosModel.php";
require_once "./Models/CategoriasModel.php";
require_once "./Views/RepuestosView.php";
require_once "./Views/StaticViews.php";
require_once "./Helpers/Helper.php";
require_once "./Models/ImagenesModel.php";
require_once "./Controllers/ImagenesController.php";

class RepuestosController {

    private $ArticulosModel;
    private $ImagenesController;
    private $CategoriasModel;
    private $RepuestosView;
    private $StaticView;
    private $adm;
    private $Helper;
    private $ImagenesModel;
    
    
	public function __construct(){

        $this->ImagenesController = new ImagenesController();
        $this->ArticulosModel = new ArticulosModel();
        $this->CategoriasModel = new CategoriasModel();
        $this->RepuestosView = new RepuestosView();
        $this->StaticView = new StaticViews();
        $this->ImagenesModel = new ImagenesModel();
        $this->Helper = new Helper();
        $this->adm = $this->Helper->checkUser();

    }
     
    public function GetRepuestos(){

        $Articulos = $this->ArticulosModel->GetArticulos();
        $Categorias = $this->CategoriasModel->GetCategorias();
        $this->RepuestosView->DisplayRepuestos($this->adm,$Articulos,$Categorias);
    }
    
    public function GetArticulo($id){

        $Articulo = $this->ArticulosModel->GetArticulo($id,$this->adm);

        if($Articulo){

            $imagenes= $this->ImagenesModel->getImagenesArticulo($id);
            $this->RepuestosView->DisplayArticulo($Articulo,$this->adm,$imagenes);
        }else{
            $error= "No se encontro el articulo con id: ". $id;
            $this->StaticView->ShowError($error,$this->adm);

        }
    }
    
    public function GetArticulos_X_categoria($id){

        $Articulos = $this->ArticulosModel->GetArticulos_X_categoria($id);
        $Categorias = $this->CategoriasModel->GetCategorias();
        $this->RepuestosView->DisplayRepuestos($this->adm,$Articulos,$Categorias);
    }

    public function DeleteArticulo($id_articulo){

        $this->Helper->checkLoggedIn();
        $this->ArticulosModel->DeleteArticulo($id_articulo); 
        header('Location: ' . REPUESTOS_URL);    
    } 

    private function sonJPG($imagenesTipos){
        foreach ($imagenesTipos as $tipo) {
          if($tipo != 'image/jpeg') {
            return false;
          }
        }
        return true;
    }

    private function VerifyFormato($imagenesTipos){
       
        foreach ($imagenesTipos as $tipo) {
        
            if ($tipo !== "image/jpeg" && $tipo !== "image/jpg" && $tipo !== "image/png") {
            return false;
          }
        }
        return true;
    }

    public function AgregarArticulo(){

        $this->Helper->checkLoggedIn();
        $id_categoria= $_POST['id_categoria'];
        $nombre= $_POST['nombre'];
        $precio= $_POST['precio'];
        $marca= $_POST['marca'];
        $condicion= $_POST['condicion'];
        $año= $_POST['año'];
        $imagenes= $_FILES['imagenes'];

       
        if(!empty($nombre) && !empty($condicion && !empty($año) && !empty($id_categoria) && !empty($marca) && !empty($precio))){
          
            if (!$imagenes['name'][0] == "") {
                
                if ($this->VerifyFormato($imagenes['type'])) {

                    $id_articulo=  $this->ArticulosModel->SaveArticulo($id_categoria,$nombre,$precio,$marca,$año,$condicion);
                    $this->ImagenesModel->saveImagenes($imagenes,$id_articulo);
                    header('Location: ' . REPUESTOS_URL);       
                    die();
                }else {
                    $error= "Formato de imagen incorrecto,  solo se permite .png .jpg .jpeg";
                    $this->StaticView->ShowError($error,$this->adm);
                    die();
                }
            }
            $id_articulo=  $this->ArticulosModel->SaveArticulo($id_categoria,$nombre,$precio,$marca,$año,$condicion);
            header('Location: ' . REPUESTOS_URL);       
        }else {
            $error= "Campos Incompletos!";
            $this->StaticView->ShowError($error,$this->adm);
        }
    } 

    
    public function UpdateArticulo($id_articulo){

        $this->Helper->checkLoggedIn();
        $condicion= $_POST['condicion'];
        $id_categoria= $_POST['id_categoria'];
        $año= $_POST['año'];
        $marca= $_POST['marca'];
        $precio= $_POST['precio'];
        $nombre= $_POST['nombre'];
        $accion_imagenes= $_POST['accion_imagenes'];
        $imagenes= $_FILES['imagenes'];

        $Articulo = $this->ArticulosModel->GetArticulo($id_articulo,$this->adm);
        
        if(!empty($nombre) && !empty($condicion) && !empty($año) && !empty($id_categoria) && !empty($marca) && !empty($precio)){
            if($Articulo){
                    if (!$imagenes['name'][0] == "") {

                        if ($this->VerifyFormato($imagenes['type'])) {
                            $this->ImagenesModel->saveImagenes($imagenes,$id_articulo);
                        }else {
                            $error= "Formato de imagen incorrecto,  solo se permite .png .jpg .jpeg";
                            $this->StaticView->ShowError($error,$this->adm);
                            die();
                        }
                    }
                    if ($accion_imagenes == "eliminar") {

                        $this->ImagenesController->DeleteAllImagenesDeArticulo($id_articulo);
                    }
                    $this->ArticulosModel->UpdateArticulo($id_categoria,$nombre,$precio,$marca,$año,$condicion,$id_articulo);
                    header('Location: ' . BASE_URL . 'repuesto/' . $id_articulo );  
            }else{
                $error= "No se encontro el articulo con id: ". $id_articulo;
                $this->StaticView->ShowError($error,$this->adm);
            }        
        }else {
            $error= "Campos Incompletos!";
            $this->StaticView->ShowError($error,$this->adm);
        }
    } 
    
 } 














