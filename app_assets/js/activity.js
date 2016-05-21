function check_activity_form(){
	var form_ok = true;
	if (!$('#activity_title').val().length) {
		$('#activity_title').parent().addClass('bad');
		form_ok = false;
	}
	else
		$('#activity_title').parent().removeClass('bad');

	return form_ok;
}

$(function() {
	$( "#datepickerStart" ).datepicker();
});

$(function() {
	$( "#datepickerEnd" ).datepicker();
});