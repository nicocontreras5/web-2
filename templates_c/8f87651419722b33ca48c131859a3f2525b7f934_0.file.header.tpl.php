<?php
/* Smarty version 3.1.33, created on 2021-05-26 00:26:28
  from 'C:\xampp\htdocs\proyectos\web2\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_60ad79949936a9_35364216',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8f87651419722b33ca48c131859a3f2525b7f934' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\web2\\templates\\header.tpl',
      1 => 1593382477,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60ad79949936a9_35364216 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <base href='<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
' >
    <title><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/aspecto.css">
    <link rel="icon" href="css/imagenes/logo.png">
    <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <!-- development version, includes helpful console warnings -->
    <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://kit.fontawesome.com/3f3adbc810.js" crossorigin="anonymous"><?php echo '</script'; ?>
>
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
                    <?php if (isset($_smarty_tpl->tpl_vars['user']->value) && $_smarty_tpl->tpl_vars['user']->value->administrador == 1) {?>
                        <li class="mr-5 nav-item active">
                            <a class="redirec-nav nav-link" href="usuarios" target="_self">Users</a>
                        </li>
                    <?php } else { ?>
                        <li class="nav-item active">
                            <a class="redirec-nav nav-link" href="contacto" target="_self">Contacto</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="">Carrito</a>
                        </li>
                    <?php }?>
                    <?php if (!isset($_smarty_tpl->tpl_vars['user']->value)) {?>
                        <li class="nav-item active">
                            <a class="nav-link" href="login">Login</a>
                        </li>
                    <?php } elseif (isset($_smarty_tpl->tpl_vars['user']->value)) {?>
                        <p class="ml-5 nav-name-user"><?php echo $_smarty_tpl->tpl_vars['user']->value->mail;?>
</p>
                        <li class="nav-item active">
                            <a class="nav-link" href="logout">logout</a>
                        </li>
                    <?php } else { ?>
                    <?php }?>
                    
                </ul>
            </div>
        </div>
    </nav><?php }
}
