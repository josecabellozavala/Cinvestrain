<?php
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
             

$sql="SELECT Id_Protocol from protocol where lab='$consul2' ";		
		$cs=mysql_query($sql,$cn);
                
		while($resul=mysql_fetch_array($cs)){
			$consul1=$resul[0];
			
			
			}
         
                        
                        
 $directorio_escaneado = scandir('archivos_subidos'.$consul2);
$archivos = array();

foreach ($directorio_escaneado as $item) {
    if ($item != '.' and $item != '..') {
        $archivos[] = $item;
    }
}
echo json_encode($archivos);
?>
