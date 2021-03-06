<?php
/* Smarty version 3.1.33, created on 2019-11-29 01:25:54
  from 'C:\xampp\htdocs\proyectos\nfautoparts\templates\repuestos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5de06592914109_73053700',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f7d87808f20e67e62c38bc9849009c212fffa92e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\nfautoparts\\templates\\repuestos.tpl',
      1 => 1574974935,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_5de06592914109_73053700 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <div class="container">
        <div class="row">
            <!-- Lista de modelos -->
            <aside class="col-lg-3">
                <div class="bg-contenedor">
                <h3>Categorias</h3>
                </div>
                <ul class="mb-3 d-lg-block list-group">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lista_categorias']->value, 'categoria');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->value) {
?>
                        <li class="list-group-item">
                        <a href="repuestos-categoria/<?php echo $_smarty_tpl->tpl_vars['categoria']->value->id_categoria;?>
"><?php echo $_smarty_tpl->tpl_vars['categoria']->value->nombre;?>
</a>
                        <?php if (isset($_smarty_tpl->tpl_vars['user']->value) && $_smarty_tpl->tpl_vars['user']->value->administrador == 1) {?>
                           <br> <a href="eliminar/categoria/<?php echo $_smarty_tpl->tpl_vars['categoria']->value->id_categoria;?>
"><button type="button" name="eliminar" class="mt-2">Eliminar</button></a> 
                            <a href="form-editar/categoria/<?php echo $_smarty_tpl->tpl_vars['categoria']->value->id_categoria;?>
"><button type="button" name="eliminar" class="mt-2">Editar</button></a>
                        <?php }?>
                        </li>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </ul>
                
            </aside>
            <!-- Tarjetas -->
            <section class="col-lg-9">
                <div id="catalogo" class="row">
                    <?php if (empty($_smarty_tpl->tpl_vars['lista_articulos']->value)) {?>
                        <div class="bg-contenedor"                
                            <span id="alert">Esta categoria no contiene articulos</span>
                        </div>
                    <?php } elseif (!empty($_smarty_tpl->tpl_vars['lista_articulos']->value)) {?>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lista_articulos']->value, 'articulo');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['articulo']->value) {
?>
                            <article class="col-lg-4 col-md-6 mb-4">
                                <div class="border border-light card h-100">
                                    <?php if (isset($_smarty_tpl->tpl_vars['articulo']->value->imagen_ruta)) {?>
                                        <a href="repuesto/<?php echo $_smarty_tpl->tpl_vars['articulo']->value->id_articulo;?>
"><img class="card-img-top" src="<?php echo $_smarty_tpl->tpl_vars['articulo']->value->imagen_ruta;?>
" alt=""></a> 
                                    <?php } else { ?>
                                        <a href="repuesto/<?php echo $_smarty_tpl->tpl_vars['articulo']->value->id_articulo;?>
"><img class="card-img-top" src="./imagenes/nuevos/sinfoto.jpeg" alt=""></a>
                                    <?php }?>
                                    <div class="mb-5 card-body bg-titulo">
                                        <h4 class="card-title">
                                            <a href="repuesto/<?php echo $_smarty_tpl->tpl_vars['articulo']->value->id_articulo;?>
"><?php echo $_smarty_tpl->tpl_vars['articulo']->value->nombre;?>
.</a>  
                                        </h4>
                                        <div class="text-white">
                                            <h5>$ <?php echo $_smarty_tpl->tpl_vars['articulo']->value->precio;?>
</h5>
                                            <p>Categoria: <?php echo $_smarty_tpl->tpl_vars['articulo']->value->nombre_categoria;?>
.</p> 
                                            
                                        </div>
                                    </div>
                                </div>
                            </article>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    <?php }?>                
                </div>
            </section>
        </div> 
        <?php if (isset($_smarty_tpl->tpl_vars['user']->value) && $_smarty_tpl->tpl_vars['user']->value->administrador == 1) {?>
            <div class="bg-contenedor">
                <h2>Agregar Repuesto</h2>
                <form action="agregar/articulo" method="POST" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-4">
                            <div class="form-group">
                                <label>Nombre</label>
                                <input name="nombre" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label>Precio</label>
                                <input name="precio" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label>Marca</label>
                                <input name="marca" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label>A??o</label>
                                <input name="a??o" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label>Categoria</label>
                                    <select name="id_categoria" class="form-control">  
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lista_categorias']->value, 'categoria');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->value) {
?>
                                            <option value=<?php echo $_smarty_tpl->tpl_vars['categoria']->value->id_categoria;?>
><?php echo $_smarty_tpl->tpl_vars['categoria']->value->nombre;?>
</option>
                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </select>
                            </div>
                        </div>
                        <div class="col-8 col-md-4">
                            <div class="form-group mt-4">
                                <input type="file" name="imagenes[]" id="imagenes" multiple>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-8">
                            <div class="form-group">
                                <label>Condicion</label>
                                <textarea name="condicion" class="form-control" rows="3"></textarea>
                            </div>
                        </div>
                    </div>
                    <button type="submit" name="agregar" class="btn btn-primary mb-2">Agregar</button>
                </form>
                <h2 class="mt-5">Agregar Categoria</h2>
                <form action="agregar/categoria" method="POST">
                    <div class="form-group">
                    <label>Nombre</label>
                    <input name="nombre" type="text" class="form-control col-md-4 col-4">
                    <button type="submit" name="agregar" class="btn btn-primary mt-2">Agregar</button>
                </form>
            </div>
        <?php }?>
    </div>
</body>
</html> <?php }
}
