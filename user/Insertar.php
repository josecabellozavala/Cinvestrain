

<?php
// Evitar los warnings the variables no definidas!!!
$err = isset($_GET['error']) ? $_GET['error'] : null ;

?>
 
<!DOCTYPE html>
<html>
<head>
<title>Manipular datos</title>
</head>

<body bgcolor="yellow" background="Imagenes/labcont.jpg">
<header>
<h2 align="center">    Data handling            </h2>
</header>

    <script type="text/javascript">
        function enviar(destino)
        {
            document.formulario.action=destino;
            document.formulario.submit(); 
        }
        
    </script>

<form name="formulario"  method="post">
    
  
    

<div style="float:left; width: 45%" align="center">
    <BR>
    
<table border="2">
<tr>

<td  width="50%" bgcolor="#FFE920" align="center">
    <input   type="button" name="btnOrganism"   value=" Organism Information" onclick="enviar('Organism_Information_1.php?num=1')"  />
</td> 

</tr>
</table>

        <BR>
    <BR>
    
<table border="2">
<tr> 

<td  width="50%" bgcolor="#FFE920" align="center">
    <input type="button" name="btnMacroscopic"  value="Macroscopic Morphology" onclick="enviar('Macroscopic_Morphology_1.php?num=1')"   />
</td> 
</tr>
</table>
    <BR>
    <BR>
    
<table border="2">
<tr>

<td  width="50%" bgcolor="#FFE920" align="center">
    <input type="button" name="btnMicroscopic"  value="Microscopic Morphology" onclick="enviar('Microscopic_Morphology_1.php?num=1')"  />
</td> 
</tr>
</table>
    <BR>
    <BR>
           
<table border="2">
<tr>

<td  width="50%" bgcolor="#FFE920" align="center">
    <input type="button" name="btnGrowth"  value="Growth characteristics" onclick="enviar('Growth_characteristics_1.php?num=1')"  />
</td> 
</tr>
</table>

              <BR>
    <BR>
   
<table border="2">
<tr>
            
<td  width="50%" bgcolor="#FFE920" align="center">
    <input type="button" name="btnPreservation"  value="Preservation of Strains" onclick="enviar('Preservation_of_Strains_1.php?num=1')" />
</td> 
</tr>
</table>       
    
</div>

   <div style="float:right; width: 45%" align="center">

    <BR>
    
<table border="2">
<tr>
  <td width="50%" bgcolor="#FFE920" align="center">
    <input type="button" name="btnDNA"  value="DNA" onclick="enviar('DNA_1.php?num=1')" />
</td> 
</tr>
  </table>
    
        <BR>
    <BR>
<table border="2">
<tr>
  <td width="50%" bgcolor="#FFE920" align="center">
    <input type="button" name="btnGenetic"  value="Genetic Data"  onclick="enviar('Genetic_Data_1.php?num=1')"/>
</td> 
</tr>
  </table>

    
        <BR>
    <BR>
<table border="2">
<tr>
  <td width="50%" bgcolor="#FFE920" align="center">
    <input type="button" name="btnPlant"  value="Plant Information" onclick="enviar('Plant_Info_1.php?num=1')" />
</td> 
</tr>
  </table>
   
        <BR>
    <BR>
<table border="2">
<tr>
  <td width="50%" bgcolor="#FFE920" align="center">
    <input type="button" name="btnMetabolic"  value="Metabolic Data" onclick="enviar('Metabolic_Data_1.php?num=1')" />
</td> 
</tr>
  </table>
    <BR>
    <BR>
<table border="2">
<tr>
  <td width="50%" bgcolor="#FFE920" align="center">
    <input type="button" name="btnBioassays"  value="Bioassays Data" onclick="enviar('Bioassays_Data_1.php?num=1')" />
</td> 
</tr>
  </table>
  </div>
    
    
    <div style="clear: both"></div>
  
 
<br />
<hr>
</form>
<br />



</body>
</html>