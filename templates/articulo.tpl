{include file="header.tpl"}
    
                <section id="catalogo" class="contenedor-repuesto row">
                            <div class="col-lg-7 col-md-10 mb-4 p-0 border border-light card h-100">
                                    <div class="mt-4 titulo-art bg-titulo">
                                         <h1 class="mt-4 mb-4 card-title">{$Articulo->nombre}</h1>
                                    </div>
                                    <div id="carouselExampleIndicators" class="mb-4 mt-4 carousel slide" data-ride="carousel">
                                        
                                        <div class="carousel-inner">
                                            {*imagenes*}
                                            {if !$imagenes}
                                                <div class="carousel-item active">
                                                    <img src="./imagenes/nuevos/sinfoto.jpeg" class="d-block w-100" alt="...">
                                                </div>
                                            {else}
                                                {foreach from=$imagenes item=imagen}
                                                    {if $imagen == reset($imagenes)}
                                                        <div class="carousel-item active">
                                                            <img src="{$imagen->ruta}" class="d-block w-100" alt="...">
                                                            {if isset($user) && $user->administrador eq 1}
                                                                <a href="eliminar-imagen/{$imagen->id_imagen}/{$Articulo->id_articulo}"><button type="button" name="eliminar" class="btn-foto">Eliminar foto</button></a>
                                                            {/if}
                                                        </div>
                                                        
                                                    {else}
                                                        <div class="carousel-item">
                                                            <img src="{$imagen->ruta}" class="d-block w-100" alt="...">
                                                            {if isset($user) && $user->administrador eq 1}
                                                                <a href="eliminar-imagen/{$imagen->id_imagen}/{$Articulo->id_articulo}"><button type="button" name="eliminar" class="btn-foto">Eliminar foto</button></a>
                                                            {/if}
                                                        </div>
                                                    {/if}
                                                {/foreach}
                                            {/if}   
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
                                            <h1>$ {$Articulo->precio}</h1>
                                        </div>
                                    <div class="datos-rep text-white">
                                        <h3>Marca:</h3>
                                            <h4>{$Articulo->marca}.</h4>
                                        <h3>Año:</h3>
                                            <h4>{$Articulo->anio}.</h4>
                                        <h3>Condicion:</h3>
                                            <h4>{$Articulo->condicion}.</h4>
                                        <h3>Categoria:</h3>
                                            <h4 class="mb-4"> {$Articulo->categoria}.</h4>
                                        {if isset($user)&& $user->administrador eq 1}
                                            <a href="eliminar/articulo/{$Articulo->id_articulo}"><button type="button" name="eliminar" class="p-2">Eliminar articulo</button></a>
                                            <a href="form-editar/articulo/{$Articulo->id_articulo}"><button type="button" name="editar" class="mt-2 p-2">Editar articulo-foto </button></a>
                                        {/if}
                                    </div>
                        </div>  
                        <section id="div-data" data-id_articulo="{$Articulo->id_articulo}"    {if isset($user)} data-id_usuario="{$user->id_usuario}"
                                data-usuario="{$user->administrador}"    {/if} class="col-lg-7 col-md-10 mb-4 ml-2 border border-light card h-100">
                                <h3 class="d-inline mt-4 mb-4">Opiniones sobre el producto</h3>
                                
                                {include file="vue/comentarios.tpl"}
                                {if isset($user) && $user->administrador eq 0}
                                    
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
                                {/if}
                        </section>      

                </section>
    <script type="text/javascript" src="./js/comentarios.js"></script>
    </body>
</html>
  
