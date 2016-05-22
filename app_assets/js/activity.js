function check_activity_form() {
	var form_ok = true;
	if (!$('#activity_title').val().length) {
		$('#activity_title').parent().addClass('bad');
		form_ok = false;
	}
	else
		$('#activity_title').parent().removeClass('bad');

	return form_ok;
}

$(function () {
	$("#datepickerStart").datepicker({"dateFormat": 'dd/mm/yy'});
});

$(function () {
	$("#datepickerEnd").datepicker({"dateFormat": 'dd/mm/yy'});
});

$(document).ready(function () {
	$('#add_question_form').hide();
	$('#add_question_button').click(function () {
		$('#add_question_form').show();
		$('#add_answer').click(function () {
			$('#question_answer').append('<div class="input-group col-md-3 item">' +
				'<input class="input form-control" name="answer[]" id="" placeholder="Enter a answer..."/>' +
				'</div>');
		});
		$('#question_add').click(function () {
			$('#add_question_form').hide();
		})
	});
	$('#votes').click(function(){

	})
});

