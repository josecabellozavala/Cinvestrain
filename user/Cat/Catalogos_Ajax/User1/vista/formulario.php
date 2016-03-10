<?php 
	require("../modelo/modelo.php");
        	include "../../../../../bdConnection.php";
	$objModelo = new Formulario();
        
         require'../../extras/class/sessions.php';
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
                            echo $consul2;
			}
?>

<!DOCTYPE >
<html  lang="eng" >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Formulario</title>
<script type="text/javascript" src="../ajax/ajax.js"></script>
 <link href="../../extras/css/estilo.css" rel="stylesheet" type="text/css" />
        <link href="../../extras/css/style.css" rel="stylesheet" type="text/css" />
        <link href="../../extras/css/screen.css" rel="stylesheet" type="text/css" />
        <link href="../../extras/php/PHPPaging.lib.css" rel="stylesheet" type="text/css" />
<!-- ----------------------------------------FANCYBOX-------------------------------------------------------------------- -->
<!-- Add jQuery library -->
	<script type="text/javascript" src="../jquery/fancyapps-fancyBox-3a66a9b/lib/jquery-1.7.2.min.js"></script>

	<!-- Add mousewheel plugin (this is optional) -->
	<script type="text/javascript" src="../jquery/fancyapps-fancyBox-3a66a9b/lib/jquery.mousewheel-3.0.6.pack.js"></script>

	<!-- Add fancyBox main JS and CSS files -->
	<script type="text/javascript" src="../jquery/fancyapps-fancyBox-3a66a9b/source/jquery.fancybox.js?v=2.0.6"></script> 
	<link rel="stylesheet" type="text/css" href="../jquery/fancyapps-fancyBox-3a66a9b/source/jquery.fancybox.css?v=2.0.6" media="screen" />
        <style>
            #BotonList {
         font-size:16px;
        font-family:Verdana,Helvetica;
        font-weight:bold;
        color:white;
        background: #09f;
        border:0px;
   
        width:130px;
        height:30px;
   } 
            </style>
    <script type="text/javascript">
		$(document).ready(function() {
			/*
			 *  Simple image gallery. Uses default settings
			 */

			$('.fancybox').fancybox();

			/*
			 *  Different effects
			 */

			// Change title type, overlay opening speed and opacity
			$(".fancybox-effects-a").fancybox({
				helpers: {
					title : {
						type : 'outside'
					},
					overlay : {
						speedIn : 500,
						opacity : 0.95
					}
				}
			});

			// Disable opening and closing animations, change title type
			$(".fancybox-effects-b").fancybox({
				openEffect  : 'none',
				closeEffect	: 'none',

				helpers : {
					title : {
						type : 'over'
					}
				}
			});

			// Set custom style, close if clicked, change title type and overlay color
			$(".fancybox-effects-c").fancybox({
				wrapCSS    : 'fancybox-custom',
				closeClick : true,

				helpers : {
					title : {
						type : 'inside'
					},
					overlay : {
						css : {
							'background-color' : '#eee'
						}
					}
				}
			});

			// Remove padding, set opening and closing animations, close if clicked and disable overlay
			$(".fancybox-effects-d").fancybox({
				padding: 0,

				openEffect : 'elastic',
				openSpeed  : 150,

				closeEffect : 'elastic',
				closeSpeed  : 150,

				closeClick : true,

				helpers : {
					overlay : null
				}
			});

			/*
			 *  Button helper. Disable animations, hide close button, change title type and content
			 */

			$('.fancybox-buttons').fancybox({
				openEffect  : 'none',
				closeEffect : 'none',

				prevEffect : 'none',
				nextEffect : 'none',

				closeBtn  : false,

				helpers : {
					title : {
						type : 'inside'
					},
					buttons	: {}
				},

				afterLoad : function() {
					this.title = 'Image ' + (this.index + 1) + ' of ' + this.group.length + (this.title ? ' - ' + this.title : '');
				}
			});


			/*
			 *  Thumbnail helper. Disable animations, hide close button, arrows and slide to next gallery item if clicked
			 */

			$('.fancybox-thumbs').fancybox({
				prevEffect : 'none',
				nextEffect : 'none',

				closeBtn  : false,
				arrows    : false,
				nextClick : true,

				helpers : {
					thumbs : {
						width  : 50,
						height : 50
					}
				}
			});

			/*
			 *  Media helper. Group items, disable animations, hide arrows, enable media and button helpers.
			*/
			$('.fancybox-media')
				.attr('rel', 'media-gallery')
				.fancybox({
					openEffect : 'none',
					closeEffect : 'none',
					prevEffect : 'none',
					nextEffect : 'none',

					arrows : false,
					helpers : {
						media : {},
						buttons : {}
					}
				});

			/*
			 *  Open manually
			 */

			$("#fancybox-manual-a").click(function() {
				$.fancybox.open('1_b.jpg');
			});

			$("#fancybox-manual-b").click(function() {
				$.fancybox.open({
					href : 'iframe.html',
					type : 'iframe',
					padding : 5
				});
			});

			$("#fancybox-manual-c").click(function() {
				$.fancybox.open([
					{
						href : '1_b.jpg',
						title : 'My title'
					}, {
						href : '2_b.jpg',
						title : '2nd title'
					}, {
						href : '3_b.jpg'
					}
				], {
					helpers : {
						thumbs : {
							width: 75,
							height: 50
						}
					}
				});
			});


		});
	</script>
	<style type="text/css">
		.fancybox-custom .fancybox-skin {
			box-shadow: 0 0 50px #222;
		}
	</style>
<script type="text/javascript">
	var nombre = "", apellido="", ciudad="", telefono="", descripcion="", imagen="", pais="", otraCiudad="", email="", ciudad_nueva="";
	var	confrimar_email = "";
	//________________________________________________________________________________________________________________________
	function validarEmail() {		
		email = document.getElementById("email_").value; 
		if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/.test(email)){
			//alert("La dirección de email " + email + " es correcta.");
			document.getElementById('email_valido').innerHTML = 'Email valid';  
		} else {
			//alert("La dirección de email es incorrecta." +email);
			document.getElementById('email_valido').innerHTML = 'Email not valid';  
		}
	}
	//________________________________________________________________________________________________________________________	
	function validarConfirmarEmail() {
		email = document.getElementById("email_").value; 
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
    patron = /\d/; // Solo acepta números 	
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
</script>

</head>
<br>
<br>
<br>
<br>
<br>
<br>
<body class="col">
    
    	<div id="cuerpo">
	<form action="../control/controlador.php" method="post" enctype="multipart/form-data" >    
    	<div style="border-radius:10px; background-color:#9C9; text-align:center; font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif; color:#FFF;" >
        	<h2>Add User</h2>
            <label>* Name</label>
            <input type="text" name="nombre" id="nombre" value="" required  /><br />
            <label>* Last Name</label>
            <input type="text" name="apellido" id="apellido" value="" required="required" /><br />
            <label>* Password</label>
            <input type="password" name="pass" id="pass" value="" required="required" /><br />
            <label>Telephone</label>
            <input type="text" name="telefono" id="telefono" onKeyPress="return validarNumero(event)" maxlength="7" /><br />
            <label>Email</label>
            <input type="text" value="" name="email_" id="email_" onkeyup="validarEmail();" oncopy="alert('No copy'); return false;" required="required" autocomplete="off" /><br />
            <br><label id="email_valido"></label><br>
            <label>Confirm Email</label>
            <input type="text" name="confirmar_email" id="confirmar_email" value="" oncopy="alert('No copy'); return false;" onpaste="alert('No puedes Pegar'); return false;" onkeyup="validarConfirmarEmail();" required="required" autocomplete="off" /><br />
            <br><label id="confirmar_email_valido"></label><br>
            <label>Role</label>
            <td>
               <?php 
        
         echo"<select name=ph id=ph> class='cajas'"; 

                           
         
                      if($consul1=="Supermanager"){
   $sql="SELECT Type FROM role";
}
else{
    $sql="SELECT Type FROM role where Type!='Supermanager'";
}
          
                           $result=mysql_query($sql,$cn); 
                           $i=0; 

                 while ($row=mysql_fetch_row($result)) 
                      { 
              echo "<option value=".$row[$i].">".$row[$i]."</option>\n"; 
                       } 
                  echo "</select>"; 
                     ?>
                       </td>
                       
                          <label>Position</label>
            <td>
               <?php 
        
               if($consul1=="Supermanager"){
                     $sql="SELECT position  FROM position ";
               }
               else{
                   $sql="SELECT position  FROM position where lab='$consul2'";
               }
         echo"<select name=position id=position> class='cajas'"; 

                          
                           $result=mysql_query($sql,$cn); 
                           $i=0; 
             
                 while ($row=mysql_fetch_row($result)) 
                      { 
              echo "<option value=".$row[$i].">".$row[$i]."</option>\n"; 
                       } 
                  echo "</select>"; 
                     ?>
                       </td>
      
                       <div id="lab" style="display:none">

	  <label>Lab </label>
            <td>
               <?php 
        $sqlk="SELECT Name FROM lab WHERE id_lab='$consul2'";		
		$cs3=mysql_query($sqlk,$cn);
                
		while($resul=mysql_fetch_array($cs3)){
			$consulLab=$resul[0];
                        }
         echo"<select name=descripcion id=descripcion> "; 

                             $sql="SELECT Name FROM lab"; 
                           $result=mysql_query($sql,$cn); 
                           $i=0; 
              echo "<option value=".$consulLab.">".$consulLab."</option>\n";
                 while ($row=mysql_fetch_row($result)) 
                      { 
              echo "<option value=".$row[$i].">".$row[$i]."</option>\n"; 
                       } 
                  echo "</select>"; 
                     ?>
                 
                 </td>
    </div>
       
                
      

                
             <?php 
if($consul1=="Supermanager"){
    
     
    
    ?>
<script type="text/JavaScript">
    
    document.getElementById('lab').style.display='block';
        
      
    </script>
<?php   
}
?>
                      
            
            <br>
            
              <label>Status</label>
              <td>
        <select name="status" id="status"  >
            <option value="active">active</option>
            <option value="Inactive">Inactive</option>
</select>
   
   </td>
            
           
  
            <label>Image</label>
            <input type="file" name="imagen" /><br />
            
            <br>
                
            </br>
            <input type="submit"  class="Boton1" value="Insert" />
            

            <?php 
            if(isset($_GET["mensaje"])){
            	echo "<center>".$_GET["mensaje"]."</center>";
            }
            ?>
          
            <br /><br />
  
    </form>
            <script type="text/javascript">
        function enviar(destino)
        {
            document.formulario.action=destino;
            document.formulario.submit(); 
        }
        
    </script>

<form name="formulario"  method="post">

                 <input type="button" id="BotonList" value="Show Users" onclick="enviar('../admin/index.php')" />
            </form>
             
            </div>
             </div>
</body>
</html>
