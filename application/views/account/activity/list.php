
<div class="col-md-12">
    <?php $activities =  isset($activities) ? $activities : array(); ?>
    <?php foreach($activities as $activity) {?>
    <div class="col-md-2 activity_border">
        <img src="<?=base_url().$activity['path'];?>" height="150" width="100%"/>
        <div><?php echo $activity['date'];?></div>
        <div class="padding "><?php echo $activity['title'];?></div>
    </div>
    <?php } ?>
</div>
