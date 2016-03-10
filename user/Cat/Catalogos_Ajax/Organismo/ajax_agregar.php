<?php
	include "../../../../bdConnection.php";
	include "../extras/php/basico.php";
	
	/*verificamos si las variables se envian*/
	if(empty($_POST['usu_per']) || empty($_POST['usu_per']) || empty($_POST['nom_per']) ){
		echo "You must complete requiered data";
		exit;
	}
	
	/*obtenemos el ide mayor*/
	$sql = "select Org_ID from organism_information order by Org_ID desc limit 1";
	$per = mysql_query($sql);
	$rs_per = mysql_fetch_assoc($per);
	
        
         $laboratory=$_POST['email_per'];
         
         $sqlk="SELECT id_lab FROM lab WHERE  Name like '%$laboratory%'";		
		$lab = mysql_query($sqlk);
		
                while($campo=mysql_fetch_array($lab)){
				$consulLab=$campo[0];
			}
	/*insertamos el nuevo registro*/
	$ide_per = $rs_per['Org_ID'] + 1;
        $fech=$_POST['comp'];

	
        $alias=$_POST['usu_per'];
        $Iso=$_POST['nom_per'];
        $or=$_POST['ape_per'];
         $storage=$_POST['storage'];
        $item=$_POST['proveedor'];
         $level=$_POST['producto'];
         $com=$_POST['ster'];
         $usuSube=$_POST['ph'];
         $lab=$consulLab;
        
        
                     
			$query="insert into organism_information(Org_ID, Alias, Isolated_by, Date_of_Isolation,id_storage,Origin,item,level,Additional_Comments,subio,lab)values('$ide_per', '$alias','$Iso','$fech','$storage',' $or','$item','$level',' $com','$usuSube','$lab')";
			
                        
                         $cs=mysql_query($query,$cn);
		
                         $queryBus="select Org_ID from organism_information where Alias='$alias'";
                        $resultados=mysql_query($queryBus,$cn);
		while($resul=mysql_fetch_array($resultados)){
                         
                       
           
			$varID=$resul['Org_ID'];
                }
                  $query1="insert into macroscopic_morphology(Org_ID, Medium_ID, Temperature,Agitation,Age,Size,Surface,Color,Photo_ID,subio)values('$varID', ' NULL','NULL ','NULL ',' NULL',' NULL','NULL ','NULL ',' NULL','$usuSube')";
                   $query1a="insert into macroscopic_morphology(Org_ID, Medium_ID, Temperature,Agitation,Age,Size,Surface,Color,Photo_ID,subio)values('$varID', ' NULL','NULL ','NULL ',' NULL',' NULL','NULL ','NULL ',' NULL','$usuSube')";
                    $query1b="insert into macroscopic_morphology(Org_ID, Medium_ID, Temperature,Agitation,Age,Size,Surface,Color,Photo_ID,subio)values('$varID', ' NULL','NULL ','NULL ',' NULL',' NULL','NULL ','NULL ',' NULL','$usuSube')";
                     $query1c="insert into macroscopic_morphology(Org_ID, Medium_ID, Temperature,Agitation,Age,Size,Surface,Color,Photo_ID,subio)values('$varID', ' NULL','NULL ','NULL ',' NULL',' NULL','NULL ','NULL ',' NULL','$usuSube')";
                      $query1d="insert into macroscopic_morphology(Org_ID, Medium_ID, Temperature,Agitation,Age,Size,Surface,Color,Photo_ID,subio)values('$varID', ' NULL','NULL ','NULL ',' NULL',' NULL','NULL ','NULL ',' NULL','$usuSube')";
             
                      
                      $query2="insert into microscopic_morphology (Org_ID,Medium_ID,Temperature,Agitation,Age,Axis_long,Axis_short,Motility,Aggregates,Biofilm_formation,Gram_test,Photo_ID,subio) values ('$varID','NULL','NULL','NULL',' NULL','NULL','NULL','NULL','NULL ',' NULL',' NULL ',' NULL ','$usuSube')";
                       $query2a="insert into microscopic_morphology (Org_ID,Medium_ID,Temperature,Agitation,Age,Axis_long,Axis_short,Motility,Aggregates,Biofilm_formation,Gram_test,Photo_ID,subio) values ('$varID','NULL','NULL','NULL',' NULL','NULL','NULL','NULL','NULL ',' NULL',' NULL ',' NULL ','$usuSube')";
                        $query2b="insert into microscopic_morphology (Org_ID,Medium_ID,Temperature,Agitation,Age,Axis_long,Axis_short,Motility,Aggregates,Biofilm_formation,Gram_test,Photo_ID,subio) values ('$varID','NULL','NULL','NULL',' NULL','NULL','NULL','NULL','NULL ',' NULL',' NULL ',' NULL ','$usuSube')";
                         $query2c="insert into microscopic_morphology (Org_ID,Medium_ID,Temperature,Agitation,Age,Axis_long,Axis_short,Motility,Aggregates,Biofilm_formation,Gram_test,Photo_ID,subio) values ('$varID','NULL','NULL','NULL',' NULL','NULL','NULL','NULL','NULL ',' NULL',' NULL ',' NULL ','$usuSube')";
                          $query2d="insert into microscopic_morphology (Org_ID,Medium_ID,Temperature,Agitation,Age,Axis_long,Axis_short,Motility,Aggregates,Biofilm_formation,Gram_test,Photo_ID,subio) values ('$varID','NULL','NULL','NULL',' NULL','NULL','NULL','NULL','NULL ',' NULL',' NULL ',' NULL ','$usuSube')";
		
                          $query3="insert into growth_characteristics (Org_ID,Medium_solid,Temperature_solid,Time_solid,Medium_liquid,Temperature_liquid,Agitation_time,Time_liquid,pH_initial,pH_final,OD600_initial,OD600_final,Extra_parameters,Kinetics,subio) values ('$varID','NULL','NULL','NULL',' NULL','NULL','NULL','NULL',' NULL','NULL ','NULL  ',' NULL ','NULL','NULL  ','$usuSube')";
                           $query3a="insert into growth_characteristics (Org_ID,Medium_solid,Temperature_solid,Time_solid,Medium_liquid,Temperature_liquid,Agitation_time,Time_liquid,pH_initial,pH_final,OD600_initial,OD600_final,Extra_parameters,Kinetics,subio) values ('$varID','NULL','NULL','NULL',' NULL','NULL','NULL','NULL',' NULL','NULL ','NULL  ',' NULL ','NULL','NULL  ','$usuSube')";
                            $query3b="insert into growth_characteristics (Org_ID,Medium_solid,Temperature_solid,Time_solid,Medium_liquid,Temperature_liquid,Agitation_time,Time_liquid,pH_initial,pH_final,OD600_initial,OD600_final,Extra_parameters,Kinetics,subio) values ('$varID','NULL','NULL','NULL',' NULL','NULL','NULL','NULL',' NULL','NULL ','NULL  ',' NULL ','NULL','NULL  ','$usuSube')";
                             $query3c="insert into growth_characteristics (Org_ID,Medium_solid,Temperature_solid,Time_solid,Medium_liquid,Temperature_liquid,Agitation_time,Time_liquid,pH_initial,pH_final,OD600_initial,OD600_final,Extra_parameters,Kinetics,subio) values ('$varID','NULL','NULL','NULL',' NULL','NULL','NULL','NULL',' NULL','NULL ','NULL  ',' NULL ','NULL','NULL  ','$usuSube')";
                              $query3d="insert into growth_characteristics (Org_ID,Medium_solid,Temperature_solid,Time_solid,Medium_liquid,Temperature_liquid,Agitation_time,Time_liquid,pH_initial,pH_final,OD600_initial,OD600_final,Extra_parameters,Kinetics,subio) values ('$varID','NULL','NULL','NULL',' NULL','NULL','NULL','NULL',' NULL','NULL ','NULL  ',' NULL ','NULL','NULL  ','$usuSube')";
            
                              $query4="insert into preservation_of_strains (Org_ID,Date_of_preservation,User_ID,Number_of_vials,Volume_of_vials,Storage_ID,Comments,subio) values ('$varID','NULL','NULL','NULL','NULL','NULL ','NULL','$usuSube')";
                               $query4a="insert into preservation_of_strains (Org_ID,Date_of_preservation,User_ID,Number_of_vials,Volume_of_vials,Storage_ID,Comments,subio) values ('$varID','NULL','NULL','NULL','NULL','NULL ','NULL','$usuSube')";
                                $query4b="insert into preservation_of_strains (Org_ID,Date_of_preservation,User_ID,Number_of_vials,Volume_of_vials,Storage_ID,Comments,subio) values ('$varID','NULL','NULL','NULL','NULL','NULL ','NULL','$usuSube')";
                                 $query4c="insert into preservation_of_strains (Org_ID,Date_of_preservation,User_ID,Number_of_vials,Volume_of_vials,Storage_ID,Comments,subio) values ('$varID','NULL','NULL','NULL','NULL','NULL ','NULL','$usuSube')";
                                  $query4d="insert into preservation_of_strains (Org_ID,Date_of_preservation,User_ID,Number_of_vials,Volume_of_vials,Storage_ID,Comments,subio) values ('$varID','NULL','NULL','NULL','NULL','NULL ','NULL','$usuSube')";
                                  
            $query5="insert into dna (Org_ID,Extraction_Method_ID,Date_of_extraction,Concentration,Volume,User_ID,Storage_ID,subio)values ('$varID','NULL','NULL','NULL','NULL ','NULL','NULL','$usuSube')";
            $query5a="insert into dna (Org_ID,Extraction_Method_ID,Date_of_extraction,Concentration,Volume,User_ID,Storage_ID,subio)values ('$varID','NULL','NULL','NULL','NULL ','NULL','NULL','$usuSube')";
            $query5b="insert into dna (Org_ID,Extraction_Method_ID,Date_of_extraction,Concentration,Volume,User_ID,Storage_ID,subio)values ('$varID','NULL','NULL','NULL','NULL ','NULL','NULL','$usuSube')";
            $query5c="insert into dna (Org_ID,Extraction_Method_ID,Date_of_extraction,Concentration,Volume,User_ID,Storage_ID,subio)values ('$varID','NULL','NULL','NULL','NULL ','NULL','NULL','$usuSube')";
            $query5d="insert into dna (Org_ID,Extraction_Method_ID,Date_of_extraction,Concentration,Volume,User_ID,Storage_ID,subio)values ('$varID','NULL','NULL','NULL','NULL ','NULL','NULL','$usuSube')";
            
            $query6="insert into genetic_data (Org_ID,Taxonomic_lineage,Gene_ID,Sequencing_Method_ID,Cured_sequence,Comments,subio) values ('$varID','NULL ','NULL ','NULL ',' NULL',' NULL','$usuSube')";
             $query6a="insert into genetic_data (Org_ID,Taxonomic_lineage,Gene_ID,Sequencing_Method_ID,Cured_sequence,Comments,subio) values ('$varID','NULL ','NULL ','NULL ',' NULL',' NULL','$usuSube')";
              $query6b="insert into genetic_data (Org_ID,Taxonomic_lineage,Gene_ID,Sequencing_Method_ID,Cured_sequence,Comments,subio) values ('$varID','NULL ','NULL ','NULL ',' NULL',' NULL','$usuSube')";
               $query6c="insert into genetic_data (Org_ID,Taxonomic_lineage,Gene_ID,Sequencing_Method_ID,Cured_sequence,Comments,subio) values ('$varID','NULL ','NULL ','NULL ',' NULL',' NULL','$usuSube')";
                $query6d="insert into genetic_data (Org_ID,Taxonomic_lineage,Gene_ID,Sequencing_Method_ID,Cured_sequence,Comments,subio) values ('$varID','NULL ','NULL ','NULL ',' NULL',' NULL','$usuSube')";
                
             $query7="insert into metabolic_data (Org_ID,User_ID,Medium_ID,Temperature,Agitation,Time,pH_initial,pH_final,OD600_initial,OD600_final,Fractionation_strategy,Chromatograms,Mass_spectra,NMR,Comments,subio) values ('$varID','NULL','NULL','NULL','NULL ','NULL','NULL','NULL','NULL',' NULL','NULL','NULL','NULL','NULL','NULL ','$usuSube')";
             $query8="insert into bioassays_data (Org_ID,Assay_Type_ID,Medium_ID,Temperature,Inhibition,Inhibition_measurament,Antagonist_strain,Photo_ID,Comments,subio) values ('$varID','NULL',' NULL',' NULL','NULL ','NULL ','NULL ','NULL ','NULL ','$usuSube')";
             
             $query8a="insert into bioassays_data (Org_ID,Assay_Type_ID,Medium_ID,Temperature,Inhibition,Inhibition_measurament,Antagonist_strain,Photo_ID,Comments,subio) values ('$varID','NULL',' NULL',' NULL','NULL ','NULL ','NULL ','NULL ','NULL ','$usuSube')";
             $query8b="insert into bioassays_data (Org_ID,Assay_Type_ID,Medium_ID,Temperature,Inhibition,Inhibition_measurament,Antagonist_strain,Photo_ID,Comments,subio) values ('$varID','NULL',' NULL',' NULL','NULL ','NULL ','NULL ','NULL ','NULL ','$usuSube')";
             $query8c="insert into bioassays_data (Org_ID,Assay_Type_ID,Medium_ID,Temperature,Inhibition,Inhibition_measurament,Antagonist_strain,Photo_ID,Comments,subio) values ('$varID','NULL',' NULL',' NULL','NULL ','NULL ','NULL ','NULL ','NULL ','$usuSube')";
             $query8d="insert into bioassays_data (Org_ID,Assay_Type_ID,Medium_ID,Temperature,Inhibition,Inhibition_measurament,Antagonist_strain,Photo_ID,Comments,subio) values ('$varID','NULL',' NULL',' NULL','NULL ','NULL ','NULL ','NULL ','NULL ','$usuSube')";
             
             
              $insertar1=mysql_query($query1,$cn);
               $insertar1a=mysql_query($query1a,$cn);
                $insertar1b=mysql_query($query1b,$cn);
                 $insertar1c=mysql_query($query1c,$cn);
                  $insertar1d=mysql_query($query1d,$cn);
            $insertar2=mysql_query($query2,$cn);
            $insertar2a=mysql_query($query2a,$cn);
            $insertar2b=mysql_query($query2b,$cn);
            $insertar2c=mysql_query($query2c,$cn);
            $insertar2d=mysql_query($query2d,$cn);
         $insertar3=mysql_query($query3,$cn);
         $insertar3a=mysql_query($query3a,$cn);
         $insertar3b=mysql_query($query3b,$cn);
         $insertar3c=mysql_query($query3c,$cn);
         $insertar3d=mysql_query($query3d,$cn);
         
         $insertar4=mysql_query($query4,$cn);
         $insertar4a=mysql_query($query4a,$cn);
         $insertar4b=mysql_query($query4b,$cn);
         $insertar4c=mysql_query($query4c,$cn);
         $insertar4d=mysql_query($query4d,$cn);
         
           $insertar5=mysql_query($query5,$cn);
           $insertar5a=mysql_query($query5a,$cn);
           $insertar5b=mysql_query($query5b,$cn);
           $insertar5c=mysql_query($query5c,$cn);
           $insertar5d=mysql_query($query5d,$cn);
       $insertar6=mysql_query($query6,$cn);
       $insertar6a=mysql_query($query6a,$cn);
       $insertar6b=mysql_query($query6b,$cn);
       $insertar6c=mysql_query($query6c,$cn);
       $insertar6d=mysql_query($query6d,$cn);
               $insertar7=mysql_query($query7,$cn);  
                $insertar8=mysql_query($query8,$cn);
         $insertar8a=mysql_query($query8a,$cn);
           $insertar8b=mysql_query($query8b,$cn);
             $insertar8c=mysql_query($query8c,$cn);
               $insertar8d=mysql_query($query8d,$cn);
                
                
                
                
                
	if(!mysql_query($sql))
		echo "Error al insertar a la nueva persona:\n$sql";

	exit;
?>