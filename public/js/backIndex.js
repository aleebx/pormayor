// $(".publicidad").slick({
//   dots: !0,
//   speed: 300,
//   centerMode: !0,
//   arrows: !1,
//   autoplay: true,
//   autoplaySpeed: 50,
//   adaptiveHeight: false,
//   responsive: [{
//         breakpoint: 1024,
//         settings: {
// 	        autoplay: false
//         }
//     }, {
//         breakpoint: 768,
//         settings: {
//             autoplay: false
//         }
//     }, {
//         breakpoint: 480,
//         settings: {
//             autoplay: false
//         }
//     }]
// }); 
// var $div = $("body");
// var observer = new MutationObserver(function(mutations) {
//   mutations.forEach(function(mutation) {
//     if (mutation.attributeName === "class") {
//       var attributeValue = $(mutation.target).prop(mutation.attributeName);
//       if(attributeValue == 'grey lighten-4 pg-loaded'){
//       	$(".publicidad").slick("setOption", "autoplaySpeed", '3000');
//       	$('.publicidad').slick('setPosition');
//       	$(".Ofertas").slick("setOption", "autoplaySpeed", '2500');
//       }
//     }
//   });
// });
// observer.observe($div[0], {
//   attributes: true
// });

if ($(".modaltest")) {
    $(".modaltest").trigger("click")
}
$(document).on("lity:ready", function() {

	$('.inner').css('display', 'block');
	
    "base" == $(".modaltest").data("anuncio") ? $(".lity-content img").wrap("<a href=" + base_url + "tienda/crear></a>") : "base2" == $(".modaltest").data("anuncio") && $(".lity-content img").wrap("<a href=" + base_url + "tienda/crear2></a>")
});

$(document).on("lity:close", function() {
	$('.publicidad').slick('setPosition');
});
$(window).on("load", function() {
		$(".publicidad").slick({
		  dots: !0,
		  speed: 300,
		  arrows: !1,
		  autoplay: true,
		  autoplaySpeed: 3000,
		  adaptiveHeight: false,
		  responsive: [{
		        breakpoint: 768,
		        settings: {
		            autoplay: false
		        }
		    }, {
		        breakpoint: 480,
		        settings: {
		            autoplay: false
		        }
		    }]
		}); 
		$('.publicidad').slick('setPosition');
  		loading_screen.finish();

		$(".containerOfertazos").removeClass('hide');
		$(".Ofertas").slick({
		    infinite: !0,
		    dots: !1,
		    speed: 300,
		    slidesToShow: 4,
		    slidesToScroll: 4,
		    arrows: !0,
		    prevArrow: $(".prev"),
		    nextArrow: $(".next"),
		    draggable: !0,
		    swipe: !0,
		    autoplay: true,
		    autoplaySpeed: 2500,
		    responsive: [{
		        breakpoint: 1024,
		        settings: {
		            slidesToShow: 2,
		            slidesToScroll: 2
		        }
		    }, {
		        breakpoint: 768,
		        settings: {
		            slidesToShow: 3,
		            slidesToScroll: 3,
		        }
		    }, {
		        breakpoint: 480,
		        settings: {
		            slidesToShow: 1,
		            slidesToScroll: 1,

		        }
		    }]
		});
		$(".detalleProducto2").click(function() {
            var e;
            o = $(this).data("idproducto");
            t = $(this).data("nombre").toString();
            proGuion = buildSlugValue(t);
            res = "pormayor-".concat(o);
            res2 = res.concat("-");
            e = res2.concat(proGuion);
            window.location.href = base_url + "productos/dp/" + e;
        });
        $(".lazy").lazy();
});

 $(document).ready(function() {
    $(".containerTiendasDest").removeClass('hide');
    
    $(".cardCategoria").mouseover(function() {
        $(this).find("img").addClass("filtroEmbed"), $(this).find("svg").css("cursor", "pointer")
    }), $(".cardCategoria").mouseout(function() {
        $(this).find("img").removeClass("filtroEmbed")
    }), $(".addHome").click(function() {
        $(".addHomeScreen").removeClass("hide"), $("body").css("overflow", "hidden")
    }), $(".cerrarHomeScreen").click(function() {
        $(".addHomeScreen").addClass("hide"), $("body").css("overflow", "auto")
    })
})