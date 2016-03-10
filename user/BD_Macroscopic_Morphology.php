<?php
include("../bdConnection.php");
?>



<?php
                $cod=$_POST["mac"];
		$org=$_POST["org"];
		$medi=$_POST["medi"];
		$tempe=$_POST["tempera"];
                $agita=$_POST["agitacion"];
		$age=$_POST["age"];
                $size=$_POST["size"];
                $surface=$_POST["surface"];
                $color=$_POST["color"];
                 $subir=$_POST["sub"];
                  $lab=$_POST["lab"];
                   $user=$_POST["user"];
                   
                 
                 $sql1="update macroscopic_morphology set Org_ID='$org',Medium_ID='$medi' ,Temperature='$tempe',Agitation='$agita',Age='$age',Size='$size',Surface='$surface',Color='$color',Photo_ID='$foto',subio='$subir',lab='$lab',user='$user'  where Macroscopic_Morphology_ID='$cod' ";
                 
		
		
		$cs1=mysql_query($sql1,$cn);
                
                $cod=$_POST["mac"];
                $cod=$cod-1;
		$org=$_POST["org"];
		$medi=$_POST["medi1"];
		$tempe=$_POST["tempera1"];
                $agita=$_POST["agitacion1"];
		$age=$_POST["age1"];
                $size=$_POST["size1"];
                $surface=$_POST["surface1"];
                $color=$_POST["color1"];
                 $subir=$_POST["sub"];
                  $lab=$_POST["lab"];
                  $user1=$_POST["user1"];
                     
                 $sql2="update macroscopic_morphology set Org_ID='$org',Medium_ID='$medi' ,Temperature='$tempe',Agitation='$agita',Age='$age',Size='$size',Surface='$surface',Color='$color',Photo_ID='$foto',subio='$subir',lab='$lab',user='$user1'  where Macroscopic_Morphology_ID='$cod' ";
                 
		$cs2=mysql_query($sql2,$cn);
		
		
                
                $cod=$_POST["mac"];
                       $cod=$cod-2;
		$org=$_POST["org"];
		$medi=$_POST["medi2"];
		$tempe=$_POST["tempera2"];
                $agita=$_POST["agitacion2"];
		$age=$_POST["age2"];
                $size=$_POST["size2"];
                $surface=$_POST["surface2"];
                $color=$_POST["color2"];
                 $subir=$_POST["sub"];
                  $lab=$_POST["lab"];
                 $user2=$_POST["user2"];
                      
                 $sql3="update macroscopic_morphology set Org_ID='$org',Medium_ID='$medi' ,Temperature='$tempe',Agitation='$agita',Age='$age',Size='$size',Surface='$surface',Color='$color',Photo_ID='$foto',subio='$subir',lab='$lab',user='$user2'  where Macroscopic_Morphology_ID='$cod' ";
                 $cs3=mysql_query($sql3,$cn);
		
		
		
                $cod=$_POST["mac"];
                       $cod=$cod-3;
		$org=$_POST["org"];
		$medi=$_POST["medi3"];
		$tempe=$_POST["tempera3"];
                $agita=$_POST["agitacion3"];
		$age=$_POST["age3"];
                $size=$_POST["size3"];
                $surface=$_POST["surface3"];
                $color=$_POST["color3"];
                 $subir=$_POST["sub"];
                  $lab=$_POST["lab"];
                 $user3=$_POST["user3"];
                     
                 $sql4="update macroscopic_morphology set Org_ID='$org',Medium_ID='$medi' ,Temperature='$tempe',Agitation='$agita',Age='$age',Size='$size',Surface='$surface',Color='$color',Photo_ID='$foto',subio='$subir',lab='$lab',user='$user3'  where Macroscopic_Morphology_ID='$cod' ";
                 
		$cs4=mysql_query($sql4,$cn);
		
		
                $cod=$_POST["mac"];
                               $cod=$cod-4;
		$org=$_POST["org"];
		$medi=$_POST["medi4"];
		$tempe=$_POST["tempera4"];
                $agita=$_POST["agitacion4"];
		$age=$_POST["age4"];
                $size=$_POST["size4"];
                $surface=$_POST["surface4"];
                $color=$_POST["color4"];
                 $subir=$_POST["sub"];
                  $lab=$_POST["lab"];
                   $user4=$_POST["user4"];
                 $sql5="update macroscopic_morphology set Org_ID='$org',Medium_ID='$medi' ,Temperature='$tempe',Agitation='$agita',Age='$age',Size='$size',Surface='$surface',Color='$color',Photo_ID='$foto',subio='$subir',lab='$lab',user='$user4'  where Macroscopic_Morphology_ID='$cod' ";
                 
		
		
		$cs5=mysql_query($sql5,$cn);
		
        ?>