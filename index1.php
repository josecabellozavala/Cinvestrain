<?php
// Evitar los warnings the variables no definidas!!!
$err = isset($_GET['error']) ? $_GET['error'] : null ;
include("bdConnection.php");
?>

<!DOCTYPE html>

<link rel="stylesheet" href="user/estilos/estilos.css" type="text/css" />
<html lang="esp">

	<head>
    	
        <meta charset="UTF-8">
       
        </script>
    	<title>Session Form</title>
    </head>
    
                    <body  >
    
    	
            
            <form name="user" action="" method="POST">
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
<option>10</option>
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


<tr align="center"><td colspan="2">
<input class="button"  type="button" name="btn1"value="Add"  onclick="return ValidarFormulario(user);" /></td></tr>





</table>

</center>
<br />
<hr>
</form>
    <h4 align="center"> Your role is as a guest , if you want to change it,please send an email to:         </h4>        
            
            
    
    
 <script src="jquery-latest.js"></script>
<script type="text/JavaScript">
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
        numero=document.getElementById("txtid").value;
        nombre=document.getElementById("txtname").value;
        apellido=document.getElementById("txtlastName").value;
        contra=document.getElementById("txtpass").value;
        tel=document.getElementById("txttel").value;
 emaill=document.getElementById("txtemail").value;
        rol=document.getElementById("cboRole").value;
        Sta=document.getElementById("cboStatus").value;
 labi=document.getElementById("labo").value;
       

          $.ajax({
         type:"POST", 
          url: "ConectarBD_User.php",
       data:{id:numero,nom:nombre,ape:apellido,cont:contra,tele:tel,correo:emaill,role:rol,stat:Sta,labos:labi}
        }).done(function(msg){
         alert(msg);
          
});

 
       alert("It was inserted correctly");
      window.location="index1.php";

      
   
        
        
    }
}

//Cerramos el Script
</script>

        
    
    </body>
    
</html>