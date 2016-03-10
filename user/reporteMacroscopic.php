<?php
    $conexion = new mysqli('localhost',"root","",3306);
	if (mysqli_connect_errno()) {
    	printf("La conexión con el servidor de base de datos falló: %s\n", mysqli_connect_error());
    	exit();
	}
	$consulta = "select * from Macroscopic_Morphology";
	$resultado = $conexion->query($consulta);
	if($resultado->num_rows > 0 ){
						
		date_default_timezone_set('America/Mexico_City');

		if (PHP_SAPI == 'cli')
			die('Este archivo solo se puede ver desde un navegador web');

		/** Se agrega la libreria PHPExcel */
		require_once 'lib/PHPExcel/PHPExcel.php';

		// Se crea el objeto PHPExcel
		$objPHPExcel = new PHPExcel();

		// Se asignan las propiedades del libro
		$objPHPExcel->getProperties()->setCreator("Codedrinks") //Autor
							 ->setLastModifiedBy("Codedrinks") //Ultimo usuario que lo modificó
							 ->setTitle("Reporte de Macroscopic Morphology")
							 ->setSubject("Reporte Macroscopic Morphology")
							 ->setDescription("Reporte de Macroscopic Morphology")
							 ->setKeywords("reporte de Macroscopic Morphology")
							 ->setCategory("Reporte excel");

		$tituloReporte = "Relación Macroscopic Morphology";
		$titulosColumnas = array('Macroscopic Morphology ID','Org ID', 'Medium_ID ', 'Temperature', 'Agitation', 'Age', 'Size', 'Surface', 'Color', 'Photo_ID');
		
		$objPHPExcel->setActiveSheetIndex(0)
        		    ->mergeCells('A1:J1');
						
		// Se agregan los titulos del reporte
		$objPHPExcel->setActiveSheetIndex(0)
			   ->setCellValue('A1',$tituloReporte)
        		    ->setCellValue('A3',  $titulosColumnas[0])
		            ->setCellValue('B3',  $titulosColumnas[1])
        		    ->setCellValue('C3',  $titulosColumnas[2])
            		    ->setCellValue('D3',  $titulosColumnas[3])
                            ->setCellValue('E3',  $titulosColumnas[4])
            		    ->setCellValue('F3',  $titulosColumnas[5])
                            ->setCellValue('G3',  $titulosColumnas[6])
            		    ->setCellValue('H3',  $titulosColumnas[7])
                            ->setCellValue('I3',  $titulosColumnas[8])
            		    ->setCellValue('J3',  $titulosColumnas[9]);
		
		//Se agregan los datos de los alumnos
		$i = 4;
		while ($fila = $resultado->fetch_array()) {
			$objPHPExcel->setActiveSheetIndex(0)
        		    ->setCellValue('A'.$i,  $fila['Macroscopic_Morphology_ID'])
		            ->setCellValue('B'.$i,  $fila['Org_ID'])
        		    ->setCellValue('C'.$i,  $fila['Medium_ID '])
            		->setCellValue('D'.$i, $fila['Temperature'])
                          ->setCellValue('E'.$i,  $fila['Agitation'])
            		->setCellValue('F'.$i,$fila['Age'])
                          ->setCellValue('G'.$i,  $fila['Size'])
            		->setCellValue('H'.$i,$fila['Surface'])
                          ->setCellValue('I'.$i,  $fila['Color'])
            		->setCellValue('J'.$i, utf8_encode($fila['Photo_ID']));
					$i++;
		}
		
		$estiloTituloReporte = array(
        	'font' => array(
	        	'name'      => 'Verdana',
    	        'bold'      => true,
        	    'italic'    => false,
                'strike'    => false,
               	'size' =>16,
	            	'color'     => array(
    	            	'rgb' => 'FFFFFF'
        	       	)
                                ),
	        'fill' => array(
				'type'	=> PHPExcel_Style_Fill::FILL_SOLID,
				'color'	=> array('argb' => 'FF220835')
			),
            'borders' => array(
               	'allborders' => array(
                	'style' => PHPExcel_Style_Border::BORDER_NONE                    
               	)
            ), 
            'alignment' =>  array(
        			'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
        			'vertical'   => PHPExcel_Style_Alignment::VERTICAL_CENTER,
        			'rotation'   => 0,
        			'wrap'          => TRUE
    		)
        );

		$estiloTituloColumnas = array(
            'font' => array(
                'name'      => 'Arial',
                'bold'      => true,                          
                'color'     => array(
                    'rgb' => 'FFFFFF'
                                     )
                           ),
            'fill' => array(
		 'type'	=> PHPExcel_Style_Fill::FILL_GRADIENT_LINEAR,
		 'rotation'   => 90,
        	'startcolor' => array(
            	 'rgb' => 'c47cf2'
        		             ),
                
               'endcolor'   => array(
            	 'argb' => 'FF431a5d'
        		            )
                
			  ),
            'borders' => array(
            	'top'     => array(
                       'style' => PHPExcel_Style_Border::BORDER_MEDIUM ,
                        'color' => array(
                        'rgb' => '143860'
                                       )
                                   ),
                'bottom'     => array(
                    'style' => PHPExcel_Style_Border::BORDER_MEDIUM ,
                        'rgb' => '143860'
                                      )
                               ),
           
			'alignment' =>  array(
        			'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
        			'vertical'   => PHPExcel_Style_Alignment::VERTICAL_CENTER,
        			'wrap'          => TRUE
    		));
			
		$estiloInformacion = new PHPExcel_Style();
                
		$estiloInformacion->applyFromArray(
			array(
           		'font' => array(
               	'name'      => 'Arial',               
               	'color'     => array(
                   	'rgb' => '000000'
               	)
           	),
           	'fill' 	=> array(
				'type'		=> PHPExcel_Style_Fill::FILL_SOLID,
				'color'		=> array('argb' => 'FFd9b7f4')
			),
           	'borders' => array(
               	'left'     => array(
                   	'style' => PHPExcel_Style_Border::BORDER_THIN ,
	                'color' => array(
    	            	'rgb' => '3a2a47'
                   	)
               	)             
           	)
                    ));
		 
		$objPHPExcel->getActiveSheet()->getStyle('A1:J1')->applyFromArray($estiloTituloReporte);
		$objPHPExcel->getActiveSheet()->getStyle('A3:J3')->applyFromArray($estiloTituloColumnas);		
		$objPHPExcel->getActiveSheet()->setSharedStyle($estiloInformacion, "A4:F".($i-1));
				
		for($i = 'A'; $i <= 'J'; $i++){
			$objPHPExcel->setActiveSheetIndex(0)			
				->getColumnDimension($i)->setAutoSize(TRUE);
		}
		
		// Se asigna el nombre a la hoja
		$objPHPExcel->getActiveSheet()->setTitle('Macroscopic');

		// Se activa la hoja para que sea la que se muestre cuando el archivo se abre
		$objPHPExcel->setActiveSheetIndex(0);
		// Inmovilizar paneles 
		//$objPHPExcel->getActiveSheet(0)->freezePane('A4');
		$objPHPExcel->getActiveSheet(0)->freezePaneByColumnAndRow(0,4);

		// Se manda el archivo al navegador web, con el nombre que se indica (Excel2007)
		header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
		header('Content-Disposition: attachment;filename="ReporteMacroscopic.xlsx"');
		header('Cache-Control: max-age=0');

		$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
		$objWriter->save('php://output');
		exit;
		
	}
        
	else{
		print_r('No hay resultados para mostrar');
	}
?>