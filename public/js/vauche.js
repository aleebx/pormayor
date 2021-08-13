$(document).ready(function(){
$('.materialboxed').materialbox();
 
$('#btnRegistrarComprobante').click(function(){
      var id = $(this).data('idv');
      var fecha = $('#Fechacomprobante').val();
      var comprobante = $('#Numcomprobante').val();
      var tipoP = $('#selPag').val();
      var monto = $('#montoV').val();
      $.ajax({
        data:{
          id : id,
          fecha : fecha,
          comprobante : comprobante,
          tipoP : tipoP,
          monto : monto
        },
        type:"POST",
        dataType:"json",
        url:base_url+'comprador/compra/guardar_voucher', 
        success: function(r) 
        {
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
                url:base_url+'comprador/compra/imgV2/'+r,
                method:"POST",
                data:form_data,
                contentType:false,
                cache:false,
                processData:false,
                beforeSend:function() {             
                  $("#loadTienda").html('<div class="progress customColorA"><div class="indeterminate customColorB"></div></div>');
                },
                success:function(r2) {
                  location.reload(true);
                }
              })
            } else {
              alert(error);
            }
        }
      });
  });

  $('.confirmV').click(function(){
    var id = $(this).data('vau');
    $.ajax({
        data:{
          id : id
        },
        type:"POST",
        dataType:"json",
        url:base_url+'vnd/confirmar_vauche', 
        success: function(r) 
        {

        }
    });
  });

  $('.cancelV').click(function(){
    var id = $(this).data('vau');
    $.ajax({
        data:{
          id : id
        },
        type:"POST",
        dataType:"json",
        url:base_url+'vnd/cancelar_vauche', 
        success: function(r) 
        {

        }
    });

  });

});