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

	$sql = sprintf("select * from soil_type where Soil_type_ID=%d",
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
<h3>Update Soil type</h3>

<form action="javascript: fn_modificar();" method="post" id="frm_per" name="frm_per">
	<input type="hidden" id="ide_per" name="ide_per" value="<?=$rs_per['Soil_type_ID']?>" />
    <table class="formulario">
        <tbody>
            
              <tr>
                <td>*Alias</td>
                <td><input name="nom_per" type="text" id="nom_per" size="40" class="cajas" value="<?=$rs_per['Alias']?>" required /></td>
            </tr>
            <tr>
                <td>*PH</td>
                <td><input name="usu_per" type="text" id="usu_per" size="40" class="cajas" value="<?=$rs_per['PH']?>" required onkeypress="return soloNumeros(this, event)"/></td>
            </tr>
            
             
              <tr>
               <td>Organic matter</td>
                <td>
                    <input type="text" name="ape_per"  id="ape_per" size="40" class="cajas"  value="<?=$rs_per['Organic_matter']?>">

                </td>
                   
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
                    <input name="cancelar" class="button2" type="button" id="cancelar" value="Cancel" onclick="fn_cerrar();" />
             
          
        </tfoot>
        </center>
</form>
<script language="javascript" type="text/javascript">


function soloNumeros(field, event){
var key, keychar;
if(window.event) 
key = window.event.keyCode;
else if(event) 
key = event.which;
else
return true;
keychar = String.fromCharCode(key);
if((key == null) || (key == 0) || (key == 8) || (key == 9) || (key == 13) || (key ==27))
return true;
else if((("0123456789").indexOf(keychar) > -1)){
window.status = "";
return true;
}
else{
alert("Only numbers!");
return false;
}
}

// FUNCION PARA VALIDAR RANGO
function rangoNumeros(numero){

if (numero >=1 & numero <=14){

}

else {
alert("The range of ph is 1-14");
document.getElementById('usu_per').value="";
}
}
	$(document).ready(function(){
		$("#frm_per").validate({
			submitHandler: function(form) {
				var respuesta = confirm('Do you want to modify the record?')
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