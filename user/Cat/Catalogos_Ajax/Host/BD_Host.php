


<?php
include "../../../../bdConnection.php";
error_reporting(E_ALL^E_NOTICE);

               $cod=$_POST["plan"];
		$org=$_POST["org"];
		$com=$_POST["com"];
                $SiteA=$_POST["Site_A"];
                $Storage=$_POST["Storage_id"];
		$sci=$_POST["sci"];
                $gen=$_POST["gen"];
		$spe=$_POST["spe"];
                $date=$_POST["date"];
                 $col=$_POST["col"];
                $sia=$_POST["sia"];
		$sid=$_POST["sid"];
                 $subir=$_POST["sub"];
                   $lab=$_POST["labor"];
                $pr=$_POST["pro"];
                  
                     $sqlk="SELECT id_lab FROM lab WHERE  Name like '%$lab%'";		
		$lab = mysql_query($sqlk);
		
                while($campo=mysql_fetch_array($lab)){
				$consulLab=$campo[0];
			}
                        
		$sql="insert into host_info values ('$cod','$org','$com',' $sci','$SiteA','$Storage','$gen','$spe','$date','$col','$sia','$sid','$subir','$consulLab')";
		
		$cs=mysql_query($sql,$cn); 
                
                
                
                $sql3="select Name  from host_info where Name='$org'";  
		$cs3=mysql_query($sql3,$cn);
		while($resul=mysql_fetch_array($cs3)){     
			$var=$resul[0];
			   
                        
                }   
                global $var;
                $sql2="insert into host_inter values ('$cod','$var','$col',' $pr')"; 
		
                $cs2=mysql_query($sql2,$cn); 
?>

 