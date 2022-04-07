$(window).on("load", function() {
	setTimeout(function(){ 
		//Colocando cantidad Actual
		$('.cantCarrito').each(function(){
	      var cant = parseInt($(this).parent().attr('data-cantact'));
	      $(this).find("option[value="+cant+"]").attr('selected', 'selected');
	    });

		//Cargando Total y cantidades
		var cantTotal = 0, subTotal = 0; subTotal2 = 0;
		
		$('.cantCarrito').each(function(){
	      cantTotal = cantTotal + parseFloat($(this).val());
	    });
	    $('.cantResumen').text(cantTotal);

	    $('.subTotalCarrito').each(function(){
	      	subTotal = subTotal + parseFloat($(this).text());
	    });
	    
	    $('.subTotalCarrito2').each(function(){
	      	subTotal2 = subTotal2 + parseFloat($(this).text());
	    });

	    if (subTotal2 >= 100) {
        // $('.totalResumen2').text(subTotal2.toFixed(2));
        // $('.descT').removeClass('hide');
        // $('.totalD1').removeClass('hide');
        // $('.totalB1').removeClass('hide');
        // $('.totalD2').removeClass('hide');
        // $('.totalResumen').addClass('descuento');
        // $('.subTotalCarrito').addClass('descuento');
        // $('.precioN').addClass('descuento');
	    }else{
	        $('.totalN').addClass('col s4 m4 l4 positionRelative');
	        $('.totalN1').addClass('col s8 right-align');
	    }
	    
	    $('.totalResumen').text(parseFloat(subTotal).toFixed(2));
	    // $('.totalResumen2').text(parseFloat(subTotal2).toFixed(2));

		$('.preloader-wrapper').parent().addClass('hide');
		$('.cart_content').removeClass('hide');
	}, 1000);
	

	if (!mediaqueryPC.matches) {
		if ($('.movilNoProduct').length == 0  ) {
			$('.setbuttonMobile').addClass('moveSetbuttonMobile');
		}
	}

	if ($('.comprar_popup').attr('data-flag') == 1) {
		$('#sesion_popup').modal('open');
    	setTimeout(function(){ 
      		$('ul.tabs').tabs('select_tab', 'iniciar');
      		$('#correo').focus();
		}, 200);
	}
});

$(document).ready(function(){
	// $('#cart_details').load( base_url+'productos/load');
	//Popup inicio sesión - registro
	// $('.modal').modal();

	$('.comprar_popup').click(function(){
		setTimeout(function(){ 
      		$('ul.tabs').tabs('select_tab', 'iniciar');
		}, 200);
    });

    $(".correo2").val('');

	//Iniciar
	$('#iniciar .row .col input').focus(function(){
	  $(this).parent().find('.transitionB').css("color", "rgba(0,0,0,0.6)");
	});

	$('#iniciar .row .col input').blur(function(){
	  $(this).parent().find('.transitionB').css("color", "rgba(0,0,0,0.3)");
	});

	//Registro
	$('#crear .row .col input').focus(function(){
	  $(this).parent().find('.transitionB').css("color", "rgba(0,0,0,0.6)");
	});

	$('#crear .row .col input').blur(function(){
	  $(this).parent().find('.transitionB').css("color", "rgba(0,0,0,0.3)");
	});

	//Validar registros
	$("#formulario_login").validate({
	errorElement : 'div',
	errorPlacement: function(error, element) {
	  var placement = $(element).data('error');
	  if (placement) {
	    $(placement).append(error)
	  } else {
	    error.insertAfter(element);
	  }
	}
	});

	$("#formulario_registro").validate({
	errorElement : 'div',
	errorPlacement: function(error, element) {
	  var placement = $(element).data('error');
	  if (placement) {
	    $(placement).append(error)
	  } else {
	    error.insertAfter(element);
	  }
	}
	});

	//Registrarse
	$('.terminosCheck').click(function(){
	  if ($('.terminosCheck').is(":checked")) {
	    $('.btnRegistrarse').removeClass('disabled');
	  }else{
	    $('.btnRegistrarse').addClass('disabled');
	  }
	});

	var sendForm = false;
	$('.btnRegistrarse').click(function(){
	if ($('#publicidad_mat').is(":checked") == true) {
	  $('#publicidad_valor').val('enviar');
	}else{
	  $('#publicidad_valor').val('no');
	}
	$('#correo2').val($('#correoA').val());


	if ($('.terminosCheck').is(":checked")) {
	  $("#btnRegistrarse").click();
	}else{
	   Materialize.toast('<i class="material-icons left ">error</i>Debes estar de acuerdo con los Términos y condicions de pormayor.pe', 1500, 'rounded errorToast');
	}
	});

	//Errores de Sesión
	if($('.validarCorreo2').val() == 'Error') {
	$.confirm({
	    icon: 'error',
	    theme: 'modern',
	    closeIcon: false,
	    animation: 'scale',
	    type: 'red',
	    title: 'Inicio Inválido',
	    columnClass: 'small',
	    content: 'Existe un error con la contraseña o el correo. Intenta nuevamente',
	    draggable: false,
	    buttons: {
	      Entendido: {
	        btnClass: 'btn pormayorUnico',
	        action: function (){
	        	$('#sesion_popup').modal('open');
	        	setTimeout(function(){ 
		      		$('ul.tabs').tabs('select_tab', 'iniciar');
	          		$('#correo').focus();
				}, 200);
	        }
	      },
	    }
	});
	}

	if($('.validarCorreo').val() == 'Error') {
	var Correo= $("#correoA").val();

	$.confirm({
	  icon: 'email',
	  theme: 'modern',
	  closeIcon: false,
	  animation: 'scale',
	  type: 'red',
	  title: 'Error con correo',
	  columnClass: 'small',
	  content: 'El correo '+Correo+' ya esta registrado',
	  draggable: false,
	  buttons: {
	    Entendido: {
	      btnClass: 'btn pormayorUnico',
	      action: function (){
	      	$('#sesion_popup').modal('open');
        	setTimeout(function(){ 
	      		$('ul.tabs').tabs('select_tab', 'crear');
	      		$('#correoA').focus();
			}, 200);
	      }
	    },
	  }
	});
	}
	//Edicion de carrito
});

$(document).on( 'change', '.cantCarrito', function(){
	var Pro_IdProducto = $(this).parent().data('idpro');
	var valor = parseInt($(this).val()); 
	var idActual = $(this).parent().data('idrow');
	var precio_unit = $(this).parent().data('pmin');
	var precio = precio_unit*valor;    
	$.ajax({
    url: base_url+'productos/update',
    method:"POST",
    data:{
    	row_id:idActual,
    	qty: valor,
    	precio_unit: precio_unit,
    	price: precio
    },
    success:function(data){
      location.reload(true);
    }
  });
});

$(document).on('click', '.remove_inventory', function(){
	var cantTotal = 0, subTotal = 0;
  var row_id = $(this).attr("id");
  $.confirm({
    icon: 'help',
    theme: 'modern',
    closeIcon: false,
    animation: 'scale',
    type: 'orange',
    title: 'Eliminar de pedido',
    columnClass: 'small',
    content: 'Eliminar producto del pedido actual',
    draggable: false,
    buttons: {
        Eliminar:    {   
            btnClass: 'btn pormayorUnico',                 
            action: function (){
              $.ajax({
                url: base_url+'productos/remove',
                method:"POST",
                data:{row_id:row_id},
                success:function(data)
                {
                  location.reload(true);
                }
              });
            }       
        },
        Cancelar: {
            
        }
    }
  });
});

$(document).on('click', '.clear_cart', function(){
  $.confirm({
    icon: 'help',
    theme: 'modern',
    closeIcon: false,
    animation: 'scale',
    type: 'red',
    title: 'Vaciar pedido',
    columnClass: 'small',
    content: 'Eliminar todos los productos del pedido actual',
    draggable: false,
    buttons: {
        Vaciar:    {   
            btnClass: 'btn pormayorUnico',                 
            action: function (){
              $.ajax({
                url:base_url+'productos/clear',
                success:function(data)
                {
                 // Materialize.toast('<i class="material-icons left ">check_circle</i>Pedido vaciado', 2000, 'rounded successToast');
                 location.reload(true);
                }
               });
            }       
        },
        Cancelar: {
            
        }
    }
  });
});