<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php 


include("bdConnection.php");



include('menu_prin.php');


$var="";


?>

<html>
    <head>
         <style>
        #mapa{
            position:absolute;
            top:4%;
            width: 547px;
            height: 600px;
            float:left;
            background: green;
        }
        #infor{
            width: 400px;
            height: 400px;
            float:left;
        }
        #cuadro7
{
        
position: absolute;

     top:17%;
     left: 60%;
   float: left;
   
}
    </style>
<!--IMPORTANTE RESPETAR EL ORDEN -->
<!--ESTILOS DE BOOSTRAP -->
<link href="css/bootstrap.min.css" rel="stylesheet" />
<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
<script type="text/javascript" src="http://code.jquery.com/jquery-2.0.3.min.js" ></script>
<!--ARCHIVOS JAVASCRIPT DE BOOTSTRAP -->
<script type="text/javascript" src="js/bootstrap.min.js" ></script>
<link rel="stylesheet" type="text/css" href="Menu_P/styles.css" />
<script>
    
    
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
           formulario.find("input[name='titulo']").focus();
           formulario.find("input[name='cx']").val(lista[0]);
           formulario.find("input[name='cy']").val(lista[1]);
           
           
           var marcador = new google.maps.Marker({
               //titulo:prompt("Titulo del marcador?"),
               position:direccion,
               map: mapa, 
               animation:google.maps.Animation.DROP,
               draggable:false
           });
           
           var marc = new google.maps.Marker({
        position: new google.maps.LatLng(20.8167,-101.317),
      map: map,
      title: 'Que lugar es este?',
         icon: 'http://google-maps-icons.googlecode.com/files/administration.png'
           });
           //ALMACENAR UN MARCADOR EN EL ARRAY nuevos_marcadores
           nuevos_marcadores.push(marcador);
            nuevos_marcadores.push(marc);
           
           google.maps.event.addListener(marcador, "click", function(){

           });
           google.maps.event.addListener(marc, "click", function(){

           });
           //BORRAR MARCADORES NUEVOS
           limpiar_marcadores(nuevos_marcadores);
           marcador.setMap(mapa);
               marc.setMap(mapa);
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
    
    
    
  // creamos un array con la información de todos los puntos:
// su nombre, latitud, longitud,
// el icono que le queramos asignar (ver más adelante)
// y un html totalmente personalizable a vuestro gusto, incluyendo imágenes y enlaces
var misPuntos = [
    ["Sagrada Familia", "41.403571", "2.174472", "icon1", "<div>html</div>"],
    ["Plaça Catalunya", "41.387097", "2.170072", "icon2", "<div>html</div>"],
    ["Estación de Sants", "41.379514", "2.140644", "icon3", "<div>html</div>"],
];

function inicializaGoogleMaps() {
    // Coordenadas del centro de nuestro recuadro principal
    var x =41.389624;
    var y = 2.15988563537;

    var mapOptions = {
        zoom: 13,
        center: new google.maps.LatLng(x, y),
        mapTypeId: google.maps.MapTypeId.ROADMAP
    }

    var map = new google.maps.Map(document.getElementById("capa-mapa"), mapOptions);
    setGoogleMarkers(map, misPuntos);
}

var markers = Array();
var infowindowActivo = false;
function setGoogleMarkers(map, locations) {
    // Definimos los iconos a utilizar con sus medidas
    var icon1 = new google.maps.MarkerImage(
        "http://www.vinx.info/uploads/editor/map-green.png",
        new google.maps.Size(20, 30)
    );
    var icon2 = new google.maps.MarkerImage(
        "http://www.vinx.info/uploads/editor/map-orange.png",
        new google.maps.Size(20, 30)
    );
    var icon3 = new google.maps.MarkerImage(
        "http://www.vinx.info/uploads/editor/map-red.png",
        new google.maps.Size(20, 30)
    );

    for(var i=0; i<locations.length; i++) {
        var elPunto = locations[i];
        var myLatLng = new google.maps.LatLng(elPunto[1], elPunto[2]);

        markers[i]=new google.maps.Marker({
            position: myLatLng,
            map: map,
            icon: eval(elPunto[3]),
            title: elPunto[0]
        });
        markers[i].infoWindow=new google.maps.InfoWindow({
            content: elPunto[4]
        });
        google.maps.event.addListener(markers[i], 'click', function(){      
            if(infowindowActivo)
                infowindowActivo.close();
            infowindowActivo = this.infoWindow;
            infowindowActivo.open(map, this);
        });
    }
}

inicializaGoogleMaps();


 



</script>

        <meta charset="UTF-8">
        <link rel="stylesheet" href="./mapa.css" type="text/css" />
        
        <title></title>
    </head>
    <body>


        <div id="cuadro7">
            
            
            <div id="mapa">
        <h2>Aquí irá el mapa!</h2>
    </div>
        </div>
        
         <br>
          <br>
           <br>
            <br>
             <br>
              <br>
    <center> <h3>Plants</h3></center>
         <div id="cuadro3">
            
                <form id="formulario_search" name="formulario_search" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
       
        <center>
            <div id="bus">
        <table border="2"  >
       <tr align="center">
        <td>Common Name</td>
        <td><input type="text" id="buscar" name="buscar" ></td>
        <td><input type="submit" name="submit" value="buscar" align="center"></td><br>
       </tr>
        </table>  </div>
            
            </center>
    </form>  
             
         </div>
         <div id="cuadro4">
            
             <?php
  if(isset($_POST['submit']))
 {
    		
                        
             $cod=$_POST["buscar"];
             $consul=  mysql_query("Select * from imageplant where descripcion like '$cod%'  ");
while($filas=  mysql_fetch_array($consul)){
$ruta=$filas['ruta'];
$desc=$filas['descripcion'];
$lat=$filas['Lat'];
$lon=$filas['Lon'];

    
?>
<br>

<a href="./In_Plant.php" target="_blank"><img src=" <?php echo './user/Cat/Plantas/template/'.$ruta;?> " width="200" height="150"> </a>

<br>

<?php echo $desc;?> 
<?php echo $lat?> 
<?php echo $lon;?> 
<?php
}
             

 }
            ?>
         </div>
    </body>
</html>

