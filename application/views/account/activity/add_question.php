<form method="post" action="<?=base_url()?>activity/question" name="add_question_form" id="add_question_form" enctype="multipart/form-data"">
    <div class="col-md-12 form-group" >
        <div class="input-group col-md-12 item padding">
			<textarea class="input form-control" name="question" id="question"
                      placeholder="Enter a question..."></textarea>
        </div>
        <div class="input-group col-md-12 padding">
            <input id="question_add" class="input button_activity" name="submit" type="submit" value="Save" />
        </div>
    </div>
</form>
