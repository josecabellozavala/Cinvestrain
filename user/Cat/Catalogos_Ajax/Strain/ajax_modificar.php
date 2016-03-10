<?php
	include "../../../../bdConnection.php";
	include "../extras/php/basico.php";
	
	/*verificamos si las variables se envian*/
	if(empty($_POST['S_Alias']) || empty($_POST['S_name'])){
		echo "You must complete requiered data";
		exit;
	}
	
	/*modificar el registro*/

        
        $laboratory=$_POST['email_per'];
          $sqlk="SELECT id_lab FROM lab WHERE  Name like '%$laboratory%'";		
		$lab = mysql_query($sqlk);
		
                while($campo=mysql_fetch_array($lab)){
				$consulLab=$campo[0];
			}
                        
	$sql = sprintf("UPDATE Strain SET   Alias='%s', Nombre='%s', Tipo_Bacteria='%s',Medio_Almacenamiento='%s',storage='%s',contenedor='%s',Comment='%s',lab='%s' where Strain_ID=%d;",
		fn_filtro(substr($_POST['S_Alias'], 0, 60)),
		fn_filtro(substr($_POST['S_name'], 0, 60)),
		fn_filtro(substr($_POST['S_type'], 0, 60)),
		fn_filtro(substr($_POST['S_storageM'], 0, 60)),
                fn_filtro(substr($_POST['storage'], 0, 60)),
		fn_filtro(substr($_POST['S_container'], 0, 60)),
                fn_filtro(substr($_POST['S_comment'], 0, 60)),
                $consulLab,
		fn_filtro((int)$_POST['ide_per'])
	);
	if(!mysql_query($sql))
		echo "Error al insertar a la nueva persona:\n$sql";
	exit;
?>