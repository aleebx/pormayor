$(document).ready(function() {
$('#DNIORUC').on('change',function() {
  if($('#DNIORUC').val()) {  
      $.get(base_url+'/admin/ventas/getBuscarCompradores/'+$('#DNIORUC').val(),function (data) {
        var result=JSON.parse(data);
        var comprador=result.compradores;
        if(comprador) {
          $('#DNIORUC').val(comprador['Per_Dni']);
          $('#tlf').val(comprador['Per_Telefono']);
          $('#correo').val(comprador['Per_Correo']);
          $('#regionOcult').val(comprador['Region_id']);
          $('#idPersona').val(comprador['Per_IdPersona']);
          $('#idUsuario').val(comprador['Usu_IdUsuario']);
          $('#nombreComprador').val(comprador['Per_Nombre']);
          $('#provinciaOcult').val(comprador['Provincia_id']);
          $('#departamentoOcult').val(comprador['Distrito_id']);
          $('#direccionComprador').val(comprador['Per_Direccion']);        
          if(comprador['Region_id']) {
            $('#selectRegion').val(comprador['Region_id']);
           getProvinces();
          } else {
            $('#selectRegion').val('0');
          }   
        } else {
          $('#tlf').val('');
          $('#correo').val('');
          $('DNIORUC').val('');
          $('#idUsuario').val('');
          $('#idPersona').val('');
          $('#regionOcult').val('');
          $('#selectRegion').val('');
          $('#provinciaOcult').val('');
          $('#nombreComprador').val('');
          $('#selectDistritos').val('');
          $('#selectProvincia').val('');
          $('#departamentoOcult').val('');
          $('#direccionComprador').val('');
        }
      });  
    }
});

$("#selectProductos").change(function(){
  // console.log($(this).attributes["me"]);
  var id = $(this).val();
  var me = $(this).find(":selected").data("me");
  var pe = $(this).find(":selected").data("pe");
  varPro($(this).val());

});

function varPro(val) {
    $.get(base_url+'/admin/ventas/getVariaciones/'+val, function (data) {
      var result=JSON.parse(data);
        // console.log(result);
      // Combo de provincia
      $('#selectColor').val('');
      $('#selectColor').empty();
      var sku=result.sku;      

      for (value in sku) {
            // console.log(value);
            idsku = sku[value]['SKU_IdSKU'];
            text = sku[value]['SKU_Color'];
            if (text == "" || text == " ") {
              text = "DEFAULT";
            }
            $('#selectColor').append('<option value="'+idsku+'">'+text+'</option>')
      }
  });
}

var arrayListado = new Array;
$("#btnAgregarProduct").click(function(){
  var IdPro = $('#selectProductos').val();
  var textPro = $('#selectProductos').find(":selected").text();
  var cantidad = $('#selectCantidad').val();
  var idColor = $('#selectColor').val();
  var color = $('#selectColor').text();
  var preVent = $('#precioVenta').val();
  var contEnv = $('#costoEnvio').val();
  console.log(preVent,contEnv);
  if (preVent == 0 || contEnv == 0 || IdPro == 0) {
    Materialize.toast('INGRESE TODA LA INFORMACIÓN DEL PRODUCTO', 4000);
  } else {
    $('#tablaList').append('<tr id="tr'+IdPro+'"><td>'+IdPro+" - "+textPro+'</td><td>'+cantidad+'</td><td>'+preVent+'</td><td>'+contEnv+'</td><td><input type="button" class="delBtn" value="ELIMINAR"/></td></tr>');
    $('#precioVenta').val(0);
    $('#costoEnvio').val(0);  
    var precioTotal=(parseFloat(preVent)+parseFloat(contEnv));
    var preUnidad = parseFloat(preVent)/parseInt(cantidad);
    arrayListadoL= {
          "id":IdPro,
          "idColor":idColor,
          "cantidad":cantidad,
          "color":color,
          "costoEvio":contEnv,
          "nombre":textPro,
          "precio":preUnidad,
          "precioTotal":precioTotal.toFixed(2)
      };
      arrayListado.push(arrayListadoL);
      precioUnidad = 0;
      precioTotal = 0;
      precioEnvio = 0;
  for (value in arrayListado) {
            precioUnidad+=parseFloat(arrayListado[value]['precio']);
            precioTotal+=parseFloat(arrayListado[value]['precioTotal']);
            precioEnvio+=parseFloat(arrayListado[value]['costoEvio']);
        }

        // totalPagar=(parseFloat(precioUnidad) + parseFloat(precioEnvio));
        $('#precioPagars').val(precioUnidad.toFixed(2));
        $('#precioTotals').val(precioTotal.toFixed(2));
        $('#precioEnvios').val(precioEnvio.toFixed(2));
        $('#precioPagar').text('S/ '+precioUnidad.toFixed(2));
        $('#precioTotal').text('S/ '+precioTotal.toFixed(2));
        $('#precioEnvio').text('S/ '+precioEnvio.toFixed(2));
    } 
});


$("#btnRegistrarVenta").click(function() {
  //Persona
  var ruc=$('#DNIORUC').val();
  var telefono=$('#tlf').val();
  var email=$('#correo').val();
  var idUsuario=$('#idUsuario').val();
  var idPersona=$('#idPersona').val();
  var nombre=$('#nombreComprador').val();
  var selectRegion=$('#selectRegion').val();
  var direccion=$('#direccionComprador').val();
  var selectProvincia=$('#selectProvincia').val();
  var selectDistritos=$('#selectDistritos').val();
   if (email=="") {
    email = "contacto@pormayor.pe";
   }
  //Compra
  var arrayCompra=arrayListado;
  var precioTotal=$('#precioTotals').val();
  var precioEnvio=$('#precioEnvios').val();
  var precioPagar=$('#precioPagars').val();

  if (ruc=='' || telefono=='' || nombre=='' || direccion=='' || selectRegion=='0' || precioTotal=='' || precioPagar=='' || (selectDistritos==null || selectDistritos=='0')) {
    Materialize.toast('<i class="material-icons left ">warning</i>No puedes dejar campos vacios, para registrar la venta', 2000, 'rounded warningToast');
  } else {
    $.confirm({
      icon:'send',
      type:'green',
      theme:'modern',
      closeIcon:false,
      draggable:false,
      animation:'scale',
      columnClass:'small',
      title:'Registrar Venta',
      content:'Los datos ingresados deben ser correctos y veridicos',
      buttons: {
        Guardar: {
          btnClass:'btn pormayorUnico',
          action:function () {
            $.ajax({data:{
              'ruc':ruc,
              'email':email,
              'nombre':nombre,
              'telefono':telefono,
              'idUsuario':idUsuario,
              'idPersona':idPersona,
              'direccion':direccion,
              'precioTotal':precioTotal,
              'precioEnvio':precioEnvio,
              'precioPagar':precioPagar,
              'arrayCompra':arrayCompra,
              'selectRegion':selectRegion,
              'selectProvincia':selectProvincia,
              'selectDistritos':selectDistritos,
            },
            type: 'POST',
            url:base_url+'/admin/ventas/pago_contraentrega',
            beforeSend:function() {
              var loading_screen=pleaseWait({
                  logo:'',
                  backgroundColor:"#1313137d",
                  loadingHtml:"<i style='font-size:70px' class='white-text material-icons'>shopping_cart</i><h4 style='font-weight: 600;' class='white-text'>Registrando la venta...</h4><div class='sk-cube-grid'><div class='sk-cube sk-cube1'></div><div class='sk-cube sk-cube2'></div><div class='sk-cube sk-cube3'></div><div class='sk-cube sk-cube4'></div><div class='sk-cube sk-cube5'></div><div class='sk-cube sk-cube6'></div><div class='sk-cube sk-cube7'></div><div class='sk-cube sk-cube8'></div><div class='sk-cube sk-cube9'></div></div>"
              }).finish();
          },
            success: function (r) {
              $.confirm({
                type:'green',
                icon:'thumb_up',
                theme:'modern',
                draggable:false,
                closeIcon:false,
                columnClass:'small',
                animationBounce:1.5,
                title:'Registrar Venta',
                content:'El registro de la venta del comprador '+nombre+' fue exitosa.',
                buttons: {
                  Aceptar: {
                    btnClass:'btn pormayorUnico',                    
                    text:'Ir a control de ventas',
                    action: function () {
                      window.location.href=base_url+'admin';
                    }       
                  }
                }
              });
            }
          });   
          }       
        },
        Cancelar: {
        }
      }
    });
  }
});
});

$("#tablaList").on('click', '.delBtn', function () {
  // console.log("dddd");
    $(this).closest('tr').remove();
});