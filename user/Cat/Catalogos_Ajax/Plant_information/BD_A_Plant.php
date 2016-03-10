


<?php
include "../../../../bdConnection.php";
error_reporting(E_ALL^E_NOTICE);
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
		$pho="1";
                if(empty($_POST['oth'])){
                $other="";
                }
                else
                    {
                     $other=$_POST["oth"];
                    }
                 $subir=$_POST["sub"];
                 $lab="1";
                 $id="";
          
                 $ck1="";
                  $ck2="";
                   $ck3="";
                   $ck4="";
                             $ck5="";
                                $ck6="";
                                   $ck7="";
                                      $ck8="";
                                      
            
                   
                 
                 
                 
                 
                 
		$sql="UPDATE plant_info SET Common_Name='$com', Scientific_Name='$sci', Gender='$gen',Species='$spe', Date_of_collection='$date', Collected_by='$col',Site_Alias='$sia', Site_Directions='$sid',Longitud='$lon', Latitud='$Lat', Altitude='$alt',Tissues='$tis', Heigth='$hei', Width='$wid',Physiological_state='$phy', Neighboring_plants='$nei', Id_soil='$soil',id_storage='$storage',Comments='$comm',lab='$consulLab'  where Plant_ID='$cod'";
		
		$cs=mysql_query($sql,$cn);
                
                
                 global $cod;  
                    $sql2="select Plant_ID from plant_info where Common_Name='$com'";  
		$cs2=mysql_query($sql2,$cn);
		while($resul=mysql_fetch_array($cs2)){    
			$var=$resul[0];
			   
                        
                }   
             
             
                                  $data = "$tis"; 
list($ck1, $ck2, $ck3, $ck4, $ck5, $ck6, $ck7,$ck8) = explode(",", $data);

 
 
                        global $var;
                        global $id;
                    
                           if(empty($ck8))
                           {
                               
                $sql1="UPDATE plant_inter set id_interP='$id',chck1='$ck1',chck2='$ck2',chck3='$ck3',chck4='$ck4',chck5='$ck5',chck6='$ck6',chck7='$ck7',level='$other' where id_planta='$var'";
                           }
                           
                                 if(empty($ck8) && empty($ck7))
                           {
                                $sql1="UPDATE plant_inter set id_interP='$id',chck1='$ck1',chck2='$ck2',chck3='$ck3',chck4='$ck4',chck5='$ck5',chck6='$ck6',level='$other'  where id_planta='$var'";                           }
                                   if(empty($ck8) && empty($ck7)  && empty($ck6))
                           {
                                  $sql1="UPDATE plant_inter set id_interP='$id',chck1='$ck1',chck2='$ck2',chck3='$ck3',chck4='$ck4',chck5='$ck5',level='$other'  where id_planta='$var'";
                
                           }
                                     if(empty($ck8) && empty($ck7)  && empty($ck6) && empty($ck5))
                           {
                               $sql1="UPDATE plant_inter set id_interP='$id',chck1='$ck1',chck2='$ck2',chck3='$ck3',chck4='$ck4',level='$other'  where id_planta='$var'";
                
                           }
                                       if(empty($ck8) && empty($ck7)  && empty($ck6) && empty($ck5) && empty($ck4))
                           {
                                $sql1="UPDATE plant_inter set id_interP='$id',chck1='$ck1',chck2='$ck2',chck3='$ck3',level='$other'  where id_planta='$var'";
                           }
                                         if(empty($ck8) && empty($ck7)  && empty($ck6) && empty($ck5) && empty($ck4) && empty($ck3))
                           {
                                 $sql1="UPDATE plant_inter set id_interP='$id',chck1='$ck1',chck2='$ck2',level='$other' where id_planta='$var'";
                
                           }
                                            if(empty($ck8) && empty($ck7)  && empty($ck6) && empty($ck5) && empty($ck4) && empty($ck3) && empty($ck2))
                           {
    $sql1="UPDATE plant_inter set id_interP='$id',chck1='$ck1',level='$other'  where id_planta='$var'"; 
                
                           }
                           else
                               {
                              $sql1="UPDATE plant_inter set id_interP='$id',chck1='$ck1',chck2='$ck2',chck3='$ck3',chck4='$ck4',chck5='$ck5',chck6='$ck6',chck7='$ck7',chck8='$ck8',level='$other'  where id_planta='$var'";
  
                               }
                           
		$cs1=mysql_query($sql1,$cn);  
                
		
?>

