
    <link rel="stylesheet" href="Boos/styles.css">


<?php


include 'bdConnection.php';

$q=$_POST['q'];
$con=$cn;

$sql="select photo from user where Name='".$q."'";
$res=mysql_query($sql,$con);

if(mysql_num_rows($res)==0){

echo "<img id='avatar' src='Boos/nadie.png' alt='avatar'>";

}else{


while($fila=mysql_fetch_array($res)){
	

 $ima=$fila['photo'];
 if($ima !=""){
  echo "<img src='$ima'  width='80' height='80'>";


 }else{
     echo "<img id='avatar' src='Boos/nadie.png' alt='avatar'>";

 }
 
  
 }


}

?>