<?php

$data['PAGE'] = $this->uri->segment(1);

$this->load->view('account/header', $data);
$this->load->view('account/sidebar', $data);

if(is_array($event_details)){
	foreach($event_details as $detail){ ?>
	<div class="container">
		<div class="photo">
			<img class="event-photo" src="<?php echo base_url(); ?>assets/images/activity.jpg" />
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
					<?php if(!empty($detail['address'])) { ?>
					<div class="event-address">
						<i class="fa fa-lg fa-map event-map-icon" aria-hidden="true"></i><?php echo $detail['address']; ?>
					</div>
					<?php } ?>

					<?php if(!empty($detail['votes'])) { ?>
					<div class="event-income">
						<i class="fa fa-lg fa-users event-users-icon" aria-hidden="true"></i><?php echo $detail['votes'].' Will be there.'; ?>
					</div>
					<?php } ?>
				</div>
			</div>

			<div class="btn"></div>
		</div>

		<div class="event-content">
			<?php if(!empty($detail['description'])) { ?>
			<div class="event-content-title">
				Description
			</div>
			<div class="event-content-description">
				<?php echo $detail['description'];?>
			</div>
			<?php } ?>

			<?php if(!empty($gallery_photos)) { ?>
			<div class="event-gallery">
				<div class="event-gallery-title">
					Gallery
				</div>
				<div class="event-gallery-content">
					<?php foreach($gallery_photos as $photo){ ?>
					<div class="event-gallery-content-photo">
						<img class="event-gallery-photo" src="<?php base_url(); ?>assets/images/activity.jpg" />
					</div>
					<?php } ?>
				</div>
			</div>
			<?php } ?>
		</div>
	</div>
	<?php }
} 


$this->load->view('account/footer', $data);



