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
	$sql = sprintf("select * from medium where Medium_ID=%d",
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
<h3>Update Medium</h3>

<form action="javascript: fn_modificar();" method="post" id="frm_per" name="frm_per">
	<input type="hidden" id="ide_per" name="ide_per" value="<?=$rs_per['Medium_ID']?>" />
    <table class="formulario">
        <tbody>
            
              
            <tr>
                <td>*Name</td>
                <td><input name="usu_per" type="text" id="usu_per" size="40" class="cajas" value="<?=$rs_per['Name']?>" required  /></td>
            </tr>
            <tr>
                <td>*Alias</td>
                <td><input name="nom_per" type="text" id="nom_per" size="40" class="cajas" value="<?=$rs_per['Alias']?>" required  /></td>
            </tr>
             
              <tr>
                <td>Type</td>
                <td>
                   <select name="ape_per"  id="ape_per" >
                       <option><?=$rs_per['Type']?></option>
 <option >Solid</option>
 <option >Liquid</option>
 </select>
                </td>
                   
            </tr>
             <tr>
                <td>Components</td>
              
                <td><input name="comp" type="text" id="comp" size="40" class="cajas" value="<?=$rs_per['Components']?>" /></td>
               
                   
            </tr>
                 <tr>
                <td>Sterilization</td>
              
                <td><input name="ster" type="text" id="ster" size="40" class="cajas"  value="<?=$rs_per['Sterilization']?>"/></td>
               
                   
            </tr>
            <tr>
                <td>PH</td>
              
                <td><input name="ph" type="text" id="ph" size="40" class="cajas"  value="<?=$rs_per['PH']?>"/></td>
               
                   
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
<?php 
if($consul1=="Supermanager"){
    
     
    
    ?>
<script type="text/JavaScript">
    
    document.getElementById('lab').style.display='block';
   
        
      
    </script>
<?php   
}
?>
<script language="javascript" type="text/javascript">
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