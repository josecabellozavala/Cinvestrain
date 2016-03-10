<link href="../css/estilos_tabla.css" rel="stylesheet" type="text/css" />
<?php
	include "../../../../../bdConnection.php";
	class Formulario{
		var $conn;
		var $conexion;
		var $mensajeExito;
		var $mensajeError;
		function Formulario(){
			$this->conexion= new  Conexion();				
			$this->conn=$this->conexion->conectarse();
			$this->mensajeExito="It was recorded successfully";
			$this->mensajeError="Failure to register";
		}
		//---------------------------------------------------------------------------------------------------------------------------		
		function registrarUsuario($nombre, $apellidos, $pass, $telefono,$email, $Role,$position, $Status, $descripcion, $imagen,$nick){
			 
                    
                  
                        $sqlk="SELECT id_lab FROM lab WHERE  Name like '%$descripcion%'";		
		$lab = mysqli_query($this->conn, $sqlk) or die(mysqli_error());
		
                while($campo=mysqli_fetch_array($lab)){
				$consulLab=$campo[0];
			}
		        
               
                    
                        $queryRegistrar = "insert into user (Name,Last_Name,Password,Telephone,email, Role,position, Status,lab, photo,Nick) values ('".$nombre."', '".$apellidos."', '".$pass."','".$telefono."', '".$email."', '".$Role."','".$position."', '".$Status."','".$consulLab."', '".$imagen."', '".$nick."')";			
			$registrar = mysqli_query($this->conn, $queryRegistrar) or die(mysqli_error());
			
			
			
			if($registrar){
				//echo $this->mensajeExito;
				echo "<script>location.href='../vista/formulario.php?mensaje=". $this->mensajeExito."';</script>";				
			}else{
				//echo $this->mensajeError;
				echo "<script>location.href='../vista/formulario.php?mensaje=".$this->mensajeError."';</script>";
			}
		}
		//---------------------------------------------------------------------------------------------------------------------------		
		function registrarPaisNuevo($pais){
			
			$queryRegistrar = "insert into paises (pais) values ('".$pais."')";
			$registrar = mysqli_query($this->conn, $queryRegistrar) or die(mysqli_error());
			if($registrar){
				echo $this->mensajeExito;				
			}else{
				echo $this->mensajeError;
			}
		}
		//---------------------------------------------------------------------------------------------------------------------------
		function cargarPaises(){
			$queryConsulta="select * from paises order by pais asc";
			$result = mysqli_query($this->conn, $queryConsulta) or die(mysqli_error());
			echo "<select name='paises' id='paises' onchange='ciudadesSegunPais();'>";
			echo "<option value='seleccione_pais' selected='selected'>Seleccione</option>";
			while($campo=mysqli_fetch_array($result)){
				echo "<option value='".$campo['pkPais']."'> ".$campo['pais']." </option>";
			}
			echo "</select>";			
		}
		function cargarPaisesModificar(){
			$queryConsulta="select * from paises order by pais asc";
			$result = mysqli_query($this->conn, $queryConsulta) or die(mysqli_error());
			echo "<select id='paises_modificar' onchange='cargarCiudades();'>";
			echo "<option value='seleccione_pais' selected='selected'>Seleccione</option>";
			while($campo=mysqli_fetch_array($result)){
				echo "<option value='".$campo['pkPais']."'> ".$campo['pais']." </option>";
			}
			echo "</select>";			
		}
		//---------------------------------------------------------------------------------------------------------------------------
		function cargarCiudades($pkPais){
			$queryConsulta="select * from ciudades where pkpais = ".$pkPais;
			$result = mysqli_query($this->conn, $queryConsulta) or die(mysqli_error());
			echo "<label>Ciudad</label><br><select name='ciudades' id='ciudades' onchange='campoCiudad();'>";
			echo "<option value='seleccione_ciudad' selected='selected'> Seleccione... </option>";
			while($campo=mysqli_fetch_array($result)){
				echo "<option value='".$campo['ciudad']."'> ".$campo['ciudad']." </option>";
			}
			echo "<option value='otra_ciudad'>Nueva Ciudad</option>";
			echo "</select>";
		}
		function cargarCiudadesModificar($pkPais){
			$queryConsulta="select * from ciudades where pkpais = ".$pkPais;
			$result = mysqli_query($this->conn, $queryConsulta) or die(mysqli_error());
			echo "<select name='ciudades' id='ciudades'>";
			echo "<option value='seleccione_ciudad' selected='selected'> Seleccione</option>";
			while($campo=mysqli_fetch_array($result)){
				echo "<option value='".$campo['ciudad']."'> ".$campo['ciudad']." </option>";
			}			
			echo "</select>";
		}
		//---------------------------------------------------------------------------------------------------------------------------		
		function cargarCampoCiudad(){
			echo "<br><input type='text' name='ciudad_nueva' id='ciudad_nueva' required='required' placeholder='Ingresa la nueva Ciudad'  onblur='ingreseCiudad();' />";
		}
		//---------------------------------------------------------------------------------------------------------------------------
		function listarUsuarios(){
			$sql="select * from user order by Name asc";
			$rs=mysqli_query($this->conn, $sql);
			$i=0;
			if(mysqli_num_rows($rs)<1){
				echo "No hay usuarios registrados";	
			}else{
			 echo "<table border='0' align='center' class='table_' >";
			 echo "<thead><th>Name</th><th>Last Name</th><th>Telephone</th><th>Email</th><th>Role</th><th>Status</th><th>Modificar</th><th>Eliminar</th></thead>";
			 while ($row = mysqli_fetch_array($rs)){	
			 			 					 								
			echo "<td align='center'>".$row["Name"]."</td>";
			echo "<td align='center'>".$row["Last_Name"]."</td>";	
			echo "<td align='center'>".$row["Telephone"]."</td>";
                       	
			echo "<td align='center'>".$row["email"]."</td>";			
			echo "<td align='center'>".$row["Role"]."</td>";			
			echo "<td align='center'>".$row["Status"]."</td>";
						
			echo '<td align="center">
			<a class="fancybox fancybox.iframe" href="../vista/fancyBoxModificarUsuario.php?nombres='.$row["Name"].'&apellidos='.$row["Last_Name"].'&tel='.$row["Telephone"].'&email='.$row["email"].'&role='.$row["Role"].'&status='.$row["Status"].'&imagen='.$row["photo"].'&pk='.$row["User_ID"].'" >Editar</a></td>';
			echo "<td><a href='../control/controlador.php?eliminar_usuario=si&codigo=".$row["User_ID"]."'>Eliminar</a></td></tr>";
			$i++; 
			}			
			}
			echo "</table>";
		}
		//---------------------------------------------------------------------------------------------------------------------------
		function modificarUsuario($pk, $nombre, $apellido, $email, $role, $position,$status, $telefono,$nick){
			$queryUpdate = "update user set Name = '".$nombre."', Last_Name = '".$apellido."', email = '".$email."', Role = '".$role."', position='".$position."',Status = '".$status."', Telephone = '".$telefono."', Nick = '".$nick."' where User_ID = ".$pk;
			$update =mysqli_query($this->conn, $queryUpdate);
                       
			if($update){
				echo "Update successful";
                                
                              
			}else{
				echo "Failed to update";
				}
                                
		}
		//---------------------------------------------------------------------------------------------------------------------------
		function eliminarUsuario($pk){
			$queryDelete = "delete from user where User_ID = ".$pk;
			$delete =mysqli_query($this->conn, $queryDelete);
			if($delete){						
				echo "<script>
						alert('Successful elimination');
						location.href='../vista/modificarInformacionUsuario.php';
				</script>";				
			}else{
				echo "<script>
						alert('Error deleting');
						location.href='../vista/modificarInformacionUsuario.php';
				</script>";	
				}
		}
	}
?>