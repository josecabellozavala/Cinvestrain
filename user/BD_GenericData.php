<?php
include("../bdConnection.php");
?>



<?php
                $cod=$_POST["generi"];
		$org=$_POST["orgid"];
		$tax=$_POST["taxo"];
		$gen=$_POST["gen"];
                $seq=$_POST["sequ"];
		$cur=$_POST["cur"];
                $com=$_POST["Com"];
                 $subir=$_POST["sub"];
                $lab=$_POST["lab"];
            $user=$_POST["user"];
                    $user1=$_POST["user1"];
                     $user2=$_POST["user2"];
                      $user3=$_POST["user3"];
                       $user4=$_POST["user4"];
                 
                 
		$sql="update genetic_data set Org_ID='$org',Taxonomic_lineage='$tax',Gene_ID='$gen',Sequencing_Method_ID='$seq',Cured_sequence='$cur',Comments='$com',subio='$subir',lab='$lab',user='$user'   where Genetic_Data_ID='$cod'";
		
		$cs=mysql_query($sql,$cn);
                
                
                  $cod=$_POST["generi"];
                  $cod=$cod-1;
		$org=$_POST["orgid"];
		$tax=$_POST["taxo1"];
		$gen=$_POST["gen1"];
                $seq=$_POST["sequ1"];
		$cur=$_POST["cur1"];
                $com=$_POST["Com1"];
                 $subir=$_POST["sub"];
                $lab=$_POST["lab"];
            
                 
                 
		$sql="update genetic_data set Org_ID='$org',Taxonomic_lineage='$tax',Gene_ID='$gen',Sequencing_Method_ID='$seq',Cured_sequence='$cur',Comments='$com',subio='$subir',lab='$lab',user='$user1'  where Genetic_Data_ID='$cod'";
		
		$cs=mysql_query($sql,$cn);
                $cod=$_POST["generi"];
                  $cod=$cod-2;
		$org=$_POST["orgid"];
		$tax=$_POST["taxo2"];
		$gen=$_POST["gen2"];
                $seq=$_POST["sequ2"];
		$cur=$_POST["cur2"];
                $com=$_POST["Com2"];
                 $subir=$_POST["sub"];
                $lab=$_POST["lab"];
            
                 
                 
		$sql="update genetic_data set Org_ID='$org',Taxonomic_lineage='$tax',Gene_ID='$gen',Sequencing_Method_ID='$seq',Cured_sequence='$cur',Comments='$com',subio='$subir',lab='$lab',user='$user2'  where Genetic_Data_ID='$cod'";
		
		$cs=mysql_query($sql,$cn);
                $cod=$_POST["generi"];
                  $cod=$cod-3;
		$org=$_POST["orgid"];
		$tax=$_POST["taxo3"];
		$gen=$_POST["gen3"];
                $seq=$_POST["sequ3"];
		$cur=$_POST["cur3"];
                $com=$_POST["Com3"];
                 $subir=$_POST["sub"];
                $lab=$_POST["lab"];
            
                 
                 
		$sql="update genetic_data set Org_ID='$org',Taxonomic_lineage='$tax',Gene_ID='$gen',Sequencing_Method_ID='$seq',Cured_sequence='$cur',Comments='$com',subio='$subir',lab='$lab',user='$user3'  where Genetic_Data_ID='$cod'";
		
		$cs=mysql_query($sql,$cn);
                $cod=$_POST["generi"];
                  $cod=$cod-4;
		$org=$_POST["orgid"];
		$tax=$_POST["taxo4"];
		$gen=$_POST["gen4"];
                $seq=$_POST["sequ4"];
		$cur=$_POST["cur4"];
                $com=$_POST["Com4"];
                 $subir=$_POST["sub"];
                $lab=$_POST["lab"];
            
                 
                 
		$sql="update genetic_data set Org_ID='$org',Taxonomic_lineage='$tax',Gene_ID='$gen',Sequencing_Method_ID='$seq',Cured_sequence='$cur',Comments='$com',subio='$subir',lab='$lab',user='$user4'  where Genetic_Data_ID='$cod'";
		
		$cs=mysql_query($sql,$cn);
		echo "<script> alert('Se insertó correctamente');</script>";
?>

