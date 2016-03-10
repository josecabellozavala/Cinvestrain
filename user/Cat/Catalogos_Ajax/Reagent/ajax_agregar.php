<?php
	include "../../../../bdConnection.php";
	include "../extras/php/basico.php";
	
	/*verificamos si las variables se envian*/
	if(empty($_POST['S_Alias']) || empty($_POST['S_name']) ){
		echo "You must complete requiered data";
		exit;
	}
	
	/*obtenemos el ide mayor*/
	$sql = "select Reagent_ID from reagent order by Reagent_ID desc limit 1";
	$per = mysql_query($sql);
	$rs_per = mysql_fetch_assoc($per);
	
	/*insertamos el nuevo registro*/
	$ide_per = $rs_per['Reagent_ID'] + 1;

        
        $laboratory=$_POST['email_per'];
         
         $sqlk="SELECT id_lab FROM lab WHERE  Name like '%$laboratory%'";		
		$lab = mysql_query($sqlk);
		
                while($campo=mysql_fetch_array($lab)){
				$consulLab=$campo[0];
			}
                     
                        
                      
                 
	$alias=$_POST['S_Alias'];
	$name=$_POST['S_name'];
         $type=$_POST['S_type'];
		$fecha=$_POST['S_storageM'];  
               $storage=$_POST['R_Temperatura'];
		$container=$_POST['S_container'];
		$coment=$_POST['S_comment'];
		
		
	$query="insert into reagent(Reagent_ID, Alias, Nombre, Marca,Presentacion,Temperature,Contenedor,Comment,lab)values('$ide_per', '$alias','$name','$type','$fecha',' $storage','$container','$coment',' $consulLab')";
			
                        
                         $cs=mysql_query($query,$cn);

	if(!mysql_query($sql))
		echo "Error al insertar a la nueva persona:\n$sql";

	exit;
?>