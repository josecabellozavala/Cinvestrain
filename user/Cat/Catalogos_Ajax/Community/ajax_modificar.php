<?php
	include "../../../../bdConnection.php";
	include "../extras/php/basico.php";
	
	/*verificamos si las variables se envian*/
	if(empty($_POST['usu_per']) || empty($_POST['nom_per'])){
		echo "You must complete requiered data";
		exit;
	}
	
	/*modificar el registro*/
if(empty($_POST['ape_per'])){
    $level="";
}
else
    {
    $level=$_POST['ape_per'];
    }
        
        $laboratory=$_POST['email_per'];
          $sqlk="SELECT id_lab FROM lab WHERE  Name like '%$laboratory%'";		
		$lab = mysql_query($sqlk);
		
                while($campo=mysql_fetch_array($lab)){
				$consulLab=$campo[0];
			}
                        
	$sql = sprintf("UPDATE community_type SET   Name='%s', Type='%s', Level='%s',lab='%s' where Community_type_ID=%d;",
		fn_filtro(substr($_POST['usu_per'], 0, 60)),
		fn_filtro(substr($_POST['nom_per'], 0, 60)),
		$level,
                $consulLab,
		fn_filtro((int)$_POST['ide_per'])
	);
	if(!mysql_query($sql))
		echo "Error al insertar a la nueva persona:\n$sql";
	exit;
?>