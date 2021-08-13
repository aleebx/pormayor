var $panel_headers = $('.collapSeguro').find('> li > .collapsible-header');
$('.collapSeguro').off('click.collapse', '.collapsible-header');
$panel_headers.off('click.collapse').css('pointer-events', 'none'); 

//Ocultar iniciales
$('.cotizacionSeguro').hide();
$('.cotizacionAcuerdo').hide();
$('.prevBtn').hide();
$('.verComprasBtn').hide();
$('.cambiarBtn').hide();
$('.modal').modal();

//Variables
var array_compra = [];
var array_compra2 = [];
var array_compra3B = {};
var totalB;
var total;
var BancoSelec="";
var IdTienda;
var idCompra;
var totalCotizado = true
var checkEmpty;
var totalFinal;

$(document).ready(function(){
  $('.collapsible').collapsible();
  $('select').material_select();

  //Tutorial 
  var introInfo = introJs();
  introInfo.setOptions({ 
      'showBullets': false, 
      'showProgress': true, 
      'exitOnEsc': false,
      'exitOnOverlayClick': false,
      'nextLabel': '<i class="material-icons">navigate_next</i>',
      'prevLabel': '<i class="material-icons">navigate_before</i>',
      'doneLabel': 'CERRAR TUTORIAL',
      'scrollToElement': true,
  });

  $('.tutorialBtn').click(function(){
    introInfo.start();
  });

  //************

  $('.cbProducto').click(function(){
    calcular_totales();

    var checkEmpty = $('input:checked').length;
    if (checkEmpty == 0){ 
      $("#btnProcesarCompra").prop('disabled', true);
    }else{
      $("#btnProcesarCompra").prop('disabled', false);
    }
  });

  $('.cantidad').keyup(function(){
    calcular_totales();
  });

  $('#btnProcesarCompra').click(function(){

    IdTienda =  $("#btnProcesarCompra").data("idtienda");
    var valido = false;
    var tipo_precio = $("#tdTotalDscto").hasClass("tachado");

    if(tipo_precio){
      total = $('#totalReal').val();
      totalB = parseFloat($('#totalReal').text());
    }
    else
    {
      total = $('#totalDscto').val();
      totalB = parseFloat($('#totalDscto').text());
    }
    
    console.log(totalB);
    var i = 0;

    $('.cbProducto').each(function(){
      if($(this).is(':checked')){
        var id_sku = $(this).val();
        var cantidad = $('#cantidad'+id_sku).val();
        var nompro = $(this).data('nompro');
        var imgpro = $(this).data('img');

        if(tipo_precio){
          var precio = $('#precioventa'+id_sku).text();
          precio = precio.slice(0, -3);
          precio = precio.replace(/ /g, '.');
          precio = precio.replace('.', '');
        }
        else{
          var precio = $('#preciocotizado'+id_sku).text();
          precio = parseFloat(precio);
        }

        array_compra[i] = [id_sku, precio, cantidad];
        array_compra2[i] = [id_sku];
        // array_compra3[i] = [imgpro, nompro, cantidad];

        //Acuerdo
        array_compra3B[i] = {};
        array_compra3B[i]['imgpro'] = imgpro;
        array_compra3B[i]['nompro'] = nompro;
        array_compra3B[i]['cantidad'] = cantidad;
        array_compra3B[i]['precio'] = precio;
        i++;

        valido = true;
      }
    });

    if(valido)
    {
      $('#tipoPagoModel').modal('open');
      $('#tipoPagoModel').css('z-index', '2000');
    }
    else
    {
      Materialize.toast('<i class="material-icons left ">warning</i>Ningún producto esta seleccionado', 2000, 'rounded warningToast');
    }
  });
});

//Tipos de pagos
$('.pagoSeguroBtn').click(function(){
    $('#tipoPagoModel').modal('close');
    $('.nextBtn').slideUp(500);

    $('.cotizacionStep1').slideUp(500, function() {
      $('.cotizacionSeguro').slideDown(500);
      $('.prevBtn').slideDown(250);
      $('.cotizacionSeguro').slideDown(500);

      $('.prevBtn').slideDown(250);
      $('.collapSeguro').collapsible('close', 0);
      $('.collapSeguro').collapsible('open', 0);
    });

    var filaCod;
    var contenido = "<table class='bordered'>" +
              "<thead>"+
                "<tr>"+
                  "<th>Producto</th>"+
                  "<th>Importe</th>"+
                "</tr>"+
              "</thead>"+
              "<tbody>";

    $(array_compra2).each(function(){
      filaCod = this;
      var nombrePro = $("#profinal"+filaCod+" .nombrePro").text();
      var varNombre = $("#profinal"+filaCod+" .varNombre").text();
      var cantidad = $("#profinal"+filaCod+" .cantidad").val();
      var uniMed = $("#profinal"+filaCod+" .uniMed").text();
      var importe = $("#importe"+filaCod).text();
      contenido+= '<tr>'+ 

      '<td>'+ nombrePro + '<br>' +
      '<small class="enfasisB">'+ varNombre+'</small>'+ '<br>' +
      '<b style="font-size:14px">'+ cantidad+' '+ uniMed + '</b>'+
      '</td>'+

      '<td>'+
      '<span>S/ '+ importe+'</span>'+
      '</td>'+

      '</tr>';
    });
    contenido+= "</tbody>"+
                    "</table>";
    
    // totalB = totalB.slice(0, -3);
    // totalB = totalB.replace(/ /g, '.');
    // totalB = totalB.replace('.', '');
    
    $('.subTotalCompra').text(parseFloat(totalB));
    $('.totalCompra').text(addCommas((parseFloat(totalB) + 3).toFixed(2)));
    $('.resumenProductos').empty();
    $('.resumenProductos').append(contenido);
});

$('.pagoAcuerdoBtn').click(function() {
  // totalB = totalB.slice(0, -3);
  // totalB = totalB.replace(/ /g, '.');
  // totalB = totalB.replace('.', '');
  $.confirm({
        icon: 'payment',
        theme: 'modern',
        closeIcon: false,
        animation: 'scale',
        type: 'orange',
        title: 'Finalización de compra',
        columnClass: 'small',
        content: "Al continuar <b>tu compra será registrada</b> y esta acción no podrá deshacerse. Verifica que todos los datos sean correctos",
        draggable: false,
        buttons: {
          Continuar: {
            btnClass: 'btn pormayorUnico',
            action: function (){
              $('#tipoPagoModel').modal('close');
              var loading_screen = pleaseWait({
                logo: '',
                backgroundColor: "#1313137d",
                loadingHtml: "<i style='font-size:70px' class='white-text material-icons'>payment</i><h4 style='font-weight: 600;' class='white-text'>Registrando Pago...</h4><div class='sk-folding-cube'><div class='sk-cube1 sk-cube'></div><div class='sk-cube2 sk-cube'></div><div class='sk-cube4 sk-cube'></div><div class='sk-cube3 sk-cube'></div></div>"
              });
              $.ajax({
                data:{
                  'array_compra' : array_compra,
                  'total': parseFloat(totalB),
                  'id_cotizacion': $('#id_cotizacion').val(),
                  'id_tienda': IdTienda,
                  'array_correo' : array_compra3B,
                },
                type: "POST",
                url: base_url+'comprador/compra/ajax_procesar_compra_acuerdo',
                success: function(data){
                    loading_screen.finish();
                    $('.nextBtn').slideUp(500);
                    $('.cotizacionStep1').slideUp(500, function() {
                      $('.cotizacionAcuerdo').removeClass('hide');
                      $('.verComprasBtn').removeClass('hide');
                      $('.cambiarBtn').removeClass('hide');

                      $('.cotizacionAcuerdo').slideDown(500);
                      $('.verComprasBtn').slideDown(250);
                      $('.cambiarBtn').slideDown(250);
                    });

                    var filaCod;
                    var contenido = "<table class='bordered'>" +
                              "<thead>"+
                                "<tr>"+
                                  "<th>Producto</th>"+
                                  "<th>Importe</th>"+
                                "</tr>"+
                              "</thead>"+
                              "<tbody>";

                    $(array_compra2).each(function(){
                      filaCod = this;
                      var nombrePro = $("#profinal"+filaCod+" .nombrePro").text();
                      var varNombre = $("#profinal"+filaCod+" .varNombre").text();
                      var cantidad = $("#profinal"+filaCod+" .cantidad").val();
                      var uniMed = $("#profinal"+filaCod+" .uniMed").text();
                      var importe = $("#importe"+filaCod).text();
                      contenido+= '<tr>'+ 

                      '<td>'+ nombrePro + '<br>' +
                      '<small class="enfasisB">'+ varNombre+'</small>'+ '<br>' +
                      '<b style="font-size:14px">'+ cantidad+' '+ uniMed + '</b>'+
                      '</td>'+

                      '<td>'+
                      '<span>S/ '+ importe+'</span>'+
                      '</td>'+

                      '</tr>';
                    });
                    contenido+= "</tbody>"+
                                    "</table>";

                    $('.totalCompra').text("S/ "+ parseFloat(totalB).toFixed(2));
                    $('.resumenProductos').empty();
                    $('.resumenProductos').append(contenido);
                    $.confirm({
                        icon: 'thumb_up',
                        theme: 'modern',
                        closeIcon: false,
                        animation: 'scale',
                        type: 'green',
                        title: 'Compra Registrada',
                        columnClass: 'small',
                        content: "La compra fue registrada exitosamente en nuestro sistema. Toda la información de la tienda fue enviada adicionalmente a <b>tu correo </b>.",
                        draggable: false,
                        buttons: {
                          Cerrar: {
                             
                          }
                        }  
                    });
                }
              });
            }
          },
          Cancelar: {
            action: function (){
              
            }   
          }
        }
  });
});

//Funciones collpasible
$('.prevBtn').click(function(){
  $('.prevBtn').slideUp(500);
  $('.verComprasBtn').slideUp(500);
  
  
  $('.cotizacionAcuerdo').slideUp(500, function() {
    $('.cotizacionStep1').slideDown(500);
    $('.nextBtn ').slideDown(250);
  });

  $('.cotizacionSeguro').slideUp(500, function() {
    $('.cambiarBtn').slideUp(500);
  });
});
$('.prevCompraSeguraBtn').click(function(){
  $('.collapSeguro').collapsible('open', 0);
  $('.collapSeguro').collapsible('close', 1);
  $('#dirEnvio').focus();
});
  $('.verComprasBtn').click(function(){
    window.location.href = base_url+'comprador/compra/';

  });

$('.contEnvio').click(function(){
  var campoVacio = false;
  $('.validate').each(function(){
    if ($(this).val() == ""){
      campoVacio = true;
    }
  });
  if (campoVacio == false){
    $('.dirResumenEnvio').text($('#dirEnvio').val());
    if ($('#rucEmpresaEnvio').val() != "" && $('#nomEmpresaEnvio').val() != ""){
        $('#rucResumenContainer').removeClass('hide');
        $('.rucResumenEnvio').text($('#rucEmpresaEnvio').val());
        $('.nomEmpreResumenEnvio').text($('#nomEmpresaEnvio').val());
    }
    $('.collapSeguro').collapsible('open', 1);
  }else{
    Materialize.toast('<i class="material-icons left ">error</i>Ingresa una dirección de envio y un teléfono valido', 2000, 'rounded errorToast');
  }
  
});

$('.bancos').click(function(){
  $('.bancos').each(function(){
    $(this).css('opacity', '0.5');
  });
  BancoSelec = $(this).data('banco');
  $(this).css('opacity', '1');
});


$("#rucEmpresaEnvio").blur(function(){
    var ruc = $("#rucEmpresaEnvio").val();
    if(ruc.trim() != ''){
      if(ruc.length != 11){
        Materialize.toast('<i class="material-icons left ">error</i>Este RUC es incorrecto', 2000, 'rounded errorToast');
        $("#rucEmpresaEnvio").focus();
      }
      else{
        datos_sunat(ruc, 2);
      }
    }else{
      Materialize.toast('<i class="material-icons left ">error</i>Este RUC es incorrecto', 2000, 'rounded errorToast');
      $("#rucEmpresaEnvio").focus();
    }
  });

//Finalizar compra
$('.pagarBtn').click(function(){
  //console.log(array_compra3);
  totalFinalcs = parseFloat(totalB)+3;
  console.log(totalFinalcs,totalB);

  if(BancoSelec != ""){
    $.confirm({
        icon: 'payment',
        theme: 'modern',
        closeIcon: true,
        animation: 'scale',
        type: 'green',
        title: 'Finalización de compra',
        columnClass: 'small',
        content: "<b>Revisa que todos que los datos sean correctos</b>. Una vez continues esta compra no podrá deshacerse. Te enviaremos enviado un <b>Correo electronico</b> con toda la información que necesitas",
        draggable: false,
        buttons: {
          Continuar: {
            text: '<i class="material-icons left " style="top: -3px;position: relative;">verified_user</i>Pagar',
            btnClass: 'btn pormayorUnico',
            action: function (){
              $.ajax({
                data:{
                  'array_compra' : array_compra,
                  'total': totalFinalcs,
                  'id_cotizacion': $('#id_cotizacion').val(),
                  'id_tienda': IdTienda,
                  'Vef_DirEnvio': $('#dirEnvio').val(),
                  'Vef_RUC': $('#rucEmpresaEnvio').val(),
                  'Vef_RazonSocial': $('#nomEmpresaEnvio').val(),
                  'Vef_Banco': BancoSelec,
                  'nombre_usuario': $('#nomPerEnvio').val(),
                  'correo_usuario': $('#correoEnvio').val(),
                  'subTotalCompra': totalB,
                  'array_correo' : array_compra3B,
                  'BancoSelec' : BancoSelec
                },
                type: "POST",
                url: base_url+'comprador/compra/ajax_procesar_compra',
                success: function(data){
                  window.location.href = base_url+'comprador/compra/detalle/'+data;
                }
              });
            }
          },
          Cancelar: {
            action: function (){
              
            }
          }
        }
    });
  }else{
    Materialize.toast('<i class="material-icons left ">warning</i>Selecciona un banco para pagar', 2000, 'rounded warningToast');  
  }
});

//IMPRIMIR
$('.descargarCoti').click(function(){
  // totalB = totalB.slice(0, -3);
  // totalB = totalB.replace(/ /g, '.');
  // totalB = totalB.replace('.', '');

  $.ajax({
    data:{
      'total': totalB,
      'id_cotizacion': $('#id_cotizacion').val(),
      'id_tienda': IdTienda,
      'array_correo' : array_compra3B,
    },
    type: "POST",
    url: base_url+'comprador/compra/print_data',
    success: function(data){
      location.href=base_url+'comprador/compra/print_delete/'+data;
    }
  });
});

//FUNCIONES

function calcular_totales(){
  var totalCotizado = calcular_total('cotizado');
  var totalCotizado_ = $('#totalDscto_').val();
  var porcentaje = $('#porcentaje').val()/100;

  if(totalCotizado < totalCotizado_* porcentaje){
    $('.cbProducto').each(function(){
      var id_sku = $(this).val();
      var cantidad = $('#cantidad'+id_sku).val();

      if($(this).is(':checked')){
        $('#precioventa'+id_sku).removeClass('tachado');
        $('#precioventa'+id_sku).addClass('precioFinal');
        $('#preciocotizado'+id_sku).removeClass('precioFinal');
        $('#preciocotizado'+id_sku).addClass('tachado');

        $('#precioA'+id_sku).text($('#precioventa'+id_sku).text());
        $('#precioB'+id_sku).text($('#preciocotizado'+id_sku).text());

        //precioFinal
        $('#profinal'+id_sku).css('opacity', 1 );
        $('#tdimporte'+id_sku).removeClass('tachado');
        $('#cantidad'+id_sku).prop( "disabled", false );
      }
      else{
        // $('#precioventa'+id_sku).addClass('tachado');
        // $('#preciocotizado'+id_sku).addClass('tachado');
        // $('#tdimporte'+id_sku).addClass('tachado');
        $('#profinal'+id_sku).css('opacity', 0.5);

        $('#cantidad'+id_sku).prop( "disabled", true );
      }

      var importe = parseFloat($(this).data('precioventa')) * cantidad;
      $('#importe'+id_sku).text(importe.toFixed(2));
    });

    $('#tdTotalReal').removeClass('tachado');
    $('#tdTotalDscto').addClass('tachado');
    $('#tdTotalAhorrado').addClass('tachado');

    preciocotizado = false;
  }
  else{
    $('.cbProducto').each(function(){
      var id_sku = $(this).val();
      var cantidad = $('#cantidad'+id_sku).val();

      if($(this).is(':checked')){
        $('#precioventa'+id_sku).addClass('tachado');
        $('#precioventa'+id_sku).removeClass('precioFinal');
        $('#preciocotizado'+id_sku).addClass('precioFinal');
        $('#preciocotizado'+id_sku).removeClass('tachado');

        $('#profinal'+id_sku).css('opacity', 1);
        $('#tdimporte'+id_sku).removeClass('tachado');
        $('#cantidad'+id_sku).prop( "disabled", false );

        $('#precioA'+id_sku).text($('#preciocotizado'+id_sku).text());
        $('#precioB'+id_sku).text($('#precioventa'+id_sku).text());
      }
      else{
        // $('#precioventa'+id_sku).addClass('tachado');
        // $('#preciocotizado'+id_sku).addClass('tachado');
        // $('#tdimporte'+id_sku).addClass('tachado');

        $('#profinal'+id_sku).css('opacity', 0.5);
        $('#cantidad'+id_sku).prop( "disabled", true );
      }

      var importe = parseFloat($(this).data('preciocotizado')) * cantidad;
      $('#importe'+id_sku).text(importe.toFixed(2));
    });

    $('#tdTotalReal').addClass('tachado');
    $('#tdTotalDscto').removeClass('tachado');
    $('#tdTotalAhorrado').removeClass('tachado');

    preciocotizado = true;
  }

  var totalReal = calcular_total("real");
  var totalDscto = calcular_total("cotizado");


  $('#totalReal').text(totalReal.toFixed(2));
  $('#totalDscto').text(parseFloat(totalDscto.toFixed(2)));
  $('#totalAhorrado').text((totalReal-totalDscto).toFixed(2));

  if (preciocotizado == false) {
    $('#totalA').text("S/ "+totalReal.toFixed(2));
    $('#totalB').text("S/ "+totalDscto.toFixed(2));
    $('.filaAhorro').removeClass('green');
    $('.filaAhorro').removeClass('white-text');
    $('.filaAhorro').addClass('grey');
    $('.filaAhorro').addClass('grey-text text-darken-1');
    $('#totalC').text('SIN AHORRO');
  }else{
    $('#totalA').text("S/ "+totalDscto.toFixed(2));
    $('#totalB').text("S/ "+totalReal.toFixed(2));
    $('#totalC').text("Ahorro de S/ "+(totalReal-totalDscto).toFixed(2));
    $('.filaAhorro').addClass('green');
    $('.filaAhorro').addClass('white-text');
    $('.filaAhorro').removeClass('grey');
    $('.filaAhorro').removeClass('grey-text text-darken-1');
  }
  
}

function calcular_total(tipo_precio){

  var total = 0;
  var valActual; 

  $('.cbProducto').each(function(){

    var id_sku = $(this).data('id');

    if($(this).is(':checked')){
      if(tipo_precio == 'cotizado'){
        valActual = $(this).data('preciocotizado');
      }
      else{
        valActual = $(this).data('precioventa');
      }
    }
    else{
      valActual = 0;
    }

    var cantidad = parseInt($('#cantidad'+id_sku).val());

    total = total + valActual * cantidad;
  });

  return total;
}

function datos_sunat(numero_documento, tipo)
{
  var resultado = 0;
  var loading_screen = pleaseWait({
    logo: '',
    backgroundColor: "#1313137d",
    loadingHtml: "<i style='font-size:70px' class='white-text material-icons'>search</i><h4 style='font-weight: 600;' class='white-text'>Buscando informacion...</h4><div class='sk-folding-cube'><div class='sk-cube1 sk-cube'></div><div class='sk-cube2 sk-cube'></div><div class='sk-cube4 sk-cube'></div><div class='sk-cube3 sk-cube'></div></div>"
  });
  $.ajax({
    type : "POST",
    data: {
      "numero_documento": numero_documento
    },
    url : base_url + 'tienda/datos_sunat',
    success : function(data){
      var obj = JSON.parse(data);
      loading_screen.finish();
      if(obj.success){
        resultado = 1;
        if(tipo == 2){
          document.getElementById("nomEmpresaEnvio").value = obj.result.RazonSocial;
        }
        else{
          var ruc = obj.result.RUC;
          
          if(ruc.substr(0,2) == 10)
          {
            document.getElementById("nomEmpresaEnvio").value = obj.result.RazonSocial;
          }
        }
      }
      else
      {
        if(tipo == 1)
        {
          Materialize.toast('<i class="material-icons left ">warning</i>No se encontraron resultados', 2000, 'rounded warningToast');        
        }
        else{
          $.confirm({
            icon: 'error',
            theme: 'modern',
            closeIcon: false,
            animation: 'scale',
            type: 'red',
            title: 'Sin resultados',
            columnClass: 'small',
            content: 'No se encontraron resultados con el RUC ingresado. Intente nuevamente',
            draggable: false,
            buttons: {
              Aceptar: {
                btnClass: 'btn',
                action: function (){
                  
                }
              }
            }
         });
        }
      }
    },
  });
}

function buildSlugValue(str) {
  str = str.replace(/^\s+|\s+$/g, ''); // trim
  str = str.toLowerCase();
  // remove accents, swap ñ for n, etc
  var from = "ãàáäâẽèéëêìíïîõòóöôùúüûñç·/_,:;";
  var to = "aaaaaeeeeeiiiiooooouuuunc------";
  for (var i = 0, l = from.length; i < l; i++) {
      str = str.replace(new RegExp(from.charAt(i), 'g'), to.charAt(i));
  }
  str = str.replace(/[^a-z0-9 -]/g, '') // remove invalid chars
      .replace(/\s+/g, '-') // collapse whitespace and replace by -
      .replace(/-+/g, '-'); // collapse dashes
  return str;
}

function addCommas(nStr) {
    nStr += '';
    x = nStr.split('.');
    x1 = x[0];
    x2 = x.length > 1 ? '.' + x[1] : '';
    var rgx = /(\d+)(\d{3})/;
    while (rgx.test(x1)) {
            x1 = x1.replace(rgx, '$1' + ' ' + '$2');
    }
    return x1 + x2;
}