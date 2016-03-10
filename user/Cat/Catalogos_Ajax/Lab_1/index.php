<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Lab</title>
        <script language="javascript" type="text/javascript" src="../extras/js/jquery-1.3.2.min.js"></script>
        <script language="javascript" type="text/javascript" src="../extras/js/jquery.blockUI.js"></script>
        <script language="javascript" type="text/javascript" src="../extras/js/jquery.validate.1.5.2.js"></script>
     <link href="../extras/css/estilo.css" rel="stylesheet" type="text/css" />
        <link href="../extras/css/style.css" rel="stylesheet" type="text/css" />
        <link href="../extras/css/screen.css" rel="stylesheet" type="text/css" />
        <link href="../extras/php/PHPPaging.lib.css" rel="stylesheet" type="text/css" />
        <script language="javascript" type="text/javascript" src="index.js"></script>
    </head>
    <body class="col">
        <br>
            <br>
                  <br>
            </br>
                </br>
            </br>
    	<div id="cuerpo">
            <h1><center>Lab</center></h1>
         
            <div id="div_listar"></div>
            <div id="div_oculto" style="display: none;"></div>
               
            <form action="javascript: fn_buscar();" id="frm_buscar" name="frm_buscar">
                <table class="formulario">
                    <tbody class="col">
                        <tr>
                           
                            <td><h3><b>Orden by</b></h3></td>
                            <td>
                                <select name="criterio_ordenar_por" id="criterio_ordenar_por" class="cajas">
                                    <option value="id_lab">Id</option>
                                	<option value="Name">Name</option>
                                   
                                  
                                </select>
                            </td>
                            <td> <h3><b> In</b></h3></td>
                            <td>
                            	<select name="criterio_orden" id="criterio_orden" class="cajas">
                                	<option value="desc">Down</option>
                                    <option value="asc">Up</option>
                                </select>
                            </td>
                            <td><h3><b>Records</b></h3></td>
                            <td>
                            	<select name="criterio_mostrar" id="criterio_mostrar" class="cajas">
                                	<option value="1">1</option>
                                	<option value="2">2</option>
                                	<option value="5">5</option>
                                	<option value="10">10</option>
                                	<option value="20" selected="selected">20</option>
                                	<option value="40">40</option>
                                </select>
                            </td>
                            <td><input class="Boton1"type="submit" value="search" /></td>
                        </tr>
                    </tbody>
                </table>
            </form>
          
        </div>
    </body>
</html>

<?php 
include "../../../../bdConnection.php";

if(isset($_POST["txtid"]) && isset($_POST["labo"]) && isset($_POST['txtname']) && isset($_POST['txtlastName']) && isset($_POST['txtpass']) && isset($_POST['cboRole']) ){
    
        
        $rutaServidor='Fotos_User';
$rutaTemporal=$_FILES['imagen']['tmp_name'];
$nombreImagen=$_FILES['imagen']['name'];
$rutaDestino=$rutaServidor.'/'.$nombreImagen;
$rutaAloja='../User1/control';
$rutacomplem=$rutaAloja.'/'.$rutaDestino;
@move_uploaded_file($rutaTemporal,$rutacomplem );

     
                /*obtenemos el ide mayor*/
	$id_laboratorio = "select id_lab from lab order by id_lab desc limit 1";
       $cs=mysql_query($id_laboratorio,$cn);
	
       while($resul=mysql_fetch_array($cs)){
			$ultimo_id_lab=$resul[0];
                       
			}
                        $lab=$_POST['labo'];
	
	/*insertamos el nuevo registro*/
	$ide_per = $ultimo_id_lab+ 1;

	$sql = "INSERT INTO lab VALUES ('$ide_per','$lab') ";
	$cs=mysql_query($sql,$cn);

                $cod=$_POST['txtid'];
		$name=$_POST['txtname'];
		$last=$_POST['txtlastName'];
		$pass=$_POST['txtpass'];
                $tel=$_POST['txttel'];
                $corre=$_POST['txtemail'];
		$role=$_POST['cboRole'];
                $Sta=$_POST['cboStatus'];

               
             
             $sql="insert into user (Name,Last_Name, Password,Telephone, email, Role, Status,lab,photo) values ('$name','$last','$pass',' $tel','$corre','$role','$Sta','$ide_per','$rutaDestino')";
		 
		$cs=mysql_query($sql,$cn);
                
           
           
                
   echo "<script>alert('It was recorded successfully');</script>";
}

?>


    