<?php 
	require("../modelo/modelo.php");
	$objModelo = new Formulario();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Modificar Usuario</title>
<!-- ----------------------------------------FANCYBOX-------------------------------------------------------------------- -->
<!-- Add jQuery library -->
	<script type="text/javascript" src="../jquery/fancyapps-fancyBox-3a66a9b/lib/jquery-1.7.2.min.js"></script>

	<!-- Add mousewheel plugin (this is optional) -->
	<script type="text/javascript" src="../jquery/fancyapps-fancyBox-3a66a9b/lib/jquery.mousewheel-3.0.6.pack.js"></script>

	<!-- Add fancyBox main JS and CSS files -->
	<script type="text/javascript" src="../jquery/fancyapps-fancyBox-3a66a9b/source/jquery.fancybox.js?v=2.0.6"></script> 
	<link rel="stylesheet" type="text/css" href="../jquery/fancyapps-fancyBox-3a66a9b/source/jquery.fancybox.css?v=2.0.6" media="screen" />
      <script language="javascript" type="text/javascript" src="index.js"></script>
      
         <link href="../../extras/css/estilo.css" rel="stylesheet" type="text/css" />
        <link href="../../extras/css/style.css" rel="stylesheet" type="text/css" />
        <link href="../../extras/css/screen.css" rel="stylesheet" type="text/css" />
        <link href="../../extras/php/PHPPaging.lib.css" rel="stylesheet" type="text/css" />
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
</head>
  

    <body class="col">
    	<div id="cuerpo">
            <br>
                
            </br>
            <br>
                <br>
                     <br>
                <br>
            <h1><center>User</center></h1>
     <div id="div_listar"></div>
            <div id="div_oculto" style="display: none;"></div>
              <form action="javascript: fn_buscar();" id="frm_buscar" name="frm_buscar">
                <table class="formulario" >
                    <tbody class="col">
                        <tr>
                           
                            <td ><h3><b>Orden by</b></h3> </td>
                            <td >
                                <select name="criterio_ordenar_por" id="criterio_ordenar_por" class="cajas">
                                    <option value="User_ID">Id</option>
                                	<option value="Name">Name</option>
                                    <option value="Last_Name">Last Name</option>
                                    <option value="Telephone">Telephone</option>
                                    <option value="email">Email</option>
                                	<option value="Role">Role</option>
                                    <option value="Status">Status</option>
                                  
                                </select>
                            </td>
                            <td> <h3><b>In</b></h3> </td>
                            <td  >
                            	<select name="criterio_orden" id="criterio_orden" class="cajas">
                                	<option value="desc">Down</option>
                                    <option value="asc">Up</option>
                                </select>
                            </td>
                            <td><h3><b>Records</b></h3> </td>
                            <td  >
                            	<select name="criterio_mostrar" id="criterio_mostrar" class="cajas">
                                	<option value="1">1</option>
                                	<option value="2">2</option>
                                	<option value="5">5</option>
                                	<option value="10">10</option>
                                	<option value="20" selected="selected">20</option>
                                	<option value="40">40</option>
                                </select>
                            </td>
                            <td><input  class="Boton1" type="submit" value="search" /></td>
                        </tr>
                    </tbody>
                </table>
            </form>

    </div>

</body>
</html>