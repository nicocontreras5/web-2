{include file="header.tpl"}
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
                    {foreach from=$list_usuarios item=usuario}
                        <tr>
                        <td>{$usuario->mail}</td>
                        {if $usuario->administrador eq 0}
                            <td>No</td>
                            <td><a href="eliminar-usuario/{$usuario->id_usuario}"><button type="button" name="elimina-usuarior" class="">Eliminar User</button></a>
                            <a href="hacer-admin/{$usuario->id_usuario}"><button type="button" name="hacer-admin" class="">Hacer Admin</button></a></td>
                        {elseif $usuario->administrador eq 1}
                            <td>Si</td>
                            {if $usuario->mail neq "AdminOriginal@gmail.com"}
                                <td><a href="eliminar-usuario/{$usuario->id_usuario}"><button type="button" name="eliminar-usuario" class="">Eliminar User</button></a>
                                <a href="sacar-admin/{$usuario->id_usuario}"><button type="button" name="eliminar-admin" class="">Sacar Admin</button></a></td>
                            {elseif $usuario->mail eq "AdminOriginal@gmail.com"}
                                <td>admin original</td>

                            {else}
                            {/if}

                        {else}
                        {/if}
                        </tr>
                    {/foreach}
                </tbody>
            </table>
        </div>
    <script type="text/javascript" src="js/tablephp.js"></script>
  </body>
</html>