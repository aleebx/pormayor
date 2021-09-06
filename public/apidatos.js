$('.buscarDatos').click(function(){
      var tipo =  $(this).data('tipo');
      if (tipo == 1) {
      var numerodoc = $('#numerodoc').val();
      }else{
      var numerodoc = $("#ruc").va();
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
            console.log(r);
        }
    });
});
