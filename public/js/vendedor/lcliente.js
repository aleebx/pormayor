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
        if (data == 1) {
          $('#td'+id_usuario).text('CLIENTE');
        }else{
          $('#td'+id_usuario).text('YA ESTA ASIGNADO A OTRO VENDEDOR');          
        }
       },
       error: function(data) {
         alert('error');
         console.log(data);
       }
    });
 });
});