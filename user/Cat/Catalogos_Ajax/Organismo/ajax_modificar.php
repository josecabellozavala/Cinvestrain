<?php
	include "../../../../bdConnection.php";
	include "../extras/php/basico.php";
	
	
	 $laboratory=$_POST['email_per'];
          $sqlk="SELECT id_lab FROM lab WHERE  Name like '%$laboratory%'";		
		$lab = mysql_query($sqlk);
		
                while($campo=mysql_fetch_array($lab)){
				$consulLab=$campo[0];
			}
	/*modificar el registro*/

	$sql = sprintf("UPDATE organism_information SET   Alias='%s', Isolated_by='%s', Date_of_Isolation='%s',id_storage=%d,Origin='%s', item='%s', level='%s', Additional_Comments='%s',lab='%s' where Org_ID=%d;",
		fn_filtro(substr($_POST['usu_per'], 0, 60)),
		fn_filtro(substr($_POST['nom_per'], 0, 60)),
                fn_filtro(substr($_POST['comp'], 0, 60)),
                fn_filtro((int)$_POST['storage']),
		fn_filtro(substr($_POST['ape_per'], 0, 70)),
		fn_filtro(substr($_POST['proveedor'], 0, 60)),
		fn_filtro(substr($_POST['producto'], 0, 70)),
                fn_filtro(substr($_POST['ster'], 0, 70)),
                fn_filtro(substr($consulLab, 0, 70)),
		fn_filtro((int)$_POST['ide_per'])
	);
	if(!mysql_query($sql))
		echo "Error al insertar a la nueva persona:\n$sql";
	exit;
?>