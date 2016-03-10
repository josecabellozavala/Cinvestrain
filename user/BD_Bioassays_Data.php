<?php
include("../bdConnection.php");
?>





<?php
                $cod=$_POST["bio"];
		$org=$_POST["orgi"];
		$assa=$_POST["assa"];
		$medi=$_POST["medi"];
                $temp=$_POST["temp"];
		$inh=$_POST["inh"];
                $inm=$_POST["inm"];
                 $anta=$_POST["anta"];
                  $pho=$_POST["pho"];
                 $com=$_POST["com"];
                   $subir=$_POST["sub"];
                   $lab=$_POST["lab"];
                 $user=$_POST["user"];
                    $user1=$_POST["user1"];
                     $user2=$_POST["user2"];
                      $user3=$_POST["user3"];
                       $user4=$_POST["user4"];
                  
		$sql="update bioassays_data set Org_ID='$org',Assay_Type_ID='$assa',Medium_ID='$medi',Temperature='$temp',Inhibition='$inh',Inhibition_measurament='$inm',Antagonist_strain='$anta',Photo_ID='$pho',Comments='$com',subio='$subir',lab='$lab',user='$user'  where Bioassays_Data_ID='$cod' ";
		
		$cs=mysql_query($sql,$cn);
                
                 $cod=$_POST["bio"];
                 $cod=$cod-1;
		$org=$_POST["orgi"];
		$assa=$_POST["assa1"];
		$medi=$_POST["medi1"];
                $temp=$_POST["temp1"];
		$inh=$_POST["inh1"];
                $inm=$_POST["inm1"];
                 $anta=$_POST["anta1"];
                  $pho=$_POST["pho"];
                 $com=$_POST["com1"];
                   $subir=$_POST["sub"];
                   $lab=$_POST["lab"];
                 
                  
		$sql="update bioassays_data set Org_ID='$org',Assay_Type_ID='$assa',Medium_ID='$medi',Temperature='$temp',Inhibition='$inh',Inhibition_measurament='$inm',Antagonist_strain='$anta',Photo_ID='$pho',Comments='$com',subio='$subir',lab='$lab',user='$user1'  where Bioassays_Data_ID='$cod' ";
		
		$cs=mysql_query($sql,$cn);
                
                $cod=$_POST["bio"];
                 $cod=$cod-2;
		$org=$_POST["orgi"];
		$assa=$_POST["assa2"];
		$medi=$_POST["medi2"];
                $temp=$_POST["temp2"];
		$inh=$_POST["inh2"];
                $inm=$_POST["inm2"];
                 $anta=$_POST["anta2"];
                  $pho=$_POST["pho"];
                 $com=$_POST["com2"];
                   $subir=$_POST["sub"];
                   $lab=$_POST["lab"];
                 
                  
		$sql="update bioassays_data set Org_ID='$org',Assay_Type_ID='$assa',Medium_ID='$medi',Temperature='$temp',Inhibition='$inh',Inhibition_measurament='$inm',Antagonist_strain='$anta',Photo_ID='$pho',Comments='$com',subio='$subir',lab='$lab',user='$user2'  where Bioassays_Data_ID='$cod' ";
		
		$cs=mysql_query($sql,$cn);
		
                
                $cod=$_POST["bio"];
                 $cod=$cod-3;
		$org=$_POST["orgi"];
		$assa=$_POST["assa3"];
		$medi=$_POST["medi3"];
                $temp=$_POST["temp3"];
		$inh=$_POST["inh3"];
                $inm=$_POST["inm3"];
                 $anta=$_POST["anta3"];
                  $pho=$_POST["pho"];
                 $com=$_POST["com3"];
                   $subir=$_POST["sub"];
                   $lab=$_POST["lab"];
                 
                  
		$sql="update bioassays_data set Org_ID='$org',Assay_Type_ID='$assa',Medium_ID='$medi',Temperature='$temp',Inhibition='$inh',Inhibition_measurament='$inm',Antagonist_strain='$anta',Photo_ID='$pho',Comments='$com',subio='$subir',lab='$lab',user='$user3'  where Bioassays_Data_ID='$cod' ";
		
		$cs=mysql_query($sql,$cn);
		
                $cod=$_POST["bio"];
                 $cod=$cod-4;
		$org=$_POST["orgi"];
		$assa=$_POST["assa4"];
		$medi=$_POST["medi4"];
                $temp=$_POST["temp4"];
		$inh=$_POST["inh4"];
                $inm=$_POST["inm4"];
                 $anta=$_POST["anta4"];
                  $pho=$_POST["pho"];
                 $com=$_POST["com4"];
                   $subir=$_POST["sub"];
                   $lab=$_POST["lab"];
                 
                  
		$sql="update bioassays_data set Org_ID='$org',Assay_Type_ID='$assa',Medium_ID='$medi',Temperature='$temp',Inhibition='$inh',Inhibition_measurament='$inm',Antagonist_strain='$anta',Photo_ID='$pho',Comments='$com',subio='$subir',lab='$lab',user='$user4'  where Bioassays_Data_ID='$cod' ";
		
		$cs=mysql_query($sql,$cn);
		
        ?>