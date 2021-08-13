$(window).on("load", function() {
  $('.preloadPrecios').addClass('hide');
  $('.wrapperSliderPrecios').removeClass('hide');
  $('.tallaBtn:first').click();

  if (!mediaqueryPC.matches){
  $('.preloadImgMobile').addClass('hide');
  $('.wrapperSliderImgMobile').removeClass('hide');
  }
});

$(document).ready(function(){
  $('.materialboxed').materialbox();
  $('select').material_select();
  const mq = window.matchMedia( "(max-width: 768px)" );
  var flagAgregarCarrito = false;
  var flagPrimerResumen = false;
  var flagSinCantResumen = false;
  var flagDobeKeyUp = false;
  var popperCantidad;

  // if (mediaqueryPC.matches){
  //   //Cargando popper
  //   $('.popupCantidad').removeClass('hide');
  //   popperCantidad = new Popper($(".filaCant0"), $('.popupCantidad'), {
  //     placement: 'right',
  //   });

  //   //Eliminar poppers
  //   $('.eliminarPopper').click(function(){
  //     $(this).parent().addClass('hide');
  //     $(".filaCant0 input").focus();
  //   });
  // }

  if (mediaqueryPC.matches){
    $('.modal').modal({
      endingTop: '30%',
      complete: function() { 
        //Total en el carrito
        $.get( base_url+"productos/count_total_carrito", function(data ) {
         $("span.totalActualCart").text("S/ "+data);
           $('.cartTotalPointer').removeClass('hide');
          setTimeout(function(){ 
            $('.cartTotalPointer').css('opacity', "1");
            $('.cartTotalPointer').css('bottom', "-60px");

            //Desaparecer
            setTimeout(function(){ 
              
              $('.cartTotalPointer').css('opacity', "0");
              $('.cartTotalPointer').css('bottom', "-30px");
              setTimeout(function(){ 
                $('.cartTotalPointer').addClass('hide');
              }, 100); 
            }, 1200); 
          }, 100);
        });

        
      }
    });
  }else{
    $('#resumenMobile').modal();
    $('#modal_aviso').modal({
      endingTop: '15%',
      complete: function() { 
        //Total en el carrito
        $.get( base_url+"productos/count_total_carrito", function(data ) {
           $("span.totalActualCart").text("S/ "+data);
           $('.cartTotalPointer').removeClass('hide');
          setTimeout(function(){ 
            $('.cartTotalPointer').css('opacity', "1");
            $('.cartTotalPointer').css('bottom', "-70px");

            //Desaparecer
            setTimeout(function(){ 
              
              $('.cartTotalPointer').css('opacity', "0");
              $('.cartTotalPointer').css('bottom', "-30px");
              setTimeout(function(){ 
                $('.cartTotalPointer').addClass('hide');
              }, 100); 
            }, 1200); 
          }, 100);
        });
      }
    });
  }

   //FIx Img
  var flagImg = false;
  var imgActual;
  $('.materialboxed').click(function(){
    if (flagImg == false) {
      imgActual = $(this);
      $(this).removeClass('fixImg4');
      flagImg = true;
    }else{
      imgActual.addClass('fixImg4');
      flagImg = false;
    }
  });

  $(document).on( 'click', '#materialbox-overlay', function(){
    if (flagImg == false) {
      $(this).parent().find('img').removeClass('fixImg4');
      flagImg = true;
    }else{
      imgActual.addClass('fixImg4');
      flagImg = false;
    }
  });

  //Eventos en movil
  $('.resumenMobileBtn').click(function(){
      $('#resumenMobile').modal('open');
      $('.resumenPrecios').slick('setPosition'); 
  });
  //Resumen PC
  if (mediaqueryPC.matches) {
    $(".unidadSticky").stick_in_parent({inner_scrolling: false,offset_top: 70,}).on("sticky_kit:stick", function(e) {
      $(this).css("z-index",200);
    }).on("sticky_kit:bottom", function(e) {
      $(this).css("z-index",10);
    }).on("sticky_kit:unbottom", function(e) {
      $(this).css("z-index",200);
    });
  }

  //SLIDER
  $('.sliderMobile').slick({
    dots: true,
    arrows:false,
    infinite: true,
  });

  $('.sliderPrecios').slick({
    dots: false,
    infinite: false,
    prevArrow: $(".prev"),
    nextArrow: $(".next"),
    slidesToShow: 3,
    slidesToScroll: 3,
  });

  $(".sliderDestacadosMobile").slick({
      infinite: !0,
      dots: !1,
      speed: 300,
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: !0,
      prevArrow: $(".prevDest"),
      nextArrow: $(".nextDest"),
      draggable: !0,
      swipe: !0,
    });

  //Zoom 
  var $easyzoom = $('.easyzoom').easyZoom();
  var api1 = $easyzoom.filter('.easyzoom--with-thumbnails').data('easyZoom');
  $('.thumbnails').on('click', 'a', function(e) {
    var $this = $(this);
    e.preventDefault();
    api1.swap($this.data('standard'), $this.attr('href'));
  });

  //SMOTH SCROLL BTN
  $('.comentsBtn').click(function(event) {
    $('html, body').animate({
      scrollTop: $(this.hash).offset().top - 100
    }, 2000, function() {
      $(this).focus();
    });
  });

  $('.irComprarBtn').click(function() {
    $('html, body').animate({
      scrollTop: $(this.hash).offset().top - 100
    }, 2000, function() {
      $(this).focus();
    });
  });

  if (!mediaqueryPC.matches) {
    //Cambio sub menu
    $('.nav-content').slideUp(500, function (argument) {
      $('.menuMobilePri1').addClass('hide');
      $('.menuMobilePri2').addClass('hide');
      $('.menuMobilePri3').addClass('hide');
      $('.menuMobileSec1').removeClass('hide');
      $('.menuMobileSec2').removeClass('hide');
      $('.nav-content').slideDown(500);
    });
  }

  //Flipper tallas
  $('.tallaBtn').click(function(){
    var color = $(this).data('color');

    $('.tallaBtn').each(function(){
      $(this).css("border", "1px solid rgba(0,0,0,0.2)");
      $(this).find("div").css("opacity", "0");
      $(this).attr('data-clicked', "");
    });

    if ($(this).attr('data-clicked') != "true"){
      $(this).css("border", "2px solid "+color);
      $(this).attr('data-clicked', "true");
      $(this).find("div").css("opacity", "1");
    }

    $('.wrapperSliderPrecios .row').hide(400);
    var idPVO = $(this).data('idtalla');    
        
    setTimeout(function(){ 
      $('.wrapperSliderPrecios .row').show(100);
      $('.sliderPrecios').load(base_url+'Productos/preciosTalla', {idPVO:idPVO});
    }, 500);
  });

  $('.rangoPrecio').mouseover(function(){
    $(this).find('.precioB').removeClass('hide');
    $(this).find('.precioA').addClass('hide');
    $(this).find('span').css('font-weight', 600);
  });

  $('.rangoPrecio').mouseout(function(){
    $(this).find('.precioB').addClass('hide');
    $(this).find('.precioA').removeClass('hide');
    $(this).find('span').css('font-weight', 400);
  });

  $('#modal_resumenCotizacion').modal();


  $('#selectVarPro').change(function(){
      var idVariacion = $(this).val();
      console.log(idVariacion);
       $('#listProducto').load(base_url+'Productos/filtro_producto_variacion', {idVariacion: idVariacion});
    });

  //Reputacion producto movil
  $('.infoReputacionBtn').click(function(){
    $('.infoReputacion').removeClass('hide');
    $('.infoReputacionHelper').removeClass('hide');
  });

  $('.closeInfoReputacion').click(function(){
    $('.infoReputacion').addClass('hide');
    $('.infoReputacionHelper').addClass('hide');
  });

  //Informacion Tienda
  $('.infoBtn').click(function(){
    $('.infoContainer').removeClass('hide');
  });

  $('.closeInfoContainer').click(function(){
    $('.infoContainer').addClass('hide');
  });

  $('.waContacto').click(function(){
    var Pro_IdProducto = $(this).data('id');
    var url = $(this).data('href');

    $.ajax({
         data:{
         'Pro_IdProducto' : Pro_IdProducto
         },
         type: "POST",
         url: base_url+'productos/clickContacto', 
         dataType: "json",
         success: function(data){
          window.location.href = url;
          console.log('entro');
         }
    });

  });
  
  $('.llamarContacto').click(function(){
    var Pro_IdProducto = $(this).data('id');

    $.ajax({
         data:{
         'Pro_IdProducto' : Pro_IdProducto
         },
         type: "POST",
         url: base_url+'productos/clickContacto', 
         dataType: "json",
         success: function(data){
          console.log(data);
         }
    });
  });
  
  //Reputacion
  $('.reputacionTienda').click(function(){
    var url  = window.location.href.replace(/\//g, "_");
    var href_actual = $(this).attr('href'); 

    $(this).attr("href",href_actual+"/"+url);
  });
  
  //Comentarios
  $('.comentLoginBtn').click(function(){
    var url  = window.location.href.replace(/\//g, "_");
    var href_actual = $(this).attr('href'); 

    $(this).attr("href",href_actual+"/"+url);
  });

  $('textarea#comentarioPro').characterCounter();

  $('.enviarComentario').click(function(){
  var comentario = $('textarea#comentarioPro').val();  
  var Pro_IdProducto = $(this).data('idproducto');
  var Usu_IdUsuario = $(this).data('usuario');
  var Tie_IdTienda = $(this).data('idtienda');
  console.log(Tie_IdTienda);
  if (comentario == '') {
      Materialize.toast('<i class="material-icons left ">warning</i>Escribe tu pregunta', 2000, 'rounded warningToast');
    } else {

      var test_words = comentario.replace(/\s/g, '');
      test_words = test_words.replace(/[`~!@#$%^&*()_|+\-=?;:'",.<>\{\}\[\]\\\/]/gi,'');
      var telefono_test = /\d{9}/;
      var flag = false;

      if (telefono_test.test(test_words)){
        flag = true;
      }
      if (flag == false) {
        $.ajax({
          data:{
            'comentario':comentario,
            'Pro_IdProducto':Pro_IdProducto,
            'Usu_IdUsuario':Usu_IdUsuario,
            'Tie_IdTienda':Tie_IdTienda
          },
          method:"POST",
          url: base_url+'Productos/comentario',
          success:function(data)
          {
            // console.log(data);
          Materialize.toast('<i class="material-icons left">check_circle</i> Comentario enviado', 2000, 'rounded successToast');
            $('#divComentario').load(base_url+'Productos/comentarioVer',{data:Pro_IdProducto});
            $('textarea#comentarioPro').val('');
          }
        }); 
      }else{
        Materialize.toast('<i class="material-icons left ">warning</i>Tu comentario no puede incluir informacion personal', 2000, 'rounded warningToast');
      }
    } 
 });

  //Agregar al carrito
  tamRango2 = rando_precio.length-1;
  var ultrango = rando_precio.slice(tamRango2);
   ultimoprecio = ultrango[0]['Prp_Precios'];
   ultimoA = ultrango[0]['Prp_A'];

  if (mediaqueryPC.matches){
    $('.cantSku').change(function(event){
      totalSku = 0;
      totalImporte = 0;
      var valor = 0;
        $('.cantSku').each(function(){
          if ($(this).val() > 0) {
          valor = parseInt($(this).val()); 
          totalSku = totalSku+valor;
          tamRango = rando_precio.length;
          var idsku = $(this).data('productid');
          var pvo = $(this).data('pvo');

            if (ultimoA < valor) {
                  precio = valor*ultimoprecio;
                  $(this).attr('xd',precio);
                  $('#precioPro'+idsku).val(precio);
                  $('#precioUni'+idsku).val(ultimoprecio);
                  totalImporte = totalImporte + precio;
            }else {
              for (i = 0; i < tamRango; i++){
                if (valor >= rando_precio[i]['Prp_Desde'] && valor <= rando_precio[i]['Prp_A']){
                  if (rando_precio[i]['Prp_PVO_IdPVO'] == pvo) {
                    // statement
                  precio = valor*rando_precio[i]['Prp_Precios'];
                  $('#precioPro'+idsku).val(precio);
                  $(this).attr("xd",precio);
                  $('#precioUni'+idsku).val(rando_precio[i]['Prp_Precios']);
                  totalImporte = totalImporte + precio;
                  }
                } 
              }
            }
          } 
        });
        $('#totalcantidad').text(totalSku);
        $('#totalImporte').text(totalImporte);


      var Pro_Nombre = $(this).data('productname');
      var Pro_Variacion = $(this).data('variacion');
      var Pro_Color = $(this).data('colresumen');
      var Pro_CantActual = $(this).val();
      var Pro_Foto = $(this).data('foto');
      var Pro_IdSKU = $(this).data('productid');
      var Pro_PrecioUnit = $('#precioUni'+Pro_IdSKU).val();
      var Pro_Total = $('#precioPro'+Pro_IdSKU).val();

      $(this).attr('data-preciounit', Pro_PrecioUnit);

      //AGREGANDO A RESUMEN
      var flagEmptyResumen = 0;
      $('.cantSku').each(function(){
        if ($(this).val() == null || $(this).val() == 0 ) {
          flagEmptyResumen = flagEmptyResumen + 1;
        }
      }); 

      if($('.cantSku').length == flagEmptyResumen){
        $('.emptyResumen').show(300);
      }

      //Validando si exiten o no
      if (!$.trim($(".resumenPrecios").html())=='') {
        if ($(this).val() > 0) {
          var flagResumen_Producto = false;
          $('.filaResumen').each(function(){
            if ($(this).attr('data-sku') == Pro_IdSKU) {
              flagResumen_Producto = false;
              return false; 
            }else{
              flagResumen_Producto = true;
            }
          });
           

          if ($('.resumenContainer .slick-slide').length == 1 && flagPrimerResumen == false) {
            flagResumen_Producto = true;
            $(".emptyResumen").hide(300);
          }

          if (flagAgregarCarrito == true ) {
            flagResumen_Producto = true;
            $(".emptyResumen").hide(300);
          }

          if (flagPrimerResumen == true && $('.resumenContainer .slick-slide').length == 1 && $('.emptyResumen').css('display') != 'none') {
            flagResumen_Producto = true;
            $(".emptyResumen").hide(300);
          }

          if (flagResumen_Producto == true && flagDobeKeyUp == true) {
            //Creando
            $('.resumenPrecios').slick('slickAdd',"<div class='filaResumen' data-sku='"+Pro_IdSKU+"'>"+
            "<div class='col s2 positionRelative imagenResumen'>"+
              "<img alt='"+Pro_Nombre+"' class='fixImg2' src='"+Pro_Foto+"' >"+
              "<div class='colorResumen positionAbsolute bottom0 left0' style='background-color:"+Pro_Color+"'></div>"+
            "</div>"+
            "<div class='col s10 positionRelative' style='height:60px'>"+
              "<p class='fontB2' style='width:85%'>"+Pro_Nombre+"</p>"+
              "<span class='cantResumen fontD2'>"+Pro_CantActual+"</span> <span class='enfasisB'>Unidades</span> - "+
              "<span class='enfasisB'>Talla </span><span class='cantResumen fontD2'>"+Pro_Variacion+"</span>"+
              "<div class='positionAbsolute top0 right0'>"+
                "<span class='enfasisB fontB2'><span class='precioproResumen'>"+Pro_PrecioUnit+"</span> c/u </span>"+
                "<p class='enfasisA fontA'>S/<span class='totalproResumen'>"+Pro_Total+"</span> </p>"+
              "</div>"+
            "</div>"+
            "<div class='col s12'>"+
              "<div class='divider dividerLista'></div>"+
            "</div>"+
          "</div>");
            flagAgregarCarrito = false;
          }else{
            //Editando
            $(".filaResumen[data-sku='" +Pro_IdSKU+"']").find('.cantResumen').text(Pro_CantActual);
            $(".filaResumen[data-sku='" +Pro_IdSKU+"']").find('.precioproResumen').text(Pro_PrecioUnit);
            $(".filaResumen[data-sku='" +Pro_IdSKU+"']").find('.totalproResumen').text(Pro_Total);
          }
        }else{
          var indexSlider = $(this).attr("data-slick-index");
          $('.resumenPrecios').slick('slickRemove',indexSlider);
          $(".filaResumen[data-sku='" +Pro_IdSKU+"']").remove();
        }
      }else{
        if ($(this).val() > 0) {
          $(".emptyResumen").hide(300);
          $('.resumenPrecios').append("<div class='filaResumen' data-sku='"+Pro_IdSKU+"'>"+
            "<div class='col s2 positionRelative imagenResumen'>"+
              "<img alt='"+Pro_Nombre+"' class='fixImg2' src='"+Pro_Foto+"' >"+
              "<div class='colorResumen positionAbsolute bottom0 left0' style='background-color:"+Pro_Color+"'></div>"+
            "</div>"+
            "<div class='col s10 positionRelative' style='height:60px'>"+
              "<p class='fontB2' style='width:85%'>"+Pro_Nombre+"</p>"+
              "<span class='cantResumen fontD2'>"+Pro_CantActual+"</span> <span class='enfasisB'>Unidades</span> - "+
              "<span class='enfasisB'>Talla </span><span class='cantResumen fontD2'>"+Pro_Variacion+"</span>"+
              "<div class='positionAbsolute top0 right0'>"+
                "<span class='enfasisB fontB2'><span class='precioproResumen'>"+Pro_PrecioUnit+"</span> c/u </span>"+
                "<p class='enfasisA fontA'>S/ <span class='totalproResumen'>"+Pro_Total+"</span> </p>"+
              "</div>"+
            "</div>"+
            "<div class='col s12'>"+
              "<div class='divider dividerLista'></div>"+
            "</div>");

          $('.resumenPrecios').slick({
            vertical:true,
            dots: false,
            infinite: false,
            prevArrow: $(".prevResumen"),
            nextArrow: $(".nextResumen"),
            slidesToShow: 4,
            slidesToScroll: 4
          });
          $('.prevResumen').removeClass('hide');
          $('.nextResumen').removeClass('hide');
          flagPrimerResumen = true;

         setTimeout(function(){ flagDobeKeyUp = true}, 500);
        } 
      }     
    });
  }else{
    $('.cantSku').change(function(){
      totalSku = 0;
      totalImporte = 0;
      var valor = 0;
        $('.cantSku').each(function(){
          if ($(this).val() > 0) {
          valor = parseInt($(this).val()); 
          totalSku = totalSku+valor;
          tamRango = rando_precio.length;
          var idsku = $(this).data('productid');
          var pvo = $(this).data('pvo');
            if (ultimoA < valor) {
                  precio = valor*ultimoprecio;
                  $(this).attr('xd',precio);
                  $('#precioPro'+idsku).val(precio);
                  $('#precioUni'+idsku).val(ultimoprecio);
                  totalImporte = totalImporte + precio;
            }else {
              for (i = 0; i < tamRango; i++){
                if (valor >= rando_precio[i]['Prp_Desde'] && valor <= rando_precio[i]['Prp_A']){
                    if (rando_precio[i]['Prp_PVO_IdPVO'] == pvo) {
                    precio = valor*rando_precio[i]['Prp_Precios'];
                    $('#precioPro'+idsku).val(precio);
                    $(this).attr("xd",precio);
                    $('#precioUni'+idsku).val(rando_precio[i]['Prp_Precios']);
                    totalImporte = totalImporte + precio;
                    }
                } 
              }
            }
          } 
        });
      $('#totalcantidad').text(totalSku);
      $('#totalImporte').text(totalImporte);


      var Pro_Nombre = cortarTexto($(this).data('productname'), 70) ;
      var Pro_Variacion = $(this).data('variacion');
      var Pro_Color = $(this).data('colresumen');
      var Pro_CantActual = $(this).val();
      var Pro_Foto = $(this).data('foto');
      var Pro_IdSKU = $(this).data('productid');
      var Pro_Key = $(this).data('key');
      // var Pro_Key = $(this).data('key');
      var Pro_PrecioUnit = $('#precioUni'+Pro_IdSKU).val();
      var Pro_Total = $('#precioPro'+Pro_IdSKU).val();
      
      $(this).attr('data-preciounit', Pro_PrecioUnit);

      //Cargando Pre resumen inferior
      if ($(this).val() > 0) {
        $('.precioUnitMobile'+Pro_Key).removeClass('hide');
        $('.precioUnitMobile'+Pro_Key).find('.precioproSide').text(Pro_PrecioUnit);
        $('.precioUnitMobile'+Pro_Key).find('.totalproSide').text(Pro_Total);
      }else{
        $('.precioUnitMobile'+Pro_Key).addClass('hide');
        $('.precioUnitMobile'+Pro_Key).find('.precioproSide').text();
        $('.precioUnitMobile'+Pro_Key).find('.totalproSide').text();
      }
      

      //AGREGANDO A RESUMEN
      var flagEmptyResumen = 0;
      $('.cantSku').each(function(){
        if ($(this).val() == null || $(this).val() == 0 ) {
          flagEmptyResumen = flagEmptyResumen + 1;
        }
      }); 

      if($('.cantSku').length == flagEmptyResumen){
        $('.emptyResumen').show(300);
      }

      //Validando si exiten o no
      if (!$.trim($(".resumenPrecios").html())=='') {
        if ($(this).val() > 0) {
          var flagResumen_Producto = false;
          $('.filaResumen').each(function(){
            if ($(this).attr('data-sku') == Pro_IdSKU) {
              flagResumen_Producto = false;
              return false; 
            }else{
              flagResumen_Producto = true;
            }
          });
           

          if ($('.resumenContainer .slick-slide').length == 1 && flagPrimerResumen == false) {
            flagResumen_Producto = true;
            $(".emptyResumen").hide(300);
          }

          if (flagAgregarCarrito == true ) {
            flagResumen_Producto = true;
            $(".emptyResumen").hide(300);
          }

          if (flagPrimerResumen == true && $('.resumenContainer .slick-slide').length == 1 && $('.emptyResumen').css('display') != 'none') {
            flagResumen_Producto = true;
            $(".emptyResumen").hide(300);
          }

          if ($('.prevResumen').hasClass('hide')) {
            $('.prevResumen').removeClass('hide');
            $('.nextResumen').removeClass('hide');
          }

          if (flagResumen_Producto == true) {
            //Creando
            $('#resumenMobile').modal('open');
            $('.resumenPrecios').slick('slickAdd',"<div class='filaResumen' data-sku='"+Pro_IdSKU+"'>"+
            "<div class='col s2 positionRelative imagenResumen'>"+
              "<img alt='"+Pro_Nombre+"' class='fixImg2' src='"+Pro_Foto+"' >"+
              "<div class='colorResumen positionAbsolute bottom0' style='background-color:"+Pro_Color+"'></div>"+
            "</div>"+
            "<div class='col s10 positionRelative' style='height:60px'>"+
              "<p class='fontB2 centrarForzado '>"+Pro_Nombre+"</p>"+
              "<span class='cantResumen fontD2'>"+Pro_CantActual+"</span> <span class='enfasisB'>Unidades</span> - "+
              "<span class='enfasisB'>Talla </span><span class='cantResumen fontD2'>"+Pro_Variacion+"</span>"+
              "<div class='positionAbsolute resumenMobilPrecioCont'>"+
                "<span class='enfasisB fontB2'><span class='precioproResumen'>"+Pro_PrecioUnit+"</span> c/u </span>"+
                "<p class='enfasisA fontA centrarForzado'>S/<span class='totalproResumen'>"+Pro_Total+"</span> </p>"+
              "</div>"+
            "</div>"+
            "<div class='col s12'>"+
              "<div class='divider dividerLista'></div>"+
            "</div>"+
          "</div>");
            flagAgregarCarrito = false;
          }else{
            //Editando
            $(".filaResumen[data-sku='" +Pro_IdSKU+"']").find('.cantResumen').text(Pro_CantActual);
            $(".filaResumen[data-sku='" +Pro_IdSKU+"']").find('.precioproResumen').text(Pro_PrecioUnit);
            $(".filaResumen[data-sku='" +Pro_IdSKU+"']").find('.totalproResumen').text(Pro_Total);
          }
        }else{
          var indexSlider = $(this).attr("data-slick-index");
          $('.resumenPrecios').slick('slickRemove',indexSlider);
          $(".filaResumen[data-sku='" +Pro_IdSKU+"']").remove();
        }
      }else{
        if ($(this).val() > 0) {
          $(".emptyResumen").hide(300);
          $('#resumenMobile').modal('open');
          $('.resumenPrecios').append("<div class='filaResumen' data-sku='"+Pro_IdSKU+"'>"+
            "<br><div class='col s2 positionRelative imagenResumen'>"+
              "<img alt='"+Pro_Nombre+"' class='fixImg2' src='"+Pro_Foto+"' >"+
              "<div class='colorResumen positionAbsolute bottom0' style='background-color:"+Pro_Color+"'></div>"+
            "</div>"+
            "<div class='col s10 positionRelative' style='height:60px'>"+
              "<p class='fontB2 centrarForzado '>"+Pro_Nombre+"</p>"+
              "<span class='cantResumen fontD2'>"+Pro_CantActual+"</span> <span class='enfasisB'>Unidades</span> - "+
              "<span class='enfasisB'>Talla </span><span class='cantResumen fontD2'>"+Pro_Variacion+"</span>"+
              "<div class='positionAbsolute resumenMobilPrecioCont'>"+
                "<span class='enfasisB fontB2'><span class='precioproResumen'>"+Pro_PrecioUnit+"</span> c/u </span>"+
                "<p class='enfasisA fontA centrarForzado'>S/ <span class='totalproResumen'>"+Pro_Total+"</span> </p>"+
              "</div>"+
            "</div>"+
            "<div class='col s12'>"+
              "<div class='divider dividerLista'></div>"+
            "</div>");

          $('.resumenPrecios').slick({
            vertical:true,
            dots: false,
            infinite: false,
            draggable: true,
            verticalSwiping: true,
            prevArrow: $(".prevResumen"),
            nextArrow: $(".nextResumen"),
            slidesToShow: 3,
            slidesToScroll: 3
          });
          $('.prevResumen').removeClass('hide');
          $('.nextResumen').removeClass('hide');
          flagPrimerResumen = true;
        } 
      }     
    });
  }

 var clickAddCart = 0;
 $('.add_cart').click(function(){
  // $(this).addClass('disabled');
  clickAddCart = 1;

  var product_id = [];
  var id_producto = [];
  var product_name = [];
  var product_price = [];
  var variacion = [];
  var unidad =[];
  var img = [];
  var color =[];
  var tipovariacion = [];
  var idtienda = [];
  var quantity = [];
  var cantmin = [];
  var precio_unit = [];
  var documento = [];
  var id_sku = [];
  var pvo = [];
  var siproducto = 0;
  var cantVenta = 0;

  $('.cantSku').each(function(){
    if ($(this).val() > 0) {
      cantVenta =  Number(cantVenta) + Number($(this).val());
      siproducto = 1;
      product_id.push($(this).data("productid"));
      id_producto.push($(this).data("idpro"));
      product_name.push($(this).data("productname"));
      product_price.push($(this).attr("xd"));
      variacion.push($(this).data("variacion"));
      unidad.push($(this).data("unidad"));
      img.push($(this).data("img"));
      color.push($(this).data("color"));
      tipovariacion.push($(this).data("tipovariacion"));
      idtienda.push($(this).data("idtienda"));
      quantity.push($(this).val());
      cantmin.push($(this).data("minventa"));
      precio_unit.push($(this).data("preciounit"));
      pvo.push($(this).data("pvo"));
      id_sku.push($(this).data("productid"));
      documento.push($(this).data("documento"));
      }
  });

  //Datos Aviso
  var nombreAviso = $(".fixH1Seo").text();
  var imgAviso = $(".easyzoom a img").attr('src');
  var totalAviso = $("#totalImporte").text();
  var cantAviso = $("#totalcantidad").text();
   

  if(siproducto == 1 && clickAddCart == 1){
    clickAddCart = 0;
    if (Number(cantVenta) > 1 || Number(cantVenta) == 1){
        $.ajax({
          url: base_url+'productos/add',
          method:"POST",
          data:{
            product_id:product_id, 
            id_producto:id_producto,
            product_name:product_name, 
            product_price:product_price, 
            quantity:quantity, 
            variacion:variacion,
            img:img,
            unidad:unidad,
            idtienda:idtienda, 
            color:color, 
            tipovariacion:tipovariacion,
            cantmin:cantmin,
            precio_unit:precio_unit,
            documento:documento,
            pvo: pvo,
            id_sku: id_sku,
            flagVariaciones: flagVariaciones,
          },
          beforeSend:function(){  
           if (mediaqueryPC.matches) {
            $('.cantSku').val("-");
           }else{
            $('.cantSku').val("-");
            $('.precioUnitMobile').each(function(){
              $(this).addClass('hide');
            });
           }     
           
           $('.preUni').val('');
           $('.preImp').val('');
           $('#totalcantidad').text('0');
           $('#totalImporte').text('0');
          },
          success:function(data){
            $('#cart_details').html(data);
            if (mq.matches) {
              var animacionCarrito = anime.timeline({
                direction: 'alternate',
                complete: function(anim) {
                  $('.prevResumen').addClass('hide');
                  $('.nextResumen').addClass('hide');
                  $(".emptyResumen").show(300);
                }
              });
              animacionCarrito
                .add({
                  targets: '.add_cart',
                  borderRadius: ['0em', '50em'],
                  width: "20px", 
                  height: "20px",
                  easing: 'easeOutExpo', 
                  rotate: {
                    value: 180,
                    duration: 100,
                  },
                  duration: 200,
                  run: function(anim) {
                  }
                })
                .add({
                  targets: '.add_cart',
                  translateX: ($('div.cartAnimacion').offset().left - $('.add_cart').offset().left),
                  translateY: ($('div.cartAnimacion').offset().top - $('.add_cart').offset().top),
                  rotate: 10,
                  easing: 'easeOutExpo',
                  duration: 200
                })
                .add({
                  targets: 'div.cartAnimacion',
                  scale: [1, 1.5],
                  easing: 'easeOutExpo',
                  duration: 300,
                  offset: 400,
                  update: function(anim) {
                    if (Math.round(anim.progress) == 62) {
                      $("div.cartAnimacion > span").addClass("counter");
                    
                      $.get( base_url+"productos/count_carrito", function(data ) {
                       $("span.counterCont > span").text(data);
                      });
                    }
                  },
                  complete: function(anim) {
                    $('#resumenMobile').modal('close');
                    
                    //Llenando aviso
                    $('.nombreAviso').text(nombreAviso);
                    $('.imgAviso').attr("src", imgAviso);
                    $('.cantAviso').text(cantAviso + " Unidades");
                    $('.totalAviso').text(" S/ " +totalAviso );
                    $('#modal_aviso').modal('open');

                    $('.resumenPrecios .slick-slide').each(function(){
                      var indexSlider = $(this).attr("data-slick-index");
                      $(this).remove();
                    });
                    
                    flagAgregarCarrito = true;
                  }
                });
            }else{
              //Elimando items de slider
              var animacionPC = anime.timeline({
                direction: 'alternate',
                complete: function(anim) {
                  $('.prevResumen').addClass('hide');
                  $('.nextResumen').addClass('hide');
                  $(".emptyResumen").show(300);
                }
              });
              animacionPC
                .add({
                  targets: '.resumenPrecios',
                  borderRadius: ['0%', '100%'],
                  width: "50px", 
                  height: "50px",
                  background: '#4CAF50',
                  easing: 'easeInOutQuad', 
                  duration: 300,
                  run: function(anim) {
                    
                  }
                })
                .add({
                  targets: '.resumenPrecios',
                  translateX: ($('li.cartAnimacion').offset().left - $('.resumenPrecios').offset().left),
                  translateY: ($('li.cartAnimacion').offset().top - $('.resumenPrecios').offset().top),
                  translateZ: 150,
                  opacity: [1, 0],
                  easing: 'easeInOutQuad', 
                  elasticity: 500,
                  duration: 150,
                  run: function(anim) {
                    $('.filaResumen').each(function(){
                      var indexSlider = $(this).attr("data-slick-index");
                      $(this).remove();
                    });
                    flagAgregarCarrito = true;
                  },
                })
                .add({
                  targets: '.resumenPrecios .slick-list',
                  opacity: [1, 0],
                  easing: 'easeOutExpo', 
                  duration: 100,
                  offset: 0,
                })
                .add({
                  targets: 'li.cartAnimacion',
                  scale: [1, 1.2],
                  easing: 'easeOutExpo',
                  duration: 300,
                  offset: 400,
                  update: function(anim) {
                    if (Math.round(anim.progress) == 62) {
                      $("li.cartAnimacion > span").addClass("counter");
                    
                      $.get( base_url+"productos/count_carrito", function(data ) {
                       $("span.counterCont > span").text(data);
                      });
                    }
                  },
                  run: function(anim){
                    
                  },
                  complete: function(anim){
                    $('#modal_aviso').modal('open');

                    //Llenando aviso
                    $('.nombreAviso').text(nombreAviso);
                    $('.imgAviso').attr("src", imgAviso);
                    $('.cantAviso').text(cantAviso + " Unidades");
                    $('.totalAviso').text(" S/ " +totalAviso );

                    console.log(nombreAviso);
                  }
                })
            }
          }
        });
    }else{
      Materialize.toast('<i class="material-icons left ">warning</i>El minimo de compra no es valido para este producto', 2000, 'rounded warningToast');
    }
  }else{
    Materialize.toast('<i class="material-icons left ">warning</i>Coloca una cantidad', 2000, 'rounded warningToast');
  } 
 });
});

function cortarTexto(el, maxlength) {
  let txt = el;
  if (txt.length <= maxlength) {
    return txt;
  }
  let t = txt.substring(0, maxlength);
  let re = /\s+\S*$/;
  let m = re.exec(t);
  t = t.substring(0, m.index);
  return t + "...";
}