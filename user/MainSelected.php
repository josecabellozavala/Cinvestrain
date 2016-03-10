<?php
// Evitar los warnings the variables no definidas!!!
$err = isset($_GET['error']) ? $_GET['error'] : null ;

?>
 <?php echo "Bienvenido, " . $_SESSION['user'];?>
        
        <ul>
        	<li><a href="log_out.php">Salir</a></li>
        </ul>
<!DOCTYPE html>
<html>
<head>
<title>Select</title>
</head>

<body bgcolor="#E7A9FE" background="Imagenes/microalga.jpg">
<header>
    <br>
<h1 align="center">    Main menu       </h1>
</header>

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


  
    

    
 


<table border="4" align="center">
<tr>
  <td width="50%" bgcolor="#A5DBEB" align="center">
    <input type="button" name="btnInsertTabla"  value="Main information" onclick="enviar('Insertar.php')" />
</td> 
</tr>
  </table>
    

 
 
<br />

</form>
<br />



</body>
</html>