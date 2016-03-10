<?php
	include "../../../../bdConnection.php";
	$usu_per = $_GET['usu_per'];
	$sql = "select * from soil_type where Soil_type_ID='no'";
	$per = mysql_query($sql);
	$num_rs_per = mysql_num_rows($per);
	if($num_rs_per == 0)
		echo "true";
	else
		echo "false";
?>