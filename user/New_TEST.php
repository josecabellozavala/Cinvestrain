<?php
// Evitar los warnings the variables no definidas!!!
$err = isset($_GET['error']) ? $_GET['error'] : null ;

?>
 



<html>
    <head>
        <meta charset="UTF-8">
            <title>Strain Collection</title>

        <link rel="stylesheet" href="css/layout.css" type="text/css" media="screen">
        <link rel="stylesheet" href="css/menu.css" type="text/css" media="screen">
          <link rel="stylesheet" href="estilos/index_style_1.css">
   
    <link rel="stylesheet" href="estilos/menu.css" type="text/css" />
    <link rel="stylesheet" href="estilos/menudeslizante.css"> 
    </head>
    <body>
          <script type="text/javascript">
        function enviar(destino)
        {
            document.formulario.action=destino;
            document.formulario.submit(); 
        }
        
    </script>
    
      <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <center>
        <table border="2" bgcolor="yellow" >
       <tr align="center">
        <td>Buscar organismo</td>
        <td><input type="text" name="bu" ></td>
        <td><input type="submit" name="submit" value="buscar" align="center"></td><br>
       </tr>
        </table>
            </center>
    </form>

        
       <div class="container">

            <ul id="nav">
                <li><a href="#"><img src="images/home.png" /> Inicio</a></li>
                <li><a href="#"><span><img src="images/top1.png" />Calendario </span></a>
                    <div class="subs">
                        <div class="col">
                            <ul>
                                <li><a href="#"><img src="images/bub.png" /> Link 1</a></li>
                                <li><a href="#"><img src="images/bub.png" /> Link 2</a></li>
                                <li><a href="#"><img src="images/bub.png" /> Link 3</a></li>
                                <li><a href="#"><img src="images/bub.png" /> Link 4</a></li>
                                <li><a href="#"><span><img src="images/top3.png" /> Sublinks</span></a>
                                    <div class="subs">
                                        <div class="col">
                                            <ul>
                                                <li><a href="#"><img src="images/bub.png" /> Link 41</a></li>
                                                <li><a href="#"><img src="images/bub.png" /> Link 42</a></li>
                                                <li><a href="#"><img src="images/bub.png" /> Link 43</a></li>
                                                <li><a href="#"><img src="images/bub.png" /> Link 44</a></li>
                                                <li><a href="#"><img src="images/bub.png" /> Link 45</a></li>
                                            </ul>
                                        </div>
                                        <div class="col">
                                            <ul>
                                                <li><a href="#"><img src="images/bub.png" /> Link 46</a></li>
                                                <li><a href="#"><img src="images/bub.png" /> Link 47</a></li>
                                                <li><a href="#"><img src="images/bub.png" /> Link 48</a></li>
                                                <li><a href="#"><img src="images/bub.png" /> Link 49</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="col">
                            <ul>
                                <li><a href="#"><img src="images/bub.png" /> Link 6</a></li>
                                <li><a href="#"><img src="images/bub.png" /> Link 7</a></li>
                                <li><a href="#"><img src="images/bub.png" /> Link 8</a></li>
                                <li><a href="#"><img src="images/bub.png" /> Link 9</a></li>
                                <li><a href="#"><img src="images/bub.png" /> Link 10</a></li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li><a href="#"><span><img src="images/top2.png" /> Documentos</span></a>
                    <div class="subs">
                        <div class="col">
                            <ul>
                                <li><a href="#"><img src="images/bub.png" /> Link 1</a></li>
                                <li><a href="#"><img src="images/bub.png" /> Link 2</a></li>
                                <li><a href="#"><img src="images/bub.png" /> Link 3</a></li>
                                <li><a href="#"><img src="images/bub.png" /> Link 4</a></li>
                                <li><a href="#"><img src="images/bub.png" /> Link 5</a></li>
                            </ul>
                        </div>
                        <div class="col">
                            <ul>
                                <li><a href="#"><img src="images/bub.png" /> Link 6</a></li>
                                <li><a href="#"><img src="images/bub.png" /> Link 7</a></li>
                                <li><a href="#"><img src="images/bub.png" /> Link 8</a></li>
                                <li><a href="#"><img src="images/bub.png" /> Link 9</a></li>
                                <li><a href="#"><img src="images/bub.png" /> Link 10</a></li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li><a href="#"><img src="images/top3.png" /> Informacion</a></li>
                <li><a href="#"><img src="images/top4.png" /> Notas</a></li>
                <li><a href="#"><img src="images/top5.png" /> Contacto</a></li>
                
            </ul>
           
                 
           
                 <h1 align="center"> Wellcome to Strain Collection    
             
               </h1>
       <textarea  align="center" rows="15"  cols="120" name="txtdes"  />Este espacio esta destinado para texto de introducción  al sistema
         
      </textarea>
      
   
     
    
                
                    
                    
        
         
            

    <form name="formulario"  method="post" id="desdeotro3" >
    
    

    
            

   <div style="float:right; width: 45%" align="center">



          <td colspan="2">
                   
                <input type="button" name="main" value="Data" onclick="enviar('MainSelected_manager.php');"/> 
  
</td>

  </div>
    
    
    <div style="clear: both"></div>
  
 
<br />


         
<script src="jquery-latest.js"></script>
<script type="text/JavaScript">
    
//<!--function MandaFormulario(form) 
//{     
//     
//    
//
//        bus=this.document.entra.busqueda.value;
//
//      alert(bus);
//      
//      
//document.getElementById('desdeotro4').style.display='block';
//document.getElementById('desdeotro0').style.display='block';
//document.getElementById('desdeotro3').style.display='none';
//      
//             
//        
//          
//}
//    -->
      

      
   
        
  


//Cerramos el Script
</script>

</form>
     
    
     <form name="cont" id="desdeotro4" style="display:none;" >
<div class="wrapper" align="left">  
	 <h1>Data</h1>  
	        <ul class="dropdown">  
	            <li class="active" >More information: <span>Organism</span></li>  
                 
	            <li class="last"><a href="#">More...</a></li>  
	        </ul>  
	    </div> 
        
        <table border="2" align="center" bgcolor='#E1E1A8'>
          <tr align="center">
      <td colspan="2">
          <input type="radio" name="prin" id="prin_0" value="Organism" onclick="mostrarReferencia2();"/>Organism
      </td>
      </tr>
      
          <tr align="center">
      <td colspan="2">
          <input type="radio" name="prin" id="prin_1" value="Macroscopic Morphology" onclick="mostrarReferencia();"/>Macroscopic Morphology
      </td>
      </tr>

           <tr align="center">
      <td colspan="2">
          <input type="radio" name="prin"  id="prin_2" value="Microscopic Morphology" onclick="mostrarReferencia1();"/>Microscopic Morphology

     </td>
     </tr>
        
     <tr align="center">
      <td colspan="2">
          <input type="radio" name="prin" id="prin_3" value="Growth characteristics" onclick="mostrarReferencia3();"/>Growth characteristic

     </td>
     </tr>
        </table>
        
        
        
        
        </form>
   
       <?php


if(isset($_POST['submit']))
 {
    		$cod=$_POST["bu"];
                   
                
		
		$sql="select * from organism_information where Alias='$cod'";
		$cs=mysql_query($sql,$cn);
                
                 echo"<center>
<table border='3' bgcolor='#E1E1A8'>
<tr>
<td>Org_ID</td>
<td>Alias</td>
<td>Isolated_by</td>
<td>Date_of_Isolation</td>
<td>Origin</td>
<td>Additional_Comments</td>
</tr>";
		while($resul=mysql_fetch_array($cs)){
			$var=$resul[0];
			$var1=$resul[1];
			$var2=$resul[2];
			$var3=$resul[3];
			$var4=$resul[4];
                        $var5=$resul[5];
                        
			echo "<tr>
<td>$var</td>
<td>$var1</td>
<td>$var2</td>
<td>$var3</td>
<td>$var4</td>
    <td>$var5</td>
</tr>";
			
			}
                      
			
echo "</table>
</center>";

      $sql="select * from Macroscopic_Morphology where Org_ID='$var'";
		$cs=mysql_query($sql,$cn);
		echo"<center>
<table border='3' bgcolor='#E1E1A8'>
<br>
<br>
<tr>
<td>Macroscopic_Morphology_ID</td>
<td>Org_ID</td>
<td>Medium_ID </td>
<td>Temperature</td>
<td>Agitation</td>
<td>Age</td>
<td>Size</td>
<td>Surface</td>
<td>Color</td>
<td>Photo_ID</td>
</tr>";
		while($resul=mysql_fetch_array($cs)){
			$var6=$resul[0];
			$var7=$resul[1];
			$var8=$resul[2];
			$var9=$resul[3];
			$var10=$resul[4];
                        $var11=$resul[5];
                        $var12=$resul[6];
                        $var13=$resul[7];
                        $var14=$resul[8];
                        $var15=$resul[9];
			echo "<tr>
<td>$var6</td>
<td>$var7</td>
<td>$var8</td>
<td>$var9</td>
<td>$var10</td>
<td>$var11</td>
    <td>$var12</td>
        <td>$var13</td>
            <td>$var14</td>
                <td>$var15</td>
</tr>";
			}
			
			echo "</table>
</center>";



$sql="select * from Microscopic_Morphology where Org_ID='$var' ";
		$cs=mysql_query($sql,$cn);
		echo"<center>
<table border='3' bgcolor='#E1E1A8'>
<tr>
<td>Microscopic_Morphology_ID</td>
<td>Org_ID</td>
<td>Medium_ID </td>
<td>Temperature</td>
<td>Agitation</td>
<td>Age</td>
<td>Axis_long</td>
<td>Axis_short</td>
<td>Motility</td>
<td>Aggregates</td>
<td>Biofilm_formation</td>
<td>Gram_test</td>
<td>Photo_ID</td>
</tr>";
                
                "<br>";
                        "<br>";
		while($resul=mysql_fetch_array($cs)){
			$var16=$resul[0];
			$var17=$resul[1];
			$var18=$resul[2];
			$var19=$resul[3];
			$var20=$resul[4];
                        $var21=$resul[5];
                        $var22=$resul[6];
                        $var23=$resul[7];
                        $var24=$resul[8];
                        $var25=$resul[9];
                        $var26=$resul[10];
                        $var27=$resul[11];
                        $var28=$resul[12];
			echo "<tr>
<td>$var16</td>
<td>$var17</td>
<td>$var18</td>
<td>$var19</td>
<td>$var20</td>
<td>$var21</td>
    <td>$var22</td>
        <td>$var23</td>
            <td>$var24</td>
                <td>$var25</td>
                      <td>$var26</td>
                            <td>$var27</td>
                                  <td>$var28</td>
</tr>";
			}
			
			echo "</table>
</center>";
                        
                        "<br>";
                        "<br>";
                        $sql="select * from Growth_characteristics where Org_ID='$var'";
		$cs=mysql_query($sql,$cn);
		echo"<center>
<table border='3' bgcolor='#E1E1A8'>
<tr>
<td>Growth_characteristics_ID</td>
<td>Org_ID</td>
<td>Medium_solid </td>
<td>Temperature_solid</td>
<td>Time_solid</td>
<td>Medium_liquid</td>
<td>Temperature_liquid</td>
<td>Agitation_time</td>
<td>Time_liquid</td>
<td>pH_initial</td>
<td>pH_final</td>
<td>OD600_initial</td>
<td>OD600_final</td>
<td>Extra_parameters</td>
<td>Kinetics</td>
</tr>";
		while($resul=mysql_fetch_array($cs)){
			$var29=$resul[0];
			$var30=$resul[1];
			$var31=$resul[2];
			$var32=$resul[3];
			$var33=$resul[4];
                        $var34=$resul[5];
                        $var35=$resul[6];
                        $var36=$resul[7];
                        $var37=$resul[8];
                        $var38=$resul[9];
                        $var39=$resul[10];
                        $var40=$resul[11];
                        $var41=$resul[12];
                         $var42=$resul[13];
                        $var43=$resul[14];
			echo "<tr>
<td>$var29</td>
<td>$var30</td>
<td>$var31</td>
<td>$var32</td>
<td>$var33</td>
<td>$var34</td>
    <td>$var35</td>
        <td>$var36</td>
            <td>$var37</td>
                <td>$var38</td>
                      <td>$var39</td>
                            <td>$var40</td>
                                  <td>$var41</td>
                                       <td>$var42</td>
                                  <td>$var43</td>
</tr>";
			}
			
			echo "</table>
</center>";
"<br>";
                        "<br>";
?>
<script type="text/JavaScript">
    
    document.getElementById('desdeotro4').style.display='block';
document.getElementById('desdeotro0').style.display='block';
document.getElementById('desdeotro3').style.display='none';
      
    </script>
                    
      <?php

 }
 
        ?>   
    

         
            
    
    

    
    
    <div style="clear: both"></div>
    
    
    <script type="text/javascript">
    
 
 <!--
function mostrarReferencia(){
//Si la opcion con id Conocido_1 (dentro del documento > formulario con name fcontacto >     y a la vez dentro del array de Conocido) esta activada
if (document.cont.prin[1].checked == true) {
//muestra (cambiando la propiedad display del estilo) el div con id 'desdeotro'
document.getElementById('desdeotro').style.display='block';
document.getElementById('desdeotro0').style.display='none';
document.getElementById('desdeotro1').style.display='none';
document.getElementById('desdeotro2').style.display='none';
//por el contrario, si no esta seleccionada
} else {
//oculta el div con id 'desdeotro'
document.getElementById('desdeotro').style.display='none';
}
}
-->
    </script>
    
        
    <script type="text/javascript">
    
 
 
 function mostrarReferencia1(){
//Si la opcion con id Conocido_1 (dentro del documento > formulario con name fcontacto >     y a la vez dentro del array de Conocido) esta activada
if (document.cont.prin[2].checked == true) {
//muestra (cambiando la propiedad display del estilo) el div con id 'desdeotro'
document.getElementById('desdeotro1').style.display='block';
document.getElementById('desdeotro0').style.display='none';
document.getElementById('desdeotro').style.display='none';
document.getElementById('desdeotro2').style.display='none';
//por el contrario, si no esta seleccionada
} else {
//oculta el div con id 'desdeotro'
document.getElementById('desdeotro1').style.display='none';

}
}


function mostrarReferencia2(){
//Si la opcion con id Conocido_1 (dentro del documento > formulario con name fcontacto >     y a la vez dentro del array de Conocido) esta activada
if (document.cont.prin[0].checked == true) {
//muestra (cambiando la propiedad display del estilo) el div con id 'desdeotro'
document.getElementById('desdeotro0').style.display='block';
document.getElementById('desdeotro1').style.display='none';
document.getElementById('desdeotro').style.display='none';
document.getElementById('desdeotro2').style.display='none';
//por el contrario, si no esta seleccionada
} else {
//oculta el div con id 'desdeotro'
document.getElementById('desdeotro0').style.display='none';

}
}


function mostrarReferencia3(){
//Si la opcion con id Conocido_1 (dentro del documento > formulario con name fcontacto >     y a la vez dentro del array de Conocido) esta activada
if (document.cont.prin[3].checked == true) {
//muestra (cambiando la propiedad display del estilo) el div con id 'desdeotro'
document.getElementById('desdeotro2').style.display='block';
document.getElementById('desdeotro1').style.display='none';
document.getElementById('desdeotro').style.display='none';
document.getElementById('desdeotro0').style.display='none';
//por el contrario, si no esta seleccionada
} else {
//oculta el div con id 'desdeotro'
document.getElementById('desdeotro2').style.display='none';

}
}
    </script>
     
       
 

               
<br />



      <form name="Organism_Information" method="POST" action="" id="desdeotro0" style="display:none;">
   
     <table border="2" bgcolor="#32DF00" align="center"> 
    <tr>
                <td>* Org_ID</td>
                 <td><input type="text" name="org" value="<?php echo $var?>" /></td>
            </tr>
            <br>
         
            <tr>
                <td>* Alias</td>
                <td><input type="text" name="alias" value="<?php echo $var1?>"/></td>              
            </tr>
            <br>
           
            <tr>
                <td>* Isolated_by</td>
                <td><input type="text" name="insolated" value="<?php echo $var2?>"/></td>        
            </tr>
            <br>
            
             <tr>
                <td>* Date_of_Isolation</td>
                <td><input type="date" name="dateofinsol" value="<?php echo $var3?>"/></td>        
            </tr>
            <br>
            
            <tr>
                <td>* Origin</td>
                <td><input type="text" name="ori" value="<?php echo $var4?>"/></td>
            </tr>
          <br>
          
             <tr>
                 <td>Comments</td>
                <td><textarea rows="10"  cols="30" name="com" value="<?php echo $var5?>"/>
                </textarea>
                </td>
            </tr>
                   <tr align="center" >
                <td colspan="2">
                    <input type="button" name="btn1" value="Upload"/>
                    </td>
  </tr>
                
              <tr align="center">
      <td colspan="2">
          <input type="submit" name="btn1" value="Detele"/>
   
</td>
</tr>
     </table>
    
      </form>
    
    
     <form name="Macroscopic_Morphology" method="POST" action="" id="desdeotro" style="display:none;">
             
            
                  
         <table border="2" bgcolor="#E1E1A8" align="center">
            
             
             
          
              <tr >
                <td>* Macroscopic Morphology ID</td>
                <td><input  class="cajas" type="text" name="mac" value="<?php echo $var6?>" /></td>              
            </tr>
            <br>
            <tr >
                <td>* Org ID</td>
                <td><input class="cajas" type="text" name="org" value="<?php echo $var7?>" /></td>              
            </tr>
            <br>
            <tr>
                <td>*Medium ID </td>
                <td><input  class="cajas" type="text" name="medi" value="<?php echo $var8?>" /></td>        
            </tr>
            <br>
             <tr>
                <td>* Temperature</td>
                <td><input  class="cajas" type="text" name="tempera" value="<?php echo $var9?>" /></td>        
            </tr>
            <br>
            <tr>
                <td>Agitation</td>
                <td><input class="cajas" type="text" name="agitacion" value="<?php echo $var10?>" /></td>
            </tr>
          <br>
             <tr>
                 <td>Age</td>
                 <td><input class="cajas" type="date" name="age" value="<?php echo $var11?>" /></td>
            </tr>
            <br>
             <tr>
                 <td>*Size</td>
                <td><input  class="cajas" type="text" name="size" value="<?php echo $var12?>" /></td>
            </tr>
            <br>
             <tr>
                 <td>Surface</td>
                <td><input class="cajas" type="text" name="surface" value="<?php echo $var13?>" /></td>
            </tr>
            <br>
             <tr>
                 <td>Color</td>
                <td><input   type="color" name="color" value="<?php echo $var14?>" /></td>
            </tr>
            <br>
             <tr>
                 <td>Photo</td>
                <td><input class="cajas" type="text" name="foto" value="<?php echo $var15?>" /></td>
            </tr>
           
            
                   <tr align="center" >
                <td colspan="2">
                    <input type="button" name="btn1" value="Upload"/>
                    </td>
  </tr>
                
              <tr align="center">
      <td colspan="2">
          <input type="submit" name="btn1" value="Detele"/>
   
</td>
</tr>
            
         </table>
             
     
       


               </form>
            
    
    
     <form name="Microscopic_Morphology" method="POST" action="" id="desdeotro1" style="display:none;">
         <table border="2" bgcolor="#93BF96" align="center">
            
             
              <tr>
                <td>* Microscopic Morphology ID</td>
                <td><input type="text" name="mic" value="<?php echo $var16?>" /></td>              
            </tr>
            <br>
            <tr>
                <td>* Org ID</td>
                <td><input type="text" name="org" value="<?php echo $var17?>" /></td>              
            </tr>
            <br>
            <tr>
                <td>*Medium ID </td>
                <td><input type="text" name="medi" value="<?php echo $var18?>" /></td>        
            </tr>
            <br>
             <tr>
                <td>* Temperature</td>
                <td><input type="text" name="tempera" value="<?php echo $var19?>" /></td>        
            </tr>
            <br>
            <tr>
                <td>Agitation</td>
                <td><input type="text" name="agitacion" value="<?php echo $var20?>" /></td>
            </tr>
            <br>
          
             <tr>
                 <td>* Age</td>
                 <td><input type="datetime" name="age" value="<?php echo $var21?>" /></td>
            </tr>
            <br>
             <tr>
                 <td>*Axis long</td>
                <td><input type="text" name="axis_long" value="<?php echo $var22?>" /></td>
            </tr>
            <br>
             <tr>
                 <td>*Axis short</td>
                <td><input type="text" name="axis_short" value="<?php echo $var23?>" /></td>
            </tr>
            <br>
             <tr>
                 <td> Motility</td>
                <td><select name="molity">
                <option>No</option>
                <option <?php echo $var24?> >Yes</option>
                </select></td>
                 
           
            </tr>
            <br>
            <tr>
                 <td>Aggregates</td>
                <td><select name="aggregates">
                <option>No</option>
                <option <?php echo $var25?>>Yes</option>
                </select></td>
                
               
            </tr>
            <br>
             <tr>
                 
                 
                  <td>Biofilm formation</td>
                <td><select name="biofilm">
                <option>No</option>
                <option <?php echo $var26?>>Yes</option>
                </select></td>
                 
            </tr>
            <br>
             <tr>
 
                  <td>Gram test</td>
                <td><select name="gram">
                <option>Gram -</option>
                <option <?php echo $var27?>>Gram +</option>
                </select></td>
            </tr>
            <br>
             <tr>
                 <td>Photo ID</td>
                <td><input type="text" name="foto" value="<?php echo $var28?>" /></td>
            </tr>
                   <tr align="center" >
                <td colspan="2">
                    <input type="button" name="btn1" value="Upload"/>
                    </td>
  </tr>
                
              <tr align="center">
      <td colspan="2">
          <input type="submit" name="btn1" value="Detele"/>
   
</td>
</tr>
            
 <br>
            </table>
               </form>
      
         <form name="Growth_characteristics" method="POST" action="" id="desdeotro2" style="display:none;">
             
             
           <div style="float:left; width: 45%" align="center">
                  
         <table border="2" bgcolor="#C0E0DA" align="center">
            
            

            <tr>
                <td>* Growth characteristics ID</td>
                <td><input type="text" name="gro" value="<?php echo $var29?>"></td>              
            </tr>
            <br>
            <tr>
                <td>* Org ID</td>
                <td><input type="text" name="org" value="<?php echo $var30?>"></td>              
            </tr>
            <br>
            <tr>
                <td>*Medium solid </td>
                <td><input type="text" name="medi" value="<?php echo $var31?>"></td>        
            </tr>
            <br>
             <tr>
                <td>* Temperature solid</td>
                <td><input type="text" name="tempera" value="<?php echo $var32?>"></td>        
            </tr>
            <br>
            <tr>
                <td>* Time solid</td>
                <td><input type="time" name="tiempo" value="<?php echo $var33?>"></td>
            </tr>
<br>          
             <tr>
                 <td>* Medium liquid</td>
                 <td><input type="text" name="medium" value="<?php echo $var34?>"></td>
            </tr>
            <br>
             <tr>
                 <td>*Temperature liquid</td>
                <td><input type="text" name="temp_liq" value="<?php echo $var35?>"></td>
            </tr>
            <br>
             <tr>
                 <td>*Agitation time</td>
                <td><input type="time" name="agitation" value="<?php echo $var36?>"></td>
            </tr>
            <br>
         </table>
              </div>

                     <div style="float:right; width: 45%" align="center">

                
            
       
               <table border="2" bgcolor="#C0E0DA" align="center">
            
               <tr>
                 <td>*Time liquid</td>
                <td><input type="time" name="tim_liq" value="<?php echo $var37?>"></td>
            </tr>
            
<br>            
            
            
            <tr>
                 <td>*pH initial</td>
                <td><input type="text" name="ph_i" value="<?php echo $var38?>"></td>
            </tr>
           <br>
            <tr>
                 <td>*pH final</td>
                <td><input type="text" name="ph_f" value="<?php echo $var39?>"></td>
            </tr>
            <br>
            <tr>
                 <td>*OD600 initial</td>
                <td><input type="text" name="od_i" value="<?php echo $var40?>"></td>
            </tr>
            <br>
            <tr>
                 <td>*OD600 final</td>
                <td><input type="text" name="od_f" value="<?php echo $var41?>"></td>
            </tr>
            <br>
             <tr>
                 <td>Extra parameters</td>
                <td><input type="text" name="p_extra" value="<?php echo $var42?>"></td>
            </tr>
            <br>
             <tr>
                 <td>Kinetics</td>
                <td><input type="text" name="kinetics" value="<?php echo $var43?>"></td>
            </tr>
                   <tr align="center" >
                <td colspan="2">
                    <input type="button" name="btn1" value="Upload"/>
                    </td>
  </tr>
                
              <tr align="center">
      <td colspan="2">
          <input type="submit" name="btn1" value="Detele"/>
   
</td>
</tr>
            
            <br>
            
            </table>
       
               </div>
    
    
    <div style="clear: both"></div>
         </form>
 </div>





    
<br />
 

       
         
  
     </div>
           

    

        <footer>
            <h2>Datos de los organismos</h2>
            <a href="http://www.script-tutorials.com/css3-metal-menu-with-icons" class="stuts">Paginas relacionadas<span>Strain Collection</span></a>
        </footer>
        
    </body>
</html>
