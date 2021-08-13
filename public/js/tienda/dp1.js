$(window).on("load", function() {

});

$(document).ready(function() {
  $('.preloadImgMobile').addClass('hide');
  $('.wrapperSliderImgMobile').removeClass('hide');

  $('.sliderMobile').slick({
    dots: true,
    arrows:false,
    infinite: true,
  });
  $('select').material_select();
  $('.materialboxed').materialbox();
  
  var popperCantidad;
  var flagDobeKeyUp=false;
  var flagPrimerResumen=false;
  var flagAgregarCarrito=false;
  var flagSinCantResumen=false;
  const mq=window.matchMedia("(max-width: 768px)");

  $(".VerEnvios").on( "click", function() {  
    $('#visualizs').hide();
    $('#visualizsa').hide();
    $('#visualizarEnvio').toggle();
  });
    
  $("#cantEnvio").change(function() {
    $("#distrito select").trigger('change');        
  });

  $("#selecRegion").change(function(){
    var idRegion=$(this).val();
    $.ajax({
      data:{'idRegion':idRegion},
      type:"POST",
      url:base_url+'productos/load_provincia', 
      dataType:"json",
      success:function(data) {
        $('#provincia').load(base_url+'productos/Select_Provincia',{datos:data});
        $("#provincia select").trigger('change');
      },
      error: function(data) {
        alert('error');
      }
    });
  });

  //FIx Img
  var flagImg=false;
  var imgActual;
  $('.materialboxed').click(function() {
    if(flagImg==false) {
      imgActual=$(this);
      $(this).removeClass('fixImg4');
      flagImg=true;
    } else {
      imgActual.addClass('fixImg4');
      flagImg=false;
    }
  });

  $(document).on('click','#materialbox-overlay',function(){
    if(flagImg==false) {
      $(this).parent().find('img').removeClass('fixImg4');
      flagImg=true;
    } else {
      imgActual.addClass('fixImg4');
      flagImg=false;
    }
  });

  //Zoom 
  var $easyzoom=$('.easyzoom').easyZoom();
  var api1=$easyzoom.filter('.easyzoom--with-thumbnails').data('easyZoom');
  $('.thumbnails').on('click','a',function(e) {
    var $this=$(this);
    e.preventDefault();
    api1.swap($this.data('standard'), $this.attr('href'));
  });

  $('textarea#comentarioPro').characterCounter();

  $('.enviarComentario').click(function(){
    var Usu_IdUsuario=$(this).data('usuario');
    var Tie_IdTienda=$(this).data('idtienda');
    var Pro_IdProducto=$(this).data('idproducto');
    var comentario=$('textarea#comentarioPro').val();     
    if (comentario == '') {
      Materialize.toast('<i class="material-icons left ">warning</i>Escribe tu pregunta', 2000, 'rounded warningToast');
    } else {
      var test_words=comentario.replace(/\s/g, '');
      test_words=test_words.replace(/[`~!@#$%^&*()_|+\-=?;:'",.<>\{\}\[\]\\\/]/gi,'');
      var telefono_test=/\d{9}/;
      var flag=false;
      if(telefono_test.test(test_words)) {
        flag=true;
      }
      if(flag==false) {
        $.ajax({
          data:{
            'comentario':comentario,
            'Tie_IdTienda':Tie_IdTienda,
            'Usu_IdUsuario':Usu_IdUsuario,
            'Pro_IdProducto':Pro_IdProducto
          },
          method:"POST",
          url:base_url+'Productos/comentario',
          success:function(data) {
            Materialize.toast('<i class="material-icons left">check_circle</i> Comentario enviado', 2000, 'rounded successToast');
            $('#divComentario').load(base_url+'Productos/comentarioVer',{data:Pro_IdProducto});
            $('textarea#comentarioPro').val('');
          }
        }); 
      } else {
        Materialize.toast('<i class="material-icons left ">warning</i>Tu comentario no puede incluir informacion personal', 2000, 'rounded warningToast');
      }
    } 
  });

var totalImporte = 0;
$('.input-number-increment').click(function() {
  var $input = $(this).parents('.input-number-group').find('.input-number');
  var val = parseInt($input.val(), 10);
  stock = $input.data('dispo');
  if (stock > val) {
    $input.val(val + 1);  
  totalSku = 0;  
  var valor = 0;
  var valor2 = 0;
  puni = $('.add_cart').data('pmin');
  console.log(val,$input);
  $('.cantSku').each(function(){
    if ($(this).val() > 0){
      valor = parseInt($(this).val()); 
      totalSku = totalSku + valor;
      tamRango = rando_precio.length;
      valor2 += valor;
      var prDL = $('#precioDL').val();
      var idsku = $(this).data('productid');
      console.log(valor,totalSku,tamRango,valor2,prDL,idsku);
        if (Remate == 1) {            
            precio = valor2*puni;
            precio2 = valor*puni;
            $(this).attr("xd",precio2);
            totalImporte = precio.toFixed(2);
        }else {          
          for (i = 0; i < tamRango; i++) {
            if (valor2 >= rando_precio[i]['Prp_Desde'] && valor2 <= rando_precio[i]['Prp_A']){
              precio = valor2*puni;
              precio2 = valor*puni;
              $(this).attr("xd",precio2);
              totalImporte = precio.toFixed(2);
            } 
          }
        }
      }
  });
  $('.totalPro').text(valor2);
  $('.totalPago').text(totalImporte);
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
    puni = $('.add_cart').data('pmin');
    $('.cantSku').each(function(){
      if ($(this).val() > 0){
        valor = parseInt($(this).val()); 
        totalSku = totalSku-valor;
        tamRango = rando_precio.length;
        valor2 += valor;
        var prDL = $('#precioDL').val();
        var idsku = $(this).data('productid');
        if (Remate == 1) {            
            precio = valor2*puni;
            precio2 = valor*puni;
            $(this).attr("xd",precio2);
            totalImporte = precio.toFixed(2);
        }else { 
            for (i = 0; i < tamRango; i++) {
              if (valor2 >= rando_precio[i]['Prp_Desde'] && valor2 <= rando_precio[i]['Prp_A']){
                precio = valor2*puni;
                precio2 = valor*puni;
                $(this).attr("xd",precio2);
                totalImporte = precio.toFixed(2);
              } 
            }
          }
        }
    });
    $('.totalPro').text(valor2);
    $('.totalPago').text(totalImporte);
  }
})

  var clickAddCart=0;
  $('.add_cart').click(function(){
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

    $('.cantSku').each(function(){
      if ($(this).val() > 0) {
        siproducto=1;
        var cantS = $(this).val();
        var cantT = $('.totalPro').text();
        var precUn = totalImporte/cantT;
        pricePS = (cantS*totalImporte)/cantT;
        quantity.push($(this).val());
        img.push($(this).data("img"));
        color.push($(this).data("color"));
        unidad.push($(this).data("unidad"));
        product_price.push(pricePS);
        cantmin.push($(this).data("minventa"));
        id_producto.push($(this).data("idpro"));
        idtienda.push($(this).data("idtienda"));
        variacion.push($(this).data("variacion"));
        documento.push($(this).data("documento"));
        product_id.push($(this).data("productid"));
        precio_unit.push(precUn);
        price_min.push(price_min1);
        product_name.push($(this).data("productname"));
        tipovariacion.push($(this).data("tipovariacion"));
        cantVenta=Number(cantVenta) + Number($(this).val());
        }
    });

    if(siproducto==1 && clickAddCart==1){
      clickAddCart = 0;
      if (Number(cantVenta) > 1 || Number(cantVenta) == 1){
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

            },
            success:function(data) {
              $('.cantSku').val(0);
              $('.totalPro').text(0);
              $('.totalPago').text(0);
              $('#modal_aviso').modal('open');
            }
          });
      }else{
        Materialize.toast('<i class="material-icons left">warning</i>El mínimo de compra no es válido para este producto', 2000, 'rounded warningToast');
      }
    }else{
      Materialize.toast('<i class="material-icons left">warning</i>Coloca una cantidad', 2000, 'rounded warningToast');
    } 
  });

});


function cortarTexto(el,maxlength) {
  let txt=el;
  if(txt.length <= maxlength) {
    return txt;
  }
  let t=txt.substring(0,maxlength);
  let re=/\s+\S*$/;
  let m=re.exec(t);
  t=t.substring(0,m.index);
  return t+"...";
}
function selCostoEnvio(val) {
  var dis = val;
  var cant = $("#cantEnvio").val();
  if (cant == null) {
    cant = 1;
  }
    $.post(base_url+'productos/selCostoEnvio2',{"dis":dis,"cant":cant,"dim":dim,"pes":pes},function(data){
      var result=JSON.parse(data);
      if(result) {
        var d1=result['cenv']['Dia_DiaEnvio'];
        var d2=(parseInt(result['cenv']['Dia_DiaEnvio']) + 1);
        $('.tiempoEntrega').text('Tiempo de entrega de '+d1+' a '+d2+' días ('+$( "#selecRegion option:selected" ).text()+' - '+$( "#selDistrito option:selected" ).text()+')');
        var costo=Math.round(result['costoReal']);
        $('.cEnv').text(parseFloat(costo).toFixed(2));  
      } else {
        $('.cEnv4').text('0.00');
      }
    });
}