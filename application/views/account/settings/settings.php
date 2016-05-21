<link rel="stylesheet" href="<?= base_url() ?>app_assets/css/activity.css"/>
<form action="<?=base_url()?>settings/index" name="settings_form" id="settings_form" onsubmit="return check_settings_form()">
	<div class="col-md-12 form-group">
		<div class="col-md-12 padding item form-group">
			<input class="input form-control" name="title" id="settings_first_name" placeholder="First Name" type="text"/>
		</div>

		<div class="col-md-12 padding item form-group">
			<input class="input form-control" name="title" id="settings_last_name" placeholder="Last Name" type="text"/>
		</div>

		<div class="col-md-12 padding">
			<textarea class="input form-control" name="description" id="activity_description"
					  placeholder="Enter activity description..."></textarea>
		</div>

		<div class="col-md-12 padding">
			<input id="activity_add" class="input btn btn-primary" name="submit" type="submit" value="Save" onclick="check_activity_form" />
		</div>
	</div>
</form>
<script src="<?= base_url() ?>app_assets/js/activity.js"></script>