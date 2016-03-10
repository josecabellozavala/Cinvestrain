
<?php

include("bdConnection.php");

?>




<?php
if ($_FILES["imagen"]["error"] > 0){
    
	echo  "Occurred an error,you must insert an image";
     
} else {
	//ahora vamos a verificar si el tipo de archivo es un tipo de imagen permitido.
	//y que el tamano del archivo no exceda los 100kb
	$permitidos = array("image/jpg", "image/jpeg", "image/gif", "image/png");
	$limite_kb = 100;

	if (in_array($_FILES['imagen']['type'], $permitidos) && $_FILES['imagen']['size'] <= $limite_kb * 1024){
		//esta es la ruta donde copiaremos la imagen
		//recuerden que deben crear un directorio con este mismo nombre
		//en el mismo lugar donde se encuentra el archivo subir.php
		$ruta = "Ima/" . $_FILES['imagen']['name'];
		//comprobamos si este archivo existe para no volverlo a copiar.
		//pero si quieren pueden obviar esto si no es necesario.
		//o pueden darle otro nombre para que no sobreescriba el actual.
		if (!file_exists($ruta)){
			//aqui movemos el archivo desde la ruta temporal a nuestra ruta
			//usamos la variable $resultado para almacenar el resultado del proceso de mover el archivo
			//almacenara true o false
			$resultado = @move_uploaded_file($_FILES["imagen"]["tmp_name"], $ruta);
                        
			if ($resultado){
                            
				$nombre = $_FILES['imagen']['name'];
                                
				@mysql_query("INSERT INTO Photo (Name) VALUES ('$nombre')") ;
                                
				 echo "The file has moved successfully" ;
                                 
                                
			} else {
			        echo "Occurred an error, the file can't be inserted";
                               
			}
		} else {
                    
			echo $_FILES['imagen']['name'] .  " This file already exists";
		}
	} else {
		echo "File can't allowed, is prohibited file or exceeds the size of $limite_kb Kilobytes";
	}
}

?>