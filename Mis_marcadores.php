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
  
  
  
  
  
  
             $consul=  mysql_query(" select imageplant.org_id,imageplant.idImage,imageplant.descripcion,imageplant.ruta,plant_info.Longitud,plant_info.Latitud from imageplant inner join plant_info on imageplant.Org_id=plant_info.Plant_ID where tabla='planta' and imageplant.lab='$consul2'  ");
       
           $numero_rows = mysql_num_rows($consul);
          
            $miarrayA = array();
             $miarrayB = array();
              $miarrayC = array();
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

array_push($miarrayA, $lat);
array_push($miarrayB, $lon);
array_push($miarrayC, $desc);
}

 $a.=$lat.","; 
 $b.=$lon.",";
$c.=$desc.",";

for($i = 1; $i <= 3; $i++) 
{ 
    ${'$cars'}[0] = $miarrayC; 
    ${'$cars'}[1] = $miarrayB; 
     ${'$cars'}[2] = $miarrayA; 
} 


?>

<!doctype html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <style type="text/css">
    #mapa { height: 500px; }
    </style>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <script type="text/javascript">
    function initialize() {
        var marcadores=<?php echo json_encode($cars);?>;
    
      var map = new google.maps.Map(document.getElementById('mapa'), {
        zoom: 7,
        center: new google.maps.LatLng(41.503, -5.744),
        mapTypeId: google.maps.MapTypeId.ROADMAP
      });
      var infowindow = new google.maps.InfoWindow();
      var marker, i;
      for (i = 0; i < marcadores.length; i++) {  
        marker = new google.maps.Marker({
          position: new google.maps.LatLng(marcadores[i][1], marcadores[i][2]),
          map: map
        });
        google.maps.event.addListener(marker, 'click', (function(marker, i) {
          return function() {
            infowindow.setContent(marcadores[i][0]);
            infowindow.open(map, marker);
          }
        })(marker, i));
      }
    }
    google.maps.event.addDomListener(window, 'load', initialize);
    </script>
  </head>
  <body>
    <div id="mapa"></div>
  </body>
</html>