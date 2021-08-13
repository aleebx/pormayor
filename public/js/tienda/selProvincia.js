$(document).ready(function(){
    if ($("#selecRegion").data('valor') != "") {
        $("#provincia select").val($("#provincia").data('valor'));

        setTimeout(function(){ 
            $("#direccionVista").find("#provincia select").trigger("change");
        }, 300);
    }
// $('#selProvincia').material_select();
    $("#selProvincia").change(function(){
        var idProvincia = $(this).val();
        var idRegion = $('#selecRegion').val();
         $.ajax({
            data:{
            'idProvincia' : idProvincia,
            'idRegion' : idRegion
            },
            type: "POST",
            url: base_url+'productos/load_distrito', 
            dataType: "json",
            success: function(data){
                $('#distrito').load(base_url+'productos/Select_Distrito',{datos:data});
            },
            error: function(data) {
              alert('error');
            }
          });
 
    });
});