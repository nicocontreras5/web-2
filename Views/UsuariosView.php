<?php
require_once('libs/Smarty.class.php');

class UsuariosView {

    private $smarty;

    function __construct(){
        $this->smarty = new Smarty();
        $this->smarty->assign('BASE_URL',BASE_URL);
    }
    
    public function DisplayUsers($user,$list_usuarios) {
        
        $this->smarty->assign('list_usuarios',$list_usuarios);        
        $this->smarty->assign('user',$user);
        $this->smarty->assign('titulo', 'usuarios');
        $this->smarty->display('templates/usuarios.tpl');
    }
    
    
        
}

