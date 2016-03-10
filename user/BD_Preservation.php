

<?php
include("../bdConnection.php");
?>



<?PHP
              
               $cod=$_POST["pre"];
		$org=$_POST["org"];
                $me=$_POST["idM"];
		$dat=$_POST["date"];
		$use=$_POST["use"];
                $num=$_POST["num"];
		$volu=$_POST["volu"];
                $sto=$_POST["sto"];
                 $cum=$_POST["com"]; 
                    $subir=$_POST["sub"];
                     $lab=$_POST["lab"];
                 
                 
		$sql="update preservation_of_strains set Org_ID='$org',Preservation_Method_ID='$me',Date_of_preservation='$dat',User_ID='$use',Number_of_vials='$num',Volume_of_vials='$volu',Storage_ID='$sto',Comments='$cum',subio='$subir',lab='$lab'  where Preservation_of_Strains_ID='$cod'";
		
		$cs=mysql_query($sql,$cn);
                
                    $cod=$_POST["pre"];
                    $cod=$cod-1;
		$org=$_POST["org"];
                $me=$_POST["idM1"];
		$dat=$_POST["date1"];
		$use=$_POST["use1"];
                $num=$_POST["num1"];
		$volu=$_POST["volu1"];
                $sto=$_POST["sto1"];
                 $cum=$_POST["com1"]; 
                    $subir=$_POST["sub"];
                     $lab=$_POST["lab"];
                 
                 
		$sql="update preservation_of_strains set Org_ID='$org',Preservation_Method_ID='$me',Date_of_preservation='$dat',User_ID='$use',Number_of_vials='$num',Volume_of_vials='$volu',Storage_ID='$sto',Comments='$cum',subio='$subir',lab='$lab'  where Preservation_of_Strains_ID='$cod'";
		
		$cs=mysql_query($sql,$cn);
                
                $cod=$_POST["pre"];
                    $cod=$cod-2;
		$org=$_POST["org"];
                $me=$_POST["idM2"];
		$dat=$_POST["date2"];
		$use=$_POST["use2"];
                $num=$_POST["num2"];
		$volu=$_POST["volu2"];
                $sto=$_POST["sto2"];
                 $cum=$_POST["com2"]; 
                    $subir=$_POST["sub"];
                     $lab=$_POST["lab"];
                 
                 
		$sql="update preservation_of_strains set Org_ID='$org',Preservation_Method_ID='$me',Date_of_preservation='$dat',User_ID='$use',Number_of_vials='$num',Volume_of_vials='$volu',Storage_ID='$sto',Comments='$cum',subio='$subir',lab='$lab'  where Preservation_of_Strains_ID='$cod'";
		
		$cs=mysql_query($sql,$cn);
                $cod=$_POST["pre"];
                    $cod=$cod-3;
		$org=$_POST["org"];
                $me=$_POST["idM3"];
		$dat=$_POST["date3"];
		$use=$_POST["use3"];
                $num=$_POST["num3"];
		$volu=$_POST["volu3"];
                $sto=$_POST["sto3"];
                 $cum=$_POST["com3"]; 
                    $subir=$_POST["sub"];
                     $lab=$_POST["lab"];
                 
                 
		$sql="update preservation_of_strains set Org_ID='$org',Preservation_Method_ID='$me',Date_of_preservation='$dat',User_ID='$use',Number_of_vials='$num',Volume_of_vials='$volu',Storage_ID='$sto',Comments='$cum',subio='$subir',lab='$lab'  where Preservation_of_Strains_ID='$cod'";
		
		$cs=mysql_query($sql,$cn);
                $cod=$_POST["pre"];
                    $cod=$cod-4;
		$org=$_POST["org"];
                $me=$_POST["idM4"];
		$dat=$_POST["date4"];
		$use=$_POST["use4"];
                $num=$_POST["num4"];
		$volu=$_POST["volu4"];
                $sto=$_POST["sto4"];
                 $cum=$_POST["com4"]; 
                    $subir=$_POST["sub"];
                     $lab=$_POST["lab"];
                 
                 
		$sql="update preservation_of_strains set Org_ID='$org',Preservation_Method_ID='$me',Date_of_preservation='$dat',User_ID='$use',Number_of_vials='$num',Volume_of_vials='$volu',Storage_ID='$sto',Comments='$cum',subio='$subir',lab='$lab'  where Preservation_of_Strains_ID='$cod'";
		
		$cs=mysql_query($sql,$cn);
		echo "<script> alert('Se insertó correctamente');</script>";
?>

