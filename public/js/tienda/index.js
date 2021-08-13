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
	//Filtrado
	var mixer_simple = mixitup('.containerProductos', {
	  animation: {
	      duration: 400,
	      effects: 'fade translateZ(-100px)'
	  }
	});
	var mixer_vista;

	$('.filtroProductoCat').change(function(){
	 var Id_Cat = $(this).val();
	 if ($('.containerVista').length) {
	    mixer_vista.filter('.filtroCat'+Id_Cat);
	 }else{
	    mixer_simple.filter('.filtroCat'+Id_Cat);
	 }
	 // $('.inicioBtn').trigger('click');
	});

	$('.filtroEdoSelect').change(function(){
	 var EdoGarantia = $(this).val();
	 if ($('.containerVista').length) {
	    mixer_vista.filter('.filtroEdo'+EdoGarantia);
	 }else{
	    mixer_simple.filter('.filtroEdo'+EdoGarantia);
	 }
	 // $('.inicioBtn').trigger('click');
	});


	$('.filtroPreciosSelect').change(function(){
	 var Valor_filtro = $(this).val();

	 if ($('.containerVista').length) {
	   if (Valor_filtro == "mayor"){
	    mixer_vista.sort('preciomin:desc')
	   }else if (Valor_filtro == "menor"){
	    mixer_vista.sort('preciomin:asc')
	   }else if (Valor_filtro == "ninguno"){
	    mixer_vista.sort('idpro:asc')
	   }else if (Valor_filtro == "fechaMenos"){
	    mixer_vista.sort('fecha:desc')
	   }else if (Valor_filtro == "fechaMas"){
	    mixer_vista.sort('fecha:asc')
	   }
	 }else{
	  if (Valor_filtro == "mayor"){
	    mixer_simple.sort('preciomin:desc')
	   }else if (Valor_filtro == "menor"){
	    mixer_simple.sort('preciomin:asc')
	   }else if (Valor_filtro == "ninguno"){
	    mixer_simple.sort('idpro:asc')
	   }else if (Valor_filtro == "fechaMenos"){
	    mixer_simple.sort('fecha:desc')
	   }else if (Valor_filtro == "fechaMas"){
	    mixer_simple.sort('fecha:asc')
	   }
	 }
	 // $('.inicioBtn').trigger('click');
	 
	});

	$('.filtroMarcaSelect').change(function(){
	 var Marca = $(this).val();
		if ($('.containerVista').length) {
		  mixer_vista.filter('.filtroMarca'+Marca);
		}else{
		  mixer_simple.filter('.filtroMarca'+Marca);
		}
		// $('.inicioBtn').trigger('click');
	});

	$('.filtroProductosCat').change(function(){
	 var Cat_IdCategoria = $(this).val();
	 location.href= base_url+"categorias/"+Cat_IdCategoria;
		// $('.inicioBtn').trigger('click');
	});

	$('.masFiltros').click(function(){
	 $(".navBase").addClass('hide');
	 $(".navMasFiltros").removeClass('hide');
	});

	$('.menosFiltros').click(function(){
	 $(".navBase").removeClass('hide');
	 $(".navMasFiltros").addClass('hide');
	});

	$('.filtroSideMobile').click(function(){
	 var Id_Des = $(this).attr('data-des');
	  mixer_simple.filter('.filtroProducto'+Id_Des);  
	});

	 //Vistas
	$('.vista').click(function(){
		var valor = $(this).data('tipo');
		if(valor == 'listado'){
		  $("#btn_listado").removeClass('boton_no_seleccionado');
		  $("#btn_listado").removeClass('btn-flat');
		  $("#btn_listado").removeClass('pormayorUnico-text');
		  $("#btn_listado").addClass('btn');
		  $("#btn_listado").addClass('white-text');


		  $("#btn_cuadricula").addClass('boton_no_seleccionado');
		  $("#btn_cuadricula").addClass('btn-flat');
		  $("#btn_cuadricula").addClass('pormayorUnico-text');
		  $("#btn_cuadricula").removeClass('btn');
		  $("#btn_cuadricula").removeClass('white-text');
		}
		else{
		  $("#btn_cuadricula").removeClass('boton_no_seleccionado');
		  $("#btn_cuadricula").removeClass('btn-flat');
		  $("#btn_cuadricula").removeClass('pormayorUnico-text');
		  $("#btn_cuadricula").addClass('btn');
		  $("#btn_cuadricula").addClass('white-text');


		  $("#btn_listado").addClass('boton_no_seleccionado');
		  $("#btn_listado").addClass('btn-flat');
		  $("#btn_listado").addClass('pormayorUnico-text');
		  $("#btn_listado").removeClass('btn');
		  $("#btn_listado").removeClass('white-text');
		}

		cargar_datos_prodocucto();

	
	});
	
    function cargar_datos_prodocucto(){
	    $('.vista').each(function(){ 
	      if(!$(this).hasClass("boton_no_seleccionado")){
	        var vista = $(this).data('tipo');
	        var busqueda_termino = $('.busqueda_termino').text();
	        var filtro_tipo = $(".vista[data-tipo='listado']").data('filtro');
	        var filtro_nro = $(".vista[data-tipo='listado']").data('filtronro');
	        $.ajax({
	          data:{
	            vista: vista,
	            nombre_busqueda: busqueda_termino,
	            filtro_tipo: filtro_tipo,
	            filtro_nro: filtro_nro
	          },
	          type: "POST",
	          url: base_url+'index/ajax_filtro_productos',
	          beforeSend:function()
	          {
	            $(".ajax_filtro_productos").html('<br><br><br><br><br><div class="progress"><div class="indeterminate blue"></div></div>');
	          },
	          success: function(data){
	            $(".ajax_filtro_productos").html(data);
	            
	            //Lazy load productos
	            $('.lazy').Lazy({
	                // your configuration goes here
	                scrollDirection: 'vertical',
	                effect: 'fadeIn',
	                effectTime: 200,
	                visibleOnly: true,
	            });
	            mixer_vista = mixitup('.containerVista', {
	              animation: {
	                  duration: 400,
	              }
	            });
	          }
	        });
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