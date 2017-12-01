<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Agni Solar</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="<?php echo asset_url(); ?>css/bootstrap.min.css"/>
        <link rel="stylesheet" href="<?php echo asset_url(); ?>css/style.css"/>
        <script>var BASE_URL = "<?php echo base_url(); ?>";</script>
        <script type="text/javascript" src="<?php echo asset_url(); ?>/js/jquery-1.11.1.js"></script>       
        <script type="text/javascript" src="<?php echo asset_url(); ?>js/bootstrap.js"></script>
        <script type="text/javascript" src="<?php echo asset_url(); ?>js/login.js"></script>

    </head>
    <body class="login-bg">
        <div class="container">
            <div class="row">
                <div>
                    <a href='<?php echo site_url('examples/customers_management')?>'>Customers</a> |
                    <a href='<?php echo site_url('examples/orders_management')?>'>Orders</a> |
                    <a href='<?php echo site_url('examples/products_management')?>'>Products</a> |
                    <a href='<?php echo site_url('examples/offices_management')?>'>Offices</a> | 
                    <a href='<?php echo site_url('examples/employees_management')?>'>Employees</a> |		 
                    <a href='<?php echo site_url('examples/film_management')?>'>Films</a> |
                    <a href='<?php echo site_url('examples/multigrids')?>'>Multigrid [BETA]</a>

                    <a href="<?php echo site_url('login/logout'); ?>" style="float:right"> Logout </a>

                </div>
                <div style='height:20px;'></div>  
                <form id="login-form" action="<?php echo base_url(); ?>users/add_user" method="post" role="form" style="display: block;">
                    <div class="form-group">
                        <label>Role id: </label>
                        <input type="text" name="role" id="role" tabindex="1" class="form-control" placeholder="Role Id" value="">
                        <?php echo form_error('role'); ?>
                    </div>
                    <div class="form-group">
                        <label>First Name: </label>
                        <input type="text" name="firstname" id="firstname" tabindex="1" class="form-control" placeholder="First Name" value="">
                        <?php echo form_error('firstname'); ?>
                    </div>
                    <div class="form-group">
                        <label>Last Name: </label>
                        <input type="text" name="lastname" id="lastname" tabindex="1" class="form-control" placeholder="Last Name" value="">
                        <?php echo form_error('lastname'); ?>
                    </div>
                    <div class="form-group">
                        <label>Email Address: </label>
                        <input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Email Address" value="">
                    </div> 
                    <div class="form-group">
                        <label>Mobile Number: </label>
                        <input type="text" name="mobile" id="mobile" tabindex="1" class="form-control" placeholder="Mobile Number" value="">
                        <?php echo form_error('mobile'); ?>
                    </div>
                    <div class="form-group">
                        <label>Password: </label>
                        <input type="text" name="password" id="password" tabindex="1" class="form-control" placeholder="Password" value="">
                        <?php echo form_error('password'); ?>
                    </div>
                    <div class="form-group">
                        <label>Address: </label>
                        <textarea placeholder="Enter Address Here.." rows="3" class="form-control" name="address" id="address"></textarea>
                    </div>
                    <div class="form-group">
                        <label>City: </label>
                        <input type="text" name="city" id="city" tabindex="1" class="form-control" placeholder="City" value="">
                    </div>
                    <div class="form-group">
                        <label>State: </label>
                        <input type="text" name="state" id="state" tabindex="1" class="form-control" placeholder="State" value="">
                    </div>
                    <div class="form-group">
                        <label>Region: </label>
                        <input type="text" name="region" id="region" tabindex="1" class="form-control" placeholder="Region" value="">
                    </div>
                    <div class="form-group">
                        <label>Pin-code: </label>
                        <input type="text" name="pincode" id="pincode" tabindex="1" class="form-control" placeholder="Pincode" value="">
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-6 col-sm-offset-3">
                                <input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Create User">
                            </div>
                        </div>
                    </div>
                </form>
            </div>               
        </div>
       
    </body>
</html>