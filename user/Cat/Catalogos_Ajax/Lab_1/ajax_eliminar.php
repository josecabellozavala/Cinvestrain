<?php
	include "../../../../bdConnection.php";
	include "../extras/php/basico.php";
	$sql = sprintf("delete from lab where id_lab=%d",
		(int)$_POST['ide_per']
	);
	if(!mysql_query($sql))
		echo "Error\n$sql";
        
        $sqlUser = sprintf("delete from user where lab=%d",
		(int)$_POST['ide_per']
	);
	if(!mysql_query($sqlUser))
		echo "Error\n$sql";
	exit;
?>