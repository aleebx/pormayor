// valid_empty_solo(): valida si esta vacio uno o varios elementos inputs en particular.
// args: id_elementos
function valid_empty_solo_material(val)
{

    var retorno = 0;
    var cont = 0;
    var len = val.length;
    $(val).each(function (i, value) {
        var fd = $("#" + value).val().length;

        // si se encuentra vacio alguno de los inputs.                
        if (fd == 0)
        {
            var clase = $("#" + [value]).attr("class");
            $('#' + [value]).removeClass(clase).addClass(clase + " invalid");
            cont--;

        }
        if (fd !== 0)
        {

            var clase = $("#" + [value]).attr("class");
            $('#' + [value]).removeClass(clase).addClass("validate");
            cont++;

        }
        if (cont == len)
        {

            retorno = 1;

        }


    });

    return retorno;

}