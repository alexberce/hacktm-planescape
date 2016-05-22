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
	$( "#datepickerStart" ).datepicker({"dateFormat": 'dd/mm/yy'});
});

$(function() {
	$( "#datepickerEnd" ).datepicker({"dateFormat": 'dd/mm/yy'});
});

$(document).ready(function(){
	$('#add_question_form').hide();
	$('#add_question_button').click(function(){
		$('#add_question_form').show();
		$('#add_answer').click(function(){
			$('#question_answer').append('<div class="input-group col-md-3 item padding">'+
				'<input class="input form-control" name="answer2" id="answer2" placeholder="Enter a answer..."/>'+
				'</div>');
		});
		$('#question_add').click(function(){
			var question = $('#question').val();
			var answer1 = $('#answer1').val();
			var answer2 = $('#answer2').val();
			$('#add_question_form').hide();
			$('#questions_content').append('<h1>'+question+'</h1>'+'<div class="event-invite-section-content">'+'<h1>'+answer1+'<div><i class="fa fa-plus-square" aria-hidden="true">0</i></div>'+'</h1>'+'</div>');

		})
	})
});

