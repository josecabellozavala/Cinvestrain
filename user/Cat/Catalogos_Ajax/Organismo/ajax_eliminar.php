<?php
	include "../../../../bdConnection.php";
	include "../extras/php/basico.php";
     
        
        $id=(int)$_POST['ide_per'];
        
        
        
			$query="delete from organism_information where Org_ID=$id";
                        $query1="delete from macroscopic_morphology where Org_ID=$id";
                        $query2="delete from microscopic_morphology where Org_ID=$id";
                        $query3="delete from growth_characteristics where Org_ID=$id";
                       $query4="delete from preservation_of_strains where Org_ID=$id";
                       $query5="delete from dna where Org_ID=$id";
                       $query6="delete from genetic_data where Org_ID=$id";
                       $query7="delete from metabolic_data where Org_ID=$id";
                       $query8="delete from bioassays_data_s_v where Org_ID=$id";
                       
                        $elimina=mysql_query($query,$cn);
                         $elimina1=mysql_query($query1,$cn);
                          $elimina2=mysql_query($query2,$cn);
                           $elimina3=mysql_query($query3,$cn);
                            $elimina4=mysql_query($query4,$cn);
                             $elimina5=mysql_query($query5,$cn);
                              $elimina6=mysql_query($query6,$cn);
                                $elimina7=mysql_query($query7,$cn);
                                  $elimina8=mysql_query($query8,$cn);
			
        
	if(!mysql_query($sql))
		echo "Ocurrio un error\n$sql";
	exit;
                       
	
?>