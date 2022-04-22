{include file="header.tpl"}
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
    <script type="text/javascript" src="js/captcha.js"></script>
    </body>
</html>