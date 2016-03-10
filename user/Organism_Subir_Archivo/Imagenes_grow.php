 <?php 
   $var=$_POST['ide_per'];
   ?>
<form name="document" id="subeima" action="" method="post" enctype="multipart/form-data">
        <table border="2">


           
            <input type="hidden" name="orga" value="<?php echo $var?>"/>
            <input type="hidden" name="txttabla" value="grow"/>
<h1>Growth characteristics</h1>
<tr>
<td>Description</td>
<td><input class="cajas" type="text" name="descripcion" required /></td>
</tr>
<tr>
<td>Document</td>
<td><input  class="cajas" type="file" name="doc" required /></td>
</tr>

<tr>

    <td><input class="button1" type="submit" name="btndocuart"  value="Add"/></td>
    <td><input name="cancelar" class="button2" type="button" id="cancelar" value="Cancel" onclick="fn_cerrar();" /></td>
</tr>
        </table>
        </form>

<?php
     if(isset($_POST["btndocuart"])){
         
         	$btn=$_POST["btndocuart"];
                if($btn=="Add"){
                
                    $rutaServidor='Documents_Strain';
$rutaTemporal=$_FILES['doc']['tmp_name'];
$nombreImagen=$_FILES['doc']['name'];
$rutaDestino=$rutaServidor.'/'.$nombreImagen;
move_uploaded_file($rutaTemporal, $rutaDestino);
$descrip=$_POST['descripcion']; 
$org=$_POST['txtid'];
$name_or=$_POST['orga'];
$tab=$_POST['txttabla'];
$sql="INSERT INTO document( Name_doc,Org_ID,tabla,ruta) values ('".$descrip."','".$name_or."','".$tab."','".$rutaDestino."') ";
$resp=  mysql_query($sql,$cn);
if($resp){
   echo "<script> $.bootstrapGrowl('It was inserted correctly'); </script>"; 
   
    
    
}
                 
                }
         
         
         
         
         
         
     }
        
        
        
        
        
        ?>
