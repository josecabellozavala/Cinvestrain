<?php
	if(empty($_POST['ide_per'])){
		echo "Por favor no altere el fuente";
		exit;
	}

	include "../extras/php/basico.php";
	include "../../../../bdConnection.php";
          require'../extras/class/sessions.php';
          
        $objses = new Sessions();
              $objses->init();
          $user = isset($_SESSION['user']) ? $_SESSION['user'] : null ;
  
          
          $sql="SELECT Type FROM user, role WHERE user.Name = '$user' AND user.Role = role.Type";		
		$cs=mysql_query($sql,$cn);
                
		while($resul=mysql_fetch_array($cs)){
			$consul1=$resul[0];
			
			
			}
                         $sql1="SELECT lab.id_lab FROM user,lab WHERE user.Name ='$user' AND user.lab=lab.id_lab";		
		$cs1=mysql_query($sql1,$cn);
                
		while($resul=mysql_fetch_array($cs1)){
			$consul2=$resul[0];
                          
			}
	$sql = sprintf("select * from strain where Strain_ID=%d",
		(int)$_POST['ide_per']
	);
	$per = mysql_query($sql);
	$num_rs_per = mysql_num_rows($per);
	if ($num_rs_per==0){
		echo "No records";
		exit;
	}
	
	$rs_per = mysql_fetch_assoc($per);
	
?>
<script type="text/javascript">
    
 
 
 <!--
function mostrarReferencia(){
//Si la opcion con id Conocido_1 (dentro del documento > formulario con name fcontacto >     y a la vez dentro del array de Conocido) esta activada
if (document.frm_per.nom_per[4].checked == true) {
//muestra (cambiando la propiedad display del estilo) el div con id 'desdeotro'
document.getElementById('desdeotro').style.display='block';
//por el contrario, si no esta seleccionada
} else {
//oculta el div con id 'desdeotro'
document.getElementById('desdeotro').style.display='none';
}
}
-->

     
        </script>
<h3>Update Strain</h3>

<form action="javascript: fn_modificar();" method="post" id="frm_per" name="frm_per">
	<input type="hidden" id="ide_per" name="ide_per" value="<?=$rs_per['Strain_ID']?>" />
    <table class="formulario">
        <tbody>
              <tr>
                <td>Alias</td>
                <td><input name="S_Alias" type="text" id="S_Alias" size="25" class="cajas" value="<?=$rs_per['Alias']?>" required /></td>
            </tr>
            
             <tr>
                <td>Name</td>
                <td><input name="S_name" type="text" id="S_name" size="25" class="cajas" value="<?=$rs_per['Nombre']?>"  /></td>
            </tr>
           
              <tr>
                <td>Type of bacteria</td>
                <td><input name="S_type" type="text" id="S_type" size="25" class="cajas" value="<?=$rs_per['Tipo_Bacteria']?>"  /></td>
            </tr>
            <tr>
                <td>Storage mean</td>
                <td><input name="S_storageM" type="text" id="S_storageM" size="25" class="cajas" value="<?=$rs_per['Medio_Almacenamiento']?>"   /></td>
            </tr>
             <tr>
             <tr>
                <td>Storage</td>
                <td>
                    
                  <?php 
                    $sql="SELECT * FROM storage where lab='$consul2'"; 
                           $result=mysql_query($sql); 
        if ($row = mysql_fetch_array($result)){ 
            $stora=$rs_per['storage'];
                
               $sqllab="SELECT Alias FROM storage WHERE Storage_ID='$stora'";		
		$cslab=mysql_query($sqllab,$cn);
            while($resullab=mysql_fetch_array($cslab)){
			$consullab=$resullab[0];
			}
echo '<select name= "storage" id="storage"  class="cajas">';
echo '<option value= "'.$stora.'">'.$consullab.'</option>';
do { 
       echo '<option value= "'.$row["Storage_ID"].'">'.$row["Alias"].'</option>';
} while ($row = mysql_fetch_array($result)); 
echo '</select>';

}
                     ?>
                </td>
            </tr>
    <tr>
                <td>Container</td>
                <td><input name="S_container" type="text" id="S_container" size="25" class="cajas" value="<?=$rs_per['contenedor']?>"  /></td>
            </tr>
      
  <tr>
                <td>Comments</td>
                <td><input name="S_comment" type="text" id="S_comment" size="25" class="cajas" value="<?=$rs_per['Comment']?>"  /></td>
            </tr>
 
        
              
            
           
           
        </tbody>
        
    </table>
         <table>
          
  <tr id="lab" style="display:none">         

	  <td>Lab </td>
             <td>
               <?php 
               $LAB=$rs_per['lab'];
        $sqlk="SELECT Name FROM lab WHERE id_lab=' $LAB'";		
		$cs3=mysql_query($sqlk,$cn);
                
		while($resul=mysql_fetch_array($cs3)){
			$consulLab=$resul[0];
                        }
         echo" <select name=email_per id=email_per> "; 

                             $sql="SELECT Name FROM lab"; 
                           $result=mysql_query($sql,$cn); 
                           $i=0; 
              echo "<option value=".$consulLab.">".$consulLab."</option>\n";
                 while ($row=mysql_fetch_row($result)) 
                      { 
              echo "<option value=".$row[$i].">".$row[$i]."</option>\n"; 
                       } 
                  echo "</select> "; 
                     ?>
                 </td>
              
                 </tr>
        
        </table>
        <center>
        <tfoot>
            
        <input name="modificar" class="button1" type="submit" id="modificar" value="Update" />
        <input class="button2" name="cancelar" type="button" id="cancelar" value="Cancel" onclick="fn_cerrar();" />
            
        </tfoot>
        </center>
</form>
<script language="javascript" type="text/javascript">
	$(document).ready(function(){
		$("#frm_per").validate({
			submitHandler: function(form) {
				var respuesta = confirm('DO you want to modify the record?')
				if (respuesta)
					form.submit();
			}
		});
	});
	
	function fn_modificar(){
		var str = $("#frm_per").serialize();
		$.ajax({
			url: 'ajax_modificar.php',
			data: str,
			type: 'post',
			success: function(data){
				if(data != "")
					alert(data);
				fn_cerrar();
				fn_buscar();
			}
		});
	};
</script>
 <?php 
if($consul1=="Supermanager"){
    
     
    
    ?>
<script type="text/JavaScript">
    
    document.getElementById('lab').style.display='block';
   
        
      
    </script>
<?php   
}
?>