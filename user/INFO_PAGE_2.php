
<script src="jquery-ui-1.8.9.custom.min.js">

</script>

<style>
    
    
    
</style>




<script type="text/javascript">
 function comprobar(f,t)
   {
    f=document.getElementById(f);    
    if(isNaN(f[t].value))
    
    
     {
      alert("No es un numero");
      f[t].value="";
      f[t].focus();
      return false;
     }
    else
     {
      if(f[t].value<1 || f[t].value>30)
       {
        alert("El numero debe ser mayor que 0 y menor que 31");
        f[t].value="";
        f[t].focus();
        return false;
       }
      else
       {
        return true;
       }
     }
   }




   function validar(campo,e){ 
var elcampo = document.getElementById(campo);   
e = (e) ? e : ((event) ? event : null);
var version = (e.target) ? e.target : ((e.srcElement)?e.srcElement : null );
var teclaNum = e.keyCode;
if(teclaNum != 9){
    
if((!validarNumero(elcampo.value))||(elcampo.value == "")){
elcampo.value = "";
elcampo.focus();
document.getElementById('mensaje').innerHTML = 'Debe ingresar un número';
}else{
document.getElementById('mensaje').innerHTML = '';
 
// Aqui pones el resto de las condiciones usando comparadores u operadores aritméticos, ya que estás seguro de que trabajas con números 
if ((elcampo.value < 80) || (elcampo.value > 190)){
document.getElementById('mensaje').innerHTML = 'valor no permitido';
}else{
document.getElementById('mensaje').innerHTML = '';
}
 
} // fin valida num
} // fin detectar tecla
} // fin función
 
function validarNumero(input){
return (!isNaN(input)&&parseInt(input)==input)||(!isNaN(input)&&parseFloat(input)==input);
}
    
    
  
         function validarNumero(e) { 
    tecla = (document.all) ? e.keyCode : e.which; 
    if (tecla==8) return true; //Tecla de retroceso (para poder borrar) 
    patron = /\d/; // Solo acepta números 	
    te = String.fromCharCode(tecla); 	
    return patron.test(te);  
} 
  function soloNumeros(e)
    {
        // capturamos la tecla pulsada
        var teclaPulsada=window.event ? window.event.keyCode:e.which;
 
        // capturamos el contenido del input
        var valor=document.getElementById("od_f").value;
 
        // 45 = tecla simbolo menos (-)
        // Si el usuario pulsa la tecla menos, y no se ha pulsado anteriormente
        // Modificamos el contenido del mismo añadiendo el simbolo menos al
        // inicio
        if(teclaPulsada==45 && valor.indexOf("-")==-1)
        {
            document.getElementById("od_f").value="-"+valor;
        }
 
        // 13 = tecla enter
        // 46 = tecla punto (.)
        // Si el usuario pulsa la tecla enter o el punto y no hay ningun otro
        // punto
        if(teclaPulsada==13 || (teclaPulsada==46 && valor.indexOf(".")==-1))
        {
            return true;
        }
 
        // devolvemos true o false dependiendo de si es numerico o no
        return /\d/.test(String.fromCharCode(teclaPulsada));
    }



function validar_monto(evt) {
var keyPressed = (evt.which) ? evt.which : event.keyCode
return !((keyPressed !=13) && (keyPressed != 46) && (keyPressed < 48 || keyPressed > 57));
}
			$("document").ready(function(){

				
                                
                                
                            })
                            
                            
                            
                            
                            $("document").ready(function(){

                              
                                 })
                                 
                                  $("document").ready(function(){

                               
                                 })
   function MyC(){
                                
                         document.getElementById('producto').style.display='block';         
                                
                            }
  function mostrar(id) {
    if (id == "Host") {
         $("#desdeotro").hide(); 
          $("#are0").hide(); 
          $("#desdeotro1").show();
           $("#are1").show();
         $("#desdeotro2").hide();
         $("#are2").hide();
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
     if (id == "Plant") {
         $("#desdeotro").show(); 
         $("#are0").show(); 
         $("#desdeotro1").hide();
             $("#are1").hide();
           $("#desdeotro2").hide(); 
               $("#are2").hide();
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
     if (id == "Free") {
         $("#desdeotro2").show();
             $("#are2").show();
         $("#desdeotro").hide();
             $("#are0").hide();
           $("#desdeotro1").hide(); 
               $("#are1").hide();
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
    }
 














$(function() {
  
    var index = 'key';
   
    var dataStore = window.sessionStorage;
  
    try {
      
        var oldIndex = dataStore.getItem(index);
    } catch(e) {
      
        var oldIndex = 0;
    }
    $('#tabs').tabs({
       
        active : oldIndex,
       
        activate : function( event, ui ){
          
            var newIndex = ui.newTab.parent().children().index(ui.newTab);
          
            dataStore.setItem( index, newIndex )
        }
    });
    });
     
        </script>

<link rel="stylesheet" type="text/css" href="mensajes.css" />

  
<?php 



?>





   

<head>
    <style>
        #mapa{
           
            width: 800px;
            height: 400px;
            background-color:  #00BFFF;
           
        }
          #mapaoculto{
              position: absolute;
          left:2000px; 

            width: 800px;
            height: 400px;
            background-color:  #e4b9c0;
           
        }
        #estilo1
{
    
   
                position: absolute;
          left:130px; 

            width: 800px;
            height: 400px;
            background-color:  #e4b9c0;
            
}
        #infor{
            width: 400px;
            height: 400px;
            float:left;
        }
        .ocultar
{
    
    display:none;
    
}
.mostrar
{
    
    display: inline;
}
    </style>
    



<?php

error_reporting (5); 
$fecha = date('Y-m-j');
$fechaMax = strtotime ( '-1 day' , strtotime ( $fecha ) ) ;
$fechaMax = date ( 'Y-m-j' , $fechaMax );
 include ("../bdConnection.php");
 session_start();
$var="";
$var1="";
$var2="";
$var3="";
$var4="";
$var5="";
$var6="";
$var7="";
$var8="";
$var9="";
$var10="";
$var11="";
$var12="";
$var13="";
$var14="";
$var15="";
$var16="";
$var17="";
$var18="";
$var19="";
$var20="";
$var21="";
$var22="";
$var23="";
$var24="";
$var25="";
$var26="";
$var27="";
$var28="";
$var29="";
$var30="";
$var31="";
$var32="";
$var33="";
$var34="";
$var35="";
$var36="";
$var37="";
$var38="";
$var39="";
$var40="";
$var41="";
$var42="";
$var43="";
$consul="";
$consul1="";

$var44="";
$var45="";
$var46="";
$var47="";
$var48="";
$var49="";
$var50="";
$var51="";


$var52="";
$var53="";
$var54="";
$var55="";
$var56="";
$var57="";
$var58="";
$var59="";
$var60="";
$var61="";
$var62="";
$var63="";
$var64="";
$var65="";
$var66="";
$var67="";
$var68="";
$var69="";
$var70="";
$var71="";
$var72="";
$var73="";
$var74="";
$var75="";
$var76="";
$var77="";
$var78="";
$var79="";
$var80="";
$var81="";
$var82="";
$var83="";
$var84="";
$var85="";
$var86="";
$var87="";
$var88="";
$var89="";
$var90="";
$var91="";
$var92="";
$var93="";
$var94="";
$var95="";


$var300="";
$var301="";
        $var302="";
$var303="";
$var304="";
$var305="";
$var306="";
        $var307="";
$var308="";
$var309="";
$var96="";
$var97="";
$var98="";
$var99="";
$var100="";
$var101="";
$var102="";
$var103="";
$var104="";
$var105="";
$var106="";
$var107="";
$var108="";
$var109="";
$var110="";
$var111="";
$var112="";
$var113="";
$var124="";
$var125="";
$Name_Or="";

$var114="";
$var115="";
$var116="";
$var117="";
$var118="";
$var119="";
$var120="";
$var121="";
$var500="";
$varRe="";


$var122="";
$var123="";
?>





<?php


$user = isset($_SESSION['user']) ? $_SESSION['user'] : null ;
$pu="hi";
if($pu=="hi") {
$sql="SELECT Type FROM user, role WHERE user.Name = '$user' AND user.Role = role.Type";		
		$cs=mysql_query($sql,$cn);
                
		while($resul=mysql_fetch_array($cs)){
			$consul1=$resul[0];
			
			
			} 
                        
                        }
                        

if($user == ''){
	header('Location: http://localhost:8888/designprojects/users/index.php?error=2');
}

$u="ho";
               if($u=="ho") {
                $sql="SELECT User_ID FROM user WHERE Name = '$user'";		
		$cs=mysql_query($sql,$cn);
                
		while($resul=mysql_fetch_array($cs)){
			$consul3=$resul[0];
			
                        
			
			}
                        
                                
$sql2="SELECT lab.id_lab FROM user,lab WHERE user.Name ='$user' AND user.lab=lab.id_lab";		
		$cs1=mysql_query($sql2,$cn);
                
		while($resul=mysql_fetch_array($cs1)){
			$lab=$resul[0];
			}
                        
                        }



       $sql="SELECT Alias FROM organism_information where lab='$consul2'";		
		$cs=mysql_query($sql,$cn);
$arre=array();
while($resul=mysql_fetch_array($cs)){
					
$arre[]= $resul['Alias'];  
}

$sql="SELECT Name FROM user where lab='$consul2'";		
		$cs=mysql_query($sql,$cn);
$arreIso=array();
while($resul=mysql_fetch_array($cs)){
					
$arreIso[]= $resul['Name'];  
}

$sql="SELECT Name FROM medium where lab='$consul2'";		
		$cs=mysql_query($sql,$cn);
$arreMedium=array();
while($resul=mysql_fetch_array($cs)){
					
$arreMedium[]= $resul['Name'];  
}

$sql="SELECT Form FROM surface_morphology where lab='$consul2'";		
		$cs=mysql_query($sql,$cn);
$arreSurface=array();
while($resul=mysql_fetch_array($cs)){
					
$arreSurface[]= $resul['Form'];  
}

$sql="SELECT Name FROM preservation_method where lab='$consul2'";		
		$cs=mysql_query($sql,$cn);
$arrePreserv=array();
while($resul=mysql_fetch_array($cs)){
					
$arrePreserv[]= $resul['Name'];  
}

//353059052619946

function lista($nombre, $meses){ 
    $array = $meses; 
$txt= "<select name='$nombre' id='$nombre'>"; 
for ($i=0; $i<sizeof($array); $i++){
    $txt .= "<option value='$array[$i]'>". $array[$i] . '</option>'; 
} 
$txt .= '</select>'; 
return $txt; }  

$sql="SELECT Name FROM user where lab='$consul2'";		
		$cs=mysql_query($sql,$cn);
$arrUsers=array();
while($resul=mysql_fetch_array($cs)){
					
$arrUsers[]= $resul['Name'];

}

$sql="SELECT Alias FROM storage where lab='$consul2'";		
		$cs=mysql_query($sql,$cn);
$arrStoragePres=array();
while($resul=mysql_fetch_array($cs)){
					
$arrStoragePres[]= $resul['Alias'];  
}
$sql="SELECT Name FROM extraction_method where lab='$consul2'";		
		$cs=mysql_query($sql,$cn);
$arrExtraction=array();
while($resul=mysql_fetch_array($cs)){
					
$arrExtraction[]= $resul['Name'];  
}

$sql="SELECT Name FROM gene where lab='$consul2'";		
		$cs=mysql_query($sql,$cn);
$arrGenes=array();
while($resul=mysql_fetch_array($cs)){
					
$arrGenes[]= $resul['Name'];  
}
$sql="SELECT Name FROM sequencing_method where lab='$consul2'";		
		$cs=mysql_query($sql,$cn);
$arrSeqMeth=array();
while($resul=mysql_fetch_array($cs)){
					
$arrSeqMeth[]= $resul['Name'];  
}
$sql="SELECT Name FROM assay_type where lab='$consul2'";		
		$cs=mysql_query($sql,$cn);
$arrAssay=array();
while($resul=mysql_fetch_array($cs)){
					
$arrAssay[]= $resul['Name'];  
}


$sql="SELECT Alias FROM organism_information where lab='$consul2'";		
		$cs=mysql_query($sql,$cn);
$antagosn=array();
while($resul=mysql_fetch_array($cs)){
					
$antagosn[]= $resul['Alias'];  
}



?>




 

<html> 
    <head>




    <script type="text/javascript" src="jquery-latest.js"></script>
        
        
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
   
  
 
     <!--todas las consultas-->
 <?php
 



$h="holas"; 
if($h=="holas")
 {
    		$cod=$_SESSION['sear'];
                
		
                
		$sql="select * from organism_information where Alias='$cod'";
		$cs=mysql_query($sql,$cn);
                
          
		while($resul=mysql_fetch_array($cs)){
			$var=$resul[0];
			$var1=$resul[1];
			$var2=$resul[2];
			$var3=$resul[3];
                        $Storage=$resul[4];
			$var4=$resul[5];
                        $var124=$resul[6];
                        $var125=$resul[7];
                        $var5=$resul[8];
                         $var121=$resul[9];	
                         
                      
                        
			}
                        
                        
                        
			
                     
                        
                         
    
    
                      
               $sql="select * from macroscopic_morphology where Org_ID='$var'";
		$cs=mysql_query($sql,$cn);
		
		while($resul=mysql_fetch_array($cs)){
			$var6=$resul[0];
			$var7=$resul[1];
			$var8=$resul[2];
			$var9=$resul[3];
			$var10=$resul[4];
                        $var11=$resul[5];
                        $var12=$resul[6];
                        $var13=$resul[7];
                        $var14=$resul[8];
                        $var15=$resul[9];
                        $var680=$resul[12];
			
			}
                        
                       $sql="select Macroscopic_Morphology_ID from macroscopic_morphology where Org_ID='$var'";
		$cs=mysql_query($sql,$cn);
		
		while($resul=mysql_fetch_array($cs)){
			$varMacros=$resul[0]; 
                }
               
                        
                         $varMacros=$varMacros-1;
                $sql="select * from macroscopic_morphology where Org_ID='$var' and Macroscopic_Morphology_ID='$varMacros'";
		$cs=mysql_query($sql,$cn);
		
		while($resul=mysql_fetch_array($cs)){
			
			$var330=$resul[2];
			$var331=$resul[3];
			$var332=$resul[4];
                        $var333=$resul[5];
                        $var334=$resul[6];
                        $var335=$resul[7];
                        $var336=$resul[8];
                         $var681=$resul[12];
			}
			
                         $varMacros=$varMacros-2;
                $sql="select * from macroscopic_morphology where Org_ID='$var' and Macroscopic_Morphology_ID='$varMacros'";
		$cs=mysql_query($sql,$cn);
		
		while($resul=mysql_fetch_array($cs)){
			
			$var337=$resul[2];
			$var338=$resul[3];
			$var339=$resul[4];
                        $var340=$resul[5];
                        $var341=$resul[6];
                        $var342=$resul[7];
                        $var343=$resul[8];
                         $var682=$resul[12];
			}
			        $varMacros=$varMacros-3;
                $sql="select * from macroscopic_morphology where Org_ID='$var' and Macroscopic_Morphology_ID='$varMacros'";
		$cs=mysql_query($sql,$cn);
		
		while($resul=mysql_fetch_array($cs)){
			
			$var344=$resul[2];
			$var345=$resul[3];
			$var346=$resul[4];
                        $var347=$resul[5];
                        $var348=$resul[6];
                        $var349=$resul[7];
                        $var350=$resul[8];
                           $var683=$resul[12];
			}

                                $varMacros=$varMacros-4;
                $sql="select * from macroscopic_morphology where Org_ID='$var' and Macroscopic_Morphology_ID='$varMacros'";
		$cs=mysql_query($sql,$cn);
		
		while($resul=mysql_fetch_array($cs)){
			
			$var351=$resul[2];
			$var352=$resul[3];
			$var353=$resul[4];
                        $var354=$resul[5];
                        $var355=$resul[6];
                        $var356=$resul[7];
                        $var357=$resul[8];
                        $var684=$resul[12];
			}



                $sql="select * from microscopic_morphology where Org_ID='$var' ";
		$cs=mysql_query($sql,$cn);
		
		while($resul=mysql_fetch_array($cs)){
			$var16=$resul[0];
			$var17=$resul[1];
			$var18=$resul[2];
			$var19=$resul[3];
			$var20=$resul[4];
                        $var21=$resul[5];
                        $var22=$resul[6];
                        $var23=$resul[7];
                        $var24=$resul[8];
                        $var25=$resul[9];
                        $var26=$resul[10]; 
                        $var27=$resul[11];
                        $var28=$resul[12];
			 $var685=$resul[15];
                }
                
                $sql="select Microscopic_Morphology_ID from microscopic_morphology where Org_ID='$var' ";
		$cs=mysql_query($sql,$cn);
		
		while($resul=mysql_fetch_array($cs)){
                $varMicro=$resul[0];
                
                }
                $varMicro=$varMicro-1;
                 $sql="select * from microscopic_morphology where Org_ID='$var' and Microscopic_Morphology_ID='$varMicro' ";
		$cs=mysql_query($sql,$cn);
		
		while($resul=mysql_fetch_array($cs)){
			$var358=$resul[2];
			$var359=$resul[3];
			$var360=$resul[4];
                        $var361=$resul[5];
                        $var362=$resul[6];
                        $var363=$resul[7];
                        $var364=$resul[8];
                        $var365=$resul[9];
                        $var366=$resul[10]; 
                        $var367=$resul[11];
			 $var686=$resul[15];
                }
                         $varMicro=$varMicro-2;
                 $sql="select * from microscopic_morphology where Org_ID='$var' and Microscopic_Morphology_ID='$varMicro' ";
		$cs=mysql_query($sql,$cn);
		
		while($resul=mysql_fetch_array($cs)){
			$var368=$resul[2];
			$var369=$resul[3];
			$var370=$resul[4];
                        $var371=$resul[5];
                        $var372=$resul[6];
                        $var373=$resul[7];
                        $var374=$resul[8];
                        $var375=$resul[9];
                        $var376=$resul[10]; 
                        $var377=$resul[11];
                         $var687=$resul[15];
			
                }
                $varMicro=$varMicro-3;
                 $sql="select * from microscopic_morphology where Org_ID='$var' and Microscopic_Morphology_ID='$varMicro' ";
		$cs=mysql_query($sql,$cn);
		
		while($resul=mysql_fetch_array($cs)){
			$var378=$resul[2];
			$var379=$resul[3];
			$var380=$resul[4];
                        $var381=$resul[5];
                        $var382=$resul[6];
                        $var383=$resul[7];
                        $var384=$resul[8];
                        $var385=$resul[9];
                        $var386=$resul[10]; 
                        $var387=$resul[11];
                         $var688=$resul[15];
			
                }
                  $varMicro=$varMicro-4;
                 $sql="select * from microscopic_morphology where Org_ID='$var' and Microscopic_Morphology_ID='$varMicro' ";
		$cs=mysql_query($sql,$cn);
		
		while($resul=mysql_fetch_array($cs)){
			$var388=$resul[2];
			$var389=$resul[3];
			$var390=$resul[4];
                        $var391=$resul[5];
                        $var392=$resul[6];
                        $var393=$resul[7];
                        $var394=$resul[8];
                        $var395=$resul[9];
                        $var396=$resul[10]; 
                        $var397=$resul[11];
                         $var689=$resul[15];
			
                }
                $sql="select * from growth_characteristics where Org_ID='$var'";
		$cs=mysql_query($sql,$cn);
		

		while($resul=mysql_fetch_array($cs)){
			$var29=$resul[0];
			$var30=$resul[1];
			$var31=$resul[2];
			$var32=$resul[3];
			$var33=$resul[4];
                        $var34=$resul[5];
                        $var35=$resul[6];
                        $var36=$resul[7];
                        $var37=$resul[8];
                        $var38=$resul[9];
                        $var39=$resul[10];
                        $var40=$resul[11];
                        $var41=$resul[12];
                         $var42=$resul[13];
                        $var43=$resul[14];
                         $var690=$resul[17];
			
			}
			$sql="select Growth_characteristics_ID from growth_characteristics where Org_ID='$var'";
		$cs=mysql_query($sql,$cn);
		

		while($resul=mysql_fetch_array($cs)){
			$varGrow=$resul[0];
                }
                $varGrow=$varGrow-1;
                        $sql="select * from growth_characteristics where Org_ID='$var' and Growth_characteristics_ID='$varGrow' ";
		$cs=mysql_query($sql,$cn);
		

		while($resul=mysql_fetch_array($cs)){
			
			$var398=$resul[2];
			$var399=$resul[3];
			$var400=$resul[4];
                        $var401=$resul[5];
                        $var402=$resul[6];
                        $var403=$resul[7];
                        $var404=$resul[8];
                        $var405=$resul[9];
                        $var406=$resul[10];
                        $var407=$resul[11];
                        $var408=$resul[12];
                         $var409=$resul[13];
                        
			$var691=$resul[17];
			}
                         $varGrow=$varGrow-2;
                        $sql="select * from growth_characteristics where Org_ID='$var' and Growth_characteristics_ID='$varGrow' ";
		$cs=mysql_query($sql,$cn);
		

		while($resul=mysql_fetch_array($cs)){
			
			$var410=$resul[2];
			$var411=$resul[3];
			$var412=$resul[4];
                        $var413=$resul[5];
                        $var414=$resul[6];
                        $var415=$resul[7];
                        $var416=$resul[8];
                        $var417=$resul[9];
                        $var418=$resul[10];
                        $var419=$resul[11];
                        $var420=$resul[12];
                         $var421=$resul[13];
                        $var692=$resul[17];
			
			}
                            $varGrow=$varGrow-3;
                        $sql="select * from growth_characteristics where Org_ID='$var' and Growth_characteristics_ID='$varGrow' ";
		$cs=mysql_query($sql,$cn);
		

		while($resul=mysql_fetch_array($cs)){
			
			$var422=$resul[2];
			$var423=$resul[3];
			$var424=$resul[4];
                        $var425=$resul[5];
                        $var426=$resul[6];
                        $var427=$resul[7];
                        $var428=$resul[8];
                        $var429=$resul[9];
                        $var430=$resul[10];
                        $var431=$resul[11];
                        $var432=$resul[12];
                         $var433=$resul[13];
                        $var693=$resul[17];
			
			}
                        
                         $varGrow=$varGrow-4;
                        $sql="select * from growth_characteristics where Org_ID='$var' and Growth_characteristics_ID='$varGrow' ";
		$cs=mysql_query($sql,$cn);
		

		while($resul=mysql_fetch_array($cs)){
			
			$var434=$resul[2];
			$var435=$resul[3];
			$var436=$resul[4];
                        $var437=$resul[5];
                        $var438=$resul[6];
                        $var439=$resul[7];
                        $var440=$resul[8];
                        $var441=$resul[9];
                        $var442=$resul[10];
                        $var443=$resul[11];
                        $var444=$resul[12];
                         $var445=$resul[13];
                        $var694=$resul[17];
			
			}
                $sql="select * from preservation_of_strains where Org_ID='$var'";
		$cs=mysql_query($sql,$cn);
		while($resul=mysql_fetch_array($cs)){
			$var44=$resul[0];
			$var45=$resul[1];
			$var46=$resul[2];
			$var47=$resul[3];
			$var48=$resul[4];
                        $var49=$resul[5];
                        $var50=$resul[6];
                        $var51=$resul[7];
                       $var114=$resul[8];
			}
                        
                          $sql="select Preservation_of_Strains_ID from preservation_of_strains where Org_ID='$var'";
		$cs=mysql_query($sql,$cn);
		while($resul=mysql_fetch_array($cs)){
			$varIdPres=$resul[0];
		
			}
                        $varIdPres=$varIdPres-1;
                $sql="select * from preservation_of_strains where Org_ID='$var' and Preservation_of_Strains_ID='$varIdPres'";
		$cs=mysql_query($sql,$cn);
		while($resul=mysql_fetch_array($cs)){
			$var300=$resul[0];
			$var301=$resul[1];
			$var302=$resul[2];
			$var303=$resul[3];
			$var304=$resul[4];
                        $var305=$resul[5];
                        $var306=$resul[6];
                        $var307=$resul[7];
                       $var308=$resul[8];
			}   
                        
                                  $varIdPres=$varIdPres-2;
                $sql="select * from preservation_of_strains where Org_ID='$var' and Preservation_of_Strains_ID='$varIdPres'";
		$cs=mysql_query($sql,$cn);
		while($resul=mysql_fetch_array($cs)){
			$var309=$resul[0];
			$var310=$resul[1];
			$var311=$resul[2];
			$var312=$resul[3];
			$var313=$resul[4];
                        $var314=$resul[5];
                        $var315=$resul[6];
                        $var316=$resul[7];
                       $var317=$resul[8];
			} 
                        
                        $varIdPres=$varIdPres-3;
                $sql="select * from preservation_of_strains where Org_ID='$var' and Preservation_of_Strains_ID='$varIdPres'";
		$cs=mysql_query($sql,$cn);
		while($resul=mysql_fetch_array($cs)){
			$var318=$resul[0];
			$var319=$resul[1];
			$var320=$resul[2];
			$var321=$resul[3];
			$var322=$resul[4];
                        $var323=$resul[5];
                        $var324=$resul[6];
                        $var325=$resul[7];
                       $var326=$resul[8];
			} 
                        $varIdPres=$varIdPres-4;
                $sql="select * from preservation_of_strains where Org_ID='$var' and Preservation_of_Strains_ID='$varIdPres'";
		$cs=mysql_query($sql,$cn);
		while($resul=mysql_fetch_array($cs)){
			$var327=$resul[0];
			$var328=$resul[1];
			$var329=$resul[2];
			$var600=$resul[3];
			$var601=$resul[4];
                        $var602=$resul[5];
                        $var603=$resul[6];
                        $var604=$resul[7];
                       $var605=$resul[8];
			} 
                        
                        $sql="select * from dna where Org_ID='$var'";
		$cs=mysql_query($sql,$cn);
		while($resul=mysql_fetch_array($cs)){
			$var52=$resul[0];
			$var53=$resul[1];
			$var54=$resul[2];
			$var55=$resul[3];
			$var56=$resul[4];
                        $var57=$resul[5];
                        $var58=$resul[6];
                        $var59=$resul[7];
                       
			}
                        
                         $sql="select DNA_ID from dna where Org_ID='$var'";
		$cs=mysql_query($sql,$cn);
		while($resul=mysql_fetch_array($cs)){
			$varMDNA=$resul[0];
	
			}
                        $varMDNA=$varMDNA-1;
                         $sql="select * from dna where Org_ID='$var' and DNA_ID='$varMDNA'";
		$cs=mysql_query($sql,$cn);
		while($resul=mysql_fetch_array($cs)){
			$var446=$resul[2];
			$var447=$resul[3];
			$var448=$resul[4];
                        $var449=$resul[5];
                        $var450=$resul[6];
                        $var451=$resul[7];
                       
			}
                        
                          $varMDNA=$varMDNA-2;
                         $sql="select * from dna where Org_ID='$var' and DNA_ID='$varMDNA'";
		$cs=mysql_query($sql,$cn);
		while($resul=mysql_fetch_array($cs)){
			$var452=$resul[2];
			$var453=$resul[3];
			$var454=$resul[4];
                        $var455=$resul[5];
                        $var456=$resul[6];
                        $var457=$resul[7];
                       
			}
                        
                            $varMDNA=$varMDNA-3;
                         $sql="select * from dna where Org_ID='$var' and DNA_ID='$varMDNA'";
		$cs=mysql_query($sql,$cn);
		while($resul=mysql_fetch_array($cs)){
			$var458=$resul[2];
			$var459=$resul[3];
			$var460=$resul[4];
                        $var461=$resul[5];
                        $var462=$resul[6];
                        $var463=$resul[7];
                       
			}
                        
                          $varMDNA=$varMDNA-4;
                         $sql="select * from dna where Org_ID='$var' and DNA_ID='$varMDNA'";
		$cs=mysql_query($sql,$cn);
		while($resul=mysql_fetch_array($cs)){
			$var464=$resul[2];
			$var465=$resul[3];
			$var466=$resul[4];
                        $var467=$resul[5];
                        $var468=$resul[6];
                        $var469=$resul[7];
                       
			}
                        
                        
              $sql="select * from genetic_data where Org_ID='$var'";
		$cs=mysql_query($sql,$cn);
		while($resul=mysql_fetch_array($cs)){
			$var60=$resul[0];
			$var61=$resul[1];
			$var62=$resul[2];
			$var63=$resul[3];
			$var64=$resul[4];
                        $var65=$resul[5];
                        $var66=$resul[6];
                       $var695=$resul[7];
                       
			}
                        
                        $sql="select Genetic_Data_ID from genetic_data where Org_ID='$var'";
		$cs=mysql_query($sql,$cn);
		while($resul=mysql_fetch_array($cs)){
			$varGenetic=$resul[0];
                       
			}
                        $varGenetic=$varGenetic-1;
                        $sql="select Genetic_Data_ID from genetic_data where Org_ID='$var' and Genetic_Data_ID='$varGenetic' ";
		$cs=mysql_query($sql,$cn);
		while($resul=mysql_fetch_array($cs)){
			$var606=$resul[0];
			$var607=$resul[1];
			$var608=$resul[2];
			$var609=$resul[3];
			$var610=$resul[4];
                        $var611=$resul[5];
                        $var612=$resul[6];
                        $var696=$resul[7];
                       
			}
                             $varGenetic=$varGenetic-2;
                        $sql="select Genetic_Data_ID from genetic_data where Org_ID='$var' and Genetic_Data_ID='$varGenetic' ";
		$cs=mysql_query($sql,$cn);
		while($resul=mysql_fetch_array($cs)){
			$var613=$resul[0];
			$var614=$resul[1];
			$var615=$resul[2];
			$var616=$resul[3];
			$var617=$resul[4];
                        $var618=$resul[5];
                        $var619=$resul[6];
                        $var697=$resul[7];
                       
			}
                             $varGenetic=$varGenetic-3;
                        $sql="select Genetic_Data_ID from genetic_data where Org_ID='$var' and Genetic_Data_ID='$varGenetic' ";
		$cs=mysql_query($sql,$cn);
		while($resul=mysql_fetch_array($cs)){
			$var620=$resul[0];
			$var621=$resul[1];
			$var622=$resul[2];
			$var623=$resul[3];
			$var624=$resul[4];
                        $var625=$resul[5];
                        $var626=$resul[6];
                        $var698=$resul[7];
                       
			}
                             $varGenetic=$varGenetic-4;
                        $sql="select Genetic_Data_ID from genetic_data where Org_ID='$var' and Genetic_Data_ID='$varGenetic' ";
		$cs=mysql_query($sql,$cn);
		while($resul=mysql_fetch_array($cs)){
			$var627=$resul[0];
			$var628=$resul[1];
			$var629=$resul[2];
			$var630=$resul[3];
			$var631=$resul[4];
                        $var632=$resul[5];
                        $var633=$resul[6];
                        $var699=$resul[7];
                       
			}
                        
                        
                        
//                        $sql="select * plant_info where Org_ID='$var'";
//		$cs=mysql_query($sql,$cn);
//		while($resul=mysql_fetch_array($cs)){
//			$var67=$resul[0];
//			$var68=$resul[1];
//			$var69=$resul[2];
//			$var70=$resul[3];
//			$var71=$resul[4];
//                        $var72=$resul[5];
//                        $var73=$resul[6];
//                        $var74=$resul[7];
//                        $var75=$resul[8];
//			$var76=$resul[9];
//			$var77=$resul[10];
//			$var78=$resul[11];
//			$var79=$resul[12];
//                        $var80=$resul[13];
//                        $var81=$resul[14];
//                        $var82=$resul[15];
//			$var84=$resul[17];
//                        $var85=$resul[18];
//                        $var86=$resul[19];
//                      
//			}
//              
                        
                        $sql="select * from metabolic_data where Org_ID='$var'";
		$cs=mysql_query($sql,$cn);
		while($resul=mysql_fetch_array($cs)){
			$var87=$resul[0];
			$var88=$resul[1];
			$var89=$resul[2];
			$var90=$resul[3];
			$var91=$resul[4];
                        $var92=$resul[5];
                        $var93=$resul[6];
                        $var94=$resul[7];
                        $var95=$resul[8];
			$var96=$resul[9];
			$var97=$resul[10];
			$var98=$resul[11];
			$var99=$resul[12];
                        $var100=$resul[13];
                        $var101=$resul[14];
                        $var102=$resul[15];
                       
			}
                        
                        $sql="select * from bioassays_data where Org_ID='$var'";
		$cs=mysql_query($sql,$cn);
		while($resul=mysql_fetch_array($cs)){
			$var103=$resul[0];
			$var104=$resul[1];
			$var105=$resul[2];
			$var106=$resul[3];
			$var107=$resul[4];
                        $var108=$resul[5];
                        $var109=$resul[6];
                        $var110=$resul[7];
                         $var111=$resul[8];
                        $var112=$resul[9];
                         $var700=$resul[10];
			}
                        
                        $sql="select Bioassays_Data_ID from bioassays_data where Org_ID='$var'";
		$cs=mysql_query($sql,$cn);
		while($resul=mysql_fetch_array($cs)){
			$varBios=$resul[0];
			
			
			}
                        $varBios=$varBios-1;
                        
                       $sql="select Bioassays_Data_ID from bioassays_data where Org_ID='$var' and Bioassays_Data_ID='$varBios'";
		$cs=mysql_query($sql,$cn);
		while($resul=mysql_fetch_array($cs)){
			$var634=$resul[0];
			$var635=$resul[1];
			$var636=$resul[2];
			$var637=$resul[3];
			$var638=$resul[4];
                        $var639=$resul[5];
                        $var640=$resul[6];
                        $var641=$resul[7];
                         $var642=$resul[8];
                        $var643=$resul[9];
                        $var701=$resul[10];
			}
                        
                        $varBios=$varBios-2;
                        
                       $sql="select Bioassays_Data_ID from bioassays_data where Org_ID='$var' and Bioassays_Data_ID='$varBios'";
		$cs=mysql_query($sql,$cn);
		while($resul=mysql_fetch_array($cs)){
			$var644=$resul[0];
			$var645=$resul[1];
			$var646=$resul[2];
			$var647=$resul[3];
			$var648=$resul[4];
                        $var649=$resul[5];
                        $var650=$resul[6];
                        $var651=$resul[7];
                         $var652=$resul[8];
                        $var653=$resul[9];
                        $var702=$resul[10];
			}
                          $varBios=$varBios-3;
                        
                       $sql="select Bioassays_Data_ID from bioassays_data where Org_ID='$var' and Bioassays_Data_ID='$varBios'";
		$cs=mysql_query($sql,$cn);
		while($resul=mysql_fetch_array($cs)){
			$var654=$resul[0];
			$var655=$resul[1];
			$var656=$resul[2];
			$var657=$resul[3];
			$var658=$resul[4];
                        $var659=$resul[5];
                        $var660=$resul[6];
                        $var661=$resul[7];
                         $var662=$resul[8];
                        $var663=$resul[9];
                        $var703=$resul[10];
			}
                          $varBios=$varBios-4;
                        
                       $sql="select Bioassays_Data_ID from bioassays_data where Org_ID='$var' and Bioassays_Data_ID='$varBios'";
		$cs=mysql_query($sql,$cn);
		while($resul=mysql_fetch_array($cs)){
			$var664=$resul[0];
			$var665=$resul[1];
			$var666=$resul[2];
			$var667=$resul[3];
			$var668=$resul[4];
                        $var669=$resul[5];
                        $var670=$resul[6];
                        $var671=$resul[7];
                         $var672=$resul[8];
                        $var673=$resul[9];
                        $var704=$resul[10];
			}


 }  
 
 
               
                    
            
?>         
      

     
     
     
     

     
     
     
     
     
     
     
     
     
      <?php
   
 $inc=2; 
$inc1=2; 
$inc2=2; 
$inc3=2; 
$inc4=2; 
$inc5=2; 
$inc6=2; 
$inc7=2; 
$inc8=2; 
$inc9=2; 
$inc10=2; 
$inc11=2; 
$inc12=2; 
$inc13=2; 
$inc14=2; 
$inc15=2; 
$inc16=2; 
$inc17=2; 
$inc18=2; 
         
      
      
      
   $hr="ets"; 
if($hr=="ets")
 {
    
  $My=(string)$var4;
       
       
       $Host="Host";
       $Plant="Plant";
       $Free="Free";
       
    if(stristr ($My, $Plant))
    {
        
        

$sql="select Longitud,Latitud from plant_info where Common_Name='$var124'";
		$cs=mysql_query($sql,$cn);
		while($resul=mysql_fetch_array($cs)){
			$var122=$resul[0];
			$var123=$resul[1];
                    
			
			}    






                 
    }
    elseif(stristr ($My, $Host) )
    {
        
                 
		$sql="select Latitude,Longitude from host_info where Name='$var124'";
		$cs=mysql_query($sql,$cn);
                
          
		while($resul=mysql_fetch_array($cs)){
			$var122=$resul[0];
			$var123=$resul[1];
                    
				
			}
                        
                        
                       
    }
    
   		
      elseif(stristr ($My, $Free) )
    {
                   
		$sql="select Longitude,Latitude from free_living where Name='$var124'";
		$cs=mysql_query($sql,$cn);
                
          
		while($resul=mysql_fetch_array($cs)){
			$var122=$resul[0];
			$var123=$resul[1];
                    
				
			}
    }
                   
    
    }
    ?>
      
    
    


   
   

   

<style type="text/css">
    #primerboton{
    
    position: absolute;
    left:200px;
    top:410px;
    
}
#segundoboton{
    
     position: absolute;
    left:200px;
    top:410px;
    
}
#tercerboton{
    
    position: absolute;
    left:200px;
    top:410px;
}
#cuartoboton{
    
    position: absolute;
    left:200px;
    top:410px;
}
#quintoboton{
    position: absolute;
    left:350px;
    top:460px;
}
#sextoboton{
    position: absolute;
    left:350px;
    top:480px;
}
#septimoboton{
    position: absolute;
    left:350px;
    top:480px;
}
#decimoboton{
    position: absolute;
    left:200px;
    top:450px;
}
#novenoboton{
    
    position: absolute;
    left:200px;
    top:450px;
}
    *{margin:0;padding:0;outline:none;}

  BODY{COLOR:BLACK;BACKGROUND:WHITE;FONT-FAMILY:ARIAL,VERDANA,HELVETICA;}

  P,TD{FONT-SIZE:11pt;}

  H1,H2,H3{FONT-FAMILY:TREBUCHET MS,ARIAL BLACK,ARIAL;}
    H1{FONT-SIZE:18pt;}
    H2{FONT-SIZE:14pt;FONT-FAMILY: ARIAL;} 
    H3{FONT-SIZE:12pt;FONT-WEIGHT:BOLD; FONT-FAMILY: ARIAL;}

  A{text-decoration:none;}
    A:link{COLOR:NAVY;}
    A:visited{COLOR:NAVY;}
    A:active{COLOR:RED;}
    A:hover{COLOR:RED;}
  
  #header{width:975px;height:105px;background:url(imgs/header.jpg);margin:0;padding:0;position:relative;}
    #header li{margin:0;padding:0;list-style:none;position:absolute;top:0;}
    #header li,#header a{height:105px;display:block;outline:none;}

  #panel1b{left:0;width:90px;border:0 solid red;}
    #panel1b a:hover{background:transparent url(imgs/header.jpg) 0 -105px no-repeat;}

  .sitemap{margin-left:30px;}
  #mySelect{position:absolute;top:66px;left:340px;width:800px;}
  #SelectModel{border:0 solid green;float:left;}
  #searchPDBID{border:0 solid red;float:left;margin:1px 0 0 50px;}
  .select{font-family:arial;font-size:8pt;}
  #menubar{position:absolute;top:21px;left:125px;width:900px;height:40px;margin:0;border:0 solid black;}

  #MenuBar1 li{width:115px;font-size:.8em;font-weight:bold;text-align:center;}
    #MenuBar1 li.highlight a{color:#e07d00;}
    #MenuBar1 li.highlight a:hover{color:white;}
    #MenuBar1 ul li a.MenuBarItemSubmenu{background-image:url(Spry_P1_6_10-01/widgets/menubar/SpryMenuBarRightHover.gif);background-repeat:no-repeat;
                    background-position:95% 50%;}
    #MenuBar1 ul li a{width:15em;font-size:1.0em;text-align:left;color:#fff;background-color:#7897a0;}
    #MenuBar1 ul li a:hover{color:#ffee4a;}
                    A.ctl0:link{color:black;text-decoration:none;}
                    A.ctl0:visited{color:black;text-decoration:underline;}
                    A.ctl2:link{color:red;text-decoration:none;}
                    A.ctl2:visited{color:black;text-decoration:underline;}
                    A.ctl3:link{color:green;text-decoration:none;}
                    A.ctl3:visited{color:black;text-decoration:underline;}
                    A.ctl5:link{color:blue;text-decoration:none;}
                    A.ctl5:visited{color:black;text-decoration:underline;}
                    A.ctl6:link{color:magenta;text-decoration:none;}
                    A.ctl6:visited{color:black;text-decoration:underline;}

   .resume,.menu,.titlebar,.small,.smaller,.smallest,.smbold,.tiny,.smallred,.smallerred,.smallestred,.smboldred,.tinyred,.smallblue,.smallerblue,
   .smallestblue,.smboldblue,.tinyblue,li{font-family:ARIAL,Helvetica,VERDANA;}
     .menu{font-size:3pt;color:black;}
     .titlebar{font-size:11pt;color:black;}
     .small{font-size:.75em;color:black;}
     .smaller{FONT-SIZE:9PT;COLOR:BLACK;font-weight:normal;}
     .smallest{FONT-SIZE:8PT;COLOR:BLACK;}
     .smbold{FONT-SIZE:8PT;COLOR:BLACK;FONT-WEIGHT:BOLD;}
     .tiny{FONT-SIZE:7PT;COLOR:BLACK;}
     .smallred{font-size:10pt;color:red;}
     .smallerred{FONT-SIZE:9PT;COLOR:red;}
     .smallestred{FONT-SIZE:8PT;COLOR:red;}
     .smboldred{FONT-SIZE:8PT;COLOR:red;FONT-WEIGHT:BOLD;}
     .tinyred{FONT-SIZE:7PT;COLOR:red;}
     .smallblue{font-size:10pt;color:MidnightBlue;}
     .smallerblue{FONT-SIZE:9PT;COLOR:MidnightBlue;}
     .smallestblue{FONT-SIZE:8PT;COLOR:MidnightBlue;}
     .smboldblue{FONT-SIZE:8PT;COLOR:MidnightBlue;FONT-WEIGHT:BOLD;}
     .tinyblue{FONT-SIZE:7PT;COLOR:MidnightBlue;}

  .tooltip_content{background-color:#FFF;color:#006;padding:10px;border:1px solid black;width:400px;}
    .tooltip_content img{margin-right:10px;}
  .trigger01,.trigger02,.trigger03,.trigger04,.trigger05,.trigger06{font-size:.8em;}

  .biodata_table{
               margin:5px 0 5px 5px;
                display:block;
                float:left;
                position:absolute;
                border:#cde solid 1px;}
  .biodata_table1{
      margin:5px 0 5px 5px;
                display:block;
                width: 300px;
                right:23px;
               
                float:left;
                position:absolute;
                border:#cde solid 1px;
 
 }
    .biodata_table_title{display:block;background-color:white;margin:10px 0 5px 0;padding-left:5px;background-image:url("imgs/titlebar.jpg");
                         background-position:center;}
    .biodata_table table{margin-left:8px;}
    .biodata_table td{padding-top:5px;}
    .biodata_table A{text-decoration:none;font-weight:bold;}
    .biodata_table A:link{COLOR:NAVY;}
    .biodata_table A:visited{COLOR:NAVY;}
    .biodata_table A:active{COLOR:RED;}
    .biodata_table A:hover{COLOR:RED;}

  .cntrl_img_btns img{border:#000 solid 0;margin:0 10px 0 10px;cursor:pointer;}
  #clear_labels{margin:5px;cursor:pointer;}
  #info_page_entry_title{
       position: absolute;
      background:#5f72b3;
      border:1px solid #999;
      width:1400px;margin:5px 0 2px 5px;
      text-align:center;font-family:Verdana,Arial,Helvetica;
                         font-weight:bold;color:#fff;
                         top:9%;
                         left:10%;
    float:left;
  
  }
  #our_lab{position:absolute;background-color:#cde;font-size:.6em;text-align:center;top:195px;left:5px;width:95px;padding:3px;border:#5f72b3 solid 1px;
           -moz-border-radius:5px;-webkit-border-radius:5px;}
          fieldset{margin:5px;padding:0 10px 0 10px;font-size:.75em;}
          legend{background-color:#cde;border:0 solid #333;margin:0;padding:0 3px 0 3px;text-transform:uppercase;}

  #centerstatus {
     position: absolute;
     top: 230px; 
  }

  #colorInfo {
     position: absolute;
     top: 234px;
  }

  .jmol_cntrl_grp{margin:10px 0 10px 5px;border:#000 solid 0;}
  #jmol_wrap{position:absolute;left:-2000px;border:#0f0 solid 0;background-color:#a7bfdb;height:418px;width:853px;}
  #jmol{float:left;display:block;width:540px;height:410px;border:#5f72b3 solid 1px;margin:3px;}
  #jmol_controls{float:left;display:block;background-color:#a7bfdb;border:#fff dashed 0;margin-left:10px;height:100%;}

  #radio_rep,#radio_color,#span_Checkexp{margin:0 0 15px 15px;}
  .exp_phipsi{width:75%;text-align:justify;margin:30px auto 20px auto;}
  .exp_phipsi_img{border:#000 dashed 0;display:block;margin:10px auto;}
  .right{float:right;}
  
  #informacion
  {
      
    
    position: absolute;
    top:0%;
   left: 10%;
   float:left;
  }
    #acord
  {
      
    width: 360px;
    height: 857px;
    position: absolute;
    top:10%;
   left: 10%;
   float:left;
  }
</style>
   


<link href="SpryTabbedPanels_v3.css" rel="stylesheet" type="text/css"><!--
--><script src="SpryTabbedPanels.js" type="text/javascript"></script>


<script type="text/javascript" src="gsrs"></script><script type="text/javascript" charset="UTF-8" src="{common,util,stats}.js"></script>
<script type="text/javascript" charset="UTF-8" src="https://maps.gstatic.com/cat_js/maps-api-v3/api/js/18/14/intl/es_ALL/%7Bmap,geometry,poly,marker%7D.js"></script><script type="text/javascript" charset="UTF-8" src="https://maps.gstatic.com/cat_js/maps-api-v3/api/js/18/14/intl/es_ALL/%7Binfowindow,onion%7D.js"></script><script type="text/javascript" charset="UTF-8" src="https://maps.gstatic.com/cat_js/maps-api-v3/api/js/18/14/intl/es_ALL/%7Bcontrols%7D.js"></script></head>

<!--     <script language="javascript" type="text/javascript" src="../extras/js/jquery-1.3.2.min.js"></script>-->
<!--      <script language="javascript" type="text/javascript" src="http://code.jquery.com/jquery-1.7.min.js"></script>
     
-->  
<script language="javascript" type="text/javascript" src="../extras/js/jquery.blockUI.js"></script>
        <script language="javascript" type="text/javascript" src="../extras/js/jquery.validate.1.5.2.js"></script>
        
        <link href="../extras/css/estilo.css" rel="stylesheet" type="text/css" />
        <link href="../extras/css/style.css" rel="stylesheet" type="text/css" />
        <link href="../extras/css/screen.css" rel="stylesheet" type="text/css" />
        <link href="../extras/php/PHPPaging.lib.css" rel="stylesheet" type="text/css" />
        <script language="javascript" type="text/javascript" src="index.js"></script>

<body  onunload="GUnload()"> 
    
    <div id="panel0"  class="ocultar">
        <h1>
             <center> <IMG SRC="images/no_existe.png" WIDTH=178 HEIGHT=180 ALT=""></center>
              <br>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; This organism does not exist in the system  
        
        
        </h1>
        </div>

    <div id="panel1" class="mostrar">
<!-- <a href="#" onclick="TabbedPanels1.showPanel('iau'); return false;">iau</a><br /> -->

<div id="informacion">
    
    <div id="div_oculto" style="display: none;"></div>
    <div id="info_page_entry_title">
            <br> <?php echo $var1 ?>
             
              </div>  
         </div>
     
     <br>
     <br>
       
     <br>
   
<div >
 <div > 
  <div class="VTabbedPanels" id="TabbedPanels1" >
      <ul class="TabbedPanelsTabGroup" > 
            <li   class="TabbedPanelsTab  TabbedPanelsTabHover TabbedPanelsTabFocused TabbedPanelsTabSelected" tabindex="1" id="biodata" onclick="OcultarMapa()"><font size="2">Organism Information</font></li> 
            <li class="TabbedPanelsTab" tabindex="2" id="capsid" onclick="OcultarMapa()"><font size="2">Macroscopic Morphology</font></li> 
            <li class="TabbedPanelsTab" tabindex="3" id="foldavirus" onclick="OcultarMapa()" ><font size="2">Microscopic Morphology</font></li>
            <li class="TabbedPanelsTab" tabindex="4" id="iau" onclick="OcultarMapa()"><font size="2">Growth characteristics</font></li> 
            <li class="TabbedPanelsTab" tabindex="5" id="phipsi" onclick="OcultarMapa()"><font size="2">Preservation of Strains</font><br> </li>
            <li class="TabbedPanelsTab" tabindex="6" id="annotations" onclick="OcultarMapa()"><font size="2">DNA</font></li>
            <li class="TabbedPanelsTab" tabindex="7" id="relatedVirus" onclick="OcultarMapa()"><font size="2">Genetic Data</font></li>
<!--            <li class="TabbedPanelsTab" tabindex="8" id="PLANT" onclick="togle_display(0)">Plant Information</li>-->
            <li class="TabbedPanelsTab" tabindex="9" id="METAB" onclick="OcultarMapa()"><font size="2">Metabolic Data</font></li>
            <li class="TabbedPanelsTab" tabindex="10" id="BIOA" onclick="OcultarMapa()"><font size="2">Bioassays Data</font></li>
<!--            <li class="TabbedPanelsTab" tabindex="11" id="MAP" onclick="MostrarMapa()"><font size="2">Mapas</font></li>-->
      </ul> 
      <div class="TabbedPanelsContentGroup" style="height: auto">
           <div class="TabbedPanelsContent TabbedPanelsContentVisible" style="display: block;">
               
 <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">
  <script src="jquery-1.9.1.js"></script>
  <script src="jquery-ui.js"></script>

<style>
.trig{
color: greenyellow;
}
</style>
<style type="text/css">*{margin:0;padding:0;outline:none;}

  BODY{COLOR:BLACK;BACKGROUND:WHITE;FONT-FAMILY:ARIAL,VERDANA,HELVETICA;}

  P,TD{FONT-SIZE:11pt;}

  H1,H2,H3{FONT-FAMILY:TREBUCHET MS,ARIAL BLACK,ARIAL;}
    H1{FONT-SIZE:18pt;}
    H2{FONT-SIZE:14pt;FONT-FAMILY: ARIAL;} 
    H3{FONT-SIZE:12pt;FONT-WEIGHT:BOLD; FONT-FAMILY: ARIAL;}

  A{text-decoration:none;}
    A:link{COLOR:NAVY;}
    A:visited{COLOR:NAVY;}
    A:active{COLOR:RED;}
    A:hover{COLOR:RED;}
  
  #header{width:975px;height:105px;background:url(imgs/header.jpg);margin:0;padding:0;position:relative;}
    #header li{margin:0;padding:0;list-style:none;position:absolute;top:0;}
    #header li,#header a{height:105px;display:block;outline:none;}

  #panel1b{left:0;width:90px;border:0 solid red;}
    #panel1b a:hover{background:transparent url(imgs/header.jpg) 0 -105px no-repeat;}

  .sitemap{margin-left:30px;}
  #mySelect{position:absolute;top:66px;left:340px;width:800px;}
  #SelectModel{border:0 solid green;float:left;}
  #searchPDBID{border:0 solid red;float:left;margin:1px 0 0 50px;}
  .select{font-family:arial;font-size:8pt;}
  #menubar{position:absolute;top:21px;left:125px;width:900px;height:40px;margin:0;border:0 solid black;}

  #MenuBar1 li{width:115px;font-size:.8em;font-weight:bold;text-align:center;}
    #MenuBar1 li.highlight a{color:#e07d00;}
    #MenuBar1 li.highlight a:hover{color:white;}
    #MenuBar1 ul li a.MenuBarItemSubmenu{background-image:url(Spry_P1_6_10-01/widgets/menubar/SpryMenuBarRightHover.gif);background-repeat:no-repeat;
                    background-position:95% 50%;}
    #MenuBar1 ul li a{width:15em;font-size:1.0em;text-align:left;color:#fff;background-color:#7897a0;}
    #MenuBar1 ul li a:hover{color:#ffee4a;}
                    A.ctl0:link{color:black;text-decoration:none;}
                    A.ctl0:visited{color:black;text-decoration:underline;}
                    A.ctl2:link{color:red;text-decoration:none;}
                    A.ctl2:visited{color:black;text-decoration:underline;}
                    A.ctl3:link{color:green;text-decoration:none;}
                    A.ctl3:visited{color:black;text-decoration:underline;}
                    A.ctl5:link{color:blue;text-decoration:none;}
                    A.ctl5:visited{color:black;text-decoration:underline;}
                    A.ctl6:link{color:magenta;text-decoration:none;}
                    A.ctl6:visited{color:black;text-decoration:underline;}

   .resume,.menu,.titlebar,.small,.smaller,.smallest,.smbold,.tiny,.smallred,.smallerred,.smallestred,.smboldred,.tinyred,.smallblue,.smallerblue,
   .smallestblue,.smboldblue,.tinyblue,li{font-family:ARIAL,Helvetica,VERDANA;}
     .menu{font-size:3pt;color:black;}
     .titlebar{font-size:11pt;color:black;}
     .small{font-size:.75em;color:black;}
     .smaller{FONT-SIZE:9PT;COLOR:BLACK;font-weight:normal;}
     .smallest{FONT-SIZE:8PT;COLOR:BLACK;}
     .smbold{FONT-SIZE:8PT;COLOR:BLACK;FONT-WEIGHT:BOLD;}
     .tiny{FONT-SIZE:7PT;COLOR:BLACK;}
     .smallred{font-size:10pt;color:red;}
     .smallerred{FONT-SIZE:9PT;COLOR:red;}
     .smallestred{FONT-SIZE:8PT;COLOR:red;}
     .smboldred{FONT-SIZE:8PT;COLOR:red;FONT-WEIGHT:BOLD;}
     .tinyred{FONT-SIZE:7PT;COLOR:red;}
     .smallblue{font-size:10pt;color:MidnightBlue;}
     .smallerblue{FONT-SIZE:9PT;COLOR:MidnightBlue;}
     .smallestblue{FONT-SIZE:8PT;COLOR:MidnightBlue;}
     .smboldblue{FONT-SIZE:8PT;COLOR:MidnightBlue;FONT-WEIGHT:BOLD;}
     .tinyblue{FONT-SIZE:7PT;COLOR:MidnightBlue;}

  .tooltip_content{background-color:#FFF;color:#006;padding:10px;border:1px solid black;width:400px;}
    .tooltip_content img{margin-right:10px;}
  .trigger01,.trigger02,.trigger03,.trigger04,.trigger05,.trigger06{font-size:.8em;}

  .biodata_table{
      margin:5px 0 5px 5px;
      display:block;
      float:left;
      position:relative;
      border:#cde solid 1px;}
    .biodata_table_title{display:block;background-color:white;margin:10px 0 5px 0;padding-left:5px;background-image:url("imgs/titlebar.jpg");
                         background-position:center;}
    .biodata_table table{margin-left:8px;}
    .biodata_table td{padding-top:5px;}
    .biodata_table A{text-decoration:none;font-weight:bold;}
    .biodata_table A:link{COLOR:NAVY;}
    .biodata_table A:visited{COLOR:NAVY;}
    .biodata_table A:active{COLOR:RED;}
    .biodata_table A:hover{COLOR:RED;}

  .cntrl_img_btns img{border:#000 solid 0;margin:0 10px 0 10px;cursor:pointer;}
  #clear_labels{margin:5px;cursor:pointer;}
  #info_page_entry_title{
      background:#5f72b3;
      border:1px solid #999;
      width:1000px;
      margin:5px 0 2px 5px;
      text-align:center;
      font-family:Verdana,Arial,Helvetica;
                         font-weight:bold;
                         color:#fff;}
  #our_lab{
      position:absolute;
      background-color:#cde;
      font-size:.6em;
      text-align:center;
      top:195px;left:5px;width:95px;padding:3px;border:#5f72b3 solid 1px;
           -moz-border-radius:5px;-webkit-border-radius:5px;}
          fieldset{margin:5px;padding:0 10px 0 10px;font-size:.75em;}
          legend{background-color:#cde;border:0 solid #333;margin:0;padding:0 3px 0 3px;text-transform:uppercase;}

  #centerstatus {
     position: absolute;
     top: 230px; 
  }

  #colorInfo {
     position: absolute;
     top: 234px;
  }

  .jmol_cntrl_grp{margin:10px 0 10px 5px;border:#000 solid 0;}
  #jmol_wrap{position:absolute;left:-2000px;border:#0f0 solid 0;background-color:#a7bfdb;height:418px;width:853px;}
  #jmol{float:left;display:block;width:540px;height:410px;border:#5f72b3 solid 1px;margin:3px;}
  #jmol_controls{float:left;display:block;background-color:#a7bfdb;border:#fff dashed 0;margin-left:10px;height:100%;}

  #radio_rep,#radio_color,#span_Checkexp{margin:0 0 15px 15px;}
  .exp_phipsi{width:75%;text-align:justify;margin:30px auto 20px auto;}
  .exp_phipsi_img{border:#000 dashed 0;display:block;margin:10px auto;}
  .right{float:right;}
</style>



<style type="text/css">
div.scroll_vertical {
	height: 390px; 
	width: 500px;
	overflow: auto;
	border: 1px solid #666;
	background-color: #FDFAF9;
	padding: 8px;
}
div.scroll_vertical1{
	height: 380px; 
	width: 300px;
	overflow: auto;
	border: 1px solid #666;
	background-color: #FDFAF9;
	padding: 8px;
}
.cajas{
	background:#FFF;
	border:1px solid #00BFFF;
	height: 30px;
	margin-left:20px;
	margin-right:20px;
	border-radius:5px;
}
textarea:focus {
  
    box-shadow: 0 0 5px 3px #00BFFF;
    height: 100px;
}
.button {
   border-top: 1px solid #96d1f8;
   background: #65a9d7;
   background: -webkit-gradient(linear, left top, left bottom, from(#3e779d), to(#65a9d7));
   background: -webkit-linear-gradient(top, #3e779d, #65a9d7);
   background: -moz-linear-gradient(top, #3e779d, #65a9d7);
   background: -ms-linear-gradient(top, #3e779d, #65a9d7);
   background: -o-linear-gradient(top, #3e779d, #65a9d7);
   padding: 5px 10px;
   -webkit-border-radius: 8px;
   -moz-border-radius: 8px;
   border-radius: 8px;
   -webkit-box-shadow: rgba(0,0,0,1) 0 1px 0;
   -moz-box-shadow: rgba(0,0,0,1) 0 1px 0;
   box-shadow: rgba(0,0,0,1) 0 1px 0;
   text-shadow: rgba(0,0,0,.4) 0 1px 0;
   color: white;
   font-size: 14px;
   font-family: Helvetica, Arial, Sans-Serif;
   text-decoration: none;
   vertical-align: middle;
   }
   
 #PanelImag
   {
       
     
       float: left;
     
       
       
   }
   #div_oculto,#div_oculto1,#div_oculto2,#div_oculto3,#div_oculto4,#div_oculto5{
          
          background-color: #FDFAF9; 
    height:200px;
    width: 600px;
   }
</style>
    

<table border="0" width="830px"><tbody><tr><td>
      

   <div class="biodata_table " >
       <div class="scroll_vertical"> 
         <form name="Organism_Information" method="POST" action="" >
   <table border="0">
      <tbody>
          <tr>
       
            <b>
             <input  class="cajas" type="hidden" name="org" value="<?php echo $var?>" />
            </b>  
        <!--</td>-->
      </tr>
      <tr>
         <td><span class="small"><h5>* Alias:</h5> </span></td>
          <td class="small" align="center">
              <b>
                  <input class="cajas"  type="text" name="alias" value="<?php echo $var1?>" required />
            </b>  
          </td>
      </tr>
      
      <tr bgcolor="#CCDDEE">
        <td>
            <span class="small"><h5>* Isolated by: &nbsp;&nbsp;&nbsp </h5></span>
        </td>
        <td class="small" align="center">
           <b>
               <?php 
               
               echo"<select class='cajas' name=insolated id=insolated>"; 

                          $sql="SELECT * FROM user where lab='$lab'"; 
                           $result=mysql_query($sql); 
                          
                              $sqllab="SELECT Name FROM user WHERE User_ID='$var2'";		
		$cslab=mysql_query($sqllab,$cn);
            while($resullab=mysql_fetch_array($cslab)){
			$consullab107=$resullab[0];
			}
                             echo "<option value=".$var2.">".$consullab107."</option>\n"; 
                 while ( $row = mysql_fetch_array($result)) 
                      { 
              echo "<option value=".$row["User_ID"].">".$row["Name"]."</option>\n"; 
                       } 
                  echo "</select>";
                  
                  
                     ?> 
           
             
            </b>  
      </tr>
      <tr>
          <td valign="TOP">
              <span class="small"><h5>* Date of Isolation: &nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp</h5> </span>
          </td>
          <td class="small" align="center"> 
              <b>
             <input class="cajas"  type="date" name="dateofinsol" value="<?php echo $var3?>"    max="<?php echo $fechaMax;?>"/>
            </b>  
      </td>
    </tr>
    <tr>
         
          <td class="small" align="center"> 
              <b>
                  
                  <input class="cajas"  type="hidden" name="storage" value="1"   />
            </b>  
             
      </td>
    </tr>
    <tr bgcolor="#CCDDEE">
        <td><span class="small"><h5>* Sample:</h5> </span></td>
      
    
      <td class="small" align="center">
         <b>
<!--             <input type="text" name="ori" value="" />-->
             
              <select class="cajas"  onChange="mostrar(this.value);" id="ori" name="ori">
             <option ><?php echo $var4?></option>
 <option value="Plant">Plant-associated</option>
<option value="Host">Host-associated</option>
<option value="Free">Free-living</option> 

</select>
             
             <select  class="cajas"  id="proveedor"  name="proveedor" onchange="MyC();">
			 <option ><?php echo $var124?></option>  
		</select>
             <select id="producto"   class="cajas"  name="producto" style="display:none">
			<option ><?php echo $var125?></option>  
		</select>
            </b>  
          </td>
    </tr>
    
    <tr>
      <td><span class="small"><h5>Comments:</h5> </span></td>
        <td class="small" align="center">
          <b>
             <input  class="cajas"  type="text" name="com" value="<?php echo $var5?>" />
            </b>  
          </td>
    </tr> 
        <tr>
      
        <td class="small" align="center">
          <b>
              <input  class="cajas"  type="hidden" name="sub" value="<?php echo $var121?>" />
            </b>  
              <input type="hidden" name="lab" value="<?php echo $lab?>" />
          </td>
    </tr> 
    
  
    
    <div align="center" id="primerboton">

    <input class="button" type="button" name="btn1" value="Update" onclick="return ValidarFormulario(Organism_Information);"/> 
  
<input class="button" type="button" name="btns" value="Image" onclick="subirima1();"/> 
     


</div> 

<script type="text/JavaScript">

</script>


    
     
   


   
    
   </tbody></table>  
           
        </form>
           
         
           <div id="sube1"  style="display:none"> 
    <form name="image" id="subeima" action="" method="post" enctype="multipart/form-data">
        <table border="2">


            <input type="hidden" name="txtid" value="<?php echo $var?>"/>
   <input type="hidden" name="txttabla" value="organismo"/>
<center><h3>Image</h3></center>
<tr>
<td>Description</td>
<td><input  class="cajas" type="text" name="descripcion"  /></td>
</tr>
<tr>
<td>Image</td>
<td><input  class="cajas" type="file" name="imagen"  /></td>
</tr>
 
<tr>

    <td><input  class="button" type="submit" name="btnterceri"  value="ADD"/></td>
</tr>
        </table>
        </form>
              </div>
<?php
     if(isset($_POST["btnterceri"])){
         
         	$btn=$_POST["btnterceri"];
                if($btn=="ADD"){
                
                    $rutaServidor='Ima';
$rutaTemporal=$_FILES['imagen']['tmp_name'];
$nombreImagen=$_FILES['imagen']['name'];
$rutaDestino=$rutaServidor.'/'.$nombreImagen;
move_uploaded_file($rutaTemporal, $rutaDestino);
if( $nombreImagen=="")
{

      echo "<script> $.bootstrapGrowl('No inserted'); </script>";
    
}

else{
    global  $rutaServidor,$rutaTemporal,$nombreImagen,$rutaDestino;
    
$descrip=$_POST['descripcion'];
$org=$_POST['txtid'];
$tabla=$_POST['txttabla'];
$sql="INSERT INTO datos( org_id,tabla,ruta,descripcion ) values ('".$org."','".$tabla."','".$rutaDestino."','".$descrip."') ";
$resp=  mysql_query($sql,$cn);
if($resp){
  
    echo "<script> $.bootstrapGrowl('It was inserted correctly'); </script>";
    
    

}

}

                    
                }
         
         
         
         
         
         
     }
        
        
        
        
        
        ?>    
   </div>
   </div>    
                 
 
               <div class="biodata_table1">
              <div class="scroll_vertical1">
                      
      <?php
  $e="entra"; 
if($e=="entra")
 {
    
    		
             
             $consul=  mysql_query("Select * from datos where org_id='$var' and tabla='organismo' ");
while($filas=  mysql_fetch_array($consul)){
  
$esorg=$filas['id'];
$ruta=$filas['ruta'];
$desc=$filas['descripcion'];
    
?>

       <div id="PanelImag">  
<form  name="primerIma" method="post" action="EliminarFoto.php" onsubmit="return confirmation()">    
    
            
<?php echo $desc;?>
   
      <input type="hidden"  name="Eo"  id="Eo" value="<?php echo  $esorg;?>">
      <input type="submit"  name="submitButtonName"  id="submitButtonName" value="x" >
   
  <br>
<a href="<?php print_r($ruta) ;?>" target="_blank"><img src="<?php echo $ruta;?>" width="60" height="50"> </a>

        


         </form>
    </div>  
<?php
}
             
//             <a href="#" target="_blank"><img border="0" src="Imagenes/Fotos.png" name="pic1" width="158px"></a>
 }
            ?>
   
  
  
             </div>
                
</td></tr></tbody></table>



<!------###-END MAIN WINDOW STUFF-###----->
<script>
$('.trig').tooltip();
</script> 
</div> 
          
          
      <!------------------------------Macros-->
     
       <div class="TabbedPanelsContent" style="display: none;">
      <table border="0" width="830px"><tbody><tr><td>

 <div class="biodata_table " >
<div class="scroll_vertical"> 
     <form name="Macroscopic_Morphology" method="POST" action=""  >
    <center>
     <table border="0">
      <tbody>
          
      <input type="hidden" name="cy" id="cy" value="<?php echo $var122?>">
      <input type="hidden" name="cx" id="cx" value="<?php echo $var123?>">

        <td width="280" bgcolor="#ffffff" valign="middle" align="center" class="small">
            <b>
                <input type="hidden" name="mac" value="<?php echo $var6?>" />
                 <input type="hidden" name="txttabla" value="macro"/>
            </b>  
        </td>
     
      <tr>
<!--         <td><span class="small">* Org Name: </span></td>-->
         
             <input  class="cajas" type="hidden" name="org" value="<?php echo $var?>" />
             
        
       
      </tr>
      
      <tr bgcolor="#CCDDEE">
        <td><span class="small">*Medium Name: </span></td>
        <td class="small" align="center">
           <b>
                 <?php 
                    echo"<select  class='cajas' name=medi id=medi >"; 

                          $sql="SELECT * FROM medium where lab='$lab'"; 
                           $result=mysql_query($sql); 
                          
                              $sqllab="SELECT Name FROM medium WHERE Medium_ID='$var8'";		
		$cslab=mysql_query($sqllab,$cn);
            while($resullab=mysql_fetch_array($cslab)){
			$consullab1=$resullab[0];
			}
                             echo "<option value=".$var8.">".$consullab1."</option>\n"; 
                 while ( $row = mysql_fetch_array($result)) 
                      { 
              echo "<option value=".$row["Medium_ID"].">".$row["Name"]."</option>\n"; 
                       } 
                  echo "</select>"; 
                     ?>
            
            </b>  
      </tr>
      <tr><td valign="TOP"><span class="small">* Temperature: </span></td>
          <td class="small" align="center"> 
              <b>
                  <input onKeyPress="return validar_monto(event)" class="cajas" type="text" name="tempera" value="<?php echo $var9?>"  size="5"required/>
            </b> &#176; C 
      </td>
      </tr>
      <tr>
          <td><span class="small">*User Name </span></td>
     <td class="small" align="center">
         <b>
             <?php 
                   echo"<select class='cajas' name=use id=use>"; 

                           $sql="SELECT * FROM user where lab='$lab'"; 
                           $result=mysql_query($sql); 
                          
                              $sqllab="SELECT Name FROM user WHERE User_ID='$var680'";		
		$cslab=mysql_query($sqllab,$cn);
            while($resullab=mysql_fetch_array($cslab)){
			$consullab2=$resullab[0];
			}
                             echo "<option value=".$var680.">".$consullab2."</option>\n"; 
                 while ( $row = mysql_fetch_array($result)) 
                      { 
              echo "<option value=".$row["User_ID"].">".$row["Name"]."</option>\n"; 
                       } 
                  echo "</select>"; 
                     ?>
                    
            
            </b>  
          </td>
     </tr>
    <tr bgcolor="#CCDDEE">
      <td><span class="small">Agitation: </span></td>
      
    
      <td class="small"  align="center">
         <b>
             <input  onKeyPress="return  validar_monto(event)" class="cajas" type="text" name="agitacion"  size="5" value="<?php echo $var10?>" />
            </b>  RPM
          </td>
    </tr>
    
    <tr>
      <td><span class="small">Age: </span></td>
        <td class="small" align="center">
          <b>
              <input onKeyPress="return validarNumero(event)"  class="cajas" type="text" name="age"  size="6" value="<?php echo $var11?>" />
            </b>  Hours
          </td>
    </tr> 
    
    <tr bgcolor="#CCDDEE">
      <td><span class="small">*Size: </span></td>
      
    
      <td class="small" align="center">
         <b>
             <input  onKeyPress="return  validar_monto(event)" class="cajas" type="text" name="size"  size="6" value="<?php echo $var12?>" />
            </b> ml 
          </td>
          
       <tr>
      <td><span class="small">Surface: </span></td>
        <td class="small" align="center">
          <b>
              <?php 
                   echo"<select  class='cajas' name=surface id=surface >"; 

                    $sql="SELECT * FROM surface_morphology where lab='$lab'"; 
                           $result=mysql_query($sql); 
                          
                              $sqllab="SELECT Name FROM surface_morphology WHERE Surface_Morphology_ID='$var13'";		
		$cslab=mysql_query($sqllab,$cn);
            while($resullab=mysql_fetch_array($cslab)){
			$consullab3=$resullab[0];
			}
                             echo "<option value=".$var13.">".$consullab3."</option>\n"; 
                 while ( $row = mysql_fetch_array($result)) 
                      { 
              echo "<option value=".$row["Surface_Morphology_ID"].">".$row["Name"]."</option>\n"; 
                       } 
                   
                   
                          
                  echo "</select>"; 
                     ?>
           
            </b>  
          </td>
    </tr> 
    
    <tr bgcolor="#CCDDEE">
      <td><span class="small">Color: </span></td>
      
     
      <td class="small" align="center">
         <b>
             
             <input  class="cajas" type="color" name="color" value="<?php echo $var14?>" />
            </b>  
          </td>
    </tr>
    <tr>
<!--      <td><span class="small">Photo: </span></td>-->
<!--        <td class="small" align="center">
              <?php 
//                   echo"<select  class='cajas' name=foto id=foto >"; 
//
//                           $sql="SELECT descripcion FROM datos"; 
//                           $result=mysql_query($sql); 
//                           $i=0; 
//                              echo "<option  value=".$var15.">".$var15."</option>\n"; 
//                 while ($row=mysql_fetch_row($result)) 
//                      { 
//              echo "<option  value=".$row[$i].">".$row[$i]."</option>\n"; 
//                       } 
//                  echo "</select>"; 
                     ?>
           
          </td>-->
    </tr> 
    <input type="hidden" name="sub" id="sub" value="<?php echo $consul3?>"/>
            <input type="hidden" name="lab" id="lab" value="<?php echo $lab?>"/>
     <input  class="cajas" type="hidden" name="foto" value="1" />
         <div align="center" id="segundoboton" >
     
     
      <input  class="button" type="button" name="btn2" value="Update"  onclick="return ValidarFormulario1(Macroscopic_Morphology);"/> 
   <input  class="button" type="button" name="btns" value="Image" onclick="subirima2();"/>
 <input class="button" type="button" name="btnNuevo" value="New" onclick="addMacros();"/> 
   <div id="div_oculto1" style="display: none;"></div>

</div>



 <link rel="stylesheet" type="text/css" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
         
        
        <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
     
        <script src="jquery.bootstrap-growl.js"></script>
      
        



   
    
   </tbody></table> 
        <div id="MacrosOculto1" style="display: none;">
        <table border="0">
      <tbody>
          
      

        <td width="280" bgcolor="#ffffff" valign="middle" align="center" class="small">
            <b>
               
            </b>  
        </td>
     
      <tr>
<!--         <td><span class="small">* Org Name: </span></td>-->
         
       
      </tr>
      
      <tr bgcolor="#CCDDEE">
        <td><span class="small">*Medium Name: </span></td>
        <td class="small" align="center">
           <b>
                 <?php 
                    echo"<select  class='cajas' name=medi1 id=medi1 >"; 

                            $sql="SELECT * FROM medium where lab='$lab'"; 
                           $result=mysql_query($sql); 
                          
                              $sqllab="SELECT Name FROM medium WHERE Medium_ID='$var330'";		
		$cslab=mysql_query($sqllab,$cn);
            while($resullab=mysql_fetch_array($cslab)){
			$consullab4=$resullab[0];
			}
                             echo "<option value=".$var330.">".$consullab4."</option>\n"; 
                 while ( $row = mysql_fetch_array($result)) 
                      { 
              echo "<option value=".$row["Medium_ID"].">".$row["Name"]."</option>\n"; 
                       } 
                  echo "</select>"; 
                     ?>
            
            </b>  
      </tr>
      <tr><td valign="TOP"><span class="small">* Temperature: </span></td>
          <td class="small" align="center"> 
              <b>
                  <input onKeyPress="return validar_monto(event)" class="cajas" type="text" name="tempera1" value="<?php echo $var331?>"  size="5"required/>
            </b> &#176; C 
      </td>
    </tr>
     <tr>
          <td><span class="small">*User Name </span></td>
     <td class="small" align="center">
         <b>
             <?php 
                   echo"<select class='cajas' name=use1 id=use1>"; 

                                 $sql="SELECT * FROM user where lab='$lab'"; 
                           $result=mysql_query($sql); 
                          
                              $sqllab="SELECT Name FROM user WHERE User_ID='$var681'";		
		$cslab=mysql_query($sqllab,$cn);
            while($resullab=mysql_fetch_array($cslab)){
			$consullab5=$resullab[0];
			}
                             echo "<option value=".$var681.">".$consullab5."</option>\n"; 
                 while ( $row = mysql_fetch_array($result)) 
                      { 
              echo "<option value=".$row["User_ID"].">".$row["Name"]."</option>\n"; 
                       } 
                  echo "</select>"; 
                     ?>
                    
            
            </b>  
          </td>
     </tr>
    <tr bgcolor="#CCDDEE">
      <td><span class="small">Agitation: </span></td>
      
    
      <td class="small"  align="center">
         <b>
             <input  onKeyPress="return  validar_monto(event)" class="cajas" type="text" name="agitacion1"  size="5" value="<?php echo $var332?>" />
            </b>  RPM
          </td>
    </tr>
    
    <tr>
      <td><span class="small">Age: </span></td>
        <td class="small" align="center">
          <b>
              <input onKeyPress="return validarNumero(event)"  class="cajas" type="text" name="age1"  size="6" value="<?php echo $var333?>" />
            </b>  Hours
          </td>
    </tr> 
    
    <tr bgcolor="#CCDDEE">
      <td><span class="small">*Size: </span></td>
      
    
      <td class="small" align="center">
         <b>
             <input  onKeyPress="return  validar_monto(event)" class="cajas" type="text" name="size1"  size="6" value="<?php echo $var334?>" />
            </b> ml 
          </td>
          
       <tr>
      <td><span class="small">Surface: </span></td>
        <td class="small" align="center">
          <b>
              <?php 
                   echo"<select  class='cajas' name=surface1 id=surface1 >"; 

                           $sql="SELECT * FROM surface_morphology where lab='$lab'"; 
                           $result=mysql_query($sql); 
                          
                              $sqllab="SELECT Name FROM surface_morphology WHERE Surface_Morphology_ID='$var335'";		
		$cslab=mysql_query($sqllab,$cn);
            while($resullab=mysql_fetch_array($cslab)){
			$consullab6=$resullab[0];
			}
                             echo "<option value=".$var335.">".$consullab6."</option>\n"; 
                 while ( $row = mysql_fetch_array($result)) 
                      { 
              echo "<option value=".$row["Surface_Morphology_ID"].">".$row["Name"]."</option>\n"; 
                       } 
                  echo "</select>"; 
                     ?>
           
            </b>  
          </td>
    </tr> 
    
    <tr bgcolor="#CCDDEE">
      <td><span class="small">Color: </span></td>
      
     
      <td class="small" align="center">
         <b>
             
             <input  class="cajas" type="color" name="color1" value="<?php echo $var336?>" />
            </b>  
          </td>
    </tr>
    <tr>
<!--      <td><span class="small">Photo: </span></td>-->
<!--        <td class="small" align="center">
              <?php 
//                   echo"<select  class='cajas' name=foto id=foto >"; 
//
//                           $sql="SELECT descripcion FROM datos"; 
//                           $result=mysql_query($sql); 
//                           $i=0; 
//                              echo "<option  value=".$var15.">".$var15."</option>\n"; 
//                 while ($row=mysql_fetch_row($result)) 
//                      { 
//              echo "<option  value=".$row[$i].">".$row[$i]."</option>\n"; 
//                       } 
//                  echo "</select>"; 
                     ?>
           
          </td>-->
    </tr> 
    <input type="hidden" name="sub" id="sub" value="<?php echo $consul3?>"/>
            <input type="hidden" name="lab" id="lab" value="<?php echo $lab?>"/>
     <input  class="cajas" type="hidden" name="foto" value="1" />
         <div align="center" id="segundoboton" >
     
     
      
   <div id="div_oculto1" style="display: none;"></div>

</div>



 <link rel="stylesheet" type="text/css" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
         
        
        <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
     
        <script src="jquery.bootstrap-growl.js"></script>
      
        



   
    
   </tbody></table> 
        </div>
                <div id="MacrosOculto2" style="display: none;">
        <table border="0">
      <tbody>
          
      
        <td width="280" bgcolor="#ffffff" valign="middle" align="center" class="small">
            <b>
                
            </b>  
        </td>
     
      <tr>
<!--         <td><span class="small">* Org Name: </span></td>-->
         
       
      </tr>
      
      <tr bgcolor="#CCDDEE">
        <td><span class="small">*Medium Name: </span></td>
        <td class="small" align="center">
           <b>
                 <?php 
                    echo"<select  class='cajas' name=medi2 id=medi2 >"; 

                            $sql="SELECT * FROM medium where lab='$lab'"; 
                           $result=mysql_query($sql); 
                          
                              $sqllab="SELECT Name FROM medium WHERE Medium_ID='$var337'";		
		$cslab=mysql_query($sqllab,$cn);
            while($resullab=mysql_fetch_array($cslab)){
			$consullab7=$resullab[0];
			}
                             echo "<option value=".$var337.">".$consullab7."</option>\n"; 
                 while ( $row = mysql_fetch_array($result)) 
                      { 
              echo "<option value=".$row["Medium_ID"].">".$row["Name"]."</option>\n"; 
                       } 
                  echo "</select>"; 
                     ?>
            
            </b>  
      </tr>
      <tr><td valign="TOP"><span class="small">* Temperature: </span></td>
          <td class="small" align="center"> 
              <b>
                  <input onKeyPress="return validar_monto(event)" class="cajas" type="text" name="tempera2" value="<?php echo $var338?>"  size="5"required/>
            </b> &#176; C 
      </td>
    </tr>
     <tr>
          <td><span class="small">*User Name </span></td>
     <td class="small" align="center">
         <b>
             <?php 
                   echo"<select class='cajas' name=use2 id=use2>"; 

                                  $sql="SELECT * FROM user where lab='$lab'"; 
                           $result=mysql_query($sql); 
                          
                              $sqllab="SELECT Name FROM user WHERE User_ID='$var682'";		
		$cslab=mysql_query($sqllab,$cn);
            while($resullab=mysql_fetch_array($cslab)){
			$consullab8=$resullab[0];
			}
                             echo "<option value=".$var682.">".$consullab8."</option>\n"; 
                 while ( $row = mysql_fetch_array($result)) 
                      { 
              echo "<option value=".$row["User_ID"].">".$row["Name"]."</option>\n"; 
                       } 
                  echo "</select>"; 
                     ?>
                    
            
            </b>  
          </td>
     </tr>
    <tr bgcolor="#CCDDEE">
      <td><span class="small">Agitation: </span></td>
      
    
      <td class="small"  align="center">
         <b>
             <input  onKeyPress="return  validar_monto(event)" class="cajas" type="text" name="agitacion2"  size="5" value="<?php echo $var339?>" />
            </b>  RPM
          </td>
    </tr>
    
    <tr>
      <td><span class="small">Age: </span></td>
        <td class="small" align="center">
          <b>
              <input onKeyPress="return validarNumero(event)"  class="cajas" type="text" name="age2"  size="6" value="<?php echo $var340?>" />
            </b>  Hours
          </td>
    </tr> 
    
    <tr bgcolor="#CCDDEE">
      <td><span class="small">*Size: </span></td>
      
    
      <td class="small" align="center">
         <b>
             <input  onKeyPress="return  validar_monto(event)" class="cajas" type="text" name="size2"  size="6" value="<?php echo $var341?>" />
            </b> ml 
          </td>
          
       <tr>
      <td><span class="small">Surface: </span></td>
        <td class="small" align="center">
          <b>
              <?php 
                   echo"<select  class='cajas' name=surface2 id=surface2 >"; 

                             $sql="SELECT * FROM surface_morphology where lab='$lab'"; 
                           $result=mysql_query($sql); 
                          
                              $sqllab="SELECT Name FROM surface_morphology WHERE Surface_Morphology_ID='$var342'";		
		$cslab=mysql_query($sqllab,$cn);
            while($resullab=mysql_fetch_array($cslab)){
			$consullab9=$resullab[0];
			}
                             echo "<option value=".$var342.">".$consullab9."</option>\n"; 
                 while ( $row = mysql_fetch_array($result)) 
                      { 
              echo "<option value=".$row["Surface_Morphology_ID"].">".$row["Name"]."</option>\n"; 
                       } 
                  echo "</select>"; 
                     ?>
           
            </b>  
          </td>
    </tr> 
    
    <tr bgcolor="#CCDDEE">
      <td><span class="small">Color: </span></td>
      
     
      <td class="small" align="center">
         <b>
             
             <input  class="cajas" type="color" name="color2" value="<?php echo $var343?>" />
            </b>  
          </td>
    </tr>
    <tr>
<!--      <td><span class="small">Photo: </span></td>-->
<!--        <td class="small" align="center">
              <?php 
//                   echo"<select  class='cajas' name=foto id=foto >"; 
//
//                           $sql="SELECT descripcion FROM datos"; 
//                           $result=mysql_query($sql); 
//                           $i=0; 
//                              echo "<option  value=".$var15.">".$var15."</option>\n"; 
//                 while ($row=mysql_fetch_row($result)) 
//                      { 
//              echo "<option  value=".$row[$i].">".$row[$i]."</option>\n"; 
//                       } 
//                  echo "</select>"; 
                     ?>
           
          </td>-->
    </tr> 
    <input type="hidden" name="sub" id="sub" value="<?php echo $consul3?>"/>
            <input type="hidden" name="lab" id="lab" value="<?php echo $lab?>"/>
     <input  class="cajas" type="hidden" name="foto" value="1" />
         <div align="center" id="segundoboton" >
     
     
      
   <div id="div_oculto1" style="display: none;"></div>

</div>



 <link rel="stylesheet" type="text/css" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
         
        
        <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
     
        <script src="jquery.bootstrap-growl.js"></script>
      
        



   
    
   </tbody></table> 
        </div>
                <div id="MacrosOculto3" style="display: none;">
        <table border="0">
      <tbody>
          
     
        <td width="280" bgcolor="#ffffff" valign="middle" align="center" class="small">
            <b>
               
            </b>  
        </td>
     
      <tr>
<!--         <td><span class="small">* Org Name: </span></td>-->
         
            
        
       
      </tr>
      
      <tr bgcolor="#CCDDEE">
        <td><span class="small">*Medium Name: </span></td>
        <td class="small" align="center">
           <b>
                 <?php 
                    echo"<select  class='cajas' name=medi3 id=medi3 >"; 

                            $sql="SELECT * FROM medium where lab='$lab'"; 
                           $result=mysql_query($sql); 
                          
                              $sqllab="SELECT Name FROM medium WHERE Medium_ID='$var344'";		
		$cslab=mysql_query($sqllab,$cn);
            while($resullab=mysql_fetch_array($cslab)){
			$consullab10=$resullab[0];
			}
                             echo "<option value=".$var344.">".$consullab10."</option>\n"; 
                 while ( $row = mysql_fetch_array($result)) 
                      { 
              echo "<option value=".$row["Medium_ID"].">".$row["Name"]."</option>\n"; 
                       } 
                  echo "</select>"; 
                     ?>
            
            </b>  
      </tr>
      <tr><td valign="TOP"><span class="small">* Temperature: </span></td>
          <td class="small" align="center"> 
              <b>
                  <input onKeyPress="return validar_monto(event)" class="cajas" type="text" name="tempera3" value="<?php echo $var345?>"  size="5"required/>
            </b> &#176; C 
      </td>
    </tr>
     <tr>
          <td><span class="small">*User Name </span></td>
     <td class="small" align="center">
         <b>
             <?php 
                   echo"<select class='cajas' name=use3 id=use3>"; 

                           $sql="SELECT * FROM user where lab='$lab'"; 
                           $result=mysql_query($sql); 
                          
                              $sqllab="SELECT Name FROM user WHERE User_ID='$var683'";		
		$cslab=mysql_query($sqllab,$cn);
            while($resullab=mysql_fetch_array($cslab)){
			$consullab11=$resullab[0];
			}
                             echo "<option value=".$var683.">".$consullab12."</option>\n"; 
                 while ( $row = mysql_fetch_array($result)) 
                      { 
              echo "<option value=".$row["User_ID"].">".$row["Name"]."</option>\n"; 
                       } 
                  echo "</select>"; 
                     ?>
                    
            
            </b>  
          </td>
     </tr>
    <tr bgcolor="#CCDDEE">
      <td><span class="small">Agitation: </span></td>
      
    
      <td class="small"  align="center">
         <b>
             <input  onKeyPress="return  validar_monto(event)" class="cajas" type="text" name="agitacion3"  size="5" value="<?php echo $var346?>" />
            </b>  RPM
          </td>
    </tr>
    
    <tr>
      <td><span class="small">Age: </span></td>
        <td class="small" align="center">
          <b>
              <input onKeyPress="return validarNumero(event)"  class="cajas" type="text" name="age3"  size="6" value="<?php echo $var347?>" />
            </b>  Hours
          </td>
    </tr> 
    
    <tr bgcolor="#CCDDEE">
      <td><span class="small">*Size: </span></td>
      
    
      <td class="small" align="center">
         <b>
             <input  onKeyPress="return  validar_monto(event)" class="cajas" type="text" name="size3"  size="6" value="<?php echo $var348?>" />
            </b> ml 
          </td>
          
       <tr>
      <td><span class="small">Surface: </span></td>
        <td class="small" align="center">
          <b>
              <?php 
                   echo"<select  class='cajas' name=surface3 id=surface3 >"; 

                            $sql="SELECT * FROM surface_morphology where lab='$lab'"; 
                           $result=mysql_query($sql); 
                          
                              $sqllab="SELECT Name FROM surface_morphology WHERE Surface_Morphology_ID='$var349'";		
		$cslab=mysql_query($sqllab,$cn);
            while($resullab=mysql_fetch_array($cslab)){
			$consullab13=$resullab[0];
			}
                             echo "<option value=".$var349.">".$consullab13."</option>\n"; 
                 while ( $row = mysql_fetch_array($result)) 
                      { 
              echo "<option value=".$row["Surface_Morphology_ID"].">".$row["Name"]."</option>\n"; 
                       } 
                  echo "</select>"; 
                     ?>
           
            </b>  
          </td>
    </tr> 
    
    <tr bgcolor="#CCDDEE">
      <td><span class="small">Color: </span></td>
      
     
      <td class="small" align="center">
         <b>
             
             <input  class="cajas" type="color" name="color3" value="<?php echo $var350?>" />
            </b>  
          </td>
    </tr>
    <tr>
<!--      <td><span class="small">Photo: </span></td>-->
<!--        <td class="small" align="center">
              <?php 
//                   echo"<select  class='cajas' name=foto id=foto >"; 
//
//                           $sql="SELECT descripcion FROM datos"; 
//                           $result=mysql_query($sql); 
//                           $i=0; 
//                              echo "<option  value=".$var15.">".$var15."</option>\n"; 
//                 while ($row=mysql_fetch_row($result)) 
//                      { 
//              echo "<option  value=".$row[$i].">".$row[$i]."</option>\n"; 
//                       } 
//                  echo "</select>"; 
                     ?>
           
          </td>-->
    </tr> 
    <input type="hidden" name="sub" id="sub" value="<?php echo $consul3?>"/>
            <input type="hidden" name="lab" id="lab" value="<?php echo $lab?>"/>
     <input  class="cajas" type="hidden" name="foto" value="1" />
         <div align="center" id="segundoboton" >
     
     
      
   <div id="div_oculto1" style="display: none;"></div>

</div>



 <link rel="stylesheet" type="text/css" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
         
        
        <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
     
        <script src="jquery.bootstrap-growl.js"></script>
      
        



   
    
   </tbody></table> 
        </div>
                <div id="MacrosOculto4" style="display: none;">
        <table border="0">
      <tbody>
          
     
        <td width="280" bgcolor="#ffffff" valign="middle" align="center" class="small">
            <b>
               
            </b>  
        </td>
     
      <tr>
<!--         <td><span class="small">* Org Name: </span></td>-->
         
            
       
      </tr>
      
      <tr bgcolor="#CCDDEE">
        <td><span class="small">*Medium Name: </span></td>
        <td class="small" align="center">
           <b>
                 <?php 
                    echo"<select  class='cajas' name=medi4 id=medi4 >"; 

                          $sql="SELECT * FROM medium where lab='$lab'"; 
                           $result=mysql_query($sql); 
                          
                              $sqllab="SELECT Name FROM medium WHERE Medium_ID='$var351'";		
		$cslab=mysql_query($sqllab,$cn);
            while($resullab=mysql_fetch_array($cslab)){
			$consullab14=$resullab[0];
			}
                             echo "<option value=".$var351.">".$consullab14."</option>\n"; 
                 while ( $row = mysql_fetch_array($result)) 
                      { 
              echo "<option value=".$row["Medium_ID"].">".$row["Name"]."</option>\n"; 
                       } 
                  echo "</select>"; 
                     ?>
            
            </b>  
      </tr>
      <tr><td valign="TOP"><span class="small">* Temperature: </span></td>
          <td class="small" align="center"> 
              <b>
                  <input onKeyPress="return validar_monto(event)" class="cajas" type="text" name="tempera4" value="<?php echo $var352?>"  size="5"required/>
            </b> &#176; C 
      </td>
    </tr>
     <tr>
          <td><span class="small">*User Name </span></td>
     <td class="small" align="center">
         <b>
             <?php 
                   echo"<select class='cajas' name=use4 id=use4>"; 

                       $sql="SELECT * FROM user where lab='$lab'"; 
                           $result=mysql_query($sql); 
                          
                              $sqllab="SELECT Name FROM user WHERE User_ID='$var684'";		
		$cslab=mysql_query($sqllab,$cn);
            while($resullab=mysql_fetch_array($cslab)){
			$consullab15=$resullab[0];
			}
                             echo "<option value=".$var684.">".$consullab15."</option>\n"; 
                 while ( $row = mysql_fetch_array($result)) 
                      { 
              echo "<option value=".$row["User_ID"].">".$row["Name"]."</option>\n"; 
                       } 
                  echo "</select>"; 
                     ?>
                    
            
            </b>  
          </td>
     </tr>
    <tr bgcolor="#CCDDEE">
      <td><span class="small">Agitation: </span></td>
      
    
      <td class="small"  align="center">
         <b>
             <input  onKeyPress="return  validar_monto(event)" class="cajas" type="text" name="agitacion4"  size="5" value="<?php echo $var353?>" />
            </b>  RPM
          </td>
    </tr>
    
    <tr>
      <td><span class="small">Age: </span></td>
        <td class="small" align="center">
          <b>
              <input onKeyPress="return validarNumero(event)"  class="cajas" type="text" name="age4"  size="6" value="<?php echo $var354?>" />
            </b>  Hours
          </td>
    </tr> 
    
    <tr bgcolor="#CCDDEE">
      <td><span class="small">*Size: </span></td>
      
    
      <td class="small" align="center">
         <b>
             <input  onKeyPress="return  validar_monto(event)" class="cajas" type="text" name="size4"  size="6" value="<?php echo $var355?>" />
            </b> ml 
          </td>
          
       <tr>
      <td><span class="small">Surface: </span></td>
        <td class="small" align="center">
          <b>
              <?php 
                   echo"<select  class='cajas' name=surface4 id=surface4 >"; 

                            $sql="SELECT * FROM surface_morphology where lab='$lab'"; 
                           $result=mysql_query($sql); 
                          
                              $sqllab="SELECT Name FROM surface_morphology WHERE Surface_Morphology_ID='$var356'";		
		$cslab=mysql_query($sqllab,$cn);
            while($resullab=mysql_fetch_array($cslab)){
			$consullab16=$resullab[0];
			}
                             echo "<option value=".$var356.">".$consullab16."</option>\n"; 
                 while ( $row = mysql_fetch_array($result)) 
                      { 
              echo "<option value=".$row["Surface_Morphology_ID"].">".$row["Name"]."</option>\n"; 
                       } 
                  echo "</select>"; 
                     ?>
           
            </b>  
          </td>
    </tr> 
    
    <tr bgcolor="#CCDDEE">
      <td><span class="small">Color: </span></td>
      
     
      <td class="small" align="center">
         <b>
             
             <input  class="cajas" type="color" name="color4" value="<?php echo $var357?>" />
            </b>  
          </td>
    </tr>
    <tr>
<!--      <td><span class="small">Photo: </span></td>-->
<!--        <td class="small" align="center">
              <?php 
//                   echo"<select  class='cajas' name=foto id=foto >"; 
//
//                           $sql="SELECT descripcion FROM datos"; 
//                           $result=mysql_query($sql); 
//                           $i=0; 
//                              echo "<option  value=".$var15.">".$var15."</option>\n"; 
//                 while ($row=mysql_fetch_row($result)) 
//                      { 
//              echo "<option  value=".$row[$i].">".$row[$i]."</option>\n"; 
//                       } 
//                  echo "</select>"; 
                     ?>
           
          </td>-->
    </tr> 
    <input type="hidden" name="sub" id="sub" value="<?php echo $consul3?>"/>
            <input type="hidden" name="lab" id="lab" value="<?php echo $lab?>"/>
     <input  class="cajas" type="hidden" name="foto" value="1" />
         <div align="center" id="segundoboton" >
     
     
      
   <div id="div_oculto1" style="display: none;"></div>

</div>



 <link rel="stylesheet" type="text/css" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
         
        
        <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
     
        <script src="jquery.bootstrap-growl.js"></script>
      
        



   
    
   </tbody></table> 
        </div>
    </center>

     </form> 
     <div id="sube2"  style="display:none"> 
    <form name="image" id="subeima" action="" method="post" enctype="multipart/form-data">
        <table border="2">


            <input type="hidden" name="txtid" value="<?php echo $var?>"/>
 <input type="hidden" name="txttabla" value="macro"/>
<center><h3>Image</h3></center>
<tr>
<td>Description</td>
<td><input  class="cajas" type="text" name="descripcion"  /></td>
</tr>
<tr>
<td>Image</td>
<td><input   class="cajas" type="file" name="imagen"  /></td>
</tr>

<tr>

    <td><input  class="button" type="submit" name="btndocum"  value="ADD"/></td>
</tr>
        </table>
        </form>
     </div>
    
<?php
     if(isset($_POST["btndocum"])){
         
         	$btn=$_POST["btndocum"];
                if($btn=="ADD"){
                
                    $rutaServidor='Ima';
$rutaTemporal=$_FILES['imagen']['tmp_name'];
$nombreImagen=$_FILES['imagen']['name'];
$rutaDestino=$rutaServidor.'/'.$nombreImagen;
move_uploaded_file($rutaTemporal, $rutaDestino);

if( $nombreImagen=="")
{

      echo "<script> $.bootstrapGrowl('No inserted'); </script>";
    
}

else{
    global  $rutaServidor,$rutaTemporal,$nombreImagen,$rutaDestino;
    
$descrip=$_POST['descripcion'];
$org=$_POST['txtid'];
$tabla=$_POST['txttabla'];
$sql="INSERT INTO datos( org_id,tabla,ruta,descripcion ) values ('".$org."','".$tabla."','".$rutaDestino."','".$descrip."') ";
$resp=  mysql_query($sql,$cn);
if($resp){
   echo "<script> $.bootstrapGrowl('It was inserted correctly'); </script>";
    
    
   
}

                    
                }
                
}
         
         
         
         
         
         
     }
        
        
        
        
        
        ?>
     <div id="referenciaMacros"></div>
      <em></em>
     </div>
     </div>
  
      
       
           
          <div class="biodata_table1">
              <div class="scroll_vertical1">
  
             <?php
  $e="entra"; 
if($e=="entra")
 {
    $cod=$_SESSION['sear'];
                
		
		$sql="select * from organism_information where Alias='$cod'";
		$cs=mysql_query($sql,$cn);
                
          
		while($resul=mysql_fetch_array($cs)){
			$var=$resul[0];
			$var1=$resul[1];
			$var2=$resul[2];
			$var3=$resul[3];
			$var4=$resul[4];
                        $var5=$resul[5];
                        	
			}
                        
             $cod=$_SESSION['sear'];
             $consul=  mysql_query("Select * from datos where org_id='$var' and tabla='macro' ");
while($filas=  mysql_fetch_array($consul)){
$esorg=$filas['id'];
$ruta=$filas['ruta'];
$desc=$filas['descripcion'];
    
?>
  <div id="PanelImag">
          <form  name="primerIma" method="post" action="EliminarFoto.php" onsubmit="return confirmation()">     
       
<?php echo $desc;?>
   
      <input type="hidden"  name="Eo"  id="Eo" value="<?php echo  $esorg;?>">
      <input type="submit"  name="submitButtonName"  id="submitButtonName" value="x" >
    
<br>  
<a href="<?php print_r($ruta) ;?>" target="_blank"><img src="<?php echo $ruta;?>" width="50" height="50"> </a>

        


</form>
</div>       
<?php
}
    	
             
//             <a href="#" target="_blank"><img border="0" src="Imagenes/Fotos.png" name="pic1" width="158px"></a>
 }
            ?>

             </div>
</td></tr></tbody></table>
    </div>   
     
     
<!--      -----------------------Micro-->
      
          <div class="TabbedPanelsContent" style="display: none;">
               <table border="0" width="830px"><tbody><tr><td>
              <div class="biodata_table " >
              
            <div class="scroll_vertical">   
                
       <form name="Microscopic_Morphology" method="POST" action="" >          
   <center>
     <table border="0">
      <tbody>
          <tr>
      
        <td width="280" bgcolor="#ffffff" valign="middle" align="center" class="small">
            <b>
                <input type="hidden" name="mic" value="<?php echo $var16?>" />
                
            </b>  
        </td>
      </tr>
      <tr>
<!--         <td><span class="small">* Org Name: </span></td>-->
<!--          <td class="small" align="center">-->
              <b>
                  <input  class="cajas" type="hidden" name="org" value="<?php echo $var17?>" />
            </b>  
<!--          </td>-->
      </tr>
      
      <tr bgcolor="#CCDDEE">
        <td><span class="small">*Medium Name: </span></td>
        <td class="small" align="center">
           <b>
                  <?php 
                   echo"<select  class='cajas' name=medi id=medi >"; 
  $sql="SELECT * FROM medium where lab='$lab'"; 
                           $result=mysql_query($sql); 
                          
                              $sqllab="SELECT Name FROM medium WHERE Medium_ID='$var18'";		
		$cslab=mysql_query($sqllab,$cn);
            while($resullab=mysql_fetch_array($cslab)){
			$consullab17=$resullab[0];
			}
                             echo "<option value=".$var18.">".$consullab17."</option>\n"; 
                 while ( $row = mysql_fetch_array($result)) 
                      { 
              echo "<option value=".$row["Medium_ID"].">".$row["Name"]."</option>\n"; 
                       } 
                  echo "</select>"; 
                     ?>
                    
            
            </b>  
      </tr>
      <tr>
          <td><span class="small">*User Name </span></td>
     <td class="small" align="center">
         <b>
             <?php 
                   echo"<select class='cajas' name=use id=use>"; 

                         $sql="SELECT * FROM user where lab='$lab'"; 
                           $result=mysql_query($sql); 
                          
                              $sqllab="SELECT Name FROM user WHERE User_ID='$var685'";		
		$cslab=mysql_query($sqllab,$cn);
            while($resullab=mysql_fetch_array($cslab)){
			$consullab18=$resullab[0];
			}
                             echo "<option value=".$var685.">".$consullab18."</option>\n"; 
                 while ( $row = mysql_fetch_array($result)) 
                      { 
              echo "<option value=".$row["User_ID"].">".$row["Name"]."</option>\n"; 
                       } 
                  echo "</select>"; 
                     ?>
                    
            
            </b>  
          </td>
     </tr>
      <tr><td valign="TOP"><span class="small">* Temperature: </span></td>
          <td class="small" align="center"> 
              <b>
                  <input  onKeyPress="return validar_monto(event)"  class="cajas" type="text" size="6"name="tempera" value="<?php echo $var19?>" />
            </b>  &#176; C 
      </td>
    </tr>
    <tr bgcolor="#CCDDEE">
      <td><span class="small">Agitation: </span></td>
      
    
      <td class="small" align="center">
         <b>
             <input onKeyPress="return validar_monto(event)"   class="cajas" type="text"  size="6"name="agitacion" value="<?php echo $var20?>" />
            </b>  RPM
          </td>
    </tr>
    
    <tr>
      <td><span class="small">Age: </span></td>
        <td class="small" align="center">
          <b>
              <input  class="cajas" type="text"  size="6"name="age" value="<?php echo $var21?>" />
            </b>  Hours
          </td>
    </tr> 
    
    <tr bgcolor="#CCDDEE">
      <td><span class="small">*Axis long: </span></td>
      
    
      <td class="small" align="center">
         <b>
             <input onKeyPress="return validar_monto(event)"   class="cajas" type="text" size="7" name="axis_long" value="<?php echo $var22?>" />
            </b>  &#181;m
          </td>
          
       
    <tr>
      <td><span class="small">*Axis short: </span></td>
        <td class="small" align="center">
          <b>
              <input  onKeyPress="return validar_monto(event)"  class="cajas" type="text" size="7"name="axis_short" value="<?php echo $var23?>" />
            </b>  &#181;m
          </td>
    </tr> 
    
    <tr bgcolor="#CCDDEE"> 
      <td><span class="small">Motility: </span></td>
  
      <td class="small" align="center">
          <select  class="cajas" name="molity">
               <option> <?php echo $var24?></option>
                <option>No</option>
                <option <?php echo $var24?> >Yes</option>
                </select></td>
    </tr>
    
    <tr>
      <td><span class="small">Aggregates: </span></td>
        <td class="small" align="center">
          <select  class="cajas" name="aggregates">
              <option> <?php echo $var25?></option>
                <option>No</option>
                <option <?php echo $var25?>>Yes</option>
                </select></td>
    </tr> 
    
    <tr bgcolor="#CCDDEE">
      <td><span class="small">Biofilm formation: </span></td>
      
    
      <td class="small" align="center">
         <select class="cajas" name="biofilm">
             <option> <?php echo $var26?></option>
                <option>No</option>
                <option <?php echo $var26?>>Yes</option>
                </select></td>
    </tr>
    
    <tr>
      <td><span class="small">Gram test: </span></td>
        <td class="small" align="center">
          <select class="cajas" name="gram">
              <option> <?php echo $var27?></option>
                <option>Gram -</option>
                <option <?php echo $var27?>>Gram +</option>
                </select></td>
    </tr> 
     <tr bgcolor="#CCDDEE">
<!--      <td><span class="small">Photo ID: </span></td>-->
      
    
<!--      <td class="small" align="center">
          <?php 
//                   echo"<select name=foto id=foto >"; 
//
//                           $sql="SELECT descripcion FROM datos"; 
//                           $result=mysql_query($sql); 
//                           $i=0; 
//                              echo "<option  value=".$var28.">".$var28."</option>\n"; 
//                 while ($row=mysql_fetch_row($result)) 
//                      { 
//              echo "<option  value=".$row[$i].">".$row[$i]."</option>\n"; 
//                       } 
//                  echo "</select>"; 
                     ?>
       
          </td>-->
   
    </tr>
    <input type="hidden" name="sub" id="sub" value="<?php echo $consul3?>"/>
      <input type="hidden" name="lab" id="lab" value="<?php echo $lab?>"/>
     <input type="hidden" name="foto" id="foto" value="1"/>
     
    
 <tr align="center" id="tercerboton" >
<td colspan="2">
    
    <input class="button" type="button" name="btn3" value="Update" onclick="return ValidarFormulario2(Microscopic_Morphology);"/> 
  <input  class="button" type="button" name="btns" value="Image" onclick="subirima3();"/> 
  <input class="button" type="button" name="btnNuevo" value="New" onclick="addMicros();"/> 
 <div id="div_oculto2" style="display: none;"></div>
</td>
</tr>

   
   
   </tbody></table> 
       
           <div id="microOculto1" style="display: none;">
        <table border="0">
      <tbody>
          <tr>
      
        <td width="280" bgcolor="#ffffff" valign="middle" align="center" class="small">
            <b>
                
                
            </b>  
        </td>
      </tr>
      <tr>
<!--         <td><span class="small">* Org Name: </span></td>-->
<!--          <td class="small" align="center">-->
              <b>
                
            </b>  
<!--          </td>-->
      </tr>
      
      <tr bgcolor="#CCDDEE">
        <td><span class="small">*Medium Name: </span></td>
        <td class="small" align="center">
           <b>
                  <?php 
                   echo"<select  class='cajas' name=medi1 id=medi1 >"; 

                           $sql="SELECT * FROM medium where lab='$lab'"; 
                           $result=mysql_query($sql); 
                          
                              $sqllab="SELECT Name FROM medium WHERE Medium_ID='$var358'";		
		$cslab=mysql_query($sqllab,$cn);
            while($resullab=mysql_fetch_array($cslab)){
			$consullab19=$resullab[0];
			}
                             echo "<option value=".$var358.">".$consullab19."</option>\n"; 
                 while ( $row = mysql_fetch_array($result)) 
                      { 
              echo "<option value=".$row["Medium_ID"].">".$row["Name"]."</option>\n"; 
                       } 
                  echo "</select>"; 
                     ?>
                    
            
            </b>  
      </tr>
      <tr>
          <td><span class="small">*User Name </span></td>
     <td class="small" align="center">
         <b>
             <?php 
                   echo"<select class='cajas' name=use1 id=use1>"; 

                           $sql="SELECT * FROM user where lab='$lab'"; 
                           $result=mysql_query($sql); 
                          
                              $sqllab="SELECT Name FROM user WHERE User_ID='$var686'";		
		$cslab=mysql_query($sqllab,$cn);
            while($resullab=mysql_fetch_array($cslab)){
			$consullab20=$resullab[0];
			}
                             echo "<option value=".$var686.">".$consullab20."</option>\n"; 
                 while ( $row = mysql_fetch_array($result)) 
                      { 
              echo "<option value=".$row["User_ID"].">".$row["Name"]."</option>\n"; 
                       } 
                  echo "</select>"; 
                     ?>
                    
            
            </b>  
          </td>
     </tr>
      <tr><td valign="TOP"><span class="small">* Temperature: </span></td>
          <td class="small" align="center"> 
              <b>
                  <input  onKeyPress="return validar_monto(event)"  class="cajas" type="text" size="6"name="tempera1" value="<?php echo $var359?>" />
            </b>  &#176; C 
      </td>
    </tr>
    <tr bgcolor="#CCDDEE">
      <td><span class="small">Agitation: </span></td>
      
    
      <td class="small" align="center">
         <b>
             <input onKeyPress="return validar_monto(event)"   class="cajas" type="text"  size="6"name="agitacion1" value="<?php echo $var360?>" />
            </b>  RPM
          </td>
    </tr>
    
    <tr>
      <td><span class="small">Age: </span></td>
        <td class="small" align="center">
          <b>
              <input  class="cajas" type="text"  size="6"name="age1" value="<?php echo $var361?>" />
            </b>  Hours
          </td>
    </tr> 
    
    <tr bgcolor="#CCDDEE">
      <td><span class="small">*Axis long: </span></td>
      
    
      <td class="small" align="center">
         <b>
             <input onKeyPress="return validar_monto(event)"   class="cajas" type="text" size="7" name="axis_long1" value="<?php echo $var362?>" />
            </b>  &#181;m
          </td>
          
       
    <tr>
      <td><span class="small">*Axis short: </span></td>
        <td class="small" align="center">
          <b>
              <input  onKeyPress="return validar_monto(event)"  class="cajas" type="text" size="7"name="axis_short1" value="<?php echo $var363?>" />
            </b>  &#181;m
          </td>
    </tr> 
    
    <tr bgcolor="#CCDDEE"> 
      <td><span class="small">Motility: </span></td>
  
      <td class="small" align="center">
          <select  class="cajas" name="molity1">
               <option> <?php echo $var364?></option>
                <option>No</option>
                <option <?php echo $var364?> >Yes</option>
                </select></td>
    </tr>
    
    <tr>
      <td><span class="small">Aggregates: </span></td>
        <td class="small" align="center">
          <select  class="cajas" name="aggregates1">
              <option> <?php echo $var365?></option>
                <option>No</option>
                <option <?php echo $var365?>>Yes</option>
                </select></td>
    </tr> 
    
    <tr bgcolor="#CCDDEE">
      <td><span class="small">Biofilm formation: </span></td>
      
    
      <td class="small" align="center">
         <select class="cajas" name="biofilm1">
             <option> <?php echo $var366?></option>
                <option>No</option>
                <option <?php echo $var366?>>Yes</option>
                </select></td>
    </tr>
    
    <tr>
      <td><span class="small">Gram test: </span></td>
        <td class="small" align="center">
          <select class="cajas" name="gram1">
              <option> <?php echo $var367?></option>
                <option>Gram -</option>
                <option <?php echo $var367?>>Gram +</option>
                </select></td>
    </tr> 
     <tr bgcolor="#CCDDEE">
<!--      <td><span class="small">Photo ID: </span></td>-->
      
    
<!--      <td class="small" align="center">
          <?php 
//                   echo"<select name=foto id=foto >"; 
//
//                           $sql="SELECT descripcion FROM datos"; 
//                           $result=mysql_query($sql); 
//                           $i=0; 
//                              echo "<option  value=".$var28.">".$var28."</option>\n"; 
//                 while ($row=mysql_fetch_row($result)) 
//                      { 
//              echo "<option  value=".$row[$i].">".$row[$i]."</option>\n"; 
//                       } 
//                  echo "</select>"; 
                     ?>
       
          </td>-->
   
    </tr>
    <input type="hidden" name="sub" id="sub" value="<?php echo $consul3?>"/>
      <input type="hidden" name="lab" id="lab" value="<?php echo $lab?>"/>
     <input type="hidden" name="foto" id="foto" value="1"/>
     
    
 <tr align="center" id="tercerboton" >
<td colspan="2">
    
   
 <div id="div_oculto2" style="display: none;"></div>
</td>
</tr>

   
   
   </tbody></table> 
           </div>
         <div id="microOculto2" style="display: none;" >
        <table border="0">
      <tbody>
          <tr>
      
        <td width="280" bgcolor="#ffffff" valign="middle" align="center" class="small">
            <b>
                
                
            </b>  
        </td>
      </tr>
      <tr>
<!--         <td><span class="small">* Org Name: </span></td>-->
<!--          <td class="small" align="center">-->
              <b>
                  
            </b>  
<!--          </td>-->
      </tr>
      
      <tr bgcolor="#CCDDEE">
        <td><span class="small">*Medium Name: </span></td>
        <td class="small" align="center">
           <b>
                  <?php 
                   echo"<select  class='cajas' name=medi2 id=medi2 >"; 

                            $sql="SELECT * FROM medium where lab='$lab'"; 
                           $result=mysql_query($sql); 
                          
                              $sqllab="SELECT Name FROM medium WHERE Medium_ID='$var368'";		
		$cslab=mysql_query($sqllab,$cn);
            while($resullab=mysql_fetch_array($cslab)){
			$consullab21=$resullab[0];
			}
                             echo "<option value=".$var368.">".$consullab21."</option>\n"; 
                 while ( $row = mysql_fetch_array($result)) 
                      { 
              echo "<option value=".$row["Medium_ID"].">".$row["Name"]."</option>\n"; 
                       } 
                  echo "</select>"; 
                     ?>
                    
            
            </b>  
      </tr>
      <tr>
          <td><span class="small">*User Name </span></td>
     <td class="small" align="center">
         <b>
             <?php 
                   echo"<select class='cajas' name=use2 id=use2>"; 

                            $sql="SELECT * FROM user where lab='$lab'"; 
                           $result=mysql_query($sql); 
                          
                              $sqllab="SELECT Name FROM user WHERE User_ID='$var687'";		
		$cslab=mysql_query($sqllab,$cn);
            while($resullab=mysql_fetch_array($cslab)){
			$consullab22=$resullab[0];
			}
                             echo "<option value=".$var687.">".$consullab22."</option>\n"; 
                 while ( $row = mysql_fetch_array($result)) 
                      { 
              echo "<option value=".$row["User_ID"].">".$row["Name"]."</option>\n"; 
                       } 
                  echo "</select>"; 
                     ?>
                    
            
            </b>  
          </td>
     </tr>
      <tr><td valign="TOP"><span class="small">* Temperature: </span></td>
          <td class="small" align="center"> 
              <b>
                  <input  onKeyPress="return validar_monto(event)"  class="cajas" type="text" size="6"name="tempera2" value="<?php echo $var369?>" />
            </b>  &#176; C 
      </td>
    </tr>
    <tr bgcolor="#CCDDEE">
      <td><span class="small">Agitation: </span></td>
      
    
      <td class="small" align="center">
         <b>
             <input onKeyPress="return validar_monto(event)"   class="cajas" type="text"  size="6"name="agitacion2" value="<?php echo $var370?>" />
            </b>  RPM
          </td>
    </tr>
    
    <tr>
      <td><span class="small">Age: </span></td>
        <td class="small" align="center">
          <b>
              <input  class="cajas" type="text"  size="6"name="age2" value="<?php echo $var371?>" />
            </b>  Hours
          </td>
    </tr> 
    
    <tr bgcolor="#CCDDEE">
      <td><span class="small">*Axis long: </span></td>
      
    
      <td class="small" align="center">
         <b>
             <input onKeyPress="return validar_monto(event)"   class="cajas" type="text" size="7" name="axis_long2" value="<?php echo $var372?>" />
            </b>  &#181;m
          </td>
          
       
    <tr>
      <td><span class="small">*Axis short: </span></td>
        <td class="small" align="center">
          <b>
              <input  onKeyPress="return validar_monto(event)"  class="cajas" type="text" size="7"name="axis_short2" value="<?php echo $var373?>" />
            </b>  &#181;m
          </td>
    </tr> 
    
    <tr bgcolor="#CCDDEE"> 
      <td><span class="small">Motility: </span></td>
  
      <td class="small" align="center">
          <select  class="cajas" name="molity2">
               <option> <?php echo $var374?></option>
                <option>No</option>
                <option <?php echo $var374?> >Yes</option>
                </select></td>
    </tr>
    
    <tr>
      <td><span class="small">Aggregates: </span></td>
        <td class="small" align="center">
          <select  class="cajas" name="aggregates2">
              <option> <?php echo $var375?></option>
                <option>No</option>
                <option <?php echo $var375?>>Yes</option>
                </select></td>
    </tr> 
    
    <tr bgcolor="#CCDDEE">
      <td><span class="small">Biofilm formation: </span></td>
      
    
      <td class="small" align="center">
         <select class="cajas" name="biofilm2">
             <option> <?php echo $var376?></option>
                <option>No</option>
                <option <?php echo $var376?>>Yes</option>
                </select></td>
    </tr>
    
    <tr>
      <td><span class="small">Gram test: </span></td>
        <td class="small" align="center">
          <select class="cajas" name="gram2">
              <option> <?php echo $var377?></option>
                <option>Gram -</option>
                <option <?php echo $var377?>>Gram +</option>
                </select></td>
    </tr> 
     <tr bgcolor="#CCDDEE">
<!--      <td><span class="small">Photo ID: </span></td>-->
      
    
<!--      <td class="small" align="center">
          <?php 
//                   echo"<select name=foto id=foto >"; 
//
//                           $sql="SELECT descripcion FROM datos"; 
//                           $result=mysql_query($sql); 
//                           $i=0; 
//                              echo "<option  value=".$var28.">".$var28."</option>\n"; 
//                 while ($row=mysql_fetch_row($result)) 
//                      { 
//              echo "<option  value=".$row[$i].">".$row[$i]."</option>\n"; 
//                       } 
//                  echo "</select>"; 
                     ?>
       
          </td>-->
   
    </tr>
    <input type="hidden" name="sub" id="sub" value="<?php echo $consul3?>"/>
      <input type="hidden" name="lab" id="lab" value="<?php echo $lab?>"/>
     <input type="hidden" name="foto" id="foto" value="1"/>
     
    
 <tr align="center" id="tercerboton" >
<td colspan="2">
    
   
 <div id="div_oculto2" style="display: none;"></div>
</td>
</tr>

   
   
   </tbody></table> 
       </div>
         <div id="microOculto3" style="display: none;">
        <table border="0">
      <tbody>
          <tr>
      
        <td width="280" bgcolor="#ffffff" valign="middle" align="center" class="small">
            <b>
               
                
            </b>  
        </td>
      </tr>
      <tr>
<!--         <td><span class="small">* Org Name: </span></td>-->
<!--          <td class="small" align="center">-->
              <b>
                  
            </b>  
<!--          </td>-->
      </tr>
      
      <tr bgcolor="#CCDDEE">
        <td><span class="small">*Medium Name: </span></td>
        <td class="small" align="center">
           <b>
                  <?php 
                   echo"<select  class='cajas' name=medi3 id=medi3 >"; 

                            $sql="SELECT * FROM medium where lab='$lab'"; 
                           $result=mysql_query($sql); 
                          
                              $sqllab="SELECT Name FROM medium WHERE Medium_ID='$var378'";		
		$cslab=mysql_query($sqllab,$cn);
            while($resullab=mysql_fetch_array($cslab)){
			$consullab23=$resullab[0];
			}
                             echo "<option value=".$var378.">".$consullab23."</option>\n"; 
                 while ( $row = mysql_fetch_array($result)) 
                      { 
              echo "<option value=".$row["Medium_ID"].">".$row["Name"]."</option>\n"; 
                       } 
                  echo "</select>"; 
                     ?>
                    
            
            </b>  
      </tr>
      <tr>
          <td><span class="small">*User Name </span></td>
     <td class="small" align="center">
         <b>
             <?php 
                   echo"<select class='cajas' name=use3 id=use3>"; 

                          $sql="SELECT * FROM user where lab='$lab'"; 
                           $result=mysql_query($sql); 
                          
                              $sqllab="SELECT Name FROM user WHERE User_ID='$var688'";		
		$cslab=mysql_query($sqllab,$cn);
            while($resullab=mysql_fetch_array($cslab)){
			$consullab24=$resullab[0];
			}
                             echo "<option value=".$var688.">".$consullab24."</option>\n"; 
                 while ( $row = mysql_fetch_array($result)) 
                      { 
              echo "<option value=".$row["User_ID"].">".$row["Name"]."</option>\n"; 
                       } 
                  echo "</select>"; 
                     ?>
                    
            
            </b>  
          </td>
     </tr>
      <tr><td valign="TOP"><span class="small">* Temperature: </span></td>
          <td class="small" align="center"> 
              <b>
                  <input  onKeyPress="return validar_monto(event)"  class="cajas" type="text" size="6"name="tempera3" value="<?php echo $var379?>" />
            </b>  &#176; C 
      </td>
    </tr>
    <tr bgcolor="#CCDDEE">
      <td><span class="small">Agitation: </span></td>
      
    
      <td class="small" align="center">
         <b>
             <input onKeyPress="return validar_monto(event)"   class="cajas" type="text"  size="6"name="agitacion3" value="<?php echo $var380?>" />
            </b>  RPM
          </td>
    </tr>
    
    <tr>
      <td><span class="small">Age: </span></td>
        <td class="small" align="center">
          <b>
              <input  class="cajas" type="text"  size="6"name="age3" value="<?php echo $var381?>" />
            </b>  Hours
          </td>
    </tr> 
    
    <tr bgcolor="#CCDDEE">
      <td><span class="small">*Axis long: </span></td>
      
    
      <td class="small" align="center">
         <b>
             <input onKeyPress="return validar_monto(event)"   class="cajas" type="text" size="7" name="axis_long3" value="<?php echo $var382?>" />
            </b>  &#181;m
          </td>
          
       
    <tr>
      <td><span class="small">*Axis short: </span></td>
        <td class="small" align="center">
          <b>
              <input  onKeyPress="return validar_monto(event)"  class="cajas" type="text" size="7"name="axis_short3" value="<?php echo $var383?>" />
            </b>  &#181;m
          </td>
    </tr> 
    
    <tr bgcolor="#CCDDEE"> 
      <td><span class="small">Motility: </span></td>
  
      <td class="small" align="center">
          <select  class="cajas" name="molity3">
               <option> <?php echo $var384?></option>
                <option>No</option>
                <option <?php echo $var384?> >Yes</option>
                </select></td>
    </tr>
    
    <tr>
      <td><span class="small">Aggregates: </span></td>
        <td class="small" align="center">
          <select  class="cajas" name="aggregates3">
              <option> <?php echo $var385?></option>
                <option>No</option>
                <option <?php echo $var385?>>Yes</option>
                </select></td>
    </tr> 
    
    <tr bgcolor="#CCDDEE">
      <td><span class="small">Biofilm formation: </span></td>
      
    
      <td class="small" align="center">
         <select class="cajas" name="biofilm3">
             <option> <?php echo $var386?></option>
                <option>No</option>
                <option <?php echo $var386?>>Yes</option>
                </select></td>
    </tr>
    
    <tr>
      <td><span class="small">Gram test: </span></td>
        <td class="small" align="center">
          <select class="cajas" name="gram3">
              <option> <?php echo $var387?></option>
                <option>Gram -</option>
                <option <?php echo $var387?>>Gram +</option>
                </select></td>
    </tr> 
     <tr bgcolor="#CCDDEE">
<!--      <td><span class="small">Photo ID: </span></td>-->
      
    
<!--      <td class="small" align="center">
          <?php 
//                   echo"<select name=foto id=foto >"; 
//
//                           $sql="SELECT descripcion FROM datos"; 
//                           $result=mysql_query($sql); 
//                           $i=0; 
//                              echo "<option  value=".$var28.">".$var28."</option>\n"; 
//                 while ($row=mysql_fetch_row($result)) 
//                      { 
//              echo "<option  value=".$row[$i].">".$row[$i]."</option>\n"; 
//                       } 
//                  echo "</select>"; 
                     ?>
       
          </td>-->
   
    </tr>
    <input type="hidden" name="sub" id="sub" value="<?php echo $consul3?>"/>
      <input type="hidden" name="lab" id="lab" value="<?php echo $lab?>"/>
     <input type="hidden" name="foto" id="foto" value="1"/>
     
    
 <tr align="center" id="tercerboton" >
<td colspan="2">
    
  
 <div id="div_oculto2" style="display: none;"></div>
</td>
</tr>

   
   
   </tbody></table> 
        </div>
         <div id="microOculto4"  style="display: none;">
        <table border="0">
      <tbody>
          <tr>
      
        <td width="280" bgcolor="#ffffff" valign="middle" align="center" class="small">
            <b>
                
                
            </b>  
        </td>
      </tr>
      <tr>
<!--         <td><span class="small">* Org Name: </span></td>-->
<!--          <td class="small" align="center">-->
              <b>
                 
            </b>  
<!--          </td>-->
      </tr>
      
      <tr bgcolor="#CCDDEE">
        <td><span class="small">*Medium Name: </span></td>
        <td class="small" align="center">
           <b>
                  <?php 
                   echo"<select  class='cajas' name=medi4 id=medi4 >"; 

                            $sql="SELECT * FROM medium where lab='$lab'"; 
                           $result=mysql_query($sql); 
                          
                              $sqllab="SELECT Name FROM medium WHERE Medium_ID='$var388'";		
		$cslab=mysql_query($sqllab,$cn);
            while($resullab=mysql_fetch_array($cslab)){
			$consullab25=$resullab[0];
			}
                             echo "<option value=".$var388.">".$consullab25."</option>\n"; 
                 while ( $row = mysql_fetch_array($result)) 
                      { 
              echo "<option value=".$row["Medium_ID"].">".$row["Name"]."</option>\n"; 
                       } 
                  echo "</select>"; 
                     ?>
                    
            
            </b>  
      </tr>
      <tr>
          <td><span class="small">*User Name </span></td>
     <td class="small" align="center">
         <b>
             <?php 
                   echo"<select class='cajas' name=use4 id=use4>"; 
 $sql="SELECT * FROM user where lab='$lab'"; 
                           $result=mysql_query($sql); 
                          
                              $sqllab="SELECT Name FROM user WHERE User_ID='$var689'";		
		$cslab=mysql_query($sqllab,$cn);
            while($resullab=mysql_fetch_array($cslab)){
			$consullab26=$resullab[0];
			}
                             echo "<option value=".$var689.">".$consullab26."</option>\n"; 
                 while ( $row = mysql_fetch_array($result)) 
                      { 
              echo "<option value=".$row["User_ID"].">".$row["Name"]."</option>\n"; 
                       } 
                  echo "</select>"; 
                     ?>
                    
            
            </b>  
          </td>
     </tr>
      <tr><td valign="TOP"><span class="small">* Temperature: </span></td>
          <td class="small" align="center"> 
              <b>
                  <input  onKeyPress="return validar_monto(event)"  class="cajas" type="text" size="6"name="tempera4" value="<?php echo $var389?>" />
            </b>  &#176; C 
      </td>
    </tr>
    <tr bgcolor="#CCDDEE">
      <td><span class="small">Agitation: </span></td>
      
    
      <td class="small" align="center">
         <b>
             <input onKeyPress="return validar_monto(event)"   class="cajas" type="text"  size="6"name="agitacion4" value="<?php echo $var390?>" />
            </b>  RPM
          </td>
    </tr>
    
    <tr>
      <td><span class="small">Age: </span></td>
        <td class="small" align="center">
          <b>
              <input  class="cajas" type="text"  size="6"name="age4" value="<?php echo $var391?>" />
            </b>  Hours
          </td>
    </tr> 
    
    <tr bgcolor="#CCDDEE">
      <td><span class="small">*Axis long: </span></td>
      
    
      <td class="small" align="center">
         <b>
             <input onKeyPress="return validar_monto(event)"   class="cajas" type="text" size="7" name="axis_long4" value="<?php echo $var392?>" />
            </b>  &#181;m
          </td>
          
       
    <tr>
      <td><span class="small">*Axis short: </span></td>
        <td class="small" align="center">
          <b>
              <input  onKeyPress="return validar_monto(event)"  class="cajas" type="text" size="7"name="axis_short4" value="<?php echo $var393?>" />
            </b>  &#181;m
          </td>
    </tr> 
    
    <tr bgcolor="#CCDDEE"> 
      <td><span class="small">Motility: </span></td>
  
      <td class="small" align="center">
          <select  class="cajas" name="molity4">
               <option> <?php echo $var394?></option>
                <option>No</option>
                <option <?php echo $var394?> >Yes</option>
                </select></td>
    </tr>
    
    <tr>
      <td><span class="small">Aggregates: </span></td>
        <td class="small" align="center">
          <select  class="cajas" name="aggregates4">
              <option> <?php echo $var395?></option>
                <option>No</option>
                <option <?php echo $var395?>>Yes</option>
                </select></td>
    </tr> 
    
    <tr bgcolor="#CCDDEE">
      <td><span class="small">Biofilm formation: </span></td>
      
    
      <td class="small" align="center">
         <select class="cajas" name="biofilm4">
             <option> <?php echo $var396?></option>
                <option>No</option>
                <option <?php echo $var396?>>Yes</option>
                </select></td>
    </tr>
    
    <tr>
      <td><span class="small">Gram test: </span></td>
        <td class="small" align="center">
          <select class="cajas" name="gram4">
              <option> <?php echo $var397?></option>
                <option>Gram -</option>
                <option <?php echo $var397?>>Gram +</option>
                </select></td>
    </tr> 
     <tr bgcolor="#CCDDEE">
<!--      <td><span class="small">Photo ID: </span></td>-->
      
    
<!--      <td class="small" align="center">
          <?php 
//                   echo"<select name=foto id=foto >"; 
//
//                           $sql="SELECT descripcion FROM datos"; 
//                           $result=mysql_query($sql); 
//                           $i=0; 
//                              echo "<option  value=".$var28.">".$var28."</option>\n"; 
//                 while ($row=mysql_fetch_row($result)) 
//                      { 
//              echo "<option  value=".$row[$i].">".$row[$i]."</option>\n"; 
//                       } 
//                  echo "</select>"; 
                     ?>
       
          </td>-->
   
    </tr>
    <input type="hidden" name="sub" id="sub" value="<?php echo $consul3?>"/>
      <input type="hidden" name="lab" id="lab" value="<?php echo $lab?>"/>
     <input type="hidden" name="foto" id="foto" value="1"/>
     
    
 <tr align="center" id="tercerboton" >
<td colspan="2">
    

 <div id="div_oculto2" style="display: none;"></div>
</td>
</tr>

   
   
   </tbody></table> 
        </div>
        
 </center>
            </form>    
       
               
   <div id="sube3"  style="display:none"> 
                
 <form name="image" id="subeima" action="" method="post" enctype="multipart/form-data">
        <table border="2">
            
            <input type="hidden" name="txtid" value="<?php echo $var?>"/>
<input type="hidden" name="txttabla" value="micro"/>
<center><h3>Image</h3></center>
<tr>
<td>Description</td>
<td><input class="cajas" type="text" name="descripcion"  /></td>
</tr>
<tr>
<td>Image</td>
<td><input  class="cajas" type="file" name="imagen"  /></td>
</tr>

<tr>

    <td><input class="button" type="submit" name="btnterceri"  value="ADD"/></td>
</tr>
        </table>
        </form>
   </div>
<?php
     if(isset($_POST["btnterceri"])){
         
         	$btn=$_POST["btnterceri"];
                if($btn=="ADD"){
                
                    $rutaServidor='Ima';
$rutaTemporal=$_FILES['imagen']['tmp_name'];
$nombreImagen=$_FILES['imagen']['name'];
$rutaDestino=$rutaServidor.'/'.$nombreImagen;
move_uploaded_file($rutaTemporal, $rutaDestino);

if( $nombreImagen=="")
{

      echo "<script> $.bootstrapGrowl('No inserted'); </script>";
    
}

else{
    global  $rutaServidor,$rutaTemporal,$nombreImagen,$rutaDestino;
    

$descrip=$_POST['descripcion'];
$org=$_POST['txtid'];
$t=$_POST['txttabla'];
$sql="INSERT INTO datos( org_id,ruta,descripcion ) values ('".$org."','".$t."','".$rutaDestino."','".$descrip."') ";
$resp=  mysql_query($sql,$cn);
if($resp){
    echo "<script> $.bootstrapGrowl('It was inserted correctly'); </script>";
    
    
   
    
}
}
                    
                }
         
         
         
         
         
         
     }
        
        
        
        
        
        ?>

        

               
<div id="referenciaMicros"></div>
      <pre></pre>
</div>  
 
 </div>
                               
 <div class="biodata_table1">
  <div class="scroll_vertical1">
            
    <?php
         
  $e="entra"; 
if($e=="entra")
 {
    		$cod=$_SESSION['sear'];
                
		
		$sql="select * from organism_information where Alias='$cod'";
		$cs=mysql_query($sql,$cn);
                
          
		while($resul=mysql_fetch_array($cs)){
			$var=$resul[0];
			$var1=$resul[1];
			$var2=$resul[2];
			$var3=$resul[3];
			$var4=$resul[4];
                        $var5=$resul[5];
                        	
			}
                        
             $cod=$_SESSION['sear'];
             $consul=  mysql_query("Select * from datos where org_id='$var' and tabla='micro' ");
while($filas=  mysql_fetch_array($consul)){
     $id_2=$filas['id'];
$ruta=$filas['ruta'];
$desc=$filas['descripcion'];
    
?>
        <div id="PanelImag">
<form  name="primerIma" method="post" action="EliminarFoto.php" onsubmit="return confirmation()">
<?php echo $desc;?> 
  <input type="hidden"  name="Eo"  id="Eo" value="<?php echo  $id_2;?>">
      <input type="submit"  name="submitButtonName"  id="submitButtonName" value="x" >
 <br>
<a href="<?php print_r($ruta) ;?>" target="_blank"><img src="<?php echo $ruta;?>" width="50" height="50"> </a>

&nbsp;&nbsp;&nbsp
</form>
</div>

 
    
    <?php
}
             
//             <a href="#" target="_blank"><img border="0" src="Imagenes/Fotos.png" name="pic1" width="158px"></a>
 }
            ?>
 </div>
</td></tr></tbody></table>
  </div>
          
<!---------------------Growth--> 
         
         <div class="TabbedPanelsContent" style="display: none;">
               <table border="0" width="830px"><tbody><tr><td>
              <div class="biodata_table " >
              
                  <div class="scroll_vertical">
              <form name="Growth_characteristics" method="POST" action="" >             
    <center>
     <table border="0">
      <tbody>
          <tr>
       
        <td width="280" bgcolor="#ffffff" valign="middle" align="center" class="small">
            <b>
                <input type="hidden" name="gro" value="<?php echo $var29?>" />
            </b>  
        </td>
      </tr>
      <tr>
<!--         <td><span class="small">* Org Name: </span></td>-->
<!--          <td class="small" align="center">-->
              <b>
             <input class="cajas" type="hidden" name="org" value="<?php echo $var30?>" />
            </b>  
<!--          </td>-->
      </tr>
      
      <tr bgcolor="#CCDDEE">
        <td><span class="small">*Medium Name : </span></td>
        <td class="small" align="center">
           <b>
                <?php 
                   echo"<select class='cajas' name=medi id=medi >"; 

                             $sql="SELECT * FROM medium where lab='$lab'"; 
                           $result=mysql_query($sql); 
                          
                              $sqllab="SELECT Name FROM medium WHERE Medium_ID='$var31'";		
		$cslab=mysql_query($sqllab,$cn);
            while($resullab=mysql_fetch_array($cslab)){
			$consullab27=$resullab[0];
			}
                             echo "<option value=".$var31.">".$consullab27."</option>\n"; 
                 while ( $row = mysql_fetch_array($result)) 
                      { 
              echo "<option value=".$row["Medium_ID"].">".$row["Name"]."</option>\n"; 
                       } 
                  echo "</select>"; 
                     ?>
             
            </b>  
      </tr>
      <tr><td valign="TOP"><span class="small">* Temperature solid: </span></td>
          <td class="small" align="center"> 
              <b>
                  <input onKeyPress="return validar_monto(event)" class="cajas" type="text" size="7" name="tempera" value="<?php echo $var32?>" />
            </b>  &#176;C
      </td>
    </tr>
    <tr bgcolor="#CCDDEE">
      <td><span class="small">* Time solid: </span></td>
      
    
      <td class="small" align="center">
         <b>
             <input class="cajas" type="time" size="7"name="tiempo" value="<?php echo $var33?>" />
            </b> Hours 
          </td>
    </tr>
    
    <tr>
      <td><span class="small">* Medium liquid: </span></td>
        <td class="small" align="center">
          <b>
               <?php 
                   echo"<select class='cajas' name=medium id=medium >"; 

                             $sql="SELECT * FROM medium where lab='$lab'"; 
                           $result=mysql_query($sql); 
                          
                              $sqllab="SELECT Name FROM medium WHERE Medium_ID='$var34'";		
		$cslab=mysql_query($sqllab,$cn);
            while($resullab=mysql_fetch_array($cslab)){
			$consullab28=$resullab[0];
			}
                             echo "<option value=".$var34.">".$consullab28."</option>\n"; 
                 while ( $row = mysql_fetch_array($result)) 
                      { 
              echo "<option value=".$row["Medium_ID"].">".$row["Name"]."</option>\n"; 
                       } 
                  echo "</select>"; 
                     ?>
              
            
            </b>  
          </td>
    </tr> 
    
    <tr bgcolor="#CCDDEE">
      <td><span class="small">*Temperature liquid: </span></td>
      
    
      <td class="small" align="center">
         <b>
             <input onKeyPress="return validar_monto(event)"   class="cajas" type="text" size="7"name="temp_liq" value="<?php echo $var35?>" />
            </b>  &#176;C
          </td>
     <tr>
          <td><span class="small">*User Name </span></td>
     <td class="small" align="center">
         <b>
             <?php 
                   echo"<select class='cajas' name=use id=use>"; 

                          $sql="SELECT * FROM user where lab='$lab'"; 
                           $result=mysql_query($sql); 
                          
                              $sqllab="SELECT Name FROM user WHERE User_ID='$var690'";		
		$cslab=mysql_query($sqllab,$cn);
            while($resullab=mysql_fetch_array($cslab)){
			$consullab29=$resullab[0];
			}
                             echo "<option value=".$var690.">".$consullab29."</option>\n"; 
                 while ( $row = mysql_fetch_array($result)) 
                      { 
              echo "<option value=".$row["User_ID"].">".$row["Name"]."</option>\n"; 
                       } 
                  echo "</select>"; 
                     ?>
                    
            
            </b>  
          </td>
     </tr>      
       <tr>
      <td><span class="small">*Agitation time: </span></td>
        <td class="small" align="center">
          <b>
              <input class="cajas" type="time"  size="7"name="agitation" value="<?php echo $var36?>" />
            </b>  Hours
          </td>
    </tr> 
    
    <tr bgcolor="#CCDDEE">
      <td><span class="small">*Time liquid: </span></td>
      
    
      <td class="small" align="center">
         <b>
             <input class="cajas" type="time" size="7" name="tim_liq" value="<?php echo $var37?>" />
            </b>  Hours
          </td>
    </tr>
    
    <tr>
      <td><span class="small">*pH initial: </span></td>
        <td class="small" align="center">
          <b>
              <input  min="1" max="13" nKeyPress="return validar_monto(event)"   class="cajas" size="7" type="number"  id="ph_i" name="ph_i" value="<?php echo $var38?>" />
            </b>  
          </td>
    </tr> 
    
    <tr bgcolor="#CCDDEE">
      <td><span class="small">*pH final: </span></td>
      
    
      <td class="small" align="center">
         <b>
             <input min="1" max="13"  onKeyPress="return validar_monto(event)"  size="7"class="cajas" type="number" id="ph_f" name="ph_f" value="<?php echo $var39?>" />
            </b>  
          </td>
         
    </tr>
    
    <tr>
      <td><span class="small">*OD600 initia: </span></td>
        <td class="small" align="center">
          <b>
              <input onKeyPress="return validar_monto(event)"  size="7"class="cajas" type="text" name="od_i" value="<?php echo $var40?>" />
            </b>  <div id="mensaje"></div>
          </td>
    </tr> 
     <tr bgcolor="#CCDDEE">
      <td><span class="small">*OD600 final: </span></td>
      
    
      <td class="small" align="center">
         <b>
             <input onKeyPress="return validar_monto(event)"  size="7" class="cajas" type="text" id="od_f" name="od_f" value="<?php echo $var41?>" />
            </b>  
          </td>
    </tr>
    
    <tr>
      <td><span class="small">Extra parameters: </span></td>
        <td class="small" align="center">
          <b>
             <input class="cajas" type="text" name="p_extra" value="<?php echo $var42?>" />
            </b>  
          </td>
    </tr> 
     <tr bgcolor="#CCDDEE">
<!--      <td><span class="small">Kinetics: </span></td>-->
      
    
      
          <?php 
//                   echo"<select class='cajas' name=kinetics id=kinetics >"; 
//
//                           $sql="SELECT Name FROM document"; 
//                           $result=mysql_query($sql); 
//                           $i=0; 
//               echo "<option  value=".$var43.">".$var43."</option>\n"; 
//                 while ($row=mysql_fetch_row($result)) 
//                      { 
//              echo "<option  value=".$row[$i].">".$row[$i]."</option>\n"; 
//                       } 
//                  echo "</select>"; 
                     ?>
         <b>
             <input class="cajas" type="hidden" name="kinetics" value="<?php echo $var43?>" />
            </b>  
          </td>
    </tr>
     <input type="hidden" name="sub" id="sub" value="<?php echo $consul3?>"/>
     <input type="hidden" name="lab" id="lab" value="<?php echo $lab?>"/>
    
    
    
                   <tr align="center" id="cuartoboton" >
<td colspan="2">
    
    <input class="button" type="button" name="btn4" value="Update"onclick="return ValidarFormulario3(Growth_characteristics);"/> 
   <input class="button" type="button" name="btns" value="Document" onclick="subirima4();"/>
     <input class="button" type="button" name="btnNuevo" value="New" onclick="addGrow();"/>
</td>
</tr>
 <div id="div_oculto3" style="display: none;"></div>
   
    
   </tbody></table> 
        
        <div id="GrowOcultar1" style="display: none;">
            <table border="0">
      <tbody>
          <tr>
       
        <td width="280" bgcolor="#ffffff" valign="middle" align="center" class="small">
            <b>
              
            </b>  
        </td>
      </tr>
      <tr>
<!--         <td><span class="small">* Org Name: </span></td>-->
<!--          <td class="small" align="center">-->
              <b>
            
            </b>  
<!--          </td>-->
      </tr>
      
      <tr bgcolor="#CCDDEE">
        <td><span class="small">*Medium Name : </span></td>
        <td class="small" align="center">
           <b>
                <?php 
                   echo"<select class='cajas' name=medi1 id=medi1 >"; 

                             $sql="SELECT * FROM medium where lab='$lab'"; 
                           $result=mysql_query($sql); 
                          
                              $sqllab="SELECT Name FROM medium WHERE Medium_ID='$var398'";		
		$cslab=mysql_query($sqllab,$cn);
            while($resullab=mysql_fetch_array($cslab)){
			$consullab30=$resullab[0];
			}
                             echo "<option value=".$var398.">".$consullab30."</option>\n"; 
                 while ( $row = mysql_fetch_array($result)) 
                      { 
              echo "<option value=".$row["Medium_ID"].">".$row["Name"]."</option>\n"; 
                       } 
                  echo "</select>"; 
                     ?>
             
            </b>  
      </tr>
      <tr><td valign="TOP"><span class="small">* Temperature solid: </span></td>
          <td class="small" align="center"> 
              <b>
                  <input onKeyPress="return validar_monto(event)" class="cajas" type="text" size="7" name="tempera1" value="<?php echo $var399?>" />
            </b>  &#176;C
      </td>
    </tr>
    <tr bgcolor="#CCDDEE">
      <td><span class="small">* Time solid: </span></td>
      
    
      <td class="small" align="center">
         <b>
             <input class="cajas" type="time" size="7"name="tiempo1" value="<?php echo $var400?>" />
            </b> Hours 
          </td>
    </tr>
    
    <tr>
      <td><span class="small">* Medium liquid: </span></td>
        <td class="small" align="center">
          <b>
               <?php 
                   echo"<select class='cajas' name=medium1 id=medium1 >"; 

                        $sql="SELECT * FROM medium where lab='$lab'"; 
                           $result=mysql_query($sql); 
                          
                              $sqllab="SELECT Name FROM medium WHERE Medium_ID='$var401'";		
		$cslab=mysql_query($sqllab,$cn);
            while($resullab=mysql_fetch_array($cslab)){
			$consullab31=$resullab[0];
			}
                             echo "<option value=".$var401.">".$consullab31."</option>\n"; 
                 while ( $row = mysql_fetch_array($result)) 
                      { 
              echo "<option value=".$row["Medium_ID"].">".$row["Name"]."</option>\n"; 
                       } 
                  echo "</select>"; 
                     ?>
              
            
            </b>  
          </td>
    </tr> 
    
    <tr bgcolor="#CCDDEE">
      <td><span class="small">*Temperature liquid: </span></td>
      
    
      <td class="small" align="center">
         <b>
             <input onKeyPress="return validar_monto(event)"   class="cajas" type="text" size="7"name="temp_liq1" value="<?php echo $var402?>" />
            </b>  &#176;C
          </td>
           <tr>
          <td><span class="small">*User Name </span></td>
     <td class="small" align="center">
         <b>
             <?php 
                   echo"<select class='cajas' name=use1 id=use1>"; 
 $sql="SELECT * FROM user where lab='$lab'"; 
                           $result=mysql_query($sql); 
                          
                              $sqllab="SELECT Name FROM user WHERE User_ID='$var691'";		
		$cslab=mysql_query($sqllab,$cn);
            while($resullab=mysql_fetch_array($cslab)){
			$consullab32=$resullab[0];
			}
                             echo "<option value=".$var691.">".$consullab32."</option>\n"; 
                 while ( $row = mysql_fetch_array($result)) 
                      { 
              echo "<option value=".$row["User_ID"].">".$row["Name"]."</option>\n"; 
                       } 
                  echo "</select>"; 
                     ?>
                    
            
            </b>  
          </td>
     </tr>
       <tr>
      <td><span class="small">*Agitation time: </span></td>
        <td class="small" align="center">
          <b>
              <input class="cajas" type="time"  size="7"name="agitation1" value="<?php echo $var403?>" />
            </b>  Hours
          </td>
    </tr> 
    
    <tr bgcolor="#CCDDEE">
      <td><span class="small">*Time liquid: </span></td>
      
    
      <td class="small" align="center">
         <b>
             <input class="cajas" type="time" size="7" name="tim_liq1" value="<?php echo $var404?>" />
            </b>  Hours
          </td>
    </tr>
    
    <tr>
      <td><span class="small">*pH initial: </span></td>
        <td class="small" align="center">
          <b>
              <input  min="1" max="13" nKeyPress="return validar_monto(event)"   class="cajas" size="7" type="number"  id="ph_i1" name="ph_i1" value="<?php echo $var405?>" />
            </b>  
          </td>
    </tr> 
    
    <tr bgcolor="#CCDDEE">
      <td><span class="small">*pH final: </span></td>
      
    
      <td class="small" align="center">
         <b>
             <input min="1" max="13"  onKeyPress="return validar_monto(event)"  size="7"class="cajas" type="number" id="ph_f1" name="ph_f1" value="<?php echo $var406?>" />
            </b>  
          </td>
         
    </tr>
    
    <tr>
      <td><span class="small">*OD600 initia: </span></td>
        <td class="small" align="center">
          <b>
              <input onKeyPress="return validar_monto(event)"  size="7"class="cajas" type="text" name="od_i1" value="<?php echo $var407?>" />
            </b>  <div id="mensaje"></div>
          </td>
    </tr> 
     <tr bgcolor="#CCDDEE">
      <td><span class="small">*OD600 final: </span></td>
      
    
      <td class="small" align="center">
         <b>
             <input onKeyPress="return validar_monto(event)"  size="7" class="cajas" type="text" id="od_f1" name="od_f1" value="<?php echo $var408?>" />
            </b>  
          </td>
    </tr>
    
    <tr>
      <td><span class="small">Extra parameters: </span></td>
        <td class="small" align="center">
          <b>
             <input class="cajas" type="text" name="p_extra1" value="<?php echo $var409?>" />
            </b>  
          </td>
    </tr> 
     <tr bgcolor="#CCDDEE">
<!--      <td><span class="small">Kinetics: </span></td>-->
      
    
      
          <?php 
//                   echo"<select class='cajas' name=kinetics id=kinetics >"; 
//
//                           $sql="SELECT Name FROM document"; 
//                           $result=mysql_query($sql); 
//                           $i=0; 
//               echo "<option  value=".$var43.">".$var43."</option>\n"; 
//                 while ($row=mysql_fetch_row($result)) 
//                      { 
//              echo "<option  value=".$row[$i].">".$row[$i]."</option>\n"; 
//                       } 
//                  echo "</select>"; 
                     ?>
         <b>
             <input class="cajas" type="hidden" name="kinetics" value="<?php echo $var43?>" />
            </b>  
          </td>
    </tr>
     <input type="hidden" name="sub" id="sub" value="<?php echo $consul3?>"/>
     <input type="hidden" name="lab" id="lab" value="<?php echo $lab?>"/>
    
    
    
                   <tr align="center" id="cuartoboton" >
<td colspan="2">
 
</td>
</tr>
 <div id="div_oculto3" style="display: none;"></div>
   
    
   </tbody></table>
            </div>
          <div id="GrowOcultar2" style="display: none;">
            <table border="0">
      <tbody>
          <tr>
       
        <td width="280" bgcolor="#ffffff" valign="middle" align="center" class="small">
            <b>
               
            </b>  
        </td>
      </tr>
      <tr>
<!--         <td><span class="small">* Org Name: </span></td>-->
<!--          <td class="small" align="center">-->
              <b>
             
            </b>  
<!--          </td>-->
      </tr>
      
      <tr bgcolor="#CCDDEE">
        <td><span class="small">*Medium Name : </span></td>
        <td class="small" align="center">
           <b>
                <?php 
                   echo"<select class='cajas' name=medi3 id=medi3 >"; 

                            $sql="SELECT * FROM medium where lab='$lab'"; 
                           $result=mysql_query($sql); 
                          
                              $sqllab="SELECT Name FROM medium WHERE Medium_ID='$var410'";		
		$cslab=mysql_query($sqllab,$cn);
            while($resullab=mysql_fetch_array($cslab)){
			$consullab33=$resullab[0];
			}
                             echo "<option value=".$var410.">".$consullab33."</option>\n"; 
                 while ( $row = mysql_fetch_array($result)) 
                      { 
              echo "<option value=".$row["Medium_ID"].">".$row["Name"]."</option>\n"; 
                       } 
                  echo "</select>"; 
                     ?>
             
            </b>  
      </tr>
      <tr><td valign="TOP"><span class="small">* Temperature solid: </span></td>
          <td class="small" align="center"> 
              <b>
                  <input onKeyPress="return validar_monto(event)" class="cajas" type="text" size="7" name="tempera3" value="<?php echo $var411?>" />
            </b>  &#176;C
      </td>
    </tr>
    <tr bgcolor="#CCDDEE">
      <td><span class="small">* Time solid: </span></td>
      
    
      <td class="small" align="center">
         <b>
             <input class="cajas" type="time" size="7"name="tiempo3" value="<?php echo $var412?>" />
            </b> Hours 
          </td>
    </tr>
    
    <tr>
      <td><span class="small">* Medium liquid: </span></td>
        <td class="small" align="center">
          <b>
               <?php 
                   echo"<select class='cajas' name=medium3 id=medium3 >"; 

                             $sql="SELECT * FROM medium where lab='$lab'"; 
                           $result=mysql_query($sql); 
                          
                              $sqllab="SELECT Name FROM medium WHERE Medium_ID='$var413'";		
		$cslab=mysql_query($sqllab,$cn);
            while($resullab=mysql_fetch_array($cslab)){
			$consullab34=$resullab[0];
			}
                             echo "<option value=".$var413.">".$consullab34."</option>\n"; 
                 while ( $row = mysql_fetch_array($result)) 
                      { 
              echo "<option value=".$row["Medium_ID"].">".$row["Name"]."</option>\n"; 
                       } 
                  echo "</select>"; 
                     ?>
              
            
            </b>  
          </td>
    </tr> 
    
    <tr bgcolor="#CCDDEE">
      <td><span class="small">*Temperature liquid: </span></td>
      
    
      <td class="small" align="center">
         <b>
             <input onKeyPress="return validar_monto(event)"   class="cajas" type="text" size="7"name="temp_liq3" value="<?php echo $var414?>" />
            </b>  &#176;C
          </td>
           <tr>
          <td><span class="small">*User Name </span></td>
     <td class="small" align="center">
         <b>
             <?php 
                   echo"<select class='cajas' name=use3 id=use3>"; 

                          $sql="SELECT * FROM user where lab='$lab'"; 
                           $result=mysql_query($sql); 
                          
                              $sqllab="SELECT Name FROM user WHERE User_ID='$var693'";		
		$cslab=mysql_query($sqllab,$cn);
            while($resullab=mysql_fetch_array($cslab)){
			$consullab35=$resullab[0];
			}
                             echo "<option value=".$var693.">".$consullab35."</option>\n"; 
                 while ( $row = mysql_fetch_array($result)) 
                      { 
              echo "<option value=".$row["User_ID"].">".$row["Name"]."</option>\n"; 
                       } 
                  echo "</select>"; 
                     ?>
                    
            
            </b>  
          </td>
     </tr>
       <tr>
      <td><span class="small">*Agitation time: </span></td>
        <td class="small" align="center">
          <b>
              <input class="cajas" type="time"  size="7"name="agitation3" value="<?php echo $var415?>" />
            </b>  Hours
          </td>
    </tr> 
    
    <tr bgcolor="#CCDDEE">
      <td><span class="small">*Time liquid: </span></td>
      
    
      <td class="small" align="center">
         <b>
             <input class="cajas" type="time" size="7" name="tim_liq3" value="<?php echo $var416?>" />
            </b>  Hours
          </td>
    </tr>
    
    <tr>
      <td><span class="small">*pH initial: </span></td>
        <td class="small" align="center">
          <b>
              <input  min="1" max="13" nKeyPress="return validar_monto(event)"   class="cajas" size="7" type="number"  id="ph_i3" name="ph_i3" value="<?php echo $var417?>" />
            </b>  
          </td>
    </tr> 
    
    <tr bgcolor="#CCDDEE">
      <td><span class="small">*pH final: </span></td>
      
    
      <td class="small" align="center">
         <b>
             <input min="1" max="13"  onKeyPress="return validar_monto(event)"  size="7"class="cajas" type="number" id="ph_f3" name="ph_f3" value="<?php echo $var418?>" />
            </b>  
          </td>
         
    </tr>
    
    <tr>
      <td><span class="small">*OD600 initia: </span></td>
        <td class="small" align="center">
          <b>
              <input onKeyPress="return validar_monto(event)"  size="7"class="cajas" type="text" name="od_i3" value="<?php echo $var419?>" />
            </b>  <div id="mensaje"></div>
          </td>
    </tr> 
     <tr bgcolor="#CCDDEE">
      <td><span class="small">*OD600 final: </span></td>
      
    
      <td class="small" align="center">
         <b>
             <input onKeyPress="return validar_monto(event)"  size="7" class="cajas" type="text" id="od_f3" name="od_f3" value="<?php echo $var420?>" />
            </b>  
          </td>
    </tr>
    
    <tr>
      <td><span class="small">Extra parameters: </span></td>
        <td class="small" align="center">
          <b>
             <input class="cajas" type="text" name="p_extra3" value="<?php echo $var421?>" />
            </b>  
          </td>
    </tr> 
     <tr bgcolor="#CCDDEE">
<!--      <td><span class="small">Kinetics: </span></td>-->
      
    
      
          <?php 
//                   echo"<select class='cajas' name=kinetics id=kinetics >"; 
//
//                           $sql="SELECT Name FROM document"; 
//                           $result=mysql_query($sql); 
//                           $i=0; 
//               echo "<option  value=".$var43.">".$var43."</option>\n"; 
//                 while ($row=mysql_fetch_row($result)) 
//                      { 
//              echo "<option  value=".$row[$i].">".$row[$i]."</option>\n"; 
//                       } 
//                  echo "</select>"; 
                     ?>
         <b>
             <input class="cajas" type="hidden" name="kinetics" value="<?php echo $var43?>" />
            </b>  
          </td>
    </tr>
     <input type="hidden" name="sub" id="sub" value="<?php echo $consul3?>"/>
     <input type="hidden" name="lab" id="lab" value="<?php echo $lab?>"/>
    
    
    
                   <tr align="center" id="cuartoboton" >
<td colspan="2">
    
  
</td>
</tr>
 <div id="div_oculto3" style="display: none;"></div>
   
    
   </tbody></table>
            </div>
          <div id="GrowOcultar3" style="display: none;">
            <table border="0">
      <tbody>
          <tr>
       
        <td width="280" bgcolor="#ffffff" valign="middle" align="center" class="small">
            <b>
            
            </b>  
        </td>
      </tr>
      <tr>
<!--         <td><span class="small">* Org Name: </span></td>-->
<!--          <td class="small" align="center">-->
              <b>
            
            </b>  
<!--          </td>-->
      </tr>
      
      <tr bgcolor="#CCDDEE">
        <td><span class="small">*Medium Name : </span></td>
        <td class="small" align="center">
           <b>
                <?php 
                   echo"<select class='cajas' name=medi2 id=medi2 >"; 

                             $sql="SELECT * FROM medium where lab='$lab'"; 
                           $result=mysql_query($sql); 
                          
                              $sqllab="SELECT Name FROM medium WHERE Medium_ID='$var422'";		
		$cslab=mysql_query($sqllab,$cn);
            while($resullab=mysql_fetch_array($cslab)){
			$consullab36=$resullab[0];
			}
                             echo "<option value=".$var422.">".$consullab36."</option>\n"; 
                 while ( $row = mysql_fetch_array($result)) 
                      { 
              echo "<option value=".$row["Medium_ID"].">".$row["Name"]."</option>\n"; 
                       } 
                  echo "</select>"; 
                     ?>
             
            </b>  
      </tr>
      <tr><td valign="TOP"><span class="small">* Temperature solid: </span></td>
          <td class="small" align="center"> 
              <b>
                  <input onKeyPress="return validar_monto(event)" class="cajas" type="text" size="7" name="tempera2" value="<?php echo $var423?>" />
            </b>  &#176;C
      </td>
    </tr>
    <tr bgcolor="#CCDDEE">
      <td><span class="small">* Time solid: </span></td>
      
    
      <td class="small" align="center">
         <b>
             <input class="cajas" type="time" size="7"name="tiempo2" value="<?php echo $var424?>" />
            </b> Hours 
          </td>
    </tr>
    
    <tr>
      <td><span class="small">* Medium liquid: </span></td>
        <td class="small" align="center">
          <b>
               <?php 
                   echo"<select class='cajas' name=medium2 id=medium2 >"; 

                            $sql="SELECT * FROM medium where lab='$lab'"; 
                           $result=mysql_query($sql); 
                          
                              $sqllab="SELECT Name FROM medium WHERE Medium_ID='$var425'";		
		$cslab=mysql_query($sqllab,$cn);
            while($resullab=mysql_fetch_array($cslab)){
			$consullab37=$resullab[0];
			}
                             echo "<option value=".$var425.">".$consullab37."</option>\n"; 
                 while ( $row = mysql_fetch_array($result)) 
                      { 
              echo "<option value=".$row["Medium_ID"].">".$row["Name"]."</option>\n"; 
                       } 
                  echo "</select>"; 
                     ?>
              
            
            </b>  
          </td>
    </tr> 
    
    <tr bgcolor="#CCDDEE">
      <td><span class="small">*Temperature liquid: </span></td>
      
    
      <td class="small" align="center">
         <b>
             <input onKeyPress="return validar_monto(event)"   class="cajas" type="text" size="7"name="temp_liq2" value="<?php echo $var426?>" />
            </b>  &#176;C
          </td>
           <tr>
          <td><span class="small">*User Name </span></td>
     <td class="small" align="center">
         <b>
             <?php 
                   echo"<select class='cajas' name=use2 id=use2>"; 

                            $sql="SELECT * FROM user where lab='$lab'"; 
                           $result=mysql_query($sql); 
                          
                              $sqllab="SELECT Name FROM user WHERE User_ID='$var692'";		
		$cslab=mysql_query($sqllab,$cn);
            while($resullab=mysql_fetch_array($cslab)){
			$consullab38=$resullab[0];
			}
                             echo "<option value=".$var692.">".$consullab38."</option>\n"; 
                 while ( $row = mysql_fetch_array($result)) 
                      { 
              echo "<option value=".$row["User_ID"].">".$row["Name"]."</option>\n"; 
                       } 
                  echo "</select>"; 
                     ?>
                    
            
            </b>  
          </td>
     </tr>
       <tr>
      <td><span class="small">*Agitation time: </span></td>
        <td class="small" align="center">
          <b>
              <input class="cajas" type="time"  size="7"name="agitation2" value="<?php echo $var427?>" />
            </b>  Hours
          </td>
    </tr> 
    
    <tr bgcolor="#CCDDEE">
      <td><span class="small">*Time liquid: </span></td>
      
    
      <td class="small" align="center">
         <b>
             <input class="cajas" type="time" size="7" name="tim_liq2" value="<?php echo $var428?>" />
            </b>  Hours
          </td>
    </tr>
    
    <tr>
      <td><span class="small">*pH initial: </span></td>
        <td class="small" align="center">
          <b>
              <input  min="1" max="13" nKeyPress="return validar_monto(event)"   class="cajas" size="7" type="number"  id="ph_i2" name="ph_i2" value="<?php echo $var429?>" />
            </b>  
          </td>
    </tr> 
    
    <tr bgcolor="#CCDDEE">
      <td><span class="small">*pH final: </span></td>
      
    
      <td class="small" align="center">
         <b>
             <input min="1" max="13"  onKeyPress="return validar_monto(event)"  size="7"class="cajas" type="number" id="ph_f2" name="ph_f2" value="<?php echo $var430?>" />
            </b>  
          </td>
         
    </tr>
    
    <tr>
      <td><span class="small">*OD600 initia: </span></td>
        <td class="small" align="center">
          <b>
              <input onKeyPress="return validar_monto(event)"  size="7"class="cajas" type="text" name="od_i2" value="<?php echo $var431?>" />
            </b>  <div id="mensaje"></div>
          </td>
    </tr> 
     <tr bgcolor="#CCDDEE">
      <td><span class="small">*OD600 final: </span></td>
      
    
      <td class="small" align="center">
         <b>
             <input onKeyPress="return validar_monto(event)"  size="7" class="cajas" type="text" id="od_f2" name="od_f2" value="<?php echo $var432?>" />
            </b>  
          </td>
    </tr>
    
    <tr>
      <td><span class="small">Extra parameters: </span></td>
        <td class="small" align="center">
          <b>
             <input class="cajas" type="text" name="p_extra2" value="<?php echo $var433?>" />
            </b>  
          </td>
    </tr> 
     <tr bgcolor="#CCDDEE">
<!--      <td><span class="small">Kinetics: </span></td>-->
      
    
      
          <?php 
//                   echo"<select class='cajas' name=kinetics id=kinetics >"; 
//
//                           $sql="SELECT Name FROM document"; 
//                           $result=mysql_query($sql); 
//                           $i=0; 
//               echo "<option  value=".$var43.">".$var43."</option>\n"; 
//                 while ($row=mysql_fetch_row($result)) 
//                      { 
//              echo "<option  value=".$row[$i].">".$row[$i]."</option>\n"; 
//                       } 
//                  echo "</select>"; 
                     ?>
         <b>
             <input class="cajas" type="hidden" name="kinetics" value="<?php echo $var43?>" />
            </b>  
          </td>
    </tr>
     <input type="hidden" name="sub" id="sub" value="<?php echo $consul3?>"/>
     <input type="hidden" name="lab" id="lab" value="<?php echo $lab?>"/>
    
    
    
                   <tr align="center" id="cuartoboton" >
<td colspan="2">
    

</td>
</tr>
 <div id="div_oculto3" style="display: none;"></div>
   
    
   </tbody></table>
            </div>  
        <div id="GrowOcultar4" style="display: none;">
            <table border="0">
      <tbody>
          <tr>
       
        <td width="280" bgcolor="#ffffff" valign="middle" align="center" class="small">
            <b>
               
            </b>  
        </td>
      </tr>
      <tr>
<!--         <td><span class="small">* Org Name: </span></td>-->
<!--          <td class="small" align="center">-->
              <b>
             
            </b>  
<!--          </td>-->
      </tr>
      
      <tr bgcolor="#CCDDEE">
        <td><span class="small">*Medium Name : </span></td>
        <td class="small" align="center">
           <b>
                <?php 
                   echo"<select class='cajas' name=medi4 id=medi4 >"; 

                             $sql="SELECT * FROM medium where lab='$lab'"; 
                           $result=mysql_query($sql); 
                          
                              $sqllab="SELECT Name FROM medium WHERE Medium_ID='$var434'";		
		$cslab=mysql_query($sqllab,$cn);
            while($resullab=mysql_fetch_array($cslab)){
			$consullab39=$resullab[0];
			}
                             echo "<option value=".$var434.">".$consullab39."</option>\n"; 
                 while ( $row = mysql_fetch_array($result)) 
                      { 
              echo "<option value=".$row["Medium_ID"].">".$row["Name"]."</option>\n"; 
                       } 
                  echo "</select>"; 
                     ?>
             
            </b>  
      </tr>
      <tr><td valign="TOP"><span class="small">* Temperature solid: </span></td>
          <td class="small" align="center"> 
              <b>
                  <input onKeyPress="return validar_monto(event)" class="cajas" type="text" size="7" name="tempera4" value="<?php echo $var435?>" />
            </b>  &#176;C
      </td>
    </tr>
    <tr bgcolor="#CCDDEE">
      <td><span class="small">* Time solid: </span></td>
      
    
      <td class="small" align="center">
         <b>
             <input class="cajas" type="time" size="7"name="tiempo4" value="<?php echo $var436?>" />
            </b> Hours 
          </td>
    </tr>
    
    <tr>
      <td><span class="small">* Medium liquid: </span></td>
        <td class="small" align="center">
          <b>
               <?php 
                   echo"<select class='cajas' name=medium4 id=medium4 >"; 

                            $sql="SELECT * FROM medium where lab='$lab'"; 
                           $result=mysql_query($sql); 
                          
                              $sqllab="SELECT Name FROM medium WHERE Medium_ID='$var437'";		
		$cslab=mysql_query($sqllab,$cn);
            while($resullab=mysql_fetch_array($cslab)){
			$consullab40=$resullab[0];
			}
                             echo "<option value=".$var437.">".$consullab40."</option>\n"; 
                 while ( $row = mysql_fetch_array($result)) 
                      { 
              echo "<option value=".$row["Medium_ID"].">".$row["Name"]."</option>\n"; 
                       } 
                  echo "</select>"; 
                     ?>
              
            
            </b>  
          </td>
    </tr> 
    
    <tr bgcolor="#CCDDEE">
      <td><span class="small">*Temperature liquid: </span></td>
      
    
      <td class="small" align="center">
         <b>
             <input onKeyPress="return validar_monto(event)"   class="cajas" type="text" size="7"name="temp_liq4" value="<?php echo $var438?>" />
            </b>  &#176;C
          </td>
           <tr>
          <td><span class="small">*User Name </span></td>
     <td class="small" align="center">
         <b>
             <?php 
                   echo"<select class='cajas' name=use4 id=use4>"; 

                          $sql="SELECT * FROM user where lab='$lab'"; 
                           $result=mysql_query($sql); 
                          
                              $sqllab="SELECT Name FROM user WHERE User_ID='$var694'";		
		$cslab=mysql_query($sqllab,$cn);
            while($resullab=mysql_fetch_array($cslab)){
			$consullab41=$resullab[0];
			}
                             echo "<option value=".$var694.">".$consullab41."</option>\n"; 
                 while ( $row = mysql_fetch_array($result)) 
                      { 
              echo "<option value=".$row["User_ID"].">".$row["Name"]."</option>\n"; 
                       } 
                  echo "</select>"; 
                     ?>
                    
            
            </b>  
          </td>
     </tr>
       <tr>
      <td><span class="small">*Agitation time: </span></td>
        <td class="small" align="center">
          <b>
              <input class="cajas" type="time"  size="7"name="agitation4" value="<?php echo $var439?>" />
            </b>  Hours
          </td>
    </tr> 
    
    <tr bgcolor="#CCDDEE">
      <td><span class="small">*Time liquid: </span></td>
      
    
      <td class="small" align="center">
         <b>
             <input class="cajas" type="time" size="7" name="tim_liq4" value="<?php echo $var440?>" />
            </b>  Hours
          </td>
    </tr>
    
    <tr>
      <td><span class="small">*pH initial: </span></td>
        <td class="small" align="center">
          <b>
              <input  min="1" max="13" nKeyPress="return validar_monto(event)"   class="cajas" size="7" type="number"  id="ph_i4" name="ph_i4" value="<?php echo $var441?>" />
            </b>  
          </td>
    </tr> 
    
    <tr bgcolor="#CCDDEE">
      <td><span class="small">*pH final: </span></td>
      
    
      <td class="small" align="center">
         <b>
             <input min="1" max="13"  onKeyPress="return validar_monto(event)"  size="7"class="cajas" type="number" id="ph_f4" name="ph_f4" value="<?php echo $var442?>" />
            </b>  
          </td>
         
    </tr>
    
    <tr>
      <td><span class="small">*OD600 initia: </span></td>
        <td class="small" align="center">
          <b>
              <input onKeyPress="return validar_monto(event)"  size="7"class="cajas" type="text" name="od_i4" value="<?php echo $var443?>" />
            </b>  <div id="mensaje"></div>
          </td>
    </tr> 
     <tr bgcolor="#CCDDEE">
      <td><span class="small">*OD600 final: </span></td>
      
    
      <td class="small" align="center">
         <b>
             <input onKeyPress="return validar_monto(event)"  size="7" class="cajas" type="text" id="od_f4" name="od_f4" value="<?php echo $var444?>" />
            </b>  
          </td>
    </tr>
    
    <tr>
      <td><span class="small">Extra parameters: </span></td>
        <td class="small" align="center">
          <b>
             <input class="cajas" type="text" name="p_extra4" value="<?php echo $var445?>" />
            </b>  
          </td>
    </tr> 
     <tr bgcolor="#CCDDEE">
<!--      <td><span class="small">Kinetics: </span></td>-->
      
    
      
          <?php 
//                   echo"<select class='cajas' name=kinetics id=kinetics >"; 
//
//                           $sql="SELECT Name FROM document"; 
//                           $result=mysql_query($sql); 
//                           $i=0; 
//               echo "<option  value=".$var43.">".$var43."</option>\n"; 
//                 while ($row=mysql_fetch_row($result)) 
//                      { 
//              echo "<option  value=".$row[$i].">".$row[$i]."</option>\n"; 
//                       } 
//                  echo "</select>"; 
                     ?>
         <b>
             <input class="cajas" type="hidden" name="kinetics" value="<?php echo $var43?>" />
            </b>  
          </td>
    </tr>
     <input type="hidden" name="sub" id="sub" value="<?php echo $consul3?>"/>
     <input type="hidden" name="lab" id="lab" value="<?php echo $lab?>"/>
    
    
    
                   <tr align="center" id="cuartoboton" >
<td colspan="2">

</td>
</tr>
 <div id="div_oculto3" style="display: none;"></div>
   
    
   </tbody></table>
            </div>
             
    </center>

              </form>
                   
                   
                   
                   
                   <script type="text/JavaScript">

//Cerramos el Script
</script>
<div id="sube4"  style="display:none"> 
  <form name="document" id="subeima" action="" method="post" enctype="multipart/form-data">
        <table border="2">


           
            <input type="hidden" name="orga" value="<?php echo $var?>"/>
            <input type="hidden" name="txttabla" value="grow"/>
<center><h3>Document</h3></center>
<tr>
<td>Description</td>
<td><input class="cajas" type="text" name="descripcion"  /></td>
</tr>
<tr>
<td>Document</td>
<td><input  class="cajas" type="file" name="doc"  /></td>
</tr>

<tr>

    <td><input class="button" type="submit" name="btndocuart"  value="ADD"/></td>
</tr>
        </table>
        </form>
    </div> 
    <?php
     if(isset($_POST["btndocuart"])){
         
         	$btn=$_POST["btndocuart"];
                if($btn=="ADD"){
                
                    $rutaServidor='Documents_Strain';
$rutaTemporal=$_FILES['doc']['tmp_name'];
$nombreImagen=$_FILES['doc']['name'];
$rutaDestino=$rutaServidor.'/'.$nombreImagen;
move_uploaded_file($rutaTemporal, $rutaDestino);
if( $nombreImagen=="")
{

      echo "<script> $.bootstrapGrowl('No inserted'); </script>";
    
}

else{
    global  $rutaServidor,$rutaTemporal,$nombreImagen,$rutaDestino;
    
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
         
         
         
         
         
         
     }
        
        
        
        
        
        ?>
<div id="referenciaGrow"></div>
      <del></del>
</div>  
 
 </div>
                            
 <div class="biodata_table1">
     <div class="scroll_vertical1">   
   
                     <?php
         
  $e="entra"; 
if($e=="entra")
 {
    		$cod=$_SESSION['sear'];
                
		
		$sql="select * from organism_information where Alias='$cod'";
		$cs=mysql_query($sql,$cn);
                
          
		while($resul=mysql_fetch_array($cs)){
			$var=$resul[0];
			$var1=$resul[1];
			$var2=$resul[2];
			$var3=$resul[3];
			$var4=$resul[4];
                        $var5=$resul[5];
                        	
			}
                        
             $cod=$_SESSION['sear'];
             $consul=  mysql_query("Select * from document where org_id='$var' and tabla='grow' ");
while($filas=  mysql_fetch_array($consul)){
     $id_2=$filas['Document_ID'];
$ruta=$filas['ruta'];
$desc=$filas['Name_doc'];
 $docum="Documents_Strain/kine.png";   
?>
           <div id="PanelImag">
               <form  name="primerIma" method="post" action="EliminarDocument.php" onsubmit="return confirmation()">
<?php echo $desc;?> 
  <input type="hidden"  name="Eo"  id="Eo" value="<?php echo  $id_2;?>">
      <input type="submit"  name="submitButtonName"  id="submitButtonName" value="x" >
 
      <br>
<a href="<?php print_r($ruta) ;?>" target="_blank"><img src="<?php echo  $docum;?>" width="50" height="50"> </a>

                </form>
        </div>
     

<?php
}
             
//             <a href="#" target="_blank"><img border="0" src="Imagenes/Fotos.png" name="pic1" width="158px"></a>
 }
            ?>

 </div>      

                     
                     </tr></tbody></table>
	
 
</div>
<!--------------------------Preservation          -->
          
          
                    
           <div class="TabbedPanelsContent" style="display: none;">
               <table border="0" width="830px"><tbody><tr><td>
             <div class="scroll_vertical">      
     <form name="Pres" method="POST" action="">          
    <center>
     <table border="0">
      <tbody>
          <tr>
       
        <td width="280" bgcolor="#ffffff" valign="middle" align="center" class="small">
            <b>
                <input type="hidden" name="pre" value="<?php echo $var44?>" />
            </b>  
        </td>
      </tr>
      <tr> 
<!--         <td><span class="small">* Org Name: </span></td>-->
<!--          <td class="small" align="center">-->
              <b>
                  <input class="cajas" type="hidden" name="org" value="<?php echo $var45?>" />
            </b>  
<!--          </td>-->
      </tr>
      
      <tr bgcolor="#CCDDEE">
        <td><span class="small">*Preservation Method Name: </span></td>
        <td class="small" align="center">
           <b>
               <?php 
                   echo"<select class='cajas' name=idM id=idM>"; 

                     
                           $sql="SELECT * FROM preservation_method where lab='$lab'"; 
                           $result=mysql_query($sql); 
                          
                              $sqllab="SELECT Name FROM preservation_method WHERE Preservation_Method_ID='$var46'";		
		$cslab=mysql_query($sqllab,$cn);
            while($resullab=mysql_fetch_array($cslab)){
			$consullab42=$resullab[0];
			}
                             echo "<option value=".$var46.">".$consullab42."</option>\n"; 
                 while ( $row = mysql_fetch_array($result)) 
                      { 
              echo "<option value=".$row["Preservation_Method_ID"].">".$row["Name"]."</option>\n"; 
                       } 
                  echo "</select>"; 
                     ?>
             
            </b>  
      </tr>
      <tr><td valign="TOP"><span class="small">* Date of preservation: </span></td>
          <td class="small" align="center"> 
              <b>
                  <input class="cajas" type="date" name="date" value="<?php echo $var47?>" max="<?php echo $fechaMax;?>" />
            </b>  
      </td>
    </tr>
    <tr bgcolor="#CCDDEE">
      <td><span class="small">* User Name: </span></td>
      
    
      <td class="small" align="center">
         <b>
             <?php 
                   echo"<select class='cajas' name=use id=use>"; 
 $sql="SELECT * FROM user where lab='$lab'"; 
                           $result=mysql_query($sql); 
                          
                              $sqllab="SELECT Name FROM user WHERE User_ID='$var48'";		
		$cslab=mysql_query($sqllab,$cn);
            while($resullab=mysql_fetch_array($cslab)){
			$consullab43=$resullab[0];
			}
                             echo "<option value=".$var48.">".$consullab43."</option>\n"; 
                 while ( $row = mysql_fetch_array($result)) 
                      { 
              echo "<option value=".$row["User_ID"].">".$row["Name"]."</option>\n"; 
                       } 
                   
                  echo "</select>"; 
                     ?>
                    
            
            </b>  
          </td>
    </tr>
    
    <tr>
      <td><span class="small">Number of vials: </span></td>
        <td class="small" align="center">
          <b>
              <input onKeyPress="return validar_monto(event)"  size="7"class="cajas" type="text" name="num" value="<?php echo $var49?>" />
            </b>  
          </td>
    </tr> 
    
    <tr>
      <td><span class="small">Volume of vials: </span></td>
        <td class="small" align="center">
          <b>
              <input onKeyPress="return validar_monto(event)"  size="7" class="cajas" type="text" name="volu" value="<?php echo $var50?>" />
            </b>  mL
          </td>
    </tr> 
    
        <tr bgcolor="#CCDDEE">

      <td><span class="small">* Storage: </span></td>
      
    
      <td class="small" align="center">
         <b>
             <?php 
                   echo"<select class='cajas' name=sto id=sto>"; 

                   
                   
                     
                           $sql="SELECT * FROM storage where lab='$lab'"; 
                           $result=mysql_query($sql); 
                          
                              $sqllab="SELECT Alias FROM storage WHERE Storage_ID='$var51'";		
		$cslab=mysql_query($sqllab,$cn);
            while($resullab=mysql_fetch_array($cslab)){
			$consullab44=$resullab[0];
			}
                             echo "<option value=".$var51.">".$consullab44."</option>\n"; 
                 while ( $row = mysql_fetch_array($result)) 
                      { 
              echo "<option value=".$row["Storage_ID"].">".$row["Alias"]."</option>\n"; 
                       } 
                 
                  echo "</select>"; 
                     ?>
            
            </b>  
          </td>
          
       <tr>
      <td><span class="small">Comments: </span></td>
        <td class="small" align="center">
       
             <textarea  class="cajas" rows="10"  cols="30" name="com"  value="<?php echo $var114?>" />
           
          </textarea>
                </td>
    </tr> 
    
     <input type="hidden" name="sub" id="sub" value="<?php echo $consul3?>"/>
       <input type="hidden" name="lab" id="lab" value="<?php echo $lab?>"/>
 
      
       <div id="referenciaVacia1"></div>
 <P></P>
                      
                           
                          
                   <div align="center" id="quintoboton" >
  
                      
                       
                        <input class="button" type="button" name="btnNuevo" value="New" onclick="addPreservation();"/> 
      <input class="button" type="button" name="btn5" value="Update" onclick="return ValidarFormulario4(Pres);"/> 
     
                       
                        


</div>
   
    
   </tbody></table> 
        <div id="PresOcultar1" style="display:none;">
             <table border="0">
      <tbody>
          <tr>
       
        <td width="280" bgcolor="#ffffff" valign="middle" align="center" class="small">
            
        </td>
      </tr>
      <tr> 
<!--         <td><span class="small">* Org Name: </span></td>-->
<!--          <td class="small" align="center">-->
             
<!--          </td>-->
      </tr>
      
      <tr bgcolor="#CCDDEE">
        <td><span class="small">*Preservation Method Name: </span></td>
        <td class="small" align="center">
           <b>
               <?php 
                   echo"<select class='cajas' name=idM1 id=idM1>"; 

                            
                           $sql="SELECT * FROM preservation_method where lab='$lab'"; 
                           $result=mysql_query($sql); 
                          
                              $sqllab="SELECT Name FROM preservation_method WHERE Preservation_Method_ID='$var302'";		
		$cslab=mysql_query($sqllab,$cn);
            while($resullab=mysql_fetch_array($cslab)){
			$consullab45=$resullab[0];
			}
                             echo "<option value=".$var302.">".$consullab45."</option>\n"; 
                 while ( $row = mysql_fetch_array($result)) 
                      { 
              echo "<option value=".$row["Preservation_Method_ID"].">".$row["Name"]."</option>\n"; 
                       } 
                  echo "</select>"; 
                     ?>
             
            </b>  
      </tr>
      <tr><td valign="TOP"><span class="small">* Date of preservation: </span></td>
          <td class="small" align="center"> 
              <b>
                  <input class="cajas" type="date" name="date1" value="<?php echo $var303?>" max="<?php echo $fechaMax;?>" />
            </b>  
      </td>
    </tr>
    <tr bgcolor="#CCDDEE">
      <td><span class="small">* User Name: </span></td>
      
    
      <td class="small" align="center">
         <b>
             <?php 
                   echo"<select class='cajas' name=use1 id=use1>"; 

                   $sql="SELECT * FROM user where lab='$lab'"; 
                           $result=mysql_query($sql); 
                          
                              $sqllab="SELECT Name FROM user WHERE User_ID='$var304'";		
		$cslab=mysql_query($sqllab,$cn);
            while($resullab=mysql_fetch_array($cslab)){
			$consullab46=$resullab[0];
			}
                             echo "<option value=".$var304.">".$consullab46."</option>\n"; 
                 while ( $row = mysql_fetch_array($result)) 
                      { 
              echo "<option value=".$row["User_ID"].">".$row["Name"]."</option>\n"; 
                       } 
                       
                       
                  echo "</select>"; 
                     ?>
                    
            
            </b>  
          </td>
    </tr>
    
    <tr>
      <td><span class="small">Number of vials: </span></td>
        <td class="small" align="center">
          <b>
              <input onKeyPress="return validar_monto(event)"  size="7"class="cajas" type="text" name="num1" value="<?php echo $var305?>" />
            </b>  
          </td>
    </tr> 
    
    <tr>
      <td><span class="small">Volume of vials: </span></td>
        <td class="small" align="center">
          <b>
              <input onKeyPress="return validar_monto(event)"  size="7" class="cajas" type="text" name="volu1" value="<?php echo $var306?>" />
            </b>  mL
          </td>
    </tr> 
    
        <tr bgcolor="#CCDDEE">

      <td><span class="small">* Storage: </span></td>
      
    
      <td class="small" align="center">
         <b>
             <?php 
                   echo"<select class='cajas' name=sto1 id=sto1>"; 

                        $sql="SELECT * FROM storage where lab='$lab'"; 
                           $result=mysql_query($sql); 
                          
                              $sqllab="SELECT Alias FROM storage WHERE Storage_ID='$var307'";		
		$cslab=mysql_query($sqllab,$cn);
            while($resullab=mysql_fetch_array($cslab)){
			$consullab47=$resullab[0];
			}
                             echo "<option value=".$var307.">".$consullab47."</option>\n"; 
                 while ( $row = mysql_fetch_array($result)) 
                      { 
              echo "<option value=".$row["Storage_ID"].">".$row["Alias"]."</option>\n"; 
                       }
                  echo "</select>"; 
                     ?>
            
            </b>  
          </td>
          
       <tr>
      <td><span class="small">Comments: </span></td>
        <td class="small" align="center">
       
             <textarea  class="cajas" rows="10"  cols="30" name="com1"  value="<?php echo $var308?>" />
           
          </textarea>
                </td>
    </tr> 
    
     <input type="hidden" name="sub" id="sub" value="<?php echo $consul3?>"/>
       <input type="hidden" name="lab" id="lab" value="<?php echo $lab?>"/>
 
      
       <div id="referenciaVacia1"></div>
 <P></P>
                      
                           
                          
                   <div align="center" id="quintoboton" >
  
                      
                       

</div>
   
    
   </tbody></table>
            </div>
        <div id="PresOcultar2" style="display:none;">
             <table border="0">
      <tbody>
          <tr>
       
        <td width="280" bgcolor="#ffffff" valign="middle" align="center" class="small">
            <b>
                
            </b>  
        </td>
      </tr>
      <tr> 
<!--         <td><span class="small">* Org Name: </span></td>-->
<!--          <td class="small" align="center">-->
              <b>
               
            </b>  
<!--          </td>-->
      </tr>
      
      <tr bgcolor="#CCDDEE">
        <td><span class="small">*Preservation Method Name: </span></td>
        <td class="small" align="center">
           <b>
               <?php 
                   echo"<select class='cajas' name=idM2 id=idM2>"; 

                             
                           $sql="SELECT * FROM preservation_method where lab='$lab'"; 
                           $result=mysql_query($sql); 
                          
                              $sqllab="SELECT Name FROM preservation_method WHERE Preservation_Method_ID='$var311'";		
		$cslab=mysql_query($sqllab,$cn);
            while($resullab=mysql_fetch_array($cslab)){
			$consullab48=$resullab[0];
			}
                             echo "<option value=".$var311.">".$consullab48."</option>\n"; 
                 while ( $row = mysql_fetch_array($result)) 
                      { 
              echo "<option value=".$row["Preservation_Method_ID"].">".$row["Name"]."</option>\n"; 
                       } 
                  echo "</select>"; 
                     ?>
             
            </b>  
      </tr>
      <tr><td valign="TOP"><span class="small">* Date of preservation: </span></td>
          <td class="small" align="center"> 
              <b>
                  <input class="cajas" type="date" name="date2" value="<?php echo $var312?>" max="<?php echo $fechaMax;?>" />
            </b>  
      </td>
    </tr>
    <tr bgcolor="#CCDDEE">
      <td><span class="small">* User Name: </span></td>
      
    
      <td class="small" align="center">
         <b>
             <?php 
                   echo"<select class='cajas' name=use2 id=use2>"; 

                           $sql="SELECT * FROM user where lab='$lab'"; 
                           $result=mysql_query($sql); 
                          
                              $sqllab="SELECT Name FROM user WHERE User_ID='$var314'";		
		$cslab=mysql_query($sqllab,$cn);
            while($resullab=mysql_fetch_array($cslab)){
			$consullab49=$resullab[0];
			}
                             echo "<option value=".$var314.">".$consullab49."</option>\n"; 
                 while ( $row = mysql_fetch_array($result)) 
                      { 
              echo "<option value=".$row["User_ID"].">".$row["Name"]."</option>\n"; 
                       } 
                  echo "</select>"; 
                     ?>
                    
            
            </b>  
          </td>
    </tr>
    
    <tr>
      <td><span class="small">Number of vials: </span></td>
        <td class="small" align="center">
          <b>
              <input onKeyPress="return validar_monto(event)"  size="7"class="cajas" type="text" name="num2" value="<?php echo $var315?>" />
            </b>  
          </td>
    </tr> 
    
    <tr>
      <td><span class="small">Volume of vials: </span></td>
        <td class="small" align="center">
          <b>
              <input onKeyPress="return validar_monto(event)"  size="7" class="cajas" type="text" name="volu2" value="<?php echo $var316?>" />
            </b>  mL
          </td>
    </tr> 
    
        <tr bgcolor="#CCDDEE">

      <td><span class="small">* Storage: </span></td>
      
    
      <td class="small" align="center">
         <b>
             <?php 
                   echo"<select class='cajas' name=sto2 id=sto2>"; 

                               $sql="SELECT * FROM storage where lab='$lab'"; 
                           $result=mysql_query($sql); 
                          
                              $sqllab="SELECT Alias FROM storage WHERE Storage_ID='$var317'";		
		$cslab=mysql_query($sqllab,$cn);
            while($resullab=mysql_fetch_array($cslab)){
			$consullab50=$resullab[0];
			}
                             echo "<option value=".$var317.">".$consullab50."</option>\n"; 
                 while ( $row = mysql_fetch_array($result)) 
                      { 
              echo "<option value=".$row["Storage_ID"].">".$row["Alias"]."</option>\n"; 
                       }
                  echo "</select>"; 
                     ?>
            
            </b>  
          </td>
          
       <tr>
      <td><span class="small">Comments: </span></td>
        <td class="small" align="center">
       
             <textarea  class="cajas" rows="10"  cols="30" name="com2"  value="<?php echo $var318?>" />
           
          </textarea>
                </td>
    </tr> 
    
     <input type="hidden" name="sub" id="sub" value="<?php echo $consul3?>"/>
       <input type="hidden" name="lab" id="lab" value="<?php echo $lab?>"/>
 
      
       <div id="referenciaVacia1"></div>
 <P></P>
                      
                           
                          
                   <div align="center" id="quintoboton" >
  
                      

</div>
   
    
   </tbody></table>
            </div>
        <div id="PresOcultar3" style="display:none;">
             <table border="0">
      <tbody>
          <tr>
       
        <td width="280" bgcolor="#ffffff" valign="middle" align="center" class="small">
            
        </td>
      </tr>
      <tr> 
<!--         <td><span class="small">* Org Name: </span></td>-->
<!--          <td class="small" align="center">-->
              
<!--          </td>-->
      </tr>
      
      <tr bgcolor="#CCDDEE">
        <td><span class="small">*Preservation Method Name: </span></td>
        <td class="small" align="center">
           <b>
               <?php 
                   echo"<select class='cajas' name=idM3 id=idM3>"; 

                 
                           $sql="SELECT * FROM preservation_method where lab='$lab'"; 
                           $result=mysql_query($sql); 
                          
                              $sqllab="SELECT Name FROM preservation_method WHERE Preservation_Method_ID='$var321'";		
		$cslab=mysql_query($sqllab,$cn);
            while($resullab=mysql_fetch_array($cslab)){
			$consullab51=$resullab[0];
			}
                             echo "<option value=".$var321.">".$consullab51."</option>\n"; 
                 while ( $row = mysql_fetch_array($result)) 
                      { 
              echo "<option value=".$row["Preservation_Method_ID"].">".$row["Name"]."</option>\n"; 
                       } 
                  echo "</select>"; 
                     ?>
             
            </b>  
      </tr>
      <tr><td valign="TOP"><span class="small">* Date of preservation: </span></td>
          <td class="small" align="center"> 
              <b>
                  <input class="cajas" type="date" name="date3" value="<?php echo $var322?>" max="<?php echo $fechaMax;?>" />
            </b>  
      </td>
    </tr>
    <tr bgcolor="#CCDDEE">
      <td><span class="small">* User Name: </span></td>
      
    
      <td class="small" align="center">
         <b>
             <?php 
                   echo"<select class='cajas' name=use3 id=use3>"; 

                      $sql="SELECT * FROM user where lab='$lab'"; 
                           $result=mysql_query($sql); 
                          
                              $sqllab="SELECT Name FROM user WHERE User_ID='$var323'";		
		$cslab=mysql_query($sqllab,$cn);
            while($resullab=mysql_fetch_array($cslab)){
			$consullab52=$resullab[0];
			}
                             echo "<option value=".$var323.">".$consullab52."</option>\n"; 
                 while ( $row = mysql_fetch_array($result)) 
                      { 
              echo "<option value=".$row["User_ID"].">".$row["Name"]."</option>\n"; 
                       } 
                  echo "</select>"; 
                     ?>
                    
            
            </b>  
          </td>
    </tr>
    
    <tr>
      <td><span class="small">Number of vials: </span></td>
        <td class="small" align="center">
          <b>
              <input onKeyPress="return validar_monto(event)"  size="7"class="cajas" type="text" name="num3" value="<?php echo $var324?>" />
            </b>  
          </td>
    </tr> 
    
    <tr>
      <td><span class="small">Volume of vials: </span></td>
        <td class="small" align="center">
          <b>
              <input onKeyPress="return validar_monto(event)"  size="7" class="cajas" type="text" name="volu3" value="<?php echo $var325?>" />
            </b>  mL
          </td>
    </tr> 
    
        <tr bgcolor="#CCDDEE">

      <td><span class="small">* Storage: </span></td>
      
    
      <td class="small" align="center">
         <b>
             <?php 
                   echo"<select class='cajas' name=sto3 id=sto3>"; 

                                $sql="SELECT * FROM storage where lab='$lab'"; 
                           $result=mysql_query($sql); 
                          
                              $sqllab="SELECT Alias FROM storage WHERE Storage_ID='$var326'";		
		$cslab=mysql_query($sqllab,$cn);
            while($resullab=mysql_fetch_array($cslab)){
			$consullab53=$resullab[0];
			}
                             echo "<option value=".$var326.">".$consullab53."</option>\n"; 
                 while ( $row = mysql_fetch_array($result)) 
                      { 
              echo "<option value=".$row["Storage_ID"].">".$row["Alias"]."</option>\n"; 
                       }
                  echo "</select>"; 
                     ?>
            
            </b>  
          </td>
          
       <tr>
      <td><span class="small">Comments: </span></td>
        <td class="small" align="center">
       
             <textarea  class="cajas" rows="10"  cols="30" name="com3"  value="<?php echo $var327?>" />
           
          </textarea>
                </td>
    </tr> 
    
     <input type="hidden" name="sub" id="sub" value="<?php echo $consul3?>"/>
       <input type="hidden" name="lab" id="lab" value="<?php echo $lab?>"/>
 
      
       <div id="referenciaVacia1"></div>
 <P></P>
                      
                           
                          
                   <div align="center" id="quintoboton" >
  
                      
    


</div>
   
    
   </tbody></table>
            </div>
        <div id="PresOcultar4" style="display:none;">
             <table border="0">
      <tbody>
          <tr>
       
        <td width="280" bgcolor="#ffffff" valign="middle" align="center" class="small">
            <b>
               
            </b>  
        </td>
      </tr>
      <tr> 
<!--         <td><span class="small">* Org Name: </span></td>-->
<!--          <td class="small" align="center">-->
              <b>
                 
            </b>  
<!--          </td>-->
      </tr>
      
      <tr bgcolor="#CCDDEE">
        <td><span class="small">*Preservation Method Name: </span></td>
        <td class="small" align="center">
           <b>
               <?php 
                   echo"<select class='cajas' name=idM4 id=idM4>"; 

                             
                           $sql="SELECT * FROM preservation_method where lab='$lab'"; 
                           $result=mysql_query($sql); 
                          
                              $sqllab="SELECT Name FROM preservation_method WHERE Preservation_Method_ID='$var327'";		
		$cslab=mysql_query($sqllab,$cn);
            while($resullab=mysql_fetch_array($cslab)){
			$consullab54=$resullab[0];
			}
                             echo "<option value=".$var327.">".$consullab54."</option>\n"; 
                 while ( $row = mysql_fetch_array($result)) 
                      { 
              echo "<option value=".$row["Preservation_Method_ID"].">".$row["Name"]."</option>\n"; 
                       } 
                  echo "</select>"; 
                     ?>
             
            </b>  
      </tr>
      <tr><td valign="TOP"><span class="small">* Date of preservation: </span></td>
          <td class="small" align="center"> 
              <b>
                  <input class="cajas" type="date" name="date4" value="<?php echo $var328?>" max="<?php echo $fechaMax;?>" />
            </b>  
      </td>
    </tr>
    <tr bgcolor="#CCDDEE">
      <td><span class="small">* User Name: </span></td>
      
    
      <td class="small" align="center">
         <b>
             <?php 
                   echo"<select class='cajas' name=use4 id=use4>"; 

                           $sql="SELECT * FROM user where lab='$lab'"; 
                           $result=mysql_query($sql); 
                          
                              $sqllab="SELECT Name FROM user WHERE User_ID='$var329'";		
		$cslab=mysql_query($sqllab,$cn);
            while($resullab=mysql_fetch_array($cslab)){
			$consullab55=$resullab[0];
			}
                             echo "<option value=".$var329.">".$consullab55."</option>\n"; 
                 while ( $row = mysql_fetch_array($result)) 
                      { 
              echo "<option value=".$row["User_ID"].">".$row["Name"]."</option>\n"; 
                       } 
                  echo "</select>"; 
                     ?>
                    
            
            </b>  
          </td>
    </tr>
    
    <tr>
      <td><span class="small">Number of vials: </span></td>
        <td class="small" align="center">
          <b>
              <input onKeyPress="return validar_monto(event)"  size="7"class="cajas" type="text" name="num4" value="<?php echo $var600?>" />
            </b>  
          </td>
    </tr> 
    
    <tr>
      <td><span class="small">Volume of vials: </span></td>
        <td class="small" align="center">
          <b>
              <input onKeyPress="return validar_monto(event)"  size="7" class="cajas" type="text" name="volu4" value="<?php echo $var601?>" />
            </b>  mL
          </td>
    </tr> 
    
        <tr bgcolor="#CCDDEE">

      <td><span class="small">* Storage: </span></td>
      
    
      <td class="small" align="center">
         <b>
             <?php 
                   echo"<select class='cajas' name=sto4 id=sto4>"; 

                               $sql="SELECT * FROM storage where lab='$lab'"; 
                           $result=mysql_query($sql); 
                          
                              $sqllab="SELECT Alias FROM storage WHERE Storage_ID='$var602'";		
		$cslab=mysql_query($sqllab,$cn);
            while($resullab=mysql_fetch_array($cslab)){
			$consullab56=$resullab[0];
			}
                             echo "<option value=".$var602.">".$consullab56."</option>\n"; 
                 while ( $row = mysql_fetch_array($result)) 
                      { 
              echo "<option value=".$row["Storage_ID"].">".$row["Alias"]."</option>\n"; 
                       }
                  echo "</select>"; 
                     ?>
            
            </b>  
          </td>
          
       <tr>
      <td><span class="small">Comments: </span></td>
        <td class="small" align="center">
       
             <textarea  class="cajas" rows="10"  cols="30" name="com4"  value="<?php echo $var603?>" />
           
          </textarea>
                </td>
    </tr> 
    
     <input type="hidden" name="sub" id="sub" value="<?php echo $consul3?>"/>
       <input type="hidden" name="lab" id="lab" value="<?php echo $lab?>"/>
 
      
       <div id="referenciaVacia1"></div>
 <P></P>
                      
                           
                          
                   <div align="center" id="quintoboton" >
  
                      
                       
                       


</div>
   
    
   </tbody></table>
            </div>
    </center>
              
     </form>         
                 
                 
                 
                 <script type="text/JavaScript">

</script>
             </div>
	
 </td></tr></tbody></table>
</div>
          

<!--------------------------DNA         -->
          
          
                    
           <div class="TabbedPanelsContent" style="display: none;">
                  <div class="scroll_vertical"> 
     <form name="DNA" method="POST" action="">          
    <center>
     <table border="0">
      <tbody>
          <tr>
        
        <td width="280" bgcolor="#ffffff" valign="middle" align="center" class="small">
            <b>
                <input type="hidden" name="dna" value="<?php echo $var52?>" />
            </b>  
        </td>
      </tr>
      <tr>
<!--         <td><span class="small">* Org Name: </span></td>
          <td class="small" align="center">-->
              <b>
                  <input class="cajas" type="hidden" name="org" value="<?php echo $var53?>" />
            </b>  
<!--          </td>-->
      </tr>
      
      <tr bgcolor="#CCDDEE">
        <td><span class="small">* Extraction Method Name: </span></td>
        <td class="small" align="center">
           <b>
               <?php 
                   echo"<select class='cajas' name=ext id=ext>"; 
                          
                        $sql="SELECT * FROM extraction_method where lab='$lab'"; 
                           $result=mysql_query($sql); 
                          
                              $sqllab="SELECT Name FROM extraction_method WHERE Extraction_Method_ID='$var54'";		
		$cslab=mysql_query($sqllab,$cn);
            while($resullab=mysql_fetch_array($cslab)){
			$consullab57=$resullab[0];
			}
                             echo "<option value=".$var54.">".$consullab57."</option>\n"; 
                 while ( $row = mysql_fetch_array($result)) 
                      { 
              echo "<option value=".$row["Extraction_Method_ID"].">".$row["Name"]."</option>\n"; 
                       }
                   
                   
                 
                  echo "</select>"; 
                     ?>
            
            </b>  
      </tr>
      <tr><td valign="TOP"><span class="small">* Date of preservation: </span></td>
          <td class="small" align="center"> 
              <b>
                  <input class="cajas" type="date" name="date" value="<?php echo $var55?>"  max="<?php echo $fechaMax;?>"/>
            </b>  
      </td>
    </tr>
    <tr bgcolor="#CCDDEE">
      <td><span class="small">* Concentration: </span></td>
      
    
      <td class="small" align="center">
         <b>
             <input  onKeyPress="return validar_monto(event)"  size="7"class="cajas" type="text" name="con" value="<?php echo $var56?>" />
            </b>  ng/mL
          </td>
    </tr>
    
    <tr>
      <td><span class="small">* Volume: </span></td>
        <td class="small" align="center">
          <b>
              <input  onKeyPress="return validar_monto(event)"  size="7"class="cajas" type="text" name="vol" value="<?php echo $var57?>" />
            </b>  mL
          </td>
    </tr> 
    
    <tr bgcolor="#CCDDEE">
      <td><span class="small">* User Name: </span></td>
      
    
      <td class="small" align="center">
         <b>
             
             <?php 
                   echo"<select class='cajas' name=use id=use>"; 

                         $sql="SELECT * FROM user where lab='$lab'"; 
                           $result=mysql_query($sql); 
                          
                              $sqllab="SELECT Name FROM user WHERE User_ID='$var58'";		
		$cslab=mysql_query($sqllab,$cn);
            while($resullab=mysql_fetch_array($cslab)){
			$consullab58=$resullab[0];
			}
                             echo "<option value=".$var58.">".$consullab58."</option>\n"; 
                 while ( $row = mysql_fetch_array($result)) 
                      { 
              echo "<option value=".$row["User_ID"].">".$row["Name"]."</option>\n"; 
                       } 
                  echo "</select>"; 
                     ?>
             
            
            </b>  
          </td>
          
       <tr>
      <td><span class="small">* Storage Name: </span></td>
        <td class="small" align="center">
       
           <b>
                <?php 
                   echo"<select class='cajas' name=sto id=sto>"; 

                          $sql="SELECT * FROM storage where lab='$lab'"; 
                           $result=mysql_query($sql); 
                          
                              $sqllab="SELECT Alias FROM storage WHERE Storage_ID='$var59'";		
		$cslab=mysql_query($sqllab,$cn);
            while($resullab=mysql_fetch_array($cslab)){
			$consullab59=$resullab[0];
			}
                             echo "<option value=".$var59.">".$consullab59."</option>\n"; 
                 while ( $row = mysql_fetch_array($result)) 
                      { 
              echo "<option value=".$row["Storage_ID"].">".$row["Alias"]."</option>\n"; 
                       }
                  echo "</select>"; 
                     ?>
            
            </b> 
                </td>
    </tr> 
     <input type="hidden" name="sub" id="sub" value="<?php echo $consul3?>"/>
     <input type="hidden" name="lab" id="lab" value="<?php echo $lab?>"/>
    

                   <tr align="center" id="sextoboton" >
<td colspan="2">
  
    <input  class="button" type="button" name="btn6" value="Update" onclick="return ValidarFormulario5(DNA);"/> 
    <input class="button" type="button" name="btnNuevo" value="New" onclick="addADN();"/> 

</td>
</tr>
   
    
   </tbody></table> 
        <div id="DNAOcultar1" style="display:none;">
            <table border="0">
      <tbody>
          <tr>
        
        <td width="280" bgcolor="#ffffff" valign="middle" align="center" class="small">
            <b>
                
            </b>  
        </td>
      </tr>
      <tr>
<!--         <td><span class="small">* Org Name: </span></td>
          <td class="small" align="center">-->
              <b>
                  
            </b>  
<!--          </td>-->
      </tr>
      
      <tr bgcolor="#CCDDEE">
        <td><span class="small">* Extraction Method Name: </span></td>
        <td class="small" align="center">
           <b>
               <?php 
                   echo"<select class='cajas' name=ext1 id=ext1>"; 
 $sql="SELECT * FROM extraction_method where lab='$lab'"; 
                           $result=mysql_query($sql); 
                          
                              $sqllab="SELECT Name FROM extraction_method WHERE Extraction_Method_ID='$var446'";		
		$cslab=mysql_query($sqllab,$cn);
            while($resullab=mysql_fetch_array($cslab)){
			$consullab60=$resullab[0];
			}
                             echo "<option value=".$var446.">".$consullab60."</option>\n"; 
                 while ( $row = mysql_fetch_array($result)) 
                      { 
              echo "<option value=".$row["Extraction_Method_ID"].">".$row["Name"]."</option>\n"; 
                       }
                  echo "</select>"; 
                     ?>
            
            </b>  
      </tr>
      <tr><td valign="TOP"><span class="small">* Date of preservation: </span></td>
          <td class="small" align="center"> 
              <b>
                  <input class="cajas" type="date" name="date1" value="<?php echo $var447?>"  max="<?php echo $fechaMax;?>"/>
            </b>  
      </td>
    </tr>
    <tr bgcolor="#CCDDEE">
      <td><span class="small">* Concentration: </span></td>
      
    
      <td class="small" align="center">
         <b>
             <input  onKeyPress="return validar_monto(event)"  size="7"class="cajas" type="text" name="con1" value="<?php echo $var448?>" />
            </b>  ng/mL
          </td>
    </tr>
    
    <tr>
      <td><span class="small">* Volume: </span></td>
        <td class="small" align="center">
          <b>
              <input  onKeyPress="return validar_monto(event)"  size="7"class="cajas" type="text" name="vol1" value="<?php echo $var449?>" />
            </b>  mL
          </td>
    </tr> 
    
    <tr bgcolor="#CCDDEE">
      <td><span class="small">* User Name: </span></td>
      
    
      <td class="small" align="center">
         <b>
             
             <?php 
                   echo"<select class='cajas' name=use1 id=use1>"; 

                           $sql="SELECT * FROM user where lab='$lab'"; 
                           $result=mysql_query($sql); 
                          
                              $sqllab="SELECT Name FROM user WHERE User_ID='$var450'";		
		$cslab=mysql_query($sqllab,$cn);
            while($resullab=mysql_fetch_array($cslab)){
			$consullab61=$resullab[0];
			}
                             echo "<option value=".$var450.">".$consullab61."</option>\n"; 
                 while ( $row = mysql_fetch_array($result)) 
                      { 
              echo "<option value=".$row["User_ID"].">".$row["Name"]."</option>\n"; 
                       } 
                  echo "</select>"; 
                     ?>
             
            
            </b>  
          </td>
          
       <tr>
      <td><span class="small">* Storage Name: </span></td>
        <td class="small" align="center">
       
           <b>
                <?php 
                   echo"<select class='cajas' name=sto1 id=sto1>"; 

                                $sql="SELECT * FROM storage where lab='$lab'"; 
                           $result=mysql_query($sql); 
                          
                              $sqllab="SELECT Alias FROM storage WHERE Storage_ID='$var451'";		
		$cslab=mysql_query($sqllab,$cn);
            while($resullab=mysql_fetch_array($cslab)){
			$consullab62=$resullab[0];
			}
                             echo "<option value=".$var451.">".$consullab62."</option>\n"; 
                 while ( $row = mysql_fetch_array($result)) 
                      { 
              echo "<option value=".$row["Storage_ID"].">".$row["Alias"]."</option>\n"; 
                       }
                  echo "</select>"; 
                     ?>
            
            </b> 
                </td>
    </tr> 
     <input type="hidden" name="sub" id="sub" value="<?php echo $consul3?>"/>
     <input type="hidden" name="lab" id="lab" value="<?php echo $lab?>"/>
    

                   <tr align="center" id="sextoboton" >
<td colspan="2">
  
    <input  class="button" type="button" name="btn6" value="Update" onclick="return ValidarFormulario5(DNA);"/> 
    <input class="button" type="button" name="btnNuevo" value="New" onclick="addADN();"/> 

</td>
</tr>
   
    
   </tbody></table> 
            </div>
         <div id="DNAOcultar2" style="display:none;">
            <table border="0">
      <tbody>
          <tr>
        
        <td width="280" bgcolor="#ffffff" valign="middle" align="center" class="small">
            <b>
                
            </b>  
        </td>
      </tr>
      <tr>
<!--         <td><span class="small">* Org Name: </span></td>
          <td class="small" align="center">-->
              <b>
                 
            </b>  
<!--          </td>-->
      </tr>
      
      <tr bgcolor="#CCDDEE">
        <td><span class="small">* Extraction Method Name: </span></td>
        <td class="small" align="center">
           <b>
               <?php 
                   echo"<select class='cajas' name=ext2 id=ext2>"; 

                           $sql="SELECT * FROM extraction_method where lab='$lab'"; 
                           $result=mysql_query($sql); 
                          
                              $sqllab="SELECT Name FROM extraction_method WHERE Extraction_Method_ID='$var452'";		
		$cslab=mysql_query($sqllab,$cn);
            while($resullab=mysql_fetch_array($cslab)){
			$consullab63=$resullab[0];
			}
                             echo "<option value=".$var452.">".$consullab63."</option>\n"; 
                 while ( $row = mysql_fetch_array($result)) 
                      { 
              echo "<option value=".$row["Extraction_Method_ID"].">".$row["Name"]."</option>\n"; 
                       }
                  echo "</select>"; 
                     ?>
            
            </b>  
      </tr>
      <tr><td valign="TOP"><span class="small">* Date of preservation: </span></td>
          <td class="small" align="center"> 
              <b>
                  <input class="cajas" type="date" name="date2" value="<?php echo $var453?>"  max="<?php echo $fechaMax;?>"/>
            </b>  
      </td>
    </tr>
    <tr bgcolor="#CCDDEE">
      <td><span class="small">* Concentration: </span></td>
      
    
      <td class="small" align="center">
         <b>
             <input  onKeyPress="return validar_monto(event)"  size="7"class="cajas" type="text" name="con2" value="<?php echo $var454?>" />
            </b>  ng/mL
          </td>
    </tr>
    
    <tr>
      <td><span class="small">* Volume: </span></td>
        <td class="small" align="center">
          <b>
              <input  onKeyPress="return validar_monto(event)"  size="7"class="cajas" type="text" name="vol2" value="<?php echo $var455?>" />
            </b>  mL
          </td>
    </tr> 
    
    <tr bgcolor="#CCDDEE">
      <td><span class="small">* User Name: </span></td>
      
    
      <td class="small" align="center">
         <b>
             
             <?php 
                   echo"<select class='cajas' name=use2 id=use2>"; 

                                $sql="SELECT * FROM user where lab='$lab'"; 
                           $result=mysql_query($sql); 
                          
                              $sqllab="SELECT Name FROM user WHERE User_ID='$var456'";		
		$cslab=mysql_query($sqllab,$cn);
            while($resullab=mysql_fetch_array($cslab)){
			$consullab64=$resullab[0];
			}
                             echo "<option value=".$var456.">".$consullab64."</option>\n"; 
                 while ( $row = mysql_fetch_array($result)) 
                      { 
              echo "<option value=".$row["User_ID"].">".$row["Name"]."</option>\n"; 
                       } 
                  echo "</select>"; 
                     ?>
             
            
            </b>  
          </td>
          
       <tr>
      <td><span class="small">* Storage Name: </span></td>
        <td class="small" align="center">
       
           <b>
                <?php 
                   echo"<select class='cajas' name=sto2 id=sto2>"; 

                               $sql="SELECT * FROM storage where lab='$lab'"; 
                           $result=mysql_query($sql); 
                          
                              $sqllab="SELECT Alias FROM storage WHERE Storage_ID='$var457'";		
		$cslab=mysql_query($sqllab,$cn);
            while($resullab=mysql_fetch_array($cslab)){
			$consullab65=$resullab[0];
			}
                             echo "<option value=".$var457.">".$consullab65."</option>\n"; 
                 while ( $row = mysql_fetch_array($result)) 
                      { 
              echo "<option value=".$row["Storage_ID"].">".$row["Alias"]."</option>\n"; 
                       }
                  echo "</select>"; 
                     ?>
            
            </b> 
                </td>
    </tr> 
     <input type="hidden" name="sub" id="sub" value="<?php echo $consul3?>"/>
     <input type="hidden" name="lab" id="lab" value="<?php echo $lab?>"/>
    

                   <tr align="center" id="sextoboton" >
<td colspan="2">
  
    <input  class="button" type="button" name="btn6" value="Update" onclick="return ValidarFormulario5(DNA);"/> 
    <input class="button" type="button" name="btnNuevo" value="New" onclick="addADN();"/> 

</td>
</tr>
   
    
   </tbody></table> 
            </div>
         <div id="DNAOcultar3" style="display:none;">
            <table border="0">
      <tbody>
          <tr>
        
        <td width="280" bgcolor="#ffffff" valign="middle" align="center" class="small">
            <b>
                
            </b>  
        </td>
      </tr>
      <tr>
<!--         <td><span class="small">* Org Name: </span></td>
          <td class="small" align="center">-->
              <b>
                  
            </b>  
<!--          </td>-->
      </tr>
      
      <tr bgcolor="#CCDDEE">
        <td><span class="small">* Extraction Method Name: </span></td>
        <td class="small" align="center">
           <b>
               <?php 
                   echo"<select class='cajas' name=ext3 id=ext3>"; 

                          $sql="SELECT * FROM extraction_method where lab='$lab'"; 
                           $result=mysql_query($sql); 
                          
                              $sqllab="SELECT Name FROM extraction_method WHERE Extraction_Method_ID='$var458'";		
		$cslab=mysql_query($sqllab,$cn);
            while($resullab=mysql_fetch_array($cslab)){
			$consullab66=$resullab[0];
			}
                             echo "<option value=".$var458.">".$consullab66."</option>\n"; 
                 while ( $row = mysql_fetch_array($result)) 
                      { 
              echo "<option value=".$row["Extraction_Method_ID"].">".$row["Name"]."</option>\n"; 
                       }
                  echo "</select>"; 
                     ?>
            
            </b>  
      </tr>
      <tr><td valign="TOP"><span class="small">* Date of preservation: </span></td>
          <td class="small" align="center"> 
              <b>
                  <input class="cajas" type="date" name="date3" value="<?php echo $var459?>"  max="<?php echo $fechaMax;?>"/>
            </b>  
      </td>
    </tr>
    <tr bgcolor="#CCDDEE">
      <td><span class="small">* Concentration: </span></td>
      
    
      <td class="small" align="center">
         <b>
             <input  onKeyPress="return validar_monto(event)"  size="7"class="cajas" type="text" name="con3" value="<?php echo $var460?>" />
            </b>  ng/mL
          </td>
    </tr>
    
    <tr>
      <td><span class="small">* Volume: </span></td>
        <td class="small" align="center">
          <b>
              <input  onKeyPress="return validar_monto(event)"  size="7"class="cajas" type="text" name="vol3" value="<?php echo $var461?>" />
            </b>  mL
          </td>
    </tr> 
    
    <tr bgcolor="#CCDDEE">
      <td><span class="small">* User Name: </span></td>
      
    
      <td class="small" align="center">
         <b>
             
             <?php 
                   echo"<select class='cajas' name=use3 id=use3>"; 

                           $sql="SELECT * FROM user where lab='$lab'"; 
                           $result=mysql_query($sql); 
                          
                              $sqllab="SELECT Name FROM user WHERE User_ID='$var462'";		
		$cslab=mysql_query($sqllab,$cn);
            while($resullab=mysql_fetch_array($cslab)){
			$consullab67=$resullab[0];
			}
                             echo "<option value=".$var462.">".$consullab67."</option>\n"; 
                 while ( $row = mysql_fetch_array($result)) 
                      { 
              echo "<option value=".$row["User_ID"].">".$row["Name"]."</option>\n"; 
                       } 
                  echo "</select>"; 
                     ?>
             
            
            </b>  
          </td>
          
       <tr>
      <td><span class="small">* Storage Name: </span></td>
        <td class="small" align="center">
       
           <b>
                <?php 
                   echo"<select class='cajas' name=sto3 id=sto3>"; 

                                $sql="SELECT * FROM storage where lab='$lab'"; 
                           $result=mysql_query($sql); 
                          
                              $sqllab="SELECT Alias FROM storage WHERE Storage_ID='$var463'";		
		$cslab=mysql_query($sqllab,$cn);
            while($resullab=mysql_fetch_array($cslab)){
			$consullab68=$resullab[0];
			}
                             echo "<option value=".$var463.">".$consullab68."</option>\n"; 
                 while ( $row = mysql_fetch_array($result)) 
                      { 
              echo "<option value=".$row["Storage_ID"].">".$row["Alias"]."</option>\n"; 
                       }
                  echo "</select>"; 
                     ?>
            
            </b> 
                </td>
    </tr> 
     <input type="hidden" name="sub" id="sub" value="<?php echo $consul3?>"/>
     <input type="hidden" name="lab" id="lab" value="<?php echo $lab?>"/>
    

                   <tr align="center" id="sextoboton" >
<td colspan="2">
  
    <input  class="button" type="button" name="btn6" value="Update" onclick="return ValidarFormulario5(DNA);"/> 
    <input class="button" type="button" name="btnNuevo" value="New" onclick="addADN();"/> 

</td>
</tr>
   
    
   </tbody></table> 
            </div>
         <div id="DNAOcultar4" style="display:none;">
            <table border="0">
      <tbody>
          <tr>
        
        <td width="280" bgcolor="#ffffff" valign="middle" align="center" class="small">
            <b>
                
            </b>  
        </td>
      </tr>
      <tr>
<!--         <td><span class="small">* Org Name: </span></td>
          <td class="small" align="center">-->
              <b>
                  
            </b>  
<!--          </td>-->
      </tr>
      
      <tr bgcolor="#CCDDEE">
        <td><span class="small">* Extraction Method Name: </span></td>
        <td class="small" align="center">
           <b>
               <?php 
                   echo"<select class='cajas' name=ext4 id=ext4>"; 

                           $sql="SELECT * FROM extraction_method where lab='$lab'"; 
                           $result=mysql_query($sql); 
                          
                              $sqllab="SELECT Name FROM extraction_method WHERE Extraction_Method_ID='$var464'";		
		$cslab=mysql_query($sqllab,$cn);
            while($resullab=mysql_fetch_array($cslab)){
			$consullab69=$resullab[0];
			}
                             echo "<option value=".$var464.">".$consullab69."</option>\n"; 
                 while ( $row = mysql_fetch_array($result)) 
                      { 
              echo "<option value=".$row["Extraction_Method_ID"].">".$row["Name"]."</option>\n"; 
                       }
                  echo "</select>"; 
                     ?>
            
            </b>  
      </tr>
      <tr><td valign="TOP"><span class="small">* Date of preservation: </span></td>
          <td class="small" align="center"> 
              <b>
                  <input class="cajas" type="date" name="date4" value="<?php echo $var465?>"  max="<?php echo $fechaMax;?>"/>
            </b>  
      </td>
    </tr>
    <tr bgcolor="#CCDDEE">
      <td><span class="small">* Concentration: </span></td>
      
    
      <td class="small" align="center">
         <b>
             <input  onKeyPress="return validar_monto(event)"  size="7"class="cajas" type="text" name="con4" value="<?php echo $var466?>" />
            </b>  ng/mL
          </td>
    </tr>
    
    <tr>
      <td><span class="small">* Volume: </span></td>
        <td class="small" align="center">
          <b>
              <input  onKeyPress="return validar_monto(event)"  size="7"class="cajas" type="text" name="vol4" value="<?php echo $var467?>" />
            </b>  mL
          </td>
    </tr> 
    
    <tr bgcolor="#CCDDEE">
      <td><span class="small">* User Name: </span></td>
      
    
      <td class="small" align="center">
         <b>
             
             <?php 
                   echo"<select class='cajas' name=use4 id=use4>"; 

                               $sql="SELECT * FROM user where lab='$lab'"; 
                           $result=mysql_query($sql); 
                          
                              $sqllab="SELECT Name FROM user WHERE User_ID='$var468'";		
		$cslab=mysql_query($sqllab,$cn);
            while($resullab=mysql_fetch_array($cslab)){
			$consullab70=$resullab[0];
			}
                             echo "<option value=".$var468.">".$consullab70."</option>\n"; 
                 while ( $row = mysql_fetch_array($result)) 
                      { 
              echo "<option value=".$row["User_ID"].">".$row["Name"]."</option>\n"; 
                       } 
                  echo "</select>"; 
                     ?>
             
            
            </b>  
          </td>
          
       <tr>
      <td><span class="small">* Storage Name: </span></td>
        <td class="small" align="center">
       
           <b>
                <?php 
                   echo"<select class='cajas' name=sto4 id=sto4>"; 

                               $sql="SELECT * FROM storage where lab='$lab'"; 
                           $result=mysql_query($sql); 
                          
                              $sqllab="SELECT Alias FROM storage WHERE Storage_ID='$var469'";		
		$cslab=mysql_query($sqllab,$cn);
            while($resullab=mysql_fetch_array($cslab)){
			$consullab71=$resullab[0];
			}
                             echo "<option value=".$var469.">".$consullab71."</option>\n"; 
                 while ( $row = mysql_fetch_array($result)) 
                      { 
              echo "<option value=".$row["Storage_ID"].">".$row["Alias"]."</option>\n"; 
                       }
                  echo "</select>"; 
                     ?>
            
            </b> 
                </td>
    </tr> 
     <input type="hidden" name="sub" id="sub" value="<?php echo $consul3?>"/>
     <input type="hidden" name="lab" id="lab" value="<?php echo $lab?>"/>
    

                   <tr align="center" id="sextoboton" >
<td colspan="2">
  
    <input  class="button" type="button" name="btn6" value="Update" onclick="return ValidarFormulario5(DNA);"/> 
    <input class="button" type="button" name="btnNuevo" value="New" onclick="addADN();"/> 

</td>
</tr>
   
    
   </tbody></table> 
            </div>
    </center>
              
     </form>         
<script type="text/JavaScript">

</script> 
 <div id="referenciaDNA"></div>
      <sup></sup>
	</div>

</div>
          

<!--------------------------Genetic Data -->
          
          
                    
           <div class="TabbedPanelsContent" style="display: none;">
                <table border="0" width="830px"><tbody><tr><td>
                  <div class="biodata_table " >
               <div class="scroll_vertical"> 
     <form name="Generic_Data" method="POST" action="">          
    
                <input type="hidden" name="generi" value="<?php echo $var60?>" />
          
       
     
<!--         <td><span class="small">* Org Name: </span></td>-->
<!--          <td class="small" align="center">-->
           
             <input   type="hidden" name="orgid" value="<?php echo $var61?>" />
           
         <center>
     <table border="0">
      <tbody>
        
        

     
      
      <tr bgcolor="#CCDDEE">
        <td><span class="small">*Taxonomic lineage: </span></td>
        <td class="small" align="center">
           <b>
               <input class="cajas" type="text" name="taxo" value="<?php echo $var62?>" />
            </b>  
      </tr>
      <br>
      <tr><td valign="TOP"><span class="small">* Gene Name: </span></td>
          <td class="small" align="center"> 
              <?php 
                   echo"<select class='cajas' name=gen id=gen>"; 

                   
                  
                    $sql="SELECT * FROM gene where lab='$lab'"; 
                           $result=mysql_query($sql); 
                          
                              $sqllab="SELECT Name FROM gene WHERE Extraction_Method_ID='$var63'";		
		$cslab=mysql_query($sqllab,$cn);
            while($resullab=mysql_fetch_array($cslab)){
			$consullab72=$resullab[0];
			}
                             echo "<option value=".$var63.">".$consullab72."</option>\n"; 
                 while ( $row = mysql_fetch_array($result)) 
                      { 
              echo "<option value=".$row["Gene_ID"].">".$row["Name"]."</option>\n"; 
                       }
                       
                          
                  echo "</select>"; 
                     ?>
               
      </td>
    </tr>
    <br>
    <tr bgcolor="#CCDDEE">
      <td><span class="small">* Sequencing Method Name: </span></td>
      
    
      <td class="small" align="center">
         
          
           <?php 
                   echo"<select class='cajas' name=sequ id=sequ>"; 

                   
                   $sql="SELECT * FROM sequencing_method where lab='$lab'"; 
                           $result=mysql_query($sql); 
                          
                              $sqllab="SELECT Name FROM sequencing_method WHERE Sequencing_Method_ID='$var64'";		
		$cslab=mysql_query($sqllab,$cn);
            while($resullab=mysql_fetch_array($cslab)){
			$consullab73=$resullab[0];
			}
                             echo "<option value=".$var64.">".$consullab73."</option>\n"; 
                 while ( $row = mysql_fetch_array($result)) 
                      { 
              echo "<option value=".$row["Sequencing_Method_ID"].">".$row["Name"]."</option>\n"; 
                       }
                       
                  
                  echo "</select>"; 
                     ?>
         
          </td>
    </tr>
     <tr>
          <td><span class="small">*User Name </span></td>
     <td class="small" align="center">
         <b>
             <?php 
                   echo"<select class='cajas' name=use id=use>"; 

                           $sql="SELECT * FROM user where lab='$lab'"; 
                           $result=mysql_query($sql); 
                          
                              $sqllab="SELECT Name FROM user WHERE User_ID='$var695'";		
		$cslab=mysql_query($sqllab,$cn);
            while($resullab=mysql_fetch_array($cslab)){
			$consullab74=$resullab[0];
			}
                             echo "<option value=".$var695.">".$consullab74."</option>\n"; 
                 while ( $row = mysql_fetch_array($result)) 
                      { 
              echo "<option value=".$row["User_ID"].">".$row["Name"]."</option>\n"; 
                       } 
                  echo "</select>"; 
                     ?>
                    
            
            </b>  
          </td>
     </tr>
    <tr>
      <td><span class="small">* Cured sequence: </span></td>
        <td class="small" align="center">
          <b>
             <input class="cajas" type="text" name="cur" value="<?php echo $var65?>" />
            </b>  
          </td>
    </tr> 
    
    <tr bgcolor="#CCDDEE">
      <td><span class="small">Comments: </span></td>
      <td class="small" align="center">
      <textarea  class="cajas" rows="10"  cols="30" name="Com" value="<?php echo $var66?>">
                    </textarea>
             
          </td>
          
      
     <input type="hidden" name="sub" id="sub" value="<?php echo $consul3?>"/>
     <input type="hidden" name="lab" id="lab" value="<?php echo $lab?>"/>
    
    

                   <tr align="center" id="septimoboton" >
<td colspan="2">
     <input class="button" type="button" name="btns" value="Fasta" onclick="subirFasta();"/>
    <input class="button" type="button" name="btn7" value="Update" onclick="return ValidarFormulario6(Generic_Data);"/> 
     <input class="button" type="button" name="btnNuevo" value="New" onclick="addGenetic();"/>

</td>
</tr>
   
    
   </tbody></table> 
             <div id="GeneticOcutar1" style="display:none;">
                 <table border="0">
      <tbody>
        
        

     
      
      <tr bgcolor="#CCDDEE">
        <td><span class="small">*Taxonomic lineage: </span></td>
        <td class="small" align="center">
           <b>
               <input class="cajas" type="text" name="taxo1" value="<?php echo $var608?>" />
            </b>  
      </tr>
      <br>
      <tr><td valign="TOP"><span class="small">* Gene Name: </span></td>
          <td class="small" align="center"> 
              <?php 
                   echo"<select class='cajas' name=gen1 id=gen1>"; 

                           $sql="SELECT * FROM gene where lab='$lab'"; 
                           $result=mysql_query($sql); 
                          
                              $sqllab="SELECT Name FROM gene WHERE Extraction_Method_ID='$var609'";		
		$cslab=mysql_query($sqllab,$cn);
            while($resullab=mysql_fetch_array($cslab)){
			$consullab75=$resullab[0];
			}
                             echo "<option value=".$var609.">".$consullab75."</option>\n"; 
                 while ( $row = mysql_fetch_array($result)) 
                      { 
              echo "<option value=".$row["Gene_ID"].">".$row["Name"]."</option>\n"; 
                       }
                  echo "</select>"; 
                     ?>
               
      </td>
    </tr>
    <br>
    <tr bgcolor="#CCDDEE">
      <td><span class="small">* Sequencing Method Name: </span></td>
      
    
      <td class="small" align="center">
         
          
           <?php 
                   echo"<select class='cajas' name=sequ1 id=sequ1>"; 

                              $sql="SELECT * FROM sequencing_method where lab='$lab'"; 
                           $result=mysql_query($sql); 
                          
                              $sqllab="SELECT Name FROM sequencing_method WHERE Sequencing_Method_ID='$var610'";		
		$cslab=mysql_query($sqllab,$cn);
            while($resullab=mysql_fetch_array($cslab)){
			$consullab76=$resullab[0];
			}
                             echo "<option value=".$var610.">".$consullab76."</option>\n"; 
                 while ( $row = mysql_fetch_array($result)) 
                      { 
              echo "<option value=".$row["Sequencing_Method_ID"].">".$row["Name"]."</option>\n"; 
                       }
                  echo "</select>"; 
                     ?>
         
          </td>
    </tr>
     <tr>
          <td><span class="small">*User Name </span></td>
     <td class="small" align="center">
         <b>
             <?php 
                   echo"<select class='cajas' name=use1 id=use1>"; 

                            $sql="SELECT * FROM user where lab='$lab'"; 
                           $result=mysql_query($sql); 
                          
                              $sqllab="SELECT Name FROM user WHERE User_ID='$var696'";		
		$cslab=mysql_query($sqllab,$cn);
            while($resullab=mysql_fetch_array($cslab)){
			$consullab77=$resullab[0];
			}
                             echo "<option value=".$var696.">".$consullab77."</option>\n"; 
                 while ( $row = mysql_fetch_array($result)) 
                      { 
              echo "<option value=".$row["User_ID"].">".$row["Name"]."</option>\n"; 
                       } 
                  echo "</select>"; 
                     ?>
                    
            
            </b>  
          </td>
     </tr>
    <tr>
      <td><span class="small">* Cured sequence: </span></td>
        <td class="small" align="center">
          <b>
             <input class="cajas" type="text" name="cur1" value="<?php echo $var611?>" />
            </b>  
          </td>
    </tr> 
    
    <tr bgcolor="#CCDDEE">
      <td><span class="small">Comments: </span></td>
      <td class="small" align="center">
      <textarea  class="cajas" rows="10"  cols="30" name="Com1" value="<?php echo $var612?>">
                    </textarea>
             
          </td>
          
      
     <input type="hidden" name="sub" id="sub" value="<?php echo $consul3?>"/>
     <input type="hidden" name="lab" id="lab" value="<?php echo $lab?>"/>
    
    

                   <tr align="center" id="septimoboton" >
<td colspan="2">
     <input class="button" type="button" name="btns" value="Fasta" onclick="subirFasta();"/>
    <input class="button" type="button" name="btn7" value="Update" onclick="return ValidarFormulario6(Generic_Data);"/> 
     <input class="button" type="button" name="btnNuevo" value="New" onclick="addGenetic();"/>

</td>
</tr>
   
    
   </tbody></table> 
                 </div>
                        <div id="GeneticOcutar2" style="display:none;">
                 <table border="0">
      <tbody>
        
        

     
      
      <tr bgcolor="#CCDDEE">
        <td><span class="small">*Taxonomic lineage: </span></td>
        <td class="small" align="center">
           <b>
               <input class="cajas" type="text" name="taxo2" value="<?php echo $var615?>" />
            </b>  
      </tr>
      <br>
      <tr><td valign="TOP"><span class="small">* Gene Name: </span></td>
          <td class="small" align="center"> 
              <?php 
                   echo"<select class='cajas' name=gen2 id=gen2>"; 

                          $sql="SELECT * FROM gene where lab='$lab'"; 
                           $result=mysql_query($sql); 
                          
                              $sqllab="SELECT Name FROM gene WHERE Extraction_Method_ID='$var616'";		
		$cslab=mysql_query($sqllab,$cn);
            while($resullab=mysql_fetch_array($cslab)){
			$consullab78=$resullab[0];
			}
                             echo "<option value=".$var616.">".$consullab78."</option>\n"; 
                 while ( $row = mysql_fetch_array($result)) 
                      { 
              echo "<option value=".$row["Gene_ID"].">".$row["Name"]."</option>\n"; 
                       }
                  echo "</select>"; 
                     ?>
               
      </td>
    </tr>
    <br>
    <tr bgcolor="#CCDDEE">
      <td><span class="small">* Sequencing Method Name: </span></td>
      
    
      <td class="small" align="center">
         
          
           <?php 
                   echo"<select class='cajas' name=sequ2 id=sequ2>"; 

                           $sql="SELECT * FROM sequencing_method where lab='$lab'"; 
                           $result=mysql_query($sql); 
                          
                              $sqllab="SELECT Name FROM sequencing_method WHERE Sequencing_Method_ID='$var617'";		
		$cslab=mysql_query($sqllab,$cn);
            while($resullab=mysql_fetch_array($cslab)){
			$consullab79=$resullab[0];
			}
                             echo "<option value=".$var617.">".$consullab79."</option>\n"; 
                 while ( $row = mysql_fetch_array($result)) 
                      { 
              echo "<option value=".$row["Sequencing_Method_ID"].">".$row["Name"]."</option>\n"; 
                       }
                  echo "</select>"; 
                     ?>
         
          </td>
    </tr>
     <tr>
          <td><span class="small">*User Name </span></td>
     <td class="small" align="center">
         <b>
             <?php 
                   echo"<select class='cajas' name=use2 id=use2>"; 
 $sql="SELECT * FROM user where lab='$lab'"; 
                           $result=mysql_query($sql); 
                          
                              $sqllab="SELECT Name FROM user WHERE User_ID='$var697'";		
		$cslab=mysql_query($sqllab,$cn);
            while($resullab=mysql_fetch_array($cslab)){
			$consullab80=$resullab[0];
			}
                             echo "<option value=".$var697.">".$consullab80."</option>\n"; 
                 while ( $row = mysql_fetch_array($result)) 
                      { 
              echo "<option value=".$row["User_ID"].">".$row["Name"]."</option>\n"; 
                       } 
                  echo "</select>"; 
                     ?>
                    
            
            </b>  
          </td>
     </tr>
    <tr>
      <td><span class="small">* Cured sequence: </span></td>
        <td class="small" align="center">
          <b>
             <input class="cajas" type="text" name="cur2" value="<?php echo $var618?>" />
            </b>  
          </td>
    </tr> 
    
    <tr bgcolor="#CCDDEE">
      <td><span class="small">Comments: </span></td>
      <td class="small" align="center">
      <textarea  class="cajas" rows="10"  cols="30" name="Com2" value="<?php echo $var619?>">
                    </textarea>
             
          </td>
          
      
     <input type="hidden" name="sub" id="sub" value="<?php echo $consul3?>"/>
     <input type="hidden" name="lab" id="lab" value="<?php echo $lab?>"/>
    
    

                   <tr align="center" id="septimoboton" >
<td colspan="2">
     <input class="button" type="button" name="btns" value="Fasta" onclick="subirFasta();"/>
    <input class="button" type="button" name="btn7" value="Update" onclick="return ValidarFormulario6(Generic_Data);"/> 
     <input class="button" type="button" name="btnNuevo" value="New" onclick="addGenetic();"/>

</td>
</tr>
   
    
   </tbody></table> 
                 </div>
                        <div id="GeneticOcutar3" style="display:none;">
                 <table border="0">
      <tbody>
        
        

     
      
      <tr bgcolor="#CCDDEE">
        <td><span class="small">*Taxonomic lineage: </span></td>
        <td class="small" align="center">
           <b>
               <input class="cajas" type="text" name="taxo3" value="<?php echo $var622?>" />
            </b>  
      </tr>
      <br>
      <tr><td valign="TOP"><span class="small">* Gene Name: </span></td>
          <td class="small" align="center"> 
              <?php 
                   echo"<select class='cajas' name=gen3 id=gen3>"; 

                         $sql="SELECT * FROM gene where lab='$lab'"; 
                           $result=mysql_query($sql); 
                          
                              $sqllab="SELECT Name FROM gene WHERE Extraction_Method_ID='$var623'";		
		$cslab=mysql_query($sqllab,$cn);
            while($resullab=mysql_fetch_array($cslab)){
			$consullab81=$resullab[0];
			}
                             echo "<option value=".$var623.">".$consullab81."</option>\n"; 
                 while ( $row = mysql_fetch_array($result)) 
                      { 
              echo "<option value=".$row["Gene_ID"].">".$row["Name"]."</option>\n"; 
                       }
                  echo "</select>"; 
                     ?>
               
      </td>
    </tr>
    <br>
    <tr bgcolor="#CCDDEE">
      <td><span class="small">* Sequencing Method Name: </span></td>
      
    
      <td class="small" align="center">
         
          
           <?php 
                   echo"<select class='cajas' name=sequ3 id=sequ3>"; 

                             $sql="SELECT * FROM sequencing_method where lab='$lab'"; 
                           $result=mysql_query($sql); 
                          
                              $sqllab="SELECT Name FROM sequencing_method WHERE Sequencing_Method_ID='$var624'";		
		$cslab=mysql_query($sqllab,$cn);
            while($resullab=mysql_fetch_array($cslab)){
			$consullab82=$resullab[0];
			}
                             echo "<option value=".$var624.">".$consullab82."</option>\n"; 
                 while ( $row = mysql_fetch_array($result)) 
                      { 
              echo "<option value=".$row["Sequencing_Method_ID"].">".$row["Name"]."</option>\n"; 
                       }
                  echo "</select>"; 
                     ?>
         
          </td>
    </tr>
     <tr>
          <td><span class="small">*User Name </span></td>
     <td class="small" align="center">
         <b>
             <?php 
                   echo"<select class='cajas' name=use3 id=use3>"; 

                           $sql="SELECT * FROM user where lab='$lab'"; 
                           $result=mysql_query($sql); 
                          
                              $sqllab="SELECT Name FROM user WHERE User_ID='$var698'";		
		$cslab=mysql_query($sqllab,$cn);
            while($resullab=mysql_fetch_array($cslab)){
			$consullab83=$resullab[0];
			}
                             echo "<option value=".$var698.">".$consullab83."</option>\n"; 
                 while ( $row = mysql_fetch_array($result)) 
                      { 
              echo "<option value=".$row["User_ID"].">".$row["Name"]."</option>\n"; 
                       } 
                  echo "</select>"; 
                     ?>
                    
            
            </b>  
          </td>
     </tr>
    <tr>
      <td><span class="small">* Cured sequence: </span></td>
        <td class="small" align="center">
          <b>
             <input class="cajas" type="text" name="cur3" value="<?php echo $var625?>" />
            </b>  
          </td>
    </tr> 
    
    <tr bgcolor="#CCDDEE">
      <td><span class="small">Comments: </span></td>
      <td class="small" align="center">
      <textarea  class="cajas" rows="10"  cols="30" name="Com3" value="<?php echo $var626?>">
                    </textarea>
             
          </td>
          
      
     <input type="hidden" name="sub" id="sub" value="<?php echo $consul3?>"/>
     <input type="hidden" name="lab" id="lab" value="<?php echo $lab?>"/>
    
    

                   <tr align="center" id="septimoboton" >
<td colspan="2">
     <input class="button" type="button" name="btns" value="Fasta" onclick="subirFasta();"/>
    <input class="button" type="button" name="btn7" value="Update" onclick="return ValidarFormulario6(Generic_Data);"/> 
     <input class="button" type="button" name="btnNuevo" value="New" onclick="addGenetic();"/>

</td>
</tr>
   
    
   </tbody></table> 
                 </div>
                        <div id="GeneticOcutar4" style="display:none;">
                 <table border="0">
      <tbody>
        
        

     
      
      <tr bgcolor="#CCDDEE">
        <td><span class="small">*Taxonomic lineage: </span></td>
        <td class="small" align="center">
           <b>
               <input class="cajas" type="text" name="taxo4" value="<?php echo $var629?>" />
            </b>  
      </tr>
      <br>
      <tr><td valign="TOP"><span class="small">* Gene Name: </span></td>
          <td class="small" align="center"> 
              <?php 
                   echo"<select class='cajas' name=gen4 id=gen4>"; 

                           $sql="SELECT * FROM gene where lab='$lab'"; 
                           $result=mysql_query($sql); 
                          
                              $sqllab="SELECT Name FROM gene WHERE Extraction_Method_ID='$var630'";		
		$cslab=mysql_query($sqllab,$cn);
            while($resullab=mysql_fetch_array($cslab)){
			$consullab84=$resullab[0];
			}
                             echo "<option value=".$var630.">".$consullab84."</option>\n"; 
                 while ( $row = mysql_fetch_array($result)) 
                      { 
              echo "<option value=".$row["Gene_ID"].">".$row["Name"]."</option>\n"; 
                       }
                  echo "</select>"; 
                     ?>
               
      </td>
    </tr>
    <br>
    <tr bgcolor="#CCDDEE">
      <td><span class="small">* Sequencing Method Name: </span></td>
      
    
      <td class="small" align="center">
         
          
           <?php 
                   echo"<select class='cajas' name=sequ4 id=sequ4>"; 

                              $sql="SELECT * FROM sequencing_method where lab='$lab'"; 
                           $result=mysql_query($sql); 
                          
                              $sqllab="SELECT Name FROM sequencing_method WHERE Sequencing_Method_ID='$var631'";		
		$cslab=mysql_query($sqllab,$cn);
            while($resullab=mysql_fetch_array($cslab)){
			$consullab85=$resullab[0];
			}
                             echo "<option value=".$var631.">".$consullab85."</option>\n"; 
                 while ( $row = mysql_fetch_array($result)) 
                      { 
              echo "<option value=".$row["Sequencing_Method_ID"].">".$row["Name"]."</option>\n"; 
                       }
                  echo "</select>"; 
                     ?>
         
          </td>
    </tr>
     <tr>
          <td><span class="small">*User Name </span></td>
     <td class="small" align="center">
         <b>
             <?php 
                   echo"<select class='cajas' name=use4 id=use4>"; 

                            $sql="SELECT * FROM user where lab='$lab'"; 
                           $result=mysql_query($sql); 
                          
                              $sqllab="SELECT Name FROM user WHERE User_ID='$var699'";		
		$cslab=mysql_query($sqllab,$cn);
            while($resullab=mysql_fetch_array($cslab)){
			$consullab86=$resullab[0];
			}
                             echo "<option value=".$var699.">".$consullab86."</option>\n"; 
                 while ( $row = mysql_fetch_array($result)) 
                      { 
              echo "<option value=".$row["User_ID"].">".$row["Name"]."</option>\n"; 
                       } 
                  echo "</select>"; 
                     ?>
                    
            
            </b>  
          </td>
     </tr>
    <tr>
      <td><span class="small">* Cured sequence: </span></td>
        <td class="small" align="center">
          <b>
             <input class="cajas" type="text" name="cur4" value="<?php echo $var632?>" />
            </b>  
          </td>
    </tr> 
    
    <tr bgcolor="#CCDDEE">
      <td><span class="small">Comments: </span></td>
      <td class="small" align="center">
      <textarea  class="cajas" rows="10"  cols="30" name="Com4" value="<?php echo $var633?>">
                    </textarea>
             
          </td>
          
      
     <input type="hidden" name="sub" id="sub" value="<?php echo $consul3?>"/>
     <input type="hidden" name="lab" id="lab" value="<?php echo $lab?>"/>
    
    

                   <tr align="center" id="septimoboton" >
<td colspan="2">
     <input class="button" type="button" name="btns" value="Fasta" onclick="subirFasta();"/>
    <input class="button" type="button" name="btn7" value="Update" onclick="return ValidarFormulario6(Generic_Data);"/> 
     <input class="button" type="button" name="btnNuevo" value="New" onclick="addGenetic();"/>

</td>
</tr>
   
    
   </tbody></table> 
                 </div>
    </center>
              
     </form>         
 <script type="text/JavaScript">

//Cerramos el Script
</script>
                
               </script>
<div id="subeFasta"  style="display:none"> 
  <form name="document" id="subeima" action="" method="post" enctype="multipart/form-data">
        <table border="2">


           
            <input type="hidden" name="orga" value="<?php echo $var?>"/>
            <input type="hidden" name="txttabla" value="Genetic"/>
<center><h3>Fasta</h3></center>
<tr>
<td>Description</td>
<td><input class="cajas" type="text" name="descripcion"  /></td>
</tr>
<tr>
<td>File</td>
<td><input  class="cajas" type="file" name="doc"  /></td>
</tr>

<tr>

    <td><input class="button" type="submit" name="btnFasta"  value="ADD"/></td>
</tr>
        </table>
        </form>
    </div> 
    <?php
     if(isset($_POST["btnFasta"])){
         
         	$btn=$_POST["btnFasta"];
                if($btn=="ADD"){
                
                    $rutaServidor='Documents_Strain';
$rutaTemporal=$_FILES['doc']['tmp_name'];
$nombreImagen=$_FILES['doc']['name'];
$rutaDestino=$rutaServidor.'/'.$nombreImagen;
move_uploaded_file($rutaTemporal, $rutaDestino);
//if( $nombreImagen=="")
//{

    
    
//}

//else{
    global  $rutaServidor,$rutaTemporal,$nombreImagen,$rutaDestino;
    
$descrip=$_POST['descripcion']; 
$org=$_POST['txtid'];
$name_or=$_POST['orga'];
$tab=$_POST['txttabla'];
$sql="INSERT INTO document( Name_doc,Org_ID,tabla,ruta) values ('".$descrip."','".$name_or."','".$tab."','".$rutaDestino."') ";
$resp=  mysql_query($sql,$cn);
if($resp){
   echo "<script> $.bootstrapGrowl('It was inserted correctly'); </script>"; 
   
    
    
//}
}              
                }
         
         
         
         
         
         
     }
        
        
        
        
        
        ?>
                <div id="referenciaGenetic"></div>
      <sub></sub>
               </div>
                       
               </div>
               <div class="biodata_table1">
     <div class="scroll_vertical1">   
   
                     <?php
         
  $e="entra"; 
if($e=="entra")
 {
    		$cod=$_SESSION['sear'];
                
		
		$sql="select * from organism_information where Alias='$cod'";
		$cs=mysql_query($sql,$cn);
                
          
		while($resul=mysql_fetch_array($cs)){
			$var=$resul[0];
			$var1=$resul[1];
			$var2=$resul[2];
			$var3=$resul[3];
			$var4=$resul[4];
                        $var5=$resul[5];
                        	
			}
                        
             $cod=$_SESSION['sear'];
             $consul=  mysql_query("Select * from document where org_id='$var' and tabla='Genetic' ");
while($filas=  mysql_fetch_array($consul)){
     $id_2=$filas['Document_ID'];
$ruta=$filas['ruta'];
$desc=$filas['Name_doc'];
 $docum="Documents_Strain/kine.png";   
?>
           <div id="PanelImag">
               <form  name="primerIma" method="post" action="EliminarDocument.php" onsubmit="return confirmation()">
<?php echo $desc;?> 
  <input type="hidden"  name="Eo"  id="Eo" value="<?php echo  $id_2;?>">
      <input type="submit"  name="submitButtonName"  id="submitButtonName" value="x" >
 
      <br>
<a href="<?php print_r($ruta) ;?>" target="_blank"><img src="<?php echo  $docum;?>" width="50" height="50"> </a>

                </form>
        </div>
     

<?php
}
             
//             <a href="#" target="_blank"><img border="0" src="Imagenes/Fotos.png" name="pic1" width="158px"></a>
 }
            ?>

 </div>      

                     
</tr></tbody></table>
</div>



<!--------------------------Plant info -->
          
<!--          
                    
           <div class="TabbedPanelsContent" style="display: none;">
                  <div class="scroll_vertical"> 
     <form name="Plant_Info" method="POST" action="">          
    <center>
     <table border="0">
      <tbody>
          <tr>
       
        <td width="280" bgcolor="#ffffff" valign="middle" align="center" class="small">
            <b>
                <input type="hidden" name="plan" value="<?php echo $var67?>" />
            </b>  
        </td>
      </tr>
      <tr>
         <td><span class="small">*Org Name: </span></td>
          <td class="small" align="center">
              <b>
             <input type="text" name="org" value="<?php echo $var?>" />
            </b>  
          </td>
      </tr>
      
      <tr bgcolor="#CCDDEE">
        <td><span class="small">* Common Name: </span></td>
        <td class="small" align="center">
           <b>
             <input type="text" name="com" value="<?php echo $var69?>" />
            </b>  
      </tr>
      <tr><td valign="TOP"><span class="small">Scientific Name: </span></td>
          <td class="small" align="center"> 
              <b>
                  <input type="text" name="sci" value="<?php echo $var70?>" />
            </b>  
      </td>
    </tr>
    
    <tr bgcolor="#CCDDEE">
      <td><span class="small">Gender: </span></td>
      
    
      <td class="small" align="center">
         <b>
             <input type="text" name="gen" value="<?php echo $var71?>" />
            </b>  
          </td>
    </tr>
    
    <tr>
      <td><span class="small">Species: </span></td>
        <td class="small" align="center">
          <b>
             <input type="text" name="spe" value="<?php echo $var72?>" />
            </b>  
          </td>
    </tr> 
    
    <tr bgcolor="#CCDDEE">
      <td><span class="small">* Date of collection: </span></td>
       <td class="small" align="center">
          <b>
              <input type="date" name="date" value="<?php echo $var73?>" />
            </b>  
          </td>
          
          </tr>
          <tr>
      <td><span class="small">* Collected by: </span></td>
        <td class="small" align="center">
          <b>
             <input type="text" name="col" value="<?php echo $var74?>" />
            </b>  
          </td>
    </tr> 
          
       <tr bgcolor="#CCDDEE">
      <td><span class="small">Site Alias: </span></td>
       <td class="small" align="center">
          <b>
             <input type="text" name="sia" value="<?php echo $var75?>" />
            </b>  
          </td>
          
          </tr>
    
        <tr>
      <td><span class="small">* Site Directions: </span></td>
        <td class="small" align="center">
          <b>
             <input type="text" name="sid" value="<?php echo $var76?>" />
            </b>  
          </td>
    </tr> 
    
    
      <tr bgcolor="#CCDDEE">
      <td><span class="small">Longitud: </span></td>
       <td class="small" align="center">
          <b>
             <input type="text" name="lon" value="<?php echo $var77?>" />
            </b>  
          </td>
          
          </tr>
          
          
              <tr>
      <td><span class="small">Latitud: </span></td>
        <td class="small" align="center">
          <b>
             <input type="text" name="Lat" value="<?php echo $var78?>" />
            </b>  
          </td>
    </tr> 
    
       <tr bgcolor="#CCDDEE">
      <td><span class="small">Altitude: </span></td>
       <td class="small" align="center">
          <b>
             <input type="text" name="alt" value="<?php echo $var79?>" />
            </b>  
          </td>
          
          </tr>
          
          
                    <tr>
      <td><span class="small">Tissues: </span></td>
        <td class="small" align="center">
          <b>
             <input type="text" name="tis" value="<?php echo $var80?>" />
            </b>  
          </td>
    </tr> 
    
        <tr bgcolor="#CCDDEE">
      <td><span class="small">Heigth: </span></td>
       <td class="small" align="center">
          <b>
             <input type="text" name="hei" value="<?php echo $var81?>" />
            </b>  
          </td>
          
          </tr>
          
          
                     <tr>
      <td><span class="small">Width: </span></td>
        <td class="small" align="center">
          <b>
             <input type="text" name="wid" value="<?php echo $var82?>" />
            </b>  
          </td>
    </tr> 

    
         <tr bgcolor="#CCDDEE">
      <td><span class="small">* Physiological state: </span></td>
       <td class="small" align="center">
          <b>
             <input type="text" name="phy" value="<?php echo $var83?>" />
            </b>  
          </td>
          
          </tr>
          
          
                       <tr>
      <td><span class="small">* Neighboring plants: </span></td>
        <td class="small" align="center">
          <b>
             <input type="text" name="nei" value="<?php echo $var84?>" />
            </b>  
          </td>
    </tr> 
    
    
    
     <tr bgcolor="#CCDDEE">
      <td><span class="small">Comments: </span></td>
         <td class="small" align="center">
      <textarea rows="10"  cols="30" name="comm" value="<?php echo $var85?>">
                    </textarea> 
          </td>
          
          </tr>
          
          
                       <tr>
      <td><span class="small">Photo ID: </span></td>
        <td class="small" align="center">
          <b>
             <input type="text" name="pho" value="<?php echo $var86?>" />
            </b>  
          </td>
    </tr> 
    
                   <tr align="center" id="octavoboton" >
<td colspan="2">
    <input type="submit" name="btn8" value="Update"/> 
    <input type="submit" name="btn8"value="Delete"/>

</td>
</tr>
   
    
   </tbody></table> 
    </center>
              
     </form>         
 
                  </div>

</div>-->


<!--------------------------Metabolic Data -->
          
          
                    
           
         <div class="TabbedPanelsContent" style="display: none;">
               <table border="0" width="830px"><tbody><tr><td>
              <div class="biodata_table " >
              
                  <div class="scroll_vertical">
<!--               <form name="Metabolic_Data" id="Metabolic_Data" method="POST" action="">          
    <center>
     <table border="0">
      <tbody>
          <tr>
       
        <td width="280" bgcolor="#ffffff" valign="middle" align="center" class="small">
            <b>
                <input type="hidden" name="metid" value="<?php echo $var87?>" />
            </b>  
        </td>
      </tr>
      <tr>
         <td><span class="small">* Org Name: </span></td>
          <td class="small" align="center">
              <b>
                  <input class="cajas" type="hidden" name="orgid" value="<?php echo $var88?>" />
            </b>  
          </td>
      </tr>
      
      <tr bgcolor="#CCDDEE">
        <td><span class="small">* User Name: </span></td>
        <td class="small" align="center">
           <b>
               
               
               <?php 
                   echo"<select class='cajas' name=use id=use>"; 

                           $sql="SELECT Name FROM user where lab='$lab'"; 
                           $result=mysql_query($sql); 
                           $i=0; 
                echo "<option value=".$var89.">".$var89."</option>\n"; 
                 while ($row=mysql_fetch_row($result)) 
                      { 
              echo "<option value=".$row[$i].">".$row[$i]."</option>\n"; 
                       } 
                  echo "</select>"; 
                     ?>
             
            </b>  
      </tr>
      <tr><td valign="TOP"><span class="small">* Medium Name: </span></td>
          <td class="small" align="center"> 
              <b>
                  
                  <?php 
                   echo"<select class='cajas' name=med id=med >"; 

                           $sql="SELECT Name FROM medium where lab='$lab'"; 
                           $result=mysql_query($sql); 
                           $i=0; 
                echo "<option  value=".$var90.">".$var90."</option>\n"; 
                 while ($row=mysql_fetch_row($result)) 
                      { 
              echo "<option  value=".$row[$i].">".$row[$i]."</option>\n"; 
                       } 
                  echo "</select>"; 
                     ?>
                  
            </b>  
      </td>
    </tr>
    <tr bgcolor="#CCDDEE">
      <td><span class="small">* Temperature: </span></td>
      
    
      <td class="small" align="center">
         <b>
             <input  onKeyPress="return validar_monto(event)" size="7"class="cajas" type="text" name="tem" value="<?php echo $var91?>" />
            </b>   &#176; C 
          </td>
    </tr>
    
    <tr>
      <td><span class="small">Agitation: </span></td>
        <td class="small" align="center">
          <b>
              <input  onKeyPress="return validar_monto(event)"   size="7"class="cajas" type="text" name="agit" value="<?php echo $var92?>" />
            </b>  RPM
          </td>
    </tr> 
    
     <tr bgcolor="#CCDDEE">
      <td><span class="small">Time: </span></td>
      
    
      <td class="small" align="center">
         <b>
             <input  size="7"class="cajas" type="time" name="time" value="<?php echo $var93?>" />
            </b>  Hours
          </td>
    </tr>
    
      <tr>
      <td><span class="small">* pH_initial: </span></td>
        <td class="small" align="center">
          <b>
              
              <input   size="7" max="13" min="1"   type="number" name="phi" class="cajas" id="phi" value="<?php echo $var94?>" />
            </b>  
          </td>
    </tr> 
    
    <tr bgcolor="#CCDDEE">
      <td><span class="small">* pH_final: </span></td>
      
    
      <td class="small" align="center">
         <b>
             <input  onKeyPress="return validar_monto(event)" min="1" max="13" size="7" class="cajas" type="text" name="phf" value="<?php echo $var95?>" />
            </b>  
          </td>
    </tr>
    
      <tr>
      <td><span class="small">* OD600_initial: </span></td>
        <td class="small" align="center">
          <b>
              <input  onKeyPress="return validar_monto(event)"  size="7" class="cajas" type="text" name="odi" value="<?php echo $var96?>" />
            </b>  
          </td>
    </tr> 
    
    
    <tr bgcolor="#CCDDEE">
      <td><span class="small">* OD600_final: </span></td>
      
    
      <td class="small" align="center">
         <b>
             <input   onKeyPress="return validar_monto(event)" size="7"class="cajas" type="text" name="odf" value="<?php echo $var97?>" />
            </b>  
          </td>
    </tr>
    
      <tr>
      
       
          <b>
              <?php  
//                   echo"<select name=fra id=fra >"; 
//
//                         $sql="SELECT Name FROM document"; 
//                           $result=mysql_query($sql); 
//                           $i=0; 
//                           echo "<option  value=".$var98.">".$var98."</option>\n"; 
//                 while ($row=mysql_fetch_row($result)) 
//                      { 
//              echo "<option  value=".$row[$i].">".$row[$i]."</option>\n"; 
//                       } 
//                  echo "</select>"; 
                     ?>
             
            </b>  
        
    </tr> 
    
    <tr bgcolor="#CCDDEE">
      
      
    
     
         <b>
             <?php  
//                   echo"<select name=chr id=chr >"; 
//
//                           $sql="SELECT Name FROM document"; 
//                           $result=mysql_query($sql); 
//                           $i=0; 
//                            echo "<option  value=".$var99.">".$var99."</option>\n"; 
//                 while ($row=mysql_fetch_row($result)) 
//                      { 
//              echo "<option  value=".$row[$i].">".$row[$i]."</option>\n"; 
//                       } 
//                  echo "</select>"; 
                     ?>
             
            </b>  
       
    </tr>
    
      <tr>
    
           <b>
                <?php  
//                   echo"<select name=mas id=mas >"; 
//
//                          $sql="SELECT Name FROM document"; 
//                           $result=mysql_query($sql); 
//                           $i=0; 
//               echo "<option  value=".$var100.">".$var100."</option>\n"; 
//                 while ($row=mysql_fetch_row($result)) 
//                      {  
//              echo "<option  value=".$row[$i].">".$row[$i]."</option>\n"; 
//                       } 
//                  echo "</select>"; 
                     ?>
             
            </b>  
        
    </tr> 
       
      
      
    
      
              <?php  
//                   echo"<select name=nmr id=nmr >"; 
//
//                           $sql="SELECT Name FROM document"; 
//                           $result=mysql_query($sql); 
//                           $i=0; 
//                           echo "<option  value=".$var101.">".$var101."</option>\n"; 
//                 while ($row=mysql_fetch_row($result)) 
//                      { 
//              echo "<option  value=".$row[$i].">".$row[$i]."</option>\n"; 
//                       } 
//                  echo "</select>"; 
                     ?>
                   
             
          
          
   
    
    
    <tr>
      <td><span class="small">Comments: </span></td>
      <td class="small" align="center">
      <textarea class="cajas" rows="10"  cols="30" name="com" value="<?php echo $var102?>">
                    </textarea>
             
          </td>
          
      
    
     <input type="hidden" name="sub" id="sub" value="<?php echo $consul3?>"/>
     <input type="hidden" name="lab" id="lab" value="<?php echo $lab?>"/>
    


                   <tr align="center" id="novenoboton" >
<td colspan="2">
   
     <input class="button" type="button" name="btn9" value="Update" onclick="return ValidarFormulario7(Metabolic_Data);"/> 
<input  class="button" type="button" name="btns" value="Document" onclick="subirima5();"/> 
 
</td>
</tr>
   
     <div id="div_oculto4" style="display: none;"></div>
   </tbody></table> 
    </center>
              
     </form> -->
                      
 <script type="text/JavaScript">

</script>

<div id="sube5"  > 
<form name="document" id="subeima" action="" method="post" enctype="multipart/form-data">
        <table border="2">


            <input type="hidden" name="table" value="Metabolic"/>
            <input type="hidden" name="orga" value="<?php echo $var?>"/>
<center><h3>Document</h3></center>
<tr>
<td>Description</td>
<td><input class="cajas" type="text" name="descripcion"  /></td>
</tr>
<tr>
<td>Document</td>
<td><input class="cajas" type="file" name="doc"  /></td>
</tr>
<tr>
<td>Type</td>
<td><select  class="cajas" name="cbotype">
<option>Fractionation_strategy</option>
<option > Chromatograms</option>
<option>Mass_spectra</option>
<option >  NMR</option>
</select></td>
</tr>
<tr>

    <td><input class="button" type="submit" name="btnquinto"  value="ADD"/></td>
</tr>
        </table>
        </form>
    </div>
    <?php
     if(isset($_POST["btnquinto"])){
         
         	$btn=$_POST["btnquinto"];
                if($btn=="ADD"){
                 
                    $rutaServidor='Documents_Strain';
$rutaTemporal=$_FILES['doc']['tmp_name'];
$nombreImagen=$_FILES['doc']['name'];
$rutaDestino=$rutaServidor.'/'.$nombreImagen;
move_uploaded_file($rutaTemporal, $rutaDestino);
if( $nombreImagen=="")
{

      echo "<script> $.bootstrapGrowl('No inserted'); </script>";
    
}

else{
    global  $rutaServidor,$rutaTemporal,$nombreImagen,$rutaDestino;
    
$descrip=$_POST['descripcion'];

$name_or=$_POST['orga'];
$ty=$_POST['cbotype'];
$ta=$_POST['table'];
$sql="INSERT INTO document( Name_doc,Org_ID,tabla,ruta,type) values ('".$descrip."','".$name_or."','".$ta."','".$rutaDestino."','".$ty."') ";
$resp=  mysql_query($sql,$cn);
if($resp){
 echo "<script> $.bootstrapGrowl('It was inserted correctly'); </script>";
    
    
    
    
}

                    
                }
         
         
                }         
         
         
         
     }
        
        
        
        
        
        ?>
           
       </div>
                                  </div>
<div class="biodata_table1">
      <div class="scroll_vertical1">  
      
            <?php
        $e="entra"; 
if($e=="entra")
 {
    		$cod=$_SESSION['sear'];
                
		
		$sql="select * from organism_information where Alias='$cod'";
		$cs=mysql_query($sql,$cn);
                
          
		while($resul=mysql_fetch_array($cs)){
			$var=$resul[0];
			$var1=$resul[1];
			$var2=$resul[2];
			$var3=$resul[3];
			$var4=$resul[4];
                        $var5=$resul[5];
                        	
			}
                        
             $cod=$_SESSION['sear'];
             $consul=  mysql_query("Select * from document where org_id='$var' and tabla='Metabolic' ");
while($filas=  mysql_fetch_array($consul)){
     $id_2=$filas['Document_ID'];
$ruta=$filas['ruta'];
$desc=$filas['Name_doc'];
$typo=$filas['type'];
$imag="Documents_Strain/".$typo.".png";
?>
           <div id="PanelImag">
               <form  name="primerIma" method="post" action="EliminarDocument.php" onsubmit="return confirmation()">
<?php echo $desc;?> 
  <input type="hidden"  name="Eo"  id="Eo" value="<?php echo  $id_2;?>">
      <input type="submit"  name="submitButtonName"  id="submitButtonName" value="x" >
 <br>
<a href="<?php print_r($ruta) ;?>" target="_blank"><img src="<?php echo $imag;?>" width="50" height="50"> </a>
</form>
                   </div>
              


<?php
}
             
//             <a href="#" target="_blank"><img border="0" src="Imagenes/Fotos.png" name="pic1" width="158px"></a>
 }
            ?>
</div>
                     
                     </tr></tbody></table>
</div>





<!--------------------------Biossay-->
          
          
           <div class="TabbedPanelsContent" style="display: none;">
               
               <table border="0" width="830px"><tbody><tr><td>
                              <div class="biodata_table"> 
                  <div class="scroll_vertical"> 
     <form name="Bioassays" method="POST" action="">          
    <center>
     <table border="0">
      <tbody>
          <tr>
        
        <td width="280" bgcolor="#ffffff" valign="middle" align="center" class="small">
            <b>
                <input type="hidden" name="bio" value="<?php echo $var103?>" />
            </b>  
        </td>
      </tr>
      <tr>
<!--         <td><span class="small">* Org Name: </span></td>
          <td class="small" align="center">-->
              <b>
                  <input class="cajas" type="hidden" name="orgi" value="<?php echo $var104?>" />
            </b>  
<!--          </td>-->
      </tr>
      
      <tr bgcolor="#CCDDEE">
        <td><span class="small">* Assay Type Name: </span></td>
        <td class="small" align="center">
           <b>
                    <?php 
                   echo"<select class='cajas' name=assa id=assa>"; 

                   
                   
                   
                      $sql="SELECT * FROM assay_type where lab='$lab'"; 
                           $result=mysql_query($sql); 
                          
                              $sqllab="SELECT Name FROM assay_type WHERE Assay_Type_ID='$var105'";		
		$cslab=mysql_query($sqllab,$cn);
            while($resullab=mysql_fetch_array($cslab)){
			$consullab87=$resullab[0];
			}
                             echo "<option value=".$var105.">".$consullab87."</option>\n"; 
                 while ( $row = mysql_fetch_array($result)) 
                      { 
              echo "<option value=".$row["Assay_Type_ID"].">".$row["Name"]."</option>\n"; 
                       }
                       
              
                  echo "</select>"; 
                     ?>
           
            </b>  
      </tr>
      <tr><td valign="TOP"><span class="small">* Medium Name: </span></td>
          <td class="small" align="center"> 
              <b>
                   <?php 
                   echo"<select class='cajas' name=medi id=medi >"; 

                   
                   $sql="SELECT * FROM medium where lab='$lab'"; 
                           $result=mysql_query($sql); 
                          
                              $sqllab="SELECT Name FROM medium WHERE Medium_ID='$var106'";		
		$cslab=mysql_query($sqllab,$cn);
            while($resullab=mysql_fetch_array($cslab)){
			$consullab88=$resullab[0];
			}
                             echo "<option value=".$var106.">".$consullab88."</option>\n"; 
                 while ( $row = mysql_fetch_array($result)) 
                      { 
              echo "<option value=".$row["Medium_ID"].">".$row["Name"]."</option>\n"; 
                       }
                       
                      
                  echo "</select>"; 
                     ?>
               
            </b>  
      </td>
    </tr>
     <tr>
          <td><span class="small">*User Name </span></td>
     <td class="small" align="center">
         <b>
             <?php 
                   echo"<select class='cajas' name=use id=use>"; 

                            $sql="SELECT * FROM user where lab='$lab'"; 
                           $result=mysql_query($sql); 
                          
                              $sqllab="SELECT Name FROM user WHERE User_ID='$var700'";		
		$cslab=mysql_query($sqllab,$cn);
            while($resullab=mysql_fetch_array($cslab)){
			$consullab89=$resullab[0];
			}
                             echo "<option value=".$var700.">".$consullab89."</option>\n"; 
                 while ( $row = mysql_fetch_array($result)) 
                      { 
              echo "<option value=".$row["User_ID"].">".$row["Name"]."</option>\n"; 
                       } 
                  echo "</select>"; 
                     ?>
                    
            
            </b>  
          </td>
     </tr>
    <tr bgcolor="#CCDDEE">
      <td><span class="small">* Temperature: </span></td>
      
    
      <td class="small" align="center">
         <b>
             <input  onKeyPress="return validar_monto(event)"  size="7" class="cajas" type="text" name="temp" value="<?php echo $var107?>" />
            </b>   &#176; C 
          </td>
    </tr>
    
    <tr>
      <td><span class="small">Inhibition: </span></td>
        <td class="small" align="center">
          <b>
             <input class="cajas" type="text" name="inh" value="<?php echo $var108?>" />
            </b>  
          </td>
    </tr> 
    
     <tr bgcolor="#CCDDEE">
      <td><span class="small">Inhibition measurament: </span></td>
      
    
      <td class="small" align="center">
         <b>
             <input class="cajas" type="text" name="inm" value="<?php echo $var109?>" />
            </b>Mm  
          </td>
    </tr>
    
      <tr>
      <td><span class="small">* Antagonist strain: </span></td>
        <td class="small" align="center">
          <b>
               <?php 
                   echo"<select class='cajas' name=anta id=anta>"; 

                           $sql="SELECT * FROM organism_information where lab='$lab'"; 
                           $result=mysql_query($sql); 
                          
                              $sqllab="SELECT Alias FROM organism_information WHERE Org_ID='$var110'";		
		$cslab=mysql_query($sqllab,$cn);
            while($resullab=mysql_fetch_array($cslab)){
			$consullab90=$resullab[0];
			}
                             echo "<option value=".$var110.">".$consullab90."</option>\n"; 
                 while ( $row = mysql_fetch_array($result)) 
                      { 
              echo "<option value=".$row["Org_ID"].">".$row["Alias"]."</option>\n"; 
                       }
                   
                   
                   
                  echo "</select>"; 
                     ?>
             
            </b>  
          </td>
    </tr> 
    
    <tr bgcolor="#CCDDEE">
     
      
    
      
         <b>
             <input type="hidden" name="pho" value="<?php echo $var111?>" />
            </b>  
      
    </tr>
    
      
    
    <tr>
      <td><span class="small">Comments: </span></td>
      <td class="small" align="center">
      <textarea  class="cajas" rows="10"  cols="30" name="com" value="<?php echo $var112?>">
                    </textarea>
             
          </td>
          
       <input type="hidden" name="sub" id="sub" value="<?php echo $consul3?>"/>
    
     <input type="hidden" name="lab" id="lab" value="<?php echo $lab?>"/>
    
    

                   <tr align="center" id="decimoboton" >
<td colspan="2">
 
 <input  class="button" type="button" name="btn10" value="Update" onclick="return ValidarFormulario8(Bioassays);"/> 
<input class="button" type="button" name="btns" value="Document" onclick="subirima6();"/> 
<input class="button" type="button" name="btnNuevo" value="New" onclick="addBio();"/>


</td>
</tr>
   
     <div id="div_oculto5" style="display: none;"></div>
   </tbody></table> 
       
           <div id="BioOcultar1" style="display:none;">
            <table border="0">
      <tbody>
          <tr>
        
        <td width="280" bgcolor="#ffffff" valign="middle" align="center" class="small">
            <b>
              
            </b>  
        </td>
      </tr>
      <tr>
<!--         <td><span class="small">* Org Name: </span></td>
          <td class="small" align="center">-->
              <b>
               
            </b>  
<!--          </td>-->
      </tr>
      
      <tr bgcolor="#CCDDEE">
        <td><span class="small">* Assay Type Name: </span></td>
        <td class="small" align="center">
           <b>
                    <?php 
                   echo"<select class='cajas' name=assa2 id=assa2>"; 

                         $sql="SELECT * FROM assay_type where lab='$lab'"; 
                           $result=mysql_query($sql); 
                          
                              $sqllab="SELECT Name FROM assay_type WHERE Assay_Type_ID='$var636'";		
		$cslab=mysql_query($sqllab,$cn);
            while($resullab=mysql_fetch_array($cslab)){
			$consullab91=$resullab[0];
			}
                             echo "<option value=".$var636.">".$consullab91."</option>\n"; 
                 while ( $row = mysql_fetch_array($result)) 
                      { 
              echo "<option value=".$row["Assay_Type_ID"].">".$row["Name"]."</option>\n"; 
                       }
                  echo "</select>"; 
                     ?>
           
            </b>  
      </tr>
      <tr><td valign="TOP"><span class="small">* Medium Name: </span></td>
          <td class="small" align="center"> 
              <b>
                   <?php 
                   echo"<select class='cajas' name=medi2 id=medi2 >"; 

                           $sql="SELECT * FROM medium where lab='$lab'"; 
                           $result=mysql_query($sql); 
                          
                              $sqllab="SELECT Name FROM medium WHERE Medium_ID='$var637'";		
		$cslab=mysql_query($sqllab,$cn);
            while($resullab=mysql_fetch_array($cslab)){
			$consullab92=$resullab[0];
			}
                             echo "<option value=".$var637.">".$consullab92."</option>\n"; 
                 while ( $row = mysql_fetch_array($result)) 
                      { 
              echo "<option value=".$row["Medium_ID"].">".$row["Name"]."</option>\n"; 
                       }
                  echo "</select>"; 
                     ?>
               
            </b>  
      </td>
      
    </tr>
     <tr>
          <td><span class="small">*User Name </span></td>
     <td class="small" align="center">
         <b>
             <?php 
                   echo"<select class='cajas' name=use2 id=use2>"; 

                          $sql="SELECT * FROM user where lab='$lab'"; 
                           $result=mysql_query($sql); 
                          
                              $sqllab="SELECT Name FROM user WHERE User_ID='$var702'";		
		$cslab=mysql_query($sqllab,$cn);
            while($resullab=mysql_fetch_array($cslab)){
			$consullab93=$resullab[0];
			}
                             echo "<option value=".$var702.">".$consullab93."</option>\n"; 
                 while ( $row = mysql_fetch_array($result)) 
                      { 
              echo "<option value=".$row["User_ID"].">".$row["Name"]."</option>\n"; 
                       } 
                  echo "</select>"; 
                     ?>
                    
            
            </b>  
          </td>
     </tr>
    <tr bgcolor="#CCDDEE">
      <td><span class="small">* Temperature: </span></td>
      
    
      <td class="small" align="center">
         <b>
             <input  onKeyPress="return validar_monto(event)"  size="7" class="cajas" type="text" name="temp2" value="<?php echo $var638?>" />
            </b>   &#176; C 
          </td>
    </tr>
    
    <tr>
      <td><span class="small">Inhibition: </span></td>
        <td class="small" align="center">
          <b>
             <input class="cajas" type="text" name="inh2" value="<?php echo $var639?>" />
            </b>  
          </td>
    </tr> 
    
     <tr bgcolor="#CCDDEE">
      <td><span class="small">Inhibition measurament: </span></td>
      
    
      <td class="small" align="center">
         <b>
             <input class="cajas" type="text" name="inm2" value="<?php echo $var640?>" />
            </b>Mm  
          </td>
    </tr>
    
      <tr>
      <td><span class="small">* Antagonist strain: </span></td>
        <td class="small" align="center">
          <b>
               <?php 
                   echo"<select class='cajas' name=anta2 id=anta2>"; 

                            $sql="SELECT * FROM organism_information where lab='$lab'"; 
                           $result=mysql_query($sql); 
                          
                              $sqllab="SELECT Alias FROM organism_information WHERE Org_ID='$var641'";		
		$cslab=mysql_query($sqllab,$cn);
            while($resullab=mysql_fetch_array($cslab)){
			$consullab94=$resullab[0];
			}
                             echo "<option value=".$var641.">".$consullab94."</option>\n"; 
                 while ( $row = mysql_fetch_array($result)) 
                      { 
              echo "<option value=".$row["Org_ID"].">".$row["Alias"]."</option>\n"; 
                       }
                  echo "</select>"; 
                     ?>
             
            </b>  
          </td>
    </tr> 
    
    <tr bgcolor="#CCDDEE">
     
      
    
      
         <b>
             <input type="hidden" name="pho" value="<?php echo $var642?>" />
            </b>  
      
    </tr>
    
      
    
    <tr>
      <td><span class="small">Comments: </span></td>
      <td class="small" align="center">
      <textarea  class="cajas" rows="10"  cols="30" name="com2" value="<?php echo $var643?>">
                    </textarea>
             
          </td>
          
       <input type="hidden" name="sub" id="sub" value="<?php echo $consul3?>"/>
    
     <input type="hidden" name="lab" id="lab" value="<?php echo $lab?>"/>
    
    

                   <tr align="center" id="decimoboton" >
<td colspan="2">
 
 <input  class="button" type="button" name="btn10" value="Update" onclick="return ValidarFormulario8(Bioassays);"/> 
<input class="button" type="button" name="btns" value="Document" onclick="subirima6();"/> 
<input class="button" type="button" name="btnNuevo" value="New" onclick="addBio();"/>


</td>
</tr>
   
     <div id="div_oculto5" style="display: none;"></div>
   </tbody></table> 
            </div>
           <div id="BioOcultar2" style="display:none;">
            <table border="0">
      <tbody>
          <tr>
        
        <td width="280" bgcolor="#ffffff" valign="middle" align="center" class="small">
            <b>
                
            </b>  
        </td>
      </tr>
      <tr>
<!--         <td><span class="small">* Org Name: </span></td>
          <td class="small" align="center">-->
              <b>
                 
            </b>  
<!--          </td>-->
      </tr>
      
      <tr bgcolor="#CCDDEE">
        <td><span class="small">* Assay Type Name: </span></td>
        <td class="small" align="center">
           <b>
                    <?php 
                   echo"<select class='cajas' name=assa3 id=assa3>"; 

                         $sql="SELECT * FROM assay_type where lab='$lab'"; 
                           $result=mysql_query($sql); 
                          
                              $sqllab="SELECT Name FROM assay_type WHERE Assay_Type_ID='$var646'";		
		$cslab=mysql_query($sqllab,$cn);
            while($resullab=mysql_fetch_array($cslab)){
			$consullab95=$resullab[0];
			}
                             echo "<option value=".$var646.">".$consullab95."</option>\n"; 
                 while ( $row = mysql_fetch_array($result)) 
                      { 
              echo "<option value=".$row["Assay_Type_ID"].">".$row["Name"]."</option>\n"; 
                       }
                  echo "</select>"; 
                     ?>
           
            </b>  
      </tr>
      <tr><td valign="TOP"><span class="small">* Medium Name: </span></td>
          <td class="small" align="center"> 
              <b>
                   <?php 
                   echo"<select class='cajas' name=medi3 id=medi3 >"; 

                          $sql="SELECT * FROM medium where lab='$lab'"; 
                           $result=mysql_query($sql); 
                          
                              $sqllab="SELECT Name FROM medium WHERE Medium_ID='$var647'";		
		$cslab=mysql_query($sqllab,$cn);
            while($resullab=mysql_fetch_array($cslab)){
			$consullab96=$resullab[0];
			}
                             echo "<option value=".$var647.">".$consullab96."</option>\n"; 
                 while ( $row = mysql_fetch_array($result)) 
                      { 
              echo "<option value=".$row["Medium_ID"].">".$row["Name"]."</option>\n"; 
                       }
                  echo "</select>"; 
                     ?>
               
            </b>  
      </td>
    </tr>
     <tr>
          <td><span class="small">*User Name </span></td>
     <td class="small" align="center">
         <b>
             <?php 
                   echo"<select class='cajas' name=use3 id=use3>"; 

                           $sql="SELECT * FROM user where lab='$lab'"; 
                           $result=mysql_query($sql); 
                          
                              $sqllab="SELECT Name FROM user WHERE User_ID='$var703'";		
		$cslab=mysql_query($sqllab,$cn);
            while($resullab=mysql_fetch_array($cslab)){
			$consullab97=$resullab[0];
			}
                             echo "<option value=".$var703.">".$consullab97."</option>\n"; 
                 while ( $row = mysql_fetch_array($result)) 
                      { 
              echo "<option value=".$row["User_ID"].">".$row["Name"]."</option>\n"; 
                       } 
                  echo "</select>"; 
                     ?>
                    
            
            </b>  
          </td>
     </tr>
    <tr bgcolor="#CCDDEE">
      <td><span class="small">* Temperature: </span></td>
      
    
      <td class="small" align="center">
         <b>
             <input  onKeyPress="return validar_monto(event)"  size="7" class="cajas" type="text" name="temp3" value="<?php echo $var648?>" />
            </b>   &#176; C 
          </td>
    </tr>
    
    <tr>
      <td><span class="small">Inhibition: </span></td>
        <td class="small" align="center">
          <b>
             <input class="cajas" type="text" name="inh3" value="<?php echo $var649?>" />
            </b>  
          </td>
    </tr> 
    
     <tr bgcolor="#CCDDEE">
      <td><span class="small">Inhibition measurament: </span></td>
      
    
      <td class="small" align="center">
         <b>
             <input class="cajas" type="text" name="inm3" value="<?php echo $var650?>" />
            </b>Mm  
          </td>
    </tr>
    
      <tr>
      <td><span class="small">* Antagonist strain: </span></td>
        <td class="small" align="center">
          <b>
               <?php 
                   echo"<select class='cajas' name=anta3 id=anta3>"; 

                           $sql="SELECT * FROM organism_information where lab='$lab'"; 
                           $result=mysql_query($sql); 
                          
                              $sqllab="SELECT Alias FROM organism_information WHERE Org_ID='$var651'";		
		$cslab=mysql_query($sqllab,$cn);
            while($resullab=mysql_fetch_array($cslab)){
			$consullab98=$resullab[0];
			}
                             echo "<option value=".$var651.">".$consullab98."</option>\n"; 
                 while ( $row = mysql_fetch_array($result)) 
                      { 
              echo "<option value=".$row["Org_ID"].">".$row["Alias"]."</option>\n"; 
                       }
                  echo "</select>"; 
                     ?>
             
            </b>  
          </td>
    </tr> 
    
    <tr bgcolor="#CCDDEE">
     
      
    
      
         <b>
             <input type="hidden" name="pho" value="<?php echo $var652?>" />
            </b>  
      
    </tr>
    
      
    
    <tr>
      <td><span class="small">Comments: </span></td>
      <td class="small" align="center">
      <textarea  class="cajas" rows="10"  cols="30" name="com3" value="<?php echo $var653?>">
                    </textarea>
             
          </td>
          
       <input type="hidden" name="sub" id="sub" value="<?php echo $consul3?>"/>
    
     <input type="hidden" name="lab" id="lab" value="<?php echo $lab?>"/>
    
    

                   <tr align="center" id="decimoboton" >
<td colspan="2">
 
 <input  class="button" type="button" name="btn10" value="Update" onclick="return ValidarFormulario8(Bioassays);"/> 
<input class="button" type="button" name="btns" value="Document" onclick="subirima6();"/> 
<input class="button" type="button" name="btnNuevo" value="New" onclick="addBio();"/>


</td>
</tr>
   
     <div id="div_oculto5" style="display: none;"></div>
   </tbody></table> 
            </div>
           <div id="BioOcultar3" style="display:none;">
            <table border="0">
      <tbody>
          <tr>
        
        <td width="280" bgcolor="#ffffff" valign="middle" align="center" class="small">
            <b>
                
            </b>  
        </td>
      </tr>
      <tr>
<!--         <td><span class="small">* Org Name: </span></td>
          <td class="small" align="center">-->
              <b>
                  
            </b>  
<!--          </td>-->
      </tr>
      
      <tr bgcolor="#CCDDEE">
        <td><span class="small">* Assay Type Name: </span></td>
        <td class="small" align="center">
           <b>
                    <?php 
                   echo"<select class='cajas' name=assa4 id=assa4>"; 

                          $sql="SELECT * FROM assay_type where lab='$lab'"; 
                           $result=mysql_query($sql); 
                          
                              $sqllab="SELECT Name FROM assay_type WHERE Assay_Type_ID='$var656'";		
		$cslab=mysql_query($sqllab,$cn);
            while($resullab=mysql_fetch_array($cslab)){
			$consullab99=$resullab[0];
			}
                             echo "<option value=".$var656.">".$consullab99."</option>\n"; 
                 while ( $row = mysql_fetch_array($result)) 
                      { 
              echo "<option value=".$row["Assay_Type_ID"].">".$row["Name"]."</option>\n"; 
                       }
                  echo "</select>"; 
                     ?>
           
            </b>  
      </tr>
      <tr><td valign="TOP"><span class="small">* Medium Name: </span></td>
          <td class="small" align="center"> 
              <b>
                   <?php 
                   echo"<select class='cajas' name=medi4 id=medi4 >"; 

                          $sql="SELECT * FROM medium where lab='$lab'"; 
                           $result=mysql_query($sql); 
                          
                              $sqllab="SELECT Name FROM medium WHERE Medium_ID='$var657'";		
		$cslab=mysql_query($sqllab,$cn);
            while($resullab=mysql_fetch_array($cslab)){
			$consullab100=$resullab[0];
			}
                             echo "<option value=".$var657.">".$consullab100."</option>\n"; 
                 while ( $row = mysql_fetch_array($result)) 
                      { 
              echo "<option value=".$row["Medium_ID"].">".$row["Name"]."</option>\n"; 
                       }
                  echo "</select>"; 
                     ?>
               
            </b>  
      </td>
    </tr>
     <tr>
          <td><span class="small">*User Name </span></td>
     <td class="small" align="center">
         <b>
             <?php 
                   echo"<select class='cajas' name=use4 id=use4>"; 

                            $sql="SELECT * FROM user where lab='$lab'"; 
                           $result=mysql_query($sql); 
                          
                              $sqllab="SELECT Name FROM user WHERE User_ID='$var704'";		
		$cslab=mysql_query($sqllab,$cn);
            while($resullab=mysql_fetch_array($cslab)){
			$consullab101=$resullab[0];
			}
                             echo "<option value=".$var704.">".$consullab101."</option>\n"; 
                 while ( $row = mysql_fetch_array($result)) 
                      { 
              echo "<option value=".$row["User_ID"].">".$row["Name"]."</option>\n"; 
                       } 
                  echo "</select>"; 
                     ?>
                    
            
            </b>  
          </td>
     </tr>
    <tr bgcolor="#CCDDEE">
      <td><span class="small">* Temperature: </span></td>
      
    
      <td class="small" align="center">
         <b>
             <input  onKeyPress="return validar_monto(event)"  size="7" class="cajas" type="text" name="temp4" value="<?php echo $var658?>" />
            </b>   &#176; C 
          </td>
    </tr>
    
    <tr>
      <td><span class="small">Inhibition: </span></td>
        <td class="small" align="center">
          <b>
             <input class="cajas" type="text" name="inh4" value="<?php echo $var659?>" />
            </b>  
          </td>
    </tr> 
    
     <tr bgcolor="#CCDDEE">
      <td><span class="small">Inhibition measurament: </span></td>
      
    
      <td class="small" align="center">
         <b>
             <input class="cajas" type="text" name="inm4" value="<?php echo $var660?>" />
            </b>Mm  
          </td>
    </tr>
    
      <tr>
      <td><span class="small">* Antagonist strain: </span></td>
        <td class="small" align="center">
          <b>
               <?php 
                   echo"<select class='cajas' name=anta4 id=anta4>"; 

                     $sql="SELECT * FROM organism_information where lab='$lab'"; 
                           $result=mysql_query($sql); 
                          
                              $sqllab="SELECT Alias FROM organism_information WHERE Org_ID='$var661'";		
		$cslab=mysql_query($sqllab,$cn);
            while($resullab=mysql_fetch_array($cslab)){
			$consullab102=$resullab[0];
			}
                             echo "<option value=".$var661.">".$consullab102."</option>\n"; 
                 while ( $row = mysql_fetch_array($result)) 
                      { 
              echo "<option value=".$row["Org_ID"].">".$row["Alias"]."</option>\n"; 
                       }
                  echo "</select>"; 
                     ?>
             
            </b>  
          </td>
    </tr> 
    
    <tr bgcolor="#CCDDEE">
     
      
    
      
         <b>
             <input type="hidden" name="pho" value="<?php echo $var662?>" />
            </b>  
      
    </tr>
    
      
    
    <tr>
      <td><span class="small">Comments: </span></td>
      <td class="small" align="center">
      <textarea  class="cajas" rows="10"  cols="30" name="com4" value="<?php echo $var663?>">
                    </textarea>
             
          </td>
          
       <input type="hidden" name="sub" id="sub" value="<?php echo $consul3?>"/>
    
     <input type="hidden" name="lab" id="lab" value="<?php echo $lab?>"/>
    
    

                   <tr align="center" id="decimoboton" >
<td colspan="2">
 
 <input  class="button" type="button" name="btn10" value="Update" onclick="return ValidarFormulario8(Bioassays);"/> 
<input class="button" type="button" name="btns" value="Document" onclick="subirima6();"/> 
<input class="button" type="button" name="btnNuevo" value="New" onclick="addBio();"/>


</td>
</tr>
   
     <div id="div_oculto5" style="display: none;"></div>
   </tbody></table> 
            </div>
         <div id="BioOcultar4" style="display:none;">
            <table border="0">
      <tbody>
          <tr>
        
        <td width="280" bgcolor="#ffffff" valign="middle" align="center" class="small">
            <b>
             
            </b>  
        </td>
      </tr>
      <tr>
<!--         <td><span class="small">* Org Name: </span></td>
          <td class="small" align="center">-->
              <b>
                 
            </b>  
<!--          </td>-->
      </tr>
      
      <tr bgcolor="#CCDDEE">
        <td><span class="small">* Assay Type Name: </span></td>
        <td class="small" align="center">
           <b>
                    <?php 
                   echo"<select class='cajas' name=assa1 id=assa1>"; 

                           $sql="SELECT * FROM assay_type where lab='$lab'"; 
                           $result=mysql_query($sql); 
                          
                              $sqllab="SELECT Name FROM assay_type WHERE Assay_Type_ID='$var666'";		
		$cslab=mysql_query($sqllab,$cn);
            while($resullab=mysql_fetch_array($cslab)){
			$consullab103=$resullab[0];
			}
                             echo "<option value=".$var666.">".$consullab103."</option>\n"; 
                 while ( $row = mysql_fetch_array($result)) 
                      { 
              echo "<option value=".$row["Assay_Type_ID"].">".$row["Name"]."</option>\n"; 
                       }
                  echo "</select>"; 
                     ?>
           
            </b>  
      </tr>
      <tr><td valign="TOP"><span class="small">* Medium Name: </span></td>
          <td class="small" align="center"> 
              <b>
                   <?php 
                   echo"<select class='cajas' name=medi1 id=medi1 >"; 

                         $sql="SELECT * FROM medium where lab='$lab'"; 
                           $result=mysql_query($sql); 
                          
                              $sqllab="SELECT Name FROM medium WHERE Medium_ID='$var667'";		
		$cslab=mysql_query($sqllab,$cn);
            while($resullab=mysql_fetch_array($cslab)){
			$consullab104=$resullab[0];
			}
                             echo "<option value=".$var667.">".$consullab104."</option>\n"; 
                 while ( $row = mysql_fetch_array($result)) 
                      { 
              echo "<option value=".$row["Medium_ID"].">".$row["Name"]."</option>\n"; 
                       }
                  echo "</select>"; 
                     ?>
               
            </b>  
      </td>
    </tr>
    <tr>
          <td><span class="small">*User Name </span></td>
     <td class="small" align="center">
         <b>
             <?php 
                   echo"<select class='cajas' name=use1 id=use1>"; 

                           $sql="SELECT * FROM user where lab='$lab'"; 
                           $result=mysql_query($sql); 
                          
                              $sqllab="SELECT Name FROM user WHERE User_ID='$var701'";		
		$cslab=mysql_query($sqllab,$cn);
            while($resullab=mysql_fetch_array($cslab)){
			$consullab105=$resullab[0];
			}
                             echo "<option value=".$var701.">".$consullab105."</option>\n"; 
                 while ( $row = mysql_fetch_array($result)) 
                      { 
              echo "<option value=".$row["User_ID"].">".$row["Name"]."</option>\n"; 
                       } 
                  echo "</select>"; 
                     ?>
                    
            
            </b>  
          </td>
     </tr>
    <tr bgcolor="#CCDDEE">
      <td><span class="small">* Temperature: </span></td>
      
    
      <td class="small" align="center">
         <b>
             <input  onKeyPress="return validar_monto(event)"  size="7" class="cajas" type="text" name="temp1" value="<?php echo $var668?>" />
            </b>   &#176; C 
          </td>
    </tr>
    
    <tr>
      <td><span class="small">Inhibition: </span></td>
        <td class="small" align="center">
          <b>
             <input class="cajas" type="text" name="inh1" value="<?php echo $var669?>" />
            </b>  
          </td>
    </tr> 
    
     <tr bgcolor="#CCDDEE">
      <td><span class="small">Inhibition measurament: </span></td>
      
    
      <td class="small" align="center">
         <b>
             <input class="cajas" type="text" name="inm1" value="<?php echo $var670?>" />
            </b>Mm  
          </td>
    </tr>
    
      <tr>
      <td><span class="small">* Antagonist strain: </span></td>
        <td class="small" align="center">
          <b>
               <?php 
                   echo"<select class='cajas' name=anta1 id=anta1>"; 

                            $sql="SELECT * FROM organism_information where lab='$lab'"; 
                           $result=mysql_query($sql); 
                          
                              $sqllab="SELECT Alias FROM organism_information WHERE Org_ID='$var671'";		
		$cslab=mysql_query($sqllab,$cn);
            while($resullab=mysql_fetch_array($cslab)){
			$consullab106=$resullab[0];
			}
                             echo "<option value=".$var671.">".$consullab106."</option>\n"; 
                 while ( $row = mysql_fetch_array($result)) 
                      { 
              echo "<option value=".$row["Org_ID"].">".$row["Alias"]."</option>\n"; 
                       }
                  echo "</select>"; 
                     ?>
             
            </b>  
          </td>
    </tr> 
    
    <tr bgcolor="#CCDDEE">
     
      
    
      
         <b>
             <input type="hidden" name="pho" value="<?php echo $var672?>" />
            </b>  
      
    </tr>
    
      
    
    <tr>
      <td><span class="small">Comments: </span></td>
      <td class="small" align="center">
      <textarea  class="cajas" rows="10"  cols="30" name="com1" value="<?php echo $var673?>">
                    </textarea>
             
          </td>
          
       <input type="hidden" name="sub" id="sub" value="<?php echo $consul3?>"/>
    
     <input type="hidden" name="lab" id="lab" value="<?php echo $lab?>"/>
    
    

                   <tr align="center" id="decimoboton" >
<td colspan="2">
 
 <input  class="button" type="button" name="btn10" value="Update" onclick="return ValidarFormulario8(Bioassays);"/> 
<input class="button" type="button" name="btns" value="Document" onclick="subirima6();"/> 
<input class="button" type="button" name="btnNuevo" value="New" onclick="addBio();"/>


</td>
</tr>
   
     <div id="div_oculto5" style="display: none;"></div>
   </tbody></table> 
            </div>
    </center>
              
     </form>         

                  <script type="text/JavaScript">

</script>
<div id="sube6"  style="display:none"> 
 <form name="image" id="subeima" action="" method="post" enctype="multipart/form-data">
        <table border="2">


            <input type="hidden" name="txtid" value="<?php echo $var?>"/>
            <input type="hidden" name="metid" value="bio" />

            <center><h3>Document</h3></center>
<tr>
<td>Description</td>
<td><input class="cajas" type="text" name="descripcion"  /></td>
</tr>
<tr>
<td>Image</td>
<td><input class="cajas" type="file" name="doc"  /></td>
</tr>

<tr>

    <td><input class="button" type="submit" name="btnsext"  value="ADD"/></td>
</tr>
        </table>
        </form>
    </div>
        <?php
     if(isset($_POST["btnsext"])){
         
         	$btn=$_POST["btnsext"];
                if($btn=="ADD"){
                
                    $rutaServidor='Ima';
$rutaTemporal=$_FILES['doc']['tmp_name'];
$nombreImagen=$_FILES['doc']['name'];
$rutaDestino=$rutaServidor.'/'.$nombreImagen;
move_uploaded_file($rutaTemporal, $rutaDestino);
if( $nombreImagen=="")
{

      echo "<script> $.bootstrapGrowl('No inserted'); </script>";
    
}

else{
    global  $rutaServidor,$rutaTemporal,$nombreImagen,$rutaDestino;
    
$descrip=$_POST['descripcion'];
$org=$_POST['txtid'];
$tabla=$_POST['metid'];
$sql="INSERT INTO document( Name_doc,Org_ID,tabla,ruta) values ('".$descrip."','".$org."','".$tabla."','".$rutaDestino."') ";
$resp=  mysql_query($sql,$cn);
if($resp){
     echo "<script> $.bootstrapGrowl('It was inserted correctly'); </script>";
    
    
    
    
}
                 
                }
         
         
         
         
         
                }     
     } 
        
        
        
        
        
        ?>
 <div id="referenciaBio"></div>
      <strong></strong>
 <div id="referenciaBio"></div>
      <strong></strong>
                  </div>
                              </div>
                               
                               
                               <div class="biodata_table1">
      <div class="scroll_vertical1">  
      
	
       
            <?php
      
    $e="entra"; 
if($e=="entra")
 {
    		$cod=$_SESSION['sear'];
                
		
		$sql="select * from organism_information where Alias='$cod'";
		$cs=mysql_query($sql,$cn);
                
          
		while($resul=mysql_fetch_array($cs)){
			$var=$resul[0];
			$var1=$resul[1];
			$var2=$resul[2];
			$var3=$resul[3];
			$var4=$resul[4];
                        $var5=$resul[5];
                        	
			}
                        
             $cod=$_SESSION['sear'];
             $consul=  mysql_query("Select * from document where org_id='$var' and tabla='bio' ");
while($filas=  mysql_fetch_array($consul)){
     $id_2=$filas['Document_ID'];
$ruta=$filas['ruta'];
$desc=$filas['Name_doc'];
$ima="Ima/bio.png";
?>
          <div id="PanelImag">
           <form  name="primerIma" method="post" action="EliminarFoto.php" onsubmit="return confirmation()">
<?php echo $desc;?> 
  <input type="hidden"  name="Eo"  id="Eo" value="<?php echo  $id_2;?>">
      <input type="submit"  name="submitButtonName"  id="submitButtonName" value="x" >
 <br>
<a href="<?php print_r($ruta) ;?>" target="_blank"><img src="<?php echo $ima;?>" width="50" height="50"> </a>

</form>
                   </div>
<?php
}
             
//             <a href="#" target="_blank"><img border="0" src="Imagenes/Fotos.png" name="pic1" width="158px"></a>
 }
            ?>

              </div> 

                      
                     </tr></tbody></table>

</div>
   <div class="TabbedPanelsContent" style="display: none;">

  
 

    

  
          
</div>
           
         


<!------###-END MAIN WINDOW STUFF-###----->
</div> 
       
          
   
  
 
           
  
 
  
</div> 
          
          
          
         
          
          
          
          
          
          
      </div> 
  </div>
 </div> 
  
    <div id="mapaoculto" > 
     </div> 
         <?php 
  
  $entrada="hi";
  if($entrada=="hi")
  {
 global $var;
if($var==""){
    
     
    
    ?>
<script type="text/JavaScript">
     
 
               
      
    var elem=document.getElementById("panel0");
    
    elem.className="mostrar";
    var el=document.getElementById("panel1");
    
    el.className="ocultar";
    </script>
<?php   
}
  } 
?>
    
    
    
    
       <?php 
if($consul1=="Guest"){
    
     
    
    ?>
<script type="text/JavaScript">
    
    document.getElementById('primerboton').style.display='none';
        document.getElementById('subeima').style.display='none';
    document.getElementById('segundoboton').style.display='none';
    document.getElementById('tercerboton').style.display='none';
        document.getElementById('cuartoboton').style.display='none';
            document.getElementById('quintoboton').style.display='none';
                document.getElementById('sextoboton').style.display='none';
                    document.getElementById('septimoboton').style.display='none';
                        document.getElementById('novenoboton').style.display='none';
                            document.getElementById('decimoboton').style.display='none';
      
    </script>
<?php   
}
?>


  <!--Initialize the Tabbed Panel widget object-->
  <script type="text/javascript">
         var TP1 = new Spry.Widget.TabbedPanels("TabbedPanels1");
  </script> 

 

</body>

</html>

 



       
       <script src="Scripts/jquery.validate.js"></script>
        
        <script type="text/javascript">
            
            
            
            function confirmation() {
    if(confirm("Do you want to delete?"))
    {
        return true;
    }
    return false;
            }
function EliOrga(form)
{
   

 if (form.Eo.value==""){
alert("Tiene que escribir su edad");

return 0;
}
 if (form.Eo.value<6){
alert("La edad debe ser mayor de 6 años, lo siento!");

return 0;
}
 

form.submit();
              
      
  
     
    
}
function mensaje() 
{   


            $(function() {
                $.bootstrapGrowl("This is a test.");
                
                setTimeout(function() {
                    $.bootstrapGrowl("This is another test.", { type: 'success' });
                }, 1000);
                
                setTimeout(function() {
                    $.bootstrapGrowl("Danger, Danger!", {
                        type: 'danger',
                        align: 'center',
                        width: 'auto',
                        allow_dismiss: false
                    });
                }, 2000);
                
                setTimeout(function() {
                    $.bootstrapGrowl("Danger, Danger!", {
                        type: 'info',
                        align: 'left',
                        stackup_spacing: 30
                    });
                }, 3000);
            });
        }
        
        
 function ValidarFormulario(form) 
{    
     
    
 continuar=true;
   if( form.alias.value=="NULL" || form.insolated.value=="NULL" 
           || form.dateofinsol.value=="NULL" || form.ori.value=="NULL")
        {
           $.bootstrapGrowl("Datagrid with parentheses are required");   
      
        continuar=false;   
        }
        
        
    else if(continuar==true)
    {
        numero=this.document.Organism_Information.org.value;
        ali=this.document.Organism_Information.alias.value;
        ins=this.document.Organism_Information.insolated.value;
        dat=this.document.Organism_Information.dateofinsol.value;
         sto=this.document.Organism_Information.storage.value;
        or=this.document.Organism_Information.ori.value;
        pro=this.document.Organism_Information.proveedor.value;
        prod=this.document.Organism_Information.producto.value;
          co=this.document.Organism_Information.com.value;
           subir=this.document.Organism_Information.sub.value;
          labo=this.document.Organism_Information.lab.value;
          
        
        
          $.ajax({ 
         type:"POST", 
          url: "DB_Organism_Information.php",
       data:{org:numero,alias:ali,insolated:ins,dateofinsol:dat,storage:sto,ori:or,proveedor:pro,producto:prod,com:co,sub:subir,lab:labo}
        });
              
       $.bootstrapGrowl("It was inserted correctly");   
    
 
      
   
        
        
    }
}
 <!--
function subirima1(){
//Si la opcion con id Conocido_1 (dentro del documento > formulario con name fcontacto >     y a la vez dentro del array de Conocido) esta activada

//muestra (cambiando la propiedad display del estilo) el div con id 'desdeotro'
document.getElementById('sube1').style.display='block';

}
-->
//Cerramos el Script

function ValidarFormulario1(form) 
{     
     
    
    
 continuar=true;
   if( form.medi.value=="NULL" || form.tempera.value=="NULL" 
           || form.size.value=="NULL" )
        {
          
      $.bootstrapGrowl("Datagrid with parentheses are required");  
        continuar=false;   
        }
        
        
    else if(continuar==true)
    {
        numeromac=this.document.Macroscopic_Morphology.mac.value;
        numeroorg=this.document.Macroscopic_Morphology.org.value;
        med=this.document.Macroscopic_Morphology.medi.value;
      temp=this.document.Macroscopic_Morphology.tempera.value;
        agit=this.document.Macroscopic_Morphology.agitacion.value;
          ag=this.document.Macroscopic_Morphology.age.value;
              siz=this.document.Macroscopic_Morphology.size.value;
        sur=this.document.Macroscopic_Morphology.surface.value;
          co=this.document.Macroscopic_Morphology.color.value;
          med1=this.document.Macroscopic_Morphology.medi1.value;
      temp1=this.document.Macroscopic_Morphology.tempera1.value;
        agit1=this.document.Macroscopic_Morphology.agitacion1.value;
          ag1=this.document.Macroscopic_Morphology.age1.value;
              siz1=this.document.Macroscopic_Morphology.size1.value;
        sur1=this.document.Macroscopic_Morphology.surface1.value;
          co1=this.document.Macroscopic_Morphology.color1.value;
          med2=this.document.Macroscopic_Morphology.medi2.value;
      temp2=this.document.Macroscopic_Morphology.tempera2.value;
        agit2=this.document.Macroscopic_Morphology.agitacion2.value;
          ag2=this.document.Macroscopic_Morphology.age2.value;
              siz2=this.document.Macroscopic_Morphology.size2.value;
        sur2=this.document.Macroscopic_Morphology.surface2.value;
          co2=this.document.Macroscopic_Morphology.color2.value;
          med3=this.document.Macroscopic_Morphology.medi3.value;
      temp3=this.document.Macroscopic_Morphology.tempera3.value;
        agit3=this.document.Macroscopic_Morphology.agitacion3.value;
          ag3=this.document.Macroscopic_Morphology.age3.value;
              siz3=this.document.Macroscopic_Morphology.size3.value;
        sur3=this.document.Macroscopic_Morphology.surface3.value;
          co3=this.document.Macroscopic_Morphology.color3.value;
          med4=this.document.Macroscopic_Morphology.medi4.value;
      temp4=this.document.Macroscopic_Morphology.tempera4.value;
        agit4=this.document.Macroscopic_Morphology.agitacion4.value;
          ag4=this.document.Macroscopic_Morphology.age4.value;
              siz4=this.document.Macroscopic_Morphology.size4.value;
        sur4=this.document.Macroscopic_Morphology.surface4.value;
          co4=this.document.Macroscopic_Morphology.color4.value;
          fo=this.document.Macroscopic_Morphology.foto.value;
           subir=this.document.Macroscopic_Morphology.sub.value;
            labo=this.document.Macroscopic_Morphology.lab.value;
               user=this.document.Macroscopic_Morphology.use.value;
                 user1=this.document.Macroscopic_Morphology.use1.value;
                   user2=this.document.Macroscopic_Morphology.use2.value;
                     user3=this.document.Macroscopic_Morphology.use3.value;
                       user4=this.document.Macroscopic_Morphology.use4.value;
             
          $.ajax({  
         type:"POST", 
          url: "BD_Macroscopic_Morphology.php",
       data:{mac:numeromac,org:numeroorg,medi:med,tempera:temp,agitacion:agit,age:ag,size:siz,surface:sur,color:co,medi1:med1,tempera1:temp1,agitacion1:agit1,age1:ag1,size1:siz1,surface1:sur1,color1:co1,medi2:med2,tempera2:temp2,agitacion2:agit2,age2:ag2,size2:siz2,surface2:sur2,color2:co2,medi3:med3,tempera3:temp3,agitacion3:agit3,age3:ag3,size3:siz3,surface3:sur3,color3:co3,medi4:med4,tempera4:temp4,agitacion4:agit4,age4:ag4,size4:siz4,surface4:sur4,color4:co4,foto:fo,sub:subir,lab:labo,user:user,user1:user1,user2:user2,user3:user3,user4:user4}
        }); 
     
       
      $.bootstrapGrowl("It was inserted correctly");  
  
            
       
   
        
        
    }
} 
 <!--
function subirima2(){
//Si la opcion con id Conocido_1 (dentro del documento > formulario con name fcontacto >     y a la vez dentro del array de Conocido) esta activada

//muestra (cambiando la propiedad display del estilo) el div con id 'desdeotro'
document.getElementById('sube2').style.display='block';

}
-->
//Cerramos el Script
function ValidarFormulario2(form) 
{    
     
    
  continuar=true;
   if( form.medi.value=="NULL" || form.tempera.value=="NULL" 
           || form.age.value=="NULL"  || form.axis_long.value=="NULL" || form.axis_short.value=="NULL")
        {
        $.bootstrapGrowl("Datagrid with parentheses are required");  
        continuar=false;   
        }
        
        
    else if(continuar==true)
    {
        numeromac=this.document.Microscopic_Morphology.mic.value;
        numeroorg=this.document.Microscopic_Morphology.org.value;
        med=this.document.Microscopic_Morphology.medi.value;
      temp=this.document.Microscopic_Morphology.tempera.value;
        agit=this.document.Microscopic_Morphology.agitacion.value;
          ag=this.document.Microscopic_Morphology.age.value;
              long=this.document.Microscopic_Morphology.axis_long.value;
        short=this.document.Microscopic_Morphology.axis_short.value;
          mol=this.document.Microscopic_Morphology.molity.value;
          aggre=this.document.Microscopic_Morphology.aggregates.value;
        bio=this.document.Microscopic_Morphology.biofilm.value;
              gra=this.document.Microscopic_Morphology.gram.value;
              med1=this.document.Microscopic_Morphology.medi1.value;
      temp1=this.document.Microscopic_Morphology.tempera1.value;
        agit1=this.document.Microscopic_Morphology.agitacion1.value;
          ag1=this.document.Microscopic_Morphology.age1.value;
              long1=this.document.Microscopic_Morphology.axis_long1.value;
        short1=this.document.Microscopic_Morphology.axis_short1.value;
          mol1=this.document.Microscopic_Morphology.molity1.value;
          aggre1=this.document.Microscopic_Morphology.aggregates1.value;
        bio1=this.document.Microscopic_Morphology.biofilm1.value;
              gra1=this.document.Microscopic_Morphology.gram1.value;
              med2=this.document.Microscopic_Morphology.medi2.value;
      temp2=this.document.Microscopic_Morphology.tempera2.value;
        agit2=this.document.Microscopic_Morphology.agitacion2.value;
          ag2=this.document.Microscopic_Morphology.age2.value;
              long2=this.document.Microscopic_Morphology.axis_long2.value;
        short2=this.document.Microscopic_Morphology.axis_short2.value;
          mol2=this.document.Microscopic_Morphology.molity2.value;
          aggre2=this.document.Microscopic_Morphology.aggregates2.value;
        bio2=this.document.Microscopic_Morphology.biofilm2.value;
              gra2=this.document.Microscopic_Morphology.gram3.value;
              med3=this.document.Microscopic_Morphology.medi3.value;
      temp3=this.document.Microscopic_Morphology.tempera3.value;
        agit3=this.document.Microscopic_Morphology.agitacion3.value;
          ag3=this.document.Microscopic_Morphology.age3.value;
              long3=this.document.Microscopic_Morphology.axis_long3.value;
        short3=this.document.Microscopic_Morphology.axis_short3.value;
          mol3=this.document.Microscopic_Morphology.molity3.value;
          aggre3=this.document.Microscopic_Morphology.aggregates3.value;
        bio3=this.document.Microscopic_Morphology.biofilm3.value;
              gra3=this.document.Microscopic_Morphology.gram3.value;
              med4=this.document.Microscopic_Morphology.medi.value;
      temp4=this.document.Microscopic_Morphology.tempera4.value;
        agit4=this.document.Microscopic_Morphology.agitacion4.value;
          ag4=this.document.Microscopic_Morphology.age4.value;
              long4=this.document.Microscopic_Morphology.axis_long4.value;
        short4=this.document.Microscopic_Morphology.axis_short4.value;
          mol4=this.document.Microscopic_Morphology.molity4.value;
          aggre4=this.document.Microscopic_Morphology.aggregates4.value;
        bio4=this.document.Microscopic_Morphology.biofilm4.value;
              gra4=this.document.Microscopic_Morphology.gram4.value;
        fot=this.document.Microscopic_Morphology.foto.value;
          subir=this.document.Microscopic_Morphology.sub.value;
          labo=this.document.Microscopic_Morphology.lab.value;
        use=this.document.Microscopic_Morphology.use.value;
         use1=this.document.Microscopic_Morphology.use1.value;
          use2=this.document.Microscopic_Morphology.use2.value;
           use3=this.document.Microscopic_Morphology.use3.value;
          use4=this.document.Microscopic_Morphology.use4.value;
         
          $.ajax({  
         type:"POST",  
          url: "BD_Microscopic_Morphology.php",
       data:{mic:numeromac,org:numeroorg,medi:med,tempera:temp,agitacion:agit,age:ag,axis_long:long,axis_short:short,molity:mol,aggregates:aggre,biofilm:bio,gram:gra,medi1:med1,tempera1:temp1,agitacion1:agit1,age1:ag1,axis_long1:long1,axis_short1:short1,molity1:mol1,aggregates1:aggre1,biofilm1:bio1,gram1:gra1,medi2:med2,tempera2:temp2,agitacion2:agit2,age2:ag2,axis_long2:long2,axis_short2:short2,molity2:mol2,aggregates2:aggre2,biofilm2:bio2,gram2:gra2,medi3:med3,tempera3:temp3,agitacion3:agit3,age3:ag3,axis_long3:long3,axis_short3:short3,molity3:mol3,aggregates3:aggre3,biofilm3:bio3,gram3:gra3,medi4:med4,tempera4:temp4,agitacion4:agit4,age4:ag4,axis_long4:long4,axis_short4:short4,molity4:mol4,aggregates4:aggre4,biofilm4:bio4,gram4:gra4,foto:fot,sub:subir,lab:labo,use:use,use1:use1,use2:use2,use3:use3,use4:use4}
        });
     $.bootstrapGrowl("It was inserted correctly");   
      
   
        
        
    }
}
 <!--
function subirima3(){
//Si la opcion con id Conocido_1 (dentro del documento > formulario con name fcontacto >     y a la vez dentro del array de Conocido) esta activada

//muestra (cambiando la propiedad display del estilo) el div con id 'desdeotro'
document.getElementById('sube3').style.display='block';
 
}
-->
//Cerramos el Script
function ValidarFormulario3(form) 
{    
     
    
  continuar=true;
   if( form.medi.value=="NULL" || form.tempera.value=="NULL" 
           || form.tiempo.value=="NULL"  || form.medium.value=="NULL" || form.temp_liq.value=="NULL"
           
            || form.agitation.value=="NULL" || form.tim_liq.value=="NULL" || form.ph_i.value=="NULL"
            
            || form.ph_f.value=="NULL" || form.od_i.value=="NULL" || form.od_f.value=="NULL"
           
            )
        {
        $.bootstrapGrowl("Datagrid with parentheses are required");  
        continuar=false;   
        }
        
    else if(continuar==true)
    {
        numerogro=this.document.Growth_characteristics.gro.value;
        numeroorg=this.document.Growth_characteristics.org.value;
        med=this.document.Growth_characteristics.medi.value;
      temp=this.document.Growth_characteristics.tempera.value;
        tiem=this.document.Growth_characteristics.tiempo.value;
          medi=this.document.Growth_characteristics.medium.value;
              liq=this.document.Growth_characteristics.temp_liq.value;
        agit=this.document.Growth_characteristics.agitation.value;
          tim=this.document.Growth_characteristics.tim_liq.value;
          pi=this.document.Growth_characteristics.ph_i.value;
        pf=this.document.Growth_characteristics.ph_f.value;
              oi=this.document.Growth_characteristics.od_i.value;
        of=this.document.Growth_characteristics.od_f.value;
            ext=this.document.Growth_characteristics.p_extra.value;
              med1=this.document.Growth_characteristics.medi1.value;
      temp1=this.document.Growth_characteristics.tempera1.value;
        tiem1=this.document.Growth_characteristics.tiempo1.value;
          medi1=this.document.Growth_characteristics.medium1.value;
              liq1=this.document.Growth_characteristics.temp_liq1.value;
        agit1=this.document.Growth_characteristics.agitation1.value;
          tim1=this.document.Growth_characteristics.tim_liq1.value;
          pi1=this.document.Growth_characteristics.ph_i1.value;
        pf1=this.document.Growth_characteristics.ph_f1.value;
              oi1=this.document.Growth_characteristics.od_i1.value;
        of1=this.document.Growth_characteristics.od_f1.value;
            ext1=this.document.Growth_characteristics.p_extra1.value;
              med2=this.document.Growth_characteristics.medi2.value;
      temp2=this.document.Growth_characteristics.tempera2.value;
        tiem2=this.document.Growth_characteristics.tiempo2.value;
          medi2=this.document.Growth_characteristics.medium2.value;
              liq2=this.document.Growth_characteristics.temp_liq2.value;
        agit2=this.document.Growth_characteristics.agitation2.value;
          tim2=this.document.Growth_characteristics.tim_liq2.value;
          pi2=this.document.Growth_characteristics.ph_i2.value;
        pf2=this.document.Growth_characteristics.ph_f2.value;
              oi2=this.document.Growth_characteristics.od_i2.value;
        of2=this.document.Growth_characteristics.od_f2.value;
            ext2=this.document.Growth_characteristics.p_extra2.value;
              med3=this.document.Growth_characteristics.medi3.value;
      temp3=this.document.Growth_characteristics.tempera3.value;
        tiem3=this.document.Growth_characteristics.tiempo3.value;
          medi3=this.document.Growth_characteristics.medium3.value;
              liq3=this.document.Growth_characteristics.temp_liq3.value;
        agit3=this.document.Growth_characteristics.agitation3.value;
          tim3=this.document.Growth_characteristics.tim_liq3.value;
          pi3=this.document.Growth_characteristics.ph_i3.value;
        pf3=this.document.Growth_characteristics.ph_f3.value;
              oi3=this.document.Growth_characteristics.od_i3.value;
        of3=this.document.Growth_characteristics.od_f3.value;
            ext3=this.document.Growth_characteristics.p_extra3.value;
              med4=this.document.Growth_characteristics.medi4.value;
      temp4=this.document.Growth_characteristics.tempera4.value;
        tiem4=this.document.Growth_characteristics.tiempo4.value;
          medi4=this.document.Growth_characteristics.medium4.value;
              liq4=this.document.Growth_characteristics.temp_liq4.value;
        agit4=this.document.Growth_characteristics.agitation4.value;
          tim4=this.document.Growth_characteristics.tim_liq4.value;
          pi4=this.document.Growth_characteristics.ph_i4.value;
        pf4=this.document.Growth_characteristics.ph_f4.value;
              oi4=this.document.Growth_characteristics.od_i4.value;
        of4=this.document.Growth_characteristics.od_f4.value;
            ext4=this.document.Growth_characteristics.p_extra4.value;
        kin=this.document.Growth_characteristics.kinetics.value;
        subir=this.document.Growth_characteristics.sub.value;
        labo=this.document.Growth_characteristics.lab.value;
        use=this.document.Growth_characteristics.use.value;
          use1=this.document.Growth_characteristics.use1.value;
            use2=this.document.Growth_characteristics.use2.value;
              use3=this.document.Growth_characteristics.use3.value;
                use4=this.document.Growth_characteristics.use4.value;
         
          $.ajax({
         type:"POST", 
          url: "BD_Growth_characteristics.php",
       data:{gro:numerogro,org:numeroorg,medi:med,tempera:temp,tiempo:tiem,medium:medi,temp_liq:liq,agitation:agit,tim_liq:tim,ph_i:pi,ph_f:pf,od_i:oi,od_f:of,p_extra:ext,medi1:med1,tempera1:temp1,tiempo1:tiem1,medium1:medi1,temp_liq1:liq1,agitation1:agit1,tim_liq1:tim1,ph_i1:pi1,ph_f1:pf1,od_i1:oi1,od_f1:of1,p_extra1:ext1,medi2:med2,tempera2:temp2,tiempo2:tiem2,medium2:medi2,temp_liq2:liq2,agitation2:agit2,tim_liq2:tim2,ph_i2:pi2,ph_f2:pf2,od_i2:oi2,od_f2:of2,p_extra2:ext2,medi3:med3,tempera3:temp3,tiempo3:tiem3,medium3:medi3,temp_liq3:liq3,agitation3:agit3,tim_liq3:tim3,ph_i3:pi3,ph_f3:pf3,od_i3:oi3,od_f3:of3,p_extra3:ext3,medi4:med4,tempera4:temp4,tiempo4:tiem4,medium4:medi4,temp_liq4:liq4,agitation4:agit4,tim_liq4:tim4,ph_i4:pi4,ph_f4:pf4,od_i4:oi4,od_f4:of4,p_extra4:ext4,kinetics:kin,sub:subir,lab:labo,use:use,use1:use1,use2:use2,use3:use3,use4:use4}
        });
     $.bootstrapGrowl("It was inserted correctly");   
   
        
        
    }
}
 <!--
function subirima4(){
//Si la opcion con id Conocido_1 (dentro del documento > formulario con name fcontacto >     y a la vez dentro del array de Conocido) esta activada

//muestra (cambiando la propiedad display del estilo) el div con id 'desdeotro'
document.getElementById('sube4').style.display='block';

}
-->
//Cerramos el Script
function ValidarFormulario4(form) 
{    
     
     continuar=true;
   if( form.idM.value=="NULL" || form.date.value=="NULL" ||
           form.use.value=="NULL"  || form.sto.value=="NULL")
        {
        $.bootstrapGrowl("Datagrid with parentheses are required");  
        continuar=false;   
        }
        
    else if(continuar==true)
    {
        numeropre=this.document.Pres.pre.value;
        numeroorg=this.document.Pres.org.value;
         numerome=this.document.Pres.idM.value;
        dat=this.document.Pres.date.value;
      us=this.document.Pres.use.value;
        nu=this.document.Pres.num.value;
          vol=this.document.Pres.volu.value;
              st=this.document.Pres.sto.value;
        co=this.document.Pres.com.value;
        numerome1=this.document.Pres.idM1.value;
        dat1=this.document.Pres.date1.value;
      us1=this.document.Pres.use1.value;
        nu1=this.document.Pres.num1.value;
          vol1=this.document.Pres.volu1.value;
              st1=this.document.Pres.sto1.value;
        co1=this.document.Pres.com1.value;
        numerome2=this.document.Pres.idM2.value;
        dat2=this.document.Pres.date2.value;
      us2=this.document.Pres.use2.value;
        nu2=this.document.Pres.num2.value;
          vol2=this.document.Pres.volu2.value;
              st2=this.document.Pres.sto2.value;
        co2=this.document.Pres.com2.value;
        numerome3=this.document.Pres.idM3.value;
        dat3=this.document.Pres.date3.value;
      us3=this.document.Pres.use3.value;
        nu3=this.document.Pres.num3.value;
          vol3=this.document.Pres.volu3.value;
              st3=this.document.Pres.sto3.value;
        co3=this.document.Pres.com3.value;
        numerome4=this.document.Pres.idM4.value;
        dat4=this.document.Pres.date4.value;
      us4=this.document.Pres.use4.value;
        nu4=this.document.Pres.num4.value;
          vol4=this.document.Pres.volu4.value;
              st4=this.document.Pres.sto4.value;
        co4=this.document.Pres.com4.value;
           subir=this.document.Pres.sub.value;
           labo=this.document.Pres.lab.value;
         
         
          $.ajax({
         type:"POST", 
          url: "BD_Preservation.php",
       data:{pre:numeropre,org:numeroorg,idM:numerome,date:dat,use:us,num:nu,volu:vol,sto:st,com:co,idM1:numerome1,date1:dat1,use1:us1,num1:nu1,volu1:vol1,sto1:st1,com1:co1,idM2:numerome2,date2:dat2,use2:us2,num2:nu2,volu2:vol2,sto2:st2,com2:co2,idM3:numerome3,date3:dat3,use3:us3,num3:nu3,volu3:vol3,sto3:st3,com3:co3,idM4:numerome4,date4:dat4,use4:us4,num4:nu4,volu4:vol4,sto4:st4,com4:co4,sub:subir,lab:labo}
        });       
  $.bootstrapGrowl("It was inserted correctly");   
      
   
        
        
    }
}

function ValidarFormularioPreser() 
{    
     
     var parrafos = document.getElementsByTagName("P");
     for(var i=0; i<parrafos.length; i++) {
  var parrafo = parrafos[i];
  
  alert(parrafo);
}

    
 document.Pres.action= "AlmacenarPreservationMethod.php"; 
    document.Pres.submit();
    
    
}
//Cerramos el Script
function ValidarFormulario5(form) 
{    
     
    
  continuar= true;
   
    if( form.org.value=="NULL" || form.date.value=="NULL" || form.con.value=="NULL" || form.vol.value=="NULL" ||
         form.use.value=="NULL"|| form.sto.value=="NULL")
    {
          $.bootstrapGrowl("Datagrid with parentheses are required");  
        continuar=false;   
    }
        
    else if(continuar==true)
    {
        numerodna=this.document.DNA.dna.value;
        numeroorg=this.document.DNA.org.value;
        ex=this.document.DNA.ext.value;
      da=this.document.DNA.date.value;
        co=this.document.DNA.con.value;
          vo=this.document.DNA.vol.value;
              us=this.document.DNA.use.value;
        st=this.document.DNA.sto.value;
         ex1=this.document.DNA.ext1.value;
      da1=this.document.DNA.date1.value;
        co1=this.document.DNA.con1.value;
          vo1=this.document.DNA.vol1.value;
              us1=this.document.DNA.use1.value;
        st1=this.document.DNA.sto1.value;
         ex2=this.document.DNA.ext2.value;
      da2=this.document.DNA.date2.value;
        co2=this.document.DNA.con2.value;
          vo2=this.document.DNA.vol2.value;
              us2=this.document.DNA.use2.value;
        st2=this.document.DNA.sto2.value;
         ex3=this.document.DNA.ext3.value;
      da3=this.document.DNA.date3.value;
        co3=this.document.DNA.con3.value;
          vo3=this.document.DNA.vol3.value;
              us3=this.document.DNA.use3.value;
        st3=this.document.DNA.sto3.value;
         ex4=this.document.DNA.ext4.value;
      da4=this.document.DNA.date4.value;
        co4=this.document.DNA.con4.value;
          vo4=this.document.DNA.vol4.value;
              us4=this.document.DNA.use4.value;
        st4=this.document.DNA.sto4.value;
         subir=this.document.DNA.sub.value;
         labo=this.document.DNA.lab.value;
         
        
         
          $.ajax({
         type:"POST", 
          url: "BD_DNA.php",
       data:{dna:numerodna,org:numeroorg,ext:ex,date:da,con:co,vol:vo,use:us,sto:st,ext1:ex1,date1:da1,con1:co1,vol1:vo1,use1:us1,sto1:st1,ext2:ex2,date2:da2,con2:co2,vol2:vo2,use2:us2,sto2:st2,ext3:ex3,date3:da3,con3:co3,vol3:vo3,use3:us3,sto3:st3,ext4:ex4,date4:da4,con4:co4,vol4:vo4,use4:us4,sto4:st4,sub:subir,lab:labo}
        });
  $.bootstrapGrowl("It was inserted correctly");   
   
        
        
    }
}
function ValidarFormulario6(form) 
{    
     
    
continuar= true;
   
    if (form.taxo.value=="NULL" || form.gen.value=="NULL" || form.sequ.value=="NULL" || form.cur.value=="NULL")
    {
         $.bootstrapGrowl("Datagrid with parentheses are required");  
        continuar=false;   
    }
    else if(continuar==true)
    {
        numerogene=this.document.Generic_Data.generi.value;
        numeroorg=this.document.Generic_Data.orgid.value;
        tax=this.document.Generic_Data.taxo.value;
      ge=this.document.Generic_Data.gen.value;
        se=this.document.Generic_Data.sequ.value;
          cu=this.document.Generic_Data.cur.value;
             co=this.document.Generic_Data.Com.value;
              tax1=this.document.Generic_Data.taxo1.value;
      ge1=this.document.Generic_Data.gen1.value;
        se1=this.document.Generic_Data.sequ1.value;
          cu1=this.document.Generic_Data.cur1.value;
             co1=this.document.Generic_Data.Com1.value;
              tax2=this.document.Generic_Data.taxo2.value;
      ge2=this.document.Generic_Data.gen2.value;
        se2=this.document.Generic_Data.sequ2.value;
          cu2=this.document.Generic_Data.cur2.value;
             co2=this.document.Generic_Data.Com2.value;
              tax3=this.document.Generic_Data.taxo3.value;
      ge3=this.document.Generic_Data.gen3.value;
        se3=this.document.Generic_Data.sequ3.value;
          cu3=this.document.Generic_Data.cur3.value;
             co3=this.document.Generic_Data.Com3.value;
              tax4=this.document.Generic_Data.taxo4.value;
      ge4=this.document.Generic_Data.gen4.value;
        se4=this.document.Generic_Data.sequ4.value;
          cu4=this.document.Generic_Data.cur4.value;
             co4=this.document.Generic_Data.Com4.value;
             subir=this.document.Generic_Data.sub.value;
             labo=this.document.Generic_Data.lab.value;
             use=this.document.Generic_Data.use.value;
              use1=this.document.Generic_Data.use1.value;
               use2=this.document.Generic_Data.use2.value;
                use3=this.document.Generic_Data.use3.value;
                 use4=this.document.Generic_Data.use4.value;
         
          $.ajax({
         type:"POST", 
          url: "BD_GenericData.php",
       data:{generi:numerogene,orgid:numeroorg,taxo:tax,gen:ge,sequ:se,cur:cu,Com:co,taxo1:tax1,gen1:ge1,sequ1:se1,cur1:cu1,Com1:co1,taxo2:tax2,gen2:ge2,sequ2:se2,cur2:cu2,Com2:co2,taxo3:tax3,gen3:ge3,sequ3:se3,cur3:cu3,Com3:co3,taxo4:tax4,gen4:ge4,sequ4:se4,cur4:cu4,Com4:co4,sub:subir,lab:labo,use:use,use1:use1,use2:use2,use3:use3,use4:use4}
        });
      $.bootstrapGrowl("It was inserted correctly");   
      
   
        
        
    }
}

//Cerramos el Script
function ValidarFormulario7(form) 
{    
     
    
   continuar= true;
   
    if ( form.use.value=="NULL" || form.med.value=="NULL" || form.tem.value=="NULL" || 
         form.phi.value=="NULL" || form.phf.value=="NULL" || form.odi.value=="NULL" || form.odf.value=="NULL" 
        )
 {
        $.bootstrapGrowl("Datagrid with parentheses are required");  
        continuar=false;   
    }
    
        
    else if(continuar==true)
    { 
        
        numeromed=this.document.Metabolic_Data.metid.value;
        numeroorg=this.document.Metabolic_Data.orgid.value;
        us=this.document.Metabolic_Data.use.value;
      me=this.document.Metabolic_Data.med.value;
        te=this.document.Metabolic_Data.tem.value;
          ag=this.document.Metabolic_Data.agit.value;
              ti=this.document.Metabolic_Data.time.value;
        pi=this.document.Metabolic_Data.phi.value;
          pf=this.document.Metabolic_Data.phf.value;
          oi=this.document.Metabolic_Data.odi.value;
       of=this.document.Metabolic_Data.odf.value;
              
   co=this.document.Metabolic_Data.com.value;
    subir=this.document.Metabolic_Data.sub.value;
     lab=this.document.Metabolic_Data.lab.value;
         
          $.ajax({
         type:"POST", 
          url: "BD_Metabolic.php",
       data:{metid:numeromed,orgid:numeroorg,use:us,med:me,tem:te,agit:ag,time:ti,phi:pi,phf:pf,odi:oi,odf:of,com:co,sub:subir,lab:labo}
        });
      $.bootstrapGrowl("It was inserted correctly");   
      
    
        
        
    }
}
function subirima5(){
//Si la opcion con id Conocido_1 (dentro del documento > formulario con name fcontacto >     y a la vez dentro del array de Conocido) esta activada

//muestra (cambiando la propiedad display del estilo) el div con id 'desdeotro'
document.getElementById('sube5').style.display='block';
 
}
-->
//Cerramos el Script
function ValidarFormulario8(form) 
{    
     
    
        continuar=true;
   if( form.orgi.value=="NULL" || form.medi.value=="NULL" ||
           form.temp.value=="NULL" || form.anta.value=="NULL")
        {
         $.bootstrapGrowl("Datagrid with parentheses are required");  
        continuar=false;   
        }
        
    else if(continuar==true)
    {
        numerobio=this.document.Bioassays.bio.value;
        numeroorg=this.document.Bioassays.orgi.value;
        as=this.document.Bioassays.assa.value;
      med=this.document.Bioassays.medi.value;
        tem=this.document.Bioassays.temp.value;
          ih=this.document.Bioassays.inh.value;
              im=this.document.Bioassays.inm.value;
        an=this.document.Bioassays.anta.value;
       
          co=this.document.Bioassays.com.value;
             as1=this.document.Bioassays.assa1.value;
      med1=this.document.Bioassays.medi1.value;
        tem1=this.document.Bioassays.temp1.value;
          ih1=this.document.Bioassays.inh1.value;
              im1=this.document.Bioassays.inm1.value;
        an1=this.document.Bioassays.anta1.value;
       
          co1=this.document.Bioassays.com1.value;
             as2=this.document.Bioassays.assa2.value;
      med2=this.document.Bioassays.medi2.value;
        tem2=this.document.Bioassays.temp2.value;
          ih2=this.document.Bioassays.inh2.value;
              im2=this.document.Bioassays.inm2.value;
        an2=this.document.Bioassays.anta2.value;
       
          co2=this.document.Bioassays.com2.value;
             as3=this.document.Bioassays.assa3.value;
      med3=this.document.Bioassays.medi3.value;
        tem3=this.document.Bioassays.temp3.value;
          ih3=this.document.Bioassays.inh3.value;
              im3=this.document.Bioassays.inm3.value;
        an3=this.document.Bioassays.anta3.value;
       
          co3=this.document.Bioassays.com3.value;
             as4=this.document.Bioassays.assa4.value;
      me4=this.document.Bioassays.medi4.value;
        tem4=this.document.Bioassays.temp4.value;
          ih4=this.document.Bioassays.inh4.value;
              im4=this.document.Bioassays.inm4.value;
        an4=this.document.Bioassays.anta4.value;
       
          co4=this.document.Bioassays.com4.value;
             ph=this.document.Bioassays.pho.value;
          subir=this.document.Bioassays.sub.value;
          labo=this.document.Bioassays.lab.value;
          
          use=this.document.Bioassays.use.value;
          use1=this.document.Bioassays.use1.value;
          use2=this.document.Bioassays.use2.value;
          use3=this.document.Bioassays.use3.value;
          use4=this.document.Bioassays.use4.value;
          
       
        
         
          $.ajax({
         type:"POST", 
          url: "BD_Bioassays_Data.php",
       data:{bio:numerobio,orgi:numeroorg,assa:as,medi:med,temp:tem,inh:ih,inm:im,anta:an,pho:ph,com:co,sub:subir,lab:labo,use:use,use1:use1,use2:use2,use3:use3,use4:use4}
        });
    $.bootstrapGrowl("It was inserted correctly");   
   
        
        
    }
}
function subirima6(){
//Si la opcion con id Conocido_1 (dentro del documento > formulario con name fcontacto >     y a la vez dentro del array de Conocido) esta activada

//muestra (cambiando la propiedad display del estilo) el div con id 'desdeotro'
document.getElementById('sube6').style.display='block';
 
}
function subirFasta(){
    document.getElementById('subeFasta').style.display='block';
}
-->
//Cerramos el Script
   </script>   
    
   
   
 
  
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&language=es&callback=iniciar"></script>

<script>
function iniciar() {
    
    var cx=document.getElementById("cx").value;
    var cy=document.getElementById("cy").value;
var mapOptions = {
    
center: new google.maps.LatLng(cx,cy),
zoom: 10,
mapTypeId: google.maps.MapTypeId.ROADMAP};
var map = new google.maps.Map(document.getElementById("mapaoculto"),mapOptions);



//marcador con la ubicación de la Universidad
var place = new google.maps.LatLng(cx,cy);  
var marker = new google.maps.Marker({
        position: place
        , title: 'La Universidad de la Habana'
        , map: map
        , });
//marcador en el centro del mapa
var marker2 = new google.maps.Marker({
        position: map.getCenter()
        , title:"Hola"
        , map: map
        , });




}

function MostrarMapa()
{
    var estilo1=document.getElementById("mapaoculto");
    
    estilo1.className="mostrar";
       
 
     document.getElementById('mapaoculto').style.left = '130px';
    document.getElementById('mapaoculto').style.top = '80px';
   
}
function OcultarMapa()
{
    
       var estilo1=document.getElementById("mapaoculto");
    
    estilo1.className="ocultar";
}

$(document).ready(function () {
        $("#Metabolic_Data").validate();

//       
//        $("#phi").rules("add", {
//            required: true,
//            min: 1,
//            messages: {
//                required: "Insert ph.",
//                min: $.validator.format("lower value {0}"),
//                max: $.validator.format("higher value {0} ")
//            }
//        });

       

     
      });




 var ContadorMacros=1;

 function addMacros(){
     
     
     document.getElementById('MacrosOculto'+ContadorMacros).style.display='block';
     
     ContadorMacros=ContadorMacros+1;
     
 }
 
 var ContadorMicros=1;

 function addMicros(){
     
    
   document.getElementById('microOculto'+ContadorMicros).style.display='block';
      
     ContadorMicros=ContadorMicros+1;
      
 }
 var ContadorGrow=1;
 function addGrow(){
     document.getElementById('GrowOcultar'+ContadorGrow).style.display='block';
      
     ContadorGrow=ContadorGrow+1;
     
     
 }
  var ContadorPres=1;
 function addPreservation(){
     
      document.getElementById('PresOcultar'+ContadorPres).style.display='block';
      
     ContadorPres=ContadorPres+1;
     
 }
   var ContadorDNA=1;
 function addADN(){
      document.getElementById('DNAOcultar'+ContadorDNA).style.display='block';
      
     ContadorDNA=ContadorDNA+1;
     
 }
   var ContadorGenetic=1;
 function addGenetic(){
        document.getElementById('GeneticOcutar'+ContadorGenetic).style.display='block';
      
     ContadorGenetic=ContadorGenetic+1;
 }
 
    var ContadorBio=1;
 function addBio(){
        document.getElementById('BioOcultar'+ContadorBio).style.display='block';
      
     ContadorBio=ContadorBio+1;
 }
</script>

