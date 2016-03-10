


<?php
include "../../../../bdConnection.php";
error_reporting(E_ALL^E_NOTICE);

               $cod=$_POST["plan"];
		$org=$_POST["org"];
		$com=$_POST["com"];
		$sci=$_POST["sci"];
                $gen=$_POST["gen"];
		$spe=$_POST["spe"];
                $date=$_POST["date"];
                 $col=$_POST["col"];
                $sia=$_POST["sia"];
		$sid=$_POST["sid"];
                 $SiteA=$_POST["Site_A"];
                $Storage=$_POST["Storage_id"];
                 $subir=$_POST["sub"];
                   $lab=$_POST["labor"];
                $pr=$_POST["pro"];
                  
                      $sqlk="SELECT id_lab FROM lab WHERE  Name like '%$lab%'";		
		$lab = mysql_query($sqlk);
		
                while($campo=mysql_fetch_array($lab)){
				$consulLab=$campo[0];
			}
		$sql="UPDATE host_info SET Name='$org',Date_of_collection='$com',Collected_by='$sci',Site_alias='$SiteA',id_storage='$Storage',Latitude='$gen',Longitude='$spe',Altitude='$date',Tissues_collected='$col',Physiological_state='$sia',Additional_comments='$sid',subio='$subir',lab='$consulLab' where ID_Host='$cod'";
		
		$cs=mysql_query($sql,$cn); 
                
                
                
                $sql3="select Name  from host_info where Name='$org'";  
		$cs3=mysql_query($sql3,$cn);
		while($resul=mysql_fetch_array($cs3)){     
			$var=$resul[0];
			   
                        
                }   
                global $var;
                $sql2="UPDATE  host_inter SET id_interH='$cod',type='$col',	level='$pr' where id_host='$var'"; 
		
                $cs2=mysql_query($sql2,$cn); 
?>

 