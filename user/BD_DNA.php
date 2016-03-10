<?php
include("../bdConnection.php");
?>




<?PHP
$cod=$_POST["dna"];
		$org=$_POST["org"];
		$ext=$_POST["ext"];
		$dat=$_POST["date"];
                $con=$_POST["con"];
		$vol=$_POST["vol"];
                $use=$_POST["use"];
                 $sto=$_POST["sto"];
                 $subir=$_POST["sub"];
              $lab=$_POST["lab"];
                 
                 
		$sql="update dna set Org_ID='$org',Extraction_Method_ID='$ext',Date_of_extraction='$dat',Concentration='$con',Volume='$vol',User_ID='$use',Storage_ID='$sto',subio='$subir',lab='$lab' where DNA_ID='$cod' ";
		
		$cs=mysql_query($sql,$cn);
                
                $cod=$_POST["dna"];
                $cod=$cod-1;
		$org=$_POST["org"];
		$ext=$_POST["ext1"];
		$dat=$_POST["date1"];
                $con=$_POST["con1"];
		$vol=$_POST["vol1"];
                $use=$_POST["use1"];
                 $sto=$_POST["sto1"];
                 $subir=$_POST["sub"];
              $lab=$_POST["lab"];
                 
                 
		$sql="update dna set Org_ID='$org',Extraction_Method_ID='$ext',Date_of_extraction='$dat',Concentration='$con',Volume='$vol',User_ID='$use',Storage_ID='$sto',subio='$subir',lab='$lab' where DNA_ID='$cod' ";
		
		$cs=mysql_query($sql,$cn);
                
                 $cod=$_POST["dna"];
                $cod=$cod-2;
		$org=$_POST["org"];
		$ext=$_POST["ext2"];
		$dat=$_POST["date2"];
                $con=$_POST["con2"];
		$vol=$_POST["vol2"];
                $use=$_POST["use2"];
                 $sto=$_POST["sto2"];
                 $subir=$_POST["sub"];
              $lab=$_POST["lab"];
                 
                 
		$sql="update dna set Org_ID='$org',Extraction_Method_ID='$ext',Date_of_extraction='$dat',Concentration='$con',Volume='$vol',User_ID='$use',Storage_ID='$sto',subio='$subir',lab='$lab' where DNA_ID='$cod' ";
		
		$cs=mysql_query($sql,$cn);
                 $cod=$_POST["dna"];
                $cod=$cod-3;
		$org=$_POST["org"];
		$ext=$_POST["ext3"];
		$dat=$_POST["date3"];
                $con=$_POST["con3"];
		$vol=$_POST["vol3"];
                $use=$_POST["use3"];
                 $sto=$_POST["sto3"];
                 $subir=$_POST["sub"];
              $lab=$_POST["lab"];
                 
                 
		$sql="update dna set Org_ID='$org',Extraction_Method_ID='$ext',Date_of_extraction='$dat',Concentration='$con',Volume='$vol',User_ID='$use',Storage_ID='$sto',subio='$subir',lab='$lab' where DNA_ID='$cod' ";
		
		$cs=mysql_query($sql,$cn);
                 $cod=$_POST["dna"];
                $cod=$cod-4;
		$org=$_POST["org"];
		$ext=$_POST["ext4"];
		$dat=$_POST["date4"];
                $con=$_POST["con4"];
		$vol=$_POST["vol4"];
                $use=$_POST["use4"];
                 $sto=$_POST["sto4"];
                 $subir=$_POST["sub"];
              $lab=$_POST["lab"];
                 
                 
		$sql="update dna set Org_ID='$org',Extraction_Method_ID='$ext',Date_of_extraction='$dat',Concentration='$con',Volume='$vol',User_ID='$use',Storage_ID='$sto',subio='$subir',lab='$lab' where DNA_ID='$cod' ";
		
		$cs=mysql_query($sql,$cn);
		echo "<script> alert('Se insertó correctamente');</script>";
?>