$(document).ready(function(){
  if (mediaqueryPC.matches) {
   $('#depSelect').select2();
   $('#catSelect').select2();
  }

  $(function() {
    var imagesPreview = function(input, placeToInsertImagePreview) {
      if (input.files) {
          var filesAmount = input.files.length;
          for (i = 0; i < filesAmount; i++) {
              var reader = new FileReader();
              reader.onload = function(event) {
                  $($.parseHTML('<img class="centrarForzado" style="max-width: 100%;max-height: 120px;">')).attr('src', event.target.result).appendTo(placeToInsertImagePreview);
              }
              reader.readAsDataURL(input.files[i]);
          }
      } 
    };
    $('#logoImg').change(function() {
      var inputLogo = this;
      var fileInput = $('#logoImg')[0];
      var file = fileInput.files && fileInput.files[0];
      var img = new Image();
      img.src = window.URL.createObjectURL(file);
      img.onload = function() {
        var width = img.naturalWidth,
            height = img.naturalHeight;
        window.URL.revokeObjectURL( img.src );

        if(height < 200) {
          Materialize.toast('<i class="material-icons left ">error</i>La imagen no tiene el tamaño minimo permitido', 2000, 'rounded errorToast');
        }else{
          var Tie_IdTienda = $('#logoImg').data("tie");
          var files = $('#logoImg')[0].files;
          var error = '';
          var form_data = new FormData();
          for(var count = 0; count<files.length; count++){
           var name = files[count].name;
           var extension = name.split('.').pop().toLowerCase();
           if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1){
            error += "Imagen  " + count + " invalida"
           }else{
            form_data.append("files[]", files[count]);
           }
          }
          if (error == '') {
            $('#fotoPro1').text('');
            imagesPreview(inputLogo, 'div#fotoPro1');
            var loading_screen = pleaseWait({
              logo: '',
              backgroundColor: "#1313137d",
              loadingHtml: "<i style='font-size:70px' class='white-text material-icons'>photo</i><h4 style='font-weight: 600;' class='white-text'>Subiendo foto</h4><div class='sk-folding-cube'><div class='sk-cube1 sk-cube'></div><div class='sk-cube2 sk-cube'></div><div class='sk-cube4 sk-cube'></div><div class='sk-cube3 sk-cube'></div></div>"
            });
            $.ajax({
              url: base_url + 'tienda/subirImagenLogo/'+Tie_IdTienda,
              method:"POST",
              data:form_data,
              contentType:false,
              cache:false,
              processData:false,
              success:function(r)
              {
                loading_screen.finish();
                Materialize.toast('<i class="material-icons left ">check_circle</i>Datos guardados exitosamente', 1500, 'rounded successToast');
              }
           });
          }
        }
      };
    });
  });

  var colorPrimario = $('.colorPrin').data('cp');
  var colorSecundario = $('.colorAcen').data('ca');
  var nroClics = 1;

  $(".colorBox div div").click(function(){
    if (nroClics == 1){
      $(this).find(".checkSign").css("color","rgba(0,0,0,1)");
      $(this).css("transform","scale(0.8,0.8");
      colorPrimario = $(this).data('color');
      nroClics ++ ;
    }else if (nroClics == 2){
      $(this).find(".checkSign").css("color","rgba(255,255,255,0.6)");
      $(this).css("transform","scale(0.8,0.8");
      colorSecundario = $(this).data('color');
      nroClics ++;
    }else if (nroClics == 3){
      $('.checkSign').each(function() {
          $(this).css("color","rgba(255,255,255,0.0)");

      });
      $('.colorBox div div').each(function() {
          $(this).css("transform","scale(1,1");
      });
      $(this).css("transform","scale(0.8,0.8");
      $(this).find(".checkSign").css("color","rgba(0,0,0,0.6)");
      colorPrimario = $(this).data('color');
      nroClics = 2;
    }
    //alert($(this).data('color'));
  });
  
        
  $('.continuarBtn').click(function(){
    var dep = $('#depSelect').val();
    var cat = $('#catSelect').val();
    var files = $('#logoImg')[0].files;

    if (dep==null){
      Materialize.toast('<i class="material-icons left ">warning</i>Seleccione un departamento', 1500, 'rounded warningToast');
    }else if (cat==null){
      Materialize.toast('<i class="material-icons left ">warning</i>Seleccione un giro para su tienda', 1500, 'rounded warningToast')         
    }else{  
      $('a[href="#personalizacion"]').parent().removeClass('disabled');   
      $('ul.tabs').tabs('select_tab', 'personalizacion');           
    }
  });

  $('.irConfiguracion').click(function(){
    $('a[href="#personalizacion"]').parent().addClass('disabled');
  });

  $('.atrasBtn').click(function(){
    $('ul.tabs').tabs('select_tab', 'configuracion');  
    $('a[href="#personalizacion"]').parent().addClass('disabled');
  });

  $('.guardarTienda').click(function(){
      var imagenSlider;
      var Tie_IdTienda = $(this).data('tie');
      var Tie_Subdominio = $(this).data('subdominio');

      var colorHex = colorPrimario;
      var colorHex2 = colorSecundario;
      var dep = $('#depSelect').val();
      var cat = $('#catSelect').val();
      var gal = 0;

      //Imagen de header
      var randomNum = Math.floor(Math.random() * (10)) + 1;
      if (cat == 1) {
        imagenSlider = "belleza"+randomNum+".webp";
      }else if (cat == 2) {
        imagenSlider = "calazado"+randomNum+".webp";
      }else if (cat == 3) {
        imagenSlider = "celulares"+randomNum+".webp";
      }else if (cat == 4) {
        imagenSlider = "computacion"+randomNum+".webp";
      }else if (cat == 5) {
        imagenSlider = "deportes"+randomNum+".webp";
      }else if (cat == 6) {
        imagenSlider = "electro"+randomNum+".webp";
      }else if (cat == 7) {
        imagenSlider = "ferreteria"+randomNum+".webp";
      }else if (cat == 8) {
        imagenSlider = "hogar"+randomNum+".webp";
      }else if (cat == 9) {
        imagenSlider = "bebes"+randomNum+".webp";
      }else if (cat == 10) {
        imagenSlider = "oficina"+randomNum+".webp";
      }else if (cat == 11) {
        imagenSlider = "accesorios"+randomNum+".webp";
      }else if (cat == 12) {
        imagenSlider = "ropa"+randomNum+".webp";
      }else if (cat == 13) {
        imagenSlider = "salud"+randomNum+".webp";
      }else if (cat == 14) {
        imagenSlider = "tv"+randomNum+".webp";
      }else if (cat == 15) {
        imagenSlider = "bebida"+randomNum+".webp";
      }


      $.ajax({
        data:{
          'colorHex' : colorHex,
          'colorHex2' : colorHex2,
          'Tie_IdTienda' : Tie_IdTienda,
          'dep' : dep,
          'cat' : cat,
          'gal' : gal,
          'imagenSlider' : imagenSlider
          },
          type: 'POST',
          url: base_url+'tienda/configuracion_tienda',
          success: function (r){
           window.location.href = "https://"+ Tie_Subdominio +".pormayor.pe/usuario/inventario/lProductos";
          }
      });
    });
  });