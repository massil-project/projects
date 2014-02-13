/**
 * 
 */
	if(	$("#massil_medicalbundle_consultationedittype_examen_bilanGeneralActive").prop("value")==="false"){
		$("#div-bilan-general").hide();
		$("#btn-hide-bilan-general").hide();
	};
	$("#btn-show-bilan-general").click(function(){
		if(	$("#massil_medicalbundle_consultationedittype_examen_bilanGeneralActive").prop("value")==="false"){
			$("#massil_medicalbundle_consultationedittype_examen_bilanGeneralActive").prop("value","true");
			$("#div-bilan-general").show("blind",400);
			$("#btn-hide-bilan-general").show("blind",400);
		}
	});
	$("#btn-hide-bilan-general").click(function(){
		if(	$("#massil_medicalbundle_consultationedittype_examen_bilanGeneralActive").prop("value")==="true"){
			$("#massil_medicalbundle_consultationedittype_examen_bilanGeneralActive").prop("value","false");
			$("#div-bilan-general").hide("blind",400);
			$("#btn-hide-bilan-general").hide("blind",400);
		}
	});
	
	