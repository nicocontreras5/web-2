<?php
/* Smarty version 3.1.33, created on 2021-05-26 00:28:59
  from 'C:\xampp\htdocs\proyectos\web2\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_60ad7a2b26e408_79864057',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5c2e84a9d31355ca573f8dfbe563ef3e744920fa' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\web2\\templates\\login.tpl',
      1 => 1574991317,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_60ad7a2b26e408_79864057 (Smarty_Internal_Template $_smarty_tpl) {
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
