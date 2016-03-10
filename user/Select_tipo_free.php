<?php
$idproveedor = $_GET['pr'];

include("../bdConnection.php");
$user = isset($_SESSION['user']) ? $_SESSION['user'] : null ;
        
$sql1="SELECT lab.id_lab FROM user,lab WHERE user.Name ='$user' AND user.lab=lab.id_lab";		
		$cs1=mysql_query($sql1,$cn);
                
		while($resul=mysql_fetch_array($cs1)){
			$consul2=$resul[0];
                          
			}

$result = mysql_query("SELECT Type_of_sample FROM free_living where Name='$idproveedor' and lab='$consul2'",$cn);

while ($row = mysql_fetch_array($result)){
	echo '<option value="'.$row['Type_of_sample'].'">'.$row['Type_of_sample'].'</option>';
}  