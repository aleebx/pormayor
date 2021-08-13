$(document).ready(function(){
$('.buscarV').click(function () {
	var mes = $('#meses').val();
	$("#contReporte").load(base_url + "vnd/reporte_mes",{mes:mes});
	});
});