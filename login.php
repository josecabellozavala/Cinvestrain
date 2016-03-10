<?php

ini_set("display_errors", "off");
ini_set("display_startup_errors", "off");
error_reporting(0);

$username=$_POST["usern"];
$password=$_POST["passwd"];



function conectarse()
{
    if(!($link=  mysql_connect("localhost","root","")))
    {
        
        echo "error en la base de datos"; 
        exit();
    }
    if(mysql_select_db("bdhotel",$link))
    {
        
        echo"Error seleccionando la base de datos";
        exit();
    }
    return $link;
    
    
}

$con= conectarse();

$query= "SELECT * FROM usuario WHERE Alias= '".$username."' AND contrasenia= '".$password."' ";
$q=  mysql_query($query,$con); 
try
{
    if(mysql_result($q, 0))
    {
        $result=  mysql_result($q,0);
    echo "usuario validado correctamente";
    
    }
    else
        echo" usuario o password erroneos";
}
 catch (Exception $error){}
mysql_close($con);
    
?>












