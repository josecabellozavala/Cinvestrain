<?php 


include "../../../../bdConnection.php";

?>
<style>
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

</style>
<html>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
<head>
</head>
    <body>
        
            <br>
            <br>
          <center>  <h1> Protocols </h1></center>
            <center><div class='datagrid'>
<table border='3' >
 <thead>
<tr>

           <th> <h2>Assay type</h2></th>
</tr></thead>
</table> 
                   <br>
                   <br>
                   <br>
                    <br>
                    <br>
           <?php




require'../extras/class/sessions.php';
$objses = new Sessions();
$objses->init();


          $user = isset($_SESSION['user']) ? $_SESSION['user'] : null ;
  
$sql1="SELECT lab.id_lab FROM user,lab WHERE user.Name ='$user' AND user.lab=lab.id_lab";		
		$cs1=mysql_query($sql1,$cn);
                
		while($resul=mysql_fetch_array($cs1)){
			$consul2=$resul[0];
			}
             
                        
                        
                        
  $sql="select DISTINCT  Id_Catalogo from protocol where Id_Catalogo <> 0";		
		$cs=mysql_query($sql,$cn);
$cat=array();
while($resul=mysql_fetch_array($cs)){
					
$cat[]= $resul[0];  
}
  
$result = mysql_query($sql);
      $cuenta=mysql_num_rows($result); 
    
      $sql2="select Name from assay_type where lab='$consul2' ";
      $result = mysql_query($sql2);
      $cuenta=mysql_num_rows($result);
 for($i=0;$i<$cuenta;$i++){
 

 
 $sql2="select Name from assay_type where Assay_Type_ID='$cat[$i]' and lab='$consul2'  ";

$pe1 = mysql_query($sql2);

$rs_per = mysql_fetch_assoc($pe1);

 $NameCat=$rs_per['Name'];
 
echo "Categoria: ".$NameCat."<br>";

$sql3="select Description,Protocol from protocol where type='ASSAY' and Id_Catalogo='$cat[$i]' and lab='$consul2'";

$per3 = mysql_query($sql3);
	$num_rs_per = mysql_num_rows($per3);
	if ($num_rs_per==0){
		echo "  No records <br>";
		
	}
	
        
         while($val=mysql_fetch_array($per3)){
			  $var=$val[0];
			$var1=$val[1];
                             echo " <td><li><a href='$var1'><span>$var</span></a></li></td>";
                        
                        
                             }
                              
  }
  
 


?>    
 <table border='3' >
 <thead>
<tr>

           <th> <h2>Extraction Method</h2></th>
</tr></thead>
</table>      
 <br>
                   <br>
                   <br>
                    <br>
                    <br>

                <?php

  $sql="select DISTINCT  Id_Catalogo from protocol where Id_Catalogo <> 0 ";		
		$cs=mysql_query($sql,$cn);
$cat=array();
while($resul=mysql_fetch_array($cs)){
					
$cat[]= $resul[0];  
}

$result = mysql_query($sql);
      $cuenta=mysql_num_rows($result);
      $sql2="select Name from extraction_method where lab='$consul2'";
      $result = mysql_query($sql2);
      $cuenta=mysql_num_rows($result);
 for($i=0;$i<$cuenta;$i++){
 

 
 $sql2="select Name from extraction_method where Extraction_Method_ID='$cat[$i]' and lab='$consul2'";

$pe1 = mysql_query($sql2);

$rs_per = mysql_fetch_assoc($pe1);

 $NameCat=$rs_per['Name'];
 
echo "Categoria: ".$NameCat."<br>";

$sql3="select Description,Protocol from protocol where type='ExtraMe' and Id_Catalogo='$cat[$i]' and lab='$consul2'";

$per3 = mysql_query($sql3);
	$num_rs_per = mysql_num_rows($per3);
	if ($num_rs_per==0){
		echo "No records <br>";
		
	}
	
        
         while($val=mysql_fetch_array($per3)){
			  $var=$val[0];
			$var1=$val[1];
                             echo "<li><a href='$var1'><span>$var</span></a></li>";
                        
                        
                             }
                              
  }
  
 


?>         
       <table border='3' >
 <thead>
<tr>

           <th> <h2>Preservation Method</h2></th>
</tr></thead>
</table>       
            
 <br>
                   <br>
                   <br>
                    <br>
                    <br>
                <?php

  $sql="select DISTINCT  Id_Catalogo from protocol where Id_Catalogo <> 0 ";		
		$cs=mysql_query($sql,$cn);
$cat=array();
while($resul=mysql_fetch_array($cs)){
					
$cat[]= $resul[0];  
}

$result = mysql_query($sql);
      $cuenta=mysql_num_rows($result); 
        $sql2="select Name from preservation_method where lab='$consul2'";
      $result = mysql_query($sql2);
      $cuenta=mysql_num_rows($result);
      
      
 for($i=0;$i<$cuenta;$i++){
 

 
 $sql2="select Name from preservation_method where Preservation_Method_ID='$cat[$i]' and lab='$consul2'";

$pe1 = mysql_query($sql2);

$rs_per = mysql_fetch_assoc($pe1);

 $NameCat=$rs_per['Name'];
 
echo "Categoria: ".$NameCat."<br>";

$sql3="select Description,Protocol from protocol where type='PresMe' and Id_Catalogo='$cat[$i]' and lab='$consul2'";

$per3 = mysql_query($sql3);
	$num_rs_per = mysql_num_rows($per3);
	if ($num_rs_per==0){
		echo "No records<br>";
		
	}
	
        
         while($val=mysql_fetch_array($per3)){
			  $var=$val[0];
			$var1=$val[1];
                             echo "<li><a href='$var1'><span>$var</span></a></li>";
                        
                        
                             }
                              
  }
  
 


?>       
       <table border='3' >
 <thead>
<tr>

           <th>  <h2>Sequencing Method</h2></th>
</tr></thead>
</table>       
            
 <br>
                   <br>
                   <br>
                    <br>
                    <br>           
            

                <?php

  $sql="select DISTINCT  Id_Catalogo from protocol where Id_Catalogo <> 0 ";		
		$cs=mysql_query($sql,$cn);
$cat=array();
while($resul=mysql_fetch_array($cs)){
					
$cat[]= $resul[0];  
}

$result = mysql_query($sql);
      $cuenta=mysql_num_rows($result);   
        $sql2="select Name from sequencing_method where lab='$consul2' ";
      $result = mysql_query($sql2);
      $cuenta=mysql_num_rows($result);
 for($i=0;$i<$cuenta;$i++){
 

 
 $sql2="select Name from sequencing_method where Sequencing_Method_ID='$cat[$i]' and lab='$consul2'";

$pe1 = mysql_query($sql2);

$rs_per = mysql_fetch_assoc($pe1);

 $NameCat=$rs_per['Name'];
 
echo "Categoria: ".$NameCat."<br>";

$sql3="select Description,Protocol from protocol where type='Seq' and Id_Catalogo='$cat[$i]' and lab='$consul2'";

$per3 = mysql_query($sql3);
	$num_rs_per = mysql_num_rows($per3);
	if ($num_rs_per==0){
		echo "No records<br>";
		
	}
	
        
         while($val=mysql_fetch_array($per3)){
			  $var=$val[0];
			$var1=$val[1];
                             echo "<li><a href='$var1'><span>$var</span></a></li>";
                        
                        
                             }
                              
  }
  
 


?>    
                    
                    
                    
                    
                    
                    <table border='3' >
 <thead>
<tr>

           <th>  <h2>Others</h2></th>
</tr></thead>
</table>       
            
 <br>
                   <br>
                   <br>
                    <br>
                    <br>           
            

                <?php


 
echo "Categoria: Other";

$sql3="select Description,Protocol from protocol where type='Other' and Id_Catalogo='0' and lab='$consul2'";

$per3 = mysql_query($sql3);
	$num_rs_per = mysql_num_rows($per3);
	if ($num_rs_per==0){
		echo "No records<br>";
		
	}
	
        
         while($val=mysql_fetch_array($per3)){
			  $var=$val[0];
			$var1=$val[1];
                             echo "<li><a href='$var1'><span>$var</span></a></li>";
                        
                        
                             }
                              
  
  
 


?>    
           
           
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Css -->
        <link href="css/bootstrap.css" rel="stylesheet" media="screen">
        <!-- Javascript -->
        <script src="js/jquery-2.0.2.js"></script>
        <script src="js/upload.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script type="text/javascript">
            function subirArchivos() {
                $("#archivo").upload('subir_archivo.php',
                {
                    nombre_archivo: $("#nombre_archivo").val(),
                    id: $("#id").val(),
                     type: $("#type").val(),
                      lab: $("#lab").val()
                },
                function(respuesta) {
                    //Subida finalizada.
                    $("#barra_de_progreso").val(0);
                    if (respuesta === 1) {
                        mostrarRespuesta('El archivo ha sido subido correctamente.', true);
                        $("#nombre_archivo, #archivo").val('');
                    } else {
                        mostrarRespuesta('El archivo NO se ha podido subir.', false);
                    }
                    mostrarArchivos();
                }, function(progreso, valor) {
                    //Barra de progreso.
                    $("#barra_de_progreso").val(valor);
                });
            }
            function eliminarArchivos(archivo,id) {
                $.ajax({
                    url: 'eliminar_archivo.php',
                    type: 'POST',
                    timeout: 10000,
                    data: {archivo: archivo,id:id},
                    error: function() {
                        mostrarRespuesta('Error al intentar eliminar el archivo.', false);
                    },
                    success: function(respuesta) {
                        if (respuesta == 1) {
                            mostrarRespuesta('El archivo ha sido eliminado.', true);
                        } else {
                            mostrarRespuesta('Error al intentar eliminar el archivo.', false);                            
                        }
                        mostrarArchivos();
                    }
                });
            }
            function mostrarArchivos() {
                $.ajax({
                    url: 'mostrar_archivos.php',
                    dataType: 'JSON',
                    success: function(respuesta) {
                        if (respuesta) {
                            var html = '';
                            for (var i = 0; i < respuesta.length; i++) {
                                if (respuesta[i] != undefined) {
                                    html += '<div class="row"> <span class="col-lg-2"> ' + respuesta[i] + ' </span>  <div class="col-lg-2"> <a class="eliminar_archivo btn btn-danger" href="javascript:void(0);"> Delete </a> </div> </div> <hr />';
                                }
                            }
                        
                            $("#archivos_subidos").html(html);
                        }
                    }
                });
            }
            function mostrarRespuesta(mensaje, ok){
                $("#respuesta").removeClass('alert-success').removeClass('alert-danger').html(mensaje);
                if(ok){
                    $("#respuesta").addClass('alert-success');
                }else{
                    $("#respuesta").addClass('alert-danger');
                }
            }
            $(document).ready(function() {
                mostrarArchivos();
                $("#boton_subir").on('click', function() {
                    subirArchivos();
                });
                $("#archivos_subidos").on('click', '.eliminar_archivo', function() {
                    var archivo = $(this).parents('.row').eq(0).find('span').text();
                    var  id="9";
                    archivo = $.trim(archivo);
 
                    eliminarArchivos(archivo,id);
                });
            });
            
            
            
         
        </script>
        

<br>
<br>
<h3> Load Protocol </h3> 
<br>

<a href="Protocol_AnyType.php" target="_self"> <input type="button" name="boton" value="Load Other type Protocol" /> </a>
 <div id="respuesta" class="alert"></div>

   
<!--<div class="container">
<div id="respuesta" class="alert"></div>
<form action="javascript:void(0);">
                <div class="row">
                    <div class="col-lg-2"> 
                        <label> Name: </label> 
                    </div>
                    <div class="col-lg-2">
                        <input type="text" name="nombre_archivo" id="nombre_archivo" />
                        <input type="hidden" name="id"  id="id" value="0" />
                        <input type="hidden" name="type" id="type" value="Other" />
                        <input type="hidden" name="lab" id="lab" value="<?php echo $consul2?>" />
                    </div>
                    <div class="col-lg-2">
                        <input type="file" name="archivo" id="archivo" />
                    </div>                    
                </div>
               <hr />
                <div class="row">
                    <div class="col-lg-2">
                        <input type="submit" id="boton_subir" value="Subir" class="btn btn-success" />
                    </div>
                    <div class="col-lg-4">
                        <progress id="barra_de_progreso" value="0" max="100"></progress>
                    </div>
                </div>
            </form>
            <hr />
            <div id="archivos_subidos"></div>
                </div>-->
            

    </body>
</html>