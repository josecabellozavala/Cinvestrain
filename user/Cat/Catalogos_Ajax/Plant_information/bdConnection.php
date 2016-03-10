<?php
$cn=mysql_connect("localhost","jcabello","radamanthys123")or die("Error en Conexion");
$db=mysql_select_db("jcabello_cepario2")or die("Error en Db");
$link_id = new mysqli("localhost","jcabello","radamanthys123","jcabello_cepario2");
return($cn);
return($db);
?>