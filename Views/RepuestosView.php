<?php

require_once('libs/Smarty.class.php');

class RepuestosView {

    private $smarty;
    function __construct(){
        
        $this->smarty = new Smarty();
        $this->smarty->assign('BASE_URL',BASE_URL);
    }
    
    public function DisplayRepuestos($user,$Articulos,$Categorias){
        $this->smarty->assign('user',$user);
        $this->smarty->assign('titulo', 'Repuestos');
        $this->smarty->assign('lista_articulos',$Articulos);
        $this->smarty->assign('lista_categorias',$Categorias);
        $this->smarty->display('templates/repuestos.tpl');
    }
    
    public function DisplayArticulo($Articulo,$user,$imagenes){
        $this->smarty->assign('user',$user);
        $this->smarty->assign('titulo', 'Detalle del Repuesto');
        $this->smarty->assign('Articulo',$Articulo);
        $this->smarty->assign('imagenes',$imagenes);
        $this->smarty->display('templates/articulo.tpl');
    }

}
