$('.TiendaInact').on("click",function(){
  
  var nombre=$(this).data('name');
  var checkActual=$(this).data('estado');
  var id_tienda=$(this).data('idtienda');
 
  if(checkActual == 1) {
      $.confirm({
        icon:'help',
        theme:'modern',
        closeIcon:false,
        animation:'scale',
        type:'orange',
        title:'Activar tienda',
        columnClass:'small',
        content:'¿Esta seguro de activar la tienda : '+nombre+'?',
        draggable:false,
        buttons: {
          Activar: {                    
            action: function (){
              $.ajax({
                data:{'id_tienda':id_tienda,'status':checkActual},
                type:"POST",
                url:base_url+'admin/Tiendas/estado_tienda', 
                dataType:"json",
                success: function(data){
                  location.reload(true);
                },
              });
            }       
          },
          Cancelar: {
            btnClass: 'btn',
            action: function (){
              // checkActual.prop('checked','checked')
            }    
          }
        }
      });
  }else{
    $.confirm({
      icon: 'warning',
      theme: 'modern',
      closeIcon: false,
      animation: 'scale',
      type: 'orange',
      title: 'Desactivar tienda',
      columnClass: 'small',
      content: '¿Esta seguro de desactivar la tienda : '+nombre+'?',
      draggable: false,
      buttons: {
        Desactivar: {   
          btnClass: 'btn',                 
          action: function (){
            $.ajax({
              data:{'id_tienda':id_tienda,'status':checkActual},
              type: "POST",
              url: base_url+'admin/Tiendas/estado_tienda', 
              dataType: "json",
              success: function(data){
                location.reload(true);
              },
            });
          }       
        },
      }
    });
  }
});

function getProvinces() {

  if($('#selectRegion').val()) {
    $('#selectDistritos').val(0);
    $('#selectProvincia').val(0);
    $.get(base_url+'/admin/tiendas/getselectProvincia/'+$('#selectRegion').val(), function (data) {
      var result=JSON.parse(data);
        
      // Combo de provincia
      $('#selectProvincia').val('');
      $('#selectProvincia').empty();
      var provincia=result.provincia_tienda;
      var select=document.getElementsByName('selectProvincia')[0];
    
      var option=document.createElement("option");
          option.value='0';
          option.text='Seleccione una provincia';
          select.add(option);

      for (value in provincia) {
        var option=document.createElement("option");
            option.value=provincia[value]['id'];
            option.text=provincia[value]['name'];
            select.add(option);
      }

      if($('#provinciaOcult').val() && $('#selectRegion').val()==$('#regionOcult').val()) {
        $('#selectProvincia').val($('#provinciaOcult').val());
          getDistrito($('#provinciaOcult').val());
      } else {
        $('#selectProvincia').val(0);
      }
    });  
  }
}

function getDistrito(val) {

  if($('#selectProvincia').val() || val) {
    if(val) {var selectProvincia=val;}else{var selectProvincia=$('#selectProvincia').val();}
    $.get(base_url+'/admin/tiendas/getselectDistrito/'+selectProvincia, function (data) {
      var result=JSON.parse(data);
        
      // Combo de provincia
      $('#selectDistritos').val('');
      $('#selectDistritos').empty();
      var distrito=result.distrito_tienda;
      var select=document.getElementsByName('selectDistritos')[0];
      
      var option=document.createElement("option");
          option.value='0';
          option.text='Seleccione un distrito';
          select.add(option);

      for (value in distrito) {
        var option=document.createElement("option");
            option.value=distrito[value]['id'];
            option.text=distrito[value]['name'];
            select.add(option);
      }

      if($('#departamentoOcult').val() && selectProvincia==$('#provinciaOcult').val()) {
        $('#selectDistritos').val($('#departamentoOcult').val());
      } else {
        $('#selectDistritos').val(0);
      }
    });  
  }
}

$("#btnEditComprador").click(function(){

  var tlf=$('#tlf').val();
  var correo=$('#correo').val();
  var DNIORUC=$('#DNIORUC').val();
  var idPersona=$('#idPersona').val();
  var selectRegion=$('#selectRegion').val();
  var selectProvincia=$('#selectProvincia').val();
  var selectDistritos=$('#selectDistritos').val();
  var nombreComprador=$('#nombreComprador').val();
  var direccionComprador=$('#direccionComprador').val();
  
  if (nombreComprador=='' || tlf=='' || correo=='' || direccionComprador=='' || (selectDistritos==null || selectDistritos=='0')){
    Materialize.toast('<i class="material-icons left ">warning</i>No puedes dejar campos vacios', 2000, 'rounded warningToast');
  }else{
    $.confirm({
      icon: 'send',
      theme: 'modern',
      closeIcon: false,
      animation: 'scale',
      type: 'green',
      title: 'Editar comprador',
      columnClass: 'small',
      content: 'Los datos ingresados deben ser correctos y veridicos',
      draggable: false,
      buttons: {
        Guardar: {
          btnClass: 'btn pormayorUnico',                    
          action: function (){
            $.ajax({data:{
              'DNIORUC': DNIORUC,
              'idpersona':idPersona,
              'nombreComprador':nombreComprador,
              'tlf':tlf,
              'correo':correo,
              'selectRegion':selectRegion,
              'selectProvincia':selectProvincia,
              'selectDistritos':selectDistritos,
              'direccionComprador':direccionComprador
            },
            type: 'POST',
            url:base_url+'/admin/compradores/getEditar_Comprador',
            success: function (r){
              $.confirm({
                icon: 'thumb_up',
                theme: 'modern',
                closeIcon: false,
                animationBounce: 1.5,
                type: 'green',
                title: 'Editar Comprador',
                columnClass: 'small',
                content: 'La edicion del comprador '+nombreComprador+' fue exitosa.',
                draggable: false,
                buttons: {
                  Aceptar: {
                    text: 'Ir a listado de compradores',
                    btnClass: 'btn pormayorUnico',                    
                    action: function (){
                      window.location.href = base_url+'admin/compradores';
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

$('.btnDeleteComp').click(function(){

  var idPersona=$(this).data('idcompr');
  $.confirm({
    icon:'help',
    theme:'modern',
    closeIcon:false,
    animation:'scale',
    type:'orange',
    title:'Eliminar comprador',
    columnClass:'small',
    content:'Una vez elimines el comprador, <b>no podrás recuperar su información</b>. Usa esta opción con cuidado',
    draggable:false,
    buttons: {
      Eliminar: {                    
        action: function (){
          $.ajax({
            data:{'idPersona':idPersona},
            type:"POST",
            url:base_url+'admin/compradores/eliminarComp', 
            dataType:"json",
            success: function(data){
              location.reload(true);
            },
          });
        }       
      },
      Cancelar: {
        btnClass: 'btn',    
      }
    }
  });
});

$('.estP').on("click",function(){

    var checkActual=$(this).data('est');
    var Pro_IdProducto=$(this).data('idpro');
    if (checkActual != 4) {
      $.confirm({
        icon:'help',
        theme:'modern',
        closeIcon:false,
        animation:'scale',
        type:'orange',
        title:'Desactivar producto',
        columnClass:'small',
        content:'Cuando reactives tu producto, este pasará a un estado de revisión por un tiempo máximo de 24 horas',
        draggable:false,
        buttons: {
          Desactivar: {                    
            action: function (){
              $.ajax({
                data:{'Pro_IdProducto':Pro_IdProducto},
                type:"POST",
                url:base_url+'admin/tiendas/desactivar_producto', 
                dataType:"json",
                success: function(data){
                  location.reload(true);
                },
              });
            }       
          },
          Cancelar: {
            btnClass: 'btn',
            action: function (){
            // checkActual.prop('checked','checked')
          }    
        }
      }
    });
  }else{
    $.confirm({
      icon:'warning',
      theme:'modern',
      closeIcon:false,
      animation: 'scale',
      type:'orange',
      title:'Reactivar producto',
      columnClass:'small',
      content:'Tu producto pasará a un estado de revisión por un tiempo no mayor a 24 horas',
      draggable: false,
        buttons: {
          Entendido: {   
            btnClass:'btn',                 
            action: function (){
              $.ajax({
                data:{'Pro_IdProducto' : Pro_IdProducto},
                type:"POST",
                url:base_url+'admin/tiendas/activar_producto', 
                dataType:"json",
                success: function(data){
                  location.reload(true);
                },
              });
            }       
          },
        }
      });
    }
});