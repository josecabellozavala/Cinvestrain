


<?php
include "../../../../bdConnection.php";
?>
<?php
               $cod=$_POST["plan"];
		$org=$_POST["org"];
		$com=$_POST["com"];
		$sci=$_POST["sci"];
                   $SiteA=$_POST["Site_A"];
                $Storage=$_POST["Storage_id"];
                $gen=$_POST["gen"];
		$spe=$_POST["spe"];
                $date=$_POST["date"];
                 $col=$_POST["col"];
                $sia=$_POST["sia"];
		$sid=$_POST["sid"];
                 $subir=$_POST["sub"];
                 $lab=$_POST["lab"];
                 
                 
         
         $sqlk="SELECT id_lab FROM lab WHERE  Name like '%$lab%'";		
		$lab = mysql_query($sqlk);
		
                while($campo=mysql_fetch_array($lab)){
				$consulLab=$campo[0];
			}
            
                 
                 
		$sql="insert into free_living values ('$cod','$org','$com',' $sci','$SiteA','$Storage','$gen','$spe','$date','$col','$sia','$sid','$subir','$consulLab')";
		
		$cs=mysql_query($sql,$cn);
		
?>

