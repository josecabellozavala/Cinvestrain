<?php
	include "../../../../bdConnection.php";
	include "../extras/php/basico.php";
	$sql = sprintf("delete from surface_morphology where Surface_Morphology_ID=%d",
		(int)$_POST['ide_per']
	);
	if(!mysql_query($sql))
		echo "Ocurrio un error\n$sql";
	exit;
?>