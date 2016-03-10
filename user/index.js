// JavaScript Document

$(document).ready(function(){
	fn_buscar();
	$("#grilla tbody tr").mouseover(function(){
		$(this).addClass("over");
	}).mouseout(function(){
		$(this).removeClass("over");
	});
});

function fn_cerrar(){
	$.unblockUI({ 
		onUnblock: function(){
			$("#div_oculto").html("");
		}
	}); 
};

function fn_mostrar_frm_agregar(){
	$("#div_oculto").load("ajax_form_agregar.php", function(){
		$.blockUI({
			message: $('#div_oculto'),
			css:{
				top: '20%'
			}
		}); 
	});
};

function fn_mostrar_frm_Organism(ide_per){
	$("#div_oculto").load("Organism_Subir_Archivo/Imagenes_Organism.php", {ide_per: ide_per}, function(){
		$.blockUI({
			message: $('#div_oculto'),
			css:{
				top: '20%',
                               left: '30%',
                                 height: '205px',
    width: '605px'
			}
		}); 
	});
};

function fn_InsertarImaMacro(ide_per){
	$("#div_oculto1").load("Organism_Subir_Archivo/Imagenes_Macro.php", {ide_per: ide_per}, function(){
		$.blockUI({
			message: $('#div_oculto1'),
			css:{
				top: '20%',
                                 left: '30%',
                                                                  height: '205px',
    width: '605px'
			}
		}); 
	});
};

function fn_InsertarImaMicro(ide_per){
	$("#div_oculto2").load("Organism_Subir_Archivo/Imagenes_Micro.php", {ide_per: ide_per}, function(){
		$.blockUI({
			message: $('#div_oculto2'),
			css:{
				top: '20%',
                                 left: '30%',
                                                                  height: '205px',
    width: '605px'
			}
		}); 
	});
};

function fn_InsertarImaGro(ide_per){
	$("#div_oculto3").load("Organism_Subir_Archivo/Imagenes_grow.php", {ide_per: ide_per}, function(){
		$.blockUI({
			message: $('#div_oculto3'),
			css:{
				top: '20%',
                                 left: '30%',
                                                                  height: '205px',
    width: '605px'
			}
		}); 
	});
};

function fn_InsertarImaMeta(ide_per){
	$("#div_oculto4").load("Organism_Subir_Archivo/Imagenes_Meta.php", {ide_per: ide_per}, function(){
		$.blockUI({
			message: $('#div_oculto4'),
			css:{
				top: '20%',
                                 left: '30%',
                                                                  height: '205px',
    width: '605px'
			}
		}); 
	});
};
function fn_InsertarImaBio(ide_per){
	$("#div_oculto5").load("Organism_Subir_Archivo/Imagenes_Bio.php", {ide_per: ide_per}, function(){
		$.blockUI({
			message: $('#div_oculto5'),
			css:{
				top: '20%',
                                 left: '30%',
                                                                  height: '205px',
    width: '605px'
			}
		}); 
	});
};
function fn_paginar(var_div, url){
	var div = $("#" + var_div);
	$(div).load(url);
	/*
	div.fadeOut("fast", function(){
		$(div).load(url, function(){
			$(div).fadeIn("fast");
		});
	});
	*/
}

function fn_eliminar(ide_per){
	var respuesta = confirm("Do you want to delete the record?");
	if (respuesta){
		$.ajax({
			url: 'ajax_eliminar.php',
			data: 'ide_per=' + ide_per,
			type: 'post',
			success: function(data){
				if(data!="")
					alert(data);
				fn_buscar()
			}
		});
	}
}

function fn_buscar(){
	var str = $("#frm_buscar").serialize();
	$.ajax({
		url: 'ajax_listar.php',
		type: 'get',
		data: str,
		success: function(data){
			$("#div_listar").html(data);
		}
	});
}
