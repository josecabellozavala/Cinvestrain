
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
                   echo"<select class='cajas'  name=insolated id=insolated>"; 

                           $sql="SELECT Name FROM user where lab='$lab'"; 
                           $result=mysql_query($sql); 
                           $i=0; 
               echo "<option value=".$var2.">".$var2."</option>\n"; 
                 while ($row=mysql_fetch_row($result)) 
                      { 
              echo "<option value=".$row[$i].">".$row[$i]."</option>\n"; 
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
          <td valign="TOP">
              <span class="small"><h5>* Storage: &nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp</h5> </span>
          </td>
          <td class="small" align="center"> 
              <b>
             <?php 
                    $sql="SELECT * FROM storage where lab='$consul2'"; 
                           $result=mysql_query($sql); 
        if ($row = mysql_fetch_array($result)){ 
            $stora=$Storage;
                
               $sqllab="SELECT Alias FROM storage WHERE Storage_ID='$stora'";		
		$cslab=mysql_query($sqllab,$cn);
            while($resullab=mysql_fetch_array($cslab)){
			$consullab=$resullab[0];
			}
echo '<select name= "storage" id="storage"  class="cajas">';
echo '<option value= "'.$Storage.'">'.$consullab.'</option>';
do { 
       echo '<option value= "'.$row["Storage_ID"].'">'.$row["Alias"].'</option>';
} while ($row = mysql_fetch_array($result)); 
echo '</select>';

}
                     ?>
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

                           $sql="SELECT Name FROM medium where lab='$lab'"; 
                           $result=mysql_query($sql); 
                           $i=0; 
             echo "<option  value=".$var8.">".$var8."</option>\n"; 
                 while ($row=mysql_fetch_row($result)) 
                      { 
        
              echo "<option  value=".$row[$i].">".$row[$i]."</option>\n"; 
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

                           $sql="SELECT Form FROM surface_morphology where lab='$lab'"; 
                           $result=mysql_query($sql); 
                           $i=0; 
                              echo "<option  value=".$var13.">".$var13."</option>\n"; 
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

                           $sql="SELECT Name FROM medium where lab='$lab'"; 
                           $result=mysql_query($sql); 
                           $i=0; 
              echo "<option  value=".$var18.">".$var18."</option>\n"; 
                 while ($row=mysql_fetch_row($result)) 
                      { 
              echo "<option  value=".$row[$i].">".$row[$i]."</option>\n"; 
                       } 
                  echo "</select>"; 
                     ?>
                    
            
            </b>  
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

        
<script type="text/JavaScript">

</script>
               
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

 </div>
    
    <?php
}
             
//             <a href="#" target="_blank"><img border="0" src="Imagenes/Fotos.png" name="pic1" width="158px"></a>
 }
            ?>
 </div>
</tr></tbody></table>
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

                           $sql="SELECT Name FROM medium where lab='$lab'"; 
                           $result=mysql_query($sql); 
                           $i=0; 
               echo "<option  value=".$var31.">".$var31."</option>\n"; 
                 while ($row=mysql_fetch_row($result)) 
                      { 
              echo "<option  value=".$row[$i].">".$row[$i]."</option>\n"; 
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

                           $sql="SELECT Name FROM medium where lab='$lab'"; 
                           $result=mysql_query($sql); 
                           $i=0; 
               echo "<option  value=".$var34.">".$var34."</option>\n"; 
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
      <td><span class="small">*Temperature liquid: </span></td>
      
    
      <td class="small" align="center">
         <b>
             <input onKeyPress="return validar_monto(event)"   class="cajas" type="text" size="7"name="temp_liq" value="<?php echo $var35?>" />
            </b>  &#176;C
          </td>
          
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

                           $sql="SELECT Name FROM preservation_method where lab='$lab'"; 
                           $result=mysql_query($sql); 
                           $i=0; 
                            echo "<option value=".$var46.">".$var46."</option>\n"; 
                 while ($row=mysql_fetch_row($result)) 
                      { 
              echo "<option value=".$row[$i].">".$row[$i]."</option>\n"; 
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

                           $sql="SELECT Name FROM user where lab='$lab'"; 
                           $result=mysql_query($sql); 
                           $i=0; 
                             echo "<option value=".$var48.">".$var48."</option>\n"; 
                 while ($row=mysql_fetch_row($result)) 
                      { 
              echo "<option value=".$row[$i].">".$row[$i]."</option>\n"; 
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

                           $sql="SELECT Alias FROM storage where lab='$lab'"; 
                           $result=mysql_query($sql); 
                           $i=0; 
               echo "<option value=".$var51.">".$var51."</option>\n"; 
                 while ($row=mysql_fetch_row($result)) 
                      { 
              echo "<option value=".$row[$i].">".$row[$i]."</option>\n"; 
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
<!--      <input class="button" type="button" name="btn5" value="Update" onclick="return ValidarFormulario4(Pres);"/> -->
     
                        <input type="button" onClick="ValidarFormularioPreser()" value="Submit Query"  style="vertical-align: bottom; text-align: center; padding-left:0px">
                        


</div>
   
    
   </tbody></table> 
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

                           $sql="SELECT Name FROM extraction_method where lab='$lab'"; 
                           $result=mysql_query($sql); 
                           $i=0; 
               echo "<option value=".$var54.">".$var54."</option>\n"; 
                 while ($row=mysql_fetch_row($result)) 
                      { 
              echo "<option value=".$row[$i].">".$row[$i]."</option>\n"; 
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

                           $sql="SELECT Name FROM user where lab='$lab'"; 
                           $result=mysql_query($sql); 
                           $i=0; 
                            echo "<option value=".$var58.">".$var58."</option>\n"; 
                 while ($row=mysql_fetch_row($result)) 
                      { 
              echo "<option value=".$row[$i].">".$row[$i]."</option>\n"; 
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

                           $sql="SELECT Alias FROM storage where lab='$lab'"; 
                           $result=mysql_query($sql); 
                           $i=0; 
                            echo "<option value=".$var59.">".$var59."</option>\n"; 
                 while ($row=mysql_fetch_row($result)) 
                      { 
              echo "<option value=".$row[$i].">".$row[$i]."</option>\n"; 
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
        
        
<!--          </td>-->
     
      
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

                           $sql="SELECT Name FROM gene where lab='$lab'"; 
                           $result=mysql_query($sql); 
                           $i=0; 
                            echo "<option value=".$var63.">".$var63."</option>\n"; 
                 while ($row=mysql_fetch_row($result)) 
                      { 
              echo "<option value=".$row[$i].">".$row[$i]."</option>\n"; 
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

                           $sql="SELECT Name FROM sequencing_method where lab='$lab'"; 
                           $result=mysql_query($sql); 
                           $i=0; 
                            echo "<option value=".$var64.">".$var64."</option>\n"; 
                 while ($row=mysql_fetch_row($result)) 
                      { 
              echo "<option value=".$row[$i].">".$row[$i]."</option>\n"; 
                       } 
                  echo "</select>"; 
                     ?>
         
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

                           $sql="SELECT Name FROM assay_type where lab='$lab'"; 
                           $result=mysql_query($sql); 
                           $i=0; 
                  echo "<option value=".$var105.">".$var105."</option>\n"; 
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
                   echo"<select class='cajas' name=medi id=medi >"; 

                           $sql="SELECT Name FROM medium where lab='$lab'"; 
                           $result=mysql_query($sql); 
                           $i=0; 
                           echo "<option  value=". $var106.">". $var106."</option>\n"; 
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

                           $sql="SELECT Alias FROM organism_information where lab='$lab'"; 
                           $result=mysql_query($sql); 
                           $i=0; 
                            echo "<option value=".$var110.">".$var110."</option>\n"; 
                 while ($row=mysql_fetch_row($result)) 
                      { 
              echo "<option value=".$row[$i].">".$row[$i]."</option>\n"; 
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
          fo=this.document.Macroscopic_Morphology.foto.value;
           subir=this.document.Macroscopic_Morphology.sub.value;
            labo=this.document.Macroscopic_Morphology.lab.value;
  
             
          $.ajax({  
         type:"POST", 
          url: "BD_Macroscopic_Morphology.php",
       data:{mac:numeromac,org:numeroorg,medi:med,tempera:temp,agitacion:agit,age:ag,size:siz,surface:sur,color:co,foto:fo,sub:subir,lab:labo}
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
        fot=this.document.Microscopic_Morphology.foto.value;
          subir=this.document.Microscopic_Morphology.sub.value;
          labo=this.document.Microscopic_Morphology.lab.value;
        
         
          $.ajax({  
         type:"POST",  
          url: "BD_Microscopic_Morphology.php",
       data:{mic:numeromac,org:numeroorg,medi:med,tempera:temp,agitacion:agit,age:ag,axis_long:long,axis_short:short,molity:mol,aggregates:aggre,biofilm:bio,gram:gra,foto:fot,sub:subir,lab:labo}
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
        kin=this.document.Growth_characteristics.kinetics.value;
        subir=this.document.Growth_characteristics.sub.value;
        labo=this.document.Growth_characteristics.lab.value;
         
          $.ajax({
         type:"POST", 
          url: "BD_Growth_characteristics.php",
       data:{gro:numerogro,org:numeroorg,medi:med,tempera:temp,tiempo:tiem,medium:medi,temp_liq:liq,agitation:agit,tim_liq:tim,ph_i:pi,ph_f:pf,od_i:oi,od_f:of,p_extra:ext,kinetics:kin,sub:subir,lab:labo}
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
           subir=this.document.Pres.sub.value;
           labo=this.document.Pres.lab.value;
         
         
          $.ajax({
         type:"POST", 
          url: "BD_Preservation.php",
       data:{pre:numeropre,org:numeroorg,idM:numerome,date:dat,use:us,num:nu,volu:vol,sto:st,com:co,sub:subir,lab:labo}
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
         subir=this.document.DNA.sub.value;
         labo=this.document.DNA.lab.value;
         
        
         
          $.ajax({
         type:"POST", 
          url: "BD_DNA.php",
       data:{dna:numerodna,org:numeroorg,ext:ex,date:da,con:co,vol:vo,use:us,sto:st,sub:subir,lab:labo}
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
             subir=this.document.Generic_Data.sub.value;
             labo=this.document.Generic_Data.lab.value;
             
         
          $.ajax({
         type:"POST", 
          url: "BD_GenericData.php",
       data:{generi:numerogene,orgid:numeroorg,taxo:tax,gen:ge,sequ:se,cur:cu,Com:co,sub:subir,lab:labo}
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
          ph=this.document.Bioassays.pho.value;
          co=this.document.Bioassays.com.value;
          subir=this.document.Bioassays.sub.value;
          labo=this.document.Bioassays.lab.value;
          
       
        
         
          $.ajax({
         type:"POST", 
          url: "BD_Bioassays_Data.php",
       data:{bio:numerobio,orgi:numeroorg,assa:as,medi:med,temp:tem,inh:ih,inm:im,anta:an,pho:ph,com:co,sub:subir,lab:labo}
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




var contador = 1;
 
                           function addPreservation () {
var nodoForm = document.querySelector('P');
var nuevoNodo = document.createElement('div');
nuevoNodo.className='nuevoNodo';

var nodoForm = document.querySelector('P');
var nuevoNodo = document.createElement('div');

contador = contador+1;

nuevoNodo.innerHTML=" \n\
     <center> \n\
<table border='0'>\n\
 <tbody>\n\
 <tr>\n\
     <td width='280' bgcolor='#ffffff' valign='middle' align='center' class='small'>\n\
          <b> \n\
                <input type='hidden' name='pre' value='' />\n\
            </b>\n\
                </td>\n\
\n\
</tr>\n\
<tr>\n\
 <b>\n\
<input class='cajas' type='hidden' name='org' value='' />\n\
</b>\n\
</tr>\n\
 <tr bgcolor='#CCDDEE'>\n\
    <td><span class='small'>*Preservation Method Name: </span></td>\n\
<td class='small' align='center'>\n\
 <b>\n\
<?php $meses = $arrePreserv; $nombre = "idM".$inc; $resultado = lista($nombre, $meses); echo $resultado; $inc=$inc+1;?>\n\
    </b>\n\
</tr>\n\
<tr><td valign='TOP'><span class='small'>* Date of preservation: </span></td>\n\
 <td class='small' align='center'>\n\
<b>\n\
   <input class='cajas' type='date' name='date"+contador+"' value='' />\n\
 </b>\n\
 </td>\n\
</tr>\n\
<tr bgcolor='#CCDDEE'>\n\
      <td><span class='small'>* User Name: </span></td>\n\
<td class='small' align='center'>\n\
         <b>\n\
<?php $meses = $arrUsers; $nombre = "use".$inc2; $resultado= lista($nombre, $meses); echo $resultado; $inc2=$inc2+1;?>\n\
 </b>\n\
 </td>\n\
</tr>\n\
<td><span class='small'>Number of vials: </span></td>\n\
<b>\n\
<td>\n\
<input onKeyPress='return validar_monto(event)'  size='7'class='cajas' type='text' name='num"+contador+"' value='<?php echo $var49?>' />\n\
</b>  \n\
</td>\n\
</tr> \n\
<tr>\n\
<td><span class='small'>Volume of vials: </span></td>\n\
<td class='small' align='center'>\n\
<b>\n\
<input onKeyPress='return validar_monto(event)'  size='7' class='cajas' type='text' name='volu"+contador+"' value='<?php echo $var50?>' />\n\
</b>  mL\n\
</td>\n\
</tr> \n\
<tr bgcolor='#CCDDEE'>\n\
<td><span class='small'>* Storage: </span></td>\n\
<td class='small' align='center'>\n\
<b>\n\
<?php $meses = $arrStoragePres; $nombre = "sto".$inc3; $resultado = lista($nombre, $meses); echo $resultado; $inc3=$inc3+1;?>\n\
</b>\n\
</td>\n\
<tr>\n\
<td><span class='small'>Comments: </span></td>\n\
<td class='small' align='center'>\n\
<textarea  class='cajas' rows='10'  cols='30' name='com"+contador+"'  value='' />\n\
</textarea>\n\
</td>\n\
</td>\n\
</tr> \n\
<input type='hidden' name='sub"+contador+"' id='sub' value=''/>\n\
<input type='hidden' name='lab"+contador+"' id='lab' value=''/>\n\
</tbody></table>\n\
    </center>";
  
  
                           
                          
    
   
    
//nuevoNodo.innerHTML = '<label for="nombre'+contador+'"><span>Nombre persona '+contador+':</span> <input id="nombre'+contador+
//'" type="text" name="nombre'+contador+'" /></label>'+
//'<label for="apellidos'+contador+'"><span>Apellidos persona '+contador+':</span> <input id="apellidos'+contador+
//'" type="text" name="apellidos'+contador+'" /></label>'+
//'<label for="email'+contador+'"><span>Correo electrónico persona '+contador+':</span> <input id="email"'+contador+
//' type="text" name="email'+contador+'" /></label>'+






nodoForm.insertBefore(nuevoNodo, nodoForm.querySelector('#referenciaVacia1'));
      }
          
          
          
           function addMacros () {
var nodoForm = document.querySelector('em');
var nuevoNodo = document.createElement('div');
nuevoNodo.className='nuevoNodo';

var nodoForm = document.querySelector('em');
var nuevoNodo = document.createElement('div');

contador = contador+1;

nuevoNodo.innerHTML="\n\
    <center>\n\
     <table border='0'>\n\
      <tbody>\n\
          \n\
      <input type='hidden' name='cy' id='cy' value='<?php echo $var122?>'>\n\
      <input type='hidden' name='cx' id='cx' value='<?php echo $var123?>'>\n\
          \n\
        <td width='280' bgcolor='#ffffff' valign='middle' align='center' class='small'>\n\
            <b>\n\
                <input type='hidden' name='mac' value='<?php echo $var6?>' />\n\
                 <input type='hidden' name='txttabla' value='macro'/>\n\
            </b>  \n\
        </td>\n\
      <tr>\n\
         \n\
             <input  class='cajas' type='hidden' name='org' value='<?php echo $var?>' />\n\
             \n\
        \n\
       \n\
      </tr>\n\
      \n\
      <tr bgcolor='#CCDDEE'>\n\
        <td><span class='small'>*Medium Name: </span></td>\n\
        <td class='small' align='center'>\n\
           <b>\n\
            <?php $meses = $arreMedium; $nombre = "medi".$inc4; $resultado = lista($nombre, $meses); echo $resultado; $inc4=$inc4+1;?>\n\
            </b>  \n\
      </tr>\n\
      <tr><td valign='TOP'><span class='small'>* Temperature: </span></td>\n\
          <td class='small' align='center'> \n\
              <b>\n\
                  <input onKeyPress='return validar_monto(event)' class='cajas' type='text' name='tempera' value=''  size='5'required/>\n\
            </b>&#176;C\n\
      </td>\n\
    </tr>\n\
    <tr bgcolor='#CCDDEE'>\n\
         <td><span class='small'>Agitation:</span></td>\n\
//<td><span class='small' align='center'>\n\
<b>\n\
<input  onKeyPress='return  validar_monto(event)' class='cajas' type='text' name='agitacion'  size='5' value='' />\n\
 </b>RPM\n\
 </td>\n\
 </tr>\n\
 <tr>\n\
 <td><span class='small'>Age: </span></td>\n\
     <td class='small' align='center'>\n\
<b>\n\
<input onKeyPress='return validarNumero(event)'  class='cajas' type='text' name='age'  size='6' value='' />\n\
</b>  Hours\n\
</td>\n\
</tr> \n\
\n\
<tr bgcolor='#CCDDEE'>\n\
      <td><span class='small'>*Size: </span></td>\n\
      \n\
    \n\
  <td class='small align='center'>\n\
         <b>\n\
             <input  onKeyPress='return  validar_monto(event)' class='cajas' type='text' name='size'  size='6' value='' />\n\
            </b> ml \n\
          </td>\n\
          \n\
       <tr>\n\
      <td><span class='small'>Surface: </span></td>\n\
        <td class='small' align='center'>\n\
          <b>\n\
           <?php $meses = $arreSurface; $nombre = "surface".$inc5; $resultado = lista($nombre, $meses); echo $resultado; $inc5=$inc5+1;?>\n\
            </b>  \n\
          </td>\n\
    </tr> \n\
    \n\
    <tr bgcolor='#CCDDEE'>\n\
      <td><span class='small'>Color: </span></td>\n\
      \n\
     \n\
      <td class='small' align='center'>\n\
         <b>\n\
             \n\
             <input  class='cajas' type='color' name='color' value='' />\n\
            </b>  \n\
          </td>\n\
    </tr>\n\
    <tr>\n\
    </tr> \n\
    <input type='hidden' name='sub' id='sub' value='<?php echo $consul3?>'/>\n\
            <input type='hidden' name='lab' id='lab' value='<?php echo $lab?>'/>\n\
     <input  class='cajas' type='hidden' name='foto' value='1' />\n\
         <div align='center' id='segundoboton' >\n\
      <input  class='button' type='button' name='btn2' value='Update'  onclick='return ValidarFormulario1(Macroscopic_Morphology);'/> \n\
   <input  class='button' type='button' name='btns' value='Image' onclick='subirima2();'/>\n\
\n\
   <div id='div_oculto1' style='display: none;'></div>\n\
\n\
</div>\n\
</tbody></table>\n\
</center>";
       
         
      nodoForm.insertBefore(nuevoNodo, nodoForm.querySelector('#referenciaMacros'));       
           
          
   }  



     
                           function addMicros () {
var nodoForm = document.querySelector('pre');
var nuevoNodo = document.createElement('div');
nuevoNodo.className='nuevoNodo';

var nodoForm = document.querySelector('pre');
var nuevoNodo = document.createElement('div');

contador = contador+1;

nuevoNodo.innerHTML="\n\
             <table border='0'>\n\
      <tbody>\n\
          <tr>\n\
      \n\
        <td width='280' bgcolor='#ffffff' valign='middle' align='center' class='small>\n\
            <b>\n\
            <input type='hidden' name='mic' value='<?php echo $var16?> />\n\
                \n\
            </b>  \n\
        </td>\n\
      </tr>\n\
      <tr>\n\
              <b>\n\
                  <input  class='cajas' type='hidden' name='org' value='<?php echo $var17?>' />\n\
            </b>  \n\
\n\
      </tr>\n\
      \n\
      <tr bgcolor='#CCDDEE'>\n\
        <td><span class='small'>*Medium Name: </span></td>\n\
        <td class='small' align='center'>\n\
           <b>\n\
          <?php $meses = $arreMedium; $nombre = "medi".$inc6; $resultado = lista($nombre, $meses); echo $resultado; $inc6=$inc6+1;?>\n\
            \n\
            </b>  \n\
      </tr>\n\
      <tr><td valign='TOP'><span class='small'>* Temperature: </span></td>\n\
          <td class='small' align='center'> \n\
              <b>\n\
                  <input  onKeyPress='return validar_monto(event)'  class='cajas' type='text' size='6'name='tempera' value='' />\n\
            </b>  &#176; C \n\
      </td>\n\
    </tr>\n\
    <tr bgcolor='#CCDDEE'>\n\
      <td><span class='small'>Agitation: </span></td>\n\
      \n\
    \n\
      <td class='small' align='center'>\n\
         <b>\n\
             <input onKeyPress='return validar_monto(event)'   class='cajas' type='text'  size='6'name='agitacion' value='<?php echo $var20?>' />\n\
            </b>  RPM\n\
          </td>\n\
    </tr>\n\
    \n\
    <tr>\n\
    <td><span class='small'>Age: </span></td>\n\
        <td class='small' align='center'>\n\
          <b>\n\
              <input  class='cajas' type='text'  size='6'name='age' value='' />\n\
            </b>  Hours\n\
          </td>\n\
    </tr> \n\
    \n\
    <tr bgcolor='#CCDDEE'>\n\
      <td><span class='small'>*Axis long: </span></td>\n\
      \n\
    \n\
      <td class='small' align='center'>\n\
         <b>\n\
             <input onKeyPress='return validar_monto(event)'   class='cajas' type='text' size='7' name='axis_long' value='' />\n\
            </b>  &#181;m\n\
          </td>\n\
          \n\
       \n\
    <tr>\n\
      <td><span class='small'>*Axis short: </span></td>\n\
        <td class='small' align='center'>\n\
          <b>\n\
              <input  onKeyPress='return validar_monto(event)'  class='cajas' type='text' size='7'name='axis_short' value='' />\n\
            </b>  &#181;m \n\
          </td>\n\
    </tr> \n\
    \n\
    <tr bgcolor='#CCDDEE'> \n\
      <td><span class='small'>Motility: </span></td>\n\
  \n\
      <td class='small' align='center'>\n\
          <select  class='cajas' name='molity'>\n\
               <option> <?php echo $var24?></option>\n\
                <option>No</option>\n\
                <option <?php echo $var24?> >Yes</option>\n\
                </select></td>\n\
    </tr>\n\
    \n\
    <tr>\n\
      <td><span class='small'>Aggregates: </span></td>\n\
        <td class='small' align='center'>\n\
          <select  class='cajas' name='aggregates'>\n\
              <option> <?php echo $var25?></option>\n\
                <option>No</option>\n\
                <option <?php echo $var25?>>Yes</option>\n\
                </select></td>\n\
    </tr> \n\
    \n\
    <tr bgcolor='#CCDDEE'>\n\
      <td><span class='small'>Biofilm formation: </span></td>\n\
      \n\
    \n\
      <td class='small' align='center'>\n\
         <select class='cajas' name='biofilm'>\n\
             <option> <?php echo $var26?></option>\n\
                <option>No</option>\n\
                <option <?php echo $var26?>>Yes</option>\n\
                </select></td>\n\
    </tr>\n\
    \n\
    <tr>\n\
      <td><span class='small'>Gram test: </span></td>\n\
        <td class='small' align='center'>\n\
          <select class='cajas' name='gram'>\n\
              <option> <?php echo $var27?></option>\n\
                <option>Gram -</option>\n\
                <option <?php echo $var27?>>Gram +</option>\n\
                </select></td>\n\
    </tr> \n\
    <tr bgcolor='#CCDDEE'>\n\
                 </tr>\n\
    <input type='hidden' name='sub' id='sub' value='<?php echo $consul3?>'/>\n\
      <input type='hidden' name='lab' id='lab' value='<?php echo $lab?>'/>\n\
     <input type='hidden' name='foto' id='foto' value='1'/>\n\
     \n\
    \n\
 <tr align='center' id='tercerboton' >\n\
<td colspan='2'>\n\
    \n\
    <input class='button' type='button' name='btn3' value='Update' onclick='return ValidarFormulario2(Microscopic_Morphology);'/> \n\
  <input  class='button' type='button' name='btns' value='Image' onclick='subirima3();'/> \n\
 <div id='div_oculto2' style='display: none;'></div>\n\
</td>\n\
\n\
</tr>\n\
</tbody></table>";
    
                
      
       nodoForm.insertBefore(nuevoNodo, nodoForm.querySelector('#referenciaMicros'));      
     
  }
      
function addGrow () {
var nodoForm = document.querySelector('del');
var nuevoNodo = document.createElement('div');
nuevoNodo.className='nuevoNodo';

var nodoForm = document.querySelector('del');
var nuevoNodo = document.createElement('div');

contador = contador+1;

nuevoNodo.innerHTML="<form name='Growth_characteristics"+uno+"' method='POST' action='' > \n\
<center>\n\
     <table border='0'>\n\
      <tbody>\n\
          <tr>\n\
       \n\
       <td width='280' bgcolor='#ffffff' valign='middle' align='center' class='small'>\n\
            <b>\n\
                <input type='hidden' name='gro' value='<?php echo $var29?>' />\n\
            </b>  \n\
        </td>\n\
      </tr>\n\
      <tr>\n\
\n\
<b>\n\
<input class='cajas' type='hidden' name='org' value='<?php echo $var30?>' />\n\
            </b> \n\
            </tr>\n\
      \n\
      <tr bgcolor='#CCDDEE'>\n\
        <td><span class='small'>*Medium Name : </span></td>\n\
        <td class='small' align='center'>\n\
           <b>\n\
   <?php $meses = $arreMedium; $nombre = "medi".$inc7; $resultado = lista($nombre, $meses); echo $resultado; $inc7=$inc7+1;?>\n\
             \n\
            </b> \n\
            </tr>\n\
      <tr><td valign='TOP'><span class='small'>* Temperature solid: </span></td>\n\
          <td class='small' align='center'> \n\
              <b>\n\
                  <input onKeyPress='return validar_monto(event)' class='cajas' type='text' size='7' name='tempera' value='' />\n\
            </b>  &#176;C\n\
      </td>\n\
    </tr>\n\
    <tr bgcolor='#CCDDEE'>\n\
      <td><span class='small'>* Time solid: </span></td>\n\
    \n\
    \n\
      <td class='small' align='center'>\n\
         <b>\n\
             <input class='cajas' type='time' size='7'name='tiempo' value='' />\n\
            </b> Hours \n\
          </td>\n\
    </tr>\n\
    \n\
    <tr>\n\
      <td><span class='small'>* Medium liquid: </span></td>\n\
        <td class='small' align='center'>\n\
          <b>\n\
           <?php $meses = $arreMedium; $nombre = "medium".$inc8; $resultado = lista($nombre, $meses); echo $resultado; $inc8=$inc8+1;?>\n\
            </b>  \n\
          </td>\n\
    </tr> \n\
    \n\
    <tr bgcolor='#CCDDEE'>\n\
      <td><span class='small'>*Temperature liquid: </span></td>\n\
      \n\
    \n\
      <td class='small' align='center'>\n\
         <b>\n\
             <input onKeyPress='return validar_monto(event)'   class='cajas' type='text' size='7'name='temp_liq' value='' />\n\
            </b>  &#176;C\n\
          </td>\n\
          \n\
       <tr>\n\
      <td><span class='small'>*Agitation time: </span></td>\n\
        <td class='small' align='center'>\n\
          <b>\n\
              <input class='cajas' type='time'  size='7'name='agitation' value='' />\n\
            </b>  Hours\n\
          </td>\n\
    </tr> \n\
    \n\
    <tr bgcolor='#CCDDEE'>\n\
      <td><span class='small'>*Time liquid: </span></td>\n\
    \n\
    \n\
      <td class='small' align='center'>\n\
         <b>\n\
             <input class='cajas' type='time' size='7' name='tim_liq' value='' />\n\
            </b>  Hours\n\
          </td>\n\
    </tr>\n\
    \n\
    <tr>\n\
      <td><span class='small'>*pH initial: </span></td>\n\
        <td class='small' align='center'>\n\
        <b>\n\
         <input  min='1' max='13' onKeyPress='return validar_monto(event)'   class='cajas' size='7' type='number'  id='ph_i' name='ph_i' value='' />\n\
         </b>\n\
         \n\
</td>\n\
</tr> \n\
<tr bgcolor='#CCDDEE'>\n\
      <td><span class='small'>*pH final: </span></td>\n\
      \n\
    \n\
      <td class='small' align='center'>\n\
         <b>\n\
             <input min='1' max='13'  onKeyPress='return validar_monto(event)'  size='7'class='cajas' type='number' id='ph_f' name='ph_f' value='' />\n\
            </b>  \n\
          </td>\n\
         \n\
    </tr>\n\
    \n\
    <tr>\n\
    <td><span class='small'>*OD600 initia: </span></td>\n\
        <td class='small' align='center'>\n\
          <b>\n\
              <input onKeyPress='return validar_monto(event)'  size='7'class='cajas' type='text' name='od_i' value='' />\n\
          </b>  \n\
          <div id='mensaje'></div>\n\
          </td>\n\
    </tr> \n\
     <tr bgcolor='#CCDDEE'>\n\
      <td><span class='small'>*OD600 final: </span></td>\n\
      \n\
    \n\
      <td class='small' align='center'>\n\
         <b>\n\
             <input onKeyPress='return validar_monto(event)'  size='7' class='cajas' type='text' id='od_f' name='od_f' value='' />\n\
            </b>  \n\
          </td>\n\
    </tr>\n\
    \n\
    <tr>\n\
      <td><span class='small'>Extra parameters: </span></td>\n\
        <td class='small' align='center'>\n\
          <b>\n\
          <input class='cajas' type='text' name='p_extra' value='' />\n\
          </b>\n\
          </td>\n\
          </tr> \n\
          <tr bgcolor='#CCDDEE'>\n\
          <b>\n\
             <input class='cajas' type='hidden' name='kinetics' value='' />\n\
            </b>  \n\
          </td>\n\
    </tr>\n\
    <input type='hidden' name='sub' id='sub' value='<?php echo $consul3?>'/>\n\
     <input type='hidden' name='lab' id='lab' value='<?php echo $lab?>'/>\n\
     <tr align='center' id='cuartoboton' >\n\
<td colspan='2'>\n\
    \n\
    <input class='button' type='button' name='btn4' value='Update'onclick='return ValidarFormulario3(Growth_characteristics);'/> \n\
   <input class='button' type='button' name='btns' value='Document' onclick='subirima4();'/>\n\
   </td>\n\
</tr>\n\
<div id='div_oculto3' style='display: none;'></div>\n\
   </tbody></table>\n\
   </center>\n\
    </form>";
    
      
    
     nodoForm.insertBefore(nuevoNodo, nodoForm.querySelector('#referenciaGrow'));     
   }
function addADN () {
var nodoForm = document.querySelector('sup');
var nuevoNodo = document.createElement('div');
nuevoNodo.className='nuevoNodo';

var nodoForm = document.querySelector('sup');
var nuevoNodo = document.createElement('div');

contador = contador+1;

nuevoNodo.innerHTML="<form name='DNA"+uno+"' method='POST' action=''>\n\
        <center>\n\
     <table border='0'>\n\
      <tbody>\n\
      <tr>\n\
      <td width='280' bgcolor='#ffffff' valign='middle' align='center' class='small'>\n\
<b>\n\
<input type='hidden' name='dna' value='<?php echo $var52?>' />\n\
 </b>  \n\
  </td>\n\
  </tr>\n\
      <tr>\n\
      <b>\n\
                  <input class='cajas' type='hidden' name='org' value='<?php echo $var53?>' />\n\
            </b>  \n\
            </tr>\n\
      \n\
      <tr bgcolor='#CCDDEE'>\n\
        <td><span class='small'>* Extraction Method Name: </span></td>\n\
        <td class='small' align='center'>\n\
           <b>\n\
              <?php $meses = $arrExtraction; $nombre = "ext".$inc9; $resultado = lista($nombre, $meses); echo $resultado; $inc9=$inc9+1;?>\n\
            </b>  \n\
      </tr>\n\
      <tr><td valign='TOP'><span class='small'>* Date of preservation: </span></td>\n\
          <td class='small' align='center'> \n\
              <b>\n\
                  <input class='cajas' type='date' name='date' value=''  max='<?php echo $fechaMax;?>'/>\n\
            </b>  \n\
      </td>\n\
    </tr>\n\
    <tr bgcolor='#CCDDEE'>\n\
      <td><span class='small'>* Concentration: </span></td>\n\
      \n\
    \n\
      <td class='small' align='center'>\n\
         <b>\n\
             <input  onKeyPress='return validar_monto(event)'  size='7'class='cajas' type='text' name='con' value='' />\n\
         </b>  ng/mL\n\
          </td>\n\
    </tr>\n\
    <tr>\n\
      <td><span class='small'>* Volume: </span></td>\n\
        <td class='small' align='center'>\n\
          <b>\n\
              <input  onKeyPress='return validar_monto(event)'  size='7'class='cajas' type='text' name='vol' value='' />\n\
            </b>  mL \n\
          </td>\n\
    </tr> \n\
    <tr bgcolor='#CCDDEE'>\n\
      <td><span class='small'>* User Name: </span></td>\n\
\n\
     \n\
    \n\
      <td class='small' align='center'>\n\
         <b>\n\
            <?php $meses = $arreIso; $nombre = "use".$inc10; $resultado = lista($nombre, $meses); echo $resultado; $inc10=$inc10+1;?>\n\
            </b>  \n\
          </td>\n\
          \n\
       <tr>\n\
      <td><span class='small'>* Storage Name: </span></td>\n\
        <td class='small' align='center'>\n\
       \n\
           <b>\n\
           <?php $meses =$arrStoragePres ; $nombre = "sto".$inc11; $resultado = lista($nombre, $meses); echo $resultado; $inc11=$inc11+1;?>\n\
            </b> \n\
                </td>\n\
    </tr> \n\
    <input type='hidden' name='sub' id='sub' value='<?php echo $consul3?>'/>\n\
     <input type='hidden' name='lab' id='lab' value='<?php echo $lab?>'/>\n\
     <tr align='center' id='sextoboton' >\n\
<td colspan='2'>\n\
  \n\
    <input  class='button' type='button' name='btn6' value='Update' onclick='return ValidarFormulario5(DNA);'/> \n\
    \n\
\n\
</td>\n\
</tr>\n\
</tbody></table> \n\
</center>\n\
</form>";        
     
         
    nodoForm.insertBefore(nuevoNodo, nodoForm.querySelector('#referenciaDNA'));   
    

     }
     
     
     function addGenetic() {
var nodoForm = document.querySelector('sub');
var nuevoNodo = document.createElement('div');
nuevoNodo.className='nuevoNodo';

var nodoForm = document.querySelector('sub');
var nuevoNodo = document.createElement('div');

contador = contador+1;

nuevoNodo.innerHTML="<form name='Generic_Data"+uno+"' method='POST' action=''>\n\
<input type='hidden' name='generi' value='<?php echo $var60?>' />\n\
           \n\
             <input   type='hidden' name='orgid' value='<?php echo $var61?>' />\n\
           \n\
         <center>\n\
     <table border='0'>\n\
      <tbody>\n\
       <tr bgcolor='#CCDDEE'>\n\
        <td><span class='small'>*Taxonomic lineage: </span></td>\n\
        <td class='small' align='center'>\n\
        <b>\n\
               <input class='cajas' type='text' name='taxo' value='' />\n\
            </b>  \n\
           </tr>\n\
      <br>\n\
 <tr><td valign='TOP'><span class='small'>* Gene Name: </span></td>\n\
          <td class='small' align='center'> \n\
          \n\
          <b>\n\
          <?php $meses = $arrGenes; $nombre = "gen".$inc12; $resultado = lista($nombre, $meses); echo $resultado; $inc12=$inc12+1;?>\n\
    </b>\n\
    </td>\n\
</tr>\n\
    <br>\n\
    <tr bgcolor='#CCDDEE'>\n\
      <td><span class='small'>* Sequencing Method Name: </span></td>\n\
      <td class='small' align='center'>\n\
         <?php $meses = $arrSeqMeth; $nombre = "sequ".$inc13; $resultado = lista($nombre, $meses); echo $resultado; $inc13=$inc13+1;?>\n\
          </td>\n\
    </tr>\n\
    <tr>\n\
      <td><span class='small'>* Cured sequence: </span></td>\n\
        <td class='small' align='center'>\n\
          <b>\n\
             <input class='cajas' type='text' name='cur' value='' />\n\
            </b>  \n\
          </td>\n\
    </tr> \n\
    <tr bgcolor='#CCDDEE'>\n\
      <td><span class='small'>Comments: </span></td>\n\
      <td class='small' align='center'>\n\
      <textarea  class='cajas' rows='10'  cols='30' name='Com' value=''>\n\
                    </textarea>\n\
                    </td>\n\
  <input type='hidden' name='sub' id='sub' value='<?php echo $consul3?>'/>\n\
     <input type='hidden' name='lab' id='lab' value='<?php echo $lab?>'/>\n\
      <tr align='center' id='septimoboton' >\n\
<td colspan='2'>\n\
<input class='button' type='button' name='btns' value='Fasta' onclick='subirFasta();'/>\n\
    <input class='button' type='button' name='btn7' value='Update' onclick='return ValidarFormulario6(Generic_Data);'/> \n\
</td>\n\
</tr>\n\
 </tbody></table> \n\
 </center>\n\
  </form> "; 

    
nodoForm.insertBefore(nuevoNodo, nodoForm.querySelector('#referenciaGenetic'));         
    }

function addBio() {
var nodoForm = document.querySelector('strong');
var nuevoNodo = document.createElement('div');
nuevoNodo.className='nuevoNodo';

var nodoForm = document.querySelector('strong');
var nuevoNodo = document.createElement('div');

contador = contador+1;

nuevoNodo.innerHTML="<form name='Bioassays"+uno+"' method='POST' action=''>   \n\
 <center> \n\
     <table border='0'> \n\
      <tbody> \n\
          <tr> \n\
          <td width='280' bgcolor='#ffffff' valign='middle' align='center' class='small'> \n\
            <b> \n\
            <input type='hidden' name='bio' value='<?php echo $var103?>' /> \n\
            </b> \n\
  </td> \n\
      </tr> \n\
      <tr> \n\
              <b> \n\
                  <input class='cajas' type='hidden' name='orgi' value='<?php echo $var104?>' /> \n\
            </b>   \n\
      </tr> \n\
      <tr bgcolor='#CCDDEE'> \n\
        <td><span class='small'>* Assay Type Name: </span></td> \n\
        <td class='small' align='center'> \n\
           <b> \n\
              <?php $meses = $arrAssay; $nombre = "assa".$inc14; $resultado = lista($nombre, $meses); echo $resultado; $inc14=$inc14+1;?>\n\
            </b>   \n\
      </tr> \n\
      <tr><td valign='TOP'><span class='small'>* Medium Name: </span></td> \n\
          <td class='small' align='center'>  \n\
              <b> \n\
          <?php $meses = $arreMedium; $nombre = "medi".$inc15; $resultado = lista($nombre, $meses); echo $resultado; $inc15=$inc15+1;?>\n\
            </b>   \n\
      </td> \n\
    </tr> \n\
    <tr bgcolor='#CCDDEE'> \n\
      <td><span class='small'>* Temperature: </span></td> \n\
       \n\
      <td class='small' align='center'> \n\
         <b> \n\
             <input  onKeyPress='return validar_monto(event)'  size='7' class='cajas' type='text' name='temp' value='' /> \n\
            </b>   &#176; C  \n\
          </td> \n\
    </tr> \n\
    <tr> \n\
      <td><span class='small'>Inhibition: </span></td> \n\
        <td class='small' align='center'> \n\
          <b> \n\
             <input class='cajas' type='text' name='inh' value='' /> \n\
            </b>   \n\
          </td> \n\
    </tr>  \n\
    <tr bgcolor='#CCDDEE'> \n\
      <td><span class='small'>Inhibition measurament: </span></td> \n\
      <td class='small' align='center'> \n\
         <b> \n\
             <input class='cajas' type='text' name='inm' value='' /> \n\
            </b>Mm   \n\
          </td> \n\
    </tr> \n\
    <tr> \n\
      <td><span class='small'>* Antagonist strain: </span></td> \n\
        <td class='small' align='center'> \n\
      <b> \n\
      <?php $meses = $antagosn; $nombre = "anta".$inc16; $resultado = lista($nombre, $meses); echo $resultado; $inc16=$inc16+1;?>\n\
   </b> \n\
 </td> \n\
 </tr>  \n\
 <tr bgcolor='#CCDDEE'> \n\
         <b> \n\
             <input type='hidden' name='pho' value='<?php echo $var111?>' /> \n\
            </b>   \n\
    </tr> \n\
    <tr> \n\
      <td><span class='small'>Comments: </span></td> \n\
      <td class='small' align='center'> \n\
      <textarea  class='cajas' rows='10'  cols='30' name='com' value='<?php echo $var112?>'> \n\
                    </textarea> \n\
          </td> \n\
       <input type='hidden' name='sub' id='sub' value='<?php echo $consul3?>'/> \n\
     <input type='hidden' name='lab' id='lab' value='<?php echo $lab?>'/> \n\
                   <tr align='center' id='decimoboton' > \n\
<td colspan='2'> \n\
 <input  class='button' type='button' name='btn10' value='Update' onclick='return ValidarFormulario8(Bioassays);'/>  \n\
<input class='button' type='button' name='btns' value='Document' onclick='subirima6();'/>     \n\
</td> \n\
</tr> \n\
<div id='div_oculto5' style='display: none;'></div> \n\
</tbody></table>  \n\
</center> \n\
</form>"; 
            
nodoForm.insertBefore(nuevoNodo, nodoForm.querySelector('#referenciaBio'));  
        
        }





</script>

