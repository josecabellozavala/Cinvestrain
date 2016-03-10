<?php


include("bdConnection.php");
session_start();

  $_SESSION['nuev'] =$_REQUEST['buscar'];
//consulta todos los empleados
$micro= $_SESSION['nuev'];
$sql1=mysql_query("SELECT item from organism_information where Alias='$micro'");

//muestra los datos consultados

while($row = mysql_fetch_array($sql1)){
	echo " ".$row['item']." ";
}
?>