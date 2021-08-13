$(document).ready(function(){

 $('#cart_details').load( base_url+'productos/load');

 $(document).on('click', '.remove_inventory', function(){
  var row_id = $(this).attr("id");
  if(confirm("¿Estás seguro de que quieres eliminar esto?"))
  {
   $.ajax({
    url: base_url+'productos/remove',
    method:"POST",
    data:{row_id:row_id},
    success:function(data)
    {
      Materialize.toast('Producto eliminado del carrito', 3000, 'rounded');
     $('#cart_details').html(data);
     location.reload();
    }
   });
  }
  else
  {
   return false;
  }
 });

 $(document).on('click', '.clear_cart', function(){
  if(confirm("¿Estás seguro de que quieres despejar el carrito?"))
  {
   $.ajax({
    url:base_url+'productos/clear',
    success:function(data)
    {
     Materialize.toast('Carrito limpio', 3000, 'rounded');
     $('#cart_details').html(data);
     location.reload();
    }
   });
  }
  else
  {
   return false;
  }
 });

});