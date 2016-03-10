
   


<?php
include("bdConnection.php");
include('menu_prin.php');

       

?>
<link rel="stylesheet" type="text/css" href="mensajes.css" />
<script language="JavaScript" type="text/javascript" src="ajax.js"></script>
<script src="jquery-1.4.2.min.js" type="text/javascript"></script>
<script src="jquery-ui-1.8.9.custom.min.js" type="text/javascript"></script>
<link rel="stylesheet" href="css/bootstrap.min.css">


   <style type="text/css">

#posicion
{
    
    position: absolute;
    top:225px;
    left:550px;
    float:left;
}
#posicion1
{
    width:390px;
    height:50px;
    background-color: #28597a;
    position: absolute;
    top:310px;
    left:490px;
    float:left;
}
#imag
{
     width:50%;
    height:50%; 
    position: absolute;
     left:20%;
    top:35%;
    float: left; 
    z-index:0;
}
#table1
{
    background-color: #28a4c9; 
}

.cajas{
	background:#FFF;
	border:1px solid #00BFFF;
	height: 30px;
	margin-left:20px;
	margin-right:20px;
	border-radius:5px;
}

.button {
   border-top: 1px solid #96d1f8;
   background: #65a9d7;
   background: -webkit-gradient(linear, left top, left bottom, from(#3e779d), to(#65a9d7));
   background: -webkit-linear-gradient(top, #3e779d, #65a9d7);
   background: -moz-linear-gradient(top, #3e779d, #65a9d7);
   background: -ms-linear-gradient(top, #3e779d, #65a9d7);
   background: -o-linear-gradient(top, #3e779d, #65a9d7);
   padding: 5px 10px;
   -webkit-border-radius: 8px;
   -moz-border-radius: 8px;
   border-radius: 8px;
   -webkit-box-shadow: rgba(0,0,0,1) 0 1px 0;
   -moz-box-shadow: rgba(0,0,0,1) 0 1px 0;
   box-shadow: rgba(0,0,0,1) 0 1px 0;
   text-shadow: rgba(0,0,0,.4) 0 1px 0;
   color: white;
   font-size: 14px;
   font-family: Helvetica, Arial, Sans-Serif;
   text-decoration: none;
   vertical-align: middle;
   }
</style>

    

<div id="posicion1">
    </div>
<div id="imag">
    <img src="images/Busqueda.jpg" width="100%" height="100%" alt="" />
</div>
 <div id="posicion" > 
    


     <form id="formulario_search" name="formulario_search"  method="GET" action="Ejemm.php" >
       <?php $user = isset($_SESSION['user']) ? $_SESSION['user'] : null ;
        
$sql1="SELECT lab.id_lab FROM user,lab WHERE user.Name ='$user' AND user.lab=lab.id_lab";		
		$cs1=mysql_query($sql1,$cn);
                
		while($resul=mysql_fetch_array($cs1)){
			$consul2=$resul[0];
                           
			}
                   
       ?>
        <center>
             
        <table border="4" id="table1">
       <tr align="center"> 
        <td>Organism</td>
        <td><input  class="cajas" type="text" id="buscar" name="buscar" ></td>
       <input   type="hidden" id="menu" name="menu" value="1" >
        <div id="Result"></div>
        <td><input class="button" type="button" name="btnbus" value="Search"  onclick="validarOrganism(formulario_search)" align="center"></td><br>
       </tr> 
      
        </table> 
            
            </center>
          
    </form>  
         </div>
      
 

<div id="footer"></div>


<?php

        

$sql = "select Alias from organism_information  where lab='$consul2' order by Alias ";
$res = mysql_query($sql);
$arreglo_php = array();
if(mysql_num_rows($res)==0)
   array_push($arreglo_php, "No hay datos");
else{
  while($palabras = mysql_fetch_array($res)){
    array_push($arreglo_php, $palabras["Alias"]);
  }
}




?>


<script>
  $(function(){
    var autocompletar = new Array();
    <?php //Esto es un poco de php para obtener lo que necesitamos
     for($p = 0;$p < count($arreglo_php); $p++){ //usamos count para saber cuantos elementos hay ?>
       autocompletar.push('<?php echo $arreglo_php[$p]; ?>');
     <?php } ?>
     $("#buscar").autocomplete({ //Usamos el ID de la caja de texto donde lo queremos
       source: autocompletar //Le decimos que nuestra fuente es el arreglo
     });
  });
</script>



<script>
    
function validarOrganism(form)
{
      var autocompletar = new Array();
    <?php //Esto es un poco de php para obtener lo que necesitamos
     for($p = 0;$p < count($arreglo_php); $p++){ //usamos count para saber cuantos elementos hay ?>
       autocompletar.push('<?php echo $arreglo_php[$p]; ?>');
     <?php } ?>
     $("#buscar").autocomplete({ //Usamos el ID de la caja de texto donde lo queremos
       source: autocompletar //Le decimos que nuestra fuente es el arreglo
     });
     
 if (form.buscar.value == ""){
alert("You must insert organism name");
form.buscar.focus();
return 0;
}
 
//MostrarConsulta('consulta.php');
form.submit();



}

    </script>
    