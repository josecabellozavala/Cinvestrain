<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//Configuracion de la conexion a base de datos
	$bd_host = "localhost"; 
	$bd_usuario = "root"; 
	$bd_password = ""; 
	$bd_base = "cepario"; 

	$conexion = mysql_connect ($bd_host, $bd_usuario, $bd_password); 
	mysql_select_db ($bd_base, $conexion); 
 

 
	//Variables recibidas por POST de nuestra conexión AJAX
	
//	
//        $iso1=$_POST['Date1Iso'];
//        $iso2=$_POST['Date2Iso'];
      $nombre_jugador = null;
 
            $Date1 = $_POST['Date1Iso'];
            $Date2 = $_POST['Date2Iso'];
	//Variable donde recogemos el resultado de la consulta
	
 $Date1=(string)$Date1;
  $Date2=(string)$Date2;
  
	//Realizamos la consulta a la base de datos
	$query = 'SELECT Alias FROM organism_information WHERE Date_of_Isolation >= "'.$Date1.'" and  Date_of_Isolation <= "'.$Date2.'"';
	$select = mysql_query($query, $conexion) or die('Error'.mysql_error());
 
	while ($valor = mysql_fetch_assoc($select)){
		$nombre_jugador = $valor['Alias'];
	}
 
	//Mostramos el resultado. Este 'echo' será el que recibirá la conexión AJAX
	echo $nombre_jugador;

      
?>