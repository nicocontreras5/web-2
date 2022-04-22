function loadPage() {
    "use strict"

    async function cargaPartial(url){
        let contenido = document.getElementById("contenido");
        let estado = document.getElementById("estado");
        estado.innerHTML= "Cargando..";
        estado.style.display = "block";
        try {
            let response = await fetch(url);
            if (response.ok) {
                //Sino creo data no anda. no se q se guarda en data.
                //cambia url las felchas del navegador andan pero no cargan contenido.
                //let data = "";
                //window.history.pushState(data, "titulo", url);
                let html = await response.text();
                contenido.innerHTML = html;
                estado.style.display = '';  
                if (url.endsWith("inicio.html")) {
                    loadTableJS();
                } else if (url.endsWith("contacto.html")){
                    loadCaptchaJs();
                }

            } else {
                contenido.innerHTML="";
                estado.innerHTML= "No se encontro el archivo.";
            }
        } catch (e) {
            estado.innerHTML= "Fallo la Conexión";
            contenido.appendChild(estado);  
            console.log(e);
        }
    }
    
    cargaPartial('inicio.html');
    
    function redirecNav(elem) {
        event.preventDefault();
        let url = elem.href;
        cargaPartial(url);
    }

    let btnNav= document.getElementsByClassName("redirec-nav");
    for (let i = 0; i < btnNav.length; i++) {
        btnNav[i].addEventListener("click", function(){redirecNav(this)});
    }

}
document.addEventListener("DOMContentLoaded",loadPage);