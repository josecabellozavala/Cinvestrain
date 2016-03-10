<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Community Type</title>
        <script language="javascript" type="text/javascript" src="../extras/js/jquery-1.3.2.min.js"></script>
        <script language="javascript" type="text/javascript" src="../extras/js/jquery.blockUI.js"></script>
        <script language="javascript" type="text/javascript" src="../extras/js/jquery.validate.1.5.2.js"></script>
        <link href="../extras/css/estilo.css" rel="stylesheet" type="text/css" />
        <link href="../extras/css/style.css" rel="stylesheet" type="text/css" />
        <link href="../extras/css/screen.css" rel="stylesheet" type="text/css" />
        <link href="../extras/php/PHPPaging.lib.css" rel="stylesheet" type="text/css" />
        <script language="javascript" type="text/javascript" src="index.js"></script>
    </head>
    <br>
                
            </br>
          <br>
                
            </br>
        <br>
                
            </br>
    <body class="col">
    	<div id="cuerpo">
            <h1><center>Strain</center></h1>
             
            
            <div id="div_listar"></div>
            <div id="div_oculto" style="display: none;"></div>
            <form action="javascript: fn_buscar();" id="frm_buscar" name="frm_buscar">
                <table class="formulario">
                    <tbody class="col">
                        <tr>
                           
                            <td><h3><b>Orden by</b></h3>  </td>
                            <td >
                                <select name="criterio_ordenar_por" id="criterio_ordenar_por" class="cajas">
                                    <option value="Strain_ID">Id</option>
                                	<option value="Alias">Alias</option>
                                    <option value="Nombre">Name</option>
                                    <option value="Tipo_Bacteria">Type of bacteria</option>
                                       <option value="Medio_Almacenamiento">Storage mean</option>
                                	<option value="Storage">Storage</option>
                                    <option value="Contenedor">Container</option>
                                    <option value="Comment">Comments</option>
                                </select>
                            </td>
                            <td>  <h3><b>In</b></h3></td>
                            <td >
                            	<select name="criterio_orden" id="criterio_orden" class="cajas">
                                	<option value="desc">Down</option>
                                    <option value="asc">Up</option>
                                </select>
                            </td>
                            <td><h3><b>Records</b></h3></td>
                            <td >
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