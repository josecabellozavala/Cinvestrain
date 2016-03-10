
<?php

include("bdConnection.php");

?>




<?php
if ($_FILES["doc"]["error"] > 0){
    
	echo  "Occurred an error,you must insert a document";
     
} else {
	//ahora vamos a verificar si el tipo de archivo es un tipo de imagen permitido.
	//y que el tamano del archivo no exceda los 100kb
	
		//esta es la ruta donde copiaremos la imagen
		//recuerden que deben crear un directorio con este mismo nombre
		//en el mismo lugar donde se encuentra el archivo subir.php
		$ruta = "Documents_Strain/" . $_FILES['doc']['name'];
		//comprobamos si este archivo existe para no volverlo a copiar.
		//pero si quieren pueden obviar esto si no es necesario.
		//o pueden darle otro nombre para que no sobreescriba el actual.
		if (!file_exists($ruta)){
			//aqui movemos el archivo desde la ruta temporal a nuestra ruta
			//usamos la variable $resultado para almacenar el resultado del proceso de mover el archivo
			//almacenara true o false
			$resultado = @move_uploaded_file($_FILES["doc"]["tmp_name"], $ruta);
                        
			if ($resultado){
                            
				$nombre = $_FILES['doc']['name'];
                                
				@mysql_query("INSERT INTO document (Name) VALUES ('$nombre')") ;
                                
				 echo "The file has moved successfully";
                                 
                                
			} else {
			        echo "Occurred an error, the file can't be inserted";
                               
			}
		} else {
                    
			echo $_FILES['doc']['name'] .  "This file already exists";
		}
	
        
       
}

?>