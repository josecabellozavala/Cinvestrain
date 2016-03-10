<?php
	include "../../../../bdConnection.php";
	include "../extras/php/basico.php";
	
	/*verificamos si las variables se envian*/
	if(empty($_POST['usu_per']) || empty($_POST['nom_per'])){
		echo "You must complete requiered data";
		exit;
	}
        $numero=$_POST['usu_per'];
if($numero<1 || $numero>=15)
{
echo "The range of ph is 1-14";

  exit;

}
 $laboratory=$_POST['email_per'];
          $sqlk="SELECT id_lab FROM lab WHERE  Name like '%$laboratory%'";		
		$lab = mysql_query($sqlk);
		
                while($campo=mysql_fetch_array($lab)){
				$consulLab=$campo[0];
			}
	
	/*modificar el registro*/

	$sql = sprintf("UPDATE soil_type SET   Alias='%s', PH='%s', Organic_matter='%s',lab='%s' where Soil_type_ID=%d;",
		fn_filtro(substr($_POST['nom_per'], 0, 60)),
                fn_filtro(substr($_POST['usu_per'], 0, 60)),
		fn_filtro(substr($_POST['ape_per'], 0, 70)),
                fn_filtro(substr($consulLab, 0, 60)),
                fn_filtro((int)$_POST['ide_per'])
	);
	if(!mysql_query($sql))
		echo "Error to insert:\n$sql";
	exit;
?>