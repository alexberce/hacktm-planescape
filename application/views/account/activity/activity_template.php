<div class="all-ended-event">
    <div class="ended-events-top">
        <img src="<?php echo  base_url() .$activity['path'] ; ?>">
    </div>
    <div class="ended-events-bottom">
        <div class="ended-events-date">
            <div class="ended-events-date-day">
                <?php echo intval(date("d", strtotime($activity['end_date']))); ?>
            </div>
            <div class="ended-events-date-month">
                <?php echo strtoupper(date("M", strtotime($activity['end_date']))); ?>
            </div>
        </div>
        <div class="ended-events-info">
            <div class="ended-events-description">
                <?php echo $activity['title']; ?>
            </div>
            <div class="ended-events-votes">
                <i class="fa fa-lg fa-users" aria-hidden="true"></i>
                <?php echo $activity['votes'].' Will be there.'; ?>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>