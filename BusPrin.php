<?php

include('menu_prin.php');
?>
<style>
    #categoria
    {
        
        height: 100%;
    }
    .btnRojo
    {
        
        font-size:16px;
        font-family:Verdana,Helvetica;
        font-weight:bold;
        color:white;
        background:rgb(255,90,95);
        border:0px;
        
        width:130px;
        height:60px;
    }
</style>

<script type="text/javascript">
  
function busqueda()
{ 
     
  
      
     
    
    
    
    
    var cues=document.getElementById("categoria") ;  
      
    cues.innerHTML="<iframe id='mainContent' name='mainContent' src='./BuscaOrganismo.php' width='100%' height='100%' frameborder='0' style='margin: 0px; height: 100%' scrolling='no' onload='resizeMe(this)'></iframe>";
      


 
}
    
function busquedaAvanzada()
{ 
     
  
      
     
    
    
    
    
    var cues=document.getElementById("categoria") ;  
      
    cues.innerHTML="<iframe id='mainContent' name='mainContent' src='./Busqueda_Avanzada.php' width='100%' height='100%' frameborder='0' style='margin: 0px; height: 100%' scrolling='no' onload='resizeMe(this)'></iframe>";
      


 
}
</script>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Search</title>
         <link rel="stylesheet" href="./Estilos_Proyecto.css" type="text/css" />
           <script language="javascript" type="text/javascript" src="Codigo_Proyecto.js" >
       
           </script>
        
    

    </head>
    <body >
     
       <br>
         <br>
           <br>
             <br>
               <br>
                <br>
             <br>
               <br>
        <div id="inter">
       <center> <button align="left"  class="btnRojo"id="Inbus" onclick="busqueda()" >
                     Organism
                     </button> <h1><funt>Search</funt></h1>
     
    <button align="right" class="btnRojo" id="InbusAvanza" onclick="busquedaAvanzada()" >
                     Advanced Search
                     </button></center>
                 </div>
        
       

<div id="categoria">
     
           
   </div>  
        
      
           
 

    </body>
</html>

