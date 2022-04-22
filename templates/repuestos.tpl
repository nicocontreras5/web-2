{include file="header.tpl"}
    <div class="container">
        <div class="row">
            <!-- Lista de modelos -->
            <aside class="col-lg-3">
                <div class="bg-contenedor">
                <h3>Categorias</h3>
                </div>
                <ul class="mb-3 d-lg-block list-group">
                    {foreach from=$lista_categorias item=categoria}
                        <li class="list-group-item">
                        <a href="repuestos-categoria/{$categoria->id_categoria}">{$categoria->nombre}</a>
                        {if isset($user)&& $user->administrador eq 1}
                           <br> <a href="eliminar/categoria/{$categoria->id_categoria}"><button type="button" name="eliminar" class="mt-2">Eliminar</button></a> 
                            <a href="form-editar/categoria/{$categoria->id_categoria}"><button type="button" name="eliminar" class="mt-2">Editar</button></a>
                        {/if}
                        </li>
                    {/foreach}
                </ul>
                
            </aside>
            <!-- Tarjetas -->
            <section class="col-lg-9">
                <div id="catalogo" class="row">
                    {if empty($lista_articulos)}
                        <div class="bg-contenedor"                
                            <span id="alert">Esta categoria no contiene articulos</span>
                        </div>
                    {elseif !empty($lista_articulos)}
                        {foreach from=$lista_articulos item=articulo}
                            <article class="col-lg-4 col-md-6 mb-4">
                                <div class="border border-light card h-100">
                                    {if isset($articulo->imagen_ruta)}
                                        <a href="repuesto/{$articulo->id_articulo}"><img class="card-img-top" src="{$articulo->imagen_ruta}" alt=""></a> 
                                    {else}
                                        <a href="repuesto/{$articulo->id_articulo}"><img class="card-img-top" src="./imagenes/nuevos/sinfoto.jpeg" alt=""></a>
                                    {/if}
                                    <div class="mb-5 card-body bg-titulo">
                                        <h4 class="card-title">
                                            <a href="repuesto/{$articulo->id_articulo}">{$articulo->nombre}.</a>  
                                        </h4>
                                        <div class="text-white">
                                            <h5>$ {$articulo->precio}</h5>
                                            <p>Categoria: {$articulo->nombre_categoria}.</p> 
                                            
                                        </div>
                                    </div>
                                </div>
                            </article>
                        {/foreach}
                    {/if}                
                </div>
            </section>
        </div> 
        {if isset($user) && $user->administrador eq 1}
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
                                <label>Año</label>
                                <input name="año" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label>Categoria</label>
                                    <select name="id_categoria" class="form-control">  
                                        {foreach from=$lista_categorias item=categoria}
                                            <option value={$categoria->id_categoria}>{$categoria->nombre}</option>
                                        {/foreach}
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
        {/if}
    </div>
</body>
</html> 