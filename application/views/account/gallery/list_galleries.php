<link href="<?php echo base_url();?>app_assets/css/gallery.css" rel="stylesheet"/>

<div class="events">
    <div class="title">Gallery From Lasts Events</div>
    <div class="event-number"><?php echo count($activities);?></div>
    <hr>
</div>

<?php foreach($activities as $activity) { ?>
<div class=" margin_container">

    <div class="photo">
        <img width="70%" height="300px" src="<?php echo base_url().$activity['path']; ?>" />
    </div>

    <div class="details">

        <div class="event-info">
            <div class="event-title">
                <?php echo $activity['title']; ?>
            </div>

            <div class="event-row">

               <div class="event-income">
                   <i class="fa fa-lg fa-users event-users-icon" aria-hidden="true"></i><?php echo $activity['votes'].' Will be there.'; ?>
               </div>
            </div>
        </div>

        <div class="button_activity"><a><i class="fa fa-picture-o"></i>View Gallery</a></div>
    </div>
</div>
<?php } ?>

