"use strict"

let app = new Vue({
    el: "#template-vue-comentarios",
    data: {
        adm: false,
        loading: true,
        promedio: "",
        comentarios: []
    },
    // funcion eleiminar
    methods: {
        deleteComentario: DeleteComentario,
        ordenarComentarios: getComentariosOrdenados
    }
});


/*function asignarEventoBorrar() {
  
    let btns= document.querySelectorAll(".eliminar-comentario");
    console.log(btns);
    for (let i = 0; i < btns.length; i++) {
        btns[i].addEventListener('click', () => DeleteComentario(this));
    }
}*/


async function DeleteComentario(id_comentario) {
   //paso elem como parametro
   // let id_comentario= elem.name;
    try {
        let r = await fetch("Api/comentarios/"+id_comentario, { "method": 'DELETE'});
        if (!r.ok) {
            alert("El comentario no fue encontrado");
        }

        getComentarios();
    }
    catch (e) {
       
        console.log(e);
    }
}

async function getPromedio() {
    let div_data = document.querySelector("#div-data");
    let id_articulo = div_data.dataset.id_articulo;
    try {
        let r = await fetch("Api/repuestos/"+id_articulo+"/comentarios/promedio");
        if (r.ok) {
            let promedio = await r.json();
            app.promedio = promedio; 
        }
    }
    catch (e) {
        console.log(e);
    }
}



async function getComentarios() {
    let div_data = document.querySelector("#div-data");
    let id_articulo = div_data.dataset.id_articulo;
    let adm = div_data.dataset.usuario;
    if ( adm==1 ) {
        app.adm=true;
    }
    try {
        let r = await fetch("Api/repuestos/"+id_articulo+"/comentarios");
        if (r.ok) {
            let comentarios = await r.json();
            app.comentarios = comentarios; 
            app.loading= false;
            getPromedio();
            //asignarEventoBorrar();
        }
        
    }
    catch (e) {
        console.log(e);
    }
}

async function getComentariosOrdenados() {
    let div_data = document.querySelector("#div-data");
    let id_articulo = div_data.dataset.id_articulo;
    let ordenar = document.querySelector("select[name=ordenar]").value;
    let forma= document.querySelector("select[name=forma]").value;
    try {
        let r = await fetch("Api/repuestos/"+id_articulo+"/comentarios?orderBy="+ordenar+"&order="+forma);
        if (r.ok) {
            let comentarios = await r.json();
            app.comentarios = comentarios; 
            app.loading= false;
            getPromedio();
        }
    }
    catch (e) {
        console.log(e);
    }
}



async function addComentario(e) {

    e.preventDefault();
    let div_data = document.querySelector("#div-data");
    let comentario= document.querySelector("textarea[name=comentario]").value;
    let puntaje= document.querySelector("select[name=puntaje]").value;

    if ((!comentario =="")&&!(puntaje =="")) {
        let data = {
            id_articulo: div_data.dataset.id_articulo,
            id_usuario: div_data.dataset.id_usuario,
            comentario:  comentario,
            puntaje: puntaje
        }
        try {
            let r = await fetch('Api/comentarios', {
                method: 'POST',
                headers: {'Content-Type': 'application/json'},       
                body: JSON.stringify(data) 
            });
            if (r.ok) {
                document.querySelector("textarea[name=comentario]").value = "";
                document.querySelector("select[name=puntaje]").value = 1;
                getComentarios();
            }
        }
        catch (e) {
            console.log(e);
        }
    }else{
        alert("complete todos los campos");
    }
}

let formulario= document.querySelector("#agregar-comentario");
if (formulario) {
    document.querySelector("#agregar-comentario").addEventListener('submit', addComentario);   
}

getComentarios();
