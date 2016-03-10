
                    <script src="Boos/jquery.md5.min.js"></script>
                    <script src="Boos/bootstrap.min.js"></script>
                    <script src="Boos/script.js"></script>
                    <link rel="stylesheet" type="text/css" media="all" href="Boos/styles.css">  
    
<!--  <script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>-->
  <script type="text/javascript" charset="utf-8" src="js/jquery.leanModal.min.js"></script>
  
<?php
	include "../../../../bdConnection.php";
	include "../extras/php/basico.php";
	include "../extras/php/PHPPaging.lib.php";

	header ("Expires: Fri, 14 Mar 1980 20:53:00 GMT"); //la pagina expira en fecha pasada
	header ("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT"); //ultima actualizacion ahora cuando la cargamos
	header ("Cache-Control: no-cache, must-revalidate"); //no guardar en CACHE
	header ("Pragma: no-cache"); //PARANOIA, NO GUARDAR EN CACHE


	$paging = new PHPPaging;
	$sql = "select * from lab";
	if (isset($_GET['criterio_usu_per']))
		$sql .= " where Name like '%".fn_filtro(substr($_GET['criterio_usu_per'], 0, 16))."%'";
	if (isset($_GET['criterio_ordenar_por']))
		$sql .= sprintf(" order by %s %s", fn_filtro($_GET['criterio_ordenar_por']), fn_filtro($_GET['criterio_orden']));
	else
		$sql .= " order by id_lab desc";
	$paging->agregarConsulta($sql); 
	$paging->div('div_listar');
	$paging->modo('desarrollo'); 
	if (isset($_GET['criterio_mostrar']))
		$paging->porPagina(fn_filtro((int)$_GET['criterio_mostrar']));
	$paging->verPost(true);
	$paging->mantenerVar("criterio_usu_per", "criterio_ordenar_por", "criterio_orden", "criterio_mostrar");
	$paging->ejecutar();
?>
<table id="grilla" class="lista" width="690px">
  <thead>
        <tr>
            
            <th>Name</th>
         
            <th></th>
           
            <th width="16px"><a href="#loginmodal"  id="modaltrigger"><img src="../extras/ico/add.png"></a></th>
        </tr>
    </thead>
    <tbody>
    <?php
        while ($rs_per = $paging->fetchResultado()){
    ?>
        <tr id="tr_<?=$rs_per['id_lab']?>">
           
            <td><?=$rs_per['Name']?></td>
           
          
            <td><a href="javascript: fn_mostrar_frm_modificar(<?=$rs_per['id_lab']?>);"><img src="../extras/ico/page_edit.png" /></a></td>
            <td><a href="javascript: fn_eliminar(<?=$rs_per['id_lab']?>);"><img src="../extras/ico/delete.png" /></a></td>
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






<div id="loginmodal" style="display:none; width:600px; " >
   
    <br>
<br>
<br>
<br>
<br>
<br>
<form id="loginform" name="loginform" method="post" action="index.php" enctype="multipart/form-data">
        
      <center>

    
<h2 align="center"> Register        </h2>
 <div style="float:left; width: 45%" align="center">
     <h4 align="center"> Lab  </h4>
<table border="2" bgcolor="">
    
<input class="cajas" type="hidden" name="txtid" id="txtid" value="1"  /> 
<tr>
<td>* Name Lab</td>
<td>
    <input type="text" name="labo" id="labo">
</td>

</tr>
</table>

<h4 align="center"> Manager  </h4>
 
<table border="2" bgcolor="">

<tr>
<td>* Name</td>
<td><input  class="cajas" type="text" name="txtname" id="txtname" required /></td>
</tr>
<tr>
<td>* Last_name</td>
<td><input class="cajas" type="text" name="txtlastName" id="txtlastName" required /></td>
</tr>

<tr>
<td>* Password</td>
<td><input class="cajas" type="password" name="txtpass" id="txtpass" required/></td>
</tr>
<tr>
<td>Telephone;</td>
<td><input class="cajas" type="text" name="txttel" id="txttel" onKeyPress="return validarNumero(event)" maxlength="10" /></td>
</tr>
</table>
</div>
<div style="float:right; width:53%" align="center">
    <table border="2" bgcolor="">

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<tr>
<td>Email</td>
<td><input class="cajas" type="text" name="txtemail" id="txtemail" onkeyup="validarEmail();" oncopy="alert('No copy'); return false;" required="required" autocomplete="off" /></td>
  <label id="email_valido"></label>
</tr>
<tr>
    <td>Confirm Email</td>
 <td><input type="text" name="confirmar_email" id="confirmar_email" value="" oncopy="alert('No copy'); return false;" onpaste="alert('No puedes Pegar'); return false;" onkeyup="validarConfirmarEmail();" required="required" autocomplete="off" /></td>
            <label id="confirmar_email_valido"></label>
            </tr>
<tr>
    <td><input name="cboRole" type="hidden" id="cboRole" value="Manager">
        
</td>
  <td><input name="cboStatus" type="hidden" id="cboStatus" value="Active">
        
</td>

</tr>
<tr>
    <td>Photo</td>
    <td><input type="file" name="imagen"  /></td>
</tr>





 
</table>
    <tr align="center"><td colspan="2">
<input class="flatbtn-blu hidemodal" type="button" name="btn1" name="btn1" value="Add"  onclick="return ValidarFormulario(loginform);" /></td></tr>

</div>

</center>

                     
      

    </form>
  </div>
<script type="text/javascript">
var nombre = "", apellido="", ciudad="", telefono="", descripcion="", imagen="", pais="", otraCiudad="", email="", ciudad_nueva="";
	var	confrimar_email = "";
	//________________________________________________________________________________________________________________________
	function validarEmail() {		
		email = document.getElementById("txtemail").value; 
		if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/.test(email)){
			//alert("La direcci�n de email " + email + " es correcta.");
			document.getElementById('email_valido').innerHTML = 'Email valid';  
		} else {
			//alert("La direcci�n de email es incorrecta." +email);
			document.getElementById('email_valido').innerHTML = 'Email not valid';  
		}
	}
     function soloNumeros(field, event){
var key, keychar;
if(window.event) 
key = window.event.keyCode;
else if(event) 
key = event.which;
else
return true;
keychar = String.fromCharCode(key);
if((key == null) || (key == 0) || (key == 8) || (key == 9) || (key == 13) || (key ==27))
return true;
else if((("0123456789").indexOf(keychar) > -1)){
window.status = "";
return true;
}
else{
alert("Only numbers!");
return false;
}
}

// FUNCION PARA VALIDAR RANGO
function rangoNumeros(numero){

if (numero >=7 & numero <=14){
alert("The range of ph is 7-14");
}

else {

document.getElementById('txtlastName').value="";
}
}

function ValidaFechas(){
 
    var dtFechaActual = new Date();
  var sAnioFin = "2015";
    var sMesFin = "08";
    var sDiaFin = "14";
    var sFechaFin = sMesFin + "/" + sDiaFin + "/" + sAnioFin;
 
    if(Date.parse(sFechaFin) > dtFechaActual){
        alert("La fecha final no puede ser mayor a la fecha actual.");
        return false;
    }
 
    return true;
}
	//________________________________________________________________________________________________________________________	
	function validarConfirmarEmail() {
		email = document.getElementById("txtemail").value; 
		confrimar_email = document.getElementById("confirmar_email").value; 
		if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/.test(confrimar_email) && confrimar_email==email){
			document.getElementById('confirmar_email_valido').innerHTML = 'Email Valid';  
		}else if(confrimar_email!=email){
			document.getElementById('confirmar_email_valido').innerHTML = 'Different Email';	
		}
		else {
			document.getElementById('confirmar_email_valido').innerHTML = 'Email not valid';  
		}
	}
	//________________________________________________________________________________________________________________________		
	function ciudadesSegunPais(){
		document.getElementById("resultado").innerHTML="";
		document.getElementById("resultado_2").innerHTML="";
		pais=document.getElementById("paises").value;
		ajax_("../control/controlador.php?paisSeleccionado="+pais);		
	}
	//________________________________________________________________________________________________________________________	
	function campoCiudad(){
		otraCiudad=document.getElementById("ciudades").value;
		ajax_2("../control/controlador.php?otraCiudadSeleccionada="+otraCiudad);
	}
	//________________________________________________________________________________________________________________________
function validarNumero(e) { 
    tecla = (document.all) ? e.keyCode : e.which; 
    if (tecla==8) return true; //Tecla de retroceso (para poder borrar) 
    patron = /\d/; // Solo acepta n�meros 	
    te = String.fromCharCode(tecla); 	
    return patron.test(te);  
} 
	//________________________________________________________________________________________________________________________	
	function agregarPais(){
		var pais="";	
		pais= document.getElementById("pais_nuevo").value;
		if(pais!=""){
			ajax_4("../control/controlador.php?pais_nuevo="+pais);	
		}else{
			alert("Ingrese un pais");	
		}						
		//parent.jQuery.fancybox.close();
	}
	//________________________________________________________________________________________________________________________
	function ingreseCiudad(){
		ciudad_nueva = 	document.getElementById("ciudad_nueva").value;
		if(ciudad_nueva==""){			
			alert("Ingrese una ciudad.");
			document.getElementById('ciudad_nueva').focus();
		}
		document.getElementById('ciudad_nueva').focus();
	}



    $(function(){
  $('#loginform').submit(function(e){
    return false;
  });
  
  $('#modaltrigger').leanModal({ top: 10, overlay: 0.45, closeButton: ".hidemodal" });
});
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

function ValidarFormulario(form) 
{    
          
//     ValidaFechas();
//     rangoNumeros(document.getElementById('txtlastName').value);
    continuar=true;
   if(form.txtname.value=="" || form.labo.value=="" || form.txtlastName.value=="" ||
           form.txtpass.value=="")
  
        {
        alert("Datagrid with parentheses are required");
        
        continuar=false;  
        
      
        }
        
    else if(continuar==true)
    {
        form.submit();
     

 
  

      
   
        
        
    }
}

    </script>

