<?php
// $data = array();

$data['PAGE'] = $this->uri->segment(1);

$this->load->view('account/header', $data);
$this->load->view('account/sidebar', $data);
$this->load->view('account/' . $view, $data);

// echo '<pre>'; print_r(json_decode($activities,));

?>

<?php

foreach ($activities as $activity) {
	if ($activity['date'] >= date('Y-m-d')) {
		$upcomingEvents[] = $activity;
	} else {
		$endedEvents[] = $activity;
	}
}

?>


	<div class="events">
		<div class="title">Upcoming events</div>
		<div class="event-number">1</div>
		<hr>
	</div>

	<div class="events">
		<div class="title">Your friends invited you to</div>
		<div class="event-number">2</div>
		<hr>
	</div>


	<div class="events">
		<div class="title">Your galleries</div>
		<div class="event-number">3</div>
		<hr>
	</div>


	<div class="events">
		<div class="title">Ended events</div>
		<div class="event-number-finished">4</div>
		<hr>
	</div>
	<div class="all-ended-events">
		<?php foreach ($endedEvents as $endedEvent) { ?>
			<div class="all-ended-event">
				<div class="ended-events-top">
					<img src="<?php base_url(); ?>assets/images/activity.jpg">
				</div>
				<div class="ended-events-bottom">
					<div class="ended-events-date">
						<div class="ended-events-date-day">
							<?php echo intval(date("d", strtotime($endedEvent['date']))); ?>
						</div>
						<div class="ended-events-date-month">
							<?php echo date("M", strtotime($endedEvent['date'])); ?>
						</div>
					</div>
					<div class="ended-events-description">
						<?php echo $endedEvent['title']; ?>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		<?php } ?>
	</div>
<?php


$this->load->view('account/footer', $data);