function loadTableJS() {
    "use strict"
    async function cargarTabla() {
        let tableHtml = document.getElementById("table");
        try {
            let r = await fetch("http://web-unicen.herokuapp.com/api/groups/49/nfautoparts");
            if (r.ok) {
                let json = await r.json();
                tableHtml.innerHTML = "";
                for (let j = 0; j < json.nfautoparts.length; j++) {
                    let tr = document.createElement("tr");
                    for (let i = 0; i < 4; i++) {
                        let td = document.createElement("td");
                        if (i == 0) {
                            td.innerHTML = json.nfautoparts[j].thing.producto;
                        }
                        else if (i == 1) {
                            td.innerHTML = "$" + json.nfautoparts[j].thing.precio;
                        }
                        else if (i==2) {
                            td.innerHTML = "%" + json.nfautoparts[j].thing.oferta;
                            if (json.nfautoparts[j].thing.oferta > 15) {
                                tr.className += " resaltado-table";
                            }
                        } else{
                            let btnBorrar = document.createElement("button");
                            let btnEditar = document.createElement("button");
                            btnBorrar.innerHTML= "borrar";
                            btnEditar.innerHTML= "editar";
                            let id = json.nfautoparts[j]._id;
                            btnBorrar.addEventListener("click", ()=>borrar(id));
                            btnEditar.addEventListener("click", ()=>editar(id));
                            td.appendChild(btnBorrar);
                            td.appendChild(btnEditar);
                        } 
                        tr.appendChild(td);
                    }
                    tableHtml.appendChild(tr);
                }
            }
        }
        catch (e) {
            console.log(e);
        }
    }
    cargarTabla();

    async function borrar(j) {
        try {
            let r = await fetch("http://web-unicen.herokuapp.com/api/groups/49/nfautoparts/"+j, { "method": "DELETE" });
            if (r.ok) {
                cargarTabla();
            }
        }
        catch (e) {
            console.log(e);
        }
    }

    async function editar(j) {
        let trTable= obtenerDatos();
        if (trTable != -1) {
            try {
                let r = await fetch("http://web-unicen.herokuapp.com/api/groups/49/nfautoparts/"+j,
                            {
                                "method": "PUT",
                                "headers": { "Content-Type": "application/json" },
                                "body": JSON.stringify(trTable)
                            });
                if (r.ok) {
                    cargarTabla();
                }
            }
            catch (e) {
                console.log(e);
            }   
        }
    }

    async function vaciarTabla() {
        try {
            let r = await fetch("http://web-unicen.herokuapp.com/api/groups/49/nfautoparts");
            if (r.ok) {
                let json = await r.json();
                let id = "";
                for (let i = 0; i < json.nfautoparts.length; i++) {
                    id = json.nfautoparts[i]._id;
                    borrar(id);
                }
            }
        }
        catch (e) {
            console.log(e);
        }
    }
    document.getElementById("btn-emptyTable").addEventListener("click", vaciarTabla);
   
    function obtenerDatos() {
        let inputProduct = document.getElementById("input-product");
        let inputPrice = document.getElementById("input-price");
        let inputOffer = document.getElementById("input-offer");
        let product = inputProduct.value;
        let price = inputPrice.value;
        let offer = inputOffer.value;
        if ((product != "") & (price != "") & (offer != "")) {
            let trTable = {
                "thing": {
                    "producto": product,
                    "precio": price,
                    "oferta": offer
                }
            };
            inputProduct.value = "";
            inputPrice.value = "";
            inputOffer.value = "";
            inputProduct.focus();
            return trTable;
        } else {
            return -1;
        }
    }
    document.getElementById("btn-addTableX3").addEventListener("click", () => cargarTr(3));
    document.getElementById("btn-addTableX1").addEventListener("click", () => cargarTr(1));

    async function cargarTr(n) {
        let obj = obtenerDatos(); 
        if (obj != -1) {
            let r = "";  
            try {
                for (let i = 0; i < n; i++) {
                    r = await fetch("http://web-unicen.herokuapp.com/api/groups/49/nfautoparts",
                        {
                            "method": "POST",
                            "headers": { "Content-Type": "application/json" },
                            "body": JSON.stringify(obj)
                        });
                }
                if (r.ok) {
                    cargarTabla();
                }
            }
            catch (e) {
                console.log(e);
            } 
        }
    }

    function filtrarTabla() {
        let filter = document.getElementById("input-filter").value.toLowerCase();
        let table = document.getElementById("table");
        let rowsTable = table.getElementsByTagName("tr");
        let tds = "";
        let td = "";
        let found = false;
        for (let i = 0; i < rowsTable.length; i++) {
            tds = rowsTable[i].getElementsByTagName("td");
            found = false;
            for (let j= 0; j < tds.length && !found; j++) {
                td = tds[j].innerHTML.toLowerCase();
                if (td.indexOf(filter) > -1) {
                    found = true;
                }
            }
            if (found) {
                rowsTable[i].style.display = '';
            }
            else {
                rowsTable[i].style.display = 'none';
            }
        }
    }
    document.getElementById("input-filter").addEventListener("keyup", filtrarTabla);
}

