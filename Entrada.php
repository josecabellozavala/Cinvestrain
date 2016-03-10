
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
    top:10%;
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
  <link rel="stylesheet" type="text/css" media="all" href="style.css">
  <script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
  <script type="text/javascript" charset="utf-8" src="js/jquery.leanModal.min.js"></script>
  
		<link href="http://fonts.googleapis.com/css?family=Aclonica:regular" rel="stylesheet" type="text/css" >
                <link rel="stylesheet" href="Boos/bootstrap.min.css">
    <link rel="stylesheet" href="Boos/bootstrap-theme.min.css">
    <link rel="stylesheet" href="Boos/styles.css">
    <script type="text/javascript" src="Busqueda_ajax.js"></script>
        <meta charset="UTF-8">
            <title>Strain Collection</title>

            
          
<script src="Menu_P/stuHover.js" type="text/javascript"></script>


    </head>
    <body bgcolor="#99CCFF" >
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
               <center>     <h1 > Wellcome to CinveStrain     
             
               </h1>
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
                <input class="btn btn-lg btn-primary btn-block"   type="button" name="regis" value="Register" onclick="enviar('index1.php');"/> 
               <center><a href="#loginmodal" class="flatbtn" id="modaltrigger">Modal Login</a></center>
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
                         <input    class="btn btn-lg btn-primary btn-block"  type="hidden" name="regis" value="Register" onclick="enviar('index1.php');"/> 
  
             </td>
              </table>
                              </div>
                          
        </center>
        </form>
                    <script src="Boos/jquery.md5.min.js"></script>
                    <script src="Boos/bootstrap.min.js"></script>
                    <script src="Boos/script.js"></script>
          
            

  
 
    
    <div id="loginmodal" style="display:none;">
   
        <form id="loginform" name="loginform" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
        
      <center>

     <br>
    <br> 
<h2 align="center"> Register        </h2>
 <br >
<table border="2" bgcolor="">

<input class="cajas" type="hidden" name="txtid" id="txtid" value="1"  /> 


<tr>
<td>* Name</td>
<td><input  class="cajas" type="text" name="txtname" id="txtname" /></td>
</tr>
<tr>
<td>* Last_name</td>
<td><input class="cajas" type="text" name="txtlastName" id="txtlastName"  /></td>
</tr>

<tr>
<td>* Password</td>
<td><input class="cajas" type="password" name="txtpass" id="txtpass" /></td>
</tr>
<tr>
<td>Telephone;</td>
<td><input class="cajas" type="text" name="txttel" id="txttel"  /></td>
</tr>

<tr>
<td>Email</td>
<td><input class="cajas" type="text" name="txtemail" id="txtemail"  /></td>
</tr>

<tr>
<td>* Role;</td>
<td><select class="cajas" name="cboRole" id="cboRole">
<option>Guest</option>
</select></td>
</tr>

<td>* Status</td>
<td><select class="cajas" name="cboStatus" id="cboStatus">
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
<tr align="center"><td colspan="2">
<input class="button"  type="button" name="btn1" name="btn1" value="Add"  onclick="return ValidarFormulario(loginform);" /></td></tr>





</table>

</center>
<br />
<hr>
<div id="prefer">
                            <table>
                                <tr>
                                    <td>Do you want change the role?</td>
                                    <td>
                                        
                                        <select name="preferencia" id="preferencia">
                                             <option value="No">No</option>
                                            <option value="User">User</option>
                                        </select>
                                    </td>
                                </tr>
                            </table>
                        </div>
      
<div class="center"><input type="button" name="loginbtn" id="loginbtn" class="flatbtn-blu hidemodal" onclick=" return ValidarFormulario(user);" value="Log In" tabindex="3"></div>
    </form>
  </div>



         

<script type="text/JavaScript">
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

        
        $rutaServidor='FotosUsuarios';
$rutaTemporal=$_FILES['imagen']['tmp_name'];
$nombreImagen=$_FILES['imagen']['name'];
$rutaDestino=$rutaServidor.'/'.$nombreImagen;
move_uploaded_file($rutaTemporal, $rutaDestino);

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
  


?>