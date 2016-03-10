<?php
include("../bdConnection.php");
?>


<?php
$cod=$_POST["gro"];
		$org=$_POST["org"];
		$medi=$_POST["medi"];
		$tempe=$_POST["tempera"];
                $tiempo=$_POST["tiempo"];
		$medium=$_POST["medium"];
                $temp=$_POST["temp_liq"];
                 $agita=$_POST["agitation"];
                 $tim=$_POST["tim_liq"];
                $ph_i=$_POST["ph_i"];
                $ph_f=$_POST["ph_f"];
                 $od_i=$_POST["od_i"];
                  $od_f=$_POST["od_f"];
                   $p_extra=$_POST["p_extra"];
                    $kinetics=$_POST["kinetics"];
                     $subir=$_POST["sub"];
                   $lab=$_POST["lab"];
                    $user=$_POST["use"];
                  
                 
		$sql="update growth_characteristics set Org_ID='$org',Medium_solid='$medi' ,Temperature_solid='$tempe',Time_solid='$tiempo',Medium_liquid='$medium',Temperature_liquid='$temp',Agitation_time='$agita',Time_liquid='$tim',pH_initial='$ph_i',pH_final='$ph_f',OD600_initial='$od_i',OD600_final='$od_f',Extra_parameters='$p_extra',Kinetics=' $kinetics',subio='$subir',lab='$lab',user='$user'  where Growth_characteristics_ID='$cod' ";
		
		$cs=mysql_query($sql,$cn);
                
                
                $cod=$_POST["gro"];
                $cod=$cod-1;
		$org=$_POST["org"];
		$medi=$_POST["medi1"];
		$tempe=$_POST["tempera1"];
                $tiempo=$_POST["tiempo1"];
		$medium=$_POST["medium1"];
                $temp=$_POST["temp_liq1"];
                 $agita=$_POST["agitation1"];
                 $tim=$_POST["tim_liq1"];
                $ph_i=$_POST["ph_i1"];
                $ph_f=$_POST["ph_f1"];
                 $od_i=$_POST["od_i1"];
                  $od_f=$_POST["od_f1"];
                   $p_extra=$_POST["p_extra1"];
                    $kinetics=$_POST["kinetics"];
                     $subir=$_POST["sub"];
                   $lab=$_POST["lab"];
                   $user1=$_POST["use1"];
                     
		$sql="update growth_characteristics set Org_ID='$org',Medium_solid='$medi' ,Temperature_solid='$tempe',Time_solid='$tiempo',Medium_liquid='$medium',Temperature_liquid='$temp',Agitation_time='$agita',Time_liquid='$tim',pH_initial='$ph_i',pH_final='$ph_f',OD600_initial='$od_i',OD600_final='$od_f',Extra_parameters='$p_extra',Kinetics=' $kinetics',subio='$subir',lab='$lab',user='$user1'  where Growth_characteristics_ID='$cod' ";
		
		$cs=mysql_query($sql,$cn);
                
                $cod=$_POST["gro"];
                $cod=$cod-2;
		$org=$_POST["org"];
		$medi=$_POST["medi2"];
		$tempe=$_POST["tempera2"];
                $tiempo=$_POST["tiempo2"];
		$medium=$_POST["medium2"];
                $temp=$_POST["temp_liq2"];
                 $agita=$_POST["agitation2"];
                 $tim=$_POST["tim_liq2"];
                $ph_i=$_POST["ph_i2"];
                $ph_f=$_POST["ph_f2"];
                 $od_i=$_POST["od_i2"];
                  $od_f=$_POST["od_f2"];
                   $p_extra=$_POST["p_extra2"];
                    $kinetics=$_POST["kinetics"];
                     $subir=$_POST["sub"];
                   $lab=$_POST["lab"];
                 $user2=$_POST["use2"];
                     
		$sql="update growth_characteristics set Org_ID='$org',Medium_solid='$medi' ,Temperature_solid='$tempe',Time_solid='$tiempo',Medium_liquid='$medium',Temperature_liquid='$temp',Agitation_time='$agita',Time_liquid='$tim',pH_initial='$ph_i',pH_final='$ph_f',OD600_initial='$od_i',OD600_final='$od_f',Extra_parameters='$p_extra',Kinetics=' $kinetics',subio='$subir',lab='$lab',user='$user2'  where Growth_characteristics_ID='$cod' ";
		
		$cs=mysql_query($sql,$cn);
                $cod=$_POST["gro"];
                $cod=$cod-3;
		$org=$_POST["org"];
		$medi=$_POST["medi3"];
		$tempe=$_POST["tempera3"];
                $tiempo=$_POST["tiempo3"];
		$medium=$_POST["medium3"];
                $temp=$_POST["temp_liq3"];
                 $agita=$_POST["agitation3"];
                 $tim=$_POST["tim_liq3"];
                $ph_i=$_POST["ph_i3"];
                $ph_f=$_POST["ph_f3"];
                 $od_i=$_POST["od_i3"];
                  $od_f=$_POST["od_f3"];
                   $p_extra=$_POST["p_extra3"];
                    $kinetics=$_POST["kinetics"];
                     $subir=$_POST["sub"];
                   $lab=$_POST["lab"];
                  $user3=$_POST["use3"];
                      
		$sql="update growth_characteristics set Org_ID='$org',Medium_solid='$medi' ,Temperature_solid='$tempe',Time_solid='$tiempo',Medium_liquid='$medium',Temperature_liquid='$temp',Agitation_time='$agita',Time_liquid='$tim',pH_initial='$ph_i',pH_final='$ph_f',OD600_initial='$od_i',OD600_final='$od_f',Extra_parameters='$p_extra',Kinetics=' $kinetics',subio='$subir',lab='$lab',user='$user3'  where Growth_characteristics_ID='$cod' ";
		
		$cs=mysql_query($sql,$cn);
                $cod=$_POST["gro"];
                $cod=$cod-4;
		$org=$_POST["org"];
		$medi=$_POST["medi4"];
		$tempe=$_POST["tempera4"];
                $tiempo=$_POST["tiempo4"];
		$medium=$_POST["medium4"];
                $temp=$_POST["temp_liq4"];
                 $agita=$_POST["agitation4"];
                 $tim=$_POST["tim_liq4"];
                $ph_i=$_POST["ph_i4"];
                $ph_f=$_POST["ph_f4"];
                 $od_i=$_POST["od_i4"];
                  $od_f=$_POST["od_f4"];
                   $p_extra=$_POST["p_extra4"];
                    $kinetics=$_POST["kinetics"];
                     $subir=$_POST["sub"];
                   $lab=$_POST["lab"];
                  $user4=$_POST["use4"];
		$sql="update growth_characteristics set Org_ID='$org',Medium_solid='$medi' ,Temperature_solid='$tempe',Time_solid='$tiempo',Medium_liquid='$medium',Temperature_liquid='$temp',Agitation_time='$agita',Time_liquid='$tim',pH_initial='$ph_i',pH_final='$ph_f',OD600_initial='$od_i',OD600_final='$od_f',Extra_parameters='$p_extra',Kinetics=' $kinetics',subio='$subir',lab='$lab',user='$user4'  where Growth_characteristics_ID='$cod' ";
		
		$cs=mysql_query($sql,$cn);
                
		echo "<script> alert('Se insertó correctamente');</script>";
        ?>