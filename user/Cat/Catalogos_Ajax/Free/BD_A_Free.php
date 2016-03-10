


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
            
                 
		
		$sql="UPDATE free_living SET Name='$org',Date_of_collection='$com',Collected_by='$sci',Site_alias='$SiteA',id_storage='$Storage',Latitude='$gen',Longitude='$spe',Altitude='$date',Type_of_sample='$col',Characteristics_of_sample='$sia',Additional_comments='$sid',subio='$subir',lab='$consulLab' where ID_Sample='$cod'";
		$cs=mysql_query($sql,$cn);
		
?>

