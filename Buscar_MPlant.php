
<?php 


include("bdConnection.php");

require'class/sessions.php';
$objses = new Sessions();
$objses->init();

$user = isset($_SESSION['user']) ? $_SESSION['user'] : null ;

$sql1="SELECT lab.id_lab FROM user,lab WHERE user.Name ='$user' AND user.lab=lab.id_lab";		
		$cs1=mysql_query($sql1,$cn);
                
		while($resul=mysql_fetch_array($cs1)){
			$consul2=$resul[0];
			}
?>
    
<center>
            <div id="bus">
        <table  bgcolor="white" >
       <tr align="center">
           <td><b>Name</b></td>
        <td>
            <input class="caja" type="text" id="buscar" name="buscar" ></td>
         
        <input class="Boton1" type="submit" name="btn1" value="Buscar" align="center">
       </tr>
        </table> 
            </div>
            
            </center>
   


<?php

$sql = "select Common_Name from plant_info where lab='$consul2'";
$res = mysql_query($sql);
$arreglo_php = array(); 
if(mysql_num_rows($res)==0)
   array_push($arreglo_php, "No hay datos");
else{
  while($palabras = mysql_fetch_array($res)){
    array_push($arreglo_php, $palabras["Common_Name"]);
  }
}


?>


<script>
  $(function(){
    var autocompletar = new Array();
    <?php //Esto es un poco de php para obtener lo que necesitamos
     for($p = 0;$p < count($arreglo_php); $p++){ //usamos count para saber cuantos elementos hay ?>
       autocompletar.push('<?php echo $arreglo_php[$p]; ?>');
     <?php } ?>
     $("#buscar").autocomplete({ //Usamos el ID de la caja de texto donde lo queremos
       source: autocompletar //Le decimos que nuestra fuente es el arreglo
     });
  });
</script>


<script>
    