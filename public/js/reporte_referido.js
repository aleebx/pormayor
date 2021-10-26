$(document).ready(function(){
$('.buscarRef').click(function () {
	var mes = $('#meses').val();
	$("#contReporte").load(base_url + "vnd/reporte_ref",{mes:mes});
	});
});