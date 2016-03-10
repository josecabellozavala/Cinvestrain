<?php
include("bdConnection.php");
include("menu_prin.php"); 


$user = isset($_SESSION['user']) ? $_SESSION['user'] : null ;

$sql1="SELECT lab.id_lab FROM user,lab WHERE user.Name ='$user' AND user.lab=lab.id_lab";		
		$cs1=mysql_query($sql1,$cn);
                
		while($resul=mysql_fetch_array($cs1)){
			$consul2=$resul[0];
                           
			}
                        
$sql="SELECT Org_ID,Alias FROM organism_information where lab='$consul2'";		
		$cs=mysql_query($sql,$cn);
$arre=array();
$arre1=array();
while($resul=mysql_fetch_array($cs)){
$arre1[]= $resul['Org_ID']; 					
$arre[]= $resul['Alias'];  
}

$sql="SELECT User_ID,Name FROM user where lab='$consul2'";		
		$cs=mysql_query($sql,$cn);
$arreIso=array();
$arreIso1=array();
while($resul=mysql_fetch_array($cs)){
$arreIso1[]= $resul['User_ID'];					
$arreIso[]= $resul['Name'];  
}
$sql="SELECT Medium_ID,Name FROM medium where lab='$consul2'";		
		$cs=mysql_query($sql,$cn);
$arreMedium=array();
$arreMedium1=array();
while($resul=mysql_fetch_array($cs)){
$arreMedium1[]= $resul['Medium_ID']; 					
$arreMedium[]= $resul['Name'];  
}

$sql="SELECT Surface_Morphology_ID,Name FROM surface_morphology where lab='$consul2'";		
		$cs=mysql_query($sql,$cn);
$arreSurface=array();
$arreSurface1=array();
while($resul=mysql_fetch_array($cs)){
$arreSurface1[]= $resul['Surface_Morphology_ID'];  					
$arreSurface[]= $resul['Name'];  
}

$sql="SELECT Preservation_Method_ID,Name FROM preservation_method where lab='$consul2'";		
		$cs=mysql_query($sql,$cn);
$arrePreserv=array();
$arrePreserv1=array();
while($resul=mysql_fetch_array($cs)){
$arrePreserv1[]= $resul['Preservation_Method_ID'];  					
$arrePreserv[]= $resul['Name'];  
}

//353059052619946

function lista($nombre, $meses,$identifi){ 
    $array = $meses; 
    $arraId=$identifi;
$txt= "<select name='$nombre' id='$nombre'>"; 
for ($i=0; $i<sizeof($array); $i++){
    $txt .= "<option value='$arraId[$i]'>". $array[$i] . '</option>'; 
} 
$txt .= '</select>'; 
return $txt; }  

$sql="SELECT User_ID,Name FROM user where lab='$consul2'";		
		$cs=mysql_query($sql,$cn);
$arrUser=array();
$arrUser1=array();
while($resul=mysql_fetch_array($cs)){
$arrUser1[]= $resul['User_ID']; 					
$arrUser[]= $resul['Name'];  
}

$sql="SELECT Storage_ID,Name FROM storage where lab='$consul2'";		
		$cs=mysql_query($sql,$cn);
$arrStoragePres=array();
$arrStoragePres1=array();
while($resul=mysql_fetch_array($cs)){
$arrStoragePres1[]= $resul['Storage_ID'];  					
$arrStoragePres[]= $resul['Name'];  
}
$sql="SELECT Extraction_Method_ID,Name FROM extraction_method where lab='$consul2'";		
		$cs=mysql_query($sql,$cn);
$arrExtraction=array();
$arrExtraction1=array();
while($resul=mysql_fetch_array($cs)){
					
$arrExtraction1[]= $resul['Extraction_Method_ID'];  
$arrExtraction[]= $resul['Name'];
}

$sql="SELECT Gene_ID,Name FROM gene where lab='$consul2'";		
		$cs=mysql_query($sql,$cn);
$arrGenes=array();
$arrGenes1=array();
while($resul=mysql_fetch_array($cs)){
$arrGenes1[]= $resul['Gene_ID'];  					
$arrGenes[]= $resul['Name'];  
}
$sql="SELECT Sequencing_Method_ID,Name FROM sequencing_method where lab='$consul2'";		
		$cs=mysql_query($sql,$cn);
$arrSeqMeth=array();
$arrSeqMeth1=array();
while($resul=mysql_fetch_array($cs)){
$arrSeqMeth1[]= $resul['Sequencing_Method_ID'];  					
$arrSeqMeth[]= $resul['Name'];  
}
$sql="SELECT Assay_Type_ID,Name FROM assay_type where lab='$consul2'";		
		$cs=mysql_query($sql,$cn);
$arrAssay=array();
$arrAssay1=array();
while($resul=mysql_fetch_array($cs)){
	$arrAssay1[]= $resul['Assay_Type_ID'];  				
$arrAssay[]= $resul['Name'];  
}


$sql="SELECT Org_ID,Alias FROM organism_information where lab='$consul2'";		
		$cs=mysql_query($sql,$cn);
$antagosn=array();
$antagosn1=array();
while($resul=mysql_fetch_array($cs)){
$antagosn1[]= $resul['Org_ID'];  					
$antagosn[]= $resul['Alias'];  
}

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
?>
<script language="javascript" type="text/javascript" src="jquery-1.4.2.min.js"></script>

<script type="text/javascript">
  
         
   function MyC(){
                                
                         document.getElementById('producto').style.display='block';         
                                
                            }
  function mostrar(id) {
    if (id == "Host_associated") {
                 document.getElementById('producto').style.display='none'; 
      
          $( "#proveedor" ).load( "user/Cat/Organismo/Select_host.php" );
 
			
                                	$("#proveedor").change(function(){
					var nom= $("#proveedor").val();
					$.get("user/Cat/Organismo/Select_tipo_host.php",{par:nom})
					.done(function(data){
						$("#producto").html(data);
					})
			 	})
     
           
          
         
    }
     if (id == "Plant_associated") {
      
               $("#comboPlant").show(); 
                document.getElementById('producto').style.display='none'; 
               $( "#proveedor" ).load( "user/Cat/Organismo/Select_Plant.php" );

				$("#proveedor").change(function(){
					var id = $("#proveedor").val();
					$.get("user/Cat/Organismo/Select_tissue.php",{param_id:id})
					.done(function(data){
						$("#producto").html(data);
					})
			 	})
 
    
    }
     if (id == "Free_living") {
        
                document.getElementById('producto').style.display='none'; 
               $( "#proveedor" ).load( "user/Cat/Organismo/Select_Free.php" );

			 
                                	$("#proveedor").change(function(){
					var n= $("#proveedor").val();
					$.get("user/Cat/Organismo/Select_tipo_free.php",{pr:n})
					.done(function(data){
						$("#producto").html(data);
					}) 
			 	})
    }
    }
       function MyC1(uno){
                                
                         document.getElementById("producto"+uno+"").style.display='block';         
                                
                            }
    
 
function mostrar1(id,uno) {
    if (id == "Host_associated") {
                 document.getElementById("producto"+uno+"").style.display='none'; 
          $( "#proveedor"+uno+"" ).load( "user/Cat/Organismo/Select_host.php" );
 
			
                                	$("#proveedor"+uno+"").change(function(){
					var nom= $("#proveedor"+uno+"" ).val();
					$.get("user/Cat/Organismo/Select_tipo_host.php",{par:nom})
					.done(function(data){
						$("#producto"+uno+"" ).html(data);
					})
			 	})
     
           
          
         
    }
     if (id == "Plant_associated") {
      
               $("#comboPlant").show(); 
                document.getElementById("producto"+uno+"").style.display='none'; 
               $( "#proveedor"+uno+"" ).load( "user/Cat/Organismo/Select_Plant.php" );

				$("#proveedor"+uno+"").change(function(){
					var id = $("#proveedor"+uno+"").val();
					$.get("user/Cat/Organismo/Select_tissue.php",{param_id:id})
					.done(function(data){
						$("#producto"+uno+"").html(data);
					})
			 	})
 
    
    }
     if (id == "Free_living") {
        
                document.getElementById("producto"+uno+"").style.display='none'; 
               $( "#proveedor"+uno+"" ).load( "user/Cat/Organismo/Select_Free.php" );

			 
                                	$("#proveedor"+uno+"").change(function(){
					var n= $("#proveedor").val();
					$.get("user/Cat/Organismo/Select_tipo_free.php",{pr:n})
					.done(function(data){
						$("#producto"+uno+"").html(data);
					}) 
			 	})
    } 
    
    
    
    }
     
        </script>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Advanced search</title><meta charset="utf-8">
<style type="text/css">
    #pos
    {
        position: absolute;
        width: 180px;
        height: 300px;
        left:300px;
        float: left;
        top:5%;
       background-color:  #104BA9;
    }
body { font-family: sans-serif;}
label {color: maroon; display:block; padding:5px;}
.simulaLink {color: blue; cursor:pointer;}
</style>
<link rel="stylesheet" type="text/css" href="advSearch.css">
<script type="text/javascript" src="CodigoJavascript.js" language="javascript"></script>
<script type="text/javascript" src="jquery.js" language="javascript"></script>
<script type="text/javascript" >
var contador=1;

function addPersona () {
var nodoForm = document.querySelector('P');
var nuevoNodo = document.createElement('div');
contador = contador+1;
nuevoNodo.className='nuevoNodo';
nuevoNodo.innerHTML = 
       '<div id="as_queryOptions">'+
                '<table border="0" id="myTable1" class="smarttable">'+
                 '   <tbody id="myTbody1">'+
                 '       <tr id="smartTr_0">'+
                 '           <td><div class="b_head3" style="padding-top: 3px;">'+
                 '                   <table id="smartContainerTable_0" class="plain">'+
                 '                       <tbody><tr id="smartHeadTr_0">'+
                 '                               <td style="width: 100px;">'+
                 '                                   <select class="selectsmall" name="smartSearchSubtype_0" onchange="MuestraOrganismo1(this.value,'+contador+')" id="smartSearchSubtype'+contador+'">'+
                 '                                       <option value=" " selected="">Choose a Query Type:</option>'+
                                                        
 '<optgroup label="Organism Information">'+
      '<option value="Alias" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Alias</option>'+
      '<option value="Isolated_by" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Isolated by</option>'+
      '<option value="Date_of_Isolation" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Date of Isolation</option>'+
      '<option value="Origin" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Origin</option>'+
     ' <option value="CommentsOrg" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Text Search Comments</option>'+
 '</optgroup>'+
'<optgroup label="Macroscopic Morphology">'+
 '<option value="Medium_Macro"  >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Medium</option>'+
'<option value="Temperature_Macro" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Temperature</option>'+
'<option value="Agitation_Macro">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Agitation</option>'+
'<option value="Age_Macro" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Age</option>'+
'<option value="Size" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Size</option>'+
'<option value="Surface" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Surface</option>'+
'</optgroup>'+

'<optgroup label="Microscopic Morphology">'+
'<option value="Medium_Micro">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Medium </option>'+
'<option value="Temperature_Micro" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Temperature</option>'+
'<option value="Agitation_Micro">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Agitation</option>'+
'<option value="Age_Micro">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Age</option>'+
'<option value="Axis" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Axis</option>'+
'<option value="Motility" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Motility</option>'+
'<option value="Aggregates">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Aggregates</option>'+
'<option value="Biofilm_formation" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Biofilm formation</option>'+
'<option value="Gram_test" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Gram test</option>'+

'</optgroup>'+

'<optgroup label="Growth characteristics">'+
'<option value="Medium_solid">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Medium solid</option>'+
'<option value="Temperature_solid" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Temperature solid</option>'+
'<option value="Time_solid" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Time solid</option>'+
'<option value="Medium_liquid" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Medium liquid</option>'+
'<option value="Temperature_liquid" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Temperature liquid</option>'+
'<option value="Agitation_time" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Agitation time</option>'+
'<option value="Time_liquid" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Time liquid</option>'+
'<option value="PH">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PH </option>'+
'<option value="OD600" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OD600</option>'+
'<option value="Extra_parameters" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Extra parameters</option>'+
'</optgroup>'+

'<optgroup label="Preservation of Strains">'+
'<option value="Preservation_Method_Name" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Preservation Method Name</option>'+
'<option value="Date_of_preservation" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Date of preservation</option>'+
'<option value="User_Pres" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;User Name</option>'+
'<option value="Number_of_vials" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Number of vials</option>'+
'<option value="Volume_of_vials" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Volume of vials</option>'+
'<option value="Storage_Pres" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Storage Name</option>'+
'<option value="Comments_Pres">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Text Search Comments</option>'+

'</optgroup>'+

'<optgroup label="DNA">'+
'<option value="Extraction_Method_Name" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Extraction Method Name</option>'+
'<option value="Date_of_preservation" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Date of preservation</option>'+
'<option value="Concentration_DNA" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Concentration</option>'+
'<option value="Volume_DNA" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Volume</option>'+
'<option value="User_DNA" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;User Name</option>'+
'<option value="Storage_DNA" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Storage Name</option>'+
'</optgroup>'+

'<optgroup label="Genetic Data">'+
'<option value="Taxonomic_lineage" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Taxonomic lineage</option>'+
'<option value="Gene" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Gene Name</option>'+
'<option value="Sequencing_Method_Name" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Sequencing Method Name</option>'+
'<option value="Cured_sequence" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Cured sequence</option>'+
'<option value="Comments_Genetic" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Text Search Comments</option>'+
'</optgroup>'+


'<optgroup label="Metabolic Data">'+
'<option value="User_Meta" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;User Name</option>'+
'<option value="Medium_Meta" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Medium</option>'+
'<option value="Temperature_Meta" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Temperature</option>'+
'<option value="Agitation_Meta" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Agitation </option>'+
'<option value="Time_Meta" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Time</option>'+
'<option value="PH_Meta">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PH</option>'+
'<option value="OD600_Meta" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OD600 </option>'+
'<option value="Comments_Meta" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Text Search Comments</option>'+
    
'</optgroup>'+

'<optgroup label="Bioassays Data">'+
'<option value="Assay_Type_Name" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Assay Type Name</option>'+
'<option value="Medium_Bio" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Medium</option>'+
'<option value="Temperature_Bio" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Temperature</option>'+
'<option value="Inhibition" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Inhibition </option>'+
'<option value="Inhibition_measurament" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Inhibition measurament</option>'+
'<option value="Antagonist_strain">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Antagonist strain</option>'+
'<option value="Comments_bio" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Text Search Comments</option>'+

'</optgroup>'+

'<optgroup label="Map">'+
'<option value="Coordinates" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Coordinates</option>'+
'</optgroup>'+

 
                                                    '</select>'+
                                                    
                                                             ' </td>'+
                                        
                                                      '  <td id="smartTip_0" style="font-weight: normal;">'+
                                                            
                                                '</td><td style="width: 10px;"><img src="./RCSB PDB - Advanced Search_files/minus.png" id="clearSmartRow_0" class="clearSmartRow" onclick="clearSmartRow(event);" style="display: none;">'+
                                                '</td></tr></tbody></table></div>'+
                               ' <div class="w_body3">'+
    
                                  '  <div class="box_contentWrapper">'+
                                       ' <table id="smartBodyTable_0" class="plain">'+
                                           ' <tbody>'+
                                               ' <tr>'+
                                                   ' <td id="smartSearchDesc'+contador+'" colspan="4" style="font-style: oblique;">'+
                                                            
                                                   ' </td>'+
                                                '</tr>'+
                                                '<tr id="search_smartTr_0">'+
                                                   ' <td class="smartParmLoading">'+
                                                       ' <div id="smartParmLoadingDiv'+contador+'">'+
                                                                                                                                                                            
                                            
                                                    '</td>'+
                                                   
                                                '</tr></tbody></table></div></div>'+
                                        
   
                              '  <div class="w_foot3" style="height: 10px;">'+
                                    
                               ' </div></td></tr></tbody>'+
               ' </table>'+
           
           ' </div>';
              


                                      
    
    
   

nodoForm.insertBefore(nuevoNodo, nodoForm.querySelector('#referenciaVacia1'));


}

function removeNodo() {
               


  var nodoForm = document.querySelector('P');
while (nodoForm.firstChild) {
    nodoForm.removeChild(nodoForm.firstChild);
}

}
function MuestraOrganismo(id)
{
//    organismo
    if (id == "Alias") {
          
    
          var div2=document.getElementById("smartParmLoadingDiv_0") ;
          div2.innerHTML="\n\
  <?php $meses = $arre; $meses1 = $arre1; $nombre = "txtA"; $resultado = lista($nombre, $meses, $meses1); echo $resultado;?>\n\
                    <input  style='display:none;' type='checkbox' name='tabla1' id='tabla1' value='organism_information ' checked>\n\
          <input type='hidden' name='consulta' value='organism_information.Org_ID,organism_information.Alias,organism_information.Isolated_by,organism_information.Date_of_Isolation,organism_information.Origin,organism_information.Additional_Comments'>\n\
        <input type='hidden' name='jugador' id='jugador'/>\n\
         <input type='button' name='btn_enviar' id='btn_enviar' value='Result Count' onclick='Result()' >";
          
           var div3=document.getElementById("smartSearchDesc_0") ;
            div3.innerHTML="insert organism  Alias  ";
         
    }
     if (id == "Isolated_by") { 
        
        var div2=document.getElementById("smartParmLoadingDiv_0") ;
          div2.innerHTML="\n\
           <?php $meses = $arreIso; $meses1 = $arreIso1; $nombre = "txtuser"; $resultado = lista($nombre, $meses, $meses1); echo $resultado;?>\n\
          <input style='display:none;' type='checkbox' id='tabla1' name='tabla1' value='organism_information' checked>\n\
          <input type='hidden' name='consulta' value='organism_information.Org_ID,organism_information.Alias,organism_information.Isolated_by,organism_information.Date_of_Isolation,organism_information.Origin,organism_information.Additional_Comments'>\n\
        <input type='hidden' name='Insolated' id='Insolated'/>\n\
         <input type='button' name='btnIso1' name='btnIso1' value='Result Count' onclick='Result()' >\n\
          ";
          var div3=document.getElementById("smartSearchDesc_0") ;
            div3.innerHTML="User Name:";
    }
     if (id == "Date_of_Isolation") {
          var div2=document.getElementById("smartParmLoadingDiv_0") ;
          div2.innerHTML="\n\
          Initial: <input type='date'  id='txtfechaIni' name='txtfechaIni'>\n\
                Final: <input type='date'  id='txtfechaFin' name='txtfechaFin'>\n\
          <input style='display:none;' type='checkbox' id='tabla1' name='tabla1' value='organism_information' checked>\n\
          <input type='hidden' name='consulta' value='organism_information.Org_ID,organism_information.Alias,organism_information.Isolated_by,organism_information.Date_of_Isolation,organism_information.Origin,organism_information.Additional_Comments'>\n\
        <input type='hidden' name='DateInsolated' id='DateInsolated'/>\n\
         <input type='button' value='Result Count' onclick='Result()' >\n\
          ";
          var div3=document.getElementById("smartSearchDesc_0") ;
            div3.innerHTML="Select Dates:";
    }
     if (id == "Origin") {
          var div2=document.getElementById("smartParmLoadingDiv_0") ;
          div2.innerHTML="\n\
          <select onChange='mostrar(this.value);' id='txtOrigin' name='txtOrigin'><option>Plant_associated</option><option>Host_associated</option> <option>Free_living</option> </select>\n\
        <select id='proveedor' name='proveedor' onchange='MyC();'></select>\n\
        <select id='producto' name='producto' style='display:none'></select>\n\
 <input style='display:none;' type='checkbox' id='tabla1' name='tabla1' value='organism_information' checked>\n\
          <input type='hidden' name='consulta' value='organism_information.Org_ID,organism_information.Alias,organism_information.Isolated_by,organism_information.Date_of_Isolation,organism_information.Origin,organism_information.Additional_Comments'>\n\
        <input type='hidden' name='Origin' id='Origin'/>\n\
         <input type='button' value='Result Count' onclick='Result()' >\n\
         ";
          var div3=document.getElementById("smartSearchDesc_0") ;
            div3.innerHTML="Select the origin:";
    }

   if (id == "CommentsOrg") {
          var div2=document.getElementById("smartParmLoadingDiv_0") ;
          div2.innerHTML="\n\
         <textarea  id='txtCommentsOrig' name='txtCommentsOrig'></textarea>\n\
          <input style='display:none;' type='checkbox' id='tabla1' name='tabla1' value='organism_information' checked>\n\
          <input type='hidden' name='consulta' value='organism_information.Org_ID,organism_information.Alias,organism_information.Isolated_by,organism_information.Date_of_Isolation,organism_information.Origin,organism_information.Additional_Comments'>\n\
        <input type='hidden' name='CommentsOrigin' id='CommentsOrigin'/>\n\
         <input type='button' value='Result Count' onclick='Result()'>\n\
         ";
          var div3=document.getElementById("smartSearchDesc_0") ;
            div3.innerHTML="Search comments:";
    }

   if (id == "Name_Org_Macro") {
          var div2=document.getElementById("smartParmLoadingDiv_0") ;
          div2.innerHTML="\n\
         <input type='text'  id='txtNameMacro' name='txtNameMacro'>\n\
          <input style='display:none;' type='checkbox' id='tabla2' name='tabla2' value='macroscopic_morphology' checked>\n\
          <input type='hidden' name='consulta1' value='organism_information.Org_ID,organism_information.Alias,organism_information.Isolated_by,organism_information.Date_of_Isolation,organism_information.Origin,organism_information.Additional_Comments'>\n\
        <input type='hideen' name='NameMacro' id='NameMacro'/>\n\
         <input type='button' value='Result Count' onclick='Result()' >\n\
          ";
          var div3=document.getElementById("smartSearchDesc_0") ;
            div3.innerHTML="Insert organism name :";
    }
   if (id == "Medium_Macro") {
          var div2=document.getElementById("smartParmLoadingDiv_0") ;
          div2.innerHTML="\n\
          <?php $meses = $arreMedium;  $meses1 = $arreMedium1; $nombre = "txtMediumMacro"; $resultado = lista($nombre, $meses, $meses1); echo $resultado;?>\n\
          <input style='display:none;' type='checkbox' id='tabla2' name='tabla2' value='macroscopic_morphology' checked>\n\
          <input type='hidden' name='consulta1' value='organism_information.Org_ID,organism_information.Alias,organism_information.Isolated_by,organism_information.Date_of_Isolation,organism_information.Origin,organism_information.Additional_Comments'>\n\
        <input type='hidden' name='MediumMacro' id='MediumMacro'/>\n\
         <input type='button' value='Result Count' onclick='Result()' >\n\
          ";
          var div3=document.getElementById("smartSearchDesc_0") ;
            div3.innerHTML="Insert medium:";
    }
   if (id == "Temperature_Macro") {
          var div2=document.getElementById("smartParmLoadingDiv_0") ;
          div2.innerHTML="\n\
         Initial<input type='text'  id='txtTempInicial' name='txtTempInicial'>\n\
            Final <input type='text'  id='txtTempFinal' name='txtTempFinal'>\n\
          <input style='display:none;' type='checkbox' id='tabla2' name='tabla2' value='macroscopic_morphology' checked>\n\
          <input type='hidden' name='consulta1' value='organism_information.Org_ID,organism_information.Alias,organism_information.Isolated_by,organism_information.Date_of_Isolation,organism_information.Origin,organism_information.Additional_Comments'>\n\
        <input type='hidden' name='TempMacro' id='TempMacro'/>\n\
         <input type='button' value='Result Count' onclick='Result()'>\n\
          ";
          var div3=document.getElementById("smartSearchDesc_0") ;
            div3.innerHTML="Select Temperature:";
    }
   if (id == "Agitation_Macro") {
          var div2=document.getElementById("smartParmLoadingDiv_0") ;
          div2.innerHTML="\n\
         <input type='text'  id='txtAgitationMacro' name='txtAgitationMacro'>\n\
          <input style='display:none;' type='checkbox' id='tabla2' name='tabla2' value='macroscopic_morphology' checked>\n\
          <input type='hidden' name='consulta1' value='organism_information.Org_ID,organism_information.Alias,organism_information.Isolated_by,organism_information.Date_of_Isolation,organism_information.Origin,organism_information.Additional_Comments'>\n\
        <input type='hidden' name='AgritationMacro' id='AgritationMacro'/>\n\
         <input type='button' value='Result Count' onclick='Result()' >\n\
          ";
          var div3=document.getElementById("smartSearchDesc_0") ;
            div3.innerHTML="Insert Agitation:";
    }
   if (id == "Age_Macro") {
          var div2=document.getElementById("smartParmLoadingDiv_0") ;
          div2.innerHTML="\n\
         <input type='datatime'  id='txtAgeMacro' name='txtAgeMacro'>\n\
          <input style='display:none;' type='checkbox' id='tabla2' name='tabla2' value='macroscopic_morphology' checked>\n\
          <input type='hidden' name='consulta1' value='organism_information.Org_ID,organism_information.Alias,organism_information.Isolated_by,organism_information.Date_of_Isolation,organism_information.Origin,organism_information.Additional_Comments'>\n\
        <input type='hidden' name='AgeMacro' id='AgeMacro'/>\n\
         <input type='button' value='Result Count' onclick='Result()' >\n\
          ";
          var div3=document.getElementById("smartSearchDesc_0") ;
            div3.innerHTML="Insert Age";
    }
   if (id == "Size") {
          var div2=document.getElementById("smartParmLoadingDiv_0") ;
          div2.innerHTML="\n\
         Initial: <input type='text'  id='txtSizeIMacro' name='txtSizeIMacro'>\n\
            Final: <input type='text'  id='txtSizeFMacro' name='txtSizeFMacro'>\n\
          <input style='display:none;' type='checkbox' id='tabla2' name='tabla2' value='macroscopic_morphology' checked>\n\
          <input type='hidden' name='consulta1' value='organism_information.Org_ID,organism_information.Alias,organism_information.Isolated_by,organism_information.Date_of_Isolation,organism_information.Origin,organism_information.Additional_Comments'>\n\
        <input type='hidden' name='SizeMacro' id='SizeMacro'/>\n\
         <input type='button' value='Result Count' onclick='Result()'>\n\
          ";
          var div3=document.getElementById("smartSearchDesc_0") ;
            div3.innerHTML="Insert size:";
    }
   if (id == "Surface") {
          var div2=document.getElementById("smartParmLoadingDiv_0") ;
          div2.innerHTML="\n\
           <?php $meses = $arreSurface; $meses1 = $arreSurface1; $nombre = "txtsurface"; $resultado = lista($nombre, $meses, $meses1); echo $resultado;?>\n\
          <input style='display:none;' type='checkbox' id='tabla2' name='tabla2' value='macroscopic_morphology' checked>\n\
          <input type='hidden' name='consulta1' value='organism_information.Org_ID,organism_information.Alias,organism_information.Isolated_by,organism_information.Date_of_Isolation,organism_information.Origin,organism_information.Additional_Comments'>\n\
        <input type='hidden' name='SurfaceMacro' id='SurfaceMacro'/>\n\
         <input type='button' value='Result Count' onclick='Result()' >\n\
         ";
          var div3=document.getElementById("smartSearchDesc_0") ;
            div3.innerHTML="Select Surface:";
    }
   if (id == "Name_Org_Micro") { 
          var div2=document.getElementById("smartParmLoadingDiv_0") ;
          div2.innerHTML="\n\
         <input type='text'  id='txtNameMicro' name='txtNameMicro'>\n\
          <input type='hidden' id='tabla3' name='tabla3' value='microscopic_morphology'>\n\
          <input type='hidden' name='consulta2' value='organism_information.Org_ID,organism_information.Alias,organism_information.Isolated_by,organism_information.Date_of_Isolation,organism_information.Origin,organism_information.Additional_Comments'>\n\
        <input type='hidden' name='NameMicro' id='NameMicro'/>\n\
         <input type='button' value='Result Count' onclick='Result()' >\n\
          ";
          var div3=document.getElementById("smartSearchDesc_0") ;
            div3.innerHTML="Select Organism Name:";
    }
   if (id == "Medium_Micro") {
          var div2=document.getElementById("smartParmLoadingDiv_0") ;
          div2.innerHTML="\n\
          <?php $meses = $arreMedium; $meses1 = $arreMedium1;$nombre = "txtMediumMmicro"; $resultado = lista($nombre, $meses, $meses1); echo $resultado;?>\n\
          <input type='hidden' id='tabla3' name='tabla3' value='microscopic_morphology'>\n\
          <input type='hidden' name='consulta2' value='organism_information.Org_ID,organism_information.Alias,organism_information.Isolated_by,organism_information.Date_of_Isolation,organism_information.Origin,organism_information.Additional_Comments'>\n\
        <input type='hidden' name='MediumMicro' id='MediumMicro'/>\n\
         <input type='button' value='Result Count' onclick='Result()' >\n\
       ";
          var div3=document.getElementById("smartSearchDesc_0") ;
            div3.innerHTML="Select Medium:";
    }
   if (id == "Temperature_Micro") {
          var div2=document.getElementById("smartParmLoadingDiv_0") ;
          div2.innerHTML="\n\
         Initial: <input type='text'  id='txtTemperatureIMicro' name='txtTemperatureIMicro'>\n\
              Final: <input type='text'  id='txtTemperatureFMicro' name='txtTemperatureFMicro'>\n\
          <input type='hidden' id='tabla3' name='tabla3' value='microscopic_morphology'>\n\
          <input type='hidden' name='consulta2' value='organism_information.Org_ID,organism_information.Alias,organism_information.Isolated_by,organism_information.Date_of_Isolation,organism_information.Origin,organism_information.Additional_Comments'>\n\
        <input type='hidden' name='TemperatureMicro' id='TemperatureMicro'/>\n\
         <input type='button' value='Result Count' onclick='Result()' >\n\
          ";
          var div3=document.getElementById("smartSearchDesc_0") ;
            div3.innerHTML="Select Temperature:";
    }
   if (id == "Agitation_Micro") {
          var div2=document.getElementById("smartParmLoadingDiv_0") ;
          div2.innerHTML="\n\
         <input type='text'  id='txtAgitationMi' name='txtAgitationMi'>\n\
          <input type='hidden' id='tabla3' name='tabla3' value='microscopic_morphology'>\n\
          <input type='hidden' name='consulta2' value='organism_information.Org_ID,organism_information.Alias,organism_information.Isolated_by,organism_information.Date_of_Isolation,organism_information.Origin,organism_information.Additional_Comments'>\n\
        <input type='hidden' name='AgitationMicro' id='AgitationMicro'/>\n\
         <input type='button' value='Result Count' onclick='Result()' >\n\
          ";
          var div3=document.getElementById("smartSearchDesc_0") ;
            div3.innerHTML="Insert the agitation:";
    }
   if (id == "Age_Micro") {
          var div2=document.getElementById("smartParmLoadingDiv_0") ;
          div2.innerHTML="\n\
         <input type='datetime'  id='txtAgeMicro' name='txtAgeMicro'>\n\
          <input type='hidden' id='tabla3' name='tabla3' value='microscopic_morphology'>\n\
          <input type='hidden' name='consulta2' value='organism_information.Org_ID,organism_information.Alias,organism_information.Isolated_by,organism_information.Date_of_Isolation,organism_information.Origin,organism_information.Additional_Comments'>\n\
        <input type='hidden' name='AgeMicro' id='AgeMicro'/>\n\
         <input type='button' value='Result Count' onclick='Result()' >\n\
          ";
          var div3=document.getElementById("smartSearchDesc_0") ;
            div3.innerHTML="Insert Age:";
    }
   if (id == "Axis") {
          var div2=document.getElementById("smartParmLoadingDiv_0") ;
          div2.innerHTML="\n\
               Short<input type='text'  id='txtAxis_short' name='txtAxis_short'>\n\
                   Long<input type='text'  id='txtAxis_long' name='txtAxis_long'>\n\
          <input type='hidden' id='tabla3' name='tabla3' value='microscopic_morphology'>\n\
          <input type='hidden' name='consulta2' value='organism_information.Org_ID,organism_information.Alias,organism_information.Isolated_by,organism_information.Date_of_Isolation,organism_information.Origin,organism_information.Additional_Comments'>\n\
        <input type='hidden' name='Axislong' id='Axislong'/>\n\
         <input type='button' value='Result Count' onclick='Result()' >\n\
          ";
          var div3=document.getElementById("smartSearchDesc_0") ;
            div3.innerHTML="insert Axis ";
    }
   if (id == "Motility") {
          var div2=document.getElementById("smartParmLoadingDiv_0") ;
          div2.innerHTML="\n\
         <select  id='txtMotility' name='txtMotility'><option>Yes</option><option>No</option></select>\n\
          <input type='hidden' id='tabla3' name='tabla3' value='microscopic_morphology'>\n\
          <input type='hidden' name='consulta2' value='organism_information.Org_ID,organism_information.Alias,organism_information.Isolated_by,organism_information.Date_of_Isolation,organism_information.Origin,organism_information.Additional_Comments'>\n\
        <input type='hidden' name='MotilityMicro' id='MotilityMicro'/>\n\
         <input type='button' value='Result Count' onclick='Result()' >\n\
        ";
          var div3=document.getElementById("smartSearchDesc_0") ;
            div3.innerHTML="Select Molity:";
    }
 if (id == "Aggregates") {
          var div2=document.getElementById("smartParmLoadingDiv_0") ;
          div2.innerHTML="\n\
         <select  id='txtAggregates' name='txtAggregates'><option>Yes</option><option>No</option></select>\n\
          <input type='hidden' id='tabla3' name='tabla3' value='microscopic_morphology'>\n\
          <input type='hidden' name='consulta2' value='organism_information.Org_ID,organism_information.Alias,organism_information.Isolated_by,organism_information.Date_of_Isolation,organism_information.Origin,organism_information.Additional_Comments'>\n\
        <input type='hidden' name='AggregatesMicro' id='AggregatesMicro'/>\n\
         <input type='button' value='Result Count' onclick='Result()'>\n\
       ";
          var div3=document.getElementById("smartSearchDesc_0") ;
            div3.innerHTML="Select Aggregates:";
    }
     if (id == "Biofilm_formation") {
          var div2=document.getElementById("smartParmLoadingDiv_0") ;
          div2.innerHTML="\n\
         <select  id='txtBiofilm_formation' name='txtBiofilm_formation'><option>Yes</option><option>No</option></select>\n\
          <input type='hidden' id='tabla3' name='tabla3' value='microscopic_morphology'>\n\
          <input type='hidden' name='consulta2' value='organism_information.Org_ID,organism_information.Alias,organism_information.Isolated_by,organism_information.Date_of_Isolation,organism_information.Origin,organism_information.Additional_Comments'>\n\
        <input type='hidden' name='Biofilm_formationMicro' id='Biofilm_formationMicro'/>\n\
         <input type='button' value='Result Count' onclick='Result()'>\n\
     ";
          var div3=document.getElementById("smartSearchDesc_0") ;
            div3.innerHTML="Select Biofilm formation:";
    }
     if (id == "Gram_test") {
          var div2=document.getElementById("smartParmLoadingDiv_0") ;
          div2.innerHTML="\n\
         <select  id='txtGram_test' name='txtGram_test'><option>Gram +</option><option>Gram +</option></select>\n\
          <input type='hidden' id='tabla3' name='tabla3' value='microscopic_morphology'>\n\
          <input type='hidden' name='consulta2' value='organism_information.Org_ID,organism_information.Alias,organism_information.Isolated_by,organism_information.Date_of_Isolation,organism_information.Origin,organism_information.Additional_Comments'>\n\
        <input type='hidden' name='Gram_testMicro' id='Gram_testMicro'/>\n\
         <input type='button' value='Result Count' onclick='Result()' >\n\
          </form>";
          var div3=document.getElementById("smartSearchDesc_0") ;
            div3.innerHTML="Select Gram test :";
    }
    if (id == "Org_Name_Grow") {
          var div2=document.getElementById("smartParmLoadingDiv_0") ;
          div2.innerHTML="\n\
         <input type='text'  id='txtNameGrow' name='txtNameGrow'>\n\
          <input type='hidden' id='tabla4' name='tabla4' value='growth_characteristics'>\n\
          <input type='hidden' name='consulta3' value='organism_information.Org_ID,organism_information.Alias,organism_information.Isolated_by,organism_information.Date_of_Isolation,organism_information.Origin,organism_information.Additional_Comments'>\n\
        <input type='hidden' name='NameGrow' id='NameGrow'/>\n\
         <input type='button' value='Result Count'  onclick='Result()'>\n\
          ";
          var div3=document.getElementById("smartSearchDesc_0") ;
            div3.innerHTML="Select Organism Name:";
    }
   if (id == "Medium_solid") {
          var div2=document.getElementById("smartParmLoadingDiv_0") ;
          div2.innerHTML="\n\
          <?php $meses = $arreMedium; $meses1 = $arreMedium1;$nombre = "txtMedium_solidGrow"; $resultado = lista($nombre, $meses, $meses1); echo $resultado;?>\n\
          <input type='hidden' id='tabla4' name='tabla4' value='growth_characteristics'>\n\
          <input type='hidden' name='consulta3' value='organism_information.Org_ID,organism_information.Alias,organism_information.Isolated_by,organism_information.Date_of_Isolation,organism_information.Origin,organism_information.Additional_Comments'>\n\
        <input type='hidden' name='Medium_solidGrow' id='Medium_solidGrow'/>\n\
         <input type='button' value='Result Count' onclick='Result()' >\n\
         ";
          var div3=document.getElementById("smartSearchDesc_0") ;
            div3.innerHTML="Select Medium Solid:";
    }
   if (id == "Temperature_solid") {
          var div2=document.getElementById("smartParmLoadingDiv_0") ;
          div2.innerHTML="\n\
         Initial <input type='text'  id='txtTemperatureSIGrow' name='txtTemperatureSIGrow'>\n\
            Final  <input type='text'  id='txtTemperatureSFGrow' name='txtTemperatureSFGrow'>\n\
          <input type='hidden' id='tabla4' name='tabla4' value='growth_characteristics'>\n\
          <input type='hidden' name='consulta3' value='organism_information.Org_ID,organism_information.Alias,organism_information.Isolated_by,organism_information.Date_of_Isolation,organism_information.Origin,organism_information.Additional_Comments'>\n\
        <input type='hidden' name='TemperatureSGrow' id='TemperatureSGrow'/>\n\
         <input type='button' value='Result Count' onclick='Result()'>\n\
       ";
          var div3=document.getElementById("smartSearchDesc_0") ;
            div3.innerHTML="Select Temperature solid:";
    }
   if (id == "Time_solid") {
          var div2=document.getElementById("smartParmLoadingDiv_0") ;
          div2.innerHTML="\n\
         <input type='time'  id='txtTime_solidGrow' name='txtTime_solidGrow'>\n\
          <input type='hidden' id='tabla4' name='tabla4' value='growth_characteristics'>\n\
          <input type='hidden' name='consulta3' value='organism_information.Org_ID,organism_information.Alias,organism_information.Isolated_by,organism_information.Date_of_Isolation,organism_information.Origin,organism_information.Additional_Comments'>\n\
        <input type='hidden' name='Time_solidGrow' id='Time_solidGrow'/>\n\
         <input type='button' value='Result Count' onclick='Result()' >\n\
          ";
          var div3=document.getElementById("smartSearchDesc_0") ;
            div3.innerHTML="Insert Time Solid:";
    }
   if (id == "Medium_liquid") {
          var div2=document.getElementById("smartParmLoadingDiv_0") ;
          div2.innerHTML="\n\
           <?php $meses = $arreMedium; $meses1 = $arreMedium1;$nombre = "txtMedium_liquidGrow"; $resultado = lista($nombre, $meses, $meses1); echo $resultado;?>\n\
          <input type='hidden' id='tabla4' name='tabla4' value='growth_characteristics'>\n\
          <input type='hidden' name='consulta3' value='organism_information.Org_ID,organism_information.Alias,organism_information.Isolated_by,organism_information.Date_of_Isolation,organism_information.Origin,organism_information.Additional_Comments'>\n\
        <input type='hidden' name='Medium_liquidGrow' id='Medium_liquidGrow'/>\n\
         <input type='button' value='Result Count' onclick='Result()' >\n\
          ";
          var div3=document.getElementById("smartSearchDesc_0") ;
            div3.innerHTML="Insert Medium liquid:";
    }
   if (id == "Temperature_liquid") {
          var div2=document.getElementById("smartParmLoadingDiv_0") ;
          div2.innerHTML="\n\
             Initial  <input type='text'  id='txtTempIliquidGrow' name='txtTempIliquidGrow'>\n\
                   Final <input type='text'  id='txtTempFliquidGrow' name='txtTempFliquidGrow'>\n\
          <input type='hidden' id='tabla4' name='tabla4' value='growth_characteristics'>\n\
          <input type='hidden' name='consulta3' value='organism_information.Org_ID,organism_information.Alias,organism_information.Isolated_by,organism_information.Date_of_Isolation,organism_information.Origin,organism_information.Additional_Comments'>\n\
        <input type='hidden' name='TempLiqGrow' id='TempLiqGrow'/>\n\
         <input type='button' value='Result Count' onclick='Result()' >\n\
          ";
          var div3=document.getElementById("smartSearchDesc_0") ;
            div3.innerHTML="Select Temperature Liquid";
    }
   if (id == "Agitation_time") {
          var div2=document.getElementById("smartParmLoadingDiv_0") ;
          div2.innerHTML="\n\
         <input type='time'  id='txtAgitation_time' name='txtAgitation_time'>\n\
          <input type='hidden' id='tabla4' name='tabla4' value='growth_characteristics'>\n\
          <input type='hidden' name='consulta3' value='organism_information.Org_ID,organism_information.Alias,organism_information.Isolated_by,organism_information.Date_of_Isolation,organism_information.Origin,organism_information.Additional_Comments'>\n\
        <input type='hidden' name='Agitation_timeGrow' id='Agitation_timeGrow'/>\n\
         <input type='button' value='Result Count' onclick='Result()' >\n\
          ";
          var div3=document.getElementById("smartSearchDesc_0") ;
            div3.innerHTML="Insert Agitation Time:";
    }
    if (id == "Time_liquid") {
          var div2=document.getElementById("smartParmLoadingDiv_0") ;
          div2.innerHTML="\n\
         <input type='time'  id='txtTime_liquid' name='txtTime_liquid'>\n\
          <input type='hidden' id='tabla4' name='tabla4' value='growth_characteristics'>\n\
          <input type='hidden' name='consulta3' value='organism_information.Org_ID,organism_information.Alias,organism_information.Isolated_by,organism_information.Date_of_Isolation,organism_information.Origin,organism_information.Additional_Comments'>\n\
        <input type='hidden' name='Time_liquideGrow' id='Time_liquidGrow'/>\n\
         <input type='button' value='Result Count' onclick='Result()' >\n\
          ";
          var div3=document.getElementById("smartSearchDesc_0") ;
            div3.innerHTML="Insert Time liquid:";
    }

if (id == "PH") {
          var div2=document.getElementById("smartParmLoadingDiv_0") ;
          div2.innerHTML="\n\
               pH initial<input type='text'  id='txtpH_initialGrow' name='txtpH_initialGrow'>\n\
                  pH final <input type='text'  id='txtpH_finalGrow' name='txtpH_finalGrow'>\n\
          <input type='hidden' id='tabla4' name='tabla4' value='growth_characteristics'>\n\
          <input type='hidden' name='consulta3' value='organism_information.Org_ID,organism_information.Alias,organism_information.Isolated_by,organism_information.Date_of_Isolation,organism_information.Origin,organism_information.Additional_Comments'>\n\
        <input type='hidden' name='PhGrow' id='PhGrow'/>\n\
         <input type='button' value='Result Count' onclick='Result()'>\n\
          ";
          var div3=document.getElementById("smartSearchDesc_0") ;
            div3.innerHTML="Select  PH";
    }

if (id == "OD600") {
          var div2=document.getElementById("smartParmLoadingDiv_0") ;
          div2.innerHTML="\n\
               OD600 initial<input type='text'  id='txtOD600_initialGrow' name='txtpH_initialGrow'>\n\
                  OD600 final <input type='text'  id='txtOD600_finalGrow' name='txtpH_finalGrow'>\n\
          <input type='hidden' id='tabla4' name='tabla4' value='growth_characteristics'>\n\
          <input type='hidden' name='consulta3' value='organism_information.Org_ID,organism_information.Alias,organism_information.Isolated_by,organism_information.Date_of_Isolation,organism_information.Origin,organism_information.Additional_Comments'>\n\
        <input type='hidden' name='OD600Grow' id='OD600Grow'/>\n\
         <input type='button' value='Result Count' onclick='Result()'>\n\
          ";
          var div3=document.getElementById("smartSearchDesc_0") ;
            div3.innerHTML="Select  OD600";
    }
    if (id == "Extra_parameters") {
          var div2=document.getElementById("smartParmLoadingDiv_0") ;
          div2.innerHTML="\n\
         <input type='time'  id='txtExtra_parameters' name='txtExtra_parameters'>\n\
          <input type='hidden' id='tabla4' name='tabla4' value='growth_characteristics'>\n\
          <input type='hidden' name='consulta3' value='organism_information.Org_ID,organism_information.Alias,organism_information.Isolated_by,organism_information.Date_of_Isolation,organism_information.Origin,organism_information.Additional_Comments'>\n\
        <input type='hidden' name='ExtraparametersGrow' id='ExtraparametersGrow'/>\n\
         <input type='button' value='Result Count' onclick='Result()' >\n\
         ";
          var div3=document.getElementById("smartSearchDesc_0") ;
            div3.innerHTML="Insert Extra parameters:";
    }
        if (id == "Org_Name_Pres") {
          var div2=document.getElementById("smartParmLoadingDiv_0") ;
          div2.innerHTML="\n\
         <input type='text'  id='txtNamePres' name='txtNamePres'>\n\
          <input type='hidden' id='tabla5' name='tabla5' value='preservation_of_strains'>\n\
          <input type='hidden' name='consulta4' value='organism_information.Org_ID,organism_information.Alias,organism_information.Isolated_by,organism_information.Date_of_Isolation,organism_information.Origin,organism_information.Additional_Comments'>\n\
        <input type='hidden' name='NamePres' id='NamePres'/>\n\
         <input type='button' value='Result Count'  onclick='Result()'>\n\
         ";
          var div3=document.getElementById("smartSearchDesc_0") ;
            div3.innerHTML="Select Organism Name:";
    }
  
   if (id == "Preservation_Method_Name") {
          var div2=document.getElementById("smartParmLoadingDiv_0") ;
          div2.innerHTML="\n\
          <?php $meses = $arrePreserv; $meses1 = $arrePreserv1; $nombre = "txtPreserv"; $resultado = lista($nombre, $meses, $meses1); echo $resultado;?>\n\
                  <input type='hidden' id='tabla5' name='tabla5' value='preservation_of_strains'>\n\
          <input type='hidden' name='consulta4' value='organism_information.Org_ID,organism_information.Alias,organism_information.Isolated_by,organism_information.Date_of_Isolation,organism_information.Origin,organism_information.Additional_Comments'>\n\
        <input type='hidden' name='Preservmethod' id='Preservmethod'/>\n\
         <input type='button' value='Result Count' onclick='Result()' >\n\
          ";
          var div3=document.getElementById("smartSearchDesc_0") ;
            div3.innerHTML="Select  preservation Method:";
    }
   if (id == "Date_of_preservation") {
          var div2=document.getElementById("smartParmLoadingDiv_0") ;
          div2.innerHTML="\n\
         Initial <input type='text'  id='txtDatePres1' name='txtDatePres1'>\n\
               Final <input type='text'  id='txtDatePres2' name='txtDatePres2'>\n\
          <input type='hidden' id='tabla5' name='tabla5' value='preservation_of_strains'>\n\
          <input type='hidden' name='consulta4' value='organism_information.Org_ID,organism_information.Alias,organism_information.Isolated_by,organism_information.Date_of_Isolation,organism_information.Origin,organism_information.Additional_Comments'>\n\
        <input type='hidden' name='DatePreser' id='DatePreser'/>\n\
         <input type='button' value='Result Count' onclick='Result()' >\n\
";
          var div3=document.getElementById("smartSearchDesc_0") ;
            div3.innerHTML="Select Date of preservation:";
    }
   if (id == "User_Pres") {
          var div2=document.getElementById("smartParmLoadingDiv_0") ;
          div2.innerHTML="\n\
           <?php $meses = $arrUser;  $meses1 = $arrUser1; $nombre = "txtUser_Pres"; $resultado= lista($nombre, $meses, $meses1); echo $resultado;?>\n\
                  <input type='hidden' id='tabla5' name='tabla5' value='preservation_of_strains'>\n\
          <input type='hidden' name='consulta4' value='organism_information.Org_ID,organism_information.Alias,organism_information.Isolated_by,organism_information.Date_of_Isolation,organism_information.Origin,organism_information.Additional_Comments'>\n\
        <input type='hidden' name='UserPres' id='UserPres'/>\n\
         <input type='button' value='Result Count' onclick='Result()' >\n\
         ";
          var div3=document.getElementById("smartSearchDesc_0") ;
            div3.innerHTML="Select user name:";
    }
   if (id == "Number_of_vials") {
          var div2=document.getElementById("smartParmLoadingDiv_0") ;
          div2.innerHTML="\n\
               <input type='text'  id='txtNumber_of_vialsPres' name='txtNumber_of_vialsPres'>\n\
               <input type='hidden' id='tabla5' name='tabla5' value='preservation_of_strains'>\n\
          <input type='hidden' name='consulta4' value='organism_information.Org_ID,organism_information.Alias,organism_information.Isolated_by,organism_information.Date_of_Isolation,organism_information.Origin,organism_information.Additional_Comments'>\n\
        <input type='hidden' name='Numbervials' id='Numbervials'/>\n\
         <input type='button' value='Result Count' onclick='Result()'>\n\
          ";
          var div3=document.getElementById("smartSearchDesc_0") ;
            div3.innerHTML="Insert Number of vials ";
    }
   if (id == "Volume_of_vials") {
          var div2=document.getElementById("smartParmLoadingDiv_0") ;
          div2.innerHTML="\n\
         <input type='time'  id='txtVolume_of_vials' name='txtVolume_of_vials'>\n\
          <input type='hidden' id='tabla5' name='tabla5' value='preservation_of_strains'>\n\
          <input type='hidden' name='consulta4' value='organism_information.Org_ID,organism_information.Alias,organism_information.Isolated_by,organism_information.Date_of_Isolation,organism_information.Origin,organism_information.Additional_Comments'>\n\
        <input type='hidden' name='Volume_of_vialsPres' id='Volume_of_vialsPres'/>\n\
         <input type='button' value='Result Count' onclick='Result()'>\n\
        ";
          var div3=document.getElementById("smartSearchDesc_0") ;
            div3.innerHTML="Insert Volume of vials:";
    }
    if (id == "Storage_Pres") {
          var div2=document.getElementById("smartParmLoadingDiv_0") ;
          div2.innerHTML="\n\
           <?php $meses = $arrStoragePres; $meses1 = $arrStoragePres1; $nombre = "txtStorage_Pres"; $resultado = lista($nombre, $meses, $meses1); echo $resultado;?>\n\
                  <input type='hidden' id='tabla5' name='tabla5' value='preservation_of_strains'>\n\
          <input type='hidden' name='consulta4' value='organism_information.Org_ID,organism_information.Alias,organism_information.Isolated_by,organism_information.Date_of_Isolation,organism_information.Origin,organism_information.Additional_Comments'>\n\
        <input type='hidden' name='Storage_PresePres' id='Storage_PresePres'/>\n\
         <input type='button' value='Result Count' onclick='Result()' >\n\
          ";
          var div3=document.getElementById("smartSearchDesc_0") ;
            div3.innerHTML="Insert  Storage Name:";
    }
         if (id == "Comments_Pres") {
          var div2=document.getElementById("smartParmLoadingDiv_0") ;
          div2.innerHTML="\n\
         <input type='text'  id='txtComments_Pres' name='txtComments_Pres'>\n\
          <input type='hidden' id='tabla5' name='tabla5' value='preservation_of_strains'>\n\
          <input type='hidden' name='consulta4' value='organism_information.Org_ID,organism_information.Alias,organism_information.Isolated_by,organism_information.Date_of_Isolation,organism_information.Origin,organism_information.Additional_Comments'>\n\
        <input type='hidden' name='CommentsPres' id='CommentsPres'/>\n\
         <input type='button' value='Result Count' onclick='Result()' >\n\
         ";
          var div3=document.getElementById("smartSearchDesc_0") ;
            div3.innerHTML="Insert Comments:";
    }


     if (id == "Org_Name_DNA") {
          var div2=document.getElementById("smartParmLoadingDiv_0") ;
          div2.innerHTML="\n\
         <input type='text'  id='txtNameDNA' name='txtNameDNA'>\n\
          <input type='hidden' id='tabla6' name='tabla6' value='dna'>\n\
          <input type='hidden' name='consulta5' value='organism_information.Org_ID,organism_information.Alias,organism_information.Isolated_by,organism_information.Date_of_Isolation,organism_information.Origin,organism_information.Additional_Comments'>\n\
        <input type='hidden' name='NameDNA' id='NameDNA'/>\n\
         <input type='button' value='Result Count' onclick='Result()' >\n\
          ";
          var div3=document.getElementById("smartSearchDesc_0") ;
            div3.innerHTML="Select Organism Name:";
    }
   if (id == "Extraction_Method_Name") {
          var div2=document.getElementById("smartParmLoadingDiv_0") ;
          div2.innerHTML="\n\
           <?php $meses = $arrExtraction; $meses1 = $arrExtraction1; $nombre = "txtExtraMethod"; $resultado = lista($nombre, $meses, $meses1); echo $resultado;?>\n\
                  <input type='hidden' id='tabla6' name='tabla6' value='dna'>\n\
          <input type='hidden' name='consulta5' value='organism_information.Org_ID,organism_information.Alias,organism_information.Isolated_by,organism_information.Date_of_Isolation,organism_information.Origin,organism_information.Additional_Comments'>\n\
        <input type='hidden' name='ExtraMethod' id='ExtraMethod'/>\n\
         <input type='button' value='Result Count' onclick='Result()' >\n\
         ";
          var div3=document.getElementById("smartSearchDesc_0") ;
            div3.innerHTML="Select Extraction Method:";
    }
  
   if (id == "Date_of_preservationD") {
          var div2=document.getElementById("smartParmLoadingDiv_0") ;
          div2.innerHTML="\n\
         Initial <input type='date'  id='txtDatePresD1' name='txtDatePresD1'>\n\
              Final <input type='date'  id='txtDatePresD2' name='txtDatePresD2'>\n\
          <input type='hidden' id='tabla6' name='tabla6' value='dna'>\n\
          <input type='hidden' name='consulta5' value='organism_information.Org_ID,organism_information.Alias,organism_information.Isolated_by,organism_information.Date_of_Isolation,organism_information.Origin,organism_information.Additional_Comments'>\n\
        <input type='hidden' name='DatePreserD' id='DatePreserD'/>\n\
         <input type='button' value='Result Count' onclick='Result()'>\n\
        ";
          var div3=document.getElementById("smartSearchDesc_0") ;
            div3.innerHTML="Select Date of preservation:";
    }
   if (id == "Concentration_DNA") {
          var div2=document.getElementById("smartParmLoadingDiv_0") ;
          div2.innerHTML="\n\
         <input type='text'  id='txtConcentration_DNA' name='txtConcentration_DNA'>\n\
          <input type='hidden' id='tabla6' name='tabla6' value='dna'>\n\
          <input type='hidden' name='consulta5' value='organism_information.Org_ID,organism_information.Alias,organism_information.Isolated_by,organism_information.Date_of_Isolation,organism_information.Origin,organism_information.Additional_Comments'>\n\
        <input type='hidden' name='ConcentrationDNA' id='ConcentrationDNA'/>\n\
         <input type='button' value='Result Count' onclick='Result()' >\n\
          ";
          var div3=document.getElementById("smartSearchDesc_0") ;
            div3.innerHTML="Select Concentration:";
    }
  
   if (id == "Volume_DNA") {
          var div2=document.getElementById("smartParmLoadingDiv_0") ;
          div2.innerHTML="\n\
         <input type='time'  id='txtVolume_DNA' name='txtVolume_DNA'>\n\
          <input type='hidden' id='tabla6' name='tabla6' value='dna'>\n\
          <input type='hidden' name='consulta5' value='organism_information.Org_ID,organism_information.Alias,organism_information.Isolated_by,organism_information.Date_of_Isolation,organism_information.Origin,organism_information.Additional_Comments'>\n\
        <input type='hidden' name='VolumeDNA' id='VolumeDNA'/>\n\
         <input type='button' value='Result Count' onclick='Result()'>\n\
          ";
          var div3=document.getElementById("smartSearchDesc_0") ;
            div3.innerHTML="Insert Volume:";
    }
     if (id == "User_DNA") {
          var div2=document.getElementById("smartParmLoadingDiv_0") ;
          div2.innerHTML="\n\
           <?php $meses = $arrUser; $meses1 = $arrUser1; $nombre = "txtUser_DNA"; $resultado= lista($nombre, $meses, $meses1); echo $resultado;?>\n\
                <input type='hidden' id='tabla6' name='tabla6' value='dna'>\n\
          <input type='hidden' name='consulta5' value='organism_information.Org_ID,organism_information.Alias,organism_information.Isolated_by,organism_information.Date_of_Isolation,organism_information.Origin,organism_information.Additional_Comments'>\n\
        <input type='hidden' name='UserDNA' id='UserDNA'/>\n\
         <input type='button' value='Result Count' onclick='Result()' >\n\
          ";
          var div3=document.getElementById("smartSearchDesc_0") ;
            div3.innerHTML="Select Name:";
    }
    if (id == "Storage_DNA") {
          var div2=document.getElementById("smartParmLoadingDiv_0") ;
          div2.innerHTML="\n\
           <?php $meses = $arrStoragePres; $meses1 = $arrStoragePres1; $nombre = "txtStorage_DNA"; $resultado = lista($nombre, $meses, $meses1); echo $resultado;?>\n\
                  <input type='hidden' id='tabla6' name='tabla6' value='dna'>\n\
          <input type='hidden' name='consulta5' value='organism_information.Org_ID,organism_information.Alias,organism_information.Isolated_by,organism_information.Date_of_Isolation,organism_information.Origin,organism_information.Additional_Comments'>\n\
        <input type='hidden' name='StorageDNA' id='StorageDNA'/>\n\
         <input type='button' value='Result Count' onclick='Result()' >\n\
         ";
          var div3=document.getElementById("smartSearchDesc_0") ;
            div3.innerHTML="Insert  Storage Name:";
    }
     

     if (id == "Org_Name_Genetic") {
          var div2=document.getElementById("smartParmLoadingDiv_0") ;
          div2.innerHTML="\n\
         <input type='text'  id='txtNameGenetic' name='txtNameGenetic'>\n\
          <input type='hidden' id='tabla7' name='tabla7' value='genetic_data'>\n\
          <input type='hidden' name='consulta6' value='organism_information.Org_ID,organism_information.Alias,organism_information.Isolated_by,organism_information.Date_of_Isolation,organism_information.Origin,organism_information.Additional_Comments'>\n\
        <input type='hidden' name='NameGenetic' id='NameGenetic'/>\n\
         <input type='button' value='Result Count' onclick='Result()'>\n\
          ";
          var div3=document.getElementById("smartSearchDesc_0") ;
            div3.innerHTML="Select Organism Name:";
    }
   if (id == "Taxonomic_lineage") {
          var div2=document.getElementById("smartParmLoadingDiv_0") ;
          div2.innerHTML="\n\
         <input type='text'  id='txtTaxonomic_lineage' name='txtTaxonomic_lineage'>\n\
          <input type='hidden' id='tabla7' name='tabla7' value='genetic_data'>\n\
          <input type='hidden' name='consulta6' value='organism_information.Org_ID,organism_information.Alias,organism_information.Isolated_by,organism_information.Date_of_Isolation,organism_information.Origin,organism_information.Additional_Comments'>\n\
        <input type='hidden' name='Taxonomiclineage' id='Taxonomiclineage'/>\n\
         <input type='button' value='Result Count' onclick='Result()' >\n\
         ";
          var div3=document.getElementById("smartSearchDesc_0") ;
            div3.innerHTML="Select Taxonomic lineage:";
    }
  
   if (id == "Gene") {
          var div2=document.getElementById("smartParmLoadingDiv_0") ;
          div2.innerHTML="\n\
           <?php $meses = $arrGenes; $meses1 = $arrGenes1; $nombre = "txtGene"; $resultado = lista($nombre, $meses, $meses1); echo $resultado;?>\n\
                     <input type='hidden' id='tabla7' name='tabla7' value='genetic_data'>\n\
          <input type='hidden' name='consulta6' value='organism_information.Org_ID,organism_information.Alias,organism_information.Isolated_by,organism_information.Date_of_Isolation,organism_information.Origin,organism_information.Additional_Comments'>\n\
        <input type='hidden' name='Gene' id='Gene'/>\n\
         <input type='button' value='Result Count' onclick='Result()' >\n\
         ";
          var div3=document.getElementById("smartSearchDesc_0") ;
            div3.innerHTML="Select Gene:";
    }
   if (id == "Sequencing_Method_Name") {
          var div2=document.getElementById("smartParmLoadingDiv_0") ;
          div2.innerHTML="\n\
           <?php $meses = $arrSeqMeth;$meses1 = $arrSeqMeth1; $nombre = "txtSequenGen"; $resultado = lista($nombre, $meses, $meses1); echo $resultado;?>\n\
                  <input type='hidden' id='tabla7' name='tabla7' value='genetic_data'>\n\
          <input type='hidden' name='consulta6' value='organism_information.Org_ID,organism_information.Alias,organism_information.Isolated_by,organism_information.Date_of_Isolation,organism_information.Origin,organism_information.Additional_Comments'>\n\
        <input type='hidden' name='SequenGen' id='SequenGen'/>\n\
         <input type='button' value='Result Count' onclick='Result()'>\n\
          ";
          var div3=document.getElementById("smartSearchDesc_0") ;
                div3.innerHTML="Select Sequencing Method Name:";
    }
   if (id == "Cured_sequence") {
          var div2=document.getElementById("smartParmLoadingDiv_0") ;
          div2.innerHTML="\n\
               <input type='text'  id='txtCured_sequence' name='txtCured_sequence'>\n\
               <input type='hidden' id='tabla7' name='tabla7' value='genetic_data'>\n\
          <input type='hidden' name='consulta6' value='organism_information.Org_ID,organism_information.Alias,organism_information.Isolated_by,organism_information.Date_of_Isolation,organism_information.Origin,organism_information.Additional_Comments'>\n\
        <input type='hidden' name='Curedsequence' id='Curedsequence'/>\n\
         <input type='button' value='Result Count' onclick='Result()'>\n\
         ";
          var div3=document.getElementById("smartSearchDesc_0") ;
            div3.innerHTML="Insert Cured sequence ";
    }
   if (id == "Comments_Genetic") {
          var div2=document.getElementById("smartParmLoadingDiv_0") ;
          div2.innerHTML="\n\
         <input type='text'  id='txtComments_Genetic' name='txtComments_Genetic'>\n\
          <input type='hidden' id='tabla7' name='tabla7' value='genetic_data'>\n\
          <input type='hidden' name='consulta6' value='organism_information.Org_ID,organism_information.Alias,organism_information.Isolated_by,organism_information.Date_of_Isolation,organism_information.Origin,organism_information.Additional_Comments'>\n\
        <input type='hidden' name='CommentsGenetic' id='CommentsGenetic'/>\n\
         <input type='button' value='Result Count' onclick='Result()'>\n\
          ";
          var div3=document.getElementById("smartSearchDesc_0") ;
            div3.innerHTML="Insert Comments:";
    }
      if (id == "User_Meta") {
          var div2=document.getElementById("smartParmLoadingDiv_0") ;
          div2.innerHTML="\n\
           <?php $meses = $arrUser; $meses1 = $arrUser1; $nombre = "txtUser_Meta"; $resultado= lista($nombre, $meses, $meses1); echo $resultado;?>\n\
                  <input type='hidden' id='tabla8' name='tabla8' value='metabolic_data'>\n\
          <input type='hidden' name='consulta7' value='organism_information.Org_ID,organism_information.Alias,organism_information.Isolated_by,organism_information.Date_of_Isolation,organism_information.Origin,organism_information.Additional_Comments'>\n\
        <input type='hidden' name='UserMeta' id='UserMeta'/>\n\
         <input type='button' value='Result Count' onclick='Result()'>\n\
          </form>";
          var div3=document.getElementById("smartSearchDesc_0") ;
            div3.innerHTML="Select User Name:";
    }
   if (id == "Medium_Meta") {
          var div2=document.getElementById("smartParmLoadingDiv_0") ;
          div2.innerHTML="\n\
           <?php $meses = $arreMedium;  $meses1 = $arreMedium1; $nombre = "txtMedium_Meta"; $resultado = lista($nombre, $meses, $meses1); echo $resultado;?>\n\
                  <input type='hidden' id='tabla8' name='tabla8' value='metabolic_data'>\n\
          <input type='hidden' name='consulta7' value='organism_information.Org_ID,organism_information.Alias,organism_information.Isolated_by,organism_information.Date_of_Isolation,organism_information.Origin,organism_information.Additional_Comments'>\n\
        <input type='hidden' name='MediumMeta' id='MediumMeta'/>\n\
         <input type='button' value='Result Count' onclick='Result()' >\n\
         ";
          var div3=document.getElementById("smartSearchDesc_0") ;
            div3.innerHTML="Select Medium :";
    }
   if (id == "Temperature_Meta") {
          var div2=document.getElementById("smartParmLoadingDiv_0") ;
          div2.innerHTML="\n\
         Initial <input type='text'  id='txtTemperatureIMeta' name='txtTemperatureIMeta'>\n\
            Final  <input type='text'  id='txtTemperatureFMeta' name='txtTemperatureFMeta'>\n\
          <input type='hidden' id='tabla8' name='tabla8' value='metabolic_data'>\n\
          <input type='hidden' name='consulta7' value='organism_information.Org_ID,organism_information.Alias,organism_information.Isolated_by,organism_information.Date_of_Isolation,organism_information.Origin,organism_information.Additional_Comments'>\n\
        <input type='hidden' name='TemperatureMeta' id='TemperatureMeta'/>\n\
         <input type='button' value='Result Count' onclick='Result()' >\n\
          ";
          var div3=document.getElementById("smartSearchDesc_0") ;
            div3.innerHTML="Select Temperature :";
    }
   if (id == "Agitation_Meta") {
          var div2=document.getElementById("smartParmLoadingDiv_0") ;
          div2.innerHTML="\n\
         <input type='time'  id='txtAgitation_Meta' name='txtAgitation_Meta'>\n\
          <input type='hidden' id='tabla8' name='tabla8' value='metabolic_data'>\n\
          <input type='hidden' name='consulta7' value='organism_information.Org_ID,organism_information.Alias,organism_information.Isolated_by,organism_information.Date_of_Isolation,organism_information.Origin,organism_information.Additional_Comments'>\n\
        <input type='hidden' name='AgitationMeta' id='AgitationMeta'/>\n\
         <input type='button' value='Result Count' onclick='Result()'>\n\
          ";
          var div3=document.getElementById("smartSearchDesc_0") ;
            div3.innerHTML="Insert Agitation:";
    }
   if (id == "Time_Meta") {
          var div2=document.getElementById("smartParmLoadingDiv_0") ;
          div2.innerHTML="\n\
         <input type='time'  id='txtTime_Meta' name='txtTime_Meta'>\n\
          <input type='hidden' id='tabla8' name='tabla8' value='metabolic_data'>\n\
          <input type='hidden' name='consulta7' value='organism_information.Org_ID,organism_information.Alias,organism_information.Isolated_by,organism_information.Date_of_Isolation,organism_information.Origin,organism_information.Additional_Comments'>\n\
        <input type='hidden' name='TimeMeta' id='TimeMeta'/>\n\
         <input type='button' value='Result Count' onclick='Result()' >\n\
        ";
          var div3=document.getElementById("smartSearchDesc_0") ;
            div3.innerHTML="Insert Time:";
    }
   
if (id == "pH_Meta") {
          var div2=document.getElementById("smartParmLoadingDiv_0") ;
          div2.innerHTML="\n\
               pH initial<input type='text'  id='txtpHI_Meta' name='txtpHI_Meta'>\n\
                  pH final <input type='text'  id='txtpHF_Meta' name='txtpHF_Meta'>\n\
          <input type='hidden' id='tabla8' name='tabla8' value='metabolic_data'>\n\
          <input type='hidden' name='consulta7' value='organism_information.Org_ID,organism_information.Alias,organism_information.Isolated_by,organism_information.Date_of_Isolation,organism_information.Origin,organism_information.Additional_Comments'>\n\
        <input type='hidden' name='PhMeta' id='PhMeta'/>\n\
         <input type='button' value='Result Count' onclick='Result()' >\n\
          ";
          var div3=document.getElementById("smartSearchDesc_0") ;
            div3.innerHTML="Select  PH";
    }

if (id == "OD600_Meta") {
          var div2=document.getElementById("smartParmLoadingDiv_0") ;
          div2.innerHTML="\n\
               OD600 initial<input type='text'  id='txtOD600_initialMeta' name='txtOD600_initialMeta'>\n\
                  OD600 final <input type='text'  id='txtOD600_finalMeta' name='txtOD600_finalMeta'>\n\
          <input type='hidden' id='tabla8' name='tabla8' value='metabolic_data'>\n\
          <input type='hidden' name='consulta7' value='organism_information.Org_ID,organism_information.Alias,organism_information.Isolated_by,organism_information.Date_of_Isolation,organism_information.Origin,organism_information.Additional_Comments'>\n\
        <input type='hidden' name='OD600Meta' id='OD600Meta'/>\n\
         <input type='button' value='Result Count' onclick='Result()'>\n\
        ";
          var div3=document.getElementById("smartSearchDesc_0") ;
            div3.innerHTML="Insert  OD600";
    }
    if (id == "Comments_Meta") {
          var div2=document.getElementById("smartParmLoadingDiv_0") ;
          div2.innerHTML="\n\
         <input type='time'  id='txtComments_Meta' name='txtComments_Meta'>\n\
          <input type='hidden' id='tabla8' name='tabla8' value='metabolic_data'>\n\
          <input type='hidden' name='consulta7' value='organism_information.Org_ID,organism_information.Alias,organism_information.Isolated_by,organism_information.Date_of_Isolation,organism_information.Origin,organism_information.Additional_Comments'>\n\
        <input type='hidden' name='CommentsMeta' id='CommentsMeta'/>\n\
         <input type='button' value='Result Count' onclick='Result()' >\n\
          ";
          var div3=document.getElementById("smartSearchDesc_0") ;
            div3.innerHTML="Insert Comments:";
    }
    
    
    
     if (id == "Assay_Type_Name") {
          var div2=document.getElementById("smartParmLoadingDiv_0") ;
          div2.innerHTML="\n\
           <?php $meses = $arrAssay; $meses1 = $arrAssay1; $nombre = "txtAssay_Type_Name"; $resultado = lista($nombre, $meses, $meses1); echo $resultado;?>\n\
                 <input type='hidden' id='tabla9' name='tabla9' value='bioassays_data'>\n\
          <input type='hidden' name='consulta8' value='organism_information.Org_ID,organism_information.Alias,organism_information.Isolated_by,organism_information.Date_of_Isolation,organism_information.Origin,organism_information.Additional_Comments'>\n\
        <input type='hidden' name='AssayTypeName' id='AssayTypeName'/>\n\
         <input type='button' value='Result Count' onclick='Result()' >\n\
          ";
          var div3=document.getElementById("smartSearchDesc_0") ;
            div3.innerHTML="Insert Assay Type Name :";
    }
   if (id == "Medium_Bio") {
          var div2=document.getElementById("smartParmLoadingDiv_0") ;
          div2.innerHTML="\n\
          <?php $meses = $arreMedium; $meses1 = $arreMedium1; $nombre = "txtMedium_Bio"; $resultado = lista($nombre, $meses, $meses1); echo $resultado;?>\n\
                <input type='hidden' id='tabla9' name='tabla9' value='bioassays_data'>\n\
          <input type='hidden' name='consulta8' value='organism_information.Org_ID,organism_information.Alias,organism_information.Isolated_by,organism_information.Date_of_Isolation,organism_information.Origin,organism_information.Additional_Comments'>\n\
        <input type='hidden' name='MediumBio' id='MediumBio'/>\n\
         <input type='button' value='Result Count'onclick='Result()' >\n\
        ";
          var div3=document.getElementById("smartSearchDesc_0") ;
            div3.innerHTML="Insert medium:";
    }
   if (id == "Temperature_Bio") {
          var div2=document.getElementById("smartParmLoadingDiv_0") ;
          div2.innerHTML="\n\
         Initial<input type='text'  id='txtTempInicialBio' name='txtTempInicialBio'>\n\
            Final <input type='text'  id='txtTempFinalBio' name='txtTempFinalBio'>\n\
          <input type='hidden' id='tabla9' name='tabla9' value='bioassays_data'>\n\
          <input type='hidden' name='consulta8' value='organism_information.Org_ID,organism_information.Alias,organism_information.Isolated_by,organism_information.Date_of_Isolation,organism_information.Origin,organism_information.Additional_Comments'>\n\
        <input type='hidden' name='TemperatureBio' id='TemperatureBio'/>\n\
         <input type='button' value='Result Count' onclick='Result()'>\n\
         ";
          var div3=document.getElementById("smartSearchDesc_0") ;
            div3.innerHTML="Select temperature:";
    }
   if (id == "Inhibition") {
          var div2=document.getElementById("smartParmLoadingDiv_0") ;
          div2.innerHTML="\n\
         <input type='text'  id='txtInhibition' name='txtInhibition'>\n\
          <input type='hidden' id='tabla9' name='tabla9' value='bioassays_data'>\n\
          <input type='hidden' name='consulta8' value='organism_information.Org_ID,organism_information.Alias,organism_information.Isolated_by,organism_information.Date_of_Isolation,organism_information.Origin,organism_information.Additional_Comments'>\n\
        <input type='hidden' name='InhibitionBio' id='InhibitionBio'/>\n\
         <input type='button' value='Result Count' onclick='Result()' >\n\
          ";
          var div3=document.getElementById("smartSearchDesc_0") ;
            div3.innerHTML="Insert Inhibition:";
    }
       if (id == "Inhibition_measurament") {
          var div2=document.getElementById("smartParmLoadingDiv_0") ;
          div2.innerHTML="\n\
         <input type='text'  id='txtInhiMeasu' name='txtInhiMeasu'>\n\
          <input type='hidden' id='tabla9' name='tabla9' value='bioassays_data'>\n\
          <input type='hidden' name='consulta8' value='organism_information.Org_ID,organism_information.Alias,organism_information.Isolated_by,organism_information.Date_of_Isolation,organism_information.Origin,organism_information.Additional_Comments'>\n\
        <input type='hidden' name='InhiMeasu' id='InhiMeasu'/>\n\
         <input type='button' value='Result Count' onclick='Result()' >\n\
          ";
          var div3=document.getElementById("smartSearchDesc_0") ;
            div3.innerHTML="Insert Inhibition measurament:";
    }
       if (id == "Antagonist_strain") {
          var div2=document.getElementById("smartParmLoadingDiv_0") ;
          div2.innerHTML="\n\
          <?php $meses=$antagosn; $meses1=$antagosn1; $nombre = "txtAntagonist_strain"; $resultado = lista($nombre, $meses, $meses1); echo $resultado;?>\n\
                  <input type='hidden' id='tabla9' name='tabla9' value='bioassays_data'>\n\
          <input type='hidden' name='consulta8' value='organism_information.Org_ID,organism_information.Alias,organism_information.Isolated_by,organism_information.Date_of_Isolation,organism_information.Origin,organism_information.Additional_Comments'>\n\
        <input type='hidden' name='Antagoniststrain' id='Antagoniststrain'/>\n\
         <input type='button' value='Result Count' onclick='Result()'>\n\
          ";
          var div3=document.getElementById("smartSearchDesc_0") ;
            div3.innerHTML="Select Antagonist strain:";
    }
       if (id == "Comments_bio") {
          var div2=document.getElementById("smartParmLoadingDiv_0") ;
          div2.innerHTML="\n\
         <input type='text'  id='txtComments_bio' name='txtComments_bio'>\n\
          <input type='hidden' id='tabla9' name='tabla9' value='bioassays_data'>\n\
          <input type='hidden' name='consulta8' value='organism_information.Org_ID,organism_information.Alias,organism_information.Isolated_by,organism_information.Date_of_Isolation,organism_information.Origin,organism_information.Additional_Comments'>\n\
        <input type='hidden' name='Commentsbio' id='Commentsbio'/>\n\
         <input type='button' value='Result Count' onclick='Result()'>\n\
         ";
          var div3=document.getElementById("smartSearchDesc_0") ;
            div3.innerHTML="Insert Comments:";
    }
        if (id == "Coordinates") {
          var div2=document.getElementById("smartParmLoadingDiv_0") ;
          div2.innerHTML="\n\
         Longitude<input type='text'  id='txtLongi' name='txtLongi'>\n\
             Latitude <input type='text'  id='txtLat' name='txtLat'>\n\
                <input type='hidden' id='tabla10' name='tabla10' value='maps'>\n\
          <input type='hidden' name='consulta9' value='organism_information.Org_ID,organism_information.Alias,organism_information.Isolated_by,organism_information.Date_of_Isolation,organism_information.Origin,organism_information.Additional_Comments'>\n\
        <input type='hidden' name='Cordena' id='Cordena'/>\n\
         <input type='button' value='Result Count' onclick='Result()'>\n\
         ";
          var div3=document.getElementById("smartSearchDesc_0") ;
            div3.innerHTML="Insert Comments:";
    }
    
}

function MuestraOrganismo1(id,uno)
{
    
    if (id == "Alias") {
         
        
           
            
          var div2=document.getElementById("smartParmLoadingDiv"+uno) ;
            
          div2.innerHTML="\n\
              <?php $meses = $arre; $meses1 = $arre1;  $nombre ="txtA".$inc;?> <?php $resultado= lista($nombre, $meses, $meses1);?> <?php echo $resultado; $inc=$inc+1;?>\n\
  <input style='display:none;' type='checkbox' id='tabla1' name='tabla1' value='organism_information' >\n\
       <input type='hidden' name='consulta' value='organism_information.Org_ID,organism_information.Alias,organism_information.Isolated_by,organism_information.Date_of_Isolation,organism_information.Origin,organism_information.Additional_Comments'>\n\
<input type='hidden' name='jugador"+uno+"' id='jugador"+uno+"'/>\n\
<input type='button' value='Result Count' onclick='Result()'>";
              var div3=document.getElementById("smartSearchDesc"+uno) ;
            div3.innerHTML="Solo inserta el Alias del organismo";
         
    }
     if (id == "Isolated_by") {
        
        var div2=document.getElementById("smartParmLoadingDiv"+uno) ;
          div2.innerHTML="\n\
          <?php $meses = $arreIso; $meses1= $arreIso1; $nombre ="txtInso".$inc1;?> <?php $resultado= lista($nombre, $meses, $meses1);?> <?php echo $resultado; $inc=$inc+1;?>\n\
          <input type='hidden' name='Insolated"+uno+"' id='Insolated"+uno+"'/>\n\
                <input style='display:none;' type='checkbox' id='tabla1' name='tabla1' value='organism_information' >\n\
                     <input type='hidden' name='consulta' value='organism_information.Org_ID,organism_information.Alias,organism_information.Isolated_by,organism_information.Date_of_Isolation,organism_information.Origin,organism_information.Additional_Comments'>\n\
                   <input type='button' value='Result Count'  onclick='Result()'> ";
           var div3=document.getElementById("smartSearchDesc"+uno) ;
            div3.innerHTML="Select User:";
    }
       if (id == "Date_of_Isolation") {
          var div2=document.getElementById("smartParmLoadingDiv"+uno) ;
          div2.innerHTML="\n\
          Initial: <input type='date'  id='txtfechaIni"+uno+"' name='txtfechaIni"+uno+"'>\n\
                Final: <input type='date'  id='txtfechaFin"+uno+"' name='txtfechaFin"+uno+"'>\n\
          <input style='display:none;' type='hidden' id='tabla1' name='tabla1' value='organism_information'>\n\
           <input type='hidden' name='consulta' value='organism_information.Org_ID,organism_information.Alias,organism_information.Isolated_by,organism_information.Date_of_Isolation,organism_information.Origin,organism_information.Additional_Comments'>\n\
        <input type='hidden' name='DateInsolated"+uno+"' id='DateInsolated"+uno+"'/>\n\
         <input type='button' value='Result Count' onclick='Result()'>\n\
          ";
          var div3=document.getElementById("smartSearchDesc"+uno) ;
            div3.innerHTML="Select Dates:";
    }
     if (id == "Origin") {
          var div2=document.getElementById("smartParmLoadingDiv"+uno) ;
          div2.innerHTML="\n\
           <select onChange='mostrar1(this.value,"+uno+");' id='txtOrigin"+uno+"' name='txtOrigin"+uno+"'><option>Plant_associated</option><option>Host_associated</option> <option>Free_living</option> </select>\n\
        <select id='proveedor"+uno+"' name='proveedor"+uno+"' onchange='MyC1("+uno+");'></select>\n\
        <select id='producto"+uno+"' name='producto"+uno+"' style='display:none'></select>\n\
          <input style='display:none;' type='checkbox' id='tabla1' name='tabla1' value='organism_information'>\n\
         <input type='hidden' name='consulta' value='organism_information.Org_ID,organism_information.Alias,organism_information.Isolated_by,organism_information.Date_of_Isolation,organism_information.Origin,organism_information.Additional_Comments'>\n\
        <input type='hidden' name='Origin"+uno+"' id='Origin"+uno+"'/>\n\
         <input type='button' value='Result Count' onclick='Result()' >\n\
         ";
          var div3=document.getElementById("smartSearchDesc"+uno) ;
            div3.innerHTML="Select the origin:";
    }

   if (id == "CommentsOrg") {
          var div2=document.getElementById("smartParmLoadingDiv"+uno) ;
          div2.innerHTML="\n\
         <textarea  id='txtCommentsOrig"+uno+"' name='txtCommentsOrig"+uno+"'></textarea>\n\
          <input style='display:none;' type='checkbox' id='tabla1' name='tabla1' value='organism_information'>\n\
           <input type='hidden' name='consulta' value='organism_information.Org_ID,organism_information.Alias,organism_information.Isolated_by,organism_information.Date_of_Isolation,organism_information.Origin,organism_information.Additional_Comments'>\n\
        <input type='hidden' name='CommentsOrigin"+uno+"' id='CommentsOrigin"+uno+"'/>\n\
         <input type='button' value='Result Count' onclick='Result()'>\n\
          ";
          var div3=document.getElementById("smartSearchDesc"+uno) ;
            div3.innerHTML="Search comments:";
    }

   if (id == "Name_Org_Macro") {
          var div2=document.getElementById("smartParmLoadingDiv"+uno) ;
          div2.innerHTML="\n\
         <input type='text'  id='txtNameMacro"+uno+"' name='txtNameMacro"+uno+"'>\n\
          <input style='display:none;' type='checkbox' id='tabla2' name='tabla2' value='macroscopic_morphology' checked>\n\
          <input type='hidden' name='consulta1' value='organism_information.Org_ID,organism_information.Alias,organism_information.Isolated_by,organism_information.Date_of_Isolation,organism_information.Origin,organism_information.Additional_Comments'>\n\
        <input type='hidden' name='NameMacro"+uno+"' id='NameMacro"+uno+"'/>\n\
         <input type='button' value='Result Count' onclick='Result()'>\n\
          ";
          var div3=document.getElementById("smartSearchDesc"+uno) ;
            div3.innerHTML="Insert organism name :";
    }
   if (id == "Medium_Macro") {
          var div2=document.getElementById("smartParmLoadingDiv"+uno) ;
          div2.innerHTML="\n\
           <?php $meses = $arreMedium; $meses1 = $arreMedium1; $nombre = "txtMediumMacro".$inc2; $resultado = lista($nombre, $meses, $meses1); echo $resultado;?>\n\
          <input style='display:none;' type='checkbox' id='tabla2' name='tabla2' value='macroscopic_morphology' checked>\n\
          <input type='hidden' name='consulta1' value='organism_information.Org_ID,organism_information.Alias,organism_information.Isolated_by,organism_information.Date_of_Isolation,organism_information.Origin,organism_information.Additional_Comments'>\n\
        <input type='hidden' name='MediumMacro"+uno+"' id='MediumMacro"+uno+"'/>\n\
         <input type='button' value='Result Count' onclick='Result()' >\n\
          ";
          var div3=document.getElementById("smartSearchDesc"+uno) ;
            div3.innerHTML="Insert medium:";
    }
   if (id == "Temperature_Macro") {
          var div2=document.getElementById("smartParmLoadingDiv"+uno) ;
          div2.innerHTML="\n\
         Initial <input type='text'  id='txtTempInicial"+uno+"' name='txtTempInicial"+uno+"'>\n\
            Final <input type='text'  id='txtTempFinal"+uno+"' name='txtTempFinal"+uno+"'>\n\
          <input  style='display:none;'type='text' id='tabla2' name='tabla2' value='macroscopic_morphology' >\n\
          <input type='hidden' name='consulta1' value='organism_information.Org_ID,organism_information.Alias,organism_information.Isolated_by,organism_information.Date_of_Isolation,organism_information.Origin,organism_information.Additional_Comments'>\n\
        <input type='hidden' name='TempMacro"+uno+"' id='TempMacro"+uno+"'/>\n\
         <input type='button' value='Result Count' onclick='Result()'>\n\
          ";
          var div3=document.getElementById("smartSearchDesc"+uno) ;
            div3.innerHTML="Select Temperature:";
    }
   if (id == "Agitation_Macro") {
          var div2=document.getElementById("smartParmLoadingDiv"+uno) ;
          div2.innerHTML="\n\
         <input type='text'  id='txtAgitationMacro"+uno+"' name='txtAgitationMacro"+uno+"'>\n\
          <input style='display:none;' type='checkbox' id='tabla2' name='tabla2' value='macroscopic_morphology' checked>\n\
          <input type='hidden' name='consulta1' value='organism_information.Org_ID,organism_information.Alias,organism_information.Isolated_by,organism_information.Date_of_Isolation,organism_information.Origin,organism_information.Additional_Comments'>\n\
        <input type='hidden' name='AgritationMacro"+uno+"' id='AgritationMacro"+uno+"'/>\n\
         <input type='button' value='Result Count' onclick='Result()'>\n\
          ";
          var div3=document.getElementById("smartSearchDesc"+uno) ;
            div3.innerHTML="Insert Agitation:";
    }
   if (id == "Age_Macro") {
          var div2=document.getElementById("smartParmLoadingDiv"+uno) ;
          div2.innerHTML=" \n\
         <input type='datatime'  id='txtAgeMacro"+uno+"' name='txtAgeMacro"+uno+"'>\n\
          <input type='hidden' id='tabla2' name='tabla2' value='macroscopic_morphology'>\n\
          <input type='hidden' name='consulta1' value='organism_information.Org_ID,organism_information.Alias,organism_information.Isolated_by,organism_information.Date_of_Isolation,organism_information.Origin,organism_information.Additional_Comments'>\n\
        <input type='hidden' name='AgeMacro"+uno+"' id='AgeMacro"+uno+"'/>\n\
         <input type='button' value='Result Count' onclick='Result()' >\n\
          ";
          var div3=document.getElementById("smartSearchDesc"+uno) ;
            div3.innerHTML="Insert Age";
    }
   if (id == "Size") {
          var div2=document.getElementById("smartParmLoadingDiv"+uno) ;
          div2.innerHTML="\n\
        Initial: <input type='text'  id='txtSizeIMacro"+uno+"' name='txtSizeIMacro"+uno+"'>\n\
            Final: <input type='text'  id='txtSizeFMacro"+uno+"' name='txtSizeFMacro"+uno+"'>\n\
          <input type='hidden' id='tabla2' name='tabla2' value='macroscopic_morphology'>\n\
          <input type='hidden' name='consulta1' value='organism_information.Org_ID,organism_information.Alias,organism_information.Isolated_by,organism_information.Date_of_Isolation,organism_information.Origin,organism_information.Additional_Comments'>\n\
        <input type='hidden' name='SizeMacro"+uno+"' id='SizeMacro"+uno+"'/>\n\
         <input type='button' value='Result Count'onclick='Result()'>\n\
         ";
          var div3=document.getElementById("smartSearchDesc"+uno) ;
            div3.innerHTML="Insert size:";
    }
   if (id == "Surface") {
          var div2=document.getElementById("smartParmLoadingDiv"+uno) ;
          div2.innerHTML="\n\
           <?php $meses = $arreSurface; $meses1 = $arreSurface1; $nombre = "txtsurface".$inc3; $resultado = lista($nombre, $meses, $meses1); echo $resultado;?>\n\
                 <input type='hidden' id='tabla2' name='tabla2' value='macroscopic_morphology'>\n\
          <input type='hidden' name='consulta1' value='organism_information.Org_ID,organism_information.Alias,organism_information.Isolated_by,organism_information.Date_of_Isolation,organism_information.Origin,organism_information.Additional_Comments'>\n\
        <input type='hidden' name='SurfaceMacro"+uno+"' id='SurfaceMacro"+uno+"'/>\n\
         <input type='button' value='Result Count' oonclick='Result()'>\n\
         ";
          var div3=document.getElementById("smartSearchDesc"+uno) ;
            div3.innerHTML="Select Surface:";
    }
   if (id == "Name_Org_Micro") { 
          var div2=document.getElementById("smartParmLoadingDiv"+uno) ;
          div2.innerHTML="\n\
         <input type='text'  id='txtNameMicro"+uno+"' name='txtNameMicro"+uno+"'>\n\
          <input type='hidden' id='tabla3' name='tabla3' value='microscopic_morphology'>\n\
          <input type='hidden' name='consulta2' value='organism_information.Alias'>\n\
        <input type='hidden' name='NameMicro"+uno+"' id='NameMicro"+uno+"'/>\n\
         <input type='button' value='Result Count' onclick='Result()' >\n\
         ";
          var div3=document.getElementById("smartSearchDesc"+uno) ;
            div3.innerHTML="Select Organism Name:";
    }
   if (id == "Medium_Micro") {
          var div2=document.getElementById("smartParmLoadingDiv"+uno) ;
          div2.innerHTML="\n\
             <?php $meses = $arreMedium; $meses1 = $arreMedium1; $nombre = "txtMediumMmicro".$inc4; $resultado = lista($nombre, $meses, $meses1); echo $resultado;?>\n\
                  <input type='hidden' id='tabla3' name='tabla3' value='microscopic_morphology'>\n\
          <input type='hidden' name='consulta2' value='organism_information.Org_ID,organism_information.Alias,organism_information.Isolated_by,organism_information.Date_of_Isolation,organism_information.Origin,organism_information.Additional_Comments'>\n\
        <input type='hidden' name='MediumMicro"+uno+"' id='MediumMicro"+uno+"'/>\n\
         <input type='button' value='Result Count' onclick='Result()' >\n\
        ";
          var div3=document.getElementById("smartSearchDesc"+uno) ;
            div3.innerHTML="Select Medium:";
    }
   if (id == "Temperature_Micro") {
          var div2=document.getElementById("smartParmLoadingDiv"+uno) ;
          div2.innerHTML="\n\
         Initial<input type='text'  id='txtTemperatureIMicro"+uno+"' name='txtTemperatureIMicro"+uno+"'>\n\
            Final  <input type='text'  id='txtTemperatureFMicro"+uno+"' name='txtTemperatureFMicro"+uno+"'>\n\
          <input type='hidden' id='tabla3' name='tabla3' value='microscopic_morphology'>\n\
          <input type='hidden' name='consulta2' value='organism_information.Org_ID,organism_information.Alias,organism_information.Isolated_by,organism_information.Date_of_Isolation,organism_information.Origin,organism_information.Additional_Comments'>\n\
        <input type='hidden' name='TemperatureMicro"+uno+"' id='TemperatureMicro"+uno+"'/>\n\
         <input type='button' value='Result Count' onclick='Result()'>\n\
          ";
          var div3=document.getElementById("smartSearchDesc"+uno) ;
            div3.innerHTML="Select Temperature:";
    }
   if (id == "Agitation_Micro") {
          var div2=document.getElementById("smartParmLoadingDiv"+uno) ;
          div2.innerHTML="\n\
         <input type='text'  id='txtAgitationMi"+uno+"' name='txtAgitationMi"+uno+"'>\n\
          <input type='hidden' id='tabla3' name='tabla3' value='microscopic_morphology'>\n\
          <input type='hidden' name='consulta2' value='organism_information.Org_ID,organism_information.Alias,organism_information.Isolated_by,organism_information.Date_of_Isolation,organism_information.Origin,organism_information.Additional_Comments'>\n\
        <input type='hidden' name='AgitationMicro"+uno+"' id='AgitationMicro"+uno+"'/>\n\
         <input type='button' value='Result Count' onclick='Result()'>\n\
          ";
          var div3=document.getElementById("smartSearchDesc"+uno) ;
            div3.innerHTML="Insert the agitation:";
    }
   if (id == "Age_Micro") {
          var div2=document.getElementById("smartParmLoadingDiv"+uno) ;
          div2.innerHTML="\n\
         <input type='datetime'  id='txtAgeMicro"+uno+"' name='txtAgeMicro"+uno+"'>\n\
          <input type='hidden' id='tabla3' name='tabla3' value='microscopic_morphology'>\n\
          <input type='hidden' name='consulta2' value='organism_information.Org_ID,organism_information.Alias,organism_information.Isolated_by,organism_information.Date_of_Isolation,organism_information.Origin,organism_information.Additional_Comments'>\n\
        <input type='hidden' name='AgeMicro"+uno+"' id='AgeMicro"+uno+"'/>\n\
         <input type='button' value='Result Count' onclick='Result()'>\n\
         ";
          var div3=document.getElementById("smartSearchDesc"+uno) ;
            div3.innerHTML="Insert Age:";
    }
   if (id == "Axis") {
          var div2=document.getElementById("smartParmLoadingDiv"+uno) ;
          div2.innerHTML="\n\
               Short<input type='text'  id='txtAxis_short"+uno+"' name='txtAxis_short"+uno+"'>\n\
                   Long<input type='text'  id='txtAxis_long"+uno+"' name='txtAxis_long"+uno+"'>\n\
          <input type='hidden' id='tabla3' name='tabla3' value='microscopic_morphology'>\n\
          <input type='hidden' name='consulta2' value='organism_information.Org_ID,organism_information.Alias,organism_information.Isolated_by,organism_information.Date_of_Isolation,organism_information.Origin,organism_information.Additional_Comments'>\n\
        <input type='hidden' name='Axislong"+uno+"' id='Axislong"+uno+"'/>\n\
         <input type='button' value='Result Count' onclick='Result()'>\n\
          ";
          var div3=document.getElementById("smartSearchDesc"+uno) ;
            div3.innerHTML="insert Axis ";
    }
   if (id == "Motility") {
          var div2=document.getElementById("smartParmLoadingDiv"+uno) ;
          div2.innerHTML="\n\
         <select  id='txtMotility"+uno+"' name='txtMotility"+uno+"'><option>Yes</option><option>No</option></select>\n\
          <input type='hidden' id='tabla3' name='tabla3' value='microscopic_morphology'>\n\
          <input type='hidden' name='consulta2' value='organism_information.Org_ID,organism_information.Alias,organism_information.Isolated_by,organism_information.Date_of_Isolation,organism_information.Origin,organism_information.Additional_Comments'>\n\
        <input type='hidden' name='MotilityMicro"+uno+"' id='MotilityMicro"+uno+"'/>\n\
         <input type='button' value='Result Count' onclick='Result()'>\n\
          ";
          var div3=document.getElementById("smartSearchDesc"+uno) ;
            div3.innerHTML="Select Molity:";
    }
 if (id == "Aggregates") {
          var div2=document.getElementById("smartParmLoadingDiv"+uno) ;
          div2.innerHTML="\n\
         <select  id='txtAggregates"+uno+"' name='txtAggregates"+uno+"'><option>Yes</option><option>No</option></select>\n\
          <input type='hidden' id='tabla3' name='tabla3' value='microscopic_morphology'>\n\
          <input type='hidden' name='consulta2' value='organism_information.Org_ID,organism_information.Alias,organism_information.Isolated_by,organism_information.Date_of_Isolation,organism_information.Origin,organism_information.Additional_Comments'>\n\
        <input type='hidden' name='AggregatesMicro"+uno+"' id='AggregatesMicro"+uno+"'/>\n\
         <input type='button' value='Result Count' onclick='Result()' >\n\
          ";
          var div3=document.getElementById("smartSearchDesc"+uno) ;
            div3.innerHTML="Select Aggregates:";
    }
     if (id == "Biofilm_formation") {
          var div2=document.getElementById("smartParmLoadingDiv"+uno) ;
          div2.innerHTML="\n\
         <select  id='txtBiofilm_formation"+uno+"' name='txtBiofilm_formation"+uno+"'><option>Yes</option><option>No</option></select>\n\
          <input type='hidden' id='tabla3' name='tabla3' value='microscopic_morphology'>\n\
          <input type='hidden' name='consulta2' value='organism_information.Org_ID,organism_information.Alias,organism_information.Isolated_by,organism_information.Date_of_Isolation,organism_information.Origin,organism_information.Additional_Comments'>\n\
        <input type='hidden' name='Biofilm_formationMicro"+uno+"' id='Biofilm_formationMicro"+uno+"'/>\n\
         <input type='button' value='Result Count' onclick='Result()'>\n\
         ";
          var div3=document.getElementById("smartSearchDesc_0") ;
            div3.innerHTML="Select Biofilm formation:";
    }
     if (id == "Gram_test") {
          var div2=document.getElementById("smartParmLoadingDiv"+uno) ;
          div2.innerHTML="\n\
         <select  id='txtGram_test"+uno+"' name='txtGram_test"+uno+"'><option>Gram +</option><option>Gram +</option></select>\n\
          <input type='hidden' id='tabla3' name='tabla3' value='microscopic_morphology'>\n\
          <input type='hidden' name='consulta2' value='organism_information.Org_ID,organism_information.Alias,organism_information.Isolated_by,organism_information.Date_of_Isolation,organism_information.Origin,organism_information.Additional_Comments'>\n\
        <input type='hidden' name='Gram_testMicro"+uno+"' id='Gram_testMicro"+uno+"'/>\n\
         <input type='button' value='Result Count' onclick='Result()' >\n\
          ";
          var div3=document.getElementById("smartSearchDesc"+uno) ;
            div3.innerHTML="Select Gram test :";
    }
    if (id == "Org_Name_Grow") {
          var div2=document.getElementById("smartParmLoadingDiv"+uno) ;
          div2.innerHTML="\n\
         <input type='text'  id='txtNameGrow"+uno+"' name='txtNameGrow"+uno+"'>\n\
          <input type='hidden' id='tabla4' name='tabla4' value='growth_characteristics'>\n\
          <input type='hidden' name='consulta3' value='organism_information.Org_ID,organism_information.Alias,organism_information.Isolated_by,organism_information.Date_of_Isolation,organism_information.Origin,organism_information.Additional_Comments'>\n\
        <input type='hidden' name='NameGrow"+uno+"' id='NameGrow"+uno+"'/>\n\
         <input type='button' value='Result Count'onclick='Result()' >\n\
         ";
          var div3=document.getElementById("smartSearchDesc"+uno) ;
            div3.innerHTML="Select Organism Name:";
    }
   if (id == "Medium_solid") {
          var div2=document.getElementById("smartParmLoadingDiv"+uno) ;
          div2.innerHTML="\n\
          <?php $meses = $arreMedium; $meses1 = $arreMedium1; $nombre = "txtMedium_solidGrow".$inc5; $resultado = lista($nombre, $meses, $meses1); echo $resultado;?>\n\
                  <input type='hidden' id='tabla4' name='tabla4' value='growth_characteristics'>\n\
          <input type='hidden' name='consulta3' value='organism_information.Org_ID,organism_information.Alias,organism_information.Isolated_by,organism_information.Date_of_Isolation,organism_information.Origin,organism_information.Additional_Comments'>\n\
        <input type='hidden' name='Medium_solidGrow"+uno+"' id='Medium_solidGrow"+uno+"'/>\n\
         <input type='button' value='Result Count' onclick='Result()' >\n\
         ";
          var div3=document.getElementById("smartSearchDesc"+uno) ;
            div3.innerHTML="Select Medium Solid:";
    }
   if (id == "Temperature_solid") {
          var div2=document.getElementById("smartParmLoadingDiv"+uno) ;
          div2.innerHTML="\n\
         Initial <input type='text'  id='txtTemperatureSIGrow"+uno+"' name='txtTemperatureSIGrow"+uno+"'>\n\
             Final <input type='text'  id='txtTemperatureSFGrow"+uno+"' name='txtTemperatureSFGrow"+uno+"'>\n\
          <input type='hidden' id='tabla4' name='tabla4' value='growth_characteristics'>\n\
          <input type='hidden' name='consulta3' value='organism_information.Org_ID,organism_information.Alias,organism_information.Isolated_by,organism_information.Date_of_Isolation,organism_information.Origin,organism_information.Additional_Comments'>\n\
        <input type='hidden' name='TemperatureSGrow"+uno+"' id='TemperatureSGrow"+uno+"'/>\n\
         <input type='button' value='Result Count' onclick='Result()'>\n\
          ";
          var div3=document.getElementById("smartSearchDesc"+uno) ;
            div3.innerHTML="Select Temperature solid:";
    }
   if (id == "Time_solid") {
          var div2=document.getElementById("smartParmLoadingDiv"+uno) ;
          div2.innerHTML="\n\
         <input type='time'  id='txtTime_solidGrow"+uno+"' name='txtTime_solidGrow"+uno+"'>\n\
          <input type='hidden' id='tabla4' name='tabla4' value='growth_characteristics'>\n\
          <input type='hidden' name='consulta3' value='organism_information.Org_ID,organism_information.Alias,organism_information.Isolated_by,organism_information.Date_of_Isolation,organism_information.Origin,organism_information.Additional_Comments'>\n\
        <input type='hidden' name='Time_solidGrow"+uno+"' id='Time_solidGrow"+uno+"'/>\n\
         <input type='button' value='Result Count' onclick='Result()'>\n\
          ";
          var div3=document.getElementById("smartSearchDesc"+uno) ;
            div3.innerHTML="Insert Time Solid:";
    }
   if (id == "Medium_liquid") {
          var div2=document.getElementById("smartParmLoadingDiv"+uno) ;
          div2.innerHTML="\n\
          <?php $meses = $arreMedium; $meses1 = $arreMedium1; $nombre = "txtMedium_liquidGrow".$inc6; $resultado = lista($nombre, $meses, $meses1); echo $resultado;?>\n\
          <input type='hidden' id='tabla4' name='tabla4' value='growth_characteristics'>\n\
          <input type='hidden' name='consulta3' value='organism_information.Org_ID,organism_information.Alias,organism_information.Isolated_by,organism_information.Date_of_Isolation,organism_information.Origin,organism_information.Additional_Comments'>\n\
        <input type='hidden' name='Medium_liquidGrow"+uno+"' id='Medium_liquidGrow"+uno+"'/>\n\
         <input type='button' value='Result Count' onclick='Result()' >\n\
          ";
          var div3=document.getElementById("smartSearchDesc"+uno) ;
            div3.innerHTML="Insert Medium liquid:";
    }
   if (id == "Temperature_liquid") {
          var div2=document.getElementById("smartParmLoadingDiv"+uno) ;
          div2.innerHTML="\n\
              Initial <input type='text'  id='txtTempIliquidGrow"+uno+"' name='txtTempIliquidGrow"+uno+"'>\n\
                 Final  <input type='text'  id='txtTempFliquidGrow"+uno+"' name='txtTempFliquidGrow"+uno+"'>\n\
          <input type='hidden' id='tabla4' name='tabla4' value='growth_characteristics'>\n\
          <input type='hidden' name='consulta3' value='organism_information.Org_ID,organism_information.Alias,organism_information.Isolated_by,organism_information.Date_of_Isolation,organism_information.Origin,organism_information.Additional_Comments'>\n\
        <input type='hidden' name='TempLiqGrow"+uno+"' id='TempLiqGrow"+uno+"'/>\n\
         <input type='button' value='Result Count' onclick='Result()' >\n\
          ";
          var div3=document.getElementById("smartSearchDesc"+uno) ;
            div3.innerHTML="Select Temperature Liquid";
    }
   if (id == "Agitation_time") {
          var div2=document.getElementById("smartParmLoadingDiv"+uno) ;
          div2.innerHTML="\n\
         <input type='time'  id='txtAgitation_time"+uno+"' name='txtAgitation_time"+uno+"'>\n\
          <input type='hidden' id='tabla4' name='tabla4' value='growth_characteristics'>\n\
          <input type='hidden' name='consulta3' value='organism_information.Org_ID,organism_information.Alias,organism_information.Isolated_by,organism_information.Date_of_Isolation,organism_information.Origin,organism_information.Additional_Comments'>\n\
        <input type='hidden' name='Agitation_timeGrow"+uno+"' id='Agitation_timeGrow"+uno+"'/>\n\
         <input type='button' value='Result Count' onclick='Result()' >\n\
         ";
          var div3=document.getElementById("smartSearchDesc"+uno) ;
            div3.innerHTML="Insert Agitation Time:";
    }
    if (id == "Time_liquid") {
          var div2=document.getElementById("smartParmLoadingDiv"+uno) ;
          div2.innerHTML="\n\
         <input type='time'  id='txtTime_liquid"+uno+"' name='txtTime_liquid"+uno+"'>\n\
          <input type='hidden' id='tabla4' name='tabla4' value='growth_characteristics'>\n\
          <input type='hidden' name='consulta3' value='organism_information.Org_ID,organism_information.Alias,organism_information.Isolated_by,organism_information.Date_of_Isolation,organism_information.Origin,organism_information.Additional_Comments'>\n\
        <input type='hidden' name='Time_liquideGrow"+uno+"' id='Time_liquidGrow"+uno+"'/>\n\
         <input type='button' value='Result Count' onclick='Result()' >\n\
          ";
          var div3=document.getElementById("smartSearchDesc"+uno) ;
            div3.innerHTML="Insert Time liquid:";
    }

if (id == "PH") {
          var div2=document.getElementById("smartParmLoadingDiv"+uno) ;
          div2.innerHTML="\n\
               pH initial<input type='text'  id='txtpH_initialGrow"+uno+"' name='txtpH_initialGrow"+uno+"'>\n\
                  pH final <input type='text'  id='txtpH_finalGrow"+uno+"' name='txtpH_finalGrow"+uno+"'>\n\
          <input type='hidden' id='tabla4' name='tabla4' value='growth_characteristics'>\n\
          <input type='hidden' name='consulta3' value='organism_information.Org_ID,organism_information.Alias,organism_information.Isolated_by,organism_information.Date_of_Isolation,organism_information.Origin,organism_information.Additional_Comments'>\n\
        <input type='hidden' name='PhGrow"+uno+"' id='PhGrow"+uno+"'/>\n\
         <input type='button' value='Result Count' onclick='Result()' >\n\
         ";
          var div3=document.getElementById("smartSearchDesc"+uno) ;
            div3.innerHTML="Select  PH";
    }

if (id == "OD600") {
          var div2=document.getElementById("smartParmLoadingDiv"+uno) ;
          div2.innerHTML="\n\
               OD600 initial<input type='text'  id='txtOD600_initialGrow"+uno+"' name='txtpH_initialGrow"+uno+"'>\n\
                  OD600 final <input type='text'  id='txtOD600_finalGrow"+uno+"' name='txtpH_finalGrow"+uno+"'>\n\
          <input type='hidden' id='tabla4' name='tabla4' value='growth_characteristics'>\n\
          <input type='hidden' name='consulta3' value='organism_information.Org_ID,organism_information.Alias,organism_information.Isolated_by,organism_information.Date_of_Isolation,organism_information.Origin,organism_information.Additional_Comments'>\n\
        <input type='hidden' name='OD600Grow"+uno+"' id='OD600Grow"+uno+"'/>\n\
         <input type='button' value='Result Count' onclick='Result()'>\n\
          ";
          var div3=document.getElementById("smartSearchDesc"+uno) ;
            div3.innerHTML="Select  OD600";
    }
    if (id == "Extra_parameters") {
          var div2=document.getElementById("smartParmLoadingDiv"+uno) ;
          div2.innerHTML="\n\
         <input type='time'  id='txtExtra_parameters"+uno+"' name='txtExtra_parameters"+uno+"'>\n\
          <input type='hidden' id='tabla4' name='tabla4' value='growth_characteristics'>\n\
          <input type='hidden' name='consulta3' value='organism_information.Org_ID,organism_information.Alias,organism_information.Isolated_by,organism_information.Date_of_Isolation,organism_information.Origin,organism_information.Additional_Comments'>\n\
        <input type='hidden' name='ExtraparametersGrow"+uno+"' id='ExtraparametersGrow"+uno+"'/>\n\
         <input type='button' value='Result Count' onclick='Result()'>\n\
          ";
          var div3=document.getElementById("smartSearchDesc"+uno) ;
            div3.innerHTML="Insert Extra parameters:";
    }
        if (id == "Org_Name_Pres") {
          var div2=document.getElementById("smartParmLoadingDiv"+uno) ;
          div2.innerHTML="\n\
         <input type='text'  id='txtNamePres"+uno+"' name='txtNamePres"+uno+"'>\n\
          <input type='hidden' id='tabla5' name='tabla5' value='preservation_of_strains'>\n\
          <input type='hidden' name='consulta4' value='organism_information.Org_ID,organism_information.Alias,organism_information.Isolated_by,organism_information.Date_of_Isolation,organism_information.Origin,organism_information.Additional_Comments'>\n\
        <input type='hidden' name='NamePres"+uno+"' id='NamePres"+uno+"'/>\n\
         <input type='button' value='Result Count' onclick='Result()'>\n\
          ";
          var div3=document.getElementById("smartSearchDesc"+uno) ;
            div3.innerHTML="Select Organism Name:";
    }
  
   if (id == "Preservation_Method_Name") {
          var div2=document.getElementById("smartParmLoadingDiv"+uno) ;
          div2.innerHTML="\n\
          <?php $meses = $arrePreserv; $meses1 = $arrePreserv1; $nombre = "txtPreserv".$inc7; $resultado = lista($nombre, $meses, $meses1); echo $resultado;?>\n\
                  <input type='hidden' id='tabla5' name='tabla5' value='preservation_of_strains'>\n\
          <input type='hidden' name='consulta4' value='organism_information.Org_ID,organism_information.Alias,organism_information.Isolated_by,organism_information.Date_of_Isolation,organism_information.Origin,organism_information.Additional_Comments'>\n\
        <input type='hidden' name='Preservmethod"+uno+"' id='Preservmethod"+uno+"'/>\n\
         <input type='button' value='Result Count' onclick='Result()' >\n\
          ";
          var div3=document.getElementById("smartSearchDesc"+uno) ;
            div3.innerHTML="Select  preservation Method:";
    }
   if (id == "Date_of_preservation") {
          var div2=document.getElementById("smartParmLoadingDiv"+uno) ;
          div2.innerHTML="\n\
        Initial <input type='text'  id='txtDatePres1"+uno+"' name='txtDatePres1"+uno+"'>\n\
           Final <input type='text'  id='txtDatePres2"+uno+"' name='txtDatePres2"+uno+"'>\n\
          <input type='hidden' id='tabla5' name='tabla5' value='preservation_of_strains'>\n\
          <input type='hidden' name='consulta4' value='organism_information.Org_ID,organism_information.Alias,organism_information.Isolated_by,organism_information.Date_of_Isolation,organism_information.Origin,organism_information.Additional_Comments'>\n\
        <input type='hidden' name='DatePreser"+uno+"' id='DatePreser"+uno+"'/>\n\
         <input type='button' value='Result Count' onclick='Result()' >\n\
          ";
          var div3=document.getElementById("smartSearchDesc"+uno) ;
            div3.innerHTML="Select Date of preservation:";
    }
   if (id == "User_Pres") {
          var div2=document.getElementById("smartParmLoadingDiv"+uno) ;
          div2.innerHTML="\n\
           <?php $meses = $arrUser; $meses1 = $arrUser1; $nombre = "txtUser_Pres".$inc8; $resultado= lista($nombre, $meses, $meses1); echo $resultado;?>\n\
                  <input type='hidden' id='tabla5' name='tabla5' value='preservation_of_strains'>\n\
          <input type='hidden' name='consulta4' value='organism_information.Org_ID,organism_information.Alias,organism_information.Isolated_by,organism_information.Date_of_Isolation,organism_information.Origin,organism_information.Additional_Comments'>\n\
        <input type='hidden' name='UserPres"+uno+"' id='UserPres"+uno+"'/>\n\
         <input type='button' value='Result Count' onclick='Result()' >\n\
         ";
          var div3=document.getElementById("smartSearchDesc"+uno) ;
            div3.innerHTML="Select user name:";
    }
   if (id == "Number_of_vials") {
          var div2=document.getElementById("smartParmLoadingDiv"+uno) ;
          div2.innerHTML="\n\
               <input type='text'  id='txtNumber_of_vialsPres"+uno+"' name='txtNumber_of_vialsPres"+uno+"'>\n\
               <input type='hidden' id='tabla5' name='tabla5' value='preservation_of_strains'>\n\
          <input type='hidden' name='consulta4' value='organism_information.Org_ID,organism_information.Alias,organism_information.Isolated_by,organism_information.Date_of_Isolation,organism_information.Origin,organism_information.Additional_Comments'>\n\
        <input type='hidden' name='Numbervials"+uno+"' id='Numbervials"+uno+"'/>\n\
         <input type='button' value='Result Count' onclick='Result()' >\n\
          ";
          var div3=document.getElementById("smartSearchDesc"+uno) ;
            div3.innerHTML="Insert Number of vials ";
    }
   if (id == "Volume_of_vials") {
          var div2=document.getElementById("smartParmLoadingDiv"+uno) ;
          div2.innerHTML="\n\
         <input type='time'  id='txtVolume_of_vials"+uno+"' name='txtVolume_of_vials"+uno+"'>\n\
          <input type='hidden' id='tabla5' name='tabla5' value='preservation_of_strains'>\n\
          <input type='hidden' name='consulta4' value='organism_information.Org_ID,organism_information.Alias,organism_information.Isolated_by,organism_information.Date_of_Isolation,organism_information.Origin,organism_information.Additional_Comments'>\n\
        <input type='hidden' name='Volume_of_vialsPres"+uno+"' id='Volume_of_vialsPres"+uno+"'/>\n\
         <input type='button' value='Result Count' onclick='Result()' >\n\
          ";
          var div3=document.getElementById("smartSearchDesc"+uno) ;
            div3.innerHTML="Insert Volume of vials:";
    }
    if (id == "Storage_Pres") {
          var div2=document.getElementById("smartParmLoadingDiv"+uno) ;
          div2.innerHTML="\n\
           <?php $meses = $arrStoragePres; $meses1= $arrStoragePres1; $nombre = "txtStorage_Pres".$inc9; $resultado = lista($nombre, $meses, $meses1); echo $resultado;?>\n\
                   <input type='hidden' id='tabla5' name='tabla5' value='preservation_of_strains'>\n\
          <input type='hidden' name='consulta4' value='organism_information.Org_ID,organism_information.Alias,organism_information.Isolated_by,organism_information.Date_of_Isolation,organism_information.Origin,organism_information.Additional_Comments'>\n\
        <input type='hidden' name='Storage_PresePres"+uno+"' id='Storage_PresePres"+uno+"'/>\n\
         <input type='button' value='Result Count' onclick='Result()'>\n\
         ";
          var div3=document.getElementById("smartSearchDes"+uno) ;
            div3.innerHTML="Insert  Storage Name:";
    }
         if (id == "Comments_Pres") {
          var div2=document.getElementById("smartParmLoadingDiv"+uno) ;
          div2.innerHTML="\n\
         <input type='text'  id='txtComments_Pres"+uno+"' name='txtComments_Pres"+uno+"'>\n\
          <input type='hidden' id='tabla5' name='tabla5' value='preservation_of_strains'>\n\
          <input type='hidden' name='consulta4' value='organism_information.Org_ID,organism_information.Alias,organism_information.Isolated_by,organism_information.Date_of_Isolation,organism_information.Origin,organism_information.Additional_Comments'>\n\
        <input type='hidden' name='CommentsPres"+uno+"' id='CommentsPres"+uno+"'/>\n\
         <input type='button' value='Result Count' onclick='Result()' >\n\
        ";
          var div3=document.getElementById("smartSearchDesc"+uno) ;
            div3.innerHTML="Insert Comments:";
    }


     if (id == "Org_Name_DNA") {
          var div2=document.getElementById("smartParmLoadingDiv"+uno) ;
          div2.innerHTML="\n\
         <input type='text'  id='txtNameDNA"+uno+"' name='txtNameDNA"+uno+"'>\n\
          <input type='hidden' id='tabla6' name='tabla6' value='dna'>\n\
          <input type='hidden' name='consulta5' value='organism_information.Org_ID,organism_information.Alias,organism_information.Isolated_by,organism_information.Date_of_Isolation,organism_information.Origin,organism_information.Additional_Comments'>\n\
        <input type='hidden' name='NameDNA"+uno+"' id='NameDNA"+uno+"'/>\n\
         <input type='button' value='Result Count'onclick='Result()' >\n\
         ";
          var div3=document.getElementById("smartSearchDesc"+uno) ;
            div3.innerHTML="Select Organism Name:";
    }
   if (id == "Extraction_Method_Name") {
          var div2=document.getElementById("smartParmLoadingDiv"+uno) ;
          div2.innerHTML="\n\
          <?php $meses = $arrExtraction; $meses1 = $arrExtraction1; $nombre = "txtExtraMethod".$inc10; $resultado = lista($nombre, $meses, $meses1); echo $resultado;?>\n\
                  <input type='hidden' id='tabla6' name='tabla6' value='dna'>\n\
          <input type='hidden' name='consulta5' value='organism_information.Org_ID,organism_information.Alias,organism_information.Isolated_by,organism_information.Date_of_Isolation,organism_information.Origin,organism_information.Additional_Comments'>\n\
        <input type='hidden' name='ExtraMethod"+uno+"' id='ExtraMethod"+uno+"'/>\n\
         <input type='button' value='Result Count' onclick='Result()' >\n\
          ";
          var div3=document.getElementById("smartSearchDesc"+uno) ;
            div3.innerHTML="Select Extraction Method:";
    }
  
   if (id == "Date_of_preservationD") {
          var div2=document.getElementById("smartParmLoadingDiv"+uno) ;
          div2.innerHTML="\n\
         Initial <input type='date'  id='txtDatePresD1"+uno+"' name='txtDatePresD1"+uno+"'>\n\
               Final <input type='date'  id='txtDatePresD2"+uno+"' name='txtDatePresD2"+uno+"'>\n\
          <input type='hidden' id='tabla6' name='tabla6' value='dna'>\n\
          <input type='hidden' name='consulta5' value='organism_information.Org_ID,organism_information.Alias,organism_information.Isolated_by,organism_information.Date_of_Isolation,organism_information.Origin,organism_information.Additional_Comments'>\n\
        <input type='hidden' name='DatePreserD"+uno+"' id='DatePreserD"+uno+"'/>\n\
         <input type='button' value='Result Count' onclick='Result()'>\n\
         ";
          var div3=document.getElementById("smartSearchDesc"+uno) ;
            div3.innerHTML="Select Date of preservation:";
    }
   if (id == "Concentration_DNA") {
          var div2=document.getElementById("smartParmLoadingDiv"+uno) ;
          div2.innerHTML="\n\
         <input type='text'  id='txtConcentration_DNA"+uno+"' name='txtConcentration_DNA"+uno+"'>\n\
          <input type='hidden' id='tabla6' name='tabla6' value='dna'>\n\
          <input type='hidden' name='consulta5' value='organism_information.Org_ID,organism_information.Alias,organism_information.Isolated_by,organism_information.Date_of_Isolation,organism_information.Origin,organism_information.Additional_Comments'>\n\
        <input type='hidden' name='ConcentrationDNA"+uno+"' id='ConcentrationDNA"+uno+"'/>\n\
         <input type='button' value='Result Count' onclick='Result()'>\n\
         ";
          var div3=document.getElementById("smartSearchDesc"+uno) ;
            div3.innerHTML="Select Concentration:";
    }
  
   if (id == "Volume_DNA") {
          var div2=document.getElementById("smartParmLoadingDiv"+uno) ;
          div2.innerHTML="\n\
         <input type='time'  id='txtVolume_DNA"+uno+"' name='txtVolume_DNA"+uno+"'>\n\
          <input type='hidden' id='tabla6' name='tabla6' value='dna'>\n\
          <input type='hidden' name='consulta5' value='organism_information.Org_ID,organism_information.Alias,organism_information.Isolated_by,organism_information.Date_of_Isolation,organism_information.Origin,organism_information.Additional_Comments'>\n\
        <input type='hidden' name='VolumeDNA"+uno+"' id='VolumeDNA"+uno+"'/>\n\
         <input type='button' value='Result Count' onclick='Result()'>\n\
         ";
          var div3=document.getElementById("smartSearchDesc"+uno) ;
            div3.innerHTML="Insert Volume:";
    }
     if (id == "User_DNA") {
          var div2=document.getElementById("smartParmLoadingDiv"+uno) ;
          div2.innerHTML="\n\
          <?php $meses = $arrUser; $meses1 = $arrUser1;$nombre = "txtUser_DNA".$inc11; $resultado= lista($nombre, $meses, $meses1); echo $resultado;?>\n\
                  <input type='hidden' id='tabla6' name='tabla6' value='dna'>\n\
          <input type='hidden' name='consulta5' value='organism_information.Org_ID,organism_information.Alias,organism_information.Isolated_by,organism_information.Date_of_Isolation,organism_information.Origin,organism_information.Additional_Comments'>\n\
        <input type='hidden' name='UserDNA"+uno+"' id='UserDNA"+uno+"'/>\n\
         <input type='button' value='Result Count' onclick='Result()' >\n\
          ";
          var div3=document.getElementById("smartSearchDesc"+uno) ;
            div3.innerHTML="Select Name:";
    }
    if (id == "Storage_DNA") {
          var div2=document.getElementById("smartParmLoadingDiv"+uno) ;
          div2.innerHTML="\n\
           <?php $meses = $arrStoragePres; $meses1 = $arrStoragePres1; $nombre = "txtStorage_DNA".$inc12; $resultado = lista($nombre, $meses, $meses1); echo $resultado;?>\n\
                   <input type='hidden' id='tabla6' name='tabla6' value='dna'>\n\
          <input type='hidden' name='consulta5' value='organism_information.Org_ID,organism_information.Alias,organism_information.Isolated_by,organism_information.Date_of_Isolation,organism_information.Origin,organism_information.Additional_Comments'>\n\
        <input type='hidden' name='StorageDNA"+uno+"' id='StorageDNA"+uno+"'/>\n\
         <input type='button' value='Result Count' onclick='Result()'>\n\
          ";
          var div3=document.getElementById("smartSearchDesc"+uno) ;
            div3.innerHTML="Insert  Storage Name:";
    }
     

     if (id == "Org_Name_Genetic") {
          var div2=document.getElementById("smartParmLoadingDiv"+uno) ;
          div2.innerHTML="\n\
         <input type='text'  id='txtNameGenetic"+uno+"' name='txtNameGenetic"+uno+"'>\n\
          <input type='hidden' id='tabla7' name='tabla7' value='genetic_data'>\n\
          <input type='hidden' name='consulta6' value='organism_information.Org_ID,organism_information.Alias,organism_information.Isolated_by,organism_information.Date_of_Isolation,organism_information.Origin,organism_information.Additional_Comments'>\n\
        <input type='hidden' name='NameGenetic"+uno+"' id='NameGenetic"+uno+"'/>\n\
         <input type='button' value='Result Count' onclick='Result()'>\n\
         ";
          var div3=document.getElementById("smartSearchDesc"+uno) ;
            div3.innerHTML="Select Organism Name:";
    }
   if (id == "Taxonomic_lineage") {
          var div2=document.getElementById("smartParmLoadingDiv"+uno) ;
          div2.innerHTML="\n\
         <input type='text'  id='txtTaxonomic_lineage"+uno+"' name='txtTaxonomic_lineage"+uno+"'>\n\
          <input type='hidden' id='tabla7' name='tabla7' value='genetic_data'>\n\
          <input type='hidden' name='consulta6' value='organism_information.Org_ID,organism_information.Alias,organism_information.Isolated_by,organism_information.Date_of_Isolation,organism_information.Origin,organism_information.Additional_Comments'>\n\
        <input type='hidden' name='Taxonomiclineage"+uno+"' id='Taxonomiclineage"+uno+"'/>\n\
         <input type='button' value='Result Count' onclick='Result()' >\n\
        ";
          var div3=document.getElementById("smartSearchDesc"+uno) ;
            div3.innerHTML="Select Taxonomic lineage:";
    }
  
   if (id == "Gene") {
          var div2=document.getElementById("smartParmLoadingDiv"+uno) ;
          div2.innerHTML="\n\
           <?php $meses = $arrGenes;$meses1 = $arrGenes1; $nombre = "txtGene".$inc13; $resultado = lista($nombre, $meses, $meses1); echo $resultado;?>\n\
                   <input type='hidden' id='tabla7' name='tabla7' value='genetic_data'>\n\
          <input type='hidden' name='consulta6' value='organism_information.Org_ID,organism_information.Alias,organism_information.Isolated_by,organism_information.Date_of_Isolation,organism_information.Origin,organism_information.Additional_Comments'>\n\
        <input type='hidden' name='Gene"+uno+"' id='Gene"+uno+"'/>\n\
         <input type='button' value='Result Count' onclick='Result()'>\n\
        ";
          var div3=document.getElementById("smartSearchDesc"+uno) ;
            div3.innerHTML="Select Gene:";
    }
   if (id == "Sequencing_Method_Name") {
          var div2=document.getElementById("smartParmLoadingDiv"+uno) ;
          div2.innerHTML="\n\
           <?php $meses = $arrSeqMeth; $meses1 = $arrSeqMeth1; $nombre = "txtSequenGen".$inc14; $resultado = lista($nombre, $meses, $meses1); echo $resultado;?>\n\
                   <input type='hidden' id='tabla7' name='tabla7' value='genetic_data'>\n\
          <input type='hidden' name='consulta6' value='organism_information.Org_ID,organism_information.Alias,organism_information.Isolated_by,organism_information.Date_of_Isolation,organism_information.Origin,organism_information.Additional_Comments'>\n\
        <input type='hidden' name='SequenGen"+uno+"' id='SequenGen"+uno+"'/>\n\
         <input type='button' value='Result Count' onclick='Result()'>\n\
          ";
          var div3=document.getElementById("smartSearchDesc"+uno) ;
                div3.innerHTML="Select Sequencing Method Name:";
    }
   if (id == "Cured_sequence") {
          var div2=document.getElementById("smartParmLoadingDiv"+uno) ;
          div2.innerHTML="\n\
               <input type='text'  id='txtCured_sequence"+uno+"' name='txtCured_sequence"+uno+"'>\n\
               <input type='hidden' id='tabla7' name='tabla7' value='genetic_data'>\n\
          <input type='hidden' name='consulta6' value='organism_information.Org_ID,organism_information.Alias,organism_information.Isolated_by,organism_information.Date_of_Isolation,organism_information.Origin,organism_information.Additional_Comments'>\n\
        <input type='hidden' name='Curedsequence"+uno+"' id='Curedsequence"+uno+"'/>\n\
         <input type='button' value='Result Count' onclick='Result()'>\n\
        ";
          var div3=document.getElementById("smartSearchDesc"+uno) ;
            div3.innerHTML="Insert Cured sequence ";
    }
   if (id == "Comments_Genetic") {
          var div2=document.getElementById("smartParmLoadingDiv"+uno) ;
          div2.innerHTML="\n\
         <input type='text'  id='txtComments_Genetic"+uno+"' name='txtComments_Genetic"+uno+"'>\n\
          <input type='hidden' id='tabla7' name='tabla7' value='genetic_data'>\n\
          <input type='hidden' name='consulta6' value='organism_information.Org_ID,organism_information.Alias,organism_information.Isolated_by,organism_information.Date_of_Isolation,organism_information.Origin,organism_information.Additional_Comments'>\n\
        <input type='hidden' name='CommentsGenetic"+uno+"' id='CommentsGenetic"+uno+"'/>\n\
         <input type='button' value='Result Count' onclick='Result()' >\n\
          ";
          var div3=document.getElementById("smartSearchDesc"+uno) ;
            div3.innerHTML="Insert Comments:";
    }
      if (id == "User_Meta") {
          var div2=document.getElementById("smartParmLoadingDiv"+uno) ;
          div2.innerHTML="\n\
           <?php $meses = $arrUser; $meses1= $arrUser1; $nombre = "txtUser_Meta".$inc15; $resultado= lista($nombre, $meses, $meses1); echo $resultado;?>\n\
                  <input type='hidden' id='tabla8' name='tabla8' value='metabolic_data'>\n\
          <input type='hidden' name='consulta7' value='organism_information.Org_ID,organism_information.Alias,organism_information.Isolated_by,organism_information.Date_of_Isolation,organism_information.Origin,organism_information.Additional_Comments'>\n\
        <input type='hidden' name='UserMeta"+uno+"' id='UserMeta"+uno+"'/>\n\
         <input type='button' value='Result Count' onclick='Result()' >\n\
          ";
          var div3=document.getElementById("smartSearchDesc"+uno) ;
            div3.innerHTML="Select User Name:";
    }
   if (id == "Medium_Meta") {
          var div2=document.getElementById("smartParmLoadingDiv"+uno) ;
          div2.innerHTML="\n\
           <?php $meses = $arreMedium; $meses1 = $arreMedium1; $nombre = "txtMedium_Meta".$inc16; $resultado = lista($nombre, $meses, $meses1); echo $resultado;?>\n\
                  <input type='hidden' id='tabla8' name='tabla8' value='metabolic_data'>\n\
          <input type='hidden' name='consulta7' value='organism_information.Org_ID,organism_information.Alias,organism_information.Isolated_by,organism_information.Date_of_Isolation,organism_information.Origin,organism_information.Additional_Comments'>\n\
        <input type='hidden' name='MediumMeta"+uno+"' id='MediumMeta"+uno+"'/>\n\
         <input type='button' value='Result Count' onclick='Result()'>\n\
          ";
          var div3=document.getElementById("smartSearchDesc"+uno) ;
            div3.innerHTML="Select Medium :";
    }
   if (id == "Temperature_Meta") {
          var div2=document.getElementById("smartParmLoadingDiv"+uno) ;
          div2.innerHTML="\n\
        Initial <input type='text'  id='txtTemperatureIMeta"+uno+"' name='txtTemperatureIMeta"+uno+"'>\n\
              Final <input type='text'  id='txtTemperatureFMeta"+uno+"' name='txtTemperatureFMeta"+uno+"'>\n\
          <input type='hidden' id='tabla8' name='tabla8' value='metabolic_data'>\n\
          <input type='hidden' name='consulta7' value='organism_information.Org_ID,organism_information.Alias,organism_information.Isolated_by,organism_information.Date_of_Isolation,organism_information.Origin,organism_information.Additional_Comments'>\n\
        <input type='hidden' name='TemperatureMeta"+uno+"' id='TemperatureMeta"+uno+"'/>\n\
         <input type='button' value='Result Count' onclick='Result()' >\n\
          ";
          var div3=document.getElementById("smartSearchDesc"+uno) ;
            div3.innerHTML="Select Temperature :";
    }
   if (id == "Agitation_Meta") {
          var div2=document.getElementById("smartParmLoadingDiv"+uno) ;
          div2.innerHTML="\n\
         <input type='time'  id='txtAgitation_Meta"+uno+"' name='txtAgitation_Meta"+uno+"'>\n\
          <input type='hidden' id='tabla8' name='tabla8' value='metabolic_data'>\n\
          <input type='hidden' name='consulta7' value='organism_information.Org_ID,organism_information.Alias,organism_information.Isolated_by,organism_information.Date_of_Isolation,organism_information.Origin,organism_information.Additional_Comments'>\n\
        <input type='hidden' name='AgitationMeta"+uno+"' id='AgitationMeta"+uno+"'/>\n\
         <input type='button' value='Result Count' onclick='Result()'>\n\
         ";
          var div3=document.getElementById("smartSearchDesc"+uno) ;
            div3.innerHTML="Insert Agitation:";
    }
   if (id == "Time_Meta") {
          var div2=document.getElementById("smartParmLoadingDiv"+uno) ;
          div2.innerHTML="\n\
         <input type='time'  id='txtTime_Meta"+uno+"' name='txtTime_Meta"+uno+"'>\n\
          <input type='hidden' id='tabla8' name='tabla8' value='metabolic_data'>\n\
          <input type='hidden' name='consulta7' value='organism_information.Org_ID,organism_information.Alias,organism_information.Isolated_by,organism_information.Date_of_Isolation,organism_information.Origin,organism_information.Additional_Comments'>\n\
        <input type='hidden' name='TimeMeta"+uno+"' id='TimeMeta"+uno+"'/>\n\
         <input type='button' value='Result Count' onclick='Result()' >\n\
         ";
          var div3=document.getElementById("smartSearchDesc"+uno) ;
            div3.innerHTML="Insert Time:";
    }
   
if (id == "pH_Meta") {
          var div2=document.getElementById("smartParmLoadingDiv"+uno) ;
          div2.innerHTML="\n\
               pH initial<input type='text'  id='txtpHI_Meta"+uno+"' name='txtpHI_Meta"+uno+"'>\n\
                  pH final <input type='text'  id='txtpHF_Meta"+uno+"' name='txtpHF_Meta"+uno+"'>\n\
          <input type='hidden' id='tabla8' name='tabla8' value='metabolic_data'>\n\
          <input type='hidden' name='consulta7' value='organism_information.Org_ID,organism_information.Alias,organism_information.Isolated_by,organism_information.Date_of_Isolation,organism_information.Origin,organism_information.Additional_Comments'>\n\
        <input type='hidden' name='PhMeta"+uno+"' id='PhMeta"+uno+"'/>\n\
         <input type='button' value='Result Count' onclick='Result()' >\n\
         ";
          var div3=document.getElementById("smartSearchDesc"+uno) ;
            div3.innerHTML="Select  PH";
    }

if (id == "OD600_Meta") {
          var div2=document.getElementById("smartParmLoadingDiv"+uno) ;
          div2.innerHTML="\n\
               OD600 initial<input type='text'  id='txtOD600_initialMeta"+uno+"' name='txtOD600_initialMeta"+uno+"'>\n\
                  OD600 final <input type='text'  id='txtOD600_finalMeta"+uno+"' name='txtOD600_finalMeta"+uno+"'>\n\
          <input type='hidden' id='tabla8' name='tabla8' value='metabolic_data'>\n\
          <input type='hidden' name='consulta7' value='organism_information.Org_ID,organism_information.Alias,organism_information.Isolated_by,organism_information.Date_of_Isolation,organism_information.Origin,organism_information.Additional_Comments'>\n\
        <input type='hidden' name='OD600Meta"+uno+"' id='OD600Meta"+uno+"'/>\n\
         <input type='button' value='Result Count' onclick='Result()' >\n\
         ";
          var div3=document.getElementById("smartSearchDesc"+uno) ;
            div3.innerHTML="Insert  OD600";
    }
    if (id == "Comments_Meta") {
          var div2=document.getElementById("smartParmLoadingDiv"+uno) ;
          div2.innerHTML="\n\
         <input type='time'  id='txtComments_Meta"+uno+"' name='txtComments_Meta"+uno+"'>\n\
          <input type='hidden' id='tabla8' name='tabla8' value='metabolic_data'>\n\
          <input type='hidden' name='consulta7' value='organism_information.Org_ID,organism_information.Alias,organism_information.Isolated_by,organism_information.Date_of_Isolation,organism_information.Origin,organism_information.Additional_Comments'>\n\
        <input type='hidden' name='CommentsMeta"+uno+"' id='CommentsMeta"+uno+"'/>\n\
         <input type='button' value='Result Count' onclick='Result()'>\n\
         ";
          var div3=document.getElementById("smartSearchDesc"+uno) ;
            div3.innerHTML="Insert Comments:";
    }
    
    
    
     if (id == "Assay_Type_Name") {
          var div2=document.getElementById("smartParmLoadingDiv"+uno) ;
          div2.innerHTML="\n\
         <input type='text'  id='txtAssay_Type_Name"+uno+"' name='txtAssay_Type_Name"+uno+"'>\n\
          <input type='hidden' id='tabla9' name='tabla9' value='bioassays_data'>\n\
          <input type='hidden' name='consulta8' value='organism_information.Org_ID,organism_information.Alias,organism_information.Isolated_by,organism_information.Date_of_Isolation,organism_information.Origin,organism_information.Additional_Comments'>\n\
        <input type='hidden' name='AssayTypeName"+uno+"' id='AssayTypeName"+uno+"'/>\n\
         <input type='button' value='Result Count' onclick='Result()' >\n\
          ";
          var div3=document.getElementById("smartSearchDesc"+uno) ;
            div3.innerHTML="Insert Assay Type Name :";
    }
   if (id == "Medium_Bio") {
          var div2=document.getElementById("smartParmLoadingDiv"+uno) ;
          div2.innerHTML="\n\
         <?php $meses = $arreMedium; $meses1 = $arreMedium1; $nombre = "txtMedium_Bio".$inc17; $resultado = lista($nombre, $meses, $meses1); echo $resultado;?>\n\
                  <input type='hidden' id='tabla9' name='tabla9' value='bioassays_data'>\n\
          <input type='hidden' name='consulta8' value='organism_information.Org_ID,organism_information.Alias,organism_information.Isolated_by,organism_information.Date_of_Isolation,organism_information.Origin,organism_information.Additional_Comments'>\n\
        <input type='hidden' name='MediumBio"+uno+"' id='MediumBio"+uno+"'/>\n\
         <input type='button' value='Result Count' onclick='Result()' >\n\
          ";
          var div3=document.getElementById("smartSearchDesc"+uno) ;
            div3.innerHTML="Insert medium:";
    }
   if (id == "Temperature_Bio") {
          var div2=document.getElementById("smartParmLoadingDiv"+uno) ;
          div2.innerHTML="\n\
         Initial<input type='text'  id='txtTempInicialBio"+uno+"' name='txtTempInicialBio"+uno+"'>\n\
            Final <input type='text'  id='txtTempFinalBio"+uno+"' name='txtTempFinalBio"+uno+"'>\n\
          <input type='hidden' id='tabla9' name='tabla9' value='bioassays_data'>\n\
          <input type='hidden' name='consulta8' value='organism_information.Org_ID,organism_information.Alias,organism_information.Isolated_by,organism_information.Date_of_Isolation,organism_information.Origin,organism_information.Additional_Comments'>\n\
        <input type='hidden' name='TemperatureBio"+uno+"' id='TemperatureBio"+uno+"'/>\n\
         <input type='button' value='Result Count' onclick='Result()'>\n\
         ";
          var div3=document.getElementById("smartSearchDesc"+uno) ;
            div3.innerHTML="Select temperature:";
    }
   if (id == "Inhibition") {
          var div2=document.getElementById("smartParmLoadingDiv"+uno) ;
          div2.innerHTML="\n\
         <input type='text'  id='txtInhibition"+uno+"' name='txtInhibition'>\n\
          <input type='hidden' id='tabla9' name='tabla9' value='bioassays_data'>\n\
          <input type='hidden' name='consulta8' value='organism_information.Org_ID,organism_information.Alias,organism_information.Isolated_by,organism_information.Date_of_Isolation,organism_information.Origin,organism_information.Additional_Comments'>\n\
        <input type='hidden' name='InhibitionBio"+uno+"' id='InhibitionBio"+uno+"'/>\n\
         <input type='button' value='Result Count' onclick='Result()' >\n\
         ";
          var div3=document.getElementById("smartSearchDesc"+uno) ;
            div3.innerHTML="Insert Inhibition:";
    }
       if (id == "Inhibition_measurament") {
          var div2=document.getElementById("smartParmLoadingDiv"+uno) ;
          div2.innerHTML="\n\
         <input type='text'  id='txtInhiMeasu"+uno+"' name='txtInhiMeasu"+uno+"'>\n\
          <input type='hidden' id='tabla9' name='tabla9' value='bioassays_data'>\n\
          <input type='hidden' name='consulta8' value='organism_information.Org_ID,organism_information.Alias,organism_information.Isolated_by,organism_information.Date_of_Isolation,organism_information.Origin,organism_information.Additional_Comments'>\n\
        <input type='hidden' name='InhiMeasu"+uno+"' id='InhiMeasu"+uno+"'/>\n\
         <input type='button' value='Result Count' onclick='Result()'>\n\
         ";
          var div3=document.getElementById("smartSearchDesc"+uno) ;
            div3.innerHTML="Insert Inhibition measurament:";
    }
       if (id == "Antagonist_strain") {
          var div2=document.getElementById("smartParmLoadingDiv"+uno) ;
          div2.innerHTML="\n\
         <?php $meses=$antagosn; $meses1=$antagosn1;$nombre = "txtAntagonist_strain".$inc18; $resultado = lista($nombre, $meses, $meses1); echo $resultado;?>\n\
                  <input type='hidden' id='tabla9' name='tabla9' value='bioassays_data'>\n\
          <input type='hidden' name='consulta8' value='organism_information.Org_ID,organism_information.Alias,organism_information.Isolated_by,organism_information.Date_of_Isolation,organism_information.Origin,organism_information.Additional_Comments'>\n\
        <input type='hidden' name='Antagoniststrain"+uno+"' id='Antagoniststrain"+uno+"'/>\n\
         <input type='button' value='Result Count' onclick='Result()'>\n\
          </form>";
          var div3=document.getElementById("smartSearchDesc"+uno) ;
            div3.innerHTML="Select Antagonist strain:";
    }
       if (id == "Comments_bio") {
          var div2=document.getElementById("smartParmLoadingDiv"+uno) ;
          div2.innerHTML="<form id='organism_info"+uno+"' name='organism_info"+uno+"' action='' onSubmit='enviarComments_bio1(txtComments_bio"+uno+","+uno+"); return false'>\n\
         <input type='text'  id='txtComments_bio"+uno+"' name='txtComments_bio"+uno+"'>\n\
          <input type='hidden' id='tabla9' name='tabla9' value='bioassays_data'>\n\
          <input type='hidden' name='consulta8' value='organism_information.Org_ID,organism_information.Alias,organism_information.Isolated_by,organism_information.Date_of_Isolation,organism_information.Origin,organism_information.Additional_Comments'>\n\
        <input type='hidden' name='Commentsbio"+uno+"' id='Commentsbio"+uno+"'/>\n\
         <input type='button' value='Result Count' onclick='Result()' >\n\
          </form>";
          var div3=document.getElementById("smartSearchDesc"+uno) ;
            div3.innerHTML="Insert Comments:";
    }
        if (id == "Coordinates") {
          var div2=document.getElementById("smartParmLoadingDiv"+uno) ;
          div2.innerHTML="\n\
         Longitude<input type='text'  id='txtLongi"+uno+"' name='txtLongi"+uno+"'>\n\
             Latitude <input type='text'  id='txtLat"+uno+"' name='txtLat"+uno+"'>\n\
                <input type='hidden' id='tabla' name='tabla' value='organism_information'>\n\
          <input type='hidden' name='consulta' value='select Alias from organism_information where'>\n\
        <input type='hidden' name='Cordena"+uno+"' id='Cordena"+uno+"'/>\n\
         <input type='button' value='Result Count' onclick='Result()' >\n\
          ";
          var div3=document.getElementById("smartSearchDesc"+uno) ;
            div3.innerHTML="Insert Comments:";
    }
    
}

function objetoAjax(){
		var xmlhttp = false;
		try {
			xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
		} catch (e) {
 
			try {
				xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
			} catch (E) {
				xmlhttp = false; }
		}
 
		if (!xmlhttp && typeof XMLHttpRequest!='undefined') {
		  xmlhttp = new XMLHttpRequest();
		}
		return xmlhttp;
	}
        function enviarDatos(){
 
        //Recogemos los valores introducimos en los campos de texto
		equipo = document.organism_info.txtA.value;
	
		jugador = document.getElementById('jugador');
 
		//instanciamos el objetoAjax
		ajax = objetoAjax();
 
		//Abrimos una conexi�n AJAX pasando como par�metros el m�todo de env�o, y el archivo que realizar� las operaciones deseadas
		ajax.open("POST", "consultados.php", true);
 
		//cuando el objeto XMLHttpRequest cambia de estado, la funci�n se inicia
		ajax.onreadystatechange = function() {
 
             //Cuando se completa la petici�n, mostrar� los resultados 
			if (ajax.readyState == 4){
 
				//El m�todo responseText() contiene el texto de nuestro 'consultar.php'. Por ejemplo, cualquier texto que mostremos por un 'echo'
				jugador.value = (ajax.responseText) 
			}
		} 
 
		//Llamamos al m�todo setRequestHeader indicando que los datos a enviarse est�n codificados como un formulario. 
		ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded"); 
 
		//enviamos las variables a 'consulta.php' 
		ajax.send("&equipo="+equipo) 
 
} 

 function enviarDatosInsolated(){
 
        //Recogemos los valores introducimos en los campos de texto
		equipo = document.organism_info.txtuser.value;
		
              
         //Aqu� ser� donde se mostrar� el resultado
		jugador = document.getElementById('Insolated');
 
		//instanciamos el objetoAjax
		ajax = objetoAjax();
 
		//Abrimos una conexi�n AJAX pasando como par�metros el m�todo de env�o, y el archivo que realizar� las operaciones deseadas
		ajax.open("POST", "consultados_2.php", true);
 
		//cuando el objeto XMLHttpRequest cambia de estado, la funci�n se inicia
		ajax.onreadystatechange = function() {
 
             //Cuando se completa la petici�n, mostrar� los resultados 
			if (ajax.readyState == 4){
 
				//El m�todo responseText() contiene el texto de nuestro 'consultar.php'. Por ejemplo, cualquier texto que mostremos por un 'echo'
				jugador.value = (ajax.responseText) 
			}
		} 
 
		//Llamamos al m�todo setRequestHeader indicando que los datos a enviarse est�n codificados como un formulario. 
		ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded"); 
 
		//enviamos las variables a 'consulta.php' 
		ajax.send("&Insolated="+equipo) 
 
} 



function enviarDatosInsolated1(caja1,muestra){
 
        //Recogemos los valores introducimos en los campos de texto
		equipo = caja1.value;
		
                acum="Insolated"+muestra;
         //Aqu� ser� donde se mostrar� el resultado
		jugador = document.getElementById(acum);
 
		//instanciamos el objetoAjax
		ajax = objetoAjax();
 
		//Abrimos una conexi�n AJAX pasando como par�metros el m�todo de env�o, y el archivo que realizar� las operaciones deseadas
		ajax.open("POST", "consultados_2.php", true);
 
		//cuando el objeto XMLHttpRequest cambia de estado, la funci�n se inicia
		ajax.onreadystatechange = function() {
 
             //Cuando se completa la petici�n, mostrar� los resultados 
			if (ajax.readyState == 4){
 
				//El m�todo responseText() contiene el texto de nuestro 'consultar.php'. Por ejemplo, cualquier texto que mostremos por un 'echo'
				jugador.value = (ajax.responseText) 
			}
		} 
 
		//Llamamos al m�todo setRequestHeader indicando que los datos a enviarse est�n codificados como un formulario. 
		ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded"); 
 
		//enviamos las variables a 'consulta.php' 
		ajax.send("&Insolated="+equipo) 
 
} 


        function enviarDatos1(caja,muestra){
 
      
      //Recogemos los valores introducimos en los campos de texto
		equipo = caja.value;
		
            
                        
                       acu="jugador"+muestra;
                       
                       
         //Aqu� ser� donde se mostrar� el resultado
		jugador = document.getElementById(acu);
 
		//instanciamos el objetoAjax
		ajax = objetoAjax();
 
		//Abrimos una conexi�n AJAX pasando como par�metros el m�todo de env�o, y el archivo que realizar� las operaciones deseadas
		ajax.open("POST", "consultados.php", true);
 
		//cuando el objeto XMLHttpRequest cambia de estado, la funci�n se inicia
		ajax.onreadystatechange = function() {
 
             //Cuando se completa la petici�n, mostrar� los resultados 
			if (ajax.readyState == 4){
 
				//El m�todo responseText() contiene el texto de nuestro 'consultar.php'. Por ejemplo, cualquier texto que mostremos por un 'echo'
				jugador.value = (ajax.responseText) 
			}
		} 
 
		//Llamamos al m�todo setRequestHeader indicando que los datos a enviarse est�n codificados como un formulario. 
		ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded"); 
 
		//enviamos las variables a 'consulta.php' 
		ajax.send("&equipo="+equipo) 
		 
 
} 

function EnviarFPrincipal()
{
    
     var selected=""; 
        $('#organism_info input[type=checkbox]').each(function(){
            if (this.checked) { 
                selected += $(this).val()+',';
               
            }
        }); 
    
   
     var  cad=selected;
        cad = cad.replace(" ", "");
     var nueva_cadena2 = cad.substring(0, cad.length-1);
      
       
        var nueva=new Array(nueva_cadena2);
          var nueva_cadena1=nueva.unique();
            
            
              
           var div2=document.getElementById("tables") ;
             div2.innerHTML="<input type='text' id='tab' name='tab' value="+nueva_cadena1+">";
     document.organism_info.action= "consultados_1.php"; 
    document.organism_info.submit();
    
   
}

Array.prototype.unique = function()
{    
var a=[],i;    
this.sort();    
for(i=0; i<this.length; i++) {        
if(!a.contains(this[i]))
a[a.length] = this[i];        
}    
return a;

};
Array.prototype.unique=function(a){
  return function(){return this.filter(a)}}(function(a,b,c){return c.indexOf(a,b+1)<0
});



function array_unique(array){
if({}.toString.call(array) != '[object Array]')return false;
var sorted = [].concat(array).sort(), last = [], toReturn = [];

for (var i = 0; i < sorted.length; i++) {
if(last !== sorted[i]) toReturn.push(sorted[i])
last = sorted[i];
}

return toReturn;
}

</script>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
<script>   
function Result() {
 var url = "consultados_2.php"; // El script a d�nde se realizar� la petici�n.
    $.ajax({
           type: "POST",
           url: url,
           data: $("#organism_info").serialize(), // Adjuntar los campos del formulario enviado.
           success: function(data)
           {
               $("#respuesta").html(data); // Mostrar la respuestas del script PHP.
           }
         });

    return false; // Evitar ejecutar el submit del formulario.
}
</script>
</head>
<body>
<br>
<br>
<br>
<br>
<!--    <select name="estado"  id="estado">
       <?php echo $combobit; ?>
   </select>-->
    <br>
    <br>
    
<!-- Formulario de contacto -->
<form  name="formulario" action="consultados.php" method="post">
    
    <div ></div>
     </form>



    <div class="se_spacer">&nbsp;</div>
	
	<div>
	
	<div class="db_head3" style="padding-top:3px;">


		
			
			<div class="box_contentWrapper">

		


            <table class="perc100">
                <tbody><tr>
                    <td>Advanced Search Interface</td>
                    <td class="rightCell"></td>
                </tr>
            </tbody></table>
            



</div>

</div>
           
               
<div class="lb_body3">

		
			
	<div class="box_contentWrapper">

			<form id='organism_info' name='organism_info' >	
                            <div id="tables">
                                </div>
            <!-- THIS IS WHERE THE MAGIC HAPPENS -->
                <div id="as_queryOptions">
                <table border="0" id="myTable1" class="smarttable">
                    <tbody id="myTbody1">
                        <tr id="smartTr_0">
                            <td><div class="b_head3" style="padding-top: 3px;">
                                    <table id="smartContainerTable_0" class="plain">
                                        <tbody><tr id="smartHeadTr_0">
                                                <td style="width: 100px;">
                                                    <select class="selectsmall" name="smartSearchSubtype_0" id="smartSearchSubtype_0" onchange="MuestraOrganismo(this.value)">
                                                        <option value=" " selected="">Choose a Query Type:</option>
                                                        
 <optgroup label="Organism Information">
     <option value="Alias"  >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Alias</option>
      <option value="Isolated_by" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Isolated by</option>
      <option value="Date_of_Isolation" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Date of Isolation</option>
      <option value="Origin" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Origin</option>
      <option value="CommentsOrg" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Text Search Comments</option>
 </optgroup>
<optgroup label="Macroscopic Morphology">
<option value="Medium_Macro"  >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Medium</option>
<option value="Temperature_Macro" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Temperature</option>
<option value="Agitation_Macro">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Agitation</option>
<option value="Age_Macro" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Age</option>
<option value="Size" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Size</option>
<option value="Surface" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Surface</option>
</optgroup>

<optgroup label="Microscopic Morphology">
<option value="Medium_Micro">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Medium </option>
<option value="Temperature_Micro" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Temperature</option>
<option value="Agitation_Micro">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Agitation</option>
<option value="Age_Micro">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Age</option>
<option value="Axis" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Axis </option>
<option value="Motility" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Motility</option>
<option value="Aggregates">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Aggregates</option>
<option value="Biofilm_formation" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Biofilm formation</option>
<option value="Gram_test" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Gram test</option>

</optgroup>

<optgroup label="Growth characteristics">
<option value="Medium_solid">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Medium solid</option>
<option value="Temperature_solid" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Temperature solid</option>
<option value="Time_solid" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Time solid</option>
<option value="Medium_liquid" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Medium liquid</option>
<option value="Temperature_liquid" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Temperature liquid</option>
<option value="Agitation_time" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Agitation time</option>
<option value="Time_liquid" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Time liquid</option>
<option value="PH">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PH </option>
<option value="OD600" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OD600</option>
<option value="Extra_parameters" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Extra parameters</option>
</optgroup>

<optgroup label="Preservation of Strains">
<option value="Preservation_Method_Name" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Preservation Method Name</option>
<option value="Date_of_preservation" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Date of preservation</option>
<option value="User_Pres" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;User Name</option>
<option value="Number_of_vials" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Number of vials</option>
<option value="Volume_of_vials" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Volume of vials</option>
<option value="Storage_Pres" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Storage Name</option>
<option value="Comments_Pres">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Text Search Comments</option>

</optgroup>

<optgroup label="DNA">
<option value="Extraction_Method_Name" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Extraction Method Name</option>
<option value="Date_of_preservation" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Date of preservation</option>
<option value="Concentration_DNA" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Concentration</option>
<option value="Volume_DNA" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Volume</option>
<option value="User_DNA" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;User Name</option>
<option value="Storage_DNA" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Storage Name</option>
</optgroup>

<optgroup label="Genetic Data">
<option value="Taxonomic_lineage" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Taxonomic lineage</option>
<option value="Gene" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Gene Name</option>
<option value="Sequencing_Method_Name" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Sequencing Method Name</option>
<option value="Cured_sequence" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Cured sequence</option>
<option value="Comments_Genetic" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Text Search Comments</option>
</optgroup>


<optgroup label="Metabolic Data">
<option value="User_Meta" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;User Name</option>
<option value="Medium_Meta" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Medium</option>
<option value="Temperature_Meta" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Temperature</option>
<option value="Agitation_Meta" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Agitation </option>
<option value="Time_Meta" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Time</option>
<option value="pH_Meta">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PH</option>
<option value="OD600_Meta" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OD600 </option>
<option value="Comments_Meta" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Text Search Comments</option>
    
</optgroup>

<optgroup label="Bioassays Data">
<option value="Assay_Type_Name" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Assay Type Name</option>
<option value="Medium_Bio" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Medium</option>
<option value="Temperature_Bio" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Temperature</option>
<option value="Inhibition" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Inhibition </option>
<option value="Inhibition_measurament" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Inhibition measurament</option>
<option value="Antagonist_strain">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Antagonist strain</option>
<option value="Comments_bio" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Text Search Comments</option>

</optgroup>

<optgroup label="Map">
<option value="Coordinates" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Coordinates</option>

</optgroup>

 

                                                    </select>
                                                </td>
                                          
                                                
                                                <td id="smartTip_0" style="font-weight: normal;">
                                                            
                                                </td><td style="width: 10px;"><img src="./RCSB PDB - Advanced Search_files/minus.png" id="clearSmartRow_0" class="clearSmartRow" onclick="clearSmartRow(event);" style="display: none;">
                                                </td></tr></tbody></table></div>
                                
                                <div class="w_body3">
    
                                    <div class="box_contentWrapper">
                                        <table id="smartBodyTable_0" class="plain">
                                            <tbody>
                                                <tr>
                                                    <td id="smartSearchDesc_0" colspan="4" style="font-style: oblique;">
                                                           
                                                    </td>
                                                </tr>
                                                <tr id="search_smartTr_0">
                                                    <td class="smartParmLoading">
                                                        
                                                        <div id="smartParmLoadingDiv_0">
                                                            
                                                 </div>
                                                          
                                                    </td>
                                                   
                                                </tr></tbody></table></div>
                               
                                
                                </div>
                                   
   
                                <div class="w_foot3" style="height: 10px;">
                                    
                                </div></td></tr>
                   
                    </tbody>
                    
                    
                      
                                 
                </table>
            
                 <hr>
  
     <P>
      
   
                    
                    
            </div>
              </form>
            
            <!-- END OF MAGIC HAPPENING -->
            <div style="margin: 5px 15px;">
                <div class="db_head3" style="padding-top:3px;color:white;">
                    <div class="rightCell" onclick="addPersona();" style="cursor:pointer;padding:2px;">
                        Add Search Criteria
                        <img style="vertical-align:top;" src="./pic/plus.png" alt="Add">
                    </div>
                </div>
                
                
                <div class="db_foot3"></div>
            </div>
            



</div>

</div>
 
<div class="b_body3">

		
			
	<div class="box_contentWrapper">

					
            <table class="perc100">
                <tbody><tr valign="top">
                    <td>
                     
                      
                       
                        
                            
                      
                     
                    </td>
                    <center>
                      <div id="respuesta">
</div>     
                        </center>
                    <td class="rightCell" style="vertical-align: bottom;">

                     
                        <input type="button" id="startOver" value="Clear All Parameters" onclick="removeNodo();" style="vertical-align: bottom; text-align: center; padding-right:0px">
                        <input type="button" onClick="EnviarFPrincipal()" value="Submit Query"  style="vertical-align: bottom; text-align: center; padding-left:0px">
                        <input type="hidden" id="newRowHidden" value="foo" onclick="smartRow();">
                    </td>
                  
                </tr>
            </tbody></table>
            
            



			

		</div>
	
	</div>

</div>


	<div class="b_foot3">
				
		&nbsp;
			
	</div>

    
  

 
       
 
 
  <div id="referenciaVacia1">
                       </div>




</body></html>