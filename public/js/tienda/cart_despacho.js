$(window).on("load", function() {
  setTimeout(function(){ 
    //Cargando Total y cantidades
    var cantTotal = 0, subTotal = 0;
    subTotal2 = 0;
    $('.cantCarrito').each(function(){
        cantTotal = cantTotal + parseFloat($(this).text());
      });
      $('.cantResumen').text(cantTotal);

      $('.subTotalCarrito').each(function(){
        subTotal = subTotal + parseFloat($(this).text());
      });
           
      $('.subTotalCarrito2').each(function(){
        subTotal2 = subTotal2 + parseFloat($(this).text());
      });
      if (subTotal2 >= 1) {
        $('.totalResumen2').text(subTotal2.toFixed(2));
        $('.descT').removeClass('hide');
        $('.totalD1').removeClass('hide');
        $('.totalD2').removeClass('hide');
        $('.totalB1').removeClass('hide');
        $('.totalResumen').addClass('descuento white-text');
        $('.subTotalCarrito').addClass('descuento white-text');
        $('.precioN').addClass('descuento white-text');
      }else{
        $('.totalN1').addClass('col s8 right-align');
        $('.totalN').addClass('col s4 positionRelative');
      }
            
      $('.totalResumen').text(subTotal.toFixed(2));

    $('.preloader-wrapper').not('.preloaderDireccion').parent().addClass('hide');
    $('.cart_content').removeClass('hide');
  }, 750);
	
  if (!mediaqueryPC.matches) {
    $('.setbuttonMobile').addClass('moveSetbuttonMobile');
  }

  //Select Departamento, Distrito y Region si existe
  if ($("#selecRegion").data('valor') != "") {
    $("#selecRegion").val($("#selecRegion").data('valor'));
    $("#selecRegion").trigger('change'); 
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

	//Select direccion
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

  //Seleccionar comprobante de pago
  $('.facturaCheck').click(function(){
    if ($('.facturaCheck').prop('checked') == true) {
      $('.datosFactura').removeClass('hide');
    }else{
      $('.datosFactura').addClass('hide');
    }
  });

	$(".irPago").click(function(){
    var flagDocumentos = false;
    if ($('.facturaCheck').prop('checked') == true) {
      if ($('#RUC').val().toString().length != 11 || !$('#razonSocial').val()){
        flagDocumentos = true;
      }
    }
    
    if (flagDocumentos == false) {
      var idRegion = $("#selecRegion").val();
      var provincia =  $("#provincia select").val();
      var distrito =  $("#distrito select").val();
      var direccion = $("#direccionComprador").val();
      var tlf = $("#tlf").val();
      var DNIcliente=$('#DNIcliente').val();

      if (idRegion != null && provincia != null && distrito != null && $.trim(direccion) != "" && $.trim(tlf).length == 9  && DNIcliente!='') {
        //Actualizando sesion productos con factura
        if ($('.facturaCheck').prop('checked') == true) {
          $.ajax({
            url: base_url+'productos/update_doc',
            method:"POST",
            data:{
              documento: "Factura"
            }
          });
        }

        var nombre = $('#nombreComprador').val();
        var correo = $('#correo').val();
        var tlf = $('#tlf').val();
        var region = $('#selecRegion').val();
        var provincia = $('#selProvincia').val();
        var distrito = $('#selDistrito').val();
        var direccion =  $('#direccionComprador').val();
        var referencia =  $('#referenciaComprador').val();
        var lote =  $('#nloteComprador').val();
        var dpint =  $('#dintComprador').val();
        var urbanizacion =  $('#urbComprador').val();
        var ruc =  $('#RUC').val();
        var DNIcliente=$('#DNIcliente').val();
        var razonSocial =  $('#razonSocial').val();
        $.ajax({
          data:{
            'region': region,
            'provincia': provincia,
            'distrito': distrito,
            'direccion': direccion,
            'referencia': referencia,
            'lote': lote,
            'dpint': dpint,
            'DNIcliente': DNIcliente,
            'urbanizacion': urbanizacion,
            'tlf': tlf,
          },
          type: "POST",
          url:base_url+'usuario/direccion_comprador',
          success: function(data){
            $.ajax({
              data:{
                'region': region,
                'provincia': provincia,
                'distrito': distrito,
                'direccion': direccion,
                'referencia': referencia,
                'lote': lote,
                'dpint': dpint,
                'urbanizacion': urbanizacion,
                'nombre': nombre,
                'correo': correo,
                'tlf': tlf,
                'ruc': ruc,
                'razonSocial': razonSocial
              },
              type: "POST",
              url:base_url+'productos/pago_sesion_datos',
              success: function(data){
                location.href=base_url+'productos/pago';
              }       
            });
          }       
        });

      }else{
        $.confirm({
          icon: 'error',
          theme: 'modern',
          closeIcon: false,
          animation: 'scale',
          type: 'red',
          title: 'Dirección no ingresada',
          columnClass: 'small',
          content: "Selecciona tu departamento, provincia, distrito, D.N.I y especifica tu dirección y un número de telefono celular valido para poder pagar tu compra",
          draggable: false,
          buttons: {
            Entendido: {
              btnClass: 'btn pormayorUnico',
            }
          }  
        });
      }
    }else{
      $.confirm({
        icon: 'error',
        theme: 'modern',
        closeIcon: false,
        animation: 'scale',
        type: 'red',
        title: 'Datos en comprobante de pago',
        columnClass: 'small',
        content: 'Ingresa el RUC y la razón social para la factura de los productos',
        draggable: false,
        buttons: {
            Entendido:    {   
                btnClass: 'pormayorUnico btn',                     
            }
        }
      });
    }
  });
});

function selCostoEnvio(val) {

  var idDistrito=val;
  var DNIcliente=$('#DNIcliente').val();

  $("#selDistrito option:selected").each(function () {
    id=$(this).val();
    $.post(base_url+'productos/selCostoEnvioN',{"id":id,"DNIcliente":DNIcliente},function(data){
      // console.log(data);
      var result=JSON.parse(data);
      if(result) {
          var costo=Math.round(result['costoReal']);
          $('.costoReal').text(parseFloat(costo).toFixed(2));
      } else {
        $('.costoReal').text('0.00');
      }
    });
  });
}
