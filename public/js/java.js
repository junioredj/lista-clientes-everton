
function consultarNome()
{
    var nome = document.getElementById('search').value;


    var input, filter, table, tr, td, cell, i, j;
    input = document.getElementById("search");
    filter = input.value.toUpperCase();
    table = document.getElementById("table");
    tr = table.getElementsByTagName("tr");

    var nenhum_registro = true;
    for (i = 0; i < tr.length; i++) {
      tr[i].style.display = "none";

      td = tr[i].getElementsByTagName("td");



        for (var j = 0; j < td.length; j++)
        {
            cell = tr[i].getElementsByTagName("td")[j];


            if (cell)
            {
                console.log(cell)
                console.log(cell.getElementsByTagName('div')[0].innerHTML)


                if (cell.getElementsByTagName('div')[0].innerHTML.toUpperCase().indexOf(filter) > -1) {
                    nenhum_registro = false;
                    tr[i].style.display = "";

                    if(filter != "")
                    {
                        cell.style.backgroundColor = "#525255";
                        cell.getElementsByTagName('strong')[0].style.backgroundColor = "#525255";
                        cell.getElementsByTagName('div')[0].style.backgroundColor = "#525255";
                    }
                    else
                    {
                        cell.style.backgroundColor = '#34353a'
                        cell.getElementsByTagName('strong')[0].style.backgroundColor = "#34353a";
                        cell.getElementsByTagName('div')[0].style.backgroundColor = '#34353a'
                    }

                }
                else
                {
                    //Caso não necontre nenhum registro vem para cá
                    cell.style.backgroundColor = '#34353a'
                        cell.getElementsByTagName('strong')[0].style.backgroundColor = "#34353a";
                        cell.getElementsByTagName('div')[0].style.backgroundColor = '#34353a'


                }
            }
      }
    }

    if(nenhum_registro)
    {

        document.getElementById("nenhum-registro").style.display = "";
    }
    else
        document.getElementById("nenhum-registro").style.display = "none";

}
