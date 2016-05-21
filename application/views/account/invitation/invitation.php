<form method="post" action="<?=base_url();?>invitation/add" name="invitation_form" id="invitation_form">
    <div class="col-md-12 form-group">
        <div class="input-group col-md-12 padding">
            <input class="input form-control" name="email" id="invitation" placeholder="Email..." type="text"/>
        </div>
        <div class="input-group col-md-12 padding">
            <input class="input btn btn-primary" name="submit" type="submit" value="Send" id="invitation" />
        </div>
    </div>
</form>
