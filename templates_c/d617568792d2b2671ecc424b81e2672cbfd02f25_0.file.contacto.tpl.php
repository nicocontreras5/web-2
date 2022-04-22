<?php
/* Smarty version 3.1.33, created on 2021-05-27 23:29:14
  from 'C:\xampp\htdocs\proyectos\web2\templates\contacto.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_60b00f2a409a09_61183862',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd617568792d2b2671ecc424b81e2672cbfd02f25' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\web2\\templates\\contacto.tpl',
      1 => 1588029272,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_60b00f2a409a09_61183862 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <div class="bg-contenedor">
            <article>
                <img src="imagenes/contacto.png" alt="contacto" id="img-contacto">
                <h1>Contactenos</h1>
                <p>Llamenos sin cargo al:<span class="cel-mail"> 2494 111111.</span></p>
                <h4>Horarios de atencion</h4>
                <p>Lunes a Jueves 08:00 a 12:00 y 15:00 a 19:00</p>
                <p>Sabados y feriados 08:00 a 13:00</p>
                <h4>Contactenos por e-mail</h4>
                <p>Direccion de e-mail: <span class="cel-mail">nfparts@gmail.com</span></p>
            </article>
            <section>
                <h4 class="col-md-12">Suscripcion a noticias y ofertas</h4>
                <form class="row">
                    <div class="col-md-4">
                        <p>Nombre:</p>
                        <p><input class="form-input" type="text" name="nombre" /></p>
                    </div>
                    <div class="col-md-8">
                        <p>Apellido:</p>
                        <p><input class="form-input" type="text" name="apellido" /></p>
                    </div>
                    <div class="col-md-4">
                        <p> Email</p>
                        <p><input class="form-input" type="email"></p>
                    </div>
                    <div class="col-md-8">
                        <p>Tipo de suscripcion</p>
                        <p>
                            <select class="form-input">
                                <option value="suscripcioncompleta">Suscripcion completa</option>
                                <option value="noticias">Noticias</option>
                                <option value="ofertas">Ofertas</option>
                            </select>
                        </p>
                    </div>
                    <div class="col-md-12">
                        <p>
                            <input type="radio" name="sexo" value="masculino" /> <label class="form-input"
                                for="">Masculino</label>
                            <input type="radio" name="sexo" value="femenino" /> <label class="form-input"
                                for="">Femenino</label>
                        </p>
                    </div>
                    <div class="col-md-12">
                        <textarea class="form-input" name="message" placeholder="Consulta opcional" id="" cols="30"
                            rows="10"></textarea>
                    </div>
                    <div class="col-md-4">
                        <p>Captcha</p>
                        <p><input class="form-input" type="number" id="captcha" disabled></p>
                    </div>
                    <div class="col-md-8">
                        <p>Ingrese Captcha</p>
                        <p><input class="form-input" type="number" id="captcha-user" /></p>
                    </div>
                    <div class="col-md-12">
                        <button type="button" class="btn mb-4" id="btn-submit">Enviar</button>
                    </div>
                </form>
            </section>
        </div>
    <?php echo '<script'; ?>
 type="text/javascript" src="js/captcha.js"><?php echo '</script'; ?>
>
    </body>
</html><?php }
}
