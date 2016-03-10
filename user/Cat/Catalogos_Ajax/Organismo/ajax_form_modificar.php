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

	$sql = sprintf("select * from organism_information where Org_ID=%d",
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
 
 

     
        </script>
<h3>Update Organism</h3>


<form action="javascript: fn_modificar();" method="post" id="frm_per" name="frm_per">
	<input type="hidden" id="ide_per" name="ide_per" value="<?=$rs_per['Org_ID']?>" />
    <table class="formulario">
        <tbody>
            
              
          <tr> 
                <td>Alias</td>
                <td><input name="usu_per" type="text" id="usu_per" size="40" value="<?=$rs_per['Alias']?>" /></td>
            </tr>
            <tr>
                <td>Isolated by</td>
                <td>
                     <?php 
        
         $sql="SELECT * FROM user where lab='$consul2'"; 
                           $result=mysql_query($sql); 
        if ($row = mysql_fetch_array($result)){ 
            $user=$rs_per['Isolated_by'];
                
               $sqllab="SELECT Name FROM user WHERE User_ID='$user'";		
		$cslab=mysql_query($sqllab,$cn);
            while($resullab1=mysql_fetch_array($cslab)){
			$consullab1=$resullab1[0];
			}
echo '<select name= "nom_per" id="nom_per"  class="cajas">';
echo '<option value= "'.$consullab1.'">'.$consullab1.'</option>';
do { 
       echo '<option value= "'.$row["User_ID"].'">'.$row["Name"].'</option>';
} while ($row = mysql_fetch_array($result)); 
echo '</select>';

}
                  
                     ?>
                    </td>
            </tr>
        
            <tr>
                
                     <td>
            <input class="cajas"  type="hidden" name="storage" value="1"   />
       
        </td>
             

            </tr>
            <tr>
                <td>Sample Origin</td>
                <td>
                    <select name="ape_per"  id="ape_per" onChange="mostrar(this.value);" required >
                       <option value="<?=$rs_per['Origin']?>"><?=$rs_per['Origin']?></option>
 <option value="Plant_associated">Plant-associated</option>
<option value="Host_associated">Host-associated</option>
<option value="Free_living">Free-living</option> 
<option value="Unknown">Unknown</option> 

 </select>
                    
                    
                </td>
                   
            </tr>
            <table>   
         <td>Sample Name</td>
        <td>
              
            <select id="proveedor"  name="proveedor" onchange="MyC();" required>
			<option value="<?=$rs_per['item']?>"><?=$rs_per['item']?></option>  
		</select>
            

                     
        
       </td>
        
         
              <td>Level</td>
                 <td>
            <select id="producto"  name="producto" required>
		<option value="<?=$rs_per['level']?>"><?=$rs_per['level']?></option>	
		</select>

           
            
    
    
   </td>

    
      </table>
             
                
              
            
            

                     
        
    
        
         
 
               

           
            
    
    
   
<tr>
                <td>Date of Isolation</td>
              
                <td><input  type="date" name="comp"  id="comp"  value="<?=$rs_per['Date_of_Isolation']?>" ></td>
               
                   
            </tr>
                 <tr>
                <td>Comments</td>
              
   <td>
       <textarea  class="estArea1" name="ster"  id="ster" rows="2" cols="30" >
<?=$rs_per['Additional_Comments']?>
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