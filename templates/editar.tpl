{include file="header.tpl"}
        <div class="bg-contenedor mt-2">
            <h2 class="mt-2">Editar {$tipo}</h2>
                <form action="editar/{$tipo}/{$id}" method="POST" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-4 col-md-3">
                            <div class="form-group">
                                <label>Nombre</label>
                                <input name="nombre" value="{$elemento->nombre}" type="text" class="form-control">
                            </div>
                        </div>
                        {if $tipo eq "articulo"}
                            <div class="col-4 col-md-3">
                                <div class="form-group">
                                    <label>Precio</label>
                                    <input name="precio" value="{$elemento->precio}" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-4 col-md-3">
                                <div class="form-group">
                                    <label>Marca</label>
                                    <input name="marca" value="{$elemento->marca}" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-4 col-md-3">
                                <div class="form-group">
                                    <label>Año</label>
                                    <input name="año" value="{$elemento->anio}" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-4 col-md-3">
                                <div class="form-group">
                                    <label>Categoria</label>
                                        <select name="id_categoria" class="form-control"> 
                                            {foreach from=$lista_categorias item=categoria}
                                                {if $categoria->nombre eq $elemento->categoria }
                                                    <option value={$categoria->id_categoria} selected>{$categoria->nombre}</option>
                                                {else}
                                                    <option value={$categoria->id_categoria}>{$categoria->nombre}</option>
                                                {/if}
                                            {/foreach}
                                        </select>
                                </div>
                            </div>
                            <div class="col-6 col-md-3">
                                <div class="form-group">
                                    <label>Condicion</label>
                                    <textarea name="condicion" class="form-control" rows="3">{$elemento->condicion}</textarea>
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
                            
                        {/if}
                    </div>
                    <button type="submit" name="editar" class="btn btn-primary mt-2 mb-2">Editar</button>                
                </form>
        </div> 
    </body>
</html>  