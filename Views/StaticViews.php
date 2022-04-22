<?php
require_once('libs/Smarty.class.php');

class StaticViews {

    private $smarty;

    function __construct(){
        $this->smarty = new Smarty();
        $this->smarty->assign('BASE_URL',BASE_URL);
    }
    
    public function ContactoView($user) {
        
        $this->smarty->assign('user',$user);
        $this->smarty->assign('titulo', 'Contacto');
        $this->smarty->display('templates/contacto.tpl');
    }
    
    public function InicioView($user) {
        $this->smarty->assign('user',$user);
        $this->smarty->assign('titulo', 'Inicio');
        $this->smarty->display('templates/inicio.tpl');
    }
     
    public function ShowError($error,$user) {
        $this->smarty->assign('user',$user);
        $this->smarty->assign('titulo', 'Error');
        $this->smarty->assign('error', $error);
        $this->smarty->display('templates/error.tpl');
    }
        
    public function ShowFormUpdate($tipo,$id,$Categorias=null,$user,$elemento) {
        $this->smarty->assign('titulo', 'Editar');
        $this->smarty->assign('user', $user);
        $this->smarty->assign('elemento', $elemento);
        $this->smarty->assign('tipo', $tipo);
        $this->smarty->assign('lista_categorias', $Categorias);
        $this->smarty->assign('id', $id);
        $this->smarty->display('templates/editar.tpl');
    }
        
        
}

