<?php
$cn=mysql_connect("localhost","root","")or die("Error en Conexion");
$db=mysql_select_db("cepario")or die("Error en Db");
return($cn);
return($db);
?>