

<?php
     if(isset($_POST["btn1"])){
         
         	$btn=$_POST["btn1"];
                if($btn=="Aceptar"){
                
                    $rutaServidor='Ima';
$rutaTemporal=$_FILES['imagen']['tmp_name'];
$nombreImagen=$_FILES['imagen']['name'];
$rutaDestino=$rutaServidor.'/'.$nombreImagen;
move_uploaded_file($rutaTemporal, $rutaDestino);
$descrip=$_POST['descripcion'];
$org=$_POST['txtid'];
$sql="INSERT INTO datos( org_id,ruta,descripcion ) values ('".$org."','".$rutaDestino."','".$descrip."') ";
$resp=  mysql_query($sql,$cn);
if($resp){
    echo "<script> alert('Insercion con exito');</script>";
    
    
    $consul=  mysql_query("Select * from datos where org_id='2' ");
while($filas=  mysql_fetch_array($consul)){
$ruta=$filas['ruta'];
$desc=$filas['descripcion'];
    
?>
<?php echo $desc;?> <br>

<img src="<?php echo $ruta;?>" width="50" height="50"> <br>
<?php
}
    
    
    
}
else
{
    echo "<script> alert('No se pudo insertar');</script>";

    
}
                    
                }
         
         
         
         
         
         
     }
        
        
        
        
        
        ?>


  <form name="image" id="subeima" action="" method="post" enctype="multipart/form-data">
        <table border="2">


            <input type="hidden" name="txtid" value="<?php echo $var?>"/>


<tr>
<td>Description</td>
<td><input type="text" name="descripcion"  /></td>
</tr>
<tr>
<td>Image</td>
<td><input type="file" name="imagen"  /></td>
</tr>

<tr>

    <td><input   id="submit" type="submit" name="btn1"  value="Aceptar"/></td>
    <input id="cancel" type="button" value ="Cancelar" />
</tr>
        </table>
        </form>
