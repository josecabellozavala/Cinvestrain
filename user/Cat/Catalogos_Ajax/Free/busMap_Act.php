

<?php
include "../../../../bdConnection.php";
require'../Plantas/../../../../class/sessions.php';
$objses = new Sessions();
$objses->init();
$fecha = date('Y-m-j');
$fechaMax = strtotime ( '-1 day' , strtotime ( $fecha ) ) ;
$fechaMax = date ( 'Y-m-j' , $fechaMax );
$user = isset($_SESSION['user']) ? $_SESSION['user'] : null ;

$u="ho";
               if($u=="ho") {
                   
                      $sql="SELECT Type FROM user, role WHERE user.Name = '$user' AND user.Role = role.Type";		
		$cs=mysql_query($sql,$cn);
                
		while($resul=mysql_fetch_array($cs)){
			$consul1=$resul[0];
			
			
			}
                $sql="SELECT User_ID FROM user WHERE Name = '$user'";		
		$cs=mysql_query($sql,$cn);
                
		while($resul=mysql_fetch_array($cs)){
			$consul3=$resul[0];
			
			
			}
                        
                        
                        
                            $sql1="SELECT lab.id_lab FROM user,lab WHERE user.Name ='$user' AND user.lab=lab.id_lab";		
		$cs1=mysql_query($sql1,$cn);
                
		while($resul=mysql_fetch_array($cs1)){
			$consul2=$resul[0];
                          
			}
                        
                         $sql = sprintf("select * from free_living where ID_Sample=%d",
		(int)$_GET['id']
	);
	$per = mysql_query($sql);
	$num_rs_per = mysql_num_rows($per);
	if ($num_rs_per==0){
		echo "No records";
		exit;
	}
	
	$rs_per = mysql_fetch_assoc($per);
                        
                        }
                    $varFree=$rs_per['ID_Sample'];
              $sqlCordenadas="SELECT Latitude,Longitude FROM free_living WHERE  ID_Sample='$varFree'";		
		$cs1=mysql_query($sqlCordenadas,$cn);
                
		while($resul=mysql_fetch_array($cs1)){
			$LatFree=$resul[0];
                        $LongFree=$resul[1];
			}                      
                        
$latitud= $LatFree;
$longitud= $LongFree;
$zoom= "17";
$tipo_mapa = "HYBRID";
$direccion = "";

if (isset($_GET["direccion"])) $direccion=  urldecode ($_GET["direccion"]);
else $direccion="";

// LONGITUD Y LATITUD SI ESTAN COMO PARAMETROS LOS COJO
if (isset($_GET["dir"])) $direccion = $_GET["dir"];
if (strlen ($direccion) <= 8) $direccion =""; // SI LA DIRECCION ES MENOR QUE 8 NO LA PROCESO

// LONGITUD Y LATITUD SI ESTAN COMO PARAMETROS LOS COJO
if (isset($_GET["lon"])) $longitud= $_GET["lon"];
if (isset($_GET["lat"])) $latitud= $_GET["lat"];

// ZOOM ENTRE 0 y 19
if (isset($_GET["zoom"])) $zoom= $_GET["zoom"];
if (($zoom<=0) || ($zoom>=20)){ $zoom= "17";}


// TIPO DE MAPA
if (isset($_GET["tipo"])) $tipo_mapa= strtoupper($_GET["tipo"]);

// COMPRUEBO QUE EL TIPO ES UNO DE LOS QUE ACEPTA GOOGLE
if ($tipo_mapa == "SATELLITE") $error=0;
else
  if ($tipo_mapa == "ROADMAP") $error=0;
  else 	
    if ($tipo_mapa == "TERRAIN")$error=0;
    else $tipo_mapa = "HYBRID";
?>
  <style>
      #panelPrincipal{
       position: absolute;
       width:1000px;
       height: 820px;
       top:120px;
       left:170px;
       float: left;
       background-color: #E2EFF5; 
          z-index:-2; 
      }
      #panelSecundario{
       position: absolute;
       width:450px;
       height: 580px;
       top:180px;
       left:210px;
       float: left;
       background-color:  #FFFFFF; 
          z-index:-2; 
      }
      #Panel_InsertImage{
           position: absolute;
           left:750px;
           float: left;
           top:550px;
          
      }
      #titleIma{
          position: absolute;
          left:810px;
          float: left;
          top:480px;
      }
.button1 {
text-decoration:none; 
 text-align:center; 
 padding:11px 32px; 
 border:double 3px #006572; 
 -webkit-border-radius:21px;
 -moz-border-radius:21px; 
 border-radius: 21px; 
 font:11px "Arial Black", Gadget, sans-serif; 
 font-weight:bold; 
 color:#e5ffed; 
 background-color:#78c73b; 
 background-image: -moz-linear-gradient(top, #78c73b 0%, #19a519 100%); 
 background-image: -webkit-linear-gradient(top, #78c73b 0%, #19a519 100%); 
 background-image: -o-linear-gradient(top, #78c73b 0%, #19a519 100%); 
 background-image: -ms-linear-gradient(top, #78c73b 0% ,#19a519 100%); 
 filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#19a519', endColorstr='#19a519',GradientType=0 ); 
 background-image: linear-gradient(top, #78c73b 0% ,#19a519 100%);   
 -webkit-box-shadow:0px -5px 2px #bababa, inset 0px 0px 1px #ffffff; 
 -moz-box-shadow: 0px -5px 2px #bababa,  inset 0px 0px 1px #ffffff;  
 box-shadow:0px -5px 2px #bababa, inset 0px 0px 1px #ffffff;  
  
 text-shadow: 0px 1px 11px #bababa; 
 filter: dropshadow(color=#bababa, offx=0, offy=1);
   }
   
   .button2{
 text-decoration:none; 
 text-align:center; 
 padding:11px 32px; 
 border:double 3px #006572; 
 -webkit-border-radius:21px;
 -moz-border-radius:21px; 
 border-radius: 21px; 
 font:11px "Arial Black", Gadget, sans-serif; 
 font-weight:bold; 
 color:#e5ffed; 
 background-color:#c74c3b; 
 background-image: -moz-linear-gradient(top, #c74c3b 0%, #f51f03 100%); 
 background-image: -webkit-linear-gradient(top, #c74c3b 0%, #f51f03 100%); 
 background-image: -o-linear-gradient(top, #c74c3b 0%, #f51f03 100%); 
 background-image: -ms-linear-gradient(top, #c74c3b 0% ,#f51f03 100%); 
 filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f51f03', endColorstr='#f51f03',GradientType=0 ); 
 background-image: linear-gradient(top, #c74c3b 0% ,#f51f03 100%);   
 -webkit-box-shadow:0px -5px 2px #bababa, inset 0px 0px 1px #ffffff; 
 -moz-box-shadow: 0px -5px 2px #bababa,  inset 0px 0px 1px #ffffff;  
 box-shadow:0px -5px 2px #bababa, inset 0px 0px 1px #ffffff;  
  
 text-shadow: 0px 1px 11px #bababa; 
 filter: dropshadow(color=#bababa, offx=0, offy=1);
  
  }
.datagrid table {
        text-align: left; width: 20%; 
        position: absolute;
        left:65%;
    } .datagrid 
    {
        font: normal 12px/150% Arial, Helvetica, sans-serif; background: #fff; overflow: hidden;
    }
    .datagrid table td, .datagrid table th { padding: 6px 8px; }
    .datagrid table thead th {background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #009EED), color-stop(1, #0093DB) );
                             background:-moz-linear-gradient( center top, #009EED 5%, #0093DB 50% );
                             filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#009EED', endColorstr='#0093DB');
                             background-color:#009EED; color:#FFFFFF; font-size: 13px; font-weight: bold; border-left: 1px solid #0070A8; } 
    .datagrid table thead th:first-child { border: none; }
    .datagrid table tbody td { color: #00496B; border-left: 1px solid #E2EFF5;font-size: 12px;border-bottom: 1px solid #E1EEF4;font-weight: normal; }.datagrid table tbody .alt td { background: #E1EEF4; color: #00496B; }.datagrid table tbody td:first-child { border-left: none; }.datagrid table tbody tr:last-child td { border-bottom: none; }.datagrid table tfoot td div { border-top: 1px solid #006699;background: #E1EEF4;} .datagrid table tfoot td { padding: 0; font-size: 12px } .datagrid table tfoot td div{ padding: 2px; }



        #mapCanvas{ 
            position: absolute;
             left:750px;
            width: 300px;
            height: 250px;
            float:left;
            background: green;
        }
        
        #buscarDireccion{ 
        position:absolute;
             left:750px;
             top:445px;
       
            width: 300px;
            height: 40px;
           
            background: graytext;
        }
        #infor{
            width: 300px;
            height: 450px;
            float:left;
        }
        
        #forma
{
     background-color: rgba(0,255,243,0.5) ;
   width:63%;
    height:80% ;
     position: absolute;
     top:20%; 
     left:5%;
     float: left;
    
}
#formIma
{
     background-color: rgba(0,255,243,0.5) ;
    width:30%;
    height:80%;
    position: absolute;
    left:68%;
        top:20%;
        float: left;
    
    line-height: 200%;
    
}
#formContIma
{
     background-color: rgba(0,255,243,0.5) ;
    width:30%;
    height:30%;
    position: absolute;
    left:0%;
        top:50%;
        float: left;
    
    line-height: 200%;
    
}
.btn
{
    position: absolute;
    left:18%;
        top:85%;
        float: left;
      font-size:16px;
        font-family:Verdana,Helvetica;
        font-weight:bold;
        color:white;
        background:rgb(255,90,95);
        border:0px;
       
        width:130px;
        height:30px;
    
}

#PanelImag
{
    width:420px;
    height: 350px;
    background-color:  #a7bfdb;
    position: absolute;
    left: 68%;
    top:45%;
    float: left;
}
#Panel
{
  
    float: left;
}

.cajas{
	background:#FFF; 
	border:1px solid #00BFFF;
	height: 30px;
	margin-left:20px;
	margin-right:20px;
	border-radius:5px;
}

    </style>

<html>
    <head>
<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false">
</script>
<script type="text/javascript">

// VARIABLES GLOBALES JAVASCRIPT
var geocoder;
var marker;
var latLng;
var latLng2;
var map;

// INICiALIZACION DE MAPA
function initialize() {
  geocoder = new google.maps.Geocoder();	
  latLng = new google.maps.LatLng(<?php echo $latitud;?> ,<?php echo $longitud;?>);
  map = new google.maps.Map(document.getElementById('mapCanvas'), {
    zoom:<?php echo $zoom;?>,
    center: latLng,
    mapTypeId: google.maps.MapTypeId.<?php echo $tipo_mapa;?>
  });


// CREACION DEL MARCADOR  
    marker = new google.maps.Marker({
    position: latLng,
    title: 'Arrastra el marcador si quieres moverlo',
    map: map,
    draggable: true
  });
 
 

 
// Escucho el CLICK sobre el mama y si se produce actualizo la posicion del marcador 
     google.maps.event.addListener(map, 'click', function(event) {
     updateMarker(event.latLng);
   });
  
  // Inicializo los datos del marcador
  //    updateMarkerPosition(latLng);
     
      geocodePosition(latLng);
 
  // Permito los eventos drag/drop sobre el marcador
  google.maps.event.addListener(marker, 'dragstart', function() {
    updateMarkerAddress('Arrastrando...');
  });
 
  google.maps.event.addListener(marker, 'drag', function() {
    updateMarkerStatus('Arrastrando...');
    updateMarkerPosition(marker.getPosition());
  });
 
  google.maps.event.addListener(marker, 'dragend', function() {
    updateMarkerStatus('Arrastre finalizado');
    geocodePosition(marker.getPosition());
  });
  

 
}


// Permito la gesti¢n de los eventos DOM
google.maps.event.addDomListener(window, 'load', initialize);

// ESTA FUNCION OBTIENE LA DIRECCION A PARTIR DE LAS COORDENADAS POS
function geocodePosition(pos) {
  geocoder.geocode({
    latLng: pos
  }, function(responses) {
    if (responses && responses.length > 0) {
      updateMarkerAddress(responses[0].formatted_address);
    } else {
      updateMarkerAddress('No puedo encontrar esta direccion.');
    }
  });
}

// OBTIENE LA DIRECCION A PARTIR DEL LAT y LON DEL FORMULARIO
function codeLatLon() { 
      str= document.form_mapa.longitud.value+" , "+document.form_mapa.latitud.value;
      latLng2 = new google.maps.LatLng(document.form_mapa.latitud.value ,document.form_mapa.longitud.value);
      marker.setPosition(latLng2);
      map.setCenter(latLng2);
      geocodePosition (latLng2);
      // document.form_mapa.direccion.value = str+" OK";
}

// OBTIENE LAS COORDENADAS DESDE lA DIRECCION EN LA CAJA DEL FORMULARIO
function codeAddress() {
        var address = document.formDireccion.direccion.value;
          geocoder.geocode( { 'address': address}, function(results, status) {
          if (status == google.maps.GeocoderStatus.OK) {
             updateMarkerPosition(results[0].geometry.location);
             marker.setPosition(results[0].geometry.location);
             map.setCenter(results[0].geometry.location);
           } else {
            alert('ERROR : ' + status);
          }
        });
      }

// OBTIENE LAS COORDENADAS DESDE lA DIRECCION EN LA CAJA DEL FORMULARIO
function codeAddress2 (address) {
          
          geocoder.geocode( { 'address': address}, function(results, status) {
          if (status == google.maps.GeocoderStatus.OK) {
             updateMarkerPosition(results[0].geometry.location);
             marker.setPosition(results[0].geometry.location);
             map.setCenter(results[0].geometry.location);
             document.form_mapa.direccion.value = address;
           } else {
            alert('ERROR : ' + status);
          }
        });
      }

function updateMarkerStatus(str) {
  document.form_mapa.direccion.value = str;
}

// RECUPERO LOS DATOS LON LAT Y DIRECCION Y LOS PONGO EN EL FORMULARIO
function updateMarkerPosition (latLng) {
  document.form_mapa.longitud.value =latLng.lng();
  document.form_mapa.latitud.value = latLng.lat();
}

function updateMarkerAddress(str) {
  document.form_mapa.direccion.value = str;
}

// ACTUALIZO LA POSICION DEL MARCADOR
function updateMarker(location) {
        marker.setPosition(location);
        updateMarkerPosition(location);
        geocodePosition(location);
      }





</script>
<!--IMPORTANTE RESPETAR EL ORDEN -->
<!--ESTILOS DE BOOSTRAP -->
<link href="css/bootstrap.min.css" rel="stylesheet" />
<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
<script type="text/javascript" src="http://code.jquery.com/jquery-2.0.3.min.js" ></script>
<!--ARCHIVOS JAVASCRIPT DE BOOTSTRAP -->
<script type="text/javascript" src="js/bootstrap.min.js" ></script>

<link rel="stylesheet" type="text/css" href="./DiseñoPlanta.css" />
      
<script src="../extras/js/jquery.validate.js"></script>

     <script src="jquery-latest.js"></script>
<script type="text/JavaScript"> 
     
    function mostrarReferencia(){
//Si la opcion con id Conocido_1 (dentro del documento > formulario con name fcontacto >     y a la vez dentro del array de Conocido) esta activada
if (document.formulario.col[3].checked == true) {
//muestra (cambiando la propiedad display del estilo) el div con id 'desdeotro'
//document.getElementById('desdeotro').style.display='block';
//
alert("hola");
//por el contrario, si no esta seleccionada
} else {
//oculta el div con id 'desdeotro'
document.getElementById('desdeotro').style.display='none';
}
}
-->

     function ValidarFormulario(form) 
{    
     
      
    continuar=true;
   if( form.org.value=="" || form.com.value=="" || form.sci.value==""  || form.longitud.value=="" || 
           form.latitud.value==""  )
   {
        alert("Datagrid with parentheses are required");
        continuar=false;   
        }
        
    else if(continuar==true)
    {  
   var  numeroplan=document.getElementById("plan").value;
      var  numeroorg=document.getElementById("org").value;
       var co=document.getElementById("com").value;
       var sc=document.getElementById("sci").value;
         var SiteA=document.getElementById("direccion1").value;
         var Storage=document.getElementById("storage").value;
         var ge=document.getElementById("latitud").value;
          var sp=document.getElementById("longitud").value;
              var da=document.getElementById("date").value;
       var c=document.getElementById("col").value;
         var si=document.getElementById("sia").value;
           var s=document.getElementById("sid").value;
            var subir=document.getElementById("sub").value;
             var labo=form.lab.value;
          
             
          $.ajax({
         type:"POST",   
          url: "BD_A_Free.php",  
       data:{plan:numeroplan,org:numeroorg,com:co,sci:sc,Site_A:SiteA,Storage_id:Storage,gen:ge,spe:sp,date:da,col:c,sia:si,sid:s,sub:subir,lab:labo}
        });
  alert("It was inserted correctly");
      window.location="index.php";

     
      
   
        
        
    } 
}


</script>
           
 <title></title> 
    </head>
       <body >
             <br>
             <br>
               <br>
                 <br>
                   <br>
                 <br>
       <center>   <h1>Free Living</h1></center>
       <div id="panelPrincipal"></div>
       <div id="panelSecundario"></div>
   <div style="float:left; width: 60%" align="center">
 
<form  id="form_mapa" name="form_mapa" method="POST" action="" enctype="multipart/form-data">
     
        
    <input type="hidden" name="plan" id="plan"   value="<?=$rs_per['ID_Sample']?>" >
    <br>
    <div>
        
        <label>*Name</label>
        <input class="cajas" type="text" name="org" id="org" value="<?=$rs_per['Name']?>">
      
    </div>
     <br>
    <div>
        <label>*Date of collection</label>
        <input class="cajas" type="date" name="com" id="com" value="<?=$rs_per['Date_of_collection']?>" max="<?php echo $fechaMax;?>">
    </div>
      <br>
    <div>
        <label>*Collected by</label>
        <?php 
                    $sql="SELECT * FROM user where lab='$consul2'"; 
                           $result=mysql_query($sql);         
                            if ($row = mysql_fetch_array($result)){ 
             $Usuario=$rs_per['Collected_by'];
               $sqllab="SELECT Name FROM user WHERE User_ID='$Usuario'";		
		$cslab=mysql_query($sqllab,$cn);
                
		while($resullab=mysql_fetch_array($cslab)){
			$consullab=$resullab[0];
			}
echo '<select name= "sci" id="sci"  class="cajas">';
 echo "<option value=".$rs_per['Collected_by'].">".$consullab."</option>\n"; 
do { 
       echo '<option value= "'.$row["User_ID"].'">'.$row["Name"].'</option>';
} while ($row = mysql_fetch_array($result)); 
echo '</select>';

}       
                     ?>
    </div>
       <br>
        <div>
        <label>*Site Alias</label>
        <input class="cajas" type="text" name="direccion1" id="direccion1" value="<?=$rs_per['Site_alias']?>">
    </div>
          <br>
              <div>
        <label> *Storage</label>
        <?php 
                    $sql="SELECT * FROM storage where lab='$consul2'"; 
                           $result=mysql_query($sql); 
        if ($row = mysql_fetch_array($result)){ 
            $stora=$rs_per['id_storage'];
                
               $sqllab="SELECT Alias FROM storage WHERE Storage_ID='$stora'";		
		$cslab=mysql_query($sqllab,$cn);
            while($resullab=mysql_fetch_array($cslab)){
			$consullab=$resullab[0];
			}
echo '<select name= "storage" id="storage"  class="cajas">';
echo '<option value= "'.$row["id_storage"].'">'.$consullab.'</option>';
do { 
       echo '<option value= "'.$row["Storage_ID"].'">'.$row["Alias"].'</option>';
} while ($row = mysql_fetch_array($result)); 
echo '</select>';

}
                     ?>
        
    </div>
          <br>
    <div>
        <label>Latitude</label>
        <input class="cajas" type="text" name="latitud" id="latitud" value="<?php echo $latitud;?>" onKeyPress="return validar_monto(event)">
    </div>
        <br>
     <div>
        <label>Longitude</label>
        <input class="cajas" type="text" name="longitud" id="longitud" value="<?php echo $longitud;?>"  onKeyPress="return validar_monto(event)">
    </div>
         <br>
    <div>
        <label> Altitude </label>
        <input class="cajas" type="text" name="date" id="date" value="<?=$rs_per['Altitude']?>" onKeyPress="return validar_monto(event)">
    </div>
      <br>
    <div>
        <label>  Type of sample </label>
         <select class="cajas" name="col" id="col">
               <option value="<?=$rs_per['Type_of_sample']?>"><?=$rs_per['Type_of_sample']?></option> 
                <option value="soil">soil</option>     
                <option value="air">air</option> 
              
        <option  value="water">water</option>
         </select>
        
        
    
      
    </div>
   
   
      <br>
         <div>
        <label> Characteristics of sample </label>
<input class="cajas" type="text" name="sia" id="sia" value="<?=$rs_per['Characteristics_of_sample']?>">       

    </div>
       <br>
    <div>
        <label> Additional comments</label>
        <input class="cajas" type="text" name="sid" id="sid" value="<?=$rs_per['Additional_comments']?>">
    </div>
       <br>
       <div id="lab" style="display:none">
          
	  <label>Lab </label>
            
               <?php 
        $sqlk="SELECT Name FROM lab WHERE id_lab='$consul2'";		
		$cs3=mysql_query($sqlk,$cn);
                
		while($resul=mysql_fetch_array($cs3)){
			$consulLab=$resul[0];
                        }
         echo" <select name=lab id=lab class=cajas> "; 

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
                 
              
                 
                 </div>  
        <br>
   
      
 <div > 
     
        <input type="hidden" name="sub" id="sub" value="<?php echo $consul3?>"/>
<!--        <input type="hidden" name="lab" id="lab" value="<?php echo $consul2?>"/>-->
        
        <input class="button1" type="button" name="btn1" value="Upload" onclick="return ValidarFormulario(form_mapa);"/>
     <a href="index.php" >  <input name="cancelar" class="button2" type="button" id="cancelar" value="Cancel"  /></a>
 </div>
  </form>
</div>

   <div style="float:left; width: 40%" align="center">
    
           
        
    
      <div id="mapCanvas">
        <h2>Aquí irá el mapa!</h2>
   
      </div> 
       
       
        
       
     <div id="titleIma">
        
         <center><h2>Insert an Image</h2></center></div>
        <div id="buscarDireccion">
          <form name="formDireccion" method="POST" enctype="multipart/form-data">
       <table>
        <tr>
        <td><p style="font-size: 10px;font-family: verdana;font-weight: bold;">
  	   Dir:&nbsp;<input type="text" name="direccion" id="direccion" value="<?php echo $direccion;?>" style="width: 250px;font-size: 10px;font-family: verdana;font-weight: bold;" />
  	   &nbsp;&nbsp;<input type="button" value="Geo->Dir" onclick="codeAddress()">
  	</p>
  	</td>
		
	</tr>
     </table> 
     </form>
             </div>
    <div id="Panel_InsertImage">
       
        
        
        
        
 <form name="image" id="subeima" action="" method="post" enctype="multipart/form-data">
       
<div class="datagrid">

 <table border="2">
 <thead>
    <tr><th></th><th></th>
</thead>
         <tbody>


     
            <tr class="alt">
        
         <input type="hidden" id="txtid" name="txtid" value="<?=$rs_per['Name']?>">
           
            
         <tr class="alt">
   <input type="hidden" name="txttabla" value="Free"/>
   <input type="hidden" name="cz" id="cz"/>
   <input type="hidden" name="ca" id="ca"/>
<tr class="alt"> 
<td>Description</td>
<td><input type="text" name="descripcion"  /></td>
</tr>
<tr class="alt">
<td>Image</td>
<td><input type="file" name="imagen"  /></td>
</tr>
 
<tr class="alt">
<td></td>
    <td><input class="button1" type="submit" name="btnterceri"  value="Insert"/></td>
</tr>
 </tbody>
        </table>
 </div>
        </form>
              </div>
       </div>
   
<?php
     if(isset($_POST["btnterceri"])){
         
         	$btn=$_POST["btnterceri"];
                if($btn=="Insert"){
                
                    $rutaServidor='Ima';
$rutaTemporal=$_FILES['imagen']['tmp_name'];
$nombreImagen=$_FILES['imagen']['name'];
$rutaDestino=$rutaServidor.'/'.$nombreImagen;
move_uploaded_file($rutaTemporal, $rutaDestino);
$descrip=$_POST['descripcion'];
$org=$rs_per['ID_Sample'];
$tabla=$_POST['txttabla'];
$lat=$rs_per['Latitude'];
$long=$rs_per['Longitude'];
$sql="INSERT INTO imageplant( org_id,tabla,ruta,descripcion, Lat,Lon,lab ) values ('".$org."','".$tabla."','".$rutaDestino."','".$descrip."','".$lat."','".$long."','".$consul2."') ";
$resp=  mysql_query($sql,$cn);
if($resp){
  
    echo "<script> alert('Inserted successfully');</script>";
    
    

    
    
    
}
else
{
    echo "<script> alert('It could not be inserted');</script>";

    
}
                    
                }
         
         
         
         
         
         
     }
        
        
        
        
        
        ?>    
       
       <div >
           <div >
<form  name="primerIma" method="post" action="EliminarFoto.php" onsubmit="return confirmation()">         
    <?php
         
  $e="entra"; 
if($e=="entra")
 {
    		
             $consul=  mysql_query("Select * from imageplant where tabla='Free' ");
while($filas=  mysql_fetch_array($consul)){
     $id_2=$filas['idImage'];
$ruta=$filas['ruta'];
$desc=$filas['descripcion'];
    
?>
    <br>

  <input type="hidden"  name="Eo"  id="Eo" value="<?php echo  $id_2;?>">
  <input type="hidden"  name="submitButtonName"  id="submitButtonName" value="x" >
 <br>
<!--<a href="<?php print_r($ruta) ;?>" target="_blank"><img src="" width="50" height="50"> </a>-->

&nbsp;&nbsp;&nbsp
<?php
}
             
//             <a href="#" target="_blank"><img border="0" src="Imagenes/Fotos.png" name="pic1" width="158px"></a>
 }
            ?>
</form>
               </div>
</div>
       
              
 <script language="javascript" type="text/javascript"  >
    function confirmation() {
    if(confirm("Realmente desea eliminar?"))
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
    //VARIABLES GENERALES
		//declaras fuera del ready de jquery
    var nuevos_marcadores = [];
    
    //FUNCION PARA QUITAR MARCADORES DE MAPA
    function limpiar_marcadores(lista)
    {
        for(i in lista)
        {
            //QUITAR MARCADOR DEL MAPA
            lista[i].setMap(null);
        }
    }
    $(document).on("ready", function(){
        
        //VARIABLE DE FORMULARIO
        var formulario = $("#formulario");
         var formulario1 = $("#subeima");
        var punto = new google.maps.LatLng(20.8167,-101.317);
        var config = {
            zoom:16,
            center:punto,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        var mapa = new google.maps.Map( $("#mapa")[0], config );

        google.maps.event.addListener(mapa, "click", function(event){
           var coordenadas = event.latLng.toString();
           
           coordenadas = coordenadas.replace("(", "");
           coordenadas = coordenadas.replace(")", "");
           
           var lista = coordenadas.split(",");
           
           var direccion = new google.maps.LatLng(lista[0], lista[1]);
           //PASAR LA INFORMACIÓN AL FORMULARIO
         
           formulario.find("input[name='cx']").val(lista[0]);
           formulario.find("input[name='cy']").val(lista[1]);
           
         
             formulario1.find("input[name='cz']").val(lista[0]);
           formulario1.find("input[name='ca']").val(lista[1]);
           
           var marcador = new google.maps.Marker({
               //titulo:prompt("Titulo del marcador?"),
               position:direccion,
               map: mapa, 
               animation:google.maps.Animation.DROP,
               draggable:false
           });
           //ALMACENAR UN MARCADOR EN EL ARRAY nuevos_marcadores
           nuevos_marcadores.push(marcador);
           
           google.maps.event.addListener(marcador, "click", function(){

           });
           
           //BORRAR MARCADORES NUEVOS
           limpiar_marcadores(nuevos_marcadores);
           marcador.setMap(mapa);
        });
        
        $("#btn_grabar").on("click", function(){
            //INSTANCIAR EL FORMULARIO
            var f = $("#formulario");
           $.ajax({
               type:"POST",
               url:"iajax.php",
               dataType:"JSON",
               data:f.serialize()+"&tipo=grabar",
               success:function(data){
                   alert(data.mensaje);
               },
               beforeSend:function(){
                   
               },
               complete:function(){
                   
               }
           });
           return false;
        });
        
    });
    
   
</script>
    </body>
</html>

 <?php 
if($consul1=="Supermanager"){
    
     
    
    ?>
<script type="text/JavaScript">
    
    document.getElementById('lab').style.display='block';
   
        
      
    </script>
<?php   
}
?>