$(document).ready(function() {
$('select').material_select();
$('.preloadPrecios').addClass('hide');
  $('.wrapperSliderPrecios').removeClass('hide');
  $('.tallaBtn:first').click();


    $('.preloadImgMobile').addClass('hide');
    $('.wrapperSliderImgMobile').removeClass('hide');

  $('.sliderMobile').slick({
    dots: true,
    arrows:false,
    infinite: true,
  });
  
  	// var precioActual = $("#precio").text();

	$('.addGroup').click(function(){
		var Pro_IdProducto = $(this).data('idpro');
		var Usu_IdUsuario = $(this).data('idusu');
		if ($('input[name="skuGroup"]:checked')) {
			var Sku_IdSku = $('input[name="skuGroup"]:checked').val();
			var Pro_Nombre = $('input[name="skuGroup"]:checked').data('productname');
			var variacion = $('input[name="skuGroup"]:checked').data('variacion');
			var unidad = $('input[name="skuGroup"]:checked').data('unidad');
			var img = $('input[name="skuGroup"]:checked').data('img');
			var color = $('input[name="skuGroup"]:checked').data('color');
			var tipovariacion = $('input[name="skuGroup"]:checked').data('tipovariacion');
			var idtienda = $('input[name="skuGroup"]:checked').data('idtienda');
			var documento = $('input[name="skuGroup"]:checked').data('documento');
		}
		if (Sku_IdSku == undefined) {
		Materialize.toast('<i class="material-icons left ">warning</i>SELECCIONE UN MODELO', 2000, 'rounded warningToast');	
		}else {
			$.ajax({
		         data:{
		         'Pro_IdProducto' : Pro_IdProducto,
		         'Usu_IdUsuario' : Usu_IdUsuario,
		         'Sku_IdSku' : Sku_IdSku,
		         'variacion' : variacion,
		         'unidad' : unidad,
		         'img' : img,
		         'color' : color,
		         'tipovariacion' : tipovariacion,
		         'idtienda' : idtienda,
		         'documento' : documento
		         },
		         type: "POST",
		         url: base_url+'grupal/unirse', 
		         dataType: "json",
		         beforeSend:function()
        		{
	             var loading_screen = pleaseWait({
	                logo: '',
	                backgroundColor: "#1313137d",
	                loadingHtml: "<i style='font-size:70px' class='white-text material-icons'>group</i><h4 style='font-weight: 600;' class='white-text'>Agrúpandote...</h4><div class='sk-cube-grid'><div class='sk-cube sk-cube1'></div><div class='sk-cube sk-cube2'></div><div class='sk-cube sk-cube3'></div><div class='sk-cube sk-cube4'></div><div class='sk-cube sk-cube5'></div><div class='sk-cube sk-cube6'></div><div class='sk-cube sk-cube7'></div><div class='sk-cube sk-cube8'></div><div class='sk-cube sk-cube9'></div></div>"
	              }).finish();
        		},
		         success: function(data){
		         	console.log(data);
		          if (data == 1) {
		          	location.reload(true);		        
		          }else {
		          	Materialize.toast('<i class="material-icons left ">warning</i>HUBO UN ERROR INTENTE NUEVAMENTE', 2000, 'rounded warningToast');
		          }
		         }
	    	});		
		}			
	});


  $('.abGrupo').click(function(){
  	var Grp_IdGrupero = $(this).data('ig');
  	var Pro_IdProducto = $(this).data('pr');
  	var Gru_IdGrupo = $(this).data('gr');

		$.ajax({
	     data:{
	     'Grp_IdGrupero' : Grp_IdGrupero,
	     'Pro_IdProducto' : Pro_IdProducto,
	     'Gru_IdGrupo' : Gru_IdGrupo
	     },
	     type: "POST",
	     url: base_url+'grupal/abandonar', 
	     dataType: "json",
	     success: function(data){
	      window.location.href = base_url+'grupal';
	     }
		});
  });

	// CREAR VISTA PARA CUANDO SE COMPLETE EL GRUPO Y PAGAR


	var clickAddCart = 0;
  $('.add_cart').click(function(){

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
	var siproducto = 0;
    
    siproducto = 1;
    product_id.push($(this).data("is"));
    id_producto.push($(this).data("ip"));
    product_name.push($(this).data("pn"));
    product_price.push($(this).data("p"));
    variacion.push($(this).data("v"));
    unidad.push($(this).data("u"));
    img.push($(this).data("img"));
    color.push($(this).data("c"));
    tipovariacion.push($(this).data("tv"));
    idtienda.push($(this).data("it"));
    quantity.push(1);
    cantmin.push(1);
    precio_unit.push($(this).data("p"));
    documento.push($(this).data("d"));  

    if(siproducto == 1 && clickAddCart == 1){
      clickAddCart = 0;
          $.ajax({
            url: base_url+'Productos/add',
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
              flagVariaciones: false
            },
            beforeSend:function(){  
       
            },
            success:function(data){
              window.location.href = base_url+'productos/despacho';
            }
        })      
      }
    });
});