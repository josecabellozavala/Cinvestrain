<?php

require_once('bdConnection.php'); 

if (isset($_REQUEST['q']) && $_REQUEST['q'] !="") {
$busqueda_dinosaurio = strip_tags(addslashes($_REQUEST['q'])); } 

?>
<div class='buscador_dinamico'>
<?php 

if (strlen($busqueda_dinosaurio) > 0) {
$resultado_search = $link_id ->query("SELECT Alias FROM organism_information WHERE Alias LIKE '%$busqueda_dinosaurio%' ");
$row_cnt = $resultado_search->num_rows;
if ($row_cnt==0) { ?>
<span class ='buscador_sin_resultados'> sin resultados </span>
<?php 

}
else {
while ($filas=$resultado_search->fetch_assoc()) 
        {
    ?>

<?php 
echo $filas['Alias']; ?>
<br>

<?php }
}
} ?>
</div>