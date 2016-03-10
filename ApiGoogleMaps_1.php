<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->



<?php 

 session_start();
include("bdConnection.php");



include('menu_prin.php');

$user = isset($_SESSION['user']) ? $_SESSION['user'] : null ;

$sql1="SELECT lab.id_lab FROM user,lab WHERE user.Name ='$user' AND user.lab=lab.id_lab";		
		$cs1=mysql_query($sql1,$cn);
                
		while($resul=mysql_fetch_array($cs1)){
			$consul2=$resul[0];
			}
                        
$var="";
//      $cod=$_SESSION['ciudad'];
  $entrada="1";
?>

<html>
    <head>
    
       
         <style>
             
    
 
    </style>
<!--IMPORTANTE RESPETAR EL ORDEN -->
<!--ESTILOS DE BOOSTRAP -->

<link rel="stylesheet" type="text/css" href="menu.css" />

<script>
     function confirmation() {
    if(confirm("Are you sure?"))
    {
        return true;
    }
    return false;
            }
    
   function MostrarPlan()
   {
  
           $( "#MuestraF" ).load( "Buscar_MPlant.php" );
 
			
                                	
   }
    function MostrarHost()
   {
     
           $( "#MuestraF" ).load( "Buscar_MHost.php" );
 
			
                                	
   }
     function MostrarFree()
   {
     
           $( "#MuestraF" ).load( "Buscar_Free.php" );
 
			
                                	
   }



</script>

        <meta charset="UTF-8">
       <script src="jquery-1.4.2.min.js" type="text/javascript"></script>
       <script src="jquery-ui-1.8.9.custom.min.js" type="text/javascript"></script>
         
        <title></title>
    </head>
    <body bgcolor="lightgrey">

<div id="baseMenu">
        </div>
        <div id="cuadro7">
            
            
            <div id="mapa">
                
            </div>
        </div>
        
  
   
        
              <form id="fil" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" >
              <div id="filtro">
                  <div id="filtro1">
                      <div align="left">
                      <p> <h2><em>  &nbsp;&nbsp;&nbsp &nbsp;&nbsp;&nbsp &nbsp;&nbsp;&nbspSamples </em></h2>
                         &nbsp;&nbsp;&nbsp &nbsp;&nbsp;&nbsp &nbsp;&nbsp;&nbsp
                         <div id="Type2">
                             <input type="radio" name="tipo" id="tipo_0" value="Plant"  onclick="MostrarPlan()" ><b>Plant &nbsp;&nbsp;&nbsp</b>
                             <input type="radio" name="tipo" id="tipo_1" value="Host"  onclick="MostrarHost()"><b>Host&nbsp;&nbsp;&nbsp</b>
                        <input type="radio" name="tipo" id="tipo_2" value="Free_living"  onclick="MostrarFree()"><b>Free Living&nbsp;&nbsp;&nbsp</b>
                   &nbsp;&nbsp;&nbsp &nbsp;&nbsp;&nbsp &nbsp;&nbsp;&nbsp     
                         </div>
</div>
                      <div align="left">
                          <p><h2><em>   &nbsp;&nbsp;&nbsp &nbsp;&nbsp;</em></h2></p>
                      <div id="Type1">
                      
               
            
                 <form id="formulario_search" name="formulario_search" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" >
           
                     <div id="MuestraF">
       
                </div>
    </form>  
                 
        
                 
                   </div>
                      
                   
                   <div id="Ciudades">
                       <input type="hidden" name="ciu" id="ciu" value="<?php echo $_SESSION['ciudad'] ?>">
                   </div>
                      </div>
                  </div>
                  
                
 
                  </div>
              
              </form>
              
         <div id="cuadro4">
             <div class="scroll_vertical"> 
                    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&language=es&callback=impri"></script>             
  <script> 
     

</script>             
    
                   <?php
                    
     
  if(isset($_POST['btn1']))
 {
        $Busqueda1=$_POST['buscar'];
            
        if($Busqueda1!="")
        {
    $Busqueda1=$_POST['buscar'];
           
   
   
             $consul=  mysql_query(" select imageplant.org_id,imageplant.idImage,imageplant.descripcion,imageplant.ruta,plant_info.Longitud,plant_info.Latitud from imageplant inner join plant_info on imageplant.Org_id=plant_info.Plant_ID where Common_Name='$Busqueda1' ");
       
           $numero_rows = mysql_num_rows($consul);
     $a="";       
           $b="";        
           $c="";
while($filas=mysql_fetch_array($consul)){
$ruta=$filas['ruta'];
   $id_2=$filas['idImage'];
$id_Sample=$filas['org_id'];
$lat=$filas['Latitud'];
$lon=$filas['Longitud'];    
$desc=$filas['descripcion'];  

 $a.=$lat.","; 
 $b.=$lon.",";
$c.=$desc.",";

  

  $sql1="SELECT Common_Name FROM plant_info WHERE Plant_ID='$id_Sample'";		
		$cs1=mysql_query($sql1,$cn);
                
		while($resul=mysql_fetch_array($cs1)){
			$PLANT=$resul[0];
			}
                        
                        

?>         
                
                
               

                 <div id="PanelImagen">

                     <form id="Inmueble" name="Inmueble" method="post"action="EliminarFoto.php" onsubmit="return confirmation()" >
                        <center> <?php echo  $PLANT;?></center>
                         <br>
                         <a href="./user/Cat/Catalogos_Ajax/Plant_information/<?php echo $ruta;?> " target="_blank"><img src="./user/Cat/Catalogos_Ajax/Plant_information/<?php echo $ruta;?> " width="130" height="90"> </a>

<br>
 <a href="user/Cat/Catalogos_Ajax/Plant_information/busMap_Act.php?id=<?php echo $id_Sample?>" target="_blank"><?php echo $desc?></a>
<input type="hidden" id="id_Inmueble" name="id_Inmueble" value="<?php echo $ruta;?> ">
<input type="hidden"  name="Eo"  id="Eo" value="<?php echo  $id_2;?>">
<input type="submit"   class="cajas" value="Delete">
</form>


</div>
     
<script>

</script> 
 
<?php


}
    
        
        
echo"<script>
    
    
 
       
    function impri(){
    
         var total='$numero_rows';
               
             
                var element =['$a'.concat( '0')];
               
                 var element1 =['$b'.concat( '0')];
                     
                 var element2 =['$c'.concat( '0')];
               
          var input = document.createElement('input');
    input.setAttribute('type', 'hidden');
       input.setAttribute('id', 'coord1');
           input.setAttribute('name', 'coord1');
    input.setAttribute('value', element);
    document.body.appendChild(input);


   var input2 = document.createElement('input');
    input2.setAttribute('type', 'hidden');
       input2.setAttribute('id', 'coord2');
           input2.setAttribute('name', 'coord2');
    input2.setAttribute('value', element1);
    document.body.appendChild(input2);
    
   var input3 = document.createElement('input');
    input3.setAttribute('type', 'hidden');
       input3.setAttribute('id', 'coord3');
           input3.setAttribute('name', 'coord3');
    input3.setAttribute('value', element2);
    document.body.appendChild(input3);
    

  var a2p=document.getElementById('coord1').value;
          var a2s=document.getElementById('coord2').value;
          var a3s=document.getElementById('coord3').value;

var arregloDeCord1 = a2p.split(',');
    var arregloDeCord2=a2s.split(',');
     var arregloDeCord3=a3s.split(',');
   
        
    
   var mapOptions = {
          center: new google.maps.LatLng(10,300),
          zoom: 14,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        
        var map = new google.maps.Map(document.getElementById('mapa'),mapOptions);
 
      
      
   
        for(var i=0;i<total+2;i++){
       


 var posi = new google.maps.LatLng(10, -125);
 
        var marker = new google.maps.Marker({
            position: posi,
            map: map,
            title:'Inmueble',
            animation: google.maps.Animation.DROP
        }); 

  }
 





 
}

</script>";
 
        }
        else{
            
            
             $consul=  mysql_query(" select imageplant.org_id,imageplant.idImage,imageplant.descripcion,imageplant.ruta,plant_info.Longitud,plant_info.Latitud from imageplant inner join plant_info on imageplant.Org_id=plant_info.Plant_ID where tabla='planta' ");
       
           $numero_rows = mysql_num_rows($consul);
     $a="";       
           $b="";        
           $c="";
while($filas=mysql_fetch_array($consul)){
$ruta=$filas['ruta'];
$id_Sample=$filas['org_id'];
    $id_2=$filas['idImage'];
$lat=$filas['Latitud'];
$lon=$filas['Longitud'];    
$desc=$filas['descripcion'];  

 $a.=$lat.","; 
 $b.=$lon.",";
$c.=$desc.",";

    

  

?>         
                
                
               

                 <div id="PanelImagen">

                     <form id="Inmueble" name="Inmueble" method="post" action="EliminarFoto.php" onsubmit="return confirmation()" >
                         <center> <?php echo  $PLANT;?></center>
                         <br>
                         <a href="./user/Cat/Catalogos_Ajax/Plant_information/<?php echo $ruta;?> " target="_blank"><img src="./user/Cat/Catalogos_Ajax/Plant_information/<?php echo $ruta;?> " width="130" height="90"> </a>

<br>
<a href="user/Cat/Catalogos_Ajax/Plant_information/busMap_Act.php?id=<?php echo $id_Sample?>" target="_blank"><?php echo $desc?></a>
<input type="hidden" id="id_Inmueble" name="id_Inmueble" value="<?php echo $ruta;?> ">
<input type="hidden"  name="Eo"  id="Eo" value="<?php echo  $id_2;?>">
<input type="submit"   class="cajas" value="Delete">
</form>


</div>
     
<script>

</script> 
 
<?php


}
    
        
        
echo"<script>
    

 
     impri()   
    function impri(){
    
         var total='$numero_rows';
               
             
                var element =['$a'.concat( '0')];
               
                 var element1 =['$b'.concat( '0')];
                     
                 var element2 =['$c'.concat( '0')];
               
          var input = document.createElement('input');
    input.setAttribute('type', 'hidden');
       input.setAttribute('id', 'coord1');
           input.setAttribute('name', 'coord1');
    input.setAttribute('value', element);
    document.body.appendChild(input);


   var input2 = document.createElement('input');
    input2.setAttribute('type', 'hidden');
       input2.setAttribute('id', 'coord2');
           input2.setAttribute('name', 'coord2');
    input2.setAttribute('value', element1);
    document.body.appendChild(input2);
    
   var input3 = document.createElement('input');
    input3.setAttribute('type', 'hidden');
       input3.setAttribute('id', 'coord3');
           input3.setAttribute('name', 'coord3');
    input3.setAttribute('value', element2);
    document.body.appendChild(input3);
    

  var a2p=document.getElementById('coord1').value;
          var a2s=document.getElementById('coord2').value;
          var a3s=document.getElementById('coord3').value;

var arregloDeCord1 = a2p.split(',');
    var arregloDeCord2=a2s.split(',');
     var arregloDeCord3=a3s.split(',');
   
        
    
   var mapOptions = {
          center: new google.maps.LatLng(20.8159,-101.316),
          zoom: 14,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        
        var map = new google.maps.Map(document.getElementById('mapa'),mapOptions);
 
      
      
   
        for(var i=0;i<total+2;i++){
       


 var posi = new google.maps.LatLng(20.8159,-101.316 );
 
        var marker = new google.maps.Marker({
            position: posi,
            map: map,
            title:'Inmueble',
            animation: google.maps.Animation.DROP
        }); 

  }
 




 
}

</script>";
 
        
       
        }
            
            
 }
 
   if(isset($_POST['btn2']))
 {
        
        $Busqueda1=$_POST['buscar'];
            
        if($Busqueda1!="")
        {
    $Busqueda1=$_POST['buscar'];
           
   
   
             $consul=  mysql_query(" select imageplant.org_id,imageplant.idImage,imageplant.descripcion,imageplant.ruta,host_info.Longitude,host_info.Latitude from imageplant inner join host_info on imageplant.Org_id=hostt_info.ID_Host where Name='$Busqueda1'");
       
           $numero_rows = mysql_num_rows($consul);
     $a="";       
           $b="";        
           $c="";
while($filas=mysql_fetch_array($consul)){
$ruta=$filas['ruta'];
$id_Sample=$filas['org_id'];
  $id_2=$filas['idImage'];
$lat=$filas['Latitude'];
$lon=$filas['Longitude'];    
$desc=$filas['descripcion'];  

 $a.=$lat.","; 
 $b.=$lon.",";
$c.=$desc.",";

    
$sql1="SELECT Name FROM host_info WHERE ID_Host='$id_Sample'";		
		$cs1=mysql_query($sql1,$cn);
                
		while($resul=mysql_fetch_array($cs1)){
			$HOST=$resul[0];
			}
  

?>         
                
                
               

                 <div id="PanelImagen">

                     <form id="Inmueble" name="Inmueble" method="post" action="EliminarFoto.php" onsubmit="return confirmation()" >
                          <center> <?php echo  $HOST;?></center>
                         <br>
                         <a href="./user/Cat/Catalogos_Ajax/Host/<?php echo $ruta;?> " target="_blank"><img src="./user/Cat/Catalogos_Ajax/Host/<?php echo $ruta;?> " width="130" height="90"> </a>

<br>
<a href="user/Cat/Catalogos_Ajax/Host/busMap_Act.php?id=<?php echo $id_Sample?>" target="_blank"><?php echo $desc?></a>
<input type="hidden" id="id_Inmueble" name="id_Inmueble" value="<?php echo $ruta;?> ">
<input type="hidden"  name="Eo"  id="Eo" value="<?php echo  $id_2;?>">
<input type="submit"   class="cajas" value="Delete">
</form>


</div>
     
<script>

</script> 
 
<?php


}
    
        
        
echo"<script>
    

 
       
    function impri(){
    
         var total='$numero_rows';
               
             
                var element =['$a'.concat( '0')];
               
                 var element1 =['$b'.concat( '0')];
                     
                 var element2 =['$c'.concat( '0')];
               
          var input = document.createElement('input');
    input.setAttribute('type', 'hidden');
       input.setAttribute('id', 'coord1');
           input.setAttribute('name', 'coord1');
    input.setAttribute('value', element);
    document.body.appendChild(input);


   var input2 = document.createElement('input');
    input2.setAttribute('type', 'hidden');
       input2.setAttribute('id', 'coord2');
           input2.setAttribute('name', 'coord2');
    input2.setAttribute('value', element1);
    document.body.appendChild(input2);
    
   var input3 = document.createElement('input');
    input3.setAttribute('type', 'hidden');
       input3.setAttribute('id', 'coord3');
           input3.setAttribute('name', 'coord3');
    input3.setAttribute('value', element2);
    document.body.appendChild(input3);
    

  var a2p=document.getElementById('coord1').value;
          var a2s=document.getElementById('coord2').value;
          var a3s=document.getElementById('coord3').value;

var arregloDeCord1 = a2p.split(',');
    var arregloDeCord2=a2s.split(',');
     var arregloDeCord3=a3s.split(',');
   
        
    
   var mapOptions = {
          center: new google.maps.LatLng(arregloDeCord1[0],arregloDeCord2[0]),
          zoom: 14,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        
        var map = new google.maps.Map(document.getElementById('mapa'),mapOptions);
 
      
      
   
        for(var i=0;i<total+2;i++){
       


 var posi = new google.maps.LatLng(arregloDeCord1[i], arregloDeCord2[i]);
 
        var marker = new google.maps.Marker({
            position: posi,
            map: map,
            title:'Inmueble',
            animation: google.maps.Animation.DROP
        }); 

  }
 





 
}

</script>";
 
        }
        else{
            
            
             $consul=  mysql_query(" select imageplant.org_id,imageplant.idImage,imageplant.descripcion,imageplant.ruta,host_info.Longitude,host_info.Latitude from imageplant inner join host_info on imageplant.Org_id=host_info.ID_Host where tabla='Host' ");
       
           $numero_rows = mysql_num_rows($consul);
     $a="";       
           $b="";        
           $c="";
while($filas=mysql_fetch_array($consul)){
$ruta=$filas['ruta'];
$id_Sample=$filas['org_id'];
   $id_2=$filas['idImage']; 
$lat=$filas['Latitude'];
$lon=$filas['Longitude'];    
$desc=$filas['descripcion'];  

 $a.=$lat.","; 
 $b.=$lon.",";
$c.=$desc.",";

    

      


?>         
                
                
               

                 <div id="PanelImagen">

 <form id="Inmueble" name="Inmueble" method="post" action="EliminarFoto.php" onsubmit="return confirmation()" >
    <center> <?php echo  $HOST;?></center>
                         <br>
     <a href="./user/Cat/Catalogos_Ajax/Host/<?php echo $ruta;?> " target="_blank"><img src="./user/Cat/Catalogos_Ajax/Host/<?php echo $ruta;?> " width="130" height="90"> </a>

<br>
<a href="user/Cat/Catalogos_Ajax/Host/busMap_Act.php?id=<?php echo $id_Sample?>" target="_blank"><?php echo $desc?></a>
<input type="hidden" id="id_Inmueble" name="id_Inmueble" value="<?php echo $ruta;?> ">
 <input type="hidden"  name="Eo"  id="Eo" value="<?php echo  $id_2;?>">
<input type="submit"   class="cajas" value="Delete">
</form>


</div>
     
<script>

</script> 
 
<?php


}
    
        
        
echo"<script>
    

 
       
    function impri(){
    
         var total='$numero_rows';
               
             
                var element =['$a'.concat( '0')];
               
                 var element1 =['$b'.concat( '0')];
                     
                 var element2 =['$c'.concat( '0')];
               
          var input = document.createElement('input');
    input.setAttribute('type', 'hidden');
       input.setAttribute('id', 'coord1');
           input.setAttribute('name', 'coord1');
    input.setAttribute('value', element);
    document.body.appendChild(input);


   var input2 = document.createElement('input');
    input2.setAttribute('type', 'hidden');
       input2.setAttribute('id', 'coord2');
           input2.setAttribute('name', 'coord2');
    input2.setAttribute('value', element1);
    document.body.appendChild(input2);
    
   var input3 = document.createElement('input');
    input3.setAttribute('type', 'hidden');
       input3.setAttribute('id', 'coord3');
           input3.setAttribute('name', 'coord3');
    input3.setAttribute('value', element2);
    document.body.appendChild(input3);
    

  var a2p=document.getElementById('coord1').value;
          var a2s=document.getElementById('coord2').value;
          var a3s=document.getElementById('coord3').value;

var arregloDeCord1 = a2p.split(',');
    var arregloDeCord2=a2s.split(',');
     var arregloDeCord3=a3s.split(',');
   
        
    
   var mapOptions = {
          center: new google.maps.LatLng(arregloDeCord1[0],arregloDeCord2[0]),
          zoom: 14,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        
        var map = new google.maps.Map(document.getElementById('mapa'),mapOptions);
 
      
      
   
        for(var i=0;i<total+2;i++){
       


 var posi = new google.maps.LatLng(arregloDeCord1[i], arregloDeCord2[i]);
 
        var marker = new google.maps.Marker({
            position: posi,
            map: map,
            title:'Inmueble',
            animation: google.maps.Animation.DROP
        }); 

  }
 





 
}

</script>";
 
        
       
        }
            
 }
   if(isset($_POST['btn3']))
 {
        
                $Busqueda1=$_POST['buscar'];
            
        if($Busqueda1!="")
        {
    $Busqueda1=$_POST['buscar'];
           
   
   
             $consul=  mysql_query(" select imageplant.org_id,imageplant.idImage,imageplant.descripcion,imageplant.ruta,free_living.Longitude,free_living.Latitude from imageplant inner join free_living on imageplant.Org_id=free_living.ID_Sample where Name='$Busqueda1' ");
       
           $numero_rows = mysql_num_rows($consul);
     $a="";       
           $b="";        
           $c="";
while($filas=mysql_fetch_array($consul)){
$ruta=$filas['ruta'];
$id_Sample=$filas['org_id'];
   $id_2=$filas['idImage']; 
$lat=$filas['Latitude'];
$lon=$filas['Longitude'];    
$desc=$filas['descripcion'];  

 $a.=$lat.","; 
 $b.=$lon.",";
$c.=$desc.",";

    $sql1="SELECT Name FROM free_living WHERE ID_Sample='$id_Sample'";		
		$cs1=mysql_query($sql1,$cn);
                
		while($resul=mysql_fetch_array($cs1)){
			$FREE=$resul[0];
			}

  

?>         
                
                
               

                 <div id="PanelImagen">

 <form id="Inmueble" name="Inmueble" method="post" action="EliminarFoto.php" onsubmit="return confirmation()" >
      <center> <?php echo  $FREE;?></center>
                         <br>
     <a href="./user/Cat/Catalogos_Ajax/Free/<?php echo $ruta;?>" target="_blank"><img src="./user/Cat/Catalogos_Ajax/Free/<?php echo $ruta;?> " width="130" height="90"> </a>

<br>
<a href="user/Cat/Catalogos_Ajax/Free/busMap_Act.php?id=<?php echo $id_Sample?>" target="_blank"><?php echo $desc?></a>
<input type="hidden" id="id_Inmueble" name="id_Inmueble" value="<?php echo $ruta;?> ">
 <input type="hidden"  name="Eo"  id="Eo" value="<?php echo  $id_2;?>">
<input type="submit"   class="cajas" value="Delete">
</form>


</div>
     
<script>

</script> 
 
<?php


}
    
        
        
echo"<script>
    

 
       
    function impri(){
    
         var total='$numero_rows';
               
             
                var element =['$a'.concat( '0')];
               
                 var element1 =['$b'.concat( '0')];
                     
                 var element2 =['$c'.concat( '0')];
               
          var input = document.createElement('input');
    input.setAttribute('type', 'hidden');
       input.setAttribute('id', 'coord1');
           input.setAttribute('name', 'coord1');
    input.setAttribute('value', element);
    document.body.appendChild(input);


   var input2 = document.createElement('input');
    input2.setAttribute('type', 'hidden');
       input2.setAttribute('id', 'coord2');
           input2.setAttribute('name', 'coord2');
    input2.setAttribute('value', element1);
    document.body.appendChild(input2);
    
   var input3 = document.createElement('input');
    input3.setAttribute('type', 'hidden');
       input3.setAttribute('id', 'coord3');
           input3.setAttribute('name', 'coord3');
    input3.setAttribute('value', element2);
    document.body.appendChild(input3);
    

  var a2p=document.getElementById('coord1').value;
          var a2s=document.getElementById('coord2').value;
          var a3s=document.getElementById('coord3').value;

var arregloDeCord1 = a2p.split(',');
    var arregloDeCord2=a2s.split(',');
     var arregloDeCord3=a3s.split(',');
   
        
    
   var mapOptions = {
          center: new google.maps.LatLng(arregloDeCord1[0],arregloDeCord2[0]),
          zoom: 14,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        
        var map = new google.maps.Map(document.getElementById('mapa'),mapOptions);
 
      
      
   
        for(var i=0;i<total+2;i++){
       


 var posi = new google.maps.LatLng(arregloDeCord1[i], arregloDeCord2[i]);
 
        var marker = new google.maps.Marker({
            position: posi,
            map: map,
            title:'Inmueble',
            animation: google.maps.Animation.DROP
        }); 

  }
 





 
}

</script>";
 
        }
        else{
            
            
             $consul=  mysql_query(" select imageplant.org_id,imageplant.idImage,imageplant.descripcion,imageplant.ruta,free_living.Longitude,free_living.Latitude from imageplant inner join free_living on imageplant.Org_id=free_living.ID_Sample where tabla='Free' ");
       
           $numero_rows = mysql_num_rows($consul);
     $a="";       
           $b="";        
           $c="";
while($filas=mysql_fetch_array($consul)){
$ruta=$filas['ruta'];
$id_Sample=$filas['org_id'];
   $id_2=$filas['idImage']; 
$lat=$filas['Latitude'];
$lon=$filas['Longitude'];    
$desc=$filas['descripcion'];  

 $a.=$lat.","; 
 $b.=$lon.",";
$c.=$desc.",";

    
$sql1="SELECT Name FROM free_living WHERE ID_Sample='$id_Sample'";		
		$cs1=mysql_query($sql1,$cn);
                
		while($resul=mysql_fetch_array($cs1)){
			$FREE=$resul[0];
			}
  
  

?>         
                
                
               

                 <div id="PanelImagen">

 <form id="Inmueble" name="Inmueble" method="post" action="EliminarFoto.php" onsubmit="return confirmation()" >
      <center> <?php echo  $FREE;?></center>
                         <br>
     <a href="./user/Cat/Catalogos_Ajax/Free/<?php echo $ruta;?>" target="_blank"><img src="./user/Cat/Catalogos_Ajax/Free/<?php echo $ruta;?> " width="130" height="90"> </a>

<br>
<a href="user/Cat/Catalogos_Ajax/Free/busMap_Act.php?id=<?php echo $id_Sample?>" target="_blank"><?php echo $desc?></a>
<input type="hidden" id="id_Inmueble" name="id_Inmueble" value="<?php echo $ruta;?> ">
 <input type="hidden"  name="Eo"  id="Eo" value="<?php echo  $id_2;?>">
<input type="submit"   class="cajas" value="Delete">
</form>


</div>
     
<script>

</script> 
 
<?php


}
    
        
        
echo"<script>
    

 
       
    function impri(){
    
         var total='$numero_rows';
               
             
                var element =['$a'.concat( '0')];
               
                 var element1 =['$b'.concat( '0')];
                     
                 var element2 =['$c'.concat( '0')];
               
          var input = document.createElement('input');
    input.setAttribute('type', 'hidden');
       input.setAttribute('id', 'coord1');
           input.setAttribute('name', 'coord1');
    input.setAttribute('value', element);
    document.body.appendChild(input);


   var input2 = document.createElement('input');
    input2.setAttribute('type', 'hidden');
       input2.setAttribute('id', 'coord2');
           input2.setAttribute('name', 'coord2');
    input2.setAttribute('value', element1);
    document.body.appendChild(input2);
    
   var input3 = document.createElement('input');
    input3.setAttribute('type', 'hidden');
       input3.setAttribute('id', 'coord3');
           input3.setAttribute('name', 'coord3');
    input3.setAttribute('value', element2);
    document.body.appendChild(input3);
    

  var a2p=document.getElementById('coord1').value;
          var a2s=document.getElementById('coord2').value;
          var a3s=document.getElementById('coord3').value;

var arregloDeCord1 = a2p.split(',');
    var arregloDeCord2=a2s.split(',');
     var arregloDeCord3=a3s.split(',');
   
        
    
   var mapOptions = {
          center: new google.maps.LatLng(arregloDeCord1[0],arregloDeCord2[0]),
          zoom: 14,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        
        var map = new google.maps.Map(document.getElementById('mapa'),mapOptions);
 
      
      
   
        for(var i=0;i<total+2;i++){
       


 var posi = new google.maps.LatLng(arregloDeCord1[i], arregloDeCord2[i]);
 
        var marker = new google.maps.Marker({
            position: posi,
            map: map,
            title:'Inmueble',
            animation: google.maps.Animation.DROP
        }); 

  }
 





 
}

</script>";
 
        
       
        }
 }
             ?>

            



          






<script>
 
    </script>
    

     </div>    
</div>
    </body>
    
</html>



    
    
    
<?php

$sql = "select Common_Name from plant_info  where lab='$consul2'";
$res = mysql_query($sql);
$arreglo_php = array(); 
if(mysql_num_rows($res)==0)
   array_push($arreglo_php, "No hay datos");
else{
  while($palabras = mysql_fetch_array($res)){
    array_push($arreglo_php, $palabras["Common_Name"]);
  }
}


?>


<script>
  $(function(){
    var autocompletar = new Array();
    <?php //Esto es un poco de php para obtener lo que necesitamos
     for($p = 0;$p < count($arreglo_php); $p++){ //usamos count para saber cuantos elementos hay ?>
       autocompletar.push('<?php echo $arreglo_php[$p]; ?>');
     <?php } ?>
     $("#buscar").autocomplete({ //Usamos el ID de la caja de texto donde lo queremos
       source: autocompletar //Le decimos que nuestra fuente es el arreglo
     });
  });
</script>


<script>
    