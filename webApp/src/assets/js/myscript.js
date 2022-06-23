
$(document).ready(function(){

   $("#refrescar").click(function(){
     
      $("#userTable tbody").empty();

      $.ajax({
         url: 'http://localhost:8081/php/consulta.php',
         type: 'get',
         dataType: 'JSON',
         success: function(response){
         var len = response.length;
         for(var i=0; i<len; i++){

         
         var fecha= response[i].fecha;
         var taller = response[i].taller;
         var costos = response[i].costos;
         var kilometraje = response[i].kilometraje;
         var mantenimiento= response[i].mantenimiento;
         var observaciones= response[i].observaciones;
            
         var tr_str = "<tr>" +
         "<td align='left'>" + fecha + "</td>" +
         "<td align='left'>" + taller + "</td>" +
         "<td align='left'>" + costos + "</td>" +
         "<td align='left'>" + kilometraje + "</td>" +
         "<td align='left'>" + mantenimiento + "</td>" +
         "<td align='left'>" + observaciones + "</td>" +
         "</tr>";
         
         $("#userTable tbody").append(tr_str);
         }
         
         }
         });

   });
   
   });
 
 