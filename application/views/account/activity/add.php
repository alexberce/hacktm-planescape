<link rel="stylesheet" href="<?= base_url() ?>app_assets/css/activity.css"/>
<form method="post" action="<?=base_url()?>activity/add" name="add_activity_form" id="add_activity_form" enctype="multipart/form-data" onsubmit="return check_activity_form()">
	<div class="col-md-12 form-group">
		<div class="col-md-12 padding item form-group">
			<input class="input form-control" name="title" id="activity_title" placeholder="Title..." type="text"/>
		</div>

		<div class="col-md-12 padding">
			<textarea class="input form-control" name="description" id="activity_description"
					  placeholder="Enter activity description..."></textarea>
		</div>
		<div class="col-md-12 padding">
			<input type="file" name="files" id="file">
		</div>
		<div class="col-md-12 padding">
			<input placeholder="Date..." class="input form-control" name="date" type="text" id="datepicker">
		</div>
		<div class="col-md-12 padding">
			<input id="activity_add" class="input btn btn-primary" name="submit" type="submit" value="Save" onclick="check_activity_form()" />
		</div>
	</div>
</form>
<script src="<?= base_url() ?>app_assets/js/activity.js"></script>