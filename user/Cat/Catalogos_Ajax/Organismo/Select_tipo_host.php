<?php
$idpro = $_GET['par'];

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

$result = mysql_query("SELECT Tissues_collected FROM host_info where Name='$idpro' and lab='$consul2'",$cn);

while ($row = mysql_fetch_array($result)){
    
	
        if($row['Tissues_collected']=='Other')
        { 
            
            $result1 = mysql_query("SELECT level FROM host_inter where id_host='$idpro'",$con);
            while ($row = mysql_fetch_array($result1)){
               
            echo '<option value="'.$row['level'].'">'.$row['level'].'</option>';
            }
        }
        else{
            
            echo '<option value="'.$row['Tissues_collected'].'">'.$row['Tissues_collected'].'</option>';
        
           
        }
}