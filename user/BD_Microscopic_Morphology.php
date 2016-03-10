
<?php
include("../bdConnection.php");
?>


<?php
               $cod=$_POST["mic"];
		$org=$_POST["org"];
		$medi=$_POST["medi"];
		$tempe=$_POST["tempera"];
                $agita=$_POST["agitacion"];
		$age=$_POST["age"];
                $a_lon=$_POST["axis_long"];
                $a_sho=$_POST["axis_short"];
                $molit=$_POST["molity"];
                 $aggre=$_POST["aggregates"];
                  $bio=$_POST["biofilm"]; 
                   $gram=$_POST["gram"];
                    $foto=$_POST["foto"];
                      $subir=$_POST["sub"];
                         $lab=$_POST["lab"];
                          $user=$_POST["use"];
                    
                  
		$sql="update microscopic_morphology set Org_ID='$org',Medium_ID='$medi' ,Temperature='$tempe',Agitation='$agita',Age='$age',Axis_long='$a_lon',Axis_short='$a_sho',Motility='$molit',Aggregates='$aggre',Biofilm_formation='$bio',Gram_test=' $gram',Photo_ID='$foto',subio='$subir',lab='$lab',user='$user'  where Microscopic_Morphology_ID='$cod' ";
		
		$cs=mysql_query($sql,$cn);
                
                $cod=$_POST["mic"];
                $cod=$cod-1;
		$org=$_POST["org"];
		$medi=$_POST["medi1"];
		$tempe=$_POST["tempera1"];
                $agita=$_POST["agitacion1"];
		$age=$_POST["age1"];
                $a_lon=$_POST["axis_long1"];
                $a_sho=$_POST["axis_short1"];
                $molit=$_POST["molity1"];
                 $aggre=$_POST["aggregates1"];
                  $bio=$_POST["biofilm1"]; 
                   $gram=$_POST["gram1"];
                    $foto=$_POST["foto"];
                      $subir=$_POST["sub"];
                         $lab=$_POST["lab"];
                  $user1=$_POST["use1"];
                    
		$sql="update microscopic_morphology set Org_ID='$org',Medium_ID='$medi' ,Temperature='$tempe',Agitation='$agita',Age='$age',Axis_long='$a_lon',Axis_short='$a_sho',Motility='$molit',Aggregates='$aggre',Biofilm_formation='$bio',Gram_test=' $gram',Photo_ID='$foto',subio='$subir',lab='$lab',user='$user1'  where Microscopic_Morphology_ID='$cod' ";
		
		$cs=mysql_query($sql,$cn);
                
                
                $cod=$_POST["mic"];
                $cod=$cod-2;
		$org=$_POST["org"];
		$medi=$_POST["medi2"];
		$tempe=$_POST["tempera2"];
                $agita=$_POST["agitacion2"];
		$age=$_POST["age2"];
                $a_lon=$_POST["axis_long2"];
                $a_sho=$_POST["axis_short2"];
                $molit=$_POST["molity2"];
                 $aggre=$_POST["aggregates2"];
                  $bio=$_POST["biofilm2"]; 
                   $gram=$_POST["gram2"];
                    $foto=$_POST["foto"];
                      $subir=$_POST["sub"];
                         $lab=$_POST["lab"];
                   $user2=$_POST["use2"];
                      
		$sql="update microscopic_morphology set Org_ID='$org',Medium_ID='$medi' ,Temperature='$tempe',Agitation='$agita',Age='$age',Axis_long='$a_lon',Axis_short='$a_sho',Motility='$molit',Aggregates='$aggre',Biofilm_formation='$bio',Gram_test=' $gram',Photo_ID='$foto',subio='$subir',lab='$lab',user='$user2'  where Microscopic_Morphology_ID='$cod' ";
		
		$cs=mysql_query($sql,$cn);
                $cod=$_POST["mic"];
                $cod=$cod-3;
		$org=$_POST["org"];
		$medi=$_POST["medi3"];
		$tempe=$_POST["tempera3"];
                $agita=$_POST["agitacion3"];
		$age=$_POST["age3"];
                $a_lon=$_POST["axis_long3"];
                $a_sho=$_POST["axis_short3"];
                $molit=$_POST["molity3"];
                 $aggre=$_POST["aggregates3"];
                  $bio=$_POST["biofilm3"]; 
                   $gram=$_POST["gram3"];
                    $foto=$_POST["foto"];
                      $subir=$_POST["sub"];
                         $lab=$_POST["lab"];
                         $user3=$_POST["use3"];
                      
		$sql="update microscopic_morphology set Org_ID='$org',Medium_ID='$medi' ,Temperature='$tempe',Agitation='$agita',Age='$age',Axis_long='$a_lon',Axis_short='$a_sho',Motility='$molit',Aggregates='$aggre',Biofilm_formation='$bio',Gram_test=' $gram',Photo_ID='$foto',subio='$subir',lab='$lab',user='$user3'  where Microscopic_Morphology_ID='$cod' ";
		
		$cs=mysql_query($sql,$cn);
                $cod=$_POST["mic"];
                $cod=$cod-4;
		$org=$_POST["org"];
		$medi=$_POST["medi4"];
		$tempe=$_POST["tempera4"];
                $agita=$_POST["agitacion4"];
		$age=$_POST["age4"];
                $a_lon=$_POST["axis_long4"];
                $a_sho=$_POST["axis_short4"];
                $molit=$_POST["molity4"];
                 $aggre=$_POST["aggregates4"];
                  $bio=$_POST["biofilm4"]; 
                   $gram=$_POST["gram4"];
                    $foto=$_POST["foto"];
                      $subir=$_POST["sub"];
                         $lab=$_POST["lab"];
                         $user4=$_POST["use4"];
                         
		$sql="update microscopic_morphology set Org_ID='$org',Medium_ID='$medi' ,Temperature='$tempe',Agitation='$agita',Age='$age',Axis_long='$a_lon',Axis_short='$a_sho',Motility='$molit',Aggregates='$aggre',Biofilm_formation='$bio',Gram_test=' $gram',Photo_ID='$foto',subio='$subir',lab='$lab',user='$user4'  where Microscopic_Morphology_ID='$cod' ";
		
		$cs=mysql_query($sql,$cn);
		echo "<script> alert('Se insertó correctamente');</script>";
        ?>