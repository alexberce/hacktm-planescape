
<?php if($date == 'end_date') {
    $class = 'ended';
} else {
    $class = 'upcoming';
}?>
<div class="all-<?php echo $class;?>-event" >
    <div class="ended-events-top">
        <a href="<?php base_url(); ?>dashboard?eventId=<?php echo $activity['id']?>"><img src="<?php echo  base_url() .$activity['path'] ; ?>"></a>
    </div>
    <div class="<?php echo $class;?>-events-bottom">
        <div class="<?php echo $class;?>-events-date">
            <div class="<?php echo $class;?>-events-date-day">
                <?php echo intval(date("d", strtotime($activity[$date]))); ?>
            </div>
            <div class="<?php echo $class;?>-events-date-month">
                <?php echo strtoupper(date("M", strtotime($activity[$date]))); ?>
            </div>
        </div>
        <div class="<?php echo $class;?>-events-info">
            <div class="<?php echo $class;?>-events-description">
                <?php echo $activity['title']; ?>
            </div>
            <div class="<?php echo $class;?>-events-votes">
                <i class="fa fa-lg fa-users" aria-hidden="true"></i>
                <?php echo $activity['votes'].' Will be there.'; ?>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>