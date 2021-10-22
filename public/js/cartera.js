$(document).ready(function(){
$('.gReporte').click(function () {
	var vig = $('.rVig').text();
	var reg = $('.rReg').text();
	var r10 = $('.rR10').text();
	var r20 = $('.rR20').text();
	var r30 = $('.rR30').text();
	var r40 = $('.rR40').text();
	var Tot = $('.rTot').text();
	$.ajax({
	data:{
	  vig : vig,
	  reg : reg,
	  r10 : r10,
	  r20 : r20,
	  r30 : r30,
	  r40 : r40,
	  Tot : Tot
	},
	type:"POST",
	dataType:"json",
	url:base_url+'vnd/guardar_cartera', 
	success: function(r) 
	{
	   location.reload(true);
	}
	});
	});
});