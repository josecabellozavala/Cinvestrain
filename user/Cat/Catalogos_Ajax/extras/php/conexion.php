<?php
	$bd_host = "localhost";
	$bd_usuario = "jcabello";
	$bd_password = "radamanthys123";
	$bd_base = "jcabello_cepario2";
	$con = mysql_connect($bd_host, $bd_usuario, $bd_password) or die("Error en la conexión a MsSql");
	mysql_select_db($bd_base, $con);
?>