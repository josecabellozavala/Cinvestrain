
   


<?php
include("bdConnection.php");

include("menu_prin.php");


$user = isset($_SESSION['user']) ? $_SESSION['user'] : null ;

$sql1="SELECT lab.id_lab FROM user,lab WHERE user.Name ='$user' AND user.lab=lab.id_lab";		
		$cs1=mysql_query($sql1,$cn);
                
		while($resul=mysql_fetch_array($cs1)){
			$consul2=$resul[0];
                           
			}
?>
<?php


?>          

<HTML>
    <title> buscar</title>
    <head>
<link rel="stylesheet" type="text/css" href="mensajes.css" />
<STYLE>
    #tab
    {  
        background-color:  #7FCDFE;
    }
    .datagrid table {
        text-align: left; width: 50%; 
        position: absolute;
        left:30%;
    } .datagrid 
    {
        font: normal 12px/150% Arial, Helvetica, sans-serif; background: #fff; overflow: hidden;
    }
    .datagrid table td, .datagrid table th { padding: 6px 8px; }
    .datagrid table thead th {background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #009EED), color-stop(1, #0093DB) );
                             background:-moz-linear-gradient( center top, #009EED 5%, #0093DB 50% );
                             filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#009EED', endColorstr='#0093DB');
                             background-color:#009EED; color:#FFFFFF; font-size: 13px; font-weight: bold; border-left: 1px solid #0070A8; } 
    .datagrid table thead th:first-child { border: none; }
    .datagrid table tbody td { color: #00496B; border-left: 1px solid #E2EFF5;font-size: 12px;border-bottom: 1px solid #E1EEF4;font-weight: normal; }.datagrid table tbody .alt td { background: #E1EEF4; color: #00496B; }.datagrid table tbody td:first-child { border-left: none; }.datagrid table tbody tr:last-child td { border-bottom: none; }.datagrid table tfoot td div { border-top: 1px solid #006699;background: #E1EEF4;} .datagrid table tfoot td { padding: 0; font-size: 12px } .datagrid table tfoot td div{ padding: 2px; }
.Boton1{
    position: absolute;
    top:120%;
    left:30%; 
        font-size:16px;
        font-family:Verdana,Helvetica;
        font-weight:bold;
        color:white;
        background:rgb(255,90,95);
        border:0px;
   
        width:130px;
        height:30px;
       
       }    
</style>
<script src="jquery-ui-1.8.9.custom.min.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="Menu_P/styles.css" />
<script type="text/javascript" src="jquery-latest.js"></script>


<script src="jquery-latest.js"></script>
<script type="text/javascript">
    
function llenar(Form)
{


      
   var checkboxValues = "";
$('input[name="tis[]"]:checked').each(function() {
	checkboxValues += $(this).val() + ",";
});
//eliminamos la última coma.
checkboxValues = checkboxValues.substring(0, checkboxValues.length-1);
//si todos los checkbox están seleccionados devuelve 1,2,3,4,5
     
          
          var t1=document.getElementById("tis1").checked;
              var t2=document.getElementById("tis2").checked;
            var t3=document.getElementById("tis3").checked;
              var t4=document.getElementById("tis4").checked;
              var t5=document.getElementById("tis5").checked;
              
  var ponderacion=document.getElementById("checks");
          ponderacion.innerHTML="<input type='hidden' id='chec1' name='chec1' value="+t1+"> \n\
                                 <input type='hidden' id='chec2' name='chec2' value="+t2+"> \n\
                                  <input type='hidden' id='chec3' name='chec3' value="+t3+">\n\
                                   <input type='hidden' id='chec4' name='chec4' value="+t4+">\n\
                                  <input type='hidden' id='chec5' name='chec5' value="+t5+">";
       
   
 
  Form.submit();

    var cues=document.getElementById("resulBus") ;  
      
    cues.innerHTML="<iframe id='mainContent' name='mainContent' src='./Muestra_Tabla.php' width='100%' height='100%' frameborder='0' style='margin: 0px; height: 100%' scrolling='no' onload='resizeMe(this)'></iframe>";
  
    
  
        
        
    


   

}
  function mostrar(id) {
    if (id == "Host") {
         $("#desdeotro").hide(); 
          $("#are0").hide(); 
          $("#desdeotro1").show();
           $("#are1").show();
         $("#desdeotro2").hide();
         $("#are2").hide();
    }
     if (id == "Plant") {
         $("#desdeotro").show();
         $("#are0").show(); 
         $("#desdeotro1").hide();
             $("#are1").hide();
           $("#desdeotro2").hide();
               $("#are2").hide();
    }
     if (id == "Free") {
         $("#desdeotro2").show();
             $("#are2").show();
         $("#desdeotro").hide();
             $("#are0").hide();
           $("#desdeotro1").hide();
               $("#are1").hide();
    }
    }
 

     
        </script>
  </head>
  <BODY>

<br>
<br>
<br>
<br>

<br>
<br>
<br>
<br>
  <center><H3><strong>Search organism</strong></H3></center>
  <br>
      <form name="Organism_Information" method="POST" action=" Muestra_Tabla.php" >
     
       <center>
             <div class="datagrid">
         <table border="2" id="tab" align="center">
         
            <thead>
    <tr><th></th><th></th><th></th><th></th></tr>
</thead>
         <tbody>
            <tr class="alt">
                
                <td>
                    
                    <input type="checkbox"  name="tis[]" id="tis1" value="INSOL">
                    Isolated by</td>
               
                <td>   
                    
                    <?php 
                   echo"<select name=insolated id=insolated>"; 

                           $sql="SELECT Name FROM user where lab='$consul2'"; 
                           $result=mysql_query($sql); 
                           $i=0; 
                 while ($row=mysql_fetch_row($result)) 
                      { 
              echo "<option value=".$row[$i].">".$row[$i]."</option>\n"; 
                       } 
                  echo "</select>"; 
                     ?> 
                </td>
             <tr class="alt">
                <td>
                     <input type="checkbox" name="tis[]" id="tis2" value="DATE1">
                    Date of Isolation Initial&nbsp;&nbsp;&nbsp</td>
                <td><input type="date" name="dateofinsoli" /></td>        
          
                
                  <td>
                       <input type="checkbox"  name="tis[]" id="tis3" value="DATE2">
                      Date of Isolation Final&nbsp;&nbsp;&nbsp </td>
                <td><input type="date" name="dateofinsolf" /></td>        
          </tr>
          <tr class="alt">
                <td>
                     <input type="checkbox"  name="tis[]" id="tis4" value="ORIG">
                    Origin</td>
                <td>
                   <select onChange="mostrar(this.value);" name="ori" id="ori">
            
 <option value="Plant">Plant-associated</option>
<option value="Host">Host-associated</option>
<option value="Free">Free-living</option> 

</select>
                  
            </td>
            </tr>
            <TR class="alt">
             <td>
                  <input type="checkbox"  name="tis[]" id="tis5" value="STORA">
                 Storage</td>
                
                <td>
                    
                   <?php 
                   echo"<select name=alias id=alias>";  

                           $sql="SELECT Name FROM storage where lab='$consul2'"; 
                           $result=mysql_query($sql); 
                           $i=0; 
                 while ($row=mysql_fetch_row($result)) 
                      { 
              echo "<option value=".$row[$i].">".$row[$i]."</option>\n"; 
                       } 
                  echo "</select>"; 
                     ?>  
                </td>              
           
            </TR>
            <div id="checks">
                
                </div>
   
            
              

  </tr>
    <tr align="center" >
      <td colspan="2">
         
          <input  class="Boton1" type="button" name="btn1"  id="enviar" value="Search"  onclick="llenar(Organism_Information)" />
           
</td>
</tr>        

         </TBODY>
               <tfoot> 
            
               </TFOOT>

         </TABLE>
                 </div>
</center>
              <center>
          <div id="resulBus">
              
              </div> 
                  </center>

         
      
  

 <br>
<br>




              
             
               </form>
      
</BODY>
 </HTML>
      

