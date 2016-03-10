
<?php 
   $var=$_POST['ide_per'];
   ?>
<form name="image" id="subeima" action="" method="post" enctype="multipart/form-data">
        <table border="2">


            <input type="hidden" name="txtid" value="<?php echo $var?>"/>
            <input type="hidden" name="metid" value="bio" />

            <h1>Bioassays</h1>
<tr>
<td>Description</td>
<td><input class="cajas" type="text" name="descripcion" required  /></td>
</tr>
<tr>
<td>Image</td>
<td><input class="cajas" type="file" name="doc"  required/></td>
</tr>

<tr>

    <td><input class="button1" type="submit" name="btnsext"  value="Add"/></td>
    <td><input name="cancelar" class="button2" type="button" id="cancelar" value="Cancel" onclick="fn_cerrar();" /></td>
</tr>
        </table>
        </form>
    </div>
        <?php
     if(isset($_POST["btnsext"])){
         
         	$btn=$_POST["btnsext"];
                if($btn=="Add"){
                
                    $rutaServidor='Ima';
$rutaTemporal=$_FILES['doc']['tmp_name'];
$nombreImagen=$_FILES['doc']['name'];
$rutaDestino=$rutaServidor.'/'.$nombreImagen;
move_uploaded_file($rutaTemporal, $rutaDestino);
$descrip=$_POST['descripcion'];
$org=$_POST['txtid'];
$tabla=$_POST['metid'];
$sql="INSERT INTO document( Name_doc,Org_ID,tabla,ruta) values ('".$descrip."','".$org."','".$tabla."','".$rutaDestino."') ";
$resp=  mysql_query($sql,$cn);
if($resp){
     echo "<script> $.bootstrapGrowl('It was inserted correctly'); </script>";
    
    
    
    
}
                 
                }
         
         
         
         
         
         
     } 
        
        
        
        
        
        ?>
