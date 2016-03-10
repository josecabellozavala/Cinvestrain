<?php
	include "../../../../bdConnection.php";
	include "../extras/php/basico.php";
	include "../extras/php/PHPPaging.lib.php";

	header ("Expires: Fri, 14 Mar 1980 20:53:00 GMT"); //la pagina expira en fecha pasada
	header ("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT"); //ultima actualizacion ahora cuando la cargamos
	header ("Cache-Control: no-cache, must-revalidate"); //no guardar en CACHE
	header ("Pragma: no-cache"); //PARANOIA, NO GUARDAR EN CACHE

require'../extras/class/sessions.php';
$objses = new Sessions();
$objses->init();

$user = isset($_SESSION['user']) ? $_SESSION['user'] : null ;

        $sql="SELECT Type FROM user, role WHERE user.Name = '$user' AND user.Role = role.Type";		
		$cs=mysql_query($sql,$cn);
                
		while($resul=mysql_fetch_array($cs)){
			$consul1=$resul[0];
			
			
			}
        
$sql1="SELECT lab.id_lab FROM user,lab WHERE user.Name ='$user' AND user.lab=lab.id_lab";		
		$cs1=mysql_query($sql1,$cn);
                
		while($resul=mysql_fetch_array($cs1)){
			$consul2=$resul[0];
			}
                        
                         if($consul1=="Supermanager")                        
{ 
	$paging = new PHPPaging;
	$sql = "select * from plant_info ";
}
 else {
    $paging = new PHPPaging;
	$sql = "select * from plant_info where lab='$consul2'";
}
	if (isset($_GET['criterio_usu_per']))
		$sql .= " where Common_Name like '%".fn_filtro(substr($_GET['criterio_usu_per'], 0, 16))."%'";
	if (isset($_GET['criterio_ordenar_por']))
		$sql .= sprintf(" order by %s %s", fn_filtro($_GET['criterio_ordenar_por']), fn_filtro($_GET['criterio_orden']));
	else
		$sql .= " order by Plant_ID desc";
	$paging->agregarConsulta($sql); 
	$paging->div('div_listar');
	$paging->modo('desarrollo'); 
	if (isset($_GET['criterio_mostrar']))
		$paging->porPagina(fn_filtro((int)$_GET['criterio_mostrar']));
	$paging->verPost(true);
	$paging->mantenerVar("criterio_usu_per", "criterio_ordenar_por", "criterio_orden", "criterio_mostrar");
	$paging->ejecutar();
?>
<table id="grilla" class="lista" width="1200px">
  <thead>
               
            
        <tr>
          
             <?php 
if($consul1=="Manager" || $consul1=="Supermanager" || $consul1=="User"  ){
    
     
    
    ?>
            <th width="16px"><a href="busMap_1.php"><img src="../extras/ico/add.png"></a></th>
          <?php } ?> 
             <th> </th>
            <th>Common Name</th>
            <th>Genus</th>
             <th>Species</th>
            <th>Date of collection</th>
            <th>Collected by</th>
            <th>Site Alias</th>       
            <th>Tissues</th>
            <th>Heigth</th>
              <th>Width</th>
            <th>Physiological state</th>
             <th>Neighboring plants</th>
              <th>Soil type</th>
           
             <th>Storage</th>
            <th>Comments</th>
          <?php
           if($consul1=="Supermanager")                        
{
               ?>
	  <th>Lab</th>
        
        <?php
}?>   

           
        </tr>
    </thead>
    <tbody>
    <?php
  
        while ($rs_per = $paging->fetchResultado()){
    ?>                
        
        <tr id="tr_<?=$rs_per['Plant_ID']?>">
            <td><a href="busMap_Act.php?id=<?=$rs_per['Plant_ID']?>"><img src="../extras/ico/page_edit.png" /></a></td>
            <td><a href="javascript: fn_eliminar(<?=$rs_per['Plant_ID']?>);"><img src="../extras/ico/delete.png" /></a></td>
            <td><?=$rs_per['Common_Name']?></td>
            <td><?=$rs_per['Gender']?></td>
             <td><?=$rs_per['Species']?></td>
            <td><?=$rs_per['Date_of_collection']?></td>
            <td><?php
            $user=$rs_per['Collected_by'];
            
                  $sqllab="SELECT Name FROM user WHERE User_ID='$user'";		
		$cslab=mysql_query($sqllab,$cn);
		while($resullab=mysql_fetch_array($cslab)){
			echo $consullab=$resullab[0];
			}
                    
            ?></td>
             <td><?=$rs_per['Site_Alias']?></td>
            <td width="100px"><?=$rs_per['Tissues']?></td>
              <td><?=$rs_per['Heigth']?></td>
            <td><?=$rs_per['Width']?>
            <td>
            <?php 
            $phy=$rs_per['Physiological_state'];
                    
                    $sqllab="SELECT Status FROM Physiological_state WHERE Physiological_state_ID='$phy'";		
		$cslab=mysql_query($sqllab,$cn);
		while($resullab=mysql_fetch_array($cslab)){
			echo $consullab=$resullab[0];
			}
                    
                    
                    ?>
            
            
            
            </td>
             <td><?php
             $planta=$rs_per['Neighboring_plants'];
                            
              $sqllab="SELECT Common_Name FROM plant_info WHERE Plant_ID='$planta'";		
		$cslab=mysql_query($sqllab,$cn);
		while($resullab=mysql_fetch_array($cslab)){
			echo $consullab=$resullab[0];
			}
                            
                            ?></td>
             <td>
                 <?php 
                 $soil=$rs_per['Id_soil'];
               $sqllab="SELECT Alias FROM soil_type WHERE Soil_type_ID='$soil'";		
		$cslab=mysql_query($sqllab,$cn);
                
		while($resullab=mysql_fetch_array($cslab)){
			echo $consullab=$resullab[0];
			}
                        ?>
                 </td>
         
                        <td >
 <?php 
                 $stora=$rs_per['id_storage'];
                
               $sqllab="SELECT Alias FROM storage WHERE Storage_ID='$stora'";		
		$cslab=mysql_query($sqllab,$cn);
                
		while($resullab=mysql_fetch_array($cslab)){
			echo $consulStorage=$resullab[0];
			}
                        ?>
                        
                        
                        </td>
             <td><?=$rs_per['Comments']?></td>
              <?php
           if($consul1=="Supermanager")                        
{
                $labo=$rs_per['lab'];
               $sqllab="SELECT Name FROM lab WHERE id_lab='$labo'";		
		$cslab=mysql_query($sqllab,$cn);
                
		while($resullab=mysql_fetch_array($cslab)){
			$consullab=$resullab[0];
			}
               ?>
            
	 <td><?php echo $consullab ?></td>
        
        <?php
}?> 

            
        </tr>
    <?php } ?>
    </tbody>
    <tfoot>
        <tr>
            <td colspan="6">
<!--				<? /*
					-- Aqui MOSTRAMOS MAS DETALLADAMENTE EL PAGINADO
					P�gina: <?=$paging->numEstaPagina()?>, de <?=$paging->numTotalPaginas()?><br />
					Mostrando: <?=$paging->numRegistrosMostrados()?> registros, del <?=$paging->numPrimerRegistro()?> al <?=$paging->numUltimoRegistro()?><br />
					De un total de: <?=$paging->numTotalRegistros()?><br />
                */ ?>-->
                <?=$paging->fetchNavegacion()?>
            </td>
        </tr>
    </tfoot>
</table>