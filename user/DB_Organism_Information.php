<?php
include("../bdConnection.php");
?>

 <?php 
                $cod=$_POST["org"];
		$alias=$_POST["alias"]; 
		$inso=$_POST["insolated"];
		$date=$_POST["dateofinsol"];
                $stor=$_POST["storage"];
                $origen=$_POST["ori"];
                 $item=$_POST["proveedor"];
                  $level=$_POST["producto"];
		$comen=$_POST["com"];
                $subir=$_POST["sub"]; 
                $lab=$_POST["lab"];
                
		$sql="update organism_information set Alias='$alias',Isolated_by='$inso',Date_of_Isolation='$date',id_storage='$stor',Origin=' $origen',item=' $item',level='$level',Additional_Comments='$comen',subio='$subir',lab='$lab'  where Org_ID='$cod' ";
		
		$cs=mysql_query($sql,$cn);
		
        ?>