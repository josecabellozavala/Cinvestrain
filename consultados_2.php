

<?php
include "menu_prin.php";



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
 
	//Variables recibidas por POST de nuestra conexión AJAX
	
//	
//        $iso1=$_POST['Date1Iso'];
//        $iso2=$_POST['Date2Iso'];
      $nombre_jugador = null;
 /***VARIABLES POR GET ***/

$numero = count($_POST);
$tags = array_keys($_POST);// obtiene los nombres de las varibles
$valores = array_values($_POST);// obtiene los valores de las varibles

$arre=array_keys($_POST);
// crea las variables y les asigna el valor
for($i=0;$i<$numero;$i++){
$$tags[$i]=$valores[$i];
}

$entra=0;

if( isset( $_POST['consulta'] ) && ! empty( $_POST['consulta'] ) ) {
    $cons=$_POST['consulta'];
    $table=$_POST['tabla1'];
//   $table = 'organism_information'; // Cambia este SÓLO si sabes lo que hace.
    if($entra===0){
$query = "SELECT $cons FROM $table ";
$entra=1;
    }
$where = " WHERE";
$and	= 0;
 
}

if( isset( $_POST['consulta1'] ) && ! empty( $_POST['consulta1'] ) ) {
    $cons=$_POST['consulta1'];
    $table=$_POST['tabla2'];
//   $table = 'organism_information'; // Cambia este SÓLO si sabes lo que hace.
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

if( isset( $_POST['consulta2'] ) && ! empty( $_POST['consulta2'] ) ) {
    $cons=$_POST['consulta2'];
    $table=$_POST['tabla3'];
//   $table = 'organism_information'; // Cambia este SÓLO si sabes lo que hace.
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

if( isset( $_POST['consulta3'] ) && ! empty( $_POST['consulta3'] ) ) {
    $cons=$_POST['consulta3'];
    $table=$_POST['tabla4'];
//   $table = 'organism_information'; // Cambia este SÓLO si sabes lo que hace.
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
if( isset( $_POST['consulta4'] ) && ! empty( $_POST['consulta4'] ) ) {
    $cons=$_POST['consulta4'];
    $table=$_POST['tabla5'];
//   $table = 'organism_information'; // Cambia este SÓLO si sabes lo que hace.
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
if( isset( $_POST['consulta5'] ) && ! empty( $_POST['consulta5'] ) ) {
    $cons=$_POST['consulta5'];
    $table=$_POST['tabla6'];
//   $table = 'organism_information'; // Cambia este SÓLO si sabes lo que hace.
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
if( isset( $_POST['consulta6'] ) && ! empty( $_POST['consulta6'] ) ) {
    $cons=$_POST['consulta6'];
    $table=$_POST['tabla7'];
//   $table = 'organism_information'; // Cambia este SÓLO si sabes lo que hace.
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
if( isset( $_POST['consulta7'] ) && ! empty( $_POST['consulta7'] ) ) {
    $cons=$_POST['consulta7'];
    $table=$_POST['tabla8'];
//   $table = 'organism_information'; // Cambia este SÓLO si sabes lo que hace.
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
if( isset( $_POST['consulta8'] ) && ! empty( $_POST['consulta8'] ) ) {
    $cons=$_POST['consulta8'];
    $table=$_POST['tabla9'];
//   $table = 'organism_information'; // Cambia este SÓLO si sabes lo que hace.
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
////   $table = 'organism_information'; // Cambia este SÓLO si sabes lo que hace.
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
////   $table = 'organism_information'; // Cambia este SÓLO si sabes lo que hace.
//$query = "SELECT $cons FROM organism_information INNER JOIN $table on organism_information.Org_ID=$table.Org_ID";
//if( isset( $_GET['consulta2'] ) && ! empty( $_GET['consulta2'] ) ) {
//    $cons=$_GET['consulta2'];
//    $table=$_GET['tabla3'];
////   $table = 'organism_information'; // Cambia este SÓLO si sabes lo que hace.
//$query .= " INNER JOIN $table on organism_information.Org_ID=$table.Org_ID";
//
//
// 
//}
//if( isset( $_GET['consulta3'] ) && ! empty( $_GET['consulta3'] ) ) {
//    $cons=$_GET['consulta3'];
//    $table=$_GET['tabla4'];
////   $table = 'organism_information'; // Cambia este SÓLO si sabes lo que hace.
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
////   $table = 'organism_information'; // Cambia este SÓLO si sabes lo que hace.
//$query = "SELECT $cons FROM organism_information INNER JOIN $table on organism_information.Org_ID=$table.Org_ID";
//
//$where = " WHERE";
//$and	= 0;
// 
//}

 if( isset( $_POST['txtA'] ) && ! empty( $_POST['txtA'] ) ) {
 
$where .= " organism_information.Org_ID='$_POST[txtA]'";

$and	= 1;
}  
      
 if( isset( $_POST['txtuser'] ) && ! empty( $_POST['txtuser'] ) ) {
if( $and === 1 )
$where .= " AND";


$where .= " organism_information.Isolated_by ='$txtuser'";
$and	= 1;

}      
  
 if( isset( $_POST['txtfechaIni'] ) && ! empty( $_POST['txtfechaIni'] ) && isset( $_POST['txtfechaFin'] ) && ! empty( $_POST['txtfechaFin'] )) {
if( $and === 1 )
$where .= " AND";
$Fini= $_POST['txtfechaIni'];
$Ffin=$_POST['txtfechaFin'];

$where .= " organism_information.Date_of_Isolation >= '$Fini' and  organism_information.Date_of_Isolation <= '$Ffin' ";
$and	= 1;

}   

 if( isset( $_POST['txtOrigin'] ) && ! empty( $_POST['txtOrigin'] ) ) {
if( $and === 1 )
$where .= " AND";

$where .= " organism_information.Origin='$txtOrigin'";
$and	= 1;

} 
 if( isset( $_POST['proveedor'] ) && ! empty( $_POST['proveedor'] ) ) {
if( $and === 1 )
$where .= " AND";

$where .= " organism_information.item='$proveedor'";
$and	= 1;

}
 if( isset( $_POST['producto'] ) && ! empty( $_POST['producto'] ) ) {
if( $and === 1 )
$where .= " AND";

$where .= " organism_information.level ='$producto'";
$and	= 1;

}

for($j=0;$j<10;$j++){     
     if( isset( $_POST['proveedor'.$j] ) && ! empty( $_POST['proveedor'.$j] ) ) {
if( $and === 1 )
$where .= " AND";
$ite= 'proveedor'.$j;
$where .= " organism_information.item='$_POST[$ite]'";
$and	= 1;

}
 }
  for($j=0;$j<10;$j++){
 if( isset( $_POST['producto'.$j] ) && ! empty( $_POST['producto'.$j] ) ) {
if( $and === 1 )
$where .= " AND";
$levee='producto'.$j;
$where .= " organism_information.level='$_POST[$levee]'";
$and	= 1;

}
  } 
 if( isset( $_POST['txtCommentsOrig'] ) && ! empty( $_POST['txtCommentsOrig'] ) ) {
if( $and === 1 )
$where .= " AND";

$where .= " organism_information.Additional_Comments='$txtCommentsOrig'";
$and	= 1;

}
     for($j=0;$j<10;$j++){
      
if( isset( $_POST['txtA'.$j] ) && ! empty( $_POST['txtA'.$j] ) ) {

if( $and === 1 )
$where .= " AND";

$metodoGet="txtA".$j;
$where .= " organism_information.Org_ID='$_POST[$metodoGet]'";
$and	= 1;
}
     }

     for($j=0;$j<10;$j++){
      
if( isset( $_POST['txtInso'.$j] ) && ! empty( $_POST['txtInso'.$j] ) ) {

if( $and === 1 )
$where .= " AND";

$metodoGet="txtInso".$j;
$where .= " organism_information.Isolated_by='$_POST[$metodoGet]'";
$and	= 1;
}
     }

     
        for($j=0;$j<10;$j++){
      
 if( isset( $_POST['txtfechaIni'.$j] ) && ! empty( $_POST['txtfechaIni'.$j] ) && isset( $_POST['txtfechaFin'.$j] ) && ! empty( $_POST['txtfechaFin'.$j] )) {
if( $and === 1 )
$where .= " AND";
$Fini= $_POST['txtfechaIni'.$j];
$Ffin=$_POST['txtfechaFin'.$j];

$where .= " organism_information.Date_of_Isolation >= '$Fini' and  organism_information.Date_of_Isolation <= '$Ffin' ";
$and	= 1;

}   
     }



    for($j=0;$j<10;$j++){
      
 if( isset( $_POST['txtOrigin'.$j] ) && ! empty( $_POST['txtOrigin'.$j] ) ) {
if( $and === 1 )
$where .= " AND";

$InsOrigen='txtOrigin'.$j;
$where .= " organism_information.Origin='$_POST[$InsOrigen]'";
$and	= 1;

} 
     }
     
        for($j=0;$j<10;$j++){
      
if( isset( $_POST['txtCommentsOrig'.$j] ) && ! empty( $_POST['txtCommentsOrig'.$j] ) ) {
if( $and === 1 )
$where .= " AND";


$Comments='txtCommentsOrig'.$j;
$where .= " organism_information.Additional_Comments= '$_POST[$Comments]'";
$and	= 1;

} 
     }

     
     
//     macros
     if( isset( $_POST['txtNameMacro'] ) && ! empty( $_POST['txtNameMacro'] ) ) {
if( $and === 1 )
$where .= " AND";


$where .= " macroscopic_morphology.Org_ID='$txtNameMacro'";
$and	= 1;

}      
  
     if( isset( $_POST['txtMediumMacro'] ) && ! empty( $_POST['txtMediumMacro'] ) ) {
if( $and === 1 )
$where .= " AND";


$where .= " macroscopic_morphology.Medium_ID='$txtMediumMacro'";
$and	= 1;

}   

     if(  isset( $_POST['txtTempInicial'] ) && ! empty( $_POST['txtTempFinal'] ) && isset( $_POST['txtTempInicial'] ) && ! empty( $_POST['txtTempFinal'] )) {
if( $and === 1 )
$where .= " AND";

$Tini=$_POST['txtTempInicial'];
$Tfin=$_POST['txtTempFinal'];
$where .= " macroscopic_morphology.Temperature >= '$Tini' and macroscopic_morphology.Temperature <= '$Tfin' ";
$and	= 1;

}   

     if( isset( $_POST['txtAgitationMacro'] ) && ! empty( $_POST['txtAgitationMacro'] ) ) {
if( $and === 1 )
$where .= " AND";


$where .= " macroscopic_morphology.Agitation='$txtAgitationMacro'";
$and	= 1;

} 
    if( isset( $_POST['txtAgeMacro'] ) && ! empty( $_POST['txtAgeMacro'] ) ) {
if( $and === 1 )
$where .= " AND";


$where .= " macroscopic_morphology.Age='$txtAgeMacro'";
$and	= 1;

}
     if(  isset( $_POST['txtSizeIMacro'] ) && ! empty( $_POST['txtSizeIMacro'] ) && isset( $_POST['txtSizeFMacro'] ) && ! empty( $_POST['txtSizeFMacro'] )) {
if( $and === 1 )
$where .= " AND";

$Sini=$_POST['txtSizeIMacro'];
$Sfin=$_POST['txtSizeFMacro'];
$where .= " macroscopic_morphology.Size >= '$Sini' and macroscopic_morphology.Size <= '$Sfin' ";
$and	= 1;

}  
   if( isset( $_POST['txtsurface'] ) && ! empty( $_POST['txtsurface'] ) ) {
if( $and === 1 )
$where .= " AND";


$where .= " macroscopic_morphology.Surface='$txtsurface'";
$and	= 1;

}

for($j=0;$j<10;$j++){
     if( isset( $_POST['txtMediumMacro'.$j] ) && ! empty( $_POST['txtMediumMacro'.$j] ) ) {
if( $and === 1 )
$where .= " AND";

$mediMacro='txtMediumMacro'.$j;
$where .= " macroscopic_morphology.Medium_ID='$_POST[$mediMacro]'";
$and	= 1;

}   
}
for($j=0;$j<10;$j++){
    if(  isset( $_POST['txtTempInicial'.$j] ) && ! empty( $_POST['txtTempFinal'.$j] ) && isset( $_POST['txtTempInicial'.$j] ) && ! empty( $_POST['txtTempFinal'.$j] )) {
if( $and === 1 )
$where .= " AND";

$Tini='txtTempInicial'.$j;
$Tfin='txtTempFinal'.$j;
$where .= " macroscopic_morphology.Temperature >= '$_GET[$Tini]' and macroscopic_morphology.Temperature <= '$_GET[$Tfin]' ";
$and	= 1;

}   
}
for($j=0;$j<10;$j++){
 if( isset( $_POST['txtAgitationMacro'.$j] ) && ! empty( $_POST['txtAgitationMacro'.$j] ) ) {
if( $and === 1 )
$where .= " AND";

$AgitMacro='txtAgitationMacro'.$j;
$where .= " macroscopic_morphology.Agitation='$_POST[$AgitMacro]'";
$and	= 1;

}   
}

for($j=0;$j<10;$j++){
 if( isset( $_POST['txtAgeMacro'.$j] ) && ! empty( $_POST['txtAgeMacro'.$j] ) ) {
if( $and === 1 )
$where .= " AND";

$AgeMacro='txtAgeMacro'.$j;
$where .= " macroscopic_morphology.Age='$_POST[$AgeMacro]'";
$and	= 1;

} 
}

for($j=0;$j<10;$j++){
    if(  isset( $_POST['txtSizeIMacro'.$j] ) && ! empty( $_POST['txtSizeIMacro'.$j] ) && isset( $_POST['txtSizeFMacro'.$j] ) && ! empty( $_POST['txtSizeFMacro'.$j] )) {
if( $and === 1 )
$where .= " AND";

$Tini='txtSizeIMacro'.$j;
$Tfin='txtSizeFMacro'.$j;
$where .= " macroscopic_morphology.Size >= '$_POST[$Tini]' and macroscopic_morphology.Size <= '$_POST[$Tfin]' ";
$and	= 1;

}   
}
for($j=0;$j<10;$j++){
    if(  isset( $_POST['txtsurface'.$j] ) && ! empty( $_POST['txtsurface'.$j] )) {
if( $and === 1 )
$where .= " AND";

$Surface='txtsurface'.$j;

$where .= " macroscopic_morphology.Surface >= '$_POST[$Surface]' ";
$and	= 1;

}   
}
//micro
 if( isset( $_POST['txtMediumMmicro'] ) && ! empty( $_POST['txtMediumMmicro'] ) ) {
if( $and === 1 )
$where .= " AND";

$where .= " microscopic_morphology.Medium_ID='$txtMediumMmicro'";
$and	= 1;

}

if(  isset( $_POST['txtTemperatureIMicro'] ) && ! empty( $_POST['txtTemperatureIMicro'] ) && isset( $_POST['txtTemperatureFMicro'] ) && ! empty( $_POST['txtTemperatureFMicro'] )) {
if( $and === 1 )
$where .= " AND";

$Sini=$_POST['txtTemperatureIMicro'];
$Sfin=$_POST['txtTemperatureFMicro'];
$where .= " microscopic_morphology.Temperature >= '$Sini' and microscopic_morphology.Temperature <= '$Sfin' ";
$and	= 1;

}  

 if( isset( $_POST['txtAgitationMi'] ) && ! empty( $_POST['txtAgitationMi'] ) ) {
if( $and === 1 )
$where .= " AND";

$where .= " microscopic_morphology.Agitation='$txtAgitationMi'";
$and	= 1;

}

 if( isset( $_POST['txtAgeMicro'] ) && ! empty( $_POST['txtAgeMicro'] ) ) {
if( $and === 1 )
$where .= " AND";

$where .= " microscopic_morphology.Agitation='$txtAgeMicro'";
$and	= 1;

}
if(  isset( $_POST['txtAxis_short'] ) && ! empty( $_POST['txtAxis_short'] ) && isset( $_POST['txtAxis_long'] ) && ! empty( $_POST['txtAxis_long'] )) {
if( $and === 1 )
$where .= " AND";

$Sini=$_POST['txtAxis_short'];
$Sfin=$_POST['txtAxis_long'];
$where .= " microscopic_morphology.Axis_short >= '$Sini' and microscopic_morphology.Axis_long <= '$Sfin' ";
$and	= 1;

}  

 if( isset( $_POST['txtMotility'] ) && ! empty( $_POST['txtMotility'] ) ) {
if( $and === 1 )
$where .= " AND";

$where .= " microscopic_morphology.Motility='$txtMotility'";
$and	= 1;

}
 if( isset( $_POST['txtAggregates'] ) && ! empty( $_POST['txtAggregates'] ) ) {
if( $and === 1 )
$where .= " AND";

$where .= " microscopic_morphology.Aggregates='$txtAggregates'";
$and	= 1;

}
 if( isset( $_POST['txtBiofilm_formation'] ) && ! empty( $_POST['txtBiofilm_formation'] ) ) {
if( $and === 1 )
$where .= " AND";

$where .= " microscopic_morphology.Biofilm_formation='$txtBiofilm_formation'";
$and	= 1;

}
 if( isset( $_POST['txtGram_test'] ) && ! empty( $_POST['txtGram_test'] ) ) {
if( $and === 1 )
$where .= " AND";

$where .= " microscopic_morphology.Gram_test='$txtGram_test'";
$and	= 1;

}



for($j=0;$j<10;$j++){
if( isset( $_POST['txtMediumMmicro'.$j] ) && ! empty( $_POST['txtMediumMmicro'.$j] ) ) {
if( $and === 1 )
$where .= " AND";
$medMicro='txtMediumMmicro'.$j;
$where .= " microscopic_morphology.Medium_ID='$_POST[$medMicro]'";
$and	= 1;

}
}
for($j=0;$j<10;$j++){
if(  isset( $_POST['txtTemperatureIMicro'.$j] ) && ! empty( $_POST['txtTemperatureIMicro'.$j] ) && isset( $_POST['txtTemperatureFMicro'.$j] ) && ! empty( $_POST['txtTemperatureFMicro'.$j] )) {
if( $and === 1 )
$where .= " AND";

$Sini='txtTemperatureIMicro'.$j;
$Sfin='txtTemperatureFMicro'.$j;
$where .= " microscopic_morphology.Temperature >= '$_POST[$Sini]' and microscopic_morphology.Temperature <= '$_POST[$Sfin]' ";
$and	= 1;

}  
}
for($j=0;$j<10;$j++){
     if( isset( $_POST['txtAgitationMi'.$j] ) && ! empty( $_POST['txtAgitationMi'.$j] ) ) {
if( $and === 1 )
$where .= " AND";

$AgiMicro='txtAgitationMi'.$j;
$where .= " microscopic_morphology.Agitation='$_POST[$AgiMicro]'";
$and	= 1;

}   
}
for($j=0;$j<10;$j++){
if( isset( $_POST['txtAgeMicro'.$j] ) && ! empty( $_POST['txtAgeMicro'.$j] ) ) {
if( $and === 1 )
$where .= " AND";
$AgeMicro='txtAgeMicro'.$j;
$where .= " microscopic_morphology.Agitation='$_POST[$AgeMicro]'";
$and	= 1;

}
}
for($j=0;$j<10;$j++){
if(  isset( $_POST['txtAxis_short'.$j] ) && ! empty( $_POST['txtAxis_short'.$j] ) && isset( $_POST['txtAxis_long'.$j] ) && ! empty( $_POST['txtAxis_long'.$j] )) {
if( $and === 1 )
$where .= " AND";

$Sini='txtAxis_short'.$j;
$Sfin='txtAxis_long'.$j;
$where .= " microscopic_morphology.Axis_short >= '$_POST[$Sini]' and microscopic_morphology.Axis_long <= '$_POST[$Sfin]' ";
$and	= 1;

}  
}
for($j=0;$j<10;$j++){
 if( isset( $_POST['txtMotility'.$j] ) && ! empty( $_POST['txtMotility'.$j] ) ) {
if( $and === 1 )
$where .= " AND";
$molityMicro='txtMotility'.$j;
$where .= " microscopic_morphology.Motility ='$_POST[$molityMicro]'";
$and	= 1;

}
}
for($j=0;$j<10;$j++){
 if( isset( $_POST['txtAggregates'.$j] ) && ! empty( $_POST['txtAggregates'.$j] ) ) {
if( $and === 1 )
$where .= " AND";
$aggregateMic='txtAggregates'.$j;
$where .= " microscopic_morphology.Aggregates='$_POST[$aggregateMic]'";
$and	= 1;

}
}
for($j=0;$j<10;$j++){
 if( isset( $_POST['txtBiofilm_formation'.$j] ) && ! empty( $_POST['txtBiofilm_formation'.$j] ) ) {
if( $and === 1 )
$where .= " AND";
$bioMicro='txtBiofilm_formation'.$j;
$where .= " microscopic_morphology.Biofilm_formation='$_POST[$bioMicro]'";
$and	= 1;

}
}
for($j=0;$j<10;$j++){
 if( isset( $_POST['txtGram_test'.$j] ) && ! empty( $_POST['txtGram_test'.$j] ) ) {
if( $and === 1 )
$where .= " AND";
$gramTest='txtGram_test'.$j;
$where .= " microscopic_morphology.Gram_test='$_POST[$gramTest]'";
$and	= 1;

}
}


//Grow
 if( isset( $_POST['txtMedium_solidGrow'] ) && ! empty( $_POST['txtMedium_solidGrow'] ) ) {
if( $and === 1 )
$where .= " AND";

$where .= " growth_characteristics.Medium_solid='$txtMedium_solidGrow'";
$and	= 1;

}
 if( isset( $_POST['txtTemperatureSIGrow'] ) && ! empty( $_POST['txtTemperatureSIGrow'] ) && isset( $_POST['txtTemperatureSFGrow'] ) && ! empty( $_POST['txtTemperatureSFGrow'] ) ) {
if( $and === 1 )
$where .= " AND";

$Fini= $_POST['txtTemperatureSIGrow'];
$Ffin=$_POST['txtTemperatureSFGrow'];

$where .= " growth_characteristics.Temperature_solid >= '$Fini' and  growth_characteristics.Temperature_solid <= '$Ffin' ";

$and	= 1;

}

 if( isset( $_POST['txtTime_solidGrow'] ) && ! empty( $_POST['txtTime_solidGrow'] ) ) {
if( $and === 1 )
$where .= " AND";

$where .= " growth_characteristics.Time_solid ='$txtTime_solidGrow'";
$and	= 1;

}
 if( isset( $_POST['txtMedium_liquidGrow'] ) && ! empty( $_POST['txtMedium_liquidGrow'] ) ) {
if( $and === 1 )
$where .= " AND";

$where .= " growth_characteristics.Medium_liquid ='$txtMedium_liquidGrow'";
$and	= 1;

}

 if( isset( $_POST['txtTempIliquidGrow'] ) && ! empty( $_POST['txtTempIliquidGrow'] ) && isset( $_POST['txtTempFliquidGrow'] ) && ! empty( $_POST['txtTempFliquidGrow'] ) ) {
if( $and === 1 )
$where .= " AND";

$Fini= $_POST['txtTempIliquidGrow'];
$Ffin=$_POST['txtTempFliquidGrow'];

$where .= " growth_characteristics.Temperature_liquid >= '$Fini' and  growth_characteristics.Temperature_liquid <= '$Ffin' ";

$and	= 1;

}

 if( isset( $_POST['txtAgitation_time'] ) && ! empty( $_POST['txtAgitation_time'] ) ) {
if( $and === 1 )
$where .= " AND";

$where .= " growth_characteristics.Agitation_time='$txtAgitation_time'";
$and	= 1;

}

 if( isset( $_POST['txtTime_liquid'] ) && ! empty( $_POST['txtTime_liquid'] ) ) {
if( $and === 1 )
$where .= " AND";

$where .= " growth_characteristics.Time_liquid='$txtTime_liquid'";
$and	= 1;

}
 if( isset( $_POST['txtpH_initialGrow'] ) && ! empty( $_POST['txtpH_initialGrow'] ) && isset( $_POST['txtpH_finalGrow'] ) && ! empty( $_POST['txtpH_finalGrow'] ) ) {
if( $and === 1 )
$where .= " AND";

$Fini= $_POST['txtpH_initialGrow'];
$Ffin=$_POST['txtpH_finalGrow'];

$where .= " growth_characteristics.pH_initial >= '$Fini' and  growth_characteristics.pH_final <= '$Ffin' ";

$and	= 1;

}
if( isset( $_POST['txtOD600_initialGrow'] ) && ! empty( $_POST['txtOD600_initialGrow'] ) && isset( $_POST['txtOD600_finalGrow'] ) && ! empty( $_POST['txtOD600_finalGrow'] ) ) {
if( $and === 1 )
$where .= " AND";

$Fini= $_POST['txtOD600_initialGrow'];
$Ffin=$_POST['txtOD600_finalGrow'];

$where .= " growth_characteristics.OD600_initial >= '$Fini' and  growth_characteristics.OD600_final <= '$Ffin' ";

$and	= 1;

}

 if( isset( $_POST['txtExtra_parameters'] ) && ! empty( $_POST['txtExtra_parameters'] ) ) {
if( $and === 1 )
$where .= " AND";

$where .= " growth_characteristics.Extra_parameters='$txtExtra_parameters'";
$and	= 1;

}
//For-grow
 for($j=0;$j<10;$j++){
if( isset( $_POST['txtMedium_solidGrow'.$j] ) && ! empty( $_POST['txtMedium_solidGrow'.$j] ) ) {
if( $and === 1 )
$where .= " AND";

$mediSGro='txtMedium_solidGrow'.$j;
$where .= " growth_characteristics.Medium_solid='$_POST[$mediSGro]'";
$and	= 1;

}
 }
 for($j=0;$j<10;$j++){
 if( isset( $_POST['txtTemperatureSIGrow'.$j] ) && ! empty( $_POST['txtTemperatureSIGrow'.$j] ) && isset( $_POST['txtTemperatureSFGrow'.$j] ) && ! empty( $_POST['txtTemperatureSFGrow'.$j] ) ) {
if( $and === 1 )
$where .= " AND";

$Fini= 'txtTemperatureSIGrow'.$j;
$Ffin='txtTemperatureSFGrow'.$j;

$where .= " growth_characteristics.Temperature_solid >= '$_POST[$Fini]' and  growth_characteristics.Temperature_solid <= '$_POST[$Ffin]' ";

$and	= 1;

}
 }
  for($j=0;$j<10;$j++){
 if( isset( $_POST['txtTime_solidGrow'.$j] ) && ! empty( $_POST['txtTime_solidGrow'.$j] ) ) {
if( $and === 1 )
$where .= " AND";
$timeSoliGrow='txtTime_solidGrow'.$j;
$where .= " growth_characteristics.Time_solid='$_POST[$timeSoliGrow]'";
$and	= 1;

}
  }
    for($j=0;$j<10;$j++){
 if( isset( $_POST['txtMedium_liquidGrow'.$j] ) && ! empty( $_POST['txtMedium_liquidGrow'.$j] ) ) {
if( $and === 1 )
$where .= " AND";
$mediumLiq='txtMedium_liquidGrow'.$j;
$where .= " growth_characteristics.Medium_liquid='$_POST[$mediumLiq]'";
$and	= 1;

}
    }
   
        for($j=0;$j<10;$j++){
 if( isset( $_POST['txtTempIliquidGrow'.$j] ) && ! empty( $_POST['txtTempIliquidGrow'.$j] ) && isset( $_POST['txtTempFliquidGrow'.$j] ) && ! empty( $_POST['txtTempFliquidGrow'.$j] ) ) {
if( $and === 1 )
$where .= " AND";

$Fini= 'txtTempIliquidGrow'.$j;
$Ffin='txtTempFliquidGrow'.$j;

$where .= " growth_characteristics.Temperature_liquid >= '$_POST[$Fini]' and  growth_characteristics.Temperature_liquid <= '$_POST[$Ffin]' ";

$and	= 1;

}
        }
        for($j=0;$j<10;$j++){
 if( isset( $_POST['txtAgitation_time'.$j] ) && ! empty( $_POST['txtAgitation_time'.$j] ) ) {
if( $and === 1 )
$where .= " AND";
$agitationGrow='txtAgitation_time'.$j;
$where .= " growth_characteristics.Agitation_time ='$_POST[$agitationGrow]'";
$and	= 1;

}
        }
          for($j=0;$j<10;$j++){
 if( isset( $_POST['txtTime_liquid'.$j] ) && ! empty( $_POST['txtTime_liquid'.$j] ) ) {
if( $and === 1 )
$where .= " AND";
$timeLiquidGrow='txtTime_liquid'.$j;
$where .= " growth_characteristics.Time_liquid='$_POST[$timeLiquidGrow]'";
$and	= 1;

}
          }
 for($j=0;$j<10;$j++){         
 if( isset( $_POST['txtpH_initialGrow'.$j] ) && ! empty( $_POST['txtpH_initialGrow'.$j] ) && isset( $_POST['txtpH_finalGrow'.$j] ) && ! empty( $_POST['txtpH_finalGrow'.$j] ) ) {
if( $and === 1 )
$where .= " AND";

$Fini= 'txtpH_initialGrow'.$j;
$Ffin='txtpH_finalGrow'.$j;

$where .= " growth_characteristics.pH_initial >= '$_POST[$Fini]' and  growth_characteristics.pH_final <= '$_POST[$Ffin]' ";

$and	= 1;

}
 }
 for($j=0;$j<10;$j++){   
if( isset( $_POST['txtOD600_initialGrow'.$j] ) && ! empty( $_POST['txtOD600_initialGrow'.$j] ) && isset( $_POST['txtOD600_finalGrow'.$j] ) && ! empty( $_POST['txtOD600_finalGrow'.$j] ) ) {
if( $and === 1 )
$where .= " AND";

$Fini= 'txtOD600_initialGrow'.$j;
$Ffin='txtOD600_finalGrow'.$j;

$where .= " growth_characteristics.OD600_initial >= '$_POST[$Fini]' and  growth_characteristics.OD600_final <= '$_POST[$Ffin]' ";

$and	= 1;

}
 }
  for($j=0;$j<10;$j++){ 
 if( isset( $_POST['txtExtra_parameters'.$j] ) && ! empty( $_POST['txtExtra_parameters'.$j] ) ) {
if( $and === 1 )
$where .= " AND";
$extraPara='txtExtra_parameters'.$j;
$where .= " growth_characteristics.Extra_parameters='$_POST[$extraPara]'";
$and	= 1;

}
  }
  
  //preservation
 if( isset( $_POST['txtPreserv'] ) && ! empty( $_POST['txtPreserv'] ) ) {
if( $and === 1 )
$where .= " AND";

$where .= " preservation_of_strains.Preservation_Method_ID='$txtPreserv'";
$and	= 1;

}  

if( isset( $_POST['txtDatePres1'] ) && ! empty( $_POST['txtDatePres1'] ) && isset( $_POST['txtDatePres2'] ) && ! empty( $_POST['txtDatePres2'] )) {
if( $and === 1 )
$where .= " AND";
$Fini= $_POST['txtDatePres1'];
$Ffin=$_POST['txtDatePres2'];

$where .= " preservation_of_strains.Date_of_preservation >= '$Fini' and  preservation_of_strains.Date_of_preservation <= '$Ffin' ";
$and	= 1;

}  
 if( isset( $_POST['txtUser_Pres'] ) && ! empty( $_POST['txtUser_Pres'] ) ) {
if( $and === 1 )
$where .= " AND";

$where .= " preservation_of_strains.User_ID='$txtUser_Pres'";
$and	= 1;

} 
 if( isset( $_POST['txtNumber_of_vialsPres'] ) && ! empty( $_POST['txtNumber_of_vialsPres'] ) ) {
if( $and === 1 )
$where .= " AND";

$where .= " preservation_of_strains.Number_of_vials='$txtNumber_of_vialsPres'";
$and	= 1;

}
 if( isset( $_POST['txtVolume_of_vials'] ) && ! empty( $_POST['txtVolume_of_vials'] ) ) {
if( $and === 1 )
$where .= " AND";

$where .= " preservation_of_strains.Volume_of_vials='$txtVolume_of_vials'";
$and	= 1;

}
if( isset( $_POST['txtStorage_Pres'] ) && ! empty( $_POST['txtStorage_Pres'] ) ) {
if( $and === 1 )
$where .= " AND";

$where .= " preservation_of_strains.Storage_ID='$txtStorage_Pres'";
$and	= 1;

}

  if( isset( $_POST['txtComments_Pres'] ) && ! empty( $_POST['txtComments_Pres'] ) ) {
if( $and === 1 )
$where .= " AND";

$where .= " preservation_of_strains.Comments='$txtComments_Pres'";
$and	= 1;

}
//for_preservation
for($j=0;$j<10;$j++){
 if( isset( $_POST['txtPreserv'.$j] ) && ! empty( $_POST['txtPreserv'.$j] ) ) {
if( $and === 1 )
$where .= " AND";
$preser='txtPreserv'.$j;
$where .= " preservation_of_strains.Preservation_Method_ID ='$_POST[$preser]'";
$and	= 1;

}  
}
for($j=0;$j<10;$j++){
if( isset( $_POST['txtDatePres1'.$j] ) && ! empty( $_POST['txtDatePres1'.$j] ) && isset( $_POST['txtDatePres2'.$j] ) && ! empty( $_POST['txtDatePres2'.$j] )) {
if( $and === 1 )
$where .= " AND";
$Fini= 'txtDatePres1'.$j;
$Ffin='txtDatePres2'.$j;

$where .= " preservation_of_strains.Date_of_preservation >= '$_POST[$Fini]' and  preservation_of_strains.Date_of_preservation <= '$_POST[$Ffin]' ";
$and	= 1;

}  
}
for($j=0;$j<10;$j++){
 if( isset( $_POST['txtUser_Pres'.$j] ) && ! empty( $_POST['txtUser_Pres'.$j] ) ) {
if( $and === 1 )
$where .= " AND";
$userPres='txtUser_Pres'.$j;
$where .= " preservation_of_strains.User_ID ='$_POST[$userPres]'";
$and	= 1;

} }
for($j=0;$j<10;$j++){
 if( isset( $_POST['txtNumber_of_vialsPres'.$j] ) && ! empty( $_POST['txtNumber_of_vialsPres'.$j] ) ) {
if( $and === 1 )
$where .= " AND";
$vials='txtNumber_of_vialsPres'.$j;
$where .= " preservation_of_strains.Number_of_vials='$_POST[$vials]'";
$and	= 1;

}
}
for($j=0;$j<10;$j++){
 if( isset( $_POST['txtVolume_of_vials'.$j] ) && ! empty( $_POST['txtVolume_of_vials'.$j] ) ) {
if( $and === 1 )
$where .= " AND";
$volume='txtVolume_of_vials'.$j;
$where .= " preservation_of_strains.Volume_of_vials='$_POST[$volume]'";
$and	= 1;

}
}

for($j=0;$j<10;$j++){
if( isset( $_POST['txtStorage_Pres'.$j] ) && ! empty( $_POST['txtStorage_Pres'.$j] ) ) {
if( $and === 1 )
$where .= " AND";
$storage='txtStorage_Pres'.$j;
$where .= " preservation_of_strains.Storage_ID='$_POST[$storage]'";
$and	= 1;

}
}
for($j=0;$j<10;$j++){
  if( isset( $_POST['txtComments_Pres'.$j] ) && ! empty( $_POST['txtComments_Pres'.$j] ) ) {
if( $and === 1 )
$where .= " AND";
$comment='txtComments_Pres'.$j;
$where .= " preservation_of_strains.Comments='$_POST[$comment]'";
$and	= 1;

}
}
//dna
 if( isset( $_POST['txtExtraMethod'] ) && ! empty( $_POST['txtExtraMethod'] ) ) {
if( $and === 1 )
$where .= " AND";


$where .= " dna.Extraction_Method_ID= '$txtExtraMethod'";
$and	= 1;

}  

 if( isset( $_POST['txtDatePresD1'] ) && ! empty( $_POST['txtDatePresD1'] ) && isset( $_POST['txtDatePresD2'] ) && ! empty( $_POST['txtDatePresD2'] )) {
if( $and === 1 )
$where .= " AND";
$Fini= $_POST['txtDatePresD1'];
$Ffin=$_POST['txtDatePresD2'];

$where .= " dna.Date_of_extraction >= '$Fini' and  dna.Date_of_extraction <= '$Ffin' ";
$and	= 1;

}   


if( isset( $_POST['txtConcentration_DNA'] ) && ! empty( $_POST['txtConcentration_DNA'] ) ) {
if( $and === 1 )
$where .= " AND";


$where .= " dna.Concentration= '$txtConcentration_DNA'";
$and	= 1;

}  

if( isset( $_POST['txtVolume_DNA'] ) && ! empty( $_POST['txtVolume_DNA'] ) ) {
if( $and === 1 )
$where .= " AND";


$where .= " dna.Volume = '$txtVolume_DNA'";
$and	= 1;

}  
if( isset( $_POST['txtUser_DNA'] ) && ! empty( $_POST['txtUser_DNA'] ) ) {
if( $and === 1 )
$where .= " AND";


$where .= " dna.User_ID ='$txtUser_DNA'";
$and	= 1;

} 
if( isset( $_POST['txtStorage_DNA'] ) && ! empty( $_POST['txtStorage_DNA'] ) ) {
if( $and === 1 )
$where .= " AND";


$where .= " dna.Storage_ID='$txtStorage_DNA'";
$and	= 1;

} 
//for-dna
for($j=0;$j<10;$j++){
 if( isset( $_POST['txtExtraMethod'.$j] ) && ! empty( $_POST['txtExtraMethod'.$j] ) ) {
if( $and === 1 )
$where .= " AND";

$extraMethod='txtExtraMethod'.$j;
$where .= " dna.Extraction_Method_ID = '$_POST[$extraMethod]'";
$and	= 1;

}  
}
for($j=0;$j<10;$j++){
 if( isset( $_POST['txtDatePresD1'.$j] ) && ! empty( $_POST['txtDatePresD1'.$j] ) && isset( $_POST['txtDatePresD2'.$j] ) && ! empty( $_POST['txtDatePresD2'.$j] )) {
if( $and === 1 )
$where .= " AND";
$Fini= 'txtDatePresD1'.$j;
$Ffin='txtDatePresD2'.$j;

$where .= " dna.Date_of_extraction >= '$_POST[$Fini]' and  dna.Date_of_extraction <= '$_POST[$Ffin]' ";
$and	= 1;

}   

}
for($j=0;$j<10;$j++){
if( isset( $_POST['txtConcentration_DNA'.$j] ) && ! empty( $_POST['txtConcentration_DNA'.$j] ) ) {
if( $and === 1 )
$where .= " AND";

$concentra='txtConcentration_DNA'.$j;
$where .= " dna.Concentration ='$_POST[$concentra]'";
$and	= 1;

}

}
for($j=0;$j<10;$j++){
if( isset( $_POST['txtVolume_DNA'.$j] ) && ! empty( $_POST['txtVolume_DNA'.$j] ) ) {
if( $and === 1 )
$where .= " AND";

$volumenDna='txtVolume_DNA'.$j;
$where .= " dna.Volume= '$_POST[$volumenDna]'";
$and	= 1;

}  }
for($j=0;$j<10;$j++){
if( isset( $_POST['txtUser_DNA'.$j] ) && ! empty( $_POST['txtUser_DNA'.$j] ) ) {
if( $and === 1 )
$where .= " AND";

$userDna='txtUser_DNA'.$j;
$where .= " dna.User_ID ='$_POST[$userDna]'";
$and	= 1;

} 
}
for($j=0;$j<10;$j++){
if( isset( $_POST['txtStorage_DNA'.$j] ) && ! empty( $_POST['txtStorage_DNA'.$j] ) ) {
if( $and === 1 )
$where .= " AND";

$strora='txtStorage_DNA'.$j;
$where .= " dna.Storage_ID ='$_POST[$strora]'";
$and	= 1;

} 
}
//Genetic
if( isset( $_POST['txtTaxonomic_lineage'] ) && ! empty( $_POST['txtTaxonomic_lineage'] ) ) {
if( $and === 1 )
$where .= " AND";


$where .= " genetic_data.Taxonomic_lineage='$txtTaxonomic_lineage'";
$and	= 1;

}
if( isset( $_POST['txtGene'] ) && ! empty( $_POST['txtGene'] ) ) {
if( $and === 1 )
$where .= " AND";


$where .= " genetic_data.Gene_ID='$txtGene'";
$and	= 1;

}
if( isset( $_POST['txtSequenGen'] ) && ! empty( $_POST['txtSequenGen'] ) ) {
if( $and === 1 )
$where .= " AND";


$where .= " genetic_data.Sequencing_Method_ID='$txtSequenGen'";
$and	= 1;

}
if( isset( $_POST['txtCured_sequence'] ) && ! empty( $_POST['txtCured_sequence'] ) ) {
if( $and === 1 )
$where .= " AND";


$where .= " genetic_data.Cured_sequence='$txtCured_sequence'";
$and	= 1;

}

if( isset( $_POST['txtComments_Genetic'] ) && ! empty( $_POST['txtComments_Genetic'] ) ) {
if( $and === 1 )
$where .= " AND";


$where .= " genetic_data.Comments='$txtComments_Genetic'";
$and	= 1;

}
//for-genetic
for($j=0;$j<10;$j++){
if( isset( $_POST['txtTaxonomic_lineage'.$j] ) && ! empty( $_POST['txtTaxonomic_lineage'.$j] ) ) {
if( $and === 1 )
$where .= " AND";

$taxonomic='txtTaxonomic_lineage'.$j;
$where .= " genetic_data.Taxonomic_lineage='$_POST[$taxonomic]'";
$and	= 1;

}
}
for($j=0;$j<10;$j++){
if( isset( $_POST['txtGene'.$j] ) && ! empty( $_POST['txtGene'.$j] ) ) {
if( $and === 1 )
$where .= " AND";

$gen='txtGene'.$j;
$where .= " genetic_data.Gene_ID= '$_POST[$gen]'";
$and	= 1;

}
}
for($j=0;$j<10;$j++){
if( isset( $_POST['txtSequenGen'.$j] ) && ! empty( $_POST['txtSequenGen'.$j] ) ) {
if( $and === 1 )
$where .= " AND";

$seq='txtSequenGen'.$j;
$where .= " genetic_data.Sequencing_Method_ID= '$_POST[$seq]'";
$and	= 1;

}
}
for($j=0;$j<10;$j++){
if( isset( $_POST['txtCured_sequence'.$j] ) && ! empty( $_POST['txtCured_sequence'.$j] ) ) {
if( $and === 1 )
$where .= " AND";

$cures='txtCured_sequence'.$j;
$where .= " genetic_data.Cured_sequence='$_POST[$cures]'";
$and	= 1;

}
}
for($j=0;$j<10;$j++){
if( isset( $_POST['txtComments_Genetic'.$j] ) && ! empty( $_POST['txtComments_Genetic'.$j] ) ) {
if( $and === 1 )
$where .= " AND";

$commentGen='txtComments_Genetic'.$j;
$where .= " genetic_data.Comments='$_POST[$commentGen]'";
$and	= 1;

}
}
//meta
 if( isset( $_POST['txtUser_Meta'] ) && ! empty( $_POST['txtUser_Meta'] ) ) {
if( $and === 1 )
$where .= " AND";


$where .= " metabolic_data.User_ID= '$txtUser_Meta'";
$and	= 1;

} 

 if( isset( $_POST['txtMedium_Meta'] ) && ! empty( $_POST['txtMedium_Meta'] ) ) {
if( $and === 1 )
$where .= " AND";


$where .= " metabolic_data.Medium_ID='$txtMedium_Meta'";
$and	= 1;

} 

 if( isset( $_POST['txtTemperatureIMeta'] ) && ! empty( $_POST['txtTemperatureIMeta'] ) && isset( $_POST['txtTemperatureFMeta'] ) && ! empty( $_POST['txtTemperatureFMeta'] )) {
if( $and === 1 )
$where .= " AND";
$Fini= $_POST['txtTemperatureIMeta'];
$Ffin=$_POST['txtTemperatureFMeta'];

$where .= " metabolic_data.Temperature >= '$Fini' and  metabolic_data.Temperature <= '$Ffin' ";
$and	= 1;

}   

 if( isset( $_POST['txtAgitation_Meta'] ) && ! empty( $_POST['txtAgitation_Meta'] ) ) {
if( $and === 1 )
$where .= " AND";

$where .= " metabolic_data.Agitation='$txtAgitation_Meta'";
$and	= 1;

} 
 if( isset( $_POST['txtTime_Meta'] ) && ! empty( $_POST['txtTime_Meta'] ) ) {
if( $and === 1 )
$where .= " AND";

$where .= " metabolic_data.Time='$txtTime_Meta'";
$and	= 1;

}
 if( isset( $_POST['txtpHI_Meta'] ) && ! empty( $_POST['txtpHI_Meta'] ) && isset( $_POST['txtpHF_Meta'] ) && ! empty( $_POST['txtpHF_Meta'] )) {
if( $and === 1 )
$where .= " AND";
$Fini= $_POST['txtpHI_Meta'];
$Ffin=$_POST['txtpHF_Meta'];

$where .= " metabolic_data.pH_initial >= '$Fini' and  metabolic_data.pH_final <= '$Ffin' ";
$and	= 1;

} 

if( isset( $_POST['txtOD600_initialMeta'] ) && ! empty( $_POST['txtOD600_initialMeta'] ) && isset( $_POST['txtOD600_finalMeta'] ) && ! empty( $_POST['txtOD600_finalMeta'] )) {
if( $and === 1 )
$where .= " AND";
$Fini= $_POST['txtOD600_initialMeta'];
$Ffin=$_POST['txtOD600_finalMeta'];

$where .= " metabolic_data.OD600_initial >= '$Fini' and  metabolic_data.OD600_final <= '$Ffin' ";
$and	= 1;

} 
 if( isset( $_POST['txtComments_Meta'] ) && ! empty( $_POST['txtComments_Meta'] ) ) {
if( $and === 1 )
$where .= " AND";

$where .= " metabolic_data.Comments='$txtComments_Meta'";
$and	= 1;

}
//for meta
for($j=0;$j<10;$j++){
 if( isset( $_POST['txtUser_Meta'.$j] ) && ! empty( $_POST['txtUser_Meta'.$j] ) ) {
if( $and === 1 )
$where .= " AND";

$userM='txtUser_Meta'.$j;
$where .= " metabolic_data.User_ID ='$_POST[$userM]'";
$and	= 1;

} 
}
for($j=0;$j<10;$j++){
 if( isset( $_POST['txtMedium_Meta'.$j] ) && ! empty( $_POST['txtMedium_Meta'.$j] ) ) {
if( $and === 1 )
$where .= " AND";

$mediumMe='txtMedium_Meta'.$j;
$where .= " metabolic_data.Medium_ID='$_POST[$mediumMe]'";
$and	= 1;

} 
}
for($j=0;$j<10;$j++){
 if( isset( $_POST['txtTemperatureIMeta'.$j] ) && ! empty( $_POST['txtTemperatureIMeta'.$j] ) && isset( $_POST['txtTemperatureFMeta'.$j] ) && ! empty( $_POST['txtTemperatureFMeta'.$j] )) {
if( $and === 1 )
$where .= " AND";
$Fini='txtTemperatureIMeta'.$j;
$Ffin='txtTemperatureFMeta'.$j;

$where .= " metabolic_data.Temperature >= '$_POST[$Fini]' and  metabolic_data.Temperature <= '$_POST[$Ffin]' ";
$and	= 1;

}   
}
for($j=0;$j<10;$j++){
 if( isset( $_POST['txtAgitation_Meta'.$j] ) && ! empty( $_POST['txtAgitation_Meta'.$j] ) ) {
if( $and === 1 )
$where .= " AND";
$agitationMeta='txtAgitation_Meta'.$j;
$where .= " metabolic_data.Agitation ='$_POST[$agitationMeta]'";
$and	= 1;

} }
for($j=0;$j<10;$j++){
 if( isset( $_POST['txtTime_Meta'.$j] ) && ! empty( $_POST['txtTime_Meta'.$j] ) ) {
if( $and === 1 )
$where .= " AND";
$timeMeta='txtTime_Meta'.$j;
$where .= " metabolic_data.Time = '$_POST[$timeMeta]'";
$and	= 1;

}
}
for($j=0;$j<10;$j++){
 if( isset( $_POST['txtpHI_Meta'.$j] ) && ! empty( $_POST['txtpHI_Meta'.$j] ) && isset( $_POST['txtpHF_Meta'.$j] ) && ! empty( $_POST['txtpHF_Meta'.$j] )) {
if( $and === 1 )
$where .= " AND";
$Fini= 'txtpHI_Meta'.$j;
$Ffin='txtpHF_Meta'.$j;

$where .= " metabolic_data.pH_initial >= '$_POST[$Fini]' and  metabolic_data.pH_final <= '$_POST[$Ffin]' ";
$and	= 1;

} 
}
for($j=0;$j<10;$j++){
if( isset( $_POST['txtOD600_initialMeta'.$j] ) && ! empty( $_POST['txtOD600_initialMeta'.$j] ) && isset( $_POST['txtOD600_finalMeta'.$j] ) && ! empty( $_POST['txtOD600_finalMeta'.$j] )) {
if( $and === 1 )
$where .= " AND";
$Fini= 'txtOD600_initialMeta'.$j;
$Ffin='txtOD600_finalMeta'.$j;

$where .= " metabolic_data.OD600_initial >= '$_POST[$Fini]' and  metabolic_data.OD600_final <= '$_POST[$Ffin]' ";
$and	= 1;

} }
for($j=0;$j<10;$j++){
 if( isset( $_POST['txtComments_Meta'.$j] ) && ! empty( $_POST['txtComments_Meta'.$j] ) ) {
if( $and === 1 )
$where .= " AND";
$comMeta='txtComments_Meta'.$j;
$where .= " metabolic_data.Comments ='$_POST[$comMeta]'";
$and	= 1;

}
}

//Assay
for($j=0;$j<10;$j++){
if( isset( $_POST['txtAssay_Type_Name'.$j] ) && ! empty( $_POST['txtAssay_Type_Name'.$j] ) ) {
if( $and === 1 )
$where .= " AND";
$bioAss='txtAssay_Type_Name'.$j;
$where .= " bioassays_data.Assay_Type_ID ='$_POST[$bioAss]'";
$and	= 1;

}
}
for($j=0;$j<10;$j++){
if( isset( $_POST['txtMedium_Bio'.$j] ) && ! empty( $_POST['txtMedium_Bio'.$j] ) ) {
if( $and === 1 )
$where .= " AND";
$mediuBio='txtMedium_Bio'.$j;
$where .= " bioassays_data.Medium_ID='$_POST[$mediuBio]'";
$and	= 1;

}
}
for($j=0;$j<10;$j++){
 if( isset( $_POST['txtTempInicialBio'.$j] ) && ! empty( $_POST['txtTempInicialBio'.$j] ) && isset( $_POST['txtTempFinalBio'.$j] ) && ! empty( $_POST['txtTempFinalBio'.$j] )) {
if( $and === 1 )
$where .= " AND";
$Fini= 'txtTempInicialBio'.$j;
$Ffin='txtTempFinalBio'.$j;

$where .= " bioassays_data.Temperature >= '$_POST[$Fini]' and  bioassays_data.Temperature <= '$_POST[$Ffin]' ";
$and	= 1;

}
}
for($j=0;$j<10;$j++){
if( isset( $_POST['txtInhibition'.$j] ) && ! empty( $_POST['txtInhibition'.$j] ) ) {
if( $and === 1 )
$where .= " AND";
$inhib='txtInhibition'.$j;
$where .= " bioassays_data.Inhibition='$_POST[$inhib]'";
$and	= 1;

}
}
for($j=0;$j<10;$j++){
if( isset( $_POST['txtInhiMeasu'.$j] ) && ! empty( $_POST['txtInhiMeasu'.$j] ) ) {
if( $and === 1 )
$where .= " AND";
$MeasuInh='txtInhiMeasu'.$j;
$where .= " bioassays_data.Inhibition_measurament='$_POST[$MeasuInh]'";
$and	= 1;

}
}
for($j=0;$j<10;$j++){
if( isset( $_POST['txtAntagonist_strain'.$j] ) && ! empty( $_POST['txtAntagonist_strain'.$j] ) ) {
if( $and === 1 )
$where .= " AND";
$Anto='txtAntagonist_strain'.$j;
$where .= " bioassays_data.Antagonist_strain='$_POST[$Anto]'";
$and	= 1;

}
}
for($j=0;$j<10;$j++){
if( isset( $_POST['txtComments_bio'.$j] ) && ! empty( $_POST['txtComments_bio'.$j] ) ) {
if( $and === 1 )
$where .= " AND";
$comenBio='txtComments_bio'.$j;
$where .= " bioassays_data.Comments='$_POST[$comenBio]'";
$and	= 1;

}
}
//for-bio
if( isset( $_POST['txtAssay_Type_Name'] ) && ! empty( $_POST['txtAssay_Type_Name'] ) ) {
if( $and === 1 )
$where .= " AND";

$where .= " bioassays_data.Assay_Type_ID ='$txtAssay_Type_Name'";
$and	= 1;

}
if( isset( $_POST['txtMedium_Bio'] ) && ! empty( $_POST['txtMedium_Bio'] ) ) {
if( $and === 1 )
$where .= " AND";

$where .= " bioassays_data.Medium_ID='$txtMedium_Bio'";
$and	= 1;

}

 if( isset( $_POST['txtTempInicialBio'] ) && ! empty( $_POST['txtTempInicialBio'] ) && isset( $_POST['txtTempFinalBio'] ) && ! empty( $_POST['txtTempFinalBio'] )) {
if( $and === 1 )
$where .= " AND";
$Fini= $_POST['txtTempInicialBio'];
$Ffin=$_POST['txtTempFinalBio'];

$where .= " bioassays_data.Temperature >= '$Fini' and  bioassays_data.Temperature <= '$Ffin' ";
$and	= 1;

} 
if( isset( $_POST['txtInhibition'] ) && ! empty( $_POST['txtInhibition'] ) ) {
if( $and === 1 )
$where .= " AND";

$where .= " bioassays_data.Inhibition='$txtInhibition'";
$and	= 1;

}
if( isset( $_POST['txtInhiMeasu'] ) && ! empty( $_POST['txtInhiMeasu'] ) ) {
if( $and === 1 )
$where .= " AND";

$where .= " bioassays_data.Inhibition_measurament='$txtInhiMeasu'";
$and	= 1;

}

if( isset( $_POST['txtAntagonist_strain'] ) && ! empty( $_POST['txtAntagonist_strain'] ) ) {
if( $and === 1 )
$where .= " AND";

$where .= " bioassays_data.Antagonist_strain='$txtAntagonist_strain'";
$and	= 1;

}
if( isset( $_POST['txtComments_bio'] ) && ! empty( $_POST['txtComments_bio'] ) ) {
if( $and === 1 )
$where .= " AND";

$where .= " bioassays_data.Comments='$txtComments_bio'";
$and	= 1;

}

if( strlen( $where ) > 6 ) 
    $laboratorio="and organism_information.lab='$consul2'";
$query .= $where.$laboratorio; 

$select = mysql_query($query, $cn) or die('Error'.mysql_error());
 




 
	$número_filas = mysql_num_rows($select);
if($número_filas==0)
{
echo "0 Results\n";
}
else
{
echo "$número_filas Results\n";
}
 
	
			

	//Mostramos el resultado. Este 'echo' será el que recibirá la conexión AJAX
	
   
        
        
        
       



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