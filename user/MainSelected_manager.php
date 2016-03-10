<?php
// Evitar los warnings the variables no definidas!!!
$err = isset($_GET['error']) ? $_GET['error'] : null ;

?>

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


  
    

<div style="float:left; width: 45%" align="center">

<table border="4">
<tr>

<td  width="50%" bgcolor="#A5DBEB" align="center">
    <input   type="button" name="btnCatalogo"  value="Data handling  " onclick="enviar('Catalogo.php')"  />
</td> 

</tr>
</table>

    
    
 
</div>

   <div style="float:right; width: 45%" align="center">


<table border="4">
<tr>
  <td width="50%" bgcolor="#A5DBEB" align="center">
    <input type="button" name="btnInsertTabla"  value="Main information" onclick="enviar('Insertar_manager.php')" />
</td> 
</tr>
  </table>
    

  </div>
    
    
    <div style="clear: both"></div>
  
 
<br />

</form>
<br />



</body>
</html>