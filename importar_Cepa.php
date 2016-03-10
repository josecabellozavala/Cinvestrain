<?php 
include("bdConnection.php");
?>

<style>
    .datagrid table {
        text-align: left; width: 50%; 
        position: absolute;
        left:30%;
    } .datagrid 
    {
        font: normal 18px/150% Arial, Helvetica, sans-serif; background: #fff; overflow: hidden;
    }
    .datagrid table td, .datagrid table th { padding: 6px 8px; }
    .datagrid table thead th {background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #009EED), color-stop(1, #0093DB) );
                             background:-moz-linear-gradient( center top, #009EED 5%, #0093DB 50% );
                             filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#009EED', endColorstr='#0093DB');
                             background-color:#009EED; color:#FFFFFF; font-size: 13px; font-weight: bold; border-left: 1px solid #0070A8; } 
    .datagrid table thead th:first-child { border: none; }
    .datagrid table tbody td { color: #00496B; border-left: 1px solid #E2EFF5;font-size: 12px;border-bottom: 1px solid #E1EEF4;font-weight: normal; }.datagrid table tbody .alt td { background: #E1EEF4; color: #00496B; }.datagrid table tbody td:first-child { border-left: none; }.datagrid table tbody tr:last-child td { border-bottom: none; }.datagrid table tfoot td div { border-top: 1px solid #006699;background: #E1EEF4;} .datagrid table tfoot td { padding: 0; font-size: 12px } .datagrid table tfoot td div{ padding: 2px; }
.BotonExport{
  position: absolute;
  left: 45%;
  top:50%;
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
<script>
    function comprueba(form){
        
        if(form.records.value=="" )
        {
            alert("You must insert the records");
        }
        if(form.excel.value=="" )
        {
            alert("You must select a file");
        }
        else{
            form.submit();
        }
        
    }
    </script>
    <?php 
   
include("menu_prin.php");

    ?>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>:Import Strain:</title>
</head>

<body>
    <!-- FORMULARIO PARA SOICITAR LA CARGA DEL EXCEL -->
    <br>
    <br>
    <br>
    <br>
     <br>
    <br>
   <center> <h3> Select file Strain to import:</h3></center>
    
    <form name="importa" method="post" action="" enctype="multipart/form-data" >
       <center>
           <div class="datagrid">
               <table>
                            <thead>
    <tr><th></th></tr>
</thead>
         <tbody>
             <tr>
        <td>Number of Records:
        <input type="text" name="records" id="records" ></td>
        </tr>
        
          <tr class="alt">
       <td>  Excel File :
     <input type="file" name="excel" /></td>
        </tr>
        <tr>
            
        <input type='button' name='enviar' class="BotonExport"  value="Import" onclick="comprueba(importa)"  />
        <input type="hidden" value="upload" name="action"  id="action" />
        </tr>
        </TBODY>
        
        </table>
        </div>
           </center>
    </form>
    <!-- CARGA LA MISMA PAGINA MANDANDO LA VARIABLE upload -->
    
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
      <br>
    <br>
    <?php
    extract($_POST);
    if(isset($_POST["action"])){
        
        
        
        
    $action=$_POST["action"];
    if ($action == "upload") {
        //cargamos el archivo al servidor con el mismo nombre
        //solo le agregue el sufijo bak_ 
        $records=$_POST["records"];
        
        $dos=2;
        $dos=(int)$dos;
        $totalRe=$records+$dos;
        $archivo = $_FILES['excel']['name'];
       
        $tipo = $_FILES['excel']['type'];
        $destino = "bak_" . $archivo;
        if (copy($_FILES['excel']['tmp_name'], $destino)){
            echo "File loaded successfully";
            echo "<br>";
        }
        else{
            echo "Error to load file";
        }
        if (file_exists("bak_" . $archivo)) {
            /** Clases necesarias */
            require_once('Classes/PHPExcel.php');
            require_once('Classes/PHPExcel/Reader/Excel2007.php');
            // Cargando la hoja de cálculo
            $objReader = new PHPExcel_Reader_Excel2007();
            $objPHPExcel = $objReader->load("bak_" . $archivo);
             $objCepa = $objReader->load("bak_" . $archivo);
            $objFecha = new PHPExcel_Shared_Date();
            // Asignar hoja de excel activa
            $objPHPExcel->setActiveSheetIndex(3);
              
            //conectamos con la base de datos 
            
            // Llenamos el arreglo con los datos  del archivo xlsx
            $Id_laboratorio="";
            $Id_user="";
            $Id_storage="";
            for ($i = 3; $i <= $totalRe; $i++) {
                
               $_DATOS_EXCEL[$i]['Alias'] = $objPHPExcel->getActiveSheet()->getCell('B' . $i)->getCalculatedValue();
                $_DATOS_EXCEL[$i]['Isolated_by'] = $objPHPExcel->getActiveSheet()->getCell('C' . $i)->getCalculatedValue();
                  $_DATOS_EXCEL[$i]['Date_of_Isolation'] = $objPHPExcel->getActiveSheet()->getCell('D' . $i)->getCalculatedValue();
                   $_DATOS_EXCEL[$i]['id_storage'] = $objPHPExcel->getActiveSheet()->getCell('E' . $i)->getCalculatedValue();
                $_DATOS_EXCEL[$i]['Origin'] = $objPHPExcel->getActiveSheet()->getCell('F' . $i)->getCalculatedValue();
            
                       $_DATOS_EXCEL[$i]['item'] = $objPHPExcel->getActiveSheet()->getCell('G' . $i)->getCalculatedValue();
                $_DATOS_EXCEL[$i]['level'] = $objPHPExcel->getActiveSheet()->getCell('H' . $i)->getCalculatedValue();
                  $_DATOS_EXCEL[$i]['Additional_Comments'] = $objPHPExcel->getActiveSheet()->getCell('I' . $i)->getCalculatedValue();
                $_DATOS_EXCEL[$i]['subio'] = $objPHPExcel->getActiveSheet()->getCell('K' . $i)->getCalculatedValue();
                 $_DATOS_EXCEL[$i]['lab'] = $objPHPExcel->getActiveSheet()->getCell('J' . $i)->getCalculatedValue();
                
                 
                 $cell = $objPHPExcel->getActiveSheet()->getCell('D' . $i);
$InvDate= $cell->getValue();
if(PHPExcel_Shared_Date::isDateTime($cell)) {
     $InvDate = date($format = "Y-m-d", PHPExcel_Shared_Date::ExcelToPHP($InvDate)); 
}

             
             $_DATOS_EXCEL[$i]['Date_of_Isolation']=$InvDate;
                     
                     
                 $bus= $_DATOS_EXCEL[$i]['lab'] ;
                          $busLab=utf8_decode($bus);
                 
                          $traducelab="Select id_lab from lab where Name='$busLab'";
                  $cs1=mysql_query($traducelab,$cn);
                while($resula=mysql_fetch_array($cs1)){
			$Id_laboratorio=$resula[0];
			}
                        
            $_DATOS_EXCEL[$i]['lab']=$Id_laboratorio;
            
            
            $colle=   $_DATOS_EXCEL[$i]['Isolated_by'];
            $busCollec=utf8_decode($colle);
                $traduceuser="Select User_ID from user where Name='$busCollec'and lab='$Id_laboratorio'";
                  $cs2=mysql_query($traduceuser,$cn);
                while($resula1=mysql_fetch_array($cs2)){
			$Id_user=$resula1[0];
			}
                        
            $_DATOS_EXCEL[$i]['Isolated_by']=$Id_user;
                
            
            $storage= $_DATOS_EXCEL[$i]['id_storage'];
                         
            $sto=utf8_decode($storage);
                $traducestorage="Select Storage_ID from storage where Name='$sto' and lab='$Id_laboratorio'";
             
                $cs3=mysql_query($traducestorage,$cn);
                while($resula2=mysql_fetch_array($cs3)){
			$Id_storage=$resula2[0];
			}
                        echo $Id_storage;
            $_DATOS_EXCEL[$i]['id_storage']=$Id_storage;
            
             $Id_laboratorio="";
            $Id_user="";
            $Id_storage="";
            
            
            
     
            
            }
            // Asignar hoja de excel activa
          
            
           
        }
        //si por algo no cargo el archivo bak_ 
        else {
            echo "You need to import the file";
        }
         
        $errores = 0;
        //recorremos el arreglo multidimensional 
        //para ir recuperando los datos obtenidos
        //del excel e ir insertandolos en la BD
        $j=3;
        foreach ($_DATOS_EXCEL as $campo => $valor) {
            
        
           
            
            
            $sql = "INSERT INTO organism_information VALUES (NULL,'";
            foreach ($valor as $campo2 => $valor2) {
                $campo2 == "lab" ? $sql.= $valor2 . "');" : $sql.= $valor2 . "','";
            }
            $j=$j+1;
            echo $sql;
            $result = mysql_query($sql);
            
            if (!$result) {
                echo "Error al insertar registro " . $campo;
                $errores+=1;
            }
        }
       
        
        
       
        $r=$campo-2;
        echo "<strong><center>File imported successfully, $r records and $errores errors</center></strong>";
        //una vez terminado el proceso borramos el archivo que esta en el servidor el bak_
        unlink($destino);
    }
    }
    ?>
</body>
</html>