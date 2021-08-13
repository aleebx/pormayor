$(document).ready(function(){

	$('.crearVar').click(function(){
		var Categoria = $('#catSelect > option:selected').val();
        var SubCategoria = $('#sucSelect > option:selected').val();
        var SubCategoriaDetalle = $('#sucDetalle > option:selected').val();

        var nombVar = $('.nombreVarNew').val();
        var nombVAO = $('.nombreVAOnew').val();

        var arrVAO = nombVAO.split(",");

        console.log(nombVar,arrVAO);
        $.ajax({
          type: "POST",
          data: {
            "nombVar": nombVar,
            "arrVAO": arrVAO,
            "SubCategoriaDetalle": SubCategoriaDetalle
          },
          url: base_url + 'usuario/inventario/nueva_variacion',
          dataType: "json",
          beforeSend:function()
	      { 
    	$("#load_nuevaVar").html('<div class="progress customColorA"><div class="indeterminate customColorB"></div>');
	      },
          success: function (datos) {
          	console.log(datos);
    		$("#load_nuevaVar").html('');
    		$("#divNewVar").html('');
    		$(".verNuevoVar").addClass('hide');
            $("#rowTallas").load(base_url+'usuario/inventario/ver_nueva_variacion',{datos:datos,SubCategoriaDetalle:SubCategoriaDetalle});         
          }
       });


	})
	$('.verNuevoVar').click(function(){
		$('#divNewVar').removeClass('hide');
	});	

	// $('.ProUnico').click(function(){
		
	// });

	$('.coloresVar').select2({
		/*placeholder: "Colores del producto",
    	allowClear: true*/
	});
	
	$('input[name=variacion]').change(function(){
	    // alert(this.checked);
	    var IdVAO = ($(this).attr('id'));
	    var idpro = ($(this).data('idpro'));
	    $.ajax({
          type: "POST",
          data: {
            "IdVAO": IdVAO,
            "idpro": idpro
          },
          url: base_url + 'usuario/inventario/colores_no',
          beforeSend:function()
	      { 
    	$("#colVarCarga").html('<div class="progress customColorA"><div class="indeterminate customColorB"></div>');
	      },
          success: function (data) {
            $("#colVarCarga").html('');
            $("#colVarCarga").html(data);         
          }
       });
	});

	$('.addVarPro').click(function(){
			var vaoId = [];
		    var varId = [];
		    var vaoNombre = [];
		    var varNombre = [];
			$('.checkboxVar:checked').each(function(){
				vaoId.push($(this).attr("id"));
				varId.push($(this).data('vari'));
				vaoNombre.push($(this).data('vaon'));
				varNombre.push($(this).data('nomvar'));
			});
			var cText = [];
		    var colores = $("#coloresVar").select2("data");
		    for (var i = 0; i < colores.length; i++) {
		   	   	cText.push(colores[i]["text"]);		    
		    }
		    
			if (vaoId.length == '' || varId.length == '' || cText.length == '') {
				Materialize.toast('<i class="material-icons left ">warning</i>No puedes dejar campos vacios', 1500, 'rounded warningToast');
			} else {
				$('.addVarBDCont').show(500);
				$.ajax({
			          type: "POST",
			          data: {
			            "varId": varId,
			            "vaoId": vaoId,
			            "vaoNombre": vaoNombre,
			            "varNombre": varNombre,
			            "colorVar": cText
			          },
			          url: base_url + 'usuario/inventario/agregar_variacion',
			          beforeSend:function()
				      {
			    	$("#lista_variacion").html('<div class="progress customColorA"><div class="indeterminate customColorB"></div>');
				      },
			          success: function (data) {
			            $("#lista_variacion").html('');
			            $("#lista_variacion").html(data);         
			          }
			    });
	       } 
		});
});