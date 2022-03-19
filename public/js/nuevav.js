$(document).ready(function(){
    $('.select2').select2();
    var i = 1;
    sut1 = 0;
    $(".add-row").click(function(){
    var nombrep = $("#selProducto option:selected").text();
    var id_producto = $("#selProducto option:selected").val();
    var id_sku = $("#selProducto option:selected").data('ids');
    var variacion = $("#selProducto option:selected").data('var');
    var precio = $("#precioP").val();
    var cantidad = parseInt($("#cantP").val());
    var stock = parseInt($("#stockD").val());
    var subtotal = parseFloat(precio) * parseInt(cantidad);
    console.log(cantidad,'>=',stock);
    if (cantidad <= stock) {
        if (nombrep && id_producto != 0 && precio && cantidad) { 
                var markup = "<tr id='tr"+i+"'><td>" + i + "</td><td class='proList' data-id='"+id_producto+"' data-sku='"+id_sku+"' data-col='"+variacion+"' >"+ nombrep +"</td><td class='cantList'>" + cantidad +"</td><td class='precioList'>" + precio +"</td><td>" + subtotal +"</td><td><button type='submit' class='btn btn-primary delete-row' data-id='"+i+"' data-pre='" + subtotal +"'>Eliminar</button></td></tr>";
                $("#tablaListado").append(markup);
                i = i + 1;
                var dispo = stock - cantidad; 
                sut1 = sut1 + subtotal; 
                $("#selProducto").val(0);
                $("#precioP").val(0);
                $("#cantP").val(0);
                $("#stockD").val(dispo);
                $("#subT1").text(sut1);          
            }
    }

    }); 
    $('#selProducto').change(function(){
        var precio = $(this).find(':selected').data('pre');
        var stoc = $(this).find(':selected').data('dispo');
        console.log(precio);

        $('#precioP').val(precio);
        $('#stockD').val(stoc);
    });

    $('#selProducto2').change(function(){
        // var precio = $(this).find(':selected').data('pre');
        var stoc = $(this).find(':selected').data('dispo');
        // console.log(precio);

        // $('#precioP2').val(precio);
        $('#stockD2').val(stoc);
    });

    if ($("#selecRegion").data('valor') != "") {
    $("#selecRegion").val($("#selecRegion").data('valor'));
    $("#selecRegion").trigger('change'); 
  }

    $("#selecRegion").change(function(){
      var idRegion = $(this).val();
      $.ajax({
         data:{
         'idRegion' : idRegion
         },
         type: "POST",
         url: base_url+'productos/load_provincia', 
         dataType: "json",
         success: function(data){
            $('#provincia').load(base_url+'productos/Select_Provincia',{datos:data});
            $("#provincia select").trigger('change');
         },
         error: function(data) {
           alert('error');
         }
      });
    });
}); 
$(document).on('click', '.delete-row', function(){
    var tdid = $(this).data('id');
    var subeli = $(this).data('pre');    
    var tsub = $("#subT1").text();
    totals = tsub - subeli;
    $("#subT1").text(totals);
    sut1 = totals;
    $("#tr"+tdid).remove();
});
  
$(document).on('change', '#tipoVenta', function(){
    var tipo = $(this).val();
    if (tipo == "NO") {
        $('#delivery').val(20);
    }else if(tipo == "TIENDA"){
        $('#delivery').val(0);
    }else if(tipo == "TDO"){
        $('#delivery').val(10);
    }
});
 
$(document).on('blur', '#DNIcliente', function(){
    var number = $(this).val();
    if (number.length > 7) {
    $.ajax({
        data:{
        'dni' : number
        },
        type: "POST",
        url: base_url+'venta/buscar_dni',
        dataType: "json",
        beforeSend: function(){
           $('#preload').html('<div class="progress"><div class="indeterminate"></div></div>');
        },
        success: function(person){
            console.log(person);
            if (person) {
                $('#preload').html('');
                $('#nombreComprador').val(person['Per_Nombre']);
                $('#correo').val(person['Usu_Correo']);
                $('#idcliente').val(person['Usu_IdUsuario']);
                $('#vendedor').val(person['vendedor']);
                $('#tlf').val(person['Per_Telefono']);
                $('#DNIcliente').val(number);
                if (!person['Pag_Direccion']) {$('#direccionComprador').val(person['Per_Direccion']);}else{$('#direccionComprador').val(person['Pag_Direccion']);}
                $('#dintComprador').val(person['Pag_DtoInt']);
                $('#urbComprador').val(person['Pag_Lote']);
                $('#referenciaComprador').val(person['Pag_Referencia']);
                $('#nloteComprador').val(person['Pag_Lote']);
                if (person['Pag_idregion']) {
                    $("#selecRegion").val(person['Pag_idregion']);
                    $("#selecRegion").trigger('change');
                    setTimeout(function(){ 
                        $('#provincia select').val(person['Pag_idprovincia']);
                        $("#selProvincia").trigger('change');
                    }, 3000);
                    setTimeout(function(){ 
                        $('#distrito select').val(person['Pag_iddistrito']);
                    }, 5000); 
                }         
            }else{
                $('#preload').text("DNI no encontrado");
            }
        }
    });          
    }else{
         $('#preload').text("DNI incompleto");
    }
});
 
$(document).on('blur', '#tlf', function(){
    var tlf = $(this).val();
    if (tlf.length > 8) {
    $.ajax({
        data:{
        'tlf' : tlf
        },
        type: "POST",
        url: base_url+'venta/buscar_telefono',
        dataType: "json",
         beforeSend: function(){
           $('#preload').html('<div class="progress"><div class="indeterminate"></div></div>');
        },
        success: function(person){
            if (person) {
                console.log(person);
                $('#preload').html('');
                $('#nombreComprador').val(person['Per_Nombre']);
                $('#vendedor').val(person['vendedor']);
                $('#correo').val(person['Usu_Correo']);
                $('#idcliente').val(person['Usu_IdUsuario']);
                $('#tlf').val(tlf);
                $('#DNIcliente').val(person['Per_Dni']);
                if (!person['Pag_Direccion']) {$('#direccionComprador').val(person['Per_Direccion']);}else{$('#direccionComprador').val(person['Pag_Direccion']);}
                $('#dintComprador').val(person['Pag_DtoInt']);
                $('#urbComprador').val(person['Pag_Lote']);
                $('#referenciaComprador').val(person['Pag_Referencia']);
                $('#nloteComprador').val(person['Pag_Lote']);
                if (person['Pag_idregion']) {
                    $("#selecRegion").val(person['Pag_idregion']);
                    $("#selecRegion").trigger('change');
                    setTimeout(function(){ 
                        $('#provincia select').val(person['Pag_idprovincia']);
                        $("#selProvincia").trigger('change');
                    }, 300);
                    setTimeout(function(){ 
                        $('#distrito select').val(person['Pag_iddistrito']);
                    }, 600); 
                }               
            }else{
                $('#preload').text("Télefono no encontrado");
            }
        }
    });
    }else{
       $('#preload').text("Télefono incompleto");
    }
});

$(document).on('click', '.addPedido', function(){
    $(this).addClass('disabled');
    var idvendedor =  $(this).data('idu');
    var cantsP = [];
    var skus = [];
    var preciosP = [];
    var tipoVenta = $('#tipoVenta').val();
    var idusuario = $('#idcliente').val();
    var region = $('#selecRegion').val();
    var provincia = $('#selProvincia').val();
    var distrito = $('#selDistrito').val();
    var direccion = $('#direccionComprador').val();
    var referencia = $('#referenciaComprador').val();
    var lote = $('#nloteComprador').val();
    var dpint = $('#dintComprador').val();
    var urbanizacion = $('#urbComprador').val();
    var DNIcliente = $('#DNIcliente').val();
    var tlf = $('#tlf').val();
    var delivery = $('#delivery').val();
    var subtotBd = $('#subT1').text();
    $.each($(".proList"), function(){
        skus.push($(this).data('sku'));
    });
    $.each($(".cantList"), function(){
        cantsP.push($(this).text());
    });
    $.each($(".precioList"), function(){
        preciosP.push($(this).text());
    });
    console.log(cantsP,idusuario,subtotBd,distrito,direccion);
    if (cantsP && idusuario && subtotBd > 0 && distrito && direccion) {
    $.ajax({
        data:{    
        'skus' : skus,    
        'cantsP' : cantsP, 
        'preciosP' : preciosP,
        'tipoVenta' : tipoVenta,
        'idusuario' : idusuario,
        'region' : region,
        'provincia' : provincia,
        'distrito' : distrito,
        'direccion' : direccion,
        'referencia' : referencia,
        'lote' : lote,
        'dpint' : dpint,
        'urbanizacion' : urbanizacion,
        'DNIcliente' : DNIcliente,
        'tlf' : tlf,
        'delivery' : delivery,
        'subtotBd' : subtotBd,
        'idvendedor' : idvendedor
        },
        type: "POST",
        url: base_url+'venta/addpedido',
        dataType: "json",
        beforeSend: function(){
           $('#preAddp').html('<h4>CARGANDO PEDIDO...</h4><br><div class="progress"><div class="indeterminate"></div></div>');
        },
        success: function(data){
            if (data) {                
            $('#preAddp').html('');
            $(this).removeClass('disabled');
            location.href=base_url+'vnd/detalle_q/'+data;
            }else{
            $(this).removeClass('disabled');
            $('#preAddp').html('<h4>ERROR AL CARGAR EL PEDIDO</h4><br>');
            }
        },
        error: function(data){
            $(this).removeClass('disabled');
            $('#preAddp').html('<h4>ERROR AL CARGAR EL PEDIDO</h4><br>');
        }
    });
    }else{
        $(this).removeClass('disabled');
        $('#preAddp').html('<h4>DEBE COMPLETAR TODOS LOS CAMPOS</h4><br>');
    }
});