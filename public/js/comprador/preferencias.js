$(document).ready(function(){
  $('.prefeBtn img').click(function(){
      var actual=$(this);
      if (actual.hasClass("checked")){
        actual.removeClass('prefeActiva');
        actual.removeClass('checked');
      }else{
        actual.addClass('prefeActiva');
        actual.addClass('checked');
      }
  });

  $('#btnGuardar').click(function(){
    var i=0;
    var valido=false;
    var array_preferencias=[];

    $('.checked').each(function(){
        var id_categoria=$(this).data('idcat');
        array_preferencias[i]=[id_categoria];
        i++;
        valido=true;
    });
    var string_preferencias=array_preferencias.join();
    if(valido) {
      $.ajax({
        data: {
          'string_preferencias':string_preferencias
        },
        type:"POST",
        dataType:"json",
        url:base_url+'comprador/index/ajax_guardar_preferencias', 
        success:function(data) {
          if(data) {
            $.confirm({
              icon:'email',
              type:'green',
              theme:'modern',
              closeIcon:false,
              draggable:false,
              animationBounce:1.5,
              autoClose:'Aceptar|3000',
              title:'Preferencias guardadas',
              columnClass:'small',
              content:'Gracias por unirte a pormayor.pe, tus preferencias fueron guardadas exitosamente.',
              buttons: {
                Aceptar: {
                  btnClass:'btn',
                  action: function (){
                    window.location.href=base_url;
                  }
                }
              }
            });
          } else {
            Materialize.toast('<i class="material-icons left ">info</i>Ocurrió un error',2000,'rounded errorToast');
          }
        }
      });
    } else {
      Materialize.toast('<i class="material-icons left ">warning</i>No se ha seleccionado ninguna categoría',2000,'rounded warningToast');
    }
  });

  $('#btnRegistrarComprobante').click(function(){
    if($('#Numcomprobante').val() && $('#Fechacomprobante').val() && $('#nameImg').val()) {
      var id = $('#idVenta').val();
      var idVoucher = $('#idVoucher').val();
      var fecha = $('#Fechacomprobante').val();
      var comprobante = $('#Numcomprobante').val();
      $.ajax({
        data:{
          id : id,
          idVoucher : idVoucher,
          fecha : fecha,
          comprobante : comprobante
        },
        type:"POST",
        dataType:"json",
        url:base_url+'comprador/compra/guardar_voucher', 
        success: function(r) 
        {
          console.log(r);
          console.log($('#nameImg').val());
            if($('#nameImg').val()=='yes') {
            var files=$('#logoImg')[0].files;
            var error='';
            var form_data=new FormData();
            console.log(files);
            for(var count=0;count<files.length;count++) {
              var name=files[count].name;
              var extension=name.split('.').pop().toLowerCase();
              
              if(jQuery.inArray(extension,['gif','png','jpg','jpeg'])==-1) {
                error += "Imagen  " + count + " invalida"
              } else {
                form_data.append("files[]", files[count]);
              }
            }            
            if(error=='') {
              $.ajax({
                url:base_url+'comprador/compra/imgV2/'+id,
                method:"POST",
                data:form_data,
                contentType:false,
                cache:false,
                processData:false,
                beforeSend:function() {             
                  $("#loadTienda").html('<div class="progress customColorA"><div class="indeterminate customColorB"></div></div>');
                },
                success:function(r2) {
                  if(r2){
                    $.confirm({
                      type:'green',
                      icon:'email',
                      theme:'modern',
                      closeIcon:false,
                      draggable:false,
                      animationBounce:1.5,
                      columnClass:'small',
                      title:'Registrar Comprobante de Pago',
                      content:'Gracias por unirte a pormayor.pe, tu comprobante de pago fue guardado exitosamente.',
                      buttons: {
                        Aceptar: {
                          btnClass:'btn',
                          action:function () {
                            location.reload();
                          }
                        }
                      }
                    });
                  } else {
                    Materialize.toast('<i class="material-icons left ">info</i>Ocurrió un error',2000,'rounded errorToast');
                  }
                }
              })
            } else {
              alert(error);
            }
          } else {
            if(r){
              $.confirm({
                      type:'green',
                      icon:'email',
                      theme:'modern',
                      closeIcon:false,
                      draggable:false,
                      animationBounce:1.5,
                      columnClass:'small',
                      title:'Registrar Comprobante de Pago',
                      content:'Gracias por unirte a pormayor.pe, tu comprobante de pago fue guardado exitosamente.',
                      buttons: {
                        Aceptar: {
                          btnClass:'btn',
                          action:function () {
                            location.reload();
                          }
                        }
                      }
                    });
                  } else {
                    Materialize.toast('<i class="material-icons left ">info</i>Ocurrió un error',2000,'rounded errorToast');
                  }

          }  
        }
      });
    } else {
      if($('#Numcomprobante').val()=='') {
        var campo='Numero de Comprobante';
      } else if($('#Fechacomprobante').val()=='') {
        var campo='Fecha de Comprobante';
      } else if($('#nameImg').val()=='') {
        var campo='o Cargar foto del comprobante';
      }
      Materialize.toast('<i class="material-icons left ">warning</i>Debes ingresar '+campo+', campo obligatorio.',2000, 'rounded warningToast');
    }
  });

    //LOGO
    var DetalleTienda;
    var Tid_IdTiendaDetalle;
    var NoImg;
    var nTienda;
    var Tie_IdTienda;
    $(function() {
        // Multiple images preview in browser
        var imagesPreview = function(input, placeToInsertImagePreview) {
          if (input.files) {
            var filesAmount = input.files.length;
            for (i = 0; i < filesAmount; i++) {
              var reader = new FileReader();
              reader.onload = function(event) {
                $($.parseHTML('<img style="width:95%" class="redondeo responsive-img">')).attr('src', event.target.result).appendTo(placeToInsertImagePreview);
              }
              reader.readAsDataURL(input.files[i]);
            }
          }
        };
        $('#logoImg').change(function() {
          if ($(this).val()){
            $('#fotoPro6').text('');
            $('#nameImg').val('yes')
            imagesPreview(this, 'div#fotoPro6');
          }
        });
    });
});

