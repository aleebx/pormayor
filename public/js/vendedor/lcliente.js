$(document).ready(function() {
 $('.assCliente').click(function(){
  var id_usuario = $(this).data('idu');
   $.ajax({
       data:{
        id_usuario : id_usuario
       },
       type: "POST",
       url: base_url+'vnd/asignar', 
       dataType: "json",
       success: function(data){
        console.log(data);
          $('#td'+id_usuario).text('CLIENTE');
       },
       error: function(data) {
         alert('error');
         console.log(data);
       }
    });
 });
});