$('.buscarRUC').click(function(){
      var numerodoc = $("#ruc").val();
      console.log(numerodoc);
      if (numerodoc.length == 11) {
        $.ajax({
          data:{
            numerodoc : numerodoc
          },
          type:"POST",
          dataType:"json",
          url:base_url+'apidatos/consultaruc', 
          success: function(r) 
          {
              console.log(r);
              if (r.success == true) {
                $('#rSocial').val(r.data.nombre_o_razon_social);
                $('#ubigeoFac').val(r.data.ubigeo[2]);
                $('#direccionFac').val(r.data.direccion_completa);
                $('#errorRuc').text("");
              }else{
                $('#errorRuc').text("RUC INVALIDO");
              }

          }
        });
      }else{
        $('#errorRuc').text("RUC INVALIDO - DEBE SER DE 11 DIGITOS");
      }
});

$('.buscarDNI').click(function(){
      var numerodoc = $("#numerodoc").val();
      console.log(numerodoc);
      // if (numerodoc.length == 8) {
        $.ajax({
          data:{
            numerodoc : numerodoc
          },
          type:"POST",
          dataType:"json",
          url:base_url+'apidatos/consultadni', 
          success: function(r) 
          {
              console.log(r);
              if (r.success == true) {
                $('#razonSocial2').val(r.data.nombre_completo);
                $('#errorDNI').text();
              }else{
                $('#errorDNI').text("DNI INVALIDO");
              }

          }
        });
      // }
});
