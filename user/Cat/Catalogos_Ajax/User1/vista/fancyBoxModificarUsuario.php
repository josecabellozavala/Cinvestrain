
<?php 
	require("../modelo/modelo.php");
        	include "../../../../../bdConnection.php";
	$objModelo = new Formulario();
        
         require'../../extras/class/sessions.php';
$objses = new Sessions();
$objses->init();
               $user = isset($_SESSION['user']) ? $_SESSION['user'] : null ;
               
               $sql="SELECT Type FROM user, role WHERE user.Name = '$user' AND user.Role = role.Type";		
		$cs=mysql_query($sql,$cn);
                
		while($resul=mysql_fetch_array($cs)){
			$consul1=$resul[0];
			
			
			}
        
$sql1="SELECT lab.id_lab FROM user,lab WHERE user.Name ='$user' AND user.lab=lab.id_lab";		
		$cs1=mysql_query($sql1,$cn);
                
		while($resul=mysql_fetch_array($cs1)){
			$consul2=$resul[0];
                            echo $consul2;
			}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
<script type="text/javascript" src="../ajax/ajax.js"></script>

<script type="text/javascript">
	var nombre = "", apellido="", ciudad="", telefono="", descripcion="", imagen="", pais="", pk="", email="";
	document.getElementById("label_ciudad").innerHTML="";
	//________________________________________________________________________________________________________________________
	function validarEmail() {		
		email = document.getElementById("email_editar").value; 
		if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/.test(email)){			
			document.getElementById('email_valido').innerHTML = 'Email Valid';  
		} else {			
			document.getElementById('email_valido').innerHTML = 'Email not valid';  
		}
	}
		//________________________________________________________________________________________________________________________
function validarNumero(e) { 
    tecla = (document.all) ? e.keyCode : e.which; 
    if (tecla==8) return true; //Tecla de retroceso (para poder borrar) 
    patron = /\d/; // Solo acepta números 	
    te = String.fromCharCode(tecla); 	
    return patron.test(te);  
} 
	//________________________________________________________________________________________________________________________	
	function modificarInformacion(){
		nombres = document.getElementById("nombres_editar").value;
		apellido = document.getElementById("apellidos_editar").value;
		email = document.getElementById("email_editar").value;
		role = document.getElementById("Role_editar").value;
                position = document.getElementById("position_editar").value;
		status = document.getElementById("Status_editar").value;
		telefono = document.getElementById("telefono_editar").value;
		pk = document.getElementById("pk_editar").value;
                nick = document.getElementById("nick").value;
		if(nombres!="" && apellido!="" && email!="" && status!="" && role!="" && position!="" && nick!=""  ){
			ajax_("../control/controlador.php?nombres_editar="+nombres+"&apellidos_editar="+apellido+"&email_editar="+email+"&role_editar="+role+"&position_editar="+position+"&status_editar="+status+"&nick_editar="+nick+"&telefono_editar="+telefono+"&pkUsuario_editar="+pk);	
		}else{
			alert("Ingrese toda la informacion.");	
		}		
	}
	//________________________________________________________________________________________________________________________	
	function cargarCiudades(){
		pais = document.getElementById("paises_modificar").value;
		ajax_2("../control/controlador.php?pais_modificar="+pais);	
	}
</script>
</head>
    <style>
                #BotonList {
         font-size:16px;
        font-family:Verdana,Helvetica;
        font-weight:bold;
        color:white;
        background: #19a519;
        border:0px;
   
        width:130px;
        height:30px;
   } 
        </style>
<body>
	<form>
    <?php	
		if(isset($_GET["nombres"]) && isset($_GET["apellidos"]) && isset($_GET["email"]) && isset($_GET["tel"]) && isset($_GET["role"]) && isset($_GET["position"]) && isset($_GET["status"]) && isset($_GET["imagen"]) && isset($_GET["pk"])){
			$pk=$_GET["pk"];
			$nombres=$_GET["nombres"];
			$apellidos=$_GET["apellidos"];
			$email=$_GET["email"];
			$role=$_GET["role"];
                        $position=$_GET["position"];
			$status=$_GET["status"];
			$telefono=$_GET["tel"];
			$imagen=$_GET["imagen"];
                        $nick=$_GET["Nick"];
			}
	?><br /><br />
        <br>
            <br>
                <br>
    	<table width="200" border="0" align="center">
        <tr> <td rowspan="8"><img src="../control/<?php echo $imagen; ?>" width="250" height="250" title="<?php echo $nombres." ".$apellidos; ?>" /></td></tr>
  <input type="hidden" name="pk_editar" id="pk_editar" value="<?php echo $pk; ?>" />  
    <tr>
      <td>Nick</td>
      <td> <input id="nick" name="nick" type="text" value="<?php echo $nick ?>"></td>
  </tr>
  <tr>
    <td>Name</td>
    <td><input type="text" name="nombres_editar" id="nombres_editar" value="<?php echo $nombres; ?>"  /></td>
  </tr>
  <tr>
    <td>Last Name</td>
	<td>
    	<input type="text" name="apellidos_editar" id="apellidos_editar" value="<?php echo $apellidos; ?>" />        
    </td>
  </tr>
  <tr>
    <td>Email</td>
    <td>
    	<input type="text" name="email_editar" id="email_editar" onkeyup="validarEmail();" value="<?php echo $email; ?>" />
        <label id="email_valido"></label>
    </td>
  </tr>
  
  
  <tr>
    <td>Telephone</td>
    <td><input type="text" name="telefono_editar" id="telefono_editar" onKeyPress="return validarNumero(event)" maxlength="7" value="<?php echo $telefono; ?>" /></td>
  </tr>

   
  <tr>
    <td>Role</td>
    <td>
        
        <?php 
        
       
   if($consul1=="Supermanager"){
   $sql="SELECT Type FROM role";
}
else{
    $sql="SELECT Type FROM role where Type!='Supermanager'";
}
                             echo"<select name=Role_editar id=Role_editar> "; 
                           $result=mysql_query($sql,$cn); 
                           $i=0; 
              echo "<option value=".$role.">".$role."</option>\n"; 
                 while ($row=mysql_fetch_row($result)) 
                      { 
              echo "<option value=".$row[$i].">".$row[$i]."</option>\n"; 
                       } 
                  echo "</select>"; 
                     ?>
       </td>
  </tr>
  <tr>
    <td>Position</td>
    <td>
        
        <?php 
      
        
               if($consul1=="Supermanager"){
                     $sql="SELECT position  FROM position ";
               }
               else{
                   $sql="SELECT position  FROM position where lab='$consul2'";
               }
         echo"<select name=position_editar id=position_editar> "; 

                         
                           $result=mysql_query($sql,$cn); 
                           $i=0; 
              echo "<option value=".$position.">".$position."</option>\n"; 
                 while ($row=mysql_fetch_row($result)) 
                      { 
              echo "<option value=".$row[$i].">".$row[$i]."</option>\n"; 
                       } 
                  echo "</select>"; 
                     ?>
       </td>
  </tr>
   
  <tr>
    <td>Status</td>
    <td>
        <select name="Status_editar" id="Status_editar"  >
            <option value="<?php echo $status; ?>"><?php echo $status; ?></option>
            <option value="active">active</option>
            <option value="Inactive">Inactive</option>
</select>
        </td>
  </tr>
  

  <tr><td colspan="3" align="center"><input id="BotonList" type="button" value="Update" onclick="modificarInformacion();" /></td></tr>
</table>
<div id="resultado" align="center"></div>
    </form>
	
    <br /><br /><br />
</body>
</html>



