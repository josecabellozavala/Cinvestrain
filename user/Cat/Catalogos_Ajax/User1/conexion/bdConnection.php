<?php
$cn=mysql_connect("localhost","jcabello","radamanthys123")or die("Error en Conexion");
$db=mysql_select_db("jcabello_cepario2")or die("Error en Db");
return($cn);
return($db);
?>