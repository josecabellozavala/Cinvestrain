<?php
include("bdConnection.php");

?>

<?php



                $cod=$_POST['id'];
		$name=$_POST['nom'];
		$last=$_POST['ape'];
		$pass=$_POST['cont'];
                $tel=$_POST['tele'];
 $corre=$_POST['correo'];
		$role=$_POST['role'];
                $Sta=$_POST['stat'];

               $lab=$_POST['labos'];
             
		$sql="insert into user (Name,Last_Name,Password ,Telephone, email, Role, Status,lab) values ('$name','$last','$pass',' $tel','$corre','$role','$Sta','$lab')";
		 
		$cs=mysql_query($sql,$cn);
               
		
        ?>