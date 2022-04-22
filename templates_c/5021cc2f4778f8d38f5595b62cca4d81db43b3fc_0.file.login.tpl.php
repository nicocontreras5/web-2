<?php
/* Smarty version 3.1.33, created on 2019-11-29 01:27:59
  from 'C:\xampp\htdocs\proyectos\nfautoparts\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5de0660fd83e03_64440019',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5021cc2f4778f8d38f5595b62cca4d81db43b3fc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\nfautoparts\\templates\\login.tpl',
      1 => 1572388198,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_5de0660fd83e03_64440019 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <div class="bg-contenedor">
            <form action="verify" method="POST" class="col-md-4">
                <h1>Iniciar / registrar Sesion</h1>

                <div class="form-group">
                    <label>Usuario (email)</label>
                    <input type="email" name="mail" class="form-control" placeholder="Ingrese email">
                </div>
                   <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Password">
                </div>

                <?php if ($_smarty_tpl->tpl_vars['error']->value) {?>
                <div class="alert alert-danger" role="alert">
                    <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

                </div>
                <?php }?>
                <button type="submit" name="registrar"  class="btn btn-primary">Registrar</button>
                <button type="submit" name="ingresar" class="btn btn-primary">Ingresar</button>
            </form>
        </div>
   </body>
</html><?php }
}
