<?php
// Evitar los warnings the variables no definidas!!!
$err = isset($_GET['error']) ? $_GET['error'] : null ;

?>
 
<!DOCTYPE html>
<html>
<head>
<title>Wellcome</title>
 <meta charset="UTF-8">
  <link rel="stylesheet" href="style/index_style_1.css">
    
    <link rel="stylesheet" href="estilos/menu.css" type="text/css" />
        
    <link rel="stylesheet" href="css/layout.css" type="text/css" media="screen">
     <link rel="stylesheet" href="css/menu.css" type="text/css" media="screen">
</head>
  <script type="text/javascript">
        function enviar(destino)
        {
            document.formulario.action=destino;
            document.formulario.submit(); 
        }
        
    </script>
<body bgcolor="#99FF99" background="user/Imagenes/Strain.png" style="background-repeat: no-repeat" align="center" >
   
  
 
 
         <h1 align="center"> Wellcome to Strain Collection    
             
               </h1>

     <br>
      <br>
  
    
           

    <form align="center" name="user" action="session_init.php" method="post">
        
      <center>
        	<?php if($err==1){
				echo "Usuario o Contraseña Erróneos <br />";
                               
			}
			if($err==2){
				echo "Debe iniciar sesion para poder acceder el sitio. <br />";
			}
			?>
             <br>
    <br>
    
    <table>
        	<label>User name</label>
                <br>
            <input type="text" name="usern" id="usern" maxlength="15" /><br />
            <label>Password</label>
            <br >
            <input type="password" name="passwd" id="passwd" maxlength="10" /><br />
            
            
            <td colspan="2">
                <input type="submit" name="enter" id="enter" value="Enter" />  
                 </td>
                 
    </table>
        </center>
           
</form>
    
                <form name="formulario"  method="post">
                      <center>
                           <table>
                     <td colspan="2">
                <input type="button" name="regis" value="Register" onclick="enviar('index1.php');"/> 
  
             </td>
              </table>
        </center>
        
            
         
            

   <div style="float:right; width: 45%" align="center">



    

  </div>
    
    
    <div style="clear: both"></div>
  
 
<br />



</form>
    
<br />
  <textarea  align="center" rows="20"  cols="180" name="txtdes"  />Este espacio esta destinado para texto de introducción  al sistema
         
      </textarea>


<div class="container">

            <ul id="nav">
                <li><a href="#"><img src="images/home.png" /> Home</a></li>
                <li><a href="#"><span><img src="images/top1.png" /> HTML/CSS</span></a>
                    <div class="subs">
                        <div class="col">
                            <ul>
                                <li><a href="#"><img src="images/bub.png" /> Link 1</a></li>
                                <li><a href="#"><img src="images/bub.png" /> Link 2</a></li>
                                <li><a href="#"><img src="images/bub.png" /> Link 3</a></li>
                                <li><a href="#"><img src="images/bub.png" /> Link 4</a></li>
                                <li><a href="#"><span><img src="images/top3.png" /> Sublinks</span></a>
                                    <div class="subs">
                                        <div class="col">
                                            <ul>
                                                <li><a href="#"><img src="images/bub.png" /> Link 41</a></li>
                                                <li><a href="#"><img src="images/bub.png" /> Link 42</a></li>
                                                <li><a href="#"><img src="images/bub.png" /> Link 43</a></li>
                                                <li><a href="#"><img src="images/bub.png" /> Link 44</a></li>
                                                <li><a href="#"><img src="images/bub.png" /> Link 45</a></li>
                                            </ul>
                                        </div>
                                        <div class="col">
                                            <ul>
                                                <li><a href="#"><img src="images/bub.png" /> Link 46</a></li>
                                                <li><a href="#"><img src="images/bub.png" /> Link 47</a></li>
                                                <li><a href="#"><img src="images/bub.png" /> Link 48</a></li>
                                                <li><a href="#"><img src="images/bub.png" /> Link 49</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="col">
                            <ul>
                                <li><a href="#"><img src="images/bub.png" /> Link 6</a></li>
                                <li><a href="#"><img src="images/bub.png" /> Link 7</a></li>
                                <li><a href="#"><img src="images/bub.png" /> Link 8</a></li>
                                <li><a href="#"><img src="images/bub.png" /> Link 9</a></li>
                                <li><a href="#"><img src="images/bub.png" /> Link 10</a></li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li><a href="#"><span><img src="images/top2.png" /> jQuery/JS</span></a>
                    <div class="subs">
                        <div class="col">
                            <ul>
                                <li><a href="#"><img src="images/bub.png" /> Link 1</a></li>
                                <li><a href="#"><img src="images/bub.png" /> Link 2</a></li>
                                <li><a href="#"><img src="images/bub.png" /> Link 3</a></li>
                                <li><a href="#"><img src="images/bub.png" /> Link 4</a></li>
                                <li><a href="#"><img src="images/bub.png" /> Link 5</a></li>
                            </ul>
                        </div>
                        <div class="col">
                            <ul>
                                <li><a href="#"><img src="images/bub.png" /> Link 6</a></li>
                                <li><a href="#"><img src="images/bub.png" /> Link 7</a></li>
                                <li><a href="#"><img src="images/bub.png" /> Link 8</a></li>
                                <li><a href="#"><img src="images/bub.png" /> Link 9</a></li>
                                <li><a href="#"><img src="images/bub.png" /> Link 10</a></li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li><a href="#"><img src="images/top3.png" /> PHP</a></li>
                <li><a href="#"><img src="images/top4.png" /> MySQL</a></li>
                <li><a href="#"><img src="images/top5.png" /> XSLT</a></li>
            </ul>

        </div>

        <footer>
            <h2>CSS3 Metal menu with icons</h2>
            <a href="http://www.script-tutorials.com/css3-metal-menu-with-icons" class="stuts">Back to original tutorial on <span>Script Tutorials</span></a>
        </footer>


</body>
</html>