<?php
include "../../../../bdConnection.php";
if (isset($_POST['archivo'])) {
    
    $archivo = $_POST['archivo'];
    if (file_exists("archivos_subidos/$archivo")) {
        unlink("archivos_subidos/$archivo");
        $id=$_POST['id'];
         
    $sql = "delete from protocol where id_Protocol='$id'";
	$per = mysql_query($sql);
	$rs_per = mysql_fetch_assoc($per);
        
        echo 1;
    } else {
        echo 0;
    }
    
}


?>
