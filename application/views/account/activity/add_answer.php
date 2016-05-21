<form method="post" action="<?=base_url()?>activity/answer" name="add_answer_form" id="add_answer_form" enctype="multipart/form-data"">
<div class="col-md-12 form-group" >
    <div class="input-group col-md-12 item padding">
			<textarea class="input form-control" name="answer" id="answer"
                      placeholder="Enter a answer..."></textarea>
    </div>
    <div class="input-group col-md-12 padding">
        <input id="answer_add" class="input button_activity" name="submit" type="submit" value="Save" />
    </div>
</div>
</form>