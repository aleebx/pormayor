$(document).on('blur', '#tlf', function(){
    var tlf = $(this).val();
    $('#listado').load(base_url+'vnd/buscar_telefono',{tlf:tlf});
});
$(document).on('blur', '#DNIcliente', function(){
    var dni = $(this).val();
    $('#listado').load(base_url+'vnd/buscar_dni',{dni:dni});
});