


<?php
include("bdConnection.php");
// Evitar los warnings the variables no definidas!!!
$err = isset($_GET['error']) ? $_GET['error'] : null ;

require'class/sessions.php';
$objses = new Sessions();
$objses->init();

$user = isset($_SESSION['user']) ? $_SESSION['user'] : null ;

$pu="hi";
if($pu=="hi") {
$sql="SELECT Type FROM user, role WHERE user.Name = '$user' AND user.Role = role.Type";		
		$cs=mysql_query($sql,$cn);
                
		while($resul=mysql_fetch_array($cs)){
			$consul1=$resul[0];
			
			
			}

                        
                        }
                        
            $varentra="entra" ;
            if( $varentra=="entra" ){
                
                                        
 $sql1="SELECT lab.Name FROM user,lab WHERE user.Name ='$user' AND user.lab=lab.id_lab";		
		$cs1=mysql_query($sql1,$cn);
                
		while($resul=mysql_fetch_array($cs1)){
			$consul2=$resul[0];
			
			
			}
            }
?>




<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <title>Menu</title>
    <link type="text/css" href="menu.css" rel="stylesheet" />
    <script type="text/javascript" src="jquery.js"></script>
    <script type="text/javascript" src="menu.js"></script>
</head>
<body>

<style type="text/css">

body { }
div#copyright {
    font:18px 'Trebuchet MS';
    color:#FFF;
    text-indent:40px;
    padding:300px 0 0 0;
}
div#copyright a { color:#0080ff; }
div#copyright a:hover { color:#F00000; }
div#menu {
    top:80px;
    left:0px;
    width:100%;
}
#logo
{
    width:100%;
    height:80px; 
      position: absolute;
    background-color: #269abc;
    left:0px;
    top:0px;
    float: left; 
     
    
}
#imLo
{
     width:30%;
    height:70px; 
    position: absolute;
     background: url(images/logo.gif) center no-repeat ;
     left:0px;
    top:1.75%;
    float: left; 
}
#fechaL
{
    
     width:30%;
    height:70px; 
     left:80%;
     position: absolute;
    top:15px;
    float: left; 
}
</style>

<div id="logo">
    <div id="imLo">
     
    </div>
   
                          
                 <h1 align="center"> CinveStrain    
             
             
        </div>
 <div id="fechaL">
       <?php
$fecha_actual = localtime(time(), 1);
$anyo_actual  = $fecha_actual["tm_year"] + 1900;
$mes_actual   = $fecha_actual["tm_mon"] + 1;
$dia_actual   = $fecha_actual["tm_mday"]-1;
print "Today is $mes_actual/$dia_actual/$anyo_actual"; 
?>
      </div> 
    </div>
<div id="menu">
    <ul class="menu">
          <li class="last">&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;</li>
        <li class="last">&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;</li>
    
        <li>
        <a href='./busqueda.php' class="parent"><span >Home</span></a>
    </li> 
    <li>
        <a href='./barra_bus.php' class="parent"><span >Organism</span></a>
        
        </li>
   <li>
        <a href='#' class="parent"><span >Report</span></a>
          <ul>
              <li><a href="user/reporteOrganism.php" ><span>Organism</span></a></li>
              </ul>
        </li>
        <li><a href="#" class="parent"><span>Administer</span></a>
            <div><ul>
                                     <?php 
if($consul1=="Manager" || $consul1=="Supermanager"  ){
    
     
    
    ?>
  <li><a href="#" class="parent"><span>Catalogs</span></a>
                    <div><ul>
                        <li><a href="./In_Assay.php" ><span>Assay Type</span></a>
                 
                        </li>
                        <li><a href="./In_Commu.php"><span>Community type</span></a></li>
                        <li><a href="./In_Extra.php"><span>Extraction Method</span></a></li>
                     
                        <li><a href="./In_Gene.php"><span> Gene</span></a></li>
                       
                        <li><a href="./In_Medium.php"><span>Medium</span></a></li>
                       
                        <li><a href="./In_Physio.php" ><span>Physiological state</span></a></li>
                           <li><a href="./In_Preser.php" ><span>Preservation Method</span></a>  
                        </li>
                        
                         <li><a href="./In_Seque.php" ><span> Sequencing Method</span></a>
                            
                        </li>
                         <li><a href="./In_Soil.php" ><span>Soil Type</span></a>
                            
                        </li>
                         <li><a href="./In_Storage.php" ><span>Storage</span></a>
                            
                        </li>
                        <li><a href="./In_Surface.php" ><span>Surface Morphology</span></a>
                            
                        </li>
                    </ul></div>
                </li>
                 <li><a href="#" class="parent"><span>Import</span></a>
                    <div><ul>
                            <li><a href="./importarOrganismo.php" ><span>Import Organism Information</span></a>
                 
                        </li>
                        
                        </ul></div>
                </li>
                            
<?php   
}
?>
               
                
                
                
                
                <li><a href="./In_Organism.php"><span>Organism</span></a></li>
                                                     <?php 
if($consul1=="Manager" || $consul1=="Supermanager"  ){
    
     
    
    ?>
                 <li><a href="#" class="parent"><span>Origin</span></a>
                     <div>
                         <ul>
                                <li><a href="./In_Free.php"><span>Free Living</span></a></li>
                              <li><a href="./In_Host.php"><span> Host</span></a></li>
                               <li><a href="./In_Plant.php"><span>Plant</span></a></li>
                         </ul>
                         
                     </div> 
                 
                 </li>
                 <?php
}
?>
                 <li><a href="./ApiGoogleMaps.php"><span>Maps</span></a></li>
                 <?php
                 if($consul1=="Manager" || $consul1=="Supermanager"  ){
                     ?>
    <li><a href="./In_user.php"><span>Users</span></a></li>
     
    <?php
                }
    ?>
                
               
                 <?php 
if($consul1=="Supermanager"){
    
     
    
    ?>
 <li><a href="./In_Lab.php"><span>Lab</span></a></li>
<?php   
}
?>
                <?php
                 if($consul1=="Manager" || $consul1=="Supermanager"  ){
                     ?>
                 <li><a href="./In_Role.php" ><span>Role</span></a></li>
                 <?php   
}
?>
                <li><a href="./CambiarPassword.php"><span>Change password</span></a></li>
            </ul></div>
        </li> 
        
        <li>
            <a href='#' class="parent"><span >Searches</span></a>
            <div><ul>
                        <li><a href="./Busqueda_Avanzada.php" ><span>Advanced</span></a>
                 
                        </li>
                       
                        </ul>
                        </div>
        
        </li>
        <li>
            <a href='#' class="parent"><span >Help</span></a>
            <div><ul>
                    <li><a href="./Instructions.pdf" ><span>How you can import your file</span></a>
                 
                        </li>
                        <li><a href="./Organism_Information_Template.xlsx"><span>Download excel template</span></a></li>
                        </ul>
                        </div>
            </li>
        <li class="last">&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;</li>
        <li class="last">&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;</li>
        <li class="last">&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;</li>
        <li class="last">&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;</li>
        <li class="last">&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;</li>
        <li class="last">&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;</li>
        <li class="last">&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;</li>
        <li class="last">&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;</li>
            <li class="last">&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;</li>
        <li class="last">&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;</li>
        <li class="last">&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;</li>
        
         <li class="last"><span><?php echo "Welcome, " . $_SESSION['user']."   your role is: ".$consul1?></span></li>
         <li class="last"><span><?php echo "Lab: ".$consul2 ;?></span></li>
         <li class="last"><a href="user/log_out.php"><span>Salir</span></a></li>
    </ul>
</div>


</body>
</html>