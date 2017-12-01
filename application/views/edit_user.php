<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
    <h4 class="modal-title custom_align" id="Heading">Edit Your Detail</h4>
</div>
<div class="modal-body">
    <form id="edit-form" action="<?php echo base_url(); ?>users/update_user/<?php echo $user_edit->id; ?>" method="post" role="form" style="display: block;">
        <div class="form-group">
            <label>Role id: </label>
            <input type="text" name="role" id="role" tabindex="1" class="form-control" placeholder="Role Id" value="<?php echo $user_edit->roleId; ?>">
            <?php echo form_error('role'); ?>
        </div>
        <div class="form-group">
            <label>First Name: </label>
            <input type="text" name="firstname" id="firstname" tabindex="1" class="form-control" placeholder="First Name" value="<?php echo $user_edit->fName; ?>">
            <?php echo form_error('firstname'); ?>
        </div>
        <div class="form-group">
            <label>Last Name: </label>
            <input type="text" name="lastname" id="lastname" tabindex="1" class="form-control" placeholder="Last Name" value="<?php echo $user_edit->lName; ?>">
            <?php echo form_error('lastname'); ?>
        </div>
        <div class="form-group">
            <label>Email Address: </label>
            <input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Email Address" value="<?php echo $user_edit->email; ?>">
        </div> 
        <div class="form-group">
            <label>Mobile Number: </label>
            <input type="text" name="mobile" id="mobile" tabindex="1" class="form-control" placeholder="Mobile Number" value="<?php echo $user_edit->mobileNumber; ?>">
            <?php echo form_error('mobile'); ?>
        </div>
        <div class="form-group">
            <label>Password: </label>
            <input type="text" name="password" id="password" tabindex="1" class="form-control" placeholder="Password" value="<?php echo $user_edit->password; ?>">
            <?php echo form_error('password'); ?>
        </div>
        <div class="form-group">
            <label>Address: </label>
            <textarea placeholder="Enter Address Here.." rows="3" class="form-control" name="address" id="address" value="<?php echo $user_edit->address; ?>"></textarea>
        </div>
        <div class="form-group">
            <label>City: </label>
            <input type="text" name="city" id="city" tabindex="1" class="form-control" placeholder="City" value="<?php echo $user_edit->city; ?>">
        </div>
        <div class="form-group">
            <label>State: </label>
            <input type="text" name="state" id="state" tabindex="1" class="form-control" placeholder="State" value="<?php echo $user_edit->state; ?>">
        </div>
        <div class="form-group">
            <label>Region: </label>
            <input type="text" name="region" id="region" tabindex="1" class="form-control" placeholder="Region" value="<?php echo $user_edit->region; ?>">
        </div>
        <div class="form-group">
            <label>Pin-code: </label>
            <input type="text" name="pincode" id="pincode" tabindex="1" class="form-control" placeholder="Pincode" value="<?php echo $user_edit->pincode; ?>">
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3">
                    <input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Update">
                </div>
            </div>
        </div>
    </form>
</div>
<div class="modal-footer ">
    
</div>     