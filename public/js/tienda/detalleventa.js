$(document).ready(function(){
    var total = 0;
    $('.modal').modal();
    $('.select2').select2();
    $('.delPro').click(function(){
        var id_venta_Detalle = $(this).data('idvd');
        var id_sku = $(this).data('ids');
        var cant = $(this).data('cant');
        console.log(id_venta_Detalle,id_sku,cant);
        $.ajax({
                data:{
                'id_venta_Detalle' : id_venta_Detalle,    
                'id_sku' : id_sku,    
                'cant' : cant    
                },
                type: "POST",
                url: base_url+'vnd/delete_detalle',
                dataType: "json",
                beforeSend: function(){
                    loading_screen = pleaseWait({
                      logo: '',
                      backgroundColor: "#FEC00F",
                      loadingHtml: "<img src='{{ruta_img}}logoNegativo.svg' type='image/svg+xml' class='fixImg5' /><div class='sk-folding-cube'><div class='sk-cube1 sk-cube'></div><div class='sk-cube2 sk-cube'></div><div class='sk-cube4 sk-cube'></div><div class='sk-cube3 sk-cube'></div></div>"
                    });
                    $(this).addClass('disabled');
                },
                success: function(data){
                    location.reload(true); 
                    loading_screen.finish();
                }
            });
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

    var i = 1;
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
                    $("#selProducto").val(0);
                    $("#precioP").val(0);
                    $("#cantP").val(0);
                    $("#stockD").val(dispo);
                }
        }

    }); 

    $(".add-row3").click(function(){
        var nombrep = $("#selProducto2 option:selected").text();
        var id_producto = $("#selProducto2 option:selected").val();
        var id_sku = $("#selProducto2 option:selected").data('ids');
        var variacion = $("#selProducto2 option:selected").data('var');
        var precio = $("#precioP2").val();
        var cantidad = parseInt($("#cantP2").val());
        var stock = parseInt($("#stockD2").val());
        var subtotal = parseFloat(precio) * parseInt(cantidad);
        console.log(cantidad,'>=',stock);
        if (cantidad <= stock) {
            if (nombrep && id_producto != 0 && precio && cantidad) { 
                    var markup = "<tr id='tr"+i+"'><td>" + i + "</td><td class='proList' data-id='"+id_producto+"' data-sku='"+id_sku+"' data-col='"+variacion+"' >"+ nombrep +"</td><td class='cantList'>" + cantidad +"</td><td class='precioList'>" + precio +"</td><td>" + subtotal +"</td><td><button type='submit' class='btn btn-primary delete-row' data-id='"+i+"' data-pre='" + subtotal +"'>Eliminar</button></td></tr>";
                    $("#tablaCambio").append(markup);
                    i = i + 1;
                    var dispo = stock - cantidad; 
                    $("#selProducto").val(0);
                    $("#precioP").val(0);
                    $("#cantP").val(0);
                    $("#stockD").val(dispo);
                }
        }

    });

});

$(document).on('click', '.delete-row', function(){
        var tdid = $(this).data('id');
        $("#tr"+tdid).remove();
});

$(document).on('click', '.gFact', function(){
    var Pac_IdPago_Compra = $(this).data('idv');
    var razonSocial = $('#rSocial').val();
    var ruc = $('#ruc').val();
    var email = $('#email').val();
    var tlf = $('#tlf').val();
    var ubigeo = $('#ubigeoFac').val();
    var direccion = $('#direccionFac').val();
    $(this).addClass('disabled');
    console.log(Pac_IdPago_Compra,razonSocial,ruc,email,tlf,ubigeo,direccion);
    // exit();
     $.ajax({
            data:{
            'Pac_IdPago_Compra' : Pac_IdPago_Compra,
            'razonSocial' : razonSocial,
            'ruc' : ruc,
            'email' : email,
            'tlf' : tlf,
            'ubigeo' : ubigeo,
            'direccion' : direccion
            },
            type: "POST",
            url: base_url+'vnd/api_factura',
            dataType: "json",
            beforeSend: function(){
                loading_screen = pleaseWait({
              logo: '',
              backgroundColor: "#FEC00F",
              loadingHtml: "<img src='{{ruta_img}}logoNegativo.svg' type='image/svg+xml' class='fixImg5' /><div class='sk-folding-cube'><div class='sk-cube1 sk-cube'></div><div class='sk-cube2 sk-cube'></div><div class='sk-cube4 sk-cube'></div><div class='sk-cube3 sk-cube'></div></div>"
            });
                $(this).addClass('disabled');
            },
            success: function(data){
                $('.impB2').attr('disabled',false);        
                $('.impB2').attr('href',data.links.pdf);                    
                loading_screen.finish();
            }
        });
});

$(document).on('click', '.gGuia', function(){
    var Pac_IdPago_Compra = $(this).data('idv');
    var razonSocial = $('#desGuia').val();
    var ruc = $('#dniGuia').val();
    var email = $('#correoGuia').val();
    var tlf = $('#tlfGuia').val();
    var ubigeo = $('#ubigeoGuia').val();
    var direcionEnvio = $('#dirEnvio').val();
    var direccion = $('#dirGuia').val();
    $(this).addClass('disabled');

     $.ajax({
            data:{
            'Pac_IdPago_Compra' : Pac_IdPago_Compra,
            'razonSocial' : razonSocial,
            'ruc' : ruc,
            'email' : email,
            'tlf' : tlf,
            'ubigeo' : ubigeo,
            'direccion' : direccion,
            'direcionEnvio' : direcionEnvio
            },
            type: "POST",
            url: base_url+'vnd/api_guiaremision',
            dataType: "json",
            beforeSend: function(){
                loading_screen = pleaseWait({
              logo: '',
              backgroundColor: "#FEC00F",
              loadingHtml: "<img src='{{ruta_img}}logoNegativo.svg' type='image/svg+xml' class='fixImg5' /><div class='sk-folding-cube'><div class='sk-cube1 sk-cube'></div><div class='sk-cube2 sk-cube'></div><div class='sk-cube4 sk-cube'></div><div class='sk-cube3 sk-cube'></div></div>"
            });
                $(this).addClass('disabled');
            },
            success: function(data){
                $('.impB3').attr('disabled',false);                         
                loading_screen.finish();
            }
        });
});

$(document).on('click', '.gBoleta', function(){
    var Pac_IdPago_Compra = $(this).data('idv');
    var razonSocial = $('#razonSocial2').val();
    var numerodoc = $('#numerodoc').val();
    var email = $('#email').val();
    var tlf = $('#tlf').val();
    var ubigeo = $('#ubigeo').val();
    var direccion = $('#direccion').val();
    var tipod = $('#selectDoc option:selected').val();
    console.log(Pac_IdPago_Compra,razonSocial,numerodoc,email,tlf,ubigeo,direccion,tipod);
                $(this).addClass('disabled');
     $.ajax({
            data:{
            'Pac_IdPago_Compra' : Pac_IdPago_Compra,
            'razonSocial' : razonSocial,
            'numerodoc' : numerodoc,
            'email' : email,
            'tlf' : tlf,
            'ubigeo' : ubigeo,
            'direccion' : direccion,
            'tipod' : tipod
            },
            type: "POST",
            url: base_url+'vnd/api_boleta',
            dataType: "json",
            beforeSend: function(){
            loading_screen = pleaseWait({
              logo: '',
              backgroundColor: "#FEC00F",
              loadingHtml: "<img src='{{ruta_img}}logoNegativo.svg' type='image/svg+xml' class='fixImg5' /><div class='sk-folding-cube'><div class='sk-cube1 sk-cube'></div><div class='sk-cube2 sk-cube'></div><div class='sk-cube4 sk-cube'></div><div class='sk-cube3 sk-cube'></div></div>"
            });
                $(this).addClass('hide');
            },
            success: function(data){
                // console.log(data.links.pdf);
                $('.impB').attr('disabled',false);        
                $('.impB').attr('href',data.links.pdf);        
                loading_screen.finish();
            }
        });
});

$(document).on('click', '.confV', function(){
    var Pac_IdPago_Compra = $(this).data('idv');
    $(this).addClass('disabled');
     $.ajax({
            data:{
            'Pac_IdPago_Compra' : Pac_IdPago_Compra  
            },
            type: "POST",
            url: base_url+'vnd/confirmaVenta',
            dataType: "json",
            beforeSend: function(){
                loading_screen = pleaseWait({
              logo: '',
              backgroundColor: "#FEC00F",
              loadingHtml: "<img src='{{ruta_img}}logoNegativo.svg' type='image/svg+xml' class='fixImg5' /><div class='sk-folding-cube'><div class='sk-cube1 sk-cube'></div><div class='sk-cube2 sk-cube'></div><div class='sk-cube4 sk-cube'></div><div class='sk-cube3 sk-cube'></div></div>"
            });
                $(this).addClass('disabled');
            },
            success: function(data){
                location.reload(true);                  
                loading_screen.finish();
            }
        });
});

$(document).on('click', '.anuV', function(){
    var Pac_IdPago_Compra = $(this).data('idv');
    $(this).addClass('disabled');
     $.ajax({
        data:{
        'Pac_IdPago_Compra' : Pac_IdPago_Compra  
        },
        type: "POST",
        url: base_url+'vnd/anularVenta',
        dataType: "json",
        beforeSend: function(){
            $(this).addClass('disabled');
            loading_screen = pleaseWait({
              logo: '',
              backgroundColor: "#FEC00F",
              loadingHtml: "<img src='{{ruta_img}}logoNegativo.svg' type='image/svg+xml' class='fixImg5' /><div class='sk-folding-cube'><div class='sk-cube1 sk-cube'></div><div class='sk-cube2 sk-cube'></div><div class='sk-cube4 sk-cube'></div><div class='sk-cube3 sk-cube'></div></div>"
            });
        },
        success: function(data){
            location.reload(true);
            loading_screen.finish();
        }
    });
});

$(document).on('click', '.addpedido', function(){
    var Pac_IdPago_Compra = $(this).data('idv');
    var idps = [];
    var nombresP = [];
    var cantsP = [];
    var skus = [];
    var colores = [];
    var preciosP = [];
    $.each($(".proList"), function(){
        idps.push($(this).data("id"));
        nombresP.push($(this).text());
        skus.push($(this).data('sku'));
        colores.push($(this).data('col'));
    });
    $.each($(".cantList"), function(){
        cantsP.push($(this).text());
    });
    $.each($(".precioList"), function(){
        preciosP.push($(this).text());
    });
    $.ajax({
        data:{
        'Pac_IdPago_Compra' : Pac_IdPago_Compra,    
        'skus' : skus,    
        'cantsP' : cantsP, 
        'preciosP' : preciosP
        },
        type: "POST",
        url: base_url+'vnd/addproductopedido',
        dataType: "json",
        beforeSend: function(){
            $(this).addClass('disabled');
            loading_screen = pleaseWait({
              logo: '',
              backgroundColor: "#FEC00F",
              loadingHtml: "<img src='{{ruta_img}}logoNegativo.svg' type='image/svg+xml' class='fixImg5' /><div class='sk-folding-cube'><div class='sk-cube1 sk-cube'></div><div class='sk-cube2 sk-cube'></div><div class='sk-cube4 sk-cube'></div><div class='sk-cube3 sk-cube'></div></div>"
            });
        },
        success: function(data){
            $(this).removeClass('disabled');
            location.reload(true);
            loading_screen.finish();
        }
    });
});

$(document).on('click', '.addCambio', function(){
    var Pac_IdPago_Compra = $(this).data('idv');
    var idps = [];
    var nombresP = [];
    var cantsP = [];
    var skus = [];
    var colores = [];
    var preciosP = [];
    $.each($(".proList"), function(){
        idps.push($(this).data("id"));
        nombresP.push($(this).text());
        skus.push($(this).data('sku'));
        colores.push($(this).data('col'));
    });
    $.each($(".cantList"), function(){
        cantsP.push($(this).text());
    });
    $.each($(".precioList"), function(){
        preciosP.push($(this).text());
    });
    $.ajax({
        data:{
        'Pac_IdPago_Compra' : Pac_IdPago_Compra,    
        'skus' : skus,    
        'cantsP' : cantsP, 
        'preciosP' : preciosP
        },
        type: "POST",
        url: base_url+'vnd/addproductopedidocambio',
        dataType: "json",
        beforeSend: function(){
            $(this).addClass('disabled');
            loading_screen = pleaseWait({
              logo: '',
              backgroundColor: "#FEC00F",
              loadingHtml: "<img src='{{ruta_img}}logoNegativo.svg' type='image/svg+xml' class='fixImg5' /><div class='sk-folding-cube'><div class='sk-cube1 sk-cube'></div><div class='sk-cube2 sk-cube'></div><div class='sk-cube4 sk-cube'></div><div class='sk-cube3 sk-cube'></div></div>"
            });
        },
        success: function(data){
            $(this).removeClass('disabled');
            location.reload(true);
            loading_screen.finish();
        }
    });
});

$(document).on('click', '.updateCliente', function(){
    var Usu_IdUsuario = $(this).data('usu');
    var Pac_IdPago_Compra = $(this).data('idp');
    var nombre = $('.nomV').text();
    var dni = $('.dniV').text();
    var telefono = $('.tlfV').text();
    var ruc = $('.rucV').text();
    var direccion = $('.dirV').text();
    var referencia = $('.refV').text();
    var agencia = $('.ageV').text();
    var estado = $('.selecEstado :selected').val();
    var Pac_Envio = $('.envioV').text();


    $.ajax({
        data:{
        'Pac_IdPago_Compra' : Pac_IdPago_Compra,    
        'Usu_IdUsuario' : Usu_IdUsuario,    
        'nombre' : nombre,    
        'dni' : dni,    
        'telefono' : telefono,    
        'ruc' : ruc,    
        'direccion' : direccion, 
        'referencia' : referencia,
        'agencia' : agencia,
        'estado' : estado,
        'Pac_Envio' : Pac_Envio,
        },
        type: "POST",
        url: base_url+'vnd/updatePedido',
        dataType: "json",
        beforeSend: function(){
            $(this).addClass('disabled');
            loading_screen = pleaseWait({
              logo: '',
              backgroundColor: "#FEC00F",
              loadingHtml: "<img src='{{ruta_img}}logoNegativo.svg' type='image/svg+xml' class='fixImg5' /><div class='sk-folding-cube'><div class='sk-cube1 sk-cube'></div><div class='sk-cube2 sk-cube'></div><div class='sk-cube4 sk-cube'></div><div class='sk-cube3 sk-cube'></div></div>"
            });
        },
        success: function(data){
            location.reload(true);
            $(this).removeClass('disabled');
            loading_screen.finish();
        }
    });
});