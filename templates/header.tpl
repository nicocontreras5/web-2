<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <base href='{$BASE_URL}' >
    <title>{$titulo}</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/aspecto.css">
    <link rel="icon" href="css/imagenes/logo.png">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- development version, includes helpful console warnings -->
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="https://kit.fontawesome.com/3f3adbc810.js" crossorigin="anonymous"></script>
</head>

<body>
    <!-- Barra de navegacion -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="barra-nav">
        <div class="container">
            <a class="redirec-nav navbar-brand" href="inicio">
                <img src="css/imagenes/logo.png" id="logo" alt="logoNFcars">AutoParts
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto px-3">
                    <li class="nav-item active">
                        <a class="redirec-nav nav-link" href="repuestos" target="_self">Repuestos</a>
                    </li>
                    {if isset($user) && $user->administrador eq 1}
                        <li class="mr-5 nav-item active">
                            <a class="redirec-nav nav-link" href="usuarios" target="_self">Users</a>
                        </li>
                    {else}
                        <li class="nav-item active">
                            <a class="redirec-nav nav-link" href="contacto" target="_self">Contacto</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="">Carrito</a>
                        </li>
                    {/if}
                    {if !isset($user)}
                        <li class="nav-item active">
                            <a class="nav-link" href="login">Login</a>
                        </li>
                    {elseif isset($user)}
                        <p class="ml-5 nav-name-user">{$user->mail}</p>
                        <li class="nav-item active">
                            <a class="nav-link" href="logout">logout</a>
                        </li>
                    {else}
                    {/if}
                    
                </ul>
            </div>
        </div>
    </nav>