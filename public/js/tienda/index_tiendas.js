$(document).ready(function() {
	var flagTab = false;
	//Lazy load productos
	$('.lazy').Lazy({
		scrollDirection: 'vertical',
		effect: 'fadeIn',
		effectTime: 200,
		visibleOnly: true,
	});

	//Stick filtros
	$(".unidadSticky").stick_in_parent({inner_scrolling: false,offset_top: 62,}).on("sticky_kit:stick", function(e) {
		$(this).css("z-index",100);
	}).on("sticky_kit:bottom", function(e) {
	  $(this).css("z-index",10);
	}).on("sticky_kit:unbottom", function(e) {
	  $(this).css("z-index",100);
	});

	//Tabs
	if (mediaqueryPC.matches) {
		$('.busquedaTabs li a').click(function(){
			if (flagTab == false) {
				setTimeout(function(){ 
					
					$(".unidadSticky2").stick_in_parent({inner_scrolling: false,offset_top: 62,}).on("sticky_kit:stick", function(e) {
					  $(this).css("z-index",100);
					}).on("sticky_kit:bottom", function(e) {
					  $(this).css("z-index",10);
					}).on("sticky_kit:unbottom", function(e) {
					  $(this).css("z-index",100);
					});
					
				}, 300);
				flagTab = true;
			}else{
				$('.unidadSticky').css('opacity',0);
				$('.unidadSticky2').css('opacity',0);
				$('.preloader-wrapper').parent().removeClass('hide');

				setTimeout(function(){ 
					
					$(".unidadSticky2").stick_in_parent({inner_scrolling: false,offset_top: 62,}).on("sticky_kit:stick", function(e) {
					  $(this).css("z-index",100);
					}).on("sticky_kit:bottom", function(e) {
					  $(this).css("z-index",10);
					}).on("sticky_kit:unbottom", function(e) {
					  $(this).css("z-index",100);
					});
					

					$(document.body).trigger("sticky_kit:recalc");
					$('.unidadSticky').css('opacity',1);
					$('.unidadSticky2').css('opacity',1);
					$('.preloader-wrapper').parent().addClass('hide');
				}, 300);
			}
		});
   	}
  	//TIENDAS
   
	//Filtrado
	if (busqueda_flag == true) {
		var mixerT_simple = mixitup('.containerFiltroTiendas', {
		  animation: {
		      duration: 400,
		      effects: 'fade translateZ(-100px)'
		  }
		});
		var mixerT_vista;
	}

	

	$('.filtroTCat').change(function(){
	 var Id_Cat = $(this).val();
	 if ($('.containerTVista').length) {
	    mixerT_vista.filter('.filtroTCat'+Id_Cat);
	 }else{
	    mixerT_simple.filter('.filtroTCat'+Id_Cat);
	 }
	 // $('.inicioBtn').trigger('click');
	});

	$('.filtroDep').change(function(){
	 var Departamento = $(this).val();
	 if ($('.containerTVista').length) {
	    mixerT_vista.filter('.filtroDep'+Departamento);
	 }else{
	    mixerT_simple.filter('.filtroDep'+Departamento);
	 }
	 // $('.inicioBtn').trigger('click');
	});

	$('.filtroTFecha').change(function(){
	 var Valor_filtro = $(this).val();

	 if ($('.containerTVista').length) {
	   if (Valor_filtro == "fechaMenos"){
	    mixerT_vista.sort('fechasunat:desc')
	   }else if (Valor_filtro == "fechaMas"){
	    mixerT_vista.sort('fechasunat:asc')
	   }else if (Valor_filtro == "ninguno"){
	    mixerT_vista.sort('idtienda:asc')
	   }
	 }else{
	   if (Valor_filtro == "fechaMenos"){
	    mixerT_simple.sort('fechasunat:desc')
	   }else if (Valor_filtro == "fechaMas"){
	    mixerT_simple.sort('fechasunat:asc')
	   }else if (Valor_filtro == "ninguno"){
	    mixerT_simple.sort('idtienda:asc')
	   }
	 }
	 // $('.inicioBtn').trigger('click');
	 
	});

	//FILTROS MOVIL
	if (!mediaqueryPC.matches){
		$('.masFiltros').click(function(){
			$('.containerFiltrosA').addClass('hide');
			$('.containerFiltrosB').removeClass('hide');
		});

		$('.menosFiltros').click(function(){
			$('.containerFiltrosB').addClass('hide');
			$('.containerFiltrosA').removeClass('hide');
		});

		$('.tiendasTabBtn').click(function(){
			$('.containerFiltrosA').parent().slideUp(500, function() {
				$('.containerFiltrosA').addClass('hide');
				$('.containerFiltrosB').addClass('hide');
				$('.containerFiltrosC').removeClass('hide');
			});

			$('.containerFiltrosA').parent().slideDown(500);
		});

		$('.productosTabBtn').click(function(){
			$('.containerFiltrosA').parent().slideUp(500, function() {
				$('.containerFiltrosA').removeClass('hide');
				$('.containerFiltrosB').addClass('hide');
				$('.containerFiltrosC').addClass('hide');
			});

			$('.containerFiltrosA').parent().slideDown(500);
		});
	}
});