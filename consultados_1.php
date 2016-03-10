<?php 
include "Busqueda_Av.php";





?>
<style>
    body {font-family: Arial, Helvetica, sans-serif;}


#ubicacion{
position: absolute;
left:500%; 
}

    #tab
    {  
        background-color:  #7FCDFE;
    }
    .datagrid table {
        text-align: left; width: 50%; 
        position: absolute;
        left:30%;
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
.Boton1{
  
        font-size:16px;
        font-family:Verdana,Helvetica;
        font-weight:bold;
        color:white;
        background:rgb(255,90,95);
        border:0px;
   
        width:130px;
        height:30px;
       
       }    
</style>
<form name="primerIma" method="get" action="Ejemm.php"  >
<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//Configuracion de la conexion a base de datos
	include("bdConnection.php");

        
 
$user = isset($_SESSION['user']) ? $_SESSION['user'] : null ;

$sql1="SELECT lab.id_lab FROM user,lab WHERE user.Name ='$user' AND user.lab=lab.id_lab";		
		$cs1=mysql_query($sql1,$cn);
                
		while($resul=mysql_fetch_array($cs1)){
			$consul2=$resul[0];
                           
			}
	//Variables recibidas por POST de nuestra conexi�n AJAX
	
//	
//        $iso1=$_POST['Date1Iso'];
//        $iso2=$_POST['Date2Iso'];
      $nombre_jugador = null;
 /***VARIABLES POR GET ***/

$numero = count($_GET);
$tags = array_keys($_GET);// obtiene los nombres de las varibles
$valores = array_values($_GET);// obtiene los valores de las varibles

$arre=array_keys($_GET);
// crea las variables y les asigna el valor
for($i=0;$i<$numero;$i++){
$$tags[$i]=$valores[$i];
}

$entra=0;

if( isset( $_GET['consulta'] ) && ! empty( $_GET['consulta'] ) ) {
    $cons=$_GET['consulta'];
    $table=$_GET['tabla1'];
//   $table = 'organism_information'; // Cambia este S�LO si sabes lo que hace.
    if($entra===0){
$query = "SELECT $cons FROM $table ";
$entra=1;
    }
$where = " WHERE";
$and	= 0;
 
}

if( isset( $_GET['consulta1'] ) && ! empty( $_GET['consulta1'] ) ) {
    $cons=$_GET['consulta1'];
    $table=$_GET['tabla2'];
//   $table = 'organism_information'; // Cambia este S�LO si sabes lo que hace.
    if($entra===0){
$query = "SELECT $cons FROM organism_information INNER JOIN $table on organism_information.Org_ID=$table.Org_ID";
$entra=1;
    }
    else
    {
        $query .= " INNER JOIN $table on organism_information.Org_ID=$table.Org_ID";
    }
$where = " WHERE";
$and	= 0;
 
}

if( isset( $_GET['consulta2'] ) && ! empty( $_GET['consulta2'] ) ) {
    $cons=$_GET['consulta2'];
    $table=$_GET['tabla3'];
//   $table = 'organism_information'; // Cambia este S�LO si sabes lo que hace.
    if($entra===0){
$query = "SELECT $cons FROM organism_information INNER JOIN $table on organism_information.Org_ID=$table.Org_ID";
$entra=1;
    }
    else
    {
        $query .= " INNER JOIN $table on organism_information.Org_ID=$table.Org_ID";
    }
$where = " WHERE";
$and	= 0;
 
}

if( isset( $_GET['consulta3'] ) && ! empty( $_GET['consulta3'] ) ) {
    $cons=$_GET['consulta3'];
    $table=$_GET['tabla4'];
//   $table = 'organism_information'; // Cambia este S�LO si sabes lo que hace.
    if($entra===0){
$query = "SELECT $cons FROM organism_information INNER JOIN $table on organism_information.Org_ID=$table.Org_ID";
$entra=1;
    }
   else
    {
        $query .= " INNER JOIN $table on organism_information.Org_ID=$table.Org_ID";
    }
$where = " WHERE";
$and	= 0;
 
}
if( isset( $_GET['consulta4'] ) && ! empty( $_GET['consulta4'] ) ) {
    $cons=$_GET['consulta4'];
    $table=$_GET['tabla5'];
//   $table = 'organism_information'; // Cambia este S�LO si sabes lo que hace.
    if($entra===0){
$query = "SELECT $cons FROM organism_information INNER JOIN $table on organism_information.Org_ID=$table.Org_ID";
$entra=1;
    }
   else
    {
        $query .= " INNER JOIN $table on organism_information.Org_ID=$table.Org_ID";
    }
$where = " WHERE";
$and	= 0;
 
}
if( isset( $_GET['consulta5'] ) && ! empty( $_GET['consulta5'] ) ) {
    $cons=$_GET['consulta5'];
    $table=$_GET['tabla6'];
//   $table = 'organism_information'; // Cambia este S�LO si sabes lo que hace.
    if($entra===0){
$query = "SELECT $cons FROM organism_information INNER JOIN $table on organism_information.Org_ID=$table.Org_ID";
$entra=1;
    }
    else
    {
        $query .= " INNER JOIN $table on organism_information.Org_ID=$table.Org_ID";
    }
$where = " WHERE";
$and	= 0;
 
}
if( isset( $_GET['consulta6'] ) && ! empty( $_GET['consulta6'] ) ) {
    $cons=$_GET['consulta6'];
    $table=$_GET['tabla7'];
//   $table = 'organism_information'; // Cambia este S�LO si sabes lo que hace.
    if($entra===0){
$query = "SELECT $cons FROM organism_information INNER JOIN $table on organism_information.Org_ID=$table.Org_ID";
$entra=1;
    }
   else
    {
        $query .= " INNER JOIN $table on organism_information.Org_ID=$table.Org_ID";
    }
$where = " WHERE";
$and	= 0;
 
}
if( isset( $_GET['consulta7'] ) && ! empty( $_GET['consulta7'] ) ) {
    $cons=$_GET['consulta7'];
    $table=$_GET['tabla8'];
//   $table = 'organism_information'; // Cambia este S�LO si sabes lo que hace.
    if($entra===0){
$query = "SELECT $cons FROM organism_information INNER JOIN $table on organism_information.Org_ID=$table.Org_ID";
$entra=1;
    }
    else
    {
        $query .= " INNER JOIN $table on organism_information.Org_ID=$table.Org_ID";
    }
$where = " WHERE";
$and	= 0;
 
}
if( isset( $_GET['consulta8'] ) && ! empty( $_GET['consulta8'] ) ) {
    $cons=$_GET['consulta8'];
    $table=$_GET['tabla9'];
//   $table = 'organism_information'; // Cambia este S�LO si sabes lo que hace.
    if($entra===0){
$query = "SELECT $cons FROM organism_information INNER JOIN $table on organism_information.Org_ID=$table.Org_ID";
$entra=1;
    }
    else
    {
        $query .= " INNER JOIN $table on organism_information.Org_ID=$table.Org_ID";
    }
$where = " WHERE";
$and	= 0;
 
}
//if( isset( $_GET['consulta'] ) && ! empty( $_GET['consulta'] ) ) {
//    $cons=$_GET['consulta'];
//    $table=$_GET['tabla1'];
////   $table = 'organism_information'; // Cambia este S�LO si sabes lo que hace.
//$query = "SELECT $cons FROM $table";
//if( isset( $_GET['consulta1'] ) && ! empty( $_GET['consulta1'] ) ) {
//$table=$_GET['tabla2'];
//    $query.="INNER JOIN $table on organism_information.Org_ID=$table.Org_ID";
//    if( isset( $_GET['consulta2'] ) && ! empty( $_GET['consulta2'] ) ) {
//$table=$_GET['tabla3'];
//    $query.="INNER JOIN $table on organism_information.Org_ID=$table.Org_ID";
//    
//}
//   if( isset( $_GET['consulta3'] ) && ! empty( $_GET['consulta3'] ) ) {
//$table=$_GET['tabla4'];
//    $query.="INNER JOIN $table on organism_information.Org_ID=$table.Org_ID";
//    
//}
//}
//
//$where = " WHERE";
//$and	= 0; 
// 
//}
//if( isset( $_GET['consulta1'] ) && ! empty( $_GET['consulta1'] ) ) {
//    $cons=$_GET['consulta1'];
//    $table=$_GET['tabla2'];
////   $table = 'organism_information'; // Cambia este S�LO si sabes lo que hace.
//$query = "SELECT $cons FROM organism_information INNER JOIN $table on organism_information.Org_ID=$table.Org_ID";
//if( isset( $_GET['consulta2'] ) && ! empty( $_GET['consulta2'] ) ) {
//    $cons=$_GET['consulta2'];
//    $table=$_GET['tabla3'];
////   $table = 'organism_information'; // Cambia este S�LO si sabes lo que hace.
//$query .= " INNER JOIN $table on organism_information.Org_ID=$table.Org_ID";
//
//
// 
//}
//if( isset( $_GET['consulta3'] ) && ! empty( $_GET['consulta3'] ) ) {
//    $cons=$_GET['consulta3'];
//    $table=$_GET['tabla4'];
////   $table = 'organism_information'; // Cambia este S�LO si sabes lo que hace.
//$query .= " INNER JOIN $table on organism_information.Org_ID=$table.Org_ID";
//
//
// 
//}
//
//$where = " WHERE";
//$and	= 0;
// 
//}
//
//if( isset( $_GET['consulta2'] ) && ! empty( $_GET['consulta2'] ) ) {
//    $cons=$_GET['consulta2'];
//    $table=$_GET['tabla3'];
////   $table = 'organism_information'; // Cambia este S�LO si sabes lo que hace.
//$query = "SELECT $cons FROM organism_information INNER JOIN $table on organism_information.Org_ID=$table.Org_ID";
//
//$where = " WHERE";
//$and	= 0;
// 
//}

 if( isset( $_GET['txtA'] ) && ! empty( $_GET['txtA'] ) ) {
 
$where .= " organism_information.Org_ID='$_GET[txtA]'";

$and	= 1;
}  
      
 if( isset( $_GET['txtuser'] ) && ! empty( $_GET['txtuser'] ) ) {
if( $and === 1 )
$where .= " AND";


$where .= " organism_information.Isolated_by ='$txtuser'";
$and	= 1;

}      
  
 if( isset( $_GET['txtfechaIni'] ) && ! empty( $_GET['txtfechaIni'] ) && isset( $_GET['txtfechaFin'] ) && ! empty( $_GET['txtfechaFin'] )) {
if( $and === 1 )
$where .= " AND";
$Fini= $_GET['txtfechaIni'];
$Ffin=$_GET['txtfechaFin'];

$where .= " organism_information.Date_of_Isolation >= '$Fini' and  organism_information.Date_of_Isolation <= '$Ffin' ";
$and	= 1;

}   

 if( isset( $_GET['txtOrigin'] ) && ! empty( $_GET['txtOrigin'] ) ) {
if( $and === 1 )
$where .= " AND";

$where .= " organism_information.Origin='$txtOrigin'";
$and	= 1;

} 

if( isset( $_GET['proveedor'] ) && ! empty( $_GET['proveedor'] ) ) {
if( $and === 1 )
$where .= " AND";

$where .= " organism_information.item='$proveedor'";
$and	= 1;

}
 if( isset( $_GET['producto'] ) && ! empty( $_GET['producto'] ) ) {
if( $and === 1 )
$where .= " AND";

$where .= " organism_information.level='$producto'";
$and	= 1;

}

 if( isset( $_GET['txtCommentsOrig'] ) && ! empty( $_GET['txtCommentsOrig'] ) ) {
if( $and === 1 )
$where .= " AND";

$where .= " organism_information.Additional_Comments='$txtCommentsOrig'";
$and	= 1;

}
     for($j=0;$j<10;$j++){
      
if( isset( $_GET['txtA'.$j] ) && ! empty( $_GET['txtA'.$j] ) ) {

if( $and === 1 )
$where .= " AND";

$metodoGet="txtA".$j;
$where .= " organism_information.Org_ID='$_GET[$metodoGet]'";
$and	= 1;
}
     }

     for($j=0;$j<10;$j++){
      
if( isset( $_GET['txtInso'.$j] ) && ! empty( $_GET['txtInso'.$j] ) ) {

if( $and === 1 )
$where .= " AND";

$metodoGet="txtInso".$j;
$where .= " organism_information.Isolated_by= '$_GET[$metodoGet]'";
$and	= 1;
}
     }

     
        for($j=0;$j<10;$j++){
      
 if( isset( $_GET['txtfechaIni'.$j] ) && ! empty( $_GET['txtfechaIni'.$j] ) && isset( $_GET['txtfechaFin'.$j] ) && ! empty( $_GET['txtfechaFin'.$j] )) {
if( $and === 1 )
$where .= " AND";
$Fini= $_GET['txtfechaIni'.$j];
$Ffin=$_GET['txtfechaFin'.$j];

$where .= " organism_information.Date_of_Isolation >= '$Fini' and  organism_information.Date_of_Isolation <= '$Ffin' ";
$and	= 1;

}   
     }



    for($j=0;$j<10;$j++){
      
 if( isset( $_GET['txtOrigin'.$j] ) && ! empty( $_GET['txtOrigin'.$j] ) ) {
if( $and === 1 )
$where .= " AND";

$InsOrigen='txtOrigin'.$j;
$where .= " organism_information.Origin= '$_GET[$InsOrigen]'";
$and	= 1;

} 
     }
     
 for($j=0;$j<10;$j++){     
     if( isset( $_GET['proveedor'.$j] ) && ! empty( $_GET['proveedor'.$j] ) ) {
if( $and === 1 )
$where .= " AND";
$ite= 'proveedor'.$j;
$where .= " organism_information.item= '$_GET[$ite]'";
$and	= 1;

}
 }
  for($j=0;$j<10;$j++){
 if( isset( $_GET['producto'.$j] ) && ! empty( $_GET['producto'.$j] ) ) {
if( $and === 1 )
$where .= " AND";
$levee='producto'.$j;
$where .= " organism_information.level='$_GET[$levee]'";
$and	= 1;

}
  } 
     
     
     
     
        for($j=0;$j<10;$j++){
      
if( isset( $_GET['txtCommentsOrig'.$j] ) && ! empty( $_GET['txtCommentsOrig'.$j] ) ) {
if( $and === 1 )
$where .= " AND";


$Comments='txtCommentsOrig'.$j;
$where .= " organism_information.Additional_Comments= '$_GET[$Comments]'";
$and	= 1;

} 
     }

     
     
//     macros
     if( isset( $_GET['txtNameMacro'] ) && ! empty( $_GET['txtNameMacro'] ) ) {
if( $and === 1 )
$where .= " AND";


$where .= " macroscopic_morphology.Org_ID = '$txtNameMacro'";
$and	= 1;

}      
  
     if( isset( $_GET['txtMediumMacro'] ) && ! empty( $_GET['txtMediumMacro'] ) ) {
if( $and === 1 )
$where .= " AND";


$where .= " macroscopic_morphology.Medium_ID ='$txtMediumMacro'";
$and	= 1;

}   

     if(  isset( $_GET['txtTempInicial'] ) && ! empty( $_GET['txtTempFinal'] ) && isset( $_GET['txtTempInicial'] ) && ! empty( $_GET['txtTempFinal'] )) {
if( $and === 1 )
$where .= " AND";

$Tini=$_GET['txtTempInicial'];
$Tfin=$_GET['txtTempFinal'];
$where .= " macroscopic_morphology.Temperature >= '$Tini' and macroscopic_morphology.Temperature <= '$Tfin' ";
$and	= 1;

}   

     if( isset( $_GET['txtAgitationMacro'] ) && ! empty( $_GET['txtAgitationMacro'] ) ) {
if( $and === 1 )
$where .= " AND";


$where .= " macroscopic_morphology.Agitation='$txtAgitationMacro'";
$and	= 1;

} 
    if( isset( $_GET['txtAgeMacro'] ) && ! empty( $_GET['txtAgeMacro'] ) ) {
if( $and === 1 )
$where .= " AND";


$where .= " macroscopic_morphology.Age= '$txtAgeMacro'";
$and	= 1;

}
     if(  isset( $_GET['txtSizeIMacro'] ) && ! empty( $_GET['txtSizeIMacro'] ) && isset( $_GET['txtSizeFMacro'] ) && ! empty( $_GET['txtSizeFMacro'] )) {
if( $and === 1 )
$where .= " AND";

$Sini=$_GET['txtSizeIMacro'];
$Sfin=$_GET['txtSizeFMacro'];
$where .= " macroscopic_morphology.Size >= '$Sini' and macroscopic_morphology.Size <= '$Sfin' ";
$and	= 1;

}  
   if( isset( $_GET['txtsurface'] ) && ! empty( $_GET['txtsurface'] ) ) {
if( $and === 1 )
$where .= " AND";


$where .= " macroscopic_morphology.Surface= '$txtsurface'";
$and	= 1;

}

for($j=0;$j<10;$j++){
     if( isset( $_GET['txtMediumMacro'.$j] ) && ! empty( $_GET['txtMediumMacro'.$j] ) ) {
if( $and === 1 )
$where .= " AND";

$mediMacro='txtMediumMacro'.$j;
$where .= " macroscopic_morphology.Medium_ID ='$_GET[$mediMacro]'";
$and	= 1;

}   
}
for($j=0;$j<10;$j++){
    if(  isset( $_GET['txtTempInicial'.$j] ) && ! empty( $_GET['txtTempFinal'.$j] ) && isset( $_GET['txtTempInicial'.$j] ) && ! empty( $_GET['txtTempFinal'.$j] )) {
if( $and === 1 )
$where .= " AND";

$Tini='txtTempInicial'.$j;
$Tfin='txtTempFinal'.$j;
$where .= " macroscopic_morphology.Temperature >= '$_GET[$Tini]' and macroscopic_morphology.Temperature <= '$_GET[$Tfin]' ";
$and	= 1;

}   
}
for($j=0;$j<10;$j++){
 if( isset( $_GET['txtAgitationMacro'.$j] ) && ! empty( $_GET['txtAgitationMacro'.$j] ) ) {
if( $and === 1 )
$where .= " AND";

$AgitMacro='txtAgitationMacro'.$j;
$where .= " macroscopic_morphology.Agitation='$_GET[$AgitMacro]'";
$and	= 1;

}   
}

for($j=0;$j<10;$j++){
 if( isset( $_GET['txtAgeMacro'.$j] ) && ! empty( $_GET['txtAgeMacro'.$j] ) ) {
if( $and === 1 )
$where .= " AND";

$AgeMacro='txtAgeMacro'.$j;
$where .= " macroscopic_morphology.Age= '$_GET[$AgeMacro]'";
$and	= 1;

} 
}

for($j=0;$j<10;$j++){
    if(  isset( $_GET['txtSizeIMacro'.$j] ) && ! empty( $_GET['txtSizeIMacro'.$j] ) && isset( $_GET['txtSizeFMacro'.$j] ) && ! empty( $_GET['txtSizeFMacro'.$j] )) {
if( $and === 1 )
$where .= " AND";

$Tini='txtSizeIMacro'.$j;
$Tfin='txtSizeFMacro'.$j;
$where .= " macroscopic_morphology.Size >= '$_GET[$Tini]' and macroscopic_morphology.Size <= '$_GET[$Tfin]' ";
$and	= 1;

}   
}
for($j=0;$j<10;$j++){
    if(  isset( $_GET['txtsurface'.$j] ) && ! empty( $_GET['txtsurface'.$j] )) {
if( $and === 1 )
$where .= " AND";

$Surface='txtsurface'.$j;

$where .= " macroscopic_morphology.Surface >= '$_GET[$Surface]' ";
$and	= 1;

}   
}
//micro
 if( isset( $_GET['txtMediumMmicro'] ) && ! empty( $_GET['txtMediumMmicro'] ) ) {
if( $and === 1 )
$where .= " AND";

$where .= " microscopic_morphology.Medium_ID='$txtMediumMmicro'";
$and	= 1;

}

if(  isset( $_GET['txtTemperatureIMicro'] ) && ! empty( $_GET['txtTemperatureIMicro'] ) && isset( $_GET['txtTemperatureFMicro'] ) && ! empty( $_GET['txtTemperatureFMicro'] )) {
if( $and === 1 )
$where .= " AND";

$Sini=$_GET['txtTemperatureIMicro'];
$Sfin=$_GET['txtTemperatureFMicro'];
$where .= " microscopic_morphology.Temperature >= '$Sini' and microscopic_morphology.Temperature <= '$Sfin' ";
$and	= 1;

}  

 if( isset( $_GET['txtAgitationMi'] ) && ! empty( $_GET['txtAgitationMi'] ) ) {
if( $and === 1 )
$where .= " AND";

$where .= " microscopic_morphology.Agitation='$txtAgitationMi'";
$and	= 1;

}

 if( isset( $_GET['txtAgeMicro'] ) && ! empty( $_GET['txtAgeMicro'] ) ) {
if( $and === 1 )
$where .= " AND";

$where .= " microscopic_morphology.Agitation='$txtAgeMicro'";
$and	= 1;

}
if(  isset( $_GET['txtAxis_short'] ) && ! empty( $_GET['txtAxis_short'] ) && isset( $_GET['txtAxis_long'] ) && ! empty( $_GET['txtAxis_long'] )) {
if( $and === 1 )
$where .= " AND";

$Sini=$_GET['txtAxis_short'];
$Sfin=$_GET['txtAxis_long'];
$where .= " microscopic_morphology.Axis_short >= '$Sini' and microscopic_morphology.Axis_long <= '$Sfin' ";
$and	= 1;

}  

 if( isset( $_GET['txtMotility'] ) && ! empty( $_GET['txtMotility'] ) ) {
if( $and === 1 )
$where .= " AND";

$where .= " microscopic_morphology.Motility='$txtMotility'";
$and	= 1;

}
 if( isset( $_GET['txtAggregates'] ) && ! empty( $_GET['txtAggregates'] ) ) {
if( $and === 1 )
$where .= " AND";

$where .= " microscopic_morphology.Aggregates='$txtAggregates'";
$and	= 1;

}
 if( isset( $_GET['txtBiofilm_formation'] ) && ! empty( $_GET['txtBiofilm_formation'] ) ) {
if( $and === 1 )
$where .= " AND";

$where .= " microscopic_morphology.Biofilm_formation='$txtBiofilm_formation'";
$and	= 1;

}
 if( isset( $_GET['txtGram_test'] ) && ! empty( $_GET['txtGram_test'] ) ) {
if( $and === 1 )
$where .= " AND";

$where .= " microscopic_morphology.Gram_test ='$txtGram_test'";
$and	= 1;

}



for($j=0;$j<10;$j++){
if( isset( $_GET['txtMediumMmicro'.$j] ) && ! empty( $_GET['txtMediumMmicro'.$j] ) ) {
if( $and === 1 )
$where .= " AND";
$medMicro='txtMediumMmicro'.$j;
$where .= " microscopic_morphology.Medium_ID ='$_GET[$medMicro]'";
$and	= 1;

}
}
for($j=0;$j<10;$j++){
if(  isset( $_GET['txtTemperatureIMicro'.$j] ) && ! empty( $_GET['txtTemperatureIMicro'.$j] ) && isset( $_GET['txtTemperatureFMicro'.$j] ) && ! empty( $_GET['txtTemperatureFMicro'.$j] )) {
if( $and === 1 )
$where .= " AND";

$Sini='txtTemperatureIMicro'.$j;
$Sfin='txtTemperatureFMicro'.$j;
$where .= " microscopic_morphology.Temperature >= '$_GET[$Sini]' and microscopic_morphology.Temperature <= '$_GET[$Sfin]' ";
$and	= 1;

}  
}
for($j=0;$j<10;$j++){
     if( isset( $_GET['txtAgitationMi'.$j] ) && ! empty( $_GET['txtAgitationMi'.$j] ) ) {
if( $and === 1 )
$where .= " AND";

$AgiMicro='txtAgitationMi'.$j;
$where .= " microscopic_morphology.Agitation='$_GET[$AgiMicro]'";
$and	= 1;

}   
}
for($j=0;$j<10;$j++){
if( isset( $_GET['txtAgeMicro'.$j] ) && ! empty( $_GET['txtAgeMicro'.$j] ) ) {
if( $and === 1 )
$where .= " AND";
$AgeMicro='txtAgeMicro'.$j;
$where .= " microscopic_morphology.Agitation='$_GET[$AgeMicro]'";
$and	= 1;

}
}
for($j=0;$j<10;$j++){
if(  isset( $_GET['txtAxis_short'.$j] ) && ! empty( $_GET['txtAxis_short'.$j] ) && isset( $_GET['txtAxis_long'.$j] ) && ! empty( $_GET['txtAxis_long'.$j] )) {
if( $and === 1 )
$where .= " AND";

$Sini='txtAxis_short'.$j;
$Sfin='txtAxis_long'.$j;
$where .= " microscopic_morphology.Axis_short >= '$_GET[$Sini]' and microscopic_morphology.Axis_long <= '$_GET[$Sfin]' ";
$and	= 1;

}  
}
for($j=0;$j<10;$j++){
 if( isset( $_GET['txtMotility'.$j] ) && ! empty( $_GET['txtMotility'.$j] ) ) {
if( $and === 1 )
$where .= " AND";
$molityMicro='txtMotility'.$j;
$where .= " microscopic_morphology.Motility='$_GET[$molityMicro]'";
$and	= 1;

}
}
for($j=0;$j<10;$j++){
 if( isset( $_GET['txtAggregates'.$j] ) && ! empty( $_GET['txtAggregates'.$j] ) ) {
if( $and === 1 )
$where .= " AND";
$aggregateMic='txtAggregates'.$j;
$where .= " microscopic_morphology.Aggregates ='$_GET[$aggregateMic]'";
$and	= 1;

}
}
for($j=0;$j<10;$j++){
 if( isset( $_GET['txtBiofilm_formation'.$j] ) && ! empty( $_GET['txtBiofilm_formation'.$j] ) ) {
if( $and === 1 )
$where .= " AND";
$bioMicro='txtBiofilm_formation'.$j;
$where .= " microscopic_morphology.Biofilm_formation ='$_GET[$bioMicro]'";
$and	= 1;

}
}
for($j=0;$j<10;$j++){
 if( isset( $_GET['txtGram_test'.$j] ) && ! empty( $_GET['txtGram_test'.$j] ) ) {
if( $and === 1 )
$where .= " AND";
$gramTest='txtGram_test'.$j;
$where .= " microscopic_morphology.Gram_test='$_GET[$gramTest]'";
$and	= 1;

}
}


//Grow
 if( isset( $_GET['txtMedium_solidGrow'] ) && ! empty( $_GET['txtMedium_solidGrow'] ) ) {
if( $and === 1 )
$where .= " AND";

$where .= " growth_characteristics.Medium_solid='$txtMedium_solidGrow'";
$and	= 1;

}
 if( isset( $_GET['txtTemperatureSIGrow'] ) && ! empty( $_GET['txtTemperatureSIGrow'] ) && isset( $_GET['txtTemperatureSFGrow'] ) && ! empty( $_GET['txtTemperatureSFGrow'] ) ) {
if( $and === 1 )
$where .= " AND";

$Fini= $_GET['txtTemperatureSIGrow'];
$Ffin=$_GET['txtTemperatureSFGrow'];

$where .= " growth_characteristics.Temperature_solid >= '$Fini' and  growth_characteristics.Temperature_solid <= '$Ffin' ";

$and	= 1;

}

 if( isset( $_GET['txtTime_solidGrow'] ) && ! empty( $_GET['txtTime_solidGrow'] ) ) {
if( $and === 1 )
$where .= " AND";

$where .= " growth_characteristics.Time_solid='$txtTime_solidGrow'";
$and	= 1;

}
 if( isset( $_GET['txtMedium_liquidGrow'] ) && ! empty( $_GET['txtMedium_liquidGrow'] ) ) {
if( $and === 1 )
$where .= " AND";

$where .= " growth_characteristics.Medium_liquid ='$txtMedium_liquidGrow'";
$and	= 1;

}

 if( isset( $_GET['txtTempIliquidGrow'] ) && ! empty( $_GET['txtTempIliquidGrow'] ) && isset( $_GET['txtTempFliquidGrow'] ) && ! empty( $_GET['txtTempFliquidGrow'] ) ) {
if( $and === 1 )
$where .= " AND";

$Fini= $_GET['txtTempIliquidGrow'];
$Ffin=$_GET['txtTempFliquidGrow'];

$where .= " growth_characteristics.Temperature_liquid >= '$Fini' and  growth_characteristics.Temperature_liquid <= '$Ffin' ";

$and	= 1;

}

 if( isset( $_GET['txtAgitation_time'] ) && ! empty( $_GET['txtAgitation_time'] ) ) {
if( $and === 1 )
$where .= " AND";

$where .= " growth_characteristics.Agitation_time='$txtAgitation_time'";
$and	= 1;

}

 if( isset( $_GET['txtTime_liquid'] ) && ! empty( $_GET['txtTime_liquid'] ) ) {
if( $and === 1 )
$where .= " AND";

$where .= " growth_characteristics.Time_liquid='$txtTime_liquid'";
$and	= 1;

}
 if( isset( $_GET['txtpH_initialGrow'] ) && ! empty( $_GET['txtpH_initialGrow'] ) && isset( $_GET['txtpH_finalGrow'] ) && ! empty( $_GET['txtpH_finalGrow'] ) ) {
if( $and === 1 )
$where .= " AND";

$Fini= $_GET['txtpH_initialGrow'];
$Ffin=$_GET['txtpH_finalGrow'];

$where .= " growth_characteristics.pH_initial >= '$Fini' and  growth_characteristics.pH_final <= '$Ffin' ";

$and	= 1;

}
if( isset( $_GET['txtOD600_initialGrow'] ) && ! empty( $_GET['txtOD600_initialGrow'] ) && isset( $_GET['txtOD600_finalGrow'] ) && ! empty( $_GET['txtOD600_finalGrow'] ) ) {
if( $and === 1 )
$where .= " AND";

$Fini= $_GET['txtOD600_initialGrow'];
$Ffin=$_GET['txtOD600_finalGrow'];

$where .= " growth_characteristics.OD600_initial >= '$Fini' and  growth_characteristics.OD600_final <= '$Ffin' ";

$and	= 1;

}

 if( isset( $_GET['txtExtra_parameters'] ) && ! empty( $_GET['txtExtra_parameters'] ) ) {
if( $and === 1 )
$where .= " AND";

$where .= " growth_characteristics.Extra_parameters ='$txtExtra_parameters'";
$and	= 1;

}
//For-grow
 for($j=0;$j<10;$j++){
if( isset( $_GET['txtMedium_solidGrow'.$j] ) && ! empty( $_GET['txtMedium_solidGrow'.$j] ) ) {
if( $and === 1 )
$where .= " AND";

$mediSGro='txtMedium_solidGrow'.$j;
$where .= " growth_characteristics.Medium_solid ='$_GET[$mediSGro]'";
$and	= 1;

}
 }
 for($j=0;$j<10;$j++){
 if( isset( $_GET['txtTemperatureSIGrow'.$j] ) && ! empty( $_GET['txtTemperatureSIGrow'.$j] ) && isset( $_GET['txtTemperatureSFGrow'.$j] ) && ! empty( $_GET['txtTemperatureSFGrow'.$j] ) ) {
if( $and === 1 )
$where .= " AND";

$Fini= 'txtTemperatureSIGrow'.$j;
$Ffin='txtTemperatureSFGrow'.$j;

$where .= " growth_characteristics.Temperature_solid >= '$_GET[$Fini]' and  growth_characteristics.Temperature_solid <= '$_GET[$Ffin]' ";

$and	= 1;

}
 }
  for($j=0;$j<10;$j++){
 if( isset( $_GET['txtTime_solidGrow'.$j] ) && ! empty( $_GET['txtTime_solidGrow'.$j] ) ) {
if( $and === 1 )
$where .= " AND";
$timeSoliGrow='txtTime_solidGrow'.$j;
$where .= " growth_characteristics.Time_solid='$_GET[$timeSoliGrow]'";
$and	= 1;

}
  }
    for($j=0;$j<10;$j++){
 if( isset( $_GET['txtMedium_liquidGrow'.$j] ) && ! empty( $_GET['txtMedium_liquidGrow'.$j] ) ) {
if( $and === 1 )
$where .= " AND";
$mediumLiq='txtMedium_liquidGrow'.$j;
$where .= " growth_characteristics.Medium_liquid='$_GET[$mediumLiq]'";
$and	= 1;

}
    }
   
        for($j=0;$j<10;$j++){
 if( isset( $_GET['txtTempIliquidGrow'.$j] ) && ! empty( $_GET['txtTempIliquidGrow'.$j] ) && isset( $_GET['txtTempFliquidGrow'.$j] ) && ! empty( $_GET['txtTempFliquidGrow'.$j] ) ) {
if( $and === 1 )
$where .= " AND";

$Fini= 'txtTempIliquidGrow'.$j;
$Ffin='txtTempFliquidGrow'.$j;

$where .= " growth_characteristics.Temperature_liquid >= '$_GET[$Fini]' and  growth_characteristics.Temperature_liquid <= '$_GET[$Ffin]' ";

$and	= 1;

}
        }
        for($j=0;$j<10;$j++){
 if( isset( $_GET['txtAgitation_time'.$j] ) && ! empty( $_GET['txtAgitation_time'.$j] ) ) {
if( $and === 1 )
$where .= " AND";
$agitationGrow='txtAgitation_time'.$j;
$where .= " growth_characteristics.Agitation_time='$_GET[$agitationGrow]'";
$and	= 1;

}
        }
          for($j=0;$j<10;$j++){
 if( isset( $_GET['txtTime_liquid'.$j] ) && ! empty( $_GET['txtTime_liquid'.$j] ) ) {
if( $and === 1 )
$where .= " AND";
$timeLiquidGrow='txtTime_liquid'.$j;
$where .= " growth_characteristics.Time_liquid='$_GET[$timeLiquidGrow]'";
$and	= 1;

}
          }
 for($j=0;$j<10;$j++){         
 if( isset( $_GET['txtpH_initialGrow'.$j] ) && ! empty( $_GET['txtpH_initialGrow'.$j] ) && isset( $_GET['txtpH_finalGrow'.$j] ) && ! empty( $_GET['txtpH_finalGrow'.$j] ) ) {
if( $and === 1 )
$where .= " AND";

$Fini= 'txtpH_initialGrow'.$j;
$Ffin='txtpH_finalGrow'.$j;

$where .= " growth_characteristics.pH_initial >= '$_GET[$Fini]' and  growth_characteristics.pH_final <= '$_GET[$Ffin]' ";

$and	= 1;

}
 }
 for($j=0;$j<10;$j++){   
if( isset( $_GET['txtOD600_initialGrow'.$j] ) && ! empty( $_GET['txtOD600_initialGrow'.$j] ) && isset( $_GET['txtOD600_finalGrow'.$j] ) && ! empty( $_GET['txtOD600_finalGrow'.$j] ) ) {
if( $and === 1 )
$where .= " AND";

$Fini= 'txtOD600_initialGrow'.$j;
$Ffin='txtOD600_finalGrow'.$j;

$where .= " growth_characteristics.OD600_initial >= '$_GET[$Fini]' and  growth_characteristics.OD600_final <= '$_GET[$Ffin]' ";

$and	= 1;

}
 }
  for($j=0;$j<10;$j++){ 
 if( isset( $_GET['txtExtra_parameters'.$j] ) && ! empty( $_GET['txtExtra_parameters'.$j] ) ) {
if( $and === 1 )
$where .= " AND";
$extraPara='txtExtra_parameters'.$j;
$where .= " growth_characteristics.Extra_parameters LIKE'%$_GET[$extraPara]%'";
$and	= 1;

}
  }
  
  //preservation
 if( isset( $_GET['txtPreserv'] ) && ! empty( $_GET['txtPreserv'] ) ) {
if( $and === 1 )
$where .= " AND";

$where .= " preservation_of_strains.Preservation_Method_ID='$txtPreserv'";
$and	= 1;

}  

if( isset( $_GET['txtDatePres1'] ) && ! empty( $_GET['txtDatePres1'] ) && isset( $_GET['txtDatePres2'] ) && ! empty( $_GET['txtDatePres2'] )) {
if( $and === 1 )
$where .= " AND";
$Fini= $_GET['txtDatePres1'];
$Ffin=$_GET['txtDatePres2'];

$where .= " preservation_of_strains.Date_of_preservation >= '$Fini' and  preservation_of_strains.Date_of_preservation <= '$Ffin' ";
$and	= 1;

}  
 if( isset( $_GET['txtUser_Pres'] ) && ! empty( $_GET['txtUser_Pres'] ) ) {
if( $and === 1 )
$where .= " AND";

$where .= " preservation_of_strains.User_ID ='$txtUser_Pres'";
$and	= 1;

} 
 if( isset( $_GET['txtNumber_of_vialsPres'] ) && ! empty( $_GET['txtNumber_of_vialsPres'] ) ) {
if( $and === 1 )
$where .= " AND";

$where .= " preservation_of_strains.Number_of_vials ='$txtNumber_of_vialsPres'";
$and	= 1;

}
 if( isset( $_GET['txtVolume_of_vials'] ) && ! empty( $_GET['txtVolume_of_vials'] ) ) {
if( $and === 1 )
$where .= " AND";

$where .= " preservation_of_strains.Volume_of_vials ='$txtVolume_of_vials'";
$and	= 1;

}
if( isset( $_GET['txtStorage_Pres'] ) && ! empty( $_GET['txtStorage_Pres'] ) ) {
if( $and === 1 )
$where .= " AND";

$where .= " preservation_of_strains.Storage_ID ='$txtStorage_Pres'";
$and	= 1;

}

  if( isset( $_GET['txtComments_Pres'] ) && ! empty( $_GET['txtComments_Pres'] ) ) {
if( $and === 1 )
$where .= " AND";

$where .= " preservation_of_strains.Comments='$txtComments_Pres'";
$and	= 1;

}
//for_preservation
for($j=0;$j<10;$j++){
 if( isset( $_GET['txtPreserv'.$j] ) && ! empty( $_GET['txtPreserv'.$j] ) ) {
if( $and === 1 )
$where .= " AND";
$preser='txtPreserv'.$j;
$where .= " preservation_of_strains.Preservation_Method_ID ='$_GET[$preser]'";
$and	= 1;

}  
}
for($j=0;$j<10;$j++){
if( isset( $_GET['txtDatePres1'.$j] ) && ! empty( $_GET['txtDatePres1'.$j] ) && isset( $_GET['txtDatePres2'.$j] ) && ! empty( $_GET['txtDatePres2'.$j] )) {
if( $and === 1 )
$where .= " AND";
$Fini= 'txtDatePres1'.$j;
$Ffin='txtDatePres2'.$j;

$where .= " preservation_of_strains.Date_of_preservation >= '$_GET[$Fini]' and  preservation_of_strains.Date_of_preservation <= '$_GET[$Ffin]' ";
$and	= 1;

}  
}
for($j=0;$j<10;$j++){
 if( isset( $_GET['txtUser_Pres'.$j] ) && ! empty( $_GET['txtUser_Pres'.$j] ) ) {
if( $and === 1 )
$where .= " AND";
$userPres='txtUser_Pres'.$j;
$where .= " preservation_of_strains.User_ID ='$_GET[$userPres]'";
$and	= 1;

} }
for($j=0;$j<10;$j++){
 if( isset( $_GET['txtNumber_of_vialsPres'.$j] ) && ! empty( $_GET['txtNumber_of_vialsPres'.$j] ) ) {
if( $and === 1 )
$where .= " AND";
$vials='txtNumber_of_vialsPres'.$j;
$where .= " preservation_of_strains.Number_of_vials ='$_GET[$vials]'";
$and	= 1;

}
}
for($j=0;$j<10;$j++){
 if( isset( $_GET['txtVolume_of_vials'.$j] ) && ! empty( $_GET['txtVolume_of_vials'.$j] ) ) {
if( $and === 1 )
$where .= " AND";
$volume='txtVolume_of_vials'.$j;
$where .= " preservation_of_strains.Volume_of_vials='$_GET[$volume]'";
$and	= 1;

}
}

for($j=0;$j<10;$j++){
if( isset( $_GET['txtStorage_Pres'.$j] ) && ! empty( $_GET['txtStorage_Pres'.$j] ) ) {
if( $and === 1 )
$where .= " AND";
$storage='txtStorage_Pres'.$j;
$where .= " preservation_of_strains.Storage_ID='$_GET[$storage]'";
$and	= 1;

}
}
for($j=0;$j<10;$j++){
  if( isset( $_GET['txtComments_Pres'.$j] ) && ! empty( $_GET['txtComments_Pres'.$j] ) ) {
if( $and === 1 )
$where .= " AND";
$comment='txtComments_Pres'.$j;
$where .= " preservation_of_strains.Comments like '%$_GET[$comment]%'";
$and	= 1;

}
}
//dna
 if( isset( $_GET['txtExtraMethod'] ) && ! empty( $_GET['txtExtraMethod'] ) ) {
if( $and === 1 )
$where .= " AND";


$where .= " dna.Extraction_Method_ID = '$txtExtraMethod'";
$and	= 1;

}  

 if( isset( $_GET['txtDatePresD1'] ) && ! empty( $_GET['txtDatePresD1'] ) && isset( $_GET['txtDatePresD2'] ) && ! empty( $_GET['txtDatePresD2'] )) {
if( $and === 1 )
$where .= " AND";
$Fini= $_GET['txtDatePresD1'];
$Ffin=$_GET['txtDatePresD2'];

$where .= " dna.Date_of_extraction >= '$Fini' and  dna.Date_of_extraction <= '$Ffin' ";
$and	= 1;

}   


if( isset( $_GET['txtConcentration_DNA'] ) && ! empty( $_GET['txtConcentration_DNA'] ) ) {
if( $and === 1 )
$where .= " AND";


$where .= " dna.Concentration ='$txtConcentration_DNA'";
$and	= 1;

}  

if( isset( $_GET['txtVolume_DNA'] ) && ! empty( $_GET['txtVolume_DNA'] ) ) {
if( $and === 1 )
$where .= " AND";


$where .= " dna.Volume='$txtVolume_DNA'";
$and	= 1;

}  
if( isset( $_GET['txtUser_DNA'] ) && ! empty( $_GET['txtUser_DNA'] ) ) {
if( $and === 1 )
$where .= " AND";


$where .= " dna.User_ID='$txtUser_DNA'";
$and	= 1;

} 
if( isset( $_GET['txtStorage_DNA'] ) && ! empty( $_GET['txtStorage_DNA'] ) ) {
if( $and === 1 )
$where .= " AND";


$where .= " dna.Storage_ID='$txtStorage_DNA'";
$and	= 1;

} 
//for-dna
for($j=0;$j<10;$j++){
 if( isset( $_GET['txtExtraMethod'.$j] ) && ! empty( $_GET['txtExtraMethod'.$j] ) ) {
if( $and === 1 )
$where .= " AND";

$extraMethod='txtExtraMethod'.$j;
$where .= " dna.Extraction_Method_ID='$_GET[$extraMethod]'";
$and	= 1;

}  
}
for($j=0;$j<10;$j++){
 if( isset( $_GET['txtDatePresD1'.$j] ) && ! empty( $_GET['txtDatePresD1'.$j] ) && isset( $_GET['txtDatePresD2'.$j] ) && ! empty( $_GET['txtDatePresD2'.$j] )) {
if( $and === 1 )
$where .= " AND";
$Fini= 'txtDatePresD1'.$j;
$Ffin='txtDatePresD2'.$j;

$where .= " dna.Date_of_extraction >= '$_GET[$Fini]' and  dna.Date_of_extraction <= '$_GET[$Ffin]' ";
$and	= 1;

}   

}
for($j=0;$j<10;$j++){
if( isset( $_GET['txtConcentration_DNA'.$j] ) && ! empty( $_GET['txtConcentration_DNA'.$j] ) ) {
if( $and === 1 )
$where .= " AND";

$concentra='txtConcentration_DNA'.$j;
$where .= " dna.Concentration ='$_GET[$concentra]'";
$and	= 1;

}

}
for($j=0;$j<10;$j++){
if( isset( $_GET['txtVolume_DNA'.$j] ) && ! empty( $_GET['txtVolume_DNA'.$j] ) ) {
if( $and === 1 )
$where .= " AND";

$volumenDna='txtVolume_DNA'.$j;
$where .= " dna.Volume ='$_GET[$volumenDna]'";
$and	= 1;

}  }
for($j=0;$j<10;$j++){
if( isset( $_GET['txtUser_DNA'.$j] ) && ! empty( $_GET['txtUser_DNA'.$j] ) ) {
if( $and === 1 )
$where .= " AND";

$userDna='txtUser_DNA'.$j;
$where .= " dna.User_ID ='$_GET[$userDna]'";
$and	= 1;

} 
}
for($j=0;$j<10;$j++){
if( isset( $_GET['txtStorage_DNA'.$j] ) && ! empty( $_GET['txtStorage_DNA'.$j] ) ) {
if( $and === 1 )
$where .= " AND";

$strora='txtStorage_DNA'.$j;
$where .= " dna.Storage_ID ='$_GET[$strora]'";
$and	= 1;

} 
}
//Genetic
if( isset( $_GET['txtTaxonomic_lineage'] ) && ! empty( $_GET['txtTaxonomic_lineage'] ) ) {
if( $and === 1 )
$where .= " AND";


$where .= " genetic_data.Taxonomic_lineage LIKE '%$txtTaxonomic_lineage%'";
$and	= 1;

}
if( isset( $_GET['txtGene'] ) && ! empty( $_GET['txtGene'] ) ) {
if( $and === 1 )
$where .= " AND";


$where .= " genetic_data.Gene_ID ='$txtGene'";
$and	= 1;

}
if( isset( $_GET['txtSequenGen'] ) && ! empty( $_GET['txtSequenGen'] ) ) {
if( $and === 1 )
$where .= " AND";


$where .= " genetic_data.Sequencing_Method_ID ='$txtSequenGen'";
$and	= 1;

}
if( isset( $_GET['txtCured_sequence'] ) && ! empty( $_GET['txtCured_sequence'] ) ) {
if( $and === 1 )
$where .= " AND";


$where .= " genetic_data.Cured_sequence ='$txtCured_sequence'";
$and	= 1;

}

if( isset( $_GET['txtComments_Genetic'] ) && ! empty( $_GET['txtComments_Genetic'] ) ) {
if( $and === 1 )
$where .= " AND";


$where .= " genetic_data.Comments='$txtComments_Genetic'";
$and	= 1;

}
//for-genetic
for($j=0;$j<10;$j++){
if( isset( $_GET['txtTaxonomic_lineage'.$j] ) && ! empty( $_GET['txtTaxonomic_lineage'.$j] ) ) {
if( $and === 1 )
$where .= " AND";

$taxonomic='txtTaxonomic_lineage'.$j;
$where .= " genetic_data.Taxonomic_lineage='$_GET[$taxonomic]'";
$and	= 1;

}
}
for($j=0;$j<10;$j++){
if( isset( $_GET['txtGene'.$j] ) && ! empty( $_GET['txtGene'.$j] ) ) {
if( $and === 1 )
$where .= " AND";

$gen='txtGene'.$j;
$where .= " genetic_data.Gene_ID='$_GET[$gen]'";
$and	= 1;

}
}
for($j=0;$j<10;$j++){
if( isset( $_GET['txtSequenGen'.$j] ) && ! empty( $_GET['txtSequenGen'.$j] ) ) {
if( $and === 1 )
$where .= " AND";

$seq='txtSequenGen'.$j;
$where .= " genetic_data.Sequencing_Method_ID='$_GET[$seq]'";
$and	= 1;

}
}
for($j=0;$j<10;$j++){
if( isset( $_GET['txtCured_sequence'.$j] ) && ! empty( $_GET['txtCured_sequence'.$j] ) ) {
if( $and === 1 )
$where .= " AND";

$cures='txtCured_sequence'.$j;
$where .= " genetic_data.Cured_sequence='$_GET[$cures]'";
$and	= 1;

}
}
for($j=0;$j<10;$j++){
if( isset( $_GET['txtComments_Genetic'.$j] ) && ! empty( $_GET['txtComments_Genetic'.$j] ) ) {
if( $and === 1 )
$where .= " AND";

$commentGen='txtComments_Genetic'.$j;
$where .= " genetic_data.Comments LIKE '%$_GET[$commentGen]%'";
$and	= 1;

}
}
//meta
 if( isset( $_GET['txtUser_Meta'] ) && ! empty( $_GET['txtUser_Meta'] ) ) {
if( $and === 1 )
$where .= " AND";


$where .= " metabolic_data.User_ID ='$txtUser_Meta'";
$and	= 1;

} 

 if( isset( $_GET['txtMedium_Meta'] ) && ! empty( $_GET['txtMedium_Meta'] ) ) {
if( $and === 1 )
$where .= " AND";


$where .= " metabolic_data.Medium_ID ='$txtMedium_Meta'";
$and	= 1;

} 

 if( isset( $_GET['txtTemperatureIMeta'] ) && ! empty( $_GET['txtTemperatureIMeta'] ) && isset( $_GET['txtTemperatureFMeta'] ) && ! empty( $_GET['txtTemperatureFMeta'] )) {
if( $and === 1 )
$where .= " AND";
$Fini= $_GET['txtTemperatureIMeta'];
$Ffin=$_GET['txtTemperatureFMeta'];

$where .= " metabolic_data.Temperature >= '$Fini' and  metabolic_data.Temperature <= '$Ffin' ";
$and	= 1;

}   

 if( isset( $_GET['txtAgitation_Meta'] ) && ! empty( $_GET['txtAgitation_Meta'] ) ) {
if( $and === 1 )
$where .= " AND";

$where .= " metabolic_data.Agitation='$txtAgitation_Meta'";
$and	= 1;

} 
 if( isset( $_GET['txtTime_Meta'] ) && ! empty( $_GET['txtTime_Meta'] ) ) {
if( $and === 1 )
$where .= " AND";

$where .= " metabolic_data.Time='$txtTime_Meta'";
$and	= 1;

}
 if( isset( $_GET['txtpHI_Meta'] ) && ! empty( $_GET['txtpHI_Meta'] ) && isset( $_GET['txtpHF_Meta'] ) && ! empty( $_GET['txtpHF_Meta'] )) {
if( $and === 1 )
$where .= " AND";
$Fini= $_GET['txtpHI_Meta'];
$Ffin=$_GET['txtpHF_Meta'];

$where .= " metabolic_data.pH_initial >= '$Fini' and  metabolic_data.pH_final <= '$Ffin' ";
$and	= 1;

} 

if( isset( $_GET['txtOD600_initialMeta'] ) && ! empty( $_GET['txtOD600_initialMeta'] ) && isset( $_GET['txtOD600_finalMeta'] ) && ! empty( $_GET['txtOD600_finalMeta'] )) {
if( $and === 1 )
$where .= " AND";
$Fini= $_GET['txtOD600_initialMeta'];
$Ffin=$_GET['txtOD600_finalMeta'];

$where .= " metabolic_data.OD600_initial >= '$Fini' and  metabolic_data.OD600_final <= '$Ffin' ";
$and	= 1;

} 
 if( isset( $_GET['txtComments_Meta'] ) && ! empty( $_GET['txtComments_Meta'] ) ) {
if( $and === 1 )
$where .= " AND";

$where .= " metabolic_data.Comments LIKE '%$txtComments_Meta%'";
$and	= 1;

}
//for meta
for($j=0;$j<10;$j++){
 if( isset( $_GET['txtUser_Meta'.$j] ) && ! empty( $_GET['txtUser_Meta'.$j] ) ) {
if( $and === 1 )
$where .= " AND";

$userM='txtUser_Meta'.$j;
$where .= " metabolic_data.User_ID ='$_GET[$userM]'";
$and	= 1;

} 
}
for($j=0;$j<10;$j++){
 if( isset( $_GET['txtMedium_Meta'.$j] ) && ! empty( $_GET['txtMedium_Meta'.$j] ) ) {
if( $and === 1 )
$where .= " AND";

$mediumMe='txtMedium_Meta'.$j;
$where .= " metabolic_data.Medium_ID ='$_GET[$mediumMe]'";
$and	= 1;

} 
}
for($j=0;$j<10;$j++){
 if( isset( $_GET['txtTemperatureIMeta'.$j] ) && ! empty( $_GET['txtTemperatureIMeta'.$j] ) && isset( $_GET['txtTemperatureFMeta'.$j] ) && ! empty( $_GET['txtTemperatureFMeta'.$j] )) {
if( $and === 1 )
$where .= " AND";
$Fini='txtTemperatureIMeta'.$j;
$Ffin='txtTemperatureFMeta'.$j;

$where .= " metabolic_data.Temperature >= '$_GET[$Fini]' and  metabolic_data.Temperature <= '$_GET[$Ffin]' ";
$and	= 1;

}   
}
for($j=0;$j<10;$j++){
 if( isset( $_GET['txtAgitation_Meta'.$j] ) && ! empty( $_GET['txtAgitation_Meta'.$j] ) ) {
if( $and === 1 )
$where .= " AND";
$agitationMeta='txtAgitation_Meta'.$j;
$where .= " metabolic_data.Agitation ='$_GET[$agitationMeta]'";
$and	= 1;

} }
for($j=0;$j<10;$j++){
 if( isset( $_GET['txtTime_Meta'.$j] ) && ! empty( $_GET['txtTime_Meta'.$j] ) ) {
if( $and === 1 )
$where .= " AND";
$timeMeta='txtTime_Meta'.$j;
$where .= " metabolic_data.Time='$_GET[$timeMeta]'";
$and	= 1;

}
}
for($j=0;$j<10;$j++){
 if( isset( $_GET['txtpHI_Meta'.$j] ) && ! empty( $_GET['txtpHI_Meta'.$j] ) && isset( $_GET['txtpHF_Meta'.$j] ) && ! empty( $_GET['txtpHF_Meta'.$j] )) {
if( $and === 1 )
$where .= " AND";
$Fini= 'txtpHI_Meta'.$j;
$Ffin='txtpHF_Meta'.$j;

$where .= " metabolic_data.pH_initial >= '$_GET[$Fini]' and  metabolic_data.pH_final <= '$_GET[$Ffin]' ";
$and	= 1;

} 
}
for($j=0;$j<10;$j++){
if( isset( $_GET['txtOD600_initialMeta'.$j] ) && ! empty( $_GET['txtOD600_initialMeta'.$j] ) && isset( $_GET['txtOD600_finalMeta'.$j] ) && ! empty( $_GET['txtOD600_finalMeta'.$j] )) {
if( $and === 1 )
$where .= " AND";
$Fini= 'txtOD600_initialMeta'.$j;
$Ffin='txtOD600_finalMeta'.$j;

$where .= " metabolic_data.OD600_initial >= '$_GET[$Fini]' and  metabolic_data.OD600_final <= '$_GET[$Ffin]' ";
$and	= 1;

} }
for($j=0;$j<10;$j++){
 if( isset( $_GET['txtComments_Meta'.$j] ) && ! empty( $_GET['txtComments_Meta'.$j] ) ) {
if( $and === 1 )
$where .= " AND";
$comMeta='txtComments_Meta'.$j;
$where .= " metabolic_data.Comments LIKE '%$_GET[$comMeta]%'";
$and	= 1;

}
}

//Assay
for($j=0;$j<10;$j++){
if( isset( $_GET['txtAssay_Type_Name'.$j] ) && ! empty( $_GET['txtAssay_Type_Name'.$j] ) ) {
if( $and === 1 )
$where .= " AND";
$bioAss='txtAssay_Type_Name'.$j;
$where .= " bioassays_data.Assay_Type_ID ='$_GET[$bioAss]'";
$and	= 1;

}
}
for($j=0;$j<10;$j++){
if( isset( $_GET['txtMedium_Bio'.$j] ) && ! empty( $_GET['txtMedium_Bio'.$j] ) ) {
if( $and === 1 )
$where .= " AND";
$mediuBio='txtMedium_Bio'.$j;
$where .= " bioassays_data.Medium_ID='$_GET[$mediuBio]'";
$and	= 1;

}
}
for($j=0;$j<10;$j++){
 if( isset( $_GET['txtTempInicialBio'.$j] ) && ! empty( $_GET['txtTempInicialBio'.$j] ) && isset( $_GET['txtTempFinalBio'.$j] ) && ! empty( $_GET['txtTempFinalBio'.$j] )) {
if( $and === 1 )
$where .= " AND";
$Fini= 'txtTempInicialBio'.$j;
$Ffin='txtTempFinalBio'.$j;

$where .= " bioassays_data.Temperature >= '$_GET[$Fini]' and  bioassays_data.Temperature <= '$_GET[$Ffin]' ";
$and	= 1;

}
}
for($j=0;$j<10;$j++){
if( isset( $_GET['txtInhibition'.$j] ) && ! empty( $_GET['txtInhibition'.$j] ) ) {
if( $and === 1 )
$where .= " AND";
$inhib='txtInhibition'.$j;
$where .= " bioassays_data.Inhibition='$_GET[$inhib]'";
$and	= 1;

}
}
for($j=0;$j<10;$j++){
if( isset( $_GET['txtInhiMeasu'.$j] ) && ! empty( $_GET['txtInhiMeasu'.$j] ) ) {
if( $and === 1 )
$where .= " AND";
$MeasuInh='txtInhiMeasu'.$j;
$where .= " bioassays_data.Inhibition_measurament='$_GET[$MeasuInh]'";
$and	= 1;

}
}
for($j=0;$j<10;$j++){
if( isset( $_GET['txtAntagonist_strain'.$j] ) && ! empty( $_GET['txtAntagonist_strain'.$j] ) ) {
if( $and === 1 )
$where .= " AND";
$Anto='txtAntagonist_strain'.$j;
$where .= " bioassays_data.Antagonist_strain='$_GET[$Anto]'";
$and	= 1;

}
}
for($j=0;$j<10;$j++){
if( isset( $_GET['txtComments_bio'.$j] ) && ! empty( $_GET['txtComments_bio'.$j] ) ) {
if( $and === 1 )
$where .= " AND";
$comenBio='txtComments_bio'.$j;
$where .= "bioassays_data.Comments ='$_GET[$comenBio]'";
$and	= 1;

}
}
//for-bio
if( isset( $_GET['txtAssay_Type_Name'] ) && ! empty( $_GET['txtAssay_Type_Name'] ) ) {
if( $and === 1 )
$where .= " AND";

$where .= " bioassays_data.Assay_Type_ID='$txtAssay_Type_Name'";
$and	= 1;

}
if( isset( $_GET['txtMedium_Bio'] ) && ! empty( $_GET['txtMedium_Bio'] ) ) {
if( $and === 1 )
$where .= " AND";

$where .= " bioassays_data.Medium_ID='$txtMedium_Bio'";
$and	= 1;

}

 if( isset( $_GET['txtTempInicialBio'] ) && ! empty( $_GET['txtTempInicialBio'] ) && isset( $_GET['txtTempFinalBio'] ) && ! empty( $_GET['txtTempFinalBio'] )) {
if( $and === 1 )
$where .= " AND";
$Fini= $_GET['txtTempInicialBio'];
$Ffin=$_GET['txtTempFinalBio'];

$where .= " bioassays_data.Temperature >= '$Fini' and  bioassays_data.Temperature <= '$Ffin' ";
$and	= 1;

} 
if( isset( $_GET['txtInhibition'] ) && ! empty( $_GET['txtInhibition'] ) ) {
if( $and === 1 )
$where .= " AND";

$where .= " bioassays_data.Inhibition ='$txtInhibition'";
$and	= 1;

}
if( isset( $_GET['txtInhiMeasu'] ) && ! empty( $_GET['txtInhiMeasu'] ) ) {
if( $and === 1 )
$where .= " AND";

$where .= " bioassays_data.Inhibition_measurament ='$txtInhiMeasu'";
$and	= 1;

}

if( isset( $_GET['txtAntagonist_strain'] ) && ! empty( $_GET['txtAntagonist_strain'] ) ) {
if( $and === 1 )
$where .= " AND";

$where .= " bioassays_data.Antagonist_strain ='$txtAntagonist_strain'";
$and	= 1;

}
if( isset( $_GET['txtComments_bio'] ) && ! empty( $_GET['txtComments_bio'] ) ) {
if( $and === 1 )
$where .= " AND";

$where .= " bioassays_data.Comments LIKE'%$txtComments_bio%'";
$and	= 1;

}

if( strlen( $where ) > 6 ) 
    $laboratorio="and organism_information.lab='$consul2'";
$query .= $where.$laboratorio; 

$select = mysql_query($query, $cn) or die('Error'.mysql_error());
 $select1 = mysql_query($query, $cn) or die('Error'.mysql_error());
 
        echo"<center><div class='datagrid'>
<table border='3' >
 <thead>
<tr>
<th>Org_ID</th>
<th>Alias</th>
<th>Isolated_by</th>
<th>Date_of_Isolation</th>
<th>Origin</th>
<th>Additional_Comments</th>

</tr></thead>";
		while($valor=mysql_fetch_array($select)){
			  $var=$valor[0];
			$var1=$valor[1];
			$var2=$valor[2];
			$var3=$valor[3];
			$var4=$valor[4];
                        $var5=$valor[5];
                         $sqllab="SELECT Name FROM user WHERE User_ID='$var2'";		
		$cslab=mysql_query($sqllab,$cn);
                
		while($resullab2=mysql_fetch_array($cslab)){
			 $consuluser1=$resullab2[0];
			}
			echo "<br><br><br><br><tbody><tr class='alt'>
                            <td>$var</td>
<td><input  type='submit' id='buscar' name='buscar' value='$var1'></td>

        <td>$consuluser1</td>
<td>$var3</td>
<td>$var4</td>
<td>$var5</td>
            
</tr>";
			}
			
			echo " </tbody></table></div>
</center>";

	//Mostramos el resultado. Este 'echo' ser� el que recibir� la conexi�n AJAX
	
   
        
        
        
       
echo"<br><br><br><br><br><br><br><br><br><br><br><div id='ubicacion'><div id='Exportar_a_Excel'><center>
<table border='1' >
<tr>
<th>Org_ID</th>
<th>Alias</th>
<th>Isolated_by</th>
<th>Date_of_Isolation</th>
<th>Origin</th>
<th>Additional_Comments</th>

</tr>";
		while($valor1=mysql_fetch_array($select1)){
			
			  $var=$valor1[0];
			$var1=$valor1[1];
			$var2=$valor1[2];
			$var3=$valor1[3];
			$var4=$valor1[4];
                        $var5=$valor1[5];
                        
                        
                        
      
               $sqllab="SELECT Name FROM user WHERE User_ID='$var2'";		
		$cslab=mysql_query($sqllab,$cn);
                
		while($resullab1=mysql_fetch_array($cslab)){
			 $consuluser=$resullab1[0];
			}
			echo "<tr>
<td>$var</td>
<td>$var1</td>
<td> $consuluse</td>
<td>$var3</td>
<td>$var4</td>
<td>$var5</td>        
</tr>";
			}
			
			echo "</table>
</center></div></div>";




/***VARIABLES POR POST ***/
//
//$numero2 = count($_POST);
//$tags2 = array_keys($_POST); // obtiene los nombres de las varibles
//$valores2 = array_values($_POST);// obtiene los valores de las varibles
//
//// crea las variables y les asigna el valor
//for($i=0;$i<$numero2;$i++){ 
//$$tags2[$i]=$valores2[$i]; 
//}
                        
//                        SELECT organism_information.Alias FROM organism_information 
//                                INNER JOIN macroscopic_morphology on organism_information.Org_ID=macroscopic_morphology.Org_ID   
//                                INNER JOIN microscopic_morphology on organism_information.Org_ID=microscopic_morphology.Org_ID 
//                                WHERE macroscopic_morphology.Medium_ID LIKE '%hhghg%' 
//                                and macroscopic_morphology.Temperature LIKE '%9%'
?>
  </form>
<html>
    <head>
        <meta charset="utf-8">
    <title>Find</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="Reportes_Excel/css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
		body {
			padding-top: 60px;
			padding-bottom: 40px;
		}
		footer {
			left: 0;
			position: fixed;
			bottom: 0;
			width: 100%;
			height: 120px;
		}
    </style>
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../../ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../../ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../../ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../../ico/apple-touch-icon-57-precomposed.png">
	<link rel="shortcut icon" href="../../ico/favicon.png">	
    
        <script type="text/javascript" src="Reportes_Excel/js_tabla/table_excel.js"></script>
        <script language="javascript">
            $(document).ready(function() {
                $(".botonExcel").click(function(event) {
                    $("#datos_a_enviar").val( $("<div>").append( $("#Exportar_a_Excel").eq(0).clone()).html());
                    $("#FormularioExportacion").submit();
                });
            });
        </script>
       
    </head>
    <body>
        <div align="center"><div style="width:98%">
        <table class="table table-bordered">
        	<tr class="well">
                <td><h3 align="center">Organism</h3></td>
        	</tr>
        </table>   
        <div align="right"><a href="#excel" role="button" class="btn" data-toggle="modal"><i class="icon-print"></i> <strong>Print Report</strong></a></div><br>
        <!-- reporte en excel -->
        <div id="excel" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <form action="Reportes_Excel/ficheroExcel.php" method="post" id="FormularioExportacion" class="form-inline">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">�</button>
                <h3 id="myModalLabel" align="center">Name of file</h3>
            </div>
            <div class="modal-body" align="center">
                <input type="text" name="nombre" autocomplete="off" placeholder="Name of file" value="" required><br>
                <strong>Print in: </strong><br>
                <select name="imp">
                    <option value="excel">Excel</option>
                    <option value="pdf">PDF</option>
                </select>
            </div>
            <div class="modal-footer">
                <button class="btn" data-dismiss="modal" aria-hidden="true"><strong>Close</strong></button>
                <button type="submit" class="btn botonExcel"><i class="icon-print"></i> <strong>Print report</strong></button>
                <input type="hidden" id="datos_a_enviar" name="datos_a_enviar" />
            </div>
            </form>
        </div>
        
        
            </body>
</html>
<script src="Reportes_Excel/js/jquery.js"></script>
<script src="Reportes_Excel/js/bootstrap-transition.js"></script>
<script src="Reportes_Excel/js/bootstrap-alert.js"></script>
<script src="Reportes_Excel/js/bootstrap-modal.js"></script>
<script src="Reportes_Excel/js/bootstrap-dropdown.js"></script>
<script src="Reportes_Excel/js/bootstrap-scrollspy.js"></script>
<script src="Reportes_Excel/js/bootstrap-tab.js"></script>
<script src="Reportes_Excel/js/bootstrap-tooltip.js"></script>
<script src="Reportes_Excel/js/bootstrap-popover.js"></script>
<script src="Reportes_Excel/js/bootstrap-button.js"></script>
<script src="Reportes_Excel/js/bootstrap-collapse.js"></script>
<script src="Reportes_Excel/js/bootstrap-carousel.js"></script>
<script src="Reportes_Excel/js/bootstrap-typeahead.js"></script>
      