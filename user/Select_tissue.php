<?php
$idproveedor = $_GET['param_id'];

include("../bdConnection.php");
   
$result = mysql_query("SELECT chck1,chck2,chck3,chck4,chck5,chck6,chck7,chck8 FROM plant_inter where id_planta='$idproveedor'  ",$cn);



 

while( ($row = mysql_fetch_array($result))!=NULL){
    
     
    if($row['chck1'] != NULL && $row['chck2']!=NULL && $row['chck3']!=NULL && $row['chck4']!=NULL && $row['chck5']!=NULL && $row['chck6']!=NULL && $row['chck7']!=NULL && $row['chck8']!=NULL)
    {
	echo '<option value="'.$row['chck1'].'">'.$row['chck1'].'</option>'; 
        echo '<option value="'.$row['chck2'].'">'.$row['chck2'].'</option>';
        echo '<option value="'.$row['chck3'].'">'.$row['chck3'].'</option>';
        echo '<option value="'.$row['chck4'].'">'.$row['chck4'].'</option>';
        echo '<option value="'.$row['chck5'].'">'.$row['chck5'].'</option>';
        echo '<option value="'.$row['chck6'].'">'.$row['chck6'].'</option>';
        echo '<option value="'.$row['chck7'].'">'.$row['chck7'].'</option>'; 
        echo '<option value="'.$row['chck8'].'">'.$row['chck8'].'</option>'; 
    }
     
   
    
      elseif($row['chck8']==NULL&& $row['chck7']!=NULL && $row['chck6']!=NULL && $row['chck5']!=NULL && $row['chck4']!=NULL && $row['chck3']!=NULL && $row['chck2']!=NULL && $row['chck1']!=NULL)
    {
	echo '<option value="'.$row['chck1'].'">'.$row['chck1'].'</option>'; 
        echo '<option value="'.$row['chck2'].'">'.$row['chck2'].'</option>';
        echo '<option value="'.$row['chck3'].'">'.$row['chck3'].'</option>';
        echo '<option value="'.$row['chck4'].'">'.$row['chck4'].'</option>';
        echo '<option value="'.$row['chck5'].'">'.$row['chck5'].'</option>';
        echo '<option value="'.$row['chck6'].'">'.$row['chck6'].'</option>';
        echo '<option value="'.$row['chck7'].'">'.$row['chck7'].'</option>'; 
    } 
  elseif($row['chck8']==NULL && $row['chck7']==NULL && $row['chck6']!=NULL && $row['chck5']!=NULL && $row['chck4']!=NULL && $row['chck3']!=NULL && $row['chck2']!=NULL && $row['chck1']!=NULL)
    {
	echo '<option value="'.$row['chck1'].'">'.$row['chck1'].'</option>';  
        echo '<option value="'.$row['chck2'].'">'.$row['chck2'].'</option>';
        echo '<option value="'.$row['chck3'].'">'.$row['chck3'].'</option>';
        echo '<option value="'.$row['chck4'].'">'.$row['chck4'].'</option>';
        echo '<option value="'.$row['chck5'].'">'.$row['chck5'].'</option>';
        echo '<option value="'.$row['chck6'].'">'.$row['chck6'].'</option>';
       
    }  
      elseif($row['chck8']==NULL && $row['chck7']==NULL && $row['chck6']==NULL && $row['chck5']!=NULL && $row['chck4']!=NULL && $row['chck3']!=NULL && $row['chck2']!=NULL && $row['chck1']!=NULL)
    {
	echo '<option value="'.$row['chck1'].'">'.$row['chck1'].'</option>'; 
        echo '<option value="'.$row['chck2'].'">'.$row['chck2'].'</option>';
        echo '<option value="'.$row['chck3'].'">'.$row['chck3'].'</option>';
        echo '<option value="'.$row['chck4'].'">'.$row['chck4'].'</option>'; 
        echo '<option value="'.$row['chck5'].'">'.$row['chck5'].'</option>'; 
     
        
    } 
     elseif($row['chck8']==NULL && $row['chck7']==NULL && $row['chck6']==NULL && $row['chck5']==NULL&& $row['chck4']!=NULL && $row['chck3']!=NULL && $row['chck2']!=NULL && $row['chck1']!=NULL )
    {
	echo '<option value="'.$row['chck1'].'">'.$row['chck1'].'</option>'; 
        echo '<option value="'.$row['chck2'].'">'.$row['chck2'].'</option>';
        echo '<option value="'.$row['chck3'].'">'.$row['chck3'].'</option>';
        echo '<option value="'.$row['chck4'].'">'.$row['chck4'].'</option>';
       
       
    }
        elseif($row['chck8']==NULL && $row['chck7']==NULL && $row['chck6']==NULL && $row['chck5']==NULL && $row['chck4']==NULL && $row['chck3']!=NULL && $row['chck2']!=NULL && $row['chck1']!=NULL )
    {
	echo '<option value="'.$row['chck1'].'">'.$row['chck1'].'</option>'; 
        echo '<option value="'.$row['chck2'].'">'.$row['chck2'].'</option>';
        echo '<option value="'.$row['chck3'].'">'.$row['chck3'].'</option>';
         
       
       
    }
       
  
      elseif($row['chck8']==NULL && $row['chck7']==NULL && $row['chck6']==NULL && $row['chck5']==NULL && $row['chck4']==NULL  && $row['chck3']==NULL  && $row['chck2']!=NULL  && $row['chck1']!=NULL )
    {
	echo '<option value="'.$row['chck1'].'">'.$row['chck1'].'</option>'; 
        echo '<option value="'.$row['chck2'].'">'.$row['chck2'].'</option>';
      
        
       
       
    } 
  
              elseif($row['chck8']==NULL && $row['chck7']==NULL && $row['chck6']==NULL && $row['chck5']==NULL && $row['chck4']==NULL  && $row['chck3']==NULL && $row['chck2']==NULL && $row['chck1']!=NULL )
    {
	echo '<option value="'.$row['chck1'].'">'.$row['chck1'].'</option>'; 
        
      
        
       
    }
        
}




  
