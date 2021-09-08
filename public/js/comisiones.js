$(document).ready(function(){
      var xx = 0;
        $.ajax({
        data:{'xx':xx},
        type:"POST",
        url:base_url+'vnd/meta', 
        dataType:"json",
          success:function(data){
            console.log(data);
              var c1 = 0;
              var c2 = 0;
              var c3 = 0;
              var c4 = 0;
              $('#monto').val(data);
              var comision = 0;
            if (data <= 29999){
              $('.cuanto').text('AUN NO COMISIONAS CON TUs VENTAS ACTUALES');
            }else if(data >= 30000 && data <= 40000){
              c1 = data * 0.005;
              $('.cuanto').text('S/'+c1);
            }else if(data >= 40001 && data <= 80000){
              c1 = 40000 * 0.005;
              data2 = data - 40000;
              c2 = data2 * 0.03;
              comision = c1 + c2;
              $('.cuanto').text('S/' + comision);
            }else if(data >= 80001 && data <= 120000){
              c1 = 40000 * 0.005;
              c2 = 40000 * 0.03;
              data2 = data - 80000;
              c3 = data2 * 0.04;
              comision = c1 + c2 + c3;
              $('.cuanto').text('S/' + comision);
            }else if(data >= 120001){
              c1 = 40000 * 0.005;
              c2 = 40000 * 0.03;
              c3 = 40000 * 0.04;
              data2 = data - 120000;
              c4 = data2 * 0.05;
              comision = c1 + c2 + c3 + c4;
              $('.cuanto').text('S/' + comision);
            }
        }
      });

      $('#monto').change(function(){
        var data = $(this).val();
        var xdia = data / 25;
        $('.xdia').text('Deberías de vender en promedio ' + xdia + ' por día');
        if (data <= 29999){
              $('.cuanto').text('AUN NO COMISIONAS CON ESTE MONTO');
            }else if(data >= 30000 && data <= 40000){
              c1 = data * 0.005;
              $('.cuanto').text('S/'+c1 +' EN COMISIÓN');
            }else if(data >= 40001 && data <= 80000){
              c1 = 40000 * 0.005;
              data2 = data - 40000;
              c2 = data2 * 0.03;
              comision = c1 + c2;
              $('.cuanto').text('S/' + comision + ' EN COMISIÓN');
            }else if(data >= 80001 && data <= 120000){
              c1 = 40000 * 0.005;
              c2 = 40000 * 0.03;
              data2 = data - 80000;
              c3 = data2 * 0.04;
              comision = c1 + c2 + c3;
              $('.cuanto').text('S/' + comision + ' EN COMISIÓN');
            }else if(data >= 120001){
              c1 = 40000 * 0.005;
              c2 = 40000 * 0.03;
              c3 = 40000 * 0.04;
              data2 = data - 120000;
              c4 = data2 * 0.05;
              comision = c1 + c2 + c3 + c4;
              $('.cuanto').text('S/' + comision + ' EN COMISIÓN');
            }
      });
});