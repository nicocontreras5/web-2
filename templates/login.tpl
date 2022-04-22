{include file="header.tpl"}
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

                {if $error}
                <div class="alert alert-danger" role="alert">
                    {$error}
                </div>
                {/if}
                <button type="submit" name="registrar"  class="btn btn-primary">Registrar</button>
                <button type="submit" name="ingresar" class="btn btn-primary">Ingresar</button>
            </form>
        </div>
   </body>
</html>