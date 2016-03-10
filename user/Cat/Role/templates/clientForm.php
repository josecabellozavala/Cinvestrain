
<style>
    
    .button1 {
text-decoration:none; 
 text-align:center; 
 padding:11px 32px; 
 border:double 3px #006572; 
 -webkit-border-radius:21px;
 -moz-border-radius:21px; 
 border-radius: 21px; 
 font:11px "Arial Black", Gadget, sans-serif; 
 font-weight:bold; 
 color:#e5ffed; 
 background-color:#78c73b; 
 background-image: -moz-linear-gradient(top, #78c73b 0%, #19a519 100%); 
 background-image: -webkit-linear-gradient(top, #78c73b 0%, #19a519 100%); 
 background-image: -o-linear-gradient(top, #78c73b 0%, #19a519 100%); 
 background-image: -ms-linear-gradient(top, #78c73b 0% ,#19a519 100%); 
 filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#19a519', endColorstr='#19a519',GradientType=0 ); 
 background-image: linear-gradient(top, #78c73b 0% ,#19a519 100%);   
 -webkit-box-shadow:0px -5px 2px #bababa, inset 0px 0px 1px #ffffff; 
 -moz-box-shadow: 0px -5px 2px #bababa,  inset 0px 0px 1px #ffffff;  
 box-shadow:0px -5px 2px #bababa, inset 0px 0px 1px #ffffff;  
  
 text-shadow: 0px 1px 11px #bababa; 
 filter: dropshadow(color=#bababa, offx=0, offy=1);
   }
   
   .button2{
 text-decoration:none; 
 text-align:center; 
 padding:11px 32px; 
 border:double 3px #006572; 
 -webkit-border-radius:21px;
 -moz-border-radius:21px; 
 border-radius: 21px; 
 font:11px "Arial Black", Gadget, sans-serif; 
 font-weight:bold; 
 color:#e5ffed; 
 background-color:#c74c3b; 
 background-image: -moz-linear-gradient(top, #c74c3b 0%, #f51f03 100%); 
 background-image: -webkit-linear-gradient(top, #c74c3b 0%, #f51f03 100%); 
 background-image: -o-linear-gradient(top, #c74c3b 0%, #f51f03 100%); 
 background-image: -ms-linear-gradient(top, #c74c3b 0% ,#f51f03 100%); 
 filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f51f03', endColorstr='#f51f03',GradientType=0 ); 
 background-image: linear-gradient(top, #c74c3b 0% ,#f51f03 100%);   
 -webkit-box-shadow:0px -5px 2px #bababa, inset 0px 0px 1px #ffffff; 
 -moz-box-shadow: 0px -5px 2px #bababa,  inset 0px 0px 1px #ffffff;  
 box-shadow:0px -5px 2px #bababa, inset 0px 0px 1px #ffffff;  
  
 text-shadow: 0px 1px 11px #bababa; 
 filter: dropshadow(color=#bababa, offx=0, offy=1);
  
  }
</style>


<h2><?php echo $view->label ?></h2>
<form name ="client" id="client" method="POST" action="index.php">
    
    <input type="hidden" name="id" id="id" value="<?php print $view->client->getId() ?>">
    <div>
        <label>*Alias</label>
        <input type="text" name="nombre" id="nombre" value = "<?php print $view->client->getNombre() ?>">
    </div>
  
    <br>
    <br>
    <br>
    <div class="buttonsBar">
     
        <input class="button1" id="submit" type="button" name="submit" value ="Guardar"  onclick="validarForm(client)" />
      <input class="button2" id="cancel" type="button" value ="Cancelar" />
    </div>
</form>
<script>
    
function validarForm(form)
{
 if (form.nombre.value=="" ){
 alert("Datagrid with parentheses are required");

form.nombre.focus();
return 0;
}


   var params={};
        params.action='saveClient';
        params.id=$('#id').val();
        params.nombre=$('#nombre').val();
        params.apellido=$('#apellido').val();
        params.fecha=$('#fecha').val();
        params.peso=$('#peso').val();
        params.com=$('#com').val();
  
       
        $.post('index.php',params,function(){
            $('#block').hide();
            $('#popupbox').hide();
            $('#content').load('index.php',{action:"refreshGrid"});
        })
        return false;
}



</script>