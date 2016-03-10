<style>
    .content-box-blue {
        width:550px;
        height:300px; 
        position: absolute;
        left:450px;
        
background-color: #d8ecf7;
border: 1px solid #afcde3;
}
 .content-box-blue1{
        width:550px;
        height:50px; 
        position: absolute;
        left:450px;
        top:400px;
background-color: #d8ecf7;
border: 1px solid #afcde3;
}
input {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 10px;
	color: #990000;
         position: absolute;
        left:650px;
        top:520px;
        width:100px;
        height:50px; 
	background-color: #FFCC00;
	border: 1px dashed #CC6600;
}
.cuadroverde {   
     width:530px;
        height:50px; 
        position: absolute;
        left:430px;
        top:400px;
    background-position: 10px center;   background-repeat: no-repeat;   font-family: Tahoma;   font-size: 14px;   margin: 10px 0px;   padding: 15px 10px 15px 55px; } 
.cuadroverde { background-color: #72FF79; background-image: url(http://i51.tinypic.com/9qcsir.png); color: #000000; border:2px solid #0E8C15; border-radius: 2px 2px 2px 2px; } 


*{
 margin:0; /* Resetear valor */
 padding:0; /* Resetear valor */
}
body{  /* doy valores al cuerpo de la página */
 font-family:arial,sans-serif;
 font-size:100%;
 margin:3em;
 background: white;
 color: black;
}
h2,p{
 font-size:100%;
 font-weight:normal;
}
ul,li{
 list-style:none; /* quito el punto de la lista */
}
ul{
 overflow:hidden;  /* ocultar el texto que salga de la Nota */
 padding:3em;
}
ul li a{
 text-decoration:none;
 color:#000;
 background:#ffc;
 display:block;  /* genera un bloque por cada li */
 height:10em; /* altura de la Nota */
 width:10em;  /* anchura de la Nota */
 padding:1em;  /* espacio entre texto de las Notas */
}
ul li{
 margin:1em;  /* espacio entre las notas */
 float:left;  /* alinear notas */
}

</style>

<html>
    
    <title> Request</title>
    <head>
    
    </head>
    <body>
        <br>
      <center><h2><p>  Registro de nuevo laboratorio al sistema</p></h2></center>
<div class="content-box-blue">
      <p>Para que una persona pueda ingresar una nueva solicitud al sistema Cinvestrain, es necesario que se 
          designe un administrador de laboratorio, el cual sera el encargado de manejar y controlar las cuentas
          que el mismo puede ganerar para el uso de los usurios del laboratorio. <p>
         <p> El registro lo realiza el super-administrador del sistema.Una vez registrado el administrador de cada laboratorio debe hacerse 
             responsable de que la informacion introducida en el sistema sea la mas actual,importante y sin redundancia.
             </p>
            <p> El usuario mediante sus credenciales puede entrar al sistema,su rol asignado le proporciona las acciones que será capaz de hacer en él
                para ello se pueden consultar en el manual de usuario del sistema se encuentra en la seccion de ayuda.
                        </p>
                        </div>
        <div class="cuadroverde">
                        <p>
                            Para llenar la hora de registro de click sobre el link:
                            <a href="Solicitud_RegistroLab.doc">“Regístrate aquí”</a>
</p>
        </div>
      <input type="submit" name="Submit" value="Volver" onclick="history.go(-1)" />
 
      
      <ul>
 <li><a href="#"><h2>Contacto:</h2>
 <p>La solicitud firmada debe enviarse a</p>
     <p>trippm@gmail.com</p></a></li>

</ul>
</body>
    
    
    
    
    
</html>