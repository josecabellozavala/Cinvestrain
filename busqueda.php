
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
				
				<!--	INDICATORS	-->
				<ol class="carousel-indicators">
					<li class="active" data-slide-to="0" data-target="#myCarousel"></li>
					<li data-slide-to="1" data-target="#myCarousel"></li>
					<li data-slide-to="2" data-target="#myCarousel"></li>
				</ol>

				<!--	SLIDES	-->
				<div class="carousel-inner" role="listbox">
						
						<div class="item active" id="slide0">
							<img src="img/foto.jpg" class="img-responsive" alt="Mi foto">
							<div class="carousel-caption">
								<h4>Slide 1</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
								cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
								proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
							</div>
						</div>

						<div class="item" id="slide1">
							<div class="carousel-caption">
								<h4>Slide 2</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
								cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
								proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
							</div>
						</div>

						<div class="item" id="slide2">
							<div class="carousel-caption">
								<h4>Slide 3</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
								cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
								proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
							</div>
						</div>
				
				</div>

				<!--	CONTROLS	-->
				<a href="#myCarousel" class="left carousel-control" data-slide="prev">
					<span class="icon-prev"></span>
				</a>
				<a href="#myCarousel" class="right carousel-control" data-slide="next">
					<span class="icon-next"></span>
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

