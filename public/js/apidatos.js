$('.buscarDatos').click(function(){
      var tipo =  $(this).data('tipo');
      if (tipo == 1) {
      var numerodoc = $('#numerodoc').val();
      }else{
      var numerodoc = $("#ruc").val();
      }
      console.log(tipo,numerodoc);
      $.ajax({
        data:{
          numerodoc : numerodoc,
          tipo : tipo
        },
        type:"POST",
        dataType:"json",
        url:base_url+'apidatos/datoscliente2', 
        success: function(r) 
        {
            console.log(r);
            if (r.success == true) {
              if(tipo == 1){                
              $('#razonSocial2').val(r.data.nombre_completo);
              }else{
              $('#rSocial').val(r.data.nombre_o_razon_social);
              $('#ubigeoFac').val(r.data.ubigeo[2]);
              $('#direccionFac').val(r.data.direccion_completa);
              }
            }
        }
    });
});
