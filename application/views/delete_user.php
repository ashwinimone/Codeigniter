<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
    <h4 class="modal-title custom_align" id="Heading">Delete this entry</h4>
</div>
<div class="modal-body">
    <div class="alert alert-danger"><span class="glyphicon glyphicon-warning-sign"></span> Are you sure you want to delete this Record?</div>
</div>
<div class="modal-footer ">
    <form id="delete-form" action="<?php echo base_url(); ?>users/delete_user_yes/<?php echo $user_id; ?>" method="post" role="form" style="display: block;">   
        <div class="col-sm-6">
            <input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-yes" value="Yes">
        </div>
        <div class="col-sm-6">
            <input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-no" value="No" data-dismiss="modal">
        </div>           
    </form>
</div>