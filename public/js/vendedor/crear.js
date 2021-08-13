$(document).ready(function() {
	$('select').material_select();
 	$('.productosList').select2();
	//Select direccion
	$("#selecRegion").change(function(){
      var idRegion = $(this).val();
      $.ajax({
         data:{
         'idRegion' : idRegion
         },
         type: "POST",
         url: base_url+'productos/load_provincia', 
         dataType: "json",
         success: function(data){
            $('#provincia').load(base_url+'productos/Select_Provincia',{datos:data});
            $("#provincia select").trigger('change');
         },
         error: function(data) {
           alert('error');
         }
      });
    });

	ListaProducto = [];
	$('.addPro').click(function(){
		var producto = $('.productosList').val();
		var proNombre = $('.productosList').find(':selected').data('title');
		var proPrecio = $('.productosList').find(':selected').data('precio');
		var cant = $('#cantidad').val();

		proPrecio = parseFloat(proPrecio) * parseInt(cant);
		var producto = {id: producto,nombre: proNombre, cantidad: cant};
		ListaProducto.push(producto);

		console.log(producto,proNombre,cant);
		console.log(ListaProducto);
		var newRowContent = "<tr><td>"+proNombre+"</td><td>"+cant+"</td><td>"+proPrecio+"</td></tr>";
		$("#lista_producto").append(newRowContent);
	});	

	$(".delTr").on( "click", function() {
  		console.log('Entro');
	});

	// $('.delTr').click(function(){		
	// 	console.log('Entro');
	// 	var c =	$(this);
	// 	console.log(c);
	// });


	$('#gPedido').click(function(){
		var datos = $('#datoC').val();
		var tlf = $('#tlfC').val();
		var producto = $('.productosList').val();
		var monto = $('#cobrar').val();
		var horario = $('#horario').val();
		var observacion = $('#observacion').val();

		var idRegion = $("#selecRegion").val();
      	var provincia = $("#provincia select").val();
      	var distrito = $("#distrito select").val();
      	var direccion = $("#direccionComprador").val();
      	var referencia = $('#referenciaComprador').val();
        var lote = $('#nloteComprador').val();
        var dpint = $('#dintComprador').val();
        var urbanizacion =  $('#urbComprador').val();

        console.log(producto);

        var detalledir = referencia+lote+dpint+urbanizacion;

        console.log(detalledir);

		console.log(datos,tlf,producto,monto,horario,observacion);
		console.log(idRegion,provincia,distrito,direccion,referencia,lote,dpint,urbanizacion);

		if (datos == null) {
		Materialize.toast('<i class="material-icons left ">warning</i>COMPLETE TODOS LOS CAMPOS OBLIGATORIOS', 2000, 'rounded warningToast');	
		}else {

			$.ajax({
		         data:{
		         'Cli_IdCliente' : datos,
		         'Cli_Telefono' : tlf,
		         'Cli_Direccion' : direccion,
		         'Cli_Referencia' : direccion,
		         'Cli_IdDepartamento' : idRegion,
		         'Cli_IdProvincia' : provincia,
		         'Cli_IdDistrito' : distrito,
		         'Pec_Monto' : monto,
		         'Pec_Horario' : horario,
		         'Pec_Observaciones' : observacion,
		         'ListaProducto': producto

		         },
		         type: "POST",
		         url: base_url+'vendedor/delivery/guardar', 
		         dataType: "json",
		         success: function(data){
		         console.log(data);
		          if (data == 1) {
		          	// location.reload(true);		        
		          }else {
		          	Materialize.toast('<i class="material-icons left ">warning</i>HUBO UN ERROR INTENTE NUEVAMENTE', 2000, 'rounded warningToast');
		          }
		         }
	    	});		
		}		

	})
});
	$('.delTr').click(function(){
		console.log('Entro');
		var c =	$(this);
		console.log(c);
	});