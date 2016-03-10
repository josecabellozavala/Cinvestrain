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
if (isset($_FILES['archivo'])) {
    $archivo = $_FILES['archivo'];
      $id = $_POST['id'];
        $type= $_POST['type'];
    $extension = pathinfo($archivo['name'], PATHINFO_EXTENSION);
	$time = time();
    $nombre = "{$_POST['nombre_archivo']}.$extension";
     $nombre1=$_POST['nombre_archivo'];
        $lab=$_POST['lab'];
//        if($type="ASSAY")
//        {
//            $ruta="archivos_subidos.$consul2/Assay_type/$nombre";
//        }
//         if($type="ExtraMe")
//        {
//            $ruta="archivos_subidos.$consul2/Extraction_Method/$nombre";
//        }
        $ruta="archivos_subidos.$consul2/$nombre";
 
    
    
    $sql = "select Id_Protocol from protocol order by Id_Protocol desc limit 1";
	$per = mysql_query($sql);
	$rs_per = mysql_fetch_assoc($per);
        
    $ide_per =  $rs_per;
        
        $query="insert into protocol(Id_Protocol,Id_Catalogo, Type, Description,Protocol,lab)values('$ide_per', '$id','$type','$nombre1','$ruta','$lab')";
			
                        
                         $cs=mysql_query($query,$cn);
    if (move_uploaded_file($archivo['tmp_name'], "archivos_subidos.$consul2/$nombre")) {
        echo 1;
       
        
    } else {
        echo 0;
    }
}
?>
