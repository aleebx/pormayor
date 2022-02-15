  var loading_screen=pleaseWait({
      logo:'',
      backgroundColor:"#1313137d",
      backgroundColor:"#121212c9",
      loadingHtml:"<i style='font-size:70px' class='white-text material-icons'>attach_money</i><h4 style='font-weight: 600;' class='white-text'>Cargando pago</h4><div class='sk-folding-cube'><div class='sk-cube1 sk-cube'></div><div class='sk-cube2 sk-cube'></div><div class='sk-cube4 sk-cube'></div><div class='sk-cube3 sk-cube'></div></div>"
    });

$(window).on("load", function() {
  setTimeout(function() { 
    //Cargando Total y cantidades
    var cantTotal = 0, subTotal = 0; subTotal2 = 0;
    
    $('.cantCarrito').each(function() {
      cantTotal = cantTotal + parseFloat($(this).text());
    });

    $('.cantResumen').text(cantTotal);

    $('.subTotalCarrito').each(function() {
        subTotal=subTotal + parseFloat($(this).text());
    });

    $('.subTotalCarrito2').each(function() {
        subTotal2=subTotal2 + parseFloat($(this).text());
    });
monto_producto= subTotal2;
    if (subTotal2 >= 100){
      descuento = 1;
      $('.totalD').removeClass('hide');
      $('.noTDC').addClass('hide');
      $('.costoProducto').text(subTotal2.toFixed(2));
      subTotal2=(parseFloat(subTotal2) + parseFloat($('.idCostoReal').text()));
      $('.totalResumen').text(subTotal2.toFixed(2));
      $('.totalResumen2').text(subTotal2);
      $('.preloader-wrapper').parent().addClass('hide');
      $('.cart_content').removeClass('hide');
    }else{      
      descuento = 0;
      $('.totalN').removeClass('hide');
      $('.costoProducto').text(subTotal.toFixed(2));
      subTotal=(parseFloat(subTotal) + parseFloat($('.idCostoReal').text()));
      $('.totalResumen').text(subTotal.toFixed(2));
      $('.totalResumen2').text(subTotal);
      $('.preloader-wrapper').parent().addClass('hide');
      $('.cart_content').removeClass('hide');
    }    
      loading_screen.finish();
  }, 750);

	if(mediaqueryPC.matches) {
    $(".unidadSticky").trigger("sticky_kit:recalc");
  }

  if(!mediaqueryPC.matches) {
    $('.setbuttonMobile').addClass('moveSetbuttonMobile');
  }

});


$(document).ready(function(){
	if (mediaqueryPC.matches) {
	  $(".unidadSticky").stick_in_parent({inner_scrolling: true,offset_top: 60,}).on("sticky_kit:stick", function(e) {
	    $(this).css("z-index",200);
	  }).on("sticky_kit:bottom", function(e) {
	    $(this).css("z-index",10);
	  }).on("sticky_kit:unbottom", function(e) {
	    $(this).css("z-index",200);
	  });
	}

  //Cargando Total y cantidades
  var cantTotal=0,subTotal=0;
  
  $('.cantCarrito').each(function(){
      cantTotal=cantTotal + parseInt($(this).text());
  });
  $('.cantResumen').text(cantTotal);

  $('.subTotalCarrito').each(function(){
    subTotal = subTotal + parseFloat($(this).text());
    subTotal4 = subTotal + parseFloat($(this).text());
  });
  $('.costoProducto').text(subTotal.toFixed(2));
  subTotal=(parseFloat(subTotal) + parseFloat($('.idCostoReal').text()));
  $('.totalResumen').text(subTotal.toFixed(2)); 
  $('.preloader-wrapper').parent().addClass('hide');
  $('.cart_content').removeClass('hide');
  $(".unidadSticky").trigger("sticky_kit:recalc");

  //Seleccionar tipo de pago
  var bcp=0,tdc=0,monto_pagar=0;var monto_envio=0;
  var Vef_Banco;

  if($('.idCostoReal').text()) {
    monto_envio=parseFloat($('.idCostoReal').text());
    monto_envio2=parseFloat($('.idCostoReal').text());
  }

	$('.pagoLinkCarrito').click(function() {

    var totalActual=parseFloat($('.totalResumen').text());
    var totalActualTDC=parseFloat($('.totalResumen2').text());
    var tipoPago=$(this).attr("data-tipo");
    var pagoActual;

    $('.pagoLinkCarrito').each(function() {
      if ($(this).attr("data-tipo") != tipoPago) {
        $(this).find('i').removeAttr('style');
        $(this).find('div').removeClass('pagoLinkCarritoSelect');
      }
    });
      monto_pagar = subTotal2 - monto_envio2 ;

    if(tipoPago=="ACUERDO" || tipoPago=="TOD" || tipoPago=="TIENDA") {

      if(tipoPago=="ACUERDO") {
        monto_envio=parseFloat($('.idCostoReal').text());
        pagar_mo = monto_producto + monto_envio ;
        var titleVar='CONTRAENTREGA';
        var urlVar='productos/pago_contraentrega';
        var contentVar='Antes de continuar debe tener en cuenta lo siguiente:<ul class="collection"><li class="collection-item black-text">Total Productos: S/ '+monto_producto+' <br>Costo del delivery: S/'+ monto_envio +' <br>Total a pagar: '+pagar_mo+'</li><li class="collection-item">Solo disponible para Lima Metropolina y Callao</li><li class="collection-item">La opciones de pago son las siguientes: </br>BCP Ahorros 19193690777046 / CCI 00219119369077704659 a nombre de Pormayor.pe SA <br>INTERBANK: Cta. Cte. No. 2003003235724 / CCI: 00320000300323572433 a nombre de Pormayor.pe SA. <br>YAPE o PLIN al 955866170</li><li class="collection-item">También puede realizar el pago en efectivo cuando reciba su pedido (monto exacto)</li><li class="collection-item">Tiempo de envio de 1 a 2 días según destino y coordinación con el asesor de ventas</li></ul>Haz click en <strong>CONTINUAR</strong> si estas de acuerdo.';
      } else if(tipoPago=="TOD") {
        var urlVar='productos/pago_DOT';
        var titleVar='ENVIO A PROVINCIA | DEPÓSITO O TRANSFERENCIA';
        var contentVar='Antes de continuar debe tener en cuenta lo siguiente:<ul class="collection"><li class="collection-item">LOS DEPOSITOS POR AGENTE Y VENTANILLA FUERA DE LIMA COBRÁN UNA COMISIÓN DE S/ 7.5 HASTA MONTO DE COMPRA DE S/1500 - SUPERIOR A ESE MONTO ES 0.5% DEL VALOR A DEPOSITAR (Debe asumir esa comisión por cada deposito) </li><li class="collection-item">La opciones de pago son las siguientes: </br>BCP Ahorros 19193690777046 / CCI 00219119369077704659 a nombre de Pormayor.pe SA <br>INTERBANK: Cta. Cte. No. 2003003235724 / CCI: 00320000300323572433 a nombre de Pormayor.pe SA. <br>YAPE o PLIN al 955866170</li><li class="collection-item">Una vez que se realiza la verificación del depositó o transferencia, se procede al embalaje y envio a la agencia de transporte indicada.</li><li class="collection-item">Los depositos/transferencias realizados antes de las 2 p.m. se envian el mismo día a la agencia</li><li class="collection-item">Recuerde que el cobro de S/10 cubre únicamente el embalaje y envio de su pedido de tienda hasta la agencia</li><li class="collection-item">Solicite su Boleta/Factura después de realizar el pago</li></ul>Haz click en <strong>CONTINUAR</strong> si estas de acuerdo.';
        monto_envio=parseFloat($('.idCostoReal').text());
      } else if(tipoPago=="TIENDA") {
        monto_ver = monto_pagar;
        var urlVar='productos/pago_tienda';
        var titleVar='RETIRO EN TIENDA';
        var contentVar='Antes de continuar debe tener en cuenta lo siguiente:<ul class="collection"><li class="collection-item black-text"><span class="negrita">Solo pagará el monto de los productos S/ '+monto_producto+'</span>, sin el gasto de despacho</span></li><li class="collection-item">Los retiros en tienda se realizan de lunes a viernes de 10:00 a.m. a 5:00 p.m y sábado de 10:00 a.m. a 1:00 p.m. en nuestra tienda física ubicada en <span class="negrita">Jirón Andahuaylas 251 Tienda 209 - Cercado de Lima</span></li><li class="collection-item">Tienes 48 horas para retirar tu pedido en tienda</li><li class="collection-item">La opciones de pago son las siguientes: </br>BCP Ahorros 19193690777046 / CCI 00219119369077704659 a nombre de Pormayor.pe SA <br>INTERBANK: Cta. Cte. No. 2003003235724 / CCI: 00320000300323572433 a nombre de Pormayor.pe SA. <br>YAPE o PLIN al 955866170</li><li class="collection-item">Tambien puede realizar el pago en efectivo en la tienda cuando retire su pedido.</li></ul>Haz click en <strong>CONTINUAR</strong> si estas de acuerdo.';
        monto_envio = 0;        
      }
      
      $.confirm({
        type:'orange',
        icon:'warning',
        theme:'modern',
        title:titleVar,
        closeIcon:false,
        draggable:false,
        animation:'scale',
        columnClass:'small',
        content:contentVar,
        buttons: {
          Continuar: {
            btnClass:'btn green',                    
            action:function () {
              console.log(monto_pagar,monto_envio,tipoPago,descuento);
              $.ajax({
                data:{
                  'desc':descuento,
                  'total':monto_pagar,
                  'envio':monto_envio,
                  'tipoPago':tipoPago
                },
                type:"POST",
                url:base_url+''+urlVar,
                dataType:"json",
                beforeSend:function() {
                  var loading_screen=pleaseWait({
                    logo:'',
                    backgroundColor:"#1313137d",
                    backgroundColor:"#121212c9",
                    loadingHtml:"<i style='font-size:70px' class='white-text material-icons'>save</i><h4 style='font-weight: 600;' class='white-text'>Guardando los datos...</h4><div class='sk-folding-cube'><div class='sk-cube1 sk-cube'></div><div class='sk-cube2 sk-cube'></div><div class='sk-cube4 sk-cube'></div><div class='sk-cube3 sk-cube'></div></div>"
                  });
                },
                success: function(data){
                  window.location.href = base_url+'comprador/compra/detalle_compra/'+data;
                }       
            });
          }       
        },
        Cambiar: {
            text:"Cerrar",
            btnClass:'btn red lighten-5 black-text',                    
            action:function () {
              
            }       
          }
        }
      });

      $(".finalizarCompra[data-tipocompra='compraSegura']").addClass('hide');
      $(".finalizarCompra[data-tipocompra='compraTDC']").addClass('disabled');
      $(".finalizarCompra[data-tipocompra='compraSegura']").addClass('disabled');
      $('.fakeFinalizarCompra').removeClass('hide');
      $(this).find('div').removeClass('pagoLinkCarritoSelect');
      $(this).find('i').css('opacity',0);
    }
    $('.pagoActual').text(pagoActual);
    monto_pagar=$('#totalPago').val();
    Vef_Banco=tipoPago;
  });

  //Finalizar compra
  $('.fakeFinalizarCompra').click(function() {
    $.confirm({
      type:'orange',
      icon:'warning',
      theme:'modern',
      closeIcon:false,
      draggable:false,
      animation:'scale',
      columnClass:'small',
      title:'Selecciona un método de pago',
      content:'Debes seleccionar un método de pago para poder finalizar tu compra',
      buttons: {
        Entendido: {   
          btnClass:'pormayorUnico btn',                     
        }
      }
    });
  });

  $('.finalizarCompra').on('click',function(e) {
    if (!$('.terminosCheck').is(":checked")) {
      $.confirm({
          type:'red',
          icon:'error',
          theme:'modern',
          closeIcon:false,
          animation:'scale',
          columnClass:'small',
          title:'Acepta los términos y condiciones',
          content:'Para procesar tu compra debes aceptas los términos y condiciones de nuestra plataforma.',
          draggable:false,
          buttons: {
            Entendido: {   
              btnClass:'pormayorUnico btn',                     
            }
          }
        });
    } else {
      //Guardando datos
      $.ajax({
        data:{
          'Vef_Banco':Vef_Banco,
          'total': monto_pagar,
          'envio': monto_envio,
        },
        type: "POST",
        url:base_url+'productos/pago_compra',
        dataType: "json",
        beforeSend: function(){
            var loading_screen = pleaseWait({
            logo: '',
            backgroundColor: "#1313137d",
            backgroundColor: "#121212c9",
            loadingHtml: "<i style='font-size:70px' class='white-text material-icons'>credit_card</i><h4 style='font-weight: 600;' class='white-text'>Procesando tu compra...</h4><div class='sk-folding-cube'><div class='sk-cube1 sk-cube'></div><div class='sk-cube2 sk-cube'></div><div class='sk-cube4 sk-cube'></div><div class='sk-cube3 sk-cube'></div></div>"
            });
        },
        success: function(data){
          window.location.href = base_url+'comprador/compra/detalle_compra/'+data;
        }       
      });
    }
  }); 

  //PAGO CON VISANET
  $('.finalizarCompraVisaB').click(function(){
    $.confirm({
      icon: 'error',
      theme: 'modern',
      closeIcon: false,
      animation: 'scale',
      type: 'red',
      title: 'Acepta los términos y condiciones',
      columnClass: 'small',
      content: 'Para procesar tu compra debes aceptas los términos y condiciones de nuestra plataforma.',
      draggable: false,
      buttons: {
          Entendido:    {   
              btnClass: 'pormayorUnico btn',                     
          }
      }
    });
  });

  $('.terminosCheck').click(function(){
    if ($(this).is(":checked")) {
      $('.finalizarCompraVisaB').addClass('hide');
    }else {
      $('.finalizarCompraVisaB').removeClass('hide');
    }
  });
});