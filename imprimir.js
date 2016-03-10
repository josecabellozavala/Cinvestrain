function mostrarT()
{
       var div2=document.getElementById("tabla") ;
       
       var nom1=document.getElementById("nom1").value;
      var nom2=document.getElementById("nom2").value;
      var nom3=document.getElementById("nom3").value;
       
       var a1p=document.getElementById("a1p").value;
          var a1s=document.getElementById("a1s").value;
             var a1t=document.getElementById("a1t").value;
             a1p=parseInt(a1p);
                  a1s=parseInt(a1s);
                       a1t=parseInt(a1t); 
             var prom1=(a1p+a1s+a1t)/3;
             prom1=parseInt(prom1);
             
              var a2p=document.getElementById("a2p").value;
          var a2s=document.getElementById("a2s").value;
             var a2t=document.getElementById("a2t").value;
             a2p=parseInt(a2p);
                  a2s=parseInt(a2s);
                       a2t=parseInt(a2t);
               var prom2=(a2p+a2s+a2t)/3;
               prom2=parseInt(prom2);
             
                  var a3p=document.getElementById("a3p").value;
          var a3s=document.getElementById("a3s").value;
             var a3t=document.getElementById("a3t").value;
              a3p=parseInt(a3p);
                  a3s=parseInt(a3s);
                       a3t=parseInt(a3t);
                 var prom3=(a3p+a3s+a3t)/3;
                  prom3=parseInt(prom3);
                  
                  
             var promt=(prom1+prom2+prom3)/3 ;
              promt=parseInt(promt);
              var pot1=Math.pow(prom1-promt,2);
              var pot2=Math.pow(prom2-promt,2);
               var pot3=Math.pow(prom3-promt,2);
             var desv=((pot1)+(pot2)+(pot3))/2;
             var dE=Math.sqrt(desv);
             
             if(a1p>0 && a1s>0 && a1t>0 && a2p>0 && a2s>0 && a2t>0 && a3p>0 && a3s>0 && a3t>0)
             {
         div2.innerHTML="<center><table id='idTable' name='idTable'  border='3'>\n\
                         <tr>\n\
                            <td>Nombre</td>\n\
                             <td>1</td>\n\
                             <td>2</td>\n\
                              <td>3</td>\n\
                              <td>Promedio</td>\n\
                              <td>Promedio del grupo</td>\n\
                              <td>Desv. Estandar</td></tr>\n\
                         <tr>\n\
                             <td>" +nom1 +"</td>\n\
                              <td>"+a1p +"</td>\n\
                              <td>"+a1s +"</td>\n\
                              <td>"+a1t +"</td>\n\
                              <td>"+prom1 +"</td>\n\
                               <td rowspan='3'>"   
                                   +promt +"\n\
                                  \n\
                              </td>\n\
                              <td  rowspan='3'>"+dE +"\n\
                                <tr> \n\
                              </td>\n\
                              <td>"+nom2 +"</td>\n\
                              <td>"+a2p +"</td>\n\
                               <td>"+a2s +"</td>\n\
                              <td>"+a2t +"</td>\n\
                              <td>"+prom2 +"</td>\n\
                        </tr>\n\
                        <tr>\n\
                               <td>"+nom3 +"</td>\n\
                              <td>"+a3p +"</td>\n\
                               <td>"+a3s +"</td>\n\
                              <td>"+a3t +"</td>\n\
                              <td>"+prom3 +"</td>\n\
                         </tr>\n\
                         </table></center> <input type='button' value='Prueba' onclick='Saludo()' >";
         
             }
             else
             {
                 
                 alert("Debes introducir numeros ");
             }
}


var tableToExcel = (function() {
  var uri = 'data:application/vnd.ms-excel;base64,'
    , template = '<html xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:x="urn:schemas-microsoft-com:office:excel" xmlns="http://www.w3.org/TR/REC-html40"><head><!--[if gte mso 9]><xml><x:ExcelWorkbook><x:ExcelWorksheets><x:ExcelWorksheet><x:Name>{worksheet}</x:Name><x:WorksheetOptions><x:DisplayGridlines/></x:WorksheetOptions></x:ExcelWorksheet></x:ExcelWorksheets></x:ExcelWorkbook></xml><![endif]--></head><body><table>{table}</table></body></html>'
    , base64 = function(s) 
    { 
        return window.btoa(unescape(encodeURIComponent(s))) 
    }
    , format = function(s, c) 
    { 
        return s.replace(/{(\w+)}/g, function(m, p) { return c[p]; }) 
    }
  return function(table, name) 
  {
    if (!table.nodeType) table = document.getElementById(table)
    var ctx = {
        worksheet: name || 'Worksheet', table: table.innerHTML
    }
    window.location.href = uri + base64(format(template, ctx))
  }
})()
