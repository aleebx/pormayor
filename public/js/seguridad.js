$(window).on("load", function() {
	// init
	var scrollController = new ScrollMagic.Controller();

	var compraSegura_1 = new ScrollMagic.Scene({offset: 500,duration: 100})
	    .on("enter leave", function (e) {
	    	$(".compraSegura_1").removeClass('noMove');
	    })
	    .addTo(scrollController)
	    .addIndicators();

	var compraSegura_2 = new ScrollMagic.Scene({offset: 800,duration: 100})
	    .on("enter leave", function (e) {
	    	$(".compraSegura_2").removeClass('noMove_left');
	    })
	    .addTo(scrollController)
	    .addIndicators();

	var compraSegura_3 = new ScrollMagic.Scene({offset: 1100,duration: 100})
	    .on("enter leave", function (e) {
	    	$(".compraSegura_3").removeClass('noMove');
	    })
	    .addTo(scrollController)
	    .addIndicators();

	var compraSegura_4 = new ScrollMagic.Scene({offset: 1400,duration: 100})
	    .on("enter leave", function (e) {
	    	$(".compraSegura_4").removeClass('noMove_left');
	    })
	    .addTo(scrollController)
	    .addIndicators();
    
});