

<?php
include("bdConnection.php");


?>
<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
<?php
// Evitar los warnings the variables no definidas!!!
$err = isset($_GET['error']) ? $_GET['error'] : null ;




require'./class/sessions.php';
$objses = new Sessions();
$objses->init();

$user = isset($_SESSION['user']) ? $_SESSION['user'] : null ;


$id_user=isset($_SESSION['iduser']) ? $_SESSION['iduser'] : null ;



$var3="";
$u="ho";
$us="la";


              
			$consul3=$id_user;

                        
                         if($us=="la") {
                $sql="SELECT Nick FROM user WHERE User_ID = '$consul3'";		
		$cs=mysql_query($sql,$cn);
                
		while($resul=mysql_fetch_array($cs)){
			$consul4=$resul[0];
                       
			
			
			}
                        
                        $sqla = "select Nick from user WHERE Nick = '$consul4'"; 

$resultado = mysql_query($sqla, $cn); 

$filasDevueltas = mysql_num_rows($resultado); 
                        
                        
                }
                        
                        
                        
if(isset($_POST["btn1"])){
	$btn=$_POST["btn1"];
        
        if($btn=="Save"){
            $entrada="";
           if( isset( $_POST['mensaje'] ) && ! empty( $_POST['mensaje'] ) ) {
                   $entrada=$_POST['mensaje'];
           }
           if($entrada=="no"){
                echo "<script> alert('The nick is already in use');</script>";
              
           }
           else{
            
		$cod=$_POST["txtid"];
		$name=$_POST["txtname"];
		$users=$_POST["usuario"];
		$pass=$_POST["password"];
               
              
               $NumNick=$_POST["NumNick"];

           if($NumNick<2){
                
              if($filasDevueltas!=1 and $filasDevueltas!=0){
                    
                    echo "<script> alert('Choose another nick');</script>";
                }
                
                if ($pass=="")
                {
                    echo "<script> alert('Insert a password');</script>";
                }
                
             
                 else{
                     if($users!=" "){
                     $name=$_POST["usuario"];
                     $sql="update user set Nick='$name',Password='$pass'  where User_ID='$cod' ";
		
		$cs=mysql_query($sql,$cn);
		echo "<script> alert('It was saved correctly');</script>";
              
                     }
		
                  
                 }
           }
           }
                
                
                
        }
}

?>


<style type="text/css">
form {
	width:500px;
	border:1px solid #ccc;
}
.sombra8 {
color: #fff;
text-shadow:
-2px -2px 0 #000, 
1px -2px 0 #000,
-2px 2px 0 #000,
2px 2px 0 #000;
font-size: 25px;
font-family: 'Boogaloo', cursive;
}
fieldset {
	border:0;
	padding:10px;
	margin:10px;
	position:relative;
}
label {
	display:block;
	font:normal 12px/17px verdana;
}
input {width:160px;}


span.hint {
	font:normal 11px/14px verdana;
	background:#eee url(Validacion_nick/bg-span-hint-gray.gif) no-repeat top left;
	color:#444;
	border:1px solid #888;
	padding:5px 5px 5px 40px;
	width:250px;
	position:absolute;
	margin: -12px 0 0 14px;
	display:none;
}


fieldset.welldone span.hint {
	background:#9fd680 url(Validacion_nick/bg-span-hint-welldone.jpg) no-repeat top left;
	border-color:#749e5c;
	color:#000;
}
fieldset.kindagood span.hint {
	background:#ffffcc url(Validacion_nick/bg-span-hint-kindagood.jpg) no-repeat top left;
	border-color:#cc9933;
}


fieldset.welldone {
	background:transparent url(Validacion_nick/bg-fieldset-welldone.gif) no-repeat 194px 19px;
}
fieldset.kindagood {
	background:transparent url(Validacion_nick/bg-fieldset-kindagood.gif) no-repeat 194px 19px;
}


</style>
<script type="text/javascript">

// This function checks if the username field
// is at least 6 characters long.
// If so, it attaches class="welldone" to the 
// containing fieldset.

function checkUsernameForLength(whatYouTyped) {
	var fieldset = whatYouTyped.parentNode;
	var txt = whatYouTyped.value;
	if (txt.length > 5) {
		fieldset.className = "welldone";
	}
	else {
		fieldset.className = "";
	}
}





// If the password is at least 4 characters long, the containing 
// fieldset is assigned class="kindagood".
// If it's at least 8 characters long, the containing
// fieldset is assigned class="welldone", to give the user
// the indication that they've selected a harder-to-crack
// password.

function checkPassword(whatYouTyped) {
	var fieldset = whatYouTyped.parentNode;
	var txt = whatYouTyped.value;
	if (txt.length > 3 && txt.length < 8) {
		fieldset.className = "kindagood";
	} else if (txt.length > 7) {
		fieldset.className = "welldone";
	} else {
		fieldset.className = "";
	}
}

// This function checks the email address to be sure
// it follows a certain pattern:
// blah@blah.blah
// If so, it assigns class="welldone" to the containing
// fieldset.

function checkEmail(whatYouTyped) {
	var fieldset = whatYouTyped.parentNode;
	var txt = whatYouTyped.value;
	if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(txt)) {
		fieldset.className = "welldone";
	} else {
		fieldset.className = "";
	}
}




// this part is for the form field hints to display
// only on the condition that the text input has focus.
// otherwise, it stays hidden.

function addLoadEvent(func) {
  var oldonload = window.onload;
  if (typeof window.onload != 'function') {
    window.onload = func;
  } else {
    window.onload = function() {
      oldonload();
      func();
    }
  }
}


function prepareInputsForHints() {
  var inputs = document.getElementsByTagName("input");
  for (var i=0; i<inputs.length; i++){
    inputs[i].onfocus = function () {
      this.parentNode.getElementsByTagName("span")[0].style.display = "inline";
    }
    inputs[i].onblur = function () {
      this.parentNode.getElementsByTagName("span")[0].style.display = "none";
    }
  }
}
addLoadEvent(prepareInputsForHints);

</script>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
 
    
    
  
        
<title>C_Password</title>

</head>

<body >
<header>
    

<center><span class='sombra8' > New Password / Nick</span></center>
</header>
  <link rel="stylesheet" href="user/estilos/estilos.css" type="text/css" />

  <script type="text/javascript" src="jquery-1.3.2.js"></script>
<script type="text/javascript">
$(document).ready(function(){
                         
      var consulta;
             
      //hacemos focus
      $("#usuario").focus();
                                                 
      //comprobamos si se pulsa una tecla
      $("#usuario").keyup(function(e){
             //obtenemos el texto introducido en el campo
             consulta = $("#usuario").val();
                                      
             //hace la búsqueda
             $("#resultado").delay(1000).queue(function(n) {      
                                           
                  $("#resultado").html('<img src="ajax-loader.gif" />');
                                           
                        $.ajax({
                              type: "POST",
                              url: "ajax_verificar_nick.php",
                              data: "b="+consulta,
                              dataType: "html",
                              error: function(){
                                    alert("error petición ajax");
                              },
                              success: function(data){                                                      
                                    $("#resultado").html(data);
                                    n();
                              }
                  });
                                           
             });
                                
      });
                          
});
    
</script>
<center>
    <form  id="user" name="user" action="" method="POST">
      

         <center>
             <br>
 Nick : <input style="border:none" type="text" name="txtname" id="txtname"  value="<?php echo $consul4?>" readonly="readonly"/></td>
   
<br>


    

        <input type="hidden" name="txtid"  value="<?php echo $consul3?>"/>
        <input type="hidden" name="NumNick"  value="<?php echo $filasDevueltas?>"/>





<fieldset>
	<label for="username">Choose a Nick:</label>
	<input
		type="text"
		id="usuario"
                name="usuario"
		onkeyup="checkUsernameForLength(this);" class="cajas"  value="<?php echo $consul4?>"/>
	<span class="hint">Usernames must be a least 6 characters in length.</span>
        <div id="resultado"></div>
</fieldset>



<fieldset>
	<label for="password">Enter a password:</label>
	<input
		type="password"
		id="password"
                name="password"
		onkeyup="checkPassword(this);" class="cajas" value="<?php echo $var3?>" />
	<span class="hint">The password can be any combination of characters, and must be at least 4 characters in length.  8 characters recommended!</span>
</fieldset>


    <div id="resultado"></div>


<tr align="center">
<td colspan="2">
    <input class="button" type="submit" name="btn1" value="Save"/> 

</td>
</tr>


        
         </center>
    </form>
    </center>
    
   
</html>
        
<script language="javascript" type="text/javascript">
	$(document).ready(function(){
		$("#user").validate({
			rules:{
				usu_per:{
					required: true,
					remote: "ajax_verificar_nick.php"
				}
			},
			messages: {
				usu_per: "x"
			},
			onkeyup: false,
			submitHandler: function(form) {
				var respuesta = confirm('Are sure to add this record?')
				if (respuesta)
					form.submit();
			}
		});
	});
	</script>