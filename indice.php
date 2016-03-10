
<?php
// Evitar los warnings the variables no definidas!!!
$err = isset($_GET['error']) ? $_GET['error'] : null ;
session_start();
  unset($_SESSION["user"]); 
  unset($_SESSION["user"]);
  session_destroy();
  include("bdConnection.php");
?>
  
<style type="text/css">

 
#tit
{
     position: absolute;
  
    width: 30%;
    height:15%;
    top:0%;
    left:38%;
    float:left;
     z-index: 0;
}
#log{
     position: absolute;
  
    top:15%;
    left:10%;
    float:left;
     z-index: 0;
}
#myDiv{
    
    height:50px; 
    
}
</style>

<html>
    <head>
      <link rel="shortcut icon" href="http://designshack.net/favicon.ico">
  <link rel="icon" href="http://designshack.net/favicon.ico">

  <script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
  <script type="text/javascript" charset="utf-8" src="js/jquery.leanModal.min.js"></script>
  
		<link href="http://fonts.googleapis.com/css?family=Aclonica:regular" rel="stylesheet" type="text/css" >
               <link rel="stylesheet" type="text/css" media="all" href="style.css">
         <link rel="stylesheet" href="Boos/bootstrap.min.css">
    <link rel="stylesheet" href="Boos/bootstrap-theme.min.css">
    <link rel="stylesheet" href="Boos/styles.css">
    <script type="text/javascript" src="Busqueda_ajax.js"></script>
        <meta charset="UTF-8">
            <title>Strain Collection</title> 

            
          
<script src="Menu_P/stuHover.js" type="text/javascript"></script>



<style>
#tapiz{
    position:absolute;
    width:80%;
    top:10%;
    background: url(fondos.jpg);
    left:10%;
   
    height:85%;
    float:left;
}
</style>
    </head>
    <body >
        <div id="tapiz"></div>
          <script type="text/javascript">
        function enviar(destino)
        {
            document.formulario.action=destino;
            document.formulario.submit(); 
        }
        
    </script>
        

             <br>  
               <br>  
                 <br>  
                   <br>  
    <div id="tit">
               <center>     <h1 > Welcome to     
             
               </h1>
                   <br>
                   <br>
                 <p > <font size="8" color="red"> CinveStrain </font></p>
                    </center>
        <center>
        <?php if($err==1){
				echo "Error with password or user name <br />";
                               
			}
			if($err==2){
				echo "Debe iniciar sesion para poder acceder el sitio. <br />";
			}
			?>
            </center>
      </div>
       
      
      <form align="center" name="user" action="session_init.php" method="post">
        
      <center>
        	
             <br>
    <br>
     
     <div id="log">
    <center >
       
     <div class="container">
         
        <div class="col-md-12">
             
            <div class="col-md-4"></div>
            <div class="col-md-4" id="login">
                <div id="myDiv">
                       <img id='avatar' src='Boos/nadie.png' alt='avatar'>
                        </div>
                <br>
                  <br>
                   
                <form class="form-signin" role="form" >
                    <div class="text-center">
                       
                         
                    </div>
                    <input type="text" name="usern" id="usern"  onkeyup="loadXMLDoc()" class="form-control" placeholder="User name">
                    <input type="password" name="passwd" id="passwd"  class="form-control" placeholder="Password">
                    <button class="btn btn-lg btn-primary btn-block" type="submit" name="enter" id="enter" value="Enter" >Log in</button>
<!--                <input class="btn btn-lg btn-primary btn-block"   type="button" name="regis" value="Register" onclick="enviar('index1.php');"/> -->
<!--                    <a href="#loginmodal"  type="hidden" lass="btn btn-lg btn-primary btn-block" id="modaltrigger">Register</a>-->
                </form>
            </div>
            <div class="col-md-4"></div>
        </div>
 
 </div>
    
       
        </center>
           </div>
</form>
    <form name="formulario"  method="post">
                      <center>
                          <div id="login2">
                           <table>
                     <td colspan="2">
<!--                         <input    class="btn btn-lg btn-primary btn-block"  type="hidden" name="regis" value="Register" onclick="enviar('index1.php');"/> -->
  
             </td>
              </table>
                              </div>
                          
        </center>
        </form>
                    <script src="Boos/jquery.md5.min.js"></script>
                    <script src="Boos/bootstrap.min.js"></script>
                    <script src="Boos/script.js"></script>
          
            

  
 
    
    <div id="loginmodal" style="display:none; width:600px; " >
   
        <form id="loginform" name="loginform" method="post" action="index.php" enctype="multipart/form-data">
        
      <center>

    
<h2 align="center"> Register        </h2>
<table border="2" bgcolor="">
<input class="cajas" type="hidden" name="txtid" id="txtid" value="1"  /> 
<tr>
<td>* Name</td>
<td><input  class="cajas" type="text" name="txtname" id="txtname" required /></td>
</tr>
<tr>
<td>* Last_name</td>
<td><input class="cajas" type="text" name="txtlastName" id="txtlastName" required /></td>
</tr>

<tr>
<td>* Password</td>
<td><input class="cajas" type="password" name="txtpass" id="txtpass" required/></td>
</tr>
<tr>
<td>Telephone;</td>
<td><input class="cajas" type="text" name="txttel" id="txttel" onKeyPress="return validarNumero(event)" maxlength="10" /></td>
</tr>

<tr>
<td>Email</td>
<td><input class="cajas" type="text" name="txtemail" id="txtemail" onkeyup="validarEmail();" oncopy="alert('No copy'); return false;" required="required" autocomplete="off" /></td>
  <td><label id="email_valido"></label></td>
</tr>
<tr>
    <td>Confirm Email</td>
 <td><input type="text" name="confirmar_email" id="confirmar_email" value="" oncopy="alert('No copy'); return false;" onpaste="alert('No puedes Pegar'); return false;" onkeyup="validarConfirmarEmail();" required="required" autocomplete="off" /></td>
            <td><label id="confirmar_email_valido"></label></td>
            </tr>
<tr>
<td>* Role;</td>
<td><select class="cajas" name="cboRole" id="cboRole" required>
<option>Guest</option>
</select></td>
</tr>

<td>* Status</td>
<td><select class="cajas" name="cboStatus" id="cboStatus" required>
<option>active</option>

</select></td>
</tr>
<tr>
<td>* Lab</td>
<td>
    
    
 <?php 
                   echo"<select name=labo id=labo class=cajas>"; 

                           $sql="SELECT id_lab  FROM lab"; 
                           $result=mysql_query($sql); 
                           $i=0; 
                 while ($row=mysql_fetch_row($result)) 
                      { 
              echo "<option value=".$row[$i].">".$row[$i]."</option>\n"; 
                       } 
                  echo "</select>"; 
                     ?> 
</td>

</tr>

<tr>
    <td>Photo</td>
    <td><input type="file" name="imagen"  /></td>
</tr>
 <tr>
                                    <td>Do you want change the role?</td>
                                    <td>
                                        
                                        <select name="preferencia" id="preferencia">
                                             <option value="No">No</option>
                                            <option value="User">User</option>
                                        </select>
                                    </td>
                                </tr>
<tr align="center"><td colspan="2">
<input class="flatbtn-blu hidemodal" type="button" name="btn1" name="btn1" value="Add"  onclick="return ValidarFormulario(loginform);" /></td></tr>




 
</table>

</center>

                     
      

    </form>
  </div>



         <script type="text/javascript">
	var nombre = "", apellido="", ciudad="", telefono="", descripcion="", imagen="", pais="", otraCiudad="", email="", ciudad_nueva="";
	var	confrimar_email = "";
	//________________________________________________________________________________________________________________________
	function validarEmail() {		
		email = document.getElementById("txtemail").value; 
		if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/.test(email)){
			//alert("La direcci�n de email " + email + " es correcta.");
			document.getElementById('email_valido').innerHTML = 'Email valid';  
		} else {
			//alert("La direcci�n de email es incorrecta." +email);
			document.getElementById('email_valido').innerHTML = 'Email not valid';  
		}
	}
     function soloNumeros(field, event){
var key, keychar;
if(window.event) 
key = window.event.keyCode;
else if(event) 
key = event.which;
else
return true;
keychar = String.fromCharCode(key);
if((key == null) || (key == 0) || (key == 8) || (key == 9) || (key == 13) || (key ==27))
return true;
else if((("0123456789").indexOf(keychar) > -1)){
window.status = "";
return true;
}
else{
alert("Only numbers!");
return false;
}
}

// FUNCION PARA VALIDAR RANGO
function rangoNumeros(numero){

if (numero >=7 & numero <=14){
alert("The range of ph is 7-14");
}

else {

document.getElementById('txtlastName').value="";
}
}

function ValidaFechas(){
 
    var dtFechaActual = new Date();
  var sAnioFin = "2015";
    var sMesFin = "08";
    var sDiaFin = "14";
    var sFechaFin = sMesFin + "/" + sDiaFin + "/" + sAnioFin;
 
    if(Date.parse(sFechaFin) > dtFechaActual){
        alert("La fecha final no puede ser mayor a la fecha actual.");
        return false;
    }
 
    return true;
}
	//________________________________________________________________________________________________________________________	
	function validarConfirmarEmail() {
		email = document.getElementById("txtemail").value; 
		confrimar_email = document.getElementById("confirmar_email").value; 
		if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/.test(confrimar_email) && confrimar_email==email){
			document.getElementById('confirmar_email_valido').innerHTML = 'Email Valid';  
		}else if(confrimar_email!=email){
			document.getElementById('confirmar_email_valido').innerHTML = 'Different Email';	
		}
		else {
			document.getElementById('confirmar_email_valido').innerHTML = 'Email not valid';  
		}
	}
	//________________________________________________________________________________________________________________________		
	function ciudadesSegunPais(){
		document.getElementById("resultado").innerHTML="";
		document.getElementById("resultado_2").innerHTML="";
		pais=document.getElementById("paises").value;
		ajax_("../control/controlador.php?paisSeleccionado="+pais);		
	}
	//________________________________________________________________________________________________________________________	
	function campoCiudad(){
		otraCiudad=document.getElementById("ciudades").value;
		ajax_2("../control/controlador.php?otraCiudadSeleccionada="+otraCiudad);
	}
	//________________________________________________________________________________________________________________________
function validarNumero(e) { 
    tecla = (document.all) ? e.keyCode : e.which; 
    if (tecla==8) return true; //Tecla de retroceso (para poder borrar) 
    patron = /\d/; // Solo acepta n�meros 	
    te = String.fromCharCode(tecla); 	
    return patron.test(te);  
} 
	//________________________________________________________________________________________________________________________	
	function agregarPais(){
		var pais="";	
		pais= document.getElementById("pais_nuevo").value;
		if(pais!=""){
			ajax_4("../control/controlador.php?pais_nuevo="+pais);	
		}else{
			alert("Ingrese un pais");	
		}						
		//parent.jQuery.fancybox.close();
	}
	//________________________________________________________________________________________________________________________
	function ingreseCiudad(){
		ciudad_nueva = 	document.getElementById("ciudad_nueva").value;
		if(ciudad_nueva==""){			
			alert("Ingrese una ciudad.");
			document.getElementById('ciudad_nueva').focus();
		}
		document.getElementById('ciudad_nueva').focus();
	}



    $(function(){
  $('#loginform').submit(function(e){
    return false;
  });
  
  $('#modaltrigger').leanModal({ top: 10, overlay: 0.45, closeButton: ".hidemodal" });
});
//<!--function MandaFormulario(form) 
//{     
//     
//    
//
//        bus=this.document.entra.busqueda.value;
//
//      alert(bus);
//      
//      
//document.getElementById('desdeotro4').style.display='block';
//document.getElementById('desdeotro0').style.display='block';
//document.getElementById('desdeotro3').style.display='none';
//      
//             
//        
//          
//}
//    -->
      

      
   
        
  


//Cerramos el Script

function ValidarFormulario(form) 
{    
          
//     ValidaFechas();
//     rangoNumeros(document.getElementById('txtlastName').value);
    continuar=true;
   if(form.txtname.value=="" || form.txtlastName.value=="" ||
           form.txtpass.value=="" || form.cboRole.value=="")
  
        {
        alert("Datagrid with parentheses are required");
        
        continuar=false;  
        
      
        }
        
    else if(continuar==true)
    {
        form.submit();
     

 
  

      
   
        
        
    }
}


</script>


     
    
   

      
    
 
    
        
        
    </body>
</html>
<?php 

if(isset($_POST["txtid"]) && isset($_POST['txtname']) && isset($_POST['txtlastName']) && isset($_POST['txtpass']) && isset($_POST['cboRole']) ){
    
        
        $rutaServidor='Fotos_User';
$rutaTemporal=$_FILES['imagen']['tmp_name'];
$nombreImagen=$_FILES['imagen']['name'];
$rutaDestino=$rutaServidor.'/'.$nombreImagen;
$rutaAloja='user/Cat/Catalogos_Ajax/User1/control';
$rutacomplem=$rutaAloja.'/'.$rutaDestino;
@move_uploaded_file($rutaTemporal,$rutacomplem );

                $cod=$_POST['txtid'];
		$name=$_POST['txtname'];
		$last=$_POST['txtlastName'];
		$pass=$_POST['txtpass'];
                $tel=$_POST['txttel'];
 $corre=$_POST['txtemail'];
		$role=$_POST['cboRole'];
                $Sta=$_POST['cboStatus'];

               $lab=$_POST['labo'];
                $pref=$_POST['preferencia'];
             		$sql="insert into user (Name,Last_Name, Password,Telephone, email, Role, Status,lab,photo) values ('$name','$last','$pass',' $tel','$corre','$role','$Sta','$lab','$rutaDestino')";
		 
		$cs=mysql_query($sql,$cn);
   echo "<script>alert('It was recorded successfully');</script>";
}

?>