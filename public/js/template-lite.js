var mediaqueryPC = window.matchMedia("(min-width: 769px)");
$(document).ready(function() {
    $('.modal').modal();
    // $(".addHome").click(function() {
    //     $(".addHomeScreen").removeClass("hide"), $("body").css("overflow", "hidden")
    // })
 // $(".cerrarHomeScreen").click(function() {
 //        $(".addHomeScreen").addClass("hide"), $("body").css("overflow", "auto")
 //    })    
    //Funciones Carrito
    // $('#cart_details').load( base_url+'productos/load');
  //   $('.verCarrito').click(function(){
  //     var url  = window.location.href.replace(/\//g, "_");
  //     var href_actual = $(this).attr('href'); 
  //     $(this).attr("href",href_actual+"/"+url);
  //   });
  //   var o, n, t = 0;
  //   var flagFooter = false;
  //   //FOOTER
  //   $(".footerSecundario .collapsible-header").click(function() {
  //     if (flagFooter == false) {
  //       $('.footerSecundario .iconSide').text('expand_less');
  //       $('.footerSecundario .sideB').slideUp(500);
  //       flagFooter = true;
  //     }else if (flagFooter == true){
  //         $('.footerSecundario .iconSide').text('expand_more');
  //         $('.footerSecundario .sideB').slideDown(200);
  //         flagFooter = false;
  //     }
  //   })
  //   //
  //   $(".redirigirHome").click(function() {
  //       location.href = "https://pormayor.pe";
  //   });
  // $('.buscador').keypress(function(e){
  //   var busqueda = $(this).val();
  //   if(e.which == 13 && busqueda != '') {
  //       window.location.href = base_url + "productos/search/" + busqueda;  
  //   }
  // });
    // $('.inicioBtn').click(function(event) {
    //     $('html, body').animate({
    //       scrollTop: $(this.hash).offset().top - 100
    //     }, 2000, function() {
    //       $(this).focus();
    //     });
    //   }), $(".checkVarFilter").click(function() {
    //     var o = $(this).val();
    //     $(".containerListProd").slideUp(500, function() {
    //         $("#listProducto").load(base_url + "productos/filtro_producto_variacion", {
    //             idVariacion: o
    //         }), $(".containerListProd").slideDown(1e3)
    //     })
    // }),
     $(".cerrarSesionBtn").click(function() {
        $.confirm({
            icon: "power_settings_new",
            theme: "modern",
            closeIcon: !1,
            animation: "scale",
            type: "red",
            title: "Cerrar Sesión",
            columnClass: "small",
            content: "Las ofertas te estarán esperando",
            draggable: !1,
            buttons: {
                Cerrar: {
                    btnClass: "btn pormayorUnico",
                    action: function() {
                        location.href = base_url + "index/cerrar_sesion"
                    }
                },
                Cancelar: {}
            }
        })
//     }),$(".submenu").mouseover(function() {
//         $(".overlayBody").removeClass('hide');
//     }),$(".submenu").mouseout(function() {
//         $(".overlayBody").addClass('hide');
//     }),$(".categoriaBtn").mouseover(function() {        
//         var id = $(this).data("idcateg");
//         var subcategoria;
//         $(".bannerVertical").each(function() {
//             $(this).addClass('hide');
//         });
//         $(".bannerCat" + id).removeClass('hide');
//         $(".subcategoria").each(function() {
//             subcategoria = $(this);
//             if (subcategoria.data("menu") == id) {
//                 subcategoria.removeClass('hide');
//             }else{
//                 subcategoria.addClass('hide');
//             }
//         });
//         if (id == 20) {
//           $(".defaultBanner").removeClass('hide');
//         }
//     }), $(".tiendaInicio").click(function() {
//         location.href = base_url
//     }), $('.dropdown-button').dropdown({
//         inDuration: 300,
//         outDuration: 225,
//         constrainWidth: false,
//         hover: !0,
//         gutter: 0,
//         belowOrigin: !0,
//     }), $(".dropdown-trigger").dropdown({
//         inDuration: 300,
//         outDuration: 225,
//         constrainWidth: false,
//         hover: !0,
//         gutter: 0,
//         belowOrigin: !0
//     }), $('.button-collapse').sideNav({
//       menuWidth: 330,
//       edge: 'left'
//       }
//     ),   $(".slider").slider({
//         indicators: !1,
//         height: 300
//     }), $(".button-collapse").sideNav(), setTimeout(function() {
//         Number($(".carroContent > div").length) > 0 && ($("div.cartAnimacion > span").addClass("counter"), $("span.counterCont > span").text($(".carroContent  > div").length))
//     }, 200)
// }),  $(".notiBtn").click(function() {
//     $(".button-collapse").sideNav("hide"), $("#notiContainer").modal("open")
// });
//Counter carrito
$(window).on("load", function() {
  var bLazy = new Blazy({
     loadInvisible: true,
     offset: 100
  });
  // var cantidadCarrito = parseInt($(".counterCont").attr('data-totalc'));
  // if (cantidadCarrito != 0){
  //   if (mediaqueryPC.matches) {
  //       $("li.cartAnimacion > span").addClass("counter");
  //   }else{
  //       $("div.cartAnimacion > span").addClass("counter");
  //   }
  //   $("span.counterCont > span").text(cantidadCarrito);
  // }
  //SUBSCRIPTION MODAL
    // $(".subscribeBtn").click(function() {
    //     var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    //     var testCorreo = regex.test($('#email_subs').val());
    //     if (testCorreo != false) {
    //       $.ajax({
    //          data:{
    //           'Pub_Correo' : $('#email_subs').val()
    //          },
    //          type: "POST",
    //          url: base_url+'usuario/subscripcion_correo', 
    //          dataType: "json",
    //          success: function(data){
    //           $('#email_subs').val(" ");
    //           Materialize.toast('¡Suscripción Éxitosa!', 2000, 'rounded green');
    //          }
    //       });
    //     }else{
    //       Materialize.toast('<i class="material-icons left">error</i>No ingresaste ningun correo válido', 2000, 'rounded errorToast');
    //     }
    // });
  //Autocompletar en busqueda
  // $.get( base_url+"index/buscar_autocomplete", function(nombres) {
  //   var nombresArray = JSON.parse(nombres);
  //   $('input.autocomplete').autocomplete({
  //     data: nombresArray,
  //     limit: 10,
  //     minLength: 2,
  //     onAutocomplete: function(val) {
  //       $('input.autocomplete').trigger($.Event( "keypress", { which: 13 } ));
  //     },
  //   });
  // });

});

function buildSlugValue(str) {
    str = str.replace(/^\s+|\s+$/g, '');
    str = str.toLowerCase();
    var from = "ãàáäâẽèéëêìíïîõòóöôùúüûñç·/_,:;";
    var to = "aaaaaeeeeeiiiiooooouuuunc------";
    for (var i = 0, l = from.length; i < l; i++) {
        str = str.replace(new RegExp(from.charAt(i), 'g'), to.charAt(i))
    }
    str = str.replace(/[^a-z0-9 -]/g, '').replace(/\s+/g, '-').replace(/-+/g, '-');
    return str
}