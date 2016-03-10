<?php
include '../../../bdConnection.php';

$subi=$_GET["codigo_clase_delete"];
			
		$sql="delete from role where Role_ID='$subi'";
		
		$cs=mysql_query($sql,$cn);
		
?>



<html>
    <head>
    </head>
    <body onload="enviar('index.php')">
        <script type="text/javascript">
        function enviar(destino)
        {
            document.formulario.action=destino;
            document.formulario.submit(); 
        }
        
    </script>

<form name="formulario"  method="post">
<BR>
<BR>
<BR>
<BR>
<BR>
<BR>
<BR>
<BR>
<BR>
<BR>


  
    

    
 



    

 
 
<br />

</form>
    </body>
</html>
