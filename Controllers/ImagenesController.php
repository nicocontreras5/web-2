<?php

require_once "./Helpers/Helper.php";
require_once "./Models/ImagenesModel.php";

class ImagenesController {

    private $Helper;
    private $ImagenesModel;
    
    
	public function __construct(){
        
        $this->ImagenesModel = new ImagenesModel();
        $this->Helper = new Helper();
        
    }
    
    public function DeleteAllImagenesDeArticulo($id_articulo){

        $this->Helper->checkLoggedIn();

        $imagenes_local = $this->ImagenesModel->RutaImagenLocal($id_articulo); 

        foreach ($imagenes_local as $imagen) {
            unlink($imagen->ruta);
        }
        $this->ImagenesModel->DeleteImagenesDeArticulo($id_articulo);
        header('Location: ' . BASE_URL . 'repuesto/' . $id_articulo);    
    }

    
    public function DeleteImagen($id_imagen,$id_articulo){

        $this->Helper->checkLoggedIn();

        $imagen_local = $this->ImagenesModel->RutaImagenLocal($id_imagen,"obteneruna"); 
        unlink($imagen_local->ruta);
        $this->ImagenesModel->DeleteImagen($id_imagen); 
        header('Location: ' . BASE_URL . 'repuesto/' . $id_articulo);    
    }
    
    
 } 














