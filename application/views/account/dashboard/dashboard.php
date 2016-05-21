<?php

if(isset($activities) and  is_array($activities)){
    foreach ($activities as $activity) {
        if ($activity['date'] >= date('Y-m-d')) {
            $upcomingEvents[] = $activity;
        } else {
            $endedEvents[] = $activity;
        }
    }
}

?>
    
    <?php if(!empty($upcomingEvents)){?>
    <div class="events">
        <div class="title">Upcoming events</div>
        <div class="event-number">1</div>
        <hr>
    </div>
    
    <div class="all-upcoming-events">
        <?php $upcomingEvents = isset($upcomingEvents) ? $upcomingEvents : array(); ?>
        <?php foreach ($upcomingEvents as $upcomingEvent) { ?>
            <div class="all-upcoming-event">
                <div class="upcoming-events-top">
                    <a href="<?php base_url(); ?>activity/showEventDetails?eventId=<?php echo $upcomingEvent['id']?>"><img src="<?php base_url(); ?>assets/images/activity.jpg"><a/>
                </div>
                <div class="upcoming-events-bottom">
                    <div class="upcoming-events-date">
                        <div class="upcoming-events-date-day">
                            <?php echo intval(date("d", strtotime($upcomingEvent['date']))); ?>
                        </div>
                        <div class="upcoming-events-date-month">
                            <?php echo strtoupper(date("M", strtotime($upcomingEvent['date']))); ?>
                        </div>
                    </div>
                    <div class="ended-events-info">
                        <div class="upcoming-events-description">
                            <?php echo $upcomingEvent['title']; ?>
                        </div>
                        <div class="upcoming-events-votes">
                            <i class="fa fa-lg fa-users" aria-hidden="true"></i>
                            <?php echo $upcomingEvent['votes'].' Will be there.'; ?>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        <?php } ?>
    </div>

    <!-- <div class="events">
        <div class="title">Your friends invited you to</div>
        <div class="event-number">2</div>
        <hr>
    </div> -->

    <!-- <div class="events">
        <div class="title">Your galleries</div>
        <div class="event-number">3</div>
        <hr>
    </div> -->

    <div class="events">
        <div class="title">Ended events</div>
        <div class="event-number-finished">4</div>
        <hr>
    </div>
    <?php }?>

    <?php if(!empty($endedEvents)){?>
    <div class="all-ended-events">
        <?php $endedEvents = isset($endedEvents) ? $endedEvents : array(); ?>
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
                            <?php echo strtoupper(date("M", strtotime($endedEvent['date']))); ?>
                        </div>
                    </div>
                    <div class="ended-events-info">
                        <div class="ended-events-description">
                            <?php echo $endedEvent['title']; ?>
                        </div>
                        <div class="ended-events-votes">
                            <i class="fa fa-lg fa-users" aria-hidden="true"></i>
                            <?php echo $endedEvent['votes'].' Will be there.'; ?>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        <?php } ?>
    </div>
    <?php }?>
<?php

