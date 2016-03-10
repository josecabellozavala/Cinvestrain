<?php
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
?>
<script type="text/javascript">
    

  function mostrar(id) {
    if (id == "Smooth") {
         $("#desdeotro").hide();
         $("#desdeotro").hide();
    }
     if (id == "Rough") {
         $("#desdeotro").show();
         $("#desdeotro1").hide();
    }
     if (id == "Mucoid") {
         $("#desdeotro1").show();
         $("#desdeotro").hide();
    }
    }
 
function mostrarReferencia(){
//Si la opcion con id Conocido_1 (dentro del documento > formulario con name fcontacto >     y a la vez dentro del array de Conocido) esta activada
if (document.client.peso[1].checked == true) {
//muestra (cambiando la propiedad display del estilo) el div con id 'desdeotro'
document.getElementById('desdeotro').style.display='block';
document.getElementById('desdeotro1').style.display='none';

//por el contrario, si no esta seleccionada
} else {
//oculta el div con id 'desdeotro'
document.getElementById('desdeotro').style.display='none';
}
}
-->

 function mostrarReferencia1(){
//Si la opcion con id Conocido_1 (dentro del documento > formulario con name fcontacto >     y a la vez dentro del array de Conocido) esta activada
if (document.client.peso[2].checked == true) {
//muestra (cambiando la propiedad display del estilo) el div con id 'desdeotro'
document.getElementById('desdeotro1').style.display='block';
document.getElementById('desdeotro').style.display='none';
//por el contrario, si no esta seleccionada
} else {
//oculta el div con id 'desdeotro'
document.getElementById('desdeotro1').style.display='none';

}
}

 function mostrarReferencia2(){
//Si la opcion con id Conocido_1 (dentro del documento > formulario con name fcontacto >     y a la vez dentro del array de Conocido) esta activada
if (document.client.peso[0].checked == true) {
//muestra (cambiando la propiedad display del estilo) el div con id 'desdeotro'
document.getElementById('desdeotro1').style.display='none';
document.getElementById('desdeotro').style.display='none';
//por el contrario, si no esta seleccionada
} else {
//oculta el div con id 'desdeotro'
document.getElementById('desdeotro1').style.display='none';

}
}
-->    
     
     
        </script>
<h3>Add new Surface Morphology</h3>
    
<form action="javascript: fn_agregar();" method="post" id="frm_per">
    <table class="formulario">
        <tbody>
            <tr>
                <td>* Name</td>
                <td> <input type="text" name="name" id="name"  class="cajas" > </td>
                </tr>
            <tr>
                <td>* Form</td>
                <td>
                     <select name="usu_per" id="usu_per"  class="cajas">
<option>Punctiform</option>
<option>Circular</option>
<option>Filamentous</option>
<option>Irregular</option>
<option>Rhizoid</option>
<option>Spindle</option>
<option >Sick</option>
</select>
                    
                    </td>
            </tr>
            <tr>
                <td>* Elevation</td>
                <td>
                    
                    
                    <select name="nom_per" id="nom_per" class="cajas">
<option>flat</option>
<option>raised</option>
<option>convex</option>
<option>pulvinate</option>
<option >umbonate</option>
</select>
                   </td>
            </tr>
            <tr>
                <td>*Margin</td>
                <td>
                    <select name="ape_per" id="ape_per" class="cajas">
           
<option>entire</option>
<option>undulate</option>
<option>obate</option>
<option>erose</option>
<option>filamentous</option>
<option >curled</option>
</select>
                    

                </td>
                   
            </tr>
             <tr>
                <td>Appereance</td>
              
   <td>
       <select name="comp" id="comp" onChange="mostrar(this.value);" class="cajas">
 <option value="Smooth">Smooth</option>
<option value="Rough">Rough</option>
<option value="Mucoid">Mucoid</option>
</select>
      
   
   </td>
               
                   
            </tr>
                 <tr>
                
              
   <td>
       
       
         <div id="desdeotro" style="display:none;">
         <select name="ster" id="ster" onChange="mostrar(this.value);" class="cajas">
            
 <option value="Dull">Dull</option>
<option value="Bumpy">Bumpy</option>
<option value="Granular">Granular</option>
<option  value="Matte surface">Matte surface</option>
</select>
    
    </div>
    
    <div id="desdeotro1" style="display:none;  ">
     <select name="ster" id="ster" onChange="mostrar(this.value); " class="cajas">
        
<option value="Slimy">Slimy</option>
<option value="Gummy">Gummy</option>
</select>   
    
    </div>
    
     
       
       
       
       
   
   </td>
               
                   
            </tr>
            <tr>
                <td>Pigmentation</td>
                   <td>
                <select name="ph" id="ph" class="cajas">
            
            <option value="Colony has pigmentation">Colony has pigmentation</option>
<option value="Colony secretes diffusible pigments" >Colony secretes diffusible pigments</option>
</select>
                       </td>
                
            </tr>
               <tr>
                <td>Color</td>
              
   <td>
       <input type="text" name="colo" id="colo"  class="cajas" size="40">
        
   
   </td>
               
                   
            </tr>
        <td><input name="ide_pai" type="hidden" id="ape_per" size="40"  /></td>
            <tr>
               
<!--                <td><input name="email_per" type="hidden" id="email_per" size="30" value="<?php echo $consul2; ?>"  /></td>-->
            </tr>
        </tbody>
         </table>
      <table>
          
  <tr id="lab" style="display:none">         

	  <td>Lab </td>
             <td>
               <?php 
        $sqlk="SELECT Name FROM lab WHERE id_lab='$consul2'";		
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
              
          
              
               
                    <input  class="button1"name="agregar" type="submit" id="agregar" value="Add" />
                    <input name="cancelar" class="button2" type="button" id="cancelar" value="Cancel" onclick="fn_cerrar();" />
         
            
        </tfoot>
         </center>
   
</form>
<script language="javascript" type="text/javascript">
	$(document).ready(function(){
		$("#frm_per").validate({
			rules:{
				usu_per:{
					required: true,
					remote: "ajax_verificar_usu_per.php"
				}
			},
			messages: {
				usu_per: "x"
			},
			onkeyup: false,
			submitHandler: function(form) {
				var respuesta = confirm('Are sure to add this record?')
				if (respuesta)
					form.submit();
			}
		});
	});
	
	function fn_agregar(){
		var str = $("#frm_per").serialize();
		$.ajax({
			url: 'ajax_agregar.php',
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