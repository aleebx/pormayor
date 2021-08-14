$(window).on("load", function() {
	$('.smallInfo div.l3 .sideB').slideUp();
	var bLazy = new Blazy({
       loadInvisible: true,
       offset: 100
    });


	$('.inner').css('display', 'block');
    var swiper2 = new Swiper('.swBanner', {
            pagination: {
              el: '.swiper-pagination',
              dynamicBullets: true,
            },
          });
	//   var swiper = new Swiper('.swiper-container', {

 //      loop: true,
 //      loopFillGroupWithBlank: true,
 //      navigation: {
 //      nextEl: '.swiper-button-next',
 //      prevEl: '.swiper-button-prev',
 //    	},
 //    	breakpoints: {
 //        640: {
 //          slidesPerView: 1,
 //          spaceBetween: 20,
 //        },
 //        768: {
 //          slidesPerView: 1,
 //          spaceBetween: 10,
 //        },
 //        1024: {
 //          slidesPerView: 1,
 //          spaceBetween: 10,
 //        },
 //      }
 //    });	  
	//   var swiper = new Swiper('.swBelleza', {

 //      loop: true,
 //      loopFillGroupWithBlank: true,
 //      navigation: {
 //      nextEl: '.swiper-button-next',
 //      prevEl: '.swiper-button-prev',
 //    	},
 //    	breakpoints: {
 //        640: {
 //          slidesPerView: 2,
 //          spaceBetween: 20,
 //        },
 //        768: {
 //          slidesPerView: 3,
 //          spaceBetween: 10,
 //        },
 //        1024: {
 //          slidesPerView: 4,
 //          spaceBetween: 10,
 //        },
 //      }
 //    }); 

 //    var swiper = new Swiper('.swNormal', {

 //      loop: true,
 //      loopFillGroupWithBlank: true,
 //      navigation: {
 //      nextEl: '.swiper-button-next',
 //      prevEl: '.swiper-button-prev',
 //      },
 //      breakpoints: {
 //        640: {
 //          slidesPerView: 2,
 //          spaceBetween: 20,
 //        },
 //        768: {
 //          slidesPerView: 3,
 //          spaceBetween: 10,
 //        },
 //        1024: {
 //          slidesPerView: 4,
 //          spaceBetween: 10,
 //        },
 //      }
 //    });

    loading_screen.finish();

    //INFO BITS
    $('.smallInfo div.l3 .over').mouseover(function(){
    	var actual = $(this).parent();
    	
    	actual.find('.sideA').slideUp(0);
    		actual.addClass('pormayorUnico');
    		actual.find('.sideB').slideDown(0);
    });

    $('.smallInfo div.l3 .over').mouseout(function(){
    	var actual = $(this).parent();
    	actual.find('.sideB').slideUp(0);
    		actual.removeClass('pormayorUnico');
    		actual.find('.sideA').slideDown(0);
    });
    
});

(function () {
        function logElementEvent(eventName, element) {
          console.log(Date.now(), eventName, element.getAttribute("data-src"));
        }

        var callback_enter = function (element) {
          logElementEvent("🔑 ENTERED", element);
        };
        var callback_exit = function (element) {
          logElementEvent("🚪 EXITED", element);
        };
        var callback_loading = function (element) {
          logElementEvent("⌚ LOADING", element);
        };
        var callback_loaded = function (element) {
          logElementEvent("👍 LOADED", element);
        };
        var callback_error = function (element) {
          logElementEvent("💀 ERROR", element);
          element.src = "https://via.placeholder.com/440x560/?text=Error+Placeholder";
        };
        var callback_finish = function () {
          logElementEvent("✔️ FINISHED", document.documentElement);
        };
        var callback_cancel = function (element) {
          logElementEvent("🔥 CANCEL", element);
        };

        var ll = new LazyLoad({
          class_applied: "lz-applied",
          class_loading: "lz-loading",
          class_loaded: "lz-loaded",
          class_error: "lz-error",
          // Assign the callbacks defined above
          callback_enter: callback_enter,
          callback_exit: callback_exit,
          callback_cancel: callback_cancel,
          callback_loading: callback_loading,
          callback_loaded: callback_loaded,
          callback_error: callback_error,
          callback_finish: callback_finish
        });
      })();