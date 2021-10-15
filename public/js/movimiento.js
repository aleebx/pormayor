$(document).ready(function(){
 $('.select2').select2();
function actualizar(){
  var hola = 1;
   $('#prodMalo').load(base_url+'stock/listado', {hola:hola});
}

$('.addMovimiento').click(function(){
      var Pro_IdProducto = $('#selProducto :selected').val();
      var codCaja = $('#codCaja').val();
      var cantC = $('#cantC').val();
      var cantUni = $('#cantUni').val();
      var inicial = $('#selMovimiento').val();
      var movimiento = $('#selMovimiento2').val();
      $.ajax({
        data:{
          Pro_IdProducto : Pro_IdProducto,
          codCaja : codCaja,
          cantC : cantC,
          cantUni : cantUni,
          movimiento : movimiento,
          inicial : inicial
        },
        type:"POST",
        dataType:"json",
        url:base_url+'almacen/registro',
        beforeSend:function() {             
          $("#lmov").html('<div class="progress customColorA"><div class="indeterminate customColorB"></div></div>');
        },
        success: function(r) 
        {
           location.reload(true);
        }
      });
  }); 
});