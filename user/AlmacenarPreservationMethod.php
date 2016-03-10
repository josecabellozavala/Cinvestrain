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
                
                $query="insert into preservation_of_strains(Org_ID, Preservation_Method_ID, Date_of_preservation, User_ID,Number_of_vials,Volume_of_vials,Storage_ID,Comments,subio,lab)values('$org', '$me','$dat','$use','$num',' $volu','$sto','$cum',' $subir','$lab')";
			
                        
                         $cs1=mysql_query($query,$cn);
		echo "<script> alert('Se insertó correctamente');</script>";
?>

