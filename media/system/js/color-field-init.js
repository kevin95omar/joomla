jQuery(document).ready(function ($){
	$('select.simplecolors').simplecolors();

	$(document).on('subform-row-add', function(event, row){
		$(row).find('select.simplecolors').simplecolors();
	});
});
