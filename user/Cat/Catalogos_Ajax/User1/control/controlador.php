<?php 
	require("../modelo/modelo.php");
        include "../../../../../bdConnection.php";
        
	$objFormulario = new Formulario();
	$mensajeExito="Successful registration";
	$mensajeError="Failed to register : incomplete data";
	//---------------------------------------------------------------------------------------------------------------------------	
	if(isset($_GET["paisSeleccionado"])){
			if($_GET["paisSeleccionado"]!="seleccione_pais"){
				$objFormulario->cargarCiudades($_GET["paisSeleccionado"]);
			}
	}
	//---------------------------------------------------------------------------------------------------------------------------	
	if(isset($_GET["pais_nuevo"])){
			$objFormulario->registrarPaisNuevo($_GET["pais_nuevo"]);
			echo "<script>location.href='../vista/formulario.php';</script>";
			exit();
	}

	//---------------------------------------------------------------------------------------------------------------------------	
	if(isset($_GET["nombres_editar"]) && isset($_GET["apellidos_editar"]) && isset($_GET["email_editar"]) && isset($_GET["role_editar"]) && isset($_GET["position_editar"]) && isset($_GET["status_editar"]) && isset($_GET["telefono_editar"])&& isset($_GET["nick_editar"]) && isset($_GET["pkUsuario_editar"])){
			$objFormulario->modificarUsuario($_GET["pkUsuario_editar"],$_GET["nombres_editar"],$_GET["apellidos_editar"],$_GET["email_editar"],$_GET["role_editar"],$_GET["position_editar"],$_GET["status_editar"],$_GET["telefono_editar"],$_GET["nick_editar"]);
			
                        echo "<script>location.href='../vista/modificarInformacionUsuario.php';</script>";
	}
	//---------------------------------------------------------------------------------------------------------------------------	
	if(isset($_GET["otraCiudadSeleccionada"])){
		if($_GET["otraCiudadSeleccionada"]=="otra_ciudad"){
			$objFormulario->cargarCampoCiudad();
		}
	}
	//------------------------------------------ REGISTRAR USUARIO--------------------------------------------------------------------------------	
	if(isset($_POST["nombre"]) && isset($_POST["apellido"]) && isset($_POST["pass"]) && isset($_POST["email_"]) && isset($_POST["ph"]) && isset($_POST["position"]) && isset($_POST["status"]) && isset($_POST["descripcion"]) && isset($_FILES['imagen']['name']) ){
		
                     
			
			$nombre_archivo = $_FILES['imagen']['name']; 			
			$tipo_archivo = $_FILES['imagen']['type']; 
			$tamano_archivo = $_FILES['imagen']['size'];
			$ruta="Fotos_User/".$nombre_archivo;
			move_uploaded_file($_FILES['imagen']['tmp_name'], $ruta);
                        
                        $nombre = $_POST["nombre"]." ".$_POST["apellido"]." ".$_POST["email_"];
		      $nombre = explode(" ", $nombre);
		     $iniciales = "";
		      for($x = 0; $x < count($nombre); $x++)
			if($nombre[$x] != ""){
				$iniciales .= substr($nombre[$x], 0, 1);
                        }
			$objFormulario->registrarUsuario($_POST["nombre"],$_POST["apellido"],$_POST["pass"],$_POST["telefono"],$_POST["email_"],$_POST["ph"],$_POST["position"],$_POST["status"],$_POST["descripcion"],$ruta,$iniciales);
			
                        
                        /*echo "<script>location.href='../vista/formulario.php?mensaje=".$mensajeExito."';</script>";*/
			
		}/*else{
			echo "<script>location.href='../vista/formulario.php?mensaje=".$mensajeError."';</script>";
		}*/
	//-------------------------CARGAR CIUDADES DEPENDIENDO DEL PAIS, PARA FANCY BOX MODIFICAR DATOS USUARIO-------------------------	
	if(isset($_GET["pais_modificar"])){
			if($_GET["pais_modificar"]!="seleccione_pais"){
				$objFormulario->cargarCiudadesModificar($_GET["pais_modificar"]);
			}
	}
	//-------------------------ELIMINAR USUARIO-------------------------	
	if(isset($_GET["eliminar_usuario"])){
		?>
			<script>
            	confirmar=confirm("Are you sure to delete registration?");
				if(confirmar){
					location.href="controlador.php?confirmacion=si&codigo_user=<?php echo $_GET["codigo"]; ?>";
				}else{
					location.href="../vista/modificarInformacionUsuario.php";
				}
           </script>
		<?php
	}
	if(isset($_GET["confirmacion"])){
		$objFormulario->eliminarUsuario($_GET["codigo_user"]);
	}	

?>