<?php
	include "../../../../bdConnection.php";
	include "../extras/php/basico.php";
	
	/*verificamos si las variables se envian*/
	if(empty($_POST['usu_per']) || empty($_POST['nom_per'])){
		echo "You must complete requiered data";
		exit;
	}
	 $laboratory=$_POST['email_per'];
          $sqlk="SELECT id_lab FROM lab WHERE  Name like '%$laboratory%'";		
		$lab = mysql_query($sqlk);
		
                while($campo=mysql_fetch_array($lab)){
				$consulLab=$campo[0];
			}
	/*modificar el registro*/
        if($_POST['comp']!='Smooth')
    {
    $le=$_POST['ster'];   
 
    }
 else {
      
      $le="";
}

	$sql = sprintf("UPDATE surface_morphology SET   Name='%s' ,Form='%s', Elevation='%s',Margin='%s', Appereance='%s', Level='%s', Pigmentation='%s', Color='%s',lab='%s' where Surface_Morphology_ID=%d;",
		fn_filtro(substr($_POST['name'], 0, 60)),
                fn_filtro(substr($_POST['usu_per'], 0, 60)),
		fn_filtro(substr($_POST['nom_per'], 0, 60)),
		fn_filtro(substr($_POST['ape_per'], 0, 70)),
                fn_filtro(substr($_POST['comp'], 0, 60)),
		$le,
		fn_filtro(substr($_POST['ph'], 0, 70)),
                fn_filtro(substr($_POST['colo'], 0, 70)),
                fn_filtro(substr($consulLab, 0, 70)),
		fn_filtro((int)$_POST['ide_per'])
	);
	if(!mysql_query($sql))
		echo "Error al insertar a la nueva persona:\n$sql";
	exit;
?>