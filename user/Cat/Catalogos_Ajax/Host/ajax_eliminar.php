<?php
	include "../../../../bdConnection.php";
	include "../extras/php/basico.php";
	$sql = sprintf("delete from host_info where ID_Host=%d",
		(int)$_POST['ide_per']
	);
	if(!mysql_query($sql))
		echo "Ocurrio un error\n$sql";
	exit;
?>