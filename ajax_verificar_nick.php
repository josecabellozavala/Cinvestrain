<?php
include("bdConnection.php");


?>
     <?php   
	 $user = $_POST['b'];
       
      if(!empty($user)) {
            comprobar($user);
      }
       
      function comprobar($b) {
           global $cn;
           $sqla = "select Nick from user WHERE Nick = '".$b."'"; 

$resultado = mysql_query($sqla,$cn); 

$contar = mysql_num_rows($resultado); 

           
             
            if($contar == 0){
                  echo "<span style='font-weight:bold;color:green;'>Available.</span> <input type='hidden' id='mensaje' name='mensaje' value='ok'>";
            }else{
                  echo "<span style='font-weight:bold;color:red;'>The nick is already in use.</span> <input type='hidden' name='mensaje' id='mensaje' value='no'>";
            }
      }    
?>