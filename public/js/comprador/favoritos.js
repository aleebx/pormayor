$(document).ready(function(){
  
  $('.btnEliminar').click(function(){

    var id_producto = $(this).data('id_producto');

    $.ajax({
      data:{
        id_producto: id_producto,
        valor: 0
      },
      type: "POST",
      url: base_url+'productos/ajax_favorito',
      success: function(data){
        var content = JSON.parse(data);

        if(content.estatus == 'success')
        {
          Materialize.toast('<i class="material-icons left ">warning</i>Eliminado de favoritos', 2000, 'rounded warningToast');
          window.location.href = base_url+'comprador/index/favoritos';
        }
        else
        {
          Materialize.toast('<i class="material-icons left ">warning</i>Error', 2000, 'rounded warningToast');
        }
      }
    });
  });

function buildSlugValue(str) {
  str = str.replace(/^\s+|\s+$/g, ''); // trim
  str = str.toLowerCase();
  // remove accents, swap ñ for n, etc
  var from = "ãàáäâẽèéëêìíïîõòóöôùúüûñç·/_,:;";
  var to = "aaaaaeeeeeiiiiooooouuuunc------";
  for (var i = 0, l = from.length; i < l; i++) {
      str = str.replace(new RegExp(from.charAt(i), 'g'), to.charAt(i));
  }
  str = str.replace(/[^a-z0-9 -]/g, '') // remove invalid chars
      .replace(/\s+/g, '-') // collapse whitespace and replace by -
      .replace(/-+/g, '-'); // collapse dashes
  return str;
}

  $(".detalleProducto2").click(function() {
      var o = $(this).data("idproducto");
      var t = $(this).data("nombre").toString();
      var proGuion = buildSlugValue(t); 
      var res = "pormayor-".concat(o); 
      var res2 = res.concat("-"); 
      e = res2.concat(proGuion);
      window.open("https://pormayor.pe/productos/dp/" + e);
  });
});