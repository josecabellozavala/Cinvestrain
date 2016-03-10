<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/CustomCarousel.css">
  <script src="js/bootstrap.min.js"></script>


<?php 
function cabecera ( $titulo ){ 
?> 
<head> 
<title> <? echo $titulo ; ?> </title> 
</head> 
<!-- C�digo HTML de la cabecera --> 
<?php
} 
function pie (){ 
?> 
<!-- C�digo HTML del pi� de p�gina -->
<div class="container">
				<div class="row">
					<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
						<p>Copyright 2015</p>
					</div>
					<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
						<h4>Acerca de</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua.</p>
					</div>
					<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
						<ul>
							<li> <a href="#"> Facebook </a> </li>
							<li> <a href="#"> Twitter </a> </li>
							<li> <a href="#"> YouTube </a> </li>
						</ul>
					</div>
				</div>
			</div>
<?php 
} 
?> 


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
.sombra4 {
color: #69D2E7;
text-shadow:
4px 4px 0px #E0E4CC,
9px 8px 0px #F38630;
font-size: 80px;
font-family: 'Lobster', cursive;
}
.fondoLetras{
    position:absolute; 
    left: 10%;
    float: left;
    
    width:200px;
    height:10px;
    background-color: black;
    
}
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
    top:100px;
    left:0px;
    width:100%;
}
#logo
{
    width:100%;
    height:100px; 
      position: absolute;
    background-color: #269abc;
    left:0px;
    top:0px;
    float: left; 
     
    
}
#imLo
{
     width:400px;
    height:90px; 
    position: absolute;
     background: url(images/CinveS.png);
      background-size: 400px 90px;
    background-repeat: no-repeat;
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
    <div id="fondoLetras"></div>
<div id="logo">
    <div id="imLo">
    
    </div>
   
                          
            <center>    <span class='sombra4'>CinveStrain</span>  </center> 
             
             
        </div>
 <div id="fechaL">
       <?php
$fecha_actual = localtime(time(), 1);
$anyo_actual  = $fecha_actual["tm_year"] + 1900;
$mes_actual   = $fecha_actual["tm_mon"] + 1;
$dia_actual   = $fecha_actual["tm_mday"];
print "Today is $mes_actual/$dia_actual/$anyo_actual"; 
?>
      </div> 
    </div>
<div id="menu">
    <ul class="menu">
          <li class="last">&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;</li>
        <li class="last">&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;</li>
    
        <li>
            <a href='./busqueda_Ma.php' class="parent"><span >Home</span></a>
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
                 
                            
<?php   
}
?>
               
                
                
                
                
             
                                                 
                    <?php 
if($consul1=="Manager" || $consul1=="Supermanager" || $consul1=="User"  ){
    
     
    
    ?>
                 <li><a href="#" class="parent"><span>Samples</span></a>
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
                                     <?php 
if($consul1=="Manager" || $consul1=="Supermanager" || $consul1=="User"  ){
    
     
    
    ?>
                 <li><a href="#" class="parent"><span>Organism</span></a>
                    <div><ul>
                             <li><a href="./In_Organism.php"><span>New</span></a></li>
                            <li><a href="./importarOrganismo.php" ><span>Import Organism Information</span></a>
                                 
                        </li>
                        
                        </ul></div>
                </li>    
                     <?php
}
?>
                 <li><a href="./ApiGoogleMaps.php"><span>Image/Maps</span></a></li>
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
                 if($consul1=="Supermanager" || $consul1=="Manager" ){
                     ?>
<!--                 <li><a href="./In_Role.php" ><span>Role</span></a></li>-->
                 <li><a href="./In_Position.php" ><span>Position</span></a></li>
                 
                 <?php   
}
?>
                 
                                 <?php
                 if($consul1=="Manager" || $consul1=="Supermanager"   ){
                     ?>
                 
                 
                      <li><a href="#" class="parent"><span>Materials</span></a>
                     <div>
                         <ul>
                             <li><a href="./In_Strain.php"><span>Strain</span></a></li>
                             <li><a href="./In_Plasmid.php"><span> Plasmid</span></a></li>
                             <li><a href="./In_Reagent.php"><span>Reagent</span></a></li>
                         </ul>
                         
                     </div> 
                 
                 </li>
                 <?php   
}
?>
                 
                            <?php
                 if($consul1=="Manager" || $consul1=="Supermanager"   ){
                     ?>
                 
                 
                      <li><a href="#" class="parent"><span>Import</span></a>
                     <div>
                         <ul>
                             <li><a href="./importar.php"><span>Assay Type</span></a></li>
                             <li><a href="./importar_Community.php"><span>Community type</span></a></li>
                             <li><a href="./importar_soil.php"><span>Soil type</span></a></li>
                             <li><a href="./importar_Host.php"><span>Origin</span></a></li>
                             <li><a href="./importar_Cepa.php"><span>Strain</span></a></li>
                         </ul>
                         
                     </div> 
                 
                 </li>
                 <?php   
}
?>
                <li><a href="./CambiarPassword.php"><span>Change password/Nick</span></a></li>
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
                        <li><a href="Down_document/Manual de usuario_Cinvestrain.pdf" ><span>Manual</span></a>
                 
                        </li>
                        <li><a href="./Organism_Information_Template.xlsx"><span>Download excel template</span></a></li>
                        <li><a href="./Soil_type.xlsx"><span>template soil type</span></a></li>
                        <li><a href="./Community_Type.xlsx"><span>template Community type</span></a></li>
                        <li><a href="./Assay_Type.xlsx"><span>template assay type</span></a></li>
                        
                <li><a href="#" class="parent"><span>Protocols</span></a>
                     <div>
                         <ul>
                             <li><a href="./In_Protocolo.php"><span>ALL</span></a></li>
                             
                         </ul>
                         
                     </div> 
                 
                 </li>
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
 
         <li class="last"><span><?php echo "" . $_SESSION['user']."  (".$consul1.")"?></span></li>
         <li class="last"><span><?php echo "Lab: ".$consul2 ;?></span></li>
         <li class="last"><a href="user/log_out.php"><span>Salir</span></a></li>
    </ul>
</div>


</body>
</html>