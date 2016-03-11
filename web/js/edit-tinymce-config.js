/**
 * 
 */
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