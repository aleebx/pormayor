$(document).ready(function(){

  $("body").on('change', "#selDepartamento", function() {

      var selDepartamento = $("#selDepartamento").val();

      $.ajax({
        type: "POST",
        data: {
              "selDepartamento": selDepartamento
            },
        url: base_url + 'index/ajax_lista_provincias',
        success: function (data) {
          $("#ajax_lista_distritos").html('');
          $("#ajax_lista_provincias").html('');
          $("#ajax_lista_provincias").html(data);
        }
      });
    });
        $('.selectDir1').select2({
            placeholder: 'Selecciona el Departamento'
        });

    $("body").on('change', "#selProvincia", function() {

        var selProvincia = $("#selProvincia").val();
        var selDepartamento = $("#selDepartamento").val();

        $.ajax({
          type: "POST",
          data: {
                "selProvincia": selProvincia,
                "selDepartamento": selDepartamento
              },
          url: base_url + 'index/ajax_lista_distritos',
          success: function (data) {
            $("#ajax_lista_distritos").html('');
            $("#ajax_lista_distritos").html(data);
          }
        });
    });
});