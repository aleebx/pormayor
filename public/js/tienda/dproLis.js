$(document).ready(function() {
var totalImporte = 0;
$('.input-number-increment').click(function() {
  var $input = $(this).parents('.input-number-group').find('.input-number');
  var val = parseInt($input.val(), 10);
  stock = $input.data('dispo');
  if (stock > val) {
    $input.val(val + 1); 
  }
});

$('.input-number-decrement').click(function() {
  var $input = $(this).parents('.input-number-group').find('.input-number');
  var val = parseInt($input.val(), 10);
  if (val != 0 ) {
    $input.val(val - 1);
    totalSku = 0;  
    var valor = 0;
    var valor2 = 0;
  }
})

  var clickAddCart=0;
  $('.add_cart').click(function(){
    idpro = $(this).data('idp');
    clickAddCart = 1;
    var img=[];
    var color=[];
    var unidad=[];
    var cantmin=[];
    var quantity=[];
    var cantVenta=0;
    var idtienda=[];
    var siproducto=0;
    var variacion=[];
    var documento=[];
    var product_id=[];
    var price_min=[];
    var id_producto=[];
    var precio_unit=[];
    var product_name=[];
    var product_price=[];
    var tipovariacion=[];
    price_min1 = $(this).data('pmin');
    flagVariaciones = false;


    var cantIn = $('.cantSku'+idpro).val();
    if (cantIn > 0) {
    $(this).text('AGREGADO');
    $(this).addClass('green');
        quantity.push($('.cantSku'+idpro).val());
        img.push($('.cantSku'+idpro).data("img"));
        color.push($('.cantSku'+idpro).data("color"));
        unidad.push($('.cantSku'+idpro).data("unidad"));
        product_price.push(price_min1);
        cantmin.push($('.cantSku'+idpro).data("minventa"));
        id_producto.push($('.cantSku'+idpro).data("idpro"));
        idtienda.push($('.cantSku'+idpro).data("idtienda"));
        variacion.push($('.cantSku'+idpro).data("variacion"));
        documento.push($('.cantSku'+idpro).data("documento"));
        product_id.push($('.cantSku'+idpro).data("productid"));
        precio_unit.push(price_min1);
        price_min.push(price_min1);
        product_name.push($('.cantSku'+idpro).data("productname"));
        tipovariacion.push($('.cantSku'+idpro).data("tipovariacion"));
        cantVenta=Number(cantVenta) + Number($('.cantSku'+idpro).val());
          $.ajax({
            url:base_url+'productos/add',
            method:"POST",
            data:{
              img:img,
              color:color, 
              unidad:unidad,
              cantmin:cantmin,
              idtienda:idtienda, 
              quantity:quantity, 
              variacion:variacion,
              documento:documento,
              product_id:product_id, 
              id_producto:id_producto,
              precio_unit:precio_unit,
              product_name:product_name, 
              product_price:product_price, 
              tipovariacion:tipovariacion,
              price_min:price_min,
              flagVariaciones:flagVariaciones
            },
            beforeSend:function(){  
              // console.log(data);
            },
            success:function(data) {
              Materialize.toast('<i class="material-icons left">add</i>Agregado correctamente', 2000, 'rounded successToast');
              $('.cantSku'+idpro).val(0);
            }
          });
 
    }else{
        Materialize.toast('<i class="material-icons left">warning</i>El mínimo de compra no es válido para este producto', 2000, 'rounded warningToast');

    }
  });

});