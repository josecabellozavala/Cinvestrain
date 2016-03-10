   <?php 
   $var=$_POST['ide_per'];
   ?>

<link rel="stylesheet" type="text/css" href="Pantalla.css" />

<form name="image" id="subeima" action="" method="post" enctype="multipart/form-data">
        <table border="2">


            <input type="hidden" name="txtid" value="<?php echo $var?>"/>
   <input type="hidden" name="txttabla" value="organismo"/>
   <h1>Organism information</h1>
<tr>
<td>Description</td>
<td><input  class="cajas" type="text" name="descripcion" required /></td>
</tr>
<tr>
<td>Image</td>
<td><input  class="cajas" type="file" name="imagen"  required/></td>
</tr>
 

        </table>
    <tr>

    <td><input  class="button1" type="submit" name="btnterceri"  value="Add"/></td>
     <td><input name="cancelar" class="button2" type="button" id="cancelar" value="Cancel" onclick="fn_cerrar();" /></td>
</tr>
        </form>
<?php


     if(isset($_POST["btnterceri"])){
         
         	$btn=$_POST["btnterceri"];
                if($btn=="Add"){
                
                    $rutaServidor='Ima';
$rutaTemporal=$_FILES['imagen']['tmp_name'];
$nombreImagen=$_FILES['imagen']['name'];
$rutaDestino=$rutaServidor.'/'.$nombreImagen;
move_uploaded_file($rutaTemporal, $rutaDestino);
if( $nombreImagen=="")
{

      echo "<script> alert('No insertado'); </script>";
    
}

else{
    global  $rutaServidor,$rutaTemporal,$nombreImagen,$rutaDestino;
    
$descrip=$_POST['descripcion'];
$org=$_POST['txtid'];
$tabla=$_POST['txttabla'];
$sql="INSERT INTO datos( org_id,tabla,ruta,descripcion ) values ('".$org."','".$tabla."','".$rutaDestino."','".$descrip."') ";
$resp=  mysql_query($sql,$cn);
if($resp){
  
    echo "<script> alert('It was inserted correctly'); </script>";
    
    

}

}

                    
                }
         
         
         
         
         
         
     }
        
        
        
        
        
        ?>   
  