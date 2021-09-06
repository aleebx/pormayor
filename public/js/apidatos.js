$('.buscarDatos').click(function(){
      var tipo =  $(this).data('tipo');
      if (tipo == 1) {
      var numerodoc = $('#numerodoc').val();
      }else{
      var numerodoc = $("#ruc").val();
      }
      $.ajax({
        data:{
          numerodoc : numerodoc,
          tipo : tipo
        },
        type:"POST",
        dataType:"json",
        url:base_url+'apidatos/datoscliente', 
        success: function(r) 
        {
            if (r.success == true) {
              if(tipo == 1){                
              $('#razonSocial2').val(r.data.nombre_completo);
              }else{
              $('#razonSocial').val(r.data.nombre_o_razon_social);
              $('#ubigeo').val(r.data.ubigeo[2]);
              $('#direccion').val(r.data.direccion_completa);
              }
            }
        }
    });
});
