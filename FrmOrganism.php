<?php
include("bdConnection.php");
?>

<!DOCTYPE html>
<html>
<head>
<title>Organism Information</title>
</head> 

<body>
<header>
<h2>                    Users</h2>
</header>
  




<?php
$var="";
$var1="";
$var2="";
$var3="";
$var4="";
$var5="";

if(isset($_POST["btn1"])){
	$btn=$_POST["btn1"];
	$bus=$_POST["txtbus"];
        
	if($btn=="Buscar"){
		
		$sql="select * from User where User_ID='$bus'";
		$cs=mysql_query($sql,$cn);
		while($resul=mysql_fetch_array($cs)){
			$var=$resul[0];
			$var1=$resul[1];
			$var2=$resul[2];
			$var3=$resul[3];
			$var4=$resul[4];
                        $var5=$resul[5];
                        
			}
			if($var5=="Inactive"){
				$var5="selected";
				}
			
		}
		if($btn=="Nuevo"){
		
		$sql="select count(User_ID),Max(User_ID) from alumnos";
		$cs=mysql_query($sql,$cn);
		while($resul=mysql_fetch_array($cs)){
			$count=$resul[0];
			$max=$resul[1];
			}
			if($count==0){
				$var="A0001";
				}
				else{
					$var='A'.substr((substr($max,1)+10001),1);
					}
			
		}
		if($btn=="Agregar"){
		$cod=$_POST["txtid"];
		$nom=$_POST["txtname"];
		$ape=$_POST["txtlastName"];
		$tel=$_POST["txttel"];
                $role=$_POST["txtRole"];
		$Status=$_POST["cboStatus"];
                
		$sql="insert into user values ('$cod','$nom','$ape','$tel','$role','$Status')";
		
		$cs=mysql_query($sql,$cn);
		echo "<script> alert('Se insertó correctamente');</script>";
		}
		if($btn=="Actualizar"){
		$cod=$_POST["txtid"];
		$nom=$_POST["txtname"];
		$ape=$_POST["txtlasName"];
		$tel=$_POST["txttel"];
                $role=$_POST["txtRole"];
		$Status=$_POST["cboStatus"];
		
		$sql="update user set Name='$nom',Last_Name='$ape',Telephone='$tel',Role='$role',Status='$Status'  where User_ID='$cod'";
		
		$cs=mysql_query($sql,$cn);
		echo "<script> alert('Se actualizo correctamente');</script>";
		}
		
		if($btn=="Eliminar"){
		$cod=$_POST["txtid"];
			
		$sql="delete from user where User_ID='$cod'";
		
		$cs=mysql_query($sql,$cn);
		echo "<script> alert('Se elimninó correctamente');</script>";
		}
	}

?>
<form name="fe" action="" method="post">
<center>
<table border="2">
<tr>
<td>Buscar</td>
<td><input type="text" name="txtbus"/></td>
<td><input type="submit" name="btn1"  value="Buscar"  /></td>
</tr></table>

<table border="2">
<tr>
<td>User_ID</td>
<td><input type="text" name="txtid" value="<?php echo $var?>" /></td>
</tr>

<tr>
<td>Name</td>
<td><input type="text" name="txtname"  value="<?php echo $var1?>"/></td>
</tr>
<tr>
<td>Last_name</td>
<td><input type="text" name="txtlastName"  value="<?php echo $var2?>"/></td>
</tr>
<tr>
<td>Telephone;</td>
<td><input type="text" name="txttel"  value="<?php echo $var3?>"/></td>
</tr>

<tr>
<td>Role;</td>
<td><input type="text" name="txtRole"  value="<?php echo $var4?>"/></td>
</tr>

<td>Status</td>
<td><select name="cboStatus">
<option>active</option>
<option <?php echo $var5?> >Inactive</option>
</select></td>
</tr>

<tr align="center">
<td colspan="2">
<input type="submit" name="btn1" value="Nuevo"/>
<input type="submit" name="btn1" value="Listar"/>
</td>
</tr>

<tr align="center">
<td colspan="2">
    <input type="submit" name="btn1" value="Actualizar"/> 
    <input type="submit" name="btn1"value="Eliminar"/>
<input type="submit" name="btn1"value="Agregar"/>
</td>
</tr>

</table>

</center>
<br />
<hr>
</form>
<br />



<?php
if(isset($_POST["btn1"])){
	$btn=$_POST["btn1"];

	if($btn=="Listar"){
		
		$sql="select * from user";
		$cs=mysql_query($sql,$cn);
		echo"<center>
<table border='3'>
<tr>
<td>User_ID</td>
<td>Name</td>
<td>Last_Name</td>
<td>Telephone</td>
<td>Role</td>
<td>Status</td>
</tr>";
		while($resul=mysql_fetch_array($cs)){
			$var=$resul[0];
			$var1=$resul[1];
			$var2=$resul[2];
			$var3=$resul[3];
			$var4=$resul[4];
                        $var5=$resul[5];
			echo "<tr>
<td>$var</td>
<td>$var1</td>
<td>$var2</td>
<td>$var3</td>
<td>$var4</td>
    <td>$var5</td>
</tr>";
			}
			
			echo "</table>
</center>";
	}
	}
?>




















</body>
</html>