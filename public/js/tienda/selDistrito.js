$(document).ready(function(){
	if ($("#selecRegion").data('valor') != "") {
        $("#distrito select").val($("#distrito").data('valor'));
	    
        setTimeout(function(){ 
           $("#distrito select").trigger('change');
           $('.preloaderDireccion').parent().addClass('hide');
	    	$('#direccionVista').removeClass('hide');
        }, 300);
    }
    
	$('#selDistrito').change(function (){
		$('#toHide').removeClass().addClass("input-field col s12 l12");
	});
});