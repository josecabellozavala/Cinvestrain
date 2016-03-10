<?php
include("bdConnection.php");
 
include('menu_prin.php');
// Evitar los warnings the variables no definidas!!!
$err = isset($_GET['error']) ? $_GET['error'] : null ;


?>
 <script type="text/javascript">
        function enviar(destino)
        {
            document.formulario.action=destino;
            document.formulario.submit(); 
        }
        
    </script>



<html>
    <head>
        <meta charset="UTF-8">
            <title>Strain Collection</title>
            <link rel="stylesheet" type="text/css" href="Menu_P/styles.css" />

<script src="Menu_P/stuHover.js" type="text/javascript"></script>
<!--        <link rel="stylesheet" href="css/layout.css" type="text/css" media="screen">
        <link rel="stylesheet" href="css/menu.css" type="text/css" media="screen">-->

<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/CustomCarousel.css">
  <script src="js/bootstrap.min.js"></script>
    </head>
    <body>
          <script type="text/javascript">
        function enviar(destino)
        {
            document.formulario.action=destino;
            document.formulario.submit(); 
        }
        
    </script>

    
                
    
  
            

        <main>
			<div class="jumbotron">
				
           
			</div>
      <div class="carousel slide" id="myCarousel" data-ride="carousel">
				
				
				
				</div>

				<!--	CONTROLS	-->
				<a href="#myCarousel" class="left carousel-control" >
					
				</a>
				<a href="#myCarousel" class="right carousel-control" >
					
				</a>

			</div>

		</main>

		<footer>
			<div class="container">
				<div class="row">
					<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
						<p>Copyright 2015</p>
					</div>
					<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
						<h4>Acerca de</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua.</p>
					</div>
					<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
						<ul>
							<li> <a href="#"> Facebook </a> </li>
							<li> <a href="#"> Twitter </a> </li>
							<li> <a href="#"> YouTube </a> </li>
						</ul>
					</div>
				</div>
			</div>
		</footer>


 

   
        </center>
           
  
   

      
        
               </div>
    
     
    
    
           
         
    </body>
</html>

