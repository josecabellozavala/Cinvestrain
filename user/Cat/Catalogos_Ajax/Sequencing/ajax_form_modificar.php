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

	$sql = sprintf("select * from sequencing_method where Sequencing_Method_ID=%d",
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
<h3>Update Sequencing Method</h3>

<form action="javascript: fn_modificar();" method="post" id="frm_per">
	<input type="hidden" id="ide_per" name="ide_per" value="<?=$rs_per['Sequencing_Method_ID']?>" />
    <table class="formulario">
        <tbody>
             <tr>
                <td>* Name</td>
                <td>
                    <input  type="text" id="usu_per" name="usu_per" value="<?=$rs_per['Name']?>">
<!--                    <select name="usu_per"  id="usu_per" class="cajas" >
                        <option value="<?=$rs_per['Name']?>"><?=$rs_per['Name']?></option>
        <option value="Sanger">Sanger</option>
        <option value="454_Pyrosequencing">454-Pyrosequencing</option>
           <option value="Illumina">Illumina</option>
            <option value="IonTorrent">IonTorrent</option>
         </select>-->
                
                </td>
            </tr>
           
            <tr>
                <td>Description</td>
                <td>
                    <textarea class="estArea" name="ape_per"  id="ape_per"  class="cajas"  >
                    <?=$rs_per['Description']?>
                    </textarea>
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
          
             <input name="modificar" class="button1"type="submit" id="modificar" value="Update" />
             <input  class="button2"name="cancelar" type="button" id="cancelar" value="Cancel" onclick="fn_cerrar();" />
            
        </tfoot>
        </center>
</form>
<br>
<form name="SubirProtocol" method="post" action="../subida_y_precarga_ajax-master/index.php"  >
       <table>
           <input type="hidden" id="id_assay" name="id_assay" value="<?=$rs_per['Sequencing_Method_ID']?>" />
           <input type="hidden" id="type" name="type" value="Seq" />
           <input type="hidden" id="labo" name="labo" value="<?=$rs_per['lab']?>" />
    <tr>
                
               <td> <input name="CargarProtocol" class="buttonProtocol" type="submit" id="CargarProtocol" value="Load protocol" />  </td>
               
            </tr>
       </table>
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