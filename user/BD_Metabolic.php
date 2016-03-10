<?php
include("../bdConnection.php");
?>

<?PHP
                $cod=$_POST["metid"];
		$org=$_POST["orgid"];
		$use=$_POST["use"];
		$med=$_POST["med"];
                $tem=$_POST["tem"];
		$agit=$_POST["agit"];
                $time=$_POST["time"];
                 $phi=$_POST["phi"];
                $phf=$_POST["phf"];
		$odi=$_POST["odi"];
		$odf=$_POST["odf"];
		
                $com=$_POST["com"];
                $subir=$_POST["sub"]; 
                 $lab=$_POST["lab"]; 
                  
		$sql="update metabolic_data set Org_ID='$org',User_ID='$use',Medium_ID='$med',Temperature='$tem',Agitation='$agit',Time='$time',pH_initial='$phi',pH_final='$phf',OD600_initial='$odi',OD600_final='$odf',Comments='$com',subio='$subir',lab='$lab'  where metabolic_data_ID='$cod' ";
		
		$cs=mysql_query($sql,$cn);
		
?>

