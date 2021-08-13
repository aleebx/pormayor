$(document).ready(function(){
  var STORE_SUBDOMAIN_WAS_NOT_EDITED = true;
  var registroError = false;
  var sendForm  = false;

  //Validar si hay errores
  if ($('.valError').length > 0) {
    var valorRuc = parseInt($('#ruc').val().slice(0,2));
    $("#razon_social").parent().removeClass('hide');
    $(".input-field").not('.notValidate').each(function(){
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

          if (vacios == true){
            $.confirm({
              icon: 'warning',
              theme: 'modern',
              closeIcon: false,
              animation: 'scale',
              type: 'orange',
              title: 'Datos Incompletos',
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
          content: 'El RUC es incorrecto o no existe en la SUNAT',
          draggable: false,
          buttons: {
            Entendido: {
              btnClass: 'btn pormayorUnico',
              action: function (){
                
              }
            },
          }
       });
    }
  });

  //Cambios de labels y placeholders segun tipo RUC
  $('.ruc').blur(function(){
    var ruc = $("#ruc").val();
    if(ruc.trim() != ''){
      if(ruc.length != 11){
        $("#razon_social").parent().addClass('hide');
        $("#nombre_tienda").val('');
        $("#nombre_tienda").attr('disabled', 'disabled');
        $("#nombre_tienda").parent().css("opacity", 0.5);
        $("#subdominio_tienda").val('');
        $("#subdominio_tienda").attr('disabled', 'disabled');
        $("#subdominio_tienda").parent().css("opacity", 0.5);

        Materialize.updateTextFields();

         $.confirm({
          icon: 'error',
          theme: 'modern',
          closeIcon: false,
          animation: 'scale',
          type: 'red',
          title: 'RUC Invalido',
          columnClass: 'small',
          content: 'Tu RUC debe tener exactamente 11 carácteres',
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
      else{
        //Eliminar disable de inputs
        $(".input-field").not('.notDisabled').each(function(){
            $(this).css("opacity", 1);
            $(this).find("input").removeAttr('disabled');
        });
        // datos_sunat(ruc, 2);
         registroError = false;
      }
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
        else{
          var ruc = obj.result.RUC;
          
          if(ruc.substr(0,2) == 10)
          {
            document.getElementById("nombre").value = obj.result.RazonSocial;

            $("#razon_social").parent().addClass('hide');
          }
        }
      }else{
        $("#razon_social").parent().addClass('hide');
        $("#nombre_tienda").val('');
        $("#nombre_tienda").attr('disabled', 'disabled');
        $("#nombre_tienda").parent().css("opacity", 0.5);
        $("#subdominio_tienda").val('');
        $("#subdominio_tienda").attr('disabled', 'disabled');
        $("#subdominio_tienda").parent().css("opacity", 0.5);

        $.confirm({
          icon: 'error',
          theme: 'modern',
          closeIcon: false,
          animation: 'scale',
          type: 'red',
          title: 'RUC Invalido',
          columnClass: 'small',
          content: 'El RUC es incorrecto o no existe en la SUNAT',
          draggable: false,
          buttons: {
            Entendido: {
              btnClass: 'btn pormayorUnico',
              action: function (){
                
              }
            },
          }
       });
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