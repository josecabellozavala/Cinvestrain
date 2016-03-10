<?php 

include("menu_prin.php");
?>
<br>
<br>
<br>
<br>
<br>
<script type="text/JavaScript">
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
function hola()
{
    
    alert("Hola");
}
</script>


<?php

include("bdConnection.php");

$titule="";
 $inso=$_POST["chec1"]; 
  $date1=$_POST["chec2"]; 
   $date2=$_POST["chec3"]; 
    $origi=$_POST["chec4"]; 
     $stor=$_POST["chec5"]; 
 
     
      $insolate=$_POST["insolated"]; 
  $fecha1=$_POST["dateofinsoli"]; 
   $fecha2=$_POST["dateofinsolf"]; 
    $origen=$_POST["ori"];  
     $alma=$_POST["alias"]; 
     
     
     if($inso=="true" &&  $date1=="false" && $date2=="false" && $origi=="false" && $stor=="false")
     {
         
$sql="select * from organism_information where Isolated_by='$insolate'";
		$cs=mysql_query($sql,$cn);
                
			$titule="Organism isolated by $insolate";
		echo"  <div id='Exportar_a_Excel'><center>
<table id='table1' border='3'>
<tr>
<td>Org_ID</td>
<td>Alias</td>
<td>Isolated_by</td>
<td>Date_of_Isolation</td>
<td>Origin</td>
<td>Additional_Comments</td>

</tr>";
               
		while($resul=mysql_fetch_array($cs)){
		        $var=$resul[0];
			$var1=$resul[1];
			$var2=$resul[2];
			$var3=$resul[3];
			$var4=$resul[4];
                        $var5=$resul[5];
			echo "<tr>
<td>$var</td>
<td>$var1</td>
<td>$var2</td>
<td>$var3</td>
<td>$var4</td>
<td>$var5</td>

</tr>";
			}
			
			echo "</table>
                            

</center></div>";
                 echo "</br>" ;      
  

                         }
                          
                         
		  elseif($inso=="false" &&  $date1=="true" && $date2=="true" && $origi=="false" && $stor=="false")
     {
         
                      if(empty($fecha1)&& empty($fecha2))
                      {
                          echo "No results";
                      }
 else {
$sql="select * from organism_information where Date_of_Isolation BETWEEN '$fecha1' AND '$fecha2'";
		$cs=mysql_query($sql,$cn);
                $titule="Organism isolated between $fecha1 and $fecha2";
			
		echo" <div id='Exportar_a_Excel'><center>
<table border='3'>
<tr>
<td>Org_ID</td>
<td>Alias</td>
<td>Isolated_by</td>
<td>Date_of_Isolation</td>
<td>Origin</td>
<td>Additional_Comments</td>

</tr>";
		while($resul=mysql_fetch_array($cs)){
		$var=$resul[0];
			$var1=$resul[1];
			$var2=$resul[2];
			$var3=$resul[3];
			$var4=$resul[4];
                        $var5=$resul[5];
			echo "<tr>
<td>$var</td>
<td>$var1</td>
<td>$var2</td>
<td>$var3</td>
<td>$var4</td>
<td>$var5</td>

</tr>";
			}
			
			echo "</table>
</center></div>";
                        
   
 }
                         }
		
      
    elseif($inso=="false" &&  $date1=="false" && $date2=="false" && $origi=="true" && $stor=="false")
     {
         
$sql="select * from organism_information where Origin='$origen'";
		$cs=mysql_query($sql,$cn);
                
			$titule="Origin $origen Organism";
		echo" <div id='Exportar_a_Excel'><center>
<table border='3'>
<tr>
<td>Org_ID</td>
<td>Alias</td>
<td>Isolated_by</td>
<td>Date_of_Isolation</td>
<td>Origin</td>
<td>Additional_Comments</td>

</tr>";
		while($resul=mysql_fetch_array($cs)){
		$var=$resul[0];
			$var1=$resul[1];
			$var2=$resul[2];
			$var3=$resul[3];
			$var4=$resul[4];
                        $var5=$resul[5];
			echo "<tr>
<td>$var</td>
<td>$var1</td>
<td>$var2</td>
<td>$var3</td>
<td>$var4</td>
<td>$var5</td>

</tr>";
			}
			
			echo "</table>
</center></div>";
                        
   

                         }
                         
                elseif($inso=="false" &&  $date1=="false" && $date2=="false" && $origi=="false" && $stor=="true")
     {
         
$sql="select organism_information.Org_ID,organism_information.Alias,organism_information.Isolated_by,organism_information.Date_of_Isolation,organism_information.Origin,organism_information.Additional_Comments,dna.Storage_ID from organism_information inner join dna on organism_information.Org_ID=dna.Org_ID where dna.Storage_ID='$alma'";
		$cs=mysql_query($sql,$cn);
                
			$titule="Storage of organism $alma";
		echo" <div id='Exportar_a_Excel'><center>
<table border='3'> 
<tr>
<td>Org_ID</td>
<td>Alias</td>
<td>Isolated_by</td>
<td>Date_of_Isolation</td>
<td>Origin</td>

<td>Additional_Comments</td>
<td>Storage</td>
</tr>";
		while($resul=mysql_fetch_array($cs)){
		$var=$resul[0];
			$var1=$resul[1];
			$var2=$resul[2];
			$var3=$resul[3];
			$var4=$resul[4];
                        $var5=$resul[5];
                         $var6=$resul[6];
			echo "<tr>
<td>$var</td>
<td>$var1</td>
<td>$var2</td>
<td>$var3</td>
<td>$var4</td>
<td>$var5</td>
<td>$var6</td>
</tr>";
			}
			
			echo "</table> 
</center></div>";
                        
   

                         }         
		                     
                        ?>

<html>
    <head>
        <meta charset="utf-8">
    <title>Find</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="Reportes_Excel/css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
		body {
			padding-top: 60px;
			padding-bottom: 40px;
		}
		footer {
			left: 0;
			position: fixed;
			bottom: 0;
			width: 100%;
			height: 120px;
		}
    </style>
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../../ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../../ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../../ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../../ico/apple-touch-icon-57-precomposed.png">
	<link rel="shortcut icon" href="../../ico/favicon.png">	
    
        <script type="text/javascript" src="Reportes_Excel/js_tabla/table_excel.js"></script>
        <script language="javascript">
            $(document).ready(function() {
                $(".botonExcel").click(function(event) {
                    $("#datos_a_enviar").val( $("<div>").append( $("#Exportar_a_Excel").eq(0).clone()).html());
                    $("#FormularioExportacion").submit();
                });
            });
        </script>
       
    </head>
    <body>
        <div align="center"><div style="width:98%">
        <table class="table table-bordered">
        	<tr class="well">
                <td><h3 align="center"><?php echo $titule;?></h3></td>
        	</tr>
        </table>   
        <div align="right"><a href="#excel" role="button" class="btn" data-toggle="modal"><i class="icon-print"></i> <strong>Print Report</strong></a></div><br>
        <!-- reporte en excel -->
        <div id="excel" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <form action="Reportes_Excel/ficheroExcel.php" method="post" id="FormularioExportacion" class="form-inline">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 id="myModalLabel" align="center">Name of file</h3>
            </div>
            <div class="modal-body" align="center">
                <input type="text" name="nombre" autocomplete="off" placeholder="Name of file" value="" required><br>
                <strong>Print in: </strong><br>
                <select name="imp">
                    <option value="excel">Excel</option>
                    <option value="pdf">PDF</option>
                </select>
            </div>
            <div class="modal-footer">
                <button class="btn" data-dismiss="modal" aria-hidden="true"><strong>Close</strong></button>
                <button type="submit" class="btn botonExcel"><i class="icon-print"></i> <strong>Print report</strong></button>
                <input type="hidden" id="datos_a_enviar" name="datos_a_enviar" />
            </div>
            </form>
        </div>
        
        
            </body>
</html>
<script src="Reportes_Excel/js/jquery.js"></script>
<script src="Reportes_Excel/js/bootstrap-transition.js"></script>
<script src="Reportes_Excel/js/bootstrap-alert.js"></script>
<script src="Reportes_Excel/js/bootstrap-modal.js"></script>
<script src="Reportes_Excel/js/bootstrap-dropdown.js"></script>
<script src="Reportes_Excel/js/bootstrap-scrollspy.js"></script>
<script src="Reportes_Excel/js/bootstrap-tab.js"></script>
<script src="Reportes_Excel/js/bootstrap-tooltip.js"></script>
<script src="Reportes_Excel/js/bootstrap-popover.js"></script>
<script src="Reportes_Excel/js/bootstrap-button.js"></script>
<script src="Reportes_Excel/js/bootstrap-collapse.js"></script>
<script src="Reportes_Excel/js/bootstrap-carousel.js"></script>
<script src="Reportes_Excel/js/bootstrap-typeahead.js"></script>
      