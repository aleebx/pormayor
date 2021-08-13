$('.nav-content').hide(500); 
$('.filtrarBtn').hide(0); 
$(document).ready(function(){
$('.comentsBtn').addClass('hide');
$('#pedidoItems').stick_in_parent({
    inner_scrolling: false,
    offset_top: 65
  });      

$('#selecRegion').material_select();
    $("#siDireccion").on( 'change', function() {
    if( $(this).is(':checked') ) {
          $("#direccionVista").removeClass('hide');
        // Hacer algo si el checkbox ha sido seleccionado
        // alert("El checkbox con valor " + $(this).val() + " ha sido seleccionado");
    } else {
        $("#direccionVista").addClass('hide');
        // Hacer algo si el checkbox ha sido deseleccionado
        // alert("El checkbox con valor " + $(this).val() + " ha sido deseleccionado");
    }
});
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
           },
           error: function(data) {
             alert('error');
           }
        });
 
    });
    $("#btnCotizar").click(function(){
       var nombre = [ $('#nombreComprador').val(), $('#nombreComprador')];
       // var apellido = [ $('#apellidoComprador').val(), $('#apellidoComprador')];
       var telf = [ $('#tlf').val(), $('#tlf')];
       var idtienda = $(this).data('idtienda');
       var Usu_IdUsuario = $(this).data('idusuario');
       // console.log(idtienda);
       var correo = [ $('#correo').val(), $('#correo')]; 
       var comentario = [];         
        if( $("#siDireccion").is(':checked') ) {
          // console.log('1c');
          var region = [ $('#selecRegion').val(), $('#selecRegion')];
          var provincia = [ $('#selProvincia').val(), $('#selProvincia')];
          var distrito = [ $('#selDistrito').val(), $('#selDistrito')];
          var direccion = [ $('#direccionComprador').val(), $('#direccionComprador')];
          
        } else {  
          var region = ["0", $('#campoNO')];
          var provincia = ["0", $('#campoNO')];
          var distrito = ["0", $('#campoNO')];
          var direccion = ["0", $('#campoNO')];
          // console.log('2o');
          
        }
        if ($('textarea#comentario').val() === "undefined") {
         comentario = [$('textarea#comentario').val(), $('textarea#comentario')];   
         // console.log('3w');  
        } else {
         comentario = [ "Sin comentario", $('textarea#comentario')];       
         // console.log('4w');  
        }
          // console.log(comentario);
       var arr = [];
       
       arr.push(nombre, telf, correo, region, provincia, distrito, direccion,comentario);
       var error = false;
       //console.log(arr);
       arr.forEach(function(element){
            if ((element[0]) == ""){
                error = true;
                element[1].addClass(" invalid");
            }
       });
        if (error){
            Materialize.toast('<i class="material-icons left ">warning</i>No puedes dejar campos vacios', 2000, 'rounded warningToast');
        }else{
            arr2 = [];
            i=0;
            arr.forEach(function(element){
                arr2[i] = element[0];
                i++;
            });
            // console.log(arr2);
            $.confirm({
                icon: 'send',
                theme: 'modern',
                closeIcon: false,
                animation: 'scale',
                type: 'green',
                title: 'Enviar Cotizacion',
                columnClass: 'small',
                content: 'Los datos ingresados deben ser correctos y veridicos',
                draggable: false,
                buttons: {
                    Enviar: {
                      btnClass: 'btn pormayorUnico',                    
                      action: function (){
                        $.ajax({data:{
                          'arrData': arr2,
                          'idtienda':idtienda
                          },
                          type: 'POST',
                          url: base_url+'productos/enviarPedido',
                          success: function (r){
                            var productos="";
                            $('.nombreProCoti').each(function(){
                              productos = productos + $(this).text()+", ";
                            });
                            productos = productos.slice(0,-2);
                            $.confirm({
                              icon: 'thumb_up',
                              theme: 'modern',
                              closeIcon: false,
                              animationBounce: 1.5,
                              type: 'green',
                              title: 'Cotizacion solicitada',
                              columnClass: 'small',
                              content: 'La cotizacion de '+productos+' fue solicitada exitosamente. Te <b>enviamos un correo</b> con toda la información  ',
                              draggable: false,
                              buttons: {
                                  Aceptar: {
                                    text: 'Seguir cotizando',
                                    btnClass: 'btn pormayorUnico',                    
                                      action: function (){
                                        window.location.href = base_url+'index';
                                          
                                      }       
                                  }
                              }
                            });
                              
                          }
                      });   
                      }       
                    },
                    Cancelar: {
                
                    }
                }
              });
        }
    });
});