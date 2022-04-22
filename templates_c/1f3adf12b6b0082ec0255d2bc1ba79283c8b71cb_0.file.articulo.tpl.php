<?php
/* Smarty version 3.1.33, created on 2019-11-29 01:56:53
  from 'C:\xampp\htdocs\proyectos\nfautoparts\templates\articulo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5de06cd5583778_61555332',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1f3adf12b6b0082ec0255d2bc1ba79283c8b71cb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\nfautoparts\\templates\\articulo.tpl',
      1 => 1574988910,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:vue/comentarios.tpl' => 1,
  ),
),false)) {
function content_5de06cd5583778_61555332 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    
                <section id="catalogo" class="contenedor-repuesto row">
                            <div class="col-lg-7 col-md-10 mb-4 p-0 border border-light card h-100">
                                    <div class="mt-4 titulo-art bg-titulo">
                                         <h1 class="mt-4 mb-4 card-title"><?php echo $_smarty_tpl->tpl_vars['Articulo']->value->nombre;?>
</h1>
                                    </div>
                                    <div id="carouselExampleIndicators" class="mb-4 mt-4 carousel slide" data-ride="carousel">
                                        
                                        <div class="carousel-inner">
                                                                                        <?php if (!$_smarty_tpl->tpl_vars['imagenes']->value) {?>
                                                <div class="carousel-item active">
                                                    <img src="./imagenes/nuevos/sinfoto.jpeg" class="d-block w-100" alt="...">
                                                </div>
                                            <?php } else { ?>
                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['imagenes']->value, 'imagen');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['imagen']->value) {
?>
                                                    <?php if ($_smarty_tpl->tpl_vars['imagen']->value == reset($_smarty_tpl->tpl_vars['imagenes']->value)) {?>
                                                        <div class="carousel-item active">
                                                            <img src="<?php echo $_smarty_tpl->tpl_vars['imagen']->value->ruta;?>
" class="d-block w-100" alt="...">
                                                            <?php if (isset($_smarty_tpl->tpl_vars['user']->value) && $_smarty_tpl->tpl_vars['user']->value->administrador == 1) {?>
                                                                <a href="eliminar-imagen/<?php echo $_smarty_tpl->tpl_vars['imagen']->value->id_imagen;?>
/<?php echo $_smarty_tpl->tpl_vars['Articulo']->value->id_articulo;?>
"><button type="button" name="eliminar" class="btn-foto">Eliminar foto</button></a>
                                                            <?php }?>
                                                        </div>
                                                        
                                                    <?php } else { ?>
                                                        <div class="carousel-item">
                                                            <img src="<?php echo $_smarty_tpl->tpl_vars['imagen']->value->ruta;?>
" class="d-block w-100" alt="...">
                                                            <?php if (isset($_smarty_tpl->tpl_vars['user']->value) && $_smarty_tpl->tpl_vars['user']->value->administrador == 1) {?>
                                                                <a href="eliminar-imagen/<?php echo $_smarty_tpl->tpl_vars['imagen']->value->id_imagen;?>
/<?php echo $_smarty_tpl->tpl_vars['Articulo']->value->id_articulo;?>
"><button type="button" name="eliminar" class="btn-foto">Eliminar foto</button></a>
                                                            <?php }?>
                                                        </div>
                                                    <?php }?>
                                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                            <?php }?>   
                                        </div>
                                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>
                                
                         </div>

                        <div class="col-lg-4 col-md-10 div-datos-rep border border-light">
                                    
                                        <div class="precio bg-titulo"
                                            <h1>$ <?php echo $_smarty_tpl->tpl_vars['Articulo']->value->precio;?>
</h1>
                                        </div>
                                    <div class="datos-rep text-white">
                                        <h3>Marca:</h3>
                                            <h4><?php echo $_smarty_tpl->tpl_vars['Articulo']->value->marca;?>
.</h4>
                                        <h3>Año:</h3>
                                            <h4><?php echo $_smarty_tpl->tpl_vars['Articulo']->value->anio;?>
.</h4>
                                        <h3>Condicion:</h3>
                                            <h4><?php echo $_smarty_tpl->tpl_vars['Articulo']->value->condicion;?>
.</h4>
                                        <h3>Categoria:</h3>
                                            <h4 class="mb-4"> <?php echo $_smarty_tpl->tpl_vars['Articulo']->value->categoria;?>
.</h4>
                                        <?php if (isset($_smarty_tpl->tpl_vars['user']->value) && $_smarty_tpl->tpl_vars['user']->value->administrador == 1) {?>
                                            <a href="eliminar/articulo/<?php echo $_smarty_tpl->tpl_vars['Articulo']->value->id_articulo;?>
"><button type="button" name="eliminar" class="p-2">Eliminar articulo</button></a>
                                            <a href="form-editar/articulo/<?php echo $_smarty_tpl->tpl_vars['Articulo']->value->id_articulo;?>
"><button type="button" name="editar" class="mt-2 p-2">Editar articulo-foto </button></a>
                                        <?php }?>
                                    </div>
                        </div>  
                        <section id="div-data" data-id_articulo="<?php echo $_smarty_tpl->tpl_vars['Articulo']->value->id_articulo;?>
" data-id_usuario="<?php echo $_smarty_tpl->tpl_vars['user']->value->id_usuario;?>
"
                                data-usuario="<?php echo $_smarty_tpl->tpl_vars['user']->value->administrador;?>
" class="col-lg-7 col-md-10 mb-4 ml-2 border border-light card h-100">
                                <h3 class="d-inline mt-4 mb-4">Opiniones sobre el producto</h3>
                                
                                <?php $_smarty_tpl->_subTemplateRender("file:vue/comentarios.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                                <?php if (isset($_smarty_tpl->tpl_vars['user']->value) && $_smarty_tpl->tpl_vars['user']->value->administrador == 0) {?>
                                    
                                    <form id="agregar-comentario" action="insertar" method="POST">
                                        <div class="row">
                                            <div class="form-group col-md-6 col-sm-8">
                                                <label>Comentario</label>
                                                <textarea name="comentario" class="form-control" placeholder="Danos tu opinion del productor..." rows="3"></textarea>
                                            </div>
                                            <div class="form-group col-md-3 col-sm-5">
                                                <label>Puntaje</label>
                                                <select name="puntaje" class="form-control">
                                                <option value="1">1 (baja)</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5 (alta)</option>
                                                </select>
                                            </div>
                                        </div>
                                        <button type="submit" name="comentar" class="btn btn-primary mb-2">comentar</button>
                                    </form>
                                <?php }?>
                        </section>      

                </section>
    <?php echo '<script'; ?>
 src="./js/comentarios.js"><?php echo '</script'; ?>
>
    </body>
</html>
  
<?php }
}
