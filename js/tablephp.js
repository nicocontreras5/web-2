
    "use strict"

    function resaltarTabla() {
        let table = document.getElementById("table");
        let rowsTable = table.getElementsByTagName("tr");
        for (let i = 0; i < rowsTable.length; i++) {
            let tds = rowsTable[i].getElementsByTagName("td");
            if( tds[1].innerHTML == "Si"){
               rowsTable[i].className += " resaltado-table";
            }
        }
    }
    resaltarTabla();

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

