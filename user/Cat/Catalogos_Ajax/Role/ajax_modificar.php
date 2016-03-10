<?php
	include "../../../../bdConnection.php";
	include "../extras/php/basico.php";
	
	/*verificamos si las variables se envian*/
	if(empty($_POST['usu_per'])){
		echo "You must complete requiered data";
		exit;
	}
	
	/*modificar el registro*/

	$sql = sprintf("UPDATE role SET   Type='%s' where Role_ID=%d;",
		fn_filtro(substr($_POST['usu_per'], 0, 60)),
		fn_filtro((int)$_POST['ide_per'])
	);
	if(!mysql_query($sql))
		echo "Error al insertar a la nueva persona:\n$sql";
	exit;
?>