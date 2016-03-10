<?php
	include "../../../../bdConnection.php";
	include "../extras/php/basico.php";
	
	/*verificamos si las variables se envian*/
	if(empty($_POST['usu_per']) || empty($_POST['usu_per']) || empty($_POST['nom_per']) ){
		echo "You must complete requiered data";
		exit;
	}
	
	/*obtenemos el ide mayor*/
	$sql = "select Preservation_Method_ID from preservation_method order by Preservation_Method_ID desc limit 1";
	$per = mysql_query($sql);
	$rs_per = mysql_fetch_assoc($per);
	
	/*insertamos el nuevo registro*/
	$ide_per = $rs_per['Preservation_Method_ID'] + 1;
        
         $laboratory=$_POST['email_per'];
        $sqlk="SELECT id_lab FROM lab WHERE  Name like '%$laboratory%'";		
		$lab = mysql_query($sqlk);
		
                while($campo=mysql_fetch_array($lab)){
				$consulLab=$campo[0];
			}

	$sql = sprintf("INSERT INTO `preservation_method` VALUES (%d, '%s', '%s', '%s', '%s');",
		fn_filtro((int)$ide_per),
		fn_filtro(substr($_POST['usu_per'], 0, 16)),
		fn_filtro(substr($_POST['nom_per'], 0, 60)),
		fn_filtro(substr($_POST['ape_per'], 0, 60)),
		fn_filtro(substr($consulLab, 0, 70))
	);

	if(!mysql_query($sql))
		echo "Error al insertar a la nueva persona:\n$sql";

	exit;
?>