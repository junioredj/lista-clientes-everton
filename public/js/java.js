
function consultarNome()
{
    var nome = document.getElementById('search').value;


    var input, filter, table, tr, td, cell, i, j;
    input = document.getElementById("search");
    filter = input.value.toUpperCase();
    table = document.getElementById("table");
    tr = table.getElementsByTagName("tr");

    var nenhum_registro = true;
    for (i = 1; i < tr.length; i++) {
      tr[i].style.display = "none";
      td = tr[i].getElementsByTagName("td");

        for (var j = 0; j < td.length; j++) {
            cell = tr[i].getElementsByTagName("td")[j];
            if (cell) {
                if (cell.innerHTML.toUpperCase().indexOf(filter) > -1) {
                    nenhum_registro = false;
                    tr[i].style.display = "";
                    break;
                }
         }
      }
    }

    if(nenhum_registro)
        document.getElementById("nenhum-registro").style.display = "";
    else
        document.getElementById("nenhum-registro").style.display = "none";

}
