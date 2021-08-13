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

});

$(document).on('click', '.delete-row', function(){
        var tdid = $(this).data('id');
        $("#tr"+tdid).remove();
});

$(document).on('click', '.gFact', function(){
    var Pac_IdPago_Compra = $(this).data('idv');
    var razonSocial = $('#razonSocial').val();
    var ruc = $('#ruc').val();
    var email = $('#email').val();
    var tlf = $('#tlf').val();
    var ubigeo = $('#ubigeo').val();
    var direccion = $('#direccion').val();
    $(this).addClass('disabled');

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