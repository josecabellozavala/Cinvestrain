<?php
	if(empty($_POST['ide_per'])){
		echo "Por favor no altere el fuente";
		exit;
	}

	include "../extras/php/basico.php";
	include "../../../../bdConnection.php";

	$sql = sprintf("select * from lab where id_lab=%d",
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
<h3>Update Lab</h3>

<form action="javascript: fn_modificar();" method="post" id="frm_per">
	<input type="hidden" id="ide_per" name="ide_per" value="<?=$rs_per['id_lab']?>" />
    <table class="formulario">
        <tbody>
            
              
            <tr>
                <td>Name</td>
                <td><input name="usu_per" type="text" id="usu_per" size="40" class="cajas" value="<?=$rs_per['Name']?>" /></td>
            </tr>
           
          
           
           
        </tbody>
        
    </table>
        <center>
             <tfoot>
          
             <input name="modificar" class="button1"type="submit" id="modificar" value="Update" />
             <input  class="button2"name="cancelar" type="button" id="cancelar" value="Cancel" onclick="fn_cerrar();" />
            
        </tfoot>
        </center>
</form>
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