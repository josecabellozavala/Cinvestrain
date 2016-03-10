<?php
//
//
include "../../../../bdConnection.php";
           require'../extras/class/sessions.php';
$objses = new Sessions();
$objses->init();

               $user = isset($_SESSION['user']) ? $_SESSION['user'] : null ;
        
$sql1="SELECT lab.id_lab FROM user,lab WHERE user.Name ='$user' AND user.lab=lab.id_lab";		
		$cs1=mysql_query($sql1,$cn);
                
		while($resul=mysql_fetch_array($cs1)){
			$consul2=$resul[0];
                          
			}

$result = mysql_query("SELECT * FROM host_info where lab='$consul2'",$cn);

// $sql="SELECT * FROM plant_info"; 
//                  
//
//$result=mysql_query($sql);
  echo' <option value="">Select</option> ';
while ($row = mysql_fetch_array($result)){
    
	echo '<option value="'.$row['Name'].'">'.$row['Name'].'</option>';
}

?>