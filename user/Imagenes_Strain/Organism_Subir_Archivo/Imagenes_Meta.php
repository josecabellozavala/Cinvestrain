<?php 
   $var=$_POST['ide_per'];
   ?>

<form name="document" id="subeima" action="" method="post" enctype="multipart/form-data">
        <table border="2">


            <input type="hidden" name="table" value="Metabolic"/>
            <input type="hidden" name="orga" value="<?php echo $var?>"/>
            <h1>Metabolic Data</h1>
<tr>
<td>Description</td>
<td><input class="cajas" type="text" name="descripcion" required /></td>
</tr>
<tr>
<td>Document</td>
<td><input class="cajas" type="file" name="doc"  required/></td>
</tr>
<tr>
<td>Type</td>
<td><select  class="cajas" name="cbotype">
<option>Fractionation_strategy</option>
<option > Chromatograms</option>
<option>Mass_spectra</option>
<option >  NMR</option>
</select></td>
</tr>
<tr>

    <td><input class="button1" type="submit" name="btnquinto"  value="Add"/></td>
    <td><input name="cancelar" class="button2" type="button" id="cancelar" value="Cancel" onclick="fn_cerrar();" /></td>
</tr>
        </table>
        </form>

    <?php
     if(isset($_POST["btnquinto"])){
         
         	$btn=$_POST["btnquinto"];
                if($btn=="Add"){
                 
                    $rutaServidor='Documents_Strain';
$rutaTemporal=$_FILES['doc']['tmp_name'];
$nombreImagen=$_FILES['doc']['name'];
$rutaDestino=$rutaServidor.'/'.$nombreImagen;
move_uploaded_file($rutaTemporal, $rutaDestino);
$descrip=$_POST['descripcion'];

$name_or=$_POST['orga'];
$ty=$_POST['cbotype'];
$ta=$_POST['table'];
$sql="INSERT INTO document( Name_doc,Org_ID,tabla,ruta,type) values ('".$descrip."','".$name_or."','".$ta."','".$rutaDestino."','".$ty."') ";
$resp=  mysql_query($sql,$cn);
if($resp){
 echo "<script> $.bootstrapGrowl('It was inserted correctly'); </script>";
    
    
    
    
}

                    
                }
         
         
         
         
         
         
     }
        
        
        
        
        
        ?>