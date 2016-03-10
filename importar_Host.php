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
  top:60%;
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
        
        if(form.recordsH.value=="" || form.recordsP.value=="" || form.recordsF.value=="" || form.recordsS.value=="")
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
    <title>:Import Soil type:</title>
</head>

<body>
    <!-- FORMULARIO PARA SOICITAR LA CARGA DEL EXCEL -->
    <br>
    <br>
    <br>
    <br>
     <br>
    <br>
   <center> <h3> Select file Origin to import:</h3></center>
    
    <form name="importa" method="post" action="" enctype="multipart/form-data" >
       <center>
           <div class="datagrid">
               <table>
                            <thead>
    <tr><th></th></tr>
</thead>
         <tbody>
             <tr>
        <td>Number of Records(Host):
        <input type="text" name="recordsH" id="recordsH" ></td>
        </tr>
        <tr>
        <td>Number of Records(Plant):
        <input type="text" name="recordsP" id="recordsP" ></td>
        </tr>
        <tr>
        <td>Number of Records(Free Living):
        <input type="text" name="recordsF" id="recordsF" ></td>
        </tr>
         <tr>
        <td>Number of Records(Strain):
        <input type="text" name="recordsS" id="recordsS" ></td>
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
        $recordsH=$_POST["recordsH"];
        $recordsP=$_POST["recordsP"];
        $recordsF=$_POST["recordsF"];
        $recordsS=$_POST["recordsS"];
        $dos=2;
        $dos=(int)$dos;
        $totalReHost=$recordsH+$dos;
        $totalRePlant=$recordsP+$dos;
        $totalReFree=$recordsF+$dos;
        $totalReStrain=$recordsS+$dos;
        
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
            $objPlant = $objReader->load("bak_" . $archivo);
             $objFree = $objReader->load("bak_" . $archivo);
            $objFecha = new PHPExcel_Shared_Date();
            // Asignar hoja de excel activa
            $objPHPExcel->setActiveSheetIndex(0);
              
           
            // Llenamos el arreglo con los datos  del archivo xlsx
            $Id_laboratorio="";
            $Id_user="";
            $Id_storage="";
            for ($i = 3; $i <= $totalReHost; $i++) {
                
                $_DATOS_EXCEL[$i]['Name'] = $objPHPExcel->getActiveSheet()->getCell('B' . $i)->getCalculatedValue();
             $_DATOS_EXCEL[$i]['Date_of_collection'] = $objPHPExcel->getActiveSheet()->getCell('C' . $i)->getCalculatedValue();
                  $_DATOS_EXCEL[$i]['Collected_by'] = $objPHPExcel->getActiveSheet()->getCell('D' . $i)->getCalculatedValue();
                  $_DATOS_EXCEL[$i]['Site_alias'] = $objPHPExcel->getActiveSheet()->getCell('E' . $i)->getCalculatedValue();
                $_DATOS_EXCEL[$i]['id_storage'] = $objPHPExcel->getActiveSheet()->getCell('F' . $i)->getCalculatedValue();
                  $_DATOS_EXCEL[$i]['Latitude'] = $objPHPExcel->getActiveSheet()->getCell('G' . $i)->getCalculatedValue();
                  $_DATOS_EXCEL[$i]['Longitude'] = $objPHPExcel->getActiveSheet()->getCell('H' . $i)->getCalculatedValue();
                $_DATOS_EXCEL[$i]['Altitude'] = $objPHPExcel->getActiveSheet()->getCell('I' . $i)->getCalculatedValue();
                  $_DATOS_EXCEL[$i]['Tissues_collected'] = $objPHPExcel->getActiveSheet()->getCell('J' . $i)->getCalculatedValue();
                  $_DATOS_EXCEL[$i]['Physiological_state'] = $objPHPExcel->getActiveSheet()->getCell('K' . $i)->getCalculatedValue();
                $_DATOS_EXCEL[$i]['Additional_comments'] = $objPHPExcel->getActiveSheet()->getCell('L' . $i)->getCalculatedValue();  
                 $_DATOS_EXCEL[$i]['subio'] = $objPHPExcel->getActiveSheet()->getCell('N' . $i)->getCalculatedValue();
                $_DATOS_EXCEL[$i]['lab'] = $objPHPExcel->getActiveSheet()->getCell('M' . $i)->getCalculatedValue();
            
                 $cell = $objPHPExcel->getActiveSheet()->getCell('C' . $i);
$InvDate= $cell->getValue();
if(PHPExcel_Shared_Date::isDateTime($cell)) {
     $InvDate = date($format = "Y-m-d", PHPExcel_Shared_Date::ExcelToPHP($InvDate)); 
}

           
             $_DATOS_EXCEL[$i]['Date_of_collection']=$InvDate;
                     
                     
                 $bus= $_DATOS_EXCEL[$i]['lab'] ;
                          $busLab=utf8_decode($bus);
                 
                          $traducelab="Select id_lab from lab where Name='$busLab'";
                  $cs1=mysql_query($traducelab,$cn);
                while($resula=mysql_fetch_array($cs1)){
			$Id_laboratorio=$resula[0];
			}
                        
            $_DATOS_EXCEL[$i]['lab']=$Id_laboratorio;
            
            
            $colle=   $_DATOS_EXCEL[$i]['Collected_by'];
            $busCollec=utf8_decode($colle);
                $traduceuser="Select User_ID from user where Name='$busCollec'and lab='$Id_laboratorio'";
                  $cs2=mysql_query($traduceuser,$cn);
                while($resula1=mysql_fetch_array($cs2)){
			$Id_user=$resula1[0];
			}
                        
            $_DATOS_EXCEL[$i]['Collected_by']=$Id_user;
                
            
            $storage= $_DATOS_EXCEL[$i]['id_storage'];
                         
            $sto=utf8_decode($storage);
                $traducestorage="Select Storage_ID from storage where Name='$sto' and lab='$Id_laboratorio'";
             
                $cs3=mysql_query($traducestorage,$cn);
                while($resula2=mysql_fetch_array($cs3)){
			$Id_storage=$resula2[0];
			}
                        
            $_DATOS_EXCEL[$i]['id_storage']=$Id_storage;
            
             $Id_laboratorio="";
            $Id_user="";
            $Id_storage="";
            
            
            
           
            
            }
            
            //planta
             $objPlant->setActiveSheetIndex(2);
            $Id_laboratorio="";
            $Id_user="";
            $Id_storage="";
            $Id_soil="";
            for ($i = 3; $i <= $totalRePlant; $i++) {
                
                $_DATOS_EXCEL1[$i]['Org_ID'] = $objPlant->getActiveSheet()->getCell('W' . $i)->getCalculatedValue();
             $_DATOS_EXCEL1[$i]['Common_Name'] = $objPlant->getActiveSheet()->getCell('B' . $i)->getCalculatedValue();
                  $_DATOS_EXCEL1[$i]['Scientific_Name'] = $objPlant->getActiveSheet()->getCell('C' . $i)->getCalculatedValue();
                  $_DATOS_EXCEL1[$i]['Gender'] = $objPlant->getActiveSheet()->getCell('D' . $i)->getCalculatedValue();
                $_DATOS_EXCEL1[$i]['Species'] = $objPlant->getActiveSheet()->getCell('E' . $i)->getCalculatedValue();
                  $_DATOS_EXCEL1[$i]['Date_of_collection'] = $objPlant->getActiveSheet()->getCell('F' . $i)->getCalculatedValue();
                  $_DATOS_EXCEL1[$i]['Collected_by'] = $objPlant->getActiveSheet()->getCell('G' . $i)->getCalculatedValue();
                $_DATOS_EXCEL1[$i]['Site_Alias'] = $objPlant->getActiveSheet()->getCell('H' . $i)->getCalculatedValue();
                  $_DATOS_EXCEL1[$i]['Site_Directions'] = $objPlant->getActiveSheet()->getCell('I' . $i)->getCalculatedValue();
                  $_DATOS_EXCEL1[$i]['Longitud'] = $objPlant->getActiveSheet()->getCell('J' . $i)->getCalculatedValue();
                $_DATOS_EXCEL1[$i]['Latitud'] = $objPlant->getActiveSheet()->getCell('K' . $i)->getCalculatedValue();  
                 $_DATOS_EXCEL1[$i]['Altitude'] = $objPlant->getActiveSheet()->getCell('L' . $i)->getCalculatedValue();
                $_DATOS_EXCEL1[$i]['Tissues'] = $objPlant->getActiveSheet()->getCell('M' . $i)->getCalculatedValue();
            $_DATOS_EXCEL1[$i]['Heigth'] = $objPlant->getActiveSheet()->getCell('N' . $i)->getCalculatedValue();
                  $_DATOS_EXCEL1[$i]['Width'] = $objPlant->getActiveSheet()->getCell('O' . $i)->getCalculatedValue();
                  $_DATOS_EXCEL1[$i]['Physiological_state'] = $objPlant->getActiveSheet()->getCell('P' . $i)->getCalculatedValue();
                $_DATOS_EXCEL1[$i]['Neighboring_plants'] = $objPlant->getActiveSheet()->getCell('Q' . $i)->getCalculatedValue();  
                 $_DATOS_EXCEL1[$i]['Id_soil'] = $objPlant->getActiveSheet()->getCell('R' . $i)->getCalculatedValue();
                $_DATOS_EXCEL1[$i]['id_storage'] = $objPlant->getActiveSheet()->getCell('S' . $i)->getCalculatedValue();
                $_DATOS_EXCEL1[$i]['Comments'] = $objPlant->getActiveSheet()->getCell('T' . $i)->getCalculatedValue();
                $_DATOS_EXCEL1[$i]['Photo_ID'] = $objPlant->getActiveSheet()->getCell('X' . $i)->getCalculatedValue();  
                 $_DATOS_EXCEL1[$i]['subio'] = $objPlant->getActiveSheet()->getCell('Y' . $i)->getCalculatedValue();
                $_DATOS_EXCEL1[$i]['lab'] = $objPlant->getActiveSheet()->getCell('U' . $i)->getCalculatedValue();
            
                 $cell = $objPlant->getActiveSheet()->getCell('F' . $i);
$InvDate= $cell->getValue();
if(PHPExcel_Shared_Date::isDateTime($cell)) {
     $InvDate = date($format = "Y-m-d", PHPExcel_Shared_Date::ExcelToPHP($InvDate)); 
}

           
             $_DATOS_EXCEL1[$i]['Date_of_collection']=$InvDate;
                     
                     
                 $bus= $_DATOS_EXCEL1[$i]['lab'] ;
                          $busLab=utf8_decode($bus);
                 
                          $traducelab="Select id_lab from lab where Name='$busLab'";
                  $cs1=mysql_query($traducelab,$cn);
                while($resula=mysql_fetch_array($cs1)){
			$Id_laboratorio=$resula[0];
			}
                        
            $_DATOS_EXCEL1[$i]['lab']=$Id_laboratorio;
            
            
            $colle=   $_DATOS_EXCEL1[$i]['Collected_by'];
            $busCollec=utf8_decode($colle);
                $traduceuser="Select User_ID from user where Name='$busCollec'and lab='$Id_laboratorio'";
                  $cs2=mysql_query($traduceuser,$cn);
                while($resula1=mysql_fetch_array($cs2)){
			$Id_user=$resula1[0];
			}
                        
            $_DATOS_EXCEL1[$i]['Collected_by']=$Id_user;
                
            
            
            $storage= $_DATOS_EXCEL1[$i]['id_storage'];
                         
            $sto=utf8_decode($storage);
                $traducestorage="Select Storage_ID from storage where Name='$sto' and lab='$Id_laboratorio'";
             
                $cs3=mysql_query($traducestorage,$cn);
                while($resula2=mysql_fetch_array($cs3)){
			$Id_storage=$resula2[0];
			}
                        
            $_DATOS_EXCEL[$i]['id_storage']=$Id_storage;
            
              $soil= $_DATOS_EXCEL1[$i]['Id_soil'];
                         
            $so=utf8_decode($soil);
                $traducesoil="Select Soil_type_ID from soil_type where Alias='$so' and lab='$Id_laboratorio'";
             
                $cs4=mysql_query($traducesoil,$cn);
                while($resula3=mysql_fetch_array($cs4)){
			$Id_soil=$resula3[0];
			}
                        
            $_DATOS_EXCEL[$i]['Id_soil']=$Id_soil;
            
             $Id_laboratorio="";
            $Id_user="";
            $Id_storage="";
              $Id_soil="";
            
            
           
            
            }
            // Asignar hoja de excel activa Free
            $objFree->setActiveSheetIndex(2);
          $Id_laboratorio="";
            $Id_user="";
            $Id_storage="";
            for ($i = 3; $i <= $totalReFree; $i++) {
                
                $_DATOS_EXCEL2[$i]['Name'] = $objFree->getActiveSheet()->getCell('B' . $i)->getCalculatedValue();
             $_DATOS_EXCEL2[$i]['Date_of_collection'] = $objFree->getActiveSheet()->getCell('C' . $i)->getCalculatedValue();
                  $_DATOS_EXCEL2[$i]['Collected_by'] = $objFree->getActiveSheet()->getCell('D' . $i)->getCalculatedValue();
                  $_DATOS_EXCEL2[$i]['Site_alias'] = $objFree->getActiveSheet()->getCell('E' . $i)->getCalculatedValue();
                $_DATOS_EXCEL2[$i]['id_storage'] = $objFree->getActiveSheet()->getCell('F' . $i)->getCalculatedValue();
                  $_DATOS_EXCEL2[$i]['Latitude'] = $objFree->getActiveSheet()->getCell('G' . $i)->getCalculatedValue();
                  $_DATOS_EXCEL2[$i]['Longitude'] = $objFree->getActiveSheet()->getCell('H' . $i)->getCalculatedValue();
                $_DATOS_EXCEL2[$i]['Altitude'] = $objFree->getActiveSheet()->getCell('I' . $i)->getCalculatedValue();
                  $_DATOS_EXCEL2[$i]['Type_of_sample'] = $objFree->getActiveSheet()->getCell('J' . $i)->getCalculatedValue();
                  $_DATOS_EXCEL2[$i]['Characteristics_of_sample'] = $objFree->getActiveSheet()->getCell('K' . $i)->getCalculatedValue();
                $_DATOS_EXCEL2[$i]['Additional_comments'] = $objFree->getActiveSheet()->getCell('L' . $i)->getCalculatedValue();  
                 $_DATOS_EXCEL2[$i]['subio'] = $objFree->getActiveSheet()->getCell('N' . $i)->getCalculatedValue();
                $_DATOS_EXCEL2[$i]['lab'] = $objFree->getActiveSheet()->getCell('M' . $i)->getCalculatedValue();
            
                 $cell = $objFree->getActiveSheet()->getCell('C' . $i);
$InvDate= $cell->getValue();
if(PHPExcel_Shared_Date::isDateTime($cell)) {
     $InvDate = date($format = "Y-m-d", PHPExcel_Shared_Date::ExcelToPHP($InvDate)); 
}

           
             $_DATOS_EXCEL2[$i]['Date_of_collection']=$InvDate;
                     
                     
                 $bus= $_DATOS_EXCEL2[$i]['lab'] ;
                          $busLab=utf8_decode($bus);
                 
                          $traducelab="Select id_lab from lab where Name='$busLab'";
                  $cs1=mysql_query($traducelab,$cn);
                while($resula=mysql_fetch_array($cs1)){
			$Id_laboratorio=$resula[0];
			}
                        
            $_DATOS_EXCEL2[$i]['lab']=$Id_laboratorio;
            
            
            $colle=   $_DATOS_EXCEL2[$i]['Collected_by'];
            $busCollec=utf8_decode($colle);
                $traduceuser="Select User_ID from user where Name='$busCollec'and lab='$Id_laboratorio'";
                  $cs2=mysql_query($traduceuser,$cn);
                while($resula1=mysql_fetch_array($cs2)){
			$Id_user=$resula1[0];
			}
                        
            $_DATOS_EXCEL2[$i]['Collected_by']=$Id_user;
                
            
            $storage= $_DATOS_EXCEL2[$i]['id_storage'];
                         
            $sto=utf8_decode($storage);
                $traducestorage="Select Storage_ID from storage where Name='$sto' and lab='$Id_laboratorio'";
             
                $cs3=mysql_query($traducestorage,$cn);
                while($resula2=mysql_fetch_array($cs3)){
			$Id_storage=$resula2[0];
			}
                        
            $_DATOS_EXCEL2[$i]['id_storage']=$Id_storage;
            
             $Id_laboratorio="";
            $Id_user="";
            $Id_storage="";
            
            
            
           
            
            }
            
           
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
            
        
           
            
            
            $sql = "INSERT INTO host_info VALUES (NULL,'";
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
       
          foreach ($_DATOS_EXCEL1 as $campo => $valor) {
           
            
            $sql = "INSERT INTO plant_info VALUES (NULL,'";
            foreach ($valor as $campo2 => $valor2) {
                $campo2 == "lab" ? $sql.= $valor2 . "');" : $sql.= $valor2 . "','";
            }
            
            echo $sql;
            $result = mysql_query($sql);
            
            if (!$result) {
                echo "Error al insertar registro " . $campo;
                $errores+=1;
            }
        }
            foreach ($_DATOS_EXCEL2 as $campo => $valor) {
           
            
            $sql = "INSERT INTO free_living VALUES (NULL,'";
            foreach ($valor as $campo2 => $valor2) {
                $campo2 == "lab" ? $sql.= $valor2 . "');" : $sql.= $valor2 . "','";
            }
            
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