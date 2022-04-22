<?php
/* Smarty version 3.1.33, created on 2019-12-04 21:27:47
  from 'C:\Users\Usuario\Desktop\nico\TUDAI\xampp\htdocs\proyectos\TPE-WEB2-master\templates\editar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5de816c3e2a698_79931362',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '27a139ddc469076ca39d89c6c7cddf49c3c48294' => 
    array (
      0 => 'C:\\Users\\Usuario\\Desktop\\nico\\TUDAI\\xampp\\htdocs\\proyectos\\TPE-WEB2-master\\templates\\editar.tpl',
      1 => 1574991317,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_5de816c3e2a698_79931362 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <div class="bg-contenedor mt-2">
            <h2 class="mt-2">Editar <?php echo $_smarty_tpl->tpl_vars['tipo']->value;?>
</h2>
                <form action="editar/<?php echo $_smarty_tpl->tpl_vars['tipo']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" method="POST" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-4 col-md-3">
                            <div class="form-group">
                                <label>Nombre</label>
                                <input name="nombre" value="<?php echo $_smarty_tpl->tpl_vars['elemento']->value->nombre;?>
" type="text" class="form-control">
                            </div>
                        </div>
                        <?php if ($_smarty_tpl->tpl_vars['tipo']->value == "articulo") {?>
                            <div class="col-4 col-md-3">
                                <div class="form-group">
                                    <label>Precio</label>
                                    <input name="precio" value="<?php echo $_smarty_tpl->tpl_vars['elemento']->value->precio;?>
" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-4 col-md-3">
                                <div class="form-group">
                                    <label>Marca</label>
                                    <input name="marca" value="<?php echo $_smarty_tpl->tpl_vars['elemento']->value->marca;?>
" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-4 col-md-3">
                                <div class="form-group">
                                    <label>Año</label>
                                    <input name="año" value="<?php echo $_smarty_tpl->tpl_vars['elemento']->value->anio;?>
" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-4 col-md-3">
                                <div class="form-group">
                                    <label>Categoria</label>
                                        <select name="id_categoria" class="form-control"> 
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lista_categorias']->value, 'categoria');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->value) {
?>
                                                <?php if ($_smarty_tpl->tpl_vars['categoria']->value->nombre == $_smarty_tpl->tpl_vars['elemento']->value->categoria) {?>
                                                    <option value=<?php echo $_smarty_tpl->tpl_vars['categoria']->value->id_categoria;?>
 selected><?php echo $_smarty_tpl->tpl_vars['categoria']->value->nombre;?>
</option>
                                                <?php } else { ?>
                                                    <option value=<?php echo $_smarty_tpl->tpl_vars['categoria']->value->id_categoria;?>
><?php echo $_smarty_tpl->tpl_vars['categoria']->value->nombre;?>
</option>
                                                <?php }?>
                                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        </select>
                                </div>
                            </div>
                            <div class="col-6 col-md-3">
                                <div class="form-group">
                                    <label>Condicion</label>
                                    <textarea name="condicion" class="form-control" rows="3"><?php echo $_smarty_tpl->tpl_vars['elemento']->value->condicion;?>
</textarea>
                                </div>
                            </div>
                            <div class="col-4 col-md-3 form-group">
                                <label>Imagenes:</label>
                                <select name="accion_imagenes" class="form-control">      
                                    <option value="eliminar" >Eliminar</option>
                                    <option value="conservar" selected>Conservar</option>
                                </select>
                            </div>
                            <div class="col-8 col-md-4">
                                <label>Subir nuevas imagenes:</label>
                                <div class="form-group">
                                    <input type="file" name="imagenes[]" id="imagenes" multiple>
                                </div>
                            </div>
                            
                        <?php }?>
                    </div>
                    <button type="submit" name="editar" class="btn btn-primary mt-2 mb-2">Editar</button>                
                </form>
        </div> 
    </body>
</html>  <?php }
}
