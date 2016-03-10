<?php
include("bdConnection.php");

session_start();

 $_SESSION['sear'] =$_GET['buscar'];
 


 
 $sql="select item from organism_information where Alias='".$_SESSION['sear']."'";
		$cs=mysql_query($sql,$cn);
		
		while($resul=mysql_fetch_array($cs)){
			$varr=$resul[0];
			
		$_SESSION['Origin']=$varr;	
			}
 



   

      

?>


<title>Show main</title>

<link rel="stylesheet" type="text/css" href="Menu_P/styles.css" />

<script src="Menu_P/stuHover.js" type="text/javascript"></script>

<body  bgcolor="white" style="">


<script type="text/javascript">
function Go(){return}
</script>

<noscript>Your browser does not support Javascript. Read &lt;a href="enable_javascript.php"&gt;this&lt;/a&gt;.</noscript>
 
<!--BEGIN HEADER WITH SELECTS AND INPUT-->


 <style type="text/css">

#posicion
{
    
    position: absolute;
    top:30%;
    left:10%;
    float:left;
}
</style>


 
<center>
<?php

include('menu_prin.php');



?>

</center>

<!-----###-END OF MENU TABLES-###---->
<center>
<div id="posicion">
    <iframe id="mainContent" name="mainContent" src="./user/INFO_PAGE_2.php" width="975" height="1700" frameborder="0" style="margin: 0px; height: 1700px;" scrolling="no" onload="resizeMe(this)">
    [Your user agent does not support frames or is currently configured
    not to display frames. However, you may visit
    &lt;A href="info_page_tabs.php"&gt;the related document.&lt;/A&gt;]
</iframe>
</div>

    
</center>


  </td>
</tr>



</body>
</html>
