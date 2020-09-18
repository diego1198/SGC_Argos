$(document).ready(function () {
    load_gestion('sin_gestion');
});

function load_gestion(caso){
    $.ajax({
        type: "GET",
        url: "ajax/gestiones/gestiones.php?action=list&case="+caso,
        success: function (response) {
            $('#loader_'+caso).html(response);
            $('#table_'+caso).dataTable();
        }
    });
}