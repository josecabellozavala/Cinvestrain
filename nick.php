<?php
include("bdConnection.php");


?>
<?php
// Evitar los warnings the variables no definidas!!!
$err = isset($_GET['error']) ? $_GET['error'] : null ;



require'./class/sessions.php';
$objses = new Sessions();
$objses->init();

$user = isset($_SESSION['user']) ? $_SESSION['user'] : null ;


$nick=isset($_SESSION['idNick']) ? $_SESSION['idNick'] : null ;

$id_user=isset($_SESSION['iduser']) ? $_SESSION['iduser'] : null ;



$var3="";
$u="ho";
$us="la";


              
			$consul3=$id_user;
           
                        
                         if($us=="la") {
                $sql="SELECT Nick FROM user WHERE User_ID = '$consul3'";		
		$cs=mysql_query($sql,$cn);
                
		while($resul=mysql_fetch_array($cs)){
			$consul4=$resul[0];
                       
			
			
			}
                        
                        }
                
                        
                        
if(isset($_POST["btn1"])){
	$btn=$_POST["btn1"];
        
        if($btn=="Save"){
		$cod=$_POST["txtid"];
		$name=$_POST["txtname"];
		
        $verinick=NULL;
               
                $sqlk="SELECT Name FROM user WHERE Nick = '$name'";		
		$cs5=mysql_query($sqlk,$cn);
                
		while($resul=mysql_fetch_array($cs5)){
			$verinick=$resul[0];
			
			}
                
              
                
                if($verinick!=NULL){
                    
                    echo "<script> alert('Choose another nick');</script>";
                }
                 else{
		$sql="update user set Nick='$name' where User_ID='$cod' ";
		
		$cs=mysql_query($sql,$cn);
		echo "<script> alert('It was saved correctly');</script>";
                 }
		}
}

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
     <h2 align="center">      New Nick</h2>
</header>
  <link rel="stylesheet" href="user/estilos/estilos.css" type="text/css" />

    <form  id="nick" name="nick" action="" method="POST">
        
         <center>

<br>

<table border="2" >
    

        <input type="hidden" name="txtid"  value="<?php echo $consul3?>"/>



<tr>
<td>Nick</td>
<td><input class="cajas" type="text" name="txtname" id="txtname"   value="<?php echo $consul4?>"/></td>
</tr>



<tr align="center">
<td colspan="2">
    <input class="button" type="submit" name="btn1" value="Save"/> 

</td>
</tr>

</table>
        
         </center>
    </form>
    </body>
</html>
