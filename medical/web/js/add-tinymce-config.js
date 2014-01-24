/**
 * 
 */
$("#massil_medicalbundle_consultationtype_examen_clinique").val('<h2 style="text-align: center;"><strong><span style="text-decoration: underline; font-size: 12pt;">Examen Clinique&nbsp;</span></strong></h2><p>&nbsp;</p>');
$("#massil_medicalbundle_consultationtype_examen_paraclinique").val('<h2 style="text-align: center;"><strong><span style="text-decoration: underline; font-size: 12pt;">Examen Paraclinique&nbsp;</span></strong></h2><p>&nbsp;</p>');
$("#massil_medicalbundle_consultationtype_diagnostic").val('<h2 style="text-align: center;"><strong><span style="text-decoration: underline; font-size: 12pt;">Diagnostic&nbsp;</span></strong></h2><p>&nbsp;</p>');
$("#massil_medicalbundle_consultationtype_motif").val('<h2 style="text-align: center;"><strong><span style="text-decoration: underline; font-size: 12pt;">Motif de Consultation&nbsp;</span></strong></h2><p>&nbsp;</p>');
$("#massil_medicalbundle_consultationtype_ordonnance_contenu").val('<h2 style="text-align: center;"><strong><span style="text-decoration: underline; font-size: 12pt;">Ordonnance&nbsp;</span></strong></h2><p>&nbsp;</p>');
tinymce.init({ 
	selector: "textarea",
	language: "fr_FR",
	resize: false,
	height: 220,
	plugins:"fullscreen textcolor print table preview",
	tools: "inserttable",
	toolbar: "undo redo | bold italic underline | forecolor backcolor fontsizeselect |fullscreen | print preview",
	fontsize_formats: "8pt 10pt 12pt 14pt 18pt 24pt 36pt"
});