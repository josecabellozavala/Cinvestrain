<?php
	include "../../../../bdConnection.php";
	include "../extras/php/basico.php";
	
	/*verificamos si las variables se envian*/
	if(empty($_POST['usu_per']) || empty($_POST['usu_per']) ){
		echo "You must complete requiered data";
		exit;
	}
	
	/*obtenemos el ide mayor*/
	$sql = "select Role_ID from role order by Role_ID desc limit 1";
	$per = mysql_query($sql);
	$rs_per = mysql_fetch_assoc($per);
	
	/*insertamos el nuevo registro*/
	$ide_per = $rs_per['Role_ID'] + 1;

	$sql = sprintf("INSERT INTO `role` VALUES (%d, '%s','%s');",
		fn_filtro((int)$ide_per),
		fn_filtro(substr($_POST['usu_per'], 0, 16)),
                fn_filtro(substr($_POST['email_per'], 0, 70))
		
	);

	if(!mysql_query($sql))
		echo "Error to insert:\n$sql";

	exit;
?>