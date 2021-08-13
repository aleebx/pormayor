$(document).ready(function(){
	//Forzar validaciones en formularios 
    jQuery.validator.setDefaults({
      debug: true,
      success: "valid",
      ignore: [] 
    });

    $("#form_addLocal" ).validate({
      rules: {
        field: {
          required: true,
          file: false,
        }
      }
    });

	$('.btnInsertLocal').click(function(){
		var Tie_IdTienda = $(this).data('id');
		var nombreLocal = $('#nombreLocal').val();
		var dirLocal = $('#direccionLocal').val();
		var tlfLocal = $('#tlfLocal').val();
		var latitud = $('#latitud').val();
		var longitud = $('#longitud').val();
		
		if (!$("#form_addLocal").validate().form()){
            Materialize.toast('<i class="material-icons left ">warning</i>No puedes dejar campos vacios', 1500, 'rounded warningToast');
        }else{
        	$('#modalLocal').modal('close');
			$.ajax({
			 	data:{
				'Tie_IdTienda' : Tie_IdTienda,
				'nombreLocal': nombreLocal,
				'dirLocal': dirLocal,
				'tlfLocal': tlfLocal,
				'latitud': latitud,
				'longitud': longitud
				},
			    type: "POST",
			    url: base_url+'usuario/tienda/insert_local',
			    dataType: "json",
			    success: function(data){
			    	Materialize.toast('<i class="material-icons left ">check_circle</i>Local agregado exitosamente', 1500, 'rounded successToast', function(){location.reload(true)});
				},
			});
		}
	});
});