function Duplicados(arr) {
 var i,
     len=arr.length,
     out=[],
     obj={};

 for (i=0;i<len;i++) {
    obj[arr[i]]=0;
 }
 for (i in obj) {
    out.push(i);
 }
 return out;
}

function eliminar_repetidos(ar){
    var elemento="",aux=[].concat(ar),nuevo_arreglo=Array();
 
    for (var i in aux){ //
        elemento=aux[i];
        for (var a in aux){
            if (elemento==aux[a] && a!=i){
                //alert(elemento+"=="+aux[a]);
                aux[a]="";
            }
        }
    }

    for (var a in aux){
        if (aux[a]!=""){           
            nuevo_arreglo.push(aux[a]);
        }
    }
    //alert(nuevo_arreglo.length);
    return nuevo_arreglo;
}
function trim(cadena){

var retorno=cadena.replace(/^\s+/g,'');
retorno=retorno.replace(/\s+$/g,'');
return retorno;
}

function enviarDateInso()
{
              Date1Iso = document.organism_info.txtfechaIni.value;
               Date2Iso = document.organism_info.txtfechaFin.value;
            
              
		jugador = document.getElementById('DateInsolated');
		ajax = objetoAjax();
		ajax.open("POST", "consultados_3.php", true);
 
		ajax.onreadystatechange = function() {
			if (ajax.readyState == 4){
				jugador.value = (ajax.responseText) 
			}
		} 

		ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded"); 

		ajax.send("&Date1Iso="+Date1Iso+"&Date2Iso="+Date2Iso) 
    
    
}
function enviarOrigin()
{
              origin = document.organism_info.txtOrigin.value;
             
            
		jugador = document.getElementById('Origin');
		ajax = objetoAjax();
		ajax.open("POST", "consultados.php", true);
 
		ajax.onreadystatechange = function() {
			if (ajax.readyState == 4){
				jugador.value = (ajax.responseText) 
			}
		} 

		ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded"); 

		ajax.send("&orig="+origin) 
    
    
}
function enviarCommentsOrg()
{
              ComentsOr = document.organism_info.txtCommentsOrig.value;
             
            
		jugador = document.getElementById('CommentsOrigin');
		ajax = objetoAjax();
		ajax.open("POST", "consultados.php", true);
 
		ajax.onreadystatechange = function() {
			if (ajax.readyState == 4){
				jugador.value = (ajax.responseText) 
			}
		} 

		ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded"); 

		ajax.send("&ComentOr="+ComentsOr) 
    
    
}

function enviarName_Org_Macro()
{
              nameMacro = document.organism_info.txtNameMacro.value;
             
            
		jugador = document.getElementById('NameMacro');
		ajax = objetoAjax();
		ajax.open("POST", "consultados.php", true);
 
		ajax.onreadystatechange = function() {
			if (ajax.readyState == 4){
				jugador.value = (ajax.responseText) 
			}
		} 

		ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded"); 

		ajax.send("&NameMacro="+nameMacro) 
    
    
}
function enviarMedium_Macro()
{
              MediumMa= document.organism_info.txtMediumMacro.value;
             
            
		jugador = document.getElementById('MediumMacro');
		ajax = objetoAjax();
		ajax.open("POST", "consultados.php", true);
 
		ajax.onreadystatechange = function() {
			if (ajax.readyState == 4){
				jugador.value = (ajax.responseText) 
			}
		} 

		ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded"); 

		ajax.send("&MedMacro="+MediumMa) 
    
    
}
function enviarTemperature_Macro()
{
              temp1Ma= document.organism_info.txtTempInicial.value;
              temp2Ma= document.organism_info.txtTempFinal.value;
            
		jugador = document.getElementById('TempMacro');
		ajax = objetoAjax();
		ajax.open("POST", "consultados.php", true);
 
		ajax.onreadystatechange = function() {
			if (ajax.readyState == 4){
				jugador.value = (ajax.responseText) 
			}
		} 

		ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded"); 

		ajax.send("&Tempera1Macro="+temp1Ma+"&Tempera2Macro="+temp2Ma) 
    
    
}
function enviarAgitation_Macro()
{
              AgiMa= document.organism_info.txtAgitationMacro.value;
            
		jugador = document.getElementById('AgritationMacro');
		ajax = objetoAjax();
		ajax.open("POST", "consultados.php", true);
 
		ajax.onreadystatechange = function() {
			if (ajax.readyState == 4){
				jugador.value = (ajax.responseText) 
			}
		} 

		ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded"); 

		ajax.send("&AgitMacro="+AgiMa) 
    
    
}
function enviarAge_Macro()
{
              AgeMa= document.organism_info.txtAgeMacro.value;
            
		jugador = document.getElementById('AgeMacro');
		ajax = objetoAjax();
		ajax.open("POST", "consultados.php", true);
 
		ajax.onreadystatechange = function() {
			if (ajax.readyState == 4){
				jugador.value = (ajax.responseText) 
			}
		} 

		ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded"); 

		ajax.send("&AgeDMacro="+AgeMa) 
    
    
}
function enviarSize_Macro()
{
              SizeMa= document.organism_info.txtSizeIMacro.value;
            
		jugador = document.getElementById('SizeMacro');
		ajax = objetoAjax();
		ajax.open("POST", "consultados.php", true);
 
		ajax.onreadystatechange = function() {
			if (ajax.readyState == 4){
				jugador.value = (ajax.responseText) 
			}
		} 

		ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded"); 

		ajax.send("&SizeDMacro="+SizeMa) 
    
    
}
function enviarSurface_Macro()
{
              SurfMa= document.organism_info.txtsurface.value;
            
		jugador = document.getElementById('SurfaceMacro');
		ajax = objetoAjax();
		ajax.open("POST", "consultados.php", true);
 
		ajax.onreadystatechange = function() {
			if (ajax.readyState == 4){
				jugador.value = (ajax.responseText) 
			}
		} 

		ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded"); 

		ajax.send("&SurfaceDMacro="+SurfMa) 
    
    
}
function enviarName_Org_Micro()
{
              NameMi= document.organism_info.txtNameMicro.value;
            
		jugador = document.getElementById('NameMicro');
		ajax = objetoAjax();
		ajax.open("POST", "consultados.php", true);
 
		ajax.onreadystatechange = function() {
			if (ajax.readyState == 4){
				jugador.value = (ajax.responseText) 
			}
		} 

		ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded"); 

		ajax.send("&NameDMicro="+NameMi) 
    
    
}
function enviarMedium_Micro()
{
              MediumMi= document.organism_info.txtMediumMmicro.value;
            
		jugador = document.getElementById('MediumMicro');
		ajax = objetoAjax();
		ajax.open("POST", "consultados.php", true);
 
		ajax.onreadystatechange = function() {
			if (ajax.readyState == 4){
				jugador.value = (ajax.responseText) 
			}
		} 

		ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded"); 

		ajax.send("&MediumDMicro="+MediumMi) 
    
    
}
function enviarTemperature_Micro()
{
              Tem1Mi= document.organism_info.txtTemperatureIMicro.value;
              Tem2Mi= document.organism_info.txtTemperatureFMicro.value;
            
		jugador = document.getElementById('TemperatureMicro');
		ajax = objetoAjax();
		ajax.open("POST", "consultados.php", true);
 
		ajax.onreadystatechange = function() {
			if (ajax.readyState == 4){
				jugador.value = (ajax.responseText) 
			}
		} 

		ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded"); 

		ajax.send("&Tem1Micro="+Tem1Mi+"&Tem2Micro"+Tem2Mi) 
    
    
}

function enviarAgitation_Micro()
{
              AgitMi= document.organism_info.txtAgitationMi.value;
             
		jugador = document.getElementById('AgitationMicro');
		ajax = objetoAjax();
		ajax.open("POST", "consultados.php", true);
 
		ajax.onreadystatechange = function() {
			if (ajax.readyState == 4){
				jugador.value = (ajax.responseText) 
			}
		} 

		ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded"); 

		ajax.send("&AgitMicro="+AgitMi) 
    
    
}
function enviarAge_Micro()
{
              AgeMi= document.organism_info.txtAgeMicro.value;
             
		jugador = document.getElementById('AgeMicro');
		ajax = objetoAjax();
		ajax.open("POST", "consultados.php", true);
 
		ajax.onreadystatechange = function() {
			if (ajax.readyState == 4){
				jugador.value = (ajax.responseText) 
			}
		} 

		ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded"); 

		ajax.send("&AgeMicro="+AgeMi) 
    
    
}
function enviarAxis()
{
              Axis1Mi= document.organism_info.txtAxis_short.value;
             Axis2Mi= document.organism_info.txtAxis_long.value;
		jugador = document.getElementById('Axislong');
		ajax = objetoAjax();
		ajax.open("POST", "consultados.php", true);
 
		ajax.onreadystatechange = function() {
			if (ajax.readyState == 4){
				jugador.value = (ajax.responseText) 
			}
		} 

		ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded"); 

		ajax.send("&Axis1="+Axis1Mi+"&Axis2="+Axis2Mi) 
    
    
}
function enviarMotility()
{
              MolyMi= document.organism_info.txtMotility.value;
             
		jugador = document.getElementById('MotilityMicro');
		ajax = objetoAjax();
		ajax.open("POST", "consultados.php", true);
 
		ajax.onreadystatechange = function() {
			if (ajax.readyState == 4){
				jugador.value = (ajax.responseText) 
			}
		} 

		ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded"); 

		ajax.send("&Molity="+MolyMi) 
    
    
}
function enviarAggregates()
{
              AgregaMi= document.organism_info.txtAggregates.value;
             
		jugador = document.getElementById('AggregatesMicro');
		ajax = objetoAjax();
		ajax.open("POST", "consultados.php", true);
 
		ajax.onreadystatechange = function() {
			if (ajax.readyState == 4){
				jugador.value = (ajax.responseText) 
			}
		} 

		ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded"); 

		ajax.send("&AgregatesM="+AgregaMi) 
    
    
}
function enviarBiofilm_formation()
{
              BiofilMi= document.organism_info.txtBiofilm_formation.value;
             
		jugador = document.getElementById('Biofilm_formationMicro');
		ajax = objetoAjax();
		ajax.open("POST", "consultados.php", true);
 
		ajax.onreadystatechange = function() {
			if (ajax.readyState == 4){
				jugador.value = (ajax.responseText) 
			}
		} 

		ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded"); 

		ajax.send("&BiofilmM="+BiofilMi) 
    
    
}
function enviarGram_test()
{
              GramMi= document.organism_info.txtGram_test.value;
             
		jugador = document.getElementById('Gram_testMicro');
		ajax = objetoAjax();
		ajax.open("POST", "consultados.php", true);
 
		ajax.onreadystatechange = function() {
			if (ajax.readyState == 4){
				jugador.value = (ajax.responseText) 
			}
		} 

		ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded"); 

		ajax.send("&GramT="+GramMi) 
    
    
}
function enviarOrg_Name_Grow()
{
              NameGrow= document.organism_info.txtNameGrow.value;
             
		jugador = document.getElementById('NameGrow');
		ajax = objetoAjax();
		ajax.open("POST", "consultados.php", true);
 
		ajax.onreadystatechange = function() {
			if (ajax.readyState == 4){
				jugador.value = (ajax.responseText) 
			}
		} 

		ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded"); 

		ajax.send("&NameDGrow="+NameGrow) 
    
    
}
function enviarMedium_solid()
{
              MediumSoliGrow= document.organism_info.txtMedium_solidGrow.value;
             
		jugador = document.getElementById('Medium_solidGrow');
		ajax = objetoAjax();
		ajax.open("POST", "consultados.php", true);
 
		ajax.onreadystatechange = function() {
			if (ajax.readyState == 4){
				jugador.value = (ajax.responseText) 
			}
		} 

		ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded"); 

		ajax.send("&MedSolidGrow="+MediumSoliGrow) 
    
    
}
function enviarTemperature_solid()
{
              TempS1Grow= document.organism_info.txtTemperatureSIGrow.value;
              TempS2Grow= document.organism_info.txtTemperatureSFGrow.value;
             
		jugador = document.getElementById('TemperatureSGrow');
		ajax = objetoAjax();
		ajax.open("POST", "consultados.php", true);
 
		ajax.onreadystatechange = function() {
			if (ajax.readyState == 4){
				jugador.value = (ajax.responseText) 
			}
		} 

		ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded"); 

		ajax.send("&TSolid1Grow="+TempS1Grow+"&TSolid2Grow="+TempS2Grow) 
    
    
}

function enviarTime_solid()
{
              TimeSGrow= document.organism_info.txtTime_solidGrow.value;
            
		jugador = document.getElementById('Time_solidGrow');
		ajax = objetoAjax();
		ajax.open("POST", "consultados.php", true);
 
		ajax.onreadystatechange = function() {
			if (ajax.readyState == 4){
				jugador.value = (ajax.responseText) 
			}
		} 

		ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded"); 

		ajax.send("&TSolid1Grow="+TimeSGrow) 
    
    
}
function enviarMedium_liquid()
{
              MediumLGrow= document.organism_info.txtMedium_liquidGrow.value;
            
		jugador = document.getElementById('Medium_liquidGrow');
		ajax = objetoAjax();
		ajax.open("POST", "consultados.php", true);
 
		ajax.onreadystatechange = function() {
			if (ajax.readyState == 4){
				jugador.value = (ajax.responseText) 
			}
		} 

		ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded"); 

		ajax.send("&MediumLiqGrow="+MediumLGrow) 
    
    
}
function enviarTemperature_liquid()
{
              TempL1Grow= document.organism_info.txtTempIliquidGrow.value;
              TempL2Grow= document.organism_info.txtTempFliquidGrow.value;
             
		jugador = document.getElementById('TempLiqGrow');
		ajax = objetoAjax();
		ajax.open("POST", "consultados.php", true);
 
		ajax.onreadystatechange = function() {
			if (ajax.readyState == 4){
				jugador.value = (ajax.responseText) 
			}
		} 

		ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded"); 

		ajax.send("&TLiquid1Grow="+TempL1Grow+"&TLiquid2Grow="+TempL2Grow) 
    
    
}
function enviarAgitation_time()
{
              AgitGrow= document.organism_info.txtAgitation_time.value;
              
		jugador = document.getElementById('Agitation_timeGrow');
		ajax = objetoAjax();
		ajax.open("POST", "consultados.php", true);
 
		ajax.onreadystatechange = function() {
			if (ajax.readyState == 4){
				jugador.value = (ajax.responseText) 
			}
		} 

		ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded"); 

		ajax.send("&AgitDGrow="+AgitGrow) 
    
    
}
function enviarTime_liquid()
{
              TimeLGrow= document.organism_info.txtTime_liquid.value;
              
		jugador = document.getElementById('Time_liquidGrow');
		ajax = objetoAjax();
		ajax.open("POST", "consultados.php", true);
 
		ajax.onreadystatechange = function() {
			if (ajax.readyState == 4){
				jugador.value = (ajax.responseText) 
			}
		} 

		ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded"); 

		ajax.send("&TimeLiquidGrow="+TimeLGrow) 
    
    
}
function enviarPH()
{
              PH1Grow= document.organism_info.txtpH_initialGrow.value;
              PH2Grow= document.organism_info.txtpH_finalGrow.value;
             
		jugador = document.getElementById('PhGrow');
		ajax = objetoAjax();
		ajax.open("POST", "consultados.php", true);
 
		ajax.onreadystatechange = function() {
			if (ajax.readyState == 4){
				jugador.value = (ajax.responseText) 
			}
		} 

		ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded"); 

		ajax.send("&PHunoGrow="+PH1Grow+"&PHdosGrow="+PH2Grow) 
    
    
}
function enviarOD600()
{
              D1Grow= document.organism_info.txtOD600_initialGrow.value;
              D2Grow= document.organism_info.txtOD600_finalGrow.value;
             
		jugador = document.getElementById('OD600Grow');
		ajax = objetoAjax();
		ajax.open("POST", "consultados.php", true);
 
		ajax.onreadystatechange = function() {
			if (ajax.readyState == 4){
				jugador.value = (ajax.responseText) 
			}
		} 

		ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded"); 

		ajax.send("&DunoGrow="+D1Grow+"&DdosGrow="+D2Grow) 
    
    
}
function enviarExtra_parameters()
{
              ExtraPaGrow= document.organism_info.txtExtra_parameters.value;
            
             
		jugador = document.getElementById('ExtraparametersGrow');
		ajax = objetoAjax();
		ajax.open("POST", "consultados.php", true);
 
		ajax.onreadystatechange = function() {
			if (ajax.readyState == 4){
				jugador.value = (ajax.responseText) 
			}
		} 

		ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded"); 

		ajax.send("&ParameGrow="+ExtraPaGrow) 
    
    
}
function enviarOrg_Name_Pres()
{
              NamedPres= document.organism_info.txtNamePres.value;
            
             
		jugador = document.getElementById('NamePres');
		ajax = objetoAjax();
		ajax.open("POST", "consultados.php", true);
 
		ajax.onreadystatechange = function() {
			if (ajax.readyState == 4){
				jugador.value = (ajax.responseText) 
			}
		} 

		ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded"); 

		ajax.send("&NameDPres="+NamedPres) 
    
    
}
function enviarPreservation_Method_Name()
{
              MethodPres= document.organism_info.txtPreserv.value;
            
             
		jugador = document.getElementById('Preservmethod');
		ajax = objetoAjax();
		ajax.open("POST", "consultados.php", true);
 
		ajax.onreadystatechange = function() {
			if (ajax.readyState == 4){
				jugador.value = (ajax.responseText) 
			}
		} 

		ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded"); 

		ajax.send("&MethodDPres="+MethodPres) 
    
    
}
function enviarDate_of_preservation()
{
              Date1Pres= document.organism_info.txtDatePres1.value;
              Date2Pres= document.organism_info.txtDatePres2.value;
             
		jugador = document.getElementById('DatePreser');
		ajax = objetoAjax();
		ajax.open("POST", "consultados.php", true);
 
		ajax.onreadystatechange = function() {
			if (ajax.readyState == 4){
				jugador.value = (ajax.responseText) 
			}
		} 

		ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded"); 

		ajax.send("&Dat1Pres="+Date1Pres+"&Dat2Pres="+Date2Pres) 
    
    
}

function enviarUser_Pres()
{
              userPres= document.organism_info.txtUser_Pres.value;
            
             
		jugador = document.getElementById('UserPres');
		ajax = objetoAjax();
		ajax.open("POST", "consultados.php", true);
 
		ajax.onreadystatechange = function() {
			if (ajax.readyState == 4){
				jugador.value = (ajax.responseText) 
			}
		} 

		ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded"); 

		ajax.send("&UserNamePres="+userPres) 
    
    
}
function enviarNumber_of_vials()
{
              N_VialPres= document.organism_info.txtNumber_of_vialsPres.value;
            
             
		jugador = document.getElementById('Numbervials');
		ajax = objetoAjax();
		ajax.open("POST", "consultados.php", true);
 
		ajax.onreadystatechange = function() {
			if (ajax.readyState == 4){
				jugador.value = (ajax.responseText) 
			}
		} 

		ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded"); 

		ajax.send("&NumVialsPres="+N_VialPres) 
    
    
}
function enviarVolume_of_vials()
{
              V_VialPres= document.organism_info.txtVolume_of_vials.value;
            
             
		jugador = document.getElementById('Volume_of_vialsPres');
		ajax = objetoAjax();
		ajax.open("POST", "consultados.php", true);
 
		ajax.onreadystatechange = function() {
			if (ajax.readyState == 4){
				jugador.value = (ajax.responseText) 
			}
		} 

		ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded"); 

		ajax.send("&VolVialsPres="+V_VialPres) 
    
    
}

function enviarStorage_Pres()
{
              StorePres= document.organism_info.txtStorage_Pres.value;
            
             
		jugador = document.getElementById('Storage_PresePres');
		ajax = objetoAjax();
		ajax.open("POST", "consultados.php", true);
 
		ajax.onreadystatechange = function() {
			if (ajax.readyState == 4){
				jugador.value = (ajax.responseText) 
			}
		} 

		ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded"); 

		ajax.send("&StorPres="+StorePres) 
    
    
}
function enviarComments_Pres()
{
              CommentPres= document.organism_info.txtComments_Pres.value;
            
             
		jugador = document.getElementById('CommentsPres');
		ajax = objetoAjax();
		ajax.open("POST", "consultados.php", true);
 
		ajax.onreadystatechange = function() {
			if (ajax.readyState == 4){
				jugador.value = (ajax.responseText) 
			}
		} 

		ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded"); 

		ajax.send("&CommPres="+CommentPres) 
    
    
}

function enviarOrg_Name_DNA()
{
              NameDna= document.organism_info.txtNameDNA.value;
            
             
		jugador = document.getElementById('NameDNA');
		ajax = objetoAjax();
		ajax.open("POST", "consultados.php", true);
 
		ajax.onreadystatechange = function() {
			if (ajax.readyState == 4){
				jugador.value = (ajax.responseText) 
			}
		} 

		ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded"); 

		ajax.send("&DnaName="+NameDna) 
    
    
}

function enviarExtraction_Method_Name()
{
              ExtraDna= document.organism_info.txtExtraMethod.value;
            
             
		jugador = document.getElementById('ExtraMethod');
		ajax = objetoAjax();
		ajax.open("POST", "consultados.php", true);
 
		ajax.onreadystatechange = function() {
			if (ajax.readyState == 4){
				jugador.value = (ajax.responseText) 
			}
		} 

		ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded"); 

		ajax.send("&ExtractionDna="+ExtraDna) 
    
    
}
function enviarDate_of_preservationD()
{
              Date1DNA= document.organism_info.txtDatePresD1.value;
              Date2DNA= document.organism_info.txtDatePresD2.value;
             
		jugador = document.getElementById('DatePreserD');
		ajax = objetoAjax();
		ajax.open("POST", "consultados.php", true);
 
		ajax.onreadystatechange = function() {
			if (ajax.readyState == 4){
				jugador.value = (ajax.responseText) 
			}
		} 

		ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded"); 

		ajax.send("&Dat1DNA="+Date1DNA+"&Dat2DNA="+Date2DNA) 
    
    
}



function enviarConcentration_DNA()
{
              ConcenDna= document.organism_info.txtConcentration_DNA.value;
            
             
		jugador = document.getElementById('ConcentrationDNA');
		ajax = objetoAjax();
		ajax.open("POST", "consultados.php", true);
 
		ajax.onreadystatechange = function() {
			if (ajax.readyState == 4){
				jugador.value = (ajax.responseText) 
			}
		} 

		ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded"); 

		ajax.send("&ConcentrationDna="+ConcenDna) 
    
    
}
function enviarVolume_DNA()
{
              ConcenDna= document.organism_info.txtConcentration_DNA.value;
            
             
		jugador = document.getElementById('ConcentrationDNA');
		ajax = objetoAjax();
		ajax.open("POST", "consultados.php", true);
 
		ajax.onreadystatechange = function() {
			if (ajax.readyState == 4){
				jugador.value = (ajax.responseText) 
			}
		} 

		ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded"); 

		ajax.send("&ConcentrationDna="+ConcenDna) 
    
    
}

function enviarUser_DNA()
{
              UserDna= document.organism_info.txtUser_DNA.value;
            
             
		jugador = document.getElementById('UserDNA');
		ajax = objetoAjax();
		ajax.open("POST", "consultados.php", true);
 
		ajax.onreadystatechange = function() {
			if (ajax.readyState == 4){
				jugador.value = (ajax.responseText) 
			}
		} 

		ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded"); 

		ajax.send("&NameUserDna="+UserDna) 
    
    
}

function enviarStorage_DNA()
{
              StorageDna= document.organism_info.txtStorage_DNA.value;
            
             
		jugador = document.getElementById('StorageDNA');
		ajax = objetoAjax();
		ajax.open("POST", "consultados.php", true);
 
		ajax.onreadystatechange = function() {
			if (ajax.readyState == 4){
				jugador.value = (ajax.responseText) 
			}
		} 

		ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded"); 

		ajax.send("&NameStorageDna="+StorageDna) 
    
    
}

function enviarOrg_Name_Genetic()
{
              NameGenetic= document.organism_info.txtNameGenetic.value;
            
             
		jugador = document.getElementById('NameGenetic');
		ajax = objetoAjax();
		ajax.open("POST", "consultados.php", true);
 
		ajax.onreadystatechange = function() {
			if (ajax.readyState == 4){
				jugador.value = (ajax.responseText) 
			}
		} 

		ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded"); 

		ajax.send("&NameDGenetic="+NameGenetic) 
    
    
}
function enviarTaxonomic_lineage()
{
              TaxoGenetic= document.organism_info.txtTaxonomic_lineage.value;
            
             
		jugador = document.getElementById('Taxonomiclineage');
		ajax = objetoAjax();
		ajax.open("POST", "consultados.php", true);
 
		ajax.onreadystatechange = function() {
			if (ajax.readyState == 4){
				jugador.value = (ajax.responseText) 
			}
		} 

		ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded"); 

		ajax.send("&TaxonomicGenetic="+TaxoGenetic) 
    
    
}
function enviarGene()
{
              GeneGenetic= document.organism_info.txtGene.value;
            
             
		jugador = document.getElementById('Gene');
		ajax = objetoAjax();
		ajax.open("POST", "consultados.php", true);
 
		ajax.onreadystatechange = function() {
			if (ajax.readyState == 4){
				jugador.value = (ajax.responseText) 
			}
		} 

		ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded"); 

		ajax.send("&GeneDGenetic="+GeneGenetic) 
    
    
}
function enviarSequencing_Method_Name()
{
              SequenGenetic= document.organism_info.txtSequenGen.value;
            
             
		jugador = document.getElementById('SequenGen');
		ajax = objetoAjax();
		ajax.open("POST", "consultados.php", true);
 
		ajax.onreadystatechange = function() {
			if (ajax.readyState == 4){
				jugador.value = (ajax.responseText) 
			}
		} 

		ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded"); 

		ajax.send("&SEquencingGenetic="+SequenGenetic) 
    
    
}
function enviarCured_sequence()
{
              CuredGenetic= document.organism_info.txtCured_sequence.value;
            
             
		jugador = document.getElementById('Curedsequence');
		ajax = objetoAjax();
		ajax.open("POST", "consultados.php", true);
 
		ajax.onreadystatechange = function() {
			if (ajax.readyState == 4){
				jugador.value = (ajax.responseText) 
			}
		} 

		ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded"); 

		ajax.send("&CureGenetic="+CuredGenetic) 
    
    
}
function enviarComments_Genetic()
{
              CommentGenetic= document.organism_info.txtComments_Genetic.value;
            
             
		jugador = document.getElementById('CommentsGenetic');
		ajax = objetoAjax();
		ajax.open("POST", "consultados.php", true);
 
		ajax.onreadystatechange = function() {
			if (ajax.readyState == 4){
				jugador.value = (ajax.responseText) 
			}
		} 

		ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded"); 

		ajax.send("&ComGenetic="+CommentGenetic) 
    
    
}
function enviarUser_Meta()
{
              UserMeta= document.organism_info.txtUser_Meta.value;
            
             
		jugador = document.getElementById('UserMeta');
		ajax = objetoAjax();
		ajax.open("POST", "consultados.php", true);
 
		ajax.onreadystatechange = function() {
			if (ajax.readyState == 4){
				jugador.value = (ajax.responseText) 
			}
		} 

		ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded"); 

		ajax.send("&UserMeta="+UserMeta) 
    
    
}
function enviarMedium_Meta()
{
              MediumMeta= document.organism_info.txtMedium_Meta.value;
            
             
		jugador = document.getElementById('MediumMeta');
		ajax = objetoAjax();
		ajax.open("POST", "consultados.php", true);
 
		ajax.onreadystatechange = function() {
			if (ajax.readyState == 4){
				jugador.value = (ajax.responseText) 
			}
		} 

		ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded"); 

		ajax.send("&MedMeta="+MediumMeta) 
    
    
}

function enviarTemperature_Meta()
{
             T1Meta= document.organism_info.txtTemperatureIMeta.value;
            T2Meta= document.organism_info.txtTemperatureFMeta.value;
            
             
		jugador = document.getElementById('TemperatureMeta');
		ajax = objetoAjax();
		ajax.open("POST", "consultados.php", true);
 
		ajax.onreadystatechange = function() {
			if (ajax.readyState == 4){
				jugador.value = (ajax.responseText) 
			}
		} 

		ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded"); 

		ajax.send("&Temp1Meta="+T1Meta+"Temp2Meta="+T2Meta) 
    
    
}
function enviarAgitation_Meta()
{
             AgitatMeta= document.organism_info.txtAgitation_Meta.value;
           
             
		jugador = document.getElementById('AgitationMeta');
		ajax = objetoAjax();
		ajax.open("POST", "consultados.php", true);
 
		ajax.onreadystatechange = function() {
			if (ajax.readyState == 4){
				jugador.value = (ajax.responseText) 
			}
		} 

		ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded"); 

		ajax.send("&AgitationMeta="+AgitatMeta) 
    
    
}
function enviarTime_Meta()
{
             Time_Meta= document.organism_info.txtTime_Meta.value;
           
             
		jugador = document.getElementById('TimeMeta');
		ajax = objetoAjax();
		ajax.open("POST", "consultados.php", true);
 
		ajax.onreadystatechange = function() {
			if (ajax.readyState == 4){
				jugador.value = (ajax.responseText) 
			}
		} 

		ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded"); 

		ajax.send("&TimMeta="+Time_Meta) 
    
    
}
function enviarpH_Meta()
{
             PH1Meta= document.organism_info.txtpHI_Meta.value;
             PH2Meta= document.organism_info.txtpHF_Meta.value;
             
		jugador = document.getElementById('PhMeta');
		ajax = objetoAjax();
		ajax.open("POST", "consultados.php", true);
 
		ajax.onreadystatechange = function() {
			if (ajax.readyState == 4){
				jugador.value = (ajax.responseText) 
			}
		} 

		ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded"); 

		ajax.send("&PH1_Meta="+PH1Meta+"PH2_Meta="+PH2Meta) 
    
    
}
function enviarOD600_Meta()
{
             OD6001Meta= document.organism_info.txtOD600_initialMeta.value;
             OD6002Meta= document.organism_info.txtOD600_finalMeta.value;
             
		jugador = document.getElementById('OD600Meta');
		ajax = objetoAjax();
		ajax.open("POST", "consultados.php", true);
 
		ajax.onreadystatechange = function() {
			if (ajax.readyState == 4){
				jugador.value = (ajax.responseText) 
			}
		} 

		ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded"); 

		ajax.send("&OD1_Meta="+OD6001Meta+"OD2_Meta="+OD6002Meta) 
    
    
}
function enviarComments_Meta()
{
             ComentMeta= document.organism_info.txtComments_Meta.value;
           
             
		jugador = document.getElementById('CommentsMeta');
		ajax = objetoAjax();
		ajax.open("POST", "consultados.php", true);
 
		ajax.onreadystatechange = function() {
			if (ajax.readyState == 4){
				jugador.value = (ajax.responseText) 
			}
		} 

		ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded"); 

		ajax.send("&ComMeta="+ComentMeta) 
    
    
}
function enviarAssay_Type_Name()
{
             Name_Assay= document.organism_info.txtAssay_Type_Name.value;
           
             
		jugador = document.getElementById('AssayTypeName');
		ajax = objetoAjax();
		ajax.open("POST", "consultados.php", true);
 
		ajax.onreadystatechange = function() {
			if (ajax.readyState == 4){
				jugador.value = (ajax.responseText) 
			}
		} 

		ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded"); 

		ajax.send("&NameAssay="+Name_Assay) 
    
    
}

function enviarMedium_Bio()
{
             MediumBioAssay= document.organism_info.txtMedium_Bio.value;
           
             
		jugador = document.getElementById('MediumBio');
		ajax = objetoAjax();
		ajax.open("POST", "consultados.php", true);
 
		ajax.onreadystatechange = function() {
			if (ajax.readyState == 4){
				jugador.value = (ajax.responseText) 
			}
		} 

		ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded"); 

		ajax.send("&MedBio="+MediumBioAssay) 
    
    
}
function enviarTemperature_Bio()
{
             Temp1BioAssay= document.organism_info.txtTempInicialBio.value;
            Temp2BioAssay= document.organism_info.txtTempFinalBio.value;
             
		jugador = document.getElementById('TemperatureBio');
		ajax = objetoAjax();
		ajax.open("POST", "consultados.php", true);
 
		ajax.onreadystatechange = function() {
			if (ajax.readyState == 4){
				jugador.value = (ajax.responseText) 
			}
		} 

		ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded"); 

		ajax.send("&Tem1Bio="+Temp1BioAssay+"Tem2Bio="+Temp2BioAssay) 
    
    
}
function enviarInhibition()
{
             Inhibition= document.organism_info.txtInhibition.value;
           
             
		jugador = document.getElementById('InhibitionBio');
		ajax = objetoAjax();
		ajax.open("POST", "consultados.php", true);
 
		ajax.onreadystatechange = function() {
			if (ajax.readyState == 4){
				jugador.value = (ajax.responseText) 
			}
		} 

		ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded"); 

		ajax.send("&Inhi="+Inhibition) 
    
    
}
function enviarInhibition_measurament()
{
             InhibitionMeasu= document.organism_info.txtInhiMeasu.value;
           
             
		jugador = document.getElementById('InhiMeasu');
		ajax = objetoAjax();
		ajax.open("POST", "consultados.php", true);
 
		ajax.onreadystatechange = function() {
			if (ajax.readyState == 4){
				jugador.value = (ajax.responseText) 
			}
		} 

		ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded"); 

		ajax.send("&InhiM="+InhibitionMeasu) 
    
    
}
function enviarAntagonist_strain()
{
             anta= document.organism_info.txtAntagonist_strain.value;
           
             
		jugador = document.getElementById('Antagoniststrain');
		ajax = objetoAjax();
		ajax.open("POST", "consultados.php", true);
 
		ajax.onreadystatechange = function() {
			if (ajax.readyState == 4){
				jugador.value = (ajax.responseText) 
			}
		} 

		ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded"); 

		ajax.send("&Antagonis="+anta) 
    
    
}
function enviarComments_bio()
{
             Comen= document.organism_info.txtComments_bio.value;
           
             
		jugador = document.getElementById('Commentsbio');
		ajax = objetoAjax();
		ajax.open("POST", "consultados.php", true);
 
		ajax.onreadystatechange = function() {
			if (ajax.readyState == 4){
				jugador.value = (ajax.responseText) 
			}
		} 

		ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded"); 

		ajax.send("&ComenBio="+Comen) 
    
    
}

function enviarCoordinates()
{
             long= document.organism_info.txtLongi.value;
                lat= document.organism_info.txtLat.value;
           
             
		jugador = document.getElementById('Cordena');
		ajax = objetoAjax();
		ajax.open("POST", "consultados.php", true);
 
		ajax.onreadystatechange = function() {
			if (ajax.readyState == 4){
				jugador.value = (ajax.responseText) 
			}
		} 

		ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded"); 

		ajax.send("&Cord1="+long+"Cord2="+lat) 
    
    
}


function enviarDateInso1(caja1,caja2,muestra)
{ 
              Date1Iso = caja1.value;
               Date2Iso = caja2.value;
            
              acum="DateInsolated"+muestra;
           
		jugador = document.getElementById(acum);
		ajax = objetoAjax();
		ajax.open("POST", "consultados_3.php", true);
 
		ajax.onreadystatechange = function() {
			if (ajax.readyState == 4){
				jugador.value = (ajax.responseText) 
			}
		} 

		ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded"); 

		ajax.send("&Date1Iso="+Date1Iso+"&Date2Iso="+Date2Iso) 
    
    
}
function enviarOrigin1(caja,muestra)
{
              origin = caja.value;
             
            acum="Origin"+muestra;
		jugador = document.getElementById(acum);
		ajax = objetoAjax();
		ajax.open("POST", "consultados.php", true);
 
		ajax.onreadystatechange = function() {
			if (ajax.readyState == 4){
				jugador.value = (ajax.responseText) 
			}
		} 

		ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded"); 

		ajax.send("&orig="+origin) 
    
    
}
function enviarCommentsOrg1(caja1,muestra)
{
              ComentsOr = caja1.value;
             
            acum="CommentsOrigin"+muestra;
		jugador = document.getElementById(acum);
		ajax = objetoAjax();
		ajax.open("POST", "consultados.php", true);
 
		ajax.onreadystatechange = function() {
			if (ajax.readyState == 4){
				jugador.value = (ajax.responseText) 
			}
		} 

		ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded"); 

		ajax.send("&ComentOr="+ComentsOr) 
    
    
}

function enviarName_Org_Macro1(caja1,muestra)
{
              nameMacro = caja1.value;
             
            acum="NameMacro"+muestra;
		jugador = document.getElementById(acum);
		ajax = objetoAjax();
		ajax.open("POST", "consultados.php", true);
 
		ajax.onreadystatechange = function() {
			if (ajax.readyState == 4){
				jugador.value = (ajax.responseText) 
			}
		} 

		ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded"); 

		ajax.send("&NameMacro="+nameMacro) 
    
    
}
function enviarMedium_Macro1(caja1,muestra)
{
              MediumMa= caja1.value;
             
            acum="MediumMacro"+muestra;
		jugador = document.getElementById(acum);
		ajax = objetoAjax();
		ajax.open("POST", "consultados.php", true);
 
		ajax.onreadystatechange = function() {
			if (ajax.readyState == 4){
				jugador.value = (ajax.responseText) 
			}
		} 

		ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded"); 

		ajax.send("&MedMacro="+MediumMa) 
    
    
}
function enviarTemperature_Macro1(caja1,caja2,muestra)
{
              temp1Ma= caja1.value;
              temp2Ma= caja2.value;
            acum="TempMacro"+muestra;
		jugador = document.getElementById('');
		ajax = objetoAjax();
		ajax.open("POST", "consultados.php", true);
 
		ajax.onreadystatechange = function() {
			if (ajax.readyState == 4){
				jugador.value = (ajax.responseText) 
			}
		} 

		ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded"); 

		ajax.send("&Tempera1Macro="+temp1Ma+"&Tempera2Macro="+temp2Ma) 
    
    
}
function enviarAgitation_Macro1(caja1,muestra)
{
              AgiMa=caja1.value;
            acum="AgritationMacro"+muestra;
		jugador = document.getElementById(acum);
		ajax = objetoAjax();
		ajax.open("POST", "consultados.php", true);
 
		ajax.onreadystatechange = function() {
			if (ajax.readyState == 4){
				jugador.value = (ajax.responseText) 
			}
		} 

		ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded"); 

		ajax.send("&AgitMacro="+AgiMa) 
    
    
}
function enviarAge_Macro1(caja1,muestra)
{
              AgeMa= caja1.value;
            acum="AgeMacro"+muestra;
		jugador = document.getElementById(acum);
		ajax = objetoAjax();
		ajax.open("POST", "consultados.php", true);
 
		ajax.onreadystatechange = function() {
			if (ajax.readyState == 4){
				jugador.value = (ajax.responseText) 
			}
		} 

		ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded"); 

		ajax.send("&AgeDMacro="+AgeMa) 
    
    
}
function enviarSize_Macro1(caja1,muestra)
{
              SizeMa= caja1.value;
            acum="SizeMacro"+muestra;
		jugador = document.getElementById(acum);
		ajax = objetoAjax();
		ajax.open("POST", "consultados.php", true);
 
		ajax.onreadystatechange = function() {
			if (ajax.readyState == 4){
				jugador.value = (ajax.responseText) 
			}
		} 

		ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded"); 

		ajax.send("&SizeDMacro="+SizeMa) 
    
    
}
function enviarSurface_Macro1(caja1,muestra)
{
              SurfMa= caja1.value;
            acum="SurfaceMacro"+muestra;
		jugador = document.getElementById(acum);
		ajax = objetoAjax();
		ajax.open("POST", "consultados.php", true);
 
		ajax.onreadystatechange = function() {
			if (ajax.readyState == 4){
				jugador.value = (ajax.responseText) 
			}
		} 

		ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded"); 

		ajax.send("&SurfaceDMacro="+SurfMa) 
    
    
}
function enviarName_Org_Micro1(caja1,muestra)
{
              NameMi= caja1.value;
            acum="NameMicro"+muestra
		jugador = document.getElementById(acum);
		ajax = objetoAjax();
		ajax.open("POST", "consultados.php", true);
 
		ajax.onreadystatechange = function() {
			if (ajax.readyState == 4){
				jugador.value = (ajax.responseText) 
			}
		} 

		ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded"); 

		ajax.send("&NameDMicro="+NameMi) 
    
    
}
function enviarMedium_Micro1(caja1,muestra)
{
              MediumMi= caja1.value;
                 acum="MediumMicro"+muestra
		jugador = document.getElementById(acum);
		ajax = objetoAjax();
		ajax.open("POST", "consultados.php", true);
 
		ajax.onreadystatechange = function() {
			if (ajax.readyState == 4){
				jugador.value = (ajax.responseText) 
			}
		} 

		ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded"); 

		ajax.send("&MediumDMicro="+MediumMi) 
    
    
}
function enviarTemperature_Micro1(caja1,caja2,muestra)
{
              Tem1Mi= caja1.value;
              Tem2Mi= caja2.value;
            acum="TemperatureMicro"+muestra;
		jugador = document.getElementById(acum);
		ajax = objetoAjax();
		ajax.open("POST", "consultados.php", true);
 
		ajax.onreadystatechange = function() {
			if (ajax.readyState == 4){
				jugador.value = (ajax.responseText) 
			}
		} 

		ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded"); 

		ajax.send("&Tem1Micro="+Tem1Mi+"&Tem2Micro"+Tem2Mi) 
    
    
}

function enviarAgitation_Micro1(caja1,muestra)
{
              AgitMi= caja1.value;
             acum="AgitationMicro"+muestra;
		jugador = document.getElementById(acum);
		ajax = objetoAjax();
		ajax.open("POST", "consultados.php", true);
 
		ajax.onreadystatechange = function() {
			if (ajax.readyState == 4){
				jugador.value = (ajax.responseText) 
			}
		} 

		ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded"); 

		ajax.send("&AgitMicro="+AgitMi) 
    
    
}
function enviarAge_Micro1(caja1,muestra)
{
              AgeMi= caja1.value;
             acum="AgeMicro"+muestra;
		jugador = document.getElementById(acum);
		ajax = objetoAjax();
		ajax.open("POST", "consultados.php", true);
 
		ajax.onreadystatechange = function() {
			if (ajax.readyState == 4){
				jugador.value = (ajax.responseText) 
			}
		} 

		ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded"); 

		ajax.send("&AgeMicro="+AgeMi) 
    
    
}
function enviarAxis1(caja1,caja2,muestra)
{
              Axis1Mi= caja1.value;
             Axis2Mi= caja2.value;
             acum="Axislong"+muestra;
		jugador = document.getElementById(acum);
		ajax = objetoAjax();
		ajax.open("POST", "consultados.php", true);
 
		ajax.onreadystatechange = function() {
			if (ajax.readyState == 4){
				jugador.value = (ajax.responseText) 
			}
		} 

		ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded"); 

		ajax.send("&Axis1="+Axis1Mi+"&Axis2="+Axis2Mi) 
    
    
}
function enviarMotility1(caja1,muestra)
{
              MolyMi= caja1.value;
             acum="MotilityMicro"+muestra;
		jugador = document.getElementById(acum);
		ajax = objetoAjax();
		ajax.open("POST", "consultados.php", true);
 
		ajax.onreadystatechange = function() {
			if (ajax.readyState == 4){
				jugador.value = (ajax.responseText) 
			}
		} 

		ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded"); 

		ajax.send("&Molity="+MolyMi) 
    
    
}
function enviarAggregates1(caja1,muestra)
{
              AgregaMi= caja1.value;
             acum="AggregatesMicro"+muestra;
		jugador = document.getElementById(acum);
		ajax = objetoAjax();
		ajax.open("POST", "consultados.php", true);
 
		ajax.onreadystatechange = function() {
			if (ajax.readyState == 4){
				jugador.value = (ajax.responseText) 
			}
		} 

		ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded"); 

		ajax.send("&AgregatesM="+AgregaMi) 
    
    
}
function enviarBiofilm_formation1(caja1,muestra)
{
              BiofilMi= caja1.value;
             acum="Biofilm_formationMicro"+muestra;
		jugador = document.getElementById(acum);
		ajax = objetoAjax();
		ajax.open("POST", "consultados.php", true);
 
		ajax.onreadystatechange = function() {
			if (ajax.readyState == 4){
				jugador.value = (ajax.responseText) 
			}
		} 

		ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded"); 

		ajax.send("&BiofilmM="+BiofilMi) 
    
    
}
function enviarGram_test1(caja1,muestra)
{
              GramMi= caja1.value;
             acum="Gram_testMicro"+muestra;
		jugador = document.getElementById(acum);
		ajax = objetoAjax();
		ajax.open("POST", "consultados.php", true);
 
		ajax.onreadystatechange = function() {
			if (ajax.readyState == 4){
				jugador.value = (ajax.responseText) 
			}
		} 

		ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded"); 

		ajax.send("&GramT="+GramMi) 
    
    
}
function enviarOrg_Name_Grow1(caja1,muestra)
{
              NameGrow= caja1.value;
             acum="NameGrow"+muestra;
		jugador = document.getElementById(acum);
		ajax = objetoAjax();
		ajax.open("POST", "consultados.php", true);
 
		ajax.onreadystatechange = function() {
			if (ajax.readyState == 4){
				jugador.value = (ajax.responseText) 
			}
		} 

		ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded"); 

		ajax.send("&NameDGrow="+NameGrow) 
    
    
}
function enviarMedium_solid1(caja1,muestra)
{
              MediumSoliGrow= caja1.value;
             acum="Medium_solidGrow"+muestra;
		jugador = document.getElementById(acum);
		ajax = objetoAjax();
		ajax.open("POST", "consultados.php", true);
 
		ajax.onreadystatechange = function() {
			if (ajax.readyState == 4){
				jugador.value = (ajax.responseText) 
			}
		} 

		ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded"); 

		ajax.send("&MedSolidGrow="+MediumSoliGrow) 
    
    
}
function enviarTemperature_solid1(caja1,caja2,muestra)
{
              TempS1Grow= caja1.value;
              TempS2Grow= caja2.value;
             acum="TemperatureSGrow"+muestra;
		jugador = document.getElementById(acum);
		ajax = objetoAjax();
		ajax.open("POST", "consultados.php", true);
 
		ajax.onreadystatechange = function() {
			if (ajax.readyState == 4){
				jugador.value = (ajax.responseText) 
			}
		} 

		ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded"); 

		ajax.send("&TSolid1Grow="+TempS1Grow+"&TSolid2Grow="+TempS2Grow) 
    
    
}

function enviarTime_solid1(caja1,muestra)
{
              TimeSGrow= caja1.value;
                acum="Time_solidGrow"+muestra;
		jugador = document.getElementById(acum);
		ajax = objetoAjax();
		ajax.open("POST", "consultados.php", true);
 
		ajax.onreadystatechange = function() {
			if (ajax.readyState == 4){
				jugador.value = (ajax.responseText) 
			}
		} 

		ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded"); 

		ajax.send("&TSolid1Grow="+TimeSGrow) 
    
    
}
function enviarMedium_liquid1(caja1,muestra)
{
              MediumLGrow= caja1.value;
            acum="Medium_liquidGrow"+muestra;
		jugador = document.getElementById(acum);
		ajax = objetoAjax();
		ajax.open("POST", "consultados.php", true);
 
		ajax.onreadystatechange = function() {
			if (ajax.readyState == 4){
				jugador.value = (ajax.responseText) 
			}
		} 

		ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded"); 

		ajax.send("&MediumLiqGrow="+MediumLGrow) 
    
    
}
function enviarTemperature_liquid1(caja1,caja2,muestra)
{
              TempL1Grow= caja1.value;
              TempL2Grow= caja2.value;
             acum="TempLiqGrow"+muestra;
		jugador = document.getElementById(acum);
		ajax = objetoAjax();
		ajax.open("POST", "consultados.php", true);
 
		ajax.onreadystatechange = function() {
			if (ajax.readyState == 4){
				jugador.value = (ajax.responseText) 
			}
		} 

		ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded"); 

		ajax.send("&TLiquid1Grow="+TempL1Grow+"&TLiquid2Grow="+TempL2Grow) 
    
    
}
function enviarAgitation_time1(caja1,muestra)
{
              AgitGrow= caja1.value;
              acum="Agitation_timeGrow"+muestra;
		jugador = document.getElementById(acum);
		ajax = objetoAjax();
		ajax.open("POST", "consultados.php", true);
 
		ajax.onreadystatechange = function() {
			if (ajax.readyState == 4){
				jugador.value = (ajax.responseText) 
			}
		} 

		ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded"); 

		ajax.send("&AgitDGrow="+AgitGrow) 
    
    
}
function enviarTime_liquid1(caja1,muestra)
{
              TimeLGrow= caja1.value;
              acum="Time_liquidGrow"+muestra;
		jugador = document.getElementById(acum);
		ajax = objetoAjax();
		ajax.open("POST", "consultados.php", true);
 
		ajax.onreadystatechange = function() {
			if (ajax.readyState == 4){
				jugador.value = (ajax.responseText) 
			}
		} 

		ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded"); 

		ajax.send("&TimeLiquidGrow="+TimeLGrow) 
    
    
}
function enviarPH1(caja1,caja2,muestra)
{
              PH1Grow= caja1.value;
              PH2Grow= caja2.value;
             acum="PhGrow"+muestra;
		jugador = document.getElementById(acum);
		ajax = objetoAjax();
		ajax.open("POST", "consultados.php", true);
 
		ajax.onreadystatechange = function() {
			if (ajax.readyState == 4){
				jugador.value = (ajax.responseText) 
			}
		} 

		ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded"); 

		ajax.send("&PHunoGrow="+PH1Grow+"&PHdosGrow="+PH2Grow) 
    
    
}
function enviarOD6001(caja1,caja2,muestra)
{
              D1Grow= caja1.value;
              D2Grow= caja2.value;
             acum="OD600Grow"+muestra;
		jugador = document.getElementById(acum);
		ajax = objetoAjax();
		ajax.open("POST", "consultados.php", true);
 
		ajax.onreadystatechange = function() {
			if (ajax.readyState == 4){
				jugador.value = (ajax.responseText) 
			}
		} 

		ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded"); 

		ajax.send("&DunoGrow="+D1Grow+"&DdosGrow="+D2Grow) 
    
    
}
function enviarExtra_parameters1(caja1,muestra)
{
              ExtraPaGrow= caja1.value;
            
             acum="ExtraparametersGrow"+muestra;
		jugador = document.getElementById(acum);
		ajax = objetoAjax();
		ajax.open("POST", "consultados.php", true);
 
		ajax.onreadystatechange = function() {
			if (ajax.readyState == 4){
				jugador.value = (ajax.responseText) 
			}
		} 

		ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded"); 

		ajax.send("&ParameGrow="+ExtraPaGrow) 
    
    
}
function enviarOrg_Name_Pres1(caja1,muestra)
{
              NamedPres= caja1.value;
            
             acum="NamePres"+muestra;
		jugador = document.getElementById(acum);
		ajax = objetoAjax();
		ajax.open("POST", "consultados.php", true);
 
		ajax.onreadystatechange = function() {
			if (ajax.readyState == 4){
				jugador.value = (ajax.responseText) 
			}
		} 

		ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded"); 

		ajax.send("&NameDPres="+NamedPres) 
    
    
}
function enviarPreservation_Method_Name1(caja1,muestra)
{
              MethodPres=caja1.value;
            
             acum="Preservmethod"+muestra;
		jugador = document.getElementById(acum);
		ajax = objetoAjax();
		ajax.open("POST", "consultados.php", true);
 
		ajax.onreadystatechange = function() {
			if (ajax.readyState == 4){
				jugador.value = (ajax.responseText) 
			}
		} 

		ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded"); 

		ajax.send("&MethodDPres="+MethodPres) 
    
    
}
function enviarDate_of_preservation1(caja1,caja2,muestra)
{
              Date1Pres=caja1.value;
              Date2Pres= caja2.value;
             acum="DatePreser"+muestra;
		jugador = document.getElementById(acum);
		ajax = objetoAjax();
		ajax.open("POST", "consultados.php", true);
 
		ajax.onreadystatechange = function() {
			if (ajax.readyState == 4){
				jugador.value = (ajax.responseText) 
			}
		} 

		ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded"); 

		ajax.send("&Dat1Pres="+Date1Pres+"&Dat2Pres="+Date2Pres) 
    
    
}

function enviarUser_Pres1(caja1,muestra)
{
              userPres= caja1.value;
            
             acum="UserPres"+muestra;
		jugador = document.getElementById(acum);
		ajax = objetoAjax();
		ajax.open("POST", "consultados.php", true);
 
		ajax.onreadystatechange = function() {
			if (ajax.readyState == 4){
				jugador.value = (ajax.responseText) 
			}
		} 

		ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded"); 

		ajax.send("&UserNamePres="+userPres) 
    
    
}
function enviarNumber_of_vials1(caja1,muestra)
{
              N_VialPres= caja1.value;
            
             acum="Numbervials"+muestra;
		jugador = document.getElementById(acum);
		ajax = objetoAjax();
		ajax.open("POST", "consultados.php", true);
 
		ajax.onreadystatechange = function() {
			if (ajax.readyState == 4){
				jugador.value = (ajax.responseText) 
			}
		} 

		ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded"); 

		ajax.send("&NumVialsPres="+N_VialPres) 
    
    
}
function enviarVolume_of_vials1(caja1,muestra)
{
              V_VialPres= caja1.value;
            
             acum="Volume_of_vialsPres"+muestra;
		jugador = document.getElementById(acum);
		ajax = objetoAjax();
		ajax.open("POST", "consultados.php", true);
 
		ajax.onreadystatechange = function() {
			if (ajax.readyState == 4){
				jugador.value = (ajax.responseText) 
			}
		} 

		ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded"); 

		ajax.send("&VolVialsPres="+V_VialPres) 
    
    
}

function enviarStorage_Pres1(caja1,muestra)
{
              StorePres=caja1.value;
            
             acum="Storage_PresePres"+muestra;
		jugador = document.getElementById(acum);
		ajax = objetoAjax();
		ajax.open("POST", "consultados.php", true);
 
		ajax.onreadystatechange = function() {
			if (ajax.readyState == 4){
				jugador.value = (ajax.responseText) 
			}
		} 

		ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded"); 

		ajax.send("&StorPres="+StorePres) 
    
    
}
function enviarComments_Pres1(caja1,muestra)
{
              CommentPres= caja1.value;
            acum="CommentsPres"+muestra;
             
		jugador = document.getElementById(acum);
		ajax = objetoAjax();
		ajax.open("POST", "consultados.php", true);
 
		ajax.onreadystatechange = function() {
			if (ajax.readyState == 4){
				jugador.value = (ajax.responseText) 
			}
		} 

		ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded"); 

		ajax.send("&CommPres="+CommentPres) 
    
    
}

function enviarOrg_Name_DNA1(caja1,muestra)
{
              NameDna= caja1.value;
            acum="NameDNA"+muestra;
             
		jugador = document.getElementById(acum);
		ajax = objetoAjax();
		ajax.open("POST", "consultados.php", true);
 
		ajax.onreadystatechange = function() {
			if (ajax.readyState == 4){
				jugador.value = (ajax.responseText) 
			}
		} 

		ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded"); 

		ajax.send("&DnaName="+NameDna) 
    
    
}

function enviarExtraction_Method_Name1(caja1,muestra)
{
              ExtraDna= caja1.value;
            acum="ExtraMethod"+muestra;
             
		jugador = document.getElementById(acum);
		ajax = objetoAjax();
		ajax.open("POST", "consultados.php", true);
 
		ajax.onreadystatechange = function() {
			if (ajax.readyState == 4){
				jugador.value = (ajax.responseText) 
			}
		} 

		ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded"); 

		ajax.send("&ExtractionDna="+ExtraDna) 
    
    
}
function enviarDate_of_preservationD1(caja1,caja2,muestra)
{
              Date1DNA= caja1.value;
              Date2DNA= caja2.value;
             acum="DatePreserD"+muestra;
		jugador = document.getElementById(acum);
		ajax = objetoAjax();
		ajax.open("POST", "consultados.php", true);
 
		ajax.onreadystatechange = function() {
			if (ajax.readyState == 4){
				jugador.value = (ajax.responseText) 
			}
		} 

		ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded"); 

		ajax.send("&Dat1DNA="+Date1DNA+"&Dat2DNA="+Date2DNA) 
    
    
}



function enviarConcentration_DNA1(caja1)
{
              ConcenDna= caja1.value;
            acum="ConcentrationDNA"+muestra;
             
		jugador = document.getElementById(acum);
		ajax = objetoAjax();
		ajax.open("POST", "consultados.php", true);
 
		ajax.onreadystatechange = function() {
			if (ajax.readyState == 4){
				jugador.value = (ajax.responseText) 
			}
		} 

		ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded"); 

		ajax.send("&ConcentrationDna="+ConcenDna) 
    
    
}
function enviarVolume_DNA1(caja1,muestra)
{
              ConcenDna= caja1.value;
            
             acum="ConcentrationDNA"+muestra;
		jugador = document.getElementById(acum);
		ajax = objetoAjax();
		ajax.open("POST", "consultados.php", true);
 
		ajax.onreadystatechange = function() {
			if (ajax.readyState == 4){
				jugador.value = (ajax.responseText) 
			}
		} 

		ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded"); 

		ajax.send("&ConcentrationDna="+ConcenDna) 
    
    
}

function enviarUser_DNA1(caja1,muestra)
{
              UserDna= caja1.value;
            acum="UserDNA"+muestra;
             
		jugador = document.getElementById(acum);
		ajax = objetoAjax();
		ajax.open("POST", "consultados.php", true);
 
		ajax.onreadystatechange = function() {
			if (ajax.readyState == 4){
				jugador.value = (ajax.responseText) 
			}
		} 

		ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded"); 

		ajax.send("&NameUserDna="+UserDna) 
    
    
}

function enviarStorage_DNA1(caja1,muestra)
{
              StorageDna= caja1.value;
            acum="StorageDNA"+muestra;
             
		jugador = document.getElementById(acum);
		ajax = objetoAjax();
		ajax.open("POST", "consultados.php", true);
 
		ajax.onreadystatechange = function() {
			if (ajax.readyState == 4){
				jugador.value = (ajax.responseText) 
			}
		} 

		ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded"); 

		ajax.send("&NameStorageDna="+StorageDna) 
    
    
}

function enviarOrg_Name_Genetic1(caja1,muestra)
{
              NameGenetic= caja1.value;
            
             acum="NameGenetic"+muestra;
		jugador = document.getElementById(acum);
		ajax = objetoAjax();
		ajax.open("POST", "consultados.php", true);
 
		ajax.onreadystatechange = function() {
			if (ajax.readyState == 4){
				jugador.value = (ajax.responseText) 
			}
		} 

		ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded"); 

		ajax.send("&NameDGenetic="+NameGenetic) 
    
    
}
function enviarTaxonomic_lineage1(caja1,muestra)
{
              TaxoGenetic= caja1.value;
            acum="Taxonomiclineage"+muestra;
             
		jugador = document.getElementById(acum);
		ajax = objetoAjax();
		ajax.open("POST", "consultados.php", true);
 
		ajax.onreadystatechange = function() {
			if (ajax.readyState == 4){
				jugador.value = (ajax.responseText) 
			}
		} 

		ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded"); 

		ajax.send("&TaxonomicGenetic="+TaxoGenetic) 
    
    
}
function enviarGene1(caja1,muestra)
{
              GeneGenetic= caja1.value;
            acum="Gene"+muestra;
             
		jugador = document.getElementById(acum);
		ajax = objetoAjax();
		ajax.open("POST", "consultados.php", true);
 
		ajax.onreadystatechange = function() {
			if (ajax.readyState == 4){
				jugador.value = (ajax.responseText) 
			}
		} 

		ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded"); 

		ajax.send("&GeneDGenetic="+GeneGenetic) 
    
    
}
function enviarSequencing_Method_Name1(caja1,muestra)
{
              SequenGenetic= caja1.value;
            
             acum="SequenGen"+muestra;
		jugador = document.getElementById(acum);
		ajax = objetoAjax();
		ajax.open("POST", "consultados.php", true);
 
		ajax.onreadystatechange = function() {
			if (ajax.readyState == 4){
				jugador.value = (ajax.responseText) 
			}
		} 

		ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded"); 

		ajax.send("&SEquencingGenetic="+SequenGenetic) 
    
    
}
function enviarCured_sequence1(caja1,muestra)
{
              CuredGenetic= caja1.value;
            acum="Curedsequence"+muestra;
             
		jugador = document.getElementById(acum);
		ajax = objetoAjax();
		ajax.open("POST", "consultados.php", true);
 
		ajax.onreadystatechange = function() {
			if (ajax.readyState == 4){
				jugador.value = (ajax.responseText) 
			}
		} 

		ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded"); 

		ajax.send("&CureGenetic="+CuredGenetic) 
    
    
}
function enviarComments_Genetic1(caja1,muestra)
{
              CommentGenetic= caja1.value;
            acum="CommentsGenetic"+muestra;
             
		jugador = document.getElementById(acum);
		ajax = objetoAjax();
		ajax.open("POST", "consultados.php", true);
 
		ajax.onreadystatechange = function() {
			if (ajax.readyState == 4){
				jugador.value = (ajax.responseText) 
			}
		} 

		ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded"); 

		ajax.send("&ComGenetic="+CommentGenetic) 
    
    
}
function enviarUser_Meta1(caja1,muestra)
{
              UserMeta= caja1.value;
            
             acum="UserMeta"+muestra;
		jugador = document.getElementById(acum);
		ajax = objetoAjax();
		ajax.open("POST", "consultados.php", true);
 
		ajax.onreadystatechange = function() {
			if (ajax.readyState == 4){
				jugador.value = (ajax.responseText) 
			}
		} 

		ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded"); 

		ajax.send("&UserMeta="+UserMeta) 
    
    
}
function enviarMedium_Meta1(caja1,muestra)
{
              MediumMeta= caja1.value;
            
             acum="MediumMeta"+muestra;
		jugador = document.getElementById(acum);
		ajax = objetoAjax();
		ajax.open("POST", "consultados.php", true);
 
		ajax.onreadystatechange = function() {
			if (ajax.readyState == 4){
				jugador.value = (ajax.responseText) 
			}
		} 

		ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded"); 

		ajax.send("&MedMeta="+MediumMeta) 
    
    
}

function enviarTemperature_Meta1(caja1,caja2,muestra)
{
             T1Meta=caja1.value;
            T2Meta= caja2.value;
            
             acum="TemperatureMeta"+muestra;
		jugador = document.getElementById(acum);
		ajax = objetoAjax();
		ajax.open("POST", "consultados.php", true);
 
		ajax.onreadystatechange = function() {
			if (ajax.readyState == 4){
				jugador.value = (ajax.responseText) 
			}
		} 

		ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded"); 

		ajax.send("&Temp1Meta="+T1Meta+"Temp2Meta="+T2Meta) 
    
    
}
function enviarAgitation_Meta1(caja1,muestra)
{
             AgitatMeta= caja1.value;
           
             acum="AgitationMeta"+muestra;
		jugador = document.getElementById(acum);
		ajax = objetoAjax();
		ajax.open("POST", "consultados.php", true);
 
		ajax.onreadystatechange = function() {
			if (ajax.readyState == 4){
				jugador.value = (ajax.responseText) 
			}
		} 

		ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded"); 

		ajax.send("&AgitationMeta="+AgitatMeta) 
    
    
}
function enviarTime_Meta1(caja1,muestra)
{
             Time_Meta= caja1.value;
           acum="TimeMeta"+muestra;             
		jugador = document.getElementById(acum);
		ajax = objetoAjax();
		ajax.open("POST", "consultados.php", true);
 
		ajax.onreadystatechange = function() {
			if (ajax.readyState == 4){
				jugador.value = (ajax.responseText) 
			}
		} 

		ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded"); 

		ajax.send("&TimMeta="+Time_Meta) 
    
    
}
function enviarpH_Meta1(caja1,caja2,muestra)
{
             PH1Meta=caja1.value;
             PH2Meta= caja2.value;
             acum="PhMeta"+muestra
		jugador = document.getElementById(acum);
		ajax = objetoAjax();
		ajax.open("POST", "consultados.php", true);
 
		ajax.onreadystatechange = function() {
			if (ajax.readyState == 4){
				jugador.value = (ajax.responseText) 
			}
		} 

		ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded"); 

		ajax.send("&PH1_Meta="+PH1Meta+"PH2_Meta="+PH2Meta) 
    
    
}
function enviarOD600_Meta1(caja1,caja2,muestra)
{
             OD6001Meta= caja1.value;
             OD6002Meta= caja2.value;
             acum="OD600Meta"+muestra;
		jugador = document.getElementById(acum);
		ajax = objetoAjax();
		ajax.open("POST", "consultados.php", true);
 
		ajax.onreadystatechange = function() {
			if (ajax.readyState == 4){
				jugador.value = (ajax.responseText) 
			}
		} 

		ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded"); 

		ajax.send("&OD1_Meta="+OD6001Meta+"OD2_Meta="+OD6002Meta) 
    
    
}
function enviarComments_Meta1(caja1,muestra)
{
             ComentMeta= caja1.value;
           
             acum="CommentsMeta"+muestra;
		jugador = document.getElementById(acum);
		ajax = objetoAjax();
		ajax.open("POST", "consultados.php", true);
 
		ajax.onreadystatechange = function() {
			if (ajax.readyState == 4){
				jugador.value = (ajax.responseText) 
			}
		} 

		ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded"); 

		ajax.send("&ComMeta="+ComentMeta) 
    
    
}
function enviarAssay_Type_Name1(caja1,muestra)
{
             Name_Assay=caja1.value;
           
             acum="AssayTypeName"+muestra;
		jugador = document.getElementById(acum);
		ajax = objetoAjax();
		ajax.open("POST", "consultados.php", true);
 
		ajax.onreadystatechange = function() {
			if (ajax.readyState == 4){
				jugador.value = (ajax.responseText) 
			}
		} 

		ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded"); 

		ajax.send("&NameAssay="+Name_Assay) 
    
    
}

function enviarMedium_Bio1(caja1,muestra)
{
             MediumBioAssay= caja1.value;
             acum="MediumBio"+muestra;
           
             
		jugador = document.getElementById(acum);
		ajax = objetoAjax();
		ajax.open("POST", "consultados.php", true);
 
		ajax.onreadystatechange = function() {
			if (ajax.readyState == 4){
				jugador.value = (ajax.responseText) 
			}
		} 

		ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded"); 

		ajax.send("&MedBio="+MediumBioAssay) 
    
    
}
function enviarTemperature_Bio1(caja1,caja2,muestra)
{
             Temp1BioAssay= caja1.value;
            Temp2BioAssay= caja2.value;
             acum="TemperatureBio"+muestra;
		jugador = document.getElementById(acum);
		ajax = objetoAjax();
		ajax.open("POST", "consultados.php", true);
 
		ajax.onreadystatechange = function() {
			if (ajax.readyState == 4){
				jugador.value = (ajax.responseText) 
			}
		} 

		ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded"); 

		ajax.send("&Tem1Bio="+Temp1BioAssay+"Tem2Bio="+Temp2BioAssay) 
    
    
}
function enviarInhibition1(caja1,muestra)
{
             Inhibition= caja1.value;
           
             acum="InhibitionBio"+muestra;
		jugador = document.getElementById(acum);
		ajax = objetoAjax();
		ajax.open("POST", "consultados.php", true);
 
		ajax.onreadystatechange = function() {
			if (ajax.readyState == 4){
				jugador.value = (ajax.responseText) 
			}
		} 

		ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded"); 

		ajax.send("&Inhi="+Inhibition) 
    
    
}
function enviarInhibition_measurament1(caja1,muestra)
{
             InhibitionMeasu=caja1.value;
           
             acum="InhiMeasu"+muestra;
		jugador = document.getElementById(acum);
		ajax = objetoAjax();
		ajax.open("POST", "consultados.php", true);
 
		ajax.onreadystatechange = function() {
			if (ajax.readyState == 4){
				jugador.value = (ajax.responseText) 
			}
		} 

		ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded"); 

		ajax.send("&InhiM="+InhibitionMeasu) 
    
    
}
function enviarAntagonist_strain1(caja1,muestra)
{
             anta= caja1.value;
           
             acum="Antagoniststrain"+muestra;
		jugador = document.getElementById(acum);
		ajax = objetoAjax();
		ajax.open("POST", "consultados.php", true);
 
		ajax.onreadystatechange = function() {
			if (ajax.readyState == 4){
				jugador.value = (ajax.responseText) 
			}
		} 

		ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded"); 

		ajax.send("&Antagonis="+anta) 
    
    
}
function enviarComments_bio1(caja1,muestra)
{
             Comen= caja1.value;
           acum="Commentsbio"+muestra;
             
		jugador = document.getElementById(acum);
		ajax = objetoAjax();
		ajax.open("POST", "consultados.php", true);
 
		ajax.onreadystatechange = function() {
			if (ajax.readyState == 4){
				jugador.value = (ajax.responseText) 
			}
		} 

		ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded"); 

		ajax.send("&ComenBio="+Comen) 
    
    
}

function enviarCoordinates1(caja1,caja2,muestra)
{
             long= caja1.value;
                lat= caja2.value;
           
             acum="Cordena"+muestra;
		jugador = document.getElementById(acum);
		ajax = objetoAjax();
		ajax.open("POST", "consultados.php", true);
 
		ajax.onreadystatechange = function() {
			if (ajax.readyState == 4){
				jugador.value = (ajax.responseText) 
			}
		} 

		ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded"); 

		ajax.send("&Cord1="+long+"Cord2="+lat) 
    
    
}
