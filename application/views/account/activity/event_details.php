<?php
if (is_array($event_details)) {

	foreach ($event_details as $detail) { ?>
		<div class="container event-container">
			<div class="photo" style="background-image: url(<?php echo base_url() . $detail['path']?>)">
				<img class="event-photo" src="<?php echo base_url() . $detail['path']?>"/>
			</div>

			<div class="event-details">

				<div class="event-date">
					<div class="event-date-day">
						<?php echo intval(date("d", strtotime($detail['date']))); ?>
					</div>

					<div class="event-date-month">
						<?php echo strtoupper(date("M", strtotime($detail['date']))); ?>
					</div>
				</div>

				<div class="event-info">
					<div class="event-title">
						<?php echo $detail['title']; ?>
					</div>

					<div class="event-row">
						<?php if (!empty($detail['address'])) { ?>
							<div class="event-address">
								<i class="fa fa-sm fa-map event-map-icon"
								   aria-hidden="true"></i><?php echo $detail['address']; ?>
							</div>
						<?php } ?>

						<?php if (!empty($detail['votes'])) { ?>
							<div class="event-income">
								<i class="fa fa-lg fa-users event-users-icon"
								   aria-hidden="true"></i><?php echo $detail['votes'] . ' Will be there.'; ?>
							</div>
						<?php } ?>
					</div>
				</div>

				<div class="btn"></div>
			</div>

			<div class="event-content">
				<?php if (!empty($detail['description'])) { ?>
					<div class="event-content-title">
						Description
					</div>
					<div class="event-content-description">
						<?php echo $detail['description']; ?>
					</div>
				<?php } ?>

				<?php if (!empty($gallery_photos)) { ?>
					<div class="event-gallery">
						<div class="event-gallery-title">
							Gallery
						</div>
						<div class="event-gallery-content">
							<?php foreach ($gallery_photos as $photo) { ?>
								<div class="event-gallery-content-photo">
									<img class="event-gallery-photo"
										 src="<?php base_url(); ?>assets/images/activity.jpg"/>
								</div>
							<?php } ?>
						</div>
					</div>
				<?php } ?>
				<hr />
			</div>


			<div class="event-invite-section">
				<div class="col-md-12" id="questions_content">

					<div class="section-title">
						Questions
					</div>

					<?php if(isset($questions) and is_array($questions) and !empty($questions)) { ?>

						<div class="section-title">
							Questions
						</div>

						<?php for($i=0;$i<=count($questions);$i++) { ?>

							<?php $number = $i+1;?>
							<div class="event-invite-section-content">
								<h2><?php echo $number.'. '.$questions[$i]['text'] ;?></h2>

								<?php if(isset($answers) and is_array($answers) and !empty($answers)) { ?>

									<?php for($i=0;$i<=count($answers);$i++){?>

										<?php $numberAnswer = $i+1;?>
										<h1><?php echo $numberAnswer.'. '.$answers[$i]['text'] ;?></h1>
										<div><i class="fa fa-plus-square" aria-hidden="true"></i><?php echo $answers[$i]['votes'];?></div>

									<?php } ?>
								<?php } ?>

							</div>

						<?php } ?>
					<?php } ?>

					<?php if($detail['user_id'] == $this->session->userdata('id')) { ?>
						<div id="add_question_button" class="input-group col-md-3 padding" style="margin-left:29px"><input class="input button_activity" type="submit" name="submit" value="Add Question"></div>
						<div id="add_question_form" class="event-invite-section-content" >
							<?php $this->load->view('account/activity/add_question_answer.php',array('id' => $detail['id'])); ?>
						</div>
					<?php } ?>
				</div>
			</div>


			<div class="event-invite-section">
				<div class="col-md-12">
					<div class="section-title">
						Invite Friends
					</div>
					<div class="event-invite-section-content">
						<?php $this->load->view('account/invitation/invitation', array('activity_id' => $detail['id'])); ?>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>

		</div>
	<?php }


}
?>
<script src="<?=base_url();?>app_assets/js/activity.js"></script>

