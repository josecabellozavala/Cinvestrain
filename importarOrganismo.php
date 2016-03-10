<?php 
include("bdConnection.php");
?>



<script>
function checkIt(evt) {
    evt = (evt) ? evt : window.event
    var charCode = (evt.which) ? evt.which : evt.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        status = "This field accepts numbers only."
        return false
    }
    status = ""
    return true
}

   var cont=1;
    var continuar="";
</script>
	<link rel="stylesheet" href="themes/alertify.core.css" />
	<link rel="stylesheet" href="themes/alertify.default.css" id="toggleCSS" />
        <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
	<script src="lib/alertify.min.js"></script>
<style>
		.alertify-log-custom {
			background: blue;
		}
	</style>
<style>
    .datagrid table {
        text-align: left; width: 50%; 
        position: absolute;
        left:15%;
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
  left: 70%;
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
//      function reset () {
//			$("#toggleCSS").attr("href", "themes/alertify.default.css");
//			alertify.set({
//				labels : {
//					ok     : "OK",
//					cancel : "Cancel"
//				},
//				delay : 5000,
//				buttonReverse : false,
//				buttonFocus   : "ok"
//			});
//		}
    var org;
    function comprueba(form){
        
        if(form.recordsOrg.value==""  || form.recordsMa.value=="" || form.recordsMi.value==""
                || form.recordsGro.value=="" || form.recordsPre.value=="" || form.recordsGen.value=="" || form.recordsMe.value==""
                || form.recordsBio.value=="" || form.recordsdna.value=="")
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
    function mi_alerta(org){
confirmar=confirm("The organism is "+org);
if (confirmar){
alert("Seleccionaste aceptar")
var entra="si";
return entra;
}
else
{
    
alert("Seleccionaste cancelar")
entra="no";
return entra;
}
}
    </script>
    <?php 
   
include("menu_prin.php");
    ?>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>:Import Organism Information:</title>
</head>

<body>
    <!-- FORMULARIO PARA SOICITAR LA CARGA DEL EXCEL -->
    <br>
    <br>
    <br>
    <br>
     <br>
    <br>
   <center> <h3> Select file organism information to import:</h3></center>
    
    <form name="importa" method="post" action="" enctype="multipart/form-data" >
       <center>
           <div class="datagrid">
               <table>
                            <thead>
    <tr><th></th></tr>
</thead>
         <tbody>
             <tr>
        <td>Number of Records Organism:
        <input type="text" name="recordsOrg" id="recordsOrg"  onKeyPress="return checkIt(event)"></td>
        </tr>
          <tr>
        <td>Number of Records Macroscopic Morphology:
        <input type="text" name="recordsMa" id="recordsMa" onKeyPress="return checkIt(event)"></td>
        </tr>
          <tr>
        <td>Number of Records Microscopic Morphology:
        <input type="text" name="recordsMi" id="recordsMi" onKeyPress="return checkIt(event)"></td>
        </tr>
          <tr>
        <td>Number of Records Growth Characteristic:
        <input type="text" name="recordsGro" id="recordsGro" onKeyPress="return checkIt(event)"></td>
        </tr>
          <tr>
        <td>Number of Records Preservation of strains:
        <input type="text" name="recordsPre" id="recordsPre" onKeyPress="return checkIt(event)" ></td>
        </tr>
          <tr>
        <td>Number of Records DNA:
        <input type="text" name="recordsdna" id="recordsdna" onKeyPress="return checkIt(event)"></td>
        </tr>
          <tr>
        <td>Number of Records Genetic Data:
        <input type="text" name="recordsGen" id="recordsGen" onKeyPress="return checkIt(event)" ></td>
        </tr>
         <tr>
        <td>Number of Records Metabolic Data:
        <input type="text" name="recordsMe" id="recordsMe" onKeyPress="return checkIt(event)"></td>
        </tr>
          <tr>
        <td>Number of Records Bioassays Data:
        <input type="text" name="recordsBio" id="recordsBio" onKeyPress="return checkIt(event)"></td>
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
   <br>
    <br>
    <?php
    extract($_POST);
    if(isset($_POST["action"])){
        
        
        
        
    $action=$_POST["action"];
    if ($action == "upload") {
        //cargamos el archivo al servidor con el mismo nombre
        //solo le agregue el sufijo bak_ 
        $records=$_POST["recordsOrg"];
         $records1=$_POST["recordsMa"];
          $records2=$_POST["recordsMi"];
           $records3=$_POST["recordsGro"];
            $records4=$_POST["recordsPre"];
             $records5=$_POST["recordsdna"];
              $records6=$_POST["recordsGen"];
                 $records7=$_POST["recordsMe"];
              $records8=$_POST["recordsBio"];
        $dos=2;
        $dos=(int)$dos;
        $totalRe=$records+$dos;
        $totalRe1=$records1+$dos;
         $totalRe2=$records2+$dos;
          $totalRe3=$records3+$dos;
           $totalRe4=$records4+$dos;
            $totalRe5=$records5+$dos;
             $totalRe6=$records6+$dos;
              $totalRe7=$records7+$dos;
              $totalRe8=$records8+$dos;
        $archivo = $_FILES['excel']['name'];
       
        $tipo = $_FILES['excel']['type'];
        $destino = "bak_" . $archivo;
        
        if (copy($_FILES['excel']['tmp_name'], $destino)){
            echo "File loaded successfully";
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
            $objMacros = $objReader->load("bak_" . $archivo);
             $objMicros = $objReader->load("bak_" . $archivo);
               $objGrow= $objReader->load("bak_" . $archivo);
                   $objPres = $objReader->load("bak_" . $archivo);
            $objDna= $objReader->load("bak_" . $archivo);
             $objGenetic = $objReader->load("bak_" . $archivo);
               $objMetabolic= $objReader->load("bak_" . $archivo);
                $objBioassay= $objReader->load("bak_" . $archivo);
               
            $objFecha = new PHPExcel_Shared_Date();
            // Asignar hoja de excel activa
            $objPHPExcel->setActiveSheetIndex(0);
            //conectamos con la base de datos 
            
            // Llenamos el arreglo con los datos  del archivo xlsx
            for ($i = 3; $i <= $totalRe; $i++) {
                $_DATOS_EXCEL[$i]['Alias'] = $objPHPExcel->getActiveSheet()->getCell('B' . $i)->getCalculatedValue();
                $_DATOS_EXCEL[$i]['Isolated_by'] = $objPHPExcel->getActiveSheet()->getCell('C' . $i)->getCalculatedValue();
                  $_DATOS_EXCEL[$i]['Date_of_Isolation'] = $objPHPExcel->getActiveSheet()->getCell('D' . $i)->getCalculatedValue();
                $_DATOS_EXCEL[$i]['Origin'] = $objPHPExcel->getActiveSheet()->getCell('E' . $i)->getCalculatedValue();
            
                       $_DATOS_EXCEL[$i]['item'] = $objPHPExcel->getActiveSheet()->getCell('F' . $i)->getCalculatedValue();
                $_DATOS_EXCEL[$i]['level'] = $objPHPExcel->getActiveSheet()->getCell('G' . $i)->getCalculatedValue();
                  $_DATOS_EXCEL[$i]['Additional_Comments'] = $objPHPExcel->getActiveSheet()->getCell('H' . $i)->getCalculatedValue();
                $_DATOS_EXCEL[$i]['subio'] = $objPHPExcel->getActiveSheet()->getCell('I' . $i)->getCalculatedValue();
                 $_DATOS_EXCEL[$i]['lab'] = $objPHPExcel->getActiveSheet()->getCell('J' . $i)->getCalculatedValue();
                
                 
                  $llenar=$_DATOS_EXCEL[$i]['Alias'];
                 $id[$i]=$llenar;
                 
                   $llenar1=$_DATOS_EXCEL[$i]['Isolated_by'];
                 $id1[$i]=$llenar1;
                 
                   $llenar2=$_DATOS_EXCEL[$i]['Date_of_Isolation'];
                 $id2[$i]=$llenar2;
                 
                  $llenar3=$_DATOS_EXCEL[$i]['Origin'];
                 $id3[$i]=$llenar3;
                 
                  $llenar4=$_DATOS_EXCEL[$i]['item'];
                 $id4[$i]=$llenar4;
                 
                   $llenar5=$_DATOS_EXCEL[$i]['level'];
                 $id5[$i]=$llenar5;
                 
                   $llenar6=$_DATOS_EXCEL[$i]['Additional_Comments'];
                 $id6[$i]=$llenar6;
                 
                  $llenar7=$_DATOS_EXCEL[$i]['subio'];
                 $id7[$i]=$llenar7;
                 
                   $llenar8=$_DATOS_EXCEL[$i]['lab'];
                 $id8[$i]=$llenar8;
                
                $name=$_DATOS_EXCEL[$i]['Alias'];
                if($_DATOS_EXCEL[$i]['Alias']=="" ||  $_DATOS_EXCEL[$i]['Origin']=="")
                {
                    echo "<script>alert('Los registros obligatorios deben estar llenos')</script>";
                    exit();
                }
                
                
            }
            
        
            // Asignar hoja de excel activa
            $objMacros->setActiveSheetIndex(1);
             // Llenamos el arreglo con los datos  del archivo xlsx
            for ($i = 3; $i <= $totalRe1; $i++) {
                $_DATOS_EXCEL1[$i]['Org_ID'] = $objMacros->getActiveSheet()->getCell('B' . $i)->getCalculatedValue();
                $_DATOS_EXCEL1[$i]['Medium_ID'] = $objMacros->getActiveSheet()->getCell('C' . $i)->getCalculatedValue();
                  $_DATOS_EXCEL1[$i]['Temperature'] = $objMacros->getActiveSheet()->getCell('D' . $i)->getCalculatedValue();
                $_DATOS_EXCEL1[$i]['Agitation'] = $objMacros->getActiveSheet()->getCell('E' . $i)->getCalculatedValue();
          $_DATOS_EXCEL1[$i]['Age'] = $objMacros->getActiveSheet()->getCell('F' . $i)->getCalculatedValue();
                $_DATOS_EXCEL1[$i]['Size'] = $objMacros->getActiveSheet()->getCell('G' . $i)->getCalculatedValue();
                  $_DATOS_EXCEL1[$i]['Surface'] = $objMacros->getActiveSheet()->getCell('H' . $i)->getCalculatedValue();
                $_DATOS_EXCEL1[$i]['Color'] = $objMacros->getActiveSheet()->getCell('I' . $i)->getCalculatedValue();
                  $_DATOS_EXCEL1[$i]['subio'] = $objMacros->getActiveSheet()->getCell('J' . $i)->getCalculatedValue();
                    $_DATOS_EXCEL1[$i]['lab'] = $objMacros->getActiveSheet()->getCell('K' . $i)->getCalculatedValue();
                }
                
                  $objMicros->setActiveSheetIndex(2);
             // Llenamos el arreglo con los datos  del archivo xlsx
            for ($i = 3; $i <= $totalRe2; $i++) {
                $_DATOS_EXCEL2[$i]['Org_ID'] = $objMicros->getActiveSheet()->getCell('B' . $i)->getCalculatedValue();
                $_DATOS_EXCEL2[$i]['Medium_ID'] = $objMicros->getActiveSheet()->getCell('C' . $i)->getCalculatedValue();
                  $_DATOS_EXCEL2[$i]['Temperature'] = $objMicros->getActiveSheet()->getCell('D' . $i)->getCalculatedValue();
                $_DATOS_EXCEL2[$i]['Agitation'] = $objMicros->getActiveSheet()->getCell('E' . $i)->getCalculatedValue();
          $_DATOS_EXCEL2[$i]['Age'] = $objMicros->getActiveSheet()->getCell('F' . $i)->getCalculatedValue();
                $_DATOS_EXCEL2[$i]['Axis_long'] = $objMicros->getActiveSheet()->getCell('G' . $i)->getCalculatedValue();
                  $_DATOS_EXCEL2[$i]['Axis_short'] = $objMicros->getActiveSheet()->getCell('H' . $i)->getCalculatedValue();
                $_DATOS_EXCEL2[$i]['Motility'] = $objMicros->getActiveSheet()->getCell('I' . $i)->getCalculatedValue();
                  $_DATOS_EXCEL2[$i]['Aggregates'] = $objMicros->getActiveSheet()->getCell('J' . $i)->getCalculatedValue();
                    $_DATOS_EXCEL2[$i]['Biofilm_formation'] = $objMicros->getActiveSheet()->getCell('K' . $i)->getCalculatedValue();
                
                      $_DATOS_EXCEL2[$i]['Gram_test'] = $objMicros->getActiveSheet()->getCell('L' . $i)->getCalculatedValue();
                $_DATOS_EXCEL2[$i]['subio'] = $objMicros->getActiveSheet()->getCell('M' . $i)->getCalculatedValue();
                  $_DATOS_EXCEL2[$i]['lab'] = $objMicros->getActiveSheet()->getCell('N' . $i)->getCalculatedValue();
                    
            }
                
                  $objGrow->setActiveSheetIndex(3);
             // Llenamos el arreglo con los datos  del archivo xlsx
            for ($i = 3; $i <= $totalRe3; $i++) {
                $_DATOS_EXCEL3[$i]['Org_ID'] = $objGrow->getActiveSheet()->getCell('B' . $i)->getCalculatedValue();
                $_DATOS_EXCEL3[$i]['Medium_solid'] = $objGrow->getActiveSheet()->getCell('C' . $i)->getCalculatedValue();
                  $_DATOS_EXCEL3[$i]['Temperature_solid'] = $objGrow->getActiveSheet()->getCell('D' . $i)->getCalculatedValue();
                $_DATOS_EXCEL3[$i]['Time_solid'] = $objGrow->getActiveSheet()->getCell('E' . $i)->getCalculatedValue();
          $_DATOS_EXCEL3[$i]['Medium_liquid'] = $objGrow->getActiveSheet()->getCell('F' . $i)->getCalculatedValue();
                $_DATOS_EXCEL3[$i]['Temperature_liquid'] = $objGrow->getActiveSheet()->getCell('G' . $i)->getCalculatedValue();
                  $_DATOS_EXCEL3[$i]['Agitation_time'] = $objGrow->getActiveSheet()->getCell('H' . $i)->getCalculatedValue();
                $_DATOS_EXCEL3[$i]['Time_liquid'] = $objGrow->getActiveSheet()->getCell('I' . $i)->getCalculatedValue();
                  $_DATOS_EXCEL3[$i]['pH_initial'] = $objGrow->getActiveSheet()->getCell('J' . $i)->getCalculatedValue();
                    $_DATOS_EXCEL3[$i]['pH_final'] = $objGrow->getActiveSheet()->getCell('K' . $i)->getCalculatedValue();
                
                      $_DATOS_EXCEL3[$i]['OD600_initial'] = $objGrow->getActiveSheet()->getCell('L' . $i)->getCalculatedValue();
                $_DATOS_EXCEL3[$i]['OD600_final'] = $objGrow->getActiveSheet()->getCell('M' . $i)->getCalculatedValue();
                  $_DATOS_EXCEL3[$i]['Extra_parameters'] = $objGrow->getActiveSheet()->getCell('N' . $i)->getCalculatedValue();
                   $_DATOS_EXCEL3[$i]['subio'] = $objGrow->getActiveSheet()->getCell('O' . $i)->getCalculatedValue();
                               $_DATOS_EXCEL3[$i]['lab'] = $objGrow->getActiveSheet()->getCell('P' . $i)->getCalculatedValue();
                    
                    
            }
                   $objPres->setActiveSheetIndex(4);
             // Llenamos el arreglo con los datos  del archivo xlsx
            for ($i = 3; $i <= $totalRe4; $i++) {
                $_DATOS_EXCEL4[$i]['Org_ID'] = $objPres->getActiveSheet()->getCell('B' . $i)->getCalculatedValue();
                $_DATOS_EXCEL4[$i]['Preservation_Method_ID'] = $objPres->getActiveSheet()->getCell('C' . $i)->getCalculatedValue();
                  $_DATOS_EXCEL4[$i]['Date_of_preservation'] = $objPres->getActiveSheet()->getCell('D' . $i)->getCalculatedValue();
                $_DATOS_EXCEL4[$i]['User_ID'] = $objPres->getActiveSheet()->getCell('E' . $i)->getCalculatedValue();
          $_DATOS_EXCEL4[$i]['Number_of_vials'] = $objPres->getActiveSheet()->getCell('F' . $i)->getCalculatedValue();
                $_DATOS_EXCEL4[$i]['Volume_of_vials'] = $objPres->getActiveSheet()->getCell('G' . $i)->getCalculatedValue();
                  $_DATOS_EXCEL4[$i]['Storage_ID'] = $objPres->getActiveSheet()->getCell('H' . $i)->getCalculatedValue();
                $_DATOS_EXCEL4[$i]['Comments'] = $objPres->getActiveSheet()->getCell('I' . $i)->getCalculatedValue();
                  $_DATOS_EXCEL4[$i]['lab'] = $objPres->getActiveSheet()->getCell('J' . $i)->getCalculatedValue();
                   
                    
                    
            }
            
                   $objDna->setActiveSheetIndex(5);
             // Llenamos el arreglo con los datos  del archivo xlsx
            for ($i = 3; $i <= $totalRe5; $i++) {
                $_DATOS_EXCEL5[$i]['Org_ID'] = $objDna->getActiveSheet()->getCell('B' . $i)->getCalculatedValue();
                $_DATOS_EXCEL5[$i]['Extraction_Method_ID'] = $objDna->getActiveSheet()->getCell('C' . $i)->getCalculatedValue();
                  $_DATOS_EXCEL5[$i]['Date_of_extraction'] = $objDna->getActiveSheet()->getCell('D' . $i)->getCalculatedValue();
                $_DATOS_EXCEL5[$i]['Concentration'] = $objDna->getActiveSheet()->getCell('E' . $i)->getCalculatedValue();
          $_DATOS_EXCEL5[$i]['Volume'] = $objDna->getActiveSheet()->getCell('F' . $i)->getCalculatedValue();
                $_DATOS_EXCEL5[$i]['User_ID'] = $objDna->getActiveSheet()->getCell('G' . $i)->getCalculatedValue();
                  $_DATOS_EXCEL5[$i]['Storage_ID'] = $objDna->getActiveSheet()->getCell('H' . $i)->getCalculatedValue();
                                 $_DATOS_EXCEL5[$i]['lab'] = $objDna->getActiveSheet()->getCell('I' . $i)->getCalculatedValue();
                   
                    
                    
            }
            $objGenetic->setActiveSheetIndex(6);
             // Llenamos el arreglo con los datos  del archivo xlsx
            for ($i = 3; $i <= $totalRe6; $i++) {
                $_DATOS_EXCEL6[$i]['Org_ID'] = $objGenetic->getActiveSheet()->getCell('B' . $i)->getCalculatedValue();
                $_DATOS_EXCEL6[$i]['Taxonomic_lineage'] = $objGenetic->getActiveSheet()->getCell('C' . $i)->getCalculatedValue();
                  $_DATOS_EXCEL6[$i]['Gene_ID'] = $objGenetic->getActiveSheet()->getCell('D' . $i)->getCalculatedValue();
                $_DATOS_EXCEL6[$i]['Sequencing_Method_ID'] = $objGenetic->getActiveSheet()->getCell('E' . $i)->getCalculatedValue();
          $_DATOS_EXCEL6[$i]['Cured_sequence'] = $objGenetic->getActiveSheet()->getCell('F' . $i)->getCalculatedValue();
                $_DATOS_EXCEL6[$i]['Comments'] = $objGenetic->getActiveSheet()->getCell('G' . $i)->getCalculatedValue();
                  $_DATOS_EXCEL6[$i]['subio'] = $objGenetic->getActiveSheet()->getCell('H' . $i)->getCalculatedValue();
                                 $_DATOS_EXCEL6[$i]['lab'] = $objGenetic->getActiveSheet()->getCell('I' . $i)->getCalculatedValue();
                   
                    
                    
            }
             $objMetabolic->setActiveSheetIndex(7);
             // Llenamos el arreglo con los datos  del archivo xlsx
            for ($i = 3; $i <= $totalRe7; $i++) {
                $_DATOS_EXCEL7[$i]['Org_ID'] = $objMetabolic->getActiveSheet()->getCell('B' . $i)->getCalculatedValue();
                $_DATOS_EXCEL7[$i]['User_ID'] = $objMetabolic->getActiveSheet()->getCell('C' . $i)->getCalculatedValue();
                  $_DATOS_EXCEL7[$i]['Medium_ID'] = $objMetabolic->getActiveSheet()->getCell('D' . $i)->getCalculatedValue();
                $_DATOS_EXCEL7[$i]['Temperature'] = $objMetabolic->getActiveSheet()->getCell('E' . $i)->getCalculatedValue();
          $_DATOS_EXCEL7[$i]['Agitation'] = $objMetabolic->getActiveSheet()->getCell('F' . $i)->getCalculatedValue();
                $_DATOS_EXCEL7[$i]['Time'] = $objMetabolic->getActiveSheet()->getCell('G' . $i)->getCalculatedValue();
                  $_DATOS_EXCEL7[$i]['pH_initial'] = $objMetabolic->getActiveSheet()->getCell('H' . $i)->getCalculatedValue();
                                 $_DATOS_EXCEL7[$i]['pH_final'] = $objMetabolic->getActiveSheet()->getCell('I' . $i)->getCalculatedValue();
                     $_DATOS_EXCEL7[$i]['OD600_initial'] = $objMetabolic->getActiveSheet()->getCell('J' . $i)->getCalculatedValue();
          $_DATOS_EXCEL7[$i]['OD600_final'] = $objMetabolic->getActiveSheet()->getCell('K' . $i)->getCalculatedValue();
                $_DATOS_EXCEL7[$i]['Comments'] = $objMetabolic->getActiveSheet()->getCell('L' . $i)->getCalculatedValue();
                  $_DATOS_EXCEL7[$i]['lab'] = $objMetabolic->getActiveSheet()->getCell('M' . $i)->getCalculatedValue();
                                 
                   
                    
                    
            }
                $objBioassay->setActiveSheetIndex(8);
             // Llenamos el arreglo con los datos  del archivo xlsx
            for ($i = 3; $i <= $totalRe8; $i++) {
                $_DATOS_EXCEL8[$i]['Org_ID'] = $objBioassay->getActiveSheet()->getCell('B' . $i)->getCalculatedValue();
                $_DATOS_EXCEL8[$i]['Assay_Type_ID'] = $objBioassay->getActiveSheet()->getCell('C' . $i)->getCalculatedValue();
                  $_DATOS_EXCEL8[$i]['Medium_ID'] = $objBioassay->getActiveSheet()->getCell('D' . $i)->getCalculatedValue();
                $_DATOS_EXCEL8[$i]['Temperature'] = $objBioassay->getActiveSheet()->getCell('E' . $i)->getCalculatedValue();
          $_DATOS_EXCEL8[$i]['Inhibition'] = $objBioassay->getActiveSheet()->getCell('F' . $i)->getCalculatedValue();
                $_DATOS_EXCEL8[$i]['Inhibition_measurament'] = $objBioassay->getActiveSheet()->getCell('G' . $i)->getCalculatedValue();
                  $_DATOS_EXCEL8[$i]['Antagonist_strain'] = $objBioassay->getActiveSheet()->getCell('H' . $i)->getCalculatedValue();
                                 $_DATOS_EXCEL8[$i]['Comments'] = $objBioassay->getActiveSheet()->getCell('I' . $i)->getCalculatedValue();
                     $_DATOS_EXCEL8[$i]['sub'] = $objBioassay->getActiveSheet()->getCell('J' . $i)->getCalculatedValue();
          $_DATOS_EXCEL8[$i]['lab'] = $objBioassay->getActiveSheet()->getCell('K' . $i)->getCalculatedValue();
                    
                   
                    
                    
            }
            
        }
        //si por algo no cargo el archivo bak_ 
        else {
            echo "You need to import the file";
        } 
        $errores = 0;
         $Similar="";
        
           $j=3;
//        recorremos el arreglo multidimensional 
//        para ir recuperando los datos obtenidos
//        del excel e ir insertandolos en la BD
     foreach ($_DATOS_EXCEL as $campo => $valor) {
         
          $bus=$id[$j];
                 $bus1=$id1[$j];
                  $bus2=$id2[$j];
                   $bus3=$id3[$j];
                   $bus4=$id4[$j];
                 $bus5=$id5[$j];
                  $bus6=$id6[$j];
                   $bus7=$id7[$j];
                    $bus8=$id8[$j];
           
                
             
               echo $bus;
            $RevisaDoble="Select Alias from organism_information where Alias='$bus'";
                $cs=mysql_query($RevisaDoble,$cn);
                while($resul=mysql_fetch_array($cs)){
			$Similar=$resul[0];
			}
                        
            $sql = "INSERT INTO organism_information (Org_ID,Alias,Isolated_by,Date_of_Isolation,Origin,item,level,Additional_Comments,subio,lab)VALUES (NULL,'";
            foreach ($valor as $campo2 => $valor2) {
                
//                if($valueKey == 'id' && $value == 'searched_value'){
//            //delete this particular object from the $array
//            unset($array[$elementKey]);
//        } 
//                echo $valor2;
//                $Similar="";
//            $RevisaDoble="Select Name from assay_type where Name='$valor2'";
//                $cs=mysql_query($RevisaDoble,$cn);
//                while($resul=mysql_fetch_array($cs)){
//			$Similar=$resul[0];
//			}
//                        
                    if($Similar!=""){
 echo "<script>
                        var continuar;
    if (confirm('The organism $Similar is in your lab?') == true) {
        continuar=3;
    } else {
         continuar=1;
    }
    

			
                          
                                </script>";
               
                  
                   ?>
                    <form method="post" action="" name="form1">
                       
<script>document.write("<input type='hidden' name='ano"+cont+"' id='ano"+cont+"' value='"+continuar+"' size=1> <div id='inter"+cont+"' name='inter"+cont+"'></div>")


            
            </script> 
            <script>
            var nes=document.getElementById("inter"+cont);
            nes.innerHTML="<input type='text' name='rec"+cont+"' id='rec"+cont+"' value='<?php echo $bus?>' >\n\
<input type='hidden' name='rec1"+cont+"' id='rec1"+cont+"' value='<?php echo $bus1?>' >\n\
<input type='hidden' name='rec2"+cont+"' id='rec2"+cont+"' value='<?php echo $bus2?>' >\n\
    <input type='hidden' name='rec3"+cont+"' id='rec3"+cont+"' value='<?php echo $bus3?>' >\n\
<input type='hidden' name='rec4"+cont+"' id='rec4"+cont+"' value='<?php echo $bus4?>' >\n\
    <input type='hidden' name='rec5"+cont+"' id='rec5"+cont+"' value='<?php echo $bus5?>' >\n\
<input type='hidden' name='rec6"+cont+"' id='rec6"+cont+"' value='<?php echo $bus6?>' >\n\
 <input type='hidden' name='rec7"+cont+"' id='rec7"+cont+"' value='<?php echo $bus7?>'>\n\
<input type='hidden' name='rec8"+cont+"' id='rec8"+cont+"' value='<?php echo $bus8?>' >";
             </script>
</form>
  
<script language='JavaScript'>
    act(cont);
    function act(contador){
        
    var name = document.getElementById("ano"+contador);
     var regis = document.getElementById("rec"+contador);
     var regis1 = document.getElementById("rec1"+contador);
     var regis2 = document.getElementById("rec2"+contador);
     var regis3 = document.getElementById("rec3"+contador);
      var regis4 = document.getElementById("rec4"+contador);
     var regis5 = document.getElementById("rec5"+contador);
     var regis6 = document.getElementById("rec6"+contador);
     var regis7 = document.getElementById("rec7"+contador);
     var regis8 = document.getElementById("rec8"+contador);
     
var contenido = name.value;
var recor = regis.value;
var recor1 = regis1.value;
var recor2 = regis2.value;
var recor3 = regis3.value;
var recor4 = regis4.value;
var recor5 = regis5.value;
var recor6 = regis6.value;
var recor7 = regis7.value;
var recor8 = regis8.value;



    $.ajax({ 
         type:"POST", 
          url: "Guardar_Import.php",
       data:{parametro1:contenido,records:recor,records1:recor1,records2:recor2,records3:recor3,records4:recor4,records5:recor5,records6:recor6,records7:recor7,records8:recor8}
        }).done(function(msg){
         alert(msg);
          
}); 
   
    cont=cont+1;
 }
</script>

<?php
                  
            }  
 if($Similar==""){
                       $campo2 == "lab" ? $sql.= $valor2 . "');" : $sql.= $valor2 . "','";
                            
                  }
                  
                 $Similar=""; 
                   
            }
           $j=$j+1;
            
            echo $sql;
            $result = mysql_query($sql);
            
            if (!$result) {
                echo "Error al insertar registro " . $campo;
                $errores+=1;
            }
     }
     
     //Insertar macros
          foreach ($_DATOS_EXCEL1 as $campo => $valor) {
            $sql1 = "INSERT INTO macroscopic_morphology (Macroscopic_Morphology_ID,Org_ID,Medium_ID,Temperature,Agitation,Age,Size,Surface,Color,subio,lab)VALUES (NULL,'";
            foreach ($valor as $campo2 => $valor2) {
                $campo2 == "lab" ? $sql1.= $valor2 . "');" : $sql1.= $valor2 . "','";
            }
           
            echo $sql1;
            $result = mysql_query($sql1);
            
            if (!$result) {
                echo "Error al insertar registro " . $campo;
                $errores+=1;
            }
        }
     
     //Insertar micros
            foreach ($_DATOS_EXCEL2 as $campo => $valor) {
            $sql2 = "INSERT INTO microscopic_morphology (Microscopic_Morphology_ID,Org_ID,Medium_ID,Temperature,Agitation,Age,Axis_long,Axis_short,Motility,Aggregates,Biofilm_formation,Gram_test,subio,lab)VALUES (NULL,'";
            foreach ($valor as $campo2 => $valor2) {
                $campo2 == "lab" ? $sql2.= $valor2 . "');" : $sql2.= $valor2 . "','";
            }
           
            echo $sql2;
            $result = mysql_query($sql2);
            
            if (!$result) {
                echo "Error al insertar registro " . $campo;
                $errores+=1;
            }
        }
          //Insertar grow
            foreach ($_DATOS_EXCEL3 as $campo => $valor) {
            $sql3 = "INSERT INTO growth_characteristics (Growth_characteristics_ID,Org_ID,Medium_solid,Temperature_solid,Time_solid,Medium_liquid,Temperature_liquid,Agitation_time,Time_liquid,pH_initial,pH_final,OD600_initial,OD600_final,Extra_parameters,subio,lab)VALUES (NULL,'";
            foreach ($valor as $campo2 => $valor2) {
                $campo2 == "lab" ? $sql3.= $valor2 . "');" : $sql3.= $valor2 . "','";
            }
           
            echo $sql3;
            $result = mysql_query($sql3);
            
            if (!$result) {
                echo "Error al insertar registro " . $campo;
                $errores+=1;
            }
        }
         //Insertar preserv
            foreach ($_DATOS_EXCEL4 as $campo => $valor) {
            $sql4 = "INSERT INTO preservation_of_strains (Preservation_of_Strains_ID,Org_ID,Preservation_Method_ID,Date_of_preservation,User_ID,Number_of_vials,Volume_of_vials,Storage_ID,Comments,lab)VALUES (NULL,'";
            foreach ($valor as $campo2 => $valor2) {
                $campo2 == "lab" ? $sql4.= $valor2 . "');" : $sql4.= $valor2 . "','";
            }
           
            echo $sql4;
            $result = mysql_query($sql4);
            
            if (!$result) {
                echo "Error al insertar registro " . $campo;
                $errores+=1;
            }
        }
        //Insertar dna
            foreach ($_DATOS_EXCEL5 as $campo => $valor) {
            $sql5 = "INSERT INTO dna (Org_ID,Extraction_Method_ID,Date_of_extraction,Concentration,Volume,User_ID,Storage_ID,lab)VALUES (NULL,'";
            foreach ($valor as $campo2 => $valor2) {
                $campo2 == "lab" ? $sql5.= $valor2 . "');" : $sql5.= $valor2 . "','";
            }
           
            echo $sql5;
            $result = mysql_query($sql5);
            
            if (!$result) {
                echo "Error al insertar registro " . $campo;
                $errores+=1;
            }
        }
           //Insertar dna
            foreach ($_DATOS_EXCEL6 as $campo => $valor) {
            $sql6 = "INSERT INTO dna (Org_ID,Extraction_Method_ID,Date_of_extraction,Concentration,Volume,User_ID,Storage_ID,lab)VALUES (NULL,'";
            foreach ($valor as $campo2 => $valor2) {
                $campo2 == "lab" ? $sql6.= $valor2 . "');" : $sql6.= $valor2 . "','";
            }
           
            echo $sql6;
            $result = mysql_query($sql6);
            
            if (!$result) {
                echo "Error al insertar registro " . $campo;
                $errores+=1;
            }
        }
          //Insertar genetic
            foreach ($_DATOS_EXCEL7 as $campo => $valor) {
            $sql7 = "INSERT INTO genetic_data (Genetic_Data_ID,Org_ID,Taxonomic_lineage,Gene_ID,Sequencing_Method_ID,Cured_sequence,Comments,subio,lab)VALUES (NULL,'";
            foreach ($valor as $campo2 => $valor2) {
                $campo2 == "lab" ? $sql7.= $valor2 . "');" : $sql7.= $valor2 . "','";
            }
           
            echo $sql7;
            $result = mysql_query($sql7);
            
            if (!$result) {
                echo "Error al insertar registro " . $campo;
                $errores+=1;
            }
        }
        //Insertar Meta
            foreach ($_DATOS_EXCEL8 as $campo => $valor) {
            $sql8 = "INSERT INTO metabolic_data (Metabolic_Data_ID,Org_ID,User_ID,Medium_ID,Temperature,Agitation,Time,pH_initial,pH_final,OD600_initial,OD600_final,Comments,lab)VALUES (NULL,'";
            foreach ($valor as $campo2 => $valor2) {
                $campo2 == "lab" ? $sql8.= $valor2 . "');" : $sql8.= $valor2 . "','";
            }
           
            echo $sql8;
            $result = mysql_query($sql8);
            
            if (!$result) {
                echo "Error al insertar registro " . $campo;
                $errores+=1;
            }
        }
           //Insertar Bio
            foreach ($_DATOS_EXCEL5 as $campo => $valor) {
            $sql9 = "INSERT INTO bioassays_data (Bioassays_Data_ID,Org_ID,Assay_Type_ID,Medium_ID,Temperature,Inhibition,Inhibition_measurament,Antagonist_strain,Comments,subio,lab)VALUES (NULL,'";
            foreach ($valor as $campo2 => $valor2) {
                $campo2 == "lab" ? $sql9.= $valor2 . "');" : $sql9.= $valor2 . "','";
            }
           
            echo $sql9;
            $result = mysql_query($sql9);
            
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
<?php 
pie();
?>