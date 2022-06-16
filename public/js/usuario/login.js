$(document).ready(function(){
  $(".correo2").val('');
  
  // $('ul.tabs').tabs('select_tab', 'crear');
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
              $('#correo').focus();
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
            $('ul.tabs').tabs('select_tab', 'crear');
            $('#correoA').focus();
          }
        },
      }
    });
  }

  

