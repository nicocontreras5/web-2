<?php
/* Smarty version 3.1.33, created on 2020-06-28 03:26:42
  from 'C:\Users\Usuario\Desktop\nico\TUDAI\xampp\htdocs\proyectos\TPE-WEB2-master\templates\usuarios.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ef7f1d2f12624_92519589',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '11d93c009f1d0d3d8a52d8eae8648056f2f599fc' => 
    array (
      0 => 'C:\\Users\\Usuario\\Desktop\\nico\\TUDAI\\xampp\\htdocs\\proyectos\\TPE-WEB2-master\\templates\\usuarios.tpl',
      1 => 1574991317,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_5ef7f1d2f12624_92519589 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <div class="bg-contenedor">
            <article>
                <h1 id="titulo-tabla">Usuarios</h1>
                <p><input class="form-input" id="input-filter" type="text" name="filtrar" placeholder="Filtrar tabla" /></p>
            <table>
                <thead>
                    <tr>
                    <th>Usuario</th>
                    <th>Administrador</th>
                    <th>Accion</th>
                    </tr>
                </thead>
                <tbody id="table">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_usuarios']->value, 'usuario');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['usuario']->value) {
?>
                        <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['usuario']->value->mail;?>
</td>
                        <?php if ($_smarty_tpl->tpl_vars['usuario']->value->administrador == 0) {?>
                            <td>No</td>
                            <td><a href="eliminar-usuario/<?php echo $_smarty_tpl->tpl_vars['usuario']->value->id_usuario;?>
"><button type="button" name="elimina-usuarior" class="">Eliminar User</button></a>
                            <a href="hacer-admin/<?php echo $_smarty_tpl->tpl_vars['usuario']->value->id_usuario;?>
"><button type="button" name="hacer-admin" class="">Hacer Admin</button></a></td>
                        <?php } elseif ($_smarty_tpl->tpl_vars['usuario']->value->administrador == 1) {?>
                            <td>Si</td>
                            <?php if ($_smarty_tpl->tpl_vars['usuario']->value->mail != "AdminOriginal@gmail.com") {?>
                                <td><a href="eliminar-usuario/<?php echo $_smarty_tpl->tpl_vars['usuario']->value->id_usuario;?>
"><button type="button" name="eliminar-usuario" class="">Eliminar User</button></a>
                                <a href="sacar-admin/<?php echo $_smarty_tpl->tpl_vars['usuario']->value->id_usuario;?>
"><button type="button" name="eliminar-admin" class="">Sacar Admin</button></a></td>
                            <?php } elseif ($_smarty_tpl->tpl_vars['usuario']->value->mail == "AdminOriginal@gmail.com") {?>
                                <td>admin original</td>

                            <?php } else { ?>
                            <?php }?>

                        <?php } else { ?>
                        <?php }?>
                        </tr>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </tbody>
            </table>
        </div>
    <?php echo '<script'; ?>
 type="text/javascript" src="js/tablephp.js"><?php echo '</script'; ?>
>
  </body>
</html><?php }
}
