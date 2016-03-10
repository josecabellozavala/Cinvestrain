<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">


<html>
    
<head>
    <title>Role</title>
        <style type="text/css">

#posicion
{
    
    position: absolute;
    top:20%;
    left:20%; 
}
</style>
    <link rel="stylesheet" type="text/css" href="templates/css/layout.css"  />
        <link rel="stylesheet" type="text/css" href="templates/css/menu.css"  />
           
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <!-- incluyo la libreria jQuery -->
    <script type="text/javascript" src="resources/jquery-1.7.1.min.js"></script>
    <!-- incluyo el archivo que tiene mis funciones javascript -->
    <script type="text/javascript" src="resources/functions.js"></script>
    <!-- incluyo el framework css , blueprint. -->
    <link rel="stylesheet" type="text/css" href="resources/screen.css" />
    <!-- incluyo mis estilos css -->
    <link rel="stylesheet" type="text/css" href="resources/style.css" />
  
</head>
    
<body>
    <center>
    <div id="posicion">

    <div id ="block"></div>
    <div class="container">
           <br>

        <h1 class="title">Role</h1>
        <div id="popupbox"></div>
        <div id="content">
            <?php include_once ($view->contentTemplate); // incluyo el template que corresponda ?>
        </div>
        
         
         </div>
    </div>
        </center>
</body>
</html>