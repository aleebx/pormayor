$(document).ready(function(){
  var STORE_SUBDOMAIN_WAS_NOT_EDITED = true;
  var registroError = false;
  var sendForm  = false;

  //Validar si hay errores
  if ($('.valError').length > 0) {
    var valorRuc = parseInt($('#ruc').val().slice(0,2));

    if (valorRuc == 10) {
      $('#radio1').attr('checked', true);
    }else{
      $('#radio2').attr('checked', true);
    }

    $(".input-field").each(function(){
        $(this).css("opacity", 1);
        $(this).find("input").removeAttr('disabled');
    });


    var errores = "";
    $(".valError").each(function(){
        errores = $(this).text() + ", " +  errores;
    });
    errores = errores.replace(/(^[,\s]+)|([,\s]+$)/g, '');;
    $.confirm({
        icon: 'error',
        theme: 'modern',
        closeIcon: false,
        animation: 'scale',
        type: 'red',
        title: 'Error al crear tienda',
        columnClass: 'small',
        content: "<span class='red-text'>" + errores + ".</span>",
        draggable: false,
        buttons: {
          Entendido: {
            btnClass: 'btn pormayorUnico',
            action: function (){
              
            }
          }
        }
     });
  };

  //Focus inputs
  $('.validarDatos .col input').focus(function(){
      $(this).parent().find('.transitionB').css("color", "rgba(0,0,0,0.6)");
  });

  $('.validarDatos .col input').blur(function(){
      $(this).parent().find('.transitionB').css("color", "rgba(0,0,0,0.3)");
  });

  //Registrarse
  $("#registrar_cuenta").validate({
  //   errorPlacement: function(error, element) {
  //   error.appendTo( element.parent("td").next("td") );
  // }
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

  $('.terminosCheck').click(function(){
      if ($('.terminosCheck').is(":checked")) {
        $('.btnCrear').removeClass('disabled');
      }else{
        $('.btnCrear').addClass('disabled');
      }
  });
  
  $('.btnCrear').click(function(){
    if (registroError == false && sendForm == false) {
      if (sendForm == false) {
          var vacios = false; 
          $(".validarDatos input").not('.notValidate').each(function(){
              if($(this).val()==""){
                  vacios = true;
              }
          });

          if ($('#contrasena').val().length < 8) {
            $.confirm({
              icon: 'warning',
              theme: 'modern',
              closeIcon: false,
              animation: 'scale',
              type: 'orange',
              title: 'Contraseña Incorrecta',
              columnClass: 'small',
              content: 'Tu contraseña debe tener más de 8 carácteres',
              draggable: false,
              buttons: {
                Entendido: {
                  btnClass: 'btn pormayorUnico',
                  action: function (){
                    
                  }
                }
              }
            });
          }

          if(/^[a-zA-Z0-9- ]*$/.test($('#contrasena').val()) == false) {
            vacios = true;
            $.confirm({
              icon: 'warning',
              theme: 'modern',
              closeIcon: false,
              animation: 'scale',
              type: 'orange',
              title: 'Contraseña inválida',
              columnClass: 'small',
              content: 'Tu contraseña de ingreso <b>no puede incluir carácteres especiales</b>. Intentalo nuevamente',
              draggable: false,
              buttons: {
                Entendido: {
                  btnClass: 'btn pormayorUnico',
                  action: function (){
                    
                  }
                }
              }
            });
          }else if (vacios == true){
            $.confirm({
              icon: 'warning',
              theme: 'modern',
              closeIcon: false,
              animation: 'scale',
              type: 'orange',
              title: 'Datos Incompletos3',
              columnClass: 'small',
              content: 'Ninguno de los campos puede estar vacio, estos datos son necesarios para crear tu tienda',
              draggable: false,
              buttons: {
                Entendido: {
                  btnClass: 'btn pormayorUnico',
                  action: function (){
                    
                  }
                }
              }
            });
          }
      }

      if (sendForm == false && vacios == false){
          
          $('#btnCrearTienda').trigger('click');
           var loading_screen = pleaseWait({
              logo: logo,
              backgroundColor: "#FEC00F",
              loadingHtml: "<h4 style='font-weight: 600;' class='pormayorAccent-text'>Creando tu Tienda...</h4><div class='sk-folding-cube'><div class='sk-cube1 sk-cube'></div><div class='sk-cube2 sk-cube'></div><div class='sk-cube4 sk-cube'></div><div class='sk-cube3 sk-cube'></div></div>"
          });
      }
    }else if(registroError == true && sendForm == false){
      $.confirm({
          icon: 'error',
          theme: 'modern',
          closeIcon: false,
          animation: 'scale',
          type: 'red',
          title: 'RUC Invalido',
          columnClass: 'small',
          content: 'Este RUC es incorrecto. ¿Quizás prefieras registrarte como comprador?',
          draggable: false,
          buttons: {
            Aceptar: {
              text: "Intentar nuevamente",
              btnClass: 'btn',
              action: function (){
                // window.location.href = base_url+'tienda/crear';
              }
            },
            Cancelar: {
              text: "Registrarse como comprador",
              action: function (){
                window.location.href = 'https://pormayor.pe/usuario/login';
              }
            }
          }
       });
    }
  });

  //Crear 2
  $('.btnCrear2').click(function(){
    if (registroError == false && sendForm == false) {
      if (sendForm == false) {
          var vacios = false; 
          $(".validarTienda input").each(function(){
              if($(this).val()==""){
                  vacios = true;
              }
          });

          if (vacios == true){
              Materialize.toast('<i class="material-icons left ">warning</i>No puedes dejar campos vacios', 2000, 'rounded warningToast');
          }
      }

      if (sendForm == false && vacios == false){
          $('#btnCrearTienda').trigger('click');
           var loading_screen = pleaseWait({
              logo: logo,
              backgroundColor: "#FEC00F",
              loadingHtml: "<h4 style='font-weight: 600;' class='pormayorAccent-text'>Creando tu Tienda...</h4><div class='sk-folding-cube'><div class='sk-cube1 sk-cube'></div><div class='sk-cube2 sk-cube'></div><div class='sk-cube4 sk-cube'></div><div class='sk-cube3 sk-cube'></div></div>"
          });
      }
    }else if(registroError == true && sendForm == false){
      $.confirm({
          icon: 'error',
          theme: 'modern',
          closeIcon: false,
          animation: 'scale',
          type: 'red',
          title: 'RUC Invalido',
          columnClass: 'small',
          content: 'Este RUC es incorrecto. ¿Quizás prefieras registrarte como comprador?',
          draggable: false,
          buttons: {
            Aceptar: {
              text: "Intentar nuevamente",
              btnClass: 'btn',
              action: function (){
                // window.location.href = base_url+'tienda/crear';
              }
            },
            Cancelar: {
              text: "Registrarse como comprador",
              action: function (){
                window.location.href = 'https://pormayor.pe/usuario/login';
              }
            }
          }
       });
    }
  });
  
  //Cambios de labels y placeholders segun tipo RUC
  $('.radioRUC').change(function(){
      //Eliminar disable de inputs
      $(".input-field").not('.notDisabled').each(function(){
          $(this).css("opacity", 1);
          $(this).find("input").removeAttr('disabled');
      });

      var tipoRuc = $(this).val();
      if (tipoRuc==1){
        $('#dni').parent().find('label').text("DNI");
        $('#dni').parent().find('input').attr("placeholder", "Ingresa tu DNI");
        $('#ruc').parent().find('label').text("RUC");
        $('#ruc').parent().find('input').attr("placeholder", "Ingresa tu RUC");
        $('#nombre').parent().find('label').text("Nombre Completo");
        $('#nombre').parent().find('input').attr("placeholder", "Ingresa tu nombre");
        $('#tlf').parent().find('label').text("Telefono");
        $('#tlf').parent().find('input').attr("placeholder", "Ingresa tu teléfono celular actual");
        // $('#ruc').prop('readonly', true);

        $("body").on("blur", "#ruc");
        $("body" ).on("blur", "#dni", function() {
          var dni = $("#dni").val();
          if(dni.trim() != ''){
            if(dni.length != 8){
              Materialize.toast('<i class="material-icons left ">error</i>La cantidad de digitos de este DNI es incorrecto', 2000, 'rounded errorToast');
            }else{
              // datos_sunat(dni, 1);
            }
          }
        });
       
      }else{
        $('#dni').parent().find('label').text("DNI de Representante Legal");
        $('#dni').parent().find('input').attr("placeholder", "Ingresa el DNI del Representante Legal");
        $('#ruc').parent().find('label').text("RUC de la Tienda");
        $('#ruc').parent().find('input').attr("placeholder", "Ingresa el RUC de la tienda");
        $('#nombre').parent().find('label').text("Nombre Completo de Representante Legal");
        $('#nombre').parent().find('input').attr("placeholder", "Ingresa el nombre del Representante Legal");
        $('#tlf').parent().find('label').text("Telefono Representante Legal");
        $('#tlf').parent().find('input').attr("placeholder", "Ingresa el teléfono celular actual del Representante Legal");
        $('#ruc').prop('readonly', false);

        $("body").off("blur", "#dni");

        $("body").on( "blur", "#ruc", function() {
          var ruc = $("#ruc").val();
          if(ruc.trim() != ''){
            if(ruc.length != 11){
              Materialize.toast('<i class="material-icons left ">error</i>La cantidad de digitos de este RUC es incorrecto', 2000, 'rounded errorToast');
              registroError = true;
            }
            else{
              registroError = false;
              // datos_sunat(ruc, 2);
            }
          }else{
            registroError = true;
          }
        });
      }
  });

  //Crear 2
  $(".ruc3").blur(function(){
    var ruc = $("#ruc").val();
    if(ruc.trim() != ''){
      if(ruc.length != 11){
        Materialize.toast('<i class="material-icons left ">error</i>La cantidad de digitos de este RUC es incorrecto', 2000, 'rounded errorToast');
         registroError = true;
        $("#ruc").focus();
      }
      else{
        // datos_sunat(ruc, 2);
         registroError = false;
      }
    }else{
      registroError = true;
    }
  });
  
 
  $("[name='nombre_tienda']").keyup(function () {
    var nombre_tienda = $(this).val();
    if (STORE_SUBDOMAIN_WAS_NOT_EDITED) {
      $("[name='subdominio_tienda']").val(buildSlugValue(nombre_tienda));
      $("[name='razon_social']").val(buildSlugValue(nombre_tienda));
    }
  });

  $("[name='subdominio_tienda']").keyup(function () {
    STORE_SUBDOMAIN_WAS_NOT_EDITED = false;
    $(this).val(buildSlugValue($(this).val()));
  });


  //INFORMACION PARA CREAR TIENDAS
  if (mediaqueryPC.matches) {
    $(".unidadSticky").stick_in_parent({inner_scrolling: false,offset_top: 70,}).on("sticky_kit:stick", function(e) {
      $(this).css("z-index",100);
    }).on("sticky_kit:bottom", function(e) {
      $(this).css("z-index",10);
    }).on("sticky_kit:unbottom", function(e) {
      $(this).css("z-index",100);
    });
  }

  $(".stepsCrear").slick({
    infinite:false,
    dots: false,
    speed: 300,
    arrows: true,
    prevArrow: $('.prevButtonCrear'),
    nextArrow: $('.nextButtonCrear'),
    lazyLoad: 'ondemand',
  }); 

  $('a[href*="#"]')
  .not('[href="#"]')
  .not('[href="#0"]')
  .click(function(event) {
    if (
      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
      && 
      location.hostname == this.hostname
    ) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      if (target.length) {
        event.preventDefault();
        $('html, body').animate({
          scrollTop: target.offset().top -100
        }, 1000, function() {
          var $target = $(target);
          $target.focus();
          if ($target.is(":focus")) {
            return false;
          } else {
            $target.attr('tabindex','-1');
            $target.focus();
          };
        });
      }
    }
  });
});


//FUNCIONES
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
          document.getElementById("razon_social").value = obj.result.RazonSocial;
          if (obj.result.NombreComercial == "-"){
            document.getElementById("nombre_tienda").value = "";
            document.getElementById("subdominio_tienda").value = "";
          }else{
          document.getElementById("nombre_tienda").value = obj.result.NombreComercial;
          document.getElementById("subdominio_tienda").value = buildSlugValue(obj.result.NombreComercial);
          }
          document.getElementById("fecha_inscripcion").value = (obj.result.Inscripcion);
          fecha = $("#fecha_inscripcion").val();
          subdominio_tienda = $("#subdominio_tienda").val();
          console.log("subdominio_tienda: "+subdominio_tienda);
          console.log("feca: "+fecha);

          $("#razon_social").parent().removeClass('hide');
          $("#nombre_tienda").removeAttr('disabled');
          $("#nombre_tienda").parent().css("opacity", 1);
          $("#subdominio_tienda").removeAttr('disabled');
          $("#subdominio_tienda").parent().css("opacity", 1);
          Materialize.updateTextFields();
        }
        else if (tipo == 1){
          var ruc = obj.result.RUC;
          
          if(ruc.substr(0,2) == 10)
          {
            document.getElementById("nombre").value = obj.result.RazonSocial;
            document.getElementById("ruc").value = ruc;
            document.getElementById("razon_social").value = obj.result.RazonSocial;
            if (obj.result.NombreComercial == "-"){
              document.getElementById("nombre_tienda").value = "";
              document.getElementById("subdominio_tienda").value = "";
            }else{
            document.getElementById("nombre_tienda").value = obj.result.NombreComercial;
            document.getElementById("subdominio_tienda").value = buildSlugValue(obj.result.NombreComercial);
            }
            document.getElementById("fecha_inscripcion").value = (obj.result.Inscripcion);
            fecha = $("#fecha_inscripcion").val();
            subdominio_tienda = $("#subdominio_tienda").val();
            console.log("subdominio_tienda: "+subdominio_tienda);
            console.log("feca: "+fecha);

            $("#razon_social").parent().removeClass('hide');
            $("#nombre_tienda").removeAttr('disabled');
            $("#nombre_tienda").parent().css("opacity", 1);
            $("#subdominio_tienda").removeAttr('disabled');
            $("#subdominio_tienda").parent().css("opacity", 1);
            Materialize.updateTextFields();
          }
        }else{
          var ruc = obj.result.RUC;
          
          if(ruc.substr(0,2) == 10)
          {
            document.getElementById("nombre").value = obj.result.RazonSocial;

            $("#razon_social").parent().addClass('hide');
          }
        }
      }
      else
      {
        if(tipo == 1 || tipo == 3)
        {
          $.confirm({
            icon: 'error',
            theme: 'modern',
            closeIcon: false,
            animation: 'scale',
            type: 'red',
            title: 'DNI invalido',
            columnClass: 'small',
            content: 'No se encontraron resultados con el DNI ingresado. Intente nuevamente con un DNI valido',
            draggable: false,
            buttons: {
              Entendido: {
                btnClass: 'btn pormayorUnico',
                action: function (){
                  
                }
              }
            }
          });    
        }else{
          $.confirm({
            icon: 'error',
            theme: 'modern',
            closeIcon: false,
            animation: 'scale',
            type: 'red',
            title: 'RUC Invalido',
            columnClass: 'small',
            content: 'Este RUC es incorrecto. ¿Quizás prefieras registrarte como comprador?',
            draggable: false,
            buttons: {
              Aceptar: {
                text: "Intentar nuevamente",
                btnClass: 'btn btn-flat',
                action: function (){
                  
                }
              },
              Registrarse: {
                text: "Registrarse como comprador",
                btnClass: 'btn pormayorUnico',
                action: function (){
                  window.location.href = 'https://pormayor.pe/usuario/login';
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