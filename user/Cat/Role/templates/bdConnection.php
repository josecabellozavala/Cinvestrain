<?php
$cn=mysql_connect("localhost","root"," ")or die("Error en Conexion");
$db=mysql_select_db("cepario")or die("Error en Db");
$link_id = new mysqli("localhost","root","","cepario");
return($cn);
return($db);
?>