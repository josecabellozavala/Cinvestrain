<?php
include("../bdConnection.php");
?>

 <?php 

	          $cod=$_POST["Eo"];
    $sql="delete from datos where id='$cod' ";
  
               $cs=mysql_query($sql,$cn);
		
 
        ?>
<html>
    <head>
    </head>
    <body onload="enviar('INFO_PAGE.php')">
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
