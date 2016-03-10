

<?php
	include "../../../../bdConnection.php";
           require'../extras/class/sessions.php';
$objses = new Sessions();
$objses->init();
               $user = isset($_SESSION['user']) ? $_SESSION['user'] : null ;
        
               
               $fecha = date('Y-m-j');
$fechaMax = strtotime ( '-1 day' , strtotime ( $fecha ) ) ;
$fechaMax = date ( 'Y-m-j' , $fechaMax );

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
  
         
   function MyC(){
                                
                         document.getElementById('producto').style.display='block';         
                                
                            }
  function mostrar(id) {
    if (id == "Host_associated") {
                 document.getElementById('producto').style.display='none'; 
                     
          $( "#proveedor" ).load( "Select_host.php" );
 
			
                                	$("#proveedor").change(function(){
					var nom= $("#proveedor").val();
					$.get("Select_tipo_host.php",{par:nom})
					.done(function(data){
						$("#producto").html(data);
					})
			 	})
    
           
          
         
    }
     if (id == "Plant_associated") {
      
               $("#comboPlant").show(); 
                document.getElementById('producto').style.display='none'; 
               $( "#proveedor" ).load( "Select_Plant.php" );

				$("#proveedor").change(function(){
					var id = $("#proveedor").val();
					$.get("Select_tissue.php",{param_id:id})
					.done(function(data){
						$("#producto").html(data);
					})
			 	})
 
    
    }
     if (id == "Free_living") {
        
                document.getElementById('producto').style.display='none'; 
               $( "#proveedor" ).load( "Select_Free.php" );

			 
                                	$("#proveedor").change(function(){
					var n= $("#proveedor").val();
					$.get("Select_tipo_free.php",{pr:n})
					.done(function(data){
						$("#producto").html(data);
					}) 
			 	})
    }
     if (id == "Unknown") {
        
               var $this = $('#ape_per');

// Remove the attribute...
$this.removeAttr('required');

   var $this1 = $('#proveedor');

// Remove the attribute...
$this1.removeAttr('required');

   var $this2 = $('#producto');

// Remove the attribute...
$this2.removeAttr('required');
    }
    
    }
 

     function ComprobarOrigen(){
          
          
          if(valor=="No"){
             
        
      }
     }
        </script>

<h3>Add new Organism</h3>
    
<form action="javascript: fn_agregar();" method="post" id="frm_per">
    <table class="formulario">
        <tbody>
            <tr> 
                <td>*Alias</td>
                <td><input name="usu_per" type="text" id="usu_per" size="40" required /></td>
            </tr>
            <tr>
                <td>Isolated by</td>
                <td>
                     <?php 
        
                     
                           $sql="SELECT * FROM user where lab='$consul2'"; 
                           $result=mysql_query($sql); 
        if ($row = mysql_fetch_array($result)){ 
echo '<select name= "nom_per" id="nom_per"  class="cajas">';
do { 
       echo '<option value= "'.$row["User_ID"].'">'.$row["Name"].'</option>';
} while ($row = mysql_fetch_array($result)); 
echo '</select>';

}
                    
        
         
                     ?>
                    </td>
            </tr>
            <br>
             
                  
        <td>
            <input class="cajas"  type="hidden" name="storage" value="1"   />
       
        </td>
        
       
            <tr >
                <td>Sample Origin</td>
                <td>
                   <select name="ape_per"  id="ape_per" onChange="mostrar(this.value);" required >
                       <option value="">Select</option>
 <option value="Plant_associated">Plant-associated</option>
<option value="Host_associated">Host-associated</option>
<option value="Free_living">Free-living</option> 
<option value="Unknown">Unknown</option> 
 </select>
                    
                    
                </td>
                   
            </tr>
     
            <table >   
        <td>Sample Name</td>
        <td>
               
            <select id="proveedor"  name="proveedor" onchange="MyC();" required >
			<option value="">Select</option>  
		</select>
            

                     
        
    
        
          </td>
              <td>Level</td>
              <td>
            <select id="producto"  name="producto" required >
                <option value="">Select</option>
	     		
		</select>

           
            
    
    
   </td>

    
      </table>
             
                
              
            
            

                     
        
    
        
         
 
               

           
         
    
    
   
<tr>
                <td>Date of Isolation</td>
              
                <td><input  type="date" name="comp"  id="comp"   ></td>
               
                   
            </tr>
                 <tr>
                    
                <td>Comments</td>
              
   <td>
       <textarea  class="estArea1" name="ster"  id="ster" rows="2" cols="30">
                    </textarea>
      
   </td>
               
                   
            </tr>
            <tr>
                
              
                <td><input name="ph" type="hidden" id="ph" size="40" value="1"/></td>
               
                   
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
                                    fn_cerrar();
				fn_buscar();
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
