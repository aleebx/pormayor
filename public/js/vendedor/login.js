$(document).ready(function() {
  $("#form-registro").validate({
      rules: {
          clave: "required",
          clave2: {
              equalTo: "#clave"
          }
      },
      messages: {
          clave: "Ingresar contraseña",
          clave2: "No coinciden las contraseña"
      }
    });

});