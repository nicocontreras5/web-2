<?php
/* Smarty version 3.1.33, created on 2019-11-29 01:34:23
  from 'C:\xampp\htdocs\proyectos\nfautoparts\templates\vue\comentarios.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5de0678f389a17_33198342',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2ea857aa6c729c3a58f7ccb7f973ca0dfb1075a6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\nfautoparts\\templates\\vue\\comentarios.tpl',
      1 => 1574737633,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5de0678f389a17_33198342 (Smarty_Internal_Template $_smarty_tpl) {
?>
<section class="mt-3" id="template-vue-comentarios">
    
    <div v-if="loading" class="card-body">
        <h2>Cargando...</h2>
    </div>
    <h3 v-if="comentarios == 'No hay comentarios'">{{comentarios}}</h3>
    <div v-if="!loading && comentarios !=='No hay comentarios'">
       
        <form class="mb-5"  id="form-ordenar" action="" method="GET">
            <div class="row">
                <div class="col-4 col-md-2"> 
                    <label>Ordenar por</label>
                    <select name="ordenar" class="form-control">
                        <option value="id_comentario">Fecha</option>
                        <option value="puntaje">Puntaje</option>
                    </select>
                </div>
                <div class="col-4 col-md-2">    
                    <label>Forma</label>
                    <select name="forma" class="form-control">
                        <option value="ASC">ascendente</option>
                        <option value="DESC">descendente</option>
                    </select>
                </div>
            </div>
            <button type="button" v-on:click="ordenarComentarios" class="mt-3 btn btn-primary mb-2">ordenar</button>
        </form>
         <h5>Promedio:</h5>
        <span v-if="promedio" class="promedio">{{promedio}}</span>
            <h3 class="mb-5 estrellas" v-if="promedio > 0 && promedio <= 1.5 ">&#9733; &#9734; &#9734; &#9734; &#9734;</h3>
            <h3 class="mb-5 estrellas" v-else-if="promedio > 1.5 && promedio <= 2.5">&#9733; &#9733; &#9734; &#9734; &#9734;</h3>
            <h3 class="mb-5 estrellas" v-else-if="promedio > 2.5  && promedio <= 3.5">&#9733; &#9733; &#9733; &#9734; &#9734;</h3>
            <h3 class="mb-5 estrellas" v-else-if="promedio > 3.5  && promedio <= 4.5">&#9733; &#9733; &#9733; &#9733; &#9734;</h3>
            <h3 class="mb-5 estrellas" v-else-if="promedio > 4.5 && promedio <=5">&#9733; &#9733; &#9733; &#9733; &#9733;</h3>

        <div v-for="comentario in comentarios">
            <i class="icono far fa-comment-alt"></i><h5 class="d-inline">{{ comentario.usuario }}</h5><button v-if="adm" type="button" class="ml-2 mb-2 eliminar-comentario" v-on:click="deleteComentario(comentario.id_comentario)">Eliminar</button>
            <h3 class="ml-5 estrellas" v-if="comentario.puntaje == 1">&#9733; &#9734; &#9734; &#9734; &#9734;</h3>
            <h3 class="ml-5 estrellas" v-else-if="comentario.puntaje == 2">&#9733; &#9733; &#9734; &#9734; &#9734;</h3>
            <h3 class="ml-5 estrellas" v-else-if="comentario.puntaje == 3">&#9733; &#9733; &#9733; &#9734; &#9734;</h3>
            <h3 class="ml-5 estrellas" v-else-if="comentario.puntaje == 4">&#9733; &#9733; &#9733; &#9733; &#9734;</h3>
            <h3 class="ml-5 estrellas" v-else-if="comentario.puntaje == 5">&#9733; &#9733; &#9733; &#9733; &#9733;</h3>
            <p class="ml-5 mb-5">{{ comentario.comentario }}</p>       
        </div>
    </div> 
  
</section>
<?php }
}