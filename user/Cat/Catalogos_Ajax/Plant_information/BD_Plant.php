


<?php
error_reporting(E_ALL^E_NOTICE);
include "../../../../bdConnection.php";
?>
<?PHP
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
		$lon=$_POST["lon"];
		$Lat=$_POST["Lat"];
                $alt=$_POST["alt"];
		$tis=$_POST["tis"];
                $hei=$_POST["hei"];
                 $wid=$_POST["wid"];
                 $phy=$_POST["phy"];
		$nei=$_POST["nei"];
                $soil=$_POST["soil"];
                 
		$storage=$_POST["storage"];
		$comm=$_POST["comm"];
		$lab=$_POST["pho"];
                   $sqlk="SELECT id_lab FROM lab WHERE  Name like '%$lab%'";		
		$lab = mysql_query($sqlk);
		
                while($campo=mysql_fetch_array($lab)){
				$consulLab=$campo[0];
			}
                if(empty($_POST['oth'])){
                $other="";
                }
                else
                    {
                     $other=$_POST["oth"];
                    }
                 $subir=$_POST["sub"];
               $pho="1";
                 $id="";
          
                 $ck1="";
                  $ck2="";
                   $ck3="";
                   $ck4="";
                             $ck5="";
                                $ck6="";
                                   $ck7="";
                                      $ck8="";
                                      
            
                   
                 
                 
                 
                 
                 
		$sql="insert into plant_info values ('$cod','$org','$com',' $sci','$gen','$spe','$date','$col','$sia','$sid','$lon','$Lat','$alt','$tis','$hei',' $wid','$phy','$nei','$soil','$storage','$comm','$pho','$subir','$consulLab')";
		
		$cs=mysql_query($sql,$cn);
                
                
                 global $cod;  
                    $sql2="select Common_Name from plant_info where Common_Name='$com'";  
		$cs2=mysql_query($sql2,$cn);
		while($resul=mysql_fetch_array($cs2)){    
			$var=$resul[0];
			   
                        
                }   
                global $tis;
               $ck1="";
               $ck2="";
               $ck3="";
               $ck4="";
               $ck5="";
               $ck6="";
               $ck7="";
               $ck8="";
               
                    global $ck1,$ck2,$ck3,$ck4,$ck5,$ck6,$ck7,$ck8;
             
                                  $data = "$tis"; 
list($ck1, $ck2, $ck3, $ck4, $ck5, $ck6, $ck7,$ck8) = explode(",", $data);

 
 
                        global $var;
                        global $id;
                    
                $sql1="insert into plant_inter values ('$id','$var','$ck1','$ck2',' $ck3','$ck4','$ck5','$ck6','$ck7','$ck8','$other')";
		 
		$cs1=mysql_query($sql1,$cn);  
                
		
?>

