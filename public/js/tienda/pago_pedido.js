$(document).ready(function(){
    var i = 1;
    $(".add-row2").click(function(){
        var metpago = $("#selMP option:selected").val();
        var numeroO = $("#numeroO").val();
        var precio = $("#monto").val();
        console.log(cantidad,'>=',stock);
        if (precio) { 
                    var markup = "<tr id='tr"+i+"'><td>" + i + "</td><td class='metP'>" + metpago +"</td><td class='listNo'>" + numeroO +"</td><td class='listPr'>" + precio +"</td><td><button type='submit' class='btn btn-primary delete-row' data-id='"+i+"'>Eliminar</button></td></tr>";
                    $("#tablaListado2").append(markup);
                    i = i + 1;                    
                    $("#numeroO").val(0);
                    $("#selMP").val(0);
                    $("#monto").val(0);
        }

    });

});

$(document).on('click', '.delete-row', function(){
        var tdid = $(this).data('id');
        $("#tr"+tdid).remove();
});