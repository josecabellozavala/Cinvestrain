<?php
include("bdConnection.php");
?>
<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */




 session_start(); 

$par=$_POST['parametro1'];

echo "<script>alert($par)</script>";

   $reg=$_POST['records'];
   $reg1=$_POST['records1'];
   $reg2=$_POST['records2'];
   $reg3=$_POST['records3'];
    $reg4=$_POST['records4'];
   $reg5=$_POST['records5'];
   $reg6=$_POST['records6'];
   $reg7=$_POST['records7'];
    $reg8=$_POST['records8'];
if($par==1){
      $sql = "INSERT INTO organism_information VALUES (NULL,'$reg','$reg1','$reg2','$reg3','$reg4','$reg5','$reg6','$reg7','$reg8')";
          
              echo "<script>$sql</script>";
              $cs=mysql_query($sql,$cn);
           
   
}         
     if($par==3){
  
         exit();
}                  
                  
                
?>